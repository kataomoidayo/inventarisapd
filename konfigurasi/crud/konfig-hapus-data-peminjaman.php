<?php
require '../database/koneksi.php';


$id_peminjaman = $_GET['id_peminjaman'];
$db = "SELECT * FROM tb_peminjaman WHERE id_peminjaman = '$id_peminjaman'";
$perintah = mysqli_query($koneksi, $db);
$data = mysqli_fetch_array($perintah);


$status_pinjaman = $data['status_pinjaman'];

//cek status pinjaman
//jika belum selesai kode ini jalan dan mengembalikan stok 
    if ($status_pinjaman !== 'Selesai') {
       
        echo '<script language="javascript">';
        echo 'alert("Data peminjaman berhasil dihapus!");';
        echo 'window.location.href = "../../main/view-data-peminjaman.php";';
        echo '</script>';

        $kode_alat = $data['kode_alat'];
        $stok = "UPDATE tb_alat SET jumlah_alat = jumlah_alat + 1 WHERE  kode_alat = '$kode_alat'";
        $update_stok = mysqli_query($koneksi,$stok );


        $sql= "DELETE FROM tb_peminjaman WHERE id_peminjaman='$id_peminjaman'";
        $query=mysqli_query($koneksi,$sql);
        $data = mysqli_fetch_array($perintah);

        //jika sudah selesai kode ini jalan dan langsung menghapus
    }elseif($status_pinjaman == 'Selesai'){

        echo '<script language="javascript">';
        echo 'alert("Data peminjaman berhasil dihapus!");';
        echo 'window.location.href = "../../main/view-data-peminjaman.php";';
        echo '</script>';


        $sql= "DELETE FROM tb_peminjaman WHERE id_peminjaman='$id_peminjaman'";
        $query=mysqli_query($koneksi,$sql);
        $data = mysqli_fetch_array($perintah);

    }else {

        echo '<script language="javascript">';
        echo 'alert("Data peminjaman gagal dihapus :(");';
        echo 'window.location.href = "../../main/view-data-peminjaman.php";';
        echo '</script>';
	

        
}
        


?>