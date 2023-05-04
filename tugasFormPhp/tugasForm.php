<html>
<head>
	<title>Form Php</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	
<form method="post" action="tugas06proses.php">
	<h1>Form Registrasi</h1>
	<table>
		<tr>
			<th>Isi Data Dibawah Ini : </th>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="iptNama" required></td>

		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea rows="5" cols="30" name="areaAlamat" style="resize:none;" required></textarea></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><input type="text" name="iptTempatLahir" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="iptTanggalLahir" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			
			<td>
				<input type="radio"  name="chk_gender" value="Laki-Laki" required>Laki-Laki
				<input type="radio" name="chk_gender" value="Perempuan" required>Perempuan
			</td>
			
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>
				<select id="jenjang" name="slc_jenjang" required>
					<option value="s1">S1</option>
					<option value="d3">D3</option>
					<option value="sma">SMA</option>
					<option value="smp">SMP</option>
					<option value="sd">SD</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<input class="submit" type="submit" value="Submit">
				<input class="reset" type="reset" value="Cancel">
			</td>
		</tr>
	</table>
	
</form>
</body>
</html>