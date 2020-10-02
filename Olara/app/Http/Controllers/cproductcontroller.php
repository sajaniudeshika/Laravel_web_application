<?php

namespace App\Http\Controllers;
use App\Cart;
use App\cproduct;
use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;

class cproductcontroller extends Controller
{
    public function getIndex()
    {
        $cproducts = cproduct::all();
        return view('shop.index',compact('cproducts'));
        //return view('shop.index',['cproducts' => $cproducts]);
    }
    public function getAddToCart(Request $request,cproduct $cproduct){
        $isCproduct = cproduct::find($cproduct->id);

        if(count($isCproduct)>0){
           
           if(Session::has('cart')){
               $oldCart = Session::get('cart');
               $oldCart->add($cproduct,$cproduct->id);
               $request->session()->put('oldCart',$oldCart);
           }else{
                $cart = new Cart($oldCart);
                $cart->add($cproduct,$cproduct->id);
                $request->session()->put('cart',$cart);
           }
            
        
            return redirect()->route('cproduct.index');
        }
        
    } 

public function getAddToCartFromView(Request $request,cproduct $cproduct){
        $isCproduct = cproduct::find($cproduct->id);

        if(count($isCproduct)>0){
           
           if(Session::has('cart')){
               $oldCart = Session::get('cart');
               $oldCart->add($cproduct,$cproduct->id);
               $request->session()->put('oldCart',$oldCart);
           }else{
                $cart = new Cart($oldCart);
                $cart->add($cproduct,$cproduct->id);
                $request->session()->put('cart',$cart);
           }
            
        
            return redirect()->route('shop.shoppingCart');
        }
        
    } 
    public function getReduceByOne($item){
        $oldCart = Session::get('cart');
        $countSize = $oldCart->items[$item]['qty'];
        $unitPrice = $oldCart->items[$item]['price']  / $countSize;
        $oldCart->items[$item]['qty'] = $countSize - 1;
        $oldCart->items[$item]['price'] = $oldCart->items[$item]['qty'] * $unitPrice;
        $oldCart->totalPrice = $oldCart->totalPrice - $oldCart->items[$item]['price'];
        return back();
    }
    public function getRemoveItem($item){
        $oldCart = Session::get('cart');
        $oldCart->items[$item]['qty'] = 0;
        $oldCart->items[$item]['price'] = 0;

        return back();
    }
    public function getCart(){
        // if (!Session::has('cart')){
        //    return view('shop.shopping_cart',['cproducts' => null]);
        //    //return "No Items in cart!!!!!";

        // }else{
            $authID = auth()->user()->id;
            $oldCart = DB::table('carts')->where('cus_id', '=', $authID)->get();
           return view('shop.shopping_cart')->with('oldCart',$oldCart);
        //    // return dd($oldCart);
        //     //return view('shop.shopping_cart',compact('oldCart'));
        // }
        
        
    }

    public function viewItem(cproduct $cproduct){
        
        return view("shop.more",compact('cproduct'));
        
    }
    
    public function getCheckout(){
        if (!Session::has('cart')){
            return view('shop.shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }
    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart); 

        Stripe::setApiKey('sk_test_ZAWI5IdvTtQ4qyDvvSPsACfa00PoKfvrI4');
        try{
            $charge = Charge::create(array(
                
                    "amount" => $cart->totalPrice * 100,
                    "currency" => "usd",
                    "source" => $request->input('stripeToken'), // obtained with Stripe.js
                    "description" => "Test charge"
                  
            ));
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $charge->id;

            Auth::user()->orders()->save($order);
        }catch(\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        Session::foget('cart');
        return redirect()->route('cproduct.index')->with('success', 'Successfully purchased cproducts!!!!');
    }

    
}


