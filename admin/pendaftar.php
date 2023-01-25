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
                <h3>Data Pendaftaran Siswa</h3>
                <p class="text-subtitle text-muted">Halaman verifikasi data pendaftaran peserta didik baru</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pendaftar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Pendaftaran Calon Siswa
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Telepon</th>
                            <th>Tahun</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ambil = $koneksi->query("SELECT * FROM datasiswa"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $pecah['nama_lengkap']; ?></td>
                            <td><?= $pecah['jenis_kelamin']; ?></td>
                            <td><?= $pecah['telepon']; ?></td>
                            <td><?= date('Y', strtotime($pecah['tgl_daftar'])); ?></td>
                            <td>
                                <?php if($pecah['status_daftar'] =='Unverified') : ?>
                                <span class="badge bg-warning"><?= $pecah['status_daftar']; ?></span>
                                <?php elseif($pecah['status_daftar'] =='Diterima') : ?>
                                <span class="badge bg-success"><?= $pecah['status_daftar']; ?></span>
                                <?php elseif($pecah['status_daftar'] =='Ditolak') : ?>
                                <span class="badge bg-danger"><?= $pecah['status_daftar']; ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($pecah['status_daftar'] =='Unverified') : ?>
                                <form action="" method="post">
                                    <a href="index.php?halaman=detail-data&id=<?= $pecah['id']; ?>" class="btn btn-primary">Detail</a>
                                    <input type="hidden" name="id" value="<?= $pecah['id']; ?>">
                                    <button class="btn btn-success" name="diterima">✓</button>
                                    <button class="btn btn-danger" name="ditolak">x</button>
                                    <a href="index.php?halaman=hapus-data&id=<?= $pecah['id']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></a>
                                </form>
                                <?php 
                                    if(isset($_POST['diterima'])){
                                        $id = $_POST['id'];
                                        $koneksi->query("UPDATE datasiswa SET status_daftar='Diterima' WHERE id='$id'");

                                        echo "<script>location='index.php?halaman=pendaftar';</script>";
                                    } elseif(isset($_POST['ditolak'])){
                                        $id = $_POST['id'];
                                        $koneksi->query("UPDATE datasiswa SET status_daftar='Ditolak' WHERE id='$id'");

                                        echo "<script>location='index.php?halaman=pendaftar';</script>";
                                    }
                                ?>
                                <?php elseif($pecah['status_daftar'] =='Diterima' or 'Ditolak') : ?>
                                <form action="" method="post">
                                    <a href="index.php?halaman=detail-data&id=<?= $pecah['id']; ?>" class="btn btn-primary">Detail</a>
                                    <input type="hidden" name="id" value="<?= $pecah['id']; ?>">
                                    <button class="btn btn-light-secondary" name="batal">Batal</button>
                                    <a href="index.php?halaman=hapus-data&id=<?= $pecah['id']; ?>" class="btn btn-outline-danger"><i class="bi bi-trash3-fill"></i></a>
                                </form>
                                <?php 
                                    if(isset($_POST['batal'])){
                                        $id = $_POST['id'];
                                        $koneksi->query("UPDATE datasiswa SET status_daftar='Unverified' WHERE id='$id'");

                                        echo "<script>location='index.php?halaman=pendaftar';</script>";
                                    }
                                ?>
                                <?php endif; ?>
                                
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

<script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="../assets/js/pages/simple-datatables.js"></script>