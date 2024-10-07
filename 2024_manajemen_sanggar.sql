-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 04:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2024_manajemen_sanggar`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_08_065729_create_tb_pengumumen_table', 2),
(6, '2024_05_08_084145_create_tb_kegiatans_table', 3),
(7, '2024_05_08_084229_create_tb_kategoris_table', 3),
(8, '2024_05_08_095946_create_tb_pelatihs_table', 4),
(9, '2024_05_08_110143_create_tb_anggotas_table', 5),
(10, '2024_05_08_111252_create_tb_jenis_kelompoks_table', 5),
(11, '2024_05_09_113123_create_tb_pembelajarans_table', 6),
(12, '2024_05_09_113609_create_tb_pertunjukans_table', 6),
(13, '2024_05_10_011321_create_tb_administrasis_table', 7),
(14, '2024_05_10_225013_create_tb_jenis_administrasis_table', 8),
(15, '2024_05_11_105022_create_tb_keuangans_table', 9),
(16, '2024_05_11_142038_create_tb_jadwals_table', 10),
(17, '2024_05_14_095656_create_tb_kehadirans_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_administrasis`
--

CREATE TABLE `tb_administrasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_administrasi` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pendaftaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_administrasis`
--

INSERT INTO `tb_administrasis` (`id`, `id_administrasi`, `id_anggota`, `id_jenis_administrasi`, `item`, `jumlah_pendaftaran`, `bayar`, `tanggungan`, `tgl_pembayaran`, `status_bayar`, `created_at`, `updated_at`) VALUES
(3, '002', '002', '002', 'PEDNAFTARAN ANGGOTA SANGGAR TARI', '150000', '300000', '-150000', '2024-05-11', 'Lunas', '2024-05-11 01:27:42', '2024-05-11 01:51:51'),
(4, '003', '001', '001', 'PEDNAFTARAN ANGGOTA SANGGAR TARI', '250000', '300000', '-50000', '2024-05-11', 'Lunas', '2024-05-11 01:52:35', '2024-05-11 01:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggotas`
--

CREATE TABLE `tb_anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok_tari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_anggotas`
--

INSERT INTO `tb_anggotas` (`id`, `id_anggota`, `nama_anggota`, `jumlah_anggota`, `alamat`, `nohp`, `provensi`, `kabupaten`, `kelompok_tari`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, '001', 'Najih Bur', '10', 'karanganyar paiton probolinggo', '083784738748', 'Jawa Timur', 'Probolinggo', 'Dewasa Pemula', 'user', '$2y$10$whtrhqR96WBZouhnSiJz2.uoPDI8Byo3c43YgJAonDQt3sQ/sgTHy', 'Aktif', '2024-05-08 06:32:14', '2024-05-09 03:14:57'),
(2, '002', 'TARI ISTATIK JAIPONG', '10', 'KARANGANYAR PAITON PROBOLINGGO', '083787483784', 'JAWA TIMUR', 'PROBOLINGGO', 'Dewasa A', 'tari12', '$2y$10$UthZskJqEqohSzQSmiPnXOw2ULW1YniKAdtznrP9z2Z89V1s8XlnO', 'Aktif', '2024-05-09 02:54:10', '2024-05-09 03:15:04'),
(4, '004', 'TARI ISLAMIK', '12', 'Kecamatan Bondowoso, Kabupaten Bondowoso, Provinsi Jawa Timur, Indonesia.', '093892839839', 'Jawa Timur', 'Probolinggo', 'Dewasa Pemula', 'islamik12', '$2y$10$bD1Onb2p5JNrYdGj4.jXueKATQbthuUIrOOF3iK585ObRTSBza/cC', 'Aktif', '2024-05-14 01:58:53', '2024-05-14 07:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwals`
--

CREATE TABLE `tb_jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jadwals`
--

INSERT INTO `tb_jadwals` (`id`, `id_jadwal`, `id_anggota`, `uraian`, `hari`, `waktu`, `lokasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '001', '001', 'KEGIATAN TARI', 'Rabu', '23:04', 'Sanggar Tari Gedung 1', '<p>Melaksanakan kegiatan tari yang dilakukan oleh pelatih (M.Sah) sebagai pelatih profesional</p>', '2024-05-11 09:03:22', '2024-05-12 04:02:58'),
(2, '002', '004', 'JADWAL KEGIATAN', 'Selasa', '19:35', 'Gedung 1 Lanta 1', '<p>Menjalankan Kegiatan Tari</p>', '2024-05-14 03:33:26', '2024-05-14 05:05:00'),
(3, '003', '004', 'JADWAL KEGIATAN', 'Kamis', '20:52', 'Gedung 1 Lanta 1', 'Mengikuti kegiatan seni tari tradisional', '2024-05-14 04:51:38', '2024-05-14 04:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_administrasis`
--

CREATE TABLE `tb_jenis_administrasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jenis_administrasis`
--

INSERT INTO `tb_jenis_administrasis` (`id`, `id_jenis`, `jenis`, `biaya`, `created_at`, `updated_at`) VALUES
(1, '001', 'PENDAFTARAN SANGGAR TARI', '250000', '2024-05-11 00:52:37', '2024-05-11 00:53:08'),
(2, '002', 'BIAYA GAUN TARI', '150000', '2024-05-11 00:53:42', '2024-05-11 00:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_kelompoks`
--

CREATE TABLE `tb_jenis_kelompoks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jenis_kelompoks`
--

INSERT INTO `tb_jenis_kelompoks` (`id`, `nomor`, `nama_kelompok`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '001', 'Anak Pemula', '<p>Tari Kupu</p>', '2024-05-08 04:23:51', '2024-05-08 04:26:16'),
(2, '002', 'Anak A', '<p>Tari Kumbang</p>', '2024-05-08 04:24:37', '2024-05-08 04:24:37'),
(3, '003', 'Anak B', '<p>Tari Semut&nbsp;</p>', '2024-05-08 04:24:57', '2024-05-08 04:24:57'),
(4, '004', 'Dewasa Pemula', '<p>Tari Jalak Pito</p>', '2024-05-08 04:25:15', '2024-05-08 04:25:15'),
(5, '005', 'Dewasa A', '<p>Tari Merpati&nbsp;</p>', '2024-05-08 04:25:34', '2024-05-08 04:25:34'),
(6, '006', 'Dewasa B', '<p>Tari Pesona Jawa Tengah&nbsp;</p>', '2024-05-08 04:25:55', '2024-05-08 04:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategoris`
--

CREATE TABLE `tb_kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kategoris`
--

INSERT INTO `tb_kategoris` (`id`, `nomor`, `kategori`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, '001', 'Kegiatan Inti', '<p>1) Guru menayangkan sebuah video tari, peserta didik mengamati makna tari berdasarkan aspek tekstual yang terdapat pada video tari tersebut, peserta didik diperbolehkan berdiskusi dengan rekan sebangku berkaitan dengan permasalahan yang disajikan, dan bertanya apabila ada yang belum dipahami;</p>\r\n\r\n<p>2) Peserta didik diminta untuk membuat tulisan deskriptif mengenai karya tari yang diamati berdasarkan materi tentang makna tari secara tekstual yang telah disampaikan oleh guru;</p>\r\n\r\n<p>3) Peserta didik membuat kesimpulan sementara dari hasil diskusi dengan teman sebangku;</p>\r\n\r\n<p>4) Guru memberikan kesempatan bagi masing-masing peserta didik untuk mempresentasikan hasil kerjanya di depan kelas, lalu peserta didik lain memberikan tanggapan dengan mengajukan pertanyaan ataupun memberikan masukan;</p>\r\n\r\n<p>5) Guru membuat kesimpulan bersama tentang materi yang telah dibahas yaitu makna tari berdasarkan aspek tekstual.</p>', 'Aktif', '2024-05-08 02:16:11', '2024-05-08 02:19:32'),
(2, '002', 'Kegiatan Pembelajaran Alternatif', '<p style=\"text-align:justify\">Jika pada pertemuan pertama ada peserta didik yang tidak hadir guru dapat memberikan tugas pengganti yaitu membuat tulisan atau rangkuman tentang isu&ndash;isu seni dan budaya yang pernah terjadi di Indonesia yang pernah diketahui oleh peserta didik melalui media maupun berita. Kemudian dalam tulisan tersebut peserta didik diminta mengemukakan pendapatnya dalam penyelesaian persoalan isu&ndash;isu seni dan budaya tersebut</p>', 'Aktif', '2024-05-08 02:20:30', '2024-05-08 02:20:30'),
(3, '003', 'Tari Tradisi Klasik', '<p style=\"text-align:justify\">Tari tradisi klasik adalah tari yang berasal dari masyarakat istana dengan kaidah gerak yang baku, serta estetikanya yang mengacu pada kaidah-kaidah yang baku dari semua elemennya. Tari klasik adalah tari yang berkembang di lingkungan kerajaan sebagai sarana upacara maupun sarana penghormatan pada raja, contohnya dapat diamati dalam tari Bedhaya atau Srimpi.</p>', 'Aktif', '2024-05-08 02:43:30', '2024-05-08 02:43:30'),
(4, '004', 'Tari Tradisi Kerakyatan', '<p style=\"text-align:justify\">Tari kerakyatan adalah tari yang berasal dari lingkungan masyarakat di luar lingkungan kerajaan. Tari rakyat umumnya didominasi dengan kaidah gerak yang beragam dan spontan hasil ekspresi jiwa masyarakat. Contoh makna tari berdasarkan kajian tekstual dan kontekstual tari rakyat dapat dilihat pada tari-tari dengan gerak dan musik yang spontan seperti pada tari Bajidoran di Jawa Barat atau tari Joget Bumbung di Bali, tari Zapin Muda Mudi dari Riau dan masih banyak lagi.&nbsp;</p>', 'Aktif', '2024-05-08 02:43:57', '2024-05-08 02:43:57'),
(5, '005', 'Tari Kreasi Baru', '<p style=\"text-align:justify\">Tari kreasi baru adalah sebuah karya tari yang berasal dari hasil cipta seniman tari yang berasal dari pengembangan tari-tari tradisi yang melatarbelakangi kehidupan seniman tersebut. Tari kreasi baru dapat terinspirasi dari tari&ndash; tari klasik atau tari rakyat. &nbsp;Dalam tari kreasi baru terdapat pula unsur-unsur&nbsp;<br />\r\n64 Buku Panduan Guru Seni Tari untuk SMA/SMK Kelas X<br />\r\npembaruan pada beberapa elemen dalam seni tari.</p>', 'Aktif', '2024-05-08 02:44:35', '2024-05-08 02:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatans`
--

CREATE TABLE `tb_kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kegiatans`
--

INSERT INTO `tb_kegiatans` (`id`, `id_kegiatan`, `uraian`, `id_anggota`, `nama_anggota`, `keterangan`, `upload`, `created_at`, `updated_at`) VALUES
(1, '001', 'Kegiatan Latihan Menari Sanggar Tari Anak Anak Desa Situbondo', '001', 'Najih Bur', '<p>Kegiatan ini bertujuan untuk mengekspresikan diri secara kreatif, yang dihadiri oleh anak anak.</p>\n\n<p>Setelah mengikuti kegiatan ini peserta menjadi bisa untuk membawakan tarian daerah.</p>\n\n<p>Kegiatan ini terlaksana dengan antusias peserta cukup baik.</p>\n\n<p>Kegiatan yang ada dalam sebuah sanggar seni berupa&nbsp;<strong>kegiatan pembelajaran tentang seni, yang meliputi proses dari pembelajaran, penciptaan hingga produksi dan semua proses hampir sebagian besar dilakukan di dalam sanggar</strong>&nbsp;(tergantung ada tidaknya fasilitas dalam sanggar), sebagai contoh apabila menghasilkan karya berupa ...</p>', '1715250520141-16867439861.jpeg', '2024-05-09 03:28:40', '2024-05-09 04:11:34'),
(2, '002', 'SANGGAR TARI ABHINAYA', '002', 'TARI ISTATIK JAIPONG', 'Sanggar tari ini bernama Abhinaya yang memiliki arti penuh semangat, sehingga diharapkan dapat selalu memberikan penampilan yang penuh semangat dan mampu memberikan semangat kepada penonton yang menikmati penampilan.\r\n\r\nSanggar Tari Abhinaya melaksanakan kegiatan-kegiatan bertujuan untuk:\r\n\r\nMemberikan wadah pada masyarakat yang mempunyai minat di bidang seni dan budaya\r\n\r\nMenyalurkan bakat generasi muda\r\n\r\nMelestarikan, mengembangkan, dan membangkitkan seni budaya tradisi\r\n\r\nMemberi hiburan bagi warga\r\n\r\nMemberi kegiatan positif bagi warga masyarakat\r\n\r\nMenambah pendapatan masyarakat dan para pelaku seninya\r\n\r\nSanggar Tari Abhinaya memiliki fungsi sebagai berikut:\r\n\r\nMembantu mengembangkan potensi putra-putri wilayah Purwokinanti, Kecamatan Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta\r\n\r\nMembantu menyalurkan minat dan bakat putra-putri, khususnya di bidang kesenian tari\r\n\r\nMenanamkan nilai-nilai luhur dari seni dan budaya', '1715250952026-20220929123847_SANGGAR_TARI_ABHINAYA.jpg', '2024-05-09 03:35:52', '2024-05-09 03:35:52'),
(3, '003', 'Sanggar Tari Harus Miliki Ciri Khas Daerah Sukadana', '002', 'TARI ISTATIK JAIPONG', 'Kayong Utara, InfoPublik-Alfianto Dosen Institut Seni dan Budaya Bandung ketika memberikan materi pelatihan tari bagi para pelaku dan pengurus sanggar tari yang ada di Kabupaten Kayong Utara (Istimewa)Sanggar Tari Harus Memiliki Ciri Khas Sukadana.\r\n\r\nDinas Pendidikan Kabupaten Kayong Utara Bidang Kebudayaan, menggelar pelatihan bagi Pelaku seni dan budaya khususnya bagi pelaku tari.Kegiatan yang dilaksanakan,  Rabu (12/04) menghadirkan narasumber, Alfianto  Dosen Institut Seni Budaya Bandung dan Yuza Yanis dari Sanggar Bougenvile Pontianak.\r\n\r\n“Kegiatan ini merupakan penguatan bagi pelaku tari dan pemilik sanggar yang ada di Kayong Utara. Tujuannya untuk pembinaan lebih lanjut bagi generasi muda yang ada, terutama sekolah-sekolah yang akan mengikuti lomba Festival Seni Siswa Nasional,” Jelas Jumadi Gading, Kepala Bidang Kebudayaan Dinas Pendidikan ketika ditemui di sela-sela pembukaan acara pelatihan yang dilaksanakan di Gedung Pertemuan Anugerah Sukadana.\r\n\r\nKegiatan yang diikuti 20 peserta ini, untuk menggali tari-tari yang ada di Kabupaten Kayong Utara  untuk menciptakan ciri khas bagi sanggar-sanggar yang ada.\r\n\r\n“Pelatihan ini baru tahap pertama. Akan ada pelatihan tahap selanjutnya . Kita juga merencanakan akan ada pelatihan pembuatan untuk musik pengiring  tari” jelas pria yang pernah menjabat sebagai Kasubag Humas dan Protokol Setda.\r\n\r\nDalam kegiatan ini, kata jumadi, peserta diberikan materi bagaimana cara membuat koroegrafi tari dan pengenalan tari-tari yang ada di Nusantara.\"Diharapkan dengan pelatihan tari semacam ini dapat ditemukan seni tari yang dapat dijadikan ciri khas atau icon Kabupaten Kayong Utara,\"  katanya.\r\n\r\nKepala Dinas Pendidikan Kabupaten Kayong Utara, Romi Wijaya dalam sambutan yang dibacakan, Nurhabib, Kepala Bidang Pendidikan Dasar, menyatakan, seni tari yang secara simbolik mewakili sikap dan pandangan bangsa Indonesia di tengah arus globalisasi dimana transparansi dan akulturasi terjadi sangat spektakuler di tengah-tengah masyarakat Indonesia secara keseluruhan.\r\n\r\n\"Sebagai bangsa yang berbudaya adanya dampak dan pengaruh globalisasi tersebut, kita harus tetap loyal terhadap seni dan budaya sendiri,karena itulah sanggar tari harus ada dan selalu bertahan dalam segala situasi dan kondisi,” tuturnya.', '1715253539981-20170413090811.jpg', '2024-05-09 04:13:41', '2024-05-09 04:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kehadirans`
--

CREATE TABLE `tb_kehadirans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kehadiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_hadir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hadir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kehadirans`
--

INSERT INTO `tb_kehadirans` (`id`, `id_kehadiran`, `id_anggota`, `id_jadwal`, `hari`, `tgl_hadir`, `status_hadir`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, '001', '004', '002', 'Selasa', '14-05-2024', 'Aktif', 'Mengikuti Kegiatan seni tari Sanggar', '2024-05-14 05:09:29', '2024-05-14 05:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuangans`
--

CREATE TABLE `tb_keuangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_keuangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_keuangans`
--

INSERT INTO `tb_keuangans` (`id`, `nomor`, `item_keuangan`, `id_administrasi`, `jumlah_data`, `sub_total`, `created_at`, `updated_at`) VALUES
(2, '001', 'PEDNAFTARAN ANGGOTA', '003', '1', '250000', '2024-05-12 12:55:41', '2024-05-12 12:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelatihs`
--

CREATE TABLE `tb_pelatihs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pelatihs`
--

INSERT INTO `tb_pelatihs` (`id`, `nip`, `nama_lengkap`, `alamat`, `jenis_kelamin`, `agama`, `nohp`, `foto`, `created_at`, `updated_at`) VALUES
(2, '001', 'M.Najih Ars', 'Kecamatan Bondowoso, Kabupaten Bondowoso, Provinsi Jawa Timur, Indonesia.', 'Laki-Laki', 'Islam', '038493748738', '1715165858922-8b167af653c2399dd93b952a48740620.jpg', '2024-05-08 03:48:00', '2024-05-08 03:57:38'),
(3, '002', 'SITI KROSSANANDA', 'PASAR LIPRAK KIDUL KULON, KECAMATAN GENDING', 'Perempuan', 'Islam', '083782783728', '1715678039158-pelatih.jpg', '2024-05-14 02:13:59', '2024-05-14 02:19:59'),
(4, '003', 'NUR FATIMAH SUL', 'Pasar Renteng Block 1', 'Perempuan', 'Islam', '083782738728', '1715678150127-images-(2).jpg', '2024-05-14 02:15:50', '2024-05-14 02:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelajarans`
--

CREATE TABLE `tb_pembelajarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pembelajaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pembelajarans`
--

INSERT INTO `tb_pembelajarans` (`id`, `id_pembelajaran`, `id_kategori`, `materi`, `id_anggota`, `deskripsi`, `upload`, `status_file`, `created_at`, `updated_at`) VALUES
(1, '001', '001', 'Pentingnya Sanggar Seni Untuk Pelestarian Budaya Daerah Situ Bondo', '001', '<p style=\"text-align:justify\">&nbsp;Sanggar seni adalah suatu tempat atau sarana yang digunakan oleh suatu komunitas atau sekumpulan orang untuk berkegiatan seni seperti seni tari, seni lukis, seni kerajinan&nbsp;atau kriya, seni peran dls. Kegiatan yang ada dalam sebuah sanggar seni berupa kegiatan pembelajaran tentang seni, yang meliputi proses dari pembelajaran, penciptaan hingga produksi dan semua proses hampir sebagian besar dilakukan di dalam sanggar (tergantung ada tidaknya fasilitas dalam sanggar), sebagai contoh apabila menghasilkan karya berupa benda (patung, lukisan, kerajinan tangan dll) maka proses akhir adalah pemasaran atau pameran,apabila karya seni yang dihasilkan bersifat seni pertunjukan (teater, tari, pantomim dll) maka proses akhir adalah pementasan.</p>', '1715298623312-1648836483IMG-20211228-WA0028.jpg', 'File', '2024-05-09 16:50:23', '2024-05-09 17:34:18'),
(2, '002', '003', 'Tari Rampak Anak | Sanggar Tari Candra Kirana Situ Bondo', '001', '<p style=\"text-align:justify\">Sanggar seni termasuk ke dalam jenis pendidikan nonformal. Sanggar seni biasanya didirikan secara mandiri atau perorangan, mengenai tempat dan fasilitas belajar dalam sanggar tergantung dari kondisi masing-masing sanggar ada yang kondisinya sangat terbatas namun ada juga yang memiliki fasilitas lengkap, selain itu sistem atau seluruh kegiatan yang terjadi dalam sanggar seni sangat fleksibel, seperti menyangkut prosedur administrasi, pengadaan sertifikat, pembelajaran yang menyangkut metode pembelajaran hingga evaluasi dll, mengikuti peraturan masing-masing sanggar seni, sehingga antara sanggar seni satu dengan lainnya memiliki peraturan yang belum tentu sama. Karena didirikan secara mandiri, sanggar seni biasanya berstatus swasta, dan untuk penyetaraan hasil pendidikannya harus melalui proses penilaian penyetaraan oleh lembaga yang ditunjuk oleh Pemerintah atau Pemerintah Daerah agar bisa setara dengan hasil pendidikan formal.</p>', '1715300960042-vi.mp4', 'Vidio', '2024-05-09 17:07:25', '2024-05-09 17:29:20'),
(3, '003', '002', 'Praktek Menari dalam Pembelajaran', '004', '<p style=\"text-align:justify\">Pembelajaran&nbsp;<a href=\"https://dulohupa.id/?s=seni&amp;post_type%5B%5D=post\">seni</a>&nbsp;dalam pendidikan biasanya mengajarkan tiga cabang seni, yaitu seni tari, seni musik, dan seni rupa. Tari adalah salah satu cabang jenis seni yang media utamanya adalah menggunakan gerak tubuh. Tari dapat dilakukan secara individual maupun secara berkelompok dengan diiringi oleh musik.</p>\r\n\r\n<p style=\"text-align:justify\">Seni tari menjadi salah satu cabang seni yang sering dipelajari oleh kalangan peserta didik sekolah dasar, sekolah menengah, dan bahkan pada jenjang perguruan tinggi. Tidaklah mungkin bagi para peserta didik dalam masa pembelajarannya di sekolah dasar dan&nbsp; menengah belum pernah melakukan praktek seni tari atau menari.</p>\r\n\r\n<p style=\"text-align:justify\">Praktek seni tari dalam pembelajaran dianggap merupakan suatu hal yang lumrah untuk dilakukan. Oleh sebab itu, banyak guru memberikan tugas kepada peserta didik untuk melakukan praktek menari dalam mata pelajaran pendidikan seni budaya dan keterampilan.</p>\r\n\r\n<p style=\"text-align:justify\">Praktek menari dalam pembelajaran pendidikan seni budaya ini, biasanya ditugaskan dalam bentuk praktek menari secara berkelompok yang diharapkan dalam penugasan praktek secara berkelompok ini &nbsp;peserta didik dapat merasa dimudahkan atau meringankan dalam melakukan persiapan praktek menari.</p>\r\n\r\n<p style=\"text-align:justify\">Sayangnya, persiapan yang dilakukan agar dapat mementaskan suatu tarian itu tidaklah mudah. Dalam persiapan suatu penampilan tari terdapat banyak hal yang perlu diperhatikan. Aspek-aspek yang perlu diperhatikan dalam persiapan melakukan pentas seni tari adalah pertama, peserta didik harus melakukan pemilihan konsep tari yang akan dipentaskan. Kedua, peserta didik harus mulai melakukan penyusunan gerakan dan pola lantai. Ketiga, peserta didik harus menentukan konsep music pengiring tari dan juga menentukan tata rias, tata busana, serta property yang akan digunakan dalam pentas seni tari tersebut.</p>\r\n\r\n<p style=\"text-align:justify\">Persiapan penampilan praktek menari ini membutuhkan waktu yang lama, biasanya guru memberikan waktu sebulan atau tiga bulan kepada peserta didik untuk menyelesaikan&nbsp; praktek menari.</p>\r\n\r\n<p style=\"text-align:justify\">Berdasarkan aspek-aspek persiapan praktek menari diatas, peserta didik merasa penugasan praktek menari ini merupakan praktek seni yang sulit, karena dalam persiapan praktek menari terdapat beberapa kendala ataupun hambatan yang dapat ditemui oleh peserta didik.</p>\r\n\r\n<p style=\"text-align:justify\">Salah satu kendala yang sering sekali didapatkan oleh peserta didik adalah ketika anggota kelompok praktek menari mereka ada yang tidak kompeten atau sama sekali tidak mau berpartisipasi dalam persiapan praktek menari tersebut, Dimana hal tersebut dapat memberatkan anggota kelompok yang lain. Selain itu, terdapat juga hambatan lain, berupa saat melakukan latihan menari ada anggota kelompok yang sering terlambat dari waktu yang dijanjikan. Sehingga menunda dimulainya latihan menari kelompok tersebut. Padahal dalam penugasan praktek menari ini, peserta didik diharapkan dapat membangun hubungan kerja sama antar peserta didik.</p>\r\n\r\n<p style=\"text-align:justify\">Penugasan praktek menari dalam pembelajaran mata pelajaran pendidikan seni budaya dan keterampilan ini tentunya dilakukan juga di Provinsi Gorontalo. Dimana biasanya, tarian yang sering menjadi praktek menari di sekolah dasar, sekolah menengah, maupun perguruan tinggi di Provinsi Gorontalo adalah dua jenis tarian, yaitu tari Saronde dan tari Dana-dana.</p>\r\n\r\n<p style=\"text-align:justify\">Kedua jenis tarian daerah Gorontalo ini, dilakukan secara berpasangan antara penari perempuan dan penari laki-laki. &nbsp;Sehingga dalam praktek menarinya guru membentuk kelompok yang anggota laki-laki dan perempuannya seimbang. Tetapi dalam tarian Dana-dana bisa ditarikan tidak secara berpasangan.</p>\r\n\r\n<p style=\"text-align:justify\">Adanya praktek menari tarian daerah dalam pembelajaran mata pelajaran pendidikan seni budaya dan keterampilan di lembaga pendidikan Provinsi Gorontalo, dinilai dapat memberikan dampak positif dalam pendidikan di Provinsi Gorontalo. Hal ini dikarenakan dalam praktek menari peserta didik dapat mengetahui berbagai tarian yang ada di daerahnya khususnya di Gorontalo sendiri.</p>\r\n\r\n<p style=\"text-align:justify\">Tentunya saat penentuan tarian dan konsep dari tari sebagai aspek pertama dalam persiapan praktek menari, peserta didik akan mencari informasi mengenai jenis-jenis tarian yang ada di Gorontalo. Pada tahap pertama itu, siswa akan mendapatkan pengetahuan lebih dan akan mengenai lebih jauh mengenai tarian daerah Gorontalo.</p>\r\n\r\n<p style=\"text-align:justify\">Dengan pencapaian itu saja sudah merupakan sesuatu yang berharga bagi kemajuan pendidikan di Gorontalo karena kebudayaan dari Gorontalo sendiri mulai terlupakan atau mulai ditinggalkan oleh para anak muda. Penugasan praktek menari yang diberikan guru kepada peserta didik Sekolah Dasar dan Sekolah Menengah dapat memberikan stimulus kepada anak muda yang termasuknya, yaitu para peserta didik Sekolah Menengah.</p>\r\n\r\n<p style=\"text-align:justify\">Sehingga praktek menari dalam pembelajaran khususnya di Provinsi Gorontalo &nbsp;tetap perlu dilakukan untuk membuat peserta didik Provinsi Gorontalo mengenal, mengetahui, dan memahami tarian daerah Provinsi Gorontalo. Oleh karena itu, praktek menari dalam pembelajaran menjadi salah satu cara pelestarian tarian daerah di Provinsi Gorontalo.</p>', '1715695561202-Seni-Tari.jpg', 'File', '2024-05-14 07:06:01', '2024-05-14 07:06:01'),
(4, '004', '004', 'Tarian Tradisional Kekinian dalam Ajang Indonesia Menari 2019', '002', '<p>Sejumlah peserta membawakan tarian tradisional Indonesia yang dikemas lebih menarik, modern, dan kekinian dalam ajang Indonesia Menari 2019 di Atrium 23 Paskal Sopping Centre, Jalan Pasirkaliki, Kota Bandung, Jawa Barat, Minggu (17/11/2019). Kegiatan tahunan ini dimeriahkan oleh sekitar 7.000 peserta berasal dari perorangan, komunitas, dan sanggar tari yang digelar serempak di tujuh kota, yakni Jakarta, Bandung, Solo, Semarang, Medan, Makassar, dan Palembang. Tribun Jabar/Gani Kurniawan</p>', '1715695629156-tarian-tradisional-kekinian-dalam-ajang-indonesia-menari-2019_20191117_211542.jpg', 'File', '2024-05-14 07:07:09', '2024-05-14 07:07:09'),
(5, '005', '002', 'Ekstrakulikuler Seni Tari Sekolah SMK Trimulia Jakarta', '002', '<p>Mengapa tarian ini dinamakan tari Saman? Tarian ini di namakan Saman karena diciptakan oleh seorang Ulama Aceh bernama Syekh Saman pada sekitar abad XIV Masehi, dari dataran tinggi Gayo. Awalnya, tarian ini hanyalah berupa permainan rakyat yang dinamakan Pok Ane. Namun, kemudian ditambahkan iringan syair-syair yang berisi puji-pujian kepada Allah SWT, serta diiringi pula oleh kombinasi tepukan-tepukan para penari. Saat itu, tari saman menjadi salah satu media dakwah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tari Saman biasanya ditampilkan dipandu oleh seorang pemimpin yang lazimnya disebut Syekh. Penari Saman dan Syekh harus bisa bekerja sama dengan baik agar tercipta gerakan yang kompak dan harmonis.</p>\r\n\r\n<p>Makna dan Fungsi Tari Saman dijadikan sebagai media dakwah. Sebelum Saman dimulai, tampil</p>\r\n\r\n<p>pemuka adat untuk mewakili masyarakat setempat. Pemuka adat memberikan nasehat-nasehat yang berguna kepada para pemain dan penonton. Syair-syair yang di antunkan dalam tari Saman juga berisi petuah-petuah dan dakwah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Nyanyian<br />\r\nPada tari Saman, terdapat 5 macam nyanyian :</h3>\r\n\r\n<ol>\r\n	<li>Rengum, yaitu sebagai pembukaan atau mukaddimah dari tari Saman (yaitu setelah dilakukan sebelumnya keketar pidato pembukaan). Rengum ini adalah tiruan bunyi. Begitu berakhir langsung disambung secara bersamaan dengan kalimat yang terdapat didalamnya, antara lain berupa pujian kepada seseorang yang diumpamakan, bisa kepada benda, atau kepada tumbuh-tumbuhan.</li>\r\n	<li>Dering, yaitu rengum yang segera diikuti oleh semua penari.</li>\r\n	<li>Redet, yaitu lagu singkat dengan suara pendek yang dinyanyikan oleh seorang penari pada bagian tengah tari.</li>\r\n	<li>. Syek, yaitu lagu yang dinyanyikan oleh seorang penari dengan suara panjang tinggi melengking, biasanya sebagai tanda perubahan gerak.</li>\r\n	<li>Saur, yaitu lagu yang diulang bersama oleh seluruh penari setelah dinyanyikan oleh penari solo.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Gerakan</h3>\r\n	</li>\r\n</ul>\r\n\r\n<p>Tarian saman menggunakan dua unsur gerak yang menjadi unsur dasar dalam tarian saman: Tepuk tangan dan tepuk dada. Diduga, ketika menyebarkan agama Islam, syeikh saman mempelajari tarian melayu kuno, kemudian menghadirkan kembali lewat gerak yang disertai dengan syair-syair dakwah Islam demi memudahkan dakwahnya. Dalam konteks kekinian, tarian ritual yang bersifat religius ini masih digunakan sebagai media untuk menyampaikan pesan-pesan dakwah melalui pertunjukan-pertunjukan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<h3>Penari</h3>\r\n	</li>\r\n</ul>\r\n\r\n<p>Pada umumnya, tari Saman dimainkan oleh belasan atau puluhan laki-laki. tetapi jumlahnya harus ganjil. Namun, dalam perkembangan selanjutnya, tarian ini juga dimainkan oleh kaum perempuan. Pendapat Lain mengatakan tarian ini ditarikan kurang dari 10 orang, dengan rincian 8 penari dan 2 orang sebagai pemberi aba-aba sambil bernyanyi. Namun, perkembangan di era modern menghendaki bahwa suatu tarian itu akan semakin semarak apabila ditarikan oleh penari dengan jumlah yang lebih banyak. Di sinilah peran Syeikh, ia harus mengatur gerakan dan menyanyikan syair-syair tari Saman.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Kostum atau busana khusus saman terbagi dari tiga bagian yaitu:</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Pada kepala: bulung teleng atau tengkuluk dasar kain hitam empat persegi.Dua segi disulam dengan benang seperti baju, sunting kepies.</li>\r\n	<li>Pada badan: baju pokok/ baju kerawang (baju dasar warna hitam, disulam benang putih, hijau dan merah, bahagian pinggang disulam dengan kedawek dan kekait, baju bertangan pendek) celana dan kain sarung.</li>\r\n	<li>Pada tangan: topeng gelang, sapu tangan. Begitu pula halnya dalam penggunaan warna, menurut tradisi mengandung nilai-nilai tertentu, karena melalui warna menunjukkan identitas para pemakainya. Warna-warna tersebut mencerminkan kekompakan, kebijaksanaan, keperkasaan, keberanian dan keharmonisan.</li>\r\n</ul>\r\n\r\n<h3>&nbsp;Alokasi Waktu</h3>\r\n\r\n<p>4 x 60 menit</p>\r\n\r\n<h3>&nbsp;Metode Pembelajaran</h3>\r\n\r\n<p>Direct instruction , Drill , Pertunjukan</p>\r\n\r\n<ol>\r\n	<li>Kegiatan Pembelajaran</li>\r\n	<li>Kegiatan pendahuluan</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Siswa meresponsa alam dan absen yang di berikan</li>\r\n	<li>Siswa mengulang kegiatan pembelajaran minggu lalu dengan keterkaitan yang lain</li>\r\n	<li>Siswa menierima informasi pembelajaran yang akan di lakukan teknik menari dan pola lantai yang tepat</li>\r\n	<li>Siswa menerima informasi tujuan pembelajaran manfaat dari materi yang di dapat</li>\r\n</ul>\r\n\r\n<h3>Kegiatan Inti</h3>\r\n\r\n<ul>\r\n	<li>Siswa duduk dalam kelompok mengamati tarian sederhana dan teknik melakukannya</li>\r\n	<li>Pelatih dan siswa terlibat untung mempertanggung jawabkan tentang tarian sederhana dan teknik melakukannya .</li>\r\n	<li>Siswa bersama sengan kelompoknya mencoba melakukan taian sederhana sesuai dengan teknik yang telah di amatinya</li>\r\n	<li>Siswa menalar tentang bagian-bagian gerakan tarian sederhana dan teknik melakukannya</li>\r\n	<li>Siswa di minta melakukan tarian sederhana dengan kelompok pelatihb menilai dengan Lembaga Penilaian Keterampilan</li>\r\n</ul>', '1715695819903-IMG_2088-scaled.jpg', 'File', '2024-05-14 07:10:19', '2024-05-14 07:10:19'),
(6, '006', '004', 'Terlihat Mudah, Sejatinya Seni Tari Tradisional Simpan Makna Filosofis yang Dalam', '004', '<p style=\"text-align:justify\">Dari sekian banyak kesenian tradisional Indonesia, tari menjadi salah satu karya seni yang memiliki daya tarik tersendiri di mata orang banyak, terutama para wisatawan asing. Keunikan<a href=\"https://lifestyle.okezone.com/read/2020/02/03/612/2162722/kisah-hidup-guru-tari-jawa-martini-pernah-dibayar-rp50\">&nbsp;seni tari&nbsp;</a>ini terletak pada gerak tubuh yang dilakukan secara berirama dengan alunan musik yang mengiringinya.</p>\r\n\r\n<p style=\"text-align:justify\">Diperlukan konsentrasi tinggi dan keahlian khusus dalam mengolah gerak tubuh untuk menghasilkan pertunjukkan tari yang berkualitas dan memukau. Terlebih,<a href=\"https://lifestyle.okezone.com/read/2020/02/01/612/2161814/rahasia-penari-jawa-terlihat-memesona-saat-pentas\">&nbsp;seni tari</a>&nbsp;Indonesia dikenal memang dikenal sarat akan makna-makna filosofis, sehingga memiliki tingkat kesulitan tersendiri.</p>\r\n\r\n<p style=\"text-align:justify\">Hal tersebut dijelaskan secara gamblang oleh Anna Kunti Pratiwi, selaku Ketua Komunitas Arkamaya Sukma. Menurutnya, tantangan terbesar dalam menekuni seni tari terletak pada tingkat kesulitannya karena harus ada keselarasan rasa, fisik, jiwa, dan memahami makna filosofis setiap gerakan.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Menari sebetulnya bukan hal yang mudah, kalau dibilang lemah gemulai kelihatannya saja, tapi dibutuhkan kekuatan fisik yang luar biasa. Apalagi jenis tari yang kami tekuni adalah tari klasik Jawa (Surakarta). Gerakannya terlihat lambat, tapi justru di situlah kesulitannya. Karena kami harus fokus menyelaraskan semua rasa, fisik, jiwa, dan memahami makna filosofisnya,&quot; ungkapnya saat ditemui Okezone, belum lama ini.</p>\r\n\r\n<p style=\"text-align:justify\">Lebih lanjut Kunti menjelaskan, baginya menari merupakan kesempatan emas untuk meningkatkan konsentrasi dan mengenal diri sendiri. Dia ingat betul pesan dari sang guru bahwa ketika seseorang memutuskan untuk menari, itu berarti mereka harus berani melepas semua beban pikiran sehingga dapat fokus mengolah gerakan tari.</p>\r\n\r\n<p style=\"text-align:justify\">&quot;Kalau saya sendiri menari adalah cara saya untuk belajar fokus, belajar untuk menyelaraskan diri dengan diri sendiri. Kalau guru saya bilangnya &#39;semeleh&#39; artinya berpasrah. Jadi kalau mikirin yang lain, jatuhnya tidak bakal fokus dan biasanya akan mengganggu yang lain dan bubar,&quot; jelas Kunti.</p>', '1715696343979-v22.mp4', 'Vidio', '2024-05-14 07:19:03', '2024-05-14 07:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumumen`
--

CREATE TABLE `tb_pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pengumumen`
--

INSERT INTO `tb_pengumumen` (`id`, `id_pengumuman`, `item`, `deskripsi`, `tgl_pengumuman`, `upload`, `created_at`, `updated_at`) VALUES
(1, '001', 'PENGUMUMAN SENI TARI', '<div style=\"text-align:center\">\r\n<h2><strong>SANGGAR SENI TARI SITUBONDO</strong></h2>\r\nGg. Prajurit, Kotakan Utara, Kotakan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68313<br />\r\nNo. Telp. 0813-3679-2844 / 0813-3679-2866 E-mail : SanggarSitubondo@gmail.com\r\n<hr /></div>\r\n\r\n<div>\r\n<p>Dengan hormat,</p>\r\n\r\n<p>Sehubungan dengan kegiatan . . . . . . . . . . . . ., yang akan kami laksanakan pada:</p>\r\n\r\n<p>Hari/Tanggal&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>maka dengan ini kami ingin memberitahukan perihal kegiatan tersebut kepada Bapak/Ibu . . . . . . . . .,sekaligus untuk meminta izin perihal keamanan agar kegiatan yang akan kami laksanakan tersebut bisa berjalan dengan lancar dan sesuai dengan rencana.</p>\r\n\r\n<p>Demikian surat pemberitahuan kegiatan ini kami beritahukan, atas perhatian dan izin dari Bapak/Ibu, kami ucapkan terimakasih.</p>\r\n\r\n<p style=\"text-align:right\">Hormat Kami,</p>\r\n\r\n<p style=\"text-align:right\">(Nama dan Tanda Tangan)</p>\r\n</div>', '2024-05-08', '1715157240518-dd4cc035-ini-contoh-surat-pemberitahuan-kegiatan-ke-polisi-yang-benar-01-finansialku.jpg', '2024-05-08 01:04:28', '2024-05-08 01:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertunjukans`
--

CREATE TABLE `tb_pertunjukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pertunjukan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_anggota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pertunjukans`
--

INSERT INTO `tb_pertunjukans` (`id`, `id_pertunjukan`, `uraian`, `id_anggota`, `deskripsi`, `upload`, `created_at`, `updated_at`) VALUES
(1, '001', 'Tari Ratoh Jaroe Budaya Sanggar Tari OYO di Windhoek', '001', '<p>Gemuruh tepuk tangan dan sorak kagum memenuhi area beranda Franco Namibian Cultural Center, Windhoek pada tanggal 28 Februari 2024, saat Ombetja Yehinga Organisation (OYO) Dance Company mempersembahkan tarian Ratoh Jaroe dari Aceh dalam Pertunjukan Budaya mereka.</p>\r\n\r\n<p>Tarian Ratoh Jaroe adalah salah satu dari lima tarian yang dipentaskan dalam acara mengenang tahun 2023 dan membuka jalan menuju tahun 2024 yang diselenggarakan sanggar tari OYO untuk memperkenalkan program-program terbaru mereka kepada publik. Selain Tari Ratoh Jaroe, OYO menampilkan cuplikan dari dua kreasi mereka &#39;Remembering Johnny&#39; (penghormatan kepada Johnny Hallyday) dan &#39;a picassiana dance&#39; (penghormatan kepada Pablo Picasso), tari kreasi&nbsp;&nbsp;&ldquo;Teacher&quot; berisikan pesan sosial seperti kehamilan remaja usia sekolah, dan tari kreasi modern yang disponsori oleh GIZ (Badan Kerja Sama Internasional Jerman) mengenai&nbsp;&nbsp;pelecehan seksual di lingkungan kerja.</p>\r\n\r\n<p>Dihadiri oleh kalangan diplomatik dan masyarakat umum Namibia yang gemar seni budaya, pertunjukan tari Ratoh Jaroe menandai kolaborasi yang istimewa antara Indonesia dan Namibia dalam bidang seni budaya.</p>\r\n\r\n<p>​Penampilan tari Ratoh Jaroe ini merupakan kali ketiga ditampilkan sanggar tari OYO. Sebelumnya dipentaskan dalam acara Dance-a-thon pada April 2023 dan Resepsi Diplomatik HUT ke-77 RI pada 6 September 2023. KBRI memfasilitasi pelatih tari dan kostum tarian Ratoh Jaroe kepada sanggar tari OYO.</p>\r\n\r\n<p>Pada tahun 2024, KBRI berencana untuk kembali bekerja sama dengan sanggar tari OYO untuk mempersembahkan tarian Indonesia lainnya. Para penari OYO pun sangat antusias untuk terus belajar dan menghadirkan keindahan seni Indonesia di Namibia.</p>\r\n\r\n<p>Ombetja Yehinga Organisation (OYO) adalah sebuah Yayasan di Namibia yang bertujuan untuk menciptakan kesadaran sosial di kalangan pemuda menggunakan seni, terutama terutama tari. Beberapa karya seni yang mereka ciptakan mengangkat isu-isu sensitif seperti kehamilan remaja di usia sekolah dan pelecehan di dunia kerja. Melalui pertunjukan-pertunjukan mereka, OYO berusaha untuk memberikan pemahaman yang lebih dalam kepada masyarakat tentang isu-isu ini dan mendorong perubahan sosial yang positif.</p>', '1715257424299-8caa3afe-0c6a-43c8-b68d-475ffc6a280b.jpg', '2024-05-09 05:23:44', '2024-05-09 15:07:36'),
(3, '002', 'Sanggar Tari Rentak Gemilang SMA', '002', '<p>Untuk menuju Desa wisata diDesa Jatimulyo,Kecamatan Dlingo,kabupaten Bantul anak-anak muda telah mempersiapkan berbagai seni musik dan tari untuk menyambut atau mengisi didalam tempat wisata yang berada diDesa Jatimulyo.Karang taruna Kenthiwiri bekerja sama dengan Sanggar tari langen budoyo yang bermarkas diDusun Banyuurip Minggu 25 Oktober 2020 mengadakan pelatihan seni musik dari bambu( kentongan ) yang langsung dibimbing oleh Dosen PGSD FKIP UAD&quot; Heni Siswantari S.pd.MA serta Sularso.M.Sn memberikan berbagai pola dasar seni musik dari bambu.</p>\r\n\r\n<p>Musik tersebut nantinya untuk mengiringi berbagai nyanyian dan tari kreasi oleh sanggar tari langen budoyo untuk mengisi pembukan wisata baru dan acara Desa wisata yang nantinya ditahun 2022 akan dilaksanakan lomba Desa Budaya diwilayah Desa Jatimulyo.</p>', '1715293126456-IMG-20230217-WA0008.jpg', '2024-05-09 15:16:08', '2024-05-09 15:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$z5khSdGBZiVVnf7twvPug.jl9PmNFkFNkaUfOvkge630/8IhkXshK', NULL, '2024-05-07 07:06:45', '2024-05-07 07:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_administrasis`
--
ALTER TABLE `tb_administrasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggotas`
--
ALTER TABLE `tb_anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwals`
--
ALTER TABLE `tb_jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_administrasis`
--
ALTER TABLE `tb_jenis_administrasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_kelompoks`
--
ALTER TABLE `tb_jenis_kelompoks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategoris`
--
ALTER TABLE `tb_kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatans`
--
ALTER TABLE `tb_kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kehadirans`
--
ALTER TABLE `tb_kehadirans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keuangans`
--
ALTER TABLE `tb_keuangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelatihs`
--
ALTER TABLE `tb_pelatihs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pembelajarans`
--
ALTER TABLE `tb_pembelajarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengumumen`
--
ALTER TABLE `tb_pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pertunjukans`
--
ALTER TABLE `tb_pertunjukans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_administrasis`
--
ALTER TABLE `tb_administrasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_anggotas`
--
ALTER TABLE `tb_anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jadwals`
--
ALTER TABLE `tb_jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jenis_administrasis`
--
ALTER TABLE `tb_jenis_administrasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jenis_kelompoks`
--
ALTER TABLE `tb_jenis_kelompoks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kategoris`
--
ALTER TABLE `tb_kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kegiatans`
--
ALTER TABLE `tb_kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kehadirans`
--
ALTER TABLE `tb_kehadirans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_keuangans`
--
ALTER TABLE `tb_keuangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelatihs`
--
ALTER TABLE `tb_pelatihs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pembelajarans`
--
ALTER TABLE `tb_pembelajarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pengumumen`
--
ALTER TABLE `tb_pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pertunjukans`
--
ALTER TABLE `tb_pertunjukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
