<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BPJS KESEHATAN</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('master/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('master/./vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('master/./vendors/chartist/chartist.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('master/./css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('master/./images/favicon.png') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



    <style>
        .user-icon-circle {
            display: inline-block;
            border-radius: 50%;
            background-color: #007bff;
            color: white;
            padding: 20px;
            font-size: 2rem;
        }
        </style>


  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center"></div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">BPJS KESEHATAN</h5>

          <ul class="navbar-nav navbar-nav-right ml-auto">


        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            <li class="nav-item">
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Sertifikasi Guru</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.dashboard') }}">
                <span class="menu-title">Halaman Utama</span>
                <i class="icon-screen-desktop menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.profile') }}">
                  <span class="menu-title">Pengguna</span>
                  <i class="icon-user menu-icon"></i>
                </a>
              </li>
            <li class="nav-item">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.index') }}">
                <span class="menu-title">Pengajuan</span>
                <i class="icon-wallet menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.password.form') }}">
                  <span class="menu-title">Ubah Password</span>
                  <i class=" icon-pencil menu-icon"></i>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}">
                <span class="menu-title">Log Out</span>
                <i class=" icon-logout menu-icon"></i>
              </a>
            </li>
            </li>
          </ul>
        </nav>
        <!-- partial -->
       @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('master/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('master/./vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('master/./vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('master/./vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('master/./vendors/chartist/chartist.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('master/js/off-canvas.js') }}"></script>
    <script src="{{ asset('master/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('master/./js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>
