@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA JENIS ADMINISTRASI SANGGAR TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_jenis_administrasi') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_jenis" value="{{ $kode_otomatis }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jenis Administrasi</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="jenis" placeholder="Masukkan Jenis Administrasi..">
                              <div class="valid-feedback">
                                 Jenis Administrasi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Biaya</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="biaya" placeholder="Masukkan Biaya..">
                              <div class="valid-feedback">
                                 Biaya Harus Di Isi
                              </div>
                           </div>
                        </div>
                           
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Jenis_administrasi') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection