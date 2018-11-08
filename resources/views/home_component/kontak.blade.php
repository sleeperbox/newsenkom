<!DOCTYPE html>
<html>
<head>
    @include('template.head_user')
    <title>Apk berita</title>
</head>
<body>
    <div class="wrapper">
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <a class="navbar-brand" href="#">
                            <i class="ti-close"></i>
                        </a>

                        <a class="navbar-brand" href="#" style="float: right;">
                            <i class="ti-settings"></i>
                            <!-- <p>Settings</p> -->
                        </a>
                    </div>
                </div>
            </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Input Berita</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Callsign *</label>
                                                <input type="text" class="form-control border-input" placeholder="Callsign">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No TLP/HP</label>
                                                <input type="number" class="form-control border-input" placeholder="No TLP/HP" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Masukan Isi Berita" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
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