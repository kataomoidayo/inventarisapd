<head>
    <link rel="stylesheet" href="../dist/sweetalert2/dist/sweetalert2.min.css">
    <script src="../dist/sweetalert2/dist/sweetalert2.min.js" media="screen"></script>
</head>

<?php
require '../konfigurasi/database/koneksi.php';

$tanggal_peminjaman = date('d-m-Y');
//id baru dengan tanggal+bulan+tahun(2digit)+detik waktu
$newid = date('dmyhms');

if (isset($_POST['submit'])) {
    $post_id_peminjaman = $_POST['id_peminjaman'];
    $post_nama_peminjam = $_POST['nama_peminjam'];
    $post_kode_alat = $_POST['kode_alat'];
    $post_tanggal_peminjaman = $_POST['tanggal_peminjaman'];
    $post_nama_admin = $_POST['nama_admin'];



    //itung-itungan jumlah alat sisa
    $sql = "SELECT jumlah_alat FROM tb_alat WHERE kode_alat='$post_kode_alat'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    $stok = $data['jumlah_alat'];
    $jumlah_baru = $stok - 1;



    if (empty($post_id_peminjaman) ||
    empty($post_nama_peminjam) ||
    empty($post_kode_alat) ||
    empty($post_tanggal_peminjaman) ||
    empty($post_nama_admin))    {
        
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon: 'warning',
            title: 'Perhatian!',
            text: 'Tidak boleh ada bagian data yang kosong!'
          })
        </script>
        ";
    
    
    }elseif($stok<=0)   {
        
        
        echo "
        <script type='text/javascript'>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Stok alat habis atau tidak mencukupi! :('
        }).then(function(){
                window.location.reload();
            })
        </script>
        ";
    
    }else   {
        
        $sql = "INSERT INTO tb_peminjaman(
            id_peminjaman,
            nama_peminjam, 
            kode_alat,
            tanggal_peminjaman,
            nama_admin,
            status_pinjaman) VALUES (
                '$post_id_peminjaman',
                '$post_nama_peminjam',
                '$post_kode_alat',
                '$post_tanggal_peminjaman',
                '$post_nama_admin',
                'Dipinjam')";
                
                $query=mysqli_query($koneksi,$sql);
                
                $sql2 = "UPDATE tb_alat SET jumlah_alat = '$jumlah_baru' WHERE kode_alat='$post_kode_alat'";
                $query2 = mysqli_query($koneksi,$sql2);
                
                if ($query==true)   {
                    
                    echo "
                    <script type='text/javascript'>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Data peminjaman berhasil ditambahkan!'
                    }).then(function(){
                        window.location.reload();
                    })
                    </script>
                    ";
                
                
                }else   {
                    echo "
                    <script type='text/javascript'>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Data peminjaman gagal ditambahkan :('
                    }).then(function(){
                window.location.reload();
            })
                    </script>
                    ";
                }
            }
        }
?>