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
   <!-- bootstrap datepicker -->
   <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

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
      {{-- <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form --> --}}

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="header">DATA</li>
        <!-- Optionally, you can add icons to the links -->
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
                  <a href="{{ url('admin/datapeminjaman') }}"
                      ><i class="fa fa-circle-o"></i>
                      Data Peminjaman Buku Tanah</a
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
                <li class="">
                  <a href="{{ url('admin/inputpinjaman') }}"
                      ><i class="fa fa-circle-o"></i>
                      Data Peminjaman Buku Tanah</a
                  >
              </li>
                {{-- <li>
                    <a href="index2.html"
                        ><i class="fa fa-circle-o"></i>
                        Data Peminjaman Barang</a
                    >
                </li> --}}
            </ul>
        </li>
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
        <strong>INPUT DATA PEMINJAMAN WARKAH</strong><br><br>
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> --}}
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">INPUT DATA</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                @foreach($datapinjam as $dp)
                <form action="{{ url('admin/simpanpinjaman') }}" method="post">
                  {{csrf_field()}}
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required="required" readonly value="{{ $dp->nama }}">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>No. Hak</label>
                <input type="text" name="no_hak" class="form-control" required="required" readonly value="{{ $dp->no_hak }}">
              </div>
              <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" required="required" readonly value="{{ $dp->kecamatan }}">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Kelurahan</label>
                <input type="text" name="kelurahan" class="form-control" required="required" readonly value="{{ $dp->kelurahan }}">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>No. Buku Tanah</label>
                <input type="text" name="nobukutanah" class="form-control" required="required" readonly value="{{ $dp->no_bukutanah }}">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Kode Rak</label>
                <input type="text" name="koderak" class="form-control" required="required" readonly value="{{ $dp->koderak }}">
              </div>
            </div>
            <!-- /.col -->
          </div><br>
          <!-- /.row -->
          <center>
            <a class="btn btn-warning" href="/home">Batal</a>
            <input type="submit" class="btn btn-success" value="Submit">
          </center>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      @endforeach
    </form>
    </section>
    {{-- <section class="content container">
            <form action="/admin/simpan" method="post">
            {{csrf_field()}}
            <div class="form">
                <label class="form-label">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control" required="required" >
              </div>
              <div class="form">
                <label class="form-label">Kelurahan / Desa</label>
                <input type="text" name="kelurahan" class="form-control" required="required" >
              </div>
              <div class="m-3">
              <label class="form-label">Nomor Album</label>
                <input type="text" name="album" class="form-control" required="required" >
              </div>
              <div class="m-3">
                <label class="form-label">Kode Rak</label>
                <input type="text" name="rak" class="form-control" required="required" >
              </div>
              <div class="m-3">
                <label class="form-label">Tanggal Peminjaman</label>
                <input type="text" name="tanggal" class="form-control" required="required">
              </div> 
              <br><br>
              <center>
                <a class="btn btn-warning" href="/home">Batal</a>
                <input type="submit" class="btn btn-success" value="Submit">
              </center>
            </form>
    </section> --}}
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <img src="../assets/img/ig.png" alt="Instagram">
      <a href="https://www.instagram.com/kantahkabbanyuasin" target="_blank">kantahkabbanyuasin</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="">Kantor Tanah Kabupaten Banyuasin</a>.</strong>
  </footer>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/adminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminLTE/dist/js/adminlte.min.js"></script>

@include('sweetalert::alert')
</body>
</html>