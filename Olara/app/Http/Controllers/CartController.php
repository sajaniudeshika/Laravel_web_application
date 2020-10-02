<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function bulkAdd(Request $request){

        // $request->validate([
        //     'quantity' => 'required|interger',
        //     'size' => 'required',
        //     'color' => 'required'
        // ]);
        

        $qty = request('quantity');
        $unitPrice = request('unitprice');

        $userId = auth()->user()->id;
        $newOrder = new Cart();
        $newOrder->product_id = request('productId');
        $newOrder->cus_id = $userId;
        $newOrder->qty = $qty;
        $newOrder->color = request('color');
        $newOrder->size = request('size');
        $newOrder->unitprice = $unitPrice;
        $newOrder->subtotal = $unitPrice * $qty;
        
        $newOrder->save();
        return redirect('/shopping_cart');
    }


    //view order details on admin panel
    public function viewOrderDetailsNew(){
        $orders=Cart::get();
      //  $categories =json_decode(json_encode($categories));
       return view('admin.orders.view_order_details')->with(compact('orders'));
    }

}
