
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
                        <h4 class="card-title">PROSES INPUT JADWAL SANGGAR TARI</h4>
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
               <?php foreach ($cek_data as $no_urut => $cek){
                  $id_anggota=$cek->id_anggota;
               }?>
               <?php foreach ($tampil_data as $no_urut => $tampil){?>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div class="list-grid-toggle d-flex align-items-center mr-3">
                                        <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                        <div class="grid-icon mr-3">                                          
                                            {{ $tampil->jumlah_anggota }}
                                        </div>
                                        <small>Jumlah Anggota</small><br>
                                        <?php if(@$id_anggota == @$tampil->id_anggota){?>
                                          <span class="badge bg-success">Active</span>
                                       <?php }else{?>
                                          <span class="badge bg-danger-light">Inactive</span>
                                       <?php }?>
                                       </div>

                                       </div>
                                        <div class="ml-3">
                                            <h5 class="mb-1">{{ $tampil->nama_anggota }}</h5>
                                            <p class="mb-0"><b>Kelompok Tari :</b> <br><u>{{ $tampil->kelompok_tari }}</u></p>
                                            <?php echo $tampil->keterangan ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <div class="iq-media-group">
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('/icon/user6.png') }}" alt="">
                                        </a>                                       
                                    </div>
                                    <a class="btn btn-white text-success link-shadow">{{ $tampil->kabupaten }}</a>
                                     <div>
                                          <a href="#" class="btn bg-success-light" data-toggle="modal" data-target=".bd-example-modal-xl{{ $tampil->id_anggota }}">Jadwal Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('Master_data/data_jadwal/proses_input')
                <?php }?>

             </div>
             <div align="center">
             <a href="{{ route('Jadwal') }}" class="btn btn-warning"> Kembali Halaman</a>
         </div>
          </div>          
       </div>
    </div>
 </div>
   
@endsection
