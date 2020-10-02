
@extends('layouts.adminLayout.admin_desing')
@section('content')


<div class="category">

<div class="container">
    
    
    
    <div class="addCateegory">



        
            <h2>Add Category</h2>



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

<!-------------------------------------------------- --->



        
            <form  method="post" action="{{ url('/admin/add-category')}}" name="add
            _category" id="add_category" novalidate="novalidate" >
            {{csrf_field()}}


            <div class="form-group">

                <label for="category_name"> Category name</label>
                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name" required> 
                
            </div>


            <div class="form-group">

                <label for="description"> Description</label>
                <textarea name="description" id="description"  class="form-control" placeholder="Enter Description" required></textarea> 
           
            </div>


            <div class="form-group">
                <label for="url"> URL</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="Enter URL" required>
                
            </div> 

                <input type="submit" value="Add Category" class="btn btn-primary">
              





     </form>
    </div>

</div>
</div>

@endsection