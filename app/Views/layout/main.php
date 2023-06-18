<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Hotels</title>
    <!-- <link rel="shortcut icon" href="dist/images/favicon.ico" /> -->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <!-- DATATABLE -->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css" />
    <!-- END DATATABLE -->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/chartjs/Chart.min.css">
    <!-- SELECT2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/select2/css/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/select2/css/select2-bootstrap.min.css" />
    <!-- END: Page CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="semi-dark">

    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <div class="loader"></div>
    </div>
    <!-- END: Pre Loader-->

    <!-- START: Header-->
    <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                    <a href="index.html" class="horizontal-logo text-left">
                        <svg height="20pt" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" width="20pt" xmlns="http://www.w3.org/2000/svg">
                            <g transform="matrix(.1 0 0 -.1 0 512)" fill="#1e3d73">
                                <path d="m1450 4481-1105-638v-1283-1283l1106-638c1033-597 1139-654 1139-619 0 4-385 674-855 1489-470 814-855 1484-855 1488 0 8 1303 763 1418 822 175 89 413 166 585 190 114 16 299 13 408-5 100-17 231-60 314-102 310-156 569-509 651-887 23-105 23-331 0-432-53-240-177-460-366-651-174-175-277-247-738-512-177-102-322-189-322-193s104-188 231-407l231-400 46 28c26 15 360 207 742 428l695 402v1282 1282l-1105 639c-608 351-1107 638-1110 638s-502-287-1110-638z" />
                                <path d="m2833 3300c-82-12-190-48-282-95-73-36-637-358-648-369-3-3 580-1022 592-1034 5-5 596 338 673 391 100 69 220 197 260 280 82 167 76 324-19 507-95 184-233 291-411 320-70 11-89 11-165 0z" />
                            </g>
                        </svg> <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">Hotels</span>
                    </a>
                </div>
                <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                    <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                </div>

                <form class="float-left d-none d-lg-block search-form">
                    <div class="form-group mb-0 position-relative">
                        <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                        </a>

                    </div>
                </form>
                <div class="navbar-right ml-auto h-100">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                        <li class="d-inline-block align-self-center  d-block d-lg-none">
                            <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>
                            </a>
                        </li>

                        <!-- START: NOTIFICATION-->
                        <?php
                        // $this->include('layout/notification');
                        ?>
                        <!-- END: NOTIFICATION-->


                        <li class="dropdown user-profile align-self-center d-inline-block">
                            <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                                <div class="media">
                                    <img src="<?= base_url() ?>/template_PickAdmin/dist/images/default.png" alt="" class="d-flex img-fluid rounded-circle" width="29">
                                </div>
                            </a>

                            <div class="dropdown-menu border dropdown-menu-right p-0">
                                <!-- <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                                <a href="" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a> -->
                                <div class="dropdown-divider"></div>
                                <a href="<?= base_url('Auth/logout/') ?>" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Log Out</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END: Header-->

    <!-- START: Navbar-->
    <?= $this->include('layout/navbar'); ?>
    <!-- END: Navbar-->

    <!-- START: Main Content-->
    <?= $this->renderSection('content'); ?>
    <!-- END: Content-->



    <!-- START: Footer-->
    <footer class="site-footer">
        2020 &copy; Hotels
    </footer>
    <!-- END: Footer-->


    <!-- START: Back to top-->
    <a href="#" class="scrollup text-center">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END: Back to top-->


    <!-- START: Template JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/moment/moment.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- END: Template JS-->

    <!-- START: APP JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/js/app.js"></script>
    <!-- END: APP JS-->



    <!-- START: Page Vendor JS-->

    <!-- JQUERY -->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/datatable/buttons/js/buttons.print.min.js"></script>
    <!-- END JQUERY -->

    <!-- dataTable -->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/js/datatable.script.js"></script>
    <!-- END dataTable -->

    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/morris/morris.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/starrr/starrr.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/chartjs/Chart.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page Vendor JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/select2/js/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- START: Page JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/js/home.script.js"></script>
    <!-- END: Page JS-->
    <!-- START: Page Script JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/js/select2.script.js"></script>
    <!-- END: Page Script JS-->
</body>
<!-- END: Body-->

</html>