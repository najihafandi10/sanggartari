@extends('Website/dasbord')
@section('content')
  <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">404 Notifikasi Anggota Tari</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('Website') }}" class="text-dark">Home</a></li>
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
                        <h1 class="mb-4">404 Notifikasi Anggota</h1>
                        <p class="mb-4">Welcome, Di Halaman Anggota Baru, <b>Untuk Keamanan Terhadap Data Anggota Kami Akan Memeriksa Pendaftaraan Anda Terlebih Dahulu.<p class="text-success"> (Mohon Di Tunggu Proses Dari Kami)</p></b></p>
                        <a class="btn btn-primary text-white rounded-pill py-3 px-5" href="{{ url('Website') }}">Go Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- 404 End -->  
@endsection