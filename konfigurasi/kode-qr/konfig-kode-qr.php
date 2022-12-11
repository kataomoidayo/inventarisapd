<?php

require_once 'phpqrcode/qrlib.php';

// folder tempat gambar Kode QR disimpan
$path = "../hasil-kode-qr/";

// Jika folder tidak ada/tidak ketemu
if (!is_dir($path)) {
    // folder akan dibuat
    mkdir($path);
}
$file = $path . date('d-m-Y-H-i-s') . '.png';
$text = "";

// Input User
if (isset($_POST['submit'])) {
    //form kode alat
    if (isset($_POST['kode_alat'])) {
        $text .= "Kode Alat : " . $_POST['kode_alat'] . "\n";
    }

    // form nama alat
    if (isset($_POST['nama_alat'])) {
        $text .= "Nama Alat : " . $_POST['nama_alat'] . "\n";
    }
    //form lokasi alat
    if (isset($_POST['lokasi_alat'])) {
        $text .= "Lokasi Alat : " . $_POST['lokasi_alat'] . "\n";
    }
    // form pemilik alat
    if (isset($_POST['pemilik_alat'])) {
        $text .= "Pemilik Alat : " . $_POST['pemilik_alat'] . "\n";
    }
    //form jumlah alat
    if (isset($_POST['jumlah_alat'])) {
        $text .= "Jumlah Alat : " . $_POST['jumlah_alat'] . "\n";
    }
    // form tahun produksi
    if (isset($_POST['th_produksi'])) {
        $text .= "Tahun Produksi : " . $_POST['th_produksi'] . "\n";
    }
    //form kedaluwarsa
    if (isset($_POST['kedaluwarsa'])) {
        $text .= "Kedaluwarsa : " . $_POST['kedaluwarsa'] . "\n";
    }
    // form save work load
    if (isset($_POST['safe_work_load'])) {
        $text .= "Safe Work Load : " . $_POST['safe_work_load'] . "\n";
    }
    //form merk alat
    if (isset($_POST['merk_alat'])) {
        $text .= "Merk Alat : " . $_POST['merk_alat'] . "\n";
    }
    //form sertifikasi
    if (isset($_POST['sertifikasi'])) {
        $text .= "Sertifikasi : " . $_POST['sertifikasi'] . "\n";
    }

    // // buat Kode QR-nya
    QRcode::png($text, $file, 'H', 2, 2);
}
?>