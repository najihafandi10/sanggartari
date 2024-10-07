
                     <div class="modal fade bd-example-modal-xl{{ $tampil->id_anggota }}" tabindex="-1" role="dialog" aria-modal="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">LAKUKAN INPUT JADWAL ANGGOTA SANGGAR TARI</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 
                                    <form method="POST" class="needs-validation" novalidate  action="{{ route('simpan_jadwal') }}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                    <input type="hidden" name="id_jadwal" value="{{ $kode_otomatis }}">
                                    <input type="hidden" name="id_anggota" value="{{ $tampil->id_anggota }}">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Uraian</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Uraian" name="uraian" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Anggota</label>
                                            <input type="text" class="form-control" id="exampleInputText01" readonly value="{{ $tampil->nama_anggota }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Hari</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Hari" name="hari" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Waktu</label>
                                            <input type="time" class="form-control" id="exampleInputText01" placeholder="Isi Waktu" name="waktu" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Lokasi</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Lokasi" name="lokasi" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                           <div class="form-group mb-3">
                                             <textarea class="form-control" id="exampleFormControlTextarea2" name="deskripsi" required></textarea>                                             
                                             <div class="invalid-feedback">Deskripsi Harus Di Isi</div>
                                          </div>
                                       </div>
                                    
                                    
                                    </div>

                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                           </form>
                           </div>
                        </div>
                     </div>
                  </div>
