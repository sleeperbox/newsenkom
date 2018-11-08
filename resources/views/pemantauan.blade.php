<!DOCTYPE html>
<html>
    <head>
        @include('template.head_home')
    </head>
    <body>
        @include('layouts.nav_home')
  <!-- Content Wrapper. Contains page content -->

    <div class="container">
        <div class="section" style="margin-top: -7%">
            <!-- details -->
        <section class="details-books py-5">
            <div class="container py-md-4 mt-md-3">
            <h2 class="heading-agileinfo">Pemantauan<span>Data Hasil Pemantawan</span></h2>
                <span class="w3-line black"></span>
            </div>
            <br />
            <div id="introduction" class="section scrollspy">
              <div id="show">   
              </div>
              </div>
        </section> 
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
<script src="{{url('public/js/jqueryP.js')}}"></script>
<!--  Scripts-->
    <script src="{{url('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script>if (!window.jQuery) { document.write('<script src="{{url('bin/jquery-2.1.1.min.js')}}"><\/script>'); }
    </script>
  
    <script src="{{url('public/materialize/js/jquery.timeago.min.js')}}"></script>  
    <script src="{{url('public/materialize/js/prism.js')}}"></script>
    <script src="{{url('public/materialize/bin/materialize.js')}}"></script>
    <script src="{{url('public/materialize/js/init.js')}}"></script>


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
  $(document).ready(function() {
      setInterval(function () {
        $('#show').load('{{ url('/data') }}')
      }, 500);
    });

    

</script>
</body>
</html>