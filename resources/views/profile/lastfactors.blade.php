@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">
    <div id="content">
        <div class="container-fluid">
            @if($count==0)
                <div class="card cardbg o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <section class="feature_product_area  new-product">
                            <div class="container mt-3">
                                <div class="row jccenter pr-2 pt-5 pb-3">
                                    <p class="font-weight-bolder fontsize30 text-center topright50 maxh500">متاسفانه قبلا از ما خریدی نداشتید ! ◔⌢◔</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            @endif
            @if($count>0)
                <div class="row justify-content-md-between">
                    @for($i = 0; $i < $count; $i++)
                    <?php $id=$lastfactors[$i]->shows[0]->id;?>
                        <div class="col-lg-6 ">
                            <div class="card cardbg o-hidden border-0 shadow-lg my-5 p-5">
                                <div class="booking-summery bg-one">
                                    <h4 class="title">بلیت</h4>
                                    <ul>
                                        <li>
                                            <h6 class="subtitle">{{$shows[$id]->events_name}}</h6>
                                        </li>
                                        <li>
                                            <h6 class="subtitle">
                                                <span>
                                                    @foreach($locations as $l)
                                                        @if($l['id'] === $shows[$id]['locations_id'])
                                                            {{$l['name']}}
                                                        @endif
                                                    @endforeach
                                                </span>
                                                <span>{{$shows[$id]->salons_name}}</span>
                                            </h6>
                                            <div class="info"><span>تاریخ</span> <span>{{$shows[$id]->shows_date}}</span></div>
                                            <div class="info"><span>سانس</span> <span>{{$shows[$id]->end}}&nbsp;-&nbsp;{{$shows[$id]->begin}}</span></div>
                                            <div class="info"><span>شماره صندلی</span>
                                                <span>@foreach($lastfactors[$i]->shows as $a)
                                                    &nbsp;{{$a->pivot->seat_number}}
                                                @endforeach</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span class="info"><span>جمع کل</span><span>{{$lastfactors[$i]->sum}} تومان</span></span>
                                            <span class="info"><span>تخفیف</span><span>{{str_replace("'","",$lastfactors[$i]->discount)}} تومان</span></span>
                                            <span class="info"><span>مبلغ قابل پرداخت</span><span>{{$lastfactors[$i]->total}} تومان</span></span>
                                        </li>
                                    </ul>
                                </div>
                                @if($shows[$id]->catid==1)
                                    <span class="text-white text-right mt-2">کد تحویل بلیت: <strong class="tifanyc">{{$lastfactors[$i]->code}}</strong></span>
                                @elseif($shows[$id]->catid==2||$shows[$id]->catid==3)
                                    <a href="/printTicket/{{$lastfactors[$i]->id}}" class="custom-button back-button mt-3 inpsubw ">
                                    چاپ بلیت
                                    <i class="fa fa-angle-double-right"></i> </a>
                                @endif
                                    <p class="mt-2 text-right tifany">تاریخ ثبت سفارش : {{$lastfactors[$i]->purchase_date}} </p>
                            </div>
                        </div>
                    @endfor
                </div>
            @endif
        </div>
    </div>
</div>
</div>{{-- === --}}
@endsection
