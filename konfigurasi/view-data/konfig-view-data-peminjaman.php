<?php
require '../konfigurasi/database/koneksi.php';

?>

<?php


$join = "SELECT * FROM tb_peminjaman JOIN tb_alat ON tb_peminjaman.kode_alat = tb_alat.kode_alat ORDER BY tanggal_peminjaman DESC";
$query = mysqli_query($koneksi, $join);
while ($data = mysqli_fetch_array($query)) {
    ?>

<tr>
	<td><?php echo $data['id_peminjaman'] ?></td>
	<td><?php echo $data['nama_peminjam'] ?></td>
	<td><?php echo $data['kode_alat'] ?></td>
	<td><?php echo $data['nama_alat'] ?></td>
	<td><?php echo $data['tanggal_peminjaman'] ?></td>
	<td><?php echo $data['tanggal_kembali'] ?></td>
	<td><?php echo $data['nama_admin'];?></td>
	<td><?php echo $data['status_pinjaman'];?></td>

	<!-- --------------------------------------------------------------------- -->
	<td>
		<a href="../konfigurasi/crud/konfig-pengembalian-alat.php?id_peminjaman=<?php echo $data['id_peminjaman']; ?>"
			class="btn btn-success btn-sm">
			<i class="fas fa-check" style="margin: 2px;">&nbsp;</i>Selesai

		</a>

		<a onclick="confirmation(event)" href="../konfigurasi/crud/konfig-hapus-data-peminjaman.php?id_peminjaman=<?php echo $data['id_peminjaman'];?>"
			class="btn btn-danger btn-sm">
			<i class="fas fa-trash-can" style="margin: 2px;">&nbsp;</i>Hapus
		</a>

		<a href="../konfigurasi/print/print-satuan-data-peminjaman-excel.php?id_peminjaman=<?php echo $data['id_peminjaman'];?>"
			class="btn btn-dark btn-sm">
			<i class="fas fa-file-excel" style="margin: 2px;">&nbsp;</i>Excel
		</a>

	</td>
</tr>


<?php
}
?>