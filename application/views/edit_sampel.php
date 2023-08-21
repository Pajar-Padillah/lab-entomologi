<!DOCTYPE html>
<html>
<head>
	<title>Edit sampel</title>
	<?php $this->load->view('link');?> <!--Include link-->

</head>
<body>
 <?php $this->load->view('menu');?> <!--Include menu-->
 <div class="wrapper-konten">
	
	<div class="card">
  <h5 class="card-header">Edit sampel</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action=" <?php echo base_url('sampel/fungsiEdit_Smp') ?> " method="post">
		<table class="table table-striped">
			<tr>
				<td>Id sampel</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="id_sampel" value="<?php echo $queryDetailSmp->id_sampel ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $queryDetailSmp->nama ?>"></td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>:</td>
				<td><input type="text" class="form-control" name="jenis" value="<?php echo $queryDetailSmp->jenis ?>"></td>
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
