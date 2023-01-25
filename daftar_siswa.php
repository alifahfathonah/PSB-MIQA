<?php 
    session_start();
    include 'admin/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - MI Qurrota A'yun</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="index.html"><img src="assets/images/logo/logomiqa.svg" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Daftar Akun</h1>
            <p class="auth-subtitle mb-5">Pastikan anda mengingatnya, jika perlu catat pada kertas</p>

            <form method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" placeholder="Email" name="email" required>
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password1" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password2" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" name="daftar">Daftar</button>
            </form>
            <?php 
                // jika ditekan tombol daftar
                if(isset($_POST['daftar'])){
                    $email = strtolower($_POST['email']);
                    $username = strtolower($_POST['username']);
                    $password1 = md5($_POST['password1']);
                    $password2 = md5($_POST['password2']);
                    $tgl_daftar = date("Y-m-d");

                    // cek apakah email atau usermame pernah digunakan
                    $ambil = $koneksi->query("SELECT * FROM user WHERE email = '$email' or username = '$username'");
                    $yangcocok = $ambil->num_rows;
                    if($yangcocok==1){
                        echo "<div class='alert alert-light-danger color-danger mt-3'><i class='bi bi-exclamation-circle'></i> Email atau Username sudah terdaftar</div>";
                        // echo "<script>location='daftar.php';</script>";
                    } elseif($password1 !== $password2){
                        echo "<div class='alert alert-light-danger color-danger mt-3'><i class='bi bi-exclamation-circle'></i> Password tidak sama</div>";
                    }
                    else{
                        // masukkan data ke database pelanggan
                        $koneksi->query("INSERT INTO user(email, username, password_user, tgl_daftar) VALUES ('$email','$username','$password1','$tgl_daftar')");

                        $data = $koneksi->query("SELECT * FROM user WHERE username='$username' AND password_user ='$password2'");

                        $akun= $data->fetch_assoc();
                        $_SESSION['siswa'] = $akun;
                       echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                            <script>Swal.fire(
                            'Sukses Mendaftar!',
                            'Selamat Datang!',
                            'success'
                            )</script>";
                        echo "<script>
                                function login() {
                                location='index_siswa.php';
                                }
                            </script>
                            <script>setTimeout(login, 1500);</script>";
                    }
                }
            ?>
            <div class="text-center mt-5 text-lg fs-4">
                <p class='text-gray-600'>Sudah punya akun? <a href="login_siswa.php" class="font-bold">Log
                        in</a>.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>

    </div>
</body>

</html>
