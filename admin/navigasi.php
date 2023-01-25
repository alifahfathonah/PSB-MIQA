<?php 
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>
<div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
                
            <li
                class="sidebar-item 
                <?php
                    if (!isset($_GET['halaman'])) {
                        echo 'active';
                    }
                ?>
                ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'pendaftar') {
                            echo 'active';
                        } elseif($_GET['halaman'] == 'detail-data') {
                            echo 'active';
                        } elseif($_GET['halaman'] == 'edit-data') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index.php?halaman=pendaftar" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Pendaftar</span>
                </a>
            </li>
            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'hasil') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index.php?halaman=hasil" class='sidebar-link'>
                    <i class="bi bi-file-earmark-check-fill"></i>
                    <span>Hasil Daftar</span>
                </a>
            </li>

            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'informasi') {
                            echo 'active';
                        } elseif($_GET['halaman'] == 'edit-informasi') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index.php?halaman=informasi" class='sidebar-link'>
                    <i class="bi bi-info-square-fill"></i>
                    <span>Informasi</span>
                </a>
            </li>
            
            <li class="sidebar-title">Akun &amp; Exit</li>

            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'users') {
                            echo 'active';
                        } elseif ($_GET['halaman'] == 'admin') {
                            echo 'active';
                        }
                    } else {
                        echo '';
                    }
                ?>
                has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Account</span>
                </a>
                <ul class="submenu 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'users') {
                            echo 'active';
                        } elseif ($_GET['halaman'] == 'admin') {
                            echo 'active';
                        }
                    } else {
                        echo '';
                    }
                ?>
                ">
                    <li class="submenu-item 
                    <?php
                        if (isset($_GET['halaman'])) {
                            if ($_GET['halaman'] == 'users') {
                                echo 'active';
                            }
                        }
                    ?>
                    ">
                        <a href="index.php?halaman=users">Users</a>
                    </li>
                    <li class="submenu-item 
                    <?php
                        if (isset($_GET['halaman'])) {
                            if ($_GET['halaman'] == 'admin') {
                                echo 'active';
                            }
                        }
                    ?>
                    ">
                        <a href="index.php?halaman=admin">Admin</a>
                    </li>
                </ul>
            </li>

            <li
                class="sidebar-item  ">
                <a href="index.php?halaman=logout-admin" class='sidebar-link'>
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>