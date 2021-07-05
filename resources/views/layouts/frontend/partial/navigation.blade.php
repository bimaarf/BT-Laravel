<header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top black-bg d-none d-md-block">
                   <div class="container">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>     
                                        <li><a href="{{route('login')}}"><i class="fa fa-user"> </i> Login</a> </li>
                                        <li><a href="{{route('register')}}"><i class="fa fa-user"> </i> Register</a> </li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">    
                                        <li><a href="https://twitter.com/Eunachii"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://instagram.com/bima_arifa"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
                <div class="header-mid d-none d-md-block">
                   <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('frontend/assets/img/logo/lz-logo.png')}}"  alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right ">
                                    <img src="{{asset('frontend/assets/img/hero/header_card.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
               <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                    <div class="sticky-logo">
                                        <a href="index.html"><img src="{{asset('frontend/assets/img/logo/lz-logo150.png')}}" width="150" alt=""></a>
                                    </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>                  
                                        <ul id="navigation">    
                                            <li><a href="{{route('fe-berita.index')}}">Home</a></li>
                                            <li><a href="{{route('fe-berita.kategori')}}">Category</a></li>
                                            <li><a href="{{route('fe-berita.latesNews')}}">Latest News</a></li>
                                            <li><a href="{{route('fe-berita.kontak')}}">Contact</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('login')}}">Login</a></li>
                                                    <li><a href="{{route('register')}}">Register</a></li>
                                                    <li><a href="{{route('fe-berita.search')}}">Blog</a></li>
                                                    <li><a href="{{route('fe-berita.kategori')}}">Categori Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>             
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>