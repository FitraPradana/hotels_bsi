<?php $no = 1;
foreach ($User as $key => $val) { ?>
    <div class="modal fade" id="edituser<?= $val['id_user'] ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="icon-pencil"></i> Edit User
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <form action="<?= base_url('User/update') ?>" method="post" class="edit-contact-form">
                    <?= csrf_field() ?>
                    <div class="modal-body">
                        <input type="hidden" name="id_user" value="<?= $val['id_user']; ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-name">
                                    <label for="username" class="col-form-label">Username</label>
                                    <input type="text" id="username" name="username" value="<?= $val['username']; ?>" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-email">
                                    <label for="email_user" class="col-form-label">Email</label>
                                    <input type="text" id="email_user" name="email_user" value="<?= $val['email_user']; ?>" class="form-control" required="" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-occupation">
                                    <label for="address" class="col-form-label">Address</label>
                                    <input type="text" id="address" name="address" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="contact-phone">
                                    <label for="phone" class="col-form-label">Phone</label>
                                    <input type="text" id="phone" name="phone" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-location">
                                    <label for="level" class="col-form-label">Roles</label>
                                    <div class="d-flex">
                                        <select class="form-control" id="level" name="level" style="width: 100%;" required>
                                            <option value="">Please select</option>
                                            <option value="ADMIN">Administrator</option>
                                            <!-- <option value="OWNER">Owner</option> -->
                                            <option value="STAFF">Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-location">
                                    <label for="remarks_user" class="col-form-label">Remarks</label>
                                    <div class="d-flex">
                                        <textarea id="remarks_user" name="remarks_user" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="edit-date">
                        <button type="submit" class="btn btn-primary add-todo">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>