@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA ANGGOTA KELOMPOK TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_data_anggota', $edit_data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_anggota" value="{{ $edit_data->id_anggota }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Nama Anggota</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nama_anggota" placeholder="Masukkan Nama Anggota.." value="{{ $edit_data->nama_anggota }}">
                              <div class="valid-feedback">
                                 Nama Anggota Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jumlah Anggota</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="jumlah_anggota" placeholder="Masukkan Jumlah Anggota.." value="{{ $edit_data->jumlah_anggota }}">
                              <div class="valid-feedback">
                                 Jumlah Anggota Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Alamat</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="alamat" placeholder="Masukkan Alamat.." value="{{ $edit_data->alamat }}">
                              <div class="valid-feedback">
                                 Alamat Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">No-Hp</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nohp" placeholder="Masukkan No-Hp.." value="{{ $edit_data->nohp }}" maxlength="12">
                              <div class="valid-feedback">
                                 No-Hp Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Provensi</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="provensi" placeholder="Masukkan Provensi.." value="{{ $edit_data->provensi }}">
                              <div class="valid-feedback">
                                 Provensi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Kabupaten</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="kabupaten" placeholder="Masukkan Kabupaten.." value="{{ $edit_data->kabupaten }}">
                              <div class="valid-feedback">
                                 Kabupaten Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jenis Kelompok</label>
                              <select class="form-control" required id="validationCustom01" name="kelompok_tari">
                                 <option>{{ $edit_data->kelompok_tari }}</option>
                                 <option value="">Pilih Jenis Kelompok</option>
                                 @foreach ($select_jenis as $no_urut => $select)
                                 <option>{{ $select->nama_kelompok }}</option>
                                 @endforeach
                              </select>
                              <div class="valid-feedback">
                                 Jenis Kelompok Harus Di Isi
                              </div>
                           </div>
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Anggota') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection