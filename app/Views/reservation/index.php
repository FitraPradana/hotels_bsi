<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Reservation</h4>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Transaction</a></li>
                        <li class="breadcrumb-item active">Reservation</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <?php foreach ($Kamar_Tesedia as $key => $value) { ?>
                <div class="col-12  col-md-6 col-lg-3 mt-3">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body p-4">
                                <p class="mb-3 font-w-600"><?= $value['kamar']; ?> > <?= $value['nama_type_kamar']; ?></p>
                                <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <?= date('d M Y', strtotime($Today)) ?></p>
                                <p class="font-w-500 tx-s-12">Harga : <?= format_rupiah($value['harga']); ?></p>
                                <p class="font-w-500 tx-s-12">Max Tamu Dewasa : <?= $value['max_dewasa']; ?> Orang</p>
                                <p class="font-w-500 tx-s-12">Max Tamu Anak : <?= $value['max_anak']; ?> Orang</p>
                                <p class="font-w-500 tx-s-12">Status: <?= $value['status_kamar']; ?></p>
                                <div class="d-flex">
                                    <a href="<?= base_url('Reservation/trans_checkin/' . $value['id_kamar']) ?>" class="btn btn-primary font-w-600 my-auto text-nowrap ml-auto add-event"><i class="icon-arrow-right-circle"></i> Pilih Kamar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<?= $this->endSection(); ?>