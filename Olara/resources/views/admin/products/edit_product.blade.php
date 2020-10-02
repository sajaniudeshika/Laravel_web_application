
@extends('layouts.adminLayout.admin_desing')
@section('content')


<div class="product">
<div class="container">
    
    
    
    <div class="editProduct">



        
            <h2>Edit Product</h2>

                @if(Session::has('flash_message_error'))
                    <div class="alert alert-error alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!! session('flash_message_error') !!} </strong>
                    </div>
                @endif

                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{!! session('flash_message_success') !!} </strong>
                    </div>
                @endif


        

        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/edit-product/'.$productDetails->id) }}" name="edit
            _product" id="edit_product" novalidate="novalidate" >
            {{csrf_field()}}

            <div class="form-group">
                    <label for="category_id"> Select Category</label>
                    <select name="category_id"   placeholder="select category" class="form-control" required >
                        <!--<option value="">Main Category</option>-->
                            <?php echo $categories_dropdown; ?>
                    </select>
                    
            </div>

            <div class="form-group">
                <label for="pro_date"> Date</label>
                <input type="date" name="pro_date" id="pro_date" class="form-control" placeholder="Enter date"  value="{{$productDetails-> pro_date}}" required > 
                
            </div>



            <div class="pro_name">
                <label for="category_name"> Product Name</label>
                <input type="text" name="pro_name" id="pro_name" class="form-control" placeholder="Enter Name" value="{{$productDetails->pro_name}}" required>
                
            </div>


           <div class="form-group">
                <label for="pro_size"> Product Size</label>
                <input type="text" name="pro_size" id="pro_size" class="form-control" placeholder="Enter size" value="{{$productDetails->pro_size}}" required>
                
           </div>


           
            <div class="form-group">
                <label for="pro_code"> Product Code</label>
                <input type="text" name="pro_code" id="pro_code" class="form-control" placeholder="Enter code" value="{{$productDetails->pro_code}}" required>
                
             </div>

            <div class="form-group">
                <label for="pro_details"> Description</label>
               <textarea name="pro_details" id="pro_details" class="form-control" placeholder="Enter details" required>{{$productDetails->pro_name}}</textarea>
               
            </div>


            <div class="form-group">
                <label for="pro_color"> Product Color</label>
                <input type="text" name="pro_color" id="pro_color" class="form-control" placeholder="Enter color" value="{{$productDetails->pro_color}}" required> 
                
           </div>


            <div class="form-group">
                <label for="pro_price"> Product Price</label>
                <input type="text" name="pro_price" id="pro_price" class="form-control" placeholder="Enter price" value="{{$productDetails->pro_price}}" required>  
                
            </div>


            <div class="form-group">    
                <label> Image</label><br>
                
                <input type="file" name="image" id="image">
                <input type="hidden" name="current_image" value="{{ $productDetails->image }}">

                <!-- display image-->

                @if(!empty($productDetails->image))
                <img style="width:100px;"  src="{{ asset('/images/backend_images/products/small/'.$productDetails->image) }}">
                <a id="delete_row" href="{{ url('/admin/delete-product-image/'.$productDetails->id) }}" class="btn btn-danger btn-mini">  Delete Image </a> 
                @endif               
                
                <!-- hidden file to send name of image file-->
                <br>
                
            </div>
                
            
            <input type="submit" value="Edit Product" class="btn btn-primary">





     </form>
    </div>

</div>
</div>

@endsection