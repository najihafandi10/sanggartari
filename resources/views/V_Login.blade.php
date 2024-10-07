<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login Sistem</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}"/>
      <link rel="stylesheet" href="{{ asset('/assets/css/backend-plugin.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/css/backend.css?v=1.0.0') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/remixicon/fonts/remixicon.css') }}">
      
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css') }}">
      <link rel="stylesheet" href="{{ asset('/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css') }}">  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6 bg-primary content-left">
                              <div class="p-3">                                                               
                                 <h2 class="mb-3 text-white"><img src="{{ asset('/icon/logo.png') }}" class="img-fluid  avatar-90 " alt="image"> Sign In Dance</h2>
                                 <p>Login to stay connected.</p>
                                 <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="email" placeholder=" " name="email" value="{{ old('email') }}">
                                             <label>Email</label>
                                             @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                             @enderror
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control @error('password') is-invalid @enderror" type="password" placeholder=" " name="password">
                                             <label>Password</label>
                                             @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                       </div>
                                       <!-- <div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label control-label-1 text-white" for="customCheck1">Remember Me</label>
                                          </div>
                                       </div> -->
                                       <!-- <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class="text-white float-right">Forgot Password?</a>
                                       </div> -->
                                    </div>
                                    <button type="submit" class="btn btn-white">Sign In</button>
                                    <p class="mt-3">
                                       Create an Account <a href="" class="text-white text-underline">Sign Up</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-6 content-right">
                              <img src="{{ asset('/assets/images/login/01.png') }}" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('/assets/js/backend-bundle.min.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('/assets/js/table-treeview.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/assets/js/customizer.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script asyncrc="{{ asset('../assets/js/chart-custom.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script asyncrc="{{ asset('../assets/js/slider.js') }}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ asset('/assets/js/app.js') }}"></script>
    
    <script src="{{ asset('/assets/vendor/moment.min.js') }}"></script>
  </body>
</html>