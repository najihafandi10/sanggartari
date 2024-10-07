@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA JENIS KELOMPOK TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_jenis', $edit_data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="nomor" value="{{ $edit_data->nomor }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jenis Kelompok</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nama_kelompok" placeholder="Masukkan Jenis Kelompok.." value="{{ $edit_data->nama_kelompok }}">
                              <div class="valid-feedback">
                                 Jenis Kelompok Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Keterangan</label>
                              <textarea id="editor" name="keterangan" required>{{ $edit_data->keterangan }}</textarea>
                              <div class="valid-feedback">
                                 Keterangan Harus Di Isi
                              </div>
                           </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Jenis') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection