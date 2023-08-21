<!DOCTYPE html>
<html>
<head>
	<title>File</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>

<?php $this->load->view('menu');?> <!--Include menu-->
<?php $this->load->view('header');?> <!--Include header-->
	<div class="wrapper-konten">
	
	<div class="card">
	  <h5 class="card-header">File</h5>
	  <div class="card-body">
	    <h5 class="card-title"></h5>
		   <form action=" <?php echo base_url('file/fungsiTambah_File') ?>" method="post" enctype="multipart/form-data">
			<table class="table table-striped">

				
				<tr>
					<td>Nama File</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="nama_file" ></td>
				</tr>
				
				 <tr>
					<td> File</td>
					<td>:</td>
					<td><input type="file" class="form-control" name="userfile" size="20" ></td>
				</tr>	
					
				

				<tr>
							<td>No Permohonan</td>
							<td>:</td>
							<td><select id="id_permohonan" class="form-select" name="id_permohonan">
								<option value="-">--Pilih No Permohonan--</option>
								<?php 
								$count=0;
								foreach ($queryHasilUji as $row){
									$count = $count+1;



									?>

									<?php 

									foreach ($queryAllPmh as $row1){
										if ($row1->no_permohonan ==$row->no_permohonan) {

											?>
											<option value="<?php echo $row1->id_permohonan ?>"><?php echo $row1->no_permohonan ?></option>
											
										<?php }}   ?>
										
									<?php } ?>
								</select> </td>

							</tr>
				

					
				<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id');?>"></td>
				<tr>
					<td>Keterangan</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="keterangan" value="Menunggu Verifikasi" readonly></td>
				</tr>

				<td colspan="3"><button type="submit" class="btn btn-primary" value="upload" onclick="Swal.fire(
						'Sukses!!',
						'Data Berhasil Ditambahkan',
						'success'
				)" >Tambah</button></td>
				
			</table>

			 
		</form>
	  </div>
	</div>
	
</div>
<?php $this->load->view('footer');?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>

