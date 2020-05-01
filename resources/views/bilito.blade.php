@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{asset('images/banner/banner01.jpg')}}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip">
                    <span class="d-block">بلیط خود را برای </span>
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible"> سینما </b>
                        <b> تئاتر </b>
                        <b> کنسرت </b>
                    </span>
                    <span class="d-block">رزرو کنید</span>
                </h1>
                <p>بلیط امن ، ایمن و قابل اعتماد. بلیط شما برای سرگرمی زنده!</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    @include('layouts.bilito.partials.ticketsearch')

    <div id="bilitoSlider" class="stacked-cards pt-5 mt-2">
		<ul>
            @foreach($sliders as $e)
			<li class="gradiant-bg">
                <img src="{{asset('/').$e->Images()->get()->first()->path}}" style=""/>
                <a class="w-100 text-center text-white m-2" href="/movie-details/{{$e->events_id}}">{{$e->title}}</a>
            </li>
            @endforeach
		</ul>
    </div>
    <!-- ==========Best Seller========== -->
    <section class="event-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="text-right">
                        <h2 class="title mb-4">پرفروش ترین ها</h2>
                        <p>مطمئن باشید که امروز این رویداد ها را از دست نخواهید داد.</p>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            {{-- {{dd($x)}} --}}
                            @foreach($x as $k=>$v)
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        @if($v[0]->categories_id==1)
                                        <a href="/movie-details/{{$v[0]->id}}">
                                        <img width="330px" height="400px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                                        </a>
                                        @elseif($v[0]->categories_id==2)
                                        <a href="/concert-details/{{$v[0]->id}}">
                                        <img width="330px" height="400px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                                        </a>
                                        @else
                                        <a href="/theater-details/{{$v[0]->id}}">
                                        <img width="330px" height="400px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                                        </a>
                                        @endif

                                        <div class="event-date">
                                            <h6 class="date-title"><i class="fa fa-store"></i></h6>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            @if($v[0]->categories_id==1)
                                            <a href="/movie-details/{{$v[0]->events_id}}">{{$v[0]->name}}</a>
                                            @elseif($v[0]->categories_id==2)
                                            <a href="/concert-details/{{$v[0]->events_id}}">{{$v[0]->name}}</a>
                                            @else
                                            <a href="/theater-details/{{$v[0]->events_id}}">{{$v[0]->name}}</a>
                                            @endif
                                        </h5>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Best-Seller========== -->


    <!-- ==========Liked========== -->
    @if($mostratings->count() > 0)
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="text-right">
                        <h2 class="title mb-4">محبوب ترین ها</h2>
                        <p>مطمئن باشید که امروز این رویداد ها را از دست نخواهید داد.</p>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            @foreach($mostratings as $mostrating)
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                            @if($mostrating->events->categories_id==1)
                                            <a href="/movie-details/{{$mostrating->events->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$mostrating->events->Images()->get()->first()->path}}" alt="movie">
                                            </a>
                                            @elseif($mostrating->events->categories_id==2)
                                            <a href="/concert-details/{{$mostrating->events->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$mostrating->events->Images()->get()->first()->path}}" alt="movie">
                                            </a>
                                            @else
                                            <a href="/theater-details/{{$mostrating->events->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$mostrating->events->Images()->get()->first()->path}}" alt="movie">
                                            </a>
                                            @endif

                                        <div class="event-date">
                                            <h6 class="date-title"><i class="fa fa-heart"></i></h6>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            @if($mostrating->events->categories_id==1)
                                            <a href="/movie-details/{{$mostrating->events->id}}">{{$mostrating->events->name}}</a>
                                            @elseif($mostrating->events->categories_id==2)
                                            <a href="/concert-details/{{$mostrating->events->id}}">{{$mostrating->events->name}}</a>
                                            @else
                                            <a href="/theater-details/{{$mostrating->events->id}}">{{$mostrating->events->name}}</a>
                                            @endif
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            {{-- <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- ==========Best-Seller========== -->



    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">فیلم ها</h2>
                        <p>مطمئن باشید که امروز این فیلم ها را از دست نخواهید داد.</p>
                    </div>
                    <ul class="tab-menu">
                        <a href="{{route('movie')}}" style="">نمایش همه</a>
                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            @foreach($events as $movie)
                            @if($movie->categories_id ==1)
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details/{{$movie->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$movie->Images()->get()->first()->path}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <a href="/movie-details/{{$movie->id}}">{{$movie->name}}</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                           {{--  <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details/{{$movie->id}}">
                                            <img src="{{asset('images/movie/movie01.jpg')}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/movie-details/{{$movie->id}}">alone</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">کنسرت ها</h2>
                        <p>مطمئن باشید که امروز این کنسرت ها را از دست نخواهید داد.</p>
                    </div>
                    <ul class="tab-menu">
                        <a href="{{route('concert')}}" style="">نمایش همه</a>

                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            @foreach($events as $concert)
                            @if($concert->categories_id ==2)
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/concert-details/{{$concert->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$concert->Images()->get()->first()->path}}" alt="concert">
                                        </a>
                                        {{-- <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div> --}}
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <a href="/concert-details/{{$concert->id}}">{{$concert->name}}</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>کنسرت</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/concert-details/{{$concert->id}}">
                                            <img src="{{asset('images/event/event01.jpg')}}" alt="event">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" >
                                            <a href="/concert-details/{{$concert->id}}">Digital Economy Conference 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Section========== -->

    <!-- ==========Sports-Section========== -->
    <section class="sports-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">تئاتر ها</h2>
                        <p>مطمئن باشید که امروز این تئاتر ها را از دست نخواهید داد.</p>
                    </div>
                    <ul class="tab-menu">
                        <a href="{{route('theater')}}" style="">نمایش همه</a>

                    </ul>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            @foreach($events as $theater)
                            @if($theater->categories_id ==3)
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details/{{$theater->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$theater->Images()->get()->first()->path}}" alt="theater">
                                        </a>
                                        {{-- <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div> --}}
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0"  style="font-size:1.1rem">
                                        <a href="/theater-details/{{$theater->id}}">{{$theater->name}}</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>تئاتر</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-item">
                        <div class="owl-carousel owl-theme tab-slider">
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details/{{$theater->id}}">
                                            <img src="{{asset('images/sports/sports01.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details/{{$theater->id}}">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sports-Section========== -->
@endsection
