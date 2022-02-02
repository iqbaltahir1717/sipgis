-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2021 at 04:10 PM
-- Server version: 10.2.38-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onsm8652_sitakp`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_tbl`
--

CREATE TABLE `dosen_tbl` (
  `dosen_id` char(15) NOT NULL,
  `nomor_induk` char(50) NOT NULL,
  `dosen_nama` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `kode_absensi` varchar(20) DEFAULT NULL,
  `status_absensi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen_tbl`
--

INSERT INTO `dosen_tbl` (`dosen_id`, `nomor_induk`, `dosen_nama`, `jabatan`, `pendidikan`, `status`, `kode_absensi`, `status_absensi`) VALUES
('0001', '0020107601', 'Dr. La Ode Muh. Golok Jaya, ST., MT', 7, 11, 13, NULL, 0),
('0002', '0016018301', 'Ika Purwanti Ningrum P, S.Kom., M.Cs', 8, 12, 13, NULL, 0),
('0003', '0922027601', 'Sutardi, S.Kom., MT', 8, 12, 13, NULL, 0),
('0004', '0017117606', 'Isnawaty, ST., MT', 8, 12, 13, NULL, 0),
('0005', '0025047107', 'Bambang Pramono, ST., MT', 8, 12, 13, '616675', 1),
('0006', '0014068304', 'Muh. Yamin, ST., M.Eng', 8, 12, 13, NULL, 0),
('0007', '0009096503', 'Dr. Ir. Muh. Ihsan Sarita, M.Kom', 8, 11, 13, '332077', 0),
('0008', '0007118104', 'Statiswaty, ST., M.Si', 9, 12, 13, NULL, 0),
('0009', '0022078406', 'L.M. Fid Aksara, S.Kom., M.Kom', 9, 12, 13, NULL, 0),
('0010', '0906028701', 'Jumadil Nangi, S.Kom., MT', 9, 12, 13, NULL, 0),
('0011', '0025128402', 'Natalis Ransi, S.Kom., M.Kom', 9, 12, 13, NULL, 0),
('0012', '199106232018031001', 'Adha Mashuri Sajiah, ST., M.Eng', 10, 12, 13, NULL, 0),
('0013', '8820850017', 'Rizal Adi Saputra, ST., M.Kom', 10, 12, 13, NULL, 0),
('0014', '0929098602', 'LM. Bahtiar Aksara, ST., MT', 10, 12, 13, NULL, 0),
('0015', '0003058805', 'Rahmat Ramadhan, S.Si., M.Cs', 10, 12, 14, NULL, 0),
('0016', '8806620016', 'La Surimi, S.Si., M.Cs', 10, 12, 14, NULL, 0),
('0017', '0030048107', 'Ld. Muh. Tajidun, ST., M.Eng', 10, 12, 14, '629383', 0),
('0018', '0920057902', 'Subardin, ST., MT', 10, 12, 14, NULL, 0),
('0019', '0034768900', 'Mutmainnah Muchtar, ST.,M.Kom', 10, 12, 14, NULL, NULL),
('0020', '0089245367', 'Nur Fajriah Muchlis, S.Kom.,M.Kom', 10, 12, 14, NULL, NULL),
('0021', '98076456987', 'La Ode Hasnuddin S Sagala, S.Si.,M.Cs', 10, 12, 14, NULL, NULL),
('0022', '0900988887', 'Jayanti Yusmah Sari, ST., M.Kom.', 10, 12, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_tbl`
--

CREATE TABLE `group_tbl` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_tbl`
--

INSERT INTO `group_tbl` (`group_id`, `group_name`) VALUES
(1, 'Staf'),
(2, 'Dosen'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `kp_tbl`
--

CREATE TABLE `kp_tbl` (
  `kp_id` int(11) NOT NULL,
  `kp_judul` text NOT NULL,
  `kp_tahun` int(11) NOT NULL,
  `kp_tempat` varchar(200) NOT NULL,
  `kp_ketua` varchar(50) NOT NULL,
  `kp_pembimbing` varchar(100) NOT NULL,
  `kp_file` text NOT NULL,
  `kp_pengesahan` text NOT NULL,
  `kp_anggota1` varchar(100) DEFAULT NULL,
  `kp_anggota2` varchar(100) DEFAULT NULL,
  `kp_upload_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kp_tbl`
--

INSERT INTO `kp_tbl` (`kp_id`, `kp_judul`, `kp_tahun`, `kp_tempat`, `kp_ketua`, `kp_pembimbing`, `kp_file`, `kp_pengesahan`, `kp_anggota1`, `kp_anggota2`, `kp_upload_datetime`) VALUES
(3, 'APLIKASI REKAPITULASI PERJALANAN DINAS LUAR DAERAH KOMISI INFORMASI PROVINSI SULAWESI SELATAN', 2016, 'KOMINFO Sulawesi Selatan', 'E1E113056', '0016018301', 'kp-file-E1E113056.pdf', 'kp-pengesahan-pembimbing-E1E113056.pdf', 'E1E113016', '', '2021-04-20 17:43:16'),
(4, 'SISTEM INFORMASI PENDATAAN MANAGEMENT CORE PT. TELKOM INDONESIA REGIONAL VII2016', 2016, 'PT. TELKOM  INDONESIA REGIONAL VII MAKASSAR', 'E1E113035', '0922027601', 'kp-file-E1E113035.pdf', 'kp-pengesahan-pembimbing-E1E113035.pdf', 'E1E113066', '', '2021-04-20 17:49:06'),
(5, 'APLIKASI DATA PEGAWAI BIRO ORTAPEG KANTOR GUBERNUR PROVINSI SULAWESI TENGGARA', 2016, 'KANTOR GUBERNUR PROVINSI SULAWESI TENGGARA', 'E1E113078', '0022078406', 'kp-file-E1E113078.pdf', 'kp-pengesahan-pembimbing-E1E113078.pdf', 'E1E113017', 'E1E113080', '2021-04-20 17:57:29'),
(7, 'APLIKASI DISPLAY JADWAL KEGIATAN GUBERNUR DINAS KOMINFO', 2018, 'KOMINFO SULAWESI TENGGARA', 'E1E115049', '0034768900', 'kp-file-E1E1150491.pdf', 'kp-pengesahan-pembimbing-E1E1150491.pdf', 'E1E115021', 'E1E115025', '2021-04-20 18:11:14'),
(8, 'PEMBUATAN APLIKASI KEUANGAN DINAS PERINDUSTRIAN, PERDAGANGAN, KOPERASI DAN UMKM KOTA KENDARI', 2014, 'INAS PERINDUSTRIAN, PERDAGANGAN, KOPERASI DAN UMKM KOTA KENDARI', 'E1E111035', '0922027601', 'kp-file-E1E111035.pdf', 'kp-pengesahan-pembimbing-E1E111035.pdf', 'E1E111038', '', '2021-04-20 18:16:23'),
(9, 'SISTEM INFORMASI DATA ABSENSI PEGAWAI BANK SULTRA', 2014, 'BANK SULTRA', 'E1E111055', '0014068304', 'kp-file-E1E111055.pdf', 'kp-pengesahan-pembimbing-E1E111055.pdf', 'E1E111020', '', '2021-04-20 18:23:14'),
(10, 'APLIKASI DATA KEPEGAWAIAN BAGIAN KELEMBAGAAN BIRO ORGANISASI', 2016, 'KANTOR GUBERNUR PROVINSI SULAWESI TENGGARA', 'E1E113045', '0022078406', 'kp-file-E1E113045.pdf', 'kp-pengesahan-pembimbing-E1E113045.pdf', 'E1E113071', NULL, '2021-04-20 18:31:28'),
(12, 'PEMBUATAN SISTEM INFORMASI PERSEBARAN MENARA BASE TRANSCIEVER STATION (BTS) BERBASIS JAVA DI KANTOR DINAS PERHUBUNGAN KOMUNIKASI DAN INFORMATIKA KOTA KENDARI', 2016, 'KOMINFO SULAWESI TENGGARA', 'E1E113027', '0034768900', 'kp-file-E1E113027.pdf', 'kp-pengesahan-pembimbing-E1E113027.pdf', 'E1E113019', '', '2021-04-20 19:28:37'),
(13, 'KAMUS SAINS SEKOLAH MENENGAH ATAS', 2016, 'CV TECHNOS STUDIO', 'E1E113022', '8820850017', 'kp-file-E1E113022.pdf', 'kp-pengesahan-pembimbing-E1E113022.pdf', 'E1E113054', 'E1E113058', '2021-04-20 19:36:30'),
(14, 'APLIKASI PENGARSIPAN BARANG DAN DATA PEGAWAI LSM SINTESA', 2016, 'LSM SINTESA', 'E1E113015', '98076456987', 'kp-file-E1E113015.pdf', 'kp-pengesahan-pembimbing-E1E113015.pdf', 'E1E113001', 'E1E113023', '2021-04-20 19:41:41'),
(15, 'SISTEM JARINGAN TELEPON DAN INTERNET BERBAHAN FIBER OPTIK', 2016, 'PT TELEKOMUNIKASI INDONESIA Tbk', 'E1E113026', '0014068304', 'kp-file-E1E113026.pdf', 'kp-pengesahan-pembimbing-E1E113026.pdf', '', '', '2021-04-20 19:58:07'),
(16, 'SISTEM INFORMASI REGISTRASI PELANGGAN BERBASIS WEBSITE', 2016, 'PT TELEKOMUNIKASI INDONESIA Tbk', 'E1E113043', '0014068304', 'kp-file-E1E113043.pdf', 'kp-pengesahan-pembimbing-E1E113043.pdf', 'E1E113043', '', '2021-04-21 09:54:13'),
(17, 'SISTEM INFORMASI REGISTRASI PELANGGAN BERBASIS WEBSITE', 2016, 'PT. PLAZA TELKOM CABANG KENDARI', 'E1E113055', '0014068304', 'kp-file-E1E113055.pdf', 'kp-pengesahan-pembimbing-E1E113055.pdf', 'E1E113043', 'E1E113029', '2021-04-24 09:22:19'),
(19, 'APLIKASI PERPUSTAKAAN SMKN 1 KENDARI', 2015, 'SMKN 1 KENDARI', 'E1E112030', '0906028701', 'kp-file-E1E112030.pdf', 'kp-pengesahan-pembimbing-E1E112030.pdf', 'E1E113044', 'E1E113060', '2021-04-24 09:32:20'),
(20, 'PEMBUATAN APLIKASI ANTRIAN SIDANG DI KANTOR PENGADILAN AGAMA KOTA KENDARI', 2017, 'KANTOR PENGADILAN AGAMA KOTA KENDARI', 'E1E114053', '0034768900', 'kp-file-E1E114053.pdf', 'kp-pengesahan-pembimbing-E1E114053.pdf', 'E1E114040', 'E1E114030', '2021-04-24 09:37:29'),
(21, 'PENERAPAN E-KAMUS UNTUK SISWA DI MADRASAH ALIYAH INDOTEC KENDARI', 2017, 'MADRASAH ALIYAH INDOTEC KENDARI', 'E1E113002', '0089245367', 'kp-file-E1E113002.pdf', 'kp-pengesahan-pembimbing-E1E113002.pdf', '', '', '2021-04-24 09:48:23'),
(22, 'SISTEM INFORMASI PENDATAAN SURAT MASUK DAN KELUAR DINAS SUMBER DAYA AIR DAN BINA MARGA PROVINSI SULAWESI TENGGARA', 2017, 'DINAS SUMBER DAYA AIR DAN BINA MARGA PROVINSI SULAWESI TENGGARA', 'E1E114006', '0030048107', 'kp-file-E1E114006.pdf', 'kp-pengesahan-pembimbing-E1E114006.pdf', 'E1E114042', 'E1E114077', '2021-04-24 09:50:16'),
(23, 'PEMBUATAN APLIKASI PEMOTONGAN GAJI PEGAWAI (PGP) BERBASIS JAVA DI KANTOR BRI CABANG KENDARI BYPASS', 2017, 'KANTOR BRI CABANG KENDARI BYPASS', 'E1E114067', '0034768900', 'kp-file-E1E114067.pdf', 'kp-pengesahan-pembimbing-E1E114067.pdf', 'E1E114012', 'E1E114046', '2021-04-24 09:52:19'),
(24, 'SISTEM INFORMASI PENGOLAHAN DATA SURAT DINAS PERHUBUNGAN DAN INFORMATIKA PROVINSI SULAWESI TENGGARA', 2017, 'DINAS PERHUBUNGAN DAN INFORMATIKA PROVINSI SULAWESI TENGGARA', 'E1E114080', '0025047107', 'kp-file-E1E114080.pdf', 'kp-pengesahan-pembimbing-E1E114080.pdf', 'E1E114090', 'E1E114008', '2021-04-24 09:56:50'),
(25, 'RANCANG BANGUN SISTEM PENILAIAN KINERJA PEGAWAI (KPI) BANK PEMBANGUNAN DAERAH SULAWESI TENGGARA', 2018, 'BANK PEMBANGUNAN DAERAH SULAWESI TENGGARA', 'E1E115044', '0025047107', 'kp-file-E1E115044.pdf', 'kp-pengesahan-pembimbing-E1E115044.pdf', 'E1E115050', 'E1E115092', '2021-04-24 10:27:25'),
(26, 'PEMBUATAN PERBAIKAN WEBSITE DINAS KESEHATAN PROVINSI SULAWESI TENGGARA', 2018, 'DINAS KESEHATAN PROVINSI SULAWESI TENGGARA', 'E1E115082', '0906028701', 'kp-file-E1E115082.pdf', 'kp-pengesahan-pembimbing-E1E115082.pdf', 'E1E115014', 'E1E115055', '2021-04-24 10:28:53'),
(27, 'KEPOLISIAN REPUBLIK INDONESIA RESORT KENDARI', 2018, 'KEPOLISIAN REPUBLIK INDONESIA RESORT KENDARI', 'E1E115011', '0922027601', 'kp-file-E1E115011.pdf', 'kp-pengesahan-pembimbing-E1E115011.pdf', 'E1E115039', 'E1E115058', '2021-04-24 10:30:46'),
(28, 'PEMBUATAN APLIKASI PENDATAAN SURAT MASUK DI KANTOR DINAS KOMUNIKASI, INFORMATIKA, STATISTIKA DAN PERSANDIAN KABUPATEN MUNA BARAT', 2018, 'KANTOR DINAS KOMUNIKASI, INFORMATIKA, STATISTIKA DAN PERSANDIAN KABUPATEN MUNA BARAT', 'E1E115036', '0900988887', 'kp-file-E1E115036.pdf', 'kp-pengesahan-pembimbing-E1E115036.pdf', 'E1E115041', 'E1E115015', '2021-04-24 10:32:10'),
(29, 'PEMBUATAN APLIKASI PENGINPUTAN DATA PENAGIHAN WAJIB PAJAK DI KPP PRATAMA KENDARI', 2018, 'DI KPP PRATAMA KENDARI', 'E1E115076', '0022078406', 'kp-file-E1E115076.pdf', 'kp-pengesahan-pembimbing-E1E115076.pdf', 'E1E115084', 'E1E115062', '2021-04-24 10:33:56'),
(30, 'PEMBUATAN APLIKASI KEPEGAWAIAN DINAS KOMUNIKASI DAN INFORMATIKA (KOMINFO) KENDARI', 2018, 'KOMINFO KENDARI', 'E1E115019', '0022078406', 'kp-file-E1E115019.pdf', 'kp-pengesahan-pembimbing-E1E115019.pdf', 'E1E115065', 'E1E115079', '2021-04-24 10:35:52'),
(31, 'PEMBUATAN APLIKASI CHAT BOT BPS BERBASIS WEB DI KANTOR BADAN PUSAT STATISTIKA SULAWESI TENGGARA', 2018, 'BADAN PUSAT STATISTIKA SULAWESI TENGGARA', 'E1E115054', '0922027601', 'kp-file-E1E115054.pdf', 'kp-pengesahan-pembimbing-E1E115054.pdf', 'E1E115032', 'E1E115042', '2021-04-24 10:37:37'),
(32, 'ISTALASI JARINGAN FIBER OPTIK UNTUK WILAYAH MAKASSAR DAN PEMBUATAN APLIKASI GUDANG DI KANTOR PT. SHANDY PUTRA MAKMUR CABANG MAKASSAR', 2018, 'KANTOR PT. SHANDY PUTRA MAKMUR CABANG MAKASSAR', 'E1E115034', '98076456987', 'kp-file-E1E115034.pdf', 'kp-pengesahan-pembimbing-E1E115034.pdf', 'E1E115053', 'E1E115094', '2021-04-24 10:39:20'),
(33, 'PEMBUATAN SISTEM INFORMASI PENGENALAN KOTA KOLAKA', 2018, 'KOTA KOLAKA', 'E1E115005', '0906028701', 'kp-file-E1E115005.pdf', 'kp-pengesahan-pembimbing-E1E115005.pdf', 'E1E115067', 'E1E115013', '2021-04-24 10:41:12'),
(34, 'APLIKASI SISTEM INFORMASI DINAS KEHUTANAN SULAWESI TENGGARA (DISHUT SULTRA)', 2018, 'DISHUT SULTRA', 'E1E115001', '8806620016', 'kp-file-E1E115001.pdf', 'kp-pengesahan-pembimbing-E1E115001.pdf', 'E1E115074', 'E1E115038', '2021-04-24 10:44:07'),
(35, 'APLIKASI PENCARIAN BARANG (OBAT DAN KOSMETIK) BERBASIS WEBSITE OFFLINE', 2018, 'BALAI PENGAWAS OBAT DAN MAKANAN', 'E1E115004', '0089245367', 'kp-file-E1E115004.pdf', 'kp-pengesahan-pembimbing-E1E115004.pdf', 'E1E115051', 'E1E115052', '2021-04-24 12:02:33'),
(36, 'PEMBUATAN APLIKASI REKAM MEDIS BERBASIS WEB', 2018, 'CV TECHNOS STUDIO', 'E1E115003', '0014068304', 'kp-file-E1E115003.pdf', 'kp-pengesahan-pembimbing-E1E115003.pdf', 'E1E115030', 'E1E115083', '2021-04-24 12:07:48'),
(37, 'PEMBUATAN DATA TABEL DAFTAR LISTING NOMINATIF PNS BADAN KEPEGAWAIAN DAERAH PROVINSI SULAWESI TENGGARA', 2018, 'BADAN KEPEGAWAIAN DAERAH PROVINSI SULAWESI TENGGARA', 'E1E115048', '0016018301', 'kp-file-E1E115048.pdf', 'kp-pengesahan-pembimbing-E1E115048.pdf', 'E1E115006', 'E1E115018', '2021-04-24 12:10:15'),
(38, 'SISTEM PENGADUAN MASYARAKAT TERHADAP ANGGOTA POLRI YANG MELAKUKAN PELANGGARAN PROPAM POLDA SULTRA', 2018, 'POLDA SULTRA', 'E1E115043', '8820850017', 'kp-file-E1E115043.pdf', 'kp-pengesahan-pembimbing-E1E115043.pdf', 'E1E115045', 'E1E115089', '2021-04-24 12:14:11'),
(39, 'PEMBUATAN APLIKASI KEPGAWAIAN DINAS SUMBER DAYA AIR DAN BINA MARGA PROVINSI SULAWASI TENGGARA', 2018, 'DINAS SUMBER DAYA AIR DAN BINA MARGA PROVINSI SULAWASI TENGGARA', 'E1E115008', '0003058805', 'kp-file-E1E115008.pdf', 'kp-pengesahan-pembimbing-E1E115008.pdf', 'E1E115022', 'E1E115031', '2021-04-24 12:15:47'),
(40, 'APLIKASI MANAJEMEN SURAT MENYURAT', 2018, 'DINAS PERTANIAN KOTA KENDARI', 'E1E115080', '0929098602', 'kp-file-E1E115080.pdf', 'kp-pengesahan-pembimbing-E1E115080.pdf', 'E1E115028', 'E1E115020', '2021-04-24 12:19:01'),
(41, 'PEMBUATAN APLIKASI MANAJEMEN SURAT DINAS KOMUNIKASI DAN INFORMASI (KOMINFO) PROVINSI SULAWESI TENGGARA', 2018, 'KOMINFO SULAWESI TENGGARA', 'E1E115086', '0906028701', 'kp-file-E1E115086.pdf', 'kp-pengesahan-pembimbing-E1E115086.pdf', 'E1E115046', 'E1E115068', '2021-04-24 12:21:08'),
(42, 'RANCANG BANGUN PAPAN INFORMASI DIGITAL PADA KANTOR WILAYAH KEMENTERIAN HUKUM DAN HAM SULAWESI TENGGARA', 2018, 'KEMENTERIAN HUKUM DAN HAM SULAWESI TENGGARA', 'E1E116006', '0025128402', 'kp-file-E1E116006.pdf', 'kp-pengesahan-pembimbing-E1E116006.pdf', 'E1E116010', 'E1E116020', '2021-04-24 12:23:14'),
(43, 'PEMBUATAN APLIKASI DATA KEPEGAWAIAN DI KANTOR PENGADILAN NEGERI/PHI/TIPIKOR KELAS I A KOTA KENDARI', 2019, 'PENGADILAN NEGERI/PHI/TIPIKOR KELAS I A KOTA KENDARI', 'E1E115040', '8806620016', 'kp-file-E1E115040.pdf', 'kp-pengesahan-pembimbing-E1E115040.pdf', 'E1E115056', 'E1E115060', '2021-04-24 12:24:46'),
(44, 'PEMBUATAN INFOGRAFIS PROFIL MAKASSAR DIGITAL VALLEY (MDV) MENGGUNAKAN MEDIA DESIGN GRAFIS DAN VIDEO GRAFIS', 2019, 'MAKASSAR DIGITAL VALLEY (MDV) ', 'E1E116066', '0922027601', 'kp-file-E1E116066.pdf', 'kp-pengesahan-pembimbing-E1E116066.pdf', 'E1E116052', 'E1E116008', '2021-04-24 12:26:29'),
(45, 'PEMBUATAN APLIKASI PENGARSIPAN DI KANTOR SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL PROVINSI SULAWESI TENGGARA', 2019, 'SATUAN KERJA PERENCANAAN DAN PENGAWASAN JALAN NASIONAL PROVINSI SULAWESI TENGGARA', 'E1E116004', '0009096503', 'kp-file-E1E116004.pdf', 'kp-pengesahan-pembimbing-E1E116004.pdf', 'E1E116014', 'E1E116074', '2021-04-24 12:54:36'),
(46, 'PEMBUATAN GALERI BERBASIS WEBSITE PADA DINAS KOMUNIKASI DAN INFORMATIKA (KOMINFO) PROVINSI SULAWESI TENGGARA', 2019, 'KOMINFO SULAWESI TENGGARA', 'E1E116026', '199106232018031001', 'kp-file-E1E116026.pdf', 'kp-pengesahan-pembimbing-E1E116026.pdf', 'E1E116063', 'E1E116078', '2021-04-24 12:56:51'),
(47, 'PEMBUATAN APLIKASI KOTAK SARAN BERBASIS WEBSITE DI KANTOR BADAN PUSAT STATISTIK PROVINSI SULAWESI TENGGARA', 2019, 'BADAN PUSAT STATISTIK PROVINSI SULAWESI TENGGARA', 'E1E116051', '0016018301', 'kp-file-E1E116051.pdf', 'kp-pengesahan-pembimbing-E1E116051.pdf', 'E1E116028', 'E1E116084', '2021-04-24 12:58:50'),
(48, 'PEMBUATAN SISTEM INFORMASI JALAN DINAS PEKERJAAN UMUM DAN PENATAAN RUANG  (SIJ-DPUPR) KOTA KENDARI', 2019, 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG  (DPUPR) KOTA KENDARI', 'E1E116039', '0922027601', 'kp-file-E1E116039.pdf', 'kp-pengesahan-pembimbing-E1E116039.pdf', 'E1E116040', 'E1E116087', '2021-04-24 13:00:57'),
(49, 'APLIKASI REKAPITULASI DATA PENYANDANG MASALAH KESEJAHTERAAN SOSIAL (PMKS) KANTOR DINAS SOSIAL PROVINSI SULAWESI TENGGARA', 2019, 'KANTOR DINAS SOSIAL PROVINSI SULAWESI TENGGARA', 'E1E116035', '0906028701', 'kp-file-E1E116035.pdf', 'kp-pengesahan-pembimbing-E1E116035.pdf', 'E1E116076', 'E1E116022', '2021-04-24 13:03:07'),
(50, 'PEMBUATAN APLIKASI CUSTOMER SERVICE DAN INVENTORY PADA KANTOR UD. MITRA SERVICE LG CABANG KENDARI', 2019, 'MITRA SERVICE LG CABANG KENDARI', 'E1E116003', '0007118104', 'kp-file-E1E116003.pdf', 'kp-pengesahan-pembimbing-E1E116003.pdf', 'E1E116071', 'E1E116059', '2021-04-24 13:05:17'),
(51, 'SISTEM INFORMASI PENGARSIPAN SURAT BERBASIS WEBSITE PADA DINAS KOMUNIKASI DAN INFORMASI (DISKOMINFO) PEMERINTAH KOTA KENDARI', 2019, 'KOMINFO KENDARI', 'E1E116033', '0017117606', 'kp-file-E1E116033.pdf', 'kp-pengesahan-pembimbing-E1E116033.pdf', 'E1E116038', 'E1E116092', '2021-04-24 13:06:56'),
(52, 'PEMBUATAN APLIKASI MakEMail', 2019, 'BPJS KETENAGAKERJAAN KOTA KENDARI', 'E1E116055', '0025047107', 'kp-file-E1E116055.pdf', 'kp-pengesahan-pembimbing-E1E116055.pdf', 'E1E116075', 'E1E116013', '2021-04-24 13:12:10'),
(53, 'APLIKASI PENGARSIPAN SURAT MASUK DAN KELUAR BERBASIS WEB BADAN NARKOTIKA NASIONAL PROVINSI SULAWESI TENGGARA', 2019, 'BADAN NARKOTIKA NASIONAL PROVINSI SULAWESI TENGGARAS', 'E1E116031', '0014068304', 'kp-file-E1E116031.pdf', 'kp-pengesahan-pembimbing-E1E116031.pdf', 'E1E116043', 'E1E116036', '2021-04-24 13:14:35'),
(54, 'APLIKASI LAPORAN KEUANGAN PT. FAJAR MITRA PERSADA', 2016, 'PT. FAJAR MITRA PERSADA', 'E1E113049', '8806620016', 'kp-file-.pdf', '', 'E1E113049', 'E1E113052', '2021-06-24 14:39:09'),
(55, 'APLIKASI KONVERSI DATABASE KE DATA EXEL MENGGUNAKAN JAVA', 2016, 'PT PELINDO IV MAKASSAR', 'E1E113039', '0014068304', 'kp-file-1.pdf', '', 'E1E113039', 'E1E113073', '2021-06-24 14:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tbl`
--

CREATE TABLE `kriteria_tbl` (
  `kriteria_id` char(15) NOT NULL,
  `kriteria_nama` varchar(50) NOT NULL,
  `kriteria_bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria_tbl`
--

INSERT INTO `kriteria_tbl` (`kriteria_id`, `kriteria_nama`, `kriteria_bobot`) VALUES
('C1', 'Keahlian', 5),
('C2', 'Jabatan Fungsional', 3),
('C3', 'Tingkat Pendidikan', 3),
('C4', 'Status', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_tbl`
--

CREATE TABLE `mahasiswa_tbl` (
  `mahasiswa_id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(50) NOT NULL,
  `mahasiswa_nama` varchar(200) NOT NULL,
  `mahasiswa_no_hp` varchar(20) NOT NULL,
  `mahasiswa_angkatan` varchar(10) NOT NULL,
  `mahasiswa_jk` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa_tbl`
--

INSERT INTO `mahasiswa_tbl` (`mahasiswa_id`, `mahasiswa_nim`, `mahasiswa_nama`, `mahasiswa_no_hp`, `mahasiswa_angkatan`, `mahasiswa_jk`) VALUES
(79, 'E1E113054', 'Rio Parangrengi', '085340432189', '2013', 'L'),
(81, 'E1E115024', 'La Ode Alim Al Ashar', '082291267126', '2015', 'L'),
(82, 'E1E116082', 'Rusmala Nasir', '085241027126', '2016', 'P'),
(83, 'E1E113001', 'Ahmad Bulengo ', '081232410891', '2013', 'L'),
(84, 'E1E108064', 'Ahmad Ranni', '085241589087', '2008', 'L'),
(85, 'E1E111002', 'Andi Prademon Yunus', '082134567892', '2011', 'L'),
(86, 'E1E110118', 'Apriadi Bahar', '087803242102', '2011', 'L'),
(87, 'E1E111018', 'Berliana', '087803242103', '2011', 'P'),
(88, 'E1E110123', 'Dwi Setiady', '085341290876', '2010', 'L'),
(90, 'E1E113075', 'Rahimin Wadjo', '087890987654', '2013', 'L'),
(91, 'E1E114090', 'Elza Aprilia', '082143526178', '2014', 'P'),
(92, 'E1E116040', 'Wa Ode Ermalianti', '085342098765', '2016', 'P'),
(93, 'E1E115094', 'Fachrin Kashmal', '085190876543', '2015', 'L'),
(94, 'E1E111056', 'Fina Faradila', '081234567654', '2011', 'P'),
(95, 'E1E113042', 'Ahlun Nazar', '082276543289', '2013', 'L'),
(97, 'E1E116073', 'R.M.Alfian Apriansya Diponegoro', '085342132435', '2016', 'L'),
(98, 'E1E116005', 'Ayu Windiarti', '087809234561', '2016', 'L'),
(99, 'E1E115014', 'Elsa Meilan', '081234890765', '2015', 'P'),
(100, 'E1E114072', 'Idzanul Iksan Sinatra', '085245689012', '2014', 'L'),
(101, 'E1E116083', 'Muhamad Ade Ichsan Hasibuan', '085290876543', '2016', 'L'),
(102, 'E1E115028', 'Maulid', '081234567890', '2015', 'L'),
(103, 'E1E114028', 'Novrian Syah', '081234321234', '2014', 'L'),
(104, 'E1E115046', 'Salman Al Habir', '087903242563', '2015', 'L'),
(105, 'E1E116034', 'Saskia Randawula Silondae', '081234321243', '2016', 'P'),
(106, 'E1E114073', 'Wa Ode Sitti Rahmawati', '081234321290', '2014', 'P'),
(107, 'E1E116023', 'Pratiwi Nur Aisyah', '081234678909', '2016', 'P'),
(108, 'E1E114026', 'Muh. Sakti', '082312346789', '2014', 'L'),
(109, 'E1E115025', 'La Ode Muhamad Taufik', '081234521234', '2015', 'L'),
(110, 'E1E111023', 'Mayang Putri Khairunnisa', '081234563214', '2011', 'P'),
(111, 'E1E110087', 'Muhammad Nur Annas', '081234098765', '2010', 'L'),
(112, 'E1E113024', 'Niarma', '08123456789012', '2013', 'P'),
(113, 'E1E113028', 'Riswan M Rizal', '081234678905', '2013', 'L'),
(114, 'E1E110015', 'Syahrul Mubaraq', '0823432156', '2010', 'L'),
(115, 'E1E113056', 'Ady Nopaldi Rombe', '082189076354', '2013', 'L'),
(116, 'E1E113016', 'Ld. Muhammad Arsil Sadaq', '081234565432', '2013', 'L'),
(117, 'E1E113035', 'Abdul Malik', '0878987654568', '2013', 'L'),
(118, 'E1E113066', 'Astri', '081234567890', '2013', 'P'),
(119, 'E1E113078', 'Muh. Hajar Akbar', '087809876545', '2013', 'L'),
(120, 'E1E113017', 'Ld. Ichsan Chumaidi', '0853404325678', '2013', 'L'),
(121, 'E1E113080', 'Irfan Saputra', '085212345670', '2013', 'L'),
(122, 'E1E115049', 'Tamsil Tajsam', '087809876789', '2015', 'L'),
(124, 'E1E115021', 'Ismail Yushar', '087802314524', '2015', 'L'),
(126, 'E1E111035', 'Hosil Hermansyah', '087890876543', '2011', 'L'),
(127, 'E1E111038', 'Mardhan Riyan Putra', '082234556677', '2011', 'L'),
(128, 'E1E111055', 'Muhammad Ichwan Utari', '08123432123', '2011', 'L'),
(129, 'E1E111020', 'Fandiansyah', '08123432123', '2011', 'L'),
(130, 'E1E113045', 'Ilayani', '081234321234', '2013', 'P'),
(131, 'E1E113071', 'Yana Moerti', '087809876543', '2013', 'P'),
(132, 'E1E113040', 'Andi Cintia Cicilia Gusti', '08123212344', '2013', 'P'),
(133, 'E1E113059', 'Liana', '081234567890', '2013', 'P'),
(134, 'E1E113027', 'Riskiawan Hartawan', '081232123212', '2013', 'L'),
(135, 'E1E113019', 'Maghfirah Dinsyah Febriana', '087801234321', '2013', 'P'),
(136, 'E1E113022', 'Muh. Hadri Zulkarnaen', '081234543212', '2013', 'L'),
(137, 'E1E113058', 'Rizaldy Setiawan ', '081232123456', '2013', 'L'),
(138, 'E1E113015', 'Irfan Julianto', '087809876567', '2013', 'L'),
(139, 'E1E113023', 'NENIS ANDRAYANI', '081232123490', '2013', 'P'),
(140, 'E1E113026', 'Rico Dwi Kurniawan', '081232129098', '2013', 'L'),
(141, 'E1E113067', 'Muh. Hidayat Darmawan', '081234543212', '2013', 'L'),
(142, 'E1E113055', 'Dimas Eko Prabowo Putra', '081908290384', '2013', 'L'),
(143, 'E1E113043', 'Apriliana', '082234567890', '2013', 'P'),
(144, 'E1E113036', 'Yuslan', '081234098767', '2013', 'L'),
(145, 'E1E113029', 'Rusnia', '089876709868', '2013', 'P'),
(146, 'E1E112030', 'Aklan Emroel', '087890987890', '2012', 'L'),
(147, 'E1E113044', 'Muh. Ahsan Anugerah', '08909878906', '2013', 'L'),
(148, 'E1E113060', 'Muhammad Sholeh', '0890987678987', '2013', 'L'),
(149, 'E1E114053', 'Ld. Cakra Buana', '087809876543', '2014', 'L'),
(150, 'E1E114040', 'Uun Amalia Ramadhani', '087809876544', '2014', 'P'),
(151, 'E1E114030', 'Nur Adilah', '081234321234', '2014', 'P'),
(152, 'E1E113002', 'Aisyah Euis Munanda K.', '081234543212', '2013', 'P'),
(153, 'E1E114006', 'Asmita Inda Lestari', '089878906543', '2014', 'P'),
(154, 'E1E114042', 'Wa Ode Maharani', '08767876555', '2014', 'P'),
(155, 'E1E114077', 'Oktrini Arta', '087809654433', '2014', 'P'),
(156, 'E1E114067', 'Umar Ramdani', '081122334455', '2014', 'P'),
(157, 'E1E114012', 'Fitria Rihin Uyun', '081233221122', '2014', 'P'),
(158, 'E1E114046', 'Zul Uswa', '081344332211', '2014', 'P'),
(159, 'E1E114080', 'Mugitawasi', '087788990099', '2014', 'P'),
(161, 'E1E114008', 'Bustal', '081122334455', '2014', 'L'),
(162, 'E1E115044', 'Ricky Ramadhan', '087800223311', '2015', 'L'),
(163, 'E1E115050', 'Wafiqoh Muslimin Sabbi', '081211223344', '2015', 'P'),
(164, 'E1E115092', 'Nur Icksan', '081344334455', '2015', 'L'),
(165, 'E1E115082', 'Novrina Y.N Possumah', '087809876566', '2015', 'P'),
(166, 'E1E115055', 'Ajeng Aprilya Abdullah', '081234567654', '2015', 'P'),
(167, 'E1E115011', 'Achmad Ilham Nugroho', '081234321233', '2015', 'L'),
(168, 'E1E115039', 'Adryan Khahitna', '087809889090', '2015', 'L'),
(169, 'E1E115058', 'Andika Budianto Utama', '087800990098', '2015', 'L'),
(170, 'E1E115036', 'Nina Sularida', '0878099009890', '2015', 'P'),
(171, 'E1E115041', 'Puput Armadela', '0900900098990', '2015', 'P'),
(172, 'E1E115015', 'Gita Nurlita', '081900987655', '2015', 'P'),
(173, 'E1E115076', 'Muh. Darul Zulkifli Riton', '081989098909', '2015', 'L'),
(174, 'E1E115084', 'Nur Inzani Reski Amalia', '081900990090', '2015', 'P'),
(175, 'E1E115062', 'Friska Rahayu Lestari', '082234323589', '2015', 'P'),
(176, 'E1E115019', 'Indah Lugianti', '082233445566', '2015', 'P'),
(177, 'E1E115065', 'Indri Anastasya Alam', '081234543212', '2015', 'P'),
(178, 'E1E115079', 'Muh. Fahri Rahman', '087809876545', '2015', 'L'),
(179, 'E1E115054', 'Ahmad Khairun Arsyad', '081232123322', '2015', 'L'),
(180, 'E1E115032', 'Muhammad Agus Priogo', '081232334455', '2015', 'L'),
(181, 'E1E115042', 'Ragil Manggalaging Yudanto', '089090000000', '2015', 'L'),
(182, 'E1E115034', 'Muhammad Budi Dharmawan P', '081233456789', '2015', 'L'),
(183, 'E1E115053', 'Agung Ihsya Malagani', '0812345677930', '2015', 'L'),
(184, 'E1E115005', 'Alfian', '098876536475', '2015', 'L'),
(185, 'E1E115067', 'Isra Purnama Sari', '0890999817263', '2015', 'P'),
(186, 'E1E115013', 'Elsa Andriani Permata Cindi', '081233212344', '2015', 'P'),
(187, 'E1E115001', 'Adnan Hidayat', '082190987656', '2015', 'L'),
(188, 'E1E115074', 'Muazharin Alfan', '081234321234', '2015', 'L'),
(189, 'E1E115038', 'Nur Samsuriati', '0812345677765', '2015', 'P'),
(190, 'E1E115004', 'Alba Purnama', '081233221122', '2015', 'L'),
(191, 'E1E115051', 'Wa Ode  Haida', '0852434556667', '2015', 'P'),
(192, 'E1E115052', 'Yayan Asmani Ose', '087809876543', '2015', 'P'),
(193, 'E1E115003', 'Agustina Rahman', '0888890098767', '2015', 'P'),
(194, 'E1E115030', 'Moh. La Andi Rais Imran Yatim', '081222342212', '2015', 'L'),
(195, 'E1E115083', 'Nur Aullyah', '08123456789', '2015', 'P'),
(196, 'E1E115048', 'Sitti Aisya', '089098765432', '2015', 'P'),
(197, 'E1E115006', 'Arlin', '081234565432', '2015', 'L'),
(198, 'E1E115018', 'Hasran Jaya', '081245677780', '2015', 'L'),
(199, 'E1E115043', 'Agtriyasih', '081126789097', '2015', 'L'),
(200, 'E1E115045', 'Risman Jaya', '081234567654', '2015', 'L'),
(201, 'E1E115089', 'Sariadin', '081909876543', '2015', 'L'),
(202, 'E1E115008', 'Artono Dwi Ramadhan', '0812345678900', '2015', 'L'),
(203, 'E1E115022', 'Jimly Odhelydza', '081234565431', '2015', 'L'),
(204, 'E1E115031', 'Muhamad Anan Makrifsyah Gani', '081234321234', '2015', 'L'),
(205, 'E1E115080', 'M. Izhar Akhirul Safar', '08780989098', '2015', 'L'),
(206, 'E1E115020', 'Indra Lesmana', '081234567898', '2015', 'L'),
(207, 'E1E115086', 'Rahmad Akbar', '08909876543', '2015', 'L'),
(208, 'E1E115068', 'Ivan Wahyu Hutama', '08134543213', '2015', 'L'),
(209, 'E1E116006', 'Chadek  Windy Septyawan', '08199890987', '2016', 'L'),
(210, 'E1E116010', 'Fiskar Yulian', '081234567890', '2016', 'L'),
(211, 'E1E116020', 'Nono Satria La Sandi', '081909876243', '2016', 'L'),
(212, 'E1E115040', 'Pini Astati', '099990192734', '2015', 'P'),
(213, 'E1E115056', 'Alif H. La Jumani', '081234543678', '2015', 'L'),
(214, 'E1E115060', 'Devintyo Dharmawan Kadang', '081908765456', '2015', 'L'),
(215, 'E1E116066', 'Asrif Fajar Hidayat ', '089098263546', '2016', 'L'),
(216, 'E1E116052', 'Triman Wicaksono', '081256789097', '2016', 'L'),
(217, 'E1E116008', 'Dian Nirmala', '081234565432', '2016', 'P'),
(218, 'E1E116004', 'Ayu Asriani', '081234565432', '2016', 'P'),
(219, 'E1E116014', 'Mardianti Potto', '0819098767899', '2016', 'P'),
(220, 'E1E116074', 'Abdul Azis Syah La Ode', '081909877890', '2016', 'L'),
(221, 'E1E116026', 'Ramadhin Zaid', '081290909890', '2016', 'L'),
(222, 'E1E116063', 'Ningsih', '098297483937', '2016', 'P'),
(223, 'E1E116078', 'Hasriana Dwi Dayana', '081782936489', '2016', 'P'),
(224, 'E1E116039', 'Umar Ardiansyah ', '0819092364858', '2016', 'L'),
(225, 'E1E116087', 'La Ode Muhammad Isyraq M', '081902836485', '2016', 'L'),
(226, 'E1E116035', 'Sitti Habibah', '087809876543', '2016', 'P'),
(227, 'E1E116076', 'Asmarita', '081909878690', '2016', 'P'),
(228, 'E1E116022', 'Popy Elya', '081902364758', '2016', 'P'),
(229, 'E1E116003', 'Astiti Dwi Cahya Ningrum', '081290876545', '2016', 'P'),
(230, 'E1E116071', 'Shasi Aprilia Widiyani', '081987654352', '2016', 'P'),
(231, 'E1E116059', 'Muh. Fajri Ramadhan', '081927328292', '2016', 'L'),
(232, 'E1E116051', 'Reza Sanjaya', '0822435678900', '2016', 'L'),
(233, 'E1E116028', 'Rifa\'atus Shalihah', '081909273547', '2016', 'P'),
(234, 'E1E116084', 'Wa Ode Wahyuni Makmun', '0819273474658', '2016', 'P'),
(235, 'E1E116033', 'Salmawati', '081908765435', '2016', 'P'),
(236, 'E1E116038', 'Tanti Julianingsih', '091829374647', '2016', 'P'),
(237, 'E1E116092', 'Rusliani', '087809876566', '2016', 'P'),
(238, 'E1E116055', 'Sukma Andara Lauri', '087809876534', '2016', 'P'),
(239, 'E1E116075', 'Rahmat Fajar', '0890987364758', '2016', 'L'),
(240, 'E1E116013', 'Ika Aprilia', '081234786909', '2016', 'P'),
(241, 'E1E116031', 'Safril', '081902837485', '2016', 'L'),
(242, 'E1E116043', 'Safirah Nurul Fadlilah  P', '081237586968', '2016', 'P'),
(243, 'E1E116036', 'Suci Hardina', '087890987677', '2016', 'P'),
(244, 'E1E114004', 'Amal Hendrawan', '08190827384756', '2014', 'L'),
(245, 'E1E117027', 'Atri Ilma Juni Rahim', '0821909876574', '2017', 'P'),
(246, 'E1E116009', 'Erick Herdiawan', '0891098274658', '2016', 'L'),
(247, 'E1E114019', 'Kasmira Azra', '082234321238', '2014', 'P'),
(248, 'E1E115073', 'Masrul Nggiri', '0812903847567', '2015', 'L'),
(249, 'E1E116060', 'Muhamad Fadli', '0819029384567', '2016', 'L'),
(250, 'E1E116021', 'Nurvila', '08192038476712', '2016', 'P'),
(251, 'E1E114070', 'Risandi Wahidul Kahar', '08192038476754', '2014', 'L'),
(252, 'E1E116061', 'Sonia Lamani', '082234329087', '2016', 'P'),
(253, 'E1E116049', 'Alfrido Rahmat Julianto Pidani', '0878909874634', '2016', 'L'),
(254, 'E1E117040', 'Muhamad Danil', '081234543290', '2017', 'L'),
(255, 'E1E113049', 'WA ODE ZAMALIA', '081234567898', '2013', 'P'),
(256, 'E1E113039', 'AKHMAD IRSYAD', '087896543212', '2013', 'L'),
(257, 'E1E113004', 'ANNISYAH JANUARTI', '081232124590', '2013', 'P'),
(258, 'E1E113038', 'KADEK EDY SUTRAWAN MARTA YOGA', '081232128907', '2013', 'L'),
(259, 'E1E113073', 'HASNAWATI MUNANDAR', '081232109890', '2013', 'P'),
(260, 'E1E113052', 'NURFANNY LA BENNY', '081209876567', '2013', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `setting_tbl`
--

CREATE TABLE `setting_tbl` (
  `setting_id` int(11) NOT NULL,
  `setting_appname` varchar(100) NOT NULL,
  `setting_short_appname` varchar(20) NOT NULL,
  `setting_origin_app` varchar(100) NOT NULL,
  `setting_owner_name` varchar(100) NOT NULL,
  `setting_phone` varchar(50) NOT NULL,
  `setting_email` varchar(100) NOT NULL,
  `setting_address` text NOT NULL,
  `setting_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting_tbl`
--

INSERT INTO `setting_tbl` (`setting_id`, `setting_appname`, `setting_short_appname`, `setting_origin_app`, `setting_owner_name`, `setting_phone`, `setting_email`, `setting_address`, `setting_logo`) VALUES
(1, 'SISTEM INFORMASI PENCARIAN TUGAS AKHIR DAN KERJA PRAKTEK', 'SIPETAK', 'Universitas Halu Oleo', 'Teknik Informatika', '(0401) - 0000 000', 'fitnawati@gmail.com', 'Perdos Blok X Nomor 14', 'settinglogo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi_tbl`
--

CREATE TABLE `skripsi_tbl` (
  `skripsi_id` int(11) NOT NULL,
  `mahasiswa_nim` varchar(50) NOT NULL,
  `skripsi_judul` text NOT NULL,
  `skripsi_waktu_selesai` date NOT NULL,
  `skripsi_upload_datetime` datetime NOT NULL,
  `skripsi_file_full` text NOT NULL,
  `skripsi_pembimbing_1` varchar(100) NOT NULL,
  `skripsi_pembimbing_2` varchar(100) NOT NULL,
  `skripsi_penguji_1` varchar(100) NOT NULL,
  `skripsi_penguji_2` varchar(100) NOT NULL,
  `skripsi_penguji_3` varchar(100) NOT NULL,
  `skripsi_pengesahan_pembimbing` text NOT NULL,
  `skripsi_pengesahan_penguji` text NOT NULL,
  `skripsi_file_separuh` text NOT NULL,
  `skripsi_status` int(11) NOT NULL,
  `skripsi_komentar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi_tbl`
--

INSERT INTO `skripsi_tbl` (`skripsi_id`, `mahasiswa_nim`, `skripsi_judul`, `skripsi_waktu_selesai`, `skripsi_upload_datetime`, `skripsi_file_full`, `skripsi_pembimbing_1`, `skripsi_pembimbing_2`, `skripsi_penguji_1`, `skripsi_penguji_2`, `skripsi_penguji_3`, `skripsi_pengesahan_pembimbing`, `skripsi_pengesahan_penguji`, `skripsi_file_separuh`, `skripsi_status`, `skripsi_komentar`) VALUES
(2, 'E1E113054', 'PENERAPAN ALGORITMA FLOOD FILL PADA ROBOT WALL FOLLOWER UNTUK MENEMUKAN JALUR TERCEPAT PADA SEBUAH LABIRIN', '2017-07-02', '2021-04-15 17:40:31', 'skripsi-full-E1E113054.pdf', '0017117606', '0030048107', '0034768900', '0089245367', '0014068304', 'pengesahan-pembimbing-E1E113054.pdf', 'pengesahan-penguji-E1E113054.pdf', 'skripsi-sebagian-E1E113054.pdf', 1, ''),
(3, 'E1E113075', 'IMPLEMENTASI WIRELESS SENSOR NETWORK UNTUK MONITORING PARAMETER ENERGI LISTRIK BERBASIS ANDROID SEBAGAI PENINGKATAN LAYANAN BAGI PENYEDIA ENERGI LISTRIK', '2020-12-12', '2021-06-03 16:44:07', 'skripsi-full-E1E113075', '0014068304', '0022078406', '0017117606', '0922027601', '0920057902', 'pengesahan-pembimbing-E1E113075', 'pengesahan-penguji-E1E113075', 'skripsi-sebagian-E1E113075', 1, ''),
(4, 'E1E115024', 'Analisis Access Point (AP) Indoor Dual Band Pada Frekuensi 5 GHz dan Frekuensi 2,4 GHz Menggunakan Access Point AC6 Indoor', '2020-12-10', '2021-04-15 21:43:10', 'skripsi-full-E1E115024.pdf', '0014068304', '0022078406', '0922027601', '8806620016', '0906028701', 'pengesahan-pembimbing-E1E115024.pdf', 'pengesahan-penguji-E1E115024.pdf', 'skripsi-sebagian-E1E115024.pdf', 1, ''),
(5, 'E1E116082', 'PENERAPAN LOAD BALANCING MENGGUNAKAN METODE PCC (PER CONNECTION CLASSIFIER) DAN METODE NTH (KONEKSI KE-N) PADA 2 (DUA) ISP (INTERNET SERVICE PROVIDER)', '2020-12-10', '2021-04-15 21:54:19', 'skripsi-full-E1E116082.pdf', '0014068304', '0022078406', '0922027601', '8806620016', '0929098602', 'pengesahan-pembimbing-E1E116082.pdf', 'pengesahan-penguji-E1E116082.pdf', 'skripsi-sebagian-E1E116082.pdf', 0, ''),
(6, 'E1E113001', 'RANCANG BANGUN SISTEM MONITORING SUHU DAN KELEMBABAN RUANG SERVER MENGGUNAKAN JARINGAN SENSOR NIRKABEL BERBASIS ANDROID', '2020-12-08', '2021-04-15 22:00:42', 'skripsi-full-E1E113001.pdf', '0017117606', '0014068304', '0922027601', '0022078406', '8806620016', 'pengesahan-pembimbing-E1E113001.pdf', 'pengesahan-penguji-E1E113001.pdf', 'skripsi-sebagian-E1E113001.pdf', 0, ''),
(7, 'E1E108064', 'PERENCANAAN PEMBANGUNAN APLIKASI PENGINGAT JADWAL PERKULIAHAN BERBASIS SMS GATEWAY', '2012-07-05', '2021-06-03 17:41:46', 'skripsi-full-E1E108064', '0025047107', '0007118104', '0920057902', '0030048107', '0016018301', 'pengesahan-pembimbing-E1E108064', 'pengesahan-penguji-E1E108064', 'skripsi-sebagian-E1E108064', 1, ''),
(8, 'E1E111002', 'VISITOR GUIDE FAKULTAS TEKNIK UNIVERSITAS HALU OLEO BERBASIS 3D GAME SIMULATOR DESKTOP DENGAN ALGORITMA DIJKSTRA', '2015-10-28', '2021-04-15 22:09:41', 'skripsi-full-E1E111002.pdf', '0025047107', '0014068304', '0089245367', '0016018301', '0022078406', 'pengesahan-pembimbing-E1E111002.pdf', 'pengesahan-penguji-E1E111002.pdf', 'skripsi-sebagian-E1E111002.pdf', 1, ''),
(9, 'E1E110118', 'PENENTUAN STRATEGI PENJUALAN ALAT-ALAT TATTOO DI STUDIO SONYX TATTOO MENGGUNAKAN METODE K-MEANS CLUSTERING', '2020-06-12', '2021-04-15 22:29:27', 'skripsi-full-E1E1101181.pdf', '0025047107', '98076456987', '0920057902', '0022078406', '0089245367', 'pengesahan-pembimbing-E1E1101181.pdf', 'pengesahan-penguji-E1E1101181.pdf', 'skripsi-sebagian-E1E1101181.pdf', 0, ''),
(10, 'E1E111018', 'PENERAPAN ALGORITMA C4.5 DALAM MEMPREDIKSI PENYAKIT GANGGUAN FUNGSI HATI (LIVER)', '2016-01-18', '2021-04-15 22:27:40', 'skripsi-full-E1E111018.PDF', '0025047107', '0089245367', '0922027601', '8820850017', '98076456987', 'pengesahan-pembimbing-E1E111018.pdf', 'pengesahan-penguji-E1E111018.pdf', 'skripsi-sebagian-E1E111018.pdf', 0, ''),
(11, 'E1E110123', 'PERANCANGAN SISTEM PENGEREMAN OTOMATIS PADA MOBIL BERBASIS MIKROKONTROLER MENGGUNAKAN LOGIKA FUZZY TSUKAMOTO', '2015-07-08', '2021-04-15 22:36:06', 'skripsi-full-E1E110123.pdf', '0025047107', '0022078406', '0003058805', '0017117606', '0089245367', 'pengesahan-pembimbing-E1E110123.pdf', 'pengesahan-penguji-E1E110123.pdf', 'skripsi-sebagian-E1E110123.pdf', 1, ''),
(12, 'E1E114090', 'IMPLEMENTASI PERBANDINGAN ALGORITMA 3DES DAN AES DALAM MENGENKRIPSI BERKAS TERINTEGRASI PADA LAYANAN CLOUD STORAGE', '2019-11-12', '2021-04-15 23:24:14', 'skripsi-full-E1E114090.pdf', '0014068304', '0922027601', '0009096503', '0016018301', '0030048107', 'pengesahan-pembimbing-E1E114090.pdf', 'pengesahan-penguji-E1E114090.pdf', 'skripsi-sebagian-E1E114090.pdf', 1, ''),
(13, 'E1E116040', 'SISTEM PENDUKUNG PENGAMBILAN KEPUTUSAN DALAM PENENTUAN PENERIMA BANTUAN BEDAH RUMAH DENGAN MENGGUNAKAN METODE Clustering K-Means dan Fuzzy Analitical Hierarchy Process (F-AHP)', '2020-06-23', '2021-04-15 23:27:04', 'skripsi-full-E1E116040.pdf', '0025047107', '0025128402', '0016018301', '0007118104', '199106232018031001', 'pengesahan-pembimbing-E1E116040.pdf', 'pengesahan-penguji-E1E116040.pdf', 'skripsi-sebagian-E1E116040.pdf', 1, ''),
(14, 'E1E115094', 'PERANCANGAN DAN IMPLEMENTASI ANTENA MIKROSTRIP MODEL BIQUAD SINGLE ARRAY UNTUK ACCESS POINT PADA SITE WLAN 2,4 GHz', '2020-07-12', '2021-04-15 23:30:07', 'skripsi-full-E1E115094.pdf', '0014068304', '0022078406', '0009096503', '8806620016', '0906028701', 'pengesahan-pembimbing-E1E115094.pdf', 'pengesahan-penguji-E1E115094.pdf', 'skripsi-sebagian-E1E115094.pdf', 1, ''),
(15, 'E1E111056', 'APLIKASI AL-QURAN BERBASIS ANDROID MENGGUNAKAN METODE SEQUENTIAL SEARCH', '2016-04-24', '2021-04-15 23:35:53', 'skripsi-full-E1E111056.PDF', '0025047107', '0089245367', '0017117606', '8806620016', '0906028701', 'pengesahan-pembimbing-E1E111056.pdf', 'pengesahan-penguji-E1E111056.pdf', 'skripsi-sebagian-E1E111056.pdf', 1, ''),
(16, 'E1E113042', 'RANCANG BANGUN ALAT PENDETEKSI KUALITAS TELUR BERBASIS ANDROID', '2020-12-14', '2021-04-16 04:34:42', 'skripsi-full-E1E1130421.pdf', '0014068304', '0906028701', '0009096503', '0017117606', '0007118104', 'pengesahan-pembimbing-E1E1130421.pdf', 'pengesahan-penguji-E1E1130421.pdf', 'skripsi-sebagian-E1E1130421.pdf', 1, ''),
(17, 'E1E116073', 'IMPLEMENTASI STRING MATCHING ALGORITMA RAITA UNTUK PENCARIAN DATA DALAM PEMBUATAN APLIKASI MANAJEMEN ARSIP PENGALAMAN BIMBINGAN LAPANGAN (PBL)', '2020-07-21', '2021-04-15 23:40:50', 'skripsi-full-E1E116073.pdf', '0025047107', '8820850017', '0922027601', '0007118104', '0030048107', 'pengesahan-pembimbing-E1E116073.pdf', 'pengesahan-penguji-E1E116073.pdf', 'skripsi-sebagian-E1E116073.pdf', 1, ''),
(18, 'E1E116005', 'IMPLEMENTASI METODE BLUM BLUM SHUB (BBS) UNTUK PENGACAKAN SOAL KUIS PADA APLIKASI MEDIA PEMBELAJARAN IPA TINGKAT SEKOLAH DASAR KELAS 6 BERBASIS MOBILE', '2021-10-12', '2021-04-15 23:43:19', 'skripsi-full-E1E116005.pdf', '0009096503', '8820850017', '0016018301', '199106232018031001', '0022078406', 'pengesahan-pembimbing-E1E116005.pdf', 'pengesahan-penguji-E1E116005.pdf', 'skripsi-sebagian-E1E116005.pdf', 1, ''),
(19, 'E1E115014', 'RANCANG BANGUN APLIKASI KANOPI OTOMATIS BERBASIS ANDROID MENGGUNAKAN LOGIKA FUZZY TSUKAMOTO', '2020-07-12', '2021-04-15 23:45:54', 'skripsi-full-E1E115014.pdf', '0017117606', '0014068304', '0020107601', '0025128402', '199106232018031001', 'pengesahan-pembimbing-E1E115014.pdf', 'pengesahan-penguji-E1E115014.pdf', 'skripsi-sebagian-E1E115014.pdf', 1, ''),
(20, 'E1E114072', 'PERBANDINGAN KEEFEKTIFAN METODE WEIGHTED MOVING AVERAGE DAN SINGLE EXPONENTIAL SMOOTHING UNTUK PERAMALAN JUMLAH PELANGGAN TELKOMSEL', '2019-07-12', '2021-04-15 23:48:34', 'skripsi-full-E1E114072.pdf', '0025047107', '0007118104', '0922027601', '8820850017', '0030048107', 'pengesahan-pembimbing-E1E114072.pdf', 'pengesahan-penguji-E1E114072.pdf', 'skripsi-sebagian-E1E114072.pdf', 0, ''),
(21, 'E1E116083', 'Penerapan Metode Fuzzy MADM Model WP (Weighted Product) Untuk Pemilihan Dosen Berprestasi Pada Universitas Halu Oleo', '2020-08-28', '2021-04-15 23:51:17', 'skripsi-full-E1E116083.pdf', '0020107601', '0007118104', '0009096503', '0016018301', '0920057902', 'pengesahan-pembimbing-E1E116083.pdf', 'pengesahan-penguji-E1E116083.pdf', 'skripsi-sebagian-E1E116083.pdf', 1, ''),
(22, 'E1E115028', 'IMPLEMENTASI DAN ANALISIS ACCESS POINT 5 GHZ MENGGUNAKAN METODE MANUAL RANDOM SAMPLING DAN CONVERGE VISUALIZATION', '2019-12-02', '2021-04-16 03:53:15', 'skripsi-full-E1E115028.pdf', '0014068304', '0022078406', '0922027601', '8806620016', '0929098602', 'pengesahan-pembimbing-E1E115028.pdf', 'pengesahan-penguji-E1E115028.pdf', 'skripsi-sebagian-E1E115028.pdf', 1, ''),
(23, 'E1E114028', 'PENGEMBANGAN VIRTUAL PRIVATE NETWORK (VPN) PADA PRIVATE CLOUD BERBASIS OPENSOURCE MENGGUNAKAN OPENVPN', '2020-10-12', '2021-04-16 03:55:25', 'skripsi-full-E1E114028.pdf', '0014068304', '0022078406', '0922027601', '0007118104', '0920057902', 'pengesahan-pembimbing-E1E114028.pdf', 'pengesahan-penguji-E1E114028.pdf', 'skripsi-sebagian-E1E114028.pdf', 1, ''),
(24, 'E1E115046', 'SISTEM KONTROL DAN MONITORING INFUS DENGAN MODUL WIFI ESP 8266 BERBASIS MIKROKONTROLER', '2020-01-13', '2021-04-16 03:57:43', 'skripsi-full-E1E115046.pdf', '0014068304', '8806620016', '0020107601', '0017117606', '0022078406', 'pengesahan-pembimbing-E1E115046.pdf', 'pengesahan-penguji-E1E115046.pdf', 'skripsi-sebagian-E1E115046.pdf', 1, ''),
(25, 'E1E116034', 'PENERAPAN ALGORITMA K-MEDOIDS DALAM PENENTUAN FAKTOR TERBESAR SUMBER INFORMASI PEMILIHAN JURUSAN DI FAKULTAS TEKNIK UNIVERSITAS HALU OLEO', '2020-12-07', '2021-04-16 04:00:11', 'skripsi-full-E1E116034.pdf', '0922027601', '0007118104', '0020107601', '0025128402', '0906028701', 'pengesahan-pembimbing-E1E116034.pdf', 'pengesahan-penguji-E1E116034.pdf', 'skripsi-sebagian-E1E116034.pdf', 1, ''),
(26, 'E1E114073', 'IMPLEMENTASI SISTEM KEAMANAN DATA DENGAN MENGGUNAKAN ALGORITMA RIVEST SHAMIR ADLEMAN (RSA) DAN SECURE HASH -1 (SHA-1)', '2020-01-12', '2021-04-16 04:02:53', 'skripsi-full-E1E114073.pdf', '0014068304', '0906028701', '0922027601', '0929098602', '199106232018031001', 'pengesahan-pembimbing-E1E114073.pdf', 'pengesahan-penguji-E1E114073.pdf', 'skripsi-sebagian-E1E114073.pdf', 1, ''),
(27, 'E1E116023', 'GAME EDUKASI BERBASIS ANDROID UNTUK ANAK USIA DINI MENGGUNAKAN LINEAR CONGRUENT METHOD (LCM)', '2020-12-08', '2021-04-16 04:05:09', 'skripsi-full-E1E116023.pdf', '0016018301', '0007118104', '0020107601', '0022078406', '8820850017', 'pengesahan-pembimbing-E1E116023.pdf', 'pengesahan-penguji-E1E116023.pdf', 'skripsi-sebagian-E1E116023.pdf', 1, ''),
(28, 'E1E114026', 'IMPLEMENTASI FTP SERVER MENGGUNAKAN METODE TRANSFER LAYER SECURITY (TLS) DAN SECURE SOCKET LAYER (SSL) UNTUK KEAMANAN TRANSFER DATA PADA JARINGAN WIRELESS', '2019-11-12', '2021-04-16 04:07:02', 'skripsi-full-E1E114026.pdf', '0014068304', '0017117606', '0025047107', '8806620016', '0920057902', 'pengesahan-pembimbing-E1E114026.pdf', 'pengesahan-penguji-E1E114026.pdf', 'skripsi-sebagian-E1E114026.pdf', 0, ''),
(29, 'E1E115025', 'ANALISIS PERBANDINGAN ALGORITMA PENJADWALAN ROUND ROBIN DAN SHORTEST JOB FISRT UNTUK MANAJEMEN PROSES DALAM SINGLE PROCESSING', '2020-01-12', '2021-04-16 04:09:14', 'skripsi-full-E1E115025.pdf', '0014068304', '0022078406', '0922027601', '0025128402', '0929098602', 'pengesahan-pembimbing-E1E115025.pdf', 'pengesahan-penguji-E1E115025.pdf', 'skripsi-sebagian-E1E115025.pdf', 1, ''),
(30, 'E1E111023', 'IMPLEMENTASI ALGORITMA TABU SEARCH PADA APLIKASI PENJADWALAN MATA PELAJARAN (Studi Kasus : SMA Negeri 4 Kendari)', '2020-07-29', '2021-04-16 04:11:11', 'skripsi-full-E1E111023.pdf', '0025047107', '8820850017', '0025128402', '0034768900', '0089245367', 'pengesahan-pembimbing-E1E111023.pdf', 'pengesahan-penguji-E1E111023.pdf', 'skripsi-sebagian-E1E111023.pdf', 1, ''),
(31, 'E1E110087', 'ANDROID MOBILETRACKING DAN APPLICATIONSECURITY LOCK MENGGUNAKAN ALGORITMA RSA (RIVEST SHAMIR ADLEMAN', '2015-10-12', '2021-04-16 04:13:37', 'skripsi-full-E1E110087.pdf', '0025047107', '8806620016', '0920057902', '0017117606', '8806620016', 'pengesahan-pembimbing-E1E110087.pdf', 'pengesahan-penguji-E1E110087.pdf', 'skripsi-sebagian-E1E110087.pdf', 0, ''),
(32, 'E1E113024', 'APLIKASI PENJADWALAN MATA PELAJARAN MENGGUNAKAN ALGORITMA WELCH POWELL (Studi Kasus : SMA Muhammadiyah Kendari)', '2017-10-01', '2021-04-16 04:15:25', 'skripsi-full-E1E113024.pdf', '0025047107', '0030048107', '0020107601', '0003058805', '0034768900', 'pengesahan-pembimbing-E1E113024.pdf', 'pengesahan-penguji-E1E113024.pdf', 'skripsi-sebagian-E1E113024.pdf', 1, ''),
(33, 'E1E113028', 'RANCANG BANGUN SISTEM OTOMATISASI PROTOTYPE RUANG KUMBUNG JAMUR TIRAM BERBASIS INTERNET OF THINGS (IOT)', '2019-10-12', '2021-04-16 04:17:32', 'skripsi-full-E1E113028.pdf', '0017117606', '0007118104', '0025047107', '0030048107', '0906028701', 'pengesahan-pembimbing-E1E113028.pdf', 'pengesahan-penguji-E1E113028.pdf', 'skripsi-sebagian-E1E113028.pdf', 1, ''),
(34, 'E1E110015', 'PERANCANGAN DAN IMPLEMENTASI PROTOTYPE HOME AUTOMATIZATION PENERANGAN RUANGAN FOR ENERGY SAVING BERBASIS FUZZY TSUKAMOTO', '2015-10-15', '2021-04-16 04:19:38', 'skripsi-full-E1E110015.pdf', '0025047107', '0017117606', '0003058805', '0030048107', '0089245367', 'pengesahan-pembimbing-E1E110015.pdf', 'pengesahan-penguji-E1E110015.pdf', 'skripsi-sebagian-E1E110015.pdf', 1, ''),
(35, 'E1E116049', 'PENGIMPLEMENTASIAN INTERNET OF THINGS (IoT) DALAM MONITORING KWH METER LISTRIK BERBASIS MOBILE8', '2020-12-08', '2021-05-23 09:20:35', 'skripsi-full-E1E116049.pdf', '0017117606', '0007118104', '0025047107', '8820850017', '0030048107', 'pengesahan-pembimbing-E1E116049.pdf', 'pengesahan-penguji-E1E116049.pdf', 'skripsi-sebagian-E1E116049.pdf', 1, ''),
(36, 'E1E116061', 'PENERAPAN ALGORITMA HASH BASED PADA TRANSAKSI PENJUALAN MENGGUNAKAN ATURAN ASOSIASI UNTUK MENGATUR PENEMPATAN BARANG DI MINIMARKET (STUDI KASUS: FC AKBAR.COM KENDARI', '2021-01-20', '2021-05-23 09:22:59', 'skripsi-full-E1E116061.pdf', '0922027601', '199106232018031001', '0020107601', '0906028701', '8820850017', 'pengesahan-pembimbing-E1E116061.pdf', 'pengesahan-penguji-E1E116061.pdf', 'skripsi-sebagian-E1E116061.pdf', 1, ''),
(37, 'E1E114070', 'ANALISIS PERBANDINGAN METODE SECURE SOCKET TUNNELING PROTOCOL (SSTP) DAN POINT TO POINT TUNNELING PROTOCOL (PPTP) PADA JARINGAN VIRTUAL PRIVATE NETWORK (VPN) MIKROTIK', '2021-04-20', '2021-05-23 09:25:16', 'skripsi-full-E1E114070.pdf', '0017117606', '8806620016', '0014068304', '0922027601', '0929098602', 'pengesahan-pembimbing-E1E114070.pdf', 'pengesahan-penguji-E1E114070.pdf', 'skripsi-sebagian-E1E114070.pdf', 1, ''),
(38, 'E1E116021', 'ANALISIS QUALITY of SERVICE (QoS) JARINGAN NIRKABEL PADA PERMAINAN GAME ONLINE MENGGUNAKAN METODE PEER CONNECTION QUEUE (PCQ) DENGAN ANTRIAN QUEUE TREE', '2021-04-15', '2021-05-23 09:27:36', 'skripsi-full-E1E116021.pdf', '0017117606', '0022078406', '0014068304', '8806620016', '0929098602', 'pengesahan-pembimbing-E1E116021.pdf', 'pengesahan-penguji-E1E116021.pdf', 'skripsi-sebagian-E1E116021.pdf', 1, ''),
(39, 'E1E116060', 'IMPLEMENTASI INTERNET OF THINGS (IOT) SISTEM KEAMANAN ANTI MALING KENDARAAN SEPEDA MOTOR', '2021-04-15', '2021-05-23 09:30:04', 'skripsi-full-E1E116060.pdf', '0014068304', '0929098602', '0017117606', '8806620016', '0929098602', 'pengesahan-pembimbing-E1E116060.pdf', 'pengesahan-penguji-E1E116060.pdf', 'skripsi-sebagian-E1E116060.pdf', 1, ''),
(40, 'E1E115073', 'RANCANG BANGUN SMART GARDEN BERBASIS INTERNET OF THINGS', '2021-04-15', '2021-05-23 09:32:37', 'skripsi-full-E1E115073.pdf', '0014068304', '8806620016', '0017117606', '0022078406', '199106232018031001', 'pengesahan-pembimbing-E1E115073.pdf', 'pengesahan-penguji-E1E115073.pdf', 'skripsi-sebagian-E1E115073.pdf', 1, ''),
(41, 'E1E114019', 'IMPLEMENTASI ALGORITMA HUFFMAN CODING DAN METODE STEGANOGRAFI LEAST SIGNIFICANT BIT (LSB) UNTUK PENGAMANAN PESAN TEKS PADA BERKAS AUDIO WAV', '2021-04-20', '2021-06-20 15:21:33', 'skripsi-full-E1E114019', '0025047107', '0922027601', '0014068304', '0929098602', '8820850017', 'pengesahan-pembimbing-E1E114019', 'pengesahan-penguji-E1E114019', 'skripsi-sebagian-E1E114019', 0, ''),
(42, 'E1E116009', 'KOREKSI KESALAHAN EJAAN KATA KUNCI PADA PENCARIAN KAMUS PSIKOLOGI DENGAN ALGORITMA JARO WINKLER DISTANCE BERBASIS MOBILE', '2020-12-14', '2021-06-02 01:32:01', 'skripsi-full-E1E116009.pdf', '0016018301', '199106232018031001', '0020107601', '0922027601', '0025047107', 'pengesahan-pembimbing-E1E116009.pdf', 'pengesahan-penguji-E1E116009.pdf', 'skripsi-sebagian-E1E116009.pdf', 1, ''),
(43, 'E1E117027', 'SYSTEM LIBRARY VIDEO PEMBELAJARAN APPLIED BAHAVIOR ANALISIS (ABA) UNTUK ANAK AUTIS BERBASIS MOBILE MENGGUNAKAN METODE KNUTH MORRIS PRATT (KMP) (STUDI KASUS: SEKOLAH LUAR BIASA AKSARA CENTER)', '2021-04-12', '2021-05-23 09:39:32', 'skripsi-full-E1E117027.pdf', '0007118104', '0906028701', '0020107601', '0030048107', '199106232018031001', 'pengesahan-pembimbing-E1E117027.pdf', 'pengesahan-penguji-E1E117027.pdf', 'skripsi-sebagian-E1E117027.pdf', 1, ''),
(44, 'E1E114004', 'IMPLEMENTASI TEKNOLOGI INTERNET OF THINGS (IOT) DALAM MERANCANG ALAT PENGUKUR KADAR POLUSI UDARA (CO - CO2) MENGGUNAKAN SENSOR MQ-7 Dan MQ-135', '2021-04-12', '2021-05-23 09:43:20', 'skripsi-full-E1E114004.pdf', '0017117606', '0014068304', '0020107601', '0922027601', '8820850017', 'pengesahan-pembimbing-E1E114004.pdf', 'pengesahan-penguji-E1E114004.pdf', 'skripsi-sebagian-E1E114004.pdf', 1, ''),
(45, 'E1E116066', 'IDENTIFIKASI LANDMARK SELLA, NASION DAN MENTON CEPHALOMETRY MENGGUNAKAN METODE CONVOLUTIONAL NEURAL NETWORKS (CNN)', '2020-12-21', '2021-05-23 09:47:35', 'skripsi-full-E1E116066.pdf', '0016018301', '8820850017', '0009096503', '199106232018031001', '0929098602', 'pengesahan-pembimbing-E1E116066.pdf', 'pengesahan-penguji-E1E116066.pdf', 'skripsi-sebagian-E1E116066.pdf', 1, ''),
(46, 'E1E116004', 'Penerapan Metode Autoregressive Integrated Moving Average (ARIMA) Pada Indeks Harga Konsumen (IHK) Dalam Inflation Forecasting System (Studi Kasus Badan Pusat Statistik Kota Kendari)', '2020-12-20', '2021-05-23 09:51:10', 'skripsi-full-E1E116004.pdf', '0020107601', '199106232018031001', '0025047107', '0906028701', '0030048107', 'pengesahan-pembimbing-E1E116004.pdf', 'pengesahan-penguji-E1E116004.pdf', 'skripsi-sebagian-E1E116004.pdf', 1, ''),
(47, 'E1E116074', 'IMPLEMENTASI METODE VIOLA-JONES DAN EIGENFACES PADA SISTEM PENGENALAN WAJAH SECARA REALTIME MENGGUNAKAN CIRCUIT CLOSED TELEVISION (CCTV)', '2020-11-11', '2021-05-23 09:54:21', 'skripsi-full-E1E116074.pdf', '0016018301', '8820850017', '0009096503', '0025047107', '0007118104', 'pengesahan-pembimbing-E1E116074.pdf', 'pengesahan-penguji-E1E116074.pdf', 'skripsi-sebagian-E1E116074.pdf', 1, ''),
(48, 'E1E116014', 'DIAGNOSIS PENYAKIT DIABETES MELLITUS DAN PENENTUAN POLA MAKAN MENGGUNAKAN METODE CASE BASED REASONING', '2021-01-27', '2021-05-23 09:57:12', 'skripsi-full-E1E116014.pdf', '0016018301', '199106232018031001', '0009096503', '0025128402', '0929098602', 'pengesahan-pembimbing-E1E116014.pdf', 'pengesahan-penguji-E1E116014.pdf', 'skripsi-sebagian-E1E116014.pdf', 1, ''),
(49, 'E1E114077', 'RANCANG BANGUN CLOUD SERVER BERBASIS OPEN SOURCE UNTUK MEDIA LAYANAN MAIL CLIENT MENGGUNAKAN ZIMBRA', '2021-03-12', '2021-05-23 09:59:24', 'skripsi-full-E1E114077.pdf', '0014068304', '0920057902', '0022078406', '0030048107', '0906028701', 'pengesahan-pembimbing-E1E114077.pdf', 'pengesahan-penguji-E1E114077.pdf', 'skripsi-sebagian-E1E114077.pdf', 1, ''),
(50, 'E1E116084', 'PENERAPAN VECTOR SPACE MODEL (VSM) PADA SISTEM PENCARIAN ARTIKEL ARKEOLOGI (STUDI KASUS: JURUSAN ARKEOLOGI UNIVERSITAS HALU OLEO)', '2020-12-12', '2021-05-23 10:02:48', 'skripsi-full-E1E116084.pdf', '0016018301', '199106232018031001', '0025047107', '0007118104', '8820850017', 'pengesahan-pembimbing-E1E116084.pdf', 'pengesahan-penguji-E1E116084.pdf', 'skripsi-sebagian-E1E116084.pdf', 1, ''),
(51, 'E1E117040', 'IMPLEMENTASI GLOBAL NAVIGATION SATELLITE SYSTEM (GNSS)  PADA SISTEM PRESENSI BERBASIS ANDROID MENGGUNAKAN  METODE SPATIAL MAP MATCHING ', '2021-04-15', '2021-06-03 16:23:43', 'skripsi-full-.pdf', '0020107601', '0030048107', '0007118104', '0025128402', '0929098602', 'pengesahan-pembimbing-.pdf', 'pengesahan-penguji-.pdf', 'skripsi-sebagian-.pdf', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria_tbl`
--

CREATE TABLE `subkriteria_tbl` (
  `subkriteria_id` int(11) NOT NULL,
  `subkriteria_nama` varchar(50) NOT NULL,
  `subkriteria_bobot` int(11) NOT NULL,
  `kriteria_id` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subkriteria_tbl`
--

INSERT INTO `subkriteria_tbl` (`subkriteria_id`, `subkriteria_nama`, `subkriteria_bobot`, `kriteria_id`) VALUES
(2, 'Sangat Sesuai Keahlian', 5, 'C1'),
(3, 'Sesuai keahlian', 4, 'C1'),
(4, 'Cukup sesuai keahlian', 3, 'C1'),
(5, 'Kurang sesuai keahlian', 2, 'C1'),
(6, 'Guru Besar', 5, 'C2'),
(7, 'Lektor kepala', 4, 'C2'),
(8, 'Lektor', 3, 'C2'),
(9, 'Asisten ahli', 2, 'C2'),
(10, 'Tenaga Pengajar', 1, 'C2'),
(11, 'S3', 5, 'C3'),
(12, 'S2', 4, 'C3'),
(13, 'Dosen tetap PNS', 5, 'C4'),
(14, 'Dosen tetap Non PNS', 2, 'C4');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_photo` text DEFAULT NULL,
  `id` char(30) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_password`, `user_fullname`, `user_photo`, `id`, `group_id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Staf Teknik Informatika', '1.png', '', 1),
(109, '0020107601', 'b5f2eb21dba57e9666a33afe4e99b18f', 'Dr. La Ode Muh. Golok Jaya, ST., MT', NULL, '0020107601', 2),
(110, '0016018301', '5b39fe79ce001df3e1e91cbaf9c9d479', 'Ika Purwanti Ningrum P, S.Kom., M.Cs', NULL, '0016018301', 2),
(111, '0922027601', '7f53cfec657a4b82ad77d87ba19055a8', 'Sutardi, S.Kom., MT', NULL, '0922027601', 2),
(112, '0017117606', '26fa5d8a04f6c13174f41c3d19f9a2f4', 'Isnawaty, ST., MT', NULL, '0017117606', 2),
(113, '0025047107', 'd3d0c278ebe0defbab829af49260678b', 'Bambang Pramono, ST., MT', NULL, '0025047107', 2),
(114, '0014068304', 'b2866caf934958d923d901b8b81ef2e0', 'Muh. Yamin, ST., M.Eng', NULL, '0014068304', 2),
(115, '0009096503', 'a7971df43cef70d450fec3346cc30644', 'Dr. Ir. Muh. Ihsan Sarita, M.Kom', NULL, '0009096503', 2),
(116, '0007118104', '08811c9f70225465c91821c5d3c26ac6', 'Statiswaty, ST., M.Si', NULL, '0007118104', 2),
(117, '0022078406', 'abb81d721f6b7e1c5e15066f3a42aa86', 'L.M. Fid Aksara, S.Kom., M.Kom', NULL, '0022078406', 2),
(118, '0906028701', '57665bf54bd6caac8f29418124984189', 'Jumadil Nangi, S.Kom., MT', NULL, '0906028701', 2),
(119, '0025128402', '445347fea62f7dfb3894963405484f9a', 'Natalis Ransi, S.Kom., M.Kom', NULL, '0025128402', 2),
(120, '199106232018031001', 'd785bbc953ff092046fbcf8853a5553e', 'Adha Mashuri Sajiah, ST., M.Eng', NULL, '199106232018031001', 2),
(121, '8820850017', '7ba4ae39d426bd59a1c353e73f086d1f', 'Rizal Adi Saputra, ST., M.Kom', NULL, '8820850017', 2),
(122, '0929098602', '113e7a3677c1ac05a73b197a5a3d8936', 'LM. Bahtiar Aksara, ST., MT', NULL, '0929098602', 2),
(123, '0003058805', '3e6305701121ae15229e7999c3f9f56d', 'Rahmat Ramadhan, S.Si., M.Cs', NULL, '0003058805', 2),
(124, '8806620016', 'faa07fbef0cf64134a99ea8df7d016dd', 'La Surimi, S.Si., M.Cs', NULL, '8806620016', 2),
(125, '0030048107', '902479a52777179bdb33691ff0a79700', 'Ld. Muh. Tajidun, ST., M.Eng', NULL, '0030048107', 2),
(126, '0920057902', 'd5efc8f7f80b8d8753a193757f058c8a', 'Subardin, ST., MT', NULL, '0920057902', 2),
(177, 'E1E113054', '3ade5507cfe947e7363683b230e5f835', 'Rio Parangrengi', NULL, 'E1E113054', 3),
(178, '0034768900', '50d1c50bd2c69e6266262245d02e3c0d', 'Mutmainnah Muchtar, ST.,M.Kom', NULL, '0034768900', 2),
(179, 'E1E113075', '7ab905b7fd5514c4893589f91762cc3c', 'Rahimin Wadjo', '179.PNG', 'E1E113075', 3),
(180, 'E1E115024', '308504ec6e683764eabd02be0b35f97f', 'La Ode Alim Al Ashar', NULL, 'E1E115024', 3),
(181, 'E1E116082', '6df6d64e8bbf4fc0ce89a5b74e6a04f5', 'Rusmala Nasir', NULL, 'E1E116082', 3),
(182, 'E1E113001', 'a09022e1ea2cb1efcd82635918897eb4', 'Ahmad Bulengo', NULL, 'E1E113001', 3),
(183, 'E1E108064', 'f0bbe399f21257a708da9e4f9412393a', 'Ahmad Ranni', NULL, 'E1E108064', 3),
(184, 'E1E111002', 'd722d86cc574768b8da282b959a8747b', 'Andi Prademon Yunus', NULL, 'E1E111002', 3),
(185, 'E1E110118', '3d51d00a0ef29f513c577006a17d2698', 'Apriadi Bahar', NULL, 'E1E110118', 3),
(186, '0021', 'd9f5e405a7f74ed652a8f0b31a87f636', 'La Ode Hasnuddin S Sagala, S.Si.,M.Cs', NULL, '98076456987', 2),
(187, 'E1E111018', '5a7dab222bf9b1678cc4da6b3b3db8ce', 'Berliana', NULL, 'E1E111018', 3),
(188, 'E1E110123', '6e460d47ee7ddb477a5ebe548991fb81', 'Dwi Setiady', NULL, 'E1E110123', 3),
(189, 'E1E114090', '126418965f36ae70cdcc6b407c7f725d', 'Elza Aprilia', NULL, 'E1E114090', 3),
(190, 'E1E116040', 'e58afa99de70354a6562ec6ac4de7575', 'Wa Ode Ermalianti', NULL, 'E1E116040', 3),
(192, 'E1E115094', '257b22ea0ebadbf0f9da1e2ad5bafc1c', 'Fachrin Kashmal', NULL, 'E1E115094', 3),
(193, 'E1E111056', '24649c0a605c99dda2967eae318d9f09', 'Fina Faradila', NULL, 'E1E111056', 3),
(194, 'E1E113042', '2512d068d0e6dc913896d7e345e16807', 'Ahlun Nazar', NULL, 'E1E113042', 3),
(195, 'E1E116073', 'df9cda34ef89813ad7bb50525ff420b8', 'R.M.Alfian Apriansya Diponegoro', NULL, 'E1E116073', 3),
(196, 'E1E116005', '403828376df5c8e8d92a33a51074dbc1', 'Ayu Windiarti', NULL, 'E1E116005', 3),
(197, 'E1E115014', '293227ba6e0b51ab081080a90736d403', 'Elsa Meilan', NULL, 'E1E115014', 3),
(198, 'E1E114072', '1db68d1987beff3703d78d794c40a2a2', 'Idzanul Iksan Sinatra', NULL, 'E1E114072', 3),
(199, 'E1E116083', '0206afd477207fa41af6d1c001a83244', 'Muhamad Ade Ichsan Hasibuan', NULL, 'E1E116083', 3),
(200, 'E1E115028', '240a533231e27dc9c1d4fc6f6a18457c', 'Maulid', NULL, 'E1E115028', 3),
(201, 'E1E114028', 'd875a01f4e029bdeeb93968bf49bdbd3', 'Novrian Syah', NULL, 'E1E114028', 3),
(202, 'E1E115046', 'a48a617307bfa95b855059de1d2350ae', 'Salman Al Habir', NULL, 'E1E115046', 3),
(203, 'E1E116034', 'f6002d1e07878bb49bfd041a1e04b151', 'Saskia Randawula Silondae', NULL, 'E1E116034', 3),
(204, 'E1E114073', 'fdbf64cbe955127e54d5275d00079f71', 'Wa Ode Sitti Rahmawati', NULL, 'E1E114073', 3),
(205, 'E1E116023', 'feee55fbe4f52f5cf8ffca29dd58d3b7', 'Pratiwi Nur Aisyah', NULL, 'E1E116023', 3),
(206, 'E1E114026', 'b1d7d112ce8e59543da70a1859594282', 'Muh. Sakti', NULL, 'E1E114026', 3),
(207, 'E1E115025', '8447724fe947dc844ac74b0e70c2c5b5', 'La Ode Muhamad Taufik', NULL, 'E1E115025', 3),
(208, 'E1E111023', '5c82d82289602c7bb6ac79609dbaffb2', 'Mayang Putri Khairunnisa', NULL, 'E1E111023', 3),
(209, 'E1E110087', 'ae974e9542ef011e3ef7deac9c44c47a', 'Muhammad Nur Annas', NULL, 'E1E110087', 3),
(210, 'E1E113024', '64b9a81345d95a4a862ddd244d5dbbb7', 'Niarma', NULL, 'E1E113024', 3),
(211, 'E1E113028', '552c9a8864c8d202d9e3f141aab7eb04', 'Riswan M Rizal', NULL, 'E1E113028', 3),
(212, 'E1E110015', '2d0105d7c13e80ff778cd812188c27ae', 'Syahrul Mubaraq', NULL, 'E1E110015', 3),
(213, 'E1E113056', '035c32b9b1b51893d20005483bb3b4ea', 'Ady Nopaldi Rombe', NULL, 'E1E113056', 3),
(214, 'E1E113035', '28dc15ba4580b4ff183f652e0ea2b5a1', 'Abdul Malik', NULL, 'E1E113035', 3),
(215, 'E1E113078', '2dafd468d0dda719cf28f8466ba510c9', 'Muh. Hajar Akbar', NULL, 'E1E113078', 3),
(216, 'E1E115049', '2f91f8404944c4eba17b8abdc510f976', 'Tamsil Tajsam', NULL, 'E1E115049', 3),
(217, 'E1E111035', '2b01f656c89191e1446226e165a154f3', 'Hosil Hermansyah', NULL, 'E1E111035', 3),
(218, 'E1E111055', '9c866e6c74ed7fe534948bb7ad76594f', 'Muhammad Ichwan Utari', NULL, 'E1E111055', 3),
(219, 'E1E113045', '79cbe906350d0a0e3d4a6ed635ab2071', 'Ilayani', NULL, 'E1E113045', 3),
(220, 'E1E113040', '7c282dee83335963e4b47b6c74ec234d', 'Andi Cintia Cicilia Gusti', NULL, 'E1E113040', 3),
(221, 'E1E113027', '4a29f6160a1f5222e716018a5e75ea0b', 'Riskiawan Hartawan', NULL, 'E1E113027', 3),
(222, 'E1E113022', '6fa702023eab5eaec59db54d21f22b93', 'Muh. Hadri Zulkarnaen', NULL, 'E1E113022', 3),
(223, 'E1E113015', '013315290ca054a147e9a9ba767f54a9', 'Irfan Julianto', NULL, 'E1E113015', 3),
(224, 'E1E113026', '041bcbc9e2f85a084fc399da7119613a', 'Rico Dwi Kurniawan', NULL, 'E1E113026', 3),
(225, 'E1E113036', '043bdffbf76b0d891a8fd7bf41cb1031', 'Yuslan', NULL, 'E1E113036', 3),
(226, 'E1E113055', 'acf0d4242c6468c9e43fb9b4e84841d5', 'Dimas Eko Prabowo Putra', NULL, 'E1E113055', 3),
(227, 'E1E112030', 'e9bb7411f8ed5e335cd8fed2be9d1d53', 'Aklan Emroel', NULL, 'E1E112030', 3),
(228, 'E1E114053', '2ddadebe6d119bfeb3edd5be95d6002a', 'Ld. Cakra Buana', NULL, 'E1E114053', 3),
(229, 'E1E113002', 'd1a7e318f7b47b34e52d65032f88a9d5', 'Aisyah Euis Munanda K.', NULL, 'E1E113002', 3),
(230, 'E1E114006', 'fe76a7e0bf085c1d3087cdfeea0243ba', 'Asmita Inda Lestari', NULL, 'E1E114006', 3),
(231, 'E1E114067', '1001fb9a311e635c0fc2db488d195535', 'Umar Ramdani', NULL, 'E1E114067', 3),
(232, 'E1E114080', 'bde9bae44626c0523188a9211abe0581', 'Mugitawasi', NULL, 'E1E114080', 3),
(233, '0022', '147768d3955e38c4e662c0a95d807abc', 'Jayanti Yusmah Sari, ST., M.Kom.', NULL, '0900988887', 2),
(234, 'E1E115044', '5acaaa8e35d7dcc6acde381f6e55f5a0', 'Ricky Ramadhan', NULL, 'E1E115044', 3),
(235, 'E1E115082', 'fb5d2e5bbc2cdb969bbee8219c7925fc', 'Novrina Y.N Possumah', NULL, 'E1E115082', 3),
(236, 'E1E115011', '3815109863b9f7e8c50c105fd160ae27', 'Achmad Ilham Nugroho', NULL, 'E1E115011', 3),
(237, 'E1E115036', 'f9d67aad32d7ee16295e8120d123cfa0', 'Nina Sularida', NULL, 'E1E115036', 3),
(238, 'E1E115076', '3795fc7611b979cf43ad601ede41941c', 'Muh. Darul Zulkifli Riton', NULL, 'E1E115076', 3),
(239, 'E1E115019', '61d8d3ef7d43bb6b3d146b521e5699de', 'Indah Lugianti', NULL, 'E1E115019', 3),
(240, 'E1E115054', '1de341e9d279787334f17d6d59135056', 'Ahmad Khairun Arsyad', NULL, 'E1E115054', 3),
(241, 'E1E115034', 'fec6b27da4ccf665192a13b1e3fd4263', 'Muhammad Budi Dharmawan P', NULL, 'E1E115034', 3),
(242, 'E1E115005', 'f6cd5e9ba838157be8e8f6e044c63389', 'Alfian', NULL, 'E1E115005', 3),
(243, 'E1E115001', 'e0c942ffe1305fd6a63980340efce525', 'Adnan Hidayat', NULL, 'E1E115001', 3),
(244, 'E1E115004', 'ef80b01f8a9676b2ae17c8e91b90e234', 'Alba Purnama', NULL, 'E1E115004', 3),
(245, 'E1E115003', 'd9a495bcca97e969d8050e216c11889e', 'Agustina Rahman', NULL, 'E1E115003', 3),
(246, 'E1E115048', '111aa1cc71157f97f48decaa7019a481', 'Sitti Aisya', NULL, 'E1E115048', 3),
(247, 'E1E115043', 'e1a9fdca94389f343d74615c8d6ff757', 'Agtriyasih', NULL, 'E1E115043', 3),
(248, 'E1E115008', '1b84fd8dbbcf4128e574e98f992acbb1', 'Artono Dwi Ramadhan', NULL, 'E1E115008', 3),
(249, 'E1E115080', '810f29c9c73a3230d3e440680061ee5e', 'M. Izhar Akhirul Safar', NULL, 'E1E115080', 3),
(250, 'E1E115086', 'e34968c6861528da4429ab09cb06862d', 'Rahmad Akbar', NULL, 'E1E115086', 3),
(251, 'E1E116006', '77fb46693bda79c83a0fa28bd4a4e591', 'Chadek  Windy Septyawan', NULL, 'E1E116006', 3),
(252, 'E1E115040', '21e9fe0b09720ce6b91a990215551329', 'Pini Astati', NULL, 'E1E115040', 3),
(253, 'E1E116066', 'fa36f83c970400e1d2634d2e303483af', 'Asrif Fajar Hidayat ', NULL, 'E1E116066', 3),
(254, 'E1E116004', 'b987ca5c46c36b784222bd846c150c9d', 'Ayu Asriani', NULL, 'E1E116004', 3),
(255, 'E1E116026', 'a19d9a21031b84aa34a6360aac553cde', 'Ramadhin Zaid', NULL, 'E1E116026', 3),
(256, 'E1E116051', 'ff7beb6d50bc4bd27f199174f58720b3', 'Reza Sanjaya', NULL, 'E1E116051', 3),
(257, 'E1E116039', 'aace5d46ac550e487a93418c7682467a', 'Umar Ardiansyah ', NULL, 'E1E116039', 3),
(258, 'E1E116035', '0485bb90547ea1efbe02ec3c6db7bb3d', 'Sitti Habibah', NULL, 'E1E116035', 3),
(259, 'E1E116003', '60c1a4bbbb95f77e2cd9eac6844a687d', 'Astiti Dwi Cahya Ningrum', NULL, 'E1E116003', 3),
(260, 'E1E116033', 'e4460b215cb35879df3a3700459ea9b5', 'Salmawati', NULL, 'E1E116033', 3),
(261, 'E1E116055', '1f24d4dac3b38ef44c1978cf0f66b841', 'Sukma Andara Lauri', NULL, 'E1E116055', 3),
(262, 'E1E116031', 'fd79b19915ad3f367132ba1608938d67', 'Safril', NULL, 'E1E116031', 3),
(263, 'E1E114077', '72bc2e5dc3ee52a9b2bd682e3c481129', 'Oktrini Arta', NULL, 'E1E114077', 3),
(264, 'E1E116061', 'eb4a6ef32b88a8888b714e159fcad8f9', 'Sonia Lamani', NULL, 'E1E116061', 3),
(265, 'E1E114070', 'f07a57b8ff5314364fb9bd5864704f74', 'Risandi Wahidul KAhar', NULL, 'E1E114070', 3),
(266, 'E1E116021', '6d3a4bd0e67baffb4ec7ca5a3e7974b5', 'Nurvila', NULL, 'E1E116021', 3),
(267, 'E1E116060', '13b5945b3a0dbcfb20c6bd846129fcdf', 'Muhamad Fadli', NULL, 'E1E116060', 3),
(268, 'E1E115073', '9da7a6156b670aa6ffa450f3ca696a7a', 'Masrul Nggiri', NULL, 'E1E115073', 3),
(269, 'E1E114019', '39282a9fdc929735f92b939b92039495', 'Kasmira Azra', NULL, 'E1E114019', 3),
(270, 'E1E116009', '76b9cc2c1b8fc3e82edcd57ad4c619c9', 'Erick Herdiawan', NULL, 'E1E116009', 3),
(271, 'E1E117027', 'ee6a11ab5e4a5a45960469262b2d3fd5', 'Atri Ilma Juni Rahim', NULL, 'E1E117027', 3),
(272, 'E1E114004', '951a223ae15f385600cbc6206744fc59', 'Amal Hendrawan', NULL, 'E1E114004', 3),
(273, 'E1E116049', '7f5c868d70aeb9aefbc5684e3afd9c9b', 'Alfrido Rahmat Julianto Pidani', NULL, 'E1E116049', 3),
(274, 'E1E116084', 'f209f172dd1a012ef3d988a6bf008e1c', 'Wa Ode Wahyuni Makmun', NULL, 'E1E116084', 3),
(275, 'E1E116014', '04c5162c44586a79362d577895a128f5', 'Mardianti Potto', NULL, 'E1E116014', 3),
(276, 'E1E116074', '759e5008052fb68b30253ad630ae5f12', 'Abdul Azis Syah Laode', NULL, 'E1E116074', 3),
(277, 'E1E116004', 'b987ca5c46c36b784222bd846c150c9d', 'Ayu Asriani', NULL, 'E1E116004', 3),
(278, 'E1E116066', 'fa36f83c970400e1d2634d2e303483af', 'Asrif Fajar Hidayat', NULL, 'E1E116066', 3),
(279, 'E1E117040', '98035e9569bf73a825fa050853cb465f', 'Muhamad Danil', NULL, 'E1E117040', 3),
(280, 'E1E113049', 'dca02371d5b2f91a0356191138ffab56', 'WA ODE ZAMALIA', NULL, 'E1E113049', 3),
(281, 'E1E113039', 'a7bed4fec38cf7300ad0cff4fa562297', 'AKHMAD IRSYAD', NULL, 'E1E113039', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_tbl`
--
ALTER TABLE `dosen_tbl`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `kp_tbl`
--
ALTER TABLE `kp_tbl`
  ADD PRIMARY KEY (`kp_id`);

--
-- Indexes for table `mahasiswa_tbl`
--
ALTER TABLE `mahasiswa_tbl`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `skripsi_tbl`
--
ALTER TABLE `skripsi_tbl`
  ADD PRIMARY KEY (`skripsi_id`);

--
-- Indexes for table `subkriteria_tbl`
--
ALTER TABLE `subkriteria_tbl`
  ADD PRIMARY KEY (`subkriteria_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kp_tbl`
--
ALTER TABLE `kp_tbl`
  MODIFY `kp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `mahasiswa_tbl`
--
ALTER TABLE `mahasiswa_tbl`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `setting_tbl`
--
ALTER TABLE `setting_tbl`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skripsi_tbl`
--
ALTER TABLE `skripsi_tbl`
  MODIFY `skripsi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
