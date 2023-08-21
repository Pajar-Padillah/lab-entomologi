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
			<h5 class="card-header">Data Respon</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<?php if ($this->session->userdata('akses') == '5') : ?>
				<?php else : ?>
					<a href="<?php echo base_url('respon/halaman_tambah') ?>"><button class="btn btn-primary">Tambah Data</button></a> | <a href="<?php echo base_url('respon/fungsiDelete_Rsp') ?>"><button class="btn btn-danger" id="btn-delete">Hapus Seluruh Data</button></a>
				<?php endif; ?>
				<br>
				<br>
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th><input type="checkbox" id="check-all"></th>
							<th class="th-sm">No</th>
							<th class="th-sm">No Permohonan</th>
							<th class="th-sm">Tgl Respon</th>
							<th class="th-sm">User</th>
							<th class="th-sm">Status</th>
							<!-- <th class="th-sm">Keterangan Ditolak</th> -->
							<?php if ($this->session->userdata('akses') == '5') : ?>
							<?php else : ?>
								<th class="th-sm">Aksi</td>
								<?php endif; ?>

						</tr>

					</thead>
					<tbody>
						<?php

						$count = 0;
						foreach ($queryAllRsp as $row) {
							$count = $count + 1;

						?>

							<tr>
								<td><input type='checkbox' class='check-item' name='id_respon[]' value='".$row->id_respon."'></td>
								<td><?php echo $count ?></td>


								<!-- Permohonan -->
								<?php

								foreach ($queryAllPmh as $row1) {
									if ($row1->id_permohonan == $row->id_permohonan) {

								?>
										<td><?php echo $row1->no_permohonan ?></td>
								<?php }
								}   ?>


								<td><?php echo date('d F Y', strtotime($row->tgl_respon)) ?></td>


								<!-- User-->
								<?php
								foreach ($queryAllUsr as $row5) {
									if ($row5->id_user == $row->id_user) {
								?>
										<td><?php echo $row5->nama ?></td>
								<?php }
								} ?>

								<!-- status -->
								<?php

								foreach ($queryAllSts as $row1) {
									if ($row1->id_status == $row->id_status) {

								?>
										<!-- <td><?php echo $row1->status ?></td> -->

										<?php if ($row1->status == 'Ditolak') : ?>
											<td><a class="badge badge-danger" href="#status_tolak<?= $row->id_respon ?>" data-toggle="modal">
													<i class="fa fa-times"></i>
													Ditolak
												</a></td>
										<?php else : ?>
											<td>
												<span class="badge badge-success"><i class="fa fa-check"></i> Diterima</span>
											</td>
										<?php endif ?>

										<div class="modal fade" id="status_tolak<?= $row->id_respon ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header  no-bd">
														<h5 class="modal-title">Keterangan Ditolak</h5>
														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group form-group-default">
																	<label><b>Alasan Ditolak</b> </label>
																	<p><?= ucfirst($row->keterangan_tolak) ?></p>
																</div>
															</div>
														</div>
													</div>
													<div class="modal-footer no-bd">
														<button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
													</div>
												</div>
											</div>
										</div>
								<?php }
								}   ?>

								<!-- <td><?php echo $row->keterangan_tolak ?></td> -->

								<!-- tombol aksi -->
								<?php if ($this->session->userdata('akses') == '5') : ?>
								<?php else : ?>
									<td>
										<a href="<?php echo base_url('respon/halaman_edit') ?>/<?php echo $row->id_respon ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>


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
												window.location.href='respon/fungsiDelete_Rsp/<?php echo $row->id_respon ?>';
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
<script>
	$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
		$("#check-all").click(function() { // Ketika user men-cek checkbox all
			if ($(this).is(":checked")) // Jika checkbox all diceklis
				$(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
			else // Jika checkbox all tidak diceklis
				$(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
		});

		// $("#btn-delete").click(function(){ // Ketika user mengklik tombol delete
		//   var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

		//   if(confirm) // Jika user mengklik tombol "Ok"
		//     $("#form-delete").submit(); // Submit form
		// });
	});
</script>

</html>