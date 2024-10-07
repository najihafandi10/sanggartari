<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">INPUT KEHADIRAN ANGGOTA</h3>
                </div>
                <div class="modal-body">
                    
                        <form method="POST" action="{{ route('Simpan_Kehadiran_anggota') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <input type="hidden" name="id_kehadiran" value="{{ $kode_otomatis }}">
                        <input type="hidden" name="id_anggota" value="{{ Session::get('id_anggota') }}">
                        <input type="hidden" name="id_jadwal" value="{{ @$id_jadwal }}">
                        <input type="hidden" name="hari" value="{{ @$hari_ini }}">
                        <input type="hidden" name="tgl_hadir" value="<?php echo date('d-m-Y'); ?>">
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Nama Anggota</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Nama Anggota" value="{{ Session::get('nama_anggota') }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Status Hadir</label><br>
                                <label><input type="radio" name="status_hadir" value="Aktif"> Aktif </label><br>
                                <label><input type="radio" name="status_hadir" value="Tidak Aktif"> Tidak Aktif </label>
                            </div>
                        </div>
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="Isi Keterangan Kehadiran" rows="3"></textarea>
                                
                            </div>
                        </div>

                        
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <button type="submit" class="btn btn-primary mr-3" >Save</button>
                                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>