<?php

require '../database/koneksi.php';

$get_kode_alat=$_GET['kode_alat'];

//-------------hapus gambar/file kode qr dan foto di DB dan di folder----------------
//path sesuaikan dengan tempat file disimpan
$path="../";

//biasa ngambil dri db pake primary key
$sql = mysqli_query($koneksi, "SELECT * FROM tb_alat WHERE kode_alat='$get_kode_alat'");
$row=mysqli_fetch_array($sql);

//path gabung sama $row['kode_qr'] (link tampat gambar yang ada di db)
$qr = $path.$row['kode_qr']; //qr
$file = $path.$row['foto_alat']; //fotonya

//file di cek kalau ada di folder
if(file_exists($qr)){
    unlink($qr);//ya di hapus 
}

if(file_exists($file)){
    
    unlink($file);
}



    //hapus data di tabel_db
    $query=mysqli_query($koneksi, "DELETE FROM tb_alat WHERE kode_alat='$get_kode_alat'");


if ($query==true)   {

    //jika data alat di hapus maka hapus data terkait di data peminjaman
    $get_kode_alat_tb_peminjaman=$_GET['kode_alat'];
    $db = "SELECT * FROM tb_peminjaman WHERE kode_alat='$get_kode_alat_tb_peminjaman'";
    $query2=mysqli_query($koneksi, "DELETE FROM tb_peminjaman WHERE kode_alat='$get_kode_alat'");
    echo '<script language="javascript">';
    echo 'alert("Data alat berhasil dihapus!");';
    echo 'window.location.href = "../../main/view-data-alat.php";';
    echo '</script>';
    
} else {
    
    echo '<script language="javascript">';
    echo 'alert("Data alat gagal dihapus :( ");';
    echo 'window.location.href = "../../main/view-data-alat.php";';
    echo '</script>';
}

?>