@extends('layout')
@section('mainContent')

@if(session()->has('success'))
              <div class="center" style="text-align: center;">
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            </button>
                        <strong></strong> {{ session()->get('success') }}
                    </div>
                </div>
            @endif


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Add Design</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<br><br>
    <div class="container">
        <div class="text-center">
            <h1>Add Design</h1>

            <br><br>

            <div class="row">
                <div class="col-md-12">
                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>

                    @endforeach

                    <form method="post" action="{{url('/hi')}}" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <table class="table table-light">
                            <input id="invisible_id" name="id" type="hidden" value="">
                            <tr>
                                <th>Design Type</th>
                                <td>
                                   <select name="title"   placeholder="select size" class="form-control" required>
                                   <option value="">Select Design</option>
                                  <option value="t_shirt">t_shirt</option>
                                
                                  <option value="Shirt">Shirt</option>
                                  
                               </select></td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>
                                   <select name="size"   placeholder="select size" class="form-control" required>
                                   <option value="">Select size</option>
                                  <option value="Small">Small</option>
                                  <option value="Medium">Medium</option>
                                  <option value="Large">Large</option>
                                  
                               </select></td>
                                        
                            </tr>
                            <tr>
                                <th>Quantity</th>
                                <td><input type="number" min="0.00" max="1000000.00" step="0.001" class="form-control" name="quantity" placeholder="Enter the quantity here..."></td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td><input type="text" class="form-control" name="color" placeholder="Enter the Color here..."></td>
                            </tr>
                            <tr>
                                <th>Meterial</th>
                                <td><input type="text" class="form-control" name="material" placeholder="Enter the Meterial here..."></td>
                            </tr>
                            <tr>
                                <th>Order Date</th>
                                <td><input type="date" class="form-control" name="date" placeholder="Enter the Order Date here..."></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    <textarea class="form-control" name="description" rows="5" placeholder="Enter the Description here..."></textarea>

                                </td>
                            </tr>
                            <tr>
                                <div class="form-group">
                                    <table class="table">
                                        <tr>
                                            <td width="40%" align="right"><label>Select File for Upload</label></td>
                                            <td width="30"><input type="file" name="image" /></td>

                                        </tr>
                                        
                                        <tr>
                                            <td width="40%" align="right"></td>
                                            <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                                            <td width="30%" align="left"></td>
                                        </tr>
                                        
                                    </table>
                                    <div class="">
                        <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                                </div>

                            </tr>


                        </table>

                        <br><br>

                        

                    </form>

                </div>
            </div>
            <br>
            <br>
@endsection
        

