<!DOCTYPE html>
<html>

<head>
	<title>Respon</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>

	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<?php $this->load->view('header'); ?> <!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Respon</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('respon/fungsiTambah_Rsp') ?>" method="post">
					<table class="table table-striped">

						<tr>
							<td>No Permohonan</td>
							<td>:</td>
							<td><select id="id_permohonan" class="form-select" name="id_permohonan" required>
									<option value="-">--Pilih No Permohonan--</option>
									<?php
									$count = 0;
									foreach ($queryAllKU as $row) {
										$count = $count + 1;

									?>
										<?php

										foreach ($queryAllPmh as $row1) {
											if ($row1->id_permohonan == $row->id_permohonan) {

										?>
												<option value="<?php echo $row1->id_permohonan ?>"><?php echo $row1->no_permohonan ?></option>
										<?php }
										}   ?>
									<?php } ?>
								</select> </td>
						</tr>

						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" required class="form-control" name="tgl_respon" value="<?php echo date('Y-m-d') ?>" readonly></td>
						</tr>

						<tr>
							<td>Status</td>
							<td>:</td>
							<td><select id="id_status" class="form-select" name="id_status" required>
									<option value="-">--Pilih Status--</option>
									<?php
									$count = 0;
									foreach ($queryAllSts as $row) {
										$count = $count + 1;

									?>
										<option value="<?php echo $row->id_status ?>"><?php echo $row->status ?></option>
									<?php } ?>
								</select> </td>
						</tr>

						<tr>
							<td>Keterangan</td>
							<td>:</td>
							<td><textarea placeholder="Isi keterangan jika status ditolak" rows="2" required class="form-control" name="keterangan_tolak"></textarea>
								<small style="color: red;"><i>Jika status diterima, isi dengan (-)</i></small>
							</td>
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
	<?php $this->load->view('footer'); ?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?> <!--Include javascript-->

</html>