<?php
    require 'konfigurasi/database/koneksi.php';

    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($koneksi, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($koneksi, $password);


        $query    = "SELECT * FROM tb_user WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $hasil = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
        $rows = mysqli_num_rows($hasil);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            echo '<script language="javascript">';
            echo 'alert("Login berhasil, Selamat datang!");';
            echo 'window.location.href = "main/home.php";';
            echo '</script>';

        } else {
            echo '<script language="javascript">';
            echo 'alert("Login gagal, Silahkan cek kembali username atau password anda!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
    }



?>
<script src="../konfig-js/refresh-window.js"></script>
<script src="../konfigurasi/konfig-js/refresh-window.js"></script>