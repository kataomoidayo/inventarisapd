<head>
    <link rel="stylesheet" href="../dist/sweetalert2/dist/sweetalert2.min.css">
    <script src="../dist/sweetalert2/dist/sweetalert2.min.js" media="screen"></script>
</head>

<?php
require '../konfigurasi/database/koneksi.php';



$auto_tgl = date("Y-m-d H:i:s");



if (isset($_POST['submit'])) {
    $post_kode_alat = $_POST['kode_alat'];
    $post_tanggal_input = $_POST['tgl_input'];
    $post_nama_alat = $_POST['nama_alat'];
    $post_lokasi_alat = $_POST['lokasi_alat'];
    $post_pemilik_alat = $_POST['pemilik_alat'];
    $post_jumlah_alat = $_POST['jumlah_alat'];
    $post_th_produksi = $_POST['th_produksi'];
    $post_kedaluwarsa = $_POST['kedaluwarsa'];
    $post_safe_work_load = $_POST['safe_work_load'];
    $post_merk_alat = $_POST['merk_alat'];
    $post_sertifikasi = $_POST['sertifikasi'];
    
    //ambil data foto dari form
    $foto = $_FILES['foto_alat'] ['name'];
    $foto_tmp = $_FILES['foto_alat']['tmp_name'];

    //edit nama file dan set lokasi folder file
    $edit_nama = date('d-m-y-h-s-').$foto;
    $folder = "../foto-alat/" .$edit_nama;

    

    if (empty($post_kode_alat) ||
    empty($post_nama_alat) ||
    empty($post_lokasi_alat) ||
    empty($post_pemilik_alat) ||
    empty($post_jumlah_alat) ||
    empty($post_th_produksi) ||
    empty($post_kedaluwarsa) ||
    empty($post_safe_work_load) ||
    empty($post_merk_alat) ||
    empty($post_sertifikasi) ||
    empty($foto)) {
        
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon: 'warning',
            title: 'Perhatian!',
            text: 'Tidak boleh ada bagian data yang kosong!'
          })
        </script>
        ";
        

    } else {
        // cek primary key/kode alat, jika terduplikasi kode ini akan jalan
        $cek_primary = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_alat WHERE kode_alat='$post_kode_alat'"));
        if ($cek_primary > 0) {
           
            echo "
                <script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    title: 'Duplikasi kode terdeteksi!!',
                    text: 'Kode alat yang anda masukkan sudah terdaftar!'
                  })
                </script>
                ";

            //jika tidak terduplikasi kode ini akan jalan
        } else {

            //simpan foto di folder
            move_uploaded_file($foto_tmp, $folder);//simpan foto di folder
            
            // buat Kode QR-nya dan ambil gambar kode qr yang di hasilkan
            require_once '../konfigurasi/kode-qr/konfig-kode-qr.php';
            $post_kode_qr = $_POST = $file;

            $aman = "INSERT INTO tb_alat(
            kode_alat, 
            tgl_input_alat,
            nama_alat, 
            lokasi_alat, 
            pemilik_alat, 
            jumlah_alat, 
            th_produksi, 
            kedaluwarsa, 
            safe_work_load, 
            merk_alat, 
            sertifikasi, 
            foto_alat, 
            kode_qr
            ) VALUES (
                '$post_kode_alat',
                '$post_tanggal_input',
                '$post_nama_alat',
                '$post_lokasi_alat',
                '$post_pemilik_alat',
                '$post_jumlah_alat',
                '$post_th_produksi',
                '$post_kedaluwarsa',
                '$post_safe_work_load',
                '$post_merk_alat',
                '$post_sertifikasi',
                '$folder', 
                '$file')";

            $query = mysqli_query($koneksi, $aman);

            if ($query == true) {
                //ver menambahkan tanpa keteranagan icon, title, text ( )
                echo "
                <script type='text/javascript'>
                Swal.fire(
                    'Berhasil!',
                    'Data alat berhasil ditambahkan!',
                    'success'
                  )
                </script>
                ";
                
               

            } else {
                //ver menambahkan dengan keteranagan icon, title, text ({ })
                echo "
                <script type='text/javascript'>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Data alat gagal ditambahkan :('
                  })
                </script>
                ";
             
            }
        }
    }
}


?>