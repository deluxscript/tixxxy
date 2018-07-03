<?php

namespace app\Http\Controllers\API;

use App\Models\Attendee;
use Illuminate\Http\Request;

class AttendeesApiController extends ApiBaseController
{

    public function index()
    {
        return Attendee::all();
    }

    public function show($id)
    {
        return Attendee::findOrFail($id);
    }

    public function update()
    {
        return Attendee::findOrFail($id);
    }

    // public function update(Request $request, $id)
    // {
    //     // get all the data for our user
    //     $Attendees = Attendee::findOrFail($id);
    //     $AttendeesData = array_filter($request->all());
    //     // if (isset($userData['password']))
    //     //     $userData['password'] = bcrypt($userData['password']);
    //     // update that user
    //     $Attendees->fill($AttendeesData);
    //     $Attendees->save();
    //     // redirect back to the users list
    //     return redirect('attendee');
    // }

    // /**
    //  * @param Request $request
    //  * @return mixed
    //  */
    // public function index(Request $request)
    // {
    //     return Attendee::scope($this->account_id)->paginate($request->get('per_page', 25));
    // }


    // /**
    //  * @param Request $request
    //  * @param $attendee_id
    //  * @return mixed
    //  */
    // public function show(Request $request, $attendee_id)
    // {
    //     if ($attendee_id) {
    //         return Attendee::scope($this->account_id)->find($attendee_id);
    //     }

    //     return response('Attendee Not Found', 404);
    // }

    // public function store(Request $request)
    // {
    // }

    // public function update(Request $request)
    // {
    // }

    // public function destroy(Request $request)
    // {
    // }


}