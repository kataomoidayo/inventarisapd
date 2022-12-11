<?php

    if (isset($_GET['kode_alat'])) {
        $kode_alat = $_GET['kode_alat'];
    } else {
        die("Error. Tidak ada kode yang terpilih");
    }
    require '../konfigurasi/database/koneksi.php';
    $query = mysqli_query($koneksi, "SELECT * FROM tb_alat WHERE kode_alat='$kode_alat'");
    $data_alat = mysqli_fetch_array($query);


?>