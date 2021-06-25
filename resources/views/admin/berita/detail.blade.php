@extends('layouts.backend.main')
@section('content')
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Tabel Berita</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Detail Berita</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                    <div class="card-header">
        <a href="{{route('admin.berita.dashboard')}}" class="btn btn-sm btn-success px-sm-3">Back</a>
        </div>
            <div class="card-body">
            <table class="table table-hover">
                <tr>
                    <td>Judul</td>
                    <td> {{$berita->judul}} </td>
                </tr>
                <tr>
                    <td>Isi</td>
                     <td>
                        <div class="com-text" >{{$berita->isi}} </div>
                     </td> 
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td> {{$berita->kategori->nama_kategori}} </td>
                </tr>
                <tr>
                    <td>Penulis</td>
                    <td> {{$berita->user->name}} </td>
                </tr>
                <tr>
                    <td>Dipublish</td>
                    <td> {{$berita->created_at}} </td>
                </tr>
                <tr>
                    <td>Diubah</td>
                    <td> {{$berita->updated_at}} </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td><img class=" img-fluid rounded" src="{{asset('gambar/'.$berita->cover_img)}}" alt="gambar"></td>
                </tr>
            </table>
            </div>
                    </div>

                </section>
            </div>

@endsection
