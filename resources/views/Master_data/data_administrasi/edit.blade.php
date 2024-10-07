@extends('dasbord')

@section('content')
<script type="text/javascript">
  function sum(){
    var biaya=document.getElementById('biaya').value;
    var bayar=document.getElementById('bayar').value;
    var result =(parseInt(biaya) - parseInt(bayar));
    if (!isNaN(result)){
      document.getElementById('tanggungan').value = result;
    }
  }
</script>
  <div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA ADMINISTRASI PENDAFTARAN SANGGAR TARI</h4>
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
                     <form class="needs-validation" novalidate method="POST" action="{{ route('aksi_edit_administrasi') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach ($edit_data as $no_urut => $edit_data)
                        <input type="hidden" name="id_administrasi" value="{{ $edit_data->id_administrasi }}">
                        <div class="form-row">
                           <div class="col-md-6 mb-3">
                              <label for="validationCustom01">Item</label>
                              <input type="text" class="form-control" id="validationCustom01"  required name="item" placeholder="Masukkan Item.." value="{{ $edit_data->item }}">
                              <div class="valid-feedback">
                                 Item Harus Di Isi
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
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">Tanggal Administrasi</label>
                              <input type="date" class="form-control" id="validationCustom01"  required name="tgl_pembayaran" value="{{ $edit_data->tgl_pembayaran }}">
                              <div class="valid-feedback">
                                 Tanggal Administrasi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">Pilih Jenis</label>
                              <select class="form-control" id="validationCustom01"  required name="id_jenis_administrasi"  onchange="changeValuePL(this.value)">
                                 <option value="{{ $edit_data->id_jenis }}">{{ $edit_data->jenis }}</option>
                                 <option value="">Pilih Jenis</option>
                                 <?php 
                                 $jsArray = "var prdNamepl = new Array();\n";
                                 foreach ($select_jenis_administrasi as $no_urut => $select_j){
                                     $jsArray .= "prdNamepl['" . $select_j->id_jenis . "'] = {biaya:'" . addslashes($select_j->biaya)."'};\n";
                                 ?>
                                 <option value="{{ $select_j->id_jenis }}">{{ $select_j->jenis }}</option>
                                 <?php }?>
                              </select>
                              <div class="valid-feedback">
                                 Anggota Harus Pilih
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">Biaya Administrasi</label>
                              <input type="text" class="form-control" id="biaya" onkeyup="sum()" required name="jumlah_pendaftaran" placeholder="Isi Jumlah" readonly>
                              <div class="valid-feedback">
                                 Biaya Administrasi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">Bayar</label>
                              <input type="text" class="form-control" id="bayar" onkeyup="sum()" required name="bayar" placeholder="Isi Bayar" value="{{ $edit_data->bayar }}">
                              <div class="valid-feedback">
                                 Bayar Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-3 mb-3">
                              <label for="validationCustom01">Tanggungan</label>
                              <input type="text" class="form-control" id="tanggungan" onkeyup="sum()" required name="tanggungan" placeholder="Isi Tanggungan" value="{{ $edit_data->tanggungan }}">
                              <div class="valid-feedback">
                                 Tanggungan Administrasi Harus Di Isi
                              </div>
                           </div>
                           <div class="col-md-2 mb-3">
                              <label for="validationCustom01">Status Administrasi</label>
                              <label>
                                 <input type="radio" name="status_bayar" value="Lunas" <?php if($edit_data->status_bayar == 'Lunas') echo 'checked'?>> Lunas
                              </label>
                              <label>
                                 <input type="radio" name="status_bayar" value="Tidak Lunas" <?php if($edit_data->status_bayar == 'Tidak Lunas') echo 'checked'?>> Tidak Lunas
                              </label>
                              <div class="valid-feedback">
                                 Status Administrasi Pendaftaran Harus Di Isi
                              </div>
                           </div>
                        </div>
                        @endforeach
                           <button class="btn btn-primary" type="submit">Simpan Data</button>
                           <a href="{{ route('Administrasi') }}" class="btn btn-info"> Tutup</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

@endsection
<script type="text/javascript"> 
<?php echo $jsArray; ?>

function changeValuePL(id){ 
    document.getElementById('biaya').value = prdNamepl[id].biaya;

    var date = document.getElementById('tgl_pembayaran').value;
 
    if(date === ""){
        alert("Please complete the required field!");
    }else{
        var today = new Date();
        var birthday = new Date(date);
        var year = 0;
        if (today.getMonth() < birthday.getMonth()) {
            year = 1;
        } else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
            year = 1;
        }
        var age = today.getFullYear() - birthday.getFullYear() - year;
 
        if(age < 0){
            age = 0;
        }
        document.getElementById('result').innerHTML = age;
    }
};

</script>