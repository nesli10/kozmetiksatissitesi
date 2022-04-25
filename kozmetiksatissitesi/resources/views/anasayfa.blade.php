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
	<title>anasayfa</title>

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

	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->

	@include("shared.header")
	<!-- home page slider -->
	<div style="background-color: black;text-align:end;">
		<h4 style="margin-right: 55px;color:white;">{{round($data['main']['temp'])}} &#8451;
		</h4>
	</div>
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">büyük indirim!</p>
								<h1></h1>
								<div class="hero-btns">
									<a href="{{route("yuzlist")}}" class="boxed-btn">ürüne git</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">büyük indirim!</p>
								<h1></h1>
								<div class="hero-btns">
									<a href="{{route("dudaklist")}}" class="boxed-btn">ürüne git</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">büyük indirim!</p>
								<h1></h1>
								<div class="hero-btns">
									<a href="{{route("parfumlist")}}" class="boxed-btn">ürüne git</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Çok</span> Satanlar</h3>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($products as $value)
				@if($value->enable=="y")
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<img style="height:261px; width: 261px;" src="{{ asset('assets/fotolar') }}/{{ $value->foto }}" alt="">
						</div>
						<h3>{{$value->urun_adi}}</h3>
						<p class="product-price"><span></span>{{ $value->fiyat }}TL </p>
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
		</div>
	</div>
	</div>
	<!-- end product section -->

	<!-- shop banner -->
	<section class="shop-banner">
		<div class="container">
			<h3>büyük kampanya! <br> <span class="orange-text"></span></h3>
			<div class="sale-percent"><span>indirim! <br> makyaj ürünlerinde</span>50% <span></span></div>
			<a href="{{route("makyajlist")}}" class="cart-btn btn-lg">satın al</a>
		</div>
	</section>
	<!-- end shop banner -->


	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/lykd_analogo_2.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/marka_logo_beaulis.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/marka_logo_benri.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/marka_logo_bee_beauty.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/marka_logo_eklips.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="https://www.gratis.com/file/general/marka_logo_thebalm.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
	@include("shared.footer")


	<!-- jquery -->
	<script src="{{asset("/")}}assets/js/jquery-1.11.3.min.js"></script>
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