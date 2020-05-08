<?php $__env->startSection('content'); ?>

    <!-- ==========Banner-Section========== -->
    <section class="main-page-header speaker-banner bg_img" data-background="<?php echo e(asset('images/banner/banner07.jpg')); ?>">
        <div class="container">
            <div class="speaker-banner-content">
                <h2 class="title">بلاگ</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">خانه</a>
                    </li>
                    <li>
                        بلاگ
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Blog-Section========== -->
    <section class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-50 mb-lg-0">
                    <article>
                        <?php if($posts->count()==0): ?>
                        <h5 class="text-center">متاسفانه موردی یافت نشد!</h5>
                        <?php endif; ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="post-item">
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
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="post-content">
                                <div class="post-header">
                                    <h4 class="title text-right">
                                        <a href="/blog-details/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a>
                                    </h4>
                                    <div class="meta-post justify-content-end">
                                        <a href="#0" class="ml-4"><i class="flaticon-conversation"></i>
                                            <?php echo e($comments->where('posts_id', $post->id)->count()); ?> نظر</a>
                                        <a href="#0"><i class="flaticon-view"></i><?php echo e($post->views); ?> بازدید</a>
                                    </div>
                                <p class="text-right"><?php echo e(Str::limit($post->content,200,' ....')); ?></p>
                                </div>
                                <div class="entry-content">
                                    <div class="left">
                                        <span class="date p-2"><?php echo e(str_replace('00:00:00', ' ', $post->created_at)); ?></span>
                                    </div>
                                    <a href="/blog-details/<?php echo e($post->id); ?>" class="buttons"> ادامه مطلب <i class="fas fa-angle-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </article>
                    <?php echo e($posts->links()); ?>


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
                                                <?php echo e($comments->where('posts_id', $lastpost->id)->count()); ?>

                                             نظر</a>
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
                                    <a href="#0"><i class="fab fa-google"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Blog-Section========== -->

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bilito.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/blog/blog.blade.php ENDPATH**/ ?>