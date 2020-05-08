
    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0 mb-5">
        <div class="container">
            <div class="search-tab bg_img" data-background="{{asset('images/ticket/ticket-bg01.jpg')}}">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header text-right">
                            <h6 class="category">به بیلیتو خوش آمدید</h6>
                            <h3 class="title">به دنبال چه هستید</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-20">
                        <ul class="tab-menu ticket-tab-menu">
                            <li class="{{ Request::is('movie*') ? 'active' : ''}}{{ Request::is('searchmovie') ? 'active' : '' }}{{ Request::is('sortShowingMovie') ? 'active' : '' }}">
                                <span>فیلم</span>
                                <div class="tab-thumb">
                                    <img src="{{asset('images/ticket/ticket-tab01.png')}}" alt="ticket">
                                </div>
                            </li>
                            <li class="{{ Request::is('concert*') ? 'active' : '' }}{{ Request::is('searchconcert') ? 'active' : '' }}{{ Request::is('sortShowingConcert') ? 'active' : '' }}">
                                <span>کنسرت</span>
                                <div class="tab-thumb">
                                    <img src="{{asset('images/ticket/ticket-tab02.png')}}" alt="ticket">
                                </div>
                            </li>
                            <li class="{{ Request::is('theater*') ? 'active' : '' }}{{ Request::is('searchtheater') ? 'active' : '' }}{{ Request::is('sortShowingTheater') ? 'active' : '' }}">
                                <span>تئاتر</span>
                                <div class="tab-thumb">
                                    <img src="{{asset('images/ticket/ticket-tab01.png')}}" alt="ticket">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-area">
                    <div class="tab-item {{ Request::is('movie*') ? 'active' : ''}}{{ Request::is('searchmovie') ? 'active' : '' }}{{ Request::is('sortShowingMovie') ? 'active' : '' }}">
                        <form class="ticket-search-form" method="POST" action="{{route('searchmovie')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('images/ticket/city.png')}}" alt="ticket">
                                </div>
                                <span class="type mr-2">شهر</span>
                                <select name="city" class="select-bar">
                                    <option  value=""></option>
                                    @foreach($locations->unique('city') as $location)
                                    <option value="{{$location->city}}">{{$location->city}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('images/ticket/date.png')}}" alt="ticket">
                                </div>
                                <span class="type mr-2">تاریخ</span>
                                <select name="date" class="select-bar">
                                    <option  value=""></option>
                                    @foreach($shows->unique('date')->sortBy('date') as $show)
                                    <option  value="{{$show->date}}">{{$show->date}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="{{asset('images/ticket/cinema.png')}}" alt="ticket">
                                </div>
                                <span class="type mr-2">سینما</span>
                                <select name="cinema" class="select-bar">
                                    <option  value=""></option>
                                    @foreach($locations->sortBy('name') as $location)
                                    <option  value="{{$location->name}}">{{$location->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group large">
                                <input name="search" type="text" placeholder="جستجو برای فیلم">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-item {{ Request::is('concert*') ? 'active' : '' }}{{ Request::is('searchconcert') ? 'active' : '' }}{{ Request::is('sortShowingConcert') ? 'active' : '' }}">
                        <form class="ticket-search-form" method="POST" action="{{route('searchconcert')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/city.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">شهر</span>
                            <select name="city" class="select-bar">
                                <option  value=""></option>
                                @foreach($locations->unique('city') as $location)
                                <option value="{{$location->city}}">{{$location->city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/date.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">تاریخ</span>
                            <select name="date" class="select-bar">
                                <option  value=""></option>
                                @foreach($shows->unique('date')->sortBy('date') as $show)
                                <option  value="{{$show->date}}">{{$show->date}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/cinema.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">کنسرت</span>
                            <select name="cinema" class="select-bar">
                                <option  value=""></option>
                                @foreach($locations->sortBy('name') as $location)
                                <option  value="{{$location->name}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group large">
                            <input name="search" type="text" placeholder="جستجو برای کنسرت">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    </div>
                    <div class="tab-item {{ Request::is('theater*') ? 'active' : '' }}{{ Request::is('searchtheater') ? 'active' : '' }}{{ Request::is('sortShowingTheater') ? 'active' : '' }}">
                        <form class="ticket-search-form" method="POST" action="{{route('searchtheater')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/city.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">شهر</span>
                            <select name="city" class="select-bar">
                                <option  value=""></option>
                                @foreach($locations->unique('city') as $location)
                                <option value="{{$location->city}}">{{$location->city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/date.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">تاریخ</span>
                            <select name="date" class="select-bar">
                                <option  value=""></option>
                                @foreach($shows->unique('date')->sortBy('date') as $show)
                                <option  value="{{$show->date}}">{{$show->date}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="{{asset('images/ticket/cinema.png')}}" alt="ticket">
                            </div>
                            <span class="type mr-2">تئاتر</span>
                            <select name="cinema" class="select-bar">
                                <option  value=""></option>
                                @foreach($locations->sortBy('name') as $location)
                                <option  value="{{$location->name}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group large">
                            <input name="search" type="text" placeholder="جستجو برای تئاتر">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Ticket-Search========== -->
