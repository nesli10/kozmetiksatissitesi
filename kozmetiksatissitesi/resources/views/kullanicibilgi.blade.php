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

                        <h1>kullanıcı bilgi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->


    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>bilgiler</h2>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-7 mb-lg-0 mb-4">
                            <div class="card-body">
                                <table class="table" id="user">
                                    <thead>
                                        <tr>
                                            <th>e posta</th>
                                            <th>şifre</th>
                                            <th>adres</th>
                                            <th>telefon</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $value)
                                        <tr id="{{ $value->user_id }}">
                                            <td> {{ $value->eposta }}</td>
                                            <td>{{base64_decode($value->sifre)}}</td>
                                            <td>{{ $value->adres }}</td>
                                            <td>{{ $value->telefon }}</td>
                                            <td><a class="btn btn-dark"  href="/kullanicisayfa/{{$id}}">güncelle</a></td> 
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>siparişler</h2>
                    </div>
                    <div class="row">
                        <div>
                            <div class="card-body">
                                <table class="table" id="user">
                                    <thead>
                                        <tr>
                                            <th>Sipariş No</th>
                                            <th>Sipariş Tarihi</th>
                                            <th>Adres</th>
                                            <th>Sipariş Durumu</th>
                                            <th>Kargo No</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $item)
                                        @php
                                        $durum=\App\Models\OrderStatu::where('durum_id',$item->durum_id)->value('durum');
                                        @endphp
                                        <tr id="{{ $value->user_id }}">
                                            <td> {{ $item->order_id }}</td>
                                            <td>{{ $item->siparisTarih }}</td>
                                            <td>{{ $item->adres }}</td>
                                            <td>{{ $item->durum}}</td>
                                            <td>{{ $item->kargoId }}</td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- form validation js -->
    <script src="{{ asset('/') }}assets/js/form-validate.js"></script>
    <!-- main js -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>

</body>

</html>