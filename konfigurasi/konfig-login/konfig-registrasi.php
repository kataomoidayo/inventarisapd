<?php
    require '../konfigurasi/database/koneksi.php';

if (isset($_REQUEST['username'])) {

    
    $username = stripslashes($_REQUEST['username']);

    $username = mysqli_real_escape_string($koneksi, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($koneksi, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($koneksi, $password);
    $tanggal_waktu = date("Y-m-d H:i:s");
    
    $query    = "INSERT into tb_user (username, email, password, tanggal_waktu)
                     VALUES ('$username', '$email' , '" . md5($password) . "', '$tanggal_waktu')";
    $hasil   = mysqli_query($koneksi, $query);

    if ($hasil) {
        
        echo '<script language="javascript">';
        echo 'alert("Registrasi berhasil, Silahkan login!");';
        echo 'window.location.href = "../index.php";';
        echo '</script>';

    } else {
        echo '<script language="javascript">';
        echo 'alert("Registrasi gagal!, Silahkan coba lagi!");';
        echo 'window.location.href = "registrasi.php";';
        echo '</script>';
    }
}

?>


<script src="../konfig-js/refresh-window.js"></script>
<script src="../konfigurasi/konfig-js/refresh-window.js"></script>

