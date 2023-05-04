<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h1>Pengelolaan Data Mahasiswa</h1>
<form action="tampilmahasiswa.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki
                <input type="radio" name="gender" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
                <select name="pekerjaan">
                    <option value="-Pilih-"></option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Lain-lain">Lain-lain</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td>
                <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
                <input type="checkbox" name="hobi2" value="Musik">Musik
                <input type="checkbox" name="hobi3" value="Jalan-Jalan">Jalan-Jalan
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Kirim">
                <input type="reset" value="Batal">
            </td>
        </tr>
    </table>
</form>
</body>
</html>