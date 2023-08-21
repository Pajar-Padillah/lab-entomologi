<!DOCTYPE html>
<html>

<head>
	<title>Tambah User</title>
	<?php $this->load->view('link'); ?>
	<!--Include menu-->

</head>

<body>
	<?php $this->load->view('menu'); ?>
	<!--Include menu-->
	<?php $this->load->view('header'); ?>
	<!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Tambah User</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('user/fungsiTambah_usr') ?>" method="post">
					<table class="table table-striped">

						<!-- 	<tr>
					<td>Id User</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="id_user"></td>
				</tr> -->

						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="nama"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="password"></td>
						</tr>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td><select id="level" class="form-select" name="level">
									<option value="">Pilih Level</option>
									<option value="Admin">Admin</option>
									<option value="Petugas">Petugas</option>
									<option value="Analis">Analis</option>
									<option value="Kepala Balai">Kepala Balai</option>
									<option value="Koordinator Tanaman">Koordinator Tanaman</option>
									<option value="Pelanggan">Pelanggan</option>
									<option value="Tata Usaha">Tata Usaha</option>
								</select> </td>
						</tr>
						<tr>
							<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
						'Sukses!!',
						'Data Berhasil Ditambahkan',
						'success'
						)">Tambah</button></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

	</div>
	<?php $this->load->view('footer'); ?>
	<!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?>
<!--Include javascript-->

</html>