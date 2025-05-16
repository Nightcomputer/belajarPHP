<?php
function salam(){
    return "Selamat Datang di Cafe Pojok Atas";
}

$Makanan = [
    [
        "img" => "abu bakar1.png",
        "nama" => "Nasi Goreng",
        "harga" => "10000",
        "stok" => "5"
    ],

    [
        "img" => "abu bakar1.png",
        "nama" => "mie goreng",
        "harga" => "10000",
        "stok" => "2"
    ],
];

$Minuman = [
    [
        "img" => "Bilal1.png",
        "nama" => "es teh",
        "harga" => "5000",
        "stok" => "10"
    ],

    [
        "img" => "Bilal1.png",
        "nama" => "es jeruk",
        "harga" => "5000",
        "stok" => "3"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>

    <!-- function -->
    <h1><?php echo salam(); ?></h1>

    <h1>MENU</h1>
    <h2>MAKANAN</h2>
    <?php foreach( $Makanan as $makanan ) : ?>
        <ul>
            <li>
                <img src= "Img/<?= $makanan["img"]; ?>">
            </li>
            <li>Nama : <?= $makanan["nama"]; ?></li>
            <li>Harga : <?= $makanan["harga"]; ?></li>
            <li>Sstok : <?= $makanan["stok"]; ?></li>

        </ul>
    <?php endforeach; ?>

    <h2>MINUMAN</h2>
    <?php foreach( $Minuman as $minuman ) : ?>
        <ul>
            <li> 
                <img src= "Img/<?php echo $minuman["img"]; ?>">
            </li>
            <li>Nama : <?= $minuman["nama"]; ?></li>
            <li>Harga : <?= $minuman["harga"]; ?></li>
            <li>Sstok : <?= $minuman["stok"]; ?></li>

        </ul>
    <?php endforeach; ?>
    
</body>
</html>