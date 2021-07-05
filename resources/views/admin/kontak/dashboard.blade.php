@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>List Message</strong>
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kontak as $ktk)
                  <tr>
                    <td class="mb-0 fw-normal">{{$loop->iteration}}</td>
                    <td class="mb-0 fw-normal">{{$ktk->username}}</td>
                    <td class="mb-0 fw-normal">{{$ktk->email}}</td>
                    <td class="mb-0 fw-normal">{{$ktk->subject}}</td>
                    <td class="mb-0 fw-normal">{{$ktk->message}}</td>
                    <td class="mb-0 fw-normal">
                    <a href="{{route('admin.kontak.detail',['id'=>$ktk->id])}}" class=" btn btn-sm btn-info" data-toggle="tooltip"><div class="bi icon dripicons-trash"></div>Detail</a>
                    <a href="{{route('admin.kontak.hapus',['id'=>$ktk->id])}}" class=" btn btn-sm btn-danger" data-toggle="tooltip"><div class="bi icon dripicons-trash"></div>Hapus</a>
                         
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>
@endsection
