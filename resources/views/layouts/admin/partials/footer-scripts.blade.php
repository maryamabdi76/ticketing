<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables/dataTables.bootstrap4.js')}}"></script>

<script src="{{asset('js/adminlte.js')}}"></script>
<script src="{{asset('js/demo.js')}}"></script>
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('plugins/chartjs-old/Chart.min.js')}}"></script>
<script src="{{asset('js/dashboard2.js')}}"></script>


<script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/heandline.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/countdown.min.js')}}"></script>
<script src="{{asset('js/odometer.min.js')}}"></script>
<script src="{{asset('js/viewport.jquery.js')}}"></script>
<script src="{{asset('js/nice-select.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.1.1/Chart.min.js"></script>

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
