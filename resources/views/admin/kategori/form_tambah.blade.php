@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Tambah Kategori</strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.kategori.tambah')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="nama_kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" pattern="^[a-zA-Z0-9]+$" />
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="form-label mt-2">Deskripsi</label>
                            <textarea name="deskripsi" id="text" onkeyup="textKomen()"  cols="30" rows="10" class="form-control" name="deskripsi"></textarea>
                        </div>
                        

                        <button  type="submit" class="btn btn-primary mt-3" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.kategori.dashboard')}}" class="btn btn-outline-primary">Cencel</a>

                    </form>
          </div>
        </div>
    </section>
    
         
            
@endsection
