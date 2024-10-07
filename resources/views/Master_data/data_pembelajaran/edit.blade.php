@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">INPUT DATA PEMBELAJARAN TARI</h4>
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
                     
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_pembelajaran') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach ($edit_data as $no_urut => $edit_data)
                        <input type="hidden" name="id_pembelajaran" value="{{ $edit_data->id_pembelajaran }}">
                        <div class="form-row">
                           <div class="col-md-5 mb-3">
                              <label for="validationCustom01">Materi</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="materi" placeholder="Masukkan Materi.." value="{{ $edit_data->materi }}">
                              <div class="valid-feedback">
                                 Materi Harus Di Isi
                              </div>
                           </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationCustom01">Pilih Kategori Pembelajaran</label>
                              <select class="form-control" id="validationCustom01"  required name="id_kategori">
                                 <option value="{{ $edit_data->nomor }}">{{ $edit_data->kategori }}</option>
                                 <option value="">Pilih Kategori</option>
                                 @foreach ($select_kategori as $no_urut => $select_k)
                                 <option value="{{ $select_k->nomor }}">{{ $select_k->kategori }}</option>
                                 @endforeach
                              </select>
                              <div class="valid-feedback">
                                 Anggota Harus Pilih
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
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
                           @endforeach
                        </div>
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Pembelajaran') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection