<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>kullanıcı</title>

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
						
						<h1>kullanıcı bilgi güncelleme</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>bilgiler</h2>
						
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form action="{{ route('post.kullanicisayfa') }}" method="post" enctype="multipart/form-data">
                        @csrf
							<p>
                                <input type="hidden" id="user_id" name="user_id" value="{{$user_id}}">
                                
								<input type="text" placeholder="adres" name="adres" id="adres"  value="{{$guncelle->adres}}">
								<input type="email" placeholder="Email" name="eposta" id="eposta" value="{{$guncelle->eposta}}" >
							</p>
							<p>
								<input type="tel" placeholder="telefon" name="telefon" id="telefon"  value="{{$guncelle->telefon}}">
								<input type="password" placeholder="şifre" name="sifre" id="sifre"  value="{{$guncelle->sifre}}">
							</p>
							 <input type="submit" class="btn" name="btn" id="kaydet" value="kaydet">
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end contact form -->

	
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
	<!-- form validation js -->
	<script src="{{asset("/")}}assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="{{asset("/")}}assets/js/main.js"></script>
	
</body>
</html>