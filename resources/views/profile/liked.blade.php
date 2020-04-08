@extends('layouts.prolayout')

@section('content')

<div id="content-wrapper" class="d-flex flex-column col-10 p-5">

 <div id="content">

  <div class="container-fluid">

    <div class="card cardbg o-hidden border-0 shadow-lg my-5">
        <div class="row">
                <section class="feature_product_area  new-product">
                        <div class="container mt-3">
                          <div class="row jccenter pr-5 pt-5 pb-3">
                            <div class="col-md-4 col-6 mb-20 box">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details">
                                            <img src="{{asset('images/movie/movie04.jpg')}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/movie-details">on watch</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                </div>
                            </div>
                            <div class="col-md-4 col-6  mb-20 box">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details">
                                            <img src="{{asset('images/movie/movie05.jpg')}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/movie-details">fury</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                </div>
                              </div>

                              {{-- <div class="col-md-3 col-6 mb-20 box">
                                <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam"><i class="ti-heart"></i>‿<i class="ti-heart"></i></span></div>
                                <div class="single-product item">
                                  <div class="product-img">
                                    <img class="img-fluid w-100" src="images/product/inspired-product/i3.jpg" alt="" />
                                    <div class="p_icon">
                                      <a href="#">
                                        <i class="ti-eye"></i>
                                      </a>
                                      <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="product-btm">
                                    <a href="#" class="d-block">
                                      <h4>ساعت</h4>
                                    </a>
                                    <div class="mt-3">
                                      <span class="jccenter">400.000</span>
                                    </div>
                                  </div>
                                </div>
                              </div> --}}
                              <div class="col-md-4 col-6 mb-20 box">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="/movie-details">
                                            <img src="{{asset('images/movie/movie10.jpg')}}" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="/movie-details">criminal on party</a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/tomato.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                            <li>
                                                <div class="thumb">
                                                    <img src="{{asset('images/movie/cake.png')}}" alt="movie">
                                                </div>
                                                <span class="content">88%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ribbon ribbon-top-right zindex1 mglr9 mgtb15"><span class="shabnam">❤‿❤</span></div>
                                </div>

                        </div>

                        </div>
                    </section>
        </div>
      </div>
    </div>
  </div>
</div>
</div>{{-- === --}}
@endsection
