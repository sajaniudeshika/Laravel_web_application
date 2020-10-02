<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\addDesign;
use Illuminate\Support\Facades\DB;

class addDesignController extends Controller
{
  
    public function create()
    {
        return view('report');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $title = $request['title'];
        $image = $request->file('image');
        $new_image = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path("images"), $new_image);
       
        $Description = $request['description'];
        $Size = $request['size'];
        $quantity = $request['quantity'];
        $color = $request['color'];
        $material = $request['material'];
        $date = $request['date'];
    
       
        $addDesign = new addDesign();

        $addDesign->title = $title;
        $addDesign->image = $image;
        $addDesign->desctiption = $Description;
        $addDesign->size = $Size;
        $addDesign->quantity= $quantity;
        $addDesign->color = $color;
        $addDesign->metirial = $material;
        $addDesign->orderDate = $date;
      

        $addDesign->save();

        return redirect()->back()->with('success','Add Design successfully');

        return redirect ('/h');

        $data = addDesign::all();

        $details = DB::select(DB::raw("SELECT * FROM add_designs WHERE (title = '$title') AND (desctiption = '$Description')"));

        return view('view', compact('details'));

    }
            public function show(){
            $de = DB::table('report')->select('title','description','image')->get();

            return view('show')->with('de', $de);
        
    }


    public function viewDesignDetails(){
        $designs=addDesign::get();
      //  $categories =json_decode(json_encode($categories));
        return view('admin.design.view_design_details')->with(compact('designs'));
    }


}
