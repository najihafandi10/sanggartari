@extends('Website/dasbord')
@section('content')
  <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">404 Pages</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">404</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- 404 Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                        <h1 class="display-1">404</h1>
                        <h1 class="mb-4">Page Not Found</h1>
                        <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                        <a class="btn btn-primary text-white rounded-pill py-3 px-5" href="index.html">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->  
@endsection