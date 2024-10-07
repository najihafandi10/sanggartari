@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA JENIS KELOMPOK TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_jenis') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="nomor" value="{{ $kode_otomatis }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jenis Kelompok</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nama_kelompok" placeholder="Masukkan Jenis Kelompok..">
                              <div class="valid-feedback">
                                 Jenis Kelompok Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Keterangan</label>
                              <textarea id="editor" name="keterangan" required></textarea>
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