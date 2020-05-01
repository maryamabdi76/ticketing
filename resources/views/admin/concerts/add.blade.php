@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">کنسرت ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">کنسرت ها</li>
              <li class="breadcrumb-item active">اضافه کردن کنسرت</li>
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
                <div class="card-header">{{ __('اضافه کردن کنسرت') }}</div>

                <div class="card-body">
                <form method="POST" action="/storeConcert" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus>

                                @error('name')
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
                            <label for="act" class="col-md-4 col-form-label text-md-left">{{ __('خواننده') }}</label>

                            <div class="col-md-6">
                                <textarea id="act" rows="8" class="form-control @error('act') is-invalid @enderror" name="act" required autocomplete="act" autofocus></textarea>
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
                                <textarea id="team" rows="8" class="form-control @error('team') is-invalid @enderror" name="team" required autocomplete="team" autofocus></textarea>
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
                                <textarea id="description" rows="8" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus></textarea>
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
                                        <input class="form-check-input" name="genre[]" type="checkbox" id="{{$v->id}}" value="{{$v->id}}">
                                        <label class="form-check-label" for="{{$v->id}}">{{$v->name}}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-left">{{ __('تاریخ شروع و پایان اکران') }}</label>

                            <div class="col-md-6">
                                <textarea id="date" rows="8" class="form-control @error('date') is-invalid @enderror" name="date" required autocomplete="date" autofocus></textarea>
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
