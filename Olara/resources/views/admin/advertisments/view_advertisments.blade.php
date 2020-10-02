@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="viewAdvertistment">

    

    
    <h1>Advertistments</h1>
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
                <th>Advetistment Id</th>
                <th>Title</th>              
                <th>Discription</th>
                <th>Image</th>
                <th>Action</th>
               
            </tr>
        </thead>


        <tbody>
            @foreach($addvertisments as $add)
            <tr>
                <td>{{ $add->add_id }}</td>
                <td>{{ $add->add_title }}</td>
                <td>{{ $add->add_discription }}</td>
                
                <td>
                    @if(!empty($add->image))
                    <img src="{{ asset('images/backend_images/advertistments/small/'.$add->image) }}" style="width:100px; hight:100px;" ></td>
                    @endif
                

                <td class="center"><a href="{{ url('/admin/edit-adds/'.$add->add_id) }}" class=" btn btn-primary btn-mini">Edit</a>

                                   <a id="delete_row" href="{{ url('/admin/delete-add/'.$add->add_id) }}" class="btn btn-danger btn-mini">Delete</a></td>
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Advetistment Id</th>
                <th>Title</th>              
                <th>Discription</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>






    




</div>



@endsection 