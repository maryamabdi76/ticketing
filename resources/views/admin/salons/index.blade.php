@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">سالن ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">سالن ها</li>
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
                                    <a href="/createSalons" class="btn btn-primary " >
                                    <span class="fa fa-plus"></span> اضافه کردن
                                    </a>
                                </p>
                                <table class="d-table table text-center table-bordred table-striped">
                                    <thead>
                                        <th>آیدی</th>
                                        <th>مکان</th>
                                        <th>نام</th>
                                        <th>ظرفیت</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                        @foreach($salons as $k=>$v)
                                        <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->locations->name}}</td>
                                        <td><?php
                                            $cap=0;
                                            foreach($v->segments as $seg){
                                                $cap+=$seg->capicity;
                                            }
                                            echo $cap;
                                            ?></td>
                                        <td>
                                            <a href="/showSalons/{{$v->id}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="نمایش">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="/editSalons/{{$v->id}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ویرایش">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteSalons/{{$v->id}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('آیا مطمئن هستید که میخواهید این سالن را حذف کنید؟');" >
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
