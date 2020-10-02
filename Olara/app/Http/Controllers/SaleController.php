<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Sale;

class SaleController extends Controller
{
    public function addSales(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
           // echo "<pre>"; print_r($data); die; 
            $sales = new Sale;

            
            $this->validate($request,[
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                'sales_product_details' => 'required|string|max:255',
                'sales_img' => 'required|image',
                
               ]);



            $sales->price =$data['price'];
            $sales->sales_product_details =$data['sales_product_details'];
            
            
            //upload image
           if($request->hasFile('sales_img')){
            $image_tmp = Input::file('sales_img');
                 
             
              if($image_tmp -> isValid()){
                      $extension = $image_tmp->getClientOriginalExtension(); 
                      $filename = rand(111,99999).'.'.$extension;
                      $large_image_path = 'images/backend_images/sales/large/'.$filename;
                      $medium_image_path = 'images/backend_images/sales/medium/'.$filename;
                      $small_image_path = 'images/backend_images/sales/small/'.$filename;

                      //resize the images
                      Image::make($image_tmp)->save($large_image_path);
                      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                      Image::make($image_tmp)->resize(200,200)->save($small_image_path);

                      //store name in product table
                      $sales->sales_img = $filename;
              }

         }

         
         $sales->save();
            return redirect('/admin/view-sales')->with('flash_message_success','Sales Item added successfully');


        }
        return view('admin.sales.add_sale');
    }

    public function viewSales(){
        $sales=Sale::get();
      //  $categories =json_decode(json_encode($categories));
        return view('admin.sales.view_sales')->with(compact('sales'));
    }

    public function editSales(Request $request, $id=null){
       
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;



             //upload image
           if($request->hasFile('sales_img')){
            $image_tmp = Input::file('sales_img');
                 
             
              if($image_tmp -> isValid()){
                      $extension = $image_tmp->getClientOriginalExtension(); 
                      $filename = rand(111,99999).'.'.$extension;
                      $large_image_path = 'images/backend_images/sales/large/'.$filename;
                      $medium_image_path = 'images/backend_images/sales/medium/'.$filename;
                      $small_image_path = 'images/backend_images/sales/small/'.$filename;

                      //resize the images
                      Image::make($image_tmp)->save($large_image_path);
                      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                      Image::make($image_tmp)->resize(200,200)->save($small_image_path);
              }

            } 
            
            else{
                $filename = $data['current_image'];
            }



            Sale::where(['sales_id'=>$id])->update(['price'=>$data['price'],'sales_product_details'=>$data['sales_product_details' ],'sales_img'=>$filename]);
            return redirect('/admin/view-sales')->with('flash_message_success','sales updated Successfully');
        }

        $salesDetails = Sale::where(['sales_id'=>$id])->first();
        return view('admin.sales.edit_sales')->with(compact('salesDetails'));
    }

    public function deleteSalesImage($id = null){
        Sale::where(['sales_id'=>$id])->update(['sales_img'=>'']);
        return redirect()->back()->with('flash_message_success','Advertistment has been delete successfully!');
    }

    public function deleteSale($id = null){
        if(!empty($id)){
            Sale::where(['sales_id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Sales deleted Successfully');
        }
    }

}
