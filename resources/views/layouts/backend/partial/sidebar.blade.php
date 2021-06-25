<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi icon dripicons-user"></i>
                                <span>Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item  " >
                            <a href="{{route('admin.berita.dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item  " >
                            <a href="{{route('admin.kategori.dashboard')}}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard Kategori</span>
                            </a>
                        </li>

                        
                        

                        <li class="sidebar-title">Forms &amp; Tables</li>

                       


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Tambahkan</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{route('admin.berita.formTambah')}}">Tambah Berita</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('admin.kategori.formTambah')}}">Tambah Kategori</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item " id=" tombol" >
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>
                        @if(Auth::check())

                    
                            <a href="#" class='sidebar-link' data-bs-toggle="modal" data-bs-target="#exampleModalCenter" >
                                <i class="bi icon dripicons-power"></i>
                                <span>Logout</span>
                            </a>
                                        
                            @endif
                        </li>

                        

                    </ul>
                </div>
            </div>
        </div>
        <li class="sidebar-item  ">
                        @if(Auth::check())
                                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                        <!-- Vertically Centered modal Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Log out
                                                        </h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <i data-feather="x"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                           <b>Hi {{Auth::user()->name}}</b>
                                                       <p>
                                                       Are you sure you want to log out? <u><i>Accept and log out</i></u>
                                                       </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-primary ml-1"
                                                            data-bs-dismiss="modal" onclick="event.preventDefault(); this.closest('form').submit();">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                @endif