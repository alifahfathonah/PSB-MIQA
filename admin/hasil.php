<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Hasil Seleksi Pendaftaran</h3>
                <p class="text-subtitle text-muted">Halaman siswa yang sudah lolos seleksi</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lolos</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Lolos Seleksi Pendaftaran
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Panggilan</th>
                            <th>Gender</th>
                            <th>Alamat</th>
                            <th>Jarak</th>
                            <th>Telepon</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ambil = $koneksi->query("SELECT * FROM datasiswa where status_daftar = 'Diterima'"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $pecah['nama_lengkap']; ?></td>
                            <td><?= $pecah['nama_panggilan']; ?></td>
                            <td><?= $pecah['jenis_kelamin']; ?></td>
                            <td><?= mb_strimwidth($pecah['alamat'], 0, 30, "..."); ?></td>
                            <td><?= $pecah['jarak']; ?> KM</td>
                            <td><?= $pecah['telepon']; ?></td>
                            <td><?= date('Y', strtotime($pecah['tgl_daftar'])); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary mt-3" href="index.php?halaman=excel"><i class="bi bi-printer-fill"></i>&nbsp; Eksport File</a>
            </div>
        </div>

    </section>
</div>

<script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="../assets/js/pages/simple-datatables.js"></script>