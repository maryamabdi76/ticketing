@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">محصولات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">محصولات</li>
              <li class="breadcrumb-item active">اضافه کردن محصول</li>
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
{{-- <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12"> --}}
            <div class="card text-right">
                <div class="card-header">{{ __('اضافه کردن محصول') }}</div>

                <div class="card-body">
                <form method="POST" action="/createProduct" enctype="multipart/form-data">
                        @csrf
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
                                <input id="imagefile" type="file" class="form-control @error('imagefile') is-invalid @enderror" name="imagefile[]" required accept="image/*" multiple>
                                @error('imagefile[]')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('توضیحات') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" rows="8" class="form-control @error('description') is-invalid @enderror" name="description" required></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-left">{{ __('دسته بندی') }}</label>

                            <div class="col-md-6">
                                <select id="category" name="categoryid" class="form-control @error('categoryid') is-invalid @enderror" name="categoryid" value="{{ old('categoryid') }}" required autocomplete="categoryid">
                                    <option value="" disabled selected>دسته بندی</option>
                                    @foreach($cat as $v)
                                    <option value="{{$v->id}}">{{$v->categoryname}}</option>
                                    @endforeach
                                </select>

                                @error('categoryid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-left">{{ __('قیمت') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price"  required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="num" class="col-md-4 col-form-label text-md-left">{{ __('تعداد') }}</label>

                            <div class="col-md-6">
                                <input id="num" type="text" class="form-control @error('num') is-invalid @enderror" name="num" required autocomplete="num" autofocus>

                                @error('num')
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

<script>
$(document).ready(function(){
    $('form').ajaxForm({
        beforeSend():function(){
            $(#success).empty();
            $('.progress-bar').text('0%');
            $('.progress-bar').css('width','0%');
        },
        uploadProgress:function(event,position,total,percentComplete){
            $('.progress-bar').text(percentComplete +'0%');
            $('.progress-bar').css('width',percentComplete +'0%');
        },
        success:function(data){
            if(data.success){
                ('#success').html('<div class="text-success text-center"><b>'+data.success+'</b></div><br>');
                ('#success').append(data.image);
                $('.progress-bar').text('uploaded');
                $('.progress-bar').css('width','100');
            }
        }
    })
});
</script>
