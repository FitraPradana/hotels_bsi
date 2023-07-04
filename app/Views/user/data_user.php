<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>

<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">User List</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active"><a href="#">User List</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->
        <?php
        if (!empty(session()->getFlashdata('sukses'))) { ?>
            <!-- code... -->
            <br><br>
            <div class="sweetalert m-t-30">
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('sukses') ?>
                </div>
            </div>
        <?php } ?>
        <?php
        if (!empty(session()->getFlashdata('error'))) { ?>
            <!-- code... -->
            <br><br>
            <div class="sweetalert m-t-30">
                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php } ?>
        <!-- START: Card Data-->
        <div class="row row-eq-height">
            <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                <div class="card border h-100 contact-menu-section">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <a href="#" class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center" data-toggle="modal" data-target="#newuser">
                            <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New User</span>
                        </a>
                    </div>


                </div>
            </div>
            <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                <div class="card border h-100 contact-list-section">
                    <div class="card-header border-bottom p-1 d-flex">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                        <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search" placeholder="Search ...">
                        <a href="#" class="list-style search-bar-menu border-0 active"><i class="icon-magnifier"></i></a>
                        <!-- <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a> -->
                    </div>
                    <div class="card-body p-0">
                        <?php $no = 1;
                        foreach ($User as $key => $value) { ?>
                            <div class="contacts list">
                                <div class="contact family-contact">
                                    <div class="contact-content">
                                        <div class="contact-profile">
                                            <img src="<?= base_url() ?>/template_PickAdmin/dist/images/default.png" alt="avatar" class="user-image img-fluid">
                                            <div class="contact-info">
                                                <p class="contact-name mb-0"><?= $value['username']; ?></p>
                                                <p class="contact-position mb-0 small font-weight-bold text-muted"><?= $value['level']; ?></p>
                                            </div>
                                        </div>
                                        <div class="contact-email">
                                            <p class="mb-0 small">Email: </p>
                                            <p class="user-email"><?= $value['email_user']; ?></p>
                                        </div>
                                        <div class="contact-location">
                                            <p class="mb-0 small">Address: </p>
                                            <p class="user-location"><?= $value['address']; ?></p>
                                        </div>
                                        <div class="contact-phone">
                                            <p class="mb-0 small">Phone: </p>
                                            <p class="user-phone"><?= $value['phone']; ?></p>
                                        </div>
                                        <div class="line-h-1 h5">
                                            <a class="text-info delete-contact" href="#"><i class="icon-key" data-toggle="modal" data-target="#modalubahPassword<?= $value['id_user'] ?>" data-original-title="Delete"></i></a>
                                            <a class="text-success edit-contact" href="#" data-toggle="modal" data-target="#modalEdit<?= $value['id_user'] ?>"><i class="icon-pencil"></i></a>
                                            <a class="text-danger delete-contact" href="#"><i class="icon-trash" data-toggle="modal" data-target="#modalDelete<?= $value['id_user'] ?>" data-original-title="Delete"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
    </div>
</main>

<!-- Add User -->
<?= $this->include('user/modal_add'); ?>

<!-- UBAH PASSWORD MODAL -->
<?= $this->include('user/modal_ubahPassword'); ?>
<!-- END: UBAH PASSWORD MODAL-->

<!-- UPDATE MODAL -->
<?= $this->include('user/modal_edit'); ?>
<!-- END: UPDATE MODAL-->

<!-- DELETE MODAL -->
<?= $this->include('user/modal_delete'); ?>
<!-- END: DELETE MODAL-->


<?= $this->endSection(); ?>