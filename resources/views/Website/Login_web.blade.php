@extends('Website/dasbord')
@section('content')
 <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb1" style="height: 120px;">
            <!--<div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">LOGIN ANGGOTA TARI</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('Website') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Login</a></li>
                    
                </ol>    
            </div> -->
        </div>
        <!-- Header End -->

        <!-- Banner Start -->
        <!-- <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                    <h1 class="me-4"><span class="fw-normal">Login anggota di Sanggar Tari </span><span> SituBondo, Hub: </span></h1>
                    <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i> 714-783-2205</a>
                </div>
            </div>
        </div> -->
        <!-- Banner End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="bg-light rounded p-4 pb-0">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                            <h2 class="display-5 mb-2">Form Login Anggota Baru</h2>
                            <p class="mb-4">Selamat Bergabung Bersama Kami Di Sanggar Tari. Silakan Login Pada Sistem</p>
                            <form method="POST" action="{{ route('Aksi_login') }}">
                            	@csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" required placeholder="Username" name="username">
                                            <label for="subject">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" required placeholder="Password" name="password">
                                            <label for="subject">Password</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100 py-3">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-home fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Alamat</h4>
                                    <p class="mb-0">Asembagus, Situbondo, Indo</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Rumah</h4>
                                    <p class="footer-link">Asembagus,Situbondo,Indo</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Nomer HP</h4>
                                    <p class="mb-0">+6285231222753</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Email</h4>
                                    <p class="mb-0">citrapranabudaya@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="https://www.facebook.com/share/KWaRHXPdX8RpzCh9/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://www.tiktok.com/@msita80?_t=8n8kg9hi2YU&_r=1"><i class="fab fa-tiktok"></i></a>
                                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://www.instagram.com/masitaajja70?igsh=MWVodjlnNjloNWRsZQ=="><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://youtube.com/@citrapranabudaya?si=KZLLjgtTT4UI-aNw"><i class="fab fa-youtube"></i></a>
                                 </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection