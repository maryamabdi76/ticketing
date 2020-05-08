<!-- ==========Preloader========== -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->
<!-- ==========Overlay========== -->
<div class="overlay"></div>
<a href="#0" class="scrollToTop">
    <i class="fas fa-angle-up"></i>
</a>
<!-- ==========Overlay========== -->

<!-- ==========Header-Section========== -->
<header class="header-section">
    <div class="container">
        <div class="header-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="{{asset('images/logo/logo.png')}}" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a class="{{ Request::is('/') ? 'active' : '' }}" href="/"> خانه </a>
                </li>
                <li>
                    <a class="{{ Request::is('movie*') ? 'active' : ''}}{{ Request::is('searchmovie') ? 'active' : '' }}{{ Request::is('sortShowingMovie') ? 'active' : '' }}" href="/movie"> فیلم </a>
                </li>
                <li>
                    <a class="{{ Request::is('concert*') ? 'active' : '' }}{{ Request::is('searchconcert') ? 'active' : '' }}{{ Request::is('sortShowingConcert') ? 'active' : '' }}" href="/concert"> کنسرت </a>
                </li>
                <li>
                    <a class="{{ Request::is('theater*') ? 'active' : '' }}{{ Request::is('searchtheater') ? 'active' : '' }}{{ Request::is('sortShowingTheater') ? 'active' : '' }}" href="/theater"> تئاتر</a>
                </li>

                <li>
                    <a class="{{ Request::is('blog*') ? 'active' : '' }}{{ Request::is('searchblog') ? 'active' : '' }}" href="/blog"> بلاگ </a>
                </li>
                <li>
                    <a class="{{ Request::is('about') ? 'active' : '' }}" href="/about"> درباره ما </a>
                </li>
                <li>
                    <a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact"> تماس با ما </a>
                </li>


                <form class="ticket-search-form ml-4 mr-4" method="POST" action="{{route('search')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="search" type="text" placeholder="جستجو">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                 </form>

                @if (Route::has('login'))
                <li class="header-button pl-0">
                    @auth
                        <a href="{{ url('/home') }}" style="padding:10px 20px"><i class="fa fa-user"></i></a>
                    @else
                    <a href="/login" style="padding:10px 15px"> ورود | عضویت </a>
                    @endauth
                </li>
                @endif

            </ul>


            <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- ==========Header-Section========== -->
