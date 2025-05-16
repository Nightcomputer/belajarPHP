<?php
require 'functionsmakanan.php';
//cek apakah tombol submit sudah ditekan atau belum

//Ambil data di URL
$id = $_GET["id"];

//query data makanan berdasarkan id
$mkn = query("SELECT * FROM datamakanan WHERE id='$id'")[0];

if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if ( ubah($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'daftarmakanan.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data Gagal Diubah');
                document.location.href = 'daftarmakanan.php';
            </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Makanan</title>
</head>
<body>
    <h1>MENU MAKANAN</h1>
    
    <form action="", method="POST">
        <input type="hidden" name="id" value= "<?= $mkn["id"]; ?>">
        <ul>
            <li>
                <label for="id_makanan">Id :</label>
                <input type="text" name="id_makanan" id="id_makanan" required 
                value = "<?= $mkn["id"]; ?>">
            </li>
            <li>
                <label for="nama_makanan">Nama :</label>
                <input type="text" name="nama_makanan" id="nama_makanan" required
                value = "<?= $mkn["nama"]; ?>">
            </li>
            <li>
                <label for="harga_makanan">Harga :</label>
                <input type="text" name="harga_makanan" id="harga_makanan" required
                value = "<?= $mkn["harga"]; ?>">
            </li>
            <li>
                <label for="stok_makanan">Stok :</label>
                <input type="text" name="stok_makanan" id="stok_makanan"required
                value = "<?= $mkn["stok"]; ?>">
            </li>
            <li>
                <label for="gambar_makanan">Gambar :</label>
                <input type="text" name="gambar_makanan" id="gambar_makanan"
                value = "<?= $mkn["img"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
</body>
</html>