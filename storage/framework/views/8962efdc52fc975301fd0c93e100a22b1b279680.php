<?php $__env->startSection('content'); ?>

<!-- ==========Banner-Section========== -->
<section class="main-page-header speaker-banner bg_img" data-background="<?php echo e(asset('images/banner/banner07.jpg')); ?>">
    <div class="container">
        <div class="speaker-banner-content">
            <h2 class="title">پست</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="/">خانه</a>
                </li>
                <li>
                    <a href="/blog">بلاگ</a>
                </li>
                <li>
                    پست
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Blog-Section========== -->
<section class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            <div class="col-lg-8 mb-50 mb-lg-0">
                <article>
                    <div class="post-item post-details">
                        <div class="post-thumb">
                            <?php if($post->Videos()->count()>0): ?>
                            <div class="owl-carousel owl-theme blog-slider">
                                <?php $__currentLoopData = $post->Images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img height="350px" src="<?php echo e(asset('/').$photo->path); ?>" alt="blog">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $post->Videos()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <video width="100%" height="300" controls>
                                    <source src="<?php echo e(asset('/').$film->source); ?>" type="video/mp4">
                                </video>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="blog-prev">
                                <i class="flaticon-double-right-arrows-angles"></i>
                            </div>
                            <div class="blog-next active">
                                <i class="flaticon-double-right-arrows-angles"></i>
                            </div>
                            <?php else: ?>
                            <a href="/blog-details/<?php echo e($post->id); ?>">
                                <div class="owl-carousel owl-theme blog-slider">
                                    <?php $__currentLoopData = $post->Images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <img height="350px" src="<?php echo e(asset('/').$photo->path); ?>" alt="blog">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php if($post->Images()->count()>1): ?>
                                    <div class="blog-prev">
                                        <i class="flaticon-double-right-arrows-angles"></i>
                                    </div>
                                    <div class="blog-next active">
                                        <i class="flaticon-double-right-arrows-angles"></i>
                                    </div>
                                <?php endif; ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="post-content" style="color:#fff">
                            <div class="content">
                                <div class="entry-content p-0">
                                    <div class="left text-white">
                                        <span class="date"><?php echo e(str_replace('00:00:00', '', $created_at)); ?></span>
                                    </div>
                                </div>
                                <div class="post-header text-white">
                                    <h4 class="m-title text-right"><?php echo e($post->title); ?></h4>
                                    <p class="text-right" style="white-space: pre-wrap"><?php echo e($post->content); ?></p>
                                </div>
                                <div class="tags-area">
                                    <?php if($taggables->count()>0): ?>
                                    <div class="tags">
                                        <span>
                                            برچسب ها :
                                        </span>
                                        <div class="tags-item pr-2">
                                            <?php $__currentLoopData = $taggables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="/blog/tags/<?php echo e($tag->id); ?>"> <?php echo e($tag->name); ?> </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <ul class="social-icons justify-content-end mr-auto">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" ><i class="fab fa-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" ><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-comment movie-details">
                        <?php if($comments->count()>0): ?>
                        <div class="header">
                            <h5 class="sub-title pb-2">نظر ها</h5>
                        </div>
                        <ul class="comment-area">
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <div class="movie-review-item borderbottomnone">
                                    <div class="author">
                                        <div class="thumb">
                                            <?php if($comment->user->gender===1): ?>
                                                <img src="<?php echo e(asset('images/avatar/femaleavatar.png')); ?>" alt="female avatar"/>
                                            <?php endif; ?>
                                            <?php if($comment->user->gender===2): ?>
                                                <img src="<?php echo e(asset('images/avatar/maleavatar.png')); ?>" alt="male avatar"/>
                                            <?php endif; ?>
                                        </div>
                                        <div class="movie-review-info text-right">
                                                <h6 class="subtitle mt-3"><?php echo e($comment->user->name); ?></h6>
                                                <span class="reply-date"><?php echo e($comment->created_at); ?></span>
                                        </div>
                                    </div>
                                    <div class="movie-review-content mt-4">
                                    <p><?php echo e($comment->comment); ?></p>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <?php if(Route::has('login')): ?>
                            <?php if(auth()->guard()->check()): ?>
                            <h5 class="title text-right pt-5">نظرات خود را ثبت کنید</h5>
                            <div class="widget-1 widget-offer">
                                <div class="offer-body">
                                    <div class="offer-item">
                                        <form class="blog-form" id="commentform">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="postid" id="postid" value="<?php echo e($post->id); ?>"/>
                                            <input type="hidden" name="userid" id="userid" value="<?php echo e(Auth::id()); ?>"/>
                                            <input type="hidden" id="username" value="<?php echo e(Auth::user()->username); ?>">
                                            <div class="form-group text-right">
                                                <textarea rows="8" cols="80" form="commentform" name="comment" id="comment" placeholder="متن مورد نظر شما..."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input  class="letter__spacing__1 probutton inpsubw p-0" type="button" value="ثبت" id="addcomment">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                        <h5 class="title text-right">برای ثبت نظر ابتدا باید <a href="/login" style="color:#31d7a9"> وارد | عضو </a> سایت شوید</h5>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </article>
            </div>

<!-- =================================side=================================== -->

            <div class="col-lg-4 col-sm-10 col-md-8">
                <aside>
                    <div class="widget widget-search">
                        <h5 class="title text-right"><i class="fas fa-search"></i> جست و جو</h5>
                        <form class="search-form" action="<?php echo e(route('searchblog')); ?>" method="get">
                            <input type="text" name="searchblog" placeholder="متن مورد نظر خود را وارد کنید " required>
                            <button type="submit"> بگرد !</button>
                        </form>
                    </div>
                    <div class="widget widget-post text-right">
                        <div class="slider-nav">
                            <span class="flaticon-right-arrow-angle widget-prev"></span>
                            <span class="flaticon-angle-pointing-to-left widget-next"></span>
                        </div>
                        <h5 class="title text-right">جدیدترین پست ها</h5>
                        <div class="widget-slider owl-carousel owl-theme">
                            <?php $__currentLoopData = $lastposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lastpost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="item">
                                <div class="thumb">
                                    <a href="/blog-details/<?php echo e($lastpost->id); ?>">
                                        <img height="220px" src="<?php echo e(asset('/').$lastpost->Images()->get()->first()->path); ?>" alt="blog">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="p-title">
                                        <a href="/blog-details/<?php echo e($lastpost->id); ?>"><?php echo e($lastpost->title); ?></a>
                                    </h6>
                                    <div class="meta-post justify-content-start">
                                        <a href="/blog-details/<?php echo e($lastpost->id); ?>" class="ml-4"><i class="flaticon-conversation"></i>
                                            <?php echo e($allcomments->where('posts_id', $lastpost->id)->count()); ?> نظر</a>
                                        <a href="/blog-details/<?php echo e($lastpost->id); ?>"><i class="flaticon-view"></i><?php echo e($lastpost->views); ?> بازدید</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="widget widget-tags">
                        <ul>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="/blog/tags/<?php echo e($tag->id); ?>" class="p-2"><?php echo e($tag->name); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <div class="widget widget-follow">
                        <h5 class="title text-center">با ما همراه شوید </h5>
                        <ul class="social-icons justify-content-center">
                            <li>
                                <a href="#0" class=""><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#0" class=""><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#0" class=""><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li>
                                <a href="#0"  class=""><i class="fab fa-google"></i></a>
                            </li>
                            <li>
                                <a href="#0"  class=""><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {

    $('#addcomment').click(function(){

    var postid = $('#postid').val();
    var userid = $('#userid').val();
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
    if(comment!==""){
        $.ajax({
            type: 'POST',
            url: "/addCommentBlog",
            dataType: 'json',
            data: { "postid" : postid,
                    "userid" : userid,
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
<!-- ==========Blog-Section========== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/blog/blog-details.blade.php ENDPATH**/ ?>