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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Informasi</h3>
                <p class="text-subtitle text-muted">Perbarui periode tanggal pendaftaran dan informasi tahap lulus jika diperlukan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="index.php?halaman=informasi">Informasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="page-content">
        <section class="section">
            <form method="post">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Periode Pendaftaran</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="basicInput" placeholder="Masukkan Periode" name="periode" value="<?= $pecah['periode']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-header">
                        <h4 class="card-title">Informasi Tahap Lulus</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tahap Lulus</label>
                            <textarea class="form-control" id="editor" rows="50" name="tahap_lulus">
                                <?= $pecah['tahap_lulus']; ?>
                            </textarea>
                        </div>

                        <button class="btn btn-primary mt-5" name="update">Update</button>
                    </div>
                    
                </div>
            </form>

            <?php
                if(isset($_POST['update'])){
                    $periode=$_POST['periode'];
                    $tahaplulus=$_POST['tahap_lulus'];

                    $koneksi->query("UPDATE informasi SET tahap_lulus='$tahaplulus', periode='$periode'");

                    echo "<script>location='index.php?halaman=informasi';</script>";
                }
            ?>

        </section>

    </div>
</div>