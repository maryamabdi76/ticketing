
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">پست</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>
                        <a href="/blog">بلاگ</a>
                    </li>
                    <li>
                        پست
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Blog-Section========== -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-lg-8 mb-50 mb-lg-0">
                    <article>
                        <div class="post-item post-details">
                            <div class="post-thumb">
                                <img src="{{asset('images/blog/blog01.jpg')}}" alt="blog">
                            </div>
                            <div class="post-content">
                                <div class="post-meta text-center">
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-conversation"></i>
                                            <span>30</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="#0">
                                            <i class="flaticon-share-1"></i>
                                            <span>22</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="entry-content p-0">
                                        <div class="left">
                                            <span class="date">29 آذر ماه 1398</span>
                                        </div>
                                    </div>
                                    <div class="post-header">
                                        <h4 class="m-title text-right">
                                            با تبلیغات درست و متناسب، فروش بلیط برای محصولات سینمایی بالا ببرید.
                                        </h4>
                                        <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                        <blockquote class="text-right">
                                            از آنجایی که طراحان عموما نویسنده متن نیستند و وظیفه رعایت حق تکثیر متون را ندارند و در همان حال کار آنها به نوعی وابسته به متن می‌باشد آنها با استفاده از محتویات ساختگی، صفحه گرافیکی خود را صفحه‌آرایی می‌کنند تا مرحله طراحی و صفحه‌بندی را به پایان برند.
                                        </blockquote>
                                        <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                        </p>
                                        <br>
                                        <h4 class="title text-right">
                                            هنر دوستان بیشتری را با رضایتمندی جذب کنید
                                        </h4>
                                        <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                        <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                        </p>
                                        <br>
                                    </div>
                                    <div class="tags-area">
                                        <div class="tags">
                                            <span>
                                                برچسب ها :
                                            </span>
                                            <div class="tags-item pr-2">
                                                <a href="#0"> بلیط  </a>
                                                <a href="#0">  تبلیغات </a>
                                                <a href="#0"> صنعت سینما </a>
                                            </div>
                                        </div>
                                        <ul class="social-icons">
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0" class="active">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#0">
                                                    <i class="fab fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="author-thumb">
                                <a href="#0">
                                    <img src="{{asset('images/blog/author.jpg')}}" alt="blog">
                                </a>
                            </div>
                            <div class="author-content">
                                <h5 class="title text-right">
                                    <a class="mr-2" href="#0">
                                        سبحان محمدیان
                                    </a>
                                </h5>
                                <p class="text-right mr-4">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                </p>
                            </div>
                        </div>
                        <div class="blog-comment">
                            <h5 class="title text-right">نظر ها</h5>
                            <ul class="comment-area">
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{asset('images/blog/author.jpg')}}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <h6 class="title text-right pr-3"><a href="#0">بهرام باقری</a></h6>
                                        <span class="ml-4">2/10/1398</span>
                                    </div>
                                    <div class="blog-content text-right">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                </p>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{asset('images/blog/author.jpg')}}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <h6 class="title text-right pr-3"><a href="#0">تارا غفوریان</a></h6>
                                        <span class="ml-4">15/10/1398</span>
                                    </div>
                                    <div class="blog-content text-right">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                </p>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-thumb">
                                        <a href="#0">
                                            <img src="{{asset('images/blog/author.jpg')}}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-thumb-info">
                                        <h6 class="title text-right pr-3"><a href="#0">مرتضی رجبی</a></h6>
                                        <span class="ml-4">27/11/1398</span>
                                    </div>
                                    <div class="blog-content text-right">
                                        <p>
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                </p>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="leave-comment">
                                <h5 class="title text-right">نظرات خود را ثبت کنید</h5>
                                <form class="blog-form">
                                    <div class="form-group text-right">
                                        <input type="text" placeholder="نام و نام خانوادگی خود را وارد کنید" required>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="text" placeholder="ایمیل خود را وارد کنید" required>
                                    </div>
                                    <div class="form-group text-right">
                                        <textarea placeholder="متن مورد نظر شما..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="ثبت">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- =================================side=================================== -->

                                <div class="col-lg-4 col-sm-10 col-md-8">
                                    <aside>
                                        <div class="widget widget-search">
                                            <h5 class="title text-right"><i class="fas fa-search"></i> جست و جو</h5>
                                            <form class="search-form">
                                                <input type="text" placeholder="متن مورد نظر خود را وارد کنید " required>
                                                <button type="submit"> بگرد !</button>
                                            </form>
                                        </div>
                                        <div class="widget widget-post text-right">
                                            <div class="slider-nav">
                                                <span class="flaticon-right-arrow-angle widget-prev"></span>
                                                <span class="flaticon-angle-pointing-to-left widget-next active"></span>
                                            </div>
                                            <h5 class="title text-right">جدیدترین پست ها</h5>
                                            <div class="widget-slider owl-carousel owl-theme">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <a href="#0">
                                                            <img src="{{asset('images/blog/slider01.jpg')}}" alt="blog">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h6 class="p-title">
                                                            <a href="#0">سه روش برای رزرو بلیت کنسرت</a>
                                                        </h6>
                                                        <div class="meta-post justify-content-start">
                                                            <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>20 نظر</a>
                                                            <a href="#0"><i class="flaticon-view"></i>466 بازدید</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="thumb">
                                                        <a href="#0">
                                                            <img src="{{asset('images/blog/slider01.jpg')}}" alt="blog">
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                            <h6 class="p-title">
                                                                <a href="#0">سه روش برای رزرو بلیت تئاتر</a>
                                                            </h6>
                                                            <div class="meta-post justify-content-start">
                                                                <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>20 نظر</a>
                                                                <a href="#0"><i class="flaticon-view"></i>466 بازدید</a>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget widget-follow">
                                            <h5 class="title text-center">با ما همراه شوید </h5>
                                            <ul class="social-icons justify-content-center">
                                                <li>
                                                    <a href="#0" class="">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="active">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
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
                                        <div class="widget widget-categories">
                                            <h5 class="title text-right">دسته بندی ها</h5>
                                            <ul>
                                                <li>
                                                    <a href="#0">
                                                        <span>سانس ها و بلیت ها</span><span>50</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>آخرین پیش نمایش ها</span><span>43</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>جدیدترین ها</span><span>34</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>روی پرده سینما</span><span>63</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>تاریخ اکران</span><span>11</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>برترین ها</span><span>30</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#0">
                                                        <span>نوستالژی</span><span>55</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="widget widget-tags">
                                            <!-- <h5 class="title">featured tags</h5> -->
                                            <ul>
                                                <li>
                                                    <a href="#0" class="p-2">عاشقانه</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="p-2">سنتی</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="p-2">پاپ</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="p-2">کمدی</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="p-2">اجتماعی</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="p-2">ترسناک</a>
                                                </li>
                                                <li>
                                                    <a href="#0" class="active p-2">راک</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ==========Blog-Section========== -->
    @endsection
