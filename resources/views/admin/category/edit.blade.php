@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark  text-right">دسته بندی ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">دسته بندی ها</li>
              <li class="breadcrumb-item active">ویرایش دسته بندی</li>
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
                <div class="card-header">{{ __('ویرایش دسته بندی') }}</div>

                <div class="card-body">
                <form method="POST" action="/updatePro">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $category->id}}" >

                        <div class="form-group row">
                            <label for="categoryname" class="col-md-4 col-form-label text-md-left">{{ __('نام دسته بندی') }}</label>

                            <div class="col-md-6">
                                <input id="categoryname" type="text" class="form-control @error('categoryname') is-invalid @enderror" name="categoryname" value="{{ $category->categoryname}}" required autocomplete="categoryname" autofocus>

                                @error('categoryname')
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
