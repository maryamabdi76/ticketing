@extends('layouts.admin.adminlayout')

@section('content')

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
              <span class="info-box-icon bg-info elevation-1"><img src="{{asset('images/movie/salonicon2.png')}}" class="ml2imp"></span>

              <div class="info-box-content">
                <span class="info-box-text">صندلی های فروخته شده</span>
                <span class="info-box-number">
                  {{$soldSeats}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><img src="{{asset('images/movie/cash.png')}}" class="ml2imp"></span>

              <div class="info-box-content">
                <span class="info-box-text">فروش</span>
                <span class="info-box-number">
                    {{$cash}}
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
                <span class="info-box-number">{{$factors}}</span>
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
                <span class="info-box-number">{{$users}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        {{-- Month Report --}}
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
                    <span class="float-left"><b>{{$events}}</b>/100</span>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: {{$events}}%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    تعداد فاکتور
                    <span class="float-left"><b>{{$factors}}</b>/100</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: {{$factors}}%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    بازدید پست های وبلاگ
                    <span class="float-left"><b>{{$views}}</b>/300</span>
                    <div class="progress progress-sm">
                        <span class="d-none"> {{$x=$views/3}}</span>
                    <div class="progress-bar bg-success" style="width: {{$x}}%"></div>
                    </div>
                </div>
                <!-- /.progress-group -->
                <div class="progress-group">
                    تعداد رویداد های در حال نمایش
                    <span class="float-left"><b>{{$countshows}}</b>/50</span>
                    <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: {{$countshows}}%"></div>
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
                  {{-- <span class="badge badge-danger">8 پیام جدید</span> --}}
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                    @foreach($bestsell as $v)
                  <li class="p-0" style="float:right;width:20%">
                    @if($v[0]->categories_id==1)
                    <a class="users-list-name mt-2" href="/movie-details/{{$v[0]->id}}">
                    <img style="border-radius:0;height:150px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                    </a>
                    @elseif($v[0]->categories_id==2)
                    <a class="users-list-name mt-2" href="/concert-details/{{$v[0]->id}}">
                    <img style="border-radius:0;height:150px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                    </a>
                    @else
                    <a class="users-list-name mt-2" href="/theater-details/{{$v[0]->id}}">
                    <img style="border-radius:0;height:150px" src="{{asset('/').$v[0]->Images()->get()->first()->path}}" alt="movie">
                    </a>
                    @endif
                    <span class="">{{$v[0]->name}}<span>

                  </li>
                  @endforeach
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-3">

              <div class="card"  style="height:350px !important">
                <div class="card-header">
                  <h3 class="card-title">مرورگر‌ها</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="chart-responsive">
                  <canvas id="pieChart" style="height:250px"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-4">

                <div class="card "  style="height:350px !important">
                    <div class="card-header">
                      <h3 class="card-title">صفحات و میزان بازدید آنها</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <table class="table table-borderless table-sm text-center">
                            <thead>
                                <th>صفحه</th>
                                <th>میزان بازدید</th>
                            </thead>
                            @foreach($analyticsData as $v)
                            <tr>
                                <td>{{$v['url']}}</td>
                                <td>{{$v['pageViews']}}</td>
                            </tr>
                            @endforeach
                        </table>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-5">

                <div class="card "  style="height:350px !important">
                    <div class="card-header">
                      <h3 class="card-title">بازدیدکننده و تعداد صفحات بازدید شده</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">
                        <canvas id="barChart" style="height:250px"></canvas>
                      </div>
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
                          @foreach($sold as $k=>$v)
                      <tr>
                      <td>
                        @if($v[0][0]->categories_id==1)
                          <a href="/showMovie/{{$v[0][0]->id}}">
                        @elseif($v[0][0]->categories_id==2)
                            <a href="/showConcert/{{$v[0][0]->id}}">
                        @else
                            <a href="/showTheater/{{$v[0][0]->id}}">
                        @endif
                        {{$v[0][0]->id}}</a></td>
                        <td class="text-dark">
                            @if($v[0][0]->categories_id==1)
                                <a href="/showMovie/{{$v[0][0]->id}}">
                            @elseif($v[0][0]->categories_id==2)
                                <a href="/showConcert/{{$v[0][0]->id}}">
                            @else
                                <a href="/showTheater/{{$v[0][0]->id}}">
                            @endif
                            {{$v[0][0]->name}}</a></td>
                        {{-- <td><span class="badge badge-success">ارسال شده</span></td> --}}
                        <td>
                          <div>
                              {{$v[1]}}</div>
                        </td>
                      </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">سفارش جدید</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">مشاهده همه سفار</a>
                </div> --}}
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
                          @foreach($shows->unique('events_id') as $k=>$v)
                            <tr>
                                <td>{{$v->id}}</td>
                                <td>{{$v->events->name}}</td>
                            </tr>
                           @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">سفارش جدید</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">مشاهده همه سفار</a>
                </div> --}}
                <!-- /.card-footer -->
              </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->


    <script>
        $(function () {
          var areaChartData = {
      labels: {!! json_encode($dates->map(function($date) { return $date->format('d/m'); })) !!},
            datasets: [
              {
                label: "صفحات بازدید شده",
                fillColor: "#FFC107",
                strokeColor: "rgba(210, 214, 222, 1)",
                pointColor: "rgba(210, 214, 222, 1)",
                pointStrokeColor: "#c1c7d1",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: {!! json_encode($pageViews) !!}
              },
              {
                label: "بازدید کننده",
                fillColor: "#28A745",
                strokeColor: "rgba(60,141,188,0.8)",
                pointColor: "#3b8bba",
                pointStrokeColor: "rgba(60,141,188,1)",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: {!! json_encode($visitors) !!}
              }
            ]
          };


          //-------------
          //- PIE CHART -
          //-------------
          // Get context with jQuery - using jQuery's .get() method.
          var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
  var pieChart = new Chart(pieChartCanvas)
          var PieData = {!! $browserjson  !!}
          var pieOptions     = {
              //Boolean - Whether we should show a stroke on each segment
              segmentShowStroke    : true,
    //String - The colour of each segment stroke
    segmentStrokeColor   : '#fff',
    //Number - The width of each segment stroke
    segmentStrokeWidth   : 1,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps       : 100,
    //String - Animation easing effect
    animationEasing      : 'easeOutBounce',
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate        : true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale         : false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive           : true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio  : false,
    //String - A legend template
    legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
    //String - A tooltip template
    tooltipTemplate      : '<%=value %> <%=label%>'
  };
          //Create pie or douhnut chart
          // You can switch between pie and douhnut using the method below.
          pieChart.Doughnut(PieData, pieOptions);

          //-------------
          //- BAR CHART -
          //-------------
          var barChartCanvas = $("#barChart").get(0).getContext("2d");
          var barChart = new Chart(barChartCanvas);
          var barChartData = areaChartData;
          barChartData.datasets[1].fillColor = "#00a65a";
          barChartData.datasets[1].strokeColor = "#00a65a";
          barChartData.datasets[1].pointColor = "#00a65a";
          var barChartOptions = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: true,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - If there is a stroke on each bar
            barShowStroke: true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth: 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing: 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing: 1,
            //String - A legend template
            legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            //Boolean - whether to make the chart responsive
            responsive: true,
            maintainAspectRatio: true
          };

          barChartOptions.datasetFill = true;
          barChart.Bar(barChartData, barChartOptions);


        });
      </script>
    @endsection
