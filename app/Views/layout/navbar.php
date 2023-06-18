<div class="sidebar">
    <div class="site-width">
        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">

            <li class="dropdown active"><a href="<?= base_url('Home'); ?>"><i class="icon-home mr-1"></i> Dashboard</a>
                <ul>
                    <li class="active"><a href="<?= base_url('Home'); ?>"><i class="icon-rocket"></i> Dashboard</a></li>
                    <!-- <li><a href="index-account.html"><i class="icon-layers"></i> Account</a></li>
                    <li><a href="index-analytic.html"><i class="icon-grid"></i> Analytic</a></li>
                    <li><a href="index-covid.html"><i class="icon-earphones"></i> COVID</a></li>
                    <li><a href="index-crypto.html"><i class="icon-support"></i> Crypto</a></li>
                    <li><a href="index-ecommerce.html"><i class="icon-briefcase"></i> Ecommerce</a></li> -->
                </ul>
            </li>
            <?php if (userLogin()->level == 'ADMIN') { ?>
                <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Master</a>
                    <ul>
                        <li><a href="<?= base_url('TypeKamar'); ?>"><i class="icon-calendar"></i> Type Kamar</a></li>
                        <li><a href="<?= base_url('Kamar'); ?>"><i class="icon-calendar"></i> Kamar</a></li>
                        <li><a href="<?= base_url('Tamu'); ?>"><i class="icon-people"></i> Tamu</a></li>
                        <li><a href="<?= base_url('User'); ?>"><i class="icon-people"></i> User</a></li>
                    </ul>
                </li>
            <?php } ?>

            <li class="dropdown"><a href="#"><i class="icon-cursor mr-1"></i> Transaction</a>
                <ul>
                    <?php if (userLogin()->level == 'ADMIN') { ?>
                        <li><a href="<?= base_url('Reservation'); ?>"><i class="icon-people"></i> Reservation</a></li>
                    <?php } ?>
                    <li><a href="<?= base_url('Checkin'); ?>"><i class="icon-people"></i> Check In</a></li>
                    <li><a href="<?= base_url('CheckOut'); ?>"><i class="icon-people"></i> Check Out</a></li>
                </ul>
            </li>
            <!-- <li class="dropdown"><a href="#"><i class="icon-doc mr-1"></i> Pages</a>
                <ul>
                    <li class="dropdown"><a href="#"><i class="icon-book-open"></i>Other Pages</a>
                        <ul class="sub-menu">
                            <li><a href="page-lockscreen.html"><i class="icon-lock"></i> Lockscreen</a></li>
                            <li><a href="page-login.html"><i class="icon-login"></i> login</a></li>
                            <li><a href="page-register.html"><i class="icon-direction"></i> Register</a></li>
                            <li><a href="page-404.html"><i class="icon-crop"></i> 404 Page</a></li>
                            <li><a href="page-404-menu.html"><i class="icon-layers"></i> 404 Page With Menu</a></li>
                            <li><a href="page-blank.html"><i class="icon-frame"></i> Blank Page</a></li>
                            <li><a href="page-gallery.html"><i class="icon-layers"></i> Gallery</a></li>
                            <li><a href="page-pricing.html"><i class="icon-wallet"></i> Pricing</a></li>
                            <li><a href="page-contact-us.html"><i class="icon-wrench"></i> Contact us</a></li>
                        </ul>
                    </li>
                    <li><a href="user-profile.html"><i class="icon-user"></i>Profile Pages</a></li>
                </ul>
            </li> -->
        </ul>
        <!-- END: Menu-->
        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>