@extends('Website/dasbord')
@section('content')
 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb1" style="height: 120px;">
            <!--<div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">PENDAFTARAN ANGGOTA TARI</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('Website') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pendaftaran</a></li>
                    <li class="breadcrumb-item active text-primary">Anggota Baru</li>
                </ol>    
            </div>-->
        </div>
        <!-- Header End -->

        <!-- Banner Start -->
        <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                    <h1 class="me-4"><span class="fw-normal">Registrasi anggota di Sanggar Tari </span><span> Situbondo, Hub: </span></h1>
                    <a  class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i>+6285231222753</a>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="bg-light rounded p-4 pb-0">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                            <h2 class="display-5 mb-2">Form Pendaftaran Anggota Baru</h2>
                            <p class="mb-4">Silakan lakukan pengajuan anggota pada Sanggar Tari Citraprana Budaya, yang dipimpin oleh seorang guru tari atau instruktur yang berpengalaman, yang mengajar gerakan, teknik, dan ekspresi dalam tarian kepada para anggota sanggar. 
                                <br><b class="text-warning">No-Rekening Transfer</b> <u>832783728738</u> 
                            </p>
                            @if (count($errors) > 0)
                                 <div class="alert alert-danger">
                                    <strong>Info.!</strong> Maaf Input Bermasalah.<br><br>
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                 </div>
                              @endif
                            <form method="POST" action="{{ route('Registrasi') }}" enctype="multipart/form-data">
                            	@csrf
                            	<input type="hidden" name="id_anggota" value="{{ $kode_otomatis }}">
                                <div class="row g-3">
                                <!--<div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="nember" class="form-control" id="id" required placeholder="id_anggota" name="id_anggota">
                                            <label for="name">Id Anggota</label>
                                        </div>
                                    </div>-->
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" required placeholder="Nama Anggota" name="nama_anggota">
                                            <label for="name">Nama Anggota</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="email" required placeholder="Jumlah Angota" name="jumlah_anggota">
                                            <label for="email">Jumlah Angota</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control" id="phone" required placeholder="Alamat" name="alamat">
                                            <label for="phone">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="project" required placeholder="No-Hp" name="nohp" maxlength="12">
                                            <label for="project"> No-Hp Kamu</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select class="form-control" name="provensi" require>
                                                <option value="">Pilih Provensi</option>
                                                <option>Jawa Timur</option>
                                                <option>Jawa Barat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select class="form-control" name="kabupaten" required>
                                                <option value="">Pilih Kabupaten</option>
                                                <optgroup>
                                                    <option value=""> Jatim</option>
                                                    <option>Kabupaten Banyuwangi</option>
                                                    <option>Kabupaten Probolinggo</option>
                                                    <option>Kabupaten Situbondo</option>
                                                </optgroup>
                                                <optgroup>
                                                    <option value=""> Jabar</option>
                                                    <option>Kabupaten Bandung</option>
                                                    <option>Kabupaten Bandung Barat</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="hidden" name="kelompok_tari" value="-">
                                            <!-- <select  class="form-control" id="subject" name="kelompok_tari">
                                                <option value="">Pilih Kelompok Tari</option>
                                                @foreach ($select_jenis as $no_urut => $select)
                                                <option>{{ $select->nama_kelompok }}</option>
                                                @endforeach
                                            </select>
                                            <label for="subject">Kelompok Tari</label> -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" id="subject" required name="bukti_tf">
                                            <label for="subject">Bukti Transfer</label>
                                        </div>
                                    </div>
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
                                        <button type="submit" class="btn btn-primary w-100 py-3">Registrasi Anggota Baru</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-home fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Rumah</h4>
                                    <p class="mb-0">Lokasi Jln. Raya Asembagus Kabupaten Situbondo Jawa Timur</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Alamat</h4>
                                    <p class="mb-0">Lokasi Jln. Raya Asembagus, kampung timur Rt.01 Rw. 05 Trigonco Asembagus Kabupaten Situbondo Jawa Timur</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-5">
                                <div class="mb-3"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Kontak WhatsApp</h4>
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