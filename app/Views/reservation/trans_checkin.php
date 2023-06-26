<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>

<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Reservation Check In</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Form</li>
                        <li class="breadcrumb-item active"><a href="#">Check In</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="card-title">Form Check In</h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="<?= base_url('Reservation/save_checkin') ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="invoice">Invoice</label>
                                                <input type="text" class="form-control rounded" id="invoice" name="invoice" value="<?= $Invoice ?>" style="text-align: center; background-color:#dee2e6;" readonly>
                                                <div class="card">
                                                    <div class="card-content">
                                                        <div class="card-body p-4">
                                                            <?php foreach ($Kamar_ID as $key => $kam) { ?>
                                                                <input type="hidden" value="<?= $kam['id_kamar'] ?>; ?>" id="id_kamar" name="id_kamar">
                                                                <p class="mb-3 font-w-600"><?= $kam['kamar'] ?> > <?= $kam['nama_type_kamar'] ?></p>
                                                                <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <?= date('d M Y', strtotime($Today)) ?></p>
                                                                <p class="font-w-500 tx-s-12">Harga : <?= format_rupiah($kam['harga']) ?></p>
                                                                <p class="font-w-500 tx-s-12">Max Tamu Dewasa : <?= $kam['max_dewasa'] ?> Orang</p>
                                                                <p class="font-w-500 tx-s-12">Max Tamu Anak : <?= $kam['max_anak'] ?> Orang</p>
                                                                <p class="font-w-500 tx-s-12">Status: <?= $kam['status_kamar'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="id_tamu">Tamu</label>
                                                <select id="id_tamu" name="id_tamu" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <?php foreach ($Tamu as $key => $value) { ?>
                                                        <option value="<?= $value['id_tamu']; ?>"><?= $value['nama_tamu']; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <small class="form-text">
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#add_tamu">Tambah Tamu Baru</button>
                                                </small>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="jml_tamu_dewasa">Jumlah Tamu Dewasa</label>
                                                <select id="jml_tamu_dewasa" name="jml_tamu_dewasa" class="form-control">
                                                    <option value="1">1 Orang</option>
                                                    <option value="2">2 Orang</option>
                                                    <option value="3">3 Orang</option>
                                                    <option value="4">4 Orang</option>
                                                    <option value="5">5 Orang</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="jml_tamu_anak">Jumlah Tamu Anak </label>
                                                <select id="jml_tamu_anak" name="jml_tamu_anak" class="form-control">
                                                    <option value="1">1 Orang</option>
                                                    <option value="2">2 Orang</option>
                                                    <option value="3">3 Orang</option>
                                                    <option value="4">4 Orang</option>
                                                    <option value="5">5 Orang</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="tgl_checkin">Tanggal Check In</label>
                                                <input type="date" class="form-control" id="tgl_checkin" name="tgl_checkin" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="tgl_checkout">Tanggal Check Out</label>
                                                <input type="date" class="form-control" id="tgl_checkout" name="tgl_checkout" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="remarks_checkin">Remarks</label>
                                            <textarea class="form-control" id="remarks_checkin" name="remarks_checkin"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Check In</button>
                                    </form>
                                </div>
                            </div>
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