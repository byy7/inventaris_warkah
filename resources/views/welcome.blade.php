<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Inventaris Warkah</title>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/logo-bpn.ico') }}">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/template/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/template/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/template/assets/css/templatemo-training-studio.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ url('/') }}" class="logo"><em> Warkah</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">Tentang</a></li> 
                            <li class="main-button">@if (Route::has('login')) <a href="{{ route('login') }}" class="text-sm text-primary-700" style="color:white; text-decoration:none;">Login</a>
                              @endif
                    </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <img src="/assets/img/bg-bpn.png" alt="background" width="100%">
        <div class="video-overlay header-text">
            <div class="caption">
                <h4> <marquee behavior="" direction="">SELAMAT DATANG DI SISTEM INFORMASI INVENTARIS WARKAH KANTOR TANAH KABUPATEN BANYUASIN</marquee></h4>
                <div class="main-button scroll-to-section">
                    <a href="#features">Tentang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Kantor Pertanahan Kabupaten <em>Banyuasin</em></h2><br>
                        <h5>Alamat</h5>
                        <p>Komplek, Jl. Perkantoran Pemkab, Pangkalan Balai, Kec. Banyuasin III, Kabupaten Banyu Asin, Sumatera Selatan 30911.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="right-content text-center">
                                <h4>Definisi</h4>
                                <p>Dengan adanya Sistem Informasi Inventaris Warkah ini dapat memudahkan kita untuk mencari data Sertifikat Tanah yang berada di Warkah.</p>  
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="right-content text-center">
                                <h4>Institusi</h4>
                                <p>Sistem Infromasi ini digunakan oleh pekerja yang ada di Kantor Pertanahan Kabupaten Banyuasin.</p>    
                            </div>
                        </li>
                    </ul>
                </div>
                            <div class="col-lg-12 text-center">
                                <h5>Manfaat</h5><br>
                                <p>1. Memudahkan pekerja dan klien saat mencari data Sertifikat Tanah.</p>
                                <p>2. Mendapatkan Informasi secara Real-Time.</p>
                                <p>3. Meminimalisir Terjadinya Kecurangan.</p>
                            </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2021 Kantor Pertanahan Kabupaten Banyuasin
                    
                    {{-- -  <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">TemplateMo</a></p> --}}
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/template/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/template/assets/js/popper.js"></script>
    <script src="/template/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/template/assets/js/scrollreveal.min.js"></script>
    <script src="/template/assets/js/waypoints.min.js"></script>
    <script src="/template/assets/js/jquery.counterup.min.js"></script>
    <script src="/template/assets/js/imgfix.min.js"></script> 
    <script src="/template/assets/js/mixitup.js"></script> 
    <script src="/template/assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="/template/assets/js/custom.js"></script>

  </body>
</html>