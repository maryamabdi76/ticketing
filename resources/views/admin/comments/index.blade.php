@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نظرات پست ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">نظرات پست ها</li>
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
                                <table class="d-table table text-center table-bordred table-striped">
                                    <thead>
                                        <th>آیدی</th>
                                        <th>کاربر</th>
                                        <th>نظر</th>
                                        <th>پست</th>
                                        <th>status</th>
                                        <th>عملیات</th>
                                    </thead>
                                    <tbody>
                                        @foreach($comment as $k=>$v)
                                        <tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->user->name}}</td>
                                        <td>{{$v->comment}}</td>
                                        <td><a href="/showPost/{{$v->posts->id}}">{{$v->posts->title}}</a></td>
                                        <td>
                                            @if($v->status==0)
                                            <i class="fa fa-minus"><i class="d-none">0</i></i>
                                            @else <i class="fa fa-check"><i class="d-none">1</i></i>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/updatePostStatus/{{$v["id"]}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="تایید">
                                                <span class="fa fa-check"></span>
                                            </a>
                                            <a href="/deletePostCm/{{$v["id"]}}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="حذف" onclick="return confirm('Are you sure you want to delete this item?');" >
                                                <span class="fa fa-times"></span>
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
