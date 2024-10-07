@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA PERTUNJUKAN ANGGOTA KELOMPOK TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                     @if (count($errors) > 0)
                                 <div class="alert alert-danger">
                                    <strong>Info.!</strong> Maaf Input Bermasalah.<br><br>
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                 </div>
                              @endif
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_pertunjukan') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_pertunjukan" value="{{ $kode_otomatis }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Uraian</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="uraian" placeholder="Masukkan Uraian..">
                              <div class="valid-feedback">
                                 Uraian Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Pilih Anggota</label>
                              <select class="form-control" id="validationCustom01"  required name="id_anggota">
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
                              <textarea id="editor" name="deskripsi" required></textarea>
                              <div class="valid-feedback">
                                 Deskripsi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Upload Foto</label>
                              <input type="file" class="form-control" id="validationCustom01"  required name="upload">
                              <div class="valid-feedback">
                                Pilih File..
                              </div>
                           </div>
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Pertunjukan') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection