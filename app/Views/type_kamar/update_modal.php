<?php $no = 1;
foreach ($TypeKamar as $key => $val) { ?>
    <div class="modal fade" id="modalEdit<?= $val['id_type_kamar'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle1">Update Type Kamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('TypeKamar/update/' . $val['id_type_kamar']) ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="code_type_kamar" class="col-form-label">Code Type Kamar : </label>
                            <input type="text" class="form-control" id="code_type_kamar" name="code_type_kamar" value="<?= $val['code_type_kamar'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_type_kamar" class="col-form-label">Nama Type Kamar : </label>
                            <input type="text" class="form-control" id="nama_type_kamar" name="nama_type_kamar" value="<?= $val['nama_type_kamar'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-form-label">Harga : </label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $val['harga'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="remarks_type_kamar" class="col-form-label">Remarks : </label>
                            <textarea class="form-control" id="remarks_type_kamar" name="remarks_type_kamar"><?= $val['remarks_type_kamar'] ?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>