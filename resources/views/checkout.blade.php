
@extends('layouts.bilito.mainlayout')
@section('content')
<input type="hidden" id="username" value="{{Auth::user()->username}}">
@if($walletflag==1)
<script>
    var username = $('#username').val();

        swal({
    title: username + " عزیز",
    text: "متاسفانه موجودی کیف پول کافی نیست.",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-warning",
    confirmButtonText: "شارژ کیف پول",
    cancelButtonText: "بیخیال",
    closeOnConfirm: false
    },
    function(isConfirm) {
    if (isConfirm) {
        window.open("http://127.0.0.1:8000/wallet");
    }
    });
</script>
@endif
    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="{{asset('images/banner/banner04.jpg')}}">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">{{$eventname}}</h3>
                    <div class="tags">
                    <a href="#0">{{$location->name}}</a>
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
                    <form action="/seat" method="POST">
                        @csrf
                        <input type="hidden" name="shows_id" value="{{$shows_id}}">
                        <input type="hidden" name="salons_id" value="{{$salons_id}}">
                        <input type="submit" value="صفحه قبل" class="custom-button back-button inpsubw">
                    </form>
                </div>
                <div class="item" id="countdowndisplay">
                </div>
                <p>زمان باقی مانده</p>
                <form action="/timeout" method="POST" class="d-none" id="countdownform">
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
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">کد تخفیف </h5>
                        <div class="checkout-contact-form">
                            @csrf
                            <input type="hidden" name="username" id="username" value="{{Auth::user()->username}}">
                            <input type="hidden" name="factor_id" id="factor_id" value="{{$factor[0]->id}}">
                            <div class="form-group">
                                <input type="text" name="discount" id="discount" placeholder="کد تخفیف را وارد کنید">
                            </div>
                            <div class="form-group">
                                <input type="button" value="اعمال" class="letter__spacing__1 probutton inpsubw p-0" id="discountbtn">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">عملیات پرداخت </h5>
                        @if(Auth::user()->roles->first()->name!=='BoxOffice')
                            <ul class="payment-option">
                                <li class="active">
                                    <a href="/zarinpayment/{{$factor[0]->id}}">
                                        <img src="{{asset('images/payment/zarinpal.png')}}" alt="payment">
                                        <span>زرین پال</span>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        <div class="form-group">
                            @if(Auth::user()->roles->first()->name=='BoxOffice')
                                <p class="mt-3">با کلیک روی دکمه "پرداخت" مبلغ معادل 85% فاکتور به صورتحساب شما اضافه خواهد شد.</p>
                                <a href="/boxOfficeTransaction/{{$factor_id}}" class="custom-button back-button">پرداخت</a>
                            @endif
                            &nbsp;
                            <a href="/determent/{{$factor_id.'-'.$events_id.'-'.$eventcat}}" class="custom-button back-button">انصراف</a>
                        </div>
                        @if(Auth::user()->roles->first()->name=='User')
                        <div class="form-group">
                            <form class="user" method="POST" action="/walletTransaction">
                                @csrf
                                <input type="hidden" name="factor_id" value="{{$factor_id}}">
                                <input type="submit" value="پرداخت از کیف پول" class="custom-button back-button inpsubw">
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">بلیت</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">{{$eventname}}</h6>
                            </li>
                            <li>
                                <h6 class="subtitle"><span>{{$location->name}}</span><span>{{$show[0]->salons_name}}</span></h6>
                            <div class="info"><span>تاریخ</span> <span>{{$date}}</span></div>
                            <div class="info"><span>سانس</span> <span>{{$show[0]->end}}&nbsp;-&nbsp;{{$show[0]->begin}}</span></div>
                                <div class="info"><span>شماره صندلی</span>
                                    <span>@foreach($factor[0]->shows as $a)
                                        @if($a->pivot->seat_number!=='0')
                                            &nbsp;{{$a->pivot->seat_number}}
                                        @endif
                                    @endforeach</span>
                                </div>
                            </li>
                        </ul>
                        <ul>
                                <li>
                                    <span class="info"><span>جمع کل</span><span>{{$factor[0]->sum}} تومان</span></span>
                                    <span class="info"><span>تخفیف</span><span>{{str_replace("'","",$factor[0]->discount)}} تومان</span></span>
                                </li>
                            </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>مبلغ قابل پرداخت</span><span>{{$factor[0]->total}} تومان</span></h6>
                        @if($factor[0]->discount_id!==null)
                            <a href="/removediscount/{{$factor_id}}" class="custom-button back-button">حذف کد تخفیف</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->
    <script>
        $(document).ready(function() {

            $('#discountbtn').click(function() {
                var username = $('#username').val();
                var factor_id = $('#factor_id').val();
                var discount = $('#discount').val();

                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: "/discount",
                    dataType: 'json',
                    data: { "factor_id" : factor_id,
                            "discount" : discount },

                    success:function(response , status){
                        if(response.flag == 1){
                        swal({
                                title: username + " عزیز",
                                text: "کد تخفیف با موفقیت اعمال شد.",
                                type: "success",
                                confirmButtonText: "باشه"},
                                function(){
                                    location.reload();
                                }
                            );
                        }
                        if(response.flag == 0){
                        swal({
                                title: username + " عزیز",
                                text: response.msg,
                                type: "warning",
                                confirmButtonText: "باشه"
                            });
                        }
                    },error: function(XMLHttpRequest, textStatus, errorThrown) {
                    console.log('AJAX error:', XMLHttpRequest)
                    }
                });
            });
        });
    </script>
    @endsection
