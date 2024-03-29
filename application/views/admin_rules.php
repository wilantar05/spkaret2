<!DOCTYPE HTML>
<html lang="en">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Data Rules</title>
    <?php echo $this->load->view('share/author', '', TRUE); ?>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
    <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">

    <?php echo $this->load->view('share/table_header', '', TRUE); ?>

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
        <?php echo $this->load->view('share/admin_head', '', TRUE); ?>
        <!-- header end-->
        <!-- wrapper-->
        <div id="wrapper">
            <!-- content-->
            <div class="content">
                <!--  section  -->
                <?php echo $this->load->view('share/avatar', '', TRUE); ?>
                <!--  section  end-->
                <!--  section  end-->
                <!--  section  -->
                <section class="gray-bg main-dashboard-sec" id="sec1">
                    <div class="container">
                        <!--  dashboard-menu-->
                        <div class="col-md-3">
                            <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                            <div class="clearfix"></div>
                            <div class="fixed-bar fl-wrap" id="dash_menu">
                                <?php echo $this->load->view('share/menu_admin', '', TRUE); ?>
                            </div>
                            <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Back to Menu<i class="fas fa-caret-up"></i></a>
                        </div>
                        <!-- dashboard-menu  end-->
                        <!-- dashboard content-->
                        <div class="col-md-9">

                            <div class="dashboard-title fl-wrap">
                                <h3>Data Rules</h3>
                            </div>
                            <!-- list-single-facts -->

                            <!-- list-single-facts end -->
                            <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                                <div>
                                    <table id="example" class="display responsive nowrap" style="width:100%">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Gejala</th>
                                                <th>Nama Penyakit</th>
                                                <th>Nilai MB</th>
                                                <th>Nilai MD</th>
                                                <th>Nilai CF</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            foreach ($rules as $r) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>

                                                    <td><?php echo $r->nama_gejala; ?></td>
                                                    <td><?php echo $r->nama_penyakit; ?></td>
                                                    <td><?php echo $r->nilai_md; ?></td>
                                                    <td><?php echo $r->nilai_mb; ?></td>
                                                    <td><?php echo $r->nilai_cf; ?></td>

                                                    <td>
                                                        <a href="<?php echo site_url(); ?>detail_rules?id=<?php echo $r->id_rules; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                                        <a onclick="return confirm('Hapus data ?')" href=" <?php echo site_url(); ?>delete_rules?id=<?php echo $r->id_rules; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                                    </td>

                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>

                        <!-- dashboard content end-->
                    </div>
                </section>
                <!--  section  end-->
                <div class="limit-box fl-wrap"></div>
            </div>
            <!--content end-->
        </div>
        <!-- wrapper end-->
        <!--footer -->
        <?php echo $this->load->view('share/footer', '', TRUE); ?>
        <!--footer end -->
        <!--register form -->
        <?php echo $this->load->view('share/login', '', TRUE); ?>
        <!--register form end -->
        <a class="to-top"><i class="fas fa-caret-up"></i></a>
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <?php echo $this->load->view('share/table_footer', '', TRUE); ?>
    <!-- <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script> -->
    <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/charts.js"></script>
    <script src="<?php echo site_url(); ?>assets/umum/js/dashboard.js"></script>

</html>