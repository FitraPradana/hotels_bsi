<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>

<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Tamu</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active"><a href="#">Tamu</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header  justify-content-between align-items-center">
                        <h4 class="card-title">Tamu</h4>
                    </div>
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
                    <div class="card-body d-md-flex text-center">
                        <ul class="d-md-flex m-0 pl-0 list-unstyled">
                            <li class="py-1 px-2 mr-md-2 text-center my-1">
                                <a href="#" class="btn btn-primary font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#add_tamu"><i class="icon-doc"></i> Tambah Tamu</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display table dataTable table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Jenis Identitas</th>
                                        <th>Nomor Identitas</th>
                                        <th>Nama Tamu</th>
                                        <th>Warga Negara</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($Tamu as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['id_tamu']; ?></td>
                                            <td><?= $value['jenis_identitas']; ?></td>
                                            <td><?= $value['no_identitas']; ?></td>
                                            <td><?= $value['nama_tamu']; ?></td>
                                            <td><?= $value['warga_negara']; ?></td>
                                            <td><?= $value['phone']; ?></td>
                                            <td><?= $value['email']; ?></td>
                                            <td><?= $value['ket_tamu']; ?></td>
                                            <td align="center">
                                                <a class="text-success edit-invoice" href="#" data-original-title="Edit" data-toggle="modal" data-target="#modalEdit<?= $value['id_tamu'] ?>"><i class="icon-pencil"></i></a>
                                                <a class="text-danger delete-invoice" href="#"><i class="icon-trash" data-toggle="modal" data-target="#modalDelete<?= $value['id_tamu'] ?>" data-original-title="Delete"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<!-- START: Navbar-->
<?= $this->include('tamu/add_modal'); ?>
<!-- END: Navbar-->

<?= $this->endSection(); ?>