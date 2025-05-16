<?php
require 'functionsmakanan.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambah atau tidak
    if ( tambah($_POST) > 0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'daftarmakanan.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
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
    <title>Tambah Data Makanan</title>
</head>
<body>
    <h1>MENU MAKANAN</h1>
    
    <form action="", method="POST">
        <ul>
            <li>
                <label for="id_makanan">Id :</label>
                <input type="text" name="id_makanan" id="id_makanan" required>
            </li>
            <li>
                <label for="nama_makanan">Nama :</label>
                <input type="text" name="nama_makanan" id="nama_makanan" required>
            </li>
            <li>
                <label for="harga_makanan">Harga :</label>
                <input type="text" name="harga_makanan" id="harga_makanan" required>
            </li>
            <li>
                <label for="stok_makanan">Stok :</label>
                <input type="text" name="stok_makanan" id="stok_makanan"required>
            </li>
            <li>
                <label for="gambar_makanan">Gambar :</label>
                <input type="text" name="gambar_makanan" id="gambar_makanan">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
</body>
</html>