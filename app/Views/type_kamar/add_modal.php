<div class="modal fade" id="add_typekamar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle1">Tambah Type Kamar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('TypeKamar/add') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="code_type_kamar" class="col-form-label">Code Type Kamar : </label>
                        <input type="text" class="form-control" id="code_type_kamar" name="code_type_kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_type_kamar" class="col-form-label">Nama Type Kamar : </label>
                        <input type="text" class="form-control" id="nama_type_kamar" name="nama_type_kamar" required>
                    </div>
                    <div class="form-group">
                        <label for="harga" class="col-form-label">Harga : </label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="remarks_type_kamar" class="col-form-label">Remarks : </label>
                        <textarea class="form-control" id="remarks_type_kamar" name="remarks_type_kamar"></textarea>
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