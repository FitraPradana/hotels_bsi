<!-- Modal DELETE -->
<?php $no = 1;
foreach ($Tamu as $key => $value) { ?>
    <div class="modal fade" id="modalDelete<?= $value['id_tamu'] ?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Data Pengajuan Pinjaman</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data
                    <span class="badge p-2 badge-danger mb-1"><?= $value['nama_tamu'] ?></span> ???
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <a href="<?= base_url('Tamu/delete/' . $value['id_tamu']) ?>" type="button" class="btn btn-info">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- END MODAL DELETE -->