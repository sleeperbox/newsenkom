<!DOCTYPE html>
<html>
    <head>
        @include('template.head_user')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('template.header_user')
            <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('public/assets/dist/img/user.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('nama')}}</p>
          <a href="{{ url('/user') }}"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGATION</li>
        <li><a href="{{ url('/user') }}"><i class="fa fa-book"></i> <span>Berita</span></a></li> 
        <li><a href="{{ url('/user/profile') }}"><i class="fa fa-user"></i> <span>User</span></a></li>
        <li><a href="{{ url('/user/pemantauan') }}"><i class="fa fa-book"></i> <span>Pemantauan</span></a></li>
        <li><a href="{{ url('/galeri') }}"><i class="fa fa-image"></i> <span>Gallery</span></a></li>
        <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-md-8">
        <div class="box">
          <!-- Tambah User -->
          <div class="box box-info">
            <div class="box-header ui-sortable-handle">
              <i class="fa fa-user"></i>
              <h3 class="box-title">{{ $data->nama }}</h3>
            </div>
            <div class="box-body">
            @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{ Session::get('alert') }}</div>
                </div>
            @endif
            @if(\Session::has('sukses'))
                <div class="alert alert-success">
                    <div>{{ Session::get('sukses') }}</div>
                </div>
            @endif
              <form action="{{ url('/user/update') }}" method="post">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $data->id }}">
                  <input type="text" name="username" placeholder="Masukan Username" class="form-control" value="{{ $data->username }}" required>
                </div>
                <div class="form-group">
                  <label class="form-check-label">Ubah Password </label><small><i>(Silahkan masukan password baru)</i></small>
                  <input type="password" name="password" id="pass" class="form-control">
                  <input type="checkbox" class="form-check-input" id="show" onclick="myFunction()">
                  <span>Tampilkan Password</span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" value="{{ $data->role }}" disabled>
                </div>
                <div class="form-group">
                  <input type="text" name="nama" placeholder="Masukan Nama" class="form-control" value="{{ $data->nama }}" required>
                </div>
                <div class="form-group">
                  <input type="submit" value="Update Data Saya" class="btn btn-primary" onclick="return confirm('Yakin ingin mengubah data?')">
                </div>
              </form>
            </div>
          </div>
          <!-- /Tambah User -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  </section>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  </div>
  </div>
  </body>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{url('public/assets/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('public/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{url('cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{url('public/assets/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('public/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{url('public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('public/assets/plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}"></script>
<script src="{{url('public/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{url('public/assets/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{url('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('public/assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('public/assets/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('public/assets/dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('public/assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('public/assets/dist/js/demo.js')}}"></script>
<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
  }
  function show(){
    var x = document.getElementById("pass2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    } 
  }
</script>
</body>
</html>