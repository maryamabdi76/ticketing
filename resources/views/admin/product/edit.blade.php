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
              <li class="breadcrumb-item active">ویرایش محصول</li>
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
                <div class="card-header">{{ __('ویرایش محصول') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateProduct" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $product->id}}" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left">{{ __('عکس های محصول') }}</label>
                            <div class="col-md-6">
                                @foreach($product->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="32%" alt=""/>
                                    <input type="hidden" name="photoid[]" value="{{$photo->id}}">
                                    <input name="file[{{$k}}]" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-xs fa fa-edit text-white"></a>
                                    <a href="/deletePhoto/{{$photo->id}}/{{$product->id}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" >
                                    <span class="fa fa-trash"></span>
                                </a>
                                {{-- <br> --}}
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
                            <label for="description" class="col-md-4 col-form-label text-md-left">{{ __('توضیحات') }}</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="8" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus>{{ $product->description}}</textarea>
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
                                    <option value="" disabled >دسته بندی</option>
                                    @foreach($cat as $v)
                                    <option value="{{$v->id}}" @if($v->id==$product->categoryid) selected @endif>{{$v->categoryname}}</option>
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
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price}}" required autocomplete="price" autofocus>

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
                                <input id="num" type="text" class="form-control @error('num') is-invalid @enderror" name="num" value="{{ $product->num}}" required autocomplete="num" autofocus>

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
