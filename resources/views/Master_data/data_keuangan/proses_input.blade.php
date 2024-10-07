<div class="modal fade" role="dialog" aria-modal="true" id="new-project-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">PROSES SIMPAN KEUANGAN</h3>
                </div>
                <div class="modal-body">
                    
                        <form method="POST" action="{{ route('simpan_keuangan') }}" enctype="multipart/form-data">
                            @csrf
                        <div class="row">
                        <input type="hidden" name="nomor" value="{{ $kode_otomatis }}">
                        <input type="hidden" name="id_administrasi" value="<?php echo @$id_administrasi ?>">
                        <input type="hidden" name="jumlah_data" value="<?php echo @$jumlah_data ?>">
                        <input type="hidden" name="sub_total" value="<?php echo @$sub_total ?>">
                        <div class="col-lg-12">                            
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Item Keuangan</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Item Keuangan" name="item_keuangan" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <button type="submit" class="btn btn-primary mr-3" >Save</button>
                                <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>