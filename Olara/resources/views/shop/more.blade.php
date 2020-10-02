@section('title')
    Laravel Shoping Cart
@endsection
<!DOCTYPE html>
<html>

<head>
	
	<title>ADD TO CART</title>
	<!--Add CSS Files-->
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet"  type="text/css" href="/css/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700,900" rel="stylesheet">	
</head>
	
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark">
      <a class="navbar-brand" href="/index">Olara Garment</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
          
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Add products">
        </form>
      </div>
    </nav>
	<br>
	<br>			
	<div id="content">
		<div class="container">
			
			
			<div class="col-md-9">
				<div class="row" id="productarea">
					<div class="col-sm-6">
						<div id="imgMain">
							<div id="productSlideShow" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<center>
											<img src="{{ asset('/images/backend_images/products/large/'.$product->image) }}" class="img-responsive" >
                     
											<!--<img src="{{$product->image}}" alt="" class="img-responsive">-->
										</center>
									</div>
								</div>
								<a href="#productSlideShow" class="left carousel-control" data-slide="prev">
									
								</a>
								<a href="#productSlideShow" class="right carousel-control" data-slide="next">
									
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="box">
							<h2 class="text-center"></h2>
							
							<hr>
							<div>
							<form action="/add-to-cart/view/bulkadd" method="post" class="form-horizontal">
							{{ csrf_field()}}
								<div class="form-group">
									<input type="hidden" name="productId" value="{{$product->id}}">
									<input type="hidden" name="unitprice" value="{{$product->pro_price}}">
								</div>
								<div class="form-group">
									<label for="" class="col-md-5 control-label">
										Quantity
									</label>
									<div class="col-md-7">
                                    <tr>
                                <td><input type="text" class="form-control" name="quantity" placeholder="Enter the quantity"></td>
                            </tr>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-5 control-label">Color</label>
									<div class="col-md-7">
										<select name="color" id="" class="form-control">
                                            <option value="">Select color</option>
											<option> Black </option>
											<option> Red </option>
											<option> white </option>
											<option> Blue </option>
											<option> pink </option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-5 control-label">size</label>
									<div class="col-md-7">
										<select name="size" id="" class="form-control">
                                            <option value="">Select size</option>
											<option> Small </option>
											<option> Medium </option>
											<option> Large </option>
                                            <option> XS </option>
											<option> XL </option>
                                            <option> XXL </option>
											
										</select>
									</div>
								</div>
								<p class="price text-right">Rs {{$product->pro_price}}.00</p>
								<p class="text-center buttons">
									<button class="btn btn-info" type="submit" name="addCart">
										<i class="fa fa-shopping-cart"></i> Add to Cart
										
									</button>
									
								</p>
							</form>
							</div>
						</div>
						<div class="row" id="thumbs">
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
<!--						One Image Side-->
							<div class="col-xs-3">
								<a href="#" class="thumb">
									<img src="admin/resources/img/product_img/" alt="" class="img-responsive">
								</a>
							</div>
<!--							One Image Side End-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<!--Add JavaScript Files-->
	<script src="resources/js/jquery.min.js"></script>	
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
