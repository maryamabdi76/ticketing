
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner style-two" data-background="{{asset('images/banner/banner10.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">لیگ فوتبال</span>
                        <span class="d-block"></span></h3>
                    <div class="tags">
                        <span>17 South Sherman Street Astoria, NY 11106</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="/theater-ticket" class="custom-button back-button">
                        <i class="fa fa-angle-double-left"></i> قبلی
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">دوشنبه ، 20 فروردین 1399 </span>
                    <select class="select-bar">
                        <option value="sc1">09:40</option>
                        <option value="sc2">13:45</option>
                        <option value="sc3">15:45</option>
                        <option value="sc4">19:50</option>
                    </select>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>دقیقه مانده</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">پرده نمایش</h4>
                <div class="screen-thumb">
                    <img src="{{asset('images/movie/screen-thumb.png')}}" alt="movie">
                </div>
                <h5 class="subtitle">silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        <li class="seat-line">
                            <span>G</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>G</span>
                        </li>
                        <li class="seat-line">
                            <span>f</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="{{asset('images/movie/seat01-free.png')}}" alt="seat">
                                            <span class="sit-num">f7</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="{{asset('images/movie/seat01-free.png')}}" alt="seat">
                                            <span class="sit-num">f8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free">
                                            <img src="{{asset('images/movie/seat01-free.png')}}" alt="seat">
                                            <span class="sit-num">f9</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="{{asset('images/movie/seat01-free.png')}}" alt="seat">
                                            <span class="sit-num">f10</span>
                                        </li>
                                        <li class="single-seat seat-free">
                                            <img src="{{asset('images/movie/seat01-free.png')}}" alt="seat">
                                            <span class="sit-num">f11</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>f</span>
                        </li>
                    </ul>
                </div>
                <h5 class="subtitle">silver plus</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area couple">
                        <li class="seat-line">
                            <span>e</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>e</span>
                        </li>
                        <li class="seat-line">
                            <span>d</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-booked.png')}}" alt="seat">
                                            <span class="sit-num">D7 D8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>d</span>
                        </li>
                        <li class="seat-line">
                            <span>c</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">f11 f12</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>c</span>
                        </li>
                        <li class="seat-line">
                            <span>b</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">b7 b8</span>
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                        <li class="single-seat">
                                            <img src="{{asset('images/movie/seat02.png')}}" alt="seat">
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>b</span>
                        </li>
                        <li class="seat-line">
                            <span>a</span>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a1 a2</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a3 a4</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a5 a6</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a7 a8</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a9 a10</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="front-seat">
                                    <ul>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a11</span>
                                        </li>
                                        <li class="single-seat seat-free-two">
                                            <img src="{{asset('images/movie/seat02-free.png')}}" alt="seat">
                                            <span class="sit-num">a12</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span>a</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="proceed-book bg_img" data-background="{{asset('images/movie/movie-bg-proceed.jpg')}}">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span>شما صندلی های زیر را انتخاب کردید</span>
                        <h3 class="title">d9, d10</h3>
                    </div>
                    <div class="book-item">
                        <span>قیمت نهایی</span>
                        <h3 class="title">150.000 تومان</h3>
                    </div>
                    <div class="book-item">
                        <a href="/theater-checkout" class="custom-button">ادامه دادن <i class="fa fa-angle-double-left"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
    @endsection