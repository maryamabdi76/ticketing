<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-left">
          <a href="#" class="dropdown-item">
            <i class="fa fa-lock ml-2"></i>
            تغییر رمز عبور
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off ml-2"></i>
            <?php echo e(__('خروج')); ?>


         </a>
         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
           <?php echo csrf_field(); ?>
         </form>
         </a>
        </div>
      </li>

      
    </ul>
  </nav>
  <!-- /.navbar -->
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/layouts/admin/partials/nav.blade.php ENDPATH**/ ?>