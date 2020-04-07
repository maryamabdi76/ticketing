
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Window-Warning-Section========== -->
    <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">خوش آمدید</h6>
            <h4 class="title">صندلی خود را انتخاب کنید</h4>
            <div class="thumb">
                <img src="{{asset('images/movie/seat-plan.png')}}" alt="movie">
            </div>
            <a href="/movie-seat" class="custom-button seatPlanButton">نقشه صندلی ها <i class="fas fa-angle-left"></i></a>
        </div>
    </section>
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="{{asset('images/banner/banner03.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                    <h3 class="title">Venus</h3>
                    <div class="tags">
                        <a href="#0">انگلیسی</a>
                        <a href="#0">فارسی</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('images/ticket/city.png')}}" alt="ticket">
                    </div>
                    <span class="type">شهر</span>
                    <select class="select-bar">
                        <option value="london">تهران</option>
                        <option value="dhaka">اصفهان</option>
                        <option value="rosario">شیراز</option>
                        <option value="madrid">کیش</option>
                        <option value="koltaka">گیلان</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('images/ticket/date.png')}}" alt="ticket">
                    </div>
                    <span class="type">روز</span>
                    <select class="select-bar">
                        <option value="26-12-19">23/10/2020</option>
                        <option value="26-12-19">24/10/2020</option>
                        <option value="26-12-19">25/10/2020</option>
                        <option value="26-12-19">26/10/2020</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('images/ticket/cinema.png')}}" alt="ticket">
                    </div>
                    <span class="type">سینما</span>
                    <select class="select-bar">
                        <option value="Awaken">ملت</option>
                        <option value="dhaka">ماندانا</option>
                        <option value="rosario">آزادی</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('images/ticket/exp.png')}}" alt="ticket">
                    </div>
                    <span class="type">نمایش</span>
                    <select class="select-bar">
                        <option value="English-2D">English-2D</option>
                        <option value="English-3D">English-3D</option>
                        <option value="Hindi-2D">Hindi-2D</option>
                        <option value="Hindi-3D">Hindi-3D</option>
                        <option value="Telegu-2D">Telegu-2D</option>
                        <option value="Telegu-3D">Telegu-3D</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">سینما ملت</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item">
                                    13:45
                                </div>
                                <div class="item">
                                    15:45
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">سینما آزادی</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item">
                                    13:45
                                </div>
                                <div class="item">
                                    15:45
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                        <li  class="active">
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">سینما ماندانا</a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule">
                                <div class="item">
                                    09:40
                                </div>
                                <div class="item active">
                                    13:45
                                </div>
                                <div class="item">
                                    15:45
                                </div>
                                <div class="item">
                                    19:50
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner03.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->


    @endsection
