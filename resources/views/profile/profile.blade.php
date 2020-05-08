@extends('layouts.prolayout')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column col-10 p-5">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>

          <div class="card o-hidden border-0 shadow-lg my-5 cardbg">
                  <i class="fas fa-fw fa-user fa-4x jccenter pt-4 pb-1 "></i><br>
                  <div class="text-center jccenter">
                      <h3 class="txtblack">{{ Auth::user()->username }}</h3>
                      <h6 class="pt-2 txtblack">{{ Auth::user()->name }}</h6>
                  </div>
                  <div class="row jccenter">
                    <div class="pt-3 ml-3 mb-3">
                        <a href="{{ route('logout') }}" class="probutton"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            خروج از حساب کاربری
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    @if(Auth::user()->roles->first()->name=='User'||Auth::user()->roles->first()->name=='BoxOffice')
                    <div class="pt-3 pb-4 mr-2">
                        <a href="profil.deleteacc" class="probutton">
                            حذف حساب کاربری
                        </a>
                    </div>
                    @endif
                  </div>
                </div>
          <!-- Content Row -->
          <div class="row">


            <div class="col-6 mb-4">
              <div class="card border-left-purple shadow h-100 py-2 cardbg">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-right">
                        @if(Auth::user()->roles->first()->name=='User'||Auth::user()->roles->first()->name=='BoxOffice')
                            @if(Auth::user()->roles->first()->name=='User')
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 tifany">موجودی کیف پول</div>
                            @endif
                            @if(Auth::user()->roles->first()->name=='BoxOffice')
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 tifany">صورتحساب</div>
                            @endif
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$money}} تومان</div>
                                </div>
                                <div class="col-auto">
                                    <a href="/wallet"><i class="fas fa-wallet fa-3x tifany "></i></a>
                                </div>
                        @endif
                        @if(Auth::user()->roles->first()->name=='Admin')
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 tifany">علاقه مندی ها</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$favoritecount}}</div>
                            </div>
                            <div class="col-auto">
                                <a href="/favorites"><i class="fas fa-heart fa-3x tifany "></i></a>
                            </div>
                        @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mb-4">
              <div class="card border-left-gray shadow h-100 py-2 cardbg">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2 text-right">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 tifany">خرید های قبلی</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$factorcount}}</div>
                    </div>
                    <div class="col-auto">
                    <a href="/lastfactors/{{Auth::user()->id}}"><i class="fas fa-file-invoice fa-3x tifany"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<br>
<br>
</div>{{-- === --}}
@endsection
