@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">

    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row justify-content-center">
          <div class=" jccenter">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-handshake fa-x mt-1 ml-2"></i>همکاری با ما</h1>
              </div>
              <div class="text-right">
                  </div>
                  <p class="text-center">ما علاقه‌مندیم که با شما همکاری کنیم و امیدواریم این احساس متقابل باشد. اگر یک پیشنهاد خوب به شما بدهیم، آن را می‌پذیرید؟</p>
                    <h5 class="tifany text-center mt-2">شما می‌توانید نمایندگی حضوری فروش بیلیتو باشید !</h5>
                    <p class="text-center mt-3">ما به منظور راحتی مشتریان، از گیشه های سرتاسر ایران دعوت به همکاری کرده ایم. کافیست فرم زیر را پر کنید و سپس با تنظیم قرارداد می‌توانید به ازای فروش هر بلیت به صورت حضوری، سود مشترک دریافت کنید !</p>
                  <div class="text-right mt-5">
                        <h4 class="h6 text-gray-900 mb-4 mr-3 tifany fontsize20">فرم اطلاعات</h4>
                      </div>
                    <form class="user">
                  <div class="form-group text-right">
                      <label class="mr-2" for="address">آدرس کامل</label>
                    <input type="text" class="form-control form-control-user myinput" id="address" name="address">
                  </div>
                <div class="form-group row pb-4">
                  <div class="col-sm-6 mb-3 mb-sm-0 text-right">
                      <label class="mr-2" for="post">کد پستی</label>
                    <input type="text" class="form-control form-control-user myinput" id="post" name="post">
                  </div>
                    <div class="col-sm-6 mb-3 mb-sm-0 text-right">
                        <label class="mr-2" for="guild">کد شناسه صنفی</label>
                      <input type="text" class="form-control form-control-user myinput" id="guild" name="guild">
                    </div>
                  <div class="form-group jccenter text-right pt-3 mr-3">
                      <label class="mr-2" for="cellphone">تلفن ثابت</label>
                    <input type="text" class="form-control form-control-user myinput" id="cellphone" name="cellphone">
                  </div>
                </div>
                    <a href="" class="probutton width100 text-center letter__spacing__1">
                    تنظیم قرارداد
                    </a>
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
