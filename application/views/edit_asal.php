<!DOCTYPE html>
<html>
<head>
	<title>Edit asal</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>
 <?php $this->load->view('menu');?> <!--Include menu-->
 <div class="wrapper-konten">
	
	<div class="card">
  <h5 class="card-header">Edit asal</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action=" <?php echo base_url('asal/fungsiEdit_Asl') ?> " method="post">
		<table class="table table-striped">
			<tr>
				<td>Id asal</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="id_asal" value="<?php echo $queryDetailAsl->id_asal ?>" readonly></td>
			</tr>
			<tr>
				<td>asal</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="asal" value="<?php echo $queryDetailAsl->asal ?>"></td>
			</tr>
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
