
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link pt-3 pb-5 pl-5 pr-5">
      <img src="{{asset('images/logo/logo.png')}}" alt="Logo" class="brand-image">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="thumb mr-2">
            @if(Auth::user()->gender===1)
                <img src="{{asset('images/avatar/femaleavatar.png')}}" alt="female avatar"/>
            @endif
            @if(Auth::user()->gender===2)
                <img src="{{asset('images/avatar/maleavatar.png')}}" alt="male avatar"/>
            @endif
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="/home" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>داشبورد</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}">
                    <i class="nav-icon fa fa-users"></i>
                    <p>کاربران</p>
              </a>
            </li>
            <li class="nav-item has-treeview  {{ Request::is('editSlider*') ? 'menu-open' : '' }}  {{ Request::is('admin/sliders*') ? 'menu-open' : '' }}  {{ Request::is('createSlider') ? 'menu-open' : '' }}">
                <a href="" class="nav-link">
                  <i class="fa fa-photo nav-icon"></i>
                  <p>اسلایدر
                      <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/createSlider" class="nav-link  {{ Request::is('createSlider') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن اسلاید</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.sliders.index') }}" class="nav-link   {{ Request::is('admin/sliders') ? 'active' : '' }}">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>مدیریت اسلایدر</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('editGenre*') ? 'menu-open' : '' }}  {{ Request::is('admin/genres*') ? 'menu-open' : '' }}  {{ Request::is('createGenre') ? 'menu-open' : '' }}">
                <a href="" class="nav-link ">
                  <i class="fa fa-file-movie-o nav-icon"></i>
                  <p>ژانر ها
                      <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/createGenre" class="nav-link {{ Request::is('createGenre') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن ژانر</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.genres.index') }}" class="nav-link  {{ Request::is('admin/genres*') ? 'active' : '' }}">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>مدیریت ژانر ها</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('editDiscount*') ? 'menu-open' : '' }}  {{ Request::is('admin/discounts*') ? 'menu-open' : '' }}  {{ Request::is('createDiscount') ? 'menu-open' : '' }}">
                <a href="" class="nav-link ">
                  <i class="fa fa-percent nav-icon"></i>
                  <p>کد های تخفیف
                      <i class="right fa fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/createDiscount" class="nav-link {{ Request::is('createDiscount') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن کد تخفیف</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.discounts.index') }}" class="nav-link  {{ Request::is('admin/discounts*') ? 'active' : '' }}">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>مدیریت کد های تخفیف</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('editMovie*') ? 'menu-open' : '' }}  {{ Request::is('editMovie*') ? 'menu-open' : '' }}  {{ Request::is('admin/movies*') ? 'menu-open' : '' }}  {{ Request::is('createMovie') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-video-camera"></i>
                <p>فیلم ها
                    <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/createMovie" class="nav-link {{ Request::is('createMovie') ? 'active' : '' }}">
                    <i class="fa fa-plus-circle nav-icon"></i>
                  <p>اضافه کردن فیلم</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admin.movies.index') }}" class="nav-link {{ Request::is('admin/movies*') ? 'active' : '' }}">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>مدیریت فیلم ها</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('showConcert*') ? 'menu-open' : '' }}  {{ Request::is('editConcert*') ? 'menu-open' : '' }}  {{ Request::is('admin/concerts*') ? 'menu-open' : '' }}  {{ Request::is('createConcert') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-music"></i>
                <p>کنسرت ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/createConcert" class="nav-link {{ Request::is('createConcert*') ? 'active' : '' }}">
                      <i class="fa fa-plus-circle nav-icon"></i>
                    <p>اضافه کردن کنسرت</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.concerts.index') }}" class="nav-link {{ Request::is('admin/concerts*') ? 'active' : '' }}">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>مدیریت کنسرت ها</p>
                    </a>
                  </li>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview {{ Request::is('showTheater*') ? 'menu-open' : '' }}  {{ Request::is('editTheater*') ? 'menu-open' : '' }}  {{ Request::is('admin/theaters*') ? 'menu-open' : '' }}  {{ Request::is('createTheater') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-street-view"></i>
                  <p>تئاتر ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="/createTheater" class="nav-link {{ Request::is('createTheater') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                      <p>اضافه کردن تئاتر</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.theaters.index') }}" class="nav-link {{ Request::is('admin/theaters*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت تئاتر ها</p>
                      </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview  {{ Request::is('showLocations*') ? 'menu-open' : '' }}  {{ Request::is('editLocations*') ? 'menu-open' : '' }}  {{ Request::is('admin/locations*') ? 'menu-open' : '' }}  {{ Request::is('createLocations') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-map-o"></i>
                    <p>مکان ها
                    <i class="fa fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/createLocations" class="nav-link  {{ Request::is('createLocations*') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن مکان</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.locations.index') }}" class="nav-link  {{ Request::is('admin/locations*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت مکان ها</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <img src="{{asset('images/movie/salonicon.png')}}" class="ml2imp">
                    <p>سالن ها
                    <i class="fa fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview  {{ Request::is('showSalons*') ? 'menu-open' : '' }}  {{ Request::is('editSalons*') ? 'menu-open' : '' }}  {{ Request::is('admin/salons*') ? 'menu-open' : '' }}  {{ Request::is('createSalons') ? 'menu-open' : '' }}">
                    <li class="nav-item">
                        <a href="/createSalons" class="nav-link {{ Request::is('createSalons') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن سالن</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.salons.index') }}" class="nav-link {{ Request::is('admin/salons*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت سالن ها</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ Request::is('editShow*') ? 'menu-open' : '' }}  {{ Request::is('admin/shows*') ? 'menu-open' : '' }}  {{ Request::is('createShow') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-clock-o"></i>
                    <p>نمایش ها
                    <i class="fa fa-angle-left right"></i>
                    </p>
                </a>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/createShow" class="nav-link {{ Request::is('createShow') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                        <p>اضافه کردن نمایش</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.shows.index') }}" class="nav-link {{ Request::is('admin/shows*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت نمایش ها</p>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item has-treeview  {{ Request::is('showPost*') ? 'menu-open' : '' }}  {{ Request::is('editPost*') ? 'menu-open' : '' }}  {{ Request::is('admin/posts*') ? 'menu-open' : '' }}  {{ Request::is('createPost') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-sticky-note"></i>
                  <p>پست ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="/createPost" class="nav-link {{ Request::is('cretePost') ? 'active' : '' }}">
                        <i class="fa fa-plus-circle nav-icon"></i>
                      <p>اضافه کردن پست</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.posts.index') }}" class="nav-link {{ Request::is('admin/posts*') ? 'active' : '' }}">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت پست ها</p>
                      </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview  {{ Request::is('admin/comments*') ? 'menu-open' : '' }}  {{ Request::is('admin/reviews*') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-comments"></i>
                  <p>نظرات
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('admin.reviews.index') }}" class="nav-link {{ Request::is('admin/reviews*') ? 'active' : '' }}">
                        <i class="fa fa-comments nav-icon"></i>
                      <p>نظرات رویداد ها</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('admin.comments.index') }}" class="nav-link {{ Request::is('admin/comments*') ? 'active' : '' }}">
                        <i class="fa fa-comments nav-icon"></i>
                        <p>نظرات پست ها</p>
                      </a>
                    </li>
                </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>

