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
                    <a href="/"> خانه </a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="index.html"> خانه 1 </a>
                        </li>
                        <li>
                            <a href="index-2.html"> خانه 2 </a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/movie"> فیلم </a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="movie-grid.html">Movie Grid</a>
                        </li>
                        <li>
                            <a href="movie-list.html">Movie List</a>
                        </li>
                        <li>
                            <a href="movie-details.html">Movie Details</a>
                        </li>
                        <li>
                            <a href="movie-details-2.html">Movie Details 2</a>
                        </li>
                        <li>
                            <a href="movie-ticket-plan.html">Movie Ticket Plan</a>
                        </li>
                        <li>
                            <a href="movie-seat-plan.html">Movie Seat Plan</a>
                        </li>
                        <li>
                            <a href="movie-checkout.html">Movie Checkout</a>
                        </li>
                        <li>
                            <a href="popcorn.html">Movie Food</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/concert"> کنسرت </a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="events.html">Events</a>
                        </li>
                        <li>
                            <a href="event-details.html">Event Details</a>
                        </li>
                        <li>
                            <a href="event-speaker.html">Event Speaker</a>
                        </li>
                        <li>
                            <a href="event-ticket.html">Event Ticket</a>
                        </li>
                        <li>
                            <a href="event-checkout.html">Event Checkout</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/theater"> تئاتر</a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="sports.html">Sports</a>
                        </li>
                        <li>
                            <a href="sport-details.html">Sport Details</a>
                        </li>
                        <li>
                            <a href="sports-ticket.html">Sport Ticket</a>
                        </li>
                        <li>
                            <a href="sports-checkout.html">Sport Checkout</a>
                        </li>
                    </ul> --}}
                </li>

                <li>
                    <a href="/blog"> بلاگ </a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="blog.html">Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html">Blog Single</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/about"> درباره ما </a>
                    {{-- <ul class="submenu">
                        <li>
                            <a href="about.html">درباره ما</a>
                        </li>
                        <li>
                            <a href="apps-download.html">دانلود برنامه</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="/contact"> تماس با ما </a>
                </li>

                @if (Route::has('login'))
                <li class="header-button pl-0">
                    @auth
                        <a href="{{ url('/home') }}" style="padding:10px 20px"><i class="fa fa-user"></i></a>
                    @else
                    <a href="/login"> ورود | عضویت </a>
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
