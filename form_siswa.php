<?php 
    include 'admin/koneksi.php'; 
    if(!isset($_SESSION['siswa'])){
        echo "<script>location='login_siswa.php'</script>";
        header("Location:login_siswa.php");
        exit();
    }
?>

<div class="page-title mb-3">
    <div class="row">
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="index_siswa.php">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="index.php?halaman=pendaftaran">Pendaftaran</a></li>
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
                        <h4 class="card-title">SILAHKAN ISI FORMULIR DIBAWAH INI</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">DATA SISWA</h6>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" id="nama_lengkap" class="form-control"
                                                placeholder="Nama Lengkap" name="nama_lengkap">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_panggilan">Nama Panggilan</label>
                                            <input type="text" id="nama_panggilan" class="form-control"
                                                placeholder="Nama Panggilan" name="nama_panggilan">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin">
                                                    <option selected>--Pilih--</option>
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
                                                name="kewarganegaraan" placeholder="Kewarganegaraan">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" id="tempat_lahir" class="form-control"
                                                name="tempat_lahir" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" class="form-control"
                                                name="tanggal_lahir" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="anak_ke">Anak ke-</label>
                                            <input type="number" id="anak_ke" class="form-control"
                                                name="anak_ke" placeholder="Anak ke-">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status_di_keluarga">Status di Keluarga</label>
                                            <input type="text" id="status_di_keluarga" class="form-control"
                                                name="status_di_keluarga" placeholder="Status di Keluarga">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jumlah_saudara">Jumlah Saudara</label>
                                            <input type="number" id="jumlah_saudara" class="form-control"
                                                name="jumlah_saudara" placeholder="Jumlah Saudara">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="keadaan_jasmani">Keadaan Jasmani</label>
                                            <input type="text" id="keadaan_jasmani" class="form-control"
                                                name="keadaan_jasmani" placeholder="Keadaan Jasmani">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" id="alamat" class="form-control"
                                                name="alamat" placeholder="Alamat">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jarak">Jarak ke Sekolah</label>
                                            <input type="number" id="jarak" class="form-control"
                                                name="jarak" placeholder="Jarak ke Sekolah">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{3-5}" id="telepon" class="form-control" name="telepon" placeholder="Telepon">
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
                                                placeholder="Nama Ayah" name="nama_ayah">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Ibu</label>
                                            <input type="text" id="nama_ibu" class="form-control"
                                                placeholder="Nama Ibu" name="nama_ibu">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ayah">Pendidikan Ayah</label>
                                            <input type="text" id="pendidikan_ayah" class="form-control" placeholder="Pendidikan Ayah" name="pendidikan_ayah">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan_ibu">Pendidikan Ibu</label>
                                            <input type="text" id="pendidikan_ibu" class="form-control"
                                                name="pendidikan_ibu" placeholder="Pendidikan Ibu">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" id="pekerjaan_ayah" class="form-control"
                                                name="pekerjaan_ayah" placeholder="Pekerjaan Ayah">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="text" id="pekerjaan_ibu" class="form-control"
                                                name="pekerjaan_ibu" placeholder="Pekerjaan Ibu">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ayah">Telepon Ayah</label>
                                            <input type="text" id="telepon_ayah" class="form-control"
                                                name="telepon_ayah" placeholder="Telepon Ayah">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="telepon_ibu">Telepon Ibu</label>
                                            <input type="text" id="telepon_ibu" class="form-control"
                                                name="telepon_ibu" placeholder="Telepon Ibu">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="penghasilan_orangtua">Penghasilan Orang Tua</label>
                                            <input type="text" id="penghasilan_orangtua" class="form-control"
                                                name="penghasilan_orangtua" placeholder="Penghasilan Orang Tua">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <h6 class="mb-3">FILE PENDAFTARAN</h6>
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
        // jika tombol Update ditekan
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
            
            // id_user
            $id_user = $_SESSION['siswa']['id'];

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
            move_uploaded_file($lokasipasfoto, "../pasfoto/$namapf");
            move_uploaded_file($lokasiakta, "../akta/$namaak");
            move_uploaded_file($lokasiijazah, "../ijazah/$namaij");
            move_uploaded_file($lokasikk, "../kk/$namak");

            $koneksi->query("INSERT INTO datasiswa(id_user, nama_lengkap, nama_panggilan, jenis_kelamin, tempat_lahir, tanggal_lahir, kewarganegaraan, anak_ke, status_di_keluarga, jumlah_saudara, keadaan_jasmani, alamat, jarak, telepon, nama_ayah, pendidikan_ayah, pekerjaan_ayah, telepon_ayah, nama_ibu, pendidikan_ibu, pekerjaan_ibu, telepon_ibu, penghasilan_orangtua, pasfoto, akta, ijazah, kk, status_daftar, tgl_daftar) VALUES ('$id_user', '$namalengkap', '$namapanggilan', '$jeniskelamin', '$tempatlahir', '$tanggallahir', '$kewarganegaraan', '$anakke', '$statusdikeluarga', '$jumlahsaudara', '$keadaanjasmani', '$alamat', '$jarak', '$telepon', '$namaayah', '$pendidikanayah', '$pekerjaanayah', '$teleponayah', '$namaibu', '$pendidikanibu', '$teleponibu', '$penghasilanorangtua', '$namapf', '$namaak', '$namaij', '$namak', 'Unverified', '$tgl_daftar')");
            

            echo "<script>location='index_siswa.php?halaman=pendaftaran;</script>";
        }
    ?>
</section>