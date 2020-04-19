
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    {{-- <section class="details-banner bg_img" data-background="{{asset('images/banner/banner03.jpg')}}"> --}}
    <section class="details-banner bg_img" data-background="{{asset('images/banner/banner04.jpg')}}">
        {{-- <section class="details-banner bg_img" data-background="{{asset('/').$theater->Images()->get()->first()->path}}"> --}}
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="{{asset('/').$theater->Images()->get()->first()->path}}" alt="movie">
                    <a href="https://www.youtube.com/embed/KGeBMAgc46E" class="video-popup">
                        <img src="{{asset('images/movie/video-button.png')}}" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content mr-25darsad">
                <h3 class="title">{{$theater->name}}</h3>
                    <div class="tags">
                        {{-- <a href="#0">فارسی</a> --}}
                    </div>
                    @foreach($theater->genres()->get() as $genre)
                    <a href="/theater/genres/{{$genre->id}}" class="button">{{$genre->name}}</a>
                    @endforeach
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>{{$theater->date}}</span>
                            </div>
                        </div>
                        <ul class="social-share">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->


    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper">
                <div class="left-side">
                    {{-- <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="{{asset('images/movie/tomato2.png')}}" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>tomatometer</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="{{asset('images/movie/cake2.png')}}" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>audience Score</p>
                    </div> --}}
                    <div class="item">
                        <div class="item-header">
                            <div class="rated">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="title">4.5</h5>
                        </div>
                        <p>نظر کاربران</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="rated rate-it">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="title">0.0</h5>
                        </div>
                        <p><a href="#0">نظر دهید</a></p>
                    </div>
                </div>
                {{-- <a href="/movie-ticket" class="custom-button">خرید بلیت</a> --}}
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-offer">
                        <h3 class="title">تبلیغات</h3>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner01.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">تصاویر</h3>
                        <div class="details-photos owl-carousel">
                            @foreach($theater->Images()->get() as $k=>$photo)
                            <div class="thumb">
                                <a href="{{asset('/').$photo->path}}" class="img-pop">
                                    <img src="{{asset('/').$photo->path}}" alt="movie">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    خلاصه تئاتر
                                </li>
                                <li>
                                    نظرات کاربران <span>{{$count}}</span>
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">بازیگران</h5>
                                        </div>
                                        <p>{{$theater->act}}</p>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">عوامل</h5>
                                        </div>
                                        <p>{{$theater->team}}</p>
                                    </div>
                                </div>
                                <div class="tab-item">
                                  @foreach($reviews as $v)
                                    <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                  @if($v->user->gender===1)
                                                    <img src="{{asset('images/avatar/femaleavatar.png')}}" alt="female avatar"/>
                                                  @endif
                                                  @if($v->user->gender===2)
                                                    <img src="{{asset('images/avatar/maleavatar.png')}}" alt="male avatar"/>
                                                  @endif
                                            </div>
                                            <div class="movie-review-info">
                                                  <h6 class="subtitle mt-3">{{$v->user->name}}</h6>
                                                  <span class="reply-date">{{$v->created_at}}</span>
                                                </div>
                                        </div>
                                        <div class="movie-review-content">
                                                <div class="review">
                                                @for ($i=1; $i <= 5 ; $i++)
                                                <i class="fas fa-heart {{ ($i <= $v->rating) ? 'heart__f' : 'heart__o'}}"></i>
                                                @endfor
                                                </div>
                                            <p>{{$v->comment}}</p>
                                            <div class="review-meta">
                                                <a href="#0">
                                                    <i class="flaticon-hand"></i><span>{{$v->like}}</span>
                                                </a>
                                                <a href="#0" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>{{$v->dislike}}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                  @endforeach
                                  @if(!empty(Auth::user()->name))
                                  <div class="widget-1 widget-offer">
                                          <h3 class="title mt-5">نظرات خود را ثبت کنید</h3>
                                          <div class="offer-body">
                                              <div class="offer-item">
                                                  <form method="POST" action="/review" class="mt-0" id="review">
                                                      @csrf
                                                      <input type="hidden" name="events_id" value="{{$id}}">
                                                      <div class="form-group">
                                                          <span><label for="rating" class="pl-3">امتیاز شما به این فیلم :</label>
                                                          <input type="number" id="rating" name="rating" min="0" max="5" class="inpnumw"></span>
                                                      </div>
                                                      <div class="form-group">
                                                      <textarea rows="8" cols="80" name="comment" form="review" class="bgtrasparent text-white" placeholder="نظر خود را اینجا بنویسید ..."></textarea>
                                                      </div>
                                                      <input class="letter__spacing__1 probutton" type="submit" value="ثبت نظر">
                                                  </form>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              @endif
                                </div>
                                <div class="widget-1 widget-offer">
                                    <h3 class="title mt-5">خرید بلیت</h3>
                                    <div class="offer-body">
                                        <div class="offer-item">
                                                @if($flag===0)
                                                <div class="mt-3 mb-3 text-center">
                                                <p class="text-white text-center">متاسفانه در حال حاضر این برنامه نمایش داده نمی شود !</p>
                                                </div>
                                            @endif
                                            @if($flag===1)
                                                <form method="POST" action="/ticket" class="mt-0">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$id}}">
                                                    <span class="text-white pt-1 pb-1 pl-5">روز مورد نظرتان را انتخاب کنید:</span>
                                                    <select class="myselect-bar1 text-black mt-3 mb-3 inpdatew ml-5 " name="date">
                                                        @foreach($date as $d)
                                                            <option value="{{$d}}">{{$d}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input class="letter__spacing__1 probutton inpdatew" type="submit" value="خرید بلیت">
                                                </form>
                                            @endif
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
    <!-- ==========Movie-Section========== -->

    @endsection
