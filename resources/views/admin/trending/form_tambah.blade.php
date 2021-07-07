@extends('layouts.backend.main')
@section('trending.formTambah', 'active')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Tambah Trending</strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.trending.tambah')}}" enctype="multipart/form-data" >
                        @csrf
                        
                        <div class="form-group">
                            <label for="berita_id" class="form-label mt-2">Berita Tranding</label>
                            <select name="berita_id" id="berita_id" class="form-control">
                            @foreach($berita as $kat)
                                <option value="{{$kat->id}}">{{$kat->judul}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button  type="submit" class="btn btn-primary mt-3" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.trending.dashboard')}}" class="btn btn-outline-primary">Cencel</a>

                    </form>
          </div>
        </div>
    </section>
    
         
            
@endsection
