
    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0 mb-5">
        <div class="container">
            <div class="search-tab bg_img" data-background="<?php echo e(asset('images/ticket/ticket-bg01.jpg')); ?>">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header text-right">
                            <h6 class="category">به بیلیتو خوش آمدید</h6>
                            <h3 class="title">به دنبال چه هستید</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="active">
                                <span>فیلم</span>
                                <div class="tab-thumb">
                                    <img src="<?php echo e(asset('images/ticket/ticket-tab01.png')); ?>" alt="ticket">
                                </div>
                            </li>
                            <li>
                                <span>کنسرت</span>
                                <div class="tab-thumb">
                                    <img src="<?php echo e(asset('images/ticket/ticket-tab02.png')); ?>" alt="ticket">
                                </div>
                            </li>
                            <li>
                                <span>تئاتر</span>
                                <div class="tab-thumb">
                                    <img src="<?php echo e(asset('images/ticket/ticket-tab01.png')); ?>" alt="ticket">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form" method="POST" action="<?php echo e(route('searchmovie')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('images/ticket/city.png')); ?>" alt="ticket">
                                </div>
                                <span class="type mr-2">شهر</span>
                                <select name="city" class="select-bar">
                                    <option  value=""></option>
                                    <?php $__currentLoopData = $locations->unique('city'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($location->city); ?>"><?php echo e($location->city); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('images/ticket/date.png')); ?>" alt="ticket">
                                </div>
                                <span class="type mr-2">تاریخ</span>
                                <select name="date" class="select-bar">
                                    <option  value=""></option>
                                    <?php $__currentLoopData = $shows->unique('date')->sortBy('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($show->date); ?>"><?php echo e($show->date); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="<?php echo e(asset('images/ticket/cinema.png')); ?>" alt="ticket">
                                </div>
                                <span class="type mr-2">سینما</span>
                                <select name="cinema" class="select-bar">
                                    <option  value=""></option>
                                    <?php $__currentLoopData = $locations->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($location->name); ?>"><?php echo e($location->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group large">
                                <input name="search" type="text" placeholder="جستجو برای فیلم">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form" method="POST" action="<?php echo e(route('searchconcert')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/city.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">شهر</span>
                            <select name="city" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $locations->unique('city'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($location->city); ?>"><?php echo e($location->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/date.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">تاریخ</span>
                            <select name="date" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $shows->unique('date')->sortBy('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($show->date); ?>"><?php echo e($show->date); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/cinema.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">کنسرت</span>
                            <select name="cinema" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $locations->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($location->name); ?>"><?php echo e($location->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group large">
                            <input name="search" type="text" placeholder="جستجو برای کنسرت">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    </div>
                    <div class="tab-item">
                        <form class="ticket-search-form" method="POST" action="<?php echo e(route('searchtheater')); ?>">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/city.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">شهر</span>
                            <select name="city" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $locations->unique('city'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($location->city); ?>"><?php echo e($location->city); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/date.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">تاریخ</span>
                            <select name="date" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $shows->unique('date')->sortBy('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($show->date); ?>"><?php echo e($show->date); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo e(asset('images/ticket/cinema.png')); ?>" alt="ticket">
                            </div>
                            <span class="type mr-2">تئاتر</span>
                            <select name="cinema" class="select-bar">
                                <option  value=""></option>
                                <?php $__currentLoopData = $locations->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  value="<?php echo e($location->name); ?>"><?php echo e($location->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group large">
                            <input name="search" type="text" placeholder="جستجو برای تئاتر">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Ticket-Search========== -->
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/layouts/bilito/partials/ticketsearch.blade.php ENDPATH**/ ?>