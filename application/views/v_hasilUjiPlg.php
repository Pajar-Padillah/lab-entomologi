<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Halaman Home</title>
	<?php $this->load->view('link'); ?>
	<!--Include link-->

</head>

<body>


	<?php $this->load->view('menu'); ?>
	<!--Include menu-->
	<?php $this->load->view('header'); ?>
	<!--Include header-->
	<div class="wrapper-konten">

		<div class="card">
			<h5 class="card-header">Data hasil pengujian</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>

				<!-- <a href="<?php echo base_url('pengujian/halaman_tambah') ?>"><button class="btn btn-primary" >Tambah Data</button></a> -->
				<br>
				<br>
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No</td>
							<th class="th-sm">No Permohonan</td>
							<th class="th-sm">Tgl Pengujian</td>

							<th class="th-sm">User</td>
							<th class="th-sm">Hasil</td>
							<th class="th-sm">Aksi</td>
						</tr>

					</thead>
					<tbody>
						<?php
						$count = 0;
						foreach ($queryHasilUji as $row) {
							$count = $count + 1;

						?>
							<tr>
								<td><?php echo $count ?></td>


								<!-- Permohonan -->
								<td><?php echo $row->no_permohonan ?></td>
								<td><?php echo date('d F Y', strtotime($row->tgl_pengujian)) ?></td>


								<!-- User-->
								<?php
								foreach ($queryAllUsr as $row5) {
									if ($row5->id_user == $row->id_user) {
								?>
										<td><?php echo $row5->nama ?></td>
								<?php }
								} ?>
								<td><?php echo $row->hasil ?></td>
								<td>


									<a href="<?php echo base_url('laporan_pdf/lihat_surat_plg') ?>/<?php echo $row->id_pengujian ?>" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a>
								</td>

							</tr>
						<?php } ?>
					</tbody>


				</table>

			</div>
		</div>


	</div>
	<?php $this->load->view('footer'); ?>
	<!--Include footer-->
</body>
<?php $this->load->view('javascriptnya'); ?>
<!--Include javascript-->

</html>