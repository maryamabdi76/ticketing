
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="{{asset('images/banner/banner02.jpg')}}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title bold">بلیت <span class="color-theme">فیلم</span> بگیرید</h1>
                <p>بلیت فیلم ها را پشیرفته بخرید ، زمان فیلم ها را پیدا کنید ، تیزر فیلم را تماشا کنید ، بررسی های فیلم را بخوانید و موارد دیگر</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


@include('layouts.bilito.partials.ticketsearch')


    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner01.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-header">
                            <h5 class="m-title">فیلتر</h5> <a href="{{route('movie')}}" class="clear-check">پاک کردن همه</a>
                        </div>
                        {{-- <div class="widget-1-body">
                            <h6 class="subtitle">زبان</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang1"><label for="lang1">فارسی</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang4"><label for="lang4">English</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="lang5"><label for="lang5">Multiple Language</label>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">نمایش</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode1"><label for="mode1">2d</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="mode" id="mode2"><label for="mode2">3d</label>
                                </div>
                            </div>
                            <div class="add-check-area">
                                <a href="#0"> نمایش بیشتر <i class="plus mr-2"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="widget-1 widget-check">
                        <div class="widget-1-body">
                            <h6 class="subtitle">ژانر</h6>
                            <form method="post" action="{{route('moviegenre')}}">
                                {{ csrf_field() }}
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="genre[]" value="*" id="genre0"><label for="genre0">همه</label>
                                </div>
                                @foreach($genres as $genre)
                                {{-- {{dd($genre->name)}} --}}
                                <div class="form-group">
                                    <input type="checkbox" name="genre[]" value="{{$genre->name}}" id="genre{{$genre->id}}">
                                    <label for="genre{{$genre->id}}">{{$genre->name}}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="add-check-area">
                                <button style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);" type="submit"> اعمال</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner02.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left">
                                    <div class="item">
                                        <span class="show">نمایش :</span>
                                        <select class="select-bar">
                                            <option value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="18">20</option>
                                            <option value="21">25</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="item">
                                        <span class="show">مرتب سازی :</span>
                                        <select class="select-bar">
                                            <option value="showing">در حال نمایش</option>
                                            <option value="exclusive">پرفروش ترین</option>
                                            <option value="trending">محبوب ترین</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="grid-button tab-menu">
                                    <li class="active">
                                        <i class="fas fa-th"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-bars"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="row mb-10 justify-content-center">
                                    @foreach($movies->unique('name') as $movie)
                                    <div class="col-sm-6 col-lg-4">
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
                                                    {{-- <li>
                                                        <div class="thumb">
                                                            <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li> --}}
                                                    {{-- <li>
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
                            <div class="tab-item">
                                <div class="movie-area mb-10">
                                    @foreach($movies->unique('name') as $movie)
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details/{{$movie->id}}" class="w-100 bg_img h-100" data-background="{{asset('/').$movie->Images()->get()->first()->path}}">
                                                <img src="{{asset('/').$movie->Images()->get()->first()->path}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                            <a href="/movie-details/{{$movie->id}}">{{$movie->name}}</a>
                                            </h5>
                                            {{-- <p class="duration">2 ساعت 50 دقیقه</p> --}}
                                            <div class="movie-tags">
                                                @foreach($movie->genres()->get() as $genre)
                                                <a href="#0">{{$genre->name}}</a>
                                                @endforeach
                                            </div>
                                            <div class="release">
                                                <span>تاریخ اکران : </span> <a href="#0">{{$movie->date}}</a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                {{-- <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li> --}}
                                                {{-- <li>
                                                    <div class="thumb">
                                                        <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li> --}}
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/heart.png')}}" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item ml-auto">
                                                        <a href="/movie-ticket">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">خرید بلیت</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a href="#0" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="{{asset('images/icons/play-button.png')}}" alt="icons">
                                                            </div>
                                                            <span class="mr-2">نمایش تیزر</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->
    @endsection
