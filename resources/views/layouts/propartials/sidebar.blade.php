
<div id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="row mb-3imp">
      <!-- sidebarr -->
      <div class="col-2">
      <ul class="mysidebar sidebg top-100 navbar-nav1 bg-gradient-primary sidebarr sidebarr-dark accordion mb-6" id="accordionsidebarr">

        <!-- sidebarr - Brand -->
        <a class="sidebarr-brand d-flex align-items-center justify-content-center mr-15imp" href="/profile">
          <div class="sidebarr-brand-icon ">
            <i class="fas fa-user"></i>
          </div>
          <div class="sidebarr-brand-text mx-3">حساب کاربری</div>
        </a>

        <!-- Divider -->
        <hr class="sidebarr-divider my-0">

        <!-- Nav Item - Pages Collapse Menu -->
        @if(Auth::user()->roles->first()->name=='BoxOffice')
        <li class="nav-item1 mr-1imp">
          <a class="nav-link1 collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-pen"></i>
            <span class="txtright">ویرایش اطلاعات</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionsidebarr">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item text-right" href="/proinfoedit">اطلاعات شخصی</a>
              <a class="collapse-item text-right" href="/addressedit">آدرس</a>

            </div>
          </div>
        </li>
        @endif

        @if(Auth::user()->roles->first()->name=='User')
        <li class="nav-item1 mr-1imp">
            <a class="nav-link1" href="/proinfoedit">
                <i class="fas fa-fw fa-pen"></i>
                <span class="txtright">ویرایش اطلاعات</span></a>
            </li>
        @endif
        <!-- Divider -->
        {{-- <hr class="sidebarr-divider"> --}}

        <!-- Nav Item - Charts -->
        @if(Auth::user()->roles->first()->name=='User')
        <li class="nav-item1 mr-1imp">
          <a class="nav-link1" href="/wallet">
            <i class="fas fa-fw fa-wallet"></i>
            <span class="txtright">کیف پول</span></a>
        </li>
        @endif

        @if(Auth::user()->roles->first()->name=='BoxOffice')
        <li class="nav-item1 mr-1imp">
            <a class="nav-link1" href="/invoice">
                <i class="fas fa-fw fa-file-invoice"></i>
                <span class="txtright">صورتحساب</span></a>
        </li>
        @endif

        <!-- Nav Item - Tables -->
        <li class="nav-item1 mr-1imp">
          <a class="nav-link1" href="/lastfactors">
            <i class="fas fa-fw fa-ticket-alt"></i>
            <span class="txtright">خرید های قبلی</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item1 mr-1imp">
          <a class="nav-link1" href="/favorites">
            <i class="fas fa-fw fa-heart"></i>
            <span class="txtright">علاقه مندی ها</span></a>
        </li>

        <!-- Nav Item - Tables -->
        @if(Auth::user()->roles->first()->name=='User')
        <li class="nav-item1 mr-1imp">
            <a class="nav-link1" href="/work">
                <i class="fas fa-fw fa-handshake"></i>
                <span class="txtright">همکاری با ما</span></a>
            </li>
        @endif
        <!-- Divider -->
        <hr class="sidebarr-divider d-none d-md-block">

        <!-- sidebarr Toggler (sidebarr) -->
        <div class="text-center d-none d-md-inline1 fcenter mt-4">
          <button class="rounded-circle border-0 jccenter mb-4" id="sidebarrToggle"></button>
        </div>
        <div></div>
<br>
      </ul>
      <br>
    </div>
  <!-- End of sidebarr -->
