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
      

    </div>

    
  </div>
<?php $this->load->view('footer');?> <!--Include footer-->
</body>

<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
