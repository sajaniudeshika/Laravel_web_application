<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Order;
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Support\Facades\DB;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Category;
use App\Product;


class ProductsController extends Controller
{
    public function addProduct(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;


           if(empty($data['category_id'])){
                 return redirect()->back()->with('flash_message_error','Category is missing');
           }

           $product = new Product;



           $this->validate($request,[
            'category_id' => 'required|string|max:255',
            'pro_date' => 'required|string|max:255',
            'pro_name' => 'required|string|max:255',
            'pro_size' => 'required|string|max:255',
            'pro_code' => 'required|string|max:255',
            'pro_color' => 'required|string|max:255',
            'pro_price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'image' => 'required|image',
            
           ]);



           $product->category_id = $data['category_id'];
           $product->pro_date = $data['pro_date'];
           $product->pro_name = $data['pro_name'];
           $product->pro_size = $data['pro_size'];
           $product->pro_code = $data['pro_code'];


           //products details can be empty

           if(!empty($data['pro_details'])){
            $product->pro_details = $data['pro_details'];
           }
           else{
            $product->pro_details = '';
           }

          // $product->pro_details = $data['pro_details'];
           $product->pro_color = $data['pro_color'];
           $product->pro_price = $data['pro_price'];
         
           //upload image
           if($request->hasFile('image')){
              $image_tmp = Input::file('image');
                   
               
                if($image_tmp -> isValid()){
                        $extension = $image_tmp->getClientOriginalExtension(); 
                        $filename = rand(111,99999).'.'.$extension;
                        $large_image_path = 'images/backend_images/products/large/'.$filename;
                        $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                        $small_image_path = 'images/backend_images/products/small/'.$filename;

                        //resize the images
                        Image::make($image_tmp)->save($large_image_path);
                        Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                        Image::make($image_tmp)->resize(200,200)->save($small_image_path);

                        //store name in product table
                        $product->image = $filename;
                }

           }

           $product->save();
           //return redirect()->back()->with('flash_message_success','Category updated Successfully');
           return redirect('/admin/view-products')->with('flash_message_success','category added successfully');

        }

       
       $categories =Category::where(['parent_id'=>0])->get();
       $categories_dropdown ="<option value='' selected disabled>Select</option>";
       foreach($categories as $cat){
           $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name."</option>";
       }


       
       
        return view('admin.products.add_product')->with(compact('categories_dropdown'));
    }

    public function viewProducts(){
        $products =Product::get();
        $products =json_decode(json_encode($products));
        foreach($products as $key => $val){
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
        
        //echo "<pre>";print_r($products); die;
        return view('admin.products.view_products')->with(compact('products'));
    }

    public function editProduct(Request $request, $id=null){
        
        //edit data
            if($request->isMethod('post')){
                $data = $request->all();
                //echo "<pre>"; print_r($data);die;


                //upload image
           if($request->hasFile('image')){
            $image_tmp = Input::file('image');
                 
             
              if($image_tmp -> isValid()){
                      $extension = $image_tmp->getClientOriginalExtension(); 
                      $filename = rand(111,99999).'.'.$extension;
                      $large_image_path = 'images/backend_images/products/large/'.$filename;
                      $medium_image_path = 'images/backend_images/products/medium/'.$filename;
                      $small_image_path = 'images/backend_images/products/small/'.$filename;

                      //resize the images
                      Image::make($image_tmp)->save($large_image_path);
                      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                      Image::make($image_tmp)->resize(200,200)->save($small_image_path);
              }

            } 
            
            else{
                $filename = $data['current_image'];
            }
            
                product::where(['id'=>$id])->update(['category_id'=>$data['category_id'],'pro_date'=>$data['pro_date'],'pro_name'=>$data['pro_name'],
                'pro_size'=>$data['pro_size'], 'pro_code'=>$data['pro_code'],'pro_details'=>$data['pro_details'] ,'pro_color'=>$data['pro_color'],
                'pro_price'=>$data['pro_price'],'image'=>$filename]);
                
                return redirect('/admin/view-products')->with('flash_message_success','product updated Successfully');
            }
           
            //get relavent column data
        $productDetails = Product::where(['id'=>$id])->first();
            //selection box
        $categories =Category::where(['parent_id'=>0])->get();
        $categories_dropdown ="<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){

                if($cat->id==$productDetails->category_id){
                    $selected ="selected";
                }
                else{
                    $selected = "";
                }

            $categories_dropdown .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
        }

        return view('admin.products.edit_product')->with(compact('productDetails','categories_dropdown'));
    }
    
    
    public function deleteProductImage($id = null){
            Product::where(['id'=>$id])->update(['image'=>'']);
            return redirect()->back()->with('flash_message_success','product Image has been delete successfully!');
    }

    public function deleteProduct($id = null){
        if(!empty($id)){
            Product::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','product deleted Successfilly');
        }
    }

   



    //function for view data in homepage
    //double extra one

    public function viewHomeDeco(){

        $products =Product::get();
        $products =json_decode(json_encode($products));
        foreach($products as $key => $val){
    
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
        
         //echo "<pre>";print_r($products); die;
        return view('admin.products.homeNew')->with(compact('products'));
    }


    public function viewindex(){

        $products =Product::get();
        $products =json_decode(json_encode($products));
        foreach($products as $key => $val){
    
            $category_name = Category::where(['id'=>$val->category_id])->first();
            $products[$key]->category_name = $category_name->name;
        }
        
       //  echo "<pre>";print_r($products); die;
        return view('shop.index')->with(compact('products'));
    }



    
    //function for search operation 02

    public function search(Request $request){

        $this->validate($request, [
            'query' =>'required|min:3',
        ]);


        
        
        $query = $request->input('query');

        $products = Product::where('pro_name','like',"%$query%")->get();

        return view('shop.index')->with('products',$products);
    }



//------------------------------------------------------------------from cp products------------------------------------------


public function getIndex()
{
    $products = Product::all();
    return view('shop.index',compact('products'));
    //return view('shop.index',['cproducts' => $cproducts]);
}
public function getAddToCart(Request $request,product $product){
    $isproduct = product::find($product->id);

    if(count($isproduct)>0){
       
       if(Session::has('cart')){
           $oldCart = Session::get('cart');
           $oldCart->add($product,$product->id);
           $request->session()->put('oldCart',$oldCart);
       }else{
            $cart = new Cart($oldCart);
            $cart->add($product,$product->id);
            $request->session()->put('cart',$cart);
       }
        
    //--------------------------------not sure-------------------------------
        return redirect()->route('product.index');
    }
    
} 

public function getAddToCartFromView(Request $request,product $product){
    $isproduct = Product::find($product->id);

    if(count($isproduct)>0){
       
       if(Session::has('cart')){
           $oldCart = Session::get('cart');
           $oldCart->add($product,$product->id);
           $request->session()->put('oldCart',$oldCart);
       }else{
            $cart = new Cart($oldCart);
            $cart->add($product,$product->id);
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

public function deleteCartItem($product){
    DB::table('carts')->where('id','=',$product)->delete();
    return back();
}

public function getCart(){
    // if (!Session::has('cart')){
    //    return view('shop.shopping_cart',['cproducts' => null]);
    //    //return "No Items in cart!!!!!";

    // }else{
        $authID = auth()->user()->id;
        $dbReadQuery = DB::table('carts')->where('cus_id', '=', $authID);
        $oldCart = $dbReadQuery->get();
        $totalAmoount = $dbReadQuery->sum('subtotal');
        $itemQty = $dbReadQuery->count();
        //return view('shop.shopping_cart',compact('totalAmoount','oldCart','itemQty'))->with(totalAmoount,$totalAmoount);

        return view('shop.shopping_cart')->with('totalAmoount',$totalAmoount)->with('oldCart',$oldCart)->with('itemQty',$itemQty);
       
       
       
     





    //     //return view('shop.shopping_cart',compact('oldCart'));
    // }
    
    
}




//---------------------------not sure p capi or s
public function viewItem(Product $product){
    
    return view("shop.more",compact('product'));
    
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
    return redirect()->route('product.index')->with('success', 'Successfully purchased products!!!!');
}

    

    
}
