<!--
=========================================================
* Material Dashboard 2 - v3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img class="navbar-brand-img h-100" alt="main_logo" src="data:image/png;base64,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" alt="">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="/profil">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/onaylananSiparis">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Onaylanan Siparişler</span>
          </a>
          <a class="nav-link text-white " href="/siparisTakip">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Gelen Siparişler</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/kullaniciListesi">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Kullanıcı Listesi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/urunEkle">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Yeni Ürün Ekle</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/urunler">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Ürün Listesi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/sifreGuncelle">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Şifre Güncelle</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Kullanıcı Listesi</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kullanıcı No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ad Soyad</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Eposta</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefon</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adres</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Doğum Tarihi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      @foreach($users as $item)
                      @if($item->enable=='y')
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$item->user_id}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{$item->ad}} {{$item->soyad}}</h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$item->eposta}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$item->telefon}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm">{{$item->adres}}</h6>
                      </td>
                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm">{{$item->dogumTarihi}}</h6>
                      </td>

                      <td class="align-middle text-center">
                        @if($item->statu!='n')
                        <form action="{{url('deleteUser')}}" method="POST">
                          @csrf
                          <input type="hidden" value="{{$item->user_id}}" name="id">
                          <button type="submit" class="badge bg-gradient-primary" name="deleteUser">Sil</button>
                          <button type="submit" class="badge bg-gradient-primary" name="hesapDondur">Dondur</button>
                          @else
                          <h6 class="mb-0 text-sm">Hesap Dondurulmuş</h6>
                          @endif
                      </td>

                    </tr>
                    @endif
                    @endforeach
                  </tbody>
                  </form>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About
                    Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>