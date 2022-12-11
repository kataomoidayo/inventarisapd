<?php
require '../session.php';

include 'template/header.php';
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
									<a href="#">Edit data alat</a>
								</li>
							</ol>
						</h3>
					</div>
					<h2 class="page-title">
						Edit data alat
					</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Page body -->
	<div class="page-body px-3">
		<div class="container-xl">
			<div class="row row-cards">
				<div class="col-12">
					<form action="" method="post" class="card" enctype="multipart/form-data">
						<div class="card-header justify-content-center">
							<h4 class="card-title">Form edit data</h4>
						</div>
						<div class="card-status-start bg-success"></div>
						<div class="card-body">
							<div class="row">
								<div class="row">
									<div class="col-xl-12">
										<?php
											require '../konfigurasi/crud/konfig-edit-data-alat.php';
										?>
										<div class="form-group mb-3">
											<label for="kode_alat">Kode Alat</label>
											<input type="text" class="form-control border border-dark" name="kode_alat"
												value="<?php echo $data_alat['kode_alat'] ?>"
												placeholder="Masukkan Kode Alat" readonly>
										</div>

										<div class="form-group mb-3">
											<label for="nama_alat">Nama alat</label>
											<input type="text" class="form-control border border-dark" name="nama_alat"
												value="<?php echo $data_alat['nama_alat'] ?>"
												placeholder="Masukkan Nama Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="lokasi_alat">Lokasi alat</label>
											<input type="text" class="form-control border border-dark"
												name="lokasi_alat" value="<?php echo $data_alat['lokasi_alat'] ?>"
												placeholder="Masukkan Lokasi Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="pemilik_alat">Pemilik alat</label>
											<input type="text" class="form-control border border-dark"
												name="pemilik_alat" value="<?php echo $data_alat['pemilik_alat'] ?>"
												placeholder="Masukkan Nama Pemilik Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="jumlah_alat">Jumlah alat</label>
											<input type="text" class="form-control border border-dark"
												name="jumlah_alat" value="<?php echo $data_alat['jumlah_alat'] ?>"
												placeholder="Masukkan Jumlah Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="th_produksi">Tahun produksi</label>
											<input type="date" class="form-control border border-dark"
												name="th_produksi" value="<?php echo $data_alat['th_produksi'] ?>"
												placeholder="Masukkan Tahun Produksi" required>
										</div>

										<div class="form-group mb-3">
											<label for="kedaluwarsa">Kedaluwarsa</label>
											<input type="date" class="form-control border border-dark"
												name="kedaluwarsa" value="<?php echo $data_alat['kedaluwarsa'] ?>"
												placeholder="Masukkan Tanggal Kedaluwarsa Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="safe_work_load">Safe work load</label>
											<input type="text" class="form-control border border-dark"
												name="safe_work_load" value="<?php echo $data_alat['safe_work_load'] ?>"
												placeholder="Masukkan Safe Work Load Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="merk_alat">Merk alat</label>
											<input type="text" class="form-control border border-dark" name="merk_alat"
												value="<?php echo $data_alat['merk_alat'] ?>"
												placeholder="Masukkan Merk Alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="sertifikasi">Sertifikasi</label>
											<input type="text" class="form-control border border-dark"
												name="sertifikasi" value="<?php echo $data_alat['sertifikasi'] ?>"
												placeholder="Masukkan Sertifikasi Alat" required>
										</div>
										<div class="form-group mb-3">
											<label for="fotoalat">Foto alat</label>
											<input type="file" class="form-control border border-dark " id="fotoalat"
												name="foto_alat">
											<!-- untuk hapus foto lama jika edit/upload foto baru -->
											<input type="hidden" class="form-control border border-dark " id="fotolama"
												name="foto_lama" value="<?php echo $data_alat['foto_alat'] ?>">
											<!-- menampilkan foto lama/foto sebelum edit -->
											<div class="col-md-6 col-lg-3 mt-3">
												<div class="card">
													<div class="card-status-bottom bg-success"></div>
													<div class="card-body">
														<h3 class="card-title">Foto lama</h3>
														<?php echo '<img src="' . $data_alat['foto_alat'] . '"/>'?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-dark" name="submit"
								style="width: 80px;">Update</button>
							<button type="reset" class="btn btn-danger" name="cancel"
								style="width: 80px;">Batal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
	include 'template/footer.php';
	?>