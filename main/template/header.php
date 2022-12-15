<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href="../dist/fontawesome-free/svgs/warehouse.svg">
	<title>
		Inventaris
	</title>
	<link rel="stylesheet" href="../dist/css/tabler.min.css?1668287865?<?php echo time(); ?>">
	<link rel="stylesheet" href="../dist/fontawesome-free/css/all.min.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="../dist/sweetalert2/dist/sweetalert2.min.css">
	<style>
		@import url("https://rsms.me/inter/inter.css");

		:root {
			--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont,
				San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}
	</style>
</head>

<body>
	<div class="page">
		<!-- Navbar -->
		<header class="navbar navbar-expand-md navbar-dark Navbar sticky-top d-print-none">
			<div class="container-xl">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
					aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
					<a href="home.php">INVENTARIS</a>
				</h1>
				<div class="navbar-nav flex-row order-md-last">
					<div class="nav-item dropdown">
						<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
							aria-label="Open user menu">
							<span class="avatar avatar-sm"><i class="fa-solid fa-user"></i></span>
							<div class="d-none d-xl-block ps-2">
								<div><?php echo $_SESSION['username'];?></div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
							<a href="../konfigurasi/konfig-login/konfig-logout.php" class="dropdown-item">Logout</a>
						</div>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="home.php">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
											viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="5 12 3 12 12 3 21 12 19 12" />
											<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
											<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
										</svg>
									</span>
									<span class="nav-link-title"> Home </span>
								</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
									data-bs-auto-close="outside" role="button" aria-expanded="false">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
											viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
											<line x1="12" y1="12" x2="20" y2="7.5" />
											<line x1="12" y1="12" x2="12" y2="21" />
											<line x1="12" y1="12" x2="4" y2="7.5" />
											<line x1="16" y1="5.25" x2="8" y2="9.75" />
										</svg>
									</span>
									<span class="nav-link-title"> Data </span>
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="view-data-alat.php">
										Data alat
									</a>
									<a class="dropdown-item" href="view-data-peminjaman.php">
										Data peminjaman
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown">
									<span class="nav-link-icon d-md-none d-lg-inline-block">
										<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
											viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
											stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none" />
											<polyline points="9 11 12 14 20 6" />
											<path
												d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
										</svg>
									</span>
									<span class="nav-link-title"> Input </span>
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="input-data-alat.php">
										Input data alat
									</a>
									<a class="dropdown-item" href="input-data-peminjaman.php">
										Input data peminjaman
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>