
                     <div class="modal fade bd-example-modal-xl{{ $tampil->id }}" tabindex="-1" role="dialog" aria-modal="true">
                        <div class="modal-dialog modal-xl">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h5 class="modal-title">LAKUKAN INPUT KEGIATAN TERHADAP ANGGOTA SANGGAR TARI</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <div class="modal-body">
                                 
                                    <form method="POST" class="needs-validation" novalidate  action="{{ route('simpan_kegiatan') }}" enctype="multipart/form-data">
                                        @csrf
                                    <div class="row">
                                    <input type="hidden" name="id_kegiatan" value="{{ $kode_otomatis }}">
                                    <input type="hidden" name="id_anggota" value="{{ $tampil->id_anggota }}">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Uraian Kegiatan</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Uraian Kegiatan" name="uraian" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText01" class="h5">Nama Anggota</label>
                                            <input type="text" class="form-control" id="exampleInputText01" placeholder="Isi Nama Anggota" name="nama_anggota" value="{{ $tampil->nama_anggota }}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                           <div class="form-group mb-3">
                                             <textarea class="form-control" id="exampleFormControlTextarea2" name="keterangan" required></textarea>                                             
                                             <div class="invalid-feedback">Keterangan Harus Di Isi</div>
                                          </div>
                                       </div>
                                    <div class="col-md-12 mb-3">
                                           <div class="form-group mb-3">
                                             <input type="file" class="form-control" id="validatedCustomFile" required name="upload">
                                             
                                             <div class="invalid-feedback">File Harus Di Isi</div>
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
