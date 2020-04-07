
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Event-Banner-Section========== -->
    <section class="event-banner-section bg_img" data-background="{{asset('images/banner/banner06.jpg')}}">
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
                        <h3 class="title">دیجیتال مارکتینگ -2020</h3>
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
                                <span class="up">3 روز (جمعه - یکشنبه )</span>
                                <span>70+ ورکشاپ</span>
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
                            <h2 class="title">دیجیتال مارکتینپ - <span>2020</span></h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                            </p>
                            <a href="/concert-ticket" class="custom-button">خرید بلیت</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-7">
                    <div class="event-about-thumb">
                        <img src="{{asset('images/event/event-about.jpg')}}" alt="event">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-About========== -->

    <!-- ==========Gallery-Section========== -->
    <div class="speaker-gallery">
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

    <!-- ==========Speaker-Section========== -->
    <section class="speaker-section padding-bottom padding-top">
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
    </section>
    <!-- ==========Speaker-Section========== -->


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
