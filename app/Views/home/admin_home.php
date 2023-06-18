<?= $this->extend('layout/main'); ?>



<?= $this->section('content'); ?>
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto">
                        <h4 class="mb-0">Dashboard</h4>
                        <p>Welcome <?= userLogin()->username; ?> to liner admin panel</p>
                    </div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                            <!-- <i class="icon-basket icons card-liner-icon mt-2"></i> -->
                            <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $type_kmr_count ?></h2>
                                <h6 class="card-liner-subtitle">Type Kamar</h6>
                            </div>
                        </div>
                        <!-- <div id="apex_today_order"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                            <!-- <i class="icon-basket icons card-liner-icon mt-2"></i> -->
                            <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $kmr_count ?></h2>
                                <h6 class="card-liner-subtitle">Kamar</h6>
                            </div>
                        </div>
                        <!-- <div id="apex_today_order"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                            <!-- <i class="icon-user icons card-liner-icon mt-2"></i> -->
                            <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $tamu_count ?></h2>
                                <h6 class="card-liner-subtitle">Tamu</h6>
                            </div>
                        </div>
                        <!-- <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+4.8%</span> -->
                        <!-- <div id="apex_today_visitors"></div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                            <!-- <i class="icon-bag icons card-liner-icon mt-2"></i> -->
                            <div class='card-liner-content'>
                                <h2 class="card-liner-title"><?= $tamu_count ?></h2>
                                <h6 class="card-liner-subtitle">User</h6>
                            </div>
                        </div>
                        <!-- <div id="apex_today_sale"></div> -->
                    </div>
                </div>
            </div>


        </div>
        <!-- END: Card DATA-->
    </div>
</main>

<?= $this->endSection(); ?>