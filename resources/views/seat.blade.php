
@extends('layouts.bilito.mainlayout')
@section('content')

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Venus</h3>
                    <div class="tags">
                        <a href="#0">سینما ملت</a>
                        <a href="#0">English - 2D</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <a href="/ticket/" class="custom-button back-button">
                        <i class="fa fa-angle-double-left"></i> قبلی
                    </a>
                </div>
                <div class="item date-item">
                    <span class="date">دوشنبه ، 20 فروردین 1399 </span>
                    <select class="select-bar">
                        <option value="sc1">09:40</option>
                        <option value="sc2">13:45</option>
                        <option value="sc3">15:45</option>
                        <option value="sc4">19:50</option>
                    </select>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                    <p>دقیقه مانده</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">پرده نمایش</h4>
                <div class="screen-thumb">
                    <img src="{{asset('images/movie/screen-thumb.png')}}" alt="movie">
                </div>
                <form action="/chosen-seats" method="post">
                    @csrf
                <input type="hidden" name="shows_id" value="{{$shows_id}}">
                <?php $i=0; ?>
                @foreach($segments as $seg)
                <?php $part = explode('-' ,$seg->seat);
                $row=$seg->row;
                ?>
                <h5 class="subtitle">{{$seg->name}}</h5>
                <div class="screen-wrapper">
                    <ul class="seat-area">
                        @for($j=0;$j<$row;$j++)
                        <?php $n=1; ?>
                        <li class="seat-line">
                            <span>{{$alphabet[$i]}}</span>
                            @foreach($part as $p)
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        @for($k=0;$k<$p;$k++)
                                        <?php
                                        $seat_number=$alphabet[$i].$n;
                                        $flag=0;
                                        if(in_array($seat_number, $taken_seats)){$flag=1;}
                                        ?>
                                            @if($flag==0)
                                            <li class="single-seat seat-free" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$seg->price}} تومان">
                                                {{-- <img src="{{asset('images/movie/seat01.png')}}" alt="seat"> --}}
                                                {{-- <input type="checkbox" name="seat[]" value="{{$seat_number.'/'.$p->price}}" class="sit-num d-none bgtrasparent maxh2"> --}}
                                            <input type="checkbox" name="seat[]" value="{{$seat_number.'/'.$seg->price}}" class="input_seat_checkbox">
                                                <span class="sit-num">{{$seat_number}}</span>
                                                <?php $n++; ?>
                                            </li>
                                            @endif
                                            @if($flag==1)
                                            <li class="single-seat">
                                                <img src="{{asset('images/movie/seat01-taken.png')}}" alt="seat">
                                                <span class="sit-num">{{$seat_number}}</span>
                                                <?php $n++; ?>
                                            </li>
                                            @endif
                                        @endfor
                                    </ul>
                                </li>
                            </ul>
                            @endforeach
                            <?php $i++; ?>
                        </li>
                        @endfor
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="proceed-book bg_img" data-background="{{asset('images/movie/movie-bg-proceed.jpg')}}">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span class="tifanyc font-weight-bolder">مکان برگزاری:</span>
                        <span>{{$location->name.' - '.$salon_name}}</span>
                        <span>آدرس: {{$location->province.', '.$location->city.', '.$location->address}}</span>
                        {{-- <h3 class="title">d9, d10</h3> --}}
                    </div>
                    {{-- <div class="book-item">
                        <h3 class="title">150.000 تومان</h3>
                    </div> --}}
                    <div class="book-item">
                            <input class="letter__spacing__1 probutton inpdatew p-3" type="submit" value="خرید بلیت">
                        {{-- <a href="/checkout/" class="custom-button">ادامه دادن <i class="fa fa-angle-double-left"></i></i></a> --}}
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>

    <!-- ==========Movie-Section========== -->
    @endsection
