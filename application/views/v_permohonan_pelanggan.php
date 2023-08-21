<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Permohonan</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>

	
	<?php $this->load->view('menu');?> <!--Include menu-->
	<?php $this->load->view('header');?> <!--Include header-->
	<div class="wrapper-konten">
		
		<div class="card">
			<h5 class="card-header">Data Permohonan</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				
				<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th class="th-sm">No</td>
							<th class="th-sm">No Permohonan</td>
							<th class="th-sm">Tgl Permohonan</td>
							<th class="th-sm">Aksi</td>
						</tr>

					</thead>
					<tbody>
						<?php 
						$count=0;
						foreach ($querypermohonanPlg as $row){
							$count = $count+1;

							?>
							<tr>
								<td><?php echo $count ?></td>
								
								<td><?php echo $row->no_permohonan ?></td>
								<td><?php echo date('d F Y', strtotime($row->tgl_permohonan)) ?></td>
								
								
								<td>
								<a href="<?php echo base_url('permohonan/halaman_edit') ?>/<?php echo $row->id_permohonan ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  

								

								<a href="<?php echo base_url('laporan_pdf/cetak_permohonan_plg') ?>/<?php echo $row->id_permohonan ?>" target="_blank"> <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button></a></td>

								
							</tr>
						<?php } ?>
					</tbody>


				</table>
				
			</div>
		</div>


	</div>
	<?php $this->load->view('footer');?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
