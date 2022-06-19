<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
      <link rel="icon" type="image/x-icon" href="{{ URL::asset('assets/img/logo-bpn.ico') }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="/adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/adminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/adminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminLTE/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="/adminLTE/dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
 

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ADM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top bg-secondary" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <center>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </center>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="header">DATA</li>
        <li class="active treeview">
          <a href="#">
              <i class="glyphicon glyphicon-book"></i>
              <span>Data</span>
              <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
              </span>
              <ul class="treeview-menu">
                <li class="">
                    <a href="{{ url('admin/data') }}"
                        ><i class="fa fa-circle-o"></i>
                        Data Buku Tanah</a
                    >
                </li>
              <li class="">
                <a href="{{ url('admin/datapengajuan') }}"
                    ><i class="fa fa-circle-o"></i>
                    Data Pengajuan <br> Peminjaman Buku Tanah</a
                >
                <li class="">
                    <a href="{{ url('admin/datapeminjaman') }}"
                        ><i class="fa fa-circle-o"></i>
                        Data Peminjaman <br> & Pengembalian Buku Tanah</a
                    >
                </li>
                {{-- <li>
                    <a href="index2.html"
                        ><i class="fa fa-circle-o"></i>
                        Data Peminjaman Barang</a
                    >
                </li> --}}
            </ul>
          </a>
      </li>
        <!-- Optionally, you can add icons to the links -->
        <li class="header">INPUT DATA</li>
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-plus-square-o"></i>
                <span>Input</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="">
                    <a href="{{ url('admin/input') }}"
                        ><i class="fa fa-circle-o"></i>
                        Data Buku Tanah</a
                    >
                </li>
                {{-- <li class="">
                  <a href="{{ url('admin/inputpinjaman') }}"
                      ><i class="fa fa-circle-o"></i>
                      Data Peminjaman Buku Tanah</a
                  >
              </li> --}}
                {{-- <li>
                    <a href="index2.html"
                        ><i class="fa fa-circle-o"></i>
                        Data Peminjaman Barang</a
                    >
                </li> --}}
            </ul>
        </li>
        {{-- <li><a href="{{ url('admin/input') }}"><i class="fa fa-plus-square-o"></i> <span>Input Data</span></a></li> --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        <strong>APLIKASI WARKAH <br> KANTOR TANAH KABUPATEN BANYUASIN</strong><br><br>
        <img src="{{ URL::asset('assets/img/logobpn.png') }}" alt="logo" width="15%">
        <br><br>
      </h1>
    </section>

    <!-- Main content -->
        <section class="content mr-auto">
          <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $admin->total() }}</h3>
                        <p>Jumlah Data Buku Tanah <br></p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                    <a href="{{ url('admin/data') }}" class="small-box-footer"
                        >Selengkapnya
                        <i class="fa fa-arrow-circle-right"></i
                    ></a>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><h3>{{ $datauser->total() }}</h3></h3>

                        <p>Jumlah Data User<br></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{ url('admin/datauser') }}" class="small-box-footer"
                    >Selengkapnya
                    <i class="fa fa-arrow-circle-right"></i
                ></a>
                    {{-- <a href="#" class="small-box-footer"
                        >More info
                        <i class="fa fa-arrow-circle-right"></i
                    ></a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                  <div class="inner">
                      <h3>{{ $datapinjam->total() }}</h3>
                      <p> Jumlah Laporan Peminjaman dan Pengembalian Buku Tanah </p>
                  </div>
                  <div class="icon">
                      <i class="ion ion-ios-people"></i>
                  </div>
                  <a href="{{ url('admin/datapeminjaman') }}" class="small-box-footer"
                      >Selengkapnya
                      <i class="fa fa-arrow-circle-right"></i
                  ></a>
              </div>
          </div>
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
                <div class="inner">
                    <h3>{{ $datapengajuan->total() }}</h3>
                    <p> Jumlah Pengajuan Peminjaman Buku Tanah </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-book"></i>
                </div>
                <a href="{{ url('admin/datapengajuan') }}" class="small-box-footer"
                    >Selengkapnya
                    <i class="fa fa-arrow-circle-right"></i
                ></a>
            </div>
        </div>
          </div>
        </div>
            <!-- ./col -->
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg">
  </div>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <img src="{{ URL::asset('assets/img/ig.png') }}" alt="Instagram">
      <a href="https://www.instagram.com/kantahkabbanyuasin/" target="_blank">@kantahkabbanyuasin</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} Kantor Tanah Kabupaten Banyuasin.</strong>
  </footer>
</div>
<!-- Main Footer -->

<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE/dist/js/adminlte.min.js"></script>

@include('sweetalert::alert')

{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> --}}

{{-- <script>
  $(document).ready( function () {
    $('#data').DataTable();
} );
</script> --}}
</body>
</html>