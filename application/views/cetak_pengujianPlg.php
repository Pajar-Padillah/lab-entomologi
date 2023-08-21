<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Laporan</title>
	<style type="text/css">
		.border-tabel {
			border: 2px solid black;
			border-collapse: collapse;
			word-wrap: break-word;
			text-align: center;

		}

		.header-tabel {
			background-color: yellow;
		}

		.judul-laporan {
			text-align: center;
			margin-bottom: 30px;
		}
	</style>
</head>

<body>

	<h2 class="judul-laporan">Surat Hasil Pengujian</h2>

	<table>
		<td>
			<tr>
				<td>Nomor Permohonan: <?php echo $queryLihatHasil->no_permohonan ?></td>
			</tr>
			<tr>
				<td>Lampiran : -</td>
			</tr>
			<tr>
				<td>Hal : Hasil Pengujian</td>
			</tr>
		</td>

		<br>

		<td>
			<tr>
				<td>Kepada Yth</td>
			</tr>
			<tr>
				<td>Saudara</td>
			</tr>
			<tr>
				<td>Di Tempat</td>
			</tr>
		</td>

		<p>
			Dengan Hormat,

			Sehubungan dengan pelaksanaan hasil pengujian terhadap sampel <?php echo $queryLihatHasil->sampel ?>, dengan ini kami menginformasikan bahwa hasil dari sampel tersebut yaitu <?php echo $queryLihatHasil->hasil ?>


		</p>

		<td>
			<tr>
				<td>Bandar Lampung, <?php echo date('d-m-Y'); ?></td>
			</tr>
			<tr>
				<td>Kasubag Tata Usaha</td>
			</tr>
			<br>
			<br>
			<tr>
				<td>Purwadi, SE.,MM.</td>
			</tr>
		</td>





	</table>

</body>

</html>