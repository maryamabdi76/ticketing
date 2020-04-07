@extends('layouts.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">محصولات</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item active">محصولات</li>
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
                                <p data-placement="top" data-toggle="tooltip" title="Add">
                                    <a href="/addProduct" class="btn btn-primary " >
                                    <span class=""></span>اضافه کردن
                                    </a>
                                </p>
                                <table id="mytable" class="table text-center table-bordred table-striped">
                                    <thead>
                                        {{-- <th><input type="checkbox" class="checkthis" /></th> --}}
                                        <th>آیدی</th>
                                        <th>عکس</th>
                                        <th>نام</th>
                                        <th>توضیحات</th>
                                        <th>دسته بندی</th>
                                        <th>قیمت</th>
                                        <th>تعداد</th>
                                        <th style="width:80px"> </th>
                                    </thead>
                                    <tbody>
                                        @foreach($product as $k=>$v)
                                        <tr>
                                        {{-- <td><input type="checkbox" class="checkthis" /></td> --}}
                                        <td>{{$v->id}}</td>
                                        <td><img class="img-fluid w-100" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="" /></td>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->description}}</td>
                                        <td>{{$v->category->categoryname}}</td>
                                        <td>{{$v->price}}</td>
                                        <td>{{$v->num}}</td>
                                        <td>
                                            <a href="/editProduct/{{$v["id"]}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Edit">
                                                <span class="fa fa-edit"></span>
                                            </a>
                                            <a href="/deleteProduct/{{$v["id"]}}" class="btn btn-danger btn-xs" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');" >
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
