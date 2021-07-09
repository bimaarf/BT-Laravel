@extends('layouts.backend.main')
@section('dashboard', 'active')
@section('content')
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Dashboard</strong>
            </h5>
          </div>
          <div class="card-body">
          <section>
        <div class="row">
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Total Posts</h4>
                      <p class="mb-0">Berita</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">{{$totalBerita}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                    </div>
                    <div>
                      <h4>Message</h4>
                      <p class="mb-0">User Contact</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <h2 class="h1 mb-0">{{$totalKontak}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-danger">{{$totalTrend}}</h3>
                    <p class="mb-0">Trending</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-rocket text-danger fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success">{{$totalUser}}</h3>
                    <p class="mb-0">Users</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-user text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between p-md-1">
                  <div class="d-flex flex-row">
                    <div class="align-self-center">
                      <h2 class="h1 mb-0 me-4">{{$totalKategori}}</h2>
                    </div>
                    <div>
                      <h4>Kategori</h4>
                      <p class="mb-0">Monthly Cost</p>
                    </div>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-wallet text-success fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          </div>
        </div>
    </section>
    <section class="mb-4">
        <div class="card">
          <div class="card-header text-center py-3">
            <h5 class="mb-0 text-center">
              <strong>Tambah Berita</strong>
            </h5>
          </div>
          <div class="card-body">
          <form method="POST" action="{{route('admin.pending.tambah')}}" enctype="multipart/form-data" >
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
                        <a href="#" class="btn btn-outline-primary">Cencel</a>

                    </form>
          </div>
        </div>
    </section>
    
    
         
            
@endsection
