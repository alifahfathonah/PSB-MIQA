<?php 
    session_start();
    include 'admin/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MI Qurrota A'yun</title>
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
            <h1 class="auth-title">Log in.</h1>
            <p class="auth-subtitle mb-5">Log in dengan data anda yang dibuat saat mendaftar akun.</p>

            <form method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username or email" name="emailuser" required>
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required>
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" name="login">Log in</button>
                
            </form>
            
             <?php 
                // jika tombol login ditekan
                if(isset($_POST['login'])){
                    $emailuser = strtolower($_POST['emailuser']);
                    $password = md5($_POST['password']);
                    $ambil = $koneksi->query("SELECT * FROM user WHERE username='$emailuser' AND password_user ='$password' or email='$emailuser' AND password_user ='$password'");

                    // hitung akun yang terpanggil
                    $akunyangcocok = $ambil->num_rows;

                    // jika ada yang cocok maka diloginkan
                    if($akunyangcocok==1){
                        $akun= $ambil->fetch_assoc();
                        $_SESSION['siswa'] = $akun;
                        
                        echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                        <script>Swal.fire(
                        'Berhasil Login!',
                        'Selamat Datang!',
                        'success'
                        )</script>";
                        echo "<script>
                                function login() {
                                location='index_siswa.php';
                                }
                            </script>
                            <script>setTimeout(login, 1200);</script>";
                        

                    }else{
                        echo "<div class='alert alert-light-danger color-danger mt-3'><i class='bi bi-exclamation-circle'></i> Akun Tidak Ditemukan !</div>";
                    }
                }
            ?>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">Belum memiliki akun? <a href="daftar_siswa.php" class="font-bold">Daftar Akun</a>.</p>
                <p><a class="font-bold" href="lupa_password.php">Lupa password?</a>.</p>
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
