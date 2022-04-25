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
    <title>İncele</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/') }}assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/bootstrap/css/bootstrap.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/responsive.css">

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->


    @include('shared.header')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">

                        <h1>Ürün Detayları</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                @foreach ($product as $value)
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset('assets/fotolar') }}/{{ $value->foto }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $value->urun_adi }}</h3>
                        <p class="single-product-pricing"><span> </span> {{ $value->fiyat }}TL</p>
                        <p>Ürün Detayları :</p>
                        <p>{{ $value->aciklama }}</p>
                        <p>Adet</p>
                        <div class="single-product-form">
                            @if($value->stok_adedi>0)
                            <form action="{{url('addToChart')}}" method="POST">
                                @csrf
                                @if(!empty($loginedUser))
                                <input type="hidden" value="{{$loginedUser->user_id}}" name="user_id">
                                @endif
                                <input type="hidden" value="{{$value->id}}" name="urun_id">
                                <input type="number" placeholder="0" name="adet">
                                <div>
                                    <button type="submit" class="btn btn-dark" name="addToChart"><i class="fas fa-shopping-cart"></i> sepete
                                        ekle</button>
                                </div>
                            </form>
                            @endif
                            @if($value->stok_adedi==0)
                            <button type="button" class="btn btn-dark" name="addToChart" disabled><i class="fas fa-shopping-cart"></i> ürün tükendi
                            </button>
                            @endif

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end single product -->




    @include('shared.footer')
    <!-- jquery -->
    <script src="{{ asset('/') }}assets/js/jquery-1.11.3.min.js"></script>
    <!-- bootstrap -->
    <script src="{{ asset('/') }}assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="{{ asset('/') }}assets/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="{{ asset('/') }}assets/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="{{ asset('/') }}assets/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="{{ asset('/') }}assets/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="{{ asset('/') }}assets/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="{{ asset('/') }}assets/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="{{ asset('/') }}assets/js/sticker.js"></script>
    <!-- main js -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>