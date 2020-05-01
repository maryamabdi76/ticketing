<?php $__env->startSection('content'); ?>
<input type="hidden" id="username" value="<?php echo e(Auth::user()->username); ?>">
<?php if($walletflag==1): ?>
<script>
    var username = $('#username').val();

        swal({
    title: username + " عزیز",
    text: "متاسفانه موجودی کیف پول کافی نیست.",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-warning",
    confirmButtonText: "شارژ کیف پول",
    cancelButtonText: "بیخیال",
    closeOnConfirm: false
    },
    function(isConfirm) {
    if (isConfirm) {
        window.open("http://127.0.0.1:8000/wallet");
    }
    });
</script>
<?php endif; ?>
    <!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo e(asset('images/banner/banner04.jpg')); ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><?php echo e($eventname); ?></h3>
                    <div class="tags">
                    <a href="#0"><?php echo e($location->name); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item md-order-1">
                    <form action="/seat" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="shows_id" value="<?php echo e($shows_id); ?>">
                        <input type="hidden" name="salons_id" value="<?php echo e($salons_id); ?>">
                        <input type="submit" value="صفحه قبل" class="custom-button back-button inpsubw">
                    </form>
                </div>
                <div class="item" id="countdowndisplay">
                </div>
                <p>زمان باقی مانده</p>
                <form action="/timeout" method="POST" class="d-none" id="countdownform">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="factor_id" value="<?php echo e($factor_id); ?>">
                    <input type="hidden" name="event_id" value="<?php echo e($events_id); ?>">
                    <input type="hidden" name="eventcat" value="<?php echo e($eventcat); ?>">
                    <input type="submit" value="" id="countdownsubmit">
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="movie-facility padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-widget checkout-contact">
                        <h5 class="title">کد تخفیف </h5>
                        <form class="checkout-contact-form" action="/discount" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="factor_id" value="<?php echo e($factor[0]->id); ?>">
                            <div class="form-group">
                                <input type="text" name="discount" placeholder="کد تخفیف را وارد کنید">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="اعمال" class="custom-button">
                            </div>
                        </form>
                        <p class="text-white text-right pt-4 discount__msg"><?php echo e($msg); ?></p>
                    </div>
                    <div class="checkout-widget checkout-card mb-0">
                        <h5 class="title">عملیات پرداخت </h5>
                        <?php if(Auth::user()->roles->first()->name!=='BoxOffice'): ?>
                            <ul class="payment-option">
                                <li class="active">
                                    <a href="/zarinpayment/<?php echo e($factor[0]->id); ?>">
                                        <img src="<?php echo e(asset('images/payment/zarinpal.png')); ?>" alt="payment">
                                        <span>زرین پال</span>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>
                        <div class="form-group">
                            <?php if(Auth::user()->roles->first()->name=='BoxOffice'): ?>
                                <p class="mt-3">با کلیک روی دکمه "پرداخت" مبلغ معادل 85% فاکتور به صورتحساب شما اضافه خواهد شد.</p>
                                <a href="/boxOfficeTransaction/<?php echo e($factor_id); ?>" class="custom-button back-button">پرداخت</a>
                            <?php endif; ?>
                            &nbsp;
                            <a href="/determent/<?php echo e($factor_id.'-'.$events_id.'-'.$eventcat); ?>" class="custom-button back-button">انصراف</a>
                        </div>
                        <?php if(Auth::user()->roles->first()->name=='User'): ?>
                        <div class="form-group">
                            <form class="user" method="POST" action="/walletTransaction">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="factor_id" value="<?php echo e($factor_id); ?>">
                                <input type="submit" value="پرداخت از کیف پول" class="custom-button back-button inpsubw">
                            </form>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="booking-summery bg-one">
                        <h4 class="title">بلیت</h4>
                        <ul>
                            <li>
                                <h6 class="subtitle"><?php echo e($eventname); ?></h6>
                            </li>
                            <li>
                                <h6 class="subtitle"><span><?php echo e($location->name); ?></span><span><?php echo e($show[0]->salons_name); ?></span></h6>
                            <div class="info"><span>تاریخ</span> <span><?php echo e($show[0]->shows_date); ?></span></div>
                            <div class="info"><span>سانس</span> <span><?php echo e($show[0]->end); ?>&nbsp;-&nbsp;<?php echo e($show[0]->begin); ?></span></div>
                                <div class="info"><span>شماره صندلی</span>
                                    <span><?php $__currentLoopData = $factor[0]->shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($a->pivot->seat_number!=='0'): ?>
                                            &nbsp;<?php echo e($a->pivot->seat_number); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                                </div>
                            </li>
                        </ul>
                        <ul>
                                <li>
                                    <span class="info"><span>جمع کل</span><span><?php echo e($factor[0]->sum); ?> تومان</span></span>
                                    <span class="info"><span>تخفیف</span><span><?php echo e(str_replace("'","",$factor[0]->discount)); ?> تومان</span></span>
                                </li>
                            </ul>
                    </div>
                    <div class="proceed-area  text-center">
                        <h6 class="subtitle"><span>مبلغ قابل پرداخت</span><span><?php echo e($factor[0]->total); ?> تومان</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Movie-Section========== -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/checkout.blade.php ENDPATH**/ ?>