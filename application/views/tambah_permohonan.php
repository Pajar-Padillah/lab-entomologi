<!DOCTYPE html>
<html>

<head>
	<title>permohonan</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>

	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<?php $this->load->view('header'); ?> <!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">permohonan</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('permohonan/fungsiTambah_Pmh') ?>" method="post">
					<table class="table table-striped">

						<?php

						$no_permohonan = $querycekNoTerbesar->NoTerbesar;

						// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
						// dan diubah ke integer dengan (int)
						$urutan = (int) substr($no_permohonan, 4, 3);

						// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
						$urutan++;

						// membentuk kode barang baru
						// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
						// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
						// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
						$huruf = "PER/";
						$no_permohonan = $huruf . sprintf("%03s", $urutan);

						?>

						<tr>
							<td>No permohonan</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="no_permohonan" value="<?php echo $no_permohonan ?>" readonly></td>
						</tr>




						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><input type="date" class="form-control" name="tgl_permohonan" value="<?php echo date('Y-m-d') ?>" readonly></td>
						</tr>

						<tr>
							<td>Sampel</td>
							<td>:</td>
							<td><select id="id_sampel" class="form-select" name="id_sampel">
									<option value="-">--Pilih Sampel--</option>
									<?php
									$count = 0;
									foreach ($queryAllSmp as $row) {
										$count = $count + 1;

									?>
										<option value="<?php echo $row->id_sampel ?>"><?php echo $row->nama ?></option>
									<?php } ?>
								</select> </td>
						</tr>

						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="jumlah"></td>
						</tr>

						<tr>
							<td>Berat</td>
							<td>:</td>
							<td><input type="text" class="form-control" name="berat"></td>
						</tr>


						<tr>
							<td>Asal</td>
							<td>:</td>
							<td><select id="id_asal" class="form-select" name="id_asal">
									<option value="-">--Pilih Asal--</option>
									<?php
									$count = 0;
									foreach ($queryAllAsl as $row) {
										$count = $count + 1;

									?>
										<option value="<?php echo $row->id_asal ?>"><?php echo $row->asal ?></option>
									<?php } ?>
								</select> </td>
						</tr>

						<tr>
							<td>Tujuan</td>
							<td>:</td>
							<td><select id="id_tujuan" class="form-select" name="id_tujuan">
									<option value="-">--Pilih Tujuan--</option>
									<?php
									$count = 0;
									foreach ($queryAllTj as $row) {
										$count = $count + 1;

									?>
										<option value="<?php echo $row->id_tujuan ?>"><?php echo $row->tujuan ?></option>
									<?php } ?>
								</select> </td>
						</tr>


						<tr>
							<td>Metode</td>
							<td>:</td>
							<td><select id="id_metode" class="form-select" name="id_metode">
									<option value="-">--Pilih Metode--</option>
									<?php
									$count = 0;
									foreach ($queryAllMtd as $row) {
										$count = $count + 1;

									?>
										<option value="<?php echo $row->id_metode ?>"><?php echo $row->metode ?></option>
									<?php } ?>
								</select> </td>
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