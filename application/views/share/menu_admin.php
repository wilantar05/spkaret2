<!--Header Area Start-->
<?php echo $this->load->view('share/e', '', TRUE); ?>
<div class="user-profile-menu-wrap fl-wrap block_box">
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <h3>Main</h3>
        <ul class="no-list-style">
            <li><a href="<?php echo site_url(); ?>admin" class="user-profile-act"><i class="fal fa-home"></i>Beranda</a></li>
            <li><a href="<?php echo site_url(); ?>gejala"><i class="fal fa-book"></i>Data Gejala</a></li>
            <li><a href="<?php echo site_url(); ?>tambah_gejala"><i class="fal fa-plus"></i>Tambah Data Gejala</a></li>
            <li><a href="<?php echo site_url(); ?>penyakit"><i class="fal fa-book"></i>Data Penyakit</a></li>
            <li><a href="<?php echo site_url(); ?>tambah_penyakit"><i class="fal fa-plus"></i>Tambah Data Penyakit</a></li>
            <li><a href="<?php echo site_url(); ?>rules"><i class="fal fa-info"></i>Rules</a></li>
            <li><a href="<?php echo site_url(); ?>tambah_rules"><i class="fal fa-plus"></i>Tambah Rules</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->

    <!-- user-profile-menu end-->
    <a href="<?php echo site_url(); ?>logout" class="logout_btn color2-bg">Keluar <i class="fas fa-sign-out"></i></a>
</div>