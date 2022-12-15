<?php
require '../session.php';

include 'template/header.php';

require '../konfigurasi/crud/konfig-input-data-peminjaman.php';

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
                                    <a href="#">Input data peminjaman</a>
                                </li>
                            </ol>
                        </h3>
                    </div>
                    <h2 class="page-title">
                        Input data peminjaman
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
                            <h4 class="card-title">Form input data peminjaman</h4>
                        </div>
                        <div class="card-status-start bg-dark"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group mb-3">
                                            <label for="id_peminjaman">Id peminjaman</label>
                                            <input type="text" class="form-control border border-dark"
                                                name="id_peminjaman" value="<?php echo $newid;?>" readonly>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="nama_peminjam">Nama peminjam</label>
                                            <input type="text" class="form-control border border-dark"
                                                name="nama_peminjam" placeholder="Masukkan nama peminjam" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="kode_alat">Pilih alat</label>
                                            <select class="form-control border border-dark form-select" name="kode_alat"
                                                required>
                                                <option required>
                                                    --- kode alat / nama alat / lokasi alat / jumlah alat / pemilik alat / merk alat ---
                                                </option>

                                                <?php
                                                          $sql="SELECT * FROM tb_alat";
                                                          $query=mysqli_query($koneksi,$sql);
                                                          while ($data=mysqli_fetch_array($query)) 
                                                        {
                            
                                                        ?>
                                                <option value="<?php echo $data['kode_alat'] ?>">
                                                    <?php echo $data['kode_alat'] ?> /
                                                    <?php echo $data['nama_alat']?> /
                                                    <?php echo $data['lokasi_alat']?> /
                                                    <?php echo $data['jumlah_alat'] ?> /
                                                    <?php echo $data['pemilik_alat'] ?> /
                                                    <?php echo $data['merk_alat'] ?>


                                                </option>

                                                <?php
                                                            }
                                                        ?>
                                            </select>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="tanggal_peminjaman">Tanggal peminjaman</label>
                                            <input type="date" class="form-control border border-dark"
                                                name="tanggal_peminjaman" placeholder="Masukkan Tanggal Peminjaman"
                                                value="<?php echo $tgl_peminjaman;?>" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="nama_admin">Nama admin</label>
                                            <input type="text" class="form-control border border-dark" name="nama_admin"
                                                placeholder="Masukkan Nama Admin" value="<?php echo $_SESSION['username'] ?>"
                                                readonly required>
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