@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Tambah Berita</strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.berita.tambah')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="judul" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control" id="judul" name="judul" >
                        </div>
                        <div class="form-group">
                            <label for="isi" class="form-label mt-2">Isi Berita</label>
                            <textarea name="isi" id="text" onkeyup="textKomen()"  cols="30" rows="10" class="form-control" name="isi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cover_img" class="form-label mt-2">Foto</label>
                            <input type="file" name="cover_img" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="kategori_id" class="form-label mt-2">Kategori Berita</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                            @foreach($kategori as $kat)
                                <option value="{{$kat->id}}">{{$kat->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button  type="submit" class="btn btn-primary mt-3" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.berita.dashboard')}}" class="btn btn-outline-primary">Cencel</a>

                    </form>
          </div>
        </div>
    </section>
    
         
            
@endsection
