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
              <li class="breadcrumb-item active">ویرایش پست</li>
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
                <div class="card-header"><?php echo e(__('ویرایش پست')); ?></div>

                <div class="card-body">
                <form method="POST" action="/updatePost" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input id="id" type="hidden" class="form-control " name="id" value="<?php echo e($post->id); ?>" >

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-left"><?php echo e(__('موضوع')); ?></label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e($post->title); ?>" required autocomplete="title" autofocus>

                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left"><?php echo e(__('عکس های پست')); ?></label>
                            <div class="col-md-6">
                                <?php $__currentLoopData = $post->Images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img class="img-fluid" src="<?php echo e(asset('/').$photo->path); ?>" width="32%" alt=""/>
                                    <input type="hidden" name="photoid[]" value="<?php echo e($photo->id); ?>">
                                    <input name="file[<?php echo e($k); ?>]" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                    <?php if($post->Images()->get()->count()>1): ?>
                                    <a href="/deletePostPhoto/<?php echo e($photo->id); ?>/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                    <span class="fa fa-trash"></span>
                                    <?php endif; ?>
                                </a>
                                
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <label for="imagefile" class="col-md-4 col-form-label text-md-left"><?php echo e(__('اضافه کردن عکس جدید')); ?></label>
                            <div class="col-md-6">
                                <input id="imagefile" type="file" class="form-control <?php $__errorArgs = ['imagefile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="imagefile[]" accept="image/*" multiple>
                                <?php $__errorArgs = ['imagefile[]'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <?php if($post->Videos()->count()>0): ?>
                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-left"><?php echo e(__('فیلم پست')); ?></label>
                            <div class="col-md-6">
                                <?php $__currentLoopData = $post->Videos()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <video width="" height="150" controls>
                                        <source src="<?php echo e(asset('/').$v->source); ?>" type="video/mp4">
                                      </video>
                                    <input type="hidden" name="videoid" value="<?php echo e($v->id); ?>">
                                    <input name="video" type="file" style="z-index: 999; opacity: 0; width:22px; height:24px; position: relative;top:2px; right:26px;">
                                    <a class="btn btn-info btn-sm fa fa-edit text-white"></a>
                                    <a href="/deletePostVideo/<?php echo e($v->id); ?>/<?php echo e($post->id); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                    <span class="fa fa-trash"></span>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row">
                            <label for="film" class="col-md-4 col-form-label text-md-left"><?php echo e(__('اضافه کردن فیلم')); ?></label>
                            <div class="col-md-6">
                                <input id="film" type="file" class="form-control <?php $__errorArgs = ['film'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="film">
                                <?php $__errorArgs = ['film'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-left"><?php echo e(__('متن')); ?></label>

                            <div class="col-md-6">
                                <textarea id="content" rows="8" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="content" required autocomplete="content" autofocus><?php echo e($post->content); ?></textarea>
                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="event" class="col-md-4 col-form-label text-md-left"><?php echo e(__('مربوط به رویداد')); ?></label>
                            <div class="col-md-6">
                                <select id="event" name="event" class="form-control <?php $__errorArgs = ['event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="event" value="<?php echo e(old('event')); ?>" >
                                    <option value="" <?php if(empty($post->events)): ?> selected <?php endif; ?>>رویداد</option>
                                    <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($v->id); ?>" <?php if(empty($post->events)): ?> <?php elseif($v->name==$post->events->name): ?> selected <?php endif; ?>><?php echo e($v->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>

                                <?php $__errorArgs = ['event'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    <?php echo e(__('ویرایش')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/admin/posts/edit.blade.php ENDPATH**/ ?>