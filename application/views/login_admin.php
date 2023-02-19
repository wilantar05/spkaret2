<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Berita</title>
    <?php echo $this->load->view('share/author', '', TRUE); ?>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/umum/images/icon.png">
</head>

<body>
    <!--loader-->
    <div class="loader-wrap">
        <div class="loader-inner">
            <div class="loader-inner-cirle"></div>
        </div>
    </div>
    <!--loader end-->
    <!-- main start  -->
    <div id="main">
        <!-- header -->
        <?php echo $this->load->view('share/menu', '', TRUE); ?>
        <!-- header end-->
        <!-- wrapper-->
        <div id="wrapper">
            <!-- content-->
            <div class="content">
                <!--  section  -->
                <section class="hero-section" data-scrollax-parent="true">
                    <div class="bg-tabs-wrap">
                        <!--Header Area Start-->
                        <?php echo $this->load->view('share/e', '', TRUE); ?>
                        <div class="main-register-wrap modal">
                            <div class="reg-overlay"></div>
                            <div class="main-register-holder tabs-act">
                                <div class="main-register fl-wrap  modal_main">
                                    <div class="main-register_title">Silahkan Login <span><strong>Aplikasi</strong> Pengaduan<strong>.</strong></span></div>
                                    <div class="close-reg"><i class="fal fa-times"></i></div>
                                    <ul class="tabs-menu fl-wrap no-list-style">
                                        <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                    </ul>
                                    <!--tabs -->
                                    <div class="tabs-container">
                                        <div class="tab">
                                            <!--tab -->
                                            <div id="tab-1" class="tab-content first-tab">
                                                <div class="custom-form">
                                                    <form class="login-form" method="post" action="<?php echo site_url(); ?>login/proses_login">
                                                        <label>Username or Email Address <span>*</span> </label>
                                                        <input name="username" type="text" onClick="this.select()" value="">
                                                        <label>Password <span>*</span> </label>
                                                        <input name="password" type="password" onClick="this.select()" value="">
                                                        <button type="submit" class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                                        <div class="clearfix"></div>

                                                    </form>

                                                </div>
                                            </div>
                                            <!--tab end -->

                                        </div>
                                        <!--tabs end -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <div class="limit-box fl-wrap"></div>
            </div>
            <!--content end-->
        </div>
        <!-- wrapper end-->
        <!--footer -->
        <?php echo $this->load->view('share/footer', '', TRUE); ?>
        <!--footer end -->
        <!--map-modal -->

        <!--map-modal end -->
        <!--register form -->
        <?php echo $this->load->view('share/login', '', TRUE); ?>
        <!--register form end -->
        <a class="to-top"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/map-single.js"></script>

</html>