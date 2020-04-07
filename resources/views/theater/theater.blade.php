
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img" data-background="{{asset('images/banner/banner08.jpg')}}"></div>
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
                            <h5 class="m-title">فیلتر</h5> <a href="#0" class="clear-check">پاک کردن همه</a>
                        </div>
                        <div class="widget-1-body">
                            <h6 class="subtitle">دسته بندی ها</h6>
                            <div class="check-area">
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp1"><label for="sp1">همه</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp2"><label for="sp2">running</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp3"><label for="sp3">E Sports</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp4"><label for="sp4">race</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp5"><label for="sp5">walking</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp6"><label for="sp6">badminton</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp7"><label for="sp7">table tenis</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp8"><label for="sp8">football</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="lang" id="sp9"><label for="sp9">cricket</label>
                                </div>
                            </div>
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
                                            <option value="18">18</option>
                                            <option value="21">21</option>
                                            <option value="24">24</option>
                                            <option value="27">27</option>
                                            <option value="30">30</option>
                                        </select>
                                    </div>
                                    <div class="item mr-0">
                                        <span class="show">مرتب سازی  :</span>
                                        <select class="select-bar">
                                            <option value="showing">در حال نمایش</option>
                                            <option value="exclusive">انحصاری</option>
                                            <option value="trending">trending</option>
                                            <option value="most-view">بیشترین بازدید</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports01.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">football league tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports02.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">world cricket league 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports03.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">basket ball tournament 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports04.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">Football League
                                                Tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports05.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Basketball
                                                League 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports06.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Golf
                                                League 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports07.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Basketball
                                                League 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports08.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Badminton
                                                Tournament</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports09.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">Digital Economy
                                                Conference</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports10.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Football
                                                League 2020</a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports11.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Bikeracing
                                                League </a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details">
                                            <img src="{{asset('images/sports/sports12.jpg')}}" alt="sports">
                                        </a>
                                        <div class="event-date">
                                            <h6 class="date-title">28</h6>
                                            <span>Dec</span>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/theater-details">World Bikeracing League </a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                            <span>327 Montague Street</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area text-center">
                            <a href="#0"><i class="fas fa-angle-double-right"></i><span> قبلی </span></a>
                            <a href="#0">1</a>
                            <a href="#0">2</a>
                            <a href="#0" class="active">3</a>
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
