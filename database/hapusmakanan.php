<?php
require 'functionsmakanan.php';

$id = $_GET["id"];

if( hapus($id) > 0){
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'daftarmakanan.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Gagal Dihapus');
            document.location.href = 'daftarmakanan.php';
        </script>
    ";
}
?>