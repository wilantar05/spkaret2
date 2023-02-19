<!DOCTYPE HTML>
<html lang="en">

<head>
  <!--=============== basic  ===============-->
  <meta charset="UTF-8">
  <title>Home</title>
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
                <h1>PANDUMAS</h1>
                <h2 style="color: azure;">ADALAH SISTEM PENGADUAN MASYARAKAT YANG DIBUAT UNTUK MENERIMA KRITIK, SARAN, DAN PERTANYAAN KEPADA KANTOR DESA TELAGATAWANG</h2>
              </div>
            </div>
            <!-- main-search-input-tabs-->
            <div class="main-search-input-tabs  tabs-act fl-wrap">
              <ul class="tabs-menu change_bg no-list-style">
                <li class="current"><a href="#tab-inpt1" data-bgtab="<?php echo site_url(); ?>assets/umum/images/bg/hero/bg.jpg">Ajukan Laporan</a></li>
              </ul>
              <!--tabs -->

              <div class="tabs-container fl-wrap  ">
                <!--tab -->
                <div class="tab">
                  <div id="tab-inpt1" class="tab-content first-tab">
                    <div class="profile-edit-container fl-wrap block_box">
                      <div class="custom-form" style="padding: 20px;">
                        <form action="<?php echo site_url(); ?>pengaduan" method="post" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-sm-6">
                              <label style="padding: 10px;">Nama Lengkap <i class="fal fa-user" style="top: 50px;"></i></label>
                              <input required type="text" name="nama_lengkap" placeholder="Masukkan Nama" value="">
                            </div>
                            <div class="col-sm-6">
                              <label style="padding: 10px;">Nomor HP <i class="far fa-phone" style="top: 50px;"></i></label>
                              <input required type="text" name="no_telepon" placeholder="Masukkan Nomor HP" value="">
                            </div>
                            <div class="col-sm-6">
                              <label style="padding: 10px;">Alamat<i class="far fa-envelope" style="top: 50px;"></i> </label>
                              <input required type="text" name="alamat" placeholder="Masukkan Alamat" value="">
                            </div>
                            <div class="col-sm-6">
                              <label style="padding: 10px;">Tanggal Lahir<i class="far fa-user" style="top: 50px;"></i> </label>
                              <input required type="date" name="tgl_lahir" value="">
                            </div>
                            
                              <div class="col-sm-6">
                                
                                  <label style="padding: 10px;">Gambar</label>
                                  <input type="file" name='gambar' class="form-control" id="preview_gambar" value="" >
                                
                              </div>
                              <div class="col-sm-6">
                                
                                  <img style="padding: 10px;" src="<?= base_url('assets/gambar_pengaduan/barang.png') ?>" id="gambar_load" width="300px" height="250px">
                               
                              
                            </div>
                          </div>
                          <label style="padding: 10px;"> Uraian Pengaduan</label>
                          <textarea cols="40" rows="3" name="uraian_pengaduan" placeholder="Uraikan Pengaduan Anda" style="margin-bottom:20px;"></textarea>
                          <!-- <label style="padding: 10px;">KTP</label>
                                            <div class="photoUpload">
                                            <span><i class="fal fa-image"></i> <strong>KTP</strong></span>
                                            <input type="file" class="upload">
                                          </div>
                                          <label style="padding: 10px;">Upload Bukti (Bila Ada)</label>
                                          <div class="photoUpload">
                                          <span><i class="fal fa-image"></i> <strong>Upload Bukti</strong></span>
                                          <input type="file" class="upload">
                                        </div> -->
                          <p align="center">
                            <button type="submit" class="btn color2-bg "> Kirim Pengaduan <i class="fas fa-caret-right"></i></button>
                          </p>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--tabs end-->
            </div>
            <!-- main-search-input-tabs end-->
            <!-- 
          </div>
          <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
          </div> -->
        </section>
        <!--section end-->

        <div class="sec-circle fl-wrap"></div>


        <!--section end-->
        <section class="parallax-section small-par" data-scrollax-parent="true">
          <div class="bg par-elem " data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/bgbawah.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
          <div class="overlay  op7"></div>
          <div class="container">
            <div class=" single-facts single-facts_2 fl-wrap">
              <!-- inline-facts -->
              <div class="inline-facts-wrap">
                <div class="inline-facts">
                  <div class="milestone-counter">
                    <div class="stats animaper">
                      <div class="num" data-content="0" data-num="<?php
                                                                  foreach ($jumlah_pengaduan as $pengaduan) {
                                                                  ?>
                                                 <?php echo $pengaduan->jumlah; ?>
                                                 <?php } ?>">

                      </div>
                    </div>
                  </div>
                  <h6>Jumlah Pengaduan</h6>
                </div>
              </div>
              <!-- inline-facts end -->
              <!-- inline-facts  -->
              <div class="inline-facts-wrap">
                <div class="inline-facts">
                  <div class="milestone-counter">
                    <div class="stats animaper">
                      <div class="num" data-content="0" data-num="<?php
                                                                  foreach ($pengaduan_proses as $proses) {
                                                                  ?>
                                                 <?php echo $proses->jumlah; ?>
                                                 <?php } ?>"></div>
                    </div>
                  </div>
                  <h6>Pengaduan Sedang Di Proses</h6>
                </div>
              </div>
              <!-- inline-facts end -->
              <!-- inline-facts  -->
              <div class="inline-facts-wrap">
                <div class="inline-facts">
                  <div class="milestone-counter">
                    <div class="stats animaper">
                      <div class="num" data-content="0" data-num="<?php
                                                                  foreach ($pengaduan_selesai as $selesai) {
                                                                  ?>
                                                 <?php echo $selesai->jumlah; ?>
                                                 <?php } ?>"></div>
                    </div>
                  </div>
                  <h6>Pengaduan Selesai</h6>
                </div>
              </div>
              <!-- inline-facts end -->
              <!-- inline-facts  -->
              <div class="inline-facts-wrap">
                <div class="inline-facts">
                  <div class="milestone-counter">
                    <div class="stats animaper">
                      <div class="num" data-content="0" data-num="<?php
                                                                  foreach ($jumlah_informasi as $informasi) {
                                                                  ?>
                                                 <?php echo $informasi->jumlah; ?>
                                                 <?php } ?>"></div>
                    </div>
                  </div>
                  <h6>Jumlah Informasi</h6>
                </div>
              </div>
              <!-- inline-facts end -->
            </div>
          </div>
        </section>
        <!--section end-->

        <!--section  -->
        <section data-scrollax-parent="true">
          <div class="container">
            <div class="section-title">
              <h2>Alur Pengaduan</h2>

              <span class="section-separator"></span>
              <p>Berikut alur pengaduan melalui sistem. Pengaduan mudah, cepat dan anti ribet</p>
            </div>
            <div class="process-wrap fl-wrap">
              <ul class="no-list-style">
                <li>
                  <div class="process-item">
                    <span class="process-count">01 </span>
                    <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                    <h4>Laporkan Masalah Anda</h4>
                    <p>Anda Dapat Melaporkan Masalah Apapun Pada Pihak Desa Mulai dari Pengaduan Layanan Masyarakat, Kritik, Saran dan Lainnya</p>
                  </div>
                  <span class="pr-dec"></span>
                </li>
                <li>
                  <div class="process-item">
                    <span class="process-count">02</span>
                    <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                    <h4> Pengaduan Anda Akan di Proses</h4>
                    <p>Pengaduan Anda Akan Di Proses Dengan Cepat Berdasarkan Aduan dan Data Yang Anda Berikan. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                  </div>
                  <span class="pr-dec"></span>
                </li>
                <li>
                  <div class="process-item">
                    <span class="process-count">03</span>
                    <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                    <h4>Pengaduan Selesai</h4>
                    <p>Setelah di Proses, Pengaduan Anda Akan di Upload Ke Dalam Aplikasi dan Anda Dapat Memantau Pengaduan Dengan Memasukkan Nomor HP.</p>
                  </div>
                </li>
              </ul>
              <div class="process-end"><i class="fal fa-check"></i></div>
            </div>
          </div>
          <div class="waveWrapper waveAnimation">

            <div class="waveWrapperInner bgMiddle">
              <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
              <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="section-title">
              <h2> Pengaduan Sudah Ditanggapi</h2>
              <span class="section-separator"></span>

            </div>
          </div>
          <div class="clearfix"></div>
          <div class="testimonilas-carousel-wrap fl-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
            <div class="testimonilas-carousel">
              <div class="swiper-container">
                <div class="swiper-wrapper">

                  <?php
                  $i = 0;
                  foreach ($max5 as $pengaduan) {

                  ?>
                    <!--testi-item-->
                    <div class="swiper-slide">
                      <div class="testi-item fl-wrap">
                        <div class="testi-avatar"><img src="<?php echo site_url(); ?>assets/umum/images/avatar/umum.webp" alt=""></div>
                        <div class="testimonilas-text fl-wrap" style="height: 300px;">

                          <p>"
                            <?php
                            $str = $pengaduan->uraian;
                            $arr = explode(" ", str_replace(",", ", ", $str));
                            for ($index = 0; $index < 20; $index++) {
                              echo $arr[$index] . " ";
                            }
                            echo " ...";
                            echo '"';

                            ?></p>
                          <?php
                          echo "<br> ";
                          $tanggal = $pengaduan->tanggal_pengaduan;
                          $bulan = array(
                            1 =>   'Januari',
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
                          $pecahkan = explode('-', $tanggal);
                          echo $newtanggal = $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                          ?>
                          </p>
                          <a href="#" class="testi-link" target="_blank"><?php echo $pengaduan->media_lapor; ?></a>
                          <div class="testimonilas-avatar fl-wrap">
                            <h3><?php echo $pengaduan->nama; ?></h3>
                            <h4><?php echo $pengaduan->Pekerjaan; ?></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--testi-item end-->
                  <?php
                  }
                  ?>

                </div>
              </div>
            </div>
            <div class="tc-pagination"></div>
          </div>
          <div class="waveWrapper waveAnimation">

            <div class="waveWrapperInner bgMiddle">
              <div class="wave-bg-anim waveMiddle" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
              <div class="wave-bg-anim waveBottom" style="background-image: url('<?php echo site_url(); ?>assets/umum/images/wave-top.png')"></div>
            </div>
          </div>
        </section>
        <!--section end-->
        <!--section  -->

        <!--section end-->
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
  <script>
    function bacaGambar(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#gambar_load').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
    }

    $("#preview_gambar").change(function() {
      bacaGambar(this);
    });
  </script>

</html>