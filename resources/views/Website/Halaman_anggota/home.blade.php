@extends('Website/Halaman_anggota/dasbord')
@section('content')
<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>DAFTAR PELATIH SANGGAR TARI</h5>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="grid" class="item-content animate__animated animate__fadeIn active" data-toggle-extra="tab-content">
            <div class="row">
                @foreach ($tampil_pelatih as $no_urut => $tampil)
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">                            
                            <div class="item">
                                <div class="odr-img">
                                    <img src="{{asset('Berkas')}}/{{$tampil->foto}}" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>                        
                                <div class="odr-content rounded">                                          
                                    <h4 class="mb-2">{{ $tampil->nama_lengkap }}</h4>
                                    <!-- <p class="mb-3">{{ $tampil->nama_lengkap }}</p> -->
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-secondary-light rounded-circle iq-card-icon-small mr-4" title="{{ $tampil->alamat }}"><i class="ri-chat-3-line m-0"></i></li>
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4" title="{{ $tampil->agama }}""><i class="ri-mail-open-line m-0"></i></li>
                                        <!--<li class="bg-success-light rounded-circle iq-card-icon-small "https://wa.wizard.id/d5960c" href="https://wa.wizard.id/d5960c" title="{{ $tampil->nohp }}"><i class="ri-phone-line m-0"></i></li>--> 
                                        <a class="bg-success-light rounded-circle iq-card-icon-small" href="https://wa.me/{{ $tampil->nohp }} " title="{{ $tampil->nohp }}"><i class="ri-phone-line m-0"></i></a>
                                    </ul>                                    
                                    <!--<div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary">Message</a>
                                    </div>-->
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
@endsection
