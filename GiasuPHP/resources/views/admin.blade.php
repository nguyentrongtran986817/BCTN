<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin</title>
  <!-- loader-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet" />
  <script src="{{asset('backend/js/pace.min.js')}}"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="{{asset('backend/css/sidebar-menu.css')}}" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="{{asset('backend/css/app-style.css')}}" rel="stylesheet" />
  <!--toastr-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous"></script>

</head>

<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="{{URL::to('/admin_index')}}">
          <img src="{{asset('backend/images/logo.png')}}" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Admin Gia Sư</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">Danh mục</li>
        <li>
          <a href="{{URL::to('/admin_index')}}">
            <i class="zmdi zmdi-view-dashboard"></i> <span>Tổng quát</span>
          </a>
        </li>
     
        <li>
          <a href="{{URL::to('/danhsachgiasu')}}">
            <i class="fas fa-chalkboard-teacher"></i> <span>Danh sách gia sư</span>
        </a>
        </li>
        <aside>
          <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
              <ul class="sidebar-menu" id="nav-accordion">
                <li>
                  <a class="active" href="{{URL::to('/danhsachlophoc')}}">
                    <i class="fas fa-school"></i>
                    <span>Danh sách lớp học</span>
                  </a>
                </li>




              </ul>
            </div>
            <!-- sidebar menu end-->
          </div>
        </aside>
        <li>
          <a href="{{URL::to('/danhsachuser')}}">
            <i class="fas fa-graduation-cap"></i> <span>Danh sách user</span>
          </a>
        </li>



        <li>
          <a href="{{URL::to('/duyetgiasu')}}">
            <i class="zmdi zmdi-face"></i> <span>Duyệt Gia Sư</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('/nhanlop')}}">
            <i class="fas fa-comment-dollar"></i> <span>Thanh toán nhận lớp</span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('/nhangiasu')}}">
            <i class="fas fa-comment-dollar"></i>Thanh toán nhận gia sư <span></span>
          </a>
        </li>

        <li>
          <a href="{{URL::to('/admin_login')}}" target="_blank">
            <i class="zmdi zmdi-lock"></i> <span>Đăng nhập</span>
          </a>
        </li>

        <li>
          <a href="#" target="_blank">
            <i class="zmdi zmdi-account-circle"></i> <span>Đăng kí</span>
          </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i><span>Important</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

      </ul>
    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <form class="search-bar">
              <input type="text" class="form-control" placeholder="Enter keywords">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
            </form>
          </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-envelope-open-o"></i></a>
          </li>
          <li class="nav-item dropdown-lg">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
              <i class="fa fa-bell-o"></i></a>
          </li>
          <li class="nav-item language">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
              <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
              <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                  <div class="media">
                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                    <div class="media-body">
                      <h6 class="mt-2 user-title">
                        <?php
                        $name = Session::get('admin_name');
                        if ($name) {
                          echo $name;
                          Session::put('name', null);
                        }
                        ?>
                      </h6>

                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li class="dropdown-item"><a href="{{URL::TO('/logout')}}"><i class="icon-power mr-2"></i> Logout</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        @yield('content')

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

      </div>
      <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->



    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">

        <p class="mb-0">Nền hiện đại</p>
        <hr>

        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>

        <p class="mb-0">Nền cổ diển</p>
        <hr>

        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>

      </div>
    </div>
    <!--end color switcher-->

  </div>
  <!--End wrapper-->
  <script src="{{asset('backend/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/js/popper.min.js')}}"></script>
  <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backend/plugins/simplebar/js/simplebar.js')}}"></script>
  <script src="{{asset('backend/js/sidebar-menu.js')}}"></script>
  <script src="{{asset('backend/js/jquery.loading-indicator.js')}}"></script>
  <script src="{{asset('backend/js/app-script.js')}}"></script>
  <script src="{{asset('backend/plugins/Chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('backend/js/index.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>