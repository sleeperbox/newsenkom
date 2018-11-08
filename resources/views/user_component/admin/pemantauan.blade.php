<html>
    <head>
      @include('template.head')
    </head>
    <body>
      <div class="wrapper">
        @include('template.header')

        <div class="main-panel">

              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                        </button>
                    <a class="navbar-brand" href="#">List Data Pemantauan</a>
                  </div>  
                </div>
              </nav>

              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="header">
                          <h4 class="title">Data Pemantauan</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                        </div>
                        <div class="content">
                           <div class="box-body">
                              <div id="show">
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    
  </body>
    <script type="text/javascript">
        // Animations initialization
        $(document).ready(function() {
        setInterval(function () {
          $('#show').load('{{ url('/data') }}')
        }, 500);
      });

    </script>

</html>