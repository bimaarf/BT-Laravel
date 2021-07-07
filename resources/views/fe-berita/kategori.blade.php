@extends('layouts.frontend.main')
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
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-3 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Whats New</h3>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    @foreach($kategori as $brt)
                                    <a class="nav-item nav-link" id="{{$brt->nama_kategori}}-tab" data-toggle="tab" href="#{{$brt->nama_kategori}}" role="tab" aria-controls="{{$brt->nama_kategori}}" aria-selected="false">{{$brt->nama_kategori}}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!-- card one -->
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="whats-news-caption">
                                    <div class="row">
                                    @foreach($whatNews as $brt)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('gambar/'.$brt->cover_img)}}" alt="#">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{$brt->kategori->nama_kategori}}</span>
                                                    <h4><a href="{{route('berita.views',['id'=>$brt->id, 'judul'=>$brt->judul])}}">{{substr($brt->judul, 0, 50)}}...</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
            

                                    </div>
                                </div>
                            </div>
                            <!-- Card two -->
                            @foreach($kategori as $ktg)
                            <div class="tab-pane fade" id="{{$ktg->nama_kategori}}" role="tabpanel" aria-labelledby="{{$ktg->nama_kategori}}-tab">
                                <div class="whats-news-caption">
                                    <div class="row">
                                        @foreach($whatNews as $brt)
                                                @if($brt->kategori->nama_kategori == $ktg->nama_kategori)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="single-what-news mb-100">
                                                <div class="what-img">
                                                    <img src="{{asset('gambar/'.$brt->cover_img)}}" alt="#">
                                                </div>
                                                <div class="what-cap">
                                                    <span class="color1">{{$brt->kategori->nama_kategori}}</span>
                                                    <h4><a href="{{route('berita.views',['id'=>$brt->id, 'judul'=>$brt->judul])}}">{{substr($brt->judul, 0, 50)}}...</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                                @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            <!-- Card three -->
                            
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-40">
                                <h3>Follow Us</h3>
                            </div>
                            <!-- Flow Socail -->
                            <div class="single-follow mb-45">
                                <div class="single-box">
                                    
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="https://twitter.com/Eunachii"><img src="{{asset('frontend/assets/img/news/icon-tw.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>@Eunachii</span>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="https://instagram.com/bima_arifa"><img src="{{asset('frontend/assets/img/news/icon-ins.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>@bima_arifa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Poster -->
                            <div class="news-poster d-none d-lg-block">
                                <img src="{{asset('frontend/assets/img/news/news_card.jpg')}}" alt="">
                            </div>
                        </div>
        </div>
    </div>
</section>
@endsection