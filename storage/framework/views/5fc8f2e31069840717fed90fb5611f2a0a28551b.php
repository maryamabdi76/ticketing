<script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/datatables/dataTables.bootstrap4.js')); ?>"></script>

<script src="<?php echo e(asset('js/adminlte.js')); ?>"></script>
<script src="<?php echo e(asset('js/demo.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/sparkline/jquery.sparkline.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/chartjs-old/Chart.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/dashboard2.js')); ?>"></script>


<script src="<?php echo e(asset('js/modernizr-3.6.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('js/heandline.js')); ?>"></script>
<script src="<?php echo e(asset('js/isotope.pkgd.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/countdown.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/odometer.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/viewport.jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/nice-select.js')); ?>"></script>


<script>
    $(function () {
      $('.d-table').DataTable({

    "order":[],
          "language": {
              "paginate": {
                  "next": "بعدی",
                  "previous" : "قبلی"
              },
              "search": " جستجو ",
              "lengthMenu":"نمایش _MENU_ سطر",
          },
        "info" : false,
      });
    });
  </script>
<?php /**PATH C:\xampp\htdocs\maktab\Laravel\Ticketing\resources\views/layouts/admin/partials/footer-scripts.blade.php ENDPATH**/ ?>