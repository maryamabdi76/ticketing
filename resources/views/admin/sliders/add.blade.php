@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">اسلایدر</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">اسلایدر</li>
              <li class="breadcrumb-item active">اضافه کردن اسلاید</li>
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
                <div class="card-header">{{ __('اضافه کردن اسلاید') }}</div>

                <div class="card-body">
                <form method="POST" action="/storeSlider" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" >

                        <div class="form-group row">
                            <label for="imagefile" class="col-md-4 col-form-label text-md-left">{{ __('عکس') }}</label>
                            <div class="col-md-6">
                                <input id="imagefile" type="file" required class="form-control @error('imagefile') is-invalid @enderror" name="imagefile">
                                @error('imagefile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('عنوان') }}</label>

                            <div class="col-md-6">
                                <input id="title" rows="8" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label text-md-left">{{ __('مربوط به رویداد') }}</label>
                            <div class="col-md-6">
                                <select id="event" required name="event" class="form-control @error('event') is-invalid @enderror" name="event" value="{{ old('event') }}" >
                                    <option value="" disabled selected>رویداد</option>
                                    @foreach($event as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                </select>

                                @error('event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('اضافه کردن') }}
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
