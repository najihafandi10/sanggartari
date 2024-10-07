@extends('Website/dasbord')
@section('content')
<div class="container-fluid bg-breadcrumb1" style="height: 120px;">
            <!-- <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">PEMBELAJARAN SANGGAR TARI</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('Website') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Pembelajaran</a></li>
                    <li class="breadcrumb-item active text-primary">View</li>
                </ol>    
            </div> -->
        </div>
        <!-- Header End -->

        <!-- Banner Start -->
        <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                    <h1 class="me-4"><span class="fw-normal">Halaman Detail Pembelajaran Sanggar Tari </span><span> Situbondo, Hub: </span></h1>
                    <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i>+62852-3122-2753</a>
                </div>
            </div>
        </div>
         <!-- About Start -->
         @foreach ($tampil_data as $no_urut => $tampil)
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="border bg-secondary rounded">
                            <img src="{{asset('Berkas')}}/{{$tampil->upload}}" class="img-fluid w-100 rounded" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h1 class="display-3 mb-4">{{ $tampil->uraian }}</h1>
                        <p><?php echo $tampil->deskripsi; ?></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- About End -->
@endsection