<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan Pengujian</title>
	<style type="text/css">
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td{
		  text-align: left;
		   padding-top: 5px;
		  padding-bottom: 2px;
		  padding-left: 5px;
		  padding-right: 10px;
		}


		.judul-laporan{
			text-align: center;
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

	<h2 class="judul-laporan">Data Laporan Pengujian</h2>
	<br>
	<br>
	<br>
	<table style="width:100% " >
		<tr >
			<th>No</th>
			<th>No Permohonan</th>
			<th>Nama Pelanggan</th>
			<th>Tgl Pengujian</th>
			<th>Hasil</th>
			<th>User</th>

		</tr>

		<?php 
		$count=0;
		foreach ($queryAllUji as $row){
			$count = $count+1;

			?>
			<tr>
				<td><?php echo $count ?></td>
				<td><?php echo $row->no_permohonan ?></td>
				

		
					<!-- User-->
					<?php 
					foreach ($queryAllUsr as $row5){
						if ($row5->id_user ==$row->id_user) {
							?>
							<td><?php echo $row5->nama ?></td>
				<?php } }?>

				<td><?php echo $row->tgl_pengujian ?></td>
				<td><?php echo $row->hasil ?></td>
				<td><?php echo $row->nama_analis ?></td>

			<?php } ?>

			

		</tr>

</table>		 
</body>

</html>

