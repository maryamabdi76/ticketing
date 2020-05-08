@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نمایش ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item"><a href="/admin/shows">نمایش ها</a></li>
              <li class="breadcrumb-item active">سالن نمایش</li>
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
                <div class="card-header">{{ __('نمایش سالن و رزرو') }}</div>

                <div class="card-body">
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
                                    <span>رزرو شده برای شما</span>
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
                                <input type="hidden" name="shows_id" id="shows_id" value="{{$shows_id}}">
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
                                                        if(in_array($seat_number, $taken_seats)){$flag=1;}
                                                        if(!empty($myseats)){
                                                            if(in_array($seat_number, $myseats)){$mine=1;}
                                                        }
                                                        ?>
                                                            @if($flag==0)
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
                            <div class="book-item text-right mt-5">
                                <span>شما صندلی های زیر را انتخاب کردید:</span>
                                <h3 class="title" id="chosenseats">
                                    @if($myseats!==null)
                                    @foreach($myseats as $ms)
                                        ,{{$ms}}
                                    @endforeach
                                    @endif
                                </h3>
                            </div>
                            <div>
                                <a href="/admin/shows" class="btn btn-primary " >
                                    <span class="fa fa-check"></span> رزرو
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.seat-free').click(function() {
            var x = jQuery(this).find('.seat_checkbox');
            x.toggleClass('checked').prev().prop('checked',$('.seat_checkbox').is('.checked'));

            var id = $(this).attr('id');
            var shows_id = $('#shows_id').val();

            $.ajax({
                type: 'POST',
                url: "/adminChosenSeat",
                dataType: 'json',
                data: { "_token": "{{ csrf_token() }}",
                        "id" : id,
                        "shows_id" : shows_id
                },

                success:function(response , status){
                    $("#chosenseats").text(response.seats);
                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', textStatus)
                }
            });
        });
    });
</script>
@endsection
