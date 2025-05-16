<?php
//koneksi ke database
$kon = mysqli_connect("localhost", "root", "", "cafe");


function query($query){
    global $kon;
    $result = mysqli_query($kon, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $kon;
    $id = htmlspecialchars ($data["id_makanan"]);
    $nama = htmlspecialchars ($data["nama_makanan"]);
    $harga = htmlspecialchars ($data["harga_makanan"]);
    $stok = htmlspecialchars ($data["stok_makanan"]);
    $img = htmlspecialchars ($data["gambar_makanan"]);

    $query = "INSERT INTO datamakanan VALUES ('$id','$nama', '$harga', '$stok', '$img')";

    mysqli_query($kon, $query);

    return mysqli_affected_rows($kon);
}


function hapus($id){
    global $kon;
    mysqli_query ($kon, "DELETE FROM datamakanan WHERE id = '$id'");
    return mysqli_affected_rows($kon);
}


function ubah($data){
    global $kon;
    $id = htmlspecialchars ($data["id_makanan"]);
    $nama = htmlspecialchars ($data["nama_makanan"]);
    $harga = htmlspecialchars ($data["harga_makanan"]);
    $stok = htmlspecialchars ($data["stok_makanan"]);
    $img = htmlspecialchars ($data["gambar_makanan"]);


    $query="UPDATE datamakanan SET
                id = '$id',
                nama = '$nama',
                harga = '$harga',
                stok = $stok,
                img = '$img'
                WHERE id = '$id'
            ";

    mysqli_query($kon, $query);
    return mysqli_affected_rows($kon);
} 


?>


