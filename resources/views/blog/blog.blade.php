
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="{{asset('images/banner/banner07.jpg')}}">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">بلاگ</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>
                        بلاگ
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Blog-Section========== -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-50 mb-lg-0">
                    <article>
                        @if($posts->count()==0)
                        <h5 class="text-center">متاسفانه موردی یافت نشد!</h5>
                        @endif
                        @foreach($posts as $post)
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="/blog-details/{{$post->id}}">
                                    <img height="350px" src="{{asset('/').$post->Images()->get()->first()->path}}" alt="blog">
                                    {{-- <img src="{{asset('images/blog/blog01.jpg')}}" alt="blog"> --}}
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <h4 class="title text-right">
                                        <a href="/blog-details/{{$post->id}}">{{$post->title}}</a>
                                    </h4>
                                    <div class="meta-post justify-content-end">
                                        <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>{{$comments->where('posts_id', $post->id)->count()}} نظر</a>
                                        <a href="#0"><i class="flaticon-view"></i>{{$post->views}} بازدید</a>
                                    </div>
                                <p class="text-right">{{Str::limit($post->content,200,' ....')}}</p>
                                </div>
                                <div class="entry-content">
                                    <div class="left">
                                        <span class="date p-2">{{str_replace('-','/',str_replace('00:00:00', ' ', $post->created_at))}}</span>
                                        {{-- <div class="authors">
                                            <div class="thumb">
                                                <a href="#0"><img src="{{asset('images/blog/author.jpg')}}" alt="#0"></a>
                                            </div>
                                            <h6 class="title p-2"><a href="/concert-speaker">سبحان محمدیان</a></h6>
                                        </div> --}}
                                    </div>
                                    <a href="/blog-details/{{$post->id}}" class="buttons"> ادامه مطلب <i class="fas fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="post-item">
                            <div class="post-thumb">
                                <div class="owl-carousel owl-theme blog-slider">
                                    <img src="{{asset('images/blog/blog02.jpg')}}" alt="blog">
                                    <img src="{{asset('images/blog/blog03.jpg')}}" alt="blog">
                                    <img src="{{asset('images/blog/blog04.jpg')}}" alt="blog">
                                    <img src="{{asset('images/blog/blog01.jpg')}}" alt="blog">
                                </div>
                                <div class="blog-prev">
                                    <i class="flaticon-double-right-arrows-angles"></i>
                                </div>
                                <div class="blog-next active">
                                    <i class="flaticon-double-right-arrows-angles"></i>
                                </div>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <h4 class="title text-right">
                                        <a href="/blog-details/{{$post->id}}">
                                            نکاتی که باید هنگام خرید بلیت در خاطر داشته باشیم!
                                        </a>
                                    </h4>
                                    <div class="meta-post justify-content-end">
                                        <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>20 نظر</a>
                                        <a href="#0"><i class="flaticon-view"></i>466 بازدید</a>
                                    </div>
                                    <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                      </p>
                                    </p>
                                </div>
                                <div class="entry-content">
                                    <div class="left">
                                        <span class="date p-2">29 آذر ماه 1398</span>
                                        <div class="authors">
                                            <div class="thumb">
                                                <a href="#0"><img src="{{asset('images/blog/author.jpg')}}" alt="#0"></a>
                                            </div>
                                            <h6 class="title p-2"><a href="/concert-speaker">سبحان محمدیان</a></h6>
                                        </div>
                                    </div>
                                    <a href="/blog-details/{{$post->id}}" class="buttons"> بیشتر بخوانید <i class="fas fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-thumb">
                                <img src="{{asset('images/blog/blog03.jpg')}}" alt="blog">
                                <a href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video-button video-popup">
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <h4 class="title text-right">
                                        <a href="/blog-details/{{$post->id}}">
                                            یک قیمت برای تمامی صندلی ها ؟ زمان تغییر رسیده !
                                        </a>
                                    </h4>
                                <div class="meta-post justify-content-end">
                                        <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>20 نظر</a>
                                        <a href="#0"><i class="flaticon-view"></i>466 بازدید</a>
                                    </div>
                                    <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                      </p>
                                    </p>
                                </div>
                                <div class="entry-content">
                                    <div class="left">
                                        <span class="date p-2">29 آذر ماه 1398</span>
                                        <div class="authors">
                                            <div class="thumb">
                                                <a href="#0"><img src="{{asset('images/blog/author.jpg')}}" alt="#0"></a>
                                            </div>
                                            <h6 class="title p-2"><a href="/concert-speaker">سبحان محمدیان</a></h6>
                                        </div>
                                    </div>
                                    <a href="/blog-details/{{$post->id}}" class="buttons"> بیشتر بخوانید <i class="fas fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="/blog-details/{{$post->id}}">
                                    <img src="{{asset('images/blog/blog04.jpg')}}" alt="blog">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <h4 class="title text-right">
                                        <a href="/blog-details/{{$post->id}}">
                                            اکران فیلم های 3D درسینما های سراسر ایران
                                        </a>
                                    </h4>
                                <div class="meta-post justify-content-end">
                                        <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>20 نظر</a>
                                        <a href="#0"><i class="flaticon-view"></i>466 بازدید</a>
                                </div>
                                    <p class="text-right">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                                      </p>
                                    </p>
                                </div>
                                <div class="entry-content">
                                    <div class="left">
                                        <span class="date p-2">29 آذر ماه 1398</span>
                                        <div class="authors">
                                            <div class="thumb">
                                                <a href="#0"><img src="{{asset('images/blog/author.jpg')}}" alt="#0"></a>
                                            </div>
                                            <h6 class="title p-2"><a href="/concert-speaker">سبحان محمدیان</a></h6>
                                        </div>
                                    </div>
                                    <a href="/blog-details/{{$post->id}}" class="buttons"> بیشتر بخوانید <i class="fas fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div> --}}
                    </article>
                    <div class="pagination-area text-center">
                        <a href="#0"><i class="fas fa-angle-double-right"></i><span> قبلی </span></a>
                        <a href="#0" class="active">1</a>
                        <a href="#0">2</a>
                        <a href="#0">3</a>
                        <a href="#0">4</a>
                        <a href="#0">5</a>
                        <a href="#0"><span>بعدی </span><i class="fas fa-angle-double-left"></i></a>
                    </div>
                </div>

<!-- =================================side=================================== -->

                <div class="col-lg-4 col-sm-10 col-md-8">
                    <aside>
                        <div class="widget widget-search">
                            <h5 class="title text-right"><i class="fas fa-search"></i> جست و جو</h5>
                            <form class="search-form" action="{{route('searchblog')}}" method="get">
                                <input type="text" name="searchblog" placeholder="متن مورد نظر خود را وارد کنید " required>
                                <button type="submit"> بگرد !</button>
                            </form>
                        </div>
                        <div class="widget widget-post text-right">
                            <div class="slider-nav">
                                <span class="flaticon-right-arrow-angle widget-prev"></span>
                                <span class="flaticon-angle-pointing-to-left widget-next"></span>
                            </div>
                            <h5 class="title text-right">جدیدترین پست ها</h5>
                            <div class="widget-slider owl-carousel owl-theme">
                                @foreach($lastposts as $lastpost)
                                <div class="item">
                                    <div class="thumb">
                                        <a href="/blog-details/{{$lastpost->id}}">
                                            <img height="220px" src="{{asset('/').$lastpost->Images()->get()->first()->path}}" alt="blog">
                                            {{-- <img src="{{asset('images/blog/slider01.jpg')}}" alt="blog"> --}}
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="p-title">
                                            <a href="/blog-details/{{$lastpost->id}}">{{$lastpost->title}}</a>
                                        </h6>
                                        <div class="meta-post justify-content-start">
                                            <a href="/blog-details/{{$lastpost->id}}" class="ml-4"><i class="flaticon-conversation"></i>{{$comments->where('posts_id', $lastpost->id)->count()}} نظر</a>
                                            <a href="/blog-details/{{$lastpost->id}}"><i class="flaticon-view"></i>{{$lastpost->views}} بازدید</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                        {{-- <div class="widget widget-categories">
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
                        </div> --}}
                        <div class="widget widget-tags">
                            <!-- <h5 class="title">featured tags</h5> -->
                            <ul>
                                @foreach($tags as $tag)
                                <li>
                                    <a href="/blog/tags/{{$tag->id}}" class="p-2">{{$tag->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-follow">
                            <h5 class="title text-center">با ما همراه شوید </h5>
                            <ul class="social-icons justify-content-center">
                                <li>
                                    <a href="#0" class=""><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0" class=""><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0" class=""><i class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
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
