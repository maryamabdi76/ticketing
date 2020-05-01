@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">
    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row">
                <section class="feature_product_area  new-product">
                        <div class="container mt-3">
                          <div class="row jccenter pr-2 pt-5 pb-3">
                              @if($count==0)
                              <p class="font-weight-bolder fontsize30 text-center topright50 maxh500">یعنی به هیچی علاقه مند نیستی ؟! <i class="fas fa-dot-circle"></i> ⌢ <i class="fas fa-dot-circle"></i></p>
                              @endif
                              @if($count==1)
                                    @foreach($favorites as $v)
                                    <?php if($v->categories_id==1){$cat_name="movie";}
                                          if($v->categories_id==2){$cat_name="concert";}
                                          if($v->categories_id==3){$cat_name="theater";} ?>
                                    <div class="col-md-4 minwidth300 mb-20 box">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                            <a href="/{{$cat_name}}-details/{{$v->id}}">
                                                    <img height="350px" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/{{$cat_name}}-details/{{$v->id}}">{{$v->name}}</a>
                                                </h5>
                                            </div>
                                            <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif

                                @if($count > 1)
                                    @foreach($favorites as $v)
                                    <?php if($v->categories_id==1){$cat_name="movie";}
                                          if($v->categories_id==2){$cat_name="concert";}
                                          if($v->categories_id==3){$cat_name="theater";} ?>
                                    <div class="col-md-4 mb-20 box">
                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                            <a href="/{{$cat_name}}-details/{{$v->id}}">
                                                    <img height="350px" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="/{{$cat_name}}-details/{{$v->id}}">{{$v->name}}</a>
                                                </h5>
                                            </div>
                                            <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                        </div>
                    </section>
        </div>
      </div>
    </div>
  </div>
</div>
</div>{{-- === --}}
@endsection
