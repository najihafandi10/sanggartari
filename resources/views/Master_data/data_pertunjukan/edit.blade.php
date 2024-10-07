@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA PERTUNJUKAN ANGGOTA KELOMPOK TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     @foreach ($edit_data as $no_urut => $edit_data)
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_pertunjukan') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_pertunjukan" value="{{ $edit_data->id_pertunjukan }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Uraian</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="uraian" placeholder="Masukkan Uraian.." value="{{ $edit_data->uraian }}">
                              <div class="valid-feedback">
                                 Uraian Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Pilih Anggota</label>
                              <select class="form-control" id="validationCustom01"  required name="id_anggota">
                                 <option value="{{ $edit_data->id_anggota }}">{{ $edit_data->nama_anggota }}</option>
                                 <option value="">Pilih Anggota</option>
                                 @foreach ($select_anggota as $no_urut => $select)
                                 <option value="{{ $select->id_anggota }}">{{ $select->nama_anggota }}</option>
                                 @endforeach
                              </select>
                              <div class="valid-feedback">
                                 Anggota Harus Pilih
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Deskripsi</label>
                              <textarea id="editor" name="deskripsi" required>{{ $edit_data->deskripsi }}</textarea>
                              <div class="valid-feedback">
                                 Deskripsi Harus Di Isi
                              </div>
                           </div>
                           </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Pertunjukan') }}" class="btn btn-info"> Tutup</a>
                     </form>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection