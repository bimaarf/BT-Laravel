@extends('layouts.backend.main')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Tambah Url Video (embed) </strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.youtube.tambah')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="judul" class="form-label mt-2">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" >
                        </div>

                        <div class="form-group">
                            <label for="link" class="form-label mt-2">Url YT</label>
                            <input type="text" class="form-control" id="link" name="link" placeholder="http://www.example.com" >
                        </div>
                        

                        <button  type="submit" class="btn btn-primary mt-3" id="kirimKomen">Submit</button>
                        <a href="{{route('admin.youtube.dashboard')}}" class="btn btn-outline-primary">Cencel</a>

                    </form>
          </div>
        </div>
    </section>
    
         
            
@endsection
