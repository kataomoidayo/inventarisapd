<?php

include '../konfigurasi/database/koneksi.php';

$data_alat="SELECT * FROM tb_alat";
$query=mysqli_query($koneksi, $data_alat);
$alat=mysqli_num_rows($query);

$data_peminjaman="SELECT * FROM tb_peminjaman";
$query=mysqli_query($koneksi, $data_peminjaman);
$peminjaman=mysqli_num_rows($query);

?>