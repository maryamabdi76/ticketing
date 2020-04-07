
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{asset('images/banner/banner02.jpg')}}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title bold">بلیت <span class="color-theme">فیلم</span> بگیرید</h1>
                <p>بلیت فیلم ها را پشیرفته بخرید ، زمان فیلم ها را پیدا کنید ، تیزر فیلم را تماشا کنید ، بررسی های فیلم را بخوانید و موارد دیگر</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


@include('layouts.bilito.partials.ticketsearch')


    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner01.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-header">
                            <h5 class="m-title">فیلتر</h5> <a href="#0" class="clear-check">پاک کردن همه</a>
                        </div>
                        <div class="widget-1-body">
                            <h6 class="subtitle">زبان</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang1"><label for="lang1">فارسی</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang4"><label for="lang4">English</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang5"><label for="lang5">Multiple Language</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">نمایش</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode1"><label for="mode1">2d</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode2"><label for="mode2">3d</label>
                                </div>
                            </div>
                            <div class="add-check-area">
                                <a href="#0"> نمایش بیشتر <i class="plus mr-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">ژانر</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre1"><label for="genre1">پیش نمایش</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre2"><label for="genre2">ترسناک</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre3"><label for="genre3">درام</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre4"><label for="genre4">عاشقانه</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre5"><label for="genre5">اکشن</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre6"><label for="genre6">کمدی</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre7"><label for="genre7">رمانتیک</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre8"><label for="genre8">انیمیشن</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre9"><label for="genre9">علمی-تخیلی</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="genre" id="genre10"><label for="genre10">ماجراجویی</label>
                                </div>
                            </div>
                            <div class="add-check-area">
                                <a href="#0"> نمایش بیشتر <i class="plus mr-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner02.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">
                                    <div class="item">
                                        <span class="show">نمایش :</span>
                                        <select class="select-bar">
                                            <option value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                            <option value="24">24</option>
                                            <option value="27">27</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="item">
                                        <span class="show">مرتب سازی :</span>
                                        <select class="select-bar">
                                            <option value="showing">در حال نمایش</option>
                                            <option value="exclusive">انحصاری</option>
                                            <option value="trending">مشهور</option>
                                            <option value="most-view">بیشترین نمایش</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li class="active">
                                        <i class="fas fa-th"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-bars"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="row mb-10 justify-content-center">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie01.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">alone</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie02.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">mars</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie03.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">venus</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie04.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">on watch</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie05.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">fury</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie06.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">trooper</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie07.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">horror night</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie08.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">the lost name</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie09.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">calm stedfast</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie10.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">criminal on party</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie11.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">halloween party</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/movie-details">
                                                    <img src="{{asset('images/movie/movie12.jpg')}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/movie-details">the most wanted</a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="movie-area mb-10">
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie01.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie01.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">alone</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie02.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie02.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">mars</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie03.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie03.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">venus</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie04.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie04.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">on watch</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie05.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie05.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">fury</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie06.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie06.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">trooper</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie07.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie07.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">horror night</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie08.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie08.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">the lost name</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie09.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie09.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">calm stedfast</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie10.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie10.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">criminal on party</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie11.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie11.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">halloween party</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details" class="w-100 bg_img h-100" data-background="{{asset('images/movie/movie12.jpg')}}">
                                                <img class="d-sm-none" src="{{asset('images/movie/movie12.jpg')}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="/movie-details">the most wanted</a>
                                            </h5>
                                            <p class="duration">2 ساعت 50 دقیقه</p>
                                            <div class="movie-tags">
                                                <a href="#0">اکشن</a>
                                                <a href="#0">ماجراجویی</a>
                                                <a href="#0">فانتزی</a>
                                            </div>
                                            <div class="release">
                                                <span>تاریخ انتشار : </span> <a href="#0">20 فروردین 1399</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                            <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area text-center">
                            <a href="#0"><i class="fas fa-angle-double-right"></i><span> قبلی </span></a>
                            <a href="#0">1</a>
                            <a href="#0">2</a>
                            <a href="#0" class="active">3</a>
                            <a href="#0">4</a>
                            <a href="#0">5</a>
                            <a href="#0"><span>بعدی </span><i class="fas fa-angle-double-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->
    @endsection
