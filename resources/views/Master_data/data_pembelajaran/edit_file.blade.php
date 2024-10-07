<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal{{ $tampil->id_pembelajaran }}">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">EDIT FILE PEMBELAJARAN SANGGAR TARI</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="POST" action="{{ route('aksi_edit_file_pembelajaran') }}" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="id_pembelajaran" value="{{ $tampil->id_pembelajaran }}">
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Materi</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Materi" name="materi" value="{{ $tampil->materi }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                               <div class="form-group mb-3">
                                <label>File Gambar / Vidio (MP4)</label>
                                 <input type="file" class="form-control" id="validatedCustomFile" required name="upload">
                                 
                                 <div class="invalid-feedback">File Harus Di Isi</div>
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