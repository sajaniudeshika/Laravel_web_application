@extends('layouts.adminLayout.admin_desing')
@section('content')



<div class="Editcategory">
<div class="container">
       
    
    
    <div class="addCateegory">



        
            <h2>Edit Category</h2>
        

        
            <form method="post" action="{{ url('/admin/edit-category/'.$categoryDetails->id) }}" name="add
            _category" id="add_category" novalidate="novalidate" >
            {{csrf_field()}}


           


            <div class="form-group">
                <label for="category_name"> Category name</label>
                <input type="text" name="category_name" id="category_name" value="{{ $categoryDetails->name }}" class="form-control" placeholder="Enter category Name" required> 
                
            </div>
                
            <div class="form-group">
                <label for="description"> Description</label>
                <textarea name="description" id="description" class="form-control" placeholder="Enter description" required> {{ $categoryDetails->description }}</textarea>
            </div>
                
                
            <div class="form-group">
                <label for="url"> URL</label>
                <input type="text" name="url" id="url" value="{{ $categoryDetails->url }}" class="form-control" placeholder="Enter url" required> 
            </div>
                
                
                
                <input type="submit" value="Edit Category" class="btn btn-success">
               





     </form>
    </div>

</div>
</div>


@endsection