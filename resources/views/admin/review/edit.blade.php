@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نظرات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">نظرات</li>
              <li class="breadcrumb-item active">ویرایش نظر</li>
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
                <div class="card-header">{{ __('ویرایش نظر') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateReview">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $review->id}}" >

                        <div class="form-group row">
                            <label for="user" class="col-md-4 col-form-label text-md-left">{{ __('نام کاربری') }}</label>

                            <div class="col-md-6">
                                <select id="user" name="userid" class="form-control @error('userid') is-invalid @enderror" value="{{ old('userid') }}" required autocomplete="userid">
                                    <option value="" disabled >نام کاربر</option>
                                    @foreach($user as $v)
                                    <option value="{{$v->id}}" @if($v->id==$review->userid) selected @endif>{{$v->name}}</option>
                                    @endforeach
                                </select>

                                @error('userid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kala" class="col-md-4 col-form-label text-md-left">{{ __('نام کالا') }}</label>

                            <div class="col-md-6">
                                <select id="kala" name="kalaid" class="form-control @error('kalaid') is-invalid @enderror" value="{{ old('kalaid') }}" required autocomplete="userid">
                                    <option value="" disabled >نام کالا</option>
                                    @foreach($kala as $v)
                                    <option value="{{$v->id}}" @if($v->id==$review->kalaid) selected @endif>{{$v->name}}</option>
                                    @endforeach
                                </select>

                                @error('kalaid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="comment" class="col-md-4 col-form-label text-md-left">{{ __('نظر') }}</label>

                            <div class="col-md-6">
                                <textarea id="comment" rows="8" class="form-control @error('comment') is-invalid @enderror" name="comment" required autocomplete="comment" autofocus>
                                    {{ $review->comment}}
                                </textarea>
                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-left">{{ __('امتیاز') }}</label>

                            <div class="col-md-6">
                                <input id="rating" type="text" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ $review->rating}}" required autocomplete="rating" autofocus>

                                @error('rating')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="liked" class="col-md-4 col-form-label text-md-left">{{ __('علاقمندی') }}</label>

                            <div class="col-md-6">
                                <select id="kala" name="liked" class="form-control @error('liked') is-invalid @enderror" value="{{ old('liked') }}" required autocomplete="userid">
                                    <option value="" disabled >علاقمندی</option>
                                    <option value="1" @if($review->liked==1) selected @endif>دارد</option>
                                    <option value="0" @if($review->liked==0) selected @endif>ندارد</option>
                                </select>
                                @error('liked')
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
