
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">درباره ما</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>درباره ما</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Speaker-Single========== -->
    <section class="about-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="event-about-content">
                        <div class="section-header-3 left-style m-0">
                            <span class="cate text-right">ما بیلیتو هستیم </span>
                            <h2 class="title text-right">با ما آشنا شوید</h2>
                            <p class="text-right">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <p class="text-right">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            </p>
                            <a href="/" class="custom-button text-right">رزرو بلیت</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="about-thumb">
                        <img src="{{asset('images/about/about01.png')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Speaker-Single========== -->

    <!-- ==========Philosophy-Section========== -->
    <div class="philosophy-section padding-top padding-bottom bg-one bg_img bg_quater_img" data-background="{{asset('images/about/about-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-3 bg-two">
                    <div class="philosophy-content">
                        <div class="section-header-3 left-style">
                            <span class="cate text-right">نگاهی به </span>
                            <h2 class="title text-right">فلسفه کاری ما</h2>
                            <p class="ml-0 text-right">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            </p>
                        </div>
                        <ul class="phisophy-list">
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('images/philosophy/icon1.png')}}" alt="philosophy">
                                </div>
                                <h5 class="title text-right pr-4">صداقت و انصاف</h5>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('images/philosophy/icon2.png')}}" alt="philosophy">
                                </div>
                                <h5 class="title text-right pr-4">درستی و شفافیت</h5>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('images/philosophy/icon3.png')}}" alt="philosophy">
                                </div>
                                <h5 class="title text-right pr-4">تمرکز بر خواسته ی مشتریان</h5>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Philosophy-Section========== -->

    <!-- ==========About-Counter-Section========== -->
    <section class="about-counter-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-header-3 left-style mb-lg-0">
                        <span class="cate text-right">چند حقیقت</span>
                        <h2 class="title text-right">جالب</h2>
                        <p class="text-right">از لحاظ عینی معیارهای مقیاس پذیر را به دست آورید ، در حالی که سرویس های پیشگیرانه یکپارچه توانمندسازی استراتژی های رشد کاملاً تحقیق شده را دارند</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-counter">
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{asset('images/about/about-counter01.png')}}" alt="about">
                            </div>
                            <div class="counter-content ltr">
                                <h3 class="title odometer" data-odometer-final="30"></h3>
                                <h3 class="title">M+</h3>
                            </div>
                            <span class="d-block info">مشتری</span>
                        </div>
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{asset('images/about/about-counter02.png')}}" alt="about">
                            </div>
                            <div class="counter-content ltr">
                                <h3 class="title odometer" data-odometer-final="11"></h3>
                            </div>
                            <span class="d-block info">استان</span>
                        </div>
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{asset('images/about/about-counter03.png')}}" alt="about">
                            </div>
                            <div class="counter-content ltr">
                                <h3 class="title odometer" data-odometer-final="65"></h3>
                                <h3 class="title">+</h3>
                            </div>
                            <span class="d-block info">کلان شهر و شهرستان</span>
                        </div>
                        <div class="counter-item">
                            <div class="counter-thumb">
                                <img src="{{asset('images/about/about-counter04.png')}}" alt="about">
                            </div>
                            <div class="counter-content ltr">
                                <h3 class="title odometer" data-odometer-final="5000"></h3>
                                <h3 class="title">+</h3>
                            </div>
                            <span class="d-block info">سالن</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========About-Counter-Section========== -->

    <!-- ==========Client-Section========== -->
    <section class="client-section padding-bottom padding-top bg_img" data-background="{{asset('images/client/client-bg.jpg')}}">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">توصیفات</span>
                <h2 class="title">صحبت های همراهان ما</h2>
            </div>
            <div class="client-slider owl-carousel owl-theme">
                <div class="client-item">
                    <div class="client-thumb">
                        <img src="{{asset('images/client/client01.jpg')}}" alt="client">
                    </div>
                    <div class="client-content">
                        <h5 class="title">
                            <a href="#0">محمد طهرانی</a>
                        </h5>
                        <span class="info"><i class="fas fa-check"></i></span>
                        <blockquote class="client-quote">
                            "قیمت عالی و ارزان تر از سایت های دیگه ! به راحتی میشه خرید کرد."
                        </blockquote>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-thumb">
                        <img src="{{asset('images/client/client03.jpg')}}" alt="client">
                    </div>
                    <div class="client-content">
                        <h5 class="title">
                            <a href="#0">لیلا شبستانی</a>
                        </h5>
                        <span class="info"><i class="fas fa-check"></i></span>
                        <blockquote class="client-quote">
                            "همه چیز با توضیحات و سان بندی کامل، عالیییییییه !"
                        </blockquote>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-thumb">
                        <img src="{{asset('images/client/client02.jpg')}}" alt="client">
                    </div>
                    <div class="client-content">
                        <h5 class="title">
                            <a href="#0">سارا احمدوند</a>
                        </h5>
                        <span class="info"><i class="fas fa-check"></i></span>
                        <blockquote class="client-quote">
                            "روند خرید خیلی ساده است و البته امن، من که مشتری ثابت شدم."
                        </blockquote>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-thumb">
                        <img src="{{asset('images/client/client04.jpg')}}" alt="client">
                    </div>
                    <div class="client-content">
                        <h5 class="title">
                            <a href="#0">علی تیموری</a>
                        </h5>
                        <span class="info"><i class="fas fa-check"></i></span>
                        <blockquote class="client-quote">
                            "تمام کنسرت ها رو همیشه سریع تر از سایت های دیگه میزاری و میتونی قبل از اینکه ظرفیت تکمیل بشه سریع بخری !!!"
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Client-Section========== -->

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

    <!-- ==========Gallery-Section========== -->
    <section class="gallery-section padding-top padding-bottom bg-one">
        <div class="container">
            <div class="section-header-3">
                <span class="cate">سرگرمی ها بسیار است</span>
                <h2 class="title">بلیت برای هر سلیقه ای</h2>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
            </div>
            <div class="row justify-content-center gallery-wrapper mb-30-none">
                <div class="col-lg-3 col-sm-6">
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery05.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery05.jpg')}}" alt="gallery">
                        </div>
                    </div>
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery06.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery06.jpg')}}" alt="gallery">
                        </div>
                    </div>
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery07.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery07.jpg')}}" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 order-lg-1">
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery11.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery11.jpg')}}" alt="gallery">
                        </div>
                    </div>
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery12.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery12.jpg')}}" alt="gallery">
                        </div>
                    </div>
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery13.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery13.jpg')}}" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item two">
                        <div class="gallery-thumb">
                            <a href="{{asset('images/gallery/gallery08.jpg')}}" class="img-pop">
                                <i class="flaticon-loupe"></i>
                            </a>
                            <img src="{{asset('images/gallery/gallery08.jpg')}}" alt="gallery">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item two">
                                <div class="gallery-thumb">
                                    <a href="{{asset('images/gallery/gallery09.jpg')}}" class="img-pop">
                                        <i class="flaticon-loupe"></i>
                                    </a>
                                    <img src="{{asset('images/gallery/gallery09.jpg')}}" alt="gallery">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item two">
                                <div class="gallery-thumb">
                                    <a href="{{asset('images/gallery/gallery10.jpg')}}" class="img-pop">
                                        <i class="flaticon-loupe"></i>
                                    </a>
                                    <img src="{{asset('images/gallery/gallery10.jpg')}}" alt="gallery">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Gallery-Section========== -->

    <!-- ==========Tour-Section========== -->
    <section class="tour-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tour-content">
                        <div class="section-header-3 left-style">
                            <span class="cate text-right">ضمانت می کنیم که </span>
                            <h2 class="title text-right">می توانید به ما اعتماد کنید.</h2>
                            <p class="ml-0 text-right">
                                زیرا اعتماد، علاقه و آرامش را به همراه می آورد.
                            </p>
                        </div>
                        <ul class="list-tour">
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('images/tour/icon01.png')}}" alt="tour">
                                </div>
                                <div class="content">
                                    <h5 class="title text-right pr-4">ضمانت ورود</h5>
                                    <p class="text-right pr-3">بلیتی معتبر با تحویل به موقع برای سهولت ورود شما به نمایش</p>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="{{asset('images/tour/icon02.png')}}" alt="tour">
                                </div>
                                <div class="content">
                                    <h5 class="title text-right pr-4">ضمانت تطابق قیمت</h5>
                                    <p class="text-right pr-3">بهترین قیمت ها اینجاست. اگر معامله بهتری را در جای دیگر مشاهده کردید ، ما تفاوت قیمت را پرداخت خواهیم کرد.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="tour-thumb">
                        <img src="{{asset('images/tour/tour.png')}}" alt="tour">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Tour-Section========== -->

@endsection
