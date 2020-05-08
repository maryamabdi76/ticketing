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
              <li class="breadcrumb-item active">ویرایش پست</li>
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
                <div class="card-header">{{ __('ویرایش پست') }}</div>

                <div class="card-body">
                <form method="POST" action="/updatePost" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $post->id}}" >

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left">{{ __('موضوع') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left">{{ __('عکس های پست') }}</label>
                            <div class="col-md-6">
                                @foreach($post->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="32%" alt=""/>
                                    <input type="hidden" name="photoid[]" value="{{$photo->id}}">
                                    <input name="file[{{$k}}]" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                    @if($post->Images()->get()->count()>1)
                                    <a href="/deletePostPhoto/{{$photo->id}}/{{$post->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                    <span class="fa fa-trash"></span>
                                    @endif
                                </a>
                                @endforeach
                            </div>
                            <label for="imagefile" class="col-md-4 col-form-label text-md-left">{{ __('اضافه کردن عکس جدید') }}</label>
                            <div class="col-md-6">
                                <input id="imagefile" type="file" class="form-control @error('imagefile') is-invalid @enderror" name="imagefile[]" accept="image/*" multiple>
                                @error('imagefile[]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @if($post->Videos()->count()>0)
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left">{{ __('فیلم پست') }}</label>
                            <div class="col-md-6">
                                @foreach($post->Videos()->get() as $k=>$v)
                                    <video width="" height="150" controls>
                                        <source src="{{asset('/').$v->source}}" type="video/mp4">
                                      </video>
                                    <input type="hidden" name="videoid" value="{{$v->id}}">
                                    <input name="video" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                    <a href="/deletePostVideo/{{$v->id}}/{{$post->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                    <span class="fa fa-trash"></span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            <label for="film" class="col-md-4 col-form-label text-md-left">{{ __('اضافه کردن فیلم') }}</label>
                            <div class="col-md-6">
                                <input id="film" type="file" class="form-control @error('film') is-invalid @enderror" name="film">
                                @error('film')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-left">{{ __('متن') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" rows="8" class="form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" autofocus>{{ $post->content}}</textarea>
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
                                    <option value="" @if(empty($post->events)) selected @endif>رویداد</option>
                                    @foreach($event as $v)
                                    <option value="{{$v->id}}" @if(empty($post->events)) @elseif($v->name==$post->events->name) selected @endif>{{$v->name}}</option>
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
