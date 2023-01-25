<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<?php 
    $ambil = $koneksi->query("SELECT * FROM informasi");
    $pecah = $ambil->fetch_assoc();
?>
<div class="page-heading">
        <h3>Informasi Pendaftaran</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Periode Pendaftaran</h4>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-light-primary color-primary"><i class="bi bi-star"></i> <?= $pecah['periode']; ?></div>
                            <a href="index.php?halaman=edit-informasi" class="btn btn-primary mt-4">Edit Periode</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Informasi kelulusan</h4>
                        </div>
                        <div class="card-body">
                            <div><?= $pecah['tahap_lulus']; ?></div>
                            <a href="index.php?halaman=edit-informasi" class="btn btn-primary mt-4">Edit Informasi</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h4>Status PSB</h4>
                </div>
                
                <div class="card-body">
                    <?php if($pecah['status_ppdb'] == 'Buka') : ?>
                    <div class="alert alert-light-success color-success text-center"></i>Program PSB Saat Ini <?= $pecah['status_ppdb']; ?>
                        </div>
                    <?php elseif($pecah['status_ppdb'] == 'Tutup') : ?>
                    <div class="alert alert-light-danger color-danger text-center"></i>Program PSB Saat Ini <?= $pecah['status_ppdb']; ?>
                        </div>
                    <?php endif; ?>
                    <form method="post">
                        <?php if($pecah['status_ppdb'] == 'Buka') : ?>
                        <div class="form-check">
                            <input class="form-check-input form-check-success" type="radio" name="radio" id="flexRadioDefault1" value="Buka" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                &nbsp;Buka
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input form-check-danger" type="radio" name="radio" id="flexRadioDefault1" value="Tutup">
                            <label class="form-check-label" for="flexRadioDefault1">
                                &nbsp;Tutup
                            </label>
                            
                        </div>
                        <?php elseif($pecah['status_ppdb'] == 'Tutup') : ?>
                        <div class="form-check">
                            <input class="form-check-input form-check-success" type="radio" name="radio" id="flexRadioDefault1" value="Buka">
                            <label class="form-check-label" for="flexRadioDefault1">
                                &nbsp;Buka
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input form-check-danger" type="radio" name="radio" id="flexRadioDefault1" value="Tutup" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                &nbsp;Tutup
                            </label>
                        </div>
                        <?php endif; ?>
                        <center>
                            <button class="btn btn-primary mt-3" name="update">Update</button>
                        </center>
                    </form>
                    <?php 
                        if(isset($_POST['update'])){
                            $radio = $_POST['radio'];
                            $koneksi->query("UPDATE informasi SET status_ppdb = '$radio'");
                            echo "<script>location='index.php?halaman=informasi';</script>";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </section>
</div>

