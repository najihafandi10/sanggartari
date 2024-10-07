@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA PENGUMUMAN TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_pengumuman', $edit_data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_pengumuman" value="{{ $edit_data->id_pengumuman }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Item</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="item" placeholder="Masukkan Item.." value="{{ $edit_data->item }}">
                              <div class="valid-feedback">
                                 Item Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom02">Tanggal Pengumuman</label>
                              <input type="date" class="form-control" id="validationCustom02"  required name="tgl_pengumuman" value="{{ $edit_data->tgl_pengumuman }}">
                              <div class="valid-feedback">
                                 Tanggal Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Deskripsi</label>
                              <textarea id="editor" name="deskripsi" required>
                                 {{ $edit_data->deskripsi }}
                              </textarea>
                              <div class="valid-feedback">
                                 Silakan Di Isi dengan pengumuman terhadap Sanggar Tari
                              </div>
                           </div>
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Pengumuman') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection