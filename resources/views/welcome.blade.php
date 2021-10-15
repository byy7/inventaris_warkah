<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inventaris Warkah</title>
    <link rel="icon" href="assets/img/BPN.jpg">
    <style>

    </style>
  </head>
  <body>s
      {{-- Navbar --}}
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/home') }}">Inventaris Warkah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-sm text-primary-700" style="color:white; text-decoration:none;">Login</a>
            @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Akhir Navbar --}}

    {{-- Main Content --}}
    <div class="container">
        <div class="row">
        <div class="jumbotron">
            <div class="col text-center">

              <div style ="width: 1100px; margin: auto; text-align: justify; font-family: Times New Roman; font-size: 36; color:gray;">
                <div class ="px-2 bg-light"><marquee class="py-3"><br><br><br> <h1><b>"Selamat Datang di Sistem Informasi Inventaris Warkah Badan Pertanahan Kabupaten Banyuasin"</b></h1></marquee></div>
            </div>
        </div>
</div>
</div>
        <div class="row">
            <div class="jumbotron">
            <div class="col text-center">
                <br><img src="assets/img/pp.jpeg" alt="logo" width="1100" height="200">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            <br><br><h2>Tentang Badan Pertanahan Kota Banyuasin</h2>
                <p>Alamat: Komplek, Jl. Perkantoran Pemkab, Pangkalan Balai, Kec. Banyuasin III, Kabupaten Banyu Asin, Sumatera Selatan 30911</p>
            </div>
            <div class="col-md-4">
                <br><br><h2>Manfaat</h2>
                <p>Memudahkan Pekerja untuk mencari sertifikat yang akan dicari </p>
            </div>
            <div class="col-md-4">
               <br><br><h2>Institusi</h2>
                <p>Website ini digunakan oleh pekerja yang ada di Kantor Pertanahan Kabupaten Banyuasin</p>
            </div>
        </div>
    </div>
    {{-- Akhir Main Content --}}

    {{-- footer --}}
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <hr><p>&copy; Kantah Kabupaten Banyuasin</p>
            </div>
        </div>
    </div>
    {{-- Akhir footer --}}



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>