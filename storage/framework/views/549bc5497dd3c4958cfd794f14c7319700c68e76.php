<?php $__env->startSection('content'); ?>


    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background="<?php echo e(asset('images/banner/banner04.jpg')); ?>">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="<?php echo e(asset('/').$movie->Images()->get()->first()->path); ?>" alt="movie">
                    <a href="https://www.youtube.com/embed/KGeBMAgc46E" class="video-popup">
                        <img src="<?php echo e(asset('images/movie/video-button.png')); ?>" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content mr-25darsad">
                <h3 class="title"><?php echo e($movie->name); ?></h3>
                    <div class="tags">
                    </div>
                    <?php $__currentLoopData = $movie->genres()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="/movie/genres/<?php echo e($genre->id); ?>" class="button"><?php echo e($genre->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span><?php echo e(str_replace('-','/',str_replace('00:00:00', '', $movie->date))); ?></span>
                            </div>
                            <div class="item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->


    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
            <div class="container">
                <div class="book-wrapper">
                    <div class="left-side">
                        <div class="item">
                            <div class="item-header">
                                <div class="star-ratings-sprite">
                                    <span style="width:<?php echo e($averate); ?>%" class="star-ratings-sprite-rating"></span>
                                </div>
                                <h5 class="title pr-3"><?php echo e($averate/20); ?></h5>
                            </div>
                            <p>نظر کاربران</p>
                        </div>
                        <?php if(!empty(Auth::user()->username)): ?>
                        <input type="hidden" id="username" value="<?php echo e(Auth::user()->username); ?>">
                        <div class="item">
                            <div class="item-header">
                                <div class="thumb addfavorite" data-toggle="tooltip" data-placement="top" title="افزودن به علاقه مندی ها" id="<?php echo e($event_id); ?>">
                                    <img src="<?php echo e(asset('images/movie/hearts.png')); ?>" alt="movie">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Book-Section========== -->
    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-offer">
                        <h3 class="title">تبلیغات</h3>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="<?php echo e(asset('images/sidebar/banner/banner01.jpg')); ?>" alt="banner">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <h3 class="title">تصاویر</h3>
                        <div class="details-photos owl-carousel">
                            <?php $__currentLoopData = $movie->Images()->orderBy('id','desc')->take(5)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="thumb">
                                <a href="<?php echo e(asset('/').$photo->path); ?>" class="img-pop">
                                    <img src="<?php echo e(asset('/').$photo->path); ?>" alt="movie">
                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <?php if($related->count() > 0): ?>
                        <h3 class="title">اخبار مرتبط</h3>
                        <div class="mb-5">
                            <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12">
                                <a href="/blog-details/<?php echo e($post->id); ?>" class="text-white text-hover" >
                                    <i class="fa fa-angle-left ml-2"></i><?php echo e($post->title); ?>

                                </a>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>



                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    خلاصه فیلم
                                </li>
                                <li>
                                    نظرات کاربران <span><?php echo e($count); ?></span>
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">خلاصه</h5>
                                        </div>
                                        <p><?php echo e($movie->description); ?></p>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">بازیگران</h5>
                                        </div>
                                        <p><?php echo e($movie->act); ?></p>
                                    </div>
                                    <div class="item">
                                        <div class="header">
                                            <h5 class="sub-title">عوامل</h5>
                                        </div>
                                        <p style="white-space: pre-wrap"><?php echo e($movie->team); ?></p>
                                    </div>
                                </div>
                                <div class="tab-item">
                                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="movie-review-item">
                                            <div class="author">
                                                <div class="thumb">
                                                    <?php if($v->user->gender===1): ?>
                                                        <img src="<?php echo e(asset('images/avatar/femaleavatar.png')); ?>" alt="female avatar"/>
                                                    <?php endif; ?>
                                                    <?php if($v->user->gender===2): ?>
                                                        <img src="<?php echo e(asset('images/avatar/maleavatar.png')); ?>" alt="male avatar"/>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="movie-review-info">
                                                        <h6 class="subtitle mt-3"><?php echo e($v->user->name); ?></h6>
                                                        <span class="reply-date"><?php echo e($v->created_at); ?></span>
                                                </div>
                                            </div>
                                            <div class="movie-review-content">
                                                <div class="review">
                                                    <?php for($i=1; $i <= 5 ; $i++): ?>
                                                        <i class="fas fa-star <?php echo e(($i <= $v->rating) ? 'heart__f' : 'heart__o'); ?>"></i>
                                                    <?php endfor; ?>
                                                </div>
                                                <p><?php echo e($v->comment); ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php if(!empty(Auth::user()->name)): ?>
                                        <div class="widget-1 widget-offer">
                                            <h3 class="title mt-5">نظرات خود را ثبت کنید</h3>
                                            <div class="offer-body">
                                                <div class="offer-item">
                                                    <form class="mt-0" id="review">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="events_id" id="events_id" value="<?php echo e($id); ?>">
                                                        <div class="form-group">
                                                            <span><label for="rating" class="pl-3">امتیاز شما به این فیلم :</label>
                                                            <input type="number" id="rating" name="rating" min="0" max="5" class="inpnumw"></span>
                                                        </div>
                                                        <div class="form-group">
                                                        <textarea rows="8" cols="80" name="comment" id="comment" form="review" class="bgtrasparent text-white" placeholder="نظر خود را اینجا بنویسید ..."></textarea>
                                                        </div>
                                                        <input class="letter__spacing__1 probutton" type="button" id="addreview" value="ثبت نظر">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <div class="widget-1 widget-offer">
                                    <h3 class="title mt-5">خرید بلیت</h3>
                                    <div class="offer-body">
                                        <div class="offer-item">
                                            <?php if($flag===0): ?>
                                                <div class="mt-3 mb-3 text-center">
                                                <p class="text-white text-center">متاسفانه در حال حاضر این برنامه نمایش داده نمی شود !</p>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($flag===1): ?>
                                                <?php if(empty(Auth::user()->name)): ?>
                                                    <div class="mt-3 mb-3 text-center">
                                                        <?php $dc=count($date)?>
                                                        <?php if($dc==1): ?>
                                                            <p class="text-white text-center">این برنامه در روز؛
                                                                <?php $__currentLoopData = $date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($d); ?>,
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            نمایش داده میشود.</p>
                                                        <?php endif; ?>
                                                        <?php if($dc>1): ?>
                                                            <p class="text-white text-center">این برنامه در روزهای؛
                                                                <?php $__currentLoopData = $date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($d); ?>,
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            نمایش داده میشود.</p>
                                                        <?php endif; ?>
                                                        <p class="text-white text-center">لطفا برای خرید بلیت، ابتدا <a href="/login" class="tifanyc">وارد</a>  شوید و یا <a href="/register" class="tifanyc">ثبت نام</a> کنید.</p>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if(!empty(Auth::user()->name)): ?>
                                                    <form method="POST" action="/ticket" class="mt-0">
                                                        <?php echo csrf_field(); ?>
                                                        <div class="datebuy">
                                                            <input type="hidden" name="id" value="<?php echo e($id); ?>">
                                                            <span class="text-white mt-4 pb-1">روز مورد نظرتان را انتخاب کنید:</span>
                                                            <select class="myselect-bar1 text-black mt-3 mb-3" name="date">
                                                                <?php $__currentLoopData = $date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($k); ?>"><?php echo e($d); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <input class="letter__spacing__1 probutton inpsubw" type="submit" value="خرید بلیت">
                                                        </div>
                                                    </form>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if($relatedEvents->count()>1): ?>
                                <div class="row pt-5">
                                    <div class="col-12 movie-details">
                                        <div class="item">
                                            <div class="header">
                                                <h5 class="sub-title">رویداد های مرتبط</h5>
                                            </div>
                                            <div class="casting-slider owl-carousel">
                                                <?php $__currentLoopData = $relatedEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($v->id!=$movie->id): ?>
                                                <div class="thumb">
                                                    <a href="<?php echo e($v->id); ?>">
                                                        <img width="150px" height="250px" src="<?php echo e(asset('/').$v->Images()->get()->first()->path); ?>" alt="movie">
                                                    </a>
                                                    <h6 class="cast-title"><a href="<?php echo e($v->id); ?>"><?php echo e($v->name); ?></a></h6>
                                                </div>
                                                <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
            $(document).ready(function() {

                $('.addfavorite').click(function() {
                    var id = $(this).attr('id');
                    var username = $('#username').val();

                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "/addfavorite",
                        dataType: 'json',
                        data: { "id" : id},

                        success:function(response , status){
                            if(response.flag == 1){
                            swal({
                                    title: username + " عزیز",
                                    text: "این نمایش با موفقیت به لیست علاقه مندی های شما اضافه شد.",
                                    type: "success",
                                    confirmButtonText: "باشه"
                                });
                            }
                            if(response.flag == 0){
                            swal({
                                    title: username + " عزیز",
                                    text: "این نمایش از لیست علاقه مندی های شما حذف شد.",
                                    type: "warning",
                                    confirmButtonText: "باشه"
                                });
                            }
                        },error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log('AJAX error:', textStatus)
                        }
                    });
                });

                $('#addreview').click(function(){

                    var events_id = $('#events_id').val();
                    var rating = $('#rating').val();
                    var comment = $('#comment').val();
                    var username = $('#username').val();

                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    if(comment==""){
                        swal({
                            title: username + " عزیز",
                            text: "نوشتن متن نظر الزامی است.",
                            type: "warning",
                            confirmButtonText: "باشه"
                        });
                    }
                    if(rating > 5 || rating < 1){
                        swal({
                            title: username + " عزیز",
                            text: "امتیاز شما باید عددی بین 0 تا 5 باشد.",
                            type: "warning",
                            confirmButtonText: "باشه"
                        });
                    }
                    if(comment!=="" && 0<rating<6){
                        $.ajax({
                            type: 'POST',
                            url: "/review",
                            dataType: 'json',
                            data: { "events_id" : events_id,
                                    "rating" : rating,
                                    "comment" : comment
                            },

                            success:function(response , status){
                                swal({
                                        title: username + " عزیز",
                                        text: "نظرات شما با موفقیت ثبت و پس از بازخوانی نمایش داده خواهد شد.",
                                        type: "success",
                                        confirmButtonText: "باشه"
                                    });

                            },error: function(XMLHttpRequest, textStatus, errorThrown) {
                            console.log('AJAX error:', textStatus)
                            }
                        });
                    }
                });

            });
            </script>
    <!-- ==========Movie-Section========== -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/movie/movie-details.blade.php ENDPATH**/ ?>