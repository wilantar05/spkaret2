<!DOCTYPE HTML>
<html lang="en">

<head>
  <!--=============== basic  ===============-->
  <meta charset="UTF-8">
  <title>Cek</title>
  <!--=============== author  ===============-->
  <?php echo $this->load->view('share/author', '', TRUE); ?>
  <!--=============== css  ===============-->
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/reset.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/plugins.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo site_url(); ?>assets/umum/css/color.css">
  <!--=============== favicons ===============-->
  <link rel="shortcut icon" href="<?php echo site_url(); ?>assets/umum/images/icon.png">


  <script>
    <?php
    $id = $_GET['id'];
    if ($id == 1) {
    ?>
      alert("Maaf Gagal Login!");
    <?php
    } else if ($id == 2) {
    ?>
      alert("Maaf Gagal Menambahkan Pengaduan Anda");
    <?php
    }
    ?>
  </script>

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
        <!--section  -->
        <section class="hero-section" data-scrollax-parent="true">
          <div class="bg-tabs-wrap">
            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
              <div class="bg bg_tabs" data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/bg.jpg"></div>
              <div class="overlay op7"></div>
            </div>
          </div>
          <div class="container small-container">
            <div class="intro-item fl-wrap">
              <span class="section-separator"></span>
              <div class="bubbles">
                <h1>Pantau Pengaduan Anda</h1>
              </div>
            </div>
            <!-- main-search-input-tabs-->
            <div class="main-search-input-tabs  tabs-act fl-wrap">
              <ul class="tabs-menu change_bg no-list-style">
                <li class="current"><a href="#tab-inpt1" data-bgtab="<?php echo site_url(); ?>assets/umum/images/bg/hero/1.jpg">Cari</a></li>
              </ul>
              <!--tabs -->

              <div class="tabs-container fl-wrap  ">
                <!--tab -->
                <div class="tab">
                  <div id="tab-inpt1" class="tab-content first-tab">
                    <div class="profile-edit-container fl-wrap block_box">
                      <div class="custom-form" style="padding: 20px;">
                        <form action="<?php echo site_url(); ?>umum_cek_awal" method="get" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-sm-12">
                              <label style="padding: 10px;">Nama <i class="fal fa-user" style="top: 50px;"></i></label>
                              <input type="text" name="nama" placeholder="Masukkan Nama" value="<?php echo $data_pengaduan->nama; ?>">
                            </div>
                            <div class="col-sm-12">
                              <label style="padding: 10px;">Nomor Handphone <i class="fal fa-user" style="top: 50px;"></i></label>
                              <input type="text" name="no_telepon" placeholder="No Handphone" value="">
                            </div>
                            <div class="col-sm-12">
                              <label style="padding: 10px;">Tanggal Lahir <i class="fal fa-user" style="top: 50px;"></i></label>
                              <input type="date" name="tgl_lahir" placeholder="No Handphone" value="">
                            </div>


                            <button class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu" style="z-index: auto; position: relative; top: 0px;">Cek Pengaduan</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--tabs end-->
            </div>
            <!-- main-search-input-tabs end-->

          </div>
          <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
          </div>
        </section>
        <!--section end-->

        <div class="sec-circle fl-wrap"></div>


        <div class="list-single-main-item_content fl-wrap">
          <div class="reviews-comments-wrap" style="width: 100%;">
            <!-- reviews-comments-item -->
            <div class="list-single-main-item fl-wrap block_box">
              <div class="list-single-main-item-title">
                <h3>Pengaduan<span> </span></h3>
              </div>


              <div class="list-single-main-item_content fl-wrap">
                <?php
                foreach ($data_pengaduan as $data_pengaduan) {
                ?>
                  <div class="reviews-comments-wrap" style="width: 100%;">
                    <!-- reviews-comments-item -->
                    <div class="reviews-comments-item only-comments">
                      <div class="review-comments-avatar">
                        <img src="<?php echo site_url(); ?>assets/umum/images/avatar/4s.png" alt="">
                      </div>
                      <div class="reviews-comments-item-text fl-wrap">
                        <div class="reviews-comments-header fl-wrap">
                          <h4><a href="#"><?php echo $data_pengaduan->nama; ?></a></h4>
                        </div>
                        <p>" <?php echo $data_pengaduan->uraian; ?>"</p>
                        <div class="reviews-comments-item-footer fl-wrap">
                          <div class="reviews-comments-item-date"><span>
                              <h4>
                                <a href="#">
                                  <?php
                                  $bulan = array(
                                    1 => 'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                  );
                                  $pecahkan = explode('-',  $data_pengaduan->tanggal_pengaduan);
                                  $tanggal = $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                                  ?>
                                  <?php echo $tanggal; ?>
                            </span></div>
                          <a href="<?php echo site_url(); ?>umum_cek?id=<?php echo $data_pengaduan->id_pengaduan; ?>" class="reply-item">Detail</a>

                        </div>

                      </div>
                    </div>
                    <!--reviews-comments-item end-->


                  </div>
                  <br>
                <?php
                }
                ?>
              </div>


            </div>
          </div>
        </div>



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
  <script src="<?php echo site_url(); ?>assets/umum/js/jquery.min.js"></script>
  <script src="<?php echo site_url(); ?>assets/umum/js/plugins.js"></script>
  <script src="<?php echo site_url(); ?>assets/umum/js/scripts.js"></script>


</html>