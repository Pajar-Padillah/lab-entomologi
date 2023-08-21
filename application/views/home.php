<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Halaman Home</title>
  <!-- Bootstrap -->
  <?php $this->load->view('link');?> <!--Include link-->
</head>
<body>
  <?php $this->session->userdata('ses_username');?>
  <?php $this->session->userdata('ses_id');?>
  
  <div class="wrapper-home">
    <?php $this->load->view('menu');?> <!--Include menu-->
    <?php $this->load->view('header');?> <!--Include header-->


    <div class="wrapper-konten">
      <div class="row">

        <div class="col-md-4 ">
          <div class="card text-white bg-warning">
            <div class="card-header ">
              Permohonan
            </div>
            <div class="card-body ">
              <h5 class="card-title"><?php echo $queryCountPmh->jumlah_permohonan ?> Data</h5>
              
            </div>

          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card text-white bg-info">
            <div class="card-header">
              Pengujian
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $queryCountPg->jumlah_pengujian ?> Data</h5>
             

            </div>

          </div>
        </div>

        <div class="col-md-4 ">
          <div class="card text-white bg-success">
            <div class="card-header">
              Respon
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $queryCountRsp->jumlah_respon ?> Data</h5>
              

            </div>
            
          </div>
        </div>

      </div>

    </div>

    
  </div>
<?php $this->load->view('footer');?> <!--Include footer-->
</body>

<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
