<?php

namespace app\Http\Controllers\API;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersApiController extends ApiBaseController
{

    public function index()
    {
        return Order::all();
    }

    public function show($id)
    {
        return Order::findOrFail($id);
    }
}