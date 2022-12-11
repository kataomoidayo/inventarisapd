<?php
require 'konfigurasi/konfig-login/konfig-login.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" href="dist/fontawesome-free/svgs/warehouse.svg">
  <title>Masuk</title>
  <!-- CSS files -->
  <link href="dist/css/tabler.min.css?1668287865" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
  </style>
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="card card-md">
        <div class="card-body">
          <h2 class="text-center mb-4 fw-bold">Login</h2>
          <form method="POST" autocomplete="off" novalidate>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control" placeholder="Username" name="username" autocomplete="off"
                required>
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                <span class="form-label-description">
                  <a href="login/lupa-password.php">Lupa password?</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off"
                  required>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
              </div>
              <div class="text-center text-muted mt-3 mb-3">
                Belum punya akun? <a href="login/registrasi.php">Daftar</a>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="dist/js/tabler.min.js?1668287865" defer></script>
  <script src="konfigurasi/konfig-js/refresh-window.js" defer></script>
</body>

</html>