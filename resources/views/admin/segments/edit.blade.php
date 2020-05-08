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
              <li class="breadcrumb-item active">ویرایش بخش</li>
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
                <div class="card-header">{{ __('ویرایش بخش') }}</div>
                    <p class="mt-3 text-center">قرار دادن "-" در میان اعداد در بخش "چیدمان صندلی ها" به معنی فضای خالی بین سری از صندلی هاست.</p>
                <div class="card-body">
                        <form method="POST" action="/updateSegment">
                            @csrf
                            <input id="id" type="hidden" class="form-control " name="id" value="{{ $segment->id}}" >
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('نام') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $segment->name}}" autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="row" class="col-md-4 col-form-label text-md-left">{{ __('تعداد ردیف') }}</label>

                                <div class="col-md-6">
                                    <input id="row" type="text" class="form-control @error('row') is-invalid @enderror" name="row" value="{{ $segment->row}}" required autocomplete="row" autofocus>

                                    @error('row')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="seat" class="col-md-4 col-form-label text-md-left">{{ __('چیدمان صندلی ها') }}</label>

                                <div class="col-md-6">
                                    <input id="seat" type="text" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ $segment->seat}}" required autocomplete="seat" autofocus>

                                    @error('seat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="capicity" class="col-md-4 col-form-label text-md-left">{{ __('ظرفیت') }}</label>

                                <div class="col-md-6">
                                    <input id="capicity" type="text" class="form-control @error('capicity') is-invalid @enderror" name="capicity" value="{{ $segment->capicity}}" required autocomplete="capicity" autofocus>

                                    @error('capicity')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="orders" class="col-md-4 col-form-label text-md-left">{{ __('ترتیب') }}</label>

                                <div class="col-md-6">
                                    <input id="orders" type="text" class="form-control @error('orders') is-invalid @enderror" name="orders" value="{{ $segment->orders}}" required autocomplete="orders" autofocus>

                                    @error('orders')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-left">{{ __('قیمت') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $segment->price}}" required autocomplete="price" autofocus>

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-primary w-100" id="show-seats">
                                        {{ __('پیش نمایش') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('ویرایش') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    <h5 class="chidemantitle mt-5">چیدمان</h5>
                    <div class="seat-plan-section padding-bottom padding-top mt-5">
                        <div class="container">
                            <div class="screen-area">
                                <?php $i=0; ?>
                                <?php $part = explode('-' ,$segment->seat);
                                $row=$segment->row;
                                $alphabet = range('A', 'Z');
                                ?>
                                <div class="screen-wrapper" id="seats-part">
                                    <ul class="seat-area mb-5imp" id="last-seats">
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
                                                            <li class="single-seat" id="{{$seat_number}}" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: {{$segment->price}} تومان">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
        $(document).ready(function() {
            $('#show-seats').click(function() {
                // var x = jQuery(this).find('.seat_checkbox');
                // x.toggleClass('checked').prev().prop('checked',$('.seat_checkbox').is('.checked'));
                $('#last-seats').hide();

                var alphabet = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"]
                var row = $('#row').val();
                var seat = $('#seat').val();
                var price = $('#price').val();
                var part = seat.split("-");
                var i = 0; var j = 0; var k = 0;
                var seats; var seat_number;
                var img = "{{asset('images/movie/seat.png')}}" ;

                    seats+='<ul class="seat-area mb-5imp" id="last-seats">';
                    for(j=0;j<row;j++){
                        var n = 1;
                        seats+='<li class="seat-line"><span>'+alphabet[i]+'</span>';
                            $.each(part, function( index, value ) {
                                seats+='<ul class="seat--area"><li class="front-seat"><ul>';
                                    for(k=0;k<value;k++){
                                        seat_number=alphabet[i]+n;
                                        seats+='<li class="single-seat" id="'+seat_number+'" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: '+price+' تومان"><img src="'+img+'" alt="seat"><span class="sit-num">'+seat_number+'</span></li>';
                                        n++;
                                    }
                                seats+='</ul></li></ul>';
                            });
                        i++;
                        seats+='</li>';
                    }
                    seats+='</ul>';

                $('#seats-part').html(seats);
            });
        });
        </script>
@endsection
