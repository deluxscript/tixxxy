<?php

namespace App\Jobs;

use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;
use PDF;

class GenerateTicket extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    protected $reference;
    protected $order_reference;
    protected $attendee_reference_index;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($reference)
    {
        Log::info("Generating ticket: #" . $reference);
        $this->reference = $reference;
        $this->order_reference = explode("-", $reference)[0];
        if (strpos($reference, "-")) {
            $this->attendee_reference_index = explode("-", $reference)[1];
        }
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $file_name = $this->reference;
        $file_path = public_path(config('attendize.event_pdf_tickets_path')) . '/' . $file_name;
        $file_with_ext = $file_path . ".pdf";

        if (file_exists($file_with_ext)) {
            Log::info("Use ticket from cache: " . $file_with_ext);
            return;
        }

        $order = Order::where('order_reference', $this->order_reference)->first();
        Log::info($order);
        $event = $order->event;

        $query = $order->attendees();
        if ($this->isAttendeeTicket()) {
            $query = $query->where('reference_index', '=', $this->attendee_reference_index);
        }
        $attendees = $query->get();

        $image_path = $event->organiser->full_logo_path;
        if ($event->images->first() != null) {
            $image_path = $event->images()->first()->image_path;
        }

        $data = [
            'order'     => $order,
            'event'     => $event,
            'attendees' => $attendees,
            'css'       => file_get_contents(public_path('assets/stylesheet/ticket.css')),
            'image'     => base64_encode(file_get_contents(public_path($image_path))),
        ];

        if ($attendees[0]['ticket']['title'] === 'Regular') {
            PDF::setOutputMode('F'); // force to file
            PDF::html('Public.ViewEvent.Partials.PDFTicket', $data, $file_path);
        }
        else {

            // ---------------------------MAILCHIMP VERIFICATION.........................//
		    $apiKey = 'f1ebc988258b73133c9c1beeb237928f-us12';
            $listID = 'a95120ca52';
            $your_email = $attendees[0]['order']['email'];

		    // MailChimp API URL
            $memberID = md5(strtolower($your_email));
            $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
            $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
            // member information
            $arr = array('email_address' => $your_email, 'status' => '');
            $json = json_encode($arr);
            // send a HTTP POST request with curl
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            $result = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            $json = json_decode($result);
            // store the status message based on response code
            if ($json->{'status'} == 'subscribed') {
            
            PDF::setOutputMode('F'); // force to file
            PDF::html('Public.ViewEvent.Partials.PDF2Ticket', $data, $file_path);

            }
        }
        // dd($attendees[0]['ticket']['title']);
        // dd($attendees[0]->toArray());
        // dd($attendees[0]['email']);
        // dd($attendees[0]['order']['email']);
        

        Log::info("Ticket generated!");
    }


    private function isAttendeeTicket()
    {
        return ($this->attendee_reference_index != null);
    }
}
