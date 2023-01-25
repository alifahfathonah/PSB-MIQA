<?php 
    include 'admin/koneksi.php';
?>

<div class="page-heading">
        <h3>Dashboard Siswa</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Langkah Mendaftar Calon Siswa</h4>
                        </div>
                        <div class="card-body">
                            <ol>
                                <li class="mb-3">Klik menu "Pendaftaran"</li>
                                <li class="mb-3">Mulai mengisi formulir data siswa</li>
                                <li class="mb-3">Cetak kartu ujian</li>
                                <li class="mb-3">Bawa kartu ujian ke sekolah untuk syarat ujian seleksi</li>
                                <li class="mb-3">Tunggu hasil seleksi</li>
                                <li class="mb-3">Cetak kartu kelulusan dan melakukan tahap selanjutnya yang informasinya terdapat pada kartu atau dashboard siswa</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="stats-icon blue mb-2">
                            <i class="iconly-boldProfile"></i>
                        </div>
                        <?php 
                            // mendapatkan data dari session
                            $id = $_SESSION['siswa']['id'];
                            $ambil = $koneksi->query("SELECT * FROM user WHERE id ='$id'");
                            $pecah = $ambil->fetch_assoc();
                        ?>
                        <div class="ms-3 name">
                            <h5 class="font-bold"><?= $pecah['username']; ?></h5>
                            <h6 class="text-muted mb-0"><?= $pecah['email']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Status Pendaftaran</h4>
                </div>
                <?php 
                    // mendapatkan status pendaftaran
                    $id = $_SESSION['siswa']['id'];
                    $ambil = $koneksi->query("SELECT * FROM datasiswa WHERE id_user ='$id'");
                    $pecah = $ambil->fetch_assoc();
                ?>
                <div class="card-body">
                    <?php if($pecah['status_daftar'] == 'Unverified') : ?>
                    <div class="alert alert-light-warning color-warning text-center"><i class="bi bi-emoji-neutral-fill"></i> Menunggu Diverifikasi
                        </div>
                    <?php elseif($pecah['status_daftar'] == 'Diterima') : ?>
                    <div class="alert alert-light-success color-success text-center"><i class="bi bi-emoji-smile-fill"></i> Yayy Selamat Kamu Diterima !!!
                        </div>
                    <?php elseif($pecah['status_daftar'] == 'Ditolak') : ?>
                    <div class="alert alert-light-danger color-danger text-center"><i class="bi bi-emoji-frown-fill"></i> Maaf Kamu Belum Lolos Seleksi
                        </div>
                    <?php else : ?>
                    <div class="alert alert-light-info color-info text-center"><i class="bi bi-emoji-dizzy-fill"></i> Belum Mendaftar
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>