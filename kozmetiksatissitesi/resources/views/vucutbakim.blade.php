<!DOCTYPE html>
<html lang="en">
@php
use Illuminate\Support\Facades\Cache;
$loginedUser = Cache::get("loginedUser", "");
@endphp

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>vücut bakım</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset("/")}}assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset("/")}}assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/responsive.css">

</head>

<body>

	@include("shared.header")

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>el,ayak,vücut bakım ürünleri</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row product-lists">
				@foreach ($products as $value)
				@if($value->enable=="y")
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<img style="height:261px; width: 261px;" src="{{ asset('assets/fotolar') }}/{{ $value->foto }}" alt="">
						</div>
						<h3>{{ $value->urun_adi }}</h3>
						<p class="product-price"><span></span> {{ $value->fiyat }}TL</p>
						@if($value->stok_adedi>0)
						<form action="{{url('addToChart')}}" method="POST">
							@csrf
							<input type="hidden" value="{{$value->id}}" name="urun_id">
							@if(!empty($loginedUser))
							<input type="hidden" value="{{$loginedUser->user_id}}" name="user_id">
							@endif
							<button type="submit" class="btn btn-dark" name="addToChart"><i class="fas fa-shopping-cart"></i> sepete
								ekle</button>
						</form>
						@endif
						@if($value->stok_adedi==0)
						<button type="button" class="btn btn-dark" name="addToChart" disabled><i class="fas fa-shopping-cart"></i> ürün tükendi
						</button>
						@endif
						<div style="margin-top: 5px;">
							<form action="{{url('urunDetay')}}" method="GET">
								@csrf
								<input type="hidden" value="{{$value->id}}" name="urun_id">
								<button type="submit" class="btn btn-dark" name="incele"><i class="fas fa-shopping-cart"></i>incele</button>
							</form>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->

	@include("shared.footer")

	<!-- jquery -->
	<script src="{{asset("/")}}/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="{{asset("/")}}assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="{{asset("/")}}assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="{{asset("/")}}assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="{{asset("/")}}assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="{{asset("/")}}assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="{{asset("/")}}assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="{{asset("/")}}assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="{{asset("/")}}assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="{{asset("/")}}assets/js/main.js"></script>

</body>

</html>