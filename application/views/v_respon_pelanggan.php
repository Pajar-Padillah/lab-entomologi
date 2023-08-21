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

				<br>
				<br>
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No</th>
							<th class="th-sm">No Permohonan</th>
							<th class="th-sm">Status</th>
							<th class="th-sm">Tgl Respon</th>

						</tr>

					</thead>
					<tbody>
						<?php
						$count = 0;
						foreach ($queryresponPlg as $row) {
							$count = $count + 1;

						?>
							<tr>
								<td><?php echo $count ?></td>
								<td><?php echo $row->no_permohonan ?></td>
								<!-- <td><?php echo $row->status ?></td> -->
								<?php if ($row->status == 'Ditolak') : ?>
									<td><a class="badge badge-danger" href="#status_tolak<?= $row->id_respon ?>" data-toggle="modal">
											<i class="fa fa-times"></i>
											Ditolak
										</a></td>
								<?php else : ?>
									<td>
										<span class="badge badge-success"><i class="fa fa-check"></i> Diterima</span>
									</td>
								<?php endif ?>
								<td><?php echo date('d F Y', strtotime($row->tgl_respon)) ?></td>
							</tr>
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