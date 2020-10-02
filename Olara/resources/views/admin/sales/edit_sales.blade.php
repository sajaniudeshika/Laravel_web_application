@extends('layouts.adminLayout.admin_desing')
@section('content')



<div class="EditSalesDetails">
<div class="container">
       
    <h1> This is edit Sales balde</h1>
    
    <div class="editSales">



        
            <h2>Edit Sales</h2>
        

        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/edit-sales/'.$salesDetails->sales_id) }}" name="edit
            _sales" id="edit_sales" novalidate="novalidate" >
            {{csrf_field()}}


           


            <div class="form-group">
                <label for="Price"> price</label>
                <input type="text" name="price" id="price" value="{{ $salesDetails->price }}" class="form-control" placeholder="Enter sales details" required> 
                
            </div>
                
            <div class="form-group">
                <label for="description"> Description</label>
                <textarea name="sales_product_details" id="sales_product_details" class="form-control" placeholder="Enter description" required> {{ $salesDetails->sales_product_details }}</textarea>
            </div>


            <div class="form-group">    
                <label> Image</label><br>
                
                <input type="file" name="sales_img" id="sales_img">
                <input type="hidden" name="current_image" value="{{ $salesDetails->sales_img}}">

                <!-- display image-->

                @if(!empty($salesDetails->sales_img))
                <img style="width:100px;"  src="{{ asset('images/backend_images/sales/small/'.$salesDetails->sales_img) }}">
                <a id="delete_row" href="{{ url('/admin/delete-sales-image/'.$salesDetails->sales_id) }}" class="btn btn-danger btn-mini">  Delete Image </a> 
                @endif           
                
                <!-- hidden file to send name of image file-->
                <br>
                
            </div>
                
           
                
            
                
                
                
                <input type="submit" value="edit sales" class="btn btn-success">
               





     </form>
    </div>

</div>
</div>


@endsection