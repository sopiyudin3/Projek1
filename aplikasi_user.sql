-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 09:50 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasi_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE IF NOT EXISTS `alamat` (
`id` int(10) unsigned NOT NULL,
  `users_id` int(11) unsigned NOT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_kantor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `users_id`, `alamat_rumah`, `alamat_kantor`, `alamat_lahir`) VALUES
(1, 5, 'jl alamat rumah', 'jl alamat kantor', 'jl alamat lahir');

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE IF NOT EXISTS `data_keluarga` (
`id` int(10) unsigned NOT NULL,
  `users_id` int(11) unsigned NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_anak` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_12_22_203442_create_alamat_table', 2),
('2017_12_22_204250_create_data_keluarga_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'testing', 'testing1@gmail.comm', 'admin12345', 'ct1FLUmB8Bqz0BtzcPXYTSBUvFlXI4cTLqoFv7uxTHwNuY6q39sb3BjXRkQl', '2017-12-21 17:23:25', '2017-12-24 01:21:02'),
(6, 'user1', 'user1@user.com', 'ggggggggg', NULL, '2017-12-21 17:24:55', '2017-12-21 21:01:28'),
(12, 'Sopiyudin', 'sopiyudin333@gmail.com', '$2y$10$/XX91fu6DLlNnAKaQpdMs.XNraHgcQ33SyM3O62RzTfodJ8Dpq1IW', 'ObrjqjUV0fcjdukK4nUjt7GpWy7ed4EGPeLHxvnn7lnhlh4XLqA36il1IZ2v', '2017-12-22 00:07:49', '2017-12-24 01:24:19'),
(13, 'testing2', 'testin2@gmail.com', 'admin123', NULL, '2017-12-22 00:44:03', '2017-12-22 00:44:03'),
(14, 'testing3', 'testing3@gmail.com', 'admin123', NULL, '2017-12-22 01:10:42', '2017-12-22 01:10:42'),
(16, 'testing123', 'testing123@gmail.com', 'admin123', NULL, '2017-12-22 03:05:32', '2017-12-22 03:05:32'),
(17, 'testing4', 'testing4@gmail.com123000', 'aaaaaa123000', NULL, '2017-12-23 14:41:38', '2017-12-24 01:07:52'),
(21, 'admin', 'admin@gmail.com', '$2y$10$Qu4iolBSXzWOAmMjB58NT.7hw1ML.K6isvFxKRx8syePpojmYAn4G', 'OdhRo5sV2bytWO7VJvq7L9DbeJSCOibWfRDjkCvAWqRU2xmlYxpu9gGlZQyf', '2017-12-24 01:24:44', '2017-12-24 01:30:20'),
(22, 'coba1', 'coba1@gmail.com', 'coba123', NULL, '2017-12-24 01:26:16', '2017-12-24 01:26:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
 ADD PRIMARY KEY (`id`), ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
ADD CONSTRAINT `alamat_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
