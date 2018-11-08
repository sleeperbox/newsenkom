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
                    <a class="navbar-brand" href="#">Tambah Data User</a>
                  </div>  
                </div>
              </nav>

              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        
                        <div class="header">
                          <h4 class="title">Data User</h4>
                        </div>

                        <div class="content">
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
                          <form action="{{ url('/tambah') }}" method="post">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <input type="text" name="username" placeholder="Masukan Username" class="form-control border-input" required>
                            </div>
                            <div class="form-group">
                              <input type="password" name="password" placeholder="Masukan Password" class="form-control border-input" id="pass" required>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="show" onclick="myFunction()">
                              <label class="form-check-label" for="show">Tampilkan Password</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <select class="form-control" name="role">
                                <option value="">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="basic">Basic</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <input type="text" name="nama" placeholder="Masukan Nama" class="form-control border-input" required>
                            </div>
                            <div class="form-group">
                              <input type="submit" value="Tambah" class="btn btn-primary">
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </div>

    </body>
    
</html>