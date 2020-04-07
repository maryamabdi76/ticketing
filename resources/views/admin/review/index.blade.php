@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">نظرات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">نظرات</li>
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
{{-- <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12"> --}}
                <div class="card text-right">
                    {{-- <div class="card-header">Product</div> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                {{-- <p data-placement="top" data-toggle="tooltip" title="Add">
                                    <a href="/addReview" class="btn btn-primary " >
                                    <span class=""></span> Add
                                    </a>
                                </p> --}}
                                <table id="mytable" class="table text-center table-bordred table-striped">
                                    <thead>
                                        {{-- <th><input type="checkbox" class="checkthis" /></th> --}}
                                        <th>آیدی</th>
                                        <th>نام کاربر</th>
                                        <th>نام محصول</th>
                                        <th>امتیاز</th>
                                        <th>نظر</th>
                                        <th>علاقمندی</th>
                                        <th> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($review as $k=>$v)
                                        <tr>
                                        {{-- <td><input type="checkbox" class="checkthis" /></td> --}}
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->users->name}}</td>
                                        <td>{{$v->kala->name}}</td>
                                        <td>{{$v->rating}}</td>
                                        <td>{{$v->comment}}</td>
                                        <td>{{$v->liked}}</td>
                                        <td>
                                            <a href="/editReview/{{$v["id"]}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteReview/{{$v["id"]}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" >
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
