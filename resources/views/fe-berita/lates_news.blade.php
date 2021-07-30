@extends('layouts.frontend.main')
@section('content')
    <div class="about-area">
        <div class="container mt-30"  >
                    <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-8">
                            <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                            @foreach($topTrend as $top)
                        <div class="about-img">
                            <img src="{{asset('gambar/'.$top->berita->cover_img)}}" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{$top->berita->judul}}</h3>
                            @section('title', $top->berita->judul)
                            @section('isi', $top->berita->isi)
                        </div>
                        <div class="about-prea">
                                    <p class="about-pera1 mb-25 tx-w-space text-justify"><b>CORETANMAHASISWA.COM - </b> {{$top->berita->isi}}</p>
                                </div>  
                            @endforeach

                        <div class="section-tittle trending-bottom single-bottom mb-35">
                            <div class=" card-header border-0 "><b>Baca Juga</b>
                                    
                                <div class="trand-right-single d-flex mt-2">
                                    <ul>
                                        @foreach($topNews as $brt)
                                             <li><h6 class="text-danger"><a href="{{route('berita.views',[ 'key'=>$top->berita->key])}}">{{$brt->berita->judul}}</a></h6></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25">* <i>you can also write news or articles, the admin will validate if the news or article does not violate the rules</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                            <!-- From -->
                            
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