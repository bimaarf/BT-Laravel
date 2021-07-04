@extends('layouts.frontend.main')
@section('content')
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('frontend/assets/img/logo/localzone.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
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
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25 tx-w-space"><b>LOCALZONE.ID - </b> {{$beritaRight->isi}}</p>
                                </div> 
                                <div class="section-tittle trending-bottom single-bottom mb-35">
                                    <div class=" card-header border-0"><b>Baca Juga</b>
                                    
                                        <div class="trand-right-single d-flex mt-2">
                                            <ul>
                                            @foreach($topNews as $top)
                                                <li><h6 class="text-danger"><a href="{{route('berita.view',['id'=>$top->id, 'judul'=>$top->berita->judul])}}">{{$top->berita->judul}}</a></h6></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-prea">
                                    <p class="about-pera1 mb-25"></p>
                                </div>
                                <div class="social-share pt-30">
                                    <div class="section-tittle">
                                        <h3 class="mr-20">Share:</h3>
                                        <ul>
                                            <li><a href="#"><img src="{{asset('frontend/assets/img/news/icon-ins.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/assets/img/news/icon-fb.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/assets/img/news/icon-tw.png')}}" alt=""></a></li>
                                            <li><a href="#"><img src="{{asset('frontend/assets/img/news/icon-yo.png')}}" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- From -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form mb-80" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control error" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control error" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
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
                                            <a href="#"><img src="{{asset('frontend/assets/img/news/icon-fb.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">  
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div> 
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('frontend/assets/img/news/icon-tw.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                        <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('frontend/assets/img/news/icon-ins.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
                                        </div>
                                    </div>
                                    <div class="follow-us d-flex align-items-center">
                                        <div class="follow-social">
                                            <a href="#"><img src="{{asset('frontend/assets/img/news/icon-yo.png')}}" alt=""></a>
                                        </div>
                                        <div class="follow-count">
                                            <span>8,045</span>
                                            <p>Fans</p>
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