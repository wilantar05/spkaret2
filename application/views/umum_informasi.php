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
                        <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                            <div class="bg bg_tabs" data-bg="<?php echo site_url(); ?>assets/umum/images/bg/hero/bg.jpg"></div>
                            <div class="overlay op7"></div>
                        </div>
                    </div>
                    <div class="container small-container">
                        <div class="intro-item fl-wrap">
                            <span class="section-separator"></span>
                            <div class="bubbles">
                                <h1>Cari Berita</h1>
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
                                        <div class="main-search-input-wrap fl-wrap" width="100%">
                                            <div class="main-search-input fl-wrap" width="100%">
                                                <div class="main-search-input-item" style="width: 100%;">
                                                    <label><i class="fal fa-keyboard"></i></label>
                                                    <input type="text" placeholder="Apa Yang Anda Ingin Ketahui" width="100%" value="" />
                                                </div>

                                                <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Cari <i class="far fa-search"></i></button>
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
                <!--  section  end-->
                <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
                    <div class="container">
                        <!-- list-main-wrap-header-->
                        <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
                            <!-- list-main-wrap-title-->
                            <div class="list-main-wrap-title">

                            </div>
                            <!-- list-main-wrap-title end-->
                            <!-- list-main-wrap-opt-->
                            <div class="list-main-wrap-opt">
                                <!-- price-opt-->
                                <div class="price-opt">
                                    <span class="price-opt-title">Sort by:</span>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Popularity" class="chosen-select no-search-select">
                                            <option>Popularity</option>
                                            <option>Average rating</option>
                                            <option>Price: low to high</option>
                                            <option>Price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- price-opt end-->
                                <!-- price-opt-->
                                <div class="grid-opt">
                                    <ul class="no-list-style">
                                        <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                        <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                    </ul>
                                </div>
                                <!-- price-opt end-->
                            </div>
                            <!-- list-main-wrap-opt end-->
                            <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- list-main-wrap-header end-->
                        <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i> Filters</div>
                        <div class="fl-wrap">

                            <!-- listing-item-container -->
                            <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">

                                <?php
                                $id_informasi = $this->uri->segment('2') + 1;
                                foreach ($user as $u) {
                                ?>
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"></i><span>Save</span></div>
                                                <a href="#" class="geodir-category-img-wrap fl-wrap">
                                                    <img src="<?php echo site_url(); ?>upload/artikel/<?php echo $u->foto ?>" alt="">
                                                </a>

                                                <div class="geodir-category-content fl-wrap title-sin_item">
                                                    <div class="geodir-category-content-title fl-wrap">
                                                        <div class="geodir-category-content-title-item">
                                                            <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $u->judul ?></a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                            <div class="geodir-category-location fl-wrap"><a href="#"> <?php
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
                                                                                                                        $pecahkan = explode('-', date('d F Y', strtotime($u->tanggal)));
                                                                                                                        $tanggal = $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                                                                                                                        ?><?php echo $tanggal; ?></a></div>
                                                        </div>
                                                    </div>
                                                    <div class="geodir-category-text fl-wrap">
                                                        <p class="small-text">
                                                            <?php
                                                            $str = $u->artikel;
                                                            $arr = explode(" ", str_replace(",", ", ", $str));
                                                            for ($index = 0; $index < 10; $index++) {
                                                                echo $arr[$index] . " ";
                                                            }

                                                            ?>
                                                        </p>

                                                    </div>
                                                    <div class="geodir-category-footer fl-wrap">
                                                        <a class="listing-item-category-wrap">

                                                            <span style="top: 0px;"><?php echo $u->nama_jenis_informasi; ?></span>
                                                        </a>
                                                        <div class="geodir-opt-list">
                                                            &nbsp; &nbsp;<a href="<?php echo site_url(); ?>artikel?id=<?php echo $u->id_informasi; ?>"><button type="button" class="btn  color2-bg" style="padding: 5px 20px 5px 20px;top: -15px;">Detail</button></a>
                                                        </div>
                                                    </div>

                                                </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->
                                <?php } ?>
                                <!-- listing-item  -->
                                <div>
                                    <?php
                                    echo $this->pagination->create_links();
                                    ?>
                                </div>
                                <!-- listing-item end -->

                            </div>
                            <!-- listing-item-container end -->
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