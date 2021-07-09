@extends('layouts.backend.main')
@section('kategori.dashboard', 'active')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Detail Kategori</strong>
            </h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
                    <tr>
                        <th>Nama Kategori</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$kategori->nama_kategori}} </p></td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>
                            <div class="com-text" ><p class="mb-0 mb-0 fw-normal">{{$kategori->deskripsi}} </p></div>
                        </td> 
                    </tr>
                    
                    <tr>
                        <th>Diupdate</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$kategori->updated_at}} </p></td>
                    </tr>
                </table>
                <a href="{{route('admin.kategori.dashboard')}}" class="btn btn-outline-primary">Kembali</a>
          </div>
        </div>
    </section>
    
         
            
@endsection
