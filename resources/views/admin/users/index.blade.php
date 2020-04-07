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
                                <table id="laravel_datatable" class="table text-center table-bordred table-striped  table-hover" >
                                    <thead>
                                        <th>آیدی</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>نام کاربری</th>
                                        <th>تلفن همراه</th>
                                        <th>ایمیل</th>
                                        <th>جنسیت</th>
                                        <th>نقش</th>
                                        {{-- <th>تاریخ عضویت</th>
                                        <th>آخرین تغییر</th> --}}
                                        <th> </th>
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
                                            @foreach ($v->role as $role)
                                            {{ $role->name }}
                                            @endforeach
                                        </td>
                                        {{-- <td>{{$v['created_at']}}</td>
                                        <td>{{$v['updated_at']}}</td> --}}
                                        <td>
                                            <a href="/edit/{{$v["id"]}}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/delete/{{$v["id"]}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" >
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
