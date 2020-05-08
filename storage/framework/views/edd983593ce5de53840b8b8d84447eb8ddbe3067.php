<?php $__env->startSection('content'); ?>
    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="<?php echo e(asset('images/banner/banner01.jpg')); ?>"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip">
                    <span class="d-block">بلیت خود را برای </span>
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible"> سینما </b>
                        <b> تئاتر </b>
                        <b> کنسرت </b>
                    </span>
                    <span class="d-block">رزرو کنید</span>
                </h1>
                <p>خرید بلیت به راحتی، با بهترین قیمت و قابل اعتماد برای سرگرمی شما</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <?php echo $__env->make('layouts.bilito.partials.ticketsearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div id="bilitoSlider" class="stacked-cards pt-5 mt-2">
		<ul>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li class="gradiant-bg">
                <img src="<?php echo e(asset('/').$e->Images()->get()->first()->path); ?>" style=""/>
                <a class="w-100 text-center text-white m-2" href="/movie-details/<?php echo e($e->events_id); ?>"><?php echo e($e->title); ?></a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
    </div>
    <!-- ==========Best Seller========== -->
    <section class="event-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="text-right">
                        <h2 class="title mb-4">پرفروش ترین ها</h2>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php $__currentLoopData = $x; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <?php if($v[0]->categories_id==1): ?>
                                        <a href="/movie-details/<?php echo e($v[0]->id); ?>">
                                        <img width="330px" height="400px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                                        </a>
                                        <?php elseif($v[0]->categories_id==2): ?>
                                        <a href="/concert-details/<?php echo e($v[0]->id); ?>">
                                        <img width="330px" height="400px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                                        </a>
                                        <?php else: ?>
                                        <a href="/theater-details/<?php echo e($v[0]->id); ?>">
                                        <img width="330px" height="400px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                                        </a>
                                        <?php endif; ?>

                                        <div class="event-date">
                                            <h6 class="date-title"><i class="fa fa-store"></i></h6>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <?php if($v[0]->categories_id==1): ?>
                                            <a href="/movie-details/<?php echo e($v[0]->events_id); ?>"><?php echo e($v[0]->name); ?></a>
                                            <?php elseif($v[0]->categories_id==2): ?>
                                            <a href="/concert-details/<?php echo e($v[0]->events_id); ?>"><?php echo e($v[0]->name); ?></a>
                                            <?php else: ?>
                                            <a href="/theater-details/<?php echo e($v[0]->events_id); ?>"><?php echo e($v[0]->name); ?></a>
                                            <?php endif; ?>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Best-Seller========== -->


    <!-- ==========Liked========== -->
    <?php if($mostratings->count() > 0): ?>
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="text-right">
                        <h2 class="title mb-4">محبوب ترین ها</h2>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php $__currentLoopData = $mostratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mostrating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                            <?php if($mostrating->events->categories_id==1): ?>
                                            <a href="/movie-details/<?php echo e($mostrating->events->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$mostrating->events->Images()->get()->first()->path); ?>" alt="movie">
                                            </a>
                                            <?php elseif($mostrating->events->categories_id==2): ?>
                                            <a href="/concert-details/<?php echo e($mostrating->events->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$mostrating->events->Images()->get()->first()->path); ?>" alt="movie">
                                            </a>
                                            <?php else: ?>
                                            <a href="/theater-details/<?php echo e($mostrating->events->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$mostrating->events->Images()->get()->first()->path); ?>" alt="movie">
                                            </a>
                                            <?php endif; ?>

                                        <div class="event-date">
                                            <h6 class="date-title"><i class="fa fa-heart"></i></h6>
                                        </div>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <?php if($mostrating->events->categories_id==1): ?>
                                            <a href="/movie-details/<?php echo e($mostrating->events->id); ?>"><?php echo e($mostrating->events->name); ?></a>
                                            <?php elseif($mostrating->events->categories_id==2): ?>
                                            <a href="/concert-details/<?php echo e($mostrating->events->id); ?>"><?php echo e($mostrating->events->name); ?></a>
                                            <?php else: ?>
                                            <a href="/theater-details/<?php echo e($mostrating->events->id); ?>"><?php echo e($mostrating->events->name); ?></a>
                                            <?php endif; ?>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- ==========Best-Seller========== -->



    <!-- ==========Movie-Section========== -->
    <section class="movie-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">فیلم ها</h2>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($movie->categories_id ==1): ?>
                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details/<?php echo e($movie->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$movie->Images()->get()->first()->path); ?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <a href="/movie-details/<?php echo e($movie->id); ?>"><?php echo e($movie->name); ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom bg-four">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">کنسرت ها</h2>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $concert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($concert->categories_id ==2): ?>
                            <div class="item">
                                <div class="event-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/concert-details/<?php echo e($concert->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$concert->Images()->get()->first()->path); ?>" alt="concert">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size:1.1rem">
                                            <a href="/concert-details/<?php echo e($concert->id); ?>"><?php echo e($concert->name); ?></a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Event-Section========== -->

    <!-- ==========Sports-Section========== -->
    <section class="sports-section padding-top padding-bottom">
        <div class="container">
            <div class="tab">
                <div class="section-header-2">
                    <div class="right">
                        <h2 class="title">تئاتر ها</h2>
                    </div>
                </div>
                <div class="tab-area mb-30-none">
                    <div class="tab-item active">
                        <div class="owl-carousel owl-theme tab-slider">
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theater): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($theater->categories_id ==3): ?>
                            <div class="item">
                                <div class="sports-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details/<?php echo e($theater->id); ?>">
                                            <img width="330px" height="400px" src="<?php echo e(asset('/').$theater->Images()->get()->first()->path); ?>" alt="theater">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0"  style="font-size:1.1rem">
                                        <a href="/theater-details/<?php echo e($theater->id); ?>"><?php echo e($theater->name); ?></a>
                                        </h5>
                                        <div class="movie-rating-percent">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sports-Section========== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/bilito.blade.php ENDPATH**/ ?>