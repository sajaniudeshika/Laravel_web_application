@extends('layouts.adminLayout.admin_desing')
@section('content')





<div class="category">    
 


    

    
    <h1>categories</h1> 
    
    

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
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Category Url</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->url }}</td>
                <td class="center"><a href="{{ url('/admin/edit-category/'.$category->id) }}" class=" btn btn-primary btn-mini">Edit</a> 
                                   <a id="delete_row" href="{{ url('/admin/delete-category/'.$category->id) }}" class="btn btn-danger btn-mini">Delete</a></td>
                
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
            <th>Category ID</th>
                <th>Category Name</th>
                <th>Category Url</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>











</div>



@endsection 