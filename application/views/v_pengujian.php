<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Home</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body >

	
	<?php $this->load->view('menu');?> <!--Include menu-->
	<?php $this->load->view('header');?> <!--Include header-->
	
	
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
							<th class="th-sm">Hasil</td>
							<th class="th-sm">User</td>
							<th class="th-sm">Aksi</td>
						</tr>

					</thead>
					<tbody>
						<?php 
						$count=0;
						foreach ($queryAllUji as $row){
							$count = $count+1;

							?>
							<tr>
								<td><?php echo $count ?></td>
								
								
								<!-- Permohonan -->
								<?php 

								foreach ($queryAllPmh as $row1){
									if ($row1->id_permohonan ==$row->id_permohonan) {

										?>
										<td><?php echo $row1->no_permohonan ?></td>
								<?php }}   ?>


								<td><?php echo date('d F Y', strtotime($row->tgl_pengujian)) ?></td>
								<td><?php echo $row->hasil ?></td>
								
									<!-- User-->
									<?php 
								foreach ($queryAllUsr as $row5){
									if ($row5->id_user ==$row->id_user) {
											?>
											<td><?php echo $row5->nama ?></td>
									<?php } }?>

								<td>
								<a href="<?php echo base_url('pengujian/halaman_edit') ?>/<?php echo $row->id_pengujian ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  

		

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
												window.location.href='pengujian/fungsiDelete_Uji/<?php echo $row->id_pengujian?>';
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
					</tbody>


				</table>
				
			</div>
		</div>


	</div>
	<?php $this->load->view('footer');?> <!--Include footer-->
</body>

</script>
</html>
