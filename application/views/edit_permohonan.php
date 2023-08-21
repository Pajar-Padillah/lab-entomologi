<!DOCTYPE html>
<html>

<head>
	<title>Edit Permohonan</title>
	<?php $this->load->view('link'); ?> <!--Include link-->
	<style>
		.user {
			display: none;
		}
	</style>
</head>

<body>
	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Edit permohonan</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('permohonan/fungsiEdit_Pmh') ?> " method="post">
					<table class="table table-striped">
						<tr>
							<td>Id permohonan</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="id_permohonan" value="<?php echo $queryDetailPmh->id_permohonan ?>" readonly></td>
						</tr>
						<tr>
							<td>No permohonan</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="no_permohonan" value="<?php echo $queryDetailPmh->no_permohonan ?>"></td>
						</tr>
						<tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" class="form-control" name="tgl_permohonan" value="<?php echo $queryDetailPmh->tgl_permohonan ?>"></td>
						</tr>

						<!-- sampel -->
						<tr>
							<td>Sampel</td>
							<td>:</td>

							<td>

								<select id="id_sampel" class="form-control" name="id_sampel" value="<?php echo $queryDetailPmh->nama ?>">


									<?php

									foreach ($queryAllSmp as $row) {
										if ($queryDetailPmh->id_sampel == $row->id_sampel) {

									?>

											<option value="<?php echo $row->id_sampel ?>" selected><?php echo $row->nama ?></option>

										<?php } else {



										?>
											<option value="<?php echo $row->id_sampel ?>"><?php echo $row->nama ?></option>
									<?php

										}
									} ?>

								</select>




							</td>
						</tr>

						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="jumlah" value="<?php echo $queryDetailPmh->jumlah ?>"></td>
						</tr>
						<tr>
							<td>Berat</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="berat" value="<?php echo $queryDetailPmh->berat ?>"></td>
						</tr>

						<!-- Asal -->
						<tr>
							<td>Asal</td>
							<td>:</td>

							<td><select id="id_asal" class="form-control" name="id_asal" value="<?php echo $queryDetailPmh->id_asal ?>">

									<?php

									foreach ($queryAllAsl as $row) {
										if ($queryDetailPmh->id_asal == $row->id_asal) {

									?>

											<option value="<?php echo $row->id_asal ?>" selected><?php echo $row->asal ?></option>

										<?php } else {



										?>
											<option value="<?php echo $row->id_asal ?>"><?php echo $row->asal ?></option>
									<?php

										}
									} ?>
								</select> </td>
						</tr>


						<!-- Tujuan -->
						<tr>
							<td>Asal</td>
							<td>:</td>

							<td><select id="id_tujuan" class="form-control" name="id_tujuan" value="<?php echo $queryDetailPmh->id_tujuan ?>">

									<?php

									foreach ($queryAllTj as $row) {
										if ($queryDetailPmh->id_tujuan == $row->id_tujuan) {

									?>

											<option value="<?php echo $row->id_tujuan ?>" selected><?php echo $row->tujuan ?></option>

										<?php } else {



										?>
											<option value="<?php echo $row->id_tujuan ?>"><?php echo $row->tujuan ?></option>
									<?php

										}
									} ?>
								</select> </td>
						</tr>
						<!-- Metode -->
						<tr>
							<td>metode</td>
							<td>:</td>

							<td><select id="id_metode" class="form-control" name="id_metode" value="<?php echo $queryDetailPmh->id_metode ?>">
									<?php

									foreach ($queryAllMtd as $row) {
										if ($queryDetailPmh->id_metode == $row->id_metode) {

									?>

											<option value="<?php echo $row->id_metode ?>" selected><?php echo $row->metode ?></option>

										<?php } else {



										?>
											<option value="<?php echo $row->id_metode ?>"><?php echo $row->metode ?></option>
									<?php

										}
									} ?>
								</select> </td>


						</tr>

						<?php if ($this->session->userdata('akses') == '7') : ?>
							<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id'); ?>"></td>
						<?php else : ?>
							<tr class="user">
								<td>Pelanggan/Analis</td>
								<td>:</td>
								<td><select id="id_user" readonly class="form-select" name="id_user" value="<?php echo $queryDetailPmh->id_user ?>>
							<?php

							foreach ($queryAllUsr as $row) {
								if ($queryDetailPmh->id_user == $row->id_user) {
							?>
								<option value=" <?php echo $row->id_user ?>" selected><?php echo $row->level ?> | <?php echo $row->nama ?> </option>
									<?php } else {
									?>
										<option value="<?php echo $row->id_user ?>"><?php echo $row->level ?> | <?php echo $row->nama ?> </option>
								<?php
								}
							} ?>
									</select> </td>
							</tr> <?php endif; ?>
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
	<?php $this->load->view('footer'); ?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?> <!--Include javascript-->

</html>

<script type="text/javascript">
	$(document).ready(function() {
		$("#user").hide();
	});
</script>