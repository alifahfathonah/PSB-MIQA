<?php 
    session_start();
    include 'koneksi.php'; 
    if(!isset($_SESSION['admin'])){
        echo "<script>location='login.php'</script>";
        header("Location:login.php");
        exit();
    }
?>

<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
        border: 1px solid;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
</style>

<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Kelulusan.xls");
?>

<table>
    <tr bgcolor="#e5e5e5">
        <td>No</td>
        <td>Nama Lengkap</td>
        <td>Nama Panggilan</td>
        <td>Gender</td>
        <td>Kewarganegaraan</td>
        <td>TTL</td>
        <td>Anak ke-</td>
        <td>Jumlah Saudara</td>
        <td>Status di Keluarga</td>
        <td>Keadaan Jasmani</td>
        <td>Alamat</td>
        <td>Jarak ke Sekolah</td>
        <td>Telepon</td>
        <td>Nama Ayah</td>
        <td>Pendidikan Ayah</td>
        <td>Pekerjaan Ayah</td>
        <td>Telepon Ayah</td>
        <td>Nama Ibu</td>
        <td>Pendidikan Ibu</td>
        <td>Pekerjaan Ibu</td>
        <td>Telepon Ibu</td>
        <td>Penghasilan Orang Tua</td>
        <td>Pas Foto</td>
        <td>Ijazah</td>
        <td>Akta</td>
        <td>KK</td>
    </tr>

    <?php 
        $no = 1;
        $ambil = $koneksi->query("SELECT * FROM datasiswa WHERE status_daftar='Diterima'");
        while($pecah = $ambil->fetch_assoc()){
    ?>
            
    <tr>
        <td><?= $no ?></td>
        <td><?= $pecah['nama_lengkap']; ?></td>
        <td><?= $pecah['nama_panggilan']; ?></td>
        <td><?= $pecah['jenis_kelamin']; ?></td>
        <td><?= $pecah['kewarganegaraan']; ?></td>
        <td><?= $pecah['tempat_lahir']; ?>, <?= $pecah['tanggal_lahir']; ?></td>
        <td><?= $pecah['anak_ke']; ?></td>
        <td><?= $pecah['jumlah_saudara']; ?></td>
        <td><?= $pecah['status_di_keluarga']; ?></td>
        <td><?= $pecah['keadaan_jasmani']; ?></td>
        <td><?= $pecah['alamat']; ?></td>
        <td><?= $pecah['jarak']; ?></td>
        <td><?= $pecah['telepon']; ?></td>
        <td><?= $pecah['nama_ayah']; ?></td>
        <td><?= $pecah['pendidikan_ayah']; ?></td>
        <td><?= $pecah['pekerjaan_ayah']; ?></td>
        <td><?= $pecah['telepon_ayah']; ?></td>
        <td><?= $pecah['nama_ibu']; ?></td>
        <td><?= $pecah['pendidikan_ibu']; ?></td>
        <td><?= $pecah['pekerjaan_ibu']; ?></td>
        <td><?= $pecah['telepon_ibu']; ?></td>
        <td><?= $pecah['penghasilan_orangtua']; ?></td>
        <td><a href="../pasfoto/<?= $pecah['pasfoto']; ?>"><?= $pecah['pasfoto']; ?></a></td>
        <td><a href="../ijazah/<?= $pecah['ijazah']; ?>"><?= $pecah['ijazah']; ?></a></td>
        <td><a href="../akta/<?= $pecah['akta']; ?>"><?= $pecah['akta']; ?></a></td>
        <td><a href="../kk/<?= $pecah['kk']; ?>"><?= $pecah['kk']; ?></a></td>
    </tr>
    <?php $no++; ?>
    <?php } ?>
</table>

<p>2021 © MI Qurrota A'yun</p>
<p>Crafted with ❤️by Rifqi</p>






