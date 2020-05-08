@extends('layouts.admin.adminlayout')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-right">پست ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="/home">خانه</a></li>
              <li class="breadcrumb-item">پست ها</li>
              <li class="breadcrumb-item active">نمایش پست</li>
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
                <div class="card-header">{{ __('نمایش پست') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('موضوع') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $post->title}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('عکس های پست') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                @foreach($post->Images()->get() as $k=>$photo)
                                <img class="img-fluid" src="{{asset('/').$photo->path}}" width="" alt=""/>
                                @endforeach
                            </div>
                        </div>
                        @if($post->Videos()->count()>0)
                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('فیلم پست') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                @foreach($post->Videos()->get() as $k=>$v)
                                <video width="" height="150" controls>
                                    <source src="{{asset('/').$v->source}}" type="video/mp4">
                                  </video>
                                  @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('متن') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>
                            <div class="col-md-6">
                                {{ $post->content}}
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4 font-weight-bold text-md-left">{{ __('مربوط به رویداد') }}</div>
                            <i class="fa fa-arrow-left mt-1 text-primary"></i>

                            <div class="col-md-6">
                                @if($post->events){{$post->events->name}}@endif
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
