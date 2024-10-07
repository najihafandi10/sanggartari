@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA PENGUMUMAN TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_pengumuman') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_pengumuman" value="{{ $kode_otomatis }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Item</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="item" placeholder="Masukkan Item..">
                              <div class="valid-feedback">
                                 Item Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom02">Tanggal Pengumuman</label>
                              <input type="date" class="form-control" id="validationCustom02"  required name="tgl_pengumuman">
                              <div class="valid-feedback">
                                 Tanggal Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <label for="validationCustom02">Deskripsi</label>
                              <textarea id="editor" name="deskripsi" required>
                                 <div style="text-align: center;">
                                    <h2><b>SANGGAR SENI TARI SITUBONDO</b></h2>
                                    Gg. Prajurit, Kotakan Utara, Kotakan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68313<br>
                                    No. Telp. 0813-3679-2844 / 0813-3679-2866
                                    E-mail : SanggarSitubondo@gmail.com
                                    <hr>
                                 </div>
                                 <div>
                                    <b>Isi Data Pengumuman</b>
                                 </div>
                              </textarea>
                              <div class="valid-feedback">
                                 Silakan Di Isi dengan pengumuman terhadap Sanggar Tari
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                               <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile" required name="upload">
                                 <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                 <div class="invalid-feedback">File Harus Di Isi</div>
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