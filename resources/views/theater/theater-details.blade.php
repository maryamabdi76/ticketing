
@extends('layouts.bilito.mainlayout')
@section('content')


    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background="{{asset('images/banner/banner04.jpg')}}">
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
                    </div>
                    @foreach($theater->genres()->get() as $genre)
                    <a href="/theater/genres/{{$genre->id}}" class="button">{{$genre->name}}</a>
                    @endforeach
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>{{str_replace('-','/',str_replace('00:00:00', '', $theater->date))}}</span>
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
                        <div class="item">
                            <div class="item-header">
                                <div class="star-ratings-sprite">
                                    <span style="width:{{$averate}}%" class="star-ratings-sprite-rating"></span>
                                </div>
                                <h5 class="title pr-3">{{$averate/20}}</h5>
                            </div>
                            <p>نظر کاربران</p>
                        </div>
                        @if(!empty(Auth::user()->username))
                        <input type="hidden" id="username" value="{{Auth::user()->username}}">
                        <div class="item">
                            <div class="item-header">
                                <div class="thumb addfavorite" data-toggle="tooltip" data-placement="top" title="افزودن به علاقه مندی ها" id="{{$event_id}}">
                                    <img src="{{asset('images/movie/hearts.png')}}" alt="movie">
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    <!-- ==========Book-Section========== -->
    @include('flash-message')
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
                                    جزئیات تئاتر
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
                                        </div>
                                    </div>
                                  @endforeach
                                  @if(!empty(Auth::user()->name))
                                        <div class="widget-1 widget-offer">
                                            <h3 class="title mt-5">نظرات خود را ثبت کنید</h3>
                                            <div class="offer-body">
                                                <div class="offer-item">
                                                    <form class="mt-0" id="review">
                                                        @csrf
                                                        <input type="hidden" name="events_id" id="events_id" value="{{$id}}">
                                                        <div class="form-group">
                                                            <span><label for="rating" class="pl-3">امتیاز شما به این فیلم :</label>
                                                            <input type="number" id="rating" name="rating" min="0" max="5" class="inpnumw"></span>
                                                        </div>
                                                        <div class="form-group">
                                                        <textarea rows="8" cols="80" name="comment" id="comment" form="review" class="bgtrasparent text-white" placeholder="نظر خود را اینجا بنویسید ..."></textarea>
                                                        </div>
                                                        <input class="letter__spacing__1 probutton" type="button" id="addreview" value="ثبت نظر">
                                                    </form>
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
                                                @if(empty(Auth::user()->name))
                                                    <div class="mt-3 mb-3 text-center">
                                                        <?php $dc=count($date)?>
                                                        @if($dc==1)
                                                            <p class="text-white text-center">این برنامه در روز؛
                                                                @foreach($date as $d)
                                                                {{$d}},
                                                                @endforeach
                                                            نمایش داده میشود.</p>
                                                        @endif
                                                        @if($dc>1)
                                                            <p class="text-white text-center">این برنامه در روزهای؛
                                                                @foreach($date as $d)
                                                                {{$d}},
                                                                @endforeach
                                                            نمایش داده میشود.</p>
                                                        @endif
                                                        <p class="text-white text-center">لطفا برای خرید بلیت، ابتدا <a href="/login" class="tifanyc">وارد</a>  شوید و یا <a href="/register" class="tifanyc">ثبت نام</a> کنید.</p>
                                                    </div>
                                                @endif
                                                @if(!empty(Auth::user()->name))
                                                    <form method="POST" action="/ticket" class="mt-0">
                                                        @csrf
                                                        <div class="datebuy">
                                                            <input type="hidden" name="id" value="{{$id}}">
                                                            <span class="text-white mt-4 pb-1">روز مورد نظرتان را انتخاب کنید:</span>
                                                            <select class="myselect-bar1 text-black mt-3 mb-3" name="date">
                                                                @foreach($date as $k=>$d)
                                                                    <option value="{{$k}}">{{$d}}</option>
                                                                @endforeach
                                                            </select>
                                                            <input class="letter__spacing__1 probutton inpsubw" type="submit" value="خرید بلیت">
                                                        </div>
                                                    </form>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                @if($relatedEvents->count()>1)
                                <div class="row pt-5">
                                    <div class="col-12 movie-details">
                                        <div class="item">
                                            <div class="header">
                                                <h5 class="sub-title">رویداد های مرتبط</h5>
                                            </div>
                                            <div class="casting-slider owl-carousel">
                                                @foreach($relatedEvents as $v)
                                                @if($v->id!=$theater->id)
                                                <div class="thumb">
                                                    <a href="{{$v->id}}">
                                                        <img width="150px" height="250px" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="movie">
                                                    </a>
                                                    <h6 class="cast-title"><a href="{{$v->id}}">{{$v->name}}</a></h6>
                                                </div>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
            $(document).ready(function() {
                $('.addfavorite').click(function() {
                    var id = $(this).attr('id');
                    var username = $('#username').val();

                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "/addfavorite",
                        dataType: 'json',
                        data: { "id" : id},

                        success:function(response , status){
                            if(response.flag == 1){
                            swal({
                                    title: username + " عزیز",
                                    text: "این نمایش با موفقیت به لیست علاقه مندی های شما اضافه شد.",
                                    type: "success",
                                    confirmButtonText: "باشه"
                                });
                            }
                            if(response.flag == 0){
                            swal({
                                    title: username + " عزیز",
                                    text: "این نمایش از لیست علاقه مندی های شما حذف شد.",
                                    type: "warning",
                                    confirmButtonText: "باشه"
                                });
                            }
                        },error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log('AJAX error:', textStatus)
                        }
                    });
                });


                $('#addreview').click(function(){

                    var events_id = $('#events_id').val();
                    var rating = $('#rating').val();
                    var comment = $('#comment').val();
                    var username = $('#username').val();

                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    if(comment==""){
                        swal({
                            title: username + " عزیز",
                            text: "نوشتن متن نظر الزامی است.",
                            type: "warning",
                            confirmButtonText: "باشه"
                        });
                    }
                    if(rating > 5 || rating < 1){
                        swal({
                            title: username + " عزیز",
                            text: "امتیاز شما باید عددی بین 0 تا 5 باشد.",
                            type: "warning",
                            confirmButtonText: "باشه"
                        });
                    }
                    if(comment!=="" && 0<rating<6){
                        $.ajax({
                            type: 'POST',
                            url: "/review",
                            dataType: 'json',
                            data: { "events_id" : events_id,
                                    "rating" : rating,
                                    "comment" : comment
                            },

                            success:function(response , status){
                                swal({
                                        title: username + " عزیز",
                                        text: "نظرات شما با موفقیت ثبت و پس از بازخوانی نمایش داده خواهد شد.",
                                        type: "success",
                                        confirmButtonText: "باشه"
                                    });

                            },error: function(XMLHttpRequest, textStatus, errorThrown) {
                            console.log('AJAX error:', textStatus)
                            }
                        });
                    }
                });

            });
            </script>
    <!-- ==========Movie-Section========== -->

    @endsection
