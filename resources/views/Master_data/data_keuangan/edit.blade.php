<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal{{ $tampil->nomor }}">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">EDIT ITEM KEUANGAN</h3>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                        <form method="POST" action="{{ route('aksi_edit_keuangan') }}" enctype="multipart/form-data">
                            @csrf
                        <input type="hidden" name="nomor" value="{{ $tampil->nomor }}">
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Item Keuangan</label>
                                <input type="text" class="form-control" placeholder="Isi Item Keuangan" name="item_keuangan" required value="{{ $tampil->item_keuangan }}">
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
</div>