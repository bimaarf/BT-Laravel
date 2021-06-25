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
                            <h3>Edit Kategori</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Kategori</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="shadow mb-1">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">

                    <form method="POST" action="{{route('admin.kategori.ubah',['id'=>$kategori->id])}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{$kategori->nama_kategori}}" >
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Isi Berita</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$kategori->deskripsi}}" >
                        </div>
                        

                        <button type="submit" class="btn btn-primary" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.kategori.dashboard')}}" class="btn btn-light-primary">Cencel</a>

                    </form>
                </div>
            </div>
                    </div>

                </section>
            </div>

@endsection

