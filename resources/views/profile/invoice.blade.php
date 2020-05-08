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
                                <h1 class="h4 text-gray-900 mb-4 darkpurplec"><i class="fas fa-fw fa-file-invoice fa-x"></i>صورتحساب</h1>
                            </div>
                            <div class="text-right pt-4">
                                <h5 class="h6 text-gray-900 mb-4 tifany">مبلغ بدهی</h5>
                            </div>
                            <h3>{{$money[0]->money}} تومان</h3>
                            <div class="text-right mt-4">
                                <h5 class="h6 text-gray-900 mb-4 tifany">پرداخت بدهی</h5>
                            </div>
                            <form class="user" method="POST" action="/walletDebt">
                                @csrf
                                <div class="form-group pb-4 text-right">
                                    <label class="mr-2 text-right" for="amount">مبلغ مورد نظر شما :</label>
                                    <input type="text" class="form-control form-control-user myinput" id="amount" name="amount">
                                </div>
                                <input type="submit" value="پرداخت" class="probutton letter__spacing__1">
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
