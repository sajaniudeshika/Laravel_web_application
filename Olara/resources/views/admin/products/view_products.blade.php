@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="viewProducts">

    

    
    <h1>Products</h1>
   <!-- <form action="{{ url('/search-products') }}" method="post" > 
    {{ csrf_field() }}
     <input type="text" placeholder="search product"  name="product"/>
    <button type="submit" style="border:0px; height:33px; margin-left: 3px">Go</button>
    </form> --> 



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


    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Product Id</th>
                <th>Product Add Date</th>
               <!-- <th>Category Id</th>-->
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Product Size</th>
                <th>Product code</th>
                <th>Product Details</th>
                <th>Product Color</th>
                <th>Product Price</th>
                <th>Image</th>
                <th>Actions</th>

                <!--<th>Image</th>-->
                
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->pro_date }}</td>
                <!--<td>{{ $product->category_id }}</td>-->
                <td>{{ $product->category_name }}</td>
                <td>{{ $product->pro_name }}</td>
                <td>{{ $product->pro_size }}</td>
                <td>{{ $product->pro_code }}</td>
                <td>{{ $product->pro_details }}</td>
                <td>{{ $product->pro_color }}</td>
                <td>{{ $product->pro_price }}</td>
                <td>
                    @if(!empty($product->image))
                    <img src="{{ asset('/images/backend_images/products/small/'.$product->image) }}" style="width:100px; hight:100px;" ></td>
                    @endif
                

                <td class="center"><a href="{{ url('/admin/edit-product/'.$product->id) }}" class=" btn btn-primary btn-mini">Edit</a>

                                   <a id="delete_row" href="{{ url('/admin/delete-product/'.$product->id) }}" class="btn btn-danger btn-mini">Delete</a></td>
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
        <tr>
                <th>Product Id</th>
                <th>Product Add Date</th>
                <!-- <th>Category Id</th>-->
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Product Size</th>
                <th>Product code</th>
                <th>Product Details</th>
                <th>Product Color</th>
                <th>Product Price</th>
                <th>Image</th>
                <th>Actions</th>
                <!--<th>Image</th>-->
                
                
                
            </tr>
        </tfoot>
    </table>











</div>



@endsection 