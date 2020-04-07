@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

 <div id="content">

  <div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="row justify-content-center">
          <div class="col-lg-7 jccenter">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-pen fa-x"></i> ویرایش اطلاعات شخصی</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label class="mr15" for="name">نام و نام خانوادگی</label>
                    <input type="text" class="form-control form-control-user" id="name" name="name">
                  </div>
                  <div class="col-sm-6">
                      <label class="mr15" for="username">نام کاربری</label>
                    <input type="text" class="form-control form-control-user" id="username" name="username">
                  </div>
                </div>
                <div class="form-group">
                    <label class="mr15" for="email">ایمیل</label>
                  <input type="email" class="form-control form-control-user" id="email" name="email">
                </div>
                <div class="form-group">
                    <label class="mr15" for="mobile">تلفن همراه</label>
                    <input type="text" class="form-control form-control-user" id="mobile" name="mobile">
                  </div>
                  <div class="form-group">
                      <label class="mr15" for="lastpass">گذر واژه قبلی</label>
                    <input type="text" class="form-control form-control-user" id="lastpass" name="lastpass">
                  </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <label class="mr15" for="password">گذر واژه جدید</label>
                    <input type="password" class="form-control form-control-user" id="password" name="password">
                  </div>
                  <div class="col-sm-6">
                      <label class="mr15" for="confirmpassword">تکرار گذر واژه</label>
                    <input type="password" class="form-control form-control-user" id="confirmpassword" name="confirmpassword">
                  </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block cartbtncolorh1 mt40">
                  ذخیره تغییرات
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
