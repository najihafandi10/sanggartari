@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA PEMBELAJARAN SANGGAR TARI</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_pembelajaran') }}" class="btn btn-primary">Tambah Data</a>
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
                                       <th>Kategori</th>
                                       <th>Anggota</th>
                                       <th>Materi</th>
                                       <th>File</th>
                                       <th>Deskripsi</th>
                                       <th>Tgl Input</th>
                                       <th>Status</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->kategori }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>{{ $tampil->materi }}</td>
                                       <td class="text-center">
                                        <?php if($tampil->status_file == 'File'){?>
                                          <a href="{{asset('Berkas')}}/{{$tampil->upload}}" target="_blank">
                                             <img src="{{asset('Berkas')}}/{{$tampil->upload}}" class="rounded img-fluid avatar-40">
                                          </a>
                                          <a href="#" data-target="#new-project-modal{{ $tampil->id_pembelajaran }}" data-toggle="modal" target="_blank" class="badge bg-warning">
                                             <i class="ri-user-add-line mr-0"></i> Edit
                                          </a>
                                        <?php }elseif($tampil->status_file == 'Vidio'){?>
                                            <a href="{{asset('/Berkas')}}/{{$tampil->upload}}" target="_blank">
                                             <video controls  width="120" height="140">
                                                <source src="{{asset('/Berkas')}}/{{$tampil->upload}}" type="video/mp4" />
                                                Browsermu tidak mendukung tag ini, upgrade donk!
                                                <track src="cat-herd-id.vtt" kind="subtitles" srclang="id" label="Indonesia"/>
                                              </video>
                                            </a>
                                          <a href="#" data-target="#new-project-modal{{ $tampil->id_pembelajaran }}" data-toggle="modal" target="_blank" class="badge bg-warning">
                                             <i class="ri-user-add-line mr-0"></i> Edit
                                          </a>
                                        <?php }?>
                                       </td>
                                       <td>
                                          <?php
                                          $num_char = 50;
                                          echo substr($tampil->deskripsi, 0, $num_char). '..'; ?>
                                       </td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>{{ $tampil->status_file }}</td>
                                       <td>
                                        <form method="GET" action="{{ route('edit_pembelajaran') }}">
                                            <input type="hidden" name="edit" value="{{ $tampil->id_pembelajaran }}">
                                            <button type="submit" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                                           <i class="ri-pencil-line mr-0"></i> Update</button>
                                        </form>
                                        <form method="POST" action="{{ route('hapus_pembelajaran') }}">
                                            @csrf
                                            <input type="hidden" name="id_pembelajaran" value="{{ $tampil->id_pembelajaran }}">
                                         <button type="submit" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</button>
                                       </form>
                                       </td>
                                    </tr>
                                    @include('Master_data/data_pembelajaran/edit_file')
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