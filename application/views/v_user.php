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
			<h5 class="card-header">Data User</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<div class="row align-items-start">

				</div>
				<row>
					<div class="col-6"><a href="<?php echo base_url('user/halaman_tambah') ?>"><button class="btn btn-primary">Tambah Data</button></a></div>
				</row>




				<br>
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama</td>
							<td>Username</td>
							<!-- <td>Password</td> -->
							<td>Level</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tbody>
						<?php
						$count = 0;

						foreach ($queryAllUsr as $row) {
							$count = $count + 1;

						?>
							<tr>
								<td><?php echo $count ?></td>
								<td><?php echo $row->nama ?></td>
								<td><?php echo $row->username ?></td>
								<!-- <td><?php echo $row->password ?></td> -->
								<td><?php echo $row->level ?></td>
								<td><a href="<?php echo base_url('user/halaman_edit') ?>/<?php echo $row->id_user ?> "><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>

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
											window.location.href='user/fungsiDelete_usr/<?php echo $row->id_user ?>';
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