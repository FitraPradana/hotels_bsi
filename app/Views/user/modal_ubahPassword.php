<?php $no = 1;
foreach ($User as $key => $val) { ?>
    <div class="modal fade" id="modalubahPassword<?= $val['id_user'] ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="icon-pencil"></i> Ubah Password
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <form action="<?= base_url('User/ubah_password/' . $val['id_user']) ?>" method="post" class="add-contact-form">
                    <?= csrf_field() ?>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-name">
                                    <label for="contact-name" class="col-form-label">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" value="<?= $val['username'] ?>" style="background-color: darkgray;" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-email">
                                    <label for="contact-email" class="col-form-label">Email</label>
                                    <input type="text" id="email_user" name="email_user" class="form-control" value="<?= $val['email_user'] ?>" style="background-color: darkgray;" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-occupation">
                                    <label for="contact-occupation" class="col-form-label">Password Baru</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary add-todo">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>