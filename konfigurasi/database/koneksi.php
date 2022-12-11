<?php
date_default_timezone_set('Asia/Singapore');

$server = "localhost";
$user = "root";
$pass = "";
$database = "inventaris";

$koneksi = mysqli_connect($server, $user, $pass, $database);

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>