@extends('layouts.admin.adminlayout')

@section('content')
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
                                        @foreach($show as $k=>$v)
                                        <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->salons->name}} - {{$v->salons->locations->name}}</td>
                                        <td>{{$v->events->name}}</td>
                                        <td>{{$v->date}}</td>
                                        <td>{{$v->begin}}</td>
                                        <td>{{$v->end}}</td>
                                        <td>{{$v->num}}</td>
                                        <td>{{$v->price}}</td>
                                        <td>
                                            <a href="/showShow/{{$v->salons->id.'-'.$v->id}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="نمایش سالن و رزرو">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="/editShow/{{$v["id"]}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ویرایش">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteShow/{{$v["id"]}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                      </tr>
                                    @endforeach
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
@endsection
