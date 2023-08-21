<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Halaman Login</title>
	<?php $this->load->view('link'); ?>
	<!--Include link-->

</head>

<body class="s">



	<?php echo form_open("auth/cek_login"); ?>



	<div class="row wrapper-l">
		<div class="col-md-6 wrap-gambar">

			<p class="logo"><img src="<?php echo base_url() . 'assets/images/logo1.png' ?>" width="150" height="150"></p>
			<p class="text-logo">Badan Karantina Pertanian Lampung</p>

		</div>


		<div class="col-md-6">
			<div class="login-text">LAB ENTOMOLOGI <h4>Balai Karantina Pertanian Kelas I Bandar Lampung</h4>
			</div>


			<?php
			if (isset($_GET['pesan'])) {
				if ($_GET['pesan'] == "gagal") {
					echo '<div class="alert alert-danger text-alert" role="alert">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Username atau password salah!
                </div>';
				} else if ($_GET['pesan'] == "logout") {
					echo "Anda telah berhasil logout";
				}
			}
			?>
			<div class="input-group flex-nowrap mb-3 text-input">

				<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
				<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mb-3">
				<span class="input-group-text"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
				<input type="password" name="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
			</div>


			<button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
		</div>
	</div>








	<?php echo form_close(); ?>


</body>


<?php $this->load->view('javascriptnya'); ?>
<!--Include javascript-->

</html>