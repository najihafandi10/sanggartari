@extends('Website/dasbord')
@section('content')
<!-- Events Start -->
        <div class="container-fluid events py-5">
            <div class="container py-5">
                <div class="pb-5">
                    <div class="row g-4 align-items-end">
                        <div class="col-xl-8">
                            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Events</h4>
                            <h3 style="font-size: 50px;" class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Pertunjukan Sanggar Tari</h3>
                        </div>
                        <div class="col-xl-4 text-xl-end pb-3 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('Vidio_pembelajaran') }}">Liat Vidio</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach ($tampil_data as $no_urut => $tampil)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-item rounded">
                            <div class="position-relative">
                                <img src="{{asset('Berkas')}}/{{$tampil->upload}}" class="img-fluid rounded-top w-100" alt="Image">
                                <div class="bg-primary text-white fw-bold rounded d-inline-block position-absolute p-2" style="top: 0; right: 0;"><?php echo date('Y') ?></div>
                                <div class="d-flex justify-content-between border-start border-end bg-white px-2 py-2 w-100 position-absolute" style="bottom: 0; left: 0; opacity: 0.8;">
                                    <a href="#" class="text-dark"><i class="fas fa-clock text-primary"></i> {{ $tampil->created_at}}</a>
                                    <a href="https://maps.app.goo.gl/PfjwV8CWb2eaEama8" class="text-dark"><span class="fas fa-map-marker-alt text-primary"></span> Asembagus</a>
                                </div>
                            </div>
                            <div class="border border-top-0 rounded-bottom p-4">
                                <a style="font-size: 15px" href="#" class="h4 mb-3 d-block">{{ $tampil->uraian }}</a>
                                <b>Anggota : {{ $tampil->nama_anggota}}</b>
                                <p class="mb-3"><?php
                                          $num_char = 150;
                                          echo substr($tampil->keterangan, 0, $num_char). '..'; ?></p>
                                <form method="get" action="{{ route('detail_kegiatan') }}">
                                    <input type="hidden" name="cari" value="{{ $tampil->id_kegiatan }}">
                                <button type="submit" class="btn btn-primary rounded-pill text-white py-2 px-4">View Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Events End -->

@endsection