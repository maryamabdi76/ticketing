@extends('layouts.bilito.mainlayout')
@section('content')

<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="{{asset('images/account/account-bg.jpg')}}">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">سلام</span>
                    <h2 class="title">خوش آمدید</h2>
                </div>
                <form class="account-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group text-right">
                        <label for="email">ایمیل<span>*</span></label>
                        <input type="email" placeholder="ایمیل خود را وارد نمائید" id="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group text-right">
                        <label for="password">گذر واژه<span>*</span></label>
                        <input type="password" placeholder="گذر واژه خود را وارد نمائید" id="password"  class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group checkgroup text-right">
                        <input type="checkbox" id="remember" name="remember" checked>
                        <label class="text-right" for="remember">مرا به خاطر بسپار</label>
                    </div>
                    <div class="form-group text-center">
                        <input class="letter__spacing__1" type="submit" value="ورود">
                    </div>
                </form>
                <div class="option">
                    حساب کاربری ندارید؟ <a href="/register">ثبت نام کنید</a>
                </div>
                <div class="or"><span>یا</span></div>
                <p class="text-center text-secondary">با کمک یکی از حساب های زیر وارد شوید</p>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========Sign-In-Section========== -->


@endsection
