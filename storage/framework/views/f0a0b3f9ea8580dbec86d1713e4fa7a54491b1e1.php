<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"  dir="rtl">
    <head>
        <?php echo $__env->make('layouts.admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <?php echo $__env->make('layouts.admin.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('layouts.admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="content-wrapper">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            
        </div>
        <?php echo $__env->make('layouts.admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.admin.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

</html>
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/layouts/admin/adminlayout.blade.php ENDPATH**/ ?>