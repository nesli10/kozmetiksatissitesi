<!DOCTYPE html>
@php 
	use Illuminate\Support\Facades\Cache;
	$loginedUser = Cache::get("loginedUser", "");
@endphp
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

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

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>satın al</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<form action="{{url('siparisOlustur')}}" method="POST">
		<div class="checkout-section mt-150 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="checkout-accordion-wrap">
							<div class="accordion" id="accordionExample">
								<div class="card single-accordion">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												kullanıcı bilgileri
											</button>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<div class="billing-address-form">
												<p><input type="text" placeholder="ad"></p>
												<p><input type="text" placeholder="soyad"></p>
												<p><input type="email" placeholder="Email"></p>
												<p><input type="tel" placeholder="telefon"></p>
											</div>
										</div>
									</div>
								</div>
								<div class="card single-accordion">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												teslimat adresi

											</button>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
											<div class="shipping-address-form">
												<div class="billing-address-form">
													<p><textarea name="adres" id="bill" cols="30" rows="10" placeholder="adres"></textarea></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card single-accordion">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												kart bilgileri
											</button>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											<div class="card-details">
												<div class="billing-address-form">
													<p><input type="text" placeholder="kart no"></p>
													<p><input type="text" placeholder="tarih"></p>
													<p><input type="text" placeholder="cvv"></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-4">
						<div class="order-details-wrap">
							<table class="order-details">
								<thead>
									<tr>
										<th>detaylar</th>
										<th>ücret</th>
									</tr>
								</thead>
								<tbody class="order-details-body">
									<tr>
										<td>ürün</td>
										<td>toplam</td>
									</tr>
									@php
									$toplam=0;
									@endphp
									@foreach($order as $item)
									@php
									$urun=\App\Models\Product::where('id',$item->urun_id)->value('urun_adi');
									$fotograf=\App\Models\Product::where('id',$item->urun_id)->value('foto');
									$fiyat=\App\Models\Product::where('id',$item->urun_id)->value('fiyat');
									$toplam=$toplam+($fiyat*$item->adet);
									$urunToplam=$fiyat*$item->adet;
									@endphp
									<tr>
										<td>{{$urun}}</td>
										<td>{{$urunToplam}} TL</td>
									</tr>
									@endforeach
								</tbody>
								<tbody class="checkout-details">
									<tr>
										<td><strong>ara toplam: </strong></td>
										<td>{{$toplam}}</td>
									</tr>
									<tr>
										<td><strong>kargo: </strong></td>
										<td>12 TL</td>
									</tr>
									@php
									$genelToplam=$toplam+12;
									@endphp
									<tr>
										<td><strong>toplam: </strong></td>
										<td>{{$genelToplam}}</td>
									</tr>
								</tbody>
							</table>
							@csrf
							@if(!empty($loginedUser))
								<input type="hidden" value="{{ $loginedUser->user_id }}" name="user_id">
								<td class="product-remove"><button type="submit" class="btn btn-dark" name='siparisOlustur'>sipariş ver</button>
								</td>
							@else 
								<div class="alert alert-danger mt-2">Sipariş verebilmek için <a href="/giris"><strong>giriş</strong></a> yapmış olmalısınız.</div>
							@endif



						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!-- end check out section -->

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