
@extends('layouts.bilito.mainlayout')
@section('content')

<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="{{asset('images/banner/banner02.jpg')}}"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title bold">بلیت <span class="color-theme">فیلم</span> بگیرید</h1>
            <p>بازیگران، عوامل، خلاصه داستان و نظرات هر فیلم را بخوانید. تصمیم بگیرید. بلیت بخرید.
                به همین راحتی !
            </p>
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
                </div>
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
                            <div class="left w-100 justify-content-between">
                                <div class="item mr-0">
                                    <span class="show">مرتب سازی  :</span>
                                    <a class="select-b @if($sort) active @endif" href="{{ route('sortShowingMovie') }}"onclick="event.preventDefault(); document.getElementById('sortShowing').submit();">
                                        در حال نمایش</a>
                                    <form id="sortShowing" action="{{ route('sortShowingMovie') }}" method="POST" style="display: none;">
                                    @csrf
                                        @foreach($arrayIdMovies as $id)
                                        <input type="hidden" name="show[]" value="{{$id}}">
                                        @endforeach
                                    </form>
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
                    </div>
                    <div class="tab-area">
                        <div class="tab-item active">
                            <div class="row mb-10 justify-content-center">
                                @if(empty($movies) || $movies->count()==0)
                                <h5 class="text-center pt-5 pb-5">متاسفانه موردی یافت نشد!</h5>
                                @endif
                                @foreach($movies as $movie)
                                <div class="col-sm-6 col-lg-4">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="/movie-details/{{$movie->id}}">
                                                <img width="220px" height="300px" src="{{asset('/').$movie->Images()->get()->first()->path}}" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0" style="font-size:1.1rem">
                                                <a href="/movie-details/{{$movie->id}}">{{$movie->name}}</a>
                                            </h5>
                                            <ul class="movie-rating-percent">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-item">
                            <div class="movie-area mb-10">
                                @foreach($movies as $movie)
                                <div class="movie-list">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details/{{$movie->id}}" class="w-75 bg_img" data-background="{{asset('/').$movie->Images()->get()->first()->path}}">
                                            <img src="{{asset('/').$movie->Images()->get()->first()->path}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title">
                                        <a href="/movie-details/{{$movie->id}}">{{$movie->name}}</a>
                                        </h5>
                                        <div class="movie-tags">
                                            @foreach($movie->genres()->get() as $genre)
                                            <a href="#0">{{$genre->name}}</a>
                                            @endforeach
                                        </div>
                                        <div class="release">
                                            <span>تاریخ نمایش : </span> <a href="#0">{{$movie->date}}</a>
                                        </div>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                        <div class="book-area">
                                            <div class="book-ticket">
                                                <div class="react-item">
                                                <a href="/movie-details/{{$movie->id}}">
                                                        <div class="thumb">
                                                            <img src="{{asset('images/icons/book.png')}}" alt="icons">
                                                        </div>
                                                        <span class="mr-2">مشاهده جزئیات</span>
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
                    @if(!empty($movies))
                    {{$movies->appends(request()->query())->links()}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Section========== -->
@endsection
