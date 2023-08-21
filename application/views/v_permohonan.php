<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Home</title>
	<?php $this->load->view('link'); ?> <!--Include link-->

</head>

<body>


	<?php $this->load->view('menu'); ?> <!--Include menu-->
	<?php $this->load->view('header'); ?> <!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Data Permohonan</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>

				<?php if ($this->session->userdata('akses') == '5') : ?>
				<?php else : ?>
					<a href="<?php echo base_url('permohonan/halaman_tambah_plg_analis') ?>"><button class="btn btn-primary">Tambah Data</button></a> | <a href="<?php echo base_url('permohonan/halaman_tambah') ?>"><button class="btn btn-danger">Hapus Seluruh Data</button></a>
				<?php endif; ?>

				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No</td>
							<th class="th-sm">No Permohonan</td>
							<th class="th-sm">Tgl Permohonan</td>
							<th class="th-sm">Sampel</td>
							<th class="th-sm">Jumlah</td>
							<th class="th-sm">Berat</td>
							<th class="th-sm">Asal</td>
							<th class="th-sm">Tujuan.</td>
							<th class="th-sm">Metode</td>
							<th class="th-sm">User</td>
								<?php if ($this->session->userdata('akses') == '5') : ?>
								<?php else : ?>
							<th class="th-sm">Aksi</td>
							<?php endif; ?>
						</tr>

					</thead>
					<tbody>
						<?php
						$count = 0;
						foreach ($queryAllPmh as $row) {
							$count = $count + 1;

						?>
							<tr>
								<td><?php echo $count ?></td>

								<td><?php echo $row->no_permohonan ?></td>
								<td><?php echo date('d F Y', strtotime($row->tgl_permohonan)) ?></td>

								<!-- jenis_sampel -->
								<?php

								foreach ($queryAllSmp as $row1) {
									if ($row1->id_sampel == $row->id_sampel) {

								?>
										<td><?php echo $row1->nama ?></td>
								<?php }
								}   ?>


								<td><?php echo $row->jumlah ?></td>
								<td><?php echo $row->berat ?></td>

								<!-- Asal -->
								<?php
								foreach ($queryAllAsl as $row2) {
									if ($row2->id_asal == $row->id_asal) {
								?>
										<td><?php echo $row2->asal ?></td>
								<?php }
								} ?>

								<!-- Tujuan -->
								<?php
								foreach ($queryAllTj as $row3) {
									if ($row3->id_tujuan == $row->id_tujuan) {
								?>
										<td><?php echo $row3->tujuan ?></td>
								<?php }
								} ?>

								<!-- Metode-->
								<?php
								foreach ($queryAllMtd as $row4) {
									if ($row4->id_metode == $row->id_metode) {
								?>
										<td><?php echo $row4->metode ?></td>
								<?php }
								} ?>

								<!-- User-->
								<?php
								foreach ($queryAllUsr as $row5) {
									if ($row5->id_user == $row->id_user) {
								?>
										<td><?php echo $row5->nama ?></td>
								<?php }
								} ?>


								<!-- tombol aksi -->
								<?php if ($this->session->userdata('akses') == '5') : ?>
								<?php else : ?>
									<td>
										<a href="<?php echo base_url('permohonan/halaman_edit') ?>/<?php echo $row->id_permohonan ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>



										<button type="button" class="btn btn-danger" onclick="Swal.fire({
											title: 'Peringatan!!',
											text: 'Apakah anda yakin ingin menghapus data?',
											icon: 'warning',
											showCancelButton: true,
											confirmButtonColor: '#3085d6',
											cancelButtonColor: '#d33',
											confirmButtonText: 'Ya, Hapus!'
										}).then((result) => {
											if (result.isConfirmed) {
												window.location.href='permohonan/fungsiDelete_Pmh/<?php echo $row->id_permohonan ?>';
												Swal.fire(
													'Dihapus!',
													'Data Berhasil Dihapus.',
													'success'
													)
											}
										})">
											<i class="fa fa-trash" aria-hidden="true"></i>
										</button>
									</td>
								<?php endif; ?>

							</tr>
						<?php } ?>
					</tbody>


				</table>

			</div>
		</div>


	</div>
	<?php $this->load->view('footer'); ?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?> <!--Include javascript-->

</html>