
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                <h3 class="title">{{$eventname}}</h3>
                    <div class="tags">
                        <a href="#0">فارسی</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="row">
                <a href="/{{$eventcat}}-details/{{$event}}" class="custom-button back-button inpsubw justify-content-start">
                 قبلی
                <i class="fa fa-angle-double-left"></i> </a>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        @foreach($count as $v)
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">
                                        @foreach($locations as $l)
                                        @if($l['id'] === $v)
                                        {{$l['name']}}
                                        @endif
                                       @endforeach
                                </a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule justify-content-lg-start">
                                @foreach($sans as $s)
                                @if($s->locations_id===$v)
                                <div class="item">
                                    <form action="/seat" method="post">
                                        @csrf
                                        <input type="hidden" name="salons_id" value="{{$s->salons_id}}">
                                        <input type="hidden" name="shows_id" value="{{$s->shows_id}}">
                                        <input type="submit" value="{{$s->begin}}" class="bgtrasparent maxh2">
                                    </form>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="{{asset('images/sidebar/banner/banner03.jpg')}}" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->


    @endsection
