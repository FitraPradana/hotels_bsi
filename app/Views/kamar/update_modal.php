<div class="modal fade" id="add_kamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle1">Add Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Kamar/update') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_type_kamar" class="">Type Kamar :</label>
                        <div class="d-flex">
                            <select class="form-control id_type_kamar" id="id_type_kamar" name="id_type_kamar" style="width: 100%;" required>
                                <?php foreach ($TypeKamar as $key => $value) { ?>
                                    <option value="<?= $value['id_type_kamar']; ?>"><?= $value['nama_type_kamar']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kamar" class="col-form-label">Kamar : </label>
                        <input type="text" class="form-control" id="kamar" name="kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="max_dewasa" class="">Max/Dewasa :</label>
                        <div class="d-flex">
                            <select class="form-control max_dewasa" id="max_dewasa" name="max_dewasa" style="width: 100%;" required>
                                <option value="">Please select</option>
                                <option value="1">1 Orang</option>
                                <option value="2">2 Orang</option>
                                <option value="3">3 Orang</option>
                                <option value="4">4 Orang</option>
                                <option value="5">5 Orang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="max_anak" class="">Max/Anak :</label>
                        <div class="d-flex">
                            <select class="form-control max_anak" id="max_anak" name="max_anak" style="width: 100%;" required>
                                <option value="">Please select</option>
                                <option value="1">1 Orang</option>
                                <option value="2">2 Orang</option>
                                <option value="3">3 Orang</option>
                                <option value="4">4 Orang</option>
                                <option value="5">5 Orang</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="remarks_kamar" class="col-form-label">Remarks : </label>
                        <textarea class="form-control" id="remarks_kamar" name="remarks_kamar"></textarea>
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