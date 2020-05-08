@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">فیلم ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">فیلم ها</li>
              <li class="breadcrumb-item active">ویرایش فیلم</li>
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
                <div class="card-header">{{ __('ویرایش فیلم') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateMovie" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $movie->id}}" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $movie->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left">{{ __('عکس های فیلم') }}</label>
                            <div class="col-md-6">
                                @foreach($movie->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="32%" alt=""/>
                                    <input type="hidden" name="photoid[]" value="{{$photo->id}}">
                                    <input name="file[{{$k}}]" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                    @if($movie->Images()->get()->count()>1)
                                    <a href="/deleteMoviePhoto/{{$photo->id}}/{{$movie->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
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


                        <div class="form-group row">
                            <label for="act" class="col-md-4 col-form-label text-md-left">{{ __('بازیگران') }}</label>

                            <div class="col-md-6">
                                <textarea id="act" rows="8" class="form-control @error('act') is-invalid @enderror" name="act" required autocomplete="act" autofocus>{{ $movie->act}}</textarea>
                                @error('act')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="team" class="col-md-4 col-form-label text-md-left">{{ __('تیم') }}</label>

                            <div class="col-md-6">
                                <textarea id="team" rows="8" class="form-control @error('team') is-invalid @enderror" name="team" required autocomplete="team" autofocus>{{ $movie->team}}</textarea>
                                @error('team')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('توضیحات') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="8" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ $movie->description}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-left">{{ __('ژانر') }}</label>

                            <div class="col-md-6">
                                 @foreach($genres as $v)
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="genre[]" type="checkbox" id="{{$v->id}}" value="{{$v->id}}"
                                                       @foreach($movie->genres as $genre) @if($v->id==$genre->id) checked @endif @endforeach>
                                    <label class="form-check-label" for="{{$v->id}}">{{$v->name}}</label>
                                      </div>
                                    @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-left">{{ __('تاریخ شروع و پایان اکران') }}</label>

                            <div class="col-md-6">
                                <textarea id="date" rows="8" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="date" autofocus>{{ $movie->date}}</textarea>
                                @error('date')
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
