<!--Header Area Start-->
<?php echo $this->load->view('share/e', '', TRUE);
$id_bidang = $admin->id_bidang;
?>
<div class="user-profile-menu-wrap fl-wrap block_box">
    <!-- user-profile-menu-->
    <div class="user-profile-menu">
        <h3>Main</h3>
        <ul class="no-list-style">
            <li><a href="<?php echo site_url(); ?>kades ?>" class="user-profile-act"><i class="fal fa-home"></i>Beranda</a></li>
            <li><a href="<?php echo site_url(); ?>kades"><i class="fal fa-book"></i>Data Admin</a></li>
            <li><a href="<?php echo site_url(); ?>kades_tambah"><i class="fal fa-plus"></i> Tambah Admin</a></li>
            <li><a href="<?php echo site_url(); ?>"><i class="fal fa-book"></i>Laporan</a></li>
        </ul>
    </div>
    <!-- user-profile-menu end-->
    <?php
    $level = $this->session->userdata('level');
    $nama = $this->session->userdata('nama');
    if (($level) == 2) {
    ?>
        <!-- user-profile-menu-->
        <div class="user-profile-menu">
            <h3>Setting</h3>
            <ul class="no-list-style">
                <li><a href="<?php echo site_url(); ?>data_admin"><i class="fal fa-cog"></i> Admin </a></li>
                <li><a href="<?php echo site_url(); ?>jenis_pengaduan"> <i class="fal  fa-cog"></i> Jenis Pengaduan </a></li>
                <li><a href="<?php echo site_url(); ?>jenis_informasi"><i class="fal  fa-cog"></i> Jenis Informasi </a></li>
                <li><a href="<?php echo site_url(); ?>media_pelaporan"><i class="fal  fa-cog"></i> Media Pelaporan </a></li>
                <li><a href="<?php echo site_url(); ?>bidang"><i class="fal  fa-cog"></i> Bidang</a></li>
                <li><a href="dashboard-add-listing.html"><i class="fal fa-cog"></i> Konfigurasi</a></li>
            </ul>
        </div>

    <?php
    }
    ?>
    <!-- user-profile-menu end-->
    <a href="<?php echo site_url(); ?>logout" class="logout_btn color2-bg">Keluar <i class="fas fa-sign-out"></i></a>
</div>