<!DOCTYPE html>
<html>
<head>
	<title>Edit tujuan</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>
 <?php $this->load->view('menu');?> <!--Include menu-->
 <div class="wrapper-konten">
	
	<div class="card">
  <h5 class="card-header">Edit tujuan</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action=" <?php echo base_url('tujuan/fungsiEdit_Tj') ?> " method="post">
		<table class="table table-striped">
			<tr>
				<td>Id tujuan</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="id_tujuan" value="<?php echo $queryDetailTj->id_tujuan ?>" readonly></td>
			</tr>
			<tr>
				<td>tujuan</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="tujuan" value="<?php echo $queryDetailTj->tujuan ?>"></td>
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
