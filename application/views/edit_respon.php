<!DOCTYPE html>
<html>

<head>
	<title>Edit respon</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>
	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Edit Respon</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('respon/fungsiEdit_Rsp') ?> " method="post">
					<table class="table table-striped">
						<tr>
							<td>Id respon</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="id_respon" value="<?php echo $queryDetailRsp->id_respon ?>" readonly></td>
						</tr>

						<!-- Permohonan -->
						<tr>
							<td>No Permohonan</td>
							<td>:</td>

							<td>

								<select id="id_permohonan" class="form-control" name="id_permohonan" value="<?php echo $queryDetailRsp->no_permohonan ?>">


									<?php

									foreach ($queryAllPmh as $row) {
										if ($queryDetailRsp->id_permohonan == $row->id_permohonan) {

									?>

											<option value="<?php echo $row->id_permohonan ?>" selected><?php echo $row->no_permohonan ?></option>

										<?php } else {



										?>
											<option value="<?php echo $row->id_permohonan ?>"><?php echo $row->no_permohonan ?></option>
									<?php

										}
									} ?>

								</select>


							</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" class="form-control" name="tgl_respon" value="<?php echo $queryDetailRsp->tgl_respon ?>"></td>
						</tr>
						<!-- Status -->
						<tr>
							<td>Status</td>
							<td>:</td>

							<td><select id="id_status" class="form-control" name="id_status" value="<?php echo $queryDetailRsp->status ?>">

									<?php

									foreach ($queryAllSts as $row) {
										if ($queryDetailRsp->id_status == $row->id_status) {

									?>

											<option value="<?php echo $row->id_status ?>" selected><?php echo $row->status ?></option>

										<?php } else {

										?>
											<option value="<?php echo $row->id_status ?>"><?php echo $row->status ?></option>
									<?php

										}
									} ?>
								</select> </td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td><textarea placeholder="Isi keterangan jika status ditolak" rows="2" required class="form-control" name="keterangan_tolak"><?php echo ucfirst($queryDetailRsp->keterangan_tolak) ?></textarea>
								<small style="color: red;"><i>Jika status diterima, isi dengan (-)</i></small>
							</td>
						</tr>


						<tr>
							<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
					'Sukses!!',
					'Data Berhasil Diperbarui',
					'success'
					)">Ubah</button></td>
						</tr>
					</table>
					<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id'); ?>"></td>
				</form>
			</div>
		</div>

	</div>
	<?php $this->load->view('footer'); ?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?> <!--Include javascript-->

</html>