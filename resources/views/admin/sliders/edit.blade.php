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
              <li class="breadcrumb-item active">ویرایش اسلاید</li>
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
                <div class="card-header">{{ __('ویرایش اسلاید') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateSlider" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $slider->id}}" >

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('عنوان') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $slider->title}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left">{{ __('عکس های اسلاید') }}</label>
                            <div class="col-md-6">
                                @foreach($slider->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="32%" alt=""/>
                                    <input type="hidden" name="photoid[]" value="{{$photo->id}}">
                                    <input name="file[{{$k}}]" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label text-md-left">{{ __('مربوط به رویداد') }}</label>
                            <div class="col-md-6">
                                <select id="event" name="event" class="form-control @error('event') is-invalid @enderror" name="event" value="{{ old('event') }}" >
                                    <option value="" disabled @if(empty($slider->events)) selected @endif>رویداد</option>
                                    @foreach($event as $v)
                                    <option value="{{$v->id}}" @if(empty($slider->events)) @elseif($v->name==$slider->events->name) selected @endif>{{$v->name}}</option>
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
