<!--Header Area Start-->
<?php echo $this->load->view('share/e', '', TRUE); ?>
<header class="main-header">
    <!-- logo-->
    <a href="<?php echo site_url(); ?>" class="logo-holder" style="float: left;height: 80%;position: relative;top: 10px;"><img src="<?php echo site_url(); ?>assets/umum/images/logo4.png" alt=""></a>
    <!-- logo end-->

    <?php
    $level = $this->session->userdata('level');
    if (isset($level) == 0) {
    ?>
        <a href="<?php echo site_url(); ?>logout" class="show-reg-form avatar-img" data-srcav="<?php echo site_url(); ?>assets/umum/images/avatar/3.jpg"><i class="fal fa-user"></i>Logout</a>
    <?php
    } else {
    ?>
        <!-- header opt -->
        <div class="show-reg-form modal-open avatar-img" data-srcav="<?php echo site_url(); ?>assets/umum/images/avatar/3.jpg"><i class="fal fa-user"></i>Login</div>
        <!-- header opt end-->
    <?php
    }
    ?>

    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">
                <li>
                    <?php
                    $level = $this->session->userdata('level');
                    $nama = $this->session->userdata('nama');
                    if (($level) > 0) {
                    ?>
                        <a href="<?php echo site_url(); ?>admin"><?php echo $level; ?></i></a>
                    <?php
                    } else {
                    ?>
                        <a href="<?php echo site_url(); ?>admin"><?php echo $level; ?> </i></a>
                    <?php
                    }
                    ?>
                    <!--second level -->

                    <!--second level end-->
                </li>

            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
</header>