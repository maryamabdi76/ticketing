@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">

    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row justify-content-center">
          <div class="col-lg-7 jccenter">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-pen fa-x"></i> ویرایش اطلاعات شخصی</h1>
              </div>
              <form class="user" method="POST" action="/proinfoupdate">
                @csrf
                <div class="form-group row text-right">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label class="mr-2" for="name">نام و نام خانوادگی</label>
                    <input type="text" class="myinput text-right pr-2 @error('name') is-invalid @enderror" id="name" name="name" value="{{Auth::user()->name}}">
                        @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                  <div class="col-sm-6 text-right">
                      <label class="mr-2" for="username">نام کاربری</label>
                    <input type="text" class="myinput text-right pr-2 @error('username') is-invalid @enderror" id="username" name="username" value="{{Auth::user()->username}}">
                        @error('username')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                  </div>
                </div>
                <div class="form-group text-right">
                      <label class="mr-2" for="email">ایمیل</label>
                    <input type="email" class="myinput text-right pr-2 @error('email') is-invalid @enderror" id="email" name="email" value="{{Auth::user()->email}}">
                        @error('email')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group text-right">
                      <label class="mr-2" for="phone">تلفن همراه</label>
                    <input type="text" class="myinput text-right pr-2 @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{Auth::user()->phone}}">
                        @error('phone')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="form-group row text-right">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label class="mr-2" for="password">گذر واژه جدید</label>
                    <input type="password" class="myinput text-right pr-2 @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                  <div class="col-sm-6 text-right mb-4">
                      <label class="mr-2" for="confirmpassword">تکرار گذر واژه</label>
                    <input type="password" class="myinput text-right pr-2" id="confirmpassword" name="password_confirmation">
                  </div>
                </div>
                <div class="form-group text-center">
                        <input class="letter__spacing__1 probutton" type="submit" value="ذخیره تغییرات">
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>{{-- === --}}
@endsection
