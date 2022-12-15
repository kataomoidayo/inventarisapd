<?php
require '../session.php';

include 'template/header.php';

require '../konfigurasi/view-data/konfig-detail-data-alat.php';
?>

<div class="page-wrapper">
	<!-- Page header -->
	<div class="page-header d-print-none">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<div class="mb-1">
						<h3>
							<ol class="breadcrumb" aria-label="breadcrumbs" style="font-size:smaller">
								<li class="breadcrumb-item">
									<a href="home.php">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="view-data-alat.php">Data alat</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">
									<a href="#">Detail data alat</a>
								</li>
							</ol>
						</h3>
					</div>
					<h2 class="page-title">Detail data alat</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-body px-3">
		<div class="container-xl">
			<div class="row row-cards">
				<div class="col-12">
					<div class="card">
						<div class="card-status-start bg-dark"></div>
						<div class="card-header row g-2 align-items-center">
							<div class="card-title d-flex justify-content-between">
								<div class="pr-2">
									<!-- //download kode-qr -->
									<a href="<?php echo $data_alat['kode_qr'] ?>" class="btn btn-primary"
										download="<?php echo $data_alat['kode_alat'] ?>-<?php echo $data_alat['nama_alat'] ?>">
										<i class="fa fa-download" style="margin: 2px; ">&nbsp;</i>Simpan-QR
									</a>
								</div>
								<div class="pr-2">
									<!-- //print halaman ke pdf -->
									<a onclick="printContent('tabel-detail')" class="btn btn-dark">
										<i class="fa fa-file-pdf" style="margin: 2px;"></i>PDF
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-12">
									<div class="table-responsive" id="tabel-detail">
										<table class="table card-table">
											<!-- ambil datanya dari DB dan susun ke tabel vertikal -->
											<tr>
												<th>Kode Alat</th>
												<td>
													<?php echo $data_alat['kode_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Tanggal Input</th>
												<td>
													<?php echo $data_alat['tgl_input_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Nama Alat</th>
												<td>
													<?php echo $data_alat['nama_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Lokasi Alat</th>
												<td>
													<?php echo $data_alat['lokasi_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Pemilik Alat</th>
												<td>
													<?php echo $data_alat['pemilik_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Jumlah Alat</th>
												<td>
													<?php echo $data_alat['jumlah_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Tahun Produksi</th>
												<td>
													<?php echo $data_alat['th_produksi'] ?>
												</td>
											</tr>
											<tr>
												<th>Kedaluwarsa</th>
												<td>
													<?php echo $data_alat['kedaluwarsa'] ?>
												</td>
											</tr>
											<tr>
												<th>Safe Work Load</th>
												<td>
													<?php echo $data_alat['safe_work_load'] ?>
												</td>
											</tr>
											<tr>
												<th>Merk Alat</th>
												<td>
													<?php echo $data_alat['merk_alat'] ?>
												</td>
											</tr>
											<tr>
												<th>Sertifikasi</th>
												<td>
													<?php echo $data_alat['sertifikasi'] ?>
												</td>
											</tr>
											<tr>
												<th>Foto Alat</th>
												<td>
													<?php echo '<img src="' . $data_alat['foto_alat'] . '" alt="Foto Alat" style="width: 100%; max-width:350px; height:100%; max-height: 350px;"/>'?>
												</td>
											</tr>
											<tr>
												<th>Kode QR</th>
												<td>
													<?php echo '<img src="' . $data_alat['kode_qr'] . '" alt="Kode-QR" />'?>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
			include 'template/footer.php';
			?>