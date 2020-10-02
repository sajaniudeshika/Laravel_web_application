
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>

<body>
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
<form method="post" action="{{url('/hi')}}" enctype="multipart/form-data">

    <table class="table table" text-align= "center">
        @foreach($details as $view_datas)
        <tr>
            <th>Design Type</th>
            <td>
                {{$view_datas->title}}
            </td>
        </tr>
        <tr>
            <th>Size</th>
            <td>
                {{$view_datas->size}}
            </td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td>
                {{$view_datas->quantity}}
            </td>
        </tr>
        <tr>
            <th>Meterial</th>
            <td>
                {{$view_datas->metirial}}
            </td>
        </tr>
        <tr>
            <th>Colour</th>
            <td>
                {{$view_datas->color}}
            </td>
        </tr>
        <tr>
            <th>description</th>
            <td>
                {{$view_datas->desctiption}}
            </td>
        </tr>
        <tr>
            <th>image</th>
            <td>
                <img src = "/storage/{{$view_datas->image}}" alt="Image" style="width:500px; height:500px;">
               <!-- {{$view_datas->image}}-->
            </td>
        </tr>
        @endforeach
    </table>
</form>
</div>
<div class="col-md-3">
</div>
</div>
</body>

</html>