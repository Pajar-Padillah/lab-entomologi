<div class="wrapper-menu">

  <ul class="menu-sidebar">
    <!--Akses Menu Untuk ADMIN-->
    <?php if ($this->session->userdata('akses') == '1') : ?>


      <div class="data-user">
        <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
        <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
          <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Admin )'; ?></p>
        </i>&nbsp;
      </div>
      <li class="active isi-menu"><a href="<?php echo base_url() . 'home' ?>"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Dashboard</a></li>
      <li class="isi-menu"><a href="<?php echo base_url() . 'user' ?>"><i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;User</a></li>
      <ul class="menu-sidebar">
        <li><a> Manajemen Sampel</a>
          <ul class="child_menu">
            <li class="isi-menu"><a href="<?php echo base_url() . 'metode' ?>"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Jenis Metode</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'sampel' ?>"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Jenis Sampel</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'asal' ?>"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp;Asal</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'tujuan' ?>"><i class="fa fa-check fa-fw" aria-hidden="true"></i>&nbsp;Tujuan</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'status' ?>"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp;Status</a></li>
          </ul>
        </li>
        <li><a>Permohonan Sampel</a>
          <ul class="child_menu">
            <li class="isi-menu"><a href="<?php echo base_url() . 'permohonan' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Permohonan</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'kaji_ulang' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Kaji Ulang</a></li>
            <li class="isi-menu"><a href="<?php echo base_url() . 'respon' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Respon</a></li>

          </ul>
        </li>
        <li class="isi-menu"><a href="<?php echo base_url() . 'file' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Laporan Hasil Uji</a></li>
        <li class="isi-menu"> <a href="<?php echo base_url('laporan_pdf/pengujianAll') ?>"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp;Laporan</a></li>
        <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>

</div>

<!--Akses Menu Untuk Petugas-->
<?php elseif ($this->session->userdata('akses') == '2') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
      <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Petugas )'; ?></p>
    </i>&nbsp;
  </div>
  <li class="isi-menu"><a href="<?php echo base_url() . 'permohonan' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Daftar Permohonan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'kaji_ulang' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Kaji Ulang</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'respon' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Respon</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>


  <!--Akses Menu Untuk analis-->

<?php elseif ($this->session->userdata('akses') == '3') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
      <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Analis )'; ?></p>
    </i>&nbsp;
  </div>
  <li class="isi-menu"><a href="<?php echo base_url() . 'laporan_pdf/lihat_surat' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Penugasan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/daftarUjiAnalis' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Daftar Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/hasilUjiAnalis' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Selesai Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file/halaman_tambah' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Upload File</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file/verifikasiA' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Laporan Hasil Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>



  <!--Akses Menu Untuk Kepala Balai-->

<?php elseif ($this->session->userdata('akses') == '4') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Kepala Balai )'; ?></i>&nbsp;
  </div>
  <li class="isi-menu"> <a href="<?php echo base_url('laporan_pdf/pengujianAll') ?>"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp;Laporan Hasil Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>


  <!--Akses Menu Koordinator Tanaman-->

<?php elseif ($this->session->userdata('akses') == '5') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
      <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Koordinator Tanaman )'; ?></p>
    </i>&nbsp;
  </div>
  <li class="isi-menu"><a href="<?php echo base_url() . 'respon' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Daftar Permohonan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/halaman_tambah' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Penugasan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/daftarUjiAll' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Daftar Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/hasilUjiAll' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Selesai Uji</a></li>
  <li class="isi-menu"> <a href="<?php echo base_url('laporan_pdf/pengujianAll') ?>"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>&nbsp;Laporan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>

  <!--Akses Menu Untuk Tata Usaha-->

<?php elseif ($this->session->userdata('akses') == '6') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
      <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Kasubag Tata Usaha )'; ?></p>
    </i>&nbsp;
  </div>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Laporan Hasil Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file/belum_verifikasiAll' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Menunggu Verifikasi</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file/sudah_verifikasiAll' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Terverifikasi</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>


  <!--Akses Menu Untuk Pelanggan-->
<?php elseif ($this->session->userdata('akses') == '7') : ?>
  <div class="data-user">
    <img src="<?php echo base_url() . '/assets/images/logo2.png' ?>" class="avatar">
    <a href=""></a><i class="" aria-hidden="true"><span>Selamat Datang,</span>
      <p><?php echo $this->session->userdata('ses_username'); ?> <?php echo '( Pelanggan )'; ?></p>
    </i>&nbsp;
  </div>
  <li class="isi-menu"><a href="<?php echo base_url() . 'permohonan/halaman_tambah' ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Permohonan Pengujian</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'permohonan/permohonan_plg' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Daftar Permohonan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'respon/respon_plg' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Respon Permohonan</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'pengujian/hasilUjiPlg' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Selesai Uji</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'file/verifikasiP' ?>/<?php echo $this->session->userdata('ses_id'); ?>"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>&nbsp;Laporan Pengujian</a></li>
  <li class="isi-menu"><a href="<?php echo base_url() . 'auth/logout' ?>"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp;Sign Out</a></li>


<?php endif; ?>
</ul>
</div>