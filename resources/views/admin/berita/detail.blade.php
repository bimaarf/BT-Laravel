@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Detail Berita</strong>
            </h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
                    <tr>
                        <th>Judul</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita->judul}} </p></td>
                    </tr>
                    <tr>
                        <th>Isi</th>
                        <td>
                            <div class="com-text" ><p class="mb-0 fw-normal">{{$berita->isi}} </p></div>
                        </td> 
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita->kategori->nama_kategori}} </p></td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita->user->name}} </p></td>
                    </tr>
                    <tr>
                        <th>Dipublish</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita->created_at}} </p></td>
                    </tr>
                    <tr>
                        <th>Diubah</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita->updated_at}} </p></td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td><img class=" img-fluid rounded" src="{{asset('gambar/'.$berita->cover_img)}}" alt="gambar"></td>
                    </tr>
                </table>
                <a href="{{route('admin.berita.dashboard')}}" class="btn btn-outline-primary">Kembali</a>
          </div>
        </div>
    </section>
    
         
            
@endsection
