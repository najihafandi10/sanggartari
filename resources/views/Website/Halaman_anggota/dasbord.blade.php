
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Manajemen Sanggar Tari</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}">
      <link rel="stylesheet" href="{{ asset('/assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/remixicon/fonts/remixicon.css') }}">
      
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">  
      <link rel="stylesheet" href="{{ asset('/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
   </head>
   <body style='font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;'>
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
      <div class="iq-sidebar  sidebar-default">
          <div class="iq-sidebar-logo d-flex align-items-center">
              <a  class="header-logo">
                  <img src="{{ asset('/icon/logo.png') }}" alt="logo" >
                  <h4 class="logo-title light-logo">Halaman</h5>
              </a>
              <div class="iq-menu-bt-sidebar ml-0">
                  <i class="las la-bars wrapper-menu"></i>
              </div>
          </div>
          <div class="data-scrollba r" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                      <li class="active">
                          <a href="{{ route('Halaman_anggota') }}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span class="ml-4">Home</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{ route('Profil_anggota') }}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                              </svg>
                              <span class="ml-4">Profil Anggota</span>
                          </a>
                      </li>
                      <li class="">
                          <a href="{{ route('Check_jadwal') }}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                              </svg>
                              <span class="ml-4">Jadwal Tari</span>
                          </a>
                      </li>
                     
                      <li class="">
                          <a href="{{ route('Kehadiran_anggota')}}" class="svg-icon">                        
                              <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line>
                              </svg>
                              <span class="ml-4">Kehadiran</span>
                          </a>
                      </li>
                      
                  </ul>
              </nav>
              <div id="sidebar-bottom" class="position-relative sidebar-bottom">
                  <div class="card border-none mb-0 shadow-none">
                      <div class="card-body p-0">
                          <div class="sidebarbottom-content">
                              <h5 class="mb-3">Presen Kehadiran</h5>
                              <div id="circle-progress-6" class="sidebar-circle circle-progress circle-progress-primary mb-4" data-min-value="0" data-max-value="100" data-value="{{ @$jumlah_kehadiran }}" data-type="percent"></div>
                              
                          </div>
                      </div>
                  </div>
              </div>
              <div class="pt-5 pb-2"></div>
          </div>
      </div>      
      <div class="iq-top-navbar  iq-bg-success shadow-bottom p-1 shadow-showcase">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                      <i class="ri-menu-line wrapper-menu"></i>
                      <a href="../backend/index.html" class="header-logo">
                          <h4 class="logo-title text-uppercase">Webkit</h4>
      
                      </a>
                  </div>
                  <div class="navbar-breadcrumb">
                      <!-- <h5> <b> SISTEM MANAJEMEN SANGGAR TARI (<?php echo date('Y');?>)</b></h5> -->
                  </div>
                  <div class="d-flex align-items-center ">
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-label="Toggle navigation">
                          <i class="ri-menu-3-line"></i>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon dropdown caption-content">
                                  <a href="#" class="search-toggle dropdown-toggle  d-flex align-items-center" id="dropdownMenuButton4"
                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{ asset('/icon/avatar.png') }}" class="img-fluid rounded-circle" alt="user">
                                      <div class="caption ml-3">
                                          <h6 class="mb-0 line-height">{{Session::get('nama_anggota')}}<i class="las la-angle-down ml-2"></i></h6>
                                      </div>
                                  </a>                            
                                  <ul class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <a href="{{ route('keluar_halaman') }}" role="button">Logout</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </nav>
          </div>
      </div> 

@yield('content')

 <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <span class="text-white"><a class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Sanggar Tari Citraprana Budaya</a>, Hak cipta dilindungi Undang-undang.</span>
                        <!--<li class="list-inline-item"><a href="#">Privacy Policy</a></li>-->
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">Webkit</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('/assets/js/table-treeview.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/assets/js/customizer.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script asyncrc="{{ asset('/assets/js/chart-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script asyncrc="{{ asset('/assets/js/slider.js') }}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    
    <script src="{{ asset('/assets/vendor/moment.min.js') }}"></script>

    <script src="{{ asset('/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
@if ($message = Session::get('success'))
                  <script>
                    Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: '{{ $message }}',
                          showConfirmButton: false,
                          timer: 2500
                        })
                  </script>
@endif
<!-- pesan alert data -->
@if ($message_delete = Session::get('delete'))
                  <script>
                    Swal.fire({
                        imageUrl: '{{ asset("/icon/delete.png") }}',
                        imageHeight: 120,
                        title: '{{ $message_delete }}',
                        timer: 2500
                      })
                  </script>
@endif
<script src="{{ asset('/text/ckeditor.js') }} "></script>
<script src="{{ asset('/text/samples/js/sample.js') }} "></script>
<script>
  initSample();
</script>
  </body>
</html>