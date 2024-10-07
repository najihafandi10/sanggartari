@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA KATEGORI PEMBELAJARAN TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_kategori') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="nomor" value="{{ $kode_otomatis }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Nama Kategori</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="kategori" placeholder="Masukkan Kategori Pembelajaran..">
                              <div class="valid-feedback">
                                 Kategori Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom02">Status</label><br>
                              <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                 <input type="radio" id="customRadio-2" name="status" class="custom-control-input bg-success" value="Aktif">
                                 <label class="custom-control-label" for="customRadio-2"> Aktif </label>
                              </div>
                              <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                 <input type="radio" id="customRadio-3" name="status" class="custom-control-input bg-danger" value="Tidak Aktif">
                                 <label class="custom-control-label" for="customRadio-3"> Tidak Aktif </label>
                              </div>
                              <div class="valid-feedback">
                                 Tanggal Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Deskripsi</label>
                              <textarea id="editor" name="keterangan" required>
                              </textarea>
                              <div class="valid-feedback">
                                 Isi Keterangan
                              </div>
                           </div>
                           
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Kategori') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection