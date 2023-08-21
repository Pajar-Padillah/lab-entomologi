<!DOCTYPE html>
<html>
<head>
	<title>Edit pengujian</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>
 <?php $this->load->view('menu');?> <!--Include menu-->
 <div class="wrapper-konten">
	
	<div class="card">
  <h5 class="card-header">Edit pengujian</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action=" <?php echo base_url('pengujian/fungsiEdit_Uji') ?> " method="post">
	<table class="table table-striped">
		<tr>
			<td>Id Pengujian</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="id_pengujian" value="<?php echo $queryDetailUji->id_pengujian ?>" readonly></td>
		</tr>

			<!-- Permohonan -->
		<tr>
			<td>No Permohonan</td>
			<td>:</td>
		
			<td>

				<select id="id_permohonan" class="form-control" name="id_permohonan" value="<?php echo $queryDetailUji->no_permohonan ?>">
					
						
					<?php 
						
						foreach ($queryAllPmh as $row){
						if ($queryDetailUji->id_permohonan ==$row->id_permohonan ) {
				
					 ?>

						<option value="<?php echo $row->id_permohonan ?>" selected><?php echo $row->no_permohonan ?></option>

						<?php } else {



						?>
						<option value="<?php echo $row->id_permohonan ?>" ><?php echo $row->no_permohonan ?></option>
					<?php  					

						}}?>

					</select> 


				</td>
		</tr>
		

		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" class="form-control" name="tgl_pengujian" value="<?php echo $queryDetailUji->tgl_pengujian ?>"></td>
		</tr>

			<tr>
			<td>Hasil</td>
			<td>:</td>
			<td><input type="text" class="form-control" name="hasil" value="<?php echo $queryDetailUji->hasil ?>"></td>
		</tr>

		
		
		<td><input type="hidden" name="id_user" value="<?php echo $this->session->userdata('ses_id');?>"></td>


		<tr>
				<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
					'Sukses!!',
					'Data Berhasil Diperbarui',
					'success'
					)" >Ubah</button></td>
		</tr>
	</table>
	</form>
  </div>
</div>
	
</div>
<?php $this->load->view('footer');?> <!--Include footer-->
</body>
<?php $this->load->view('javascriptnya');?> <!--Include javascript-->
</html>
