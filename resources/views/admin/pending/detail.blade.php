@extends('layouts.backend.main')
@section('pending.dashboard', 'active')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Detail Berita Pending</strong>
            </h5>
            <a href="{{route('admin.pending.dashboard')}}" class="btn btn-outline-primary fa-pull-right">Kembali</a>
          </div>
          <div class="card-body">
            <table class="table table-hover">
                    <tr>
                        <th>Judul</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita_pending->judul}} </p></td>
                    </tr>
                    <tr>
                        <th>Isi</th>
                        <td>
                            <div class="com-text" ><p class="mb-0 fw-normal">{{$berita_pending->isi}} </p></div>
                        </td> 
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita_pending->kategori->nama_kategori}} </p></td>
                    </tr>
                    <tr>
                        <th>Penulis</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita_pending->user->name}} </p></td>
                    </tr>
                    <tr>
                        <th>Dipublish</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita_pending->created_at}} </p></td>
                    </tr>
                    <tr>
                        <th>Diubah</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$berita_pending->updated_at}} </p></td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td><img class=" img-fluid rounded" src="{{asset('gambar/'.$berita_pending->cover_img)}}" alt="gambar"></td>
                    </tr>
                </table>
                
          </div>
        </div>
    </section>
    
         
            
@endsection
