
@extends('layouts.bilito.mainlayout')
@section('content')


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

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="/movie-seat" class="custom-button back-button">
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

    <!-- ==========Event-Section========== -->
    <div class="event-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                        <div class="title-area">
                            <h5 class="title">عضو بیلیتو هستید؟</h5>
                            <p>برای کسب امتیاز و ورود آسان تر به سیستم وارد شوید!</p>
                        </div>
                        <a href="#0" class="sign-in-area">
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
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">انتخاب بلیت</h5>
                        <div class="ticket--area row justify-content-center">
                            <div class="col-sm-6 col-md-4">
                                <div class="ticket-item">
                                    <div class="ticket-thumb">
                                        <img src="{{asset('images/event/ticket/ticket01.png')}}" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">بلیت استاندارد</span>
                                        <h2 class="amount"><sup>$</sup>49</h2>
                                        <a href="#0" class="t-button">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="ticket-item two">
                                    <div class="hot">
                                        <span>hot</span>
                                    </div>
                                    <div class="ticket-thumb">
                                        <img src="{{asset('images/event/ticket/ticket02.png')}}" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">بلیت ویژه</span>
                                        <h2 class="amount"><sup>$</sup>79</h2>
                                        <a href="#0" class="t-button">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="ticket-item three">
                                    <div class="ticket-thumb">
                                        <img src="{{asset('images/event/ticket/ticket03.png')}}" alt="event">
                                    </div>
                                    <div class="ticket-content">
                                        <span class="ticket-title">بلیت VIP</span>
                                        <h2 class="amount"><sup>$</sup>99</h2>
                                        <a href="#0" class="t-button">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-md-6 col-xl-5">
                                <form class="cart-button event-cart">
                                    <span class="d-inline-block">تعداد صندلی : </span>
                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    <div class="inc qtybutton">+</div></div>
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-7">
                                <form class="checkout-contact-form mb-0">
                                    <div class="form-group">
                                        <input type="text" placeholder="کد تخفیف">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="اعمال" class="custom-button">
                                    </div>
                                </form>
                            </div>
                        </div>
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
                                <h6 class="subtitle">Venus</h6>
                                <span class="info">English-2d</span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>سینما ملت</span><span>02</span></h6>
                                <div class="info"><span>دوشنبه 20 فروردین ، 11:00</span> <span>بلیت</span></div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>قیمت بلیت</span><span>150.000 تومان</span></h6>
                            </li>
                        </ul>
                        <ul class="side-shape">
                            <li>
                                <h6 class="subtitle"><span>combos</span><span>57.000 تومان</span></h6>
                                <span class="info"><span>2 Nachos Combo</span></span>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>غذا و نوشیدنی</span></h6>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>قیمت</span><span>207.000 تومان</span></span>
                                <span class="info"><span>vat</span><span>15.000 تومان</span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>مبلغ قابل پرداخت</span><span>222.000 تومان</span></h6>
                        <a href="/thank" class="custom-button back-button">پرداخت</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Event-Section========== -->

    @endsection
