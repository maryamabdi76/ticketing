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
                    <form class="account-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group text-right">
                            <label for="name">نام و نام خانوادگی<span>*</span></label>
                            <input id="name" type="text" placeholder="نام و نام خانوادگی خود را وارد نمائید" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group text-right">
                            <label for="name">نام کاربری<span>*</span></label>
                            <input id="username" type="text"  placeholder="نام کاربری خود را وارد نمائید" class=" @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

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
                            <label for="email">جنسیت<span>*</span></label>
                            <select id="gender" name="gender" class="@error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender">
                                <option value="" disabled selected>جنسیت</option>
                                <option value="2">آقا</option>
                                <option value="1">خانم</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-group text-right">
                            <label for="phone">موبایل<span>*</span></label>
                            <input id="phone" type="text"  placeholder="شماره تلفن همراه خود را وارد نمائید" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')
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
                        <div class="form-group text-right">
                            <label for="password-confirm">تکرار گذر واژه<span>*</span></label>
                            <input id="password-confirm"  placeholder="گذر واژه خود را دوباره وارد نمائید" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group checkgroup">
                            <input type="checkbox" id="bal" required checked>من با<a class="pr-1 pl-1 tifanyc" href="#0"> قوانین، مقررات </a> و <a class="pr-1 pl-1 tifanyc" href="#0"> پردازه </a> سایت موافقم</input>
                        </div>
                        <div class="form-group text-center">
                            <input class="letter__spacing__1" type="submit" value="ثبت نام">
                        </div>
                    </form>
                    <div class="option">
                        حساب کاربری دارید؟ <a href="/login">وارد شوید</a>
                    </div>
                    <div class="or"><span>یا</span></div>
                    <p class="text-center text-secondary">با کمک یکی از حساب های زیر ثبت نام کنید</p>
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
