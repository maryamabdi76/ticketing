
@extends('layouts.bilito.mainlayout')
@section('content')

<!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">{{$show_name}}</h3>
                    <div class="tags">
                        <a href="">{{$location->name}}</a>
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
                </div>
                <div class="item" id="countdowndisplay">
                </div>
                <p>زمان باقی مانده</p>
                <form action="/timeout" method="POST" class="myd-none" id="countdownform">
                    @csrf
                    <input type="hidden" name="factor_id" value="{{$factor_id}}">
                    <input type="hidden" name="event_id" value="{{$events_id}}">
                    <input type="hidden" name="eventcat" value="{{$eventcat}}">
                    <input type="submit" value="" id="countdownsubmit">
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <ul class="seinfoli">
                <li class="tifanyc">وضعیت صندلی ها:</li>
                <li class="single-seat">
                    <img src="{{asset('images/movie/seat01.png')}}" alt="seat">
                    <span>قابل خرید</span>
                </li>
                <li class="single-seat">
                    <img src="{{asset('images/movie/seat01-chosen.png')}}" alt="seat">
                    <span>انتخاب شما</span>
                </li>
                <li class="single-seat">
                    <img src="{{asset('images/movie/seat01-taken.png')}}" alt="seat">
                    <span>فروخته شده</span>
                </li>
            </ul>

            <div class="screen-area">
                <h4 class="screen">پرده نمایش</h4>
                <div class="screen-thumb">
                    <img src="{{asset('images/movie/screen-thumb.png')}}" alt="movie">
                </div>
                <form action="/reserve-seats" method="post" id="seatform">
                    @csrf
                <input type="hidden" name="shows_id" id="shows_id" value="{{$shows_id}}">
                <input type="hidden" name="factor_id" id="factor_id" value="{{$factor_id}}">
                <?php $i=0; ?>
                @foreach($segments as $seg)
                <?php $part = explode('-' ,$seg->seat);
                $row=$seg->row;
                ?>
                @if(!empty($seg->name))
                <h5 class="subtitle mt-5">{{$seg->name}}</h5>
                @endif
                <div class="screen-wrapper">
                    <ul class="seat-area mb-5imp">
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
                                        $flag=$mine=0;
                                        if(!empty($myseats)){
                                            if(in_array($seat_number, $myseats)){$mine=1;}
                                        }
                                        ?>
                                            @if($mine==0)
                                                @if($price==0)
                                                    <li class="single-seat seat-free" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$seg->price}} تومان">
                                                        <input type="checkbox" name="seat[]" value="{{$seg->price}}" id="{{$seat_number}}" class="input_seat_checkbox reserve-seat">
                                                        <span class="sit-num">{{$seat_number}}</span>
                                                        <?php $n++; ?>
                                                    </li>
                                                @endif
                                                @if($price > 0)
                                                    <li class="single-seat seat-free" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$price}} تومان">
                                                        <input type="checkbox" name="seat[]" value="{{$price}}" id="{{$seat_number}}" class="input_seat_checkbox reserve-seat">
                                                        <span class="sit-num">{{$seat_number}}</span>
                                                        <?php $n++; ?>
                                                    </li>
                                                @endif
                                            @endif
                                            @if($mine==1)
                                                @if($price==0)
                                                    <li class="single-seat seat-free" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$seg->price}} تومان">
                                                        <input type="checkbox" name="seat[]" value="{{$seg->price}}" id="{{$seat_number}}" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                        <span class="sit-num">{{$seat_number}}</span>
                                                        <?php $n++; ?>
                                                    </li>
                                                @endif
                                                @if($price > 0)
                                                    <li class="single-seat seat-free" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$price}} تومان">
                                                    <input type="checkbox" name="seat[]" value="{{$price}}" id="{{$seat_number}}" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                        <span class="sit-num">{{$seat_number}}</span>
                                                        <?php $n++; ?>
                                                    </li>
                                                @endif
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
            <div class="proceed-book bg_img mt-5" data-background="{{asset('images/movie/movie-bg-proceed.jpg')}}">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span class="tifanyc font-weight-bolder">مکان برگزاری:</span>
                        <span>{{$location->name.' - '.$salon_name}}</span>
                        <span>آدرس: {{$location->province.', '.$location->city.', '.$location->address}}</span>
                    </div>
                    <div class="book-item">
                        <span>:شما صندلی های زیر را انتخاب کردید</span>
                        <h3 class="title" id="chosenseats">
                            @if($myseats!==null)
                            @foreach($myseats as $ms)
                                ,{{$ms}}
                            @endforeach
                            @endif
                        </h3>
                    </div>
                    <div id="msg"></div>
                    <div class="book-item">
                            <input class="letter__spacing__1 probutton inpdatew p-3" type="submit" value="خرید بلیت">
                            <a href="/determent/{{$factor_id.'-'.$events_id.'-'.$eventcat}}" class="custom-button back-button mr-5 pr-5 pl-5 mt-3">انصراف</a>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="username" value="{{Auth::user()->username}}">
    <script>
    $(document).ready(function() {
        $('.seat-free').click(function() {
            var x = jQuery(this).find('.seat_checkbox');
            x.toggleClass('checked').prev().prop('checked',$('.seat_checkbox').is('.checked'));

            var id = $(this).attr('id');
            var shows_id = $('#shows_id').val();
            var factor_id = $('#factor_id').val();

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "/chosen-seats",
                dataType: 'json',
                data: { "id" : id,
                        "shows_id" : shows_id,
                        "factor_id" : factor_id
                },

                success:function(response , status){
                    $("#chosenseats").text(response.seats);
                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', textStatus)
                }
            });
        });

        (function worker() {
            var shows_id = $('#shows_id').val();
            var factor_id = $('#factor_id').val();
            var img = "{{asset('images/movie/seat01-taken.png')}}" ;

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "/seatsLiveFeed",
                dataType: 'json',
                data: { "shows_id" : shows_id,
                        "factor_id" : factor_id
                },

                success: function(data) {
                    $('.d-none').removeClass("d-none");
                    $('.taken_seat').hide();

                    $.each(data.taken_seats, function(k, v) {
                        var id  = $('#' + v);
                        var seat_number = v;

                        id.addClass("d-none").after('<li class="single-seat taken_seat"><img src="'+img+'" alt="seat"><span class="sit-num">'+seat_number+'</span></li>').one();
                    });
                    console.log(data.taken_seats);
                },complete: function() {
                    setTimeout(worker, 5000);
                    console.log('done');

                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', XMLHttpRequest)
                }
            });
        })();

        $('#seatform').submit(function() {
            var username = $('#username').val();
            if ($('input:checkbox', this).is(':checked')){
                // everything's fine...
            } else {
                swal({
                    title: username + " عزیز",
                    text: "برای خرید بلیت انتخاب حداقل یک صندلی الزامی است.",
                    type: "warning",
                    confirmButtonText: "باشه"
                });
                return false;
            }
        });
    });
    </script>
    <!-- ==========Movie-Section========== -->
    @endsection
