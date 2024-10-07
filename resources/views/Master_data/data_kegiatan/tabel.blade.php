@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA KEGIATAN ANGGOTA</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_kegiatan') }}" class="btn btn-primary">Tambah Data</a>
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
                                       <th>Uraian</th>
                                       <th>Anggota</th>
                                       <th>Jumlah Anggota</th>
                                       <th>File Upload</th>
                                       <th>Keterangan</th>
                                       <th>Tgl Input</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->uraian }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>{{ $tampil->jumlah_anggota }}</td>
                                       <td class="text-center">
                                          <a href="{{asset('Berkas')}}/{{$tampil->upload}}" target="_blank">
                                             <img src="{{asset('Berkas')}}/{{$tampil->upload}}" class="rounded img-fluid avatar-40">
                                          </a>
                                          <a href="#" data-target="#new-project-modal{{ $tampil->id_kegiatan }}" data-toggle="modal" target="_blank" class="badge bg-warning">
                                             <i class="ri-user-add-line mr-0"></i> Edit
                                          </a>
                                       </td>
                                       <td>
                                          <?php
                                          $num_char = 50;
                                          echo substr($tampil->keterangan, 0, $num_char). '..'; ?>
                                       </td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>
                                          <a href="{{ route('edit_kegiatan', $tampil->id)}}" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                                           <i class="ri-pencil-line mr-0"></i> Update</a>
                                         <a href="{{ route('hapus_kegiatan', $tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</a> 
                                       </td>
                                    </tr>
                                    @include('Master_data/data_kegiatan/edit_file')
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