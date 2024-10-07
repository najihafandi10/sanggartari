@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA ADMINISTRASI SANGGAR TARI</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_administrasi') }}" class="btn btn-primary">Tambah Data</a>
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
                                       <th>Tgl Pembayaran</th>
                                       <th>Tgl Input</th>
                                       <th>Status Bayar</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->jenis }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>Rp. {{ number_format($tampil->jumlah_pendaftaran) }}</td>
                                       <td>Rp. {{ number_format($tampil->bayar) }}</td>
                                       <td>{{ $tampil->tgl_pembayaran }}</td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>{{ $tampil->status_bayar }}</td>
                                       <td>
                                         <form method="GET" action="{{ route('edit_administrasi') }}">
                                            <input type="hidden" name="edit" value="{{ $tampil->id_administrasi }}">
                                            <button type="submit" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                                           <i class="ri-pencil-line mr-0"></i> Update</button>
                                        </form>
                                        <form method="POST" action="{{ route('hapus_administrasi') }}">
                                            @csrf
                                            <input type="hidden" name="id_administrasi" value="{{ $tampil->id_administrasi }}">
                                         <button type="submit" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</button>
                                       </form>
                                       </td>
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