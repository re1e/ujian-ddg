<?php
$koneksi = new mysqli('localhost', 'root', '', 'ujian_ddg');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>