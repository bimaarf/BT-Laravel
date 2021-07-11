@extends('layouts.frontend.main')
@section('title', $beritaRight->judul)
@section('isi', $beritaRight->isi)
@section('content')
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('frontend/assets/img/logo/cm-150.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- load -->
    <section class="blog_area single-post-area section-padding">
        
      <div class="container " style="margin-top:-100px">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset('gambar/'.$beritaRight->cover_img)}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$beritaRight->judul}}</h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i> {{$beritaRight->kategori->nama_kategori}}</a></li>
                        <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                     </ul>
                        <div class="section-tittle trending-bottom single-bottom mb-35">
                            <div class=" card-header border-0"><b>Baca Juga</b>
                                    
                                <div class="trand-right-single d-flex mt-2">
                                     <ul>
                                    @foreach($topNews as $top)
                                        <li><p class="text-danger"><a href="{{route('berita.views',['key'=>$top->berita->key])}}">{{$top->berita->judul}}</a></p></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="about-prea">
                                    <p class="about-pera1 mb-25 tx-w-space text-justify"><b>CORETANMAHASISWA.COM - </b> {{$beritaRight->isi}}</p>
                                </div> 
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="{{route('fe-berita.search')}}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="search" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                         @foreach($kategori as $ktg)
                        <li>
                           <a href="{{route('fe-berita.kategori')}}" class="d-flex">
                              <p>{{$ktg->nama_kategori}}</p>
                           </a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     @foreach($berita as $brt)
                     <div class="media post_item">
                        <img src="{{asset('gambar/'.$brt->cover_img)}}" width="80" alt="post">
                        <div class="media-body">
                           <a href="{{route('berita.views',['key'=>$brt->key])}}">
                              <h3>{{substr($brt->judul, 0, 30)}}</h3>
                           </a>
                           <p>{{$brt->created_at}}</p>
                        </div>
                     </div>
                     @endforeach
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                         @foreach($kategori as $ktg)
                        <li>
                           <a href="{{route('fe-berita.kategori')}}">{{$ktg->nama_kategori}}</a>
                        </li>
                        @endforeach
                     </ul>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>

@endsection