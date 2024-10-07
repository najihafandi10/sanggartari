@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA KEHADIRAN ANGGOTA TARI</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('Laporan_kehadiran') }}" class="btn btn-info" target="_blank">Cetak All Data</a>
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
                                       <th>Anggota</th> 
                                       <th>Item Kehadiran</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach ($tampil_data as $no_urut => $tampil){ 
                                        $id_anggota = $tampil->id_anggota;
                                    ?>
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>
                                        <table class="table data-table table-striped">
                                            <tr>
                                                <td>Hari</td>
                                                <td>Tgl Hadir</td>
                                                <td>Keterangan</td>
                                                <td>Status</td>
                                                <td>Del</td>
                                            </tr>
                                            <?php 
                                            $tampil_kehadiran =DB::table('tb_kehadirans')
                                            ->join('tb_anggotas', 'tb_kehadirans.id_anggota', '=', 'tb_anggotas.id_anggota')
                                            // ->join('tb_jadwals', 'tb_kehadirans.id_anggota', '=', 'tb_jadwals.id_anggota')
                                            ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                            ->get();
                                            // 
                                            // hitung kehadiran
                                                $jumlah_aktif =DB::table('tb_kehadirans')
                                                ->where('tb_kehadirans.status_hadir','like',"Aktif")
                                                ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                                ->count();
                                                $jumlah_tidak =DB::table('tb_kehadirans')
                                                ->where('tb_kehadirans.status_hadir','like',"Tidak Aktif")
                                                ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                                ->count();
                                            foreach ($tampil_kehadiran as $no_urut => $data){
                                            ?>
                                            <tr>
                                                <td><?php echo $data->hari; ?></td>
                                                <td><?php echo $data->tgl_hadir; ?></td>
                                                <td><?php echo $data->keterangan; ?></td>
                                                <td><?php echo $data->status_hadir; ?></td>
                                                <td>
                                                    <form method="POST" action="{{ route('hapus_kehadiran') }}">
                                                    @csrf
                                                    <input type="hidden" name="id_kehadiran" value="{{ $tampil->id_kehadiran }}">
                                                 <button type="submit" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                                   <i class="ri-delete-bin-line mr-0"></i> Delete</button>
                                               </form>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            <tr class="table-primary">
                                                <td>Jumlah Ketidak Hadiran</td>
                                                <td>Aktif : <span class="badge bg-primary">{{ $jumlah_aktif }}</span></td>
                                                <td>Tidak Aktif : <span class="badge bg-warning">{{ $jumlah_tidak }}</span></td>
                                            </tr>
                                        </table>
                                       </td>
                                    </tr>
                                    <?php }?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
           
@endsection