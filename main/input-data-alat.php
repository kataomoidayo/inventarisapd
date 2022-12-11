<?php
require '../session.php';

include 'template/header.php';

require '../konfigurasi/crud/konfig-input-data-alat.php';
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
								<li class="breadcrumb-item active" aria-current="page">
									<a href="#">Form input data alat</a>
								</li>
							</ol>
						</h3>
					</div>
					<h2 class="page-title">
						Input data alat
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
							<h4 class="card-title">Form input data alat</h4>
						</div>
						<div class="card-status-start bg-dark"></div>
						<div class="card-body">
							<div class="row">
								<div class="row">
									<div class="col-xl-12">
										<div class="form-group mb-3">
											<label for="kode_alat">Kode alat</label>
											<input type="text" class="form-control border border-dark" name="kode_alat"
												placeholder="Masukkan kode alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="tgl_input">Tanggal input</label>
											<input type="text" class="form-control border border-dark"
												name="tgl_input" placeholder="Masukkan tanggal input data"  value="<?php echo $auto_tgl;?>" readonly>
										</div>

										<div class="form-group mb-3">
											<label for="nama_alat">Nama alat</label>
											<input type="text" class="form-control border border-dark" name="nama_alat"
												placeholder="Masukkan nama alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="lokasi_alat">Lokasi alat</label>
											<input type="text" class="form-control border border-dark"
												name="lokasi_alat" placeholder="Masukkan lokasi alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="pemilik_alat">Pemilik alat</label>
											<input type="text" class="form-control border border-dark"
												name="pemilik_alat" placeholder="Masukkan nama pemilik alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="jumlah_alat">Jumlah alat</label>
											<input type="text" class="form-control border border-dark"
												name="jumlah_alat" placeholder="Masukkan jumlah alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="th_produksi">Tahun produksi</label>
											<input type="date" class="form-control border border-dark"
												name="th_produksi" placeholder="Masukkan tahun Pproduksi" required>
										</div>

										<div class="form-group mb-3">
											<label for="kedaluwarsa">Kedaluwarsa</label>
											<input type="date" class="form-control border border-dark"
												name="kedaluwarsa" placeholder="Masukkan tanggal kedaluwarsa alat"
												required>
										</div>

										<div class="form-group mb-3">
											<label for="safe_work_load">Safe work load</label>
											<input type="text" class="form-control border border-dark"
												name="safe_work_load" placeholder="Masukkan safe work load alat"
												required>
										</div>

										<div class="form-group mb-3">
											<label for="merk_alat">Merk alat</label>
											<input type="text" class="form-control border border-dark" name="merk_alat"
												placeholder="Masukkan merk alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="sertifikasi">Sertifikasi</label>
											<input type="text" class="form-control border border-dark"
												name="sertifikasi" placeholder="Masukkan sertifikasi alat" required>
										</div>

										<div class="form-group mb-3">
											<label for="foto_alat">Foto alat</label>
											<input type="file" class="form-control border border-dark"
												name="foto_alat" />
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-dark" name="submit"
								style="width: 80px;">Simpan</button>
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