<!DOCTYPE html>
<html>

<head>
	<title>kaji_ulang</title>
	<?php $this->load->view('link'); ?>
	<!--Include link-->

</head>

<body>

	<?php $this->load->view('menu'); ?>
	<!--Include menu-->
	<?php $this->load->view('header'); ?>
	<!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">kaji_ulang</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('kaji_ulang/fungsiTambah_KU') ?>" method="post">
					<table class="table table-striped">

						<tr>
							<td>No Permohonan</td>
							<td>:</td>
							<td><select id="id_permohonan" class="form-control" name="id_permohonan">
									<option value="-">--Pilih No Permohonan--</option>


									<?php
									$count = 0;
									foreach ($queryAllPmh as $row) {
										$count = $count + 1;

									?>

										<option value="<?php echo $row->id_permohonan ?>"><?php echo $row->no_permohonan ?></option>

									<?php } ?>
								</select> </td>
						</tr>


						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" class="form-control" name="tgl_kaji_ulang" value="<?php echo date('Y-m-d') ?>" readonly></td>
						</tr>

						<tr>
							<td>Lab</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="lab" value="Laboratorium Entomologi" readonly></td>
						</tr>
						<tr>
							<td>Kondisi</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="kondisi"></td>
						</tr>

						<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id'); ?>"></td>


						<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
						'Sukses!!',
						'Data Berhasil Ditambahkan',
						'success'
						)">Tambah</button></td>

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