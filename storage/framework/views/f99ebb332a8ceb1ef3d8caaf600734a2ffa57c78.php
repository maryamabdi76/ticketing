<?php $__env->startSection('content'); ?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">رویداد ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">رویداد ها</li>
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
                        <div class="card-body">
                            <div class="table-responsive">
                                <p data-placement="top" data-toggle="tooltip" title="">
                                    <a href="/createShow" class="btn btn-primary " >
                                    <span class="fa fa-plus"></span> اضافه کردن
                                    </a>
                                </p>
                                <table class="d-table table text-center table-bordred table-striped">
                                    <thead>
                                        <th>آیدی</th>
                                        <th>نام سالن</th>
                                        <th>نام رویداد</th>
                                        <th>تاریخ نمایش</th>
                                        <th>زمان شروع</th>
                                        <th>زمان پایان</th>
                                        <th>تعداد</th>
                                        <th>قیمت</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td><?php echo e($v->id); ?></td>
                                        <td><?php echo e($v->salons->name); ?> - <?php echo e($v->salons->locations->name); ?></td>
                                        <td><?php echo e($v->events->name); ?></td>
                                        <td><?php echo e($v->date); ?></td>
                                        <td><?php echo e($v->begin); ?></td>
                                        <td><?php echo e($v->end); ?></td>
                                        <td><?php echo e($v->num); ?></td>
                                        <td><?php echo e($v->price); ?></td>
                                        <td>
                                            <a href="/showShow/<?php echo e($v->salons->id.'-'.$v->id); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="نمایش سالن و رزرو">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="/editShow/<?php echo e($v["id"]); ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ویرایش">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteShow/<?php echo e($v["id"]); ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                      </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>

                            <div class="clearfix"></div>
                        </div>
                    </div>
	            </div>
            </div>
    </div>
</div>

</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/admin/shows/index.blade.php ENDPATH**/ ?>