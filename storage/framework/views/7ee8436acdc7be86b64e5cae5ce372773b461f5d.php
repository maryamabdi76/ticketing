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
                    <img src="<?php echo e(asset('images/logo/logo.png')); ?>" alt="logo">
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a class="<?php echo e(Request::is('/') ? 'active' : ''); ?>" href="/"> خانه </a>
                </li>
                <li>
                    <a class="<?php echo e(Request::is('movie*') ? 'active' : ''); ?><?php echo e(Request::is('searchmovie') ? 'active' : ''); ?>" href="/movie"> فیلم </a>
                </li>
                <li>
                    <a class="<?php echo e(Request::is('concert*') ? 'active' : ''); ?><?php echo e(Request::is('searchconcert') ? 'active' : ''); ?>" href="/concert"> کنسرت </a>
                </li>
                <li>
                    <a class="<?php echo e(Request::is('theater*') ? 'active' : ''); ?><?php echo e(Request::is('searchtheater') ? 'active' : ''); ?>" href="/theater"> تئاتر</a>
                </li>

                <li>
                    <a class="<?php echo e(Request::is('blog*') ? 'active' : ''); ?><?php echo e(Request::is('searchblog') ? 'active' : ''); ?>" href="/blog"> بلاگ </a>
                </li>
                <li>
                    <a class="<?php echo e(Request::is('about') ? 'active' : ''); ?>" href="/about"> درباره ما </a>
                </li>
                <li>
                    <a class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>" href="/contact"> تماس با ما </a>
                </li>


                <form class="ticket-search-form ml-4 mr-4" method="POST" action="<?php echo e(route('search')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <input name="search" type="text" placeholder="جستجو">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                 </form>

                <?php if(Route::has('login')): ?>
                <li class="header-button pl-0">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" style="padding:10px 20px"><i class="fa fa-user"></i></a>
                    <?php else: ?>
                    <a href="/login" style="padding:10px 15px"> ورود | عضویت </a>
                    <?php endif; ?>
                </li>
                <?php endif; ?>

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
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/layouts/bilito/partials/nav.blade.php ENDPATH**/ ?>