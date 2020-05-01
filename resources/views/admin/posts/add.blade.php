@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">پست ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">پست ها</li>
              <li class="breadcrumb-item active">اضافه کردن پست</li>
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
                <div class="card-header">{{ __('اضافه کردن پست') }}</div>

                <div class="card-body">
                <form method="POST" action="/storePost" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" >
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('موضوع') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="imagefile" class="col-md-4 col-form-label text-md-left">{{ __('عکس') }}</label>
                            <div class="col-md-6">
                                <input id="imagefile" type="file" required class="form-control @error('imagefile') is-invalid @enderror" name="imagefile[]" accept="image/*" multiple>
                                @error('imagefile[]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="videofile" class="col-md-4 col-form-label text-md-left">{{ __('فیلم') }}</label>
                            <div class="col-md-6">
                                <input id="videofile" type="file" class="form-control @error('videofile') is-invalid @enderror" name="videofile">
                                @error('videofile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-left">{{ __('متن') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" rows="8" class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" autofocus></textarea>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label text-md-left">{{ __('مربوط به رویداد') }}</label>
                            <div class="col-md-6">
                                <select id="event" name="event" class="form-control @error('event') is-invalid @enderror" name="event" value="{{ old('event') }}" >
                                    <option value="" selected>رویداد</option>
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
