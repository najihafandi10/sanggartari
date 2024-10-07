@extends('Website/dasbord')
@section('content')
<div class="container-fluid bg-breadcrumb1" style="height: 120px;">
            <!--<div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-primary display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">VIEWS KATEGORI PEMBELAJARAN SANGGAR TARI</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="{{ url('Website') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-dark">Kategori</a></li>
                    <li class="breadcrumb-item active text-primary">View</li>
                </ol>    
            </div> -->
        </div>
        <!-- Header End -->

        <!-- Banner Start -->
        <div class="container-fluid bg-secondary wow zoomInDown" data-wow-delay="0.1s">
            <div class="container">
                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center p-5">
                    <h1 class="me-4"><span class="fw-normal">Halaman Kategori Pembelajaran Sanggar Tari </span><span> Situbondo, Hub: </span></h1>
                    <a href="#" class="text-white fw-bold fs-2"> <i class="fa fa-phone me-1"></i> 08223009592</a>
                </div>
            </div>
        </div>
<!-- Events Start -->
 
        <div class="container-fluid events py-5">
            <div class="container py-5">
                <div class="pb-5">
                    <div class="row g-4 align-items-end">
                        <div class="col-xl-8">
                            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Events</h4>
                            <h3 style="font-size: 50px;" class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Pembelajaran Sanggar Tari</h3> 
                        </div>
                        
                        <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('Vidio_pembelajaran') }}">Liat Vidio</a>
                        </div> 
                    </div>
                </div>
                
                <div class="row g-4 justify-content-center">
                    @foreach ($tampil_data as $no_urut => $tampil)
                    <?php if($tampil->status_file == 'File'){?>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{asset('Berkas')}}/{{$tampil->upload}}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;"><?php echo date('Y') ?></div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> {{ $tampil->created_at}}</a>
                                </div>
                            </div>
                            <div class="border border-top-0 rounded-bottom p-4">
                                <a style="font-size: 15px" href="#" class="h4 mb-3 d-block">{{ $tampil->materi }}</a>
                                <p class="mb-3"><?php
                                          $num_char = 150;
                                          echo substr($tampil->deskripsi, 0, $num_char). '..'; ?></p>
                                <form method="get" action="{{ route('detail_pembelajaran') }}">
                                    <input type="hidden" name="cari" value="{{ $tampil->id_pembelajaran }}">
                                <button type="submit" class="btn btn-primary rounded-pill text-white py-2 px-4">View Now</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <?php }elseif($tampil->status_file == 'Vidio'){?>
                        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <a href="{{asset('/Berkas')}}/{{$tampil->upload}}" target="_blank">
                                    <video controls  width="305" height="305">
                                       <source src="{{asset('/Berkas')}}/{{$tampil->upload}}" type="video/mp4" />
                                       Browsermu tidak mendukung tag ini, upgrade donk!
                                       <track src="cat-herd-id.vtt" kind="subtitles" srclang="id" label="Indonesia"/>
                                     </video>
                                   </a>
                                <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;"><?php echo date('Y') ?></div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> {{ $tampil->created_at}}</a>
                                    <!--<a href="#" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> New York</a>-->
                                </div>
                            </div>
                            <div class="border border-top-0 rounded-bottom p-4">
                                <a style="font-size: 15px" href="#" class="h4 mb-3 d-block">{{ $tampil->materi }}</a>
                                <p class="mb-3"><?php
                                          $num_char = 150;
                                          echo substr($tampil->deskripsi, 0, $num_char). '..'; ?></p>
                                <form method="get" action="{{ route('detail_pembelajaran') }}">
                                    <input type="hidden" name="cari" value="{{ $tampil->id_pembelajaran }}">
                                <!--<button type="submit" class="btn btn-primary rounded-pill text-white py-2 px-4">View Now</button>-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Events End -->


@endsection

