<?php 
    include 'admin/koneksi.php'; 
    if(!isset($_SESSION['siswa'])){
        echo "<script>location='login_siswa.php'</script>";
        header("Location:login_siswa.php");
        exit();
    }
?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Status Pendaftaran Kamu</h3>
                <p class="text-subtitle text-muted">Hasil pendaftaran online yang kamu lakukan di madrasah ibtidaiyah qurrota a'yun </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index_siswa.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Status</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="col-12 col-md-12">
            <div class="card">
                <?php 
                    // mendapatkan status pendaftaran
                    $id = $_SESSION['siswa']['id'];
                    $ambil = $koneksi->query("SELECT * FROM datasiswa WHERE id_user ='$id'");
                    $pecah = $ambil->fetch_assoc();
                ?>
                <div class="card-body">
                    <?php if($pecah['status_daftar'] == 'Diterima') : ?>
                    <div class="alert alert-light-success color-success mb-5" style="font-size: 24px;"><i class="bi bi-check-circle color-primary"></i> Selamat <b> <?= strtoupper($pecah['nama_lengkap']); ?> </b> <span class="bg-success text-white mx-1"><b> &nbsp; LULUS &nbsp;</b></span>  Seleksi Sebagai Calon Peserta Didik Baru <b>MI QURROTA A'YUN NGLOROG</b>, Silahkan Ikuti Petunjuk Informasi Dibawah Untuk Tahap Selanjutnya.</div>
                    <?php 
                        // mendapatkan informasi kelulusan
                        $informasi = $koneksi->query("SELECT * FROM informasi");
                        $data = $informasi->fetch_assoc();
                    ?>
                    <div><?= $data['tahap_lulus']; ?></div>
                    <hr>
                    <center><button class="btn btn-success"><i class="bi bi-printer-fill"></i>&nbsp; Cetak Bukti</button></center>
                    
                    <?php elseif($pecah['status_daftar'] == 'Ditolak') : ?>
                    <div class="alert alert-light-danger color-danger" style="font-size: 24px;"><i class="bi bi-emoji-frown-fill color-primary"></i> Maaf <b> <?= strtoupper($pecah['nama_lengkap']); ?> </b> <span class="bg-danger text-white mx-1"><b> &nbsp; TIDAK LULUS &nbsp;</b></span>  Seleksi Sebagai Calon Peserta Didik Baru <b>MI QURROTA A'YUN NGLOROG</b>, Semoga Beruntung dan Sukses Selalu Kedepannya !</div>
                    
                    <?php elseif($pecah['status_daftar'] == 'Unverified') : ?>
                    <div class="alert alert-light-warning color-warning" style="font-size: 24px;"><i class="bi bi-clock"></i> Status <b> <?= strtoupper($pecah['nama_lengkap']); ?> </b>Saat Ini Masih <span class="bg-warning text-white mx-1"><b> &nbsp; UNVERIFIED &nbsp;</b></span> Dalam Seleksi Sebagai Calon Peserta Didik Baru <b>MI QURROTA A'YUN NGLOROG</b>, Mohon Menunggu Hasilnya Sesaat Lagi.</div>

                    <?php else : ?>
                    <div class="alert alert-light-info color-info" style="font-size: 24px;"><i class="bi bi-emoji-dizzy-fill"></i> Saat Ini Kamu <span class="bg-info text-white mx-1"><b> &nbsp; BELUM MENDAFTAR &nbsp;</b></span> Dalam Seleksi Sebagai Calon Peserta Didik Baru <b>MI QURROTA A'YUN NGLOROG</b>, Segera Isi Formulir Pada Menu Pendaftaran.</div>

                    <?php endif; ?>
                </div>
                
                
            </div>
        </div>
    </section>
</div>