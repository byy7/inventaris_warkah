-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 08:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warkah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukutanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_10_16_041555_create_data_table', 1),
(14, '2022_03_09_151131_add_last_login_field', 2),
(15, '2022_03_12_230540_tbl_pengajuan', 3),
(16, '2022_03_12_231855_tbl_peminjaman', 3);

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
-- Table structure for table `tbl_desa`
--

CREATE TABLE `tbl_desa` (
  `desa_kode` char(10) NOT NULL,
  `desa_nama` varchar(100) DEFAULT NULL,
  `desa_kec` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_desa`
--

INSERT INTO `tbl_desa` (`desa_kode`, `desa_nama`, `desa_kec`) VALUES
('A01', 'Sungai Rebo', '001'),
('A02', 'Sungai Gerong', '001'),
('A03', 'Merah Mata', '001'),
('A04', 'Perajen', '001'),
('A05', 'Cinta Manis', '001'),
('A06', 'Perambahan', '001'),
('A07', 'Pematang Palas', '001'),
('A08', 'Tirto Sari', '001'),
('A09', 'Pulau Borang', '001'),
('A10', 'Mariana', '001'),
('A11', 'Mariana Ilir', '001'),
('A12', 'Duren Ijo', '001'),
('A13', 'Perambahan Baru', '001'),
('B01', 'Sungsang I', '002'),
('B02', 'Sungsang II', '002'),
('B03', 'Sungsang III', '002'),
('B04', 'Sungsang IV', '002'),
('B05', 'Teluk Payo', '002'),
('B06', 'Perajen Jaya', '002'),
('B07', 'Tanah Pilih', '002'),
('B08', 'Muara Sungsang', '002'),
('B09', 'Rimau Sungsang', '002'),
('B10', 'Marga Sungsang', '002'),
('C01', 'Langkan', '003'),
('C02', 'Pangkalan Panji', '003'),
('C03', 'Kayu Ara Kuning', '003'),
('C04', 'Mulya Agung', '003'),
('C05', 'Lubuk Saung', '003'),
('C06', 'Ujung Tanjung', '003'),
('C07', 'Pangkalan Balai', '003'),
('C08', 'Sindang Mas', '003'),
('C09', 'Galang Tinggi', '003'),
('C10', 'Petaling', '003'),
('C11', 'Rimba Alai', '003'),
('C12', 'Pelajau Ilir', '003'),
('C13', 'Regan Agung', '003'),
('C14', 'Suka Mulya', '003'),
('C15', 'Tanjung Agung', '003'),
('C16', 'Tanjung Menang', '003'),
('C17', 'Sri Bandung', '003'),
('C18', 'Setrio', '003'),
('C19', 'Pelajau', '003'),
('C20', 'Tanjung Beringin', '003'),
('C21', 'Terentang', '003'),
('C22', 'Tanjung Kepayang', '003'),
('C23', 'Suka Raja Baru', '003'),
('C24', 'Kedondong Raye', '003'),
('C25', 'Terlangu', '003'),
('C26', 'Rimba Balai', '003'),
('D01', 'Teluk Betung', '004'),
('D02', 'Mukut', '004'),
('D03', 'Sumber Rejeki', '004'),
('D04', 'Dana Mulya', '004'),
('D05', 'Wono Mukti', '004'),
('D06', 'Budi Asih', '004'),
('D07', 'Rukun Makmur', '004'),
('D08', 'Nunggal Sari', '004'),
('D09', 'Majatera', '004'),
('D10', 'Wonosari', '004'),
('D11', 'Sumber Mulyo', '004'),
('D12', 'Rawa Banda', '004'),
('D13', 'Senda Mukti', '004'),
('D14', 'Tirta Mulya', '004'),
('D15', 'Banjar Sari', '004'),
('D16', 'Buana Mukti', '004'),
('D17', 'Tabuan Asri', '004'),
('E01', 'Pulau Rajak', '005'),
('E02', 'Bukit', '005'),
('E03', 'Seri Kembang', '005'),
('E04', 'Lubuk Karet', '005'),
('E05', 'Talang Jaya Mulya', '005'),
('E06', 'Talang Jaya Raya I', '005'),
('E07', 'Talang Jaya Indah', '005'),
('E08', 'Betung', '005'),
('E09', 'Rimba Asam', '005'),
('E10', 'Sukamulya', '005'),
('E11', 'Talang Jaya Raya II', '005'),
('F01', 'Kebun Sahang', '006'),
('F02', 'Sijou', '006'),
('F03', 'Tanah Lembak', '006'),
('F04', 'Parit', '006'),
('F05', 'Pelaju', '006'),
('F06', 'Suka Pindah', '006'),
('F07', 'Desa Baru', '006'),
('F08', 'Tanjung Kerang', '006'),
('F09', 'Rambutan', '006'),
('F10', 'Tanjung Merbu', '006'),
('F11', 'Sako', '006'),
('F12', 'Gelebak Dalam', '006'),
('F13', 'Menten', '006'),
('F14', 'Pangkalan Gelebak', '006'),
('F15', 'Sungai Dua', '006'),
('F16', 'Sungai Pinang', '006'),
('F17', 'Sungai Kedukan', '006'),
('F18', 'Durian Gadis', '006'),
('F19', 'Pulau Parang', '006'),
('F20', 'Jakabaring Selatan', '006'),
('G01', 'Muara Padang', '007'),
('G02', 'Tanjung Baru', '007'),
('G03', 'Karang Anyar', '007'),
('G04', 'Purwodadi', '007'),
('G05', 'Sumber Makmur', '007'),
('G06', 'Air Gading', '007'),
('G07', 'Tirto Raharjo', '007'),
('G08', 'Daya Utama', '007'),
('G09', 'Daya Makmur', '007'),
('G10', 'Sido Mulyo 18', '007'),
('G11', 'Sido Rejo', '007'),
('G12', 'Sido Mulyo 20', '007'),
('G13', 'Marga Mulyo jalur 20', '007'),
('G14', 'Marga Sugihan', '007'),
('G15', 'Tirta Jaya', '007'),
('H01', 'Marga Rahayu', '008'),
('H02', 'Sumber Mulya', '008'),
('H03', 'Sumber Hidup', '008'),
('H04', 'Telang Rejo', '008'),
('H05', 'Telang Jaya', '008'),
('H06', 'Telang Makmur', '008'),
('H07', 'Telang Karya', '008'),
('H08', 'Panca Mukti', '008'),
('H09', 'Mukti Jaya', '008'),
('H10', 'Mekar Sari', '008'),
('H11', 'Talang indah', '008'),
('H12', 'Mekar Mukti', '008'),
('H13', 'Upang Jaya', '008'),
('H14', 'Upang Ceria', '008'),
('H15', 'Upang Cemara', '008'),
('H16', 'Upang Karya', '008'),
('I01', 'Tirta Mulya', '009'),
('I02', 'Pendawo Harjo', '009'),
('I03', 'Pangestu', '009'),
('I04', 'Tirta Kencana', '009'),
('I05', 'Upang Makmur', '009'),
('I06', 'Makarti Jaya', '009'),
('I07', 'Upang Mulya', '009'),
('I08', 'Purwosari', '009'),
('I09', 'Sungai Semut', '009'),
('I10', 'Muara Baru', '009'),
('I11', 'Tanjung Baru', '009'),
('I12', 'Tanjung Mas', '009'),
('J01', 'Sungai Rengit', '010'),
('J02', 'Air Batu', '010'),
('J03', 'Sukamoro', '010'),
('J04', 'Sukajadi', '010'),
('J05', 'Pangkalan Benteng', '010'),
('J06', 'Kenten', '010'),
('J07', 'Gasing', '010'),
('J08', 'Talang Buluh', '010'),
('J09', 'Talang Keramat', '010'),
('J10', 'Tanah Mas', '010'),
('J11', 'Kenten Laut', '010'),
('J12', 'Sungai Rengit Murni', '010'),
('K01', 'MUARA ABAB', '011'),
('K02', 'TANJUNG PASIR', '011'),
('K03', 'TANJUNG TIGA', '011'),
('K04', 'RANTAU BAYUR', '011'),
('K05', 'KEMANG BEJALU', '011'),
('K06', 'TANJUNG MENANG', '011'),
('K07', 'SRIJAYA', '011'),
('K08', 'SEJAGUNG', '011'),
('K09', 'SUNGAI PINANG', '011'),
('K10', 'SEMUNTUL', '011'),
('K11', 'LEBUNG', '011'),
('K12', 'LUBUK RENGAS', '011'),
('K13', 'PALDAS', '011'),
('K14', 'TEBING ABANG', '011'),
('K15', 'TALANG KEMANG', '011'),
('K16', 'SUNGAI NAIK', '011'),
('K17', 'SUKARELA', '011'),
('K18', 'RANTAU HARAPAN', '011'),
('K19', 'SUNGAI LILIN', '011'),
('K20', 'PENANDINGAN', '011'),
('L01', 'TANJUNG LAGO', '012'),
('L02', 'KUALA PUNTIAN', '012'),
('L03', 'SEBALIK', '012'),
('L04', 'SUKATANI', '012'),
('L05', 'SUKA DAMAI', '011'),
('L06', 'BANYU URIP', '012'),
('L07', 'MUARA SUGIH', '012'),
('L08', 'MANGGAR RAYA', '012'),
('L09', 'SRI MENANTI', '012'),
('L10', 'BANGUN SARI', '012'),
('L11', 'TELANG SARI', '012'),
('L12', 'PURWOSARI', '012'),
('L13', 'MULYA SARI', '012'),
('L14', 'SUMBER MEKAR MUKTI', '012'),
('L15', 'BUNGA KARANG', '012'),
('M01', 'BENTAYAN', '013'),
('M02', 'TELUK TENGGULANG', '012'),
('M03', 'SUKA MULYA', '013'),
('M04', 'SUKA RAJA', '013'),
('M05', 'KARANG ANYAR', '013'),
('M06', 'KARANG ASEM', '013'),
('M07', 'MARGA RAHAYU', '013'),
('M08', 'SIDO MULYO', '013'),
('M09', 'KELUANG', '013'),
('M10', 'BUMI SERDANG', '013'),
('M11', 'KARANG MULYA', '013'),
('M12', 'SUKA KARYA', '013'),
('M13', 'PANCA MULYA', '013'),
('M14', 'SUKA JAYA', '013'),
('N01', 'SALEH MUKTI', '014'),
('N02', 'AIR SOLOK BATU', '014'),
('N03', 'SALEH AGUNG', '014'),
('N04', 'SRI MULYA', '014'),
('N05', 'SRI KATON', '014'),
('N06', 'SIDOHARJO', '014'),
('N07', 'BINTARAN', '014'),
('N08', 'ENGGAL REJO', '014'),
('N09', 'DAMAR WULAN', '014'),
('N10', 'SALEH JAYA', '014'),
('N11', 'SALEH MULYA', '014'),
('N12', 'SUNGAI AREN', '014'),
('N13', 'UPANG', '014'),
('N14', 'Upang Marga', '014'),
('O01', 'TIRTO HARJO', '015'),
('O02', 'REJO SARI', '015'),
('O03', 'DAYA MURNI', '015'),
('O04', 'DAYA BANGUN HARJO', '015'),
('O05', 'SUMBER MULYO', '015'),
('O06', 'SUGIH WARAS', '015'),
('O07', 'INDRAPURA', '015'),
('O08', 'CENDANA', '015'),
('O09', 'ARGO MULYO', '015'),
('O10', 'TIRTA MULYA', '015'),
('O11', 'DAYA KESUMA', '015'),
('O12', 'MARGA RUKUN', '015'),
('O13', 'GANESHA MUKTI', '015'),
('O14', 'TIMBUL JAYA', '015'),
('O15', 'BERINGIN AGUNG', '015'),
('O16', 'JALUR MULYA', '015'),
('O17', 'GILIRANG', '015'),
('O18', 'JURU TARO', '015'),
('O19', 'KUALA SUGIHAN', '015'),
('O20', 'MARGA MULYA 16', '015'),
('O21', 'MEKAR JAYA', '015'),
('O22', 'SIDO MAKMUR', '015'),
('P01', 'MAINAN', '016'),
('P02', 'LIMAU', '016'),
('P03', 'REJODADI', '016'),
('P04', 'LALANG SEMBAWA', '016'),
('P05', 'PULAU HARAPAN', '016'),
('P06', 'PURWOSARI', '016'),
('P07', 'Santan Sari', '016'),
('P08', 'SAKO MAKMUR', '016'),
('P09', 'MUARA DAMAI', '016'),
('P10', 'LIMBANG MULYA', '016'),
('P11', 'PULAU MUNING', '016'),
('Q01', 'TALANG IPUH', '017'),
('Q02', 'DURIAN DAUN', '017'),
('Q03', 'Lubuk Lancang', '017'),
('Q04', 'Biyuku', '017'),
('Q05', 'BENGKUANG', '017'),
('Q06', 'Rimba Terap', '017'),
('Q07', 'SEDANG', '017'),
('Q08', 'TANJUNG LAUT', '017'),
('Q09', 'AIR SENGGIRIS', '017'),
('Q10', 'Meranti', '017'),
('Q11', 'SUKARAJA', '017'),
('R01', 'TERUSAN DALAM', '018'),
('R02', 'Karang Anyar', '018'),
('R03', 'MUARA TELANG', '018'),
('R04', 'TERUSAN TENGAH', '018'),
('R05', 'SUMBER JAYA', '018'),
('R06', 'Karang Baru', '018'),
('R07', 'Muara Telang Marga', '018'),
('R08', 'Terusan Muara', '018'),
('R09', 'Talang Lubuk', '018'),
('R10', 'Sri Tiga', '018'),
('S01', 'Cinta Manis Baru', '019'),
('S02', 'SIDO MAKMUR', '019'),
('S03', 'SIDO MULYA', '019'),
('S04', 'NUSA MAKMUR', '019'),
('S05', 'Rimba Jaya', '019'),
('S06', 'Teluk Tenggirik', '019'),
('S07', 'Sebubus', '019'),
('S08', 'PADANG REJO', '019'),
('S09', 'Kumbang Padang Permata', '019'),
('S10', 'MUARA BARU', '019'),
('S11', 'TIRTO MAKMUR', '019'),
('S12', 'PANCA MULYA', '019'),
('S13', 'BUDI MULYO', '019'),
('S14', 'Panca Desa', '019'),
('S15', 'AIR KUMBANG BAKTI', '019'),
('S16', 'Sebokor', '019'),
('T01', 'Karang Sari', '020'),
('T02', 'Maju Ria', '020'),
('T03', 'Sri Agung', '020'),
('T04', 'Sumber Rejeki', '020'),
('T05', 'Tabala Jaya', '020'),
('T06', 'Jati Sari', '020'),
('T07', 'Mekar Sari', '020'),
('U01', 'Penuguan', '021'),
('U02', 'Sumber Rejo', '021'),
('U03', 'Sumber Mukti', '021'),
('U04', 'Sumber Agung', '021'),
('U05', 'Wonodadi', '021'),
('U06', 'Mekar Sari', '021'),
('U07', 'Songo Makmur', '021'),
('U08', 'Karang Manunggal', '021'),
('U09', 'Purwodadi', '021'),
('U10', 'Ringin Harjo', '021'),
('U11', 'Bumi Rejo', '021'),
('U12', 'Kelapa Dua', '021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `kec_kode` char(10) NOT NULL,
  `kec_nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`kec_kode`, `kec_nama`) VALUES
('001', 'Banyuasin I'),
('002', 'Banyuasin II'),
('003', 'Banyuasin III'),
('004', 'Pulau Rimau'),
('005', 'Betung'),
('006', 'Rambutan'),
('007', 'Muara Padang'),
('008', 'Muara Telang'),
('009', 'Makarti Jaya'),
('010', 'Talang Kelapa'),
('011', 'Rantau Bayur'),
('012', 'Tanjung Lago'),
('013', 'Tungkal Ilir'),
('014', 'Air Saleh'),
('015', 'Muara Sugihan'),
('016', 'Sembawa'),
('017', 'Suak Tape'),
('018', 'Sumber Marga Telang'),
('019', 'Air Kumbang'),
('020', 'Karang Agung Ilir'),
('021', 'Selat Penuguan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bukutanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koderak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglpeminjaman` datetime NOT NULL,
  `tglpengembalian` datetime DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_bukutanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koderak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglpengajuan` datetime NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `tujuanpeminjaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`, `last_login_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-11-17 21:41:48', '$2y$10$a1JrM9lF1zMM.Gs5.BD2MutqfuuArfIQ2joOi382Dg75EWlo9.aH.', '56mS9Y1Oxy3ncSOfwx7gWrvGKwWlwUGMAXWM1s3Dxc5P9tRcsUDFZp9JSoLo', 'admin', '2021-11-17 21:41:48', '2022-03-17 06:30:32', '2022-03-17 13:30:32'),
(2, 'User', 'user@gmail.com', '2021-11-17 21:41:48', '$2y$10$19Oa1J2SujuXjpDKlbgOM.55/Nux9MsMJZj8w5JUPzU9m5gpBPCim', NULL, 'user', '2021-11-17 21:41:48', '2022-03-17 04:59:54', '2022-03-17 11:59:54'),
(6, 'Admin', 'adminwarkah@gmail.com', '2022-03-17 07:18:03', '$2y$10$9Zza3UIbDe8d2uHkiVzI7.gdpPFNYGZuZ65/uaCnGLpgJapuhkiCm', NULL, 'admin', '2022-03-17 07:18:03', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD PRIMARY KEY (`desa_kode`),
  ADD KEY `desa_kec` (`desa_kec`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`kec_kode`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_desa`
--
ALTER TABLE `tbl_desa`
  ADD CONSTRAINT `tbl_desa_ibfk_1` FOREIGN KEY (`desa_kec`) REFERENCES `tbl_kecamatan` (`kec_kode`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
