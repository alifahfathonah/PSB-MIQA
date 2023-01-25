<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<?php
    $id = $_SESSION['admin']['id'];
    $ambil = $koneksi->query("SELECT * FROM admin_miqa");
    $pecah = $ambil->fetch_assoc();
    // echo "<<pre>";
    //     print_r($pecah);
    // echo "</pre>";
?>

<section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Akun Admin</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Username</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="username" class="form-control" name="fname"
                                                placeholder="Username" value="<?= $pecah['username']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email" value="<?= $pecah['email']; ?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="contact-info" class="form-control" name="password" placeholder="Password" value="•••••xxx" readonly>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ganti Kata Sandi</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" method="post">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Password Saat Ini</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="pwini" class="form-control" name="pwini"
                                                placeholder="Password Saat Ini" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password Baru</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="pwbaru1" class="form-control" name="pwbaru1"
                                                placeholder="Password Baru" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password Baru</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="pwbaru2" class="form-control" name="pwbaru2"
                                                placeholder="Password Baru" required>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1 mt-3" name="ubah">Ubah Password</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <?php 
                                // jika ditekan tombol ubah
                                if(isset($_POST['ubah'])){
                                    $pwbaru1 = md5($_POST['pwbaru1']);
                                    $pwbaru2 = md5($_POST['pwbaru2']);
                                    $pwini = md5($_POST['pwini']);

                                    // mengambil data akun
                                    $ambil = $koneksi->query("SELECT * FROM admin_miqa WHERE id = '$id'");
                                    $data = $ambil->fetch_assoc();
                                    if($pwini !== $data['password_admin']){
                                        echo "<div class='alert alert-light-danger color-danger mt-3'><i class='bi bi-exclamation-circle'></i> <b>Password Saat Ini</b> Salah !</div>";
                                        // echo "<script>location='daftar.php';</script>";
                                    } elseif($pwbaru1 !== $pwbaru2){
                                        echo "<div class='alert alert-light-danger color-danger mt-3'><i class='bi bi-exclamation-circle'></i>&nbsp;<b>Password Baru</b> Harus Sama !</div>";
                                    }
                                    else{
                                        // masukkan data ke database pelanggan
                                        $koneksi->query("UPDATE admin_miqa SET password_admin = '$pwbaru2' WHERE id='$id'");

                                        echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                                        <script>Swal.fire(
                                        'Password Berhasil Diubah!',
                                        'Password Admin Telah Diubah!',
                                        'success'
                                        )</script>";
                                        echo "<script>
                                                function pw() {
                                                location='index.php?halaman=admin';
                                                }
                                            </script>
                                            <script>setTimeout(pw, 5000);</script>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>