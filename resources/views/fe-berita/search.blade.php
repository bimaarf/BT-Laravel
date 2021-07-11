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
<section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($berita as $brt)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{asset('gambar/'. $brt->cover_img)}}" alt="">
                                <a href="#" class="blog_item_date">
                                    <p>{{$brt->created_at}}</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{route('berita.views',['key'=>$brt->key])}}">
                                    <h2>{{$brt->judul}}</h2>
                                    @section('title', $brt->judul)
                                    @section('isi', $brt->isi)
                                </a>
                                <p>{{substr($brt->isi, 0, 150)}}... <a href="{{route('berita.views',['key'=>$brt->key])}}">Read more</a> </p>
                                <ul class="blog-info-link">
                                    <li><a href="https://instagram.com/bima_arifa"><i class="fa fa-user"></i>{{$brt->kategori->nama_kategori}}</a></li>
                                    <!-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> -->
                                </ul>
                            </div>
                        </article>

                        @endforeach

                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
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

                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list">
                            @foreach($kategori as $ktg)
                                <li>
                                    <a href="#">{{$ktg->nama_kategori}}</a>
                                </li>
                               @endforeach
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            @foreach($beritaRight as $brt)
                            <div class="media post_item">
                                <img src="{{asset('gambar/'. $brt->cover_img)}}" width="180" alt="post">
                                <div class="media-body">
                                    <a href="{{route('berita.views',['key'=>$brt->key])}}">
                                        <h3>{{substr($brt->judul, 0 , 30)}}...</h3>
                                    </a>
                                    <p>{{$brt->craeted_at}}</p>
                                </div>
                            </div>
                            @endforeach
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection