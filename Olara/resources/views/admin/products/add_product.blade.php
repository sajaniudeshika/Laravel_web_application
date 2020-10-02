
@extends('layouts.adminLayout.admin_desing')
@section('content')


<div class="product">
<div class="container">
    
    
    
    <div class="addProduct">



        
            <h2>Add Product Details</h2>

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


        
                     <!--print form validation error messages -->

                @foreach($errors->all() as $error)

                    <div class="alert alert-error" role="alert">
                            {{$error}}
                    </div>

                @endforeach



        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/add-product')}}" name="add
            _product" id="add_product" novalidate="novalidate" >
            {{csrf_field()}}

            <div class="form-group">
                    <label for="category_id"> Select Category</label>
                    <select name="category_id"   placeholder="select category" class="form-control" required>
                        <!--<option value="">Main Category</option>-->
                            <?php echo $categories_dropdown; ?>
                    </select>
                    
            </div>


            <div class="form-group">
                <label for="pro_date"> Date</label>
                <input type="date" name="pro_date" id="pro_date" class="form-control" placeholder="Enter date" required > 
                
            </div>



            <div class="pro_name">
                <label for="category_name"> Product Name</label>
                <input type="text" name="pro_name" id="pro_name" class="form-control" placeholder="Enter Name" required>
                
            </div>


            <div class="form-group">
                <label for="pro_size"> Product Size</label>
              <!--  <input type="text" name="pro_size" id="pro_size" class="form-control" placeholder="Enter size" required> -->
                <select name="pro_size"   placeholder="select size" class="form-control" placeholder="Enter size" required>
                    <option value="">Select Size</option>
                    <option value="extra small">Extra Small</option>
                    <option value="small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Learge">Large</option>
                    <option value="Extre large">Extra Large</option>
                </select>
                
           </div>


            <div class="form-group">
                <label for="pro_code"> Product Code</label>
                <input type="text" name="pro_code" id="pro_code" class="form-control" placeholder="Enter code" required>
                
             </div>

            <div class="form-group">
                <label for="pro_details"> Description</label>
               <textarea name="pro_details" id="pro_details" class="form-control" placeholder="Enter details" required></textarea>
               
            </div>


            <div class="form-group">
                <label for="pro_color"> Product Color</label>
                <input type="text" name="pro_color" id="pro_color" class="form-control" placeholder="Enter color" required> 
                
           </div>


            <div class="form-group">
                <label for="pro_price"> Product Price</label>
                <input type="text" name="pro_price" id="pro_price" class="form-control" placeholder="Enter price" required>  
                
            </div>


            <div class="form-group">    
                <label for="image"> Image</label>
                <input type="file" name="image" id="image"> <br><br><br>

            </div>

                <input type="submit" value="Add product" class="btn btn-primary">
               





     </form>
    </div>

</div>
</div>

@endsection