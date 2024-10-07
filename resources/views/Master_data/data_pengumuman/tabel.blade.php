@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA PENGUMUMAN TARI</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_pengumuman') }}" class="btn btn-primary">Tambah Data</a>
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
                                       <th>Item</th>
                                       <th>Deskripsi</th>
                                       <th>Tgl Pengumuman</th>
                                       <th>File</th>
                                       <th>Tgl Input</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->item }}</td>
                                       <td>
                                          <?php
                                          $num_char = 50;
                                          echo substr($tampil->deskripsi, 0, $num_char). '..'; ?>
                                       </td>
                                       <td>{{ $tampil->tgl_pengumuman }}</td>
                                       <td>
                                          <a href="{{asset('Berkas')}}/{{$tampil->upload}}" target="_blank">{{ $tampil->upload }}</a>
                                          <a href="#" data-target="#new-project-modal{{ $tampil->id }}" data-toggle="modal" target="_blank" class="btn btn-warning">
                                             <i class="ri-bill-fill"></i> File
                                          </a>
                                       </td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>
                                          <a href="{{ route('edit_pengumuman', $tampil->id)}}" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                                           <i class="ri-pencil-line mr-0"></i> Update</a>
                                         <a href="{{ route('hapus_pengumuman', $tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</a> 
                                       </td>
                                    </tr>
                                    @include('Master_data/data_pengumuman/edit_file')
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