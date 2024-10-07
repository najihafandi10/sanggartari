@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
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
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">PROSES TAMBAH DATA KEUANGAN SANGGAR TARI
                              <small class="text-info"><br>Lakukan Pencarian terlebih dahulu dengan select jenis</small>
                            </h5>
                            
                            <div data-toggle-extra="tab" data-target-extra="#list">
                                 <div >
                                    <?php if(@$_GET['cari']){ ?>
                                    <a href="{{ route('tambah_keuangan') }}" class="btn btn-info">Refresh</a>
                                 <?php }?>
                                 </div>
                           </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                 <form method="GET">
                                 <select class="form-control" name="cari"  onchange="this.form.submit()">
                                 <option value="">Pilih Jenis</option>
                                 <?php
                                 foreach ($select_jenis as $no_urut => $select_j){
                                 ?>
                                 <option value="{{ $select_j->id_jenis }}">{{ $select_j->jenis }}</option>
                                 <?php }?>
                                 </select>
                                 
                              </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">                    
                     <div class="table-responsive">
                        <table id="datatable" class="table data-table table-striped">
                                 <thead>
                                    <tr >
                                       <th>No</th>
                                       <th>Jenis Pembayaran</th>
                                       <th>Nama Anggota</th>
                                       <th>Jumlah Bayar Pendaftaran</th>
                                       <th>Bayar</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach ($tampil_data as $no_urut => $tampil){
                                       $id_administrasi = $tampil->id_administrasi;
                                    ?>
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->jenis }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>Rp. {{ number_format($tampil->jumlah_pendaftaran) }}</td>
                                       <td>Rp. {{ number_format($tampil->bayar) }}</td>
                                       
                                    </tr>
                                    <?php }?>
                                 </tbody>

                                    <tr class="table-active">
                                       <td colspan="2">Jumlah Data Administrasi</td>
                                       <td colspan="1"><span class="badge bg-primary">(<?php echo $jumlah_data ?>)</span></td>
                                       <td>Sub Total : Rp. <span class="badge bg-warning"><?php echo number_format($sub_total) ?></span>
                                       </td>
                                       <?php if(@$_GET['cari']){ ?>
                                       <td>                                          
                                          <a href="#" data-target="#new-project-modal" data-toggle="modal" target="_blank" class="badge bg-info">
                                             <i class="ri-user-add-line mr-0"></i> Proses Data
                                          </a>
                                       </td>
                                       <?php }?>
                                    </tr>
                              </table>
                              @include('Master_data/data_keuangan/proses_input')
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
           
@endsection