@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column">

 <div id="content">

  <div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="row justify-content-center">
          <div class=" jccenter">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-wallet fa-x"></i> کیف پول</h1>
              </div>
              <div class="text-right">
                    <h5 class="h6 text-gray-900 mb-4 darkpurplec">موجودی کیف پول</h5>
                  </div>
                  <h3>120000 تومان</h3>

                  <div class="text-right mt40">
                        <h5 class="h6 text-gray-900 mb-4 darkpurplec">شارژ کیف پول</h5>
                      </div>
                    <form class="user">
                  <div class="form-group">
                      <label class="mr15" for="amount">مبلغ مورد نظر شما :</label>
                    <input type="text" class="form-control form-control-user width300" id="amount2" name="amount">
                  </div>
                <a href="/login" class="btn btn-primary btn-user btn-block cartbtncolorh1 mt40">
                پرداخت
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
