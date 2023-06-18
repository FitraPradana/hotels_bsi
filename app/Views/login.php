<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
    <meta charset="UTF-8">
    <title>Login | Hotels BSI</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/template_PickAdmin/dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/flags-icon/css/flag-icon.min.css">

    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/vendors/social-button/bootstrap-social.css" />
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url() ?>/template_PickAdmin/dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Main Content-->
    <div class="container">
        <div class="row vh-100 justify-content-between align-items-center">
            <div class="col-12">
                <form action="<?= base_url('/Auth/login_proses'); ?>" class="row row-eq-height lockscreen  mt-5 mb-5" method="post">
                    <div class="lock-image col-12 col-sm-5"></div>
                    <div class="login-form col-12 col-sm-7">
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
                        <div class="form-group mb-3">
                            <label for="email_user">Email address</label>
                            <input class="form-control" type="email" id="email_user" name="email_user" required="" placeholder="Enter your email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                        </div>

                        <!-- <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                            </div>
                        </div> -->

                        <div class="form-group mb-0">
                            <button class="btn btn-primary" type="submit"> Log In </button>
                        </div>
                        <!-- <p class="my-2 text-muted">--- Or connect with ---</p>
                        <a class="btn btn-social btn-dropbox text-white mb-2">
                            <i class="icon-social-dropbox align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-facebook text-white mb-2">
                            <i class="icon-social-facebook align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-github text-white mb-2">
                            <i class="icon-social-github align-middle"></i>
                        </a>
                        <a class="btn btn-social btn-google text-white mb-2">
                            <i class="icon-social-google align-middle"></i>
                        </a> -->
                        <!-- <div class="mt-2">Don't have an account? <a href="page-register.html">Create an Account</a></div> -->
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END: Content-->

    <!-- START: Template JS-->
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/moment/moment.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/template_PickAdmin/dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- END: Template JS-->
</body>
<!-- END: Body-->

</html>