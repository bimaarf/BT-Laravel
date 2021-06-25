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
                            <h3>add news</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">add news</li>
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

                    <form method="POST" action="{{route('admin.berita.ubah',['id'=>$berita->id])}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{$berita->judul}}">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <textarea name="isi" id="text" onkeyup="textKomen()" placeholder="Ketikkan sesuatu!" cols="30" rows="10" class="form-control" name="isi">{{$berita->isi}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_img">Foto</label>
                            <input type="file" name="cover_img" class="form-control" alt="{{$berita->cover_img}}" >
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori Berita</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                @foreach($kategori as $kat)
                                <option value="{{$kat->id}}" {{($kat->id==$berita->kategori_id) ? 'selected' : ''}}>{{$kat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.berita.dashboard')}}" class="btn btn-light-primary">Cencel</a>

                    </form>
                </div>
            </div>
                    </div>

                </section>
            </div>

@endsection

