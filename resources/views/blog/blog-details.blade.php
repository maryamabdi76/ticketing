
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
                                <img src="{{asset('/').$post->Images()->get()->first()->path}}" alt="blog">
                            </div>
                            <div class="post-content">
                                {{-- <div class="post-meta text-center">
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
                                </div> --}}
                                <div class="content">
                                    <div class="entry-content p-0">
                                        <div class="left">
                                            <span class="date">{{str_replace('-','/',str_replace('00:00:00', '', $post->created_at))}}</span>
                                        </div>
                                    </div>
                                    <div class="post-header">
                                        <h4 class="m-title text-right">{{$post->title}}</h4>
                                        <p class="text-right" style="white-space: pre-wrap">{{$post->content}}</p>
                                        {{-- <blockquote class="text-right">
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
                                        <br> --}}
                                    </div>
                                    <div class="tags-area">
                                        <div class="tags">
                                            <span>
                                                برچسب ها :
                                            </span>
                                            <div class="tags-item pr-2">
                                                @foreach($taggables as $tag)
                                                <a href="/blog/tags/{{$tag->id}}"> {{$tag->name}} </a>
                                                @endforeach
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
                        {{-- <div class="blog-author">
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
                        </div> --}}
                        <div class="blog-comment">
                            <h5 class="title text-right">نظر ها</h5>
                            <ul class="comment-area">
                            @foreach($comments as $comment)
                                <li>
                                    <div class="movie-review-item borderbottomnone">
                                        <div class="author">
                                            <div class="thumb">
                                                @if($comment->user->gender===1)
                                                    <img src="{{asset('images/avatar/femaleavatar.png')}}" alt="female avatar"/>
                                                @endif
                                                @if($comment->user->gender===2)
                                                    <img src="{{asset('images/avatar/maleavatar.png')}}" alt="male avatar"/>
                                                @endif
                                            </div>
                                            <div class="movie-review-info text-right">
                                                    <h6 class="subtitle mt-3">{{$comment->user->name}}</h6>
                                                    <span class="reply-date">{{$comment->created_at}}</span>
                                            </div>
                                        </div>
                                        <div class="movie-review-content mt-4">
                                        <p>{{$comment->comment}}</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @if (Route::has('login'))
                                @auth
                            <div class="leave-comment">
                                <h5 class="title text-right">نظرات خود را ثبت کنید</h5>
                                <form class="blog-form"  method="POST" action="{{route('addCommentBlog')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="postid" value="{{$post->id}}"/>
                                    <input type="hidden" name="userid" value="{{Auth::id()}}"/>
                                    <div class="form-group text-right">
                                        <textarea name="comment" placeholder="متن مورد نظر شما..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="ثبت">
                                    </div>
                                </form>
                            </div>
                            @else
                            <h5 class="title text-right">برای ثبت نظر ابتدا باید <a href="/login" style="color:#31d7a9"> وارد | عضو </a> سایت شوید</h5>
                                @endauth
                            @endif
                        </div>
                    </article>
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
                            <a href="/blog-details/{{$lastpost->id}}" class="ml-4"><i class="flaticon-conversation"></i>{{$allcomment->where('posts_id', $lastpost->id)->count()}} نظر</a>
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
                                <img src="{{asset('/').$post->Images()->get()->first()->path}}" alt="blog">
                            </div>
                            <div class="post-content">
                                <div class="content">
                                    <div class="entry-content p-0">
                                        <div class="left">
                                            <span class="date">{{str_replace('-','/',str_replace('00:00:00', '', $post->created_at))}}</span>
                                        </div>
                                    </div>
                                    <div class="post-header">
                                        <h4 class="m-title text-right">{{$post->title}}</h4>
                                        <p class="text-right" style="white-space: pre-wrap">{{$post->content}}</p>
                                    </div>
                                    <div class="tags-area">
                                        <div class="tags">
                                            <span>
                                                برچسب ها :
                                            </span>
                                            <div class="tags-item pr-2">
                                                @foreach($taggables as $tag)
                                                <a href="/blog/tags/{{$tag->id}}"> {{$tag->name}} </a>
                                                @endforeach
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
                        <div class="blog-comment">
                            <h5 class="title text-right">نظر ها</h5>
                            <ul class="comment-area">
                            @foreach($comments as $comment)
                                <li>
                                    <div class="blog-thumb">
                                        @if($comment->user->gender===1)
                                            <img src="{{asset('images/avatar/femaleavatar.png')}}" alt="female avatar"/>
                                        @endif
                                        @if($comment->user->gender===2)
                                            <img src="{{asset('images/avatar/maleavatar.png')}}" alt="male avatar"/>
                                        @endif
                                    </div>
                                    <div class="blog-thumb-info">
                                    <h6 class="title text-right pr-3"><a href="#0">{{$comment->user->name}}</a></h6>
                                        <span class="ml-4 text-center">{{str_replace('-','/',str_replace('00:00:00', '', $comment->created_at))}}</span>
                                    </div>
                                    <div class="blog-content text-right">
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            @if (Route::has('login'))
                                @auth
                            <div class="leave-comment">
                                <h5 class="title text-right">نظرات خود را ثبت کنید</h5>
                                <form class="blog-form"  method="POST" action="{{route('addCommentBlog')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="postid" value="{{$post->id}}"/>
                                    <div class="form-group text-right">
                                        <textarea name="comment" placeholder="متن مورد نظر شما..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="ثبت">
                                    </div>
                                </form>
                            </div>
                            @else
                            <h5 class="title text-right">برای ثبت نظر ابتدا باید <a href="/login" style="color:#31d7a9"> وارد | عضو </a> سایت شوید</h5>
                                @endauth
                            @endif
                        </div>
                    </article>
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
                            <a href="/blog-details/{{$lastpost->id}}" class="ml-4"><i class="flaticon-conversation"></i>{{$allcomment->where('posts_id', $lastpost->id)->count()}} نظر</a>
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
