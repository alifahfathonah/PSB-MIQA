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
                <a href="index_siswa.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'pendaftaran') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index_siswa.php?halaman=pendaftaran" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Pendaftaran</span>
                </a>
            </li>
            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'status') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index_siswa.php?halaman=status" class='sidebar-link'>
                    <i class="bi bi-file-earmark-check-fill"></i>
                    <span>Status</span>
                </a>
            </li>

            <li
                class="sidebar-item 
                <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == 'akun') {
                            echo 'active';
                        }
                    }
                ?>
                ">
                <a href="index_siswa.php?halaman=akun" class='sidebar-link'>
                    <i class="bi bi-person-circle"></i>
                    <span>Akun Saya</span>
                </a>
            </li>
            
            <li class="sidebar-title">Exit</li>

            <li
                class="sidebar-item  ">
                <a href="index_siswa.php?halaman=logout" class='sidebar-link'>
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
            
        </ul>
    </div>