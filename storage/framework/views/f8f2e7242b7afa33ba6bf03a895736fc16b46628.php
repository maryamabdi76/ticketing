<?php $__env->startSection('content'); ?>

<!-- ==========Banner-Section========== -->
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo e(asset('images/banner/banner04.jpg')); ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title"><?php echo e($show_name); ?></h3>
                    <div class="tags">
                        <a href=""><?php echo e($location->name); ?></a>
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
                </div>
                <div class="item" id="countdowndisplay">
                </div>
                <p>زمان باقی مانده</p>
                <form action="/timeout" method="POST" class="myd-none" id="countdownform">
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
    <div class="seat-plan-section padding-bottom padding-top">
        <div class="container">
            <ul class="seinfoli">
                <li class="tifanyc">وضعیت صندلی ها:</li>
                <li class="single-seat">
                    <img src="<?php echo e(asset('images/movie/seat01.png')); ?>" alt="seat">
                    <span>قابل خرید</span>
                </li>
                <li class="single-seat">
                    <img src="<?php echo e(asset('images/movie/seat01-chosen.png')); ?>" alt="seat">
                    <span>انتخاب شما</span>
                </li>
                <li class="single-seat">
                    <img src="<?php echo e(asset('images/movie/seat01-taken.png')); ?>" alt="seat">
                    <span>فروخته شده</span>
                </li>
            </ul>

            <div class="screen-area">
                <h4 class="screen">پرده نمایش</h4>
                <div class="screen-thumb">
                    <img src="<?php echo e(asset('images/movie/screen-thumb.png')); ?>" alt="movie">
                </div>
                <form action="/reserve-seats" method="post" id="seatform">
                    <?php echo csrf_field(); ?>
                <input type="hidden" name="shows_id" id="shows_id" value="<?php echo e($shows_id); ?>">
                <input type="hidden" name="factor_id" id="factor_id" value="<?php echo e($factor_id); ?>">
                <?php $i=0; ?>
                <?php $__currentLoopData = $segments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $part = explode('-' ,$seg->seat);
                $row=$seg->row;
                ?>
                <?php if(!empty($seg->name)): ?>
                <h5 class="subtitle mt-5"><?php echo e($seg->name); ?></h5>
                <?php endif; ?>
                <div class="screen-wrapper">
                    <ul class="seat-area mb-5imp">
                        <?php for($j=0;$j<$row;$j++): ?>
                        <?php $n=1; ?>
                        <li class="seat-line">
                            <span><?php echo e($alphabet[$i]); ?></span>
                            <?php $__currentLoopData = $part; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <ul class="seat--area">
                                <li class="front-seat">
                                    <ul>
                                        <?php for($k=0;$k<$p;$k++): ?>
                                        <?php
                                        $seat_number=$alphabet[$i].$n;
                                        $flag=$mine=0;
                                        if(in_array($seat_number, $taken_seats)){$flag=1;}
                                        if(!empty($myseats)){
                                            if(in_array($seat_number, $myseats)){$mine=1;}
                                        }
                                        ?>
                                            <?php if($flag==0): ?>
                                                <?php if($mine==0): ?>
                                                    <?php if($price==0): ?>
                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($seg->price); ?> تومان">
                                                            <input type="checkbox" name="seat[]" value="<?php echo e($seg->price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox reserve-seat">
                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                            <?php $n++; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if($price > 0): ?>
                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($price); ?> تومان">
                                                            <input type="checkbox" name="seat[]" value="<?php echo e($price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox reserve-seat">
                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                            <?php $n++; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <?php if($mine==1): ?>
                                                    <?php if($price==0): ?>
                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($seg->price); ?> تومان">
                                                            <input type="checkbox" name="seat[]" value="<?php echo e($seg->price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                            <?php $n++; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if($price > 0): ?>
                                                        <li class="single-seat seat-free" id="<?php echo e($seat_number); ?>" data-toggle="tooltip" data-placement="top" title="قیمت صندلی: <?php echo e($price); ?> تومان">
                                                        <input type="checkbox" name="seat[]" value="<?php echo e($price); ?>" id="<?php echo e($seat_number); ?>" class="input_seat_checkbox_reverse reserve-seat" checked>
                                                            <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                            <?php $n++; ?>
                                                        </li>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if($flag==1): ?>
                                            <li class="single-seat">
                                                <img src="<?php echo e(asset('images/movie/seat01-taken.png')); ?>" alt="seat">
                                                <span class="sit-num"><?php echo e($seat_number); ?></span>
                                                <?php $n++; ?>
                                            </li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                    </ul>
                                </li>
                            </ul>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $i++; ?>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="proceed-book bg_img mt-5" data-background="<?php echo e(asset('images/movie/movie-bg-proceed.jpg')); ?>">
                <div class="proceed-to-book">
                    <div class="book-item">
                        <span class="tifanyc font-weight-bolder">مکان برگزاری:</span>
                        <span><?php echo e($location->name.' - '.$salon_name); ?></span>
                        <span>آدرس: <?php echo e($location->province.', '.$location->city.', '.$location->address); ?></span>
                    </div>
                    <div class="book-item">
                        <span>:شما صندلی های زیر را انتخاب کردید</span>
                        <h3 class="title" id="chosenseats">
                            <?php if($myseats!==null): ?>
                            <?php $__currentLoopData = $myseats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                ,<?php echo e($ms); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </h3>
                    </div>
                    <div id="msg"></div>
                    <div class="book-item">
                            <input class="letter__spacing__1 probutton inpdatew p-3" type="submit" value="خرید بلیت">
                            <a href="/determent/<?php echo e($factor_id.'-'.$events_id.'-'.$eventcat); ?>" class="custom-button back-button mr-5 pr-5 pl-5 mt-3">انصراف</a>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="username" value="<?php echo e(Auth::user()->username); ?>">
    <script>
    $(document).ready(function() {
        $('.seat-free').click(function() {
            var x = jQuery(this).find('.seat_checkbox');
            x.toggleClass('checked').prev().prop('checked',$('.seat_checkbox').is('.checked'));

            var id = $(this).attr('id');
            var shows_id = $('#shows_id').val();
            var factor_id = $('#factor_id').val();

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "/chosen-seats",
                dataType: 'json',
                data: { "id" : id,
                        "shows_id" : shows_id,
                        "factor_id" : factor_id
                },

                success:function(response , status){
                    $("#chosenseats").text(response.seats);
                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', textStatus)
                }
            });
        });

        (function worker() {
            var shows_id = $('#shows_id').val();
            var factor_id = $('#factor_id').val();
            var img = "<?php echo e(asset('images/movie/seat01-taken.png')); ?>" ;

            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'POST',
                url: "/seatsLiveFeed",
                dataType: 'json',
                data: { "shows_id" : shows_id,
                        "factor_id" : factor_id
                },

                success: function(data) {
                    $('.d-none').removeClass("d-none");
                    $('.taken_seat').hide();

                    $.each(data.taken_seats, function(k, v) {
                        var id  = $('#' + v);
                        var seat_number = v;

                        id.addClass("d-none").after('<li class="single-seat taken_seat"><img src="'+img+'" alt="seat"><span class="sit-num">'+seat_number+'</span></li>').one();
                    });
                    console.log(data.taken_seats);
                },complete: function() {
                    setTimeout(worker, 5000);
                    console.log('done');

                },error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log('AJAX error:', XMLHttpRequest)
                }
            });
        })();

        $('#seatform').submit(function() {
            var username = $('#username').val();
            if ($('input:checkbox', this).is(':checked')){
                // everything's fine...
            } else {
                swal({
                    title: username + " عزیز",
                    text: "برای خرید بلیت انتخاب حداقل یک صندلی الزامی است.",
                    type: "warning",
                    confirmButtonText: "باشه"
                });
                return false;
            }
        });
    });
    </script>
    <!-- ==========Movie-Section========== -->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/seat.blade.php ENDPATH**/ ?>