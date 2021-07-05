@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Detail Kontak</strong>
            </h5>
          </div>
          <div class="card-body">
            <table class="table table-hover">
                    <tr>
                        <th>Username</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$kontak->username}} </p></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>
                            <div class="com-text" ><p class="mb-0 fw-normal">{{$kontak->email}} </p></div>
                        </td> 
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{$kontak->subject}} </p></td>
                    </tr>
                    <tr>
                        <th>Message</th>
                        <td><p class="mb-0 mb-0 fw-normal"> {{substr($kontak->message, 0 ,50)}} </p></td>
                    </tr>
                </table>
                <a href="{{route('admin.kontak.dashboard')}}" class="btn btn-outline-primary">Kembali</a>
          </div>
        </div>
    </section>
    
         
            
@endsection
