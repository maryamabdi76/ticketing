
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Event-Banner-Section========== -->
    <section class="event-banner-section bg_img" data-background="{{asset('images/banner/banner09.jpg')}}">
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
            <div class="event-search bg_img text-right" data-background="{{asset('images/ticket/ticket-bg01.jpg')}}">
                <div class="event-search-top">
                    <div class="left">
                        <h3 class="title">لیگ فوتبال</h3>
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
                        <a href="/theater-ticket" class="custom-button">خرید بلیت</a>
                    </div>
                </div>
                <div class="event-search-bottom">
                    <div class="contact-side justify-content-start">
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
                            <span class="cate">آیا آماده هستید شرکت کنید ؟</span>
                            <h2 class="title">football league tournament</h2>
                            <p>Morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, tristique senectus et netus et malesuada fames ac turpis egestas ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.Aenean ultricies mi vitae est. Mauris Eonec eu ribero sit amet quam egestas semper. Aenean are ultricies mi senectus et netus et malesuada fames ac turpis egestas.
                            </p>
                            <a href="/theater-ticket" class="custom-button">خرید بلیت</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="event-about-thumb">
                        <img src="{{asset('images/sports/sports-about.jpg')}}" alt="sports">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-About========== -->

    <!-- ==========Statistics-Section========== -->
    <section class="statistics-section padding-top padding-bottom bg_img pb-lg-0" data-background="{{asset('images/statistics/statistics-bg01.jpg')}}">
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
                                <h3 class="counter-item odometer" data-odometer-final="450"></h3>
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
                                <h3 class=" counter-item odometer" data-odometer-final="30"></h3>
                                <span class="info">Talented Speakers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Statistics-Section========== -->

    <!-- ==========Faq-Section========== -->
    <section class="faq-section padding-top">
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
    </section>
    <!-- ==========Faq-Section========== -->

    <!-- ==========Event-Section========== -->
    <section class="event-details padding-bottom padding-top">
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
    </section>
    <!-- ==========Event-Section========== -->

    @endsection
