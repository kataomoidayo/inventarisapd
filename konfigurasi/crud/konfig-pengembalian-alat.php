<head>
    <link rel="stylesheet" href="../../dist/sweetalert2/dist/sweetalert2.min.css">
    <script src="../../dist/sweetalert2/dist/sweetalert2.min.js" media="screen"></script>
</head>

<?php

include '../database/koneksi.php';

$id_peminjaman = $_GET['id_peminjaman'];
$db = "SELECT * FROM tb_peminjaman WHERE id_peminjaman = '$id_peminjaman'";
$perintah = mysqli_query($koneksi, $db);
$data = mysqli_fetch_array($perintah);



$status_pinjaman = $data['status_pinjaman'];

//cek apakah status peminjaman saat ini adalah 'Selesai';
//jika benar, kode ini akan jalan

if ($status_pinjaman == 'Selesai') {
    
    echo '<script language="javascript">';
    echo 'alert("Status alat saat ini sedang tidak dipinjamkan!");';
    echo 'window.location.href = "../../main/view-data-peminjaman.php";';
    echo '</script>';
    
    //jika salah kode, yang ini yang akan jalan dan status pinjaman akan di update
        }else{
            $tanggal_kembali = date("Y-m-d H:i:s");
            $selesaikan = "UPDATE tb_peminjaman SET 
            status_pinjaman ='Selesai',
            tanggal_kembali = '$tanggal_kembali'
            WHERE id_peminjaman='$id_peminjaman'";
            
            $ubah_status = mysqli_query($koneksi, $selesaikan);
            if ($ubah_status==true) {


                echo '<script language="javascript">';
                echo 'alert("Alat berhasil dikembalikan");';
                echo 'window.location.href = "../../main/view-data-peminjaman.php";';
                echo '</script>';


                        $kode_alat = $data['kode_alat'];
                        $stok = "UPDATE tb_alat SET jumlah_alat = jumlah_alat + 1 WHERE  kode_alat = '$kode_alat'";
                        $update_stok = mysqli_query($koneksi,$stok );
                    }else{
                       echo '<script language="javascript">';
                       echo 'alert("Pengembalian alat gagal :(");';
                       echo 'window.location.href = "../../main/view-data-peminjaman.php";';
                       echo '</script>';
                    }
                }



?>