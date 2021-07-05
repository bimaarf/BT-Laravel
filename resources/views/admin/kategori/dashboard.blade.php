@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>

        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto"action="{{route('admin.kategori.dashboard')}}">
        <input type="text" class="form-control" name="search" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
          <!-- <span class="input-group-text border-0"><i class="fas fa-search"></i></span> -->
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://instagram.com/bima_arifa/">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="https://instagram.com/bima_arifa/">
            </a>
          </li>

          <!-- Icon dropdown -->
          

          <!-- Avatar -->
          <li class="nav-item dropdown">

            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              
              <img src="{{asset('avatar/'. Auth::user()->avatar)}}" class="rounded-circle" height="22"
                alt="" loading="lazy" />
                &nbsp;{{Auth::user()->name}}&nbsp;
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Profil</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              
              <li>
                
                @if(Auth::check())
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
              <button class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); this.closest('form').submit();">Logout</button>
                </form>
              @endif
            </li>
            </ul>
          </li>
        </ul>

      </div>
    </nav>
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Daftar Kategori</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Update</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $brt)
                  <tr>
                    <td class="mb-0 fw-normal">{{$loop->iteration}}</td>
                    <td class="mb-0 fw-normal">{{$brt->nama_kategori}}</td>
                    <td class="mb-0 fw-normal">{{substr($brt->deskripsi, 0, 50)}}</td>
                    <td class="mb-0 fw-normal">{{$brt->updated_at}}</td>
                    <td class="mb-0 fw-normal">
                    <a href="{{route('admin.kategori.detail',[ 'id'=>$brt->id, 'key'=>$brt->key])}}" class="btn btn-sm btn-info"><div class="bi icon dripicons-view-list"></div>Lihat</a>
                    <a href="{{route('admin.kategori.formUbah',['id'=>$brt->id, 'key'=>$brt->key])}}" class="btn btn-sm btn-warning"><div class="bi icon dripicons-pencil"></div>Edit</a>
                    <a href="{{route('admin.kategori.hapus',['id'=>$brt->id])}}" class=" btn btn-sm btn-danger" data-toggle="tooltip"><div class="bi icon dripicons-trash"></div>Hapus</a>
                            
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
              {{$kategori->links()}}
          </div>
        </div>
    </section>
    
         
            
@endsection
