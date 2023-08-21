<!DOCTYPE html>
<html>

<head>
	<title>Edit User</title>
	<?php $this->load->view('link'); ?>
	<!--Include link-->

</head>

<body>
	<?php $this->load->view('menu'); ?>
	<!--Include menu-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Edit User</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('user/fungsiEdit_usr') ?> " method="post">
					<table class="table table-striped">
						<tr>
							<td>Id User</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="id_user" value="<?php echo $queryDetailUsr->id_user ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="nama" value="<?php echo $queryDetailUsr->nama ?>"></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="username" value="<?php echo $queryDetailUsr->username ?>"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="password"></td>
						</tr>
						<tr>
							<td>Level</td>
							<td>:</td>
							<td><select id="level" class="form-control" name="level" value="<?php echo $queryDetailUsr->level ?>">
									<option value="<?php echo $queryDetailUsr->level ?>"><?php echo $queryDetailUsr->level ?></option>
									<option disabled>----Ubah Role----</option>
									<option value="Admin">Admin</option>
									<option value="Petugas">Petugas</option>
									<option value="Analis">Analis</option>
									<option value="Kepala Balai">Kepala Balai</option>
									<option value="Koordinator Tanaman">Koordinator Tanaman</option>
									<option value="Pelanggan">Pelanggan</option>
									<option value="Tata Usaha">Tata Usaha</option>
								</select> </td>
						</tr>
						<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
					'Sukses!!',
					'Data Berhasil Diperbarui',
					'success'
					)">Ubah</button></td>
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