<div class="modal fade" id="add_tamu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle1">Tambah Tamu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Tamu/add') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="jenis_identitas" class="">Jenis Identitas :</label>
                                <div class="d-flex">
                                    <select class="form-control jenis_identitas" id="jenis_identitas" name="jenis_identitas" style="width: 100%;" required>
                                        <!-- <option value="">Pilih</option> -->
                                        <option value="KTP">KTP</option>
                                        <option value="SIM">SIM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="no_identitas" class="">Nomor Identitas :</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="nama_tamu" class="">Nama Tamu :</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="warga_negara" class="">Warga Negara :</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="warga_negara" name="warga_negara" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="phone" class="">Phone :</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="">Email :</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat" class="">Alamat :</label>
                                <div class="d-flex">
                                    <textarea id="alamat" rows="3" class="form-control" name="alamat"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="ket_tamu" class="">Remarks :</label>
                                <div class="d-flex">
                                    <textarea id="ket_tamu" rows="3" class="form-control" name="ket_tamu"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>