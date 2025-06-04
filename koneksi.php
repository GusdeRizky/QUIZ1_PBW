<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "quiz1";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak terkoneksi");
} 
// else {
//     echo "Berhasil koneksi";
// }
