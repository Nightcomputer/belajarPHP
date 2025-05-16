<?php
require 'functionsmakanan.php';

$makanan = query( "SELECT * FROM datamakanan" );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <title>Daftar Makanan</title>
</head>
<body>
    <h1>daftar makanan</h1>

    <a href ="tambahmakanan.php" class="btn btn-dark btn-md">Tambah Data Makanan</a>
    <br></br>

    <table border="2", cellpadding="15", cellspacing="0">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>harga</th>
            <th>stok</th>
            <th>img</th>
            <th>aksi</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach ($makanan as $row) : ?>
        <tr>
            <td><?= $row["id"];?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["harga"];?></td>
            <td><?= $row["stok"];?></td>
            <td><img src = "../img/<?= $row["img"]; ?>" width="50"></td>
            <td>
                <form action="ubahmakanan.php" method="GET" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <button type="submit" class="btn btn-success btn-sm" onclick="return confirm
                    ('Yakin ingin mengubah data?');">Ubah</button>
                </form> |
                <form action="hapusmakanan.php" method="GET" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                    ('Yakin ingin menghapus data?');">Hapus</button>
                </form>
            </td>
        </tr>
       
        <?php endforeach; ?>
        
    </table>
    
</body>
</html>