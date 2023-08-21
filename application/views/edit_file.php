<!DOCTYPE html>
<html>

<head>
	<title>Edit File</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>
	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Edit File</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('file/fungsiEdit_File') ?> " method="post" enctype="multipart/form-data">
					<table class="table table-striped">
						<tr>
							<td>Id file</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="id_file" value="<?php echo $queryDetailFile->id_file ?>" readonly></td>
						</tr>
						<tr>
							<td>Nama file</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="nama_file" value="<?php echo $queryDetailFile->nama_file ?>"></td>
						</tr>
						<tr>
						<tr>
							<td>File</td>
							<td>:</td>
							<td><input type="file" class="form-control" name="userfile">
								<p><?php echo $queryDetailFile->file ?></p>
							</td>

						</tr>

						<!-- permohonan -->
						<tr>
							<td>Permohonan</td>
							<td>:</td>

							<td>

								<select id="id_permohonan" class="form-control" name="id_permohonan" value="<?php echo $queryDetailFile->id_permohonan ?>">


									<?php

									foreach ($queryAllPmh as $row) {
										if ($queryDetailFile->id_permohonan == $row->id_permohonan) {

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





						<!-- 	analis
 -->
						<?php if ($this->session->userdata('akses') == '3') : ?>
							<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id'); ?>"></td>
							<tr>
								<td>Keterangan</td>
								<td>:</td>
								<td><input type="text" class="form-control" name="keterangan" value="<?php echo $queryDetailFile->keterangan ?>" readonly></td>
							</tr>

							<!-- tu -->
						<?php elseif ($this->session->userdata('akses') == '6') : ?>

							<td><input type="hidden" name="id_user" value="<?php echo $queryDetailFile->id_user ?>"></td>
							<tr>
								<td>Keterangan</td>
								<td>:</td>
								<td><select id="keterangan" class="form-select" name="keterangan" value="<?php echo $queryDetailFile->keterangan ?>">
										<option disabled selected value="">----Ubah Status Verifikasi----</option>
										<option value="<?php echo $queryDetailFile->keterangan ?>"><?php echo $queryDetailFile->keterangan ?></option>
										<option value="Disetujui">Disetujui</option>
										<option value="Ditolak">Ditolak</option>

									</select> </td>
							</tr>
							<tr>
								<td>Keterangan Ditolak</td>
								<td>:</td>
								<td><textarea rows="2" required class="form-control" name="keterangan_tolak" placeholder="Isi keterangan jika status ditolak"></textarea>
									<small style="color: red;"><i>Jika status diterima/menunggu verifikasi, isi dengan (-)</i></small>
								</td>
							</tr>
						<?php endif ?>



						<tr>
							<td colspan="3"><button type="submit" value="upload" class="btn btn-primary" onclick="Swal.fire(
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