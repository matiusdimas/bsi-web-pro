<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukan Data</title>
</head>
<body>
    <h1>Masukan Identitas Anda</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <pre>
            Isikan Nama         : <input type="text" name="nama">
            Isikan No Telepon   : <input type="number" name="telp">
            Isikan Alamat       : <textarea name="alamat" cols="40" rows="5"></textarea>
            <td>
            <input type="submit" value="Tampil"><input type="reset" value="Batal">
            </td>
        </pre>
    </form>
    <?php 
        
        $nama=(isset($_POST['nama'])) ? $_POST['nama'] : "";
        $telp=(isset($_POST['telp'])) ? $_POST['telp'] : "";
        $alamat=(isset($_POST['alamat'])) ? $_POST['alamat'] : "";
        
        if(!empty($nama)){
            echo "Nama : $nama <br>";
        }
        if(!empty($telp)){
            echo "No Telepon : $telp <br>";
        }
        if(!empty($alamat)){
            echo "Alamat : $alamat";
        }
    ?>
</body>
</html>