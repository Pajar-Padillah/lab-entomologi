<!DOCTYPE html>
<html>
<head>
	<title>Edit metode</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>
 <?php $this->load->view('menu');?> <!--Include menu-->
 <div class="wrapper-konten">
	
	<div class="card">
  <h5 class="card-header">Edit metode</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action=" <?php echo base_url('metode/fungsiEdit_Mtd') ?> " method="post">
		<table class="table table-striped">
			<tr>
				<td>Id metode</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="id_metode" value="<?php echo $queryDetailMtd->id_metode ?>" readonly></td>
			</tr>
			<tr>
				<td>metode</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="metode" value="<?php echo $queryDetailMtd->metode ?>"></td>
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
