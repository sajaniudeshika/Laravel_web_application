<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use Image;
use App\Addvertisment;


class AddvertismentController extends Controller
{
    public function addAdds(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r($data); die; 
            $adds =new Addvertisment;


            $this->validate($request,[
                'add_title' => 'required|string|max:255',
                'add_discription' => 'required|string|max:255',
                'image' => 'required|image',
                
               ]);


            $adds->add_title =$data['add_title'];
            $adds->add_discription =$data['add_discription'];
            
            //upload image
           if($request->hasFile('image')){
            $image_tmp = Input::file('image');
                 
             
              if($image_tmp -> isValid()){
                      $extension = $image_tmp->getClientOriginalExtension(); 
                      $filename = rand(111,99999).'.'.$extension;
                      $large_image_path = 'images/backend_images/advertistments/large/'.$filename;
                      $medium_image_path = 'images/backend_images/advertistments/medium/'.$filename;
                      $small_image_path = 'images/backend_images/advertistments/small/'.$filename;

                      //resize the images
                      Image::make($image_tmp)->save($large_image_path);
                      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                      Image::make($image_tmp)->resize(200,200)->save($small_image_path);

                      //store name in product table
                      $adds->image = $filename;
              }

         }


            $adds->save();
            return redirect('/admin/view-adds')->with('flash_message_success','category added successfully');


        }
       return view('admin.advertisments.add_advertisment');
    }

    public function viewAdds(){
        $addvertisments=Addvertisment::get();
      //  $categories =json_decode(json_encode($categories));
        return view('admin.advertisments.view_advertisments')->with(compact('addvertisments'));
    }

    public function editAdds(Request $request, $id=null){
       
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            

             //upload image
           if($request->hasFile('image')){
            $image_tmp = Input::file('image');
                 
             
              if($image_tmp -> isValid()){
                      $extension = $image_tmp->getClientOriginalExtension(); 
                      $filename = rand(111,99999).'.'.$extension;
                      $large_image_path = 'images/backend_images/advertistments/large/'.$filename;
                      $medium_image_path = 'images/backend_images/advertistments/medium/'.$filename;
                      $small_image_path = 'images/backend_images/advertistments/small/'.$filename;

                      //resize the images
                      Image::make($image_tmp)->save($large_image_path);
                      Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                      Image::make($image_tmp)->resize(200,200)->save($small_image_path);
              }

            } 
            
            else{
                $filename = $data['current_image'];
            }



            Addvertisment::where(['add_id'=>$id])->update(['add_title'=>$data['add_title'],'add_discription'=>$data['add_discription' ],'image'=>$filename]);
            return redirect('/admin/view-adds')->with('flash_message_success','Advertisment updated Successfully');
        }

        $addDetails = Addvertisment::where(['add_id'=>$id])->first();
        return view('admin.advertisments.edit_advertisments')->with(compact('addDetails'));
    }



    
    public function deleteAddImage($id = null){
        Addvertisment::where(['add_id'=>$id])->update(['image'=>'']);
        return redirect()->back()->with('flash_message_success','Advertistment has been delete successfully!');
}

public function deleteAdd($id = null){
    if(!empty($id)){
        Addvertisment::where(['add_id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','Advertisment deleted Successfilly');
    }
}


}
