
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Event-Banner-Section========== -->
    <section class="event-banner-section bg_img " data-background="">
    {{-- <section class="event-banner-section bg_img " data-background="{{asset('/').$concert->Images()->get()->first()->path}}"> --}}
        {{-- <section class="event-banner-section bg_img" data-background="{{asset('images/banner/banner06.jpg')}}"> --}}
            {{-- <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="{{asset('/').$concert->Images()->get()->first()->path}}" alt="movie">
                </div>
            </div> --}}
        <div class="container">
            <div class="event-banner">
                <a href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video-popup">
                    <span></span>
                    <i class="flaticon-play-button"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ==========Event-Banner-Section========== -->

    <!-- ==========Event-Book-Search========== -->
    <section class="event-book-search padding-top pt-lg-0">
        <div class="container">
            <div class="event-search bg_img" data-background="{{asset('images/ticket/ticket-bg01.jpg')}}">
                <div class="event-search-top">
                    <div class="left">
                        <h3 class="title">{{$concert->name}}</h3>
                    </div>
                    <div class="right">
                        <ul class="countdown">
							<li>
								<h2><span class="days">00</span></h2>
								<p class="days_text">روز</p>
							</li>
							<li>
								<h2><span class="hours">00</span></h2>
								<p class="hours_text">ساعت</p>
							</li>
							<li>
								<h2><span class="minutes">00</span></h2>
								<p class="minu_text">دقیقه</p>
							</li>
							<li>
								<h2><span class="seconds">00</span></h2>
								<p class="seco_text">ثانیه</p>
							</li>
						</ul>
                        <a href="/concert-ticket" class="custom-button">خرید بلیت</a>
                    </div>
                </div>
                <div class="event-search-bottom">
                    <div class="contact-side">
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{asset('images/event/icon/event-icon01.png')}}" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up">{{$concert->date}}</span>
                                <span></span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{asset('images/event/icon/event-icon02.png')}}" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up">خیابان لورم</span>
                                <span>شهر لورم</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-thumb">
                                <img src="{{asset('images/event/icon/event-icon03.png')}}" alt="event">
                            </div>
                            <div class="item-content">
                                <span class="up">ارتباط با ما :</span>
                                <a href="MailTo:hello@Boleto .com">hello@Ticketing.com</a>
                            </div>
                        </div>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Book-Search========== -->

    <!-- ==========Event-About========== -->
    <section class="event-about padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between flex-wrap-reverse">
                <div class="col-lg-7 col-xl-6">
                    <div class="event-about-content">
                        <div class="section-header-3 left-style m-0">
                            <span class="cate">آماده هستید که شرکت کنید ؟</span>
                            <h2 class="title">{{$concert->name}}<span></span></h2>
                                        <div class="movie-details">
                                            <div class="tab summery-review">
                                                <ul class="tab-menu">
                                                    <li class="active">
                                                         کنسرت
                                                    </li>
                                                    <li>
                                                        نظرات کاربران <span>{{$count}}</span>
                                                    </li>
                                                </ul>
                                                <div class="tab-area">
                                                    <div class="tab-item active">
                                                        {{-- <div class="item">
                                                            <h5 class="sub-title">خلاصه</h5>
                                                            <p>{{$concert->description}}</p>
                                                        </div> --}}
                                                        <div class="item">
                                                            <div class="header">
                                                                <h5 class="sub-title">خواننده</h5>
                                                            </div>
                                                            <p>{{$concert->act}}</p>
                                                        </div>
                                                        <div class="item">
                                                            <div class="header">
                                                                <h5 class="sub-title">عوامل</h5>
                                                            </div>
                                                            <p style="white-space: pre-wrap">{{$concert->team}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="tab-item">
                                                        @foreach($reviews as $v)
                                                            <div class="movie-review-item">
                                                                <div class="author">
                                                                    <div class="thumb">
                                                                        @if($v->user->gender===1)
                                                                            <img src="{{asset('images/avatar/femaleavatar.png')}}" alt="female avatar"/>
                                                                        @endif
                                                                        @if($v->user->gender===2)
                                                                            <img src="{{asset('images/avatar/maleavatar.png')}}" alt="male avatar"/>
                                                                        @endif
                                                                    </div>
                                                                    <div class="movie-review-info">
                                                                        <h6 class="subtitle mt-3">{{$v->user->name}}</h6>
                                                                        <span class="reply-date">{{$v->created_at}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="movie-review-content">
                                                                        <div class="review">
                                                                        @for ($i=1; $i <= 5 ; $i++)
                                                                        <i class="fas fa-heart {{ ($i <= $v->rating) ? 'heart__f' : 'heart__o'}}"></i>
                                                                        @endfor
                                                                        </div>
                                                                    <p>{{$v->comment}}</p>
                                                                    <div class="review-meta">
                                                                        <a href="#0">
                                                                            <i class="flaticon-hand"></i><span>{{$v->like}}</span>
                                                                        </a>
                                                                        <a href="#0" class="dislike">
                                                                            <i class="flaticon-dont-like-symbol"></i><span>{{$v->dislike}}</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        @if(!empty(Auth::user()->name))
                                                            <div class="widget-1 widget-offer">
                                                                    <h3 class="title mt-5">نظرات خود را ثبت کنید</h3>
                                                                    <div class="offer-body">
                                                                        <div class="offer-item">
                                                                            <form method="POST" action="/review" class="mt-0" id="review">
                                                                                @csrf
                                                                                <input type="hidden" name="events_id" value="{{$id}}">
                                                                                <div class="form-group">
                                                                                    <span><label for="rating" class="pl-3">امتیاز شما به این فیلم :</label>
                                                                                    <input type="number" id="rating" name="rating" min="0" max="5" class="inpnumw"></span>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                <textarea rows="8" cols="80" name="comment" form="review" class="bgtrasparent text-white" placeholder="نظر خود را اینجا بنویسید ..."></textarea>
                                                                                </div>
                                                                                <input class="letter__spacing__1 probutton" type="submit" value="ثبت نظر">
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-1 widget-offer">
                                                <h3 class="title mt-5">خرید بلیت</h3>
                                                <div class="offer-body">
                                                    <div class="offer-item">
                                                        @if($flag===0)
                                                            <div class="mt-3 mb-3 text-center">
                                                            <p class="text-white text-center">متاسفانه در حال حاضر این برنامه نمایش داده نمی شود !</p>
                                                            </div>
                                                        @endif
                                                        @if($flag===1)
                                                            <form method="POST" action="/ticket" class="mt-0">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$id}}">
                                                                <span class="text-white pt-1 pb-1">روز مورد نظرتان را انتخاب کنید:</span>
                                                                <select class="myselect-bar1 text-black mt-3 mb-3" name="date">
                                                                    @foreach($date as $d)
                                                                        <option value="{{$d}}">{{$d}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <input class="letter__spacing__1 probutton" type="submit" value="خرید بلیت">
                                                            </form>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="event-about-thumb">
                        <img src="{{asset('/').$concert->Images()->get()->first()->path}}" alt="event">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-About========== -->

    <!-- ==========Gallery-Section========== -->
    <div class="speaker-gallery padding-bottom">
        <div class="row m-0">
            <div class="col-md-6 p-0">
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="{{asset('images/gallery/gallery01.jpg')}}" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="{{asset('images/gallery/gallery01.jpg')}}" alt="gallery">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0">
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="{{asset('images/gallery/gallery02.jpg')}}" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="{{asset('images/gallery/gallery02.jpg')}}" alt="gallery">
                            </div>
                        </div>
                        <div class="gallery-item two">
                            <div class="gallery-thumb">
                                <a href="{{asset('images/gallery/gallery03.jpg')}}" class="img-pop">
                                    <i class="flaticon-loupe"></i>
                                </a>
                                <img src="{{asset('images/gallery/gallery03.jpg')}}" alt="gallery">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gallery-item">
                    <div class="gallery-thumb">
                        <a href="{{asset('images/gallery/gallery04.jpg')}}" class="img-pop">
                            <i class="flaticon-loupe"></i>
                        </a>
                        <img src="{{asset('images/gallery/gallery04.jpg')}}" alt="gallery">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Gallery-Section========== -->

    {{-- <div class="container">
        <div class="row justify-content-center flex-wrap-reverse mb--50">
            <div class="col-lg-7 offset-lg-1 mb-50">
                <div class="movie-details">
                    <div class="tab summery-review">
                        <ul class="tab-menu">
                            <li class="active">
                                خلاصه کنسرت
                            </li>
                            <li>
                                نظرات کاربران <span>147</span>
                            </li>
                        </ul>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="item">
                                    <h5 class="sub-title">خلاصه</h5>
                                    <p>{{$concert->description}}</p>
                                </div>
                                <div class="item">
                                    <div class="header">
                                        <h5 class="sub-title">خواننده</h5>
                                    </div>
                                    <p>{{$concert->act}}</p>
                                </div>
                                <div class="item">
                                    <div class="header">
                                        <h5 class="sub-title">عوامل</h5>
                                    </div>
                                    <p>{{$concert->team}}</p>

                            </div>
                            <div class="tab-item">
                                <div class="movie-review-item">
                                    <div class="author">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="{{asset('images/cast/cast02.jpg')}}" alt="cast">
                                            </a>
                                        </div>
                                        <div class="movie-review-info">
                                            <span class="reply-date">13 روز پیش</span>
                                            <h6 class="subtitle"><a href="#0">minkuk seo</a></h6>
                                            <span>نظر تایید شده <i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                    <div class="movie-review-content">
                                        <div class="review">
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                        </div>
                                        <h6 class="cont-title">Awesome Movie</h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                        <div class="review-meta">
                                            <a href="#0">
                                                <i class="flaticon-hand"></i><span>8</span>
                                            </a>
                                            <a href="#0" class="dislike">
                                                <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                            </a>
                                            <a href="#0">
                                                گزارش مشکل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-review-item">
                                    <div class="author">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="{{asset('images/cast/cast04.jpg')}}" alt="cast">
                                            </a>
                                        </div>
                                        <div class="movie-review-info">
                                            <span class="reply-date">13 روز پیش</span>
                                            <h6 class="subtitle"><a href="#0">rudra rai</a></h6>
                                            <span>نظر تایید شده <i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                    <div class="movie-review-content">
                                        <div class="review">
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                        </div>
                                        <h6 class="cont-title">Awesome Movie</h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                        <div class="review-meta">
                                            <a href="#0">
                                                <i class="flaticon-hand"></i><span>8</span>
                                            </a>
                                            <a href="#0" class="dislike">
                                                <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                            </a>
                                            <a href="#0">
                                                گزارش مشکل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-review-item">
                                    <div class="author">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="{{asset('images/cast/cast01.jpg')}}" alt="cast">
                                            </a>
                                        </div>
                                        <div class="movie-review-info">
                                            <span class="reply-date">13 روز پیش</span>
                                            <h6 class="subtitle"><a href="#0">rafuj</a></h6>
                                            <span>نظر تایید شده <i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                    <div class="movie-review-content">
                                        <div class="review">
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                        </div>
                                        <h6 class="cont-title">Awesome Movie</h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                        <div class="review-meta">
                                            <a href="#0">
                                                <i class="flaticon-hand"></i><span>8</span>
                                            </a>
                                            <a href="#0" class="dislike">
                                                <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                            </a>
                                            <a href="#0">
                                                گزارش مشکل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="movie-review-item">
                                    <div class="author">
                                        <div class="thumb">
                                            <a href="#0">
                                                <img src="{{asset('images/cast/cast03.jpg')}}" alt="cast">
                                            </a>
                                        </div>
                                        <div class="movie-review-info">
                                            <span class="reply-date">13 روز پیش</span>
                                            <h6 class="subtitle"><a href="#0">bela bose</a></h6>
                                            <span>نظر تایید شده <i class="fas fa-check"></i></span>
                                        </div>
                                    </div>
                                    <div class="movie-review-content">
                                        <div class="review">
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                            <i class="flaticon-favorite-heart-button"></i>
                                        </div>
                                        <h6 class="cont-title">Awesome Movie</h6>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز</p>
                                        <div class="review-meta">
                                            <a href="#0">
                                                <i class="flaticon-hand"></i><span>8</span>
                                            </a>
                                            <a href="#0" class="dislike">
                                                <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                            </a>
                                            <a href="#0">
                                                گزارش مشکل
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-more text-center">
                                    <a href="#0" class="custom-button transparent">نمایش بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ==========Speaker-Section========== -->
    {{-- <section class="speaker-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">با کادر ما آشنا شوید</span>
                <h2 class="title">متخصصان پشتیبان</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
            </div>
            <div class="speaker--slider">
                <div class="speaker-slider owl-carousel owl-theme">
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="/concert-speaker">
                                <img src="{{asset('images/speaker/speaker01.jpg')}}" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="/concert-speaker">
                                    سارا کریمی جاوان
                                </a>
                            </h5>
                            <span>بنیانگذار ، مدیر عامل</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="/concert-speaker">
                                <img src="{{asset('images/speaker/speaker02.jpg')}}" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="/concert-speaker">
                                    مریم عبدی وزوانی
                                </a>
                            </h5>
                            <span>بنیانگذار ، مدیر عامل</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="/concert-speaker">
                                <img src="{{asset('images/speaker/speaker03.jpg')}}" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="/concert-speaker">
                                    علیمراد بستانی
                                </a>
                            </h5>
                            <span>متخصص امنیت شبکه</span>
                        </div>
                    </div>
                    <div class="speaker-item">
                        <div class="speaker-thumb">
                            <a href="/concert-speaker">
                                <img src="{{asset('images/speaker/speaker04.jpg')}}" alt="speaker">
                            </a>
                        </div>
                        <div class="speaker-content">
                            <h5 class="title">
                                <a href="/concert-speaker">
                                    سحر اسحاقی
                                </a>
                            </h5>
                            <span>متخصص IT</span>
                        </div>
                    </div>
                </div>
                <div class="speaker-prev">
                    <i class="flaticon-double-right-arrows-angles"></i>
                </div>
                <div class="speaker-next">
                    <i class="flaticon-double-right-arrows-angles"></i>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Speaker-Section========== -->


    <!-- ==========Statistics-Section========== -->
    {{-- <section class="statistics-section padding-top padding-bottom bg_img pb-lg-0" data-background="{{asset('images/statistics/statistics-bg01.jpg')}}">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">ما چه کار می کنیم </span>
                <h2 class="title">آمار اخیر ما </h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
            </div>
            <div class="statistics-wrapper">
                <div class="row mb--20">
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="{{asset('images/statistics/stat01.png')}}" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="450"></h3>
                                <span class="info">Tickets Booked</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="{{asset('images/statistics/stat02.png')}}" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="500"></h3>
                                <span class="info">Usefull Sessions</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-thumb">
                                <img src="{{asset('images/statistics/stat03.png')}}" alt="statistics">
                            </div>
                            <div class="stat-content">
                                <h3 class=" counter-item odometer" data-odometer-final="28"></h3>
                                <span class="info">Talented Speakers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Statistics-Section========== -->

    <!-- ==========Faq-Section========== -->
    {{-- <section class="faq-section padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">ما چطور می توانیم کمک کنیم ؟</span>
                <h2 class="title">سوالات متداول</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
            </div>
            <div class="faq-area padding-bottom">
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <div class="faq-title">
                            <h6 class="title">آیا می توانم بلیط های خود را بعد از قرار دادن سفارش ارتقا دهم ؟</h6>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                            <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                        </div>
                    </div>
                    <div class="faq-item active open">
                        <div class="faq-title">
                            <h6 class="title">چرا روش تحویل بلیط من تغییر کرده است ؟</h6>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                            <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h6 class="title">چرا نام دیگری روی بلیط چاپ شده است و آیا این مسئله در رویداد من مشکل ایجاد خواهد کرد ؟</h6>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                            <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h6 class="title">بلیط های صندلی های من متوالی نیست ، آیا آنها هنوز کنار هم تضمین شده اند ؟</h6>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                            <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h6 class="title">چرا نام دیگری روی بلیط چاپ شده است و آیا این مسئله در رویداد من مشکل ایجاد خواهد کرد ؟</h6>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>Being that Tickto does not own any of the tickets sold on our site, we do not have the ability to exchange or replace tickets with other inventory. </p>
                            <p>If you would like to "upgrade" or change the location of your seats, you can relist your current tickets for sale here and purchase other tickets of your choice. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Faq-Section========== -->

    <!-- ==========Event-Section========== -->
    {{-- <section class="event-details padding-bottom padding-top">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">حامیان رویداد</span>
                <h2 class="title">همکاران و حامیان </h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
            </div>
            <div class="tabTwo sponsor-tab">
                <ul class="tab-menu">
                    <li class="active">
                        حامیان سوپر
                    </li>
                    <li>
                        حامیان طلایی
                    </li>
                    <li>
                        حامیان نقره ای
                    </li>
                </ul>
                <div class="tab-area">
                    <div class="tab-item active">
                        <div class="owl-theme owl-carousel sponsor-slider">
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/1.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/2.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/3.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/4.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/5.png')}}" alt="sponsor">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-theme owl-carousel sponsor-slider">
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/3.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/4.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/5.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/1.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/2.png')}}" alt="sponsor">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-theme owl-carousel sponsor-slider">
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/3.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/1.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/4.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/2.png')}}" alt="sponsor">
                                </a>
                            </div>
                            <div class="sponsor-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/sponsor/5.png')}}" alt="sponsor">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ==========Event-Section========== -->

    @endsection
