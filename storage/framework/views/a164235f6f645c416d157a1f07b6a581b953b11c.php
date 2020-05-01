<?php $__env->startSection('content'); ?>

    <!-- ==========Banner-Section========== -->
    <section class="details-banner event-details-banner hero-area bg_img seat-plan-banner style-two" data-background="<?php echo e(asset('images/banner/banner04.jpg')); ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><span class="d-block">باتشکر از خرید شما</span>
                        <span class="d-block"></span></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one mb-5">
        <div class="container">
            <form class="ticket-search-form two">
                <div class="form-group">
                    <div class="thumb">
                        <img src="<?php echo e(asset('images/ticket/date.png')); ?>" alt="ticket">
                    </div>
                    <span class="text-white">سفارش شما با موفقیت ثبت شد. </span>
                    <?php if($flag==0): ?>
                    <span class="text-white">بلیت خود را میتوانید با کد <strong class="tifanyc"><?php echo e($code); ?></strong> از دستگاه های بیلیتو ویا گیشه سینما تحویل بگیرید.</span>
                </div>
                <div class="form-group">
                    <div class="item md-order-1">
                        <a href="/" class="custom-button back-button">
                            بازگشت به خانه
                            <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                    <?php elseif($flag==1): ?>
                    <span class="type">برای چاپ و یا ذخیره بلیت دکمه "چاپ بلیت" را کلیک کنید.</span>
                </div>
                <div class="form-group">
                    <div class="item md-order-1">
                        <a href="/printTicket/<?php echo e($factor_id); ?>" class="custom-button back-button ml-3">
                            چاپ بلیت
                            <i class="fa fa-angle-double-right"></i> </a>
                        <a href="/" class="custom-button back-button mr-3">
                            بازگشت به خانه
                            <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </div>
                    <?php endif; ?>
            </form>
        </div>
    </section>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/thank.blade.php ENDPATH**/ ?>