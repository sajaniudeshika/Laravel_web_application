
@extends('layouts.adminLayout.admin_desing')
@section('content')


<div class="advertistments">

<div class="container">
    
    
    
    <div class="addAdd">



        
            <h2>Add Advertistments</h2>



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



        
            <form enctype="multipart/form-data" method="post" action="{{ url('/admin/add-adds')}}" name="add
            _adds" id="add_adds" novalidate="novalidate" >
            {{csrf_field()}}
            
            


            <div class="form-group">
                <label for="title"> Title</label>
                <input type="text" name="add_title" id="add_title" class="form-control" placeholder="Enter Advertistment Title" required>
                
            </div> 


            <div class="form-group">

                <label for="description"> Description</label>
                <textarea name="add_discription" id="add_discription"  class="form-control" placeholder="Enter Description" required></textarea> 
           
            </div>

            <div class="form-group">    
                <label> Image</label>
                <input type="file" name="image" id="image"> <br><br><br>

            </div>


                <input type="submit" value="Add Category" class="btn btn-primary">
              





     </form>
    </div>

</div>
</div>

@endsection