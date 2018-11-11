    
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
               <!--  <img src="{{url('public/admin/img/SenkomHead.png')}}" class="img-fluid" alt=""> -->
                <a href="#" class="simple-text">
                    SENKOM
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('/user/profile') }}">
                        <i class="ti-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}">
                        <i class="ti-book"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/galeri') }}">
                        <i class="ti-image"></i>
                        <p>Galeri</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="{{ url('/logout') }}">
                        <i class="ti-export"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>