<?php $__env->startSection('content'); ?>

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img" data-background="<?php echo e(asset('images/banner/banner05.jpg')); ?>"></div>
        <div class="container">
            <div class="banner-content event-content">
                <h1 class="title bold">بلیت <span class="color-theme">تئاتر </span> بخرید</h1>
                <p>نمایش تئاتر مورد علاقه خود را از دست ندهید. در بهترین جایگاه صندلی خود را خریداری کنید. </p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->


<?php echo $__env->make('layouts.bilito.partials.ticketsearch', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- ==========Event-Section========== -->
    <section class="event-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-3">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="<?php echo e(asset('images/sidebar/banner/banner01.jpg')); ?>" alt="banner">
                            </a>
                        </div>
                    </div>
                    <div class="widget-1 widget-check">
                        <div class="widget-header">
                            <h5 class="m-title">فیلتر</h5> <a href="<?php echo e(route('theater')); ?>" class="clear-check">پاک کردن همه</a>
                        </div>
                        <div class="widget-1-body">
                            <h6 class="subtitle">دسته بندی ها</h6>
                            <form method="post" action="<?php echo e(route('theatergenre')); ?>">
                                <?php echo e(csrf_field()); ?>

                            <div class="check-area">
                                    <div class="form-group">
                                        <input type="checkbox" name="genre[]" value="*" id="genre0"><label for="genre0">همه</label>
                                    </div>
                                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <input type="checkbox" name="genre[]" value="<?php echo e($genre->name); ?>" id="genre<?php echo e($genre->id); ?>">
                                    <label for="genre<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="add-check-area">
                                <button style="background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);" type="submit"> اعمال</button>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="<?php echo e(asset('images/sidebar/banner/banner02.jpg')); ?>" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="filter-area">
                            <div class="filter-main">
                                <div class="left w-100 justify-content-between">
                                    <div class="item mr-0">
                                        <span class="show">مرتب سازی  :</span>
                                        <a class="select-b <?php if($sort): ?> active <?php endif; ?>" href="<?php echo e(route('sortShowingTheater')); ?>"onclick="event.preventDefault(); document.getElementById('sortShowing').submit();">
                                            در حال نمایش</a>
                                        <form id="sortShowing" action="<?php echo e(route('sortShowingTheater')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                            <?php $__currentLoopData = $arrayIdTheaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="hidden" name="show[]" value="<?php echo e($id); ?>">
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </form>
                                    </div>
                                    <ul class="grid-button tab-menu">
                                        <li class="active">
                                            <i class="fas fa-th"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-bars"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="row mb-10 justify-content-center">
                                <?php if(empty($theaters) || $theaters->count()==0): ?>
                                <h5 class="text-center pt-5 pb-5">متاسفانه موردی یافت نشد!</h5>
                                <?php endif; ?>
                                    <?php $__currentLoopData = $theaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theater): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="event-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="/theater-details/<?php echo e($theater->id); ?>">
                                                    <img width="220px" height="300px" src="<?php echo e(asset('/').$theater->Images()->get()->first()->path); ?>" alt="event">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0" style="font-size:1.1rem">
                                                <a href="/theater-details/<?php echo e($theater->id); ?>"><?php echo e($theater->name); ?></a>
                                                </h5>
                                                <div class="movie-rating-percent">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="movie-area mb-10">
                                <?php $__currentLoopData = $theaters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theater): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="movie-list">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/theater-details/<?php echo e($theater->id); ?>" class="w-75 bg_img" data-background="<?php echo e(asset('/').$theater->Images()->get()->first()->path); ?>">
                                            <img src="<?php echo e(asset('/').$theater->Images()->get()->first()->path); ?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title">
                                        <a href="/theater-details/<?php echo e($theater->id); ?>"><?php echo e($theater->name); ?></a>
                                        </h5>
                                        <div class="movie-tags">
                                            <?php $__currentLoopData = $theater->genres()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="#0"><?php echo e($genre->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="release">
                                            <span>تاریخ نمایش : </span> <a href="#0"><?php echo e($theater->date); ?></a>
                                        </div>
                                        <ul class="movie-rating-percent">
                                        </ul>
                                        <div class="book-area">
                                            <div class="book-ticket">
                                                <div class="react-item">
                                                <a href="/theater-details/<?php echo e($theater->id); ?>">
                                                        <div class="thumb">
                                                            <img src="<?php echo e(asset('images/icons/book.png')); ?>" alt="icons">
                                                        </div>
                                                        <span class="mr-2">مشاهده جزئیات</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($theaters)): ?>
                        <?php echo e($theaters->appends(request()->query())->links()); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/theater/theater.blade.php ENDPATH**/ ?>