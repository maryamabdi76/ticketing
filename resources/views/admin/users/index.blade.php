@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">کاربران</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">کاربران</li>
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
                <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="d-table table text-center table-bordred table-striped  table-hover" >
                                    <thead>
                                        <th>آیدی</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>نام کاربری</th>
                                        <th>تلفن همراه</th>
                                        <th>ایمیل</th>
                                        <th>جنسیت</th>
                                        <th>نقش</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $k=>$v)
                                        <tr>
                                        <td>{{$v['id']}}</td>
                                        <td>{{$v['name']}}</td>
                                        <td>{{$v['username']}}</td>
                                        <td>{{$v['phone']}}</td>
                                        <td>{{$v['email']}}</td>
                                        <td>{{$v->genders->name}}</td>
                                        <td>
                                            @foreach ($v->roles as $role)
                                            {{ $role->name }}
                                            @endforeach
                                        </td>
                                        <td>
                                            <a href="/editUser/{{$v["id"]}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="ویرایش">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteUser/{{$v["id"]}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
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
