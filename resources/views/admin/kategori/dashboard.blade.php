@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
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
