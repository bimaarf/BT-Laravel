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
<div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                    @foreach($topTrendText as $trd)
                                        <li class="news-item">{{$trd->berita->judul}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                    <img src="{{asset('gambar/'.$beritaRight->cover_img)}}" alt="">
                                </div>
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>{{$beritaRight->judul}}</h3>
                                    @section('title', $beritaRight->judul)
                                </div>
                                <div class="section-tittle trending-bottom single-bottom mb-35">
                                    <div class=" card-header border-0"><b>Baca Juga</b>
                                    
                                        <div class="trand-right-single d-flex mt-2">
                                            <ul>
                                            @foreach($topNews as $top)
                                                <li><h6 class="text-danger"><a href="{{route('berita.views',['key'=>$top->berita->key])}}">{{$top->berita->judul}}</a></h6></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25 tx-w-space"><b>CORETANMAHASISWA.COM - </b> {{$beritaRight->isi}}</p>
                                </div> 
                                
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25"></p>
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
        </div>

@endsection