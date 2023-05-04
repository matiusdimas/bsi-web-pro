<?php 
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$pekerjaan = $_POST['pekerjaan'];
$hobi1 = $_POST['hobi1'];
$hobi2 = $_POST['hobi2'];
$hobi3 = $_POST['hobi3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            border:1px solid black;
            background-color: cyan;
        }
        td{
            border:1px solid black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td colspan="2" align="center">Data Mahasiswa</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?= $alamat; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= $gender; ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><?= $pekerjaan; ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?= "{$hobi1}, {$hobi2}, {$hobi3}" ?></td>
        </tr>
    </table>
    <a href="forminputmahasiswa.php">INPUT DATA LAGI</a>
</body>
</html>