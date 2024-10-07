<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal{{ $tampil->id }}">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">EDIT FOTO PELATIH</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="POST" action="{{ route('aksi_edit_foto') }}" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="nip" value="{{ $tampil->nip }}">
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Nama Lengkap" name="nama_lengkap" value="{{ $tampil->nama_lengkap }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                               <div class="form-group mb-3">
                                 <input type="file" class="form-control" id="validatedCustomFile" required name="foto">
                                 
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