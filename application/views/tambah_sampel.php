<!DOCTYPE html>
<html>
<head>
	<title>Tambah sampel</title>
	<?php $this->load->view('link');?> <!--Include menu-->

</head>
<body>
	<?php $this->load->view('menu');?> <!--Include menu-->
	<?php $this->load->view('header');?> <!--Include header-->
	<div class="wrapper-konten">
		<div class="card">
			<h5 class="card-header">Tambah sampel</h5>
			<div class="card-body">
				<h5 class="card-title"></h5>
				<form action=" <?php echo base_url('sampel/fungsiTambah_Smp') ?>" method="post">
					<table class="table table-striped">

				<!-- <tr>
					<td>Id sampel</td>
					<td>:</td>
					<td><input type="text" name="id_sampel"></td>
				</tr> -->
				
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis</td>
					<td>:</td>
					<td><input type="text" class="form-control" name="jenis"></td>
				</tr>
				
				
				<td colspan="3"><button type="submit" class="btn btn-primary" onclick="Swal.fire(
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
