<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">UPDATE PASSWORD</h3>
                </div>
                <div class="modal-body">
                    
                        <form method="POST" action="{{ route('aksi_edit_password') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <input type="hidden" name="id_anggota" value="{{ Session::get('id_anggota') }}">
                        
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Nama Anggota</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Nama Anggota" value="{{ Session::get('nama_anggota') }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Update Password</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Comfirm Password"name="password">
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