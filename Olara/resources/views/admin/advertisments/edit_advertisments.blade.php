@extends('layouts.adminLayout.admin_desing')
@section('content')



<div class="EditAdvetistment">
<div class="container">
       
   
    
    <div class="addadvertisment">



        
            <h2>Edit Advertisments</h2>
        

        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/edit-adds/'.$addDetails->add_id) }}" name="add
            _advertisment" id="add_advertisment" novalidate="novalidate" >
            {{csrf_field()}}


           


            <div class="form-group">
                <label for="add_title"> Advetistment Name</label>
                <input type="text" name="add_title" id="add_title" value="{{ $addDetails->add_title }}" class="form-control" placeholder="Enter category Name" required> 
                
            </div>
                
            <div class="form-group">
                <label for="description"> Description</label>
                <textarea name="add_discription" id="add_discription" class="form-control" placeholder="Enter description" required> {{ $addDetails->add_discription }}</textarea>
            </div>


            <div class="form-group">    
                <label> Image</label><br>
                
                <input type="file" name="image" id="image">
                <input type="hidden" name="current_image" value="{{ $addDetails->image }}">

                <!-- display image-->

                @if(!empty($addDetails->image))
                <img style="width:100px;"  src="{{ asset('images/backend_images/advertistments/small/'.$addDetails->image) }}">
                <a id="delete_row" href="{{ url('/admin/delete-add-image/'.$addDetails->add_id) }}" class="btn btn-danger btn-mini">  Delete Image </a> 
                @endif               
                
                <!-- hidden file to send name of image file-->
                <br>
                
            </div>
                
           
                
            
                
                
                
                <input type="submit" value="Edit Advertisment" class="btn btn-success">
               


                


     </form>
    </div>

</div>
</div>


@endsection