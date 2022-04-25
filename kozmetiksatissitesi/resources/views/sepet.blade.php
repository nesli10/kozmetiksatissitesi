<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>sepet</title>

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
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>sepet</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Ürün</th>
									<th class="product-name">Adı</th>
									<th class="product-quantity">Adet</th>
									<th class="product-price">Fiyat</th>
									<th class="product-total">Toplam</th>
								</tr>
							</thead>
							<tbody>
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
								<tr class="table-body-row">
									<form action="{{url('deleteFromCart')}}" method="POST">
										@csrf
										<input type="hidden" value="{{$item->adet}}" name="adet">
										<input type="hidden" value="{{$item->urun_id}}" name="urun_id">
										<input type="hidden" value="1" name="user_id">
										<td class="product-remove"><button type="submit" name='deleteItem'><i class="far fa-window-close"></i></button>
										</td>
									</form>
									<td class="product-image"><img src="assets/fotolar/{{$fotograf}}" alt=""></td>
									<td class="product-name">{{$urun}}</td>
									<td class="product-quantity">{{$item->adet}}</td>
									<td class="product-price">{{$fiyat}} TL</td>
									<td class="product-total">{{$urunToplam}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>ara toplam: </strong></td>
									<td>{{$toplam}}</td>
								</tr>
								<tr class="total-data">
									<td><strong>kargo: </strong></td>
									<td>12 TL</td>
								</tr>
								@php
								$genelToplam=$toplam+12;
								@endphp
								<tr class="total-data">
									<td><strong>toplam: </strong></td>
									<td>{{$genelToplam}}</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="/satinal" class="boxed-btn black">satın al</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->


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