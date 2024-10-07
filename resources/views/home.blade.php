@extends('dasbord')
@section('content')
<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Jumlah Pelatih</h5>
                            <!-- <span class="badge badge-primary">Monthly</span> -->
                        </div>
                        <h3><span class="counter">{{ $total_pelatih }}</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-primary">{{ $total_pelatih }}%</span>
                        </div>
                        <div class="iq-progress-bar bg-primary-light mt-2">
                            <span class="bg-primary iq-progress progress-1" data-percent="{{ $total_pelatih }}"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Jumlah Pendaftaran Anggota</h5>
                            <!-- <span class="badge badge-warning">Anual</span> -->
                        </div>
                        <h3><span class="counter">{{ $total_anggota }}</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-warning">{{ $total_anggota }}%</span>
                        </div>
                        <div class="iq-progress-bar bg-warning-light mt-2">
                            <span class="bg-warning iq-progress progress-1" data-percent="{{ $total_anggota }}"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Jumlah Kegiatan</h5>
                            <!-- <span class="badge badge-success">Today</span> -->
                        </div>
                        <h3><span class="counter">{{ $total_kegiatan }}</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-success">{{ $total_kegiatan }}%</span>
                        </div>
                        <div class="iq-progress-bar bg-success-light mt-2">
                            <span class="bg-success iq-progress progress-1" data-percent="{{ $total_kegiatan }}"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="top-block d-flex align-items-center justify-content-between">
                            <h5>Jumlah Pembelajaran</h5>
                            <!-- <span class="badge badge-info">Weekly</span> -->
                        </div>
                        <h3><span class="counter">{{ $total_pembelajaran }}</span></h3>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <p class="mb-0">Total Revenue</p>
                            <span class="text-info">{{ $total_pembelajaran }}%</span>
                        </div>
                        <div class="iq-progress-bar bg-info-light mt-2">
                            <span class="bg-info iq-progress progress-1" data-percent="{{ $total_pembelajaran }}"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card-transparent card-block card-stretch card-height">
                    <div class="card-body p-0">
                        
                        <div class="row">
                            @foreach ($tampil_data as $no_urut => $tampil)
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-sm-8">
                                                <div class="row align-items-center">
                                                    <div class="col-md-3">
                                                        <img class="img-fluid avatar rounded-circle" src="{{ asset('/icon/a4.png') }}" alt="">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="mt-3 mt-md-0">
                                                            <h5 class="mb-1">{{ $tampil->nama_anggota }}</h5>
                                                            <p class="mb-0">{{ $tampil->alamat }}</p>
                                                        </div>                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/icon/user6.png') }}" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/icon/a1.png') }}" alt="">
                                                    </a>
                                                </div>
                                                <a class="btn btn-white text-primary link-shadow mt-2">JML Team, {{ $tampil->jumlah_anggota }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            


                        </div>

                    </div>

                </div>
            </div>
            <div class="col-xl-4">
                <div class="card card-block card-stretch card-height">
                    <div class="card-body">
                        <div class="card border-bottom pb-2 shadow-none">
                            <div class="card-body text-center inln-date flet-datepickr">
                                <input type="text" id="inline-date" class="date-input basicFlatpickr d-none" readonly="readonly">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
            