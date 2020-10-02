@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="viewsales">

    

    
    <h1>Sales</h1>
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
                <th>Sales Id</th>
                <th>price</th>              
                <th>Details</th>
                <th>Image</th>
                <th>Action</th>
               
            </tr>
        </thead>


        <tbody>
            @foreach($sales as $sales)
            <tr>
                <td>{{ $sales->sales_id }}</td>
                <td>{{ $sales->price }}</td>
                <td>{{ $sales->sales_product_details }}</td>
                
                <td>
                    @if(!empty($sales->sales_img))
                    <img src="{{ asset('images/backend_images/sales/small/'.$sales->sales_img) }}" style="width:100px; hight:100px;" ></td>
                    @endif
                

                <td class="center"><a href="{{ url('/admin/edit-sales/'.$sales->sales_id) }}" class=" btn btn-primary btn-mini">Edit</a>

                                   <a id="delete_row" href="{{ url('/admin/delete-sale/'.$sales->sales_id) }}" class="btn btn-danger btn-mini">Delete</a>
                                   
                                   <a id="delete_row" href="/email" class="btn btn-primary btn-mini">Inform Users</a>
                                   
                                   </td>
                
                                   

            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Sales Id</th>
                <th>price</th>              
                <th>Details</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>











</div>



@endsection 