@extends('layouts.backend.main')
@section('dashboard.trending', 'active')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Daftar Trending</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Update</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($trending as $trd)
                  <tr>
                    <td class="mb-0 fw-normal">{{$loop->iteration}}</td>
                    <td class="mb-0 fw-normal">{{substr($trd->berita->judul, 0 , 30)}}</td>
                    <td class="mb-0 fw-normal">{{$trd->berita->kategori->nama_kategori}}</td>
                    <td class="mb-0 fw-normal">{{$trd->updated_at}}</td>
                    <td class="mb-0 fw-normal">
                    <a href="{{route('admin.trending.formUbah',['id'=>$trd->id, 'key'=>$trd->key])}}" class="btn btn-sm btn-warning"><div class="bi icon dripicons-pencil"></div>Edit</a>
                    <a href="{{route('admin.trending.hapus',['id'=>$trd->id])}}" class=" btn btn-sm btn-danger" data-toggle="tooltip"><div class="bi icon dripicons-trash"></div>Hapus</a>
                            
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
              {{$trending->links()}}
              <br>
              <small class="text-muted"><i>Noted : Result teratas = terbaru</i></small>
          </div>
        </div>
    </section>
    
         
            
@endsection
