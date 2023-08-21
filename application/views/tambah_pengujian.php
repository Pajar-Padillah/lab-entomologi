<!DOCTYPE html>
<html>

<head>
	<title>pengujian</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>

	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<?php $this->load->view('header'); ?> <!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Penugasan Pengujian</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('pengujian/fungsiTambah_Uji') ?>" method="post">
					<table class="table table-striped">

						<tr>
							<td>No Permohonan</td>
							<td>:</td>
							<td><select id="id_permohonan" class="form-select" name="id_permohonan">
									<option value="-">--Pilih No Permohonan--</option>
									<?php
									$count = 0;
									foreach ($queryAllRsp as $row) {
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
							<td><input type="date" class="form-control" name="tgl_pengujian" value="<?php echo date('Y-m-d') ?>"></td>
						</tr>

						<tr>
							<td>Analis</td>
							<td>:</td>
							<td><select id="id_user" class="form-select" name="id_user">
									<option value="-">--Pilih Analis--</option>
									<?php
									$count = 0;
									foreach ($queryAllUsr as $row) {
										$count = $count + 1;



									?>
										<?php if ($row->level == "Analis") : ?>
											<option value="<?php echo $row->id_user ?>"><?php echo $row->nama ?></option>
										<?php endif ?>

									<?php } ?>
								</select> </td>
						</tr>

						<td><input type="hidden" class="form-control" name="hasil" value="Belum Diuji"></td>



						<!-- <td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id'); ?>"></td> -->

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