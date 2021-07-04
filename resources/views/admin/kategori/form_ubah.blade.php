@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Edit Kategori</strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.kategori.ubah',['id'=>$kategori->id])}}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label mt-2" for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{$kategori->nama_kategori}}" pattern="^[a-zA-Z0-9]+$" />
                        </div>
                        <div class="form-group">
                            <label class="form-label mt-2" for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$kategori->deskripsi}}" >
                        </div>
                        

                        <input type="submit" class="btn btn-primary mt-3" id="kirimKomen" value="Submit">
                        <button href="{{route('admin.kategori.dashboard')}}" class="btn btn-outline-primary">Cencel</button>

                    </form>
          </div>
        </div>
    </section>
    
         
            
@endsection
