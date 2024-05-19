<?php
include_once 'koneksi.php';

$nama = $_POST ['nama'];
$email = $_POST ['email'];
$password = $_POST ['password'];

$insert = $koneksi->query("INSERT INTO pengguna 
(nama, email, password) 
values
('$nama', '$email', '$password')
");

if ($insert) {
    echo "inset Data Berhasil";
}else {
    echo "inset Data Gagal";
}

?>