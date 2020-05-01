<?php $__env->startSection('content'); ?>


    <!-- ==========Window-Warning-Section========== -->
    
    <!-- ==========Window-Warning-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img" data-background="<?php echo e(asset('images/banner/banner04.jpg')); ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content">
                <h3 class="title"><?php echo e($eventname); ?></h3>
                    <div class="tags">
                        
                        <a href="#0">فارسی</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo e(asset('images/ticket/city.png')); ?>" alt="ticket">
                    </div>
                    <span class="type">شهر</span>
                    <select class="select-bar">
                        <option value="london">تهران</option>
                        <option value="dhaka">اصفهان</option>
                        <option value="rosario">شیراز</option>
                        <option value="madrid">کیش</option>
                        <option value="koltaka">گیلان</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo e(asset('images/ticket/date.png')); ?>" alt="ticket">
                    </div>
                    <span class="type">روز</span>
                    <select class="select-bar">
                        <option value="26-12-19">23/10/2020</option>
                        <option value="26-12-19">24/10/2020</option>
                        <option value="26-12-19">25/10/2020</option>
                        <option value="26-12-19">26/10/2020</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo e(asset('images/ticket/cinema.png')); ?>" alt="ticket">
                    </div>
                    <span class="type">سینما</span>
                    <select class="select-bar">
                        <option value="Awaken">ملت</option>
                        <option value="dhaka">ماندانا</option>
                        <option value="rosario">آزادی</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo e(asset('images/ticket/exp.png')); ?>" alt="ticket">
                    </div>
                    <span class="type">نمایش</span>
                    <select class="select-bar">
                        <option value="English-2D">English-2D</option>
                        <option value="English-3D">English-3D</option>
                        <option value="Hindi-2D">Hindi-2D</option>
                        <option value="Hindi-3D">Hindi-3D</option>
                        <option value="Telegu-2D">Telegu-2D</option>
                        <option value="Telegu-3D">Telegu-3D</option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <div class="ticket-plan-section padding-bottom padding-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-5 mb-lg-0">
                    <ul class="seat-plan-wrapper bg-five">
                        <?php $__currentLoopData = $count; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <a href="#0" class="name">
                                        <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($l['id'] === $v): ?>
                                        <?php echo e($l['name']); ?>

                                        <?php endif; ?>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </a>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>
                            <div class="movie-schedule justify-content-lg-start">
                                <?php $__currentLoopData = $sans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($s->locations_id===$v): ?>
                                <div class="item">
                                    <form action="/seat" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="salons_id" value="<?php echo e($s->salons_id); ?>">
                                        <input type="hidden" name="shows_id" value="<?php echo e($s->shows_id); ?>">
                                        <input type="submit" value="<?php echo e($s->begin); ?>" class="bgtrasparent maxh2">
                                        
                                            
                                        
                                    </form>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10">
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="<?php echo e(asset('images/sidebar/banner/banner03.jpg')); ?>" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->


    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/ticket.blade.php ENDPATH**/ ?>