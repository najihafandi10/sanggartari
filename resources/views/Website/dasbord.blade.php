<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Website Dance</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="==" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('/assets_web/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets_web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets_web/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet"> 


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('/assets_web/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('/assets_web/css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('/public/css/lam.css') }} rel="stylesheet" ">
    </head>

    <body>

        <!-- Topbar Start -->
        <div class="container-fluid bg-secondary px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        
                        <a href="https://maps.app.goo.gl/PfjwV8CWb2eaEama8"class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Alamat</a>
                        <a href="https://wa.wizard.id/7d1e8e" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>kontak WhatsApp</a>
                        <a href="mailto:citrapranabudaya@gmail.com" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>Kontak Email</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex justify-content-end">
                        <div class="border-end border-start py-1">
                            <a href="https://www.facebook.com/share/KWaRHXPdX8RpzCh9/?mibextid=qi2Omg" class="btn text-primary"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        
                        <div class="border-end py-1">
                            <a href="https://www.instagram.com/masitaajja70?igsh=MWVodjlnNjloNWRsZQ==" class="btn text-primary"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="border-end py-1">
                            <a href="https://youtube.com/@citrapranabudaya?si=KZLLjgtTT4UI-aNw" class="btn text-primary"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="border-end py-1">
                            <a href="https://www.tiktok.com/@msita80?_t=8n8kg9hi2YU&_r=1" class="btn text-primary"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a class="navbar-brand p-0">
                  
                <h2 class="text-primary m-0"><img src="{{ asset('icon/logo.png') }}" alt="logo"> SANGGAR TARI CITRAPRANA </h2>
                   
               
                </a>
                
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <!--<a href="{{ url('Website') }}" class="nav-item nav-link active">Home</a>--> 
                        <div class="nav-item dropdown ">
                            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Home</a>
                            <div class="dropdown-menu m-0">
                            <a href="{{ url('Website') }}"  class="dropdown-item">Home</a>
                            <a href="{{ route('WebPertunjukan') }}" class="dropdown-item">Pertunjukan</a>
                            <a href="{{ route('view_kegiatan') }}" class="dropdown-item">Kegiatan</a>
                            
                            </div>
                            
                        </div> 

                        <!--<div class="nav-item dropdown ">
                            <a href="{{ url('Website') }}"  class="nav-item nav-link">Home</a>
                        </div>

                        

                        <div class="nav-item dropdown ">
                            <a href="{{ route('WebPertunjukan') }}" class="nav-item nav-link ">Pertunjukan</a>
                        </div>

                        <div class="nav-item dropdown ">
                            <a href="{{ route('view_kegiatan') }}" class="nav-item nav-link ">Kegiatan</a>
                        </div>-->
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori Kelas</a>
                            <div class="dropdown-menu m-0">
                                @foreach ($select_kategori as $no_urut => $select)
                                <form method="get" action="{{ route('view_kategori_pembelajaran') }}">
                                    <input type="hidden" name="cari" value="{{ $select->nomor }}">
                                    <button type="submit" class="dropdown-item">{{ $select->kategori }}</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                    <!--{{ route('PendaftaranAnggota') }} -->
                    <a href="{{ route('PendaftaranAnggota') }}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Register Now</a> 
                    <a href="{{ route('Login_anggota') }}" class="btn btn-warning rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Login Now</a>
                    <!--{{ route('Login_anggota') }} -->
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
        @yield('content')


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-2">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Profil</h4>
                                <p class="text-white mb-3">Sanggar Tari Citraprana adalah pusat pelestarian dan pengembangan tari tradisional Jawa Timur yang berlokasi di Desa Asembagus, Situbondo. Didirikan pada 2004 oleh Bapak Mukato, kami berkomitmen menjaga warisan budaya tari daerah.
                                    <div class="d-flex">
                                    <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="https://www.facebook.com/share/KWaRHXPdX8RpzCh9/?mibextid=qi2Omg"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle me-2" href="https://www.tiktok.com/@msita80?_t=8n8kg9hi2YU&_r=1"><i class="fab fa-tiktok"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://www.instagram.com/masitaajja70?igsh=MWVodjlnNjloNWRsZQ=="><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://youtube.com/@citrapranabudaya?si=KZLLjgtTT4UI-aNw"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Alamat</h4>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://maps.app.goo.gl/PfjwV8CWb2eaEama8"><i class="fas fa-map-marker-alt"></i></a>
                                <div class="text-white ms-2">
                                    <a  href="https://maps.app.goo.gl/PfjwV8CWb2eaEama8" class="footer-link">Asembagus,Situbondo,Indo</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="https://wa.wizard.id/7d1e8e"><i class="fa fa-phone-alt"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">Kontak WhatsApp</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href="mailto:citrapranabudaya@gmail.com"><i class="fas fa-envelope"></i></a>
                                <div class="text-white ms-2">
                                    <p class="mb-0">Kontak Email</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#" class="footer-link"> About Us</a>
                            <a href="#" class="footer-link"> Classes</a>
                            <a href="#" class="footer-link"> Privacy Policy</a>
                            <a href="#" class="footer-link"> Terms & Conditions</a>
                            <a href="#" class="footer-link"> Schedule</a>
                            <a href="#" class="footer-link"> FAQ</a>
                            <a href="#" class="footer-link"> Contact Us</a>
                        </div>
                    </div> 
                    <!--<div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4">Visi Misi</h4>
                    <div class="footer-item">
                        <h5 class="text-white mb-2">Visi:</h5>
                            <p class="text-white mb-3">Menjadi pusat pelestarian dan pengembangan tari tradisional Jawa Timur, khususnya Situbondo, serta menginspirasi generasi muda untuk mencintai warisan budaya.</p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h4 class="text-white mb-2">Misi</h4>
                        <div class="footer-item">
                        <ol class="text-white mb-3">
                            <li>Memberikan pelatihan tari berkualitas kepada generasi muda.</li>
                            <li>Menyelenggarakan pertunjukan tari tradisional secara rutin.</li>
                            <li>Melakukan riset dan dokumentasi tari tradisional Situbondo.</li>
                            <li>Berkolaborasi dengan berbagai pihak untuk memperkaya khazanah tari daerah.</li>
                            <li>Mengembangkan inovasi dalam penyajian tari tradisional.</li>
                            <li>Menjadi wadah kreativitas bagi penari dan koreografer muda.</li>
                            <li>Meningkatkan apresiasi masyarakat terhadap seni tari tradisional.</li>
                        </ol>
                    </div>
                    </div>
                    </div>-->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Sejarah</h4>
                                <p class="text-white mb-3">Pada tahun 2004, seorang seniman dan budayawan bernama Bapak Mukato mendirikan Sanggar Rengganis di Desa Asembagus, Situbondo. Beliau memiliki visi untuk menjaga kelestarian tari-tarian tradisional Jawa Timur, khususnya yang berasal dari Situbondo. Awalnya, Sanggar Rengganis hanya diikuti oleh segelintir anak-anak dan remaja di desa tersebut yang belajar tari secara sukarela. Namun, seiring berjalannya waktu, eksistensi sanggar ini semakin dikenal oleh masyarakat luas setelah menggelar pentas di berbagai acara perpisahan dan hajatan..</p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Sanggar Tari Citraprana Budaya</a>, Hak cipta dilindungi Undang-undang.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Designed By <a class="border-bottom text-white" href="https://www.instagram.com/najihafandi10?igsh=Ym9sanZ0NTc0NDRh">Najih Afandi S.Kom</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/assets_web/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/assets_web/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/assets_web/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/assets_web/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/assets_web/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets_web/lib/lightbox/js/lightbox.min.js') }}"></script>
    

    <!-- Template Javascript -->
    <script src="{{ asset('/assets_web/js/main.js') }}"></script>
    </body>

</html>