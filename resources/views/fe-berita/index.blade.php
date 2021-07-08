@extends('layouts.frontend.main')
@section('title', 'Coretan Mahasiswa | The Most Engaging Media for Millennials and Gen-Z')
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
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                @foreach($topTrendText as $topText)
                                    <li class="news-item">{{substr($topText->berita->judul, 0 , 50)}}...</li>
                                @endforeach
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <!-- Trending Top -->
                        @foreach($topTrend as $top)
                        <div class="trending-top mb-30">
                            <div class="trend-top-img rounded">
                                <img src="{{asset('gambar/'.$top->berita->cover_img)}}" alt="">
                                <div class="trend-top-cap">
                                    <span>{{$top->berita->kategori->nama_kategori}}</span>
                                    <h2><a href="{{route('berita.views',['key'=>$top->berita->key])}}">{{substr($top->berita->judul, 0, 50)}}...</a></h2>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                              @foreach($botTrend as $brt)
                              <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30 rounded thumb-post">
                                        <img src="{{asset('gambar/'.$brt->berita->cover_img)}}" width="170" height="120" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">{{$brt->berita->kategori->nama_kategori}}</span>
                                        <h4><a href="{{route('berita.views',['key'=>$brt->berita->key])}}">{{substr($brt->berita->judul, 0, 85)}}...</a></h4>
                                    </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-5">
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
                    </div>
                    @foreach($beritaRight as $brt)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img rounded thumb-post">
                                <img src="{{asset('gambar/'.$brt->cover_img)}}" width="150" height="100"  alt="right" >
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$brt->kategori->nama_kategori}}</span>
                                <h4><a href="{{route('berita.views',['key'=>$brt->key])}}">{{substr($brt->judul, 0, 50)}}...</a></h4>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly2-news-area weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            @foreach($topNews as $brt)
                            <div class="weekly2-single">
                                <div class="weekly2-img rounded thumb-post">
                                    <img src="{{asset('gambar/'. $brt->berita->cover_img)}}" height="120" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">{{$brt->berita->kategori->nama_kategori}}</span>
                                    <p>{{$brt->berita->created_at}}</p>
                                    <h4><a href="{{route('berita.views',['key'=>$brt->berita->key])}}">{{substr($brt->berita->judul, 0, 50)}}...</a></h4>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <!-- End Weekly-News -->
   <!-- Whats New Start -->
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
                                                    <h4><a href="{{route('berita.views',['key'=>$brt->key])}}">{{substr($brt->judul, 0, 50)}}...</a></h4>
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
                                                    <h4><a href="{{route('berita.views',['key'=>$brt->key])}}">{{substr($brt->judul, 0, 50)}}...</a></h4>
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
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            @foreach($topNews as $brt)
                            <div class="weekly2-single">
                                <div class="weekly2-img rounded thumb-post">
                                    <img src="{{asset('gambar/'. $brt->berita->cover_img)}}" height="120" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">{{$brt->berita->kategori->nama_kategori}}</span>
                                    <p>{{$brt->berita->created_at}}</p>
                                    <h4><a href="{{route('berita.views',['key'=>$brt->berita->key])}}">{{substr($brt->berita->judul, 0, 50)}}...</a></h4>
                                </div>
                            </div> 
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
    <!-- Start Youtube -->
    
    <!-- End Start youtube -->
    <!--  Recent Articles start -->
    <div class="recent-articles mt-4">
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Recent Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                        @foreach($topNews as $brt)
                            <div class="single-recent mb-100">
                                <div class="what-img rounded">
                                    <img src="{{asset('gambar/'. $brt->berita->cover_img)}}" height="220" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">{{$brt->berita->kategori->nama_kategori}}</span>
                                    <h4><a href="{{route('berita.views',['key'=>$brt->berita->key])}}">{{substr($brt->berita->judul, 0, 30)}}...</a></h4>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </div>           
    <!--Recent Articles End -->
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <!-- <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection
