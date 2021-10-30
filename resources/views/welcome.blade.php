<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Style Css --}}
    <link rel="stylesheet" href="css/style.css">
    <title>Inventaris Warkah</title>
    <link rel="icon" href="{{ URL::asset('assets/img/BPN.jpg') }}">
    <style>

    </style>
  </head>
  <body>
      {{-- Navbar --}}
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">Inventaris Warkah</a>
          @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-sm text-primary-700" style="color:white; text-decoration:none;">Login</a>
          @endif
        </div>
      </nav>
    {{-- Akhir Navbar --}}

    {{-- Main Content --}}
    <div class="section" id="bg">
      <div class="container">
        <div class="row">
            <div class="col text-center">
                  <div class ="px-2"><marquee><br><br><br> <h1><b>Selamat Datang di Sistem Informasi Inventaris Warkah Badan Pertanahan Kabupaten Banyuasin</b></h1></marquee>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <br><img src="assets/img/pp.jpg" alt="logo" width="80%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <br><br><h2>Tentang Badan Pertanahan Kota Banyuasin</h2>
                <p align="center">Alamat: Komplek, Jl. Perkantoran Pemkab, Pangkalan Balai, Kec. Banyuasin III, Kabupaten Banyu Asin, Sumatera Selatan 30911</p>
            </div>
            <div class="col-md-4">
                <br><br><h2>Manfaat</h2>
                <p align="center">Memudahkan Pekerja untuk mencari sertifikat yang akan dicari </p>
            </div>
            <div class="col-md-4">
               <br><br><h2>Institusi</h2>
                <p align="center">Website ini digunakan oleh pekerja yang ada di Kantor Pertanahan Kabupaten Banyuasin</p>
            </div>
        </div>
      </div>
    </div>
  </div>
    {{-- Akhir Main Content --}}

    {{-- footer --}}
    <footer>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <hr><p>&copy; Kantor Tanah Kabupaten Banyuasin 
                  <a href="https://www.instagram.com/kantahkabbanyuasin/" target="_blank">
                    <img src="assets/img/ig.png" alt="Instagram">
                  </a>
                </p>
            </div>
        </div>
    </div>
  </footer>
  </div>
  {{-- Akhir footer --}}


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>