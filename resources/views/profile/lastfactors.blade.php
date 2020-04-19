@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">
  <div class="container-fluid">
    <div class="row justify-content-md-between">
            @if($count==0)
                <p class="font-weight-bolder fontsize30 text-center topright50 maxh500"></p>
            @endif
        @if($count>0)
        @for($i = 0; $i < $count; $i++)
        <div class="col-lg-6 ">
            <div class="card cardbg o-hidden border-0 shadow-lg my-5 p-5">
                <div class="booking-summery bg-one">
                        <h4 class="title">بلیت</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle">{{$shows[$i]->events_name}}</h6>
                            </li>
                            <li>
                                {{-- {{$locations[$shows[$i]->locations_id-1]->name}} --}}
                                <h6 class="subtitle">
                                    <span>
                                    @foreach($locations as $l)
                                     @if($l['id'] === $shows[$i]['locations_id'])
                                     {{$l['name']}}
                                     @endif
                                    @endforeach
                                    </span>
                                    <span>{{$shows[$i]->salons_name}}</span>
                                </h6>
                                <div class="info"><span>تاریخ</span> <span>{{$shows[$i]->shows_date}}</span></div>
                                <div class="info"><span>سانس</span> <span>{{$shows[$i]->end}}&nbsp;-&nbsp;{{$shows[$i]->begin}}</span></div>
                                <div class="info"><span>شماره صندلی</span>
                                    <span>@foreach($lastfactors[$i]->shows as $a)
                                    &nbsp;{{$a->pivot->seat_number}}
                                    @endforeach</span>
                                </div>
                            </li>
                            <li>
                                <h6 class="subtitle mb-0"><span>قیمت هر بلیت</span><span>{{$shows[$i]->price}}</span></h6>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <span class="info"><span>جمع کل</span><span>{{$lastfactors[$i]->sum}} تومان</span></span>
                                <span class="info"><span>تخفیف</span><span>{{$lastfactors[$i]->discount}} تومان</span></span>
                                <span class="info"><span>مبلغ قابل پرداخت</span><span>{{$lastfactors[$i]->total}} تومان</span></span>
                            </li>
                        </ul>
                    </div>
                <p class="mt-4 text-right tifany">تاریخ ثبت سفارش : {{date("Y-m-d",$lastfactors[$i]->purchase_date)}} </p>
            </div>
        </div>
        @endfor
        @endif
            </div>
      </div>
    </div>
  </div>
</div>
</div>{{-- === --}}
@endsection
