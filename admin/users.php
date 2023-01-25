<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data User</h3>
                <p class="text-subtitle text-muted">Halaman data user yang telah mendaftar di web psb miqa</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Users Terdaftar
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Tanggal Daftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $ambil = $koneksi->query("SELECT * FROM user"); ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $pecah['username']; ?></td>
                            <td><?= $pecah['email']; ?></td>
                            <td><?= $pecah['password_user']; ?></td>
                            <td><?= date('d F Y', strtotime($pecah['tgl_daftar'])); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<script src="../assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="../assets/js/pages/simple-datatables.js"></script>