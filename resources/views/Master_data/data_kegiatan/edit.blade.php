@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA KEGIATAN SANGGAR TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_kegiatan', $edit_data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_kegiatan" value="{{ $edit_data->id_kegiatan }}">
                                    <input type="hidden" name="id_anggota" value="{{ $edit_data->id_anggota }}">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Uraian Kegiatan</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Uraian Kegiatan" name="uraian" required value="{{ $edit_data->uraian }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Nama Anggota</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Nama Anggota" name="nama_anggota" value="{{ $edit_data->nama_anggota }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                           <div class="form-group mb-3">
                                             <textarea class="form-control" id="editor" name="keterangan" required>{{ $edit_data->keterangan }}</textarea>                                             
                                             <div class="invalid-feedback">Keterangan Harus Di Isi</div>
                                          </div>
                                       </div>
                                    
                                    </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Kegiatan') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection