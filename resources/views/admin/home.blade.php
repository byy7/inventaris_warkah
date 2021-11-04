<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <link rel="icon" href="{{ URL::asset('assets/img/BPN.jpg') }}">
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
        <li class="header">DATA</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{ url('home') }}"><i class="fa fa-desktop"></i> <span>Data</span></a></li>
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
                        Data Inventaris</a
                    >
                </li>
                <li>
                    <a href="index2.html"
                        ><i class="fa fa-circle-o"></i>
                        Data Peminjaman Barang</a
                    >
                </li>
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
        <strong>DATA INVENTARIS WARKAH <br> KANTOR TANAH KABUPATEN BANYUASIN</strong><br><br>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content mr-auto">
      <p>Cari Data :</p>
	  <form action="/admin/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari Data ..." value="{{ old('cari') }}">
		<input type="submit" value="CARI">
    	</form>
		
	    <br>
      <div class="table-responsive">
        <table border="1" class="table table-dark table-hover bg-info text-center">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">kelurahan/Desa</th>
              <th scope="col">Nomor Album</th>
              <th scope="col">Kode Rak</th>
              <th scope="col">Tanggal Peminjaman</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach($admin as $a)
          <tbody>
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $a->kecamatan }}</td>
              <td>{{ $a->kelurahan }}</td>
              <td>{{ $a->album }}</td>
              <td>{{ $a->rak }}</td>
              <td>{{ $a->tanggal }}</td>
              <td align="center">
              
                <a class="glyphicon glyphicon-edit" style="color: #ff8800e3" href="/admin/edit/{{ $a->id }}">&emsp;</a>
                <a class="glyphicon glyphicon-trash" style="color: #ff0000e1" onclick="return  confirm('Yakin ingin menghapus data?')" href="/admin/hapus/{{ $a->id }}" ></a>
                </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <br>
      Halaman : {{ $admin->currentPage() }} <br>
      Jumlah Data : {{ $admin->total() }} <br>
      Data Per Halaman : {{ $admin->perPage() }} <br>

      {{ $admin->links() }}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        <img src="{{ URL::asset('assets/img/ig.png') }}" alt="Instagram">
      <a href="https://www.instagram.com/kantahkabbanyuasin/" target="_blank">kantahkabbanyuasin</a>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ date('Y') }} Kantor Tanah Kabupaten Banyuasin.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
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

{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> --}}

{{-- <script>
  $(document).ready( function () {
    $('#data').DataTable();
} );
</script> --}}
</body>
</html>