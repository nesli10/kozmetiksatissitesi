<!-- header -->
@php 
	use Illuminate\Support\Facades\Cache;
	$loginedUser = Cache::get("loginedUser", "");
@endphp
<div class="top-header-area" id="sticker">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<div class="main-menu-wrap">
					<div class="site-logo">
						<a href="/">
							<img src="{{ asset('assets/fotolar/logo.jpg') }}" alt="">
						</a>
					</div>
					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li><a href="{{route("makyajlist")}}">makyaj</a>
								<ul class="sub-menu">
									<li><a href="{{route("gozlist")}}">göz</a></li>
									<li><a href="{{route("dudaklist")}}">dudak</a></li>
									<li><a href="{{route("yuzlist")}}">yüz</a></li>
									<li><a href="{{route("tırnaklist")}}">tırnak</a></li>
								</ul>
							</li>

							<li><a href="{{route("ciltbakimlist")}}">cilt bakım</a>
								<ul class="sub-menu">

									<li><a href="{{route("yuzbakimlist")}}">yüz bakım</a></li>
									<li><a href="{{route("vucutbakimlist")}}">el,vücut ve ayak bakım</a></li>

								</ul>
							</li>
							<li><a href="{{route("sacbakimlist")}}">saç bakım</a></li>
							<li><a href="{{route("parfumlist")}}">parfüm/deodorant</a>
							</li>
							@if(!empty($loginedUser))
								<li>
									<a href="#">{{$loginedUser->ad}} {{$loginedUser->soyad}}</a>
									<ul class="sub-menu">
										<li><a href="/kullanicibilgi/{{ $loginedUser->user_id }}">Profilim</a></li>
										<li><a href="/logout">Çıkış yap</a></li>
									</ul>
								</li>
							@else 
								<li>
									<a href="#">Hesap</a>
									<ul class="sub-menu">
										<li><a href="/kayit">Kayıt ol</a></li>
										<li><a href="/giris">Giriş yap</a></li>
									</ul>
								</li>
							@endif


							<li>
								<div class="header-icons">
									<a class="shopping-cart" href="/sepet"><i class="fas fa-shopping-cart"></i></a>
									<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									<a class="fas fa-user-tie" href="/adminGiris"></a>
								</div>
							</li>

						</ul>
					</nav>
					<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
					<div class="mobile-menu"></div>
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end header -->
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
<!-- end search area -->