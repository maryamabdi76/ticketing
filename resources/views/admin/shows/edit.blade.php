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
              <li class="breadcrumb-item">نمایش ها</li>
              <li class="breadcrumb-item active">اضافه کردن نمایش</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card text-right">
                <div class="card-header">{{ __('ویرایش نمایش') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateShow">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{$show->id}}" >

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label text-md-left">{{ __('نام رویداد') }}</label>
                            <div class="col-md-6">
                                <select id="event" name="event" class="form-control @error('event') is-invalid @enderror" name="event" required>
                                    <option value="" disabled >نام رویداد</option>
                                    @foreach($event as $v)
                                    <option value="{{$v->id}}" @if($v->id==$show->events->id) selected @endif>{{$v->name}}</option>
                                    @endforeach
                                </select>

                                @error('event')
                                    <span class="invalid-feedback" event="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="salon" class="col-md-4 col-form-label text-md-left">{{ __('نام سالن') }}</label>
                            <div class="col-md-6">
                                <select id="salon" name="salon" class="form-control @error('salon') is-invalid @enderror" name="salon" required>
                                    <option value="" disabled >نام سالن</option>
                                    @foreach($salon as $v)
                                        <option value="{{$v->id}}" @if($v->id==$show->salons->id) selected @endif>{{$v->name}} - {{$show->salons->locations->name}}</option>
                                    @endforeach
                                </select>

                                @error('salon')
                                    <span class="invalid-feedback" event="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-left">{{ __('تاریخ نمایش') }}</label>

                            <div class="col-md-6">
                                <input id="date" type="text" value="{{$show->date}}" placeholder="1399-01-01" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="date" autofocus>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="begin" class="col-md-4 col-form-label text-md-left">{{ __('زمان شروع') }}</label>

                            <div class="col-md-6">
                                <input id="begin" type="text" value="{{$show->begin}}" placeholder="12:00:00" class="form-control @error('begin') is-invalid @enderror" name="begin" required autocomplete="begin" autofocus>

                                @error('begin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="end" class="col-md-4 col-form-label text-md-left">{{ __('زمان پایان') }}</label>

                            <div class="col-md-6">
                                <input id="end" type="text" value="{{$show->end}}" placeholder="12:00:00" class="form-control @error('end') is-invalid @enderror" name="end" required autocomplete="end" autofocus>

                                @error('end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num" class="col-md-4 col-form-label text-md-left">{{ __('تعداد') }}</label>

                            <div class="col-md-6">
                                <input id="num" type="text" value="{{$show->num}}" class="form-control @error('num') is-invalid @enderror" name="num" required autocomplete="end" autofocus>

                                @error('num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-left">{{ __('قیمت') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" value="{{$show->price}}" class="form-control @error('price') is-invalid @enderror" name="price" autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
