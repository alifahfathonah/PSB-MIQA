<?php 
    session_start();
    include 'admin/koneksi.php'; 
    if(!isset($_SESSION['siswa'])){
        echo "<script>location='login_siswa.php'</script>";
        header("Location:login_siswa.php");
        exit();
    }
?>
<?php 
    $id = $_SESSION['siswa']['id'];
    $ambil = $koneksi->query("SELECT * FROM user JOIN datasiswa ON user.id = datasiswa.id_user WHERE user.id= '$id'");
    $pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Ujian - <?= $pecah['nama_lengkap'] ?></title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/bg/logomi.png">

</head>

<body>
    <br>
    <div class="container">
        <div class="row pb-4" style="border-bottom: 2px solid black;">
            <div class="col-4">
                <img class="float-end" width="80px" src="assets/images/bg/logomi.png" alt="logo">
            </div>
            <div class="col-8 align-self-center justify-content-start">
                <h4>MI PILIHAN QURROTA A'YUN <br> KARTU UJIAN SELEKSI PSB <?= date('Y'); ?></h4>
            </div>
        </div>
        <div class="card mb-3 mt-5">
            <div class="row">
                <div class="col-4">
                <img class="float-end img-fluid rounded-start" width="200px" src="pasfoto/<?= $pecah['pasfoto'] ?>" alt="<?= $pecah['nama_lengkap'] ?>">
                </div>
                <div class="col-8" style="margin-top: -20px;">
                <div class="card-body">
                    <table>
                        <tr">
                            <td>
                                <p class="card-text mb-2">Nama</p>
                            </td>
                            <td>
                                <p class="card-text mx-2  mb-2">:</p>
                            </td>
                            <td>
                                <p class="card-text  mb-2"><?= $pecah['nama_lengkap'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text mb-2">TTL</p>
                            </td>
                            <td>
                                <p class="card-text mx-2 mb-2">:</p>
                            </td>
                            <td>
                                <p class="card-text mb-2"><?= $pecah['tempat_lahir']; ?>, <?= date('d F Y', strtotime($pecah['tanggal_lahir'])); ?></p>
                            </td>
                        </tr>
                            <td>
                                <p class="card-text mb-2">Gender</p>
                            </td>
                            <td>
                                <p class="card-text mx-2 mb-2">:</p>
                            </td>
                            <td>
                                <p class="card-text mb-2"><?= $pecah['jenis_kelamin'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text mb-2">Alamat</p>
                            </td>
                            <td>
                                <p class="card-text mx-2 mb-2">:</p>
                            </td>
                            <td>
                                <p class="card-text mb-2"><?= $pecah['alamat'] ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="card-text mb-2">Telepon</p>
                            </td>
                            <td>
                                <p class="card-text mx-2 mb-2">:</p>
                            </td>
                            <td>
                                <p class="card-text mb-2"><?= $pecah['telepon'] ?></p>
                            </td>
                        </tr>
                    </table>
                    
                </div>
                </div>
            </div>
        </div>
        <?php 
            $ambil = $koneksi->query("SELECT * FROM informasi");
            $pecah = $ambil->fetch_assoc();
        ?>
        <div class="note mt-4">
            <h5>Catatan - <i> Note</i> :</h5>
            <ul>
                <li class="mb-2">Ujian dilakukan di tempat sekolah langsung</li>
                <li class="mb-2">Kartu ujian dibawa sebagai syarat ujian seleksi (boleh dalam bentuk print atau digital)</li>
                <li class="mb-2">Mengenakan pakaian muslim/ah yang rapi dan sopan</li>
                <li class="mb-2">Ujian <?= $pecah['periode']; ?></li>
                <li class="mb-2">Bebas memilih hari untuk ujian. Kecuali hari sabtu, minggu atau hari libur</li>
                <li class="mb-2">Ujian dibuka jam 09.00 - 11.00 WIB </li>
                <li class="mb-2">Membawa alat tulis pribadi. Bolpoin atau pensil dan penghapusnya</li>
            </ul>
        </div>
    </div>
    
    
    


<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/app.js"></script>

<script>
 window.print();
 </script>


</body>

</html>