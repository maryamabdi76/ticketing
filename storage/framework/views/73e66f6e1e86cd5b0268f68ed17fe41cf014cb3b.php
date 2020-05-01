<?php $__env->startSection('content'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">پست ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">پست ها</li>
              <li class="breadcrumb-item active">نمایش پست</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12">

            <div class="card text-right">
                <div class="card-header"><?php echo e(__('نمایش پست')); ?></div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left"><?php echo e(__('موضوع')); ?></div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                <?php echo e($post->title); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left"><?php echo e(__('عکس های پست')); ?></div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                <?php $__currentLoopData = $post->Images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img class="img-fluid" src="<?php echo e(asset('/').$photo->path); ?>" width="" alt=""/>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php if($post->Videos()->count()>0): ?>
                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left"><?php echo e(__('فیلم پست')); ?></div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                <?php $__currentLoopData = $post->Videos()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <video width="" height="150" controls>
                                
                                    <source src="<?php echo e(asset('/').$v->source); ?>" type="video/mp4">
                                  </video>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left"><?php echo e(__('متن')); ?></div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                <?php echo e($post->content); ?>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left"><?php echo e(__('مربوط به رویداد')); ?></div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>

                            <div class="col-md-6">
                                <?php if($post->events): ?><?php echo e($post->events->name); ?><?php endif; ?>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/admin/posts/show.blade.php ENDPATH**/ ?>