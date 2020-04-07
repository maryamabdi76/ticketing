
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">پشتیبانی</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>پشتیبانی</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Contact-Section========== -->
    <section class="contact-section padding-top">
        <div class="contact-container">
            <div class="bg-thumb bg_img" data-background="{{asset('images/contact/contact.jpg')}}"></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="section-header-3 left-style">
                            <span class="cate text-right">پشتیبانی</span>
                            <h2 class="title text-right">با ما در ارتباط باشید !</h2>
                            <p class="text-right">ما دوست داریم تا با صحبت با شما و با استفاده از نظرات و پیشنهاداتتان یک همکاری مفید داشته باشیم. هر سوال یا نظری داشتید تنها کافیست پیام دهید، و ما در اسرع وقت پاسخ خواهیم داد.</p>
                        </div>
                        <form class="contact-form" id="contact_form_submit">
                            <div class="form-group text-right">
                                <label for="name">نام و نام خانوادگی <span>*</span></label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="form-group text-right">
                                <label for="email">ایمیل <span>*</span></label>
                                <input type="text" name="email" id="email" required>
                            </div>
                            <div class="form-group text-right">
                                <label for="subject">موضوع <span>*</span></label>
                                <input type="text" placeholder="     موضوع پیامتان را بنویسید" name="subject" id="subject" required>
                            </div>
                            <div class="form-group text-right">
                                <label for="message">متن <span>*</span></label>
                                <textarea name="message" id="message" placeholder="متن پیامتان را بنویسید" required></textarea>
                            </div>
                            <div class="form-group text-right">
                                <input class="h5 letter__spacing__1" type="submit" value="ارسال پیام">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="padding-top padding-bottom contact-info">
                            <div class="info-area">
                                <div class="info-item">
                                    <div class="info-content">
                                        <h6 class="title">شماره تماس</h6>
                                        <a class="text-right" href="Tel:82828282034">021-12345678</a>
                                    </div>
                                    <div class="info-thumb">
                                        <img src="{{asset('images/contact/contact01.png')}}" alt="contact">
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-content">
                                        <h6 class="title">ایمیل</h6>
                                        <a href="Mailto:info@gmail.com">info@Boleto.com</a>
                                    </div>
                                    <div class="info-thumb">
                                        <img src="{{asset('images/contact/contact02.png')}}" alt="contact">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Section========== -->

    <!-- ==========Contact-Counter-Section========== -->
    <section class="contact-counter padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometerltr" data-odometer-final="55">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item active">
                        <div class="contact-counter-thumb">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="35">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="47">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="291">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Counter-Section========== -->

    @endsection
