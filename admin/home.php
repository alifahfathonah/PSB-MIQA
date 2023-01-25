<?php 
    include 'koneksi.php';
?>

<div class="page-heading">
        <h3>Dashboard Utama</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldPaper-Fail"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Siswa Ditolak</h6>
                                    <h6 class="font-extrabold mb-0">
                                        <?php $ditolak = $koneksi->query("SELECT COUNT(id) FROM datasiswa WHERE status_daftar = 'Ditolak'"); ?>
                                        <?php $pecah = $ditolak->fetch_assoc(); ?>
                                        <?= $pecah['COUNT(id)']; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Siswa Diterima</h6>
                                    <h6 class="font-extrabold mb-0">
                                        <?php $ditolak = $koneksi->query("SELECT COUNT(id) FROM datasiswa WHERE status_daftar = 'Diterima'"); ?>
                                        <?php $pecah = $ditolak->fetch_assoc(); ?>
                                        <?= $pecah['COUNT(id)']; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldTime-Circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Belum Diverifikasi</h6>
                                    <h6 class="font-extrabold mb-0">
                                        <?php $ditolak = $koneksi->query("SELECT COUNT(id) FROM datasiswa WHERE status_daftar = 'Unverified'"); ?>
                                        <?php $pecah = $ditolak->fetch_assoc(); ?>
                                        <?= $pecah['COUNT(id)']; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldUser1"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Pengguna</h6>
                                    <h6 class="font-extrabold mb-0">
                                        <?php $ditolak = $koneksi->query("SELECT COUNT(id) FROM datasiswa"); ?>
                                        <?php $pecah = $ditolak->fetch_assoc(); ?>
                                        <?= $pecah['COUNT(id)']; ?>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Pendaftar Baru</h4>
                        </div>
                        <div class="card-content">
                            <!-- table striped -->
                            <div class="table-responsive">
                                <table class="table table-lg table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>NAMA LENKAP</th>
                                            <th>GENDER</th>
                                            <th>JARAK</th>
                                            <th>TANGGAL LAHIR</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $ambil = $koneksi->query("SELECT * FROM datasiswa ORDER BY tanggal_lahir DESC LIMIT 6"); ?>
                                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                        <tr>
                                            <td class="text-bold-500"><?= $pecah['nama_lengkap']; ?></td>
                                            <td><?= $pecah['jenis_kelamin']; ?></td>
                                            <td class="text-bold-500"><?= $pecah['jarak']; ?> KM</td>
                                            <td><?= date('d-m-Y', strtotime($pecah['tanggal_lahir'])); ?></td>
                                            <td>
                                                <?php if($pecah['status_daftar'] =='Unverified') : ?>
                                                <span class="badge bg-warning"><?= $pecah['status_daftar']; ?></span>
                                                <?php elseif($pecah['status_daftar'] =='Diterima') : ?>
                                                <span class="badge bg-success"><?= $pecah['status_daftar']; ?></span>
                                                <?php elseif($pecah['status_daftar'] =='Ditolak') : ?>
                                                <span class="badge bg-danger"><?= $pecah['status_daftar']; ?></span>
                                                <?php endif; ?>
                                            </td>
                                            
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon blue mb-2">
                            <i class="iconly-boldCalendar"></i>
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?php echo date('d F Y'); ?></h5>
                            <h6 class="text-muted mb-0"><?php echo date('l'); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Perbandingan Siswa</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>