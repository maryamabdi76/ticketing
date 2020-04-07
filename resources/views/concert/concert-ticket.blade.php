
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
            <a href="/concert-seat" class="custom-button seatPlanButton">نقشه صندلی ها <i class="fas fa-angle-left"></i></a>
        </div>
    </section>
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">دیجیتال مارکتینگ</span>
                        <span class="d-block">2020</span></h3>
                    <div class="tags">
                        <span>لورم</span>
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
    <div class="ticket-plan-section padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-lg-0">
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
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Event-Section========== -->
    <div class="event-facility padding-bottom padding-top">
        <div class="container"><div class="section-header-3">
            <span class="cate">قیمت بلیت ها</span>
            <h2 class="title">make an appointment</h2>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
        </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item">
                        <div class="ticket-thumb">
                            <img src="{{asset('images/event/ticket/ticket01.png')}}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">بلیت استاندارد</span>
                            <h2 class="amount">49.000 تومان</h2>
                            <ul>
                                <li>دسترسی کامل به کلیه سخنرانی ها و کارگاه ها</li>
                                <li class="del"><del>ارائه فیلم</del></li>
                                <li class="del"><del>ملاقات با همه سخنرانان</del></li>
                            </ul>
                            <a href="#" class="custom-button">خرید بلیت</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item two">
                        <div class="hot">
                            <span>hot</span>
                        </div>
                        <div class="ticket-thumb">
                            <img src="{{asset('images/event/ticket/ticket02.png')}}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">بلیت ویژه</span>
                            <h2 class="amount">79.000 تومان</h2>
                            <ul>
                                <li>دسترسی کامل به کلیه سخنرانی ها و کارگاه ها</li>
                                <li>ارائه فیلم</li>
                                <li class="del"><del>ملاقات با همه سخنرانان</del></li>
                            </ul>
                            <a href="#" class="custom-button">خرید بلیت</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="ticket--item three">
                        <div class="ticket-thumb">
                            <img src="{{asset('images/event/ticket/ticket03.png')}}" alt="event">
                        </div>
                        <div class="ticket-content">
                            <span class="ticket-title">بلیت VIP</span>
                            <h2 class="amount">99.000 تومان</h2>
                            <ul>
                                <li>دسترسی کامل به کلیه سخنرانی ها و کارگاه ها</li>
                                <li>ارائه فیلم</li>
                                <li>ملاقات با همه سخنرانان</li>
                            </ul>
                            <a href="#" class="custom-button">خرید بلیت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->

    @endsection
