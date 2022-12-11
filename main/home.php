<?php
require '../session.php';

include 'template/header.php';

include '../konfigurasi/view-data/konfig-jumlah-data-home.php'
?>

<div class="page-wrapper">
	<!-- Page header -->
	<div class="page-header d-print-none">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<div class="mb-1">
						<ol class="breadcrumb" aria-label="breadcrumbs" style="font-size:smaller">
							<li class="breadcrumb-item">
								<a href="home.php">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">
								<a href="#">Home</a>
							</li>
						</ol>
					</div>
					<h2 class="page-title">Home</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Page body -->
	<div class="page-body">
		<div class="container-xl">
			<div class="row row-deck row-cards">
				<div class="col-12">
					<div class="row row-cards">
						<div class="col-sm-6 col-lg-3">
							<div class="card card-sm">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<span class="bg-primary text-white avatar">
												<i class="fas fa-toolbox"></i>
											</span>
										</div>
										<div class="col">
											<div class="font-weight-medium">Data Alat</div>
											<div class="text-muted"><?php echo"$alat"?></div>
											<a href="view-data-alat.php" class="small-box-footer">Selengkapnya <i
													class="fas fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card card-sm">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<span class="bg-cyan text-white avatar">
												<i class="fas fa-upload"></i>
											</span>
										</div>
										<div class="col">
											<div class="font-weight-medium">Input Data Alat</div>
											<div class="text-muted">&nbsp;</div>
											<a href="input-data-alat.php" class="small-box-footer">Selengkapnya <i
													class="fas fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card card-sm">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<span class="bg-primary text-white avatar">
												<i class="fas fa-hand-holding-hand"></i>
											</span>
										</div>
										<div class="col">
											<div class="font-weight-medium">Data Peminjaman</div>
											<div class="text-muted"><?php echo"$peminjaman"?></div>
											<a href="view-data-peminjaman.php" class="small-box-footer">Selengkapnya <i
													class="fas fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="card card-sm">
								<div class="card-body">
									<div class="row align-items-center">
										<div class="col-auto">
											<span class="bg-cyan text-white avatar">
												<i class="fas fa-upload"></i>
											</span>
										</div>
										<div class="col">
											<div class="font-weight-medium">Input Data Peminjaman</div>
											<div class="text-muted">&nbsp;</div>
											<a href="input-data-peminjaman.php" class="small-box-footer">Selengkapnya <i
													class="fas fa-arrow-circle-right"></i></a>
										</div>
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