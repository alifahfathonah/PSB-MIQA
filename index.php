<?php 
    include 'admin/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB - MI Qurrota A'yun</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #E76D19;">
        <div class="container-md">
            <a class="navbar-brand" href="index.php">PSB MIQA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                <a class="nav-link" aria-current="page" href="#alur">ALUR</a>
                </li>
                <li class="nav-item mx-4">
                <a class="nav-link" href="#informasi">INFO</a>
                </li>
                <li class="nav-item mx-4">
                <a class="nav-link" href="#syarat">SYARAT</a>
                </li>
                <li class="nav-item mx-4">
                <a class="nav-link" href="#kontak">KONTAK</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <?php
            $ambil = $koneksi->query("SELECT * FROM informasi");
            $pecah = $ambil->fetch_assoc();
            // echo "<<pre>";
            //     print_r($pecah);
            // echo "</pre>";
        ?>

            <!-- Header -->
    <header class="text-center" id="header">
        <h1>Selamat Datang di PSB Online
            <br>
            MI Qurrota A'yun Nglorog
        </h1>
        <p class="mt-3">
            <?= $pecah['periode']; ?>
        </p>

        <?php if($pecah['status_ppdb'] == 'Buka') : ?>
        <a href="login_siswa.php" target="_blank" class="btn btn-secondary mx-4 mt-4">
            Login
        </a>
        <a href="daftar_siswa.php" target="_blank" class="btn btn-get-started mx-4 mt-4">
            Daftar
        </a>

        <?php elseif($pecah['status_ppdb'] == 'Tutup') : ?>
        <a href="#" target="" class="btn btn-danger mx-4 mt-4">
            Pendaftaran Ditutup
        </a>

        <?php endif; ?>
    </header>

    <main>
        <section class="section-alur" id="alur">
            <h1>ALUR PSB ONLINE</h1>
            <img src="assets/images/bg/alur.png" alt="alur">
        </section>
        <section class="section-informasi text-center" id="informasi">
            <h1>INFORMASI PSB ONLINE</h1>
            <center>
                <hr style="width: 150px;">
            </center>
            <div class="container">
                <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <p>MI QURROTA A'YUN NGLOROG menyediakan PSB secara online diharapkan proses PSB dapat berjalan cepat dan bisa dilakukan dimanapun dan kapanpun selama sesi PSB Online dibuka. Proses pendaftaran calon siswa baru di masa pandemi Covid-19 ini dan terhambat oleh jarak jika datang ke sekolah langsung, bisa mengakses website PSB Online MI QURROTA A'YUN NGLOROG.</p>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <P>Pengisian form PSB Online mohon diperhatikan data yang dibutuhkan yang nantinya akan dipakai dalam proses pendaftaran. Setelah proses pengisian form PSB secara online berhasil dilakukan, calon siswa akan mendapat kartu ujian dengan nomor pendaftaran dan harus disimpan yang akan digunakan untuk proses selanjutnya.</P>
                </div>
            </div>
            </div>
            
            <a href="#header" class="btn btn-secondary mx-4 mt-4">
            PSB Online
            </a>
            <a href="login_siswa.php" target="_blank" class="btn btn-get-started mx-4 mt-4">
                Login Siswa
            </a>
        </section>
        <section class="section-syarat text-center" id="syarat">
            <h1>SYARAT PENDAFTARAN</h1>
            <img src="assets/images/bg/syarat.png" alt="">
        </section>
        <section class="section-kontak text-center" id="kontak">
            <h1>KONTAK KAMI</h1>
            <center>
                <hr class="justify-content-center" style="width: 150px;">
            </center>
            
            <p>PSB ONLINE © MI QURROTA A'YUN NGLOROG 
                <br>
                NGRANDU, RT.01 RW 02 NGLOROG SRAGEN 57215
            </p>
            <a href="tel:085803252052">
                <i class="bi bi-telephone"></i>
                <span>0858 - 0325 - 2052</span>
            </a> <br>
            <a href="mailto:miqurrotaayun@gmail.com">
                <i class="bi bi-send"></i>
                <span>miqurrotaayun@gmail.com</span>
            </a> <br>
            <a href="https://miqurrotaayun.sch.id">
                <i class="bi bi-globe"></i>
                <span>www.miqurrotaayun.sch.id</span>
            </a>
        </section>
    </main>

    <footer>
        <center>
            <small>PSB Online © MI QURROTA A'YUN NGLOROG - 2022</small>
        </center>
    </footer>
        
    
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>