
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Window-Warning-Section========== -->
    {{-- <section class="window-warning inActive">
        <div class="lay"></div>
        <div class="warning-item">
            <h6 class="subtitle">خوش آمدید</h6>
            <h4 class="title">صندلی خود را انتخاب کنید</h4>
            <div class="thumb">
                <img src="{{asset('images/movie/seat-plan.png')}}" alt="movie">
            </div>
            <a href="/seat/" class="custom-button seatPlanButton">نقشه صندلی ها <i class="fas fa-angle-left"></i></a>
        </div>
    </section> --}}
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                <h3 class="title">{{$eventname}}</h3>
                    <div class="tags">
                        {{-- <a href="#0">انگلیسی</a> --}}
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
                        @foreach($count as $v)
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">
                                        @foreach($locations as $l)
                                        @if($l['id'] === $v)
                                        {{$l['name']}}
                                        @endif
                                       @endforeach
                                </a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule justify-content-lg-start">
                                @foreach($sans as $s)
                                @if($s->locations_id===$v)
                                <div class="item">
                                    <form action="/seat" method="post">
                                        @csrf
                                        <input type="hidden" name="salons_id" value="{{$s->salons_id}}">
                                        <input type="hidden" name="shows_id" value="{{$s->shows_id}}">
                                        <input type="submit" value="{{$s->begin}}" class="bgtrasparent maxh2">
                                        {{-- <a href="/seat/{{$s->salons_id}}" class="text-white"> --}}
                                            {{-- {{$s->begin}} --}}
                                        {{-- </a> --}}
                                    </form>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </li>
                        @endforeach
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
