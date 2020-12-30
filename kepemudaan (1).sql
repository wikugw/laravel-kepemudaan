-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 10:20 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kepemudaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fokus_kerja`
--

CREATE TABLE `fokus_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_fokus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fokus_kerja`
--

INSERT INTO `fokus_kerja` (`id`, `nama_fokus`, `created_at`, `updated_at`) VALUES
(1, 'AGAMA', NULL, NULL),
(2, 'SOSIAL', NULL, NULL),
(3, 'SENBUDPAR', NULL, NULL),
(4, 'OLAHRAGA', NULL, NULL),
(5, 'KESEHATAN', NULL, NULL),
(6, 'BELA NEGARA', NULL, NULL),
(7, 'LINGKUNGAN', NULL, NULL),
(8, 'IPTEK', NULL, NULL),
(9, 'POLITIK', NULL, NULL),
(10, 'ADVOKASI PUBLIK', NULL, NULL),
(11, 'PENGEMBANGAN SDM', NULL, NULL),
(12, 'LAINNYA', NULL, NULL),
(13, 'PENDIDIKAN', NULL, NULL),
(14, 'PEMBERDAYAAN PEREMPUAN', NULL, NULL),
(15, 'PENELITIAN', NULL, NULL),
(16, 'EKONOMI', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fokus_kerja_organisasi`
--

CREATE TABLE `fokus_kerja_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok_potensi_pemuda` bigint(20) UNSIGNED NOT NULL,
  `id_fokus_kerja` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fokus_kerja_organisasi`
--

INSERT INTO `fokus_kerja_organisasi` (`id`, `id_kelompok_potensi_pemuda`, `id_fokus_kerja`, `created_at`, `updated_at`) VALUES
(43, 13, 2, '2020-05-21 05:46:52', '2020-05-21 05:46:52'),
(44, 13, 4, '2020-05-21 05:46:52', '2020-05-21 05:46:52'),
(45, 13, 9, '2020-05-21 05:46:52', '2020-05-21 05:46:52'),
(46, 14, 12, '2020-05-21 05:55:32', '2020-05-21 05:55:32'),
(47, 15, 1, '2020-05-21 06:10:42', '2020-05-21 06:10:42'),
(48, 15, 2, '2020-05-21 06:10:42', '2020-05-21 06:10:42'),
(49, 15, 13, '2020-05-21 06:10:42', '2020-05-21 06:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Organisasi Kepemudaan', NULL, NULL),
(2, 'Kelompok Potensi Pemuda Lain', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Blimbing', '2020-05-05 23:25:50', '2020-05-05 23:25:50'),
(2, 'Kedungkandang', '2020-05-05 23:26:00', '2020-05-05 23:26:00'),
(3, 'Klojen', '2020-05-05 23:26:12', '2020-05-05 23:26:12'),
(4, 'Lowokwaru', '2020-05-05 23:26:21', '2020-05-05 23:26:21'),
(5, 'Sukun', '2020-05-05 23:26:29', '2020-05-05 23:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'USAHA MANDIRI', NULL, NULL),
(2, 'KETERAMPILAN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_disporapar`
--

CREATE TABLE `kegiatan_disporapar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('artikel','okp','kewirausahaan','knpi','lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_disporapar`
--

INSERT INTO `kegiatan_disporapar` (`id`, `judul`, `kategori`, `isi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Disporapar Kota Malang Gelar Sosialisasi Aturan Usaha Jasa Pariwisata', 'lainnya', 'Lowokwaru (malangkota.go.id) – Dinas Kepemudaan, Olahraga dan Pariwisata (Disporapar) Kota Malang menggelar Sosialisasi Aturan Usaha Jasa Pariwisata tahun 2020 di Hotel Sahid Montana 2 Kota Malang, Rabu (11/3/20). Acara ini diikuti peserta dari pelaku usaha pariwisata yang terdiri dari travel, restoran dan juga hotel di Kota Malang.\r\n\r\nKegiatan yang dibuka oleh Kepala Disporapar Ida Ayu Made Wahyuni, SH, M.Si mengundang narasumber dari Dinas Kebudayaan dan Pariwisata Provinsi Jawa Timur serta dari Lembaga Sertifikasi Usaha Pariwisata (LSUP) PT Sertifikasi Cohespa Indonesia (SCI).\r\n\r\nKepala Disporapar Ida Ayu Made Wahyuni, SH, M.Si dalam sambutannya mengatakan bahwa pelaku usaha jasa pariwisata harus memegang izin usaha dan sertifikasi usaha jasa agar dapat menjamin kualitas produk, pelayanan dan pengelolaan usaha pariwisata.\r\n\r\nSesuai dengan aturan yang berlaku, setiap pelaku usaha diwajibkan untuk mendaftarkan izin usahanya kepada pemerintah. Hal tersebut berdasarkan UU No 10 Tahun 2009 Tentang Kepariwisataan dan Peraturan Menteri Pariwisata Nomor 18 tentang Pendaftaran Usaha Pariwisata.\r\n\r\nIda Ayu menuturkan, dengan terjadinya kasus virus Corona saat ini, para pelaku usaha travel diimbau tidak terlalu sering melakukan ke luar negeri sebagai bentuk antisipasi menularnya virus corona, dan lebih mempromosikan wisata-wisata yang berada di Malang Raya.  “Untuk teman-teman travel jangan semata-mata membawa tamu keluar tapi bagaimana kita membawa tamu ke dalam negeri, khusunya ke Kota Malang,” pesannya.', 'Kepala-Disporapar-Kota-Malang.jpg', '2020-05-07 19:14:09', '2020-05-07 19:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_kepeloporan`
--

CREATE TABLE `kegiatan_kepeloporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kepeloporan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_kepeloporan`
--

INSERT INTO `kegiatan_kepeloporan` (`id`, `nama_kepeloporan`, `created_at`, `updated_at`) VALUES
(1, 'SDA, LINGKUNGAN, DAN PARIWISATA', NULL, NULL),
(2, 'PANGAN', NULL, NULL),
(3, ' PENDIDIKAN', NULL, NULL),
(4, ' INOVASI TEKNOLOGI', NULL, NULL),
(5, 'AGAMA,SOSIAL, DAN BUDAYA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_organisasi`
--

CREATE TABLE `kegiatan_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok_potensi_pemuda` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan_organisasi`
--

INSERT INTO `kegiatan_organisasi` (`id`, `id_kelompok_potensi_pemuda`, `id_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 7, 2, '2020-05-13 09:45:44', '2020-05-13 09:45:44'),
(2, 8, 1, '2020-05-13 19:13:05', '2020-05-13 19:13:05'),
(3, 8, 2, '2020-05-13 19:13:05', '2020-05-13 19:13:05'),
(4, 9, 2, '2020-05-13 19:20:28', '2020-05-13 19:20:28'),
(5, 10, 2, '2020-05-13 19:26:17', '2020-05-13 19:26:17'),
(6, 11, 1, '2020-05-20 02:47:30', '2020-05-20 02:47:30'),
(7, 11, 2, '2020-05-20 02:50:01', '2020-05-20 02:50:01'),
(11, 2, 2, '2020-05-20 21:49:04', '2020-05-20 21:49:04'),
(12, 2, 1, '2020-05-20 22:13:43', '2020-05-20 22:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok_potensi_pemuda`
--

CREATE TABLE `kelompok_potensi_pemuda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_organisasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_organisasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp_organisasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_subkategori` bigint(20) UNSIGNED NOT NULL,
  `struktur_pengurus` enum('struktural','non_struktural') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_sekretariat` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_usaha` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_npwp` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_adart` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `lingkup` enum('nasional','lokal','kelurahan','rw','umum','perdukuhan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `badan_hukum` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `suket_domisili` enum('belum_memiliki','sudah_memiliki') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `kepengurusan` enum('ada','tidak_ada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keanggotaan` enum('anggota/kader','non_keanggotaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `misi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ketua` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_berdiri` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok_potensi_pemuda`
--

INSERT INTO `kelompok_potensi_pemuda` (`id`, `nama_organisasi`, `email_organisasi`, `no_telp_organisasi`, `id_subkategori`, `struktur_pengurus`, `kepemilikan_sekretariat`, `alamat`, `unit_usaha`, `kepemilikan_npwp`, `kepemilikan_adart`, `lingkup`, `badan_hukum`, `suket_domisili`, `jumlah_anggota`, `kepengurusan`, `keanggotaan`, `visi`, `misi`, `logo`, `nama_ketua`, `tanggal_berdiri`, `created_at`, `updated_at`) VALUES
(13, 'DPD PEMUDA LIRA KOTA MALANG', 'pemudalirta@gmail.com', '0341489105', 1, 'struktural', 'ada', 'Jl. Batu Amaril No. 11 Kel. Pandanwagi Kota Malang', 'tidak_ada', 'tidak_ada', 'ada', 'nasional', 'ada', 'sudah_memiliki', 25, 'ada', 'anggota/kader', 'Terwujudnya Generasi Berakhlak Mulia, Cerdas, Dan Demokratis Mengakar Pada Budaya Bangsa Serta Mampu Bersaing Di Era Global.', 'tes', 'storage/logo_organisasi/logo-1608943505.jpg', 'pemudalirta', '2017-01-01', NULL, '2020-12-25 17:45:05'),
(14, 'Asosiasi Koperasi Mahasiswa Malangg', 'email@email.com', '082157585656', 2, 'struktural', 'ada', 'Jl. Gajayana No.50', 'tidak_ada', 'tidak_ada', 'ada', 'lokal', 'ada', 'belum_memiliki', 609, 'ada', 'anggota/kader', 'Menghimpun Koperasi Mahasiswa sekota Malang sebagai koperasi yang mandiri, aspiratif dan menjadi wahana pengembangan usaha serta pengkaderan generasi yang berideologi koperasi.', '•Meningkatkan Kesejahteraan Anggota\r\n•Membangun Jiwa Koperasi dan Enterpreneurship', 'storage/logo_organisasi/logo-1608943466.png', 'boss', '2018-09-22', NULL, '2020-12-25 17:44:26'),
(15, 'PELAJAR ISLAM INDONESIA (PII)', 'abifirmandhani@gmail.com', '0811432810', 3, 'struktural', 'ada', 'Jl. Gajayana Gg. IV/631, Dinoyo Kota  Malang', 'tidak_ada', 'tidak_ada', 'ada', 'nasional', 'ada', 'belum_memiliki', 10, 'ada', 'anggota/kader', 'Kesempurnaan pendidikan dan kebudayaan yang sesuai dengan Islam bagi segenap rakyat Indonesia dan ummat manusia.', 'tes', 'storage/logo_organisasi/logo-1608943349.jpg', 'abi', '1947-04-05', NULL, '2020-12-25 17:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelompok_potensi_pemuda` bigint(20) DEFAULT NULL,
  `id_kecamatan` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`, `id_kelompok_potensi_pemuda`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Arjosaris', NULL, 1, NULL, '2020-06-16 07:18:32'),
(2, 'Balearjosari', NULL, 1, NULL, NULL),
(3, 'Blimbing', NULL, 1, NULL, NULL),
(4, 'Bunulrejo', NULL, 1, NULL, NULL),
(5, 'Jodipan', NULL, 1, NULL, NULL),
(6, 'Kesatrian', NULL, 1, NULL, NULL),
(7, 'Pandanwangi', NULL, 1, NULL, '2020-05-22 14:55:12'),
(8, 'Polehan', NULL, 1, NULL, NULL),
(9, 'Polowijen', 13, 1, NULL, '2020-05-22 14:54:59'),
(10, 'Purwantoro', NULL, 1, NULL, NULL),
(11, 'Purwodadi', NULL, 1, NULL, NULL),
(12, 'Arjowinangun', NULL, 2, NULL, NULL),
(13, 'Bumiayu', NULL, 2, NULL, NULL),
(14, 'Buring', NULL, 2, NULL, NULL),
(15, 'Cemorokandang', NULL, 2, NULL, NULL),
(16, 'Kedungkandang', NULL, 2, NULL, NULL),
(17, 'Kotalama', NULL, 2, NULL, NULL),
(18, 'Lesanpuro', NULL, 2, NULL, NULL),
(19, 'Madyopuro', NULL, 2, NULL, NULL),
(20, 'Mergosono', NULL, 2, NULL, NULL),
(21, 'Sawojajar', NULL, 2, NULL, NULL),
(22, 'Tlogowaru', NULL, 2, NULL, NULL),
(23, 'Wonokoyo', NULL, 2, NULL, NULL),
(24, 'Bareng', NULL, 3, NULL, NULL),
(25, 'Gadingasri', NULL, 3, NULL, NULL),
(26, 'Kasin', NULL, 3, NULL, NULL),
(27, 'Kauman', NULL, 3, NULL, NULL),
(28, 'Kiduldalem', NULL, 3, NULL, NULL),
(29, 'Klojen', NULL, 3, NULL, NULL),
(30, 'Oro-Oro Dowo', NULL, 3, NULL, NULL),
(31, 'Penanggungan', NULL, 3, NULL, NULL),
(32, 'Rampal Celaket', NULL, 3, NULL, NULL),
(33, 'Samaan', NULL, 3, NULL, NULL),
(34, 'Sukoharjo', NULL, 3, NULL, NULL),
(35, 'Dinoyo', NULL, 4, NULL, NULL),
(36, 'Jatimulyo', NULL, 4, NULL, NULL),
(37, 'Ketawanggede', 14, 4, NULL, '2020-05-22 14:52:51'),
(38, 'Lowokwaru', NULL, 4, NULL, '2020-05-22 14:53:13'),
(39, 'Merjosari', NULL, 4, NULL, NULL),
(40, 'Mojolangu', NULL, 4, NULL, NULL),
(41, 'Sumbersari', NULL, 4, NULL, NULL),
(42, 'Tasikmadu', NULL, 4, NULL, NULL),
(43, 'Tlogomas', 15, 4, NULL, '2020-05-22 14:54:08'),
(44, 'Tulusrejo', 13, 4, NULL, '2020-05-22 14:51:54'),
(45, 'Tunggulwulung', NULL, 4, NULL, '2020-05-22 14:53:28'),
(46, 'Tunjungsekar', 14, 4, NULL, '2020-05-22 14:54:32'),
(47, 'Bakalankrajan', NULL, 5, NULL, NULL),
(48, 'Bandulan', 13, 5, NULL, '2020-05-21 07:06:45'),
(49, 'Bandungrejosari', NULL, 5, NULL, NULL),
(50, 'Ciptomulyo', NULL, 5, NULL, NULL),
(51, 'Gadang', NULL, 5, NULL, NULL),
(52, 'Karangbesuki', NULL, 5, NULL, NULL),
(53, 'Kebonsari', NULL, 5, NULL, NULL),
(54, 'Mulyorejo', NULL, 5, NULL, NULL),
(55, 'Pisangcandi', NULL, 5, NULL, NULL),
(56, 'Sukun', NULL, 5, NULL, NULL),
(57, 'Tanjungrejo', NULL, 5, NULL, '2020-05-22 14:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `kepeloporan_organisasi`
--

CREATE TABLE `kepeloporan_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelompok_potensi_pemuda` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan_kepeloporan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepeloporan_organisasi`
--

INSERT INTO `kepeloporan_organisasi` (`id`, `id_kelompok_potensi_pemuda`, `id_kegiatan_kepeloporan`, `created_at`, `updated_at`) VALUES
(1, 7, 2, '2020-05-13 09:45:44', '2020-05-13 09:45:44'),
(2, 8, 1, '2020-05-13 19:13:05', '2020-05-13 19:13:05'),
(3, 8, 2, '2020-05-13 19:13:05', '2020-05-13 19:13:05'),
(4, 8, 4, '2020-05-13 19:13:05', '2020-05-13 19:13:05'),
(5, 9, 2, '2020-05-13 19:20:28', '2020-05-13 19:20:28'),
(6, 9, 5, '2020-05-13 19:20:28', '2020-05-13 19:20:28'),
(7, 10, 3, '2020-05-13 19:26:17', '2020-05-13 19:26:17'),
(8, 10, 5, '2020-05-13 19:26:17', '2020-05-13 19:26:17'),
(9, 11, 1, '2020-05-20 02:47:30', '2020-05-20 02:47:30'),
(10, 11, 4, '2020-05-20 02:47:30', '2020-05-20 02:47:30'),
(11, 11, 2, '2020-05-20 02:50:01', '2020-05-20 02:50:01'),
(12, 11, 3, '2020-05-20 02:50:01', '2020-05-20 02:50:01'),
(13, 11, 5, '2020-05-20 02:50:01', '2020-05-20 02:50:01'),
(19, 2, 2, '2020-05-20 21:49:04', '2020-05-20 21:49:04'),
(20, 2, 1, '2020-05-20 22:13:43', '2020-05-20 22:13:43'),
(21, 2, 3, '2020-05-20 22:13:43', '2020-05-20 22:13:43'),
(22, 2, 4, '2020-05-20 22:13:43', '2020-05-20 22:13:43'),
(23, 2, 5, '2020-05-20 22:13:43', '2020-05-20 22:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(181, '2014_10_12_000000_create_users_table', 1),
(182, '2019_08_19_000000_create_failed_jobs_table', 1),
(183, '2020_05_03_053848_create_kegiatan_disporapar', 1),
(184, '2020_05_04_020859_create_sarana_prasarana_table', 1),
(185, '2020_05_04_125719_create_program_kerja_table', 1),
(186, '2020_05_04_131913_create_kelurahan_table', 1),
(187, '2020_05_04_132719_create_kecamatan_table', 1),
(188, '2020_05_04_133208_create_peminjaman_sarana_table', 1),
(189, '2020_05_04_134159_create_kelompok_potensi_pemuda_table', 1),
(190, '2020_05_04_140032_create_subkategori_table', 1),
(191, '2020_05_04_140207_create_kelompok_kategori_table', 1),
(192, '2020_05_04_140259_create_fokus_kerja_table', 1),
(193, '2020_05_04_140358_create_kegiatan_kepeloporan_table', 1),
(194, '2020_05_04_140445_create_kegiatan_table', 1),
(195, '2020_05_04_140543_create_fokus_kerja_organisasi_table', 1),
(196, '2020_05_04_140700_create_kepeloporan_organisasi_table', 1),
(197, '2020_05_04_140752_create_kegiatan_organisasi_table', 1),
(198, '2020_06_16_090024_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(2, 'App\\User', 4),
(3, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_sarana`
--

CREATE TABLE `peminjaman_sarana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sarana_prasarana` enum('knpi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengaju` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pengaju` enum('umum','organisasi_kepemudaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_pengaju` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_peminjaman` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `status_pengajuan` enum('menunggu','verifikasi','tolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_peminjaman` enum('dipesan','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman_sarana`
--

INSERT INTO `peminjaman_sarana` (`id`, `nama_sarana_prasarana`, `nama_pengaju`, `status_pengaju`, `no_telp_pengaju`, `tanggal_peminjaman`, `tanggal_kembali`, `status_pengajuan`, `status_peminjaman`, `created_at`, `updated_at`) VALUES
(2, 'knpi', 'pengaju 1', 'umum', '082142708843', '2020-05-13 00:00:00', '2020-05-13 00:00:00', 'verifikasi', 'selesai', '2020-05-09 07:16:58', '2020-05-09 07:31:59'),
(3, 'knpi', 'pengaju 2', 'organisasi_kepemudaan', '089678654222', '2020-05-18 00:00:00', '2020-05-20 00:00:00', 'verifikasi', 'dipesan', '2020-05-09 07:16:58', '2020-06-20 21:42:00'),
(4, 'knpi', 'pengaju 3', 'organisasi_kepemudaan', '085234987009', '2020-05-21 00:00:00', '2020-05-28 00:00:00', 'verifikasi', 'dipesan', '2020-05-09 07:16:58', '2020-05-09 07:31:59'),
(11, 'knpi', 'asdsa', 'organisasi_kepemudaan', '123', '2020-07-01 00:00:00', '2020-07-11 00:00:00', 'verifikasi', 'dipesan', '2020-06-20 08:56:15', '2020-06-20 02:25:19'),
(12, 'knpi', 'bagas', 'umum', '081330317339', '2020-08-01 00:00:00', '2020-08-03 00:00:00', 'verifikasi', 'dipesan', '2020-06-20 17:00:00', NULL),
(13, 'knpi', 'bagas', 'umum', '081330317339', '2020-09-01 00:00:00', '2020-09-07 00:00:00', 'verifikasi', 'dipesan', '2020-06-22 02:50:03', '2020-06-21 19:53:04'),
(15, 'knpi', 'bagas', 'umum', '081330317339', '2020-10-01 09:55:00', '2020-10-07 09:54:00', 'verifikasi', 'dipesan', '2020-06-21 17:00:00', NULL),
(16, 'knpi', 'bagas', 'umum', '081330317339', '2020-10-30 21:22:00', '2020-10-31 21:22:00', 'verifikasi', 'dipesan', '2020-06-22 02:55:34', '2020-06-23 07:22:52'),
(17, 'knpi', 'bagas', 'umum', '081330317339', '2020-10-30 21:22:00', '2020-10-31 21:22:00', 'verifikasi', 'dipesan', '2020-06-24 17:00:00', NULL),
(18, 'knpi', 'bagas', 'umum', '081330317339', '2020-10-29 21:22:00', '2020-10-30 21:22:00', 'verifikasi', 'dipesan', '2020-06-24 17:00:00', NULL),
(19, 'knpi', 'dpd pemuda', 'organisasi_kepemudaan', '111111111111', '2020-12-26 07:47:00', '2020-12-27 07:50:00', 'verifikasi', 'dipesan', '2020-12-25 17:00:00', '2020-12-25 17:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_program_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('keagamaan','penyadaran_hukum','olahraga','pendidikan','sosial','seni','budaya','ketahanan_pangan','lingkungan_hidup','sosial_budaya','kepeloporan_pendidikan','inotek','kewirausahaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kecamatan` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_kerja`
--

INSERT INTO `program_kerja` (`id`, `nama_program_kerja`, `kategori`, `id_kelurahan`, `id_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Sholawat Rutin', 'keagamaan', 16, NULL, '2020-05-07 07:12:43', '2020-05-07 07:12:43'),
(2, 'Pengajian', 'keagamaan', 51, NULL, '2020-05-07 07:17:15', '2020-05-07 07:17:15'),
(3, 'Lomba hadrah dan terbangan jidor', 'keagamaan', 25, NULL, '2020-05-07 07:17:49', '2020-05-07 07:17:49'),
(4, 'Banjari', 'keagamaan', 2, NULL, '2020-05-07 07:18:06', '2020-05-07 07:18:06'),
(5, 'Badminton rutin', 'olahraga', 11, NULL, '2020-05-07 18:29:02', '2020-05-07 18:29:02'),
(9, 'Bulu Tangkis', 'olahraga', 17, NULL, '2020-05-07 18:37:02', '2020-05-07 18:37:02'),
(11, 'Sepak Bola', 'olahraga', 54, NULL, '2020-05-07 19:01:16', '2020-05-07 19:01:16'),
(12, 'Sepak Bola', 'olahraga', 23, NULL, '2020-05-07 19:02:13', '2020-05-07 19:02:13'),
(13, 'Bulu Tangkis', 'olahraga', 23, NULL, '2020-05-07 19:02:35', '2020-05-07 19:02:35'),
(14, 'Persatuan Sepak Bola', 'olahraga', 2, NULL, '2020-05-07 19:02:56', '2020-05-07 19:02:56'),
(15, 'Outbond', 'olahraga', 7, NULL, '2020-05-07 19:03:15', '2020-05-07 19:03:15'),
(16, 'Badminton', 'olahraga', 7, NULL, '2020-05-07 19:03:32', '2020-05-07 19:03:32'),
(17, 'Turu rame-rames', 'penyadaran_hukum', 1, NULL, '2020-06-16 05:47:03', '2020-06-16 07:18:12'),
(19, 'Turu rame-rame v2', 'olahraga', 57, NULL, '2020-06-16 05:59:35', '2020-06-16 05:59:35'),
(20, 'Turu rame-rame v5', 'penyadaran_hukum', 57, NULL, '2020-06-16 06:11:49', '2020-06-16 06:11:49'),
(21, 'Turu rame-rame v6', 'ketahanan_pangan', 57, NULL, '2020-06-16 06:12:04', '2020-06-16 06:12:04'),
(26, 'Turu rame-rame v2', 'olahraga', 57, NULL, '2020-06-16 07:59:33', '2020-06-16 07:59:33'),
(27, 'Turu rame-rame v22', 'olahraga', 57, 7, '2020-06-16 08:05:25', '2020-06-16 08:05:25'),
(28, 'Turu rame-rame v2', 'keagamaan', 1, 2, '2020-06-20 22:18:26', '2020-06-20 22:18:26'),
(29, 'Turu rame-rame v2', 'keagamaan', NULL, 1, '2020-06-20 22:37:13', '2020-06-20 22:37:13'),
(30, 'Turu rame-rame v2', 'keagamaan', 1, NULL, '2020-06-20 22:38:20', '2020-06-20 22:38:20'),
(32, 'testing2', 'penyadaran_hukum', 1, NULL, '2020-06-20 22:44:32', '2020-06-20 22:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-06-16 04:05:48', '2020-06-16 04:05:48'),
(2, 'disporapar', 'web', '2020-06-16 04:06:19', '2020-06-16 04:06:19'),
(3, 'organisasi', 'web', '2020-06-16 04:06:26', '2020-06-16 04:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sarana_prasana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('pertemuan_olahraga','coworking','kepemudaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id`, `nama_sarana_prasana`, `kategori`, `id_kelurahan`, `created_at`, `updated_at`) VALUES
(1, 'Aula Kelurahan', 'kepemudaan', 6, '2020-05-05 23:49:40', '2020-05-05 23:49:40'),
(2, 'Kantor Sekretariat', 'kepemudaan', 6, '2020-05-05 23:55:22', '2020-05-05 23:55:22'),
(3, 'Balai RW', 'kepemudaan', 10, '2020-05-05 23:55:44', '2020-05-05 23:55:44'),
(4, 'Gor Kanaya Bulu Tangkis', 'kepemudaan', 8, '2020-05-05 23:56:10', '2020-05-05 23:56:10'),
(5, 'Lapangan/Aula yang diperuntukan sebagai sarana dalam pertemuan, olahraga dll yang terletak di area kelurahan', 'kepemudaan', 11, '2020-05-05 23:56:37', '2020-05-05 23:56:37'),
(6, 'Gedung Bunulrejo Creative & Leadership center', 'kepemudaan', 4, '2020-05-05 23:57:04', '2020-05-05 23:57:04'),
(7, 'Gegung Olahraga Kelurahan Ketawanggede', 'kepemudaan', 37, '2020-05-05 23:57:27', '2020-05-05 23:57:27'),
(8, 'Lapangan Olahraga', 'kepemudaan', 42, '2020-05-05 23:57:54', '2020-05-05 23:57:54'),
(9, 'Aula Kelurahan', 'kepemudaan', 36, '2020-05-05 23:58:23', '2020-05-05 23:58:23'),
(10, 'Lapangan Sepak Bola', 'kepemudaan', 45, '2020-05-05 23:58:54', '2020-05-05 23:58:54'),
(11, 'Lapangan Sepak Bola', 'kepemudaan', 46, '2020-05-05 23:59:52', '2020-05-05 23:59:52'),
(12, 'Musium Keramik', 'kepemudaan', 35, '2020-05-06 00:00:13', '2020-05-06 00:00:13'),
(13, 'Aula Kantor Kelurahan', 'kepemudaan', 43, '2020-05-06 00:00:47', '2020-05-06 00:00:47'),
(14, 'Lapangan', 'kepemudaan', 40, '2020-05-06 00:01:50', '2020-05-06 00:01:50'),
(15, 'Lapangan Bola Volly Di Jl. Sarangan', 'kepemudaan', 38, '2020-05-07 00:36:04', '2020-05-07 00:36:04'),
(16, 'Lapangan Sepak Bola', 'kepemudaan', 41, '2020-05-07 00:36:28', '2020-05-07 00:36:28'),
(17, 'Lapangan Indor Panahan', 'kepemudaan', 44, '2020-05-07 00:36:50', '2020-05-07 00:36:50'),
(19, 'Lapangan', 'kepemudaan', 16, '2020-05-07 00:37:27', '2020-05-07 00:37:27'),
(20, 'Lapangan Olahraga', 'kepemudaan', 22, '2020-05-07 00:37:53', '2020-05-07 00:37:53'),
(21, 'Aula', 'kepemudaan', 18, '2020-05-07 00:38:08', '2020-05-07 00:38:08'),
(22, 'Gedung Kahuripan', 'kepemudaan', 21, '2020-05-07 00:38:26', '2020-05-07 00:38:26'),
(23, 'Aula RW. 3', 'kepemudaan', 17, '2020-05-07 00:39:29', '2020-05-07 00:39:29'),
(24, 'RW. 08', 'kepemudaan', 56, '2020-05-07 00:39:50', '2020-05-07 00:39:50'),
(25, 'Aula Kelurahan', 'kepemudaan', 55, '2020-05-07 00:40:10', '2020-05-07 00:40:10'),
(26, 'Balai RW', 'kepemudaan', 48, '2020-05-07 00:40:38', '2020-05-07 00:40:38'),
(27, 'Lapangan Sepak Bola', 'kepemudaan', 54, '2020-05-07 00:41:11', '2020-05-07 00:41:11'),
(28, 'perpustakaan', 'kepemudaan', 57, '2020-05-07 00:41:33', '2020-05-07 00:41:33'),
(29, 'Gedung Pertemuan', 'kepemudaan', 49, '2020-05-07 00:42:03', '2020-05-07 00:42:03'),
(30, 'Aula lapangan badminton', 'kepemudaan', 50, '2020-05-07 00:42:33', '2020-05-07 00:42:33'),
(31, 'Lapangan Sepak Bola', 'kepemudaan', 53, '2020-05-07 00:42:56', '2020-05-07 00:42:56'),
(32, 'Lapangan Sepak BolaLapangan Sepak Bola', 'kepemudaan', 47, '2020-05-07 00:43:16', '2020-05-07 00:43:16'),
(33, 'Balai Serbaguna', 'kepemudaan', 33, '2020-05-07 00:43:54', '2020-05-07 00:43:54'),
(34, 'Lapangan OR Halilintar', 'kepemudaan', 24, '2020-05-07 00:44:19', '2020-05-07 00:44:19'),
(35, 'Lapangan Olahraga (Bulu Tangkis)', 'kepemudaan', 27, '2020-05-07 00:44:53', '2020-05-07 00:44:53'),
(36, 'Lapangan Sepak Bola', 'kepemudaan', 23, '2020-05-07 00:45:19', '2020-05-07 00:45:19'),
(37, 'Lapangan bola volly', 'kepemudaan', 20, '2020-05-07 00:45:55', '2020-05-07 00:45:55'),
(38, 'Lapangan volly', 'kepemudaan', 9, '2020-05-07 00:46:35', '2020-05-07 00:46:35'),
(39, 'Aula Kelurahan', 'kepemudaan', 19, '2020-05-07 00:46:52', '2020-05-07 00:46:52'),
(40, 'Aula Kelurahan Balai  rw1-8', 'kepemudaan', 51, '2020-05-07 00:47:09', '2020-05-07 00:47:09'),
(41, 'Lapangan sarana olahraga jl candi III depan makam dan aula pertemuan jl Candi IIId/450', 'kepemudaan', 52, '2020-05-07 00:47:34', '2020-05-07 00:47:34'),
(42, 'Aula Kelurahan Klojen', 'kepemudaan', 29, '2020-05-07 00:48:05', '2020-05-07 00:48:05'),
(43, 'Gedung Sasana Krida Budaya (Aset pemkot pengguna dinas kepemudaan dan olahraga)', 'kepemudaan', 32, '2020-05-07 00:48:22', '2020-05-07 00:48:22'),
(44, 'Bengkel Usaha Karang Taruna di kelurahan, Sekretariat dan ruang usaha karang taruna rw 03 jl. Terusan surabaya (cucian sepeda motor dan pom mini)', 'kepemudaan', 25, '2020-05-07 00:48:48', '2020-05-07 00:48:48'),
(45, 'Aula Kelurahan Penanggungan', 'kepemudaan', 31, '2020-05-07 00:49:13', '2020-05-07 00:49:13'),
(46, 'Lapangan Sepak Bola', 'kepemudaan', 13, '2020-05-07 00:49:30', '2020-05-07 00:49:30'),
(47, 'Gor Ken Arok', 'kepemudaan', 14, '2020-05-07 00:49:54', '2020-05-07 00:49:54'),
(48, 'Lapangan Bulutangkis 22', 'kepemudaan', 1, '2020-05-07 00:50:13', '2020-06-16 07:06:43'),
(49, 'Lapangan Sepak Bola', 'kepemudaan', 2, '2020-05-07 00:50:29', '2020-05-07 00:50:29'),
(50, 'Lapangam Badminton', 'kepemudaan', 7, '2020-05-07 00:50:42', '2020-05-07 00:50:42'),
(51, 'Lapangan Futsal', 'kepemudaan', 26, '2020-05-07 00:50:55', '2020-05-07 00:50:55'),
(52, 'lapangan kasur', 'coworking', 57, '2020-06-16 06:03:39', '2020-06-16 06:03:39'),
(53, 'lapangan kasur', 'kepemudaan', 57, '2020-06-16 06:04:16', '2020-06-16 06:04:16'),
(54, 'lapangan kasur', 'pertemuan_olahraga', 57, '2020-06-16 06:05:27', '2020-06-16 06:05:27'),
(55, 'lapangan kasur', 'pertemuan_olahraga', 57, '2020-06-16 06:08:21', '2020-06-16 06:08:21'),
(56, 'lapangan kasur2', 'kepemudaan', 57, '2020-06-16 06:15:31', '2020-06-16 06:15:31'),
(59, 'lapangan kasur', 'pertemuan_olahraga', 57, '2020-06-16 07:19:40', '2020-06-16 07:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_subkategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`id`, `nama_subkategori`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Organisasi Kemasyarakatan Pemuda', 1, NULL, NULL),
(2, 'Organisasi Kemahasiswaan', 1, NULL, NULL),
(3, 'Organisasi Kepelajaran', 1, NULL, NULL),
(4, 'Organisasi Kepemudaan Biasa', 1, NULL, NULL),
(5, 'Kelompok Potensi Pemuda Lain', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_aktor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('disporapar','admin','organisasi_kepemudaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelompok_potensi_pemuda` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_aktor`, `status`, `id_kelompok_potensi_pemuda`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$YynzDvti8/mMPYncJ3r6FubLYm/0kT8RrJB1P9x0ysnD6rBQDsCTy', 'aktor 1', 'admin', NULL, '2020-05-10 01:00:42', '2020-05-10 01:00:42'),
(3, 'organisasi', '$2y$10$YynzDvti8/mMPYncJ3r6FubLYm/0kT8RrJB1P9x0ysnD6rBQDsCTy', 'dpd pemuda', 'organisasi_kepemudaan', 15, '2020-05-21 06:37:11', '2020-05-21 06:50:51'),
(4, 'disporapar', '$2y$10$YynzDvti8/mMPYncJ3r6FubLYm/0kT8RrJB1P9x0ysnD6rBQDsCTy', 'aktor 4', 'disporapar', NULL, '2020-05-22 20:43:47', '2020-05-22 20:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fokus_kerja`
--
ALTER TABLE `fokus_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fokus_kerja_organisasi`
--
ALTER TABLE `fokus_kerja_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_disporapar`
--
ALTER TABLE `kegiatan_disporapar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_kepeloporan`
--
ALTER TABLE `kegiatan_kepeloporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok_potensi_pemuda`
--
ALTER TABLE `kelompok_potensi_pemuda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepeloporan_organisasi`
--
ALTER TABLE `kepeloporan_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `peminjaman_sarana`
--
ALTER TABLE `peminjaman_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fokus_kerja`
--
ALTER TABLE `fokus_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fokus_kerja_organisasi`
--
ALTER TABLE `fokus_kerja_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan_disporapar`
--
ALTER TABLE `kegiatan_disporapar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kegiatan_kepeloporan`
--
ALTER TABLE `kegiatan_kepeloporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan_organisasi`
--
ALTER TABLE `kegiatan_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kelompok_potensi_pemuda`
--
ALTER TABLE `kelompok_potensi_pemuda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `kepeloporan_organisasi`
--
ALTER TABLE `kepeloporan_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `peminjaman_sarana`
--
ALTER TABLE `peminjaman_sarana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
