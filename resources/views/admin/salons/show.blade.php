@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">سالن ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item"><a href="/admin/salons">سالن ها</a></li>
              <li class="breadcrumb-item active">نمایش سالن</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">
            <div class="card text-right">
                <div class="card-header">{{ __('نمایش سالن') }}</div>

                <div class="card-body">
                    <div class="seat-plan-section padding-bottom padding-top">
                        <div class="container">
                            <a href="/createSegment/{{$salon_id}}" class="btn btn-primary " >
                                <span class="fa fa-plus pl-3"></span>افزودن بخش به سالن
                            </a>
                            <div class="screen-area">
                                <h4 class="screen">پرده نمایش</h4>
                                <div class="screen-thumb">
                                    <img src="{{asset('images/movie/screen-thumb.png')}}" alt="movie">
                                </div>
                                <?php $i=0; ?>
                                @foreach($segments as $seg)
                                <?php $part = explode('-' ,$seg->seat);
                                $row=$seg->row;
                                ?>
                                @if(!empty($seg->name))
                                <h5 class="subtitle mt-5"><a href="/editSegment/{{$seg->id}}" class="tifanyc" data-toggle="tooltip" data-placement="top" title="ویرایش بخش">{{$seg->name}}</a><p class="mb-0"><a href="/deleteSegment/{{$seg->id}}" class="mredc fontsize12imp" onclick="return confirm('آیا مطمئن هستید که میخواهید این بخش را حذف کنید؟');">حذف بخش</a></p></h5>

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
                                                        ?>
                                                            <li class="single-seat" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$seg->price}} تومان">
                                                                <img src="{{asset('images/movie/seat.png')}}" alt="seat">
                                                                <span class="sit-num">{{$seat_number}}</span>
                                                                <?php $n++; ?>
                                                            </li>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
