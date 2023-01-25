-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2022 pada 10.34
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minglorog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_miqa`
--

CREATE TABLE `admin_miqa` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_miqa`
--

INSERT INTO `admin_miqa` (`id`, `username`, `email`, `password_admin`) VALUES
(1, 'miqa', 'miqa@gmail.com', '8eb39a77e0c13fe997ada89df37f90cd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(500) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `status_di_keluarga` varchar(20) NOT NULL,
  `jumlah_saudara` int(11) NOT NULL,
  `keadaan_jasmani` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jarak` int(11) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `nama_ayah` varchar(500) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `telepon_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(500) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `telepon_ibu` varchar(20) NOT NULL,
  `penghasilan_orangtua` varchar(20) NOT NULL,
  `pasfoto` varchar(100) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `status_daftar` varchar(20) NOT NULL DEFAULT 'Unverified',
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `id_user`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `anak_ke`, `status_di_keluarga`, `jumlah_saudara`, `keadaan_jasmani`, `alamat`, `jarak`, `telepon`, `nama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `telepon_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `telepon_ibu`, `penghasilan_orangtua`, `pasfoto`, `akta`, `ijazah`, `kk`, `status_daftar`, `tgl_daftar`) VALUES
(30, 25, 'Anita Kalim', 'Anita', 'Perempuan', 'Jakarta', '2015-02-09', 'Indonesia', 1, 'Anak Kandung', 2, 'Sehat', 'Ngrandu RT 01 RW 01 Sragen', 1, '085839847382', 'Abdurahman', 'S1', 'Editor', '086384736273', 'Dwi Sunarsih', 'S1', 'PNS', '08637483736', '12000000', '25perempuan.png', '25akta.png', '25ijazah.png', '25Frame 1.png', 'Unverified', '2022-12-31'),
(31, 26, 'Anton Wiratama', 'Anton', 'Laki-laki', 'Sragen', '2015-02-19', 'Indonesia', 2, 'Anak Kandung', 2, 'Sehat', 'Bagan RT 01 RW 02 Sragen', 1, '081728376837', 'Wira', 'S1', 'PNS', '089827635623', 'Amalia', 'S1', 'Rumah Tangga', '089726352637', '9000000', '26laki.png', '26akta.png', '26ijazah.png', '26kk.png', 'Unverified', '2022-12-31'),
(32, 27, 'Arief Santoso', 'Arief', 'Laki-laki', 'Sragen', '2015-09-20', 'Indonesia', 1, 'Anak Kandung', 2, 'Sehat', 'Taman Agung Nglorog RT 01 RW 01 Sragen', 2, '085678765353', 'Santoso', 'S1', 'Buruh', '089765263672', 'Sumiati', 'S1', 'Buruh', '081787673625', '8000000', '27laki.png', '27akta.png', '27ijazah.png', '27kk.png', 'Unverified', '2022-12-31'),
(33, 28, 'Bambang Sugianto', 'Bambang', 'Laki-laki', 'Surakarta', '2015-09-12', 'Indonesia', 2, 'Anak Kandung', 3, 'Sehat', 'Nglorog RT 01 RW 01 Sragen', 3, '085673876234', 'Pamungkas', 'S1', 'Wiraswasta', '081674568352', 'Indriyanti', 'S1', 'Wiraswasta', '089273846231', '20000000', '28laki.png', '28akta.png', '28ijazah.png', '28kk.png', 'Unverified', '2022-12-31'),
(34, 29, 'Benny Setiawan', 'Benny', 'Laki-laki', 'Solo', '2015-03-23', 'Indonesia', 3, 'Anak Kandung', 3, 'Sehat', 'Teguhan RT 02 RW 02 Sragen', 4, '085738726382', 'Setyo', 'S1', 'PNS', '089635728365', 'Winarsih', 'S1', 'PNS', '081478264823', '10000000', '29laki.png', '29akta.png', '29ijazah.png', '29kk.png', 'Unverified', '2022-12-31'),
(35, 30, 'Bimo Surono', 'Bimo', 'Laki-laki', 'Sragen', '2015-11-12', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Nglorog RT 02 WR 02 Sragen', 3, '089627384726', 'Suranto', 'S1', 'Editor', '089627384623', 'Beana', 'S1', 'Editor', '089236472632', '18000000', '30laki.png', '30akta.png', '30ijazah.png', '30kk.png', 'Unverified', '2022-12-31'),
(36, 31, 'Chairul Tanjung', 'Chairul', 'Laki-laki', 'Karanganyar', '2015-05-20', 'Indonesia', 2, 'Anak Kandung', 3, 'Sehat', 'Widoro RT 03 RT 04 Sragen', 4, '081827463572', 'Saipul', 'S1', 'Wiraswasta', '085628364527', 'Sofiya', 'S1', 'PNS', '085837263665', '13000000', '31laki.png', '31akta.png', '31ijazah.png', '31kk.png', 'Unverified', '2022-12-31'),
(37, 32, 'Danny Nugroho', 'Nugroho', 'Laki-laki', 'Sragen', '2015-08-21', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Ngoncol RT 01 RW 02 Sragen', 6, '089637827336', 'Denny', 'S1', 'Designer', '089736472334', 'Numaira', 'S1', 'Designer', '0189882735556', '15000000', '32laki.png', '32akta.png', '32ijazah.png', '32kk.png', 'Unverified', '2022-12-31'),
(38, 33, 'David Salim', 'David', 'Laki-laki', 'Sragen', '2015-01-01', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Pilangsari RT 01 RW 01 Sragen', 1, '085728382772', 'Donni', 'S1', 'Direktur', '081627482532', 'Salamah', 'S1', 'Manager', '081637483773', '30000000', '33laki.png', '33akta.png', '33ijazah.png', '33kk.png', 'Unverified', '2022-12-31'),
(39, 34, 'Denny Lim', 'Denny', 'Laki-laki', 'Sragen', '2015-02-19', 'Indonesia', 2, 'Anak Kandung', 2, 'Sehat', 'Pilangsari RT 02 RW 01 Sragen', 1, '089726382993', 'Dery', 'S1', 'Polri', '085723662738', 'Lia', 'S1', 'Polwan', '085833723723', '11000000', '34laki.png', '34akta.png', '34ijazah.png', '34kk.png', 'Unverified', '2022-12-31'),
(40, 35, 'Doni Irawan', 'Doni', 'Laki-laki', 'Ngawi', '2015-03-03', 'Indonesia', 1, 'Anak Kandung', 0, 'Sehat', 'Beloran RT 01 RW 01 Sragen', 8, '085374826382', 'Widodo', 'S1', 'Kreator', '089536726381', 'Indrawati', 'S1', 'Data Scientist', '089526381623', '20000000', '35laki.png', '35akta.png', '35ijazah.png', '35kk.png', 'Unverified', '2022-12-31'),
(41, 36, 'Eddy Iskandar', 'Eddy', 'Laki-laki', 'Sragen', '2015-02-05', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Ngrandu RT 02 RW 01 Sragen', 1, '089273846248', 'Endra', 'S1', 'Web Designer', '085628362332', 'Isnaini', 'S1', 'Backend Developer', '082267384352', '25000000', '36laki.png', '36akta.png', '36ijazah.png', '36kk.png', 'Unverified', '2022-12-31'),
(42, 37, 'Eddy Pramono', 'Eddy', 'Laki-laki', 'Karanganyar', '2015-04-08', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Teguhan RT 01 RW 01 Sragen', 2, '082738492738', 'Edo', 'S1', 'Wiraswasta', '081627382532', 'Pramasti', 'S1', 'Rumah Tangga', '089628395621', '9000000', '37laki.png', '37akta.png', '37ijazah.png', '37kk.png', 'Unverified', '2022-12-31'),
(43, 38, 'Eko Budianto', 'Eko', 'Laki-laki', 'Sragen', '2015-12-23', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Margoasri RT 02 RW 01 Sragen', 6, '082734836190', 'Darto', 'S1', 'Influencer', '085728391720', 'Bella', 'S1', 'Grapich Designer', '089716284990', '22000000', '38laki.png', '38akta.png', '38ijazah.png', '38kk.png', 'Unverified', '2022-12-31'),
(44, 39, 'Elvira Pudjiwati', 'Elvira', 'Perempuan', 'Sragen', '2015-11-20', 'Indonesia', 2, 'Anak Kandung', 2, 'Sehat', 'Sidomulyo RT 03 RW 02 Sragen', 3, '085728361283', 'Aldo', 'S1', 'Teknisi', '089723623121', 'Puji', 'S1', 'Penjahit', '089610927305', '8000000', '39perempuan.png', '39akta.png', '39ijazah.png', '39kk.png', 'Unverified', '2022-12-31'),
(45, 40, 'Era Helvani', 'Era', 'Laki-laki', 'Karanganyar', '2015-10-12', 'Indonesia', 3, 'Anak Kandung', 3, 'Sehat', 'Bagan RT 02 RW 02 Sragen', 1, '085637019284', 'Bagas', 'S1', 'Web Developer', '089162837190', 'Devi', 'S1', 'UIUX Designer', '089027381987', '18000000', '40perempuan.png', '40akta.png', '40ijazah.png', '40kk.png', 'Unverified', '2022-12-31'),
(46, 41, 'Evi Hamdani', 'Evi', 'Perempuan', 'Sragen', '2015-04-20', 'Indonesia', 3, 'Anak Kandung', 2, 'Sehat', 'Taman Agung Nglorog RT 02 RW 01 Sragen', 2, '082242783948', 'Daryanto', 'S1', 'Wiraswasta', '081092837123', 'Hemawati', 'S1', 'PNS', '0897253918908', '12000000', '41perempuan.png', '41akta.png', '41ijazah.png', '41kk.png', 'Unverified', '2022-12-31'),
(47, 42, 'Fahmi Babra', 'Fahmi', 'Laki-laki', 'Sragen', '2015-02-10', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Sidomulyo RT 01 RW 01 Sragen', 3, '085829172839', 'Fajrullah', 'S1', 'Design Arsitek', '081783990827', 'Dwiyanti', 'S1', 'Dokter', '089276812093', '23000000', '42laki.png', '42akta.png', '42ijazah.png', '42kk.png', 'Unverified', '2022-12-31'),
(48, 43, 'Farah Liza', 'Farah', 'Perempuan', 'Sragen', '2015-03-12', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Sidomulyo RT 02 RW 01 Sragen', 3, '0857820192837', 'Febri', 'S1', 'TNI', '081672837642', 'Liandra', 'S1', 'Bidan', '085829016372', '12000000', '43perempuan.png', '43akta.png', '43ijazah.png', '43kk.png', 'Unverified', '2022-12-31'),
(49, 44, 'Giovani Maria', 'Giovanni', 'Perempuan', 'Solo', '2015-07-23', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Mageru RT 02 RW 01 Sragen', 4, '0896528390123', 'Dewanto', 'S1', 'Dokter', '081567823943', 'Melda', 'S1', 'Wiraswasta', '085867223987', '30000000', '44perempuan.png', '44akta.png', '44ijazah.png', '44kk.png', 'Unverified', '2022-12-31'),
(50, 45, 'Gunawan Endi', 'Gunawan', 'Laki-laki', 'Sragen', '2015-01-22', 'Indonesia', 2, 'Anak Kandung', 2, 'Sehat', 'Margoasri RT 05 RW 01 Sragen', 7, '081928374553', 'Gading', 'S1', 'Wiraswasta', '089623812837', 'Winda', 'S1', 'Wiraswasta', '081627348625', '25000000', '45laki.png', '45akta.png', '45ijazah.png', '45kk.png', 'Unverified', '2022-12-31'),
(51, 46, 'Hadi Lukman', 'Lukman', 'Laki-laki', 'Sragen', '2015-04-26', 'Indonesia', 2, 'Anak Kandung', 2, 'Sehat', 'Beloran RT 02 RW 01 Sragen', 8, '085728391623', 'Abdur', 'S1', 'Freelance', '089623816274', 'Indah', 'S1', 'Penyiar Radio', '089127738823', '13000000', '46laki.png', '46akta.png', '46ijazah.png', '46kk.png', 'Unverified', '2022-12-31'),
(52, 47, 'Halim Podiono', 'Halim', 'Laki-laki', 'Sragen', '2015-12-11', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Nglorog RT 01 RW 05 Sragen 57215', 2, '085867128936', 'Cipto', 'S1', 'Manager', '085723819273', 'Rosline', 'S1', 'Wiraswasta', '089728937612', '20000000', '47laki.png', '47akta.png', '47ijazah.png', '47kk.png', 'Unverified', '2022-12-31'),
(53, 48, 'Anggi Hasna', 'Anggi', 'Perempuan', 'Jakarta', '2015-05-20', 'Indonesia', 2, 'Anak Kandung', 4, 'Sehat', 'Widoro RT 01 RT 02 Sragen', 5, '085627389071', 'Faizin', 'S1', 'Arsitektur', '089283761209', 'Midah', 'S1', 'Rumah Tangga', '081782576982', '23000000', '48perempuan.png', '48akta.png', '48ijazah.png', '48kk.png', 'Unverified', '2022-12-31'),
(54, 49, 'Rahma Hudaya', 'Rahma', 'Perempuan', 'Sragen', '2015-05-20', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Ngrandu RT 02 RW 01 Sragen', 1, '085872938461', 'Huda', 'S1', 'PNS', '089718274826', 'Umi', 'S1', 'PNS', '089283001927', '10000000', '49perempuan.png', '49akta.png', '49ijazah.png', '49kk.png', 'Unverified', '2022-12-31'),
(55, 50, 'Raihan Anugrah', 'Raihan', 'Laki-laki', 'Sragen', '2015-07-30', 'Indonesia', 1, 'Anak Kandung', 0, 'Sehat', 'Nglorog RT 01 RW 05 Sragen 57215', 2, '085829381726', 'Nur', 'S1', 'Wirausaha', '081728371621', 'Dewi', 'S1', 'PNS', '089826351728', '12000000', '50laki.png', '50akta.png', '50ijazah.png', '50kk.png', 'Unverified', '2022-12-31'),
(56, 51, 'Rifqi Nur Fauzi', 'Rifqi', 'Laki-laki', 'Sragen', '2015-02-10', 'Indonesia', 3, 'Anak Kandung', 3, 'Sehat', 'Nglorog RT 01 RW 05 Sragen 57215', 2, '085803252052', 'Khanifudin', 'S1', 'PNS', '085867115252', 'Ifah', 'S1', 'PNS', '08156752395', '12000000', '51laki.png', '51akta.png', '51ijazah.png', '51kk.png', 'Unverified', '2022-12-31'),
(57, 52, 'Hesti Femi', 'Hesti', 'Perempuan', 'Sragen', '2015-08-23', 'Indonesia', 2, 'Anak Kandung', 3, 'Sehat', 'Pilangsari RT 01 RW 01 Sragen', 1, '089273819274', 'Frimawan', 'S1', 'Wirausaha', '089723612872', 'Endah', 'S1', 'Wiraswasta', '085728938761', '11000000', '52perempuan.png', '52akta.png', '52ijazah.png', '52kk.png', 'Unverified', '2022-12-31'),
(58, 53, 'Ilham Akbar', 'Ilham', 'Laki-laki', 'Sragen', '2015-02-19', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Sidomulyo RT 01 RW 01 Sragen', 3, '081627389726', 'Abdullah', 'S1', 'Pengacara', '085729716284', 'Wijayanti', 'S1', 'Head Office', '081627836512', '30000000', '53laki.png', '53akta.png', '53ijazah.png', '53kk.png', 'Unverified', '2022-12-31'),
(59, 54, 'Imelda Dharma', 'Imelda', 'Perempuan', 'Sragen', '2015-06-27', 'Indonesia', 1, 'Anak Kandung', 1, 'Sehat', 'Widoro RT 01 RT 02 Sragen', 4, '089829162537', 'Imanuel', 'S1', 'Web Developer', '089263881927', 'Dwi Maya', 'S1', 'Editor', '081726849812', '23000000', '54perempuan.png', '54akta.png', '54ijazah.png', '54kk.png', 'Unverified', '2022-12-31'),
(60, 55, 'Indah Nur', 'Indah', 'Perempuan', 'Sragen', '2015-09-24', 'Indonesia', 2, 'Anak Kandung', 1, 'Sehat', 'Beloran RT 01 RW 01 Sragen', 8, '081728391283', 'Budi', 'S1', 'Wirausaha', '089725718265', 'Darwini', 'S1', 'Wirausaha', '089172891624', '15000000', '55perempuan.png', '55akta.png', '55ijazah.png', '55kk.png', 'Unverified', '2022-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `status_ppdb` varchar(10) NOT NULL,
  `tahap_lulus` text NOT NULL,
  `periode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`status_ppdb`, `tahap_lulus`, `periode`) VALUES
('Buka', '<p>Biaya Pendidikan masuk MIQA Nglorog :</p><ol><li>Bimbingan Orientasi &amp; Ta’aruf (Mei-Juni)&nbsp; &nbsp; &nbsp;: Rp.&nbsp; 360. 000</li><li>Seragam 4 Stel&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Rp.&nbsp; 860.000</li><li>Buku Paket 1 Tahun&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Rp.&nbsp; 870.&nbsp; 000</li><li>Dana Sumbangan Pendidikan (DSP)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. 3.400.000</li></ol><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rp. 5.490.000</strong></p><p><i><strong>Catatan :</strong></i></p><ol><li>Silahkan melakukan pembayaran di tempat Sekolah sebelum tanggal 10 Februari 2023</li><li>Bagi Calon Peserta Didik Baru MIQA Nglorog &nbsp;yang lulus tes seleksi maka akan diadakan Bimbingan Belajar mulai (Mei-Juni)</li><li>Dimohon orangtua/wali yang mengantarkan putra/putrinya ke sekolah mengenakan busana muslim/ah yang sopan</li><li>Perlengkapan (seragam, buku, dll) akan diberikan di tempat saat pembayaran</li></ol><p>Demikian Informasi dan petunjuk Penerimaan Siswa Baru (PSB) MIQA Nglorog Tahun Pelajaran 2022/2023</p>', 'Dibuka Tanggal 20 Januari - 25 Januari 2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_user` varchar(500) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password_user`, `tgl_daftar`) VALUES
(13, 'rifqifauzi085@gmail.com', 'rifqinrfz', '76d80224611fc919a5d54f0ff9fba446', '2022-11-30'),
(24, 'user@gmail.com', 'user', '76d80224611fc919a5d54f0ff9fba446', '2022-12-26'),
(25, 'anitakalim@gmail.com', 'anitakalim', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(26, 'antonwiratama@gmail.com', 'antonwiratama', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(27, 'Ariefsantoso@gmail.com', 'Ariefsantoso', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(28, 'Bambangsugianto@gmail.com', 'Bambangsugianto', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(29, 'Bennysetiawan@gmail.com', 'Bennysetiawan', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(30, 'Bimosurono@gmail.com', 'Bimosurono', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(31, 'Chairultanjung@gmail.com', 'Chairultanjung', '7815696ecbf1c96e6894b779456d330e', '2022-12-31'),
(32, 'Dannynugroho@gmail.com', 'DannyNugroho', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(33, 'davidsalim@gmail.com', 'davidsalim', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(34, 'dennylim@gmail.com', 'dennylim', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(35, 'doniirawan@gmail.com', 'doniirawan', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(36, 'eddyiskandar@gmail.com', 'eddyiskandar', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(37, 'eddypramono@gmail.com', 'eddypramono', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(38, 'ekobudianto@gmail.com', 'ekobudianto', '202cb962ac59075b964b07152d234b70', '2022-12-31'),
(39, 'elvirapudjiwati@gmail.com', 'elvirapudjiwati', '76d80224611fc919a5d54f0ff9fba446', '2022-12-31'),
(40, 'erahelvani@gmail.com', 'erahelvani', '5fa72358f0b4fb4f2c5d7de8c9a41846', '2022-12-31'),
(41, 'evihamdani@gmail.com', 'evihamdani', '88dd98a1298a066ef8323086b170ed86', '2022-12-31'),
(42, 'fahmibabra@gmail.com', 'fahmibabra', 'ae2483cf36c94e9f6ef358a5800f6ebd', '2022-12-31'),
(43, 'farahliza@gmail.com', 'farahliza', 'b37a7d5f9bf5ca50b61419e92c8a70cf', '2022-12-31'),
(44, 'giovanimaria@gmail.com', 'giovanimaria', 'a3933a698388925e30e906e5d5378506', '2022-12-31'),
(45, 'gunawanendi@gmail.com', 'gunawanendi', '647e88fc4570117582e8ee14233c0dba', '2022-12-31'),
(46, 'hadilukman@gmail.com', 'hadilukman', '0fa288aa6f167c6e012115cd9f909ccb', '2022-12-31'),
(47, 'halimpodiono@gmail.com', 'halimpodiono', 'f6202e2341f76df1d5d4278d0d67f41f', '2022-12-31'),
(48, 'anggihasna@gmail.com', 'anggihasna', 'c4be620d6d3e65d6258ec4902c6536b2', '2022-12-31'),
(49, 'rahmahudaya@gmail.com', 'rahmahudaya', '4ee191ab0caf03998cac0cc7c80cccd1', '2022-12-31'),
(50, 'raihananugrah@gmail.com', 'raihananugrah', '27b80aa4aa4d43ddcd32a1a730ee6f8a', '2022-12-31'),
(51, 'rifqifauzi@gmail.com', 'rifqifauzi', '582eefc05b07b9eaf1ea2d6ef033eee9', '2022-12-31'),
(52, 'hestifemi@gmail.com', 'hestifemi', '515407f3f8c59636096491acc45847a3', '2022-12-31'),
(53, 'ilhamakbar@gmail.com', 'ilhamakbar', 'cd001f551c7532318b90f31fe21bce6b', '2022-12-31'),
(54, 'imeldadharma@gmail.com', 'imeldadharma', '79df667aa91eb66b630722f3e8c0620b', '2022-12-31'),
(55, 'indahnur@gmail.com', 'indahnur', '8c1c3d8ef4a9b6cea7b1a9c73a90ddf0', '2022-12-31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_miqa`
--
ALTER TABLE `admin_miqa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_miqa`
--
ALTER TABLE `admin_miqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD CONSTRAINT `datasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
