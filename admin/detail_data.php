
<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<?php 
    $id = $_GET['id'];
    $ambil = $koneksi->query("SELECT * FROM datasiswa WHERE id='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
?>

<div class="page-title mb-3">
    <div class="row">
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="index.php?halaman=pendaftar">Pendaftar</a></li>
                    <li class="breadcrumb-item" aria-current="page">Detail</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">DATA PENDAFTARAN SISWA</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">DATA SISWA</h6>
                            <form class="form" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" id="nama_lengkap" class="form-control"
                                                placeholder="Nama Lengkap" name="nama_lengkap" value="<?= $pecah['nama_lengkap']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_panggilan">Nama Panggilan</label>
                                            <input type="text" id="nama_panggilan" class="form-control"
                                                placeholder="Nama Panggilan" name="nama_panggilan" value="<?= $pecah['nama_panggilan']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <input type="text" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?= $pecah['jenis_kelamin']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" id="kewarganegaraan" class="form-control"
                                                name="kewarganegaraan" placeholder="Kewarganegaraan" value="<?= $pecah['kewarganegaraan']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control"
                                                name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $pecah['tempat_lahir']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="email" id="tanggal_lahir" class="form-control"
                                                name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $pecah['tanggal_lahir']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="anak_ke">Anak ke-</label>
                                            <input type="text" id="anak_ke" class="form-control"
                                                name="anak_ke" placeholder="Anak ke-" value="<?= $pecah['anak_ke']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_di_keluarga">Status di Keluarga</label>
                                            <input type="email" id="status_di_keluarga" class="form-control"
                                                name="status_di_keluarga" placeholder="Status di Keluarga" value="<?= $pecah['status_di_keluarga']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jumlah_saudara">Jumlah Saudara</label>
                                            <input type="text" id="jumlah_saudara" class="form-control"
                                                name="jumlah_saudara" placeholder="Jumlah Saudara" value="<?= $pecah['jumlah_saudara']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keadaan_jasmani">Keadaan Jasmani</label>
                                            <input type="email" id="keadaan_jasmani" class="form-control"
                                                name="keadaan_jasmani" placeholder="Keadaan Jasmani" value="<?= $pecah['keadaan_jasmani']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control"
                                                name="alamat" placeholder="Alamat" value="<?= $pecah['alamat']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jarak">Jarak ke Sekolah</label>
                                            <input type="email" id="jarak" class="form-control"
                                                name="jarak" placeholder="Jarak ke Sekolah" value="<?= $pecah['jarak']; ?> KM" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" id="telepon" class="form-control"
                                                name="telepon" placeholder="Telepon" value="<?= $pecah['telepon']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">DATA ORANG TUA</h6>
                            <form class="form">
                                <div class="row">
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Ayah</label>
                                            <input type="text" id="nama_ayah" class="form-control"
                                                placeholder="Nama Ayah" name="nama_ayah" value="<?= $pecah['nama_ayah']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" id="nama_ibu" class="form-control"
                                                placeholder="Nama Ibu" name="nama_ibu" value="<?= $pecah['nama_ibu']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                            <input type="text" id="pendidikan_ayah" class="form-control" placeholder="Pendidikan Ayah" name="pendidikan_ayah" value="<?= $pecah['pendidikan_ayah']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                            <input type="text" id="pendidikan_ibu" class="form-control"
                                                name="pendidikan_ibu" placeholder="Pendidikan Ibu" value="<?= $pecah['pendidikan_ibu']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" id="pekerjaan_ayah" class="form-control"
                                                name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="<?= $pecah['pekerjaan_ayah']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="email" id="pekerjaan_ibu" class="form-control"
                                                name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="<?= $pecah['pekerjaan_ibu']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ayah">Telepon Ayah</label>
                                            <input type="text" id="telepon_ayah" class="form-control"
                                                name="telepon_ayah" placeholder="Telepon Ayah" value="<?= $pecah['telepon_ayah']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ibu">Telepon Ibu</label>
                                            <input type="email" id="telepon_ibu" class="form-control"
                                                name="telepon_ibu" placeholder="Telepon Ibu" value="<?= $pecah['telepon_ibu']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_orangtua">Penghasilan Orang Tua</label>
                                            <input type="text" id="penghasilan_orangtua" class="form-control"
                                                name="penghasilan_orangtua" placeholder="Penghasilan Orang Tua" value="<?= $pecah['penghasilan_orangtua']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">FILE PENDAFTARAN</h6>
                            <form class="form" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pasfoto">Pas Foto</label> <br>
                                            <a href="../pasfoto/<?= $pecah['pasfoto']; ?>" target="_blank"><img src="../pasfoto/<?= $pecah['pasfoto']; ?>" alt="pas.png" style="max-height: 354px;"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="akta">Akta</label><br>
                                            <a href="../akta/<?= $pecah['akta']; ?>" target="_blank"><img src="../akta/<?= $pecah['akta']; ?>" alt="<?= $pecah['akta']; ?>" style="max-height: 354px;"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ijazah">Ijazah</label><br>
                                            <a href="../ijazah/<?= $pecah['ijazah']; ?>" target="_blank"><img src="../ijazah/<?= $pecah['ijazah']; ?>" alt="<?= $pecah['ijazah']; ?>" style="max-height: 354px;"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kartu_keluarga">Kartu Keluarga</label><br>
                                            <a href="../kk/<?= $pecah['kk']; ?>" target="_blank"><img src="../kk/<?= $pecah['kk']; ?>" alt="<?= $pecah['kk']; ?>" style="max-height: 354px;"></a>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-12 col-md-6 d-flex justify-content-start">
                                            <a href="index.php?halaman=edit-data&id=<?= $_GET['id']; ?>" class="btn btn-primary me-1 mb-1">Edit Data</a>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex justify-content-end">
                                            <?php if($pecah['status_daftar'] =='Unverified') : ?>
                                            <button class="btn btn-success" name="diterima">Terima</button>
                                            &emsp;
                                            <button class="btn btn-danger" name="ditolak">Tolak</button>
                                            <?php elseif($pecah['status_daftar'] =='Diterima' or 'Ditolak') : ?>
                                            <button class="btn btn-light-secondary" name="batal">Batal</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php 
                                        if(isset($_POST['diterima'])){
                                            $id = $_GET['id'];
                                            $koneksi->query("UPDATE datasiswa SET status_daftar='Diterima' WHERE id='$id'");
                                            
                                            echo "<script>location='index.php?halaman=pendaftar';</script>";
                                        } elseif(isset($_POST['ditolak'])){
                                            $id = $_GET['id'];
                                            $koneksi->query("UPDATE datasiswa SET status_daftar='Ditolak' WHERE id='$id'");

                                            echo "<script>location='index.php?halaman=pendaftar';</script>";
                                        } elseif(isset($_POST['batal'])){
                                            $id = $_GET['id'];
                                            $koneksi->query("UPDATE datasiswa SET status_daftar='Unverified' WHERE id='$id'");

                                            echo "<script>location='index.php?halaman=pendaftar';</script>";
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>