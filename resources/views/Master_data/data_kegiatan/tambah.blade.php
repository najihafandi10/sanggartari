
@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <form method="get">
                                    <select class="form-control" name="cari" onchange="this.form.submit()">
                                        <option value="">Pilih Jenis Kelompok Tari</option>
                                        @foreach ($select_jenis as $no_urut => $select)
                                        <option>{{ $select->nama_kelompok }}</option>
                                        @endforeach
                                    </select>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="header-title" align="center">
                        <h4 class="card-title">PROSES INPUT DATA KEGIATAN SANGGAR TARI</h4>
                     </div>
               
            <div class="row">
               <div class="col-lg-12 col-md-12">
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
                           </div>

               @foreach ($tampil_data as $no_urut => $tampil)
                <div class="col-lg-4 col-md-6">
                    <div class="card-transparent card-block card-stretch card-height">
                        <div class="card-body text-center p-0">                            
                            <div class="item">
                                <div class="odr-img">
                                    <img src="{{ asset('/icon/user6.png') }}" class="img-fluid rounded-circle avatar-90 m-auto" alt="image">
                                </div>                        
                                <div class="odr-content rounded">
                                    <h4 class="mb-2">{{ $tampil->nama_anggota }}</h4>
                                    <p class="mb-3">{{ $tampil->alamat }}</p>
                                    <ul class="list-unstyled mb-3">
                                        <li class="bg-primary-light rounded-circle iq-card-icon-small mr-4" style="width: 0px;"><i class="ri-chat-3-line m-0"></i>
                                          {{ $tampil->jumlah_anggota }}
                                        </li>
                                        <li class="bg-success-light rounded-circle iq-card-icon-small"><i class="ri-phone-line m-0"></i>
                                          {{ $tampil->nohp }}
                                        </li>
                                    </ul>                                    
                                    <div class="pt-3 border-top">
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl{{ $tampil->id }}">Proses Kegiatan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               @include('Master_data/data_kegiatan/proses_input')
                @endforeach

             </div>
             <div align="center">
             <a href="{{ route('Kegiatan') }}" class="btn btn-warning"> Kembali Halaman</a>
         </div>
          </div>          
       </div>
    </div>
 </div>
   
@endsection
