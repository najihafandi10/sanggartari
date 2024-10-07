<div class="modal fade" id="exampleModalScrollable{{ $tampil->id_kehadiran }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Kehadiran Anggota</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                    
                        <form method="POST" action="{{ route('Edit_Kehadiran_anggota') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <input type="hidden" name="id_kehadiran" value="{{ $tampil->id_kehadiran }}">
                        <input type="hidden" name="id_anggota" value="{{ Session::get('id_anggota') }}">
                        <input type="hidden" name="id_jadwal" value="{{ @$tampil->id_jadwal }}">
                        <input type="hidden" name="hari" value="{{ @$tampil->hari }}">
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
                                <label><input type="radio" name="status_hadir" value="Aktif" <?php if($tampil->status_hadir == 'Aktif') echo 'checked'?>> Aktif </label><br>
                                <label><input type="radio" name="status_hadir" value="Tidak Aktif" <?php if($tampil->status_hadir == 'Tidak Aktif') echo 'checked'?>> Tidak Aktif </label>
                            </div>
                        </div>
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="keterangan" placeholder="Isi Keterangan Kehadiran" rows="3"><?php echo $tampil->keterangan ?></textarea>
                                
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