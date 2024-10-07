@extends('Website/Halaman_anggota/dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">DAFTAR JADWAL KELOMPOK TARI</h5>
                            
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
                                    <tr class="table-primary">
                                       <th>No</th>
                                       <th>Uraian</th>
                                       <th>Anggota</th>
                                       <th>Hari</th>
                                       <th>Waktu</th>
                                       <th>Lokasi</th>
                                       <th>Deskripsi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->uraian }}</td>
                                       <td>
                                        <?php if (Session::get('nama_anggota')== $tampil->nama_anggota) { ?>
                                            <span class="text-info">{{ $tampil->nama_anggota }}</span>
                                        <?php }else{?>
                                            {{ $tampil->nama_anggota }}
                                        <?php }?>
                                        </td>
                                       <td>{{ $tampil->hari }}</td>
                                       <td>{{ $tampil->waktu }}</td>
                                       <td>{{ $tampil->lokasi }}</td>
                                       <td><?php echo $tampil->deskripsi ?></td>
                                    </tr>
                                    @endforeach
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