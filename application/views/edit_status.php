<!DOCTYPE html>
<html>

<head>
	<title>Edit Status</title>
	<?php $this->load->view('link'); ?>
	<!--Include link-->

</head>

<body>
	<?php $this->load->view('menu'); ?>
	<!--Include menu-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Edit Status</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('status/fungsiEdit_sts') ?> " method="post">
					<table class="table table-striped">
						<tr>
							<td>Id Status</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="id_status" value="<?php echo $queryDetailSts->id_status ?>" readonly></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="status" value="<?php echo $queryDetailSts->status ?>"></td>
						</tr>
						<tr>
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