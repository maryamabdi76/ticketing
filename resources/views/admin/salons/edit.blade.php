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
              <li class="breadcrumb-item"><a href="/admin/salons">سالن ها</a></li>
              <li class="breadcrumb-item active">ویرایش سالن</li>
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
                <div class="card-header">{{ __('ویرایش سالن') }}</div>

                <div class="card-body">
                <form method="POST" action="/updateSalons">
                        @csrf
                        <input id="id" type="hidden" class="form-control " name="id" value="{{ $salons->id}}" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $salons->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="locations_id" class="col-md-4 col-form-label text-md-left">{{ __('مکان') }}</label>
                            <div class="col-md-6">
                                <select id="locations_id" name="locations_id" class="form-control @error('locations_id') is-invalid @enderror" name="locations_id" value="{{ old('locations_id') }}" >
                                    @foreach($locations as $v)
                                    <option value="{{$v->id}}" @if($v->id==$salons->locations_id) selected @endif>{{$v->name}}</option>
                                    @endforeach
                                </select>

                                @error('locations_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('ویرایش') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
