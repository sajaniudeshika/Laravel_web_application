<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{

   
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r($data); die; 
            $category =new category;


            $this->validate($request,[
                'category_name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
                'url' => 'required|string|max:255', 
            
               ]);



            $category->name =$data['category_name'];
            $category->description =$data['description'];
            $category->url =$data['url'];
            $category->save();
            return redirect('/admin/view-categories')->with('flash_message_success','category added successfully');


        }
        return view('admin.categories.add_category');
    }

    public function viewCategories(){
            $categories=Category::get();
          //  $categories =json_decode(json_encode($categories));
        return view('admin.categories.view_categories')->with(compact('categories'));
    }

    //function for edit category
   public function editCategory(Request $request, $id=null){
       
        if($request->isMethod('post')){
            $data = $request->all();
            //echo "<pre>"; print_r($data); die;

            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],'description'=>$data['description'],'url'=>$data['url']]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category updated Successfully');
        }

        $categoryDetails = Category::where(['id'=>$id])->first();
        return view('admin.categories.edit_category')->with(compact('categoryDetails'));
    }

    //function for delete category
    public function deleteCategory($id = null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Successfilly');
        }
    }

    
    
}
