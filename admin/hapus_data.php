<?php
include 'koneksi.php';
$ambil = $koneksi->query("SELECT * FROM datasiswa WHERE id ='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$pasfoto = $pecah['pasfoto'];
$akta = $pecah['akta'];
$ijazah = $pecah['ijazah'];
$kk = $pecah['kk'];
if (file_exists("../pasfoto/$pasfoto")){
    unlink("../pasfoto/$pasfoto");
}
if (file_exists("../akta/$akta")){
    unlink("../akta/$akta");
}
if (file_exists("../ijazah/$ijazah")){
    unlink("../ijazah/$ijazah");
}
if (file_exists("../kk/$kk")){
    unlink("../kk/$kk");
}

$koneksi->query("DELETE FROM datasiswa WHERE id ='$_GET[id]'");
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Berhasil dihapus',
    showConfirmButton: false,
    timer: 1500
    })</script>";
    echo "<script>
            function pendaftar() {
            location='index.php?halaman=pendaftar';
            }
        </script>
        <script>setTimeout(pendaftar, 900);</script>";

?>