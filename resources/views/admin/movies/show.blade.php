@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">فیلم ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">فیلم ها</li>
              <li class="breadcrumb-item active">نمایش فیلم</li>
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
                <div class="card-header">{{ __('نمایش فیلم') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('نام') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $movie->name}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('عکس های فیلم') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                @foreach($movie->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="32%" alt=""/>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('بازیگران') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $movie->act}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('تیم') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $movie->team}}

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('توضیحات') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $movie->description}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('ژانر') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>

                            <div class="col-md-6">
                                @foreach($movie->genres as $v)
                                    {{$v->name}}
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('تاریخ شروع و پایان اکران') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $movie->date}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
