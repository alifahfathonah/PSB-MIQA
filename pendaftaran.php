<?php 
    include 'admin/koneksi.php';
    if(!isset($_SESSION['siswa'])){
        echo "<script>location='login_siswa.php'</script>";
        header("Location:login_siswa.php");
        exit();
    }
?>

<?php 
    $id = $_SESSION['siswa']['id'];
    $ambil = $koneksi->query("SELECT * FROM datasiswa WHERE id_user='$id'");
    $pecah= $ambil->fetch_assoc();
?>

<?php if(empty($pecah['id'])) : ?>
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Formulir Pendaftaran</h3>
            <p class="text-subtitle text-muted">Silahkan isi formulir pendaftaran dengan benar dan teliti</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index_siswa.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Pendaftaran</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section id="multiple-column-form">
    <form class="form" method="post" enctype="multipart/form-data">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ISI FORMULIR DIBAWAH INI</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">DATA SISWA</h6>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" id="nama_lengkap" class="form-control"
                                                placeholder="Nama Lengkap" name="nama_lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_panggilan">Nama Panggilan</label>
                                            <input type="text" id="nama_panggilan" class="form-control"
                                                placeholder="Nama Panggilan" name="nama_panggilan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin" required>
                                                    <option value="">--Pilih--</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                <label class="input-group-text" for="inputGroupSelect01">Pilihan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <input type="text" id="kewarganegaraan" class="form-control"
                                                name="kewarganegaraan" placeholder="Kewarganegaraan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control"
                                                name="tempat_lahir" placeholder="Tempat Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" class="form-control"
                                                name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="anak_ke">Anak ke-</label>
                                            <input type="number" id="anak_ke" class="form-control"
                                                name="anak_ke" placeholder="Anak ke-" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_di_keluarga">Status di Keluarga</label>
                                            <small class="text-muted">cth.<i>anak kandung</i></small>
                                            <input type="text" id="status_di_keluarga" class="form-control"
                                                name="status_di_keluarga" placeholder="Status di Keluarga" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jumlah_saudara">Jumlah Saudara</label>
                                            <input type="number" id="jumlah_saudara" class="form-control"
                                                name="jumlah_saudara" placeholder="Jumlah Saudara" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keadaan_jasmani">Keadaan Jasmani</label>
                                            <small class="text-muted">cth.<i>sehat</i></small>
                                            <input type="text" id="keadaan_jasmani" class="form-control"
                                                name="keadaan_jasmani" placeholder="Keadaan Jasmani" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control"
                                                name="alamat" placeholder="Alamat" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jarak">Jarak ke Sekolah</label>
                                            <input type="number" id="jarak" class="form-control"
                                                name="jarak" placeholder="Jarak ke Sekolah" required>
                                                <p><small class="text-muted">*Dalam kilometer</small></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3-5}" id="telepon" class="form-control" name="telepon" placeholder="Telepon" required>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">DATA ORANG TUA</h6>
                                <div class="row">
                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Ayah</label>
                                            <input type="text" id="nama_ayah" class="form-control"
                                                placeholder="Nama Ayah" name="nama_ayah" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" id="nama_ibu" class="form-control"
                                                placeholder="Nama Ibu" name="nama_ibu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                            <input type="text" id="pendidikan_ayah" class="form-control" placeholder="Pendidikan Ayah" name="pendidikan_ayah" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                            <input type="text" id="pendidikan_ibu" class="form-control"
                                                name="pendidikan_ibu" placeholder="Pendidikan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" id="pekerjaan_ayah" class="form-control"
                                                name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="text" id="pekerjaan_ibu" class="form-control"
                                                name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ayah">Telepon Ayah</label>
                                            <input type="text" id="telepon_ayah" class="form-control"
                                                name="telepon_ayah" placeholder="Telepon Ayah" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ibu">Telepon Ibu</label>
                                            <input type="text" id="telepon_ibu" class="form-control"
                                                name="telepon_ibu" placeholder="Telepon Ibu" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_orangtua">Penghasilan Orang Tua</label>
                                            <input type="text" id="penghasilan_orangtua" class="form-control"
                                                name="penghasilan_orangtua" placeholder="Penghasilan Orang Tua" required>
                                                <p><small class="text-muted">*Perhatikan jumlah angka</small></p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">FILE PENDAFTARAN (Foto)</h6>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pasfoto" class="form-label">Pas Foto</label><br>
                                            <input class="form-control" type="file" id="pasfoto" name="pasfoto" accept="image/png,image/jpg,image/jpeg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="akta" class="form-label">Akta</label><br>
                                            <input class="form-control" type="file" id="akta" name="akta" accept="image/png,image/jpg,image/jpeg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="ijazah" class="form-label">Ijazah</label><br>
                                            <input class="form-control" type="file" id="ijazah" name="ijazah" accept="image/png,image/jpg,image/jpeg" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kk" class="form-label">Kartu Keluarga</label><br>
                                            <input class="form-control" type="file" id="kk" name="kk" accept="image/png,image/jpg,image/jpeg" required>
                                        </div>
                                    </div>
                                    <div class="alert alert-light-danger color-danger mt-5 text-center"><i class="bi bi-exclamation-circle"></i> Pastikan Data Formulir Anda Sudah Benar Sebelum Disimpan</div>
                                    <div class="col-12 d-flex justify-content-end mt-5">
                                        <button class="btn btn-primary me-1 mb-1" name="simpan">Simpan Data</button>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php 
        // jika tombol Simpan ditekan
        if(isset($_POST['simpan'])){
            // Pas Foto
            $namapasfoto = $_FILES['pasfoto']['name'];
            $lokasipasfoto = $_FILES['pasfoto']['tmp_name'];
            $namapf = $id.$namapasfoto;
            

            // Pas Akta
            $namaakta = $_FILES['akta']['name'];
            $lokasiakta = $_FILES['akta']['tmp_name'];
            $namaak = $id.$namaakta;
            

            // Pas Ijazah
            $namaijazah = $_FILES['ijazah']['name'];
            $lokasiijazah = $_FILES['ijazah']['tmp_name'];
            $namaij = $id.$namaijazah;
            

            // Pas KK
            $namakk = $_FILES['kk']['name'];
            $lokasikk = $_FILES['kk']['tmp_name'];
            $namak = $id.$namakk;

            // Data Siswa
            $namalengkap = $_POST['nama_lengkap'];
            $namapanggilan = $_POST['nama_panggilan'];
            $jeniskelamin = $_POST['jenis_kelamin'];
            $kewarganegaraan = $_POST['kewarganegaraan'];
            $tempatlahir = $_POST['tempat_lahir'];
            $tanggallahir = $_POST['tanggal_lahir'];
            $anakke = $_POST['anak_ke'];
            $statusdikeluarga = $_POST['status_di_keluarga'];
            $jumlahsaudara = $_POST['jumlah_saudara'];
            $keadaanjasmani = $_POST['keadaan_jasmani'];
            $alamat = $_POST['alamat'];
            $jarak = $_POST['jarak'];
            $telepon = $_POST['telepon'];

            // Data Orang Tua
            $namaayah = $_POST['nama_ayah'];
            $namaibu = $_POST['nama_ibu'];
            $pendidikanayah = $_POST['pendidikan_ayah'];
            $pendidikanibu = $_POST['pendidikan_ibu'];
            $pekerjaanayah = $_POST['pekerjaan_ayah'];
            $pekerjaanibu = $_POST['pekerjaan_ibu'];
            $teleponayah = $_POST['telepon_ayah'];
            $teleponibu = $_POST['telepon_ibu'];
            $penghasilanorangtua = $_POST['penghasilan_orangtua'];

            $tgl_daftar = date("Y-m-d");

            // Update Data
            move_uploaded_file($lokasipasfoto, "pasfoto/$namapf");
            move_uploaded_file($lokasiakta, "akta/$namaak");
            move_uploaded_file($lokasiijazah, "ijazah/$namaij");
            move_uploaded_file($lokasikk, "kk/$namak");

            $koneksi->query("INSERT INTO datasiswa(id_user, nama_lengkap, nama_panggilan, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, anak_ke, status_di_keluarga, jumlah_saudara, keadaan_jasmani, alamat, jarak, telepon, nama_ayah, pendidikan_ayah, pekerjaan_ayah, telepon_ayah, nama_ibu, pendidikan_ibu, pekerjaan_ibu, telepon_ibu, penghasilan_orangtua, pasfoto, akta, ijazah, kk, tgl_daftar) VALUES ('$id', '$namalengkap', '$namapanggilan', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$kewarganegaraan', '$anakke', '$statusdikeluarga', '$jumlahsaudara', '$keadaanjasmani', '$alamat', '$jarak', '$telepon', '$namaayah', '$pendidikanayah', '$pekerjaanayah', '$teleponayah', '$namaibu', '$pendidikanibu', '$pekerjaanibu', '$teleponibu', '$penghasilanorangtua', '$namapf', '$namaak', '$namaij', '$namak', '$tgl_daftar')");
            
            echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>Swal.fire(
            'Berhasil Disimpan!',
            'Geser Kebawah Untuk Cetak Kartu!',
            'success'
            )</script>";
            echo "<script>
                    function login() {
                    location.reload()
                    }
                </script>
                <script>setTimeout(login, 5000);</script>";
        }
    ?>
</section>

<?php elseif(!empty($pecah['id'])) : ?>
<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Tersimpan</h3>
            <p class="text-subtitle text-muted">Formulir pendaftaran anda yang sudah tersimpan di sistem</p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index_siswa.php">Dashboard</a></li>
                    <li class="breadcrumb-item">Pendaftaran</li>
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
                    <h4 class="card-title">DATA FORMULIR PENDAFTARAN</h4>
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
                                        <img src="pasfoto/<?= $pecah['pasfoto']; ?>" alt="<?= $pecah['pasfoto']; ?>" style="max-height: 354px;">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="akta">Akta</label><br>
                                        <img src="akta/<?= $pecah['akta']; ?>" alt="<?= $pecah['akta']; ?>" style="max-height: 354px;">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="ijazah">Ijazah</label><br>
                                        <img src="ijazah/<?= $pecah['ijazah']; ?>" alt="<?= $pecah['ijazah']; ?>" style="max-height: 354px;">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="kartu_keluarga">Kartu Keluarga</label><br>
                                        <img src="kk/<?= $pecah['kk']; ?>" alt="<?= $pecah['kk']; ?>" style="max-height: 354px;">
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="col-12 d-flex justify-content-center">
                                    
                                    <a href="index_siswa.php?halaman=cetak-kartu" target="_blank" class="btn btn-primary"><i class="bi bi-printer-fill"></i>&nbsp; Cetak Kartu</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>