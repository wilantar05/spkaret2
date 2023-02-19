<!DOCTYPE HTML>
<html lang="en">

<head>
  <!--=============== basic  ===============-->
  <meta charset="UTF-8">
  <title>Tambah Admin</title>
  <?php echo $this->load->view('share/author', '', TRUE); ?>
  <!--=============== css  ===============-->
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/dashboard-style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
  <script src="<?php echo site_url(); ?>assets/ckeditor/ckeditor.js"></script>
  <style>
    /* Style the CKEditor element to look like a textfield */
    .cke_textarea_inline {
      padding: 10px;
      height: 200px;
      overflow: auto;

      border: 1px solid gray;
      -webkit-appearance: textfield;
    }
  </style>
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
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
                <h3>Tambah Admin</h3>
              </div>
              <!-- list-single-facts -->

              <!-- list-single-facts end -->

              <div class="list-single-main-item fl-wrap block_box " style="padding: 20px;">
                <div class="custom-form" style="padding: 20px;">
                  <form action="<?php echo site_url(); ?>up_admin" method="post" enctype="multipart/form-data">

                    <div class="row">
                      <div class="col-sm-6">
                        <label style="padding: 10px;">Username<i class="fal fa-user" style="top: 50px;"></i></label>
                        <input required type="text" name="username" placeholder="Masukkan Username">
                      </div>
                      <div class="col-sm-6">
                        <label style="padding: 10px;">Password<i class="fal fa-user" style="top: 50px;"></i></label>
                        <input required type="password" name="password" placeholder="Masukkan Password">
                      </div>
                      <div class="col-sm-6">
                        <label style="padding: 10px;">Nama Lengkap<i class="fal fa-user" style="top: 50px;"></i></label>
                        <input required type="text" name="nama_lengkap" placeholder="Masukkan Nama">
                      </div>

                      <div class="col-sm-6">
                        <label style="padding: 10px;">Bidang<i class="far fa-user" style="top: 50px;"></i> </label>
                        <div class="listsearch-input-item">
                          <select data-placeholder="City" name="bidang" class="chosen-select no-search-select" required>
                            <option value="">Pilih Bidang</option>
                            <?php
                            foreach ($bidang as $bidang) {

                            ?>
                              <option value="<?php echo $bidang->id_bidang; ?>"><?php echo $bidang->nama_bidang; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                  </form>
                  <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <div>
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
  <script>
    CKEDITOR.inline('tindak_lanjut');
  </script>

  <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
  <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>
  <script src="<?php echo site_url(); ?>assets/umum/js/charts.js"></script>
  <script src="<?php echo site_url(); ?>assets/umum/js/dashboard.js"></script>

</html>