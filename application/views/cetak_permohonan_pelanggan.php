<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Laporan </title>
	<style type="text/css">
		.border-tabel{
			border: 2px solid black;
			border-collapse: collapse;
			word-wrap: break-word;
			text-align: center;

		}

		.header-tabel{
			background-color: yellow;
		}

		.judul-laporan{
			text-align: center;
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

	<h2 class="judul-laporan">Data Permohonan</h2>
	
<table >
	<td>
		<tr>
			<td>Nomor: <?php echo $queryCetakPlg->no_permohonan ?></td>
		</tr>
		<tr>
			<td>Lampiran: -</td>
		</tr>
		<tr>
			<td>Hal 	: Permohonan Pengujian</td>
		</tr>
	</td>

	<br>

	<td>
		<tr>
			<td>Kepada Yth</td>
		</tr>
		<tr>
			<td>Kepala Lab</td>
		</tr>
		<tr>
			<td>Di Tempat</td>
		</tr>
	</td>

	<p>
		Dengan Hormat,

		Sehubungan dengan telah selesainya Draft Awal Pembuatan Permohonan Pengujian Sesuai dengan syarat yang tertulis pada Surat Perintah Kerja Nomor : <?php echo $queryCetakPlg->no_permohonan ?>, tanggal <?php echo $queryCetakPlg->tgl_permohonan ?>, 

		Saya, <?php echo $queryCetakPlg->nama ?> mengajukan Surat Permohonan Pengujian.

		Demikian Surat Permohonan Pengujian ini kami buat, atas perhatian dan kerjasamanya kami ucapkan terima kasih.

	</p>

	<td>
		<tr>
			<td>Bandar Lampung, <?php echo date('d-m-Y');?></td>
		</tr>
		<tr>
			<td>Yang Mengajukan</td>
		</tr>
		<br>
		<br>
		<tr>
			<td><?php echo $queryCetakPlg->nama ?></td>
		</tr>
	</td>





</table>		 

</body>

</html>

