@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA PELATIH TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('simpan_pelatih') }}" enctype="multipart/form-data">
                        @csrf                        
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Nama Lengkap</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nama_lengkap" placeholder="Masukkan Nama Lengkap..">
                              <div class="valid-feedback">
                                 Nama Lengkap Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">NIP</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nip" placeholder="Masukkan NIP.." value="{{ $kode_otomatis }}">
                              <div class="valid-feedback">
                                 NIP Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Alamat</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="alamat" placeholder="Masukkan Alamat..">
                              <div class="valid-feedback">
                                 Alamat Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Jenis Kelamin</label><br>
                              <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                 <input type="radio" id="customRadio-2" name="jenis_kelamin" class="custom-control-input bg-success" value="Laki-Laki">
                                 <label class="custom-control-label" for="customRadio-2"> Laki-Laki </label>
                              </div>
                              <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                                 <input type="radio" id="customRadio-3" name="jenis_kelamin" class="custom-control-input bg-danger" value="Perempuan">
                                 <label class="custom-control-label" for="customRadio-3"> Perempuan </label>
                              </div>
                              <div class="valid-feedback">
                                 Jenis Kelamin Harus Di Pilih
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom02">Agama</label>
                              <select name="agama" class="form-control" id="validationCustom02"  required>
                                 <option value="">Pilih Agama</option>
                                 <option>Islam</option>
                                 <option>Kristen</option>
                                 <option>Hindu</option>
                              </select>
                              <div class="valid-feedback">
                                 Agama Harus Di Pilih
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">No-Hp</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="nohp" maxlength="12" placeholder="Masukkan No-Hp..">
                              <div class="valid-feedback">
                                 No-Hp Harus Di Isi
                              </div>
                           </div>                           
                           <div class="col-md-6 mb-3">
                           <label for="validationCustom01">Upload Foto</label>
                               <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validatedCustomFile" required name="foto">
                                 <label class="custom-file-label" for="validatedCustomFile">Choose Foto Pelatih...</label>
                                 <div class="invalid-feedback">File Harus Di Isi</div>
                              </div>
                           </div>
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Profesi</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="profesi" placeholder="Masukkan Profesi Pelatih.." >
                              <div class="valid-feedback">
                                 Profesi pelatih Harus Di Isi
                              </div>
                           </div>
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Pelatih') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection