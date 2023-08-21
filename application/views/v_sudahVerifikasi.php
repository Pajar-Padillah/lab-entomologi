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
			<h5 class="card-header">Data File</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>

				<!-- <a href="<?php echo base_url('file/halaman_tambah') ?>"><button class="btn btn-primary" >Tambah Data</button></a> -->
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No</td>
							<th class="th-sm">Nama File</td>
								<!-- <th class="th-sm">File</td> -->
							<th class="th-sm">No Permohonan</td>
							<th class="th-sm">Analis</td>
							<th class="th-sm">Keterangan</td>
							<th class="th-sm">Aksi</td>
						</tr>

					</thead>
					<tbody>
						<?php
						$count = 0;
						foreach ($queryHasilVerifikasi as $row) {
							$count = $count + 1;

						?>
							<tr>
								<td><?php echo $count ?></td>

								<td><?php echo $row->nama_file ?></td>

								<!-- permohonan -->
								<td><?php echo $row->no_permohonan ?></td>

								<!-- analis -->
								<td><?php echo $row->nama ?></td>

								<!-- <td><?php echo $row->keterangan ?></td> -->
								<?php if ($row->keterangan == 'Ditolak') : ?>
									<td><a class="badge badge-danger" href="#status_tolak<?= $row->id_file ?>" data-toggle="modal">
											<i class="fa fa-times"></i>
											Ditolak
										</a></td>
								<?php elseif ($row->keterangan == 'Menunggu Verifikasi') : ?>
									<td>
										<span class="badge badge-warning"><i class="fa fa-clock-o"></i> Menunggu Verifikasi</span>
									</td>
								<?php else : ?>
									<td>
										<span class="badge badge-success"><i class="fa fa-check"></i> Disetujui</span>
									</td>
								<?php endif ?>
								<div class="modal fade" id="status_tolak<?= $row->id_file ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
															<?php if ($row->keterangan_tolak != '') : ?>
																<p><?= ucfirst($row->keterangan_tolak) ?></p>
															<?php else : ?>
																<p>-</p>
															<?php endif ?>
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

								<!-- akses analis -->
								<?php if ($this->session->userdata('akses') == '3') : ?>
									<td>


										<a href="<?php echo base_url('laporan_pdf/cetak_file') ?>/<?php echo $row->id_file ?>" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a>

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
													window.location.href='fungsiDelete_File/<?php echo $row->id_file ?>';
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

								<?php elseif ($this->session->userdata('akses') == '6') : ?>
									<td>
										<a href="<?php echo base_url('file/halaman_edit') ?>/<?php echo $row->id_file ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>



										<a href="<?php echo base_url('laporan_pdf/cetak_file') ?>/<?php echo $row->id_file ?>" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a>

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
													window.location.href='fungsiDelete_File/<?php echo $row->id_file ?>';
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

								<?php else : ?>
									<td>


										<a href="<?php echo base_url('laporan_pdf/cetak_file') ?>/<?php echo $row->id_file ?>" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a>

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