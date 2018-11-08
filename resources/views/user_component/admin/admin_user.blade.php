<!DOCTYPE html>
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
                <a class="navbar-brand" href="#">Data User</a>
              </div>  
            </div>
          </nav>

            <div class="content">
              <div class="container-fluid">
                <div class="row">

                  <div class="col-lg-3 col-sm-6">
                  </div>

                  <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Data User</p>
                                            List 
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <a href="{{ url('/datauser') }}">Lihat data User</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-plus"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Data User</p>
                                            Tambah
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <a href="{{ url('/tambahuser') }}">Tambah User</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                    </div>


                </div>
              </div>
            </div>

        </div>
    </div>


 
  </body> 
</html>