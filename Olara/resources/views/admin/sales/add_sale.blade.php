
@extends('layouts.adminLayout.admin_desing')
@section('content')


<div class="Sales">

<div class="container">
    
    
    
    <div class="addsales">



        
            <h2>Add Sales</h2>



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

                <div class="alert alert-danger" role="alert">
                        {{$error}}
                </div>

                @endforeach




        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/add-sales')}}" name="add
            _sales" id="add_sales" novalidate="novalidate" >
            {{csrf_field()}}
            
           


            <div class="form-group">
                <label for="Prices"> Prices</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter Sales Price" required>
                
            </div> 

            <div class="form-group">

                <label for="details"> Details</label>
                <textarea name="sales_product_details" id="sales_product_details"  class="form-control" placeholder="Enter Description" required></textarea> 
           
            </div>

            <div class="form-group">    
                <label> Image</label>
                <input type="file" name="sales_img" id="sales_img"> <br><br><br>

            </div>

            

            


                <input type="submit" value="Add Sales" class="btn btn-primary">
              





     </form>
    </div>

</div>
</div>

@endsection