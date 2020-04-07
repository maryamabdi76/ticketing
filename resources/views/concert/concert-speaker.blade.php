
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="speaker-banner bg_img" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">پروفایل سخنران</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>
                        <a href="/concert">رویداد</a>
                    </li>
                    <li>پروفایل سخنران</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Speaker-Single========== -->
    <section class="speaker-single padding-top pt-lg-0">
        <div class="container">
            <div class="speaker-wrapper bg-six padding-top padding-bottom">
                <div class="speaker-thumb">
                    <img src="{{asset('images/speaker/speaker05.jpg')}}" alt="speaker">
                    <a href="#0">www.website.com</a>
                </div>
                <div class="speaker-content">
                    <div class="author">
                        <h2 class="title">سحر اسحاقی</h2>
                        <div class="info">متخصص IT</div>
                    </div>
                    <div class="speak-con-wrapper">
                        <div class="speak-con-area">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="{{asset('images/event/icon/event-icon03.png')}}" alt="event">
                                </div>
                                <div class="item-content">
                                    <span class="up">ارتباط با ما:</span>
                                    <a href="MailTo:hello@Boleto .com">hello@Boleto .com</a>
                                </div>
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <h3 class="subtitle">درباره من</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Single========== -->

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

    @endsection
