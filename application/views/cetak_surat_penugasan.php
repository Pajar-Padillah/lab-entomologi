<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Penugasan Pengujian Sampel</title>
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

	<h2 class="judul-laporan">Surat Tugas</h2>

	<table>
		<td>
			<tr>
				<td>Nomor Permohonan: <?php echo $queryLihatTugas->no_permohonan ?></td>
			</tr>
			<tr>
				<td>Lampiran : -</td>
			</tr>
			<tr>
				<td>Hal : Permohonan Pengujian</td>
			</tr>
		</td>

		<br>

		<td>
			<tr>
				<td>Kepada Yth</td>
			</tr>
			<tr>
				<td><?php echo $queryLihatTugas->nama_analis ?></td>
			</tr>
			<tr>
				<td>Di Tempat</td>
			</tr>
		</td>

		<p>
			Dengan Hormat,

			Sehubungan dengan pelaksanaan pengawasan terhadap <?php echo $queryLihatTugas->sampel ?>, dengan ini kami mohon bantuan Saudara untuk dapat melakukan uji Lengkap sesuai dengan persyaratan mutu atau standar teknis terhadap produk dengan daftar dan jumlah sebagaimana terlampir.
			Hasil uji produk ini akan dijadikan sebagai salah satu bahan dalam rangka rekomendasi tindak lanjut hasil pengawasan. Dengan demikian, kami mengharapkan laporan hasil uji produk tersebut dapat kami terima pada kesempatan yang pertama dan dalam waktu yang tidak terlalu lama


		</p>

		<td>
			<tr>
				<td>Bandar Lampung, <?php echo date('d-m-Y'); ?></td>
			</tr>
			<tr>
				<td>SubKoor Substansi Karantina Tumbuhan</td>
			</tr>
			<br>
			<br>
			<br>
			<br>
			<tr>
				<td>Irsan Suhantoro,S.Si.,M.Si.,MP.</td>
			</tr>
		</td>





	</table>

</body>

</html>