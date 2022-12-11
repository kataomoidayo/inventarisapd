<head>
    <link rel="stylesheet" href="../dist/sweetalert2/dist/sweetalert2.min.css">
    <script src="../dist/sweetalert2/dist/sweetalert2.min.js" media="screen"></script>
</head>

<?php
require '../konfigurasi/database/koneksi.php';

require '../konfigurasi/fungsi/function.php';

?>

<?php
$perintah = "SELECT * FROM tb_alat ORDER BY tgl_input_alat DESC";
$query = mysqli_query($koneksi, $perintah);
while ($data = mysqli_fetch_array($query)) {
?>

<tr>
	<td><?php echo $data['kode_alat'] ?></td>
	<td><?php echo $data['nama_alat'] ?></td>
	<td><?php echo $data['lokasi_alat'] ?></td>
	<td><?php echo $data['pemilik_alat'] ?></td>
	<td><?php echo $data['jumlah_alat'] ?></td>
	<td><?php echo $data['kedaluwarsa']; 
        echo "<br>";

        $tgl_kedaluwarsa = $data['kedaluwarsa'];
        $tgl_sekarang = date('d-m-Y');
     
        $kedaluwarsa = kedaluwarsa ($tgl_kedaluwarsa, $tgl_sekarang);
     
        if ($kedaluwarsa > 0)  {
			echo '<p style="color:red; font-size: 12px;"> <br> Barang Telah Kedaluwarsa : ' .$kedaluwarsa. ' hari yang lalu</p>';
          }  
          ?>
	</td>
	<td><?php echo $data['merk_alat'] ?></td>

	<!-- --------------------------------------------------------------------- -->
	<td>
		<a href="view-detail-data-alat.php?kode_alat=<?php echo $data['kode_alat'];?>" 
		class="btn btn-blue  btn-sm">
			<i class="fas fa-circle-info" style="margin: 2px;">&nbsp;</i>Detail

		</a>

		<a href="edit-data-alat.php?kode_alat=<?php echo $data['kode_alat']; ?>" 
		class="btn btn-yellow btn-sm">
			<i class="fas fa-pen-to-square" style="margin: 2px;">&nbsp;</i>Edit
      
		</a>

		<a onclick="confirmation(event)" href="../konfigurasi/crud/konfig-hapus-data-alat.php?kode_alat=<?php echo $data['kode_alat'];?>" 
		class="btn btn-danger btn-sm">
			<i class="fas fa-trash-can" style="margin: 2px;">&nbsp;</i>Hapus
		</a>

		<a href="../konfigurasi/print/print-satuan-data-alat-excel.php?kode_alat=<?php echo $data['kode_alat'];?>" 
		class="btn btn-dark btn-sm">
			<i class="fas fa-file-excel" style="margin: 2px;">&nbsp;</i>Excel
		</a>

	</td>
</tr>



<?php
}
?>