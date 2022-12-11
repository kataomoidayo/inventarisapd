<head>
    <link rel="stylesheet" href="../dist/sweetalert2/dist/sweetalert2.min.css">
    <script src="../dist/sweetalert2/dist/sweetalert2.min.js" media="screen"></script>
</head>

<?php

require '../konfigurasi/database/koneksi.php';


$get_kode_alat = $_GET['kode_alat'];
$perintah = "SELECT * FROM tb_alat WHERE kode_alat = '$get_kode_alat'";
$query = mysqli_query($koneksi, $perintah);
$data_alat = mysqli_fetch_array($query);

if (isset($_POST['submit'])) {
    $post_kode_alat = $_POST['kode_alat'];
    $post_nama_alat = $_POST['nama_alat'];
    $post_lokasi_alat = $_POST['lokasi_alat'];
    $post_pemilik_alat = $_POST['pemilik_alat'];
    $post_jumlah_alat = $_POST['jumlah_alat'];
    $post_th_produksi = $_POST['th_produksi'];
    $post_kedaluwarsa = $_POST['kedaluwarsa'];
    $post_safe_work_load = $_POST['safe_work_load'];
    $post_merk_alat = $_POST['merk_alat'];
    $post_sertifikasi = $_POST['sertifikasi'];
    $foto = $_FILES['foto_alat'] ['name'];
    $foto_tmp = $_FILES['foto_alat'] ['tmp_name'];
    $post_foto_lama = $_POST['foto_lama'];//foto lama
    
   

     //cek jika gambar di ubah/edit coding ini akan jalan
     if($foto != "") {
        //cek dan hapus foto lama
        if(file_exists($post_foto_lama)){
            
        unlink($post_foto_lama);
        }

        //cek dan hapus qr lama
        $qr_lama = $data_alat['kode_qr'];
        if(file_exists($qr_lama)){
            unlink($qr_lama);
        }
        
        
        //edit nama dan dimpsn foto baru ke folder
        $edit_nama = date('d-m-y-h-s-').$foto;
        $folder = "../foto-alat/" .$edit_nama;
        move_uploaded_file($foto_tmp, $folder); //memindah file gambar ke folder foto-alat

        
        // buat dan ambil gambar kode qr yang di hasilkan terus up ke DB
        require_once '../konfigurasi/kode-qr/konfig-kode-qr.php';
        $post_kode_qr = $_POST = $file;

        
        // jalankan query UPDATE 
        $edit_gambar  = "UPDATE tb_alat SET
        nama_alat = '$post_nama_alat',
        lokasi_alat = '$post_lokasi_alat',
        pemilik_alat = '$post_pemilik_alat',
        jumlah_alat = '$post_jumlah_alat',
        th_produksi = '$post_th_produksi',
        kedaluwarsa = '$post_kedaluwarsa',
        safe_work_load = '$post_safe_work_load',
        merk_alat = '$post_merk_alat',
        sertifikasi = '$post_sertifikasi',
        foto_alat = '$folder',
        kode_qr = '$post_kode_qr'
        WHERE kode_alat = '$post_kode_alat'";
        
        $iya = mysqli_query($koneksi, $edit_gambar);

        if ($iya==true) {


            echo "
            <script type='text/javascript'>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Data alat berhasil diedit!'
            }).then(function(){
                window.location.reload();
            })
            </script>
            ";
        
        } else {

            echo "
            <script type='text/javascript'>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: 'Data alat gagal diedit :('
              })
            </script>
            ";
        }
    
    

//kalau foto tidak di ubah kode ini dijalankan (tanpa mengupdate foto_alat di db)
} else {
    
     //cek dan hapus qr lama
        $qr_lama = $data_alat['kode_qr'];
        if(file_exists($qr_lama)){
            unlink($qr_lama);
        }

    // buat dan ambil gambar kode qr yang di hasilkan terus up ke DB
    require_once '../konfigurasi/kode-qr/konfig-kode-qr.php';
    $post_kode_qr = $_POST = $file;

    $ga_edit_gambar  = "UPDATE tb_alat SET
    nama_alat = '$post_nama_alat',
    lokasi_alat = '$post_lokasi_alat',
    pemilik_alat = '$post_pemilik_alat',
    jumlah_alat = '$post_jumlah_alat',
    th_produksi = '$post_th_produksi',
    kedaluwarsa = '$post_kedaluwarsa',
    safe_work_load = '$post_safe_work_load',
    merk_alat = '$post_merk_alat',
    sertifikasi = '$post_sertifikasi',
    kode_qr = '$post_kode_qr'
    WHERE kode_alat = '$post_kode_alat'";
    
    $kagak = mysqli_query($koneksi, $ga_edit_gambar);

    if ($kagak==true) {
        
        
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: 'Data alat berhasil diedit!'
        }).then(function(){
            window.location.reload();
        })
        </script>
        ";

    } else {

        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Data alat gagal diedit :('
        })
        </script>
        ";
    }
    }
} 

?>