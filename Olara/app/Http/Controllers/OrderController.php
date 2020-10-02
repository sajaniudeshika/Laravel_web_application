<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrderDetails(){
        $orders=Order::get();
      //  $categories =json_decode(json_encode($categories));
       return view('admin.orders.view_order_details')->with(compact('orders'));
    }
}
