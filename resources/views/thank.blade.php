
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner style-two" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">باتشکر از خرید شما</span>
                        <span class="d-block"></span></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one mb-5">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="{{asset('images/ticket/date.png')}}" alt="ticket">
                    </div>
                    <span class="text-white">سفارش شما با موفقیت ثبت شد. </span>
                    @if($flag==0)
                    <span class="text-white">بلیت خود را میتوانید با کد <strong class="tifanyc">{{$code}}</strong> از دستگاه های بیلیتو ویا گیشه سینما تحویل بگیرید.</span>
                </div>
                <div class="form-group">
                    <div class="item md-order-1">
                        <a href="/" class="custom-button back-button">
                            بازگشت به خانه
                            <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                    @elseif($flag==1)
                    <span class="type">برای چاپ و یا ذخیره بلیت دکمه "چاپ بلیت" را کلیک کنید.</span>
                </div>
                <div class="form-group">
                    <div class="item md-order-1">
                        <a href="/printTicket/{{$factor_id}}" class="custom-button back-button ml-3">
                            چاپ بلیت
                            <i class="fa fa-angle-double-right"></i> </a>
                        <a href="/" class="custom-button back-button mr-3">
                            بازگشت به خانه
                            <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                    @endif
            </form>
        </div>
    </section>

    @endsection
