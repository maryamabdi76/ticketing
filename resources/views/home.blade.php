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

@endsection
