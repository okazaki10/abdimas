-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 05:10 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rehabilitasi`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2020_05_14_061912_create_rehabilitasis_table', 1),
(9, '2020_05_17_073558_create_home_pages_table', 1),
(10, '2020_05_21_054641_create_pasiens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pasiens`
--

CREATE TABLE `pasiens` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rm` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasiens`
--

INSERT INTO `pasiens` (`id`, `nama`, `no_rm`, `tgl_lahir`, `alamat`, `created_at`, `updated_at`) VALUES
(2, '1', 1, '0001-01-01', '1', '2020-05-20 23:10:32', '2020-05-21 01:25:40'),
(3, 'asdafasd', 22, '1221-02-21', 'sadafsd', '2020-05-20 23:10:43', '2020-05-20 23:10:43'),
(4, 'boy', 13212, '1221-03-12', 'asdfasgasdfsdaf', '2020-05-21 02:13:09', '2020-05-21 02:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `rehabilitasis`
--

CREATE TABLE `rehabilitasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `keluhan_utama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_sekarang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_dulu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemeriksaan_fisik` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terapi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_keluar` datetime NOT NULL,
  `kontrol` int(11) NOT NULL,
  `tgl_kontrol` datetime DEFAULT NULL,
  `intensif` int(11) NOT NULL,
  `ruang_rawat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rehabilitasis`
--

INSERT INTO `rehabilitasis` (`id`, `id_user`, `keluhan_utama`, `riwayat_sekarang`, `riwayat_dulu`, `pemeriksaan_fisik`, `diagnosis`, `program`, `terapi`, `jam_keluar`, `kontrol`, `tgl_kontrol`, `intensif`, `ruang_rawat`, `tanda_tangan`, `created_at`, `updated_at`) VALUES
(2, 3, '232', '3', '23', '3223', '2323', '23', '23', '2000-02-09 00:00:00', 0, '2322-02-23 00:00:00', 1, '23232', 'storage/tanda_tangan/4uoK7hNKhfRFvy2o0P8bOkjDPR2EaLnOmaUyUoA5.jpeg', '2020-05-20 23:24:20', '2020-05-21 02:12:04'),
(3, 2, '1', '1', '1', '1', '1', '1', '12', '0023-02-12 00:00:00', 0, '2322-02-21 00:00:00', 0, '1', 'storage/tanda_tangan/9Q0JeHlpAXuvSclvxThhjzlBgC24OuminUD65e7h.jpeg', '2020-05-20 23:36:35', '2020-05-21 10:10:46'),
(5, 4, 'sadad', 'sdfasdf', 'dsfasdasdf', 'asdfasdf', 'asdfasd', 'fasdfadf', 'asdafasdfadsf', '0002-02-22 00:00:00', 0, '2222-02-21 00:00:00', 0, '1', 'storage/tanda_tangan/KNEp3HuLo0kK5Mx8DP6zSOB64jgIojciJg7PDr0v.jpeg', '2020-05-21 02:13:46', '2020-05-21 10:11:04'),
(6, 2, '1', '1', '1', '1', '1', '1', '1', '1111-11-01 00:00:00', 1, '1111-01-01 00:00:00', 1, '111212', 'storage/tanda_tangan/eSPvWJG0YnBCPjhJYcFlGyc68cb4UmzSS0RXB0JP.jpeg', '2020-05-21 02:15:13', '2020-05-21 02:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasiens`
--
ALTER TABLE `pasiens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rehabilitasis`
--
ALTER TABLE `rehabilitasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

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
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pasiens`
--
ALTER TABLE `pasiens`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rehabilitasis`
--
ALTER TABLE `rehabilitasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rehabilitasis`
--
ALTER TABLE `rehabilitasis`
  ADD CONSTRAINT `rehabilitasis_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pasiens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
