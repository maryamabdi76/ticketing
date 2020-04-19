
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img" data-background="{{asset('images/banner/banner05.jpg')}}"></div>
        <div class="container">
            <div class="banner-content event-content">
                <h1 class="title bold">بلیت <span class="color-theme">تئاتر </span> بخرید</h1>
                <p>بلیط های تئاتر را از قبل خریداری کنید ، زمان تئاتر و موارد دیگر را پیدا کنید</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


@include('layouts.bilito.partials.ticketsearch')


    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom">
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
                            <h5 class="m-title">فیلتر</h5> <a href="{{route('theater')}}" class="clear-check">پاک کردن همه</a>
                        </div>
                        <div class="widget-1-body">
                            <h6 class="subtitle">دسته بندی ها</h6>
                            <form method="post" action="{{route('theatergenre')}}">
                                {{ csrf_field() }}
                            <div class="check-area">
                                <div class="form-group">
                                    {{-- <input type="checkbox" name="genre[]" value="*" id="genre0"><label for="genre0">همه</label> --}}
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
                    <div class="filter-tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left w-100 justify-content-between">
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
                                    <div class="item mr-0">
                                        <span class="show">مرتب سازی  :</span>
                                        <select class="select-bar">
                                            <option value="showing">در حال نمایش</option>
                                            <option value="exclusive">پرفروش ترین</option>
                                            <option value="trending">محبوب ترین</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10 justify-content-center">
                            @foreach($theaters->unique('name') as $theater)
                            <div class="col-sm-6 col-lg-4">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details/{{$theater->id}}">
                                            <img width="330px" height="400px" src="{{asset('/').$theater->Images()->get()->first()->path}}" alt="event">
                                        </a>
                                        {{-- <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div> --}}
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                        <a href="/theater-details/{{$theater->id}}">{{$theater->name}}</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
