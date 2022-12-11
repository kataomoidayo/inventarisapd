<?php
include 'function.php';

echo "<br>";
     $tgl_kedaluwarsa = $data['kedaluwarsa'];
     $tgl_sekarang = date('d-m-Y');
     
     $lambat = kedaluwarsa($tgl_kedaluwarsa, $tgl_sekarang);
     
     if ($lambat > 0){
      echo "<font color = 'red' > <br> Barang Telah Kedaluwarsa : $lambat hari yang lalu </font>";
    }else{}  
?>