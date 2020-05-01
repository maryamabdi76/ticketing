<?php $__env->startSection('content'); ?>

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">
    <div id="content">
        <div class="container-fluid">
            <?php if($count==0): ?>
                <div class="card cardbg o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <section class="feature_product_area  new-product">
                            <div class="container mt-3">
                                <div class="row jccenter pr-2 pt-5 pb-3">
                                    <p class="font-weight-bolder fontsize30 text-center topright50 maxh500">متاسفانه قبلا از ما خریدی نداشتید ! ◔⌢◔</p>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($count>0): ?>
                <div class="row justify-content-md-between">
                    <?php for($i = 0; $i < $count; $i++): ?>
                    <?php $id=$lastfactors[$i]->shows[0]->id;?>
                        <div class="col-lg-6 ">
                            <div class="card cardbg o-hidden border-0 shadow-lg my-5 p-5">
                                <div class="booking-summery bg-one">
                                    <h4 class="title">بلیت</h4>
                                    <ul>
                                        <li>
                                            <h6 class="subtitle"><?php echo e($shows[$id]->events_name); ?></h6>
                                        </li>
                                        <li>
                                            <h6 class="subtitle">
                                                <span>
                                                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($l['id'] === $shows[$id]['locations_id']): ?>
                                                            <?php echo e($l['name']); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                                <span><?php echo e($shows[$id]->salons_name); ?></span>
                                            </h6>
                                            <div class="info"><span>تاریخ</span> <span><?php echo e($shows[$id]->shows_date); ?></span></div>
                                            <div class="info"><span>سانس</span> <span><?php echo e($shows[$id]->end); ?>&nbsp;-&nbsp;<?php echo e($shows[$id]->begin); ?></span></div>
                                            <div class="info"><span>شماره صندلی</span>
                                                <span><?php $__currentLoopData = $lastfactors[$i]->shows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    &nbsp;<?php echo e($a->pivot->seat_number); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span class="info"><span>جمع کل</span><span><?php echo e($lastfactors[$i]->sum); ?> تومان</span></span>
                                            <span class="info"><span>تخفیف</span><span><?php echo e(str_replace("'","",$lastfactors[$i]->discount)); ?> تومان</span></span>
                                            <span class="info"><span>مبلغ قابل پرداخت</span><span><?php echo e($lastfactors[$i]->total); ?> تومان</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <?php if($shows[$id]->catid==1): ?>
                                    <span class="text-white text-right mt-2">کد تحویل بلیت: <strong class="tifanyc"><?php echo e($lastfactors[$i]->code); ?></strong></span>
                                <?php elseif($shows[$id]->catid==2||$shows[$id]->catid==3): ?>
                                    <a href="/printTicket/<?php echo e($lastfactors[$i]->id); ?>" class="custom-button back-button mt-3 inpsubw ">
                                    چاپ بلیت
                                    <i class="fa fa-angle-double-right"></i> </a>
                                <?php endif; ?>
                                    <p class="mt-2 text-right tifany">تاریخ ثبت سفارش : <?php echo e(date("Y-m-d",$lastfactors[$i]->purchase_date)); ?> </p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.prolayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/profile/lastfactors.blade.php ENDPATH**/ ?>