<?php $__env->startSection('content'); ?>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">داشبورد</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><img src="<?php echo e(asset('images/movie/salonicon2.png')); ?>" class="ml2imp"></span>

              <div class="info-box-content">
                <span class="info-box-text">صندلی های فروخته شده</span>
                <span class="info-box-number">
                  <?php echo e($soldSeats); ?>

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><img src="<?php echo e(asset('images/movie/cash.png')); ?>" class="ml2imp"></span>

              <div class="info-box-content">
                <span class="info-box-text">فروش</span>
                <span class="info-box-number">
                    <?php echo e($cash); ?>

                    <small>تومان</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">فاکتور ها</span>
                <span class="info-box-number"><?php echo e($factors); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">تعداد کاربران</span>
                <span class="info-box-number"><?php echo e($users); ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">گزارش</h5>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="progress-group">
                    رویداد های موجود در سایت
                    <span class="float-left"><b><?php echo e($events); ?></b>/100</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: <?php echo e($events); ?>%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    تعداد فاکتور
                    <span class="float-left"><b><?php echo e($factors); ?></b>/100</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: <?php echo e($factors); ?>%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    بازدید پست های وبلاگ
                    <span class="float-left"><b><?php echo e($views); ?></b>/300</span>
                    <div class="progress progress-sm">
                        <span class="d-none"> <?php echo e($x=$views/3); ?></span>
                    <div class="progress-bar bg-success" style="width: <?php echo e($x); ?>%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    تعداد رویداد های در حال نمایش
                    <span class="float-left"><b><?php echo e($countshows); ?></b>/50</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: <?php echo e($countshows); ?>%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-7">
            <!-- BEST SELL -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">رویداد های پرفروش</h3>
                <div class="card-tools">
                  
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                    <?php $__currentLoopData = $bestsell; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="p-0" style="float:right;width:20%">
                    <?php if($v[0]->categories_id==1): ?>
                    <a class="users-list-name mt-2" href="/movie-details/<?php echo e($v[0]->id); ?>">
                    <img style="border-radius:0;height:150px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                    </a>
                    <?php elseif($v[0]->categories_id==2): ?>
                    <a class="users-list-name mt-2" href="/concert-details/<?php echo e($v[0]->id); ?>">
                    <img style="border-radius:0;height:150px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                    </a>
                    <?php else: ?>
                    <a class="users-list-name mt-2" href="/theater-details/<?php echo e($v[0]->id); ?>">
                    <img style="border-radius:0;height:150px" src="<?php echo e(asset('/').$v[0]->Images()->get()->first()->path); ?>" alt="movie">
                    </a>
                    <?php endif; ?>
                    <span class=""><?php echo e($v[0]->name); ?><span>

                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-6">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">فروش رویداد ها</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0 text-center">
                      <thead>
                      <tr>
                        <th>آیدی</th>
                        <th>نام رویداد</th>
                        <th>تعداد فاکتور</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $sold; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                      <td>
                        <?php if($v[0][0]->categories_id==1): ?>
                          <a href="/showMovie/<?php echo e($v[0][0]->id); ?>">
                        <?php elseif($v[0][0]->categories_id==2): ?>
                            <a href="/showConcert/<?php echo e($v[0][0]->id); ?>">
                        <?php else: ?>
                            <a href="/showTheater/<?php echo e($v[0][0]->id); ?>">
                        <?php endif; ?>
                        <?php echo e($v[0][0]->id); ?></a></td>
                        <td class="text-dark">
                            <?php if($v[0][0]->categories_id==1): ?>
                                <a href="/showMovie/<?php echo e($v[0][0]->id); ?>">
                            <?php elseif($v[0][0]->categories_id==2): ?>
                                <a href="/showConcert/<?php echo e($v[0][0]->id); ?>">
                            <?php else: ?>
                                <a href="/showTheater/<?php echo e($v[0][0]->id); ?>">
                            <?php endif; ?>
                            <?php echo e($v[0][0]->name); ?></a></td>
                        
                        <td>
                          <div>
                              <?php echo e($v[1]); ?></div>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              </div>

          </div>
          <div class="col-md-6">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">رویداد های در حال اکران</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove">
                      <i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0 text-center">
                      <thead>
                      <tr>
                        <th>آیدی</th>
                        <th>نام رویداد</th>
                      </tr>
                      </thead>
                      <tbody>
                          <?php $__currentLoopData = $shows->unique('events_id'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($v->id); ?></td>
                                <td><?php echo e($v->events->name); ?></td>
                            </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/home.blade.php ENDPATH**/ ?>