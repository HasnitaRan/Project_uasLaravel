<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Halaman Admin</title>
  <style>
    tr { font-size: 12px }
  </style>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('dashboardx')}}/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{asset('dashboardx')}}/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('dashboardx')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('dashboardx')}}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('dashboardx')}}/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="/dashboard/halaman"><img style="width: 300px; height: 50px" src="{{asset('dashboardx')}}/images/logo-hmp.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="/dashboard/halaman"><img src="{{asset('dashboardx')}}/images/logo-hmp.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="{{asset('dashboardx')}}/images/image-profil.jpg" alt="profile"/>
              <span class="nav-profile-name">{{ auth()->user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              
              <form action="/logout" method="POST" class="dropdown-list">
                @csrf
                <i class="mdi mdi-logout text-primary"></i>
                <button type="submit" class="btn">Logout</button>
              </form>
                
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/halaman">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Data Peserta</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penilaian">
              <i class="mdi mdi-pencil-box-outline menu-icon"></i>
              <span class="menu-title">Penilaian</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kriteria">
              <i class="mdi mdi-format-list-numbered menu-icon"></i>
              <span class="menu-title">Kriteria</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/normalisasi">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Normalisasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/hasil">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">SPK</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  @yield('konten')
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2023</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
        </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('dashboardx')}}/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('dashboardx')}}/vendors/chart.js/Chart.min.js"></script>
  <script src="{{asset('dashboardx')}}/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="{{asset('dashboardx')}}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('dashboardx')}}/js/off-canvas.js"></script>
  <script src="{{asset('dashboardx')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('dashboardx')}}/js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('dashboardx')}}/js/dashboard.js"></script>
  <script src="{{asset('dashboardx')}}/js/data-table.js"></script>
  <script src="{{asset('dashboardx')}}/js/jquery.dataTables.js"></script>
  <script src="{{asset('dashboardx')}}/js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->

  <script src="{{asset('dashboardx')}}/js/jquery.cookie.js" type="text/javascript"></script>
</body>

</html>
