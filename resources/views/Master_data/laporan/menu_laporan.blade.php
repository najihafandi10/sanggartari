@extends('dasbord')

@section('content')
 <div class="content-page">
     <div class="container-fluid">
        
        <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
                    <div class="card-transparent mb-0 desk-info">
                        <div class="card-body p-0">                           
                            <div class="row">
                                
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Data Pelatih Sanggar Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            Jumlah Pelatih : {{ $total_pelatih }}</p>
                                            <div class="iq-progress-bar bg-success-light mb-4">
                                                <span class="bg-success iq-progress progress-1" data-percent="{{ $total_pelatih }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('Laporan_pelatih') }}" target="_blank" class="btn bg-success-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Data Anggota</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            	Jumlah Anggota : {{ $total_anggota }}
                                            </p>
                                            <div class="iq-progress-bar bg-primary-light mb-4">
                                                <span class="bg-primary iq-progress progress-1" data-percent="{{ $total_anggota }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <form method="get" action="{{ route('Laporan_anggota') }}" target="_blank">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">                        
					                                    <select class="form-control" name="cari" >
					                                        <option value="">Jenis Kelompok Tari</option>
					                                        @foreach ($select_jenis as $no_urut => $select)
					                                        <option>{{ $select->nama_kelompok }}</option>
					                                        @endforeach
					                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn bg-primary-light">Cetak Laporan</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Pembelajaran Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            {{ $total_pembelajaran }}</p>
                                            <div class="iq-progress-bar bg-secondary-light mb-4">
                                                <span class="bg-secondary iq-progress progress-1" data-percent="{{ $total_pembelajaran }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('laporan_pembelajaran') }}" target="_blank" class="btn bg-secondary-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Kegiatan Sanggar Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            {{ $total_kegiatan }}</p>
                                            <div class="iq-progress-bar bg-warning-light mb-4">
                                                <span class="bg-warning iq-progress progress-1" data-percent="{{ $total_kegiatan }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('laporan_kegiatan') }}" target="_blank" class="btn bg-warning-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Jadwal Sanggar Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            {{ $total_jadwal }}</p>
                                            <div class="iq-progress-bar bg-info-light mb-4">
                                                <span class="bg-info iq-progress progress-1" data-percent="{{ $total_jadwal }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('laporan_jadwal') }}" target="_blank" class="btn bg-info-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Administrasi Sanggar Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            {{ $total_administrasi }}</p>
                                            <div class="iq-progress-bar bg-primary-light mb-4">
                                                <span class="bg-primary iq-progress progress-1" data-percent="{{ $total_administrasi }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('laporan_administrasi') }}" target="_blank" class="btn bg-primary-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <h5 class="mb-3">Laporan Keuangan Sanggar Tari</h5>
                                            <p class="mb-3"><i class="las la-calendar-check mr-2"></i>
                                            {{ $total_keuangan }}</p>
                                            <div class="iq-progress-bar bg-danger-light mb-4">
                                                <span class="bg-danger iq-progress progress-1" data-percent="{{ $total_keuangan }}" style="transition: width 2s ease 0s; width: 65%;"></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="iq-media-group">
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                    <a href="#" class="iq-media">
                                                        <img src="{{ asset('/icon/24.jpg') }}" class="img-fluid avatar-40 rounded-circle" alt="">
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('laporan_keuangan') }}" target="_blank" class="btn bg-danger-light">Cetak Laporan (All)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection