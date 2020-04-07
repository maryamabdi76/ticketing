
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link pt-3 pb-5 pl-5 pr-5">
      <img src="{{asset('images/logo/logo.png')}}" alt="Logo" class="brand-image">
      {{-- <span class="brand-text font-weight-light"></span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <div>
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image mr-2">
            <img src="{{asset('img/user8-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
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
            <li class="nav-item has-treeview menu-open">
              <a href="/home" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>داشبورد</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link">
                    <i class="nav-icon fa fa-users"></i>
                    <p>کاربران</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-video-camera"></i>
                <p>فیلم ها
                    <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fa fa-plus nav-icon"></i>
                  <p>اضافه کردن فیلم</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>مدیریت فیلم ها</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-comments nav-icon"></i>
                      <p>نظرات </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-file-movie-o nav-icon"></i>
                      <p>ژانر ها
                          <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fa fa-plus-circle nav-icon"></i>
                            <p>اضافه کردن ژانر</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>مدیریت ژانر ها</p>
                            </a>
                        </li>
                    </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-music"></i>
                <p>کنسرت ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                    <p>اضافه کردن کنسرت</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-circle-o nav-icon"></i>
                      <p>مدیریت کنسرت ها</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-comments nav-icon"></i>
                      <p>نظرات </p>
                    </a>
                </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-file-audio-o nav-icon"></i>
                      <p>دسته بندی ها
                          <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fa fa-plus-circle nav-icon"></i>
                            <p>اضافه کردن دسته بندی</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>مدیریت دسته بندی ها</p>
                            </a>
                        </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-microphone nav-icon"></i>
                      <p>خواننده ها
                          <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fa fa-plus-circle nav-icon"></i>
                            <p>اضافه کردن خواننده</p>
                          </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                              <i class="fa fa-circle-o nav-icon"></i>
                              <p>مدیریت خواننده ها</p>
                            </a>
                        </li>
                    </ul>
                </li>

              </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-street-view"></i>
                  <p>تئاتر ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-plus nav-icon"></i>
                      <p>اضافه کردن تئاتر</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت تئاتر ها</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="fa fa-comments nav-icon"></i>
                          <p>نظرات </p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-sticky-note"></i>
                  <p>پست ها
                    <i class="fa fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-plus nav-icon"></i>
                      <p>اضافه کردن پست</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>مدیریت پست ها</p>
                      </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                          <i class="fa fa-comments nav-icon"></i>
                          <p>نظرات </p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-header">مثال‌ها</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  تقویم
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li> --}}

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>
