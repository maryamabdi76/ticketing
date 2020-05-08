@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">کد های تخفیف</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">کد های تخفیف</li>
              <li class="breadcrumb-item active">اضافه کردن کد تخفیف</li>
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
                <div class="card-header">{{ __('اضافه کردن کد تخفیف') }}</div>

                <div class="card-body">
                <form method="POST" action="/storeDiscount" enctype="multipart/form-data">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" >
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-left">{{ __('کد') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-left">{{ __('مقدار') }}</label>

                            <div class="col-md-6">
                                <input id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value" required autocomplete="value" autofocus>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expire_date" class="col-md-4 col-form-label text-md-left">{{ __('تاریخ انقضا') }}</label>

                            <div class="col-md-6">
                                <input id="expire_date" type="text" class="form-control @error('expire_date') is-invalid @enderror" name="expire_date" required autocomplete="expire_date" autofocus>

                                @error('expire_date')
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
                    <p class="text-right pt-3"><b>راهنما</b>
                    <br>
                    1- مقدار تخفیف میتواند به صورت درصدی؛ برای مثال 20% و یا مبلغی کلی(به تومان) مانند 20000 باشد.
                    <br>
                    2- فرمت نوشتاری تاریخ انقضا به صورت "YYYY-MM-DD h:i:sa" می باشد.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
