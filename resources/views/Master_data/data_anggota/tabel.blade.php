@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA PENDAFTARAN ANGGOTA</h5>
                            
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

                        <table id="datatable" class="table data-table table-striped table-bordered" style="overflow-y:scroll;">
                                 <thead>
                                    <tr >
                                       <th>No</th>
                                       <th>Proses Terima</th>
                                       <!-- <th>ID</th> -->
                                       <th>Nama Anggota</th>
                                       <th>Jumlah Anggota</th>
                                       <th>ALamat</th>
                                       <th>No-Hp</th>
                                       <th>Provensi</th>
                                       <th>Kabupaten</th>
                                       <th>Jenis Kelompok</th>
                                       <th>Bukti (TF)</th>
                                       <th>Tgl Input</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>
                                          <form method="POST" action="{{ route('aksi_edit_anggota') }}">
                                             @csrf
                                             <input type="hidden" name="id_anggota" value="{{ $tampil->id_anggota }}">
                                             <label style="font-size: 12px; width: 100px;">
                                             <input type="radio"  name="status" onchange="this.form.submit()" value="Anggota Baru" <?php if($tampil->status == 'Anggota Baru') echo 'checked'?>> Anggota Baru
                                             </label>
                                             <label style="font-size: 12px; width: 100px;">
                                             <input type="radio" name="status" onchange="this.form.submit()" value="Aktif" <?php if($tampil->status == 'Aktif') echo 'checked'?>>
                                             Aktif
                                             </label>
                                             <label style="font-size: 12px; width: 100px;">
                                             <input type="radio" id="customRadio{{ $tampil->id }}" name="status" onchange="this.form.submit()" value="Tidak Aktif" <?php if($tampil->status == 'Tidak Aktif') echo 'checked'?>>
                                             Tidak Aktif
                                          </label>
                                          </form>
                                       </td>
                                       <!-- <td>{{ $tampil->id_anggota }}</td> -->
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>{{ $tampil->jumlah_anggota }}</td>
                                       <td>{{ $tampil->alamat }}</td>
                                       <td>{{ $tampil->nohp }}</td>
                                       <td>{{ $tampil->provensi }}</td>
                                       <td>{{ $tampil->kabupaten }}</td>
                                       <td><span class="badge bg-primary">
                                          {{ $tampil->kelompok_tari }}</span>
                                       </td>
                                       <td class="text-center">
                                          <a href="{{asset('Berkas')}}/{{$tampil->bukti_tf}}" target="_blank">
                                             <img src="{{asset('Berkas')}}/{{$tampil->bukti_tf}}" class="rounded img-fluid avatar-40">
                                          </a>
                                       </td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>
                                          <a href="{{ route('edit_anggota', $tampil->id)}}" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                                           <i class="ri-pencil-line mr-0"></i> Update</a>
                                         <a href="{{ route('hapus_pelatih', $tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</a> 
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