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
                    <a class="navbar-brand" href="#">Data Gallery</a>
                  </div>  
            </div>
          </nav>

          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                      <div class="header">
                        <h4 class="title">Tambah Data Gallery</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                      </div>
                      <div class="content">
                        <form action="{{ URL('/galeri') }}" class="form-image-upload" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}


                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            <div class="row">
                                <div class="col-md-5">
                                    <strong>Judul:</strong>
                                    <input type="text" name="title" class="form-control border-input" placeholder="Judul">
                                </div>
                                <div class="col-md-5">
                                    <strong>Gambar:</strong>
                                    <input type="file" name="image" class="form-control border-input">
                                </div>
                                <div class="col-md-2">
                                    <br/>
                                    <button type="submit" class="btn btn-default">Upload</button>
                                </div>
                            </div>
                        </form>

                        <div class='list-group gallery'>
                          @if($galeris->count())
                          @foreach($galeris as $image)
                          <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                              <a class="thumbnail fancybox" rel="ligthbox" href="public/images/{{ $image->image }}">
                                <img class="img-responsive" alt="" src="public/images/{{ $image->image }}" />
                                <label>{{$image->title}}</label>
                              </a>
                              <form action="{{ url('galeri',$image->image) }}" method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                          {!! csrf_field() !!}
                                  <button type="submit" class="close-icon btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="ti-close"></i></button>

                                  <!-- <button type="#" class="close-icon btn btn-warning" onclick="return confirm('Yakin ingin Menampilkan data?')"><i class="ti-layers"></i></button> -->
                              </form>
                          </div> <!-- col-6 / end -->
                          @endforeach
                          @endif
                        </div> <!-- list-group / end -->
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        
    </div>
  </body>
<style type="text/css">
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
}
</style>

<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
    $(".delete").on("submit", function(){
        return  confirm("Yakin ingin menghapus gambar?");
    })
</script>

<style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</html>

