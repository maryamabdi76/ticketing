<?php $__env->startSection('content'); ?>

    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="<?php echo e(asset('images/banner/banner07.jpg')); ?>">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">پشتیبانی</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>پشتیبانی</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Contact-Section========== -->

    <?php if($success): ?>
    <div class="cate text-center p-3 m-5" style="border:2px solid #31d7a9;color:#31d7a9"><?php echo e($success); ?></div>
    <?php endif; ?>

    <section class="contact-section padding-top">
        <div class="contact-container">
            <div class="bg-thumb bg_img" data-background="<?php echo e(asset('images/contact/contact.jpg')); ?>"></div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <div class="section-header-3 left-style">
                            <span class="cate text-right">پشتیبانی</span>
                            <h2 class="title text-right">با ما در ارتباط باشید !</h2>
                            <p class="text-right">ما دوست داریم تا با صحبت با شما و با استفاده از نظرات و پیشنهاداتتان یک همکاری مفید داشته باشیم. هر سوال یا نظری داشتید تنها کافیست پیام دهید، و ما در اسرع وقت پاسخ خواهیم داد.</p>
                        </div>
                        <form class="contact-form" method="POST" id="contact_form_submit" action="/contact/send">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group text-right">
                                <label for="name">نام و نام خانوادگی <span>*</span></label>
                                <input class="<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="name" id="name" required>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="form-group text-right">
                            </div>
                                <label for="email">ایمیل <span>*</span></label>
                                <input class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" name="email" id="email" required>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <div class="form-group text-right">
                            </div>
                                <label for="subject">موضوع <span>*</span></label>
                                <input class="<?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" placeholder="موضوع پیامتان را بنویسید" name="subject" id="subject" required>
                                <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group text-right">
                                <label for="message">متن <span>*</span></label>
                                <textarea class="<?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="message" id="message" placeholder="متن پیامتان را بنویسید" required></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback d-block" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group text-right">
                                <input class="h5 letter__spacing__1" type="submit" value="ارسال پیام">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-lg-6">
                        <div class="padding-top padding-bottom contact-info">
                            <div class="info-area">
                                <div class="info-item">
                                    <div class="info-content">
                                        <h6 class="title">شماره تماس</h6>
                                        <a class="text-right" href="Tel:82828282034">021-12345678</a>
                                    </div>
                                    <div class="info-thumb">
                                        <img src="<?php echo e(asset('images/contact/contact01.png')); ?>" alt="contact">
                                    </div>
                                </div>
                                <div class="info-item">
                                    <div class="info-content">
                                        <h6 class="title">ایمیل</h6>
                                        <a href="Mailto:info@gmail.com">info@Boleto.com</a>
                                    </div>
                                    <div class="info-thumb">
                                        <img src="<?php echo e(asset('images/contact/contact02.png')); ?>" alt="contact">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Section========== -->

    <!-- ==========Contact-Counter-Section========== -->
    <section class="contact-counter padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item">
                                <h5 class="title odometerltr" data-odometer-final="55">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item active">
                        <div class="contact-counter-thumb">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="35">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Members</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="47">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Followers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="contact-counter-item">
                        <div class="contact-counter-thumb">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-counter-content">
                            <div class="counter-item ltr">
                                <h5 class="title odometer" data-odometer-final="291">0</h5>
                                <h5 class="title">k</h5>
                            </div>
                            <p>Subscribers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Counter-Section========== -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/contact.blade.php ENDPATH**/ ?>