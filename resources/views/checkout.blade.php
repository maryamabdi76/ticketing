
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">{{$eventname}}</h3>
                    <div class="tags">
                    <a href="#0">{{$location->name}}</a>
                        {{-- <a href="#0">English - 2D</a> --}}
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
                    <a href="/seat/{{$show[0]->shows_id}}" class="custom-button back-button">
                        <i class="fa fa-angle-double-left"></i> قبلی
                    </a>
                </div>
                    {{-- <div class="item date-item">
                        <span class="date">دوشنبه ، 20 فروردین 1399 </span>
                        <select class="select-bar">
                            <option value="sc1">09:40</option>
                            <option value="sc2">13:45</option>
                            <option value="sc3">15:45</option>
                            <option value="sc4">19:50</option>
                        </select>
                    </div> --}}
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>دقیقه مانده</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if(empty(Auth::user()->name))
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">عضو بیلیتو هستید؟</h5>
                            <p>برای کسب امتیاز و ورود آسان تر به سیستم وارد شوید!</p>
                        </div>
                        <a href="/login" class="sign-in-area">
                            <i class="fas fa-user"></i><span>ورود</span>
                        </a>
                    </div>
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">اطلاعات تماس خود را به اشتراک بگذارید </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="نام و نام  خانوادگی">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="ایمیل">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="تلفن همراه ">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="ادامه" class="custom-button">
                            </div>
                        </form>
                    </div>
                    @endif
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">کد تخفیف </h5>
                        <form class="checkout-contact-form">
                            <div class="form-group">
                                <input type="text" placeholder="کد تخفیف را وارد کنید">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="اعمال" class="custom-button">
                            </div>
                        </form>
                    </div>
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">عملیات پرداخت </h5>
                        <ul class="payment-option">
                            <li class="active">
                                <a href="#0">
                                    <img src="{{asset('images/payment/card.png')}}" alt="payment">
                                    <span>Credit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="{{asset('images/payment/card.png')}}" alt="payment">
                                    <span>Debit Card</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <img src="{{asset('images/payment/paypal.png')}}" alt="payment">
                                    <span>paypal</span>
                                </a>
                            </li>
                        </ul>
                        <h6 class="subtitle">مشخصات کارت خود را وارد کنید </h6>
                        <form class="payment-card-form">
                            <div class="form-group w-100">
                                <label for="card1">شماره کارت</label>
                                <input type="text" id="card1">
                                <div class="left-icon">
                                    <i class="fa fa-credit-card"></i>
                                </div>
                            </div>
                            <div class="form-group w-100">
                                <label for="card2">رمز دوم</label>
                                <input type="text" id="card2">
                                <div class="left-icon">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="card3">تاریخ انقضا</label>
                                <input type="text" id="card3" placeholder="ماه/سال">
                            </div>
                            <div class="form-group">
                                <label for="card4">CVV2</label>
                                <input type="text" id="card4" placeholder="CVV2">
                            </div>
                            <div class="form-group check-group">
                                <input id="card5" type="checkbox" checked>
                                <label for="card5">
                                    <span class="title">پرداخت سریع</span>
                                    <span class="info">این اطلاعات کارت را در حساب بیلیتو من ذخیره کنید .</span>
                                </label>
                            </div>
                            <div class="form-group">
                                {{-- <input type="submit" class="custom-button" value="پرداخت"> --}}
                                <a href="/thank" class="custom-button back-button">پرداخت</a>
                            </div>
                        </form>
                        <p class="notice">
                            با کلیک روی "پرداخت" شما با <a href="#0">شرایط و ضوابط</a> موافقت می کنید .
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">بلیت</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">{{$eventname}}</h6>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>{{$location->name}}</span><span>{{$show[0]->salons_name}}</span></h6>
                            <div class="info"><span>تاریخ</span> <span>{{$show[0]->shows_date}}</span></div>
                            <div class="info"><span>سانس</span> <span>{{$show[0]->end}}&nbsp;-&nbsp;{{$show[0]->begin}}</span></div>
                                <div class="info"><span>شماره صندلی</span>
                                    <span>@foreach($factor[0]->shows as $a)
                                    &nbsp;{{$a->pivot->seat_number}}
                                    @endforeach</span>
                                </div>
                            </li>
                            {{-- <li>
                                <h6 class="subtitle mb-0"><span>قیمت هر بلیت</span><span>{{$show[0]->price}} تومان</span></h6>
                            </li> --}}
                        </ul>
                        <ul>
                                <li>
                                    <span class="info"><span>جمع کل</span><span>{{$factor[0]->sum}} تومان</span></span>
                                    <span class="info"><span>تخفیف</span><span>{{$factor[0]->discount}} تومان</span></span>
                                </li>
                            </ul>
                    </div>
                    <div class="proceed-area  text-center">
                    <h6 class="subtitle"><span>مبلغ قابل پرداخت</span><span>{{$factor[0]->total}} تومان</span></h6>
                        <a href="/thank" class="custom-button back-button">پرداخت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    @endsection
