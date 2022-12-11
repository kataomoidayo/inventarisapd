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
								<li class="breadcrumb-item active" aria-current="page">
									<a href="#">View data alat</a>
								</li>
							</ol>
						</h3>
					</div>
					<h2 class="page-title">Data alat</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Page body -->
	<div class="page-body px-3">
		<div class="container-xl">
			<div class="row row-cards">
				<div class="col-12">
					<div class="card">
						<div class="card-status-start bg-dark"></div>
						<div class="card-header row g-2 align-items-center">
							<div class="card-title d-flex justify-content-between">
								<div class="input-icon">
									<input type="text" class="form-control border border-dark" placeholder="Cari"
										name="table_search" name="keyword" id="input" style="width: 190px"
										onkeyup="searchTable()" />
									<span class="input-icon-addon">
										<!-- Download SVG icon from http://tabler-icons.io/i/search -->
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
											viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<circle cx="10" cy="10" r="7" />
											<line x1="21" y1="21" x2="15" y2="15" />
										</svg>
									</span>
								</div>
								<div class="pr-2">
									<a href="input-data-alat.php" class=" btn btn-teal" style="width: 90px;">
										<i class="fa fa-plus" style="margin: 2px;">&nbsp;</i>Tambah
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-xl-12">
									<div class="table-responsive">
										<table class="table card-table text-center table-nowrap" style="height: 400px;">
											<thead>
												<tr>
													<th>Kode</th>
													<th>Nama</th>
													<th>Lokasi</th>
													<th>Pemilik</th>
													<th>Jumlah</th>
													<th>Kedaluwarsa</th>
													<th>Merk</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<?php
														require '../konfigurasi/view-data/konfig-view-data-alat.php';
														?>

											</tbody>
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