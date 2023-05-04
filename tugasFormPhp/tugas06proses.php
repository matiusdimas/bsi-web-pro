<?php
$nama = $_POST['iptNama'];
$alamat = $_POST['areaAlamat'];
$tempatLahir = $_POST['iptTempatLahir'];
$tanggalLahir = $_POST['iptTanggalLahir'];
$gender = $_POST['chk_gender'];
$pendidikan = $_POST['slc_jenjang']
?>
<html>
<head>
	<title> Data Registrasi</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<table class="table2" style="border: 1px solid";>
		<tr>
			<td>Nama</td>
			<td><?= $nama ?> </td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?= $alamat ?> </td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><?= $tempatLahir ?> </td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?= $tanggalLahir ?> </td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?= $gender ?> </td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td><?= $pendidikan ?> </td>
		</tr>
			
	</table>
	<a class="submit" href="tugasForm.php">Kembali</a>
	
</body>
</html>