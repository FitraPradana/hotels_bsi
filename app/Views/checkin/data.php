<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>

<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Check In</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Transaction</li>
                        <li class="breadcrumb-item active"><a href="#">Check In</a></li>
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
                        <h4 class="card-title">Check In</h4>
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
                                <!-- <a href="#" class="btn btn-primary font-w-600 my-auto text-nowrap ml-auto add-event" data-toggle="modal" data-target="#add_kamar"><i class="icon-doc"></i> Tambah Kamar</a> -->
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
                                        <th>Invoice</th>
                                        <th>Tamu</th>
                                        <th>Kamar</th>
                                        <th>Harga</th>
                                        <th>Tgl Check In</th>
                                        <th>Tgl Check Out</th>
                                        <th>Jml Tamu Dewasa</th>
                                        <th>Jml Tamu Anak</th>
                                        <th>Remarks</th>
                                        <?php if (userLogin()->level == 'ADMIN') { ?>
                                            <th>Action</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($CheckIn as $key => $value) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $value['id_checkin']; ?></td>
                                            <td><?= $value['invoice']; ?></td>
                                            <td><?= $value['nama_tamu']; ?></td>
                                            <td><?= $value['kamar']; ?></td>
                                            <td><?= format_rupiah($value['harga']); ?></td>
                                            <td><?= date('d M Y', strtotime($value['tgl_checkin'])) ?></td>
                                            <td><?= date('d M Y', strtotime($value['tgl_checkout'])) ?></td>
                                            <td><?= $value['jml_tamu_dewasa']; ?> Orang</td>
                                            <td><?= $value['jml_tamu_anak']; ?> Orang</td>
                                            <td><?= $value['remarks_checkin']; ?></td>
                                            <?php if (userLogin()->level == 'ADMIN') { ?>
                                                <?php if ($value['status'] == 'CHECKIN') { ?>
                                                    <td align="center">
                                                        <a class="btn btn-info btn-sm" href="<?= base_url('Checkout/trans_checkout/' . $value['id_checkin']) ?>"> Check Out <i class="icon-action-redo"></i></a>
                                                    </td>
                                                <?php } else { ?>
                                                    <td align="center">
                                                        <button class="btn btn-success btn-sm" disabled>DONE</button>

                                                    </td>

                                                <?php } ?>
                                            <?php } ?>
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


<?= $this->endSection(); ?>