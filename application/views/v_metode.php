<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman metode</title>
	<?php $this->load->view('link');?> <!--Include link-->
	
</head>
<body>
	<?php $this->load->view('menu');?> <!--Include menu-->
	<?php $this->load->view('header');?> <!--Include header-->
	<div class="wrapper-konten">
		<div class="card">
			<h5 class="card-header">Data metode</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<a href="<?php echo base_url('metode/halaman_tambah') ?>"><button class="btn btn-primary" >Tambah Data</button></a>
				<br>
				<br>
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
						<td>No</td>

						<td>metode</td>
						<td>Aksi</td>
					</tr>
					</thead>
					<tbody>
					<?php 
					$count=0;
					foreach ($queryAllMtd as $row){
						$count = $count+1;

						?>
						<tr>
							<td><?php echo $count ?></td>
							<td><?php echo $row->metode ?></td>
							<td><a href="<?php echo base_url('metode/halaman_edit') ?>/<?php echo $row->id_metode ?> "><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  

							<button type="button" class="btn btn-danger"  onclick="Swal.fire({
											title: 'Peringatan!!',
											text: 'Apakah anda yakin ingin menghapus data?',
											icon: 'warning',
											showCancelButton: true,
											confirmButtonColor: '#3085d6',
											cancelButtonColor: '#d33',
											confirmButtonText: 'Ya, Hapus!'
										}).then((result) => {
											if (result.isConfirmed) {
												window.location.href='metode/fungsiDelete_Mtd/<?php echo $row->id_metode?>';
												Swal.fire(
													'Dihapus!',
													'Data Berhasil Dihapus.',
													'success'
													)
											}
										})">
										<i class="fa fa-trash" aria-hidden="true"></i>
									</button></td>
						</tr>
					<?php } ?>
					
				</table>
			</div>
		</div>

		
	</div>
	<?php $this->load->view('footer');?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
