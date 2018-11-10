
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
                      <a class="navbar-brand" href="#">Berita</a>
                  </div>  
              </div>
            </nav>

            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="header">
                            <h4 class="title">List Berita</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                          </div>
                          <div class="content">
                             @if(\Session::has('alert-'))
                            <div class="alert alert-danger">
                            <div>Tidak Ada Berita</div>
                            </div>
                          @endif
                          <!-- table feed --> 
                              <form action="{{ url('/admin/berita') }}" method="post">
                                    {{ csrf_field() }}
                                      <?php
                                          $tgl = date('Y-m-d');
                                          $tanggal = $tgl;
                                      ?>
                                
                                <div class="form-group">
                                  <label> Tanggal Sekarang : <?php echo $tanggal; ?> </label>
                                </div>
                                <input type="date" name="tgl" class="form-control border-input">
                                <div><br/>
                                 <button class="btn btn-info btn-fill btn-wd" type="submit"> Submit</button> 
                                  <br />
                                </div>
                              </form>
                              <hr />
                              <div class="row">
                                @foreach($data_berita as $datas)
                                  <div class="col-lg-6 col-sm-6">
                                      <div class="card">
                                        <div class="col-xs-5">
                                          <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                          </div>
                                        </div>
                                          <div class="content">
                                                <p>{{$datas->callsign}} - {{$datas->tlp}} - {{$datas->jam}}</p>
                                                  {{$datas->pesan}}
                                              <div class="footer">
                                                  <hr />
                                                  <div class="stats">  
                                                    <a href="#" role="button" class="btn btn-default">Edit</a>
                                                    <a href="{{url('/berita/hidden',$datas->id)}}" role="button" class="btn btn-warning">Tampil</a>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>   
                                    </div>
                                  @endforeach
                                </div>
                                {{ $data_berita->links() }}
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

</html>