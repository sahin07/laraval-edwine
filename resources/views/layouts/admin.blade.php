<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>     --}}

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendor.bundle.base.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">
 
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"  rel="stylesheet"/>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('images/logo.svg')}}" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="{{ asset('images/faces/face1.jpg') }}" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">David Greymaax</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
                <span class="count-symbol bg-warning"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    
                  <img src="{{ asset('images/favicon.png') }}" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count-symbol bg-danger"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="p-3 mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center">See all notifications</h6>
              </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-format-line-spacing"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div class="col-2 collapse show d-md-flex bg-light pt-2 pl-0 min-vh-100" id="sidebar">
          <ul class="nav flex-column flex-nowrap overflow-hidden">
              <li class="nav-item">
              {{-- <a class="nav-link text-truncate" href="{{route('admin.users.index')}}"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a> --}}
              </li>
              <li class="nav-item">
              <a class="nav-link text-truncate" href="{{route('admin.users.create')}}"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Add User</span></a>          
            </li>
            <li class="nav-item">     
              <a class="nav-link text-truncate" href="{{route('admin.posts.index')}}"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Post</span></a>
            </li>
            <li class="nav-item">     
              <a class="nav-link text-truncate" href="{{route('admin.posts.create')}}"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Create Post</span></a>
            </li>
            <li class="nav-item">     
              <a class="nav-link text-truncate" href="{{route('admin.comments.index')}}"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">All Comments</span></a>
            </li>
              <li class="nav-item">
                  <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline">Reports</span></a>
                  <div class="collapse" id="submenu1" aria-expanded="false">
                      <ul class="flex-column pl-2 nav">
                          <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                          <li class="nav-item">
                              <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                              <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                  <ul class="flex-column nav pl-4">
                                      <li class="nav-item">
                                          <a class="nav-link p-1" href="#">
                                              <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link p-1" href="#">
                                              <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link p-1" href="#">
                                              <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link p-1" href="#">
                                              <i class="fa fa-fw fa-compass"></i> Areas </a>
                                      </li>
                                  </ul>
                              </div>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
              <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>
          </ul>
      </div>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
              @yield('content')
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
  
            @yield('footer')
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    {{--
    <script src="{{ asset('js/Chart.min.js') }}" defer></script>
    <!-- endinject -->

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}" defer></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}" defer></script>
    <script src="{{ asset('js/misc.js') }}" defer></script>
 
    <script src="{{ asset('js/todolist.js') }}" defer></script> --}}
    <script src="{{ asset('js/dashboard.js') }}" defer></script>
    {{-- <script src="{{ asset('js/vendor.bundle.base.js') }}" defer></script> --}}
    <!-- End custom js for this page -->
  </body>
</html>