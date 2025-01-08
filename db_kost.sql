-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 11:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'andikarz123', 3, '2024-11-19 15:24:07', 0),
(2, '::1', 'andikarz123', 3, '2024-11-19 15:24:50', 0),
(3, '::1', 'gundulriski@gmail.com', 6, '2024-11-19 15:45:17', 1),
(4, '::1', 'gundulriski@gmail.com', 6, '2024-11-19 15:45:26', 1),
(5, '::1', 'gundulriski@gmail.com', 6, '2024-11-19 18:16:45', 1),
(6, '::1', 'andikarizkip@gmail.com', 6, '2024-11-19 18:39:00', 1),
(7, '::1', '’OR 1=1;/*’', NULL, '2024-11-19 18:47:06', 0),
(8, '::1', '\'OR\'1\'=\'1', NULL, '2024-11-19 18:48:34', 0),
(9, '::1', 'dika@gmail.com', 7, '2024-11-21 05:53:48', 1),
(10, '::1', 'dika@gmail.com', NULL, '2024-11-21 05:54:40', 0),
(11, '::1', 'dika@gmail.com', 7, '2024-11-21 05:54:52', 1),
(12, '::1', 'andikarizkip@gmail.com', 6, '2024-11-24 16:48:21', 1),
(13, '::1', 'dika@gmail.com', NULL, '2024-11-24 17:03:03', 0),
(14, '::1', 'dika@gmail.com', NULL, '2024-11-24 17:03:15', 0),
(15, '::1', 'dika@gmail.com', NULL, '2024-11-24 17:03:23', 0),
(16, '::1', 'dika@gmail.com', NULL, '2024-11-24 17:03:30', 0),
(17, '::1', 'dika@gmail.com', 7, '2024-11-24 17:03:37', 1),
(18, '::1', 'andikarizkip@gmail.com', 6, '2024-11-28 11:24:15', 1),
(19, '::1', 'dika@gmail.com', 7, '2024-11-28 11:24:30', 1),
(20, '::1', 'dika@gmail.com', 7, '2024-12-01 04:15:26', 1),
(21, '::1', 'andikarizkip@gmail.com', NULL, '2024-12-01 04:21:33', 0),
(22, '::1', 'dika@gmail.com', 7, '2024-12-01 04:24:20', 1),
(23, '::1', 'dika@gmail.com', 7, '2024-12-01 04:31:50', 1),
(24, '::1', 'dika@gmail.com', 7, '2024-12-01 04:41:15', 1),
(25, '::1', 'andikarizkip@gmail.com', 6, '2024-12-01 07:04:33', 1),
(26, '::1', 'dika@gmail.com', 7, '2024-12-01 07:30:01', 1),
(27, '::1', 'dika@gmail.com', 7, '2024-12-01 15:07:36', 1),
(28, '::1', 'dika@gmail.com', 7, '2024-12-02 12:01:31', 1),
(29, '::1', 'dika@gmail.com', 7, '2024-12-02 18:03:37', 1),
(30, '::1', 'dika@gmail.com', 7, '2024-12-03 06:29:43', 1),
(31, '::1', 'dika@gmail.com', NULL, '2024-12-03 12:15:55', 0),
(32, '::1', 'dika@gmail.com', NULL, '2024-12-03 12:16:03', 0),
(33, '::1', 'dika@gmail.com', NULL, '2024-12-03 12:16:12', 0),
(34, '::1', 'dika@gmail.com', 7, '2024-12-03 12:16:51', 1),
(35, '::1', 'dika@gmail.com', NULL, '2024-12-04 05:40:26', 0),
(36, '::1', 'dika@gmail.com', 7, '2024-12-04 05:40:34', 1),
(37, '::1', 'dika@gmail.com', 7, '2024-12-04 05:50:13', 1),
(38, '::1', 'andikarizkip@gmail.com', NULL, '2024-12-04 05:51:34', 0),
(39, '::1', 'andikarizkip@gmail.com', 6, '2024-12-04 05:51:41', 1),
(40, '::1', 'dika@gmail.com', 7, '2024-12-04 05:52:28', 1),
(41, '::1', 'derielml001@gmail.com', 8, '2024-12-04 06:46:45', 1),
(42, '::1', 'dika@gmail.com', 7, '2024-12-04 07:22:54', 1),
(43, '::1', 'dika@gmail.com', 7, '2024-12-07 03:21:08', 1),
(44, '::1', 'andikarizkip@gmail.com', 6, '2024-12-07 03:43:33', 1),
(45, '::1', 'dika@gmail.com', 7, '2024-12-08 04:17:50', 1),
(46, '::1', 'dika@gmail.com', NULL, '2024-12-09 12:54:13', 0),
(47, '::1', 'dika@gmail.com', 7, '2024-12-09 12:54:19', 1),
(48, '::1', 'dika@gmail.com', 7, '2024-12-16 20:58:09', 1),
(49, '::1', 'dika@gmail.com', 7, '2024-12-17 09:52:31', 1),
(50, '::1', 'dika@gmail.com', 7, '2025-01-08 17:21:30', 1),
(51, '::1', 'dika@gmail.com', 7, '2025-01-08 17:27:00', 1),
(52, '::1', 'dika@gmail.com', 7, '2025-01-08 17:49:18', 1),
(53, '::1', 'andikarizkip@gmail.com', 6, '2025-01-08 20:01:23', 1),
(54, '::1', 'andikarizkip@gmail.com', NULL, '2025-01-08 21:39:20', 0),
(55, '::1', 'andikarizkip@gmail.com', 6, '2025-01-08 21:39:26', 1),
(56, '::1', 'andikarizkip@gmail.com', 6, '2025-01-08 21:46:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-kost', 'Manage Data Kost'),
(2, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kost_list`
--

CREATE TABLE `kost_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_owners` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `type` enum('PUTRA','PUTRI','CAMPUR') DEFAULT NULL,
  `price` int(25) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'kost.png',
  `image_detail` varchar(255) DEFAULT 'kost_detail.png',
  `capacity` int(25) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kost_list`
--

INSERT INTO `kost_list` (`id`, `id_owners`, `name`, `address`, `type`, `price`, `image`, `image_detail`, `capacity`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kost AY', 'Purwokerto Utara, Banyumas', 'PUTRI', 1500000, NULL, 'kost_detail.png', 5, 'AC,Kasur,Meja,Dispenser,TV,Lemari Baju', 'kost-ay', NULL, '2025-01-08 22:49:11'),
(2, 1, 'Kost Pintu Biruku St', 'Purwokerto Timur, Banyumas', 'PUTRA', 1400000, 'Laki1.png', 'kost_detail.png', 6, 'AC,Kasur,Meja,Ventilasi,Lemari Baju', 'kost-pintu-biruku-st', NULL, NULL),
(3, 1, 'Kost Griya Kurnia', 'Purwokerto Timur, Banyumas', 'CAMPUR', 1400000, 'Campur2.png', 'kost_detail.png', 7, 'AC,Kasur,Meja,Lemari Baju,TV', 'kost-griya-kurnia', NULL, NULL),
(4, 1, 'Kost Padma 28 ', 'Purwokerto Selatan, Banyumas', 'CAMPUR', 1600000, 'Campur1.png', 'kost_detail.png', 10, 'AC,Kasur,Meja,Dispenser,TV', 'kost-padma-28 ', NULL, NULL),
(5, 1, 'Kost Yellow Tipe C', 'Purwokerto Timur, Banyumas', 'PUTRA', 1000000, 'Laki2.png', 'kost_detail.png', 6, 'AC,Kasur,Meja,Lemari Baju,TV', 'kost-yellow-tipe-c', NULL, NULL),
(6, 1, 'Kost Putra Ibu Endang', 'Purwokerto Timur', 'PUTRA', 800000, 'Laki3.png', 'kost_detail.png', 6, 'Wifi,Kasur,Lemari,Meja,Kursi', 'kost-putra-ibu-endang', NULL, NULL),
(7, 1, 'Kos Baru Unsuoed', 'Purwokerto Utara', 'PUTRI', 800000, 'Putri2.png', 'kost_detail.png', 9, 'AC,Kasur,Meja,Lemari Baju,kursi', 'kos-baru-unsuoed', NULL, NULL),
(8, 1, 'Kost Unsuoed Purwokerto', 'Purwokerto Utara', 'PUTRI', 1300000, 'Putri3.png', 'kost_detail.png', 7, 'AC,Kasur,Meja,Lemari Baju,kursi', 'kost-unsuoed-purwokerto', NULL, NULL),
(9, 1, 'Kost Pria di Purwokerto Jateng', 'Jln Kombas Bambang', 'PUTRA', 800000, 'Laki4.png', 'kost_detail.png', 7, 'Perabot, Free WiFi, TV, Kulkas, Ruang Tamu, Televisi, Ruang Makan, Dapur, Air Minum, Parkir Motor, Parkir Mobil', 'kost-pria-di-purwokerto-jateng', NULL, NULL),
(10, 1, 'Kos Lanang', 'Perumahan Saphire Madina', 'PUTRA', 1250000, 'Laki5.png', 'kost_detail.png', 10, 'Tempat tidur, Lemari, Meja belajar, Ac, Kaca, Kamar mandi dalam, Free Wifi, TV, Kulkas, Dispenser, Kipas angin, Ruang terbuka, Ruang tamu', 'kos-lanang', NULL, NULL),
(11, 1, 'Kos Zamrut Karangwangkal', 'Kembaran,Tambaksari Kidul', 'CAMPUR', 700000, 'Campur3.png', 'kost_detail.png', 5, 'ASpring Bed, Free WiFi, Kamar Mandi Dalam, Ruang Makan, Dapur, Air Minum, Keamanan,dekat Kampus, Rumah Sakit, Rumah Makan', 'kos-zamrut-karangwangkal', NULL, NULL),
(12, 1, 'D-House Purwokerto', 'Kelurahan Bancar Kembar', 'CAMPUR', 1200000, 'Campur4.png', 'kost_detail.png', 10, 'Kamar mandi dalam, Shower, Air panas, Spring bed, Meja, Kursi, Lemari pakaian, Internet, Fasilitas Umum: Dapur umum, Wi-Fi, Tempat menjemur, Ruang tamu, Tempat parkir motor, Tempat parkir mobil, Penjaga Kost', 'd-House-purwokerto ', NULL, NULL),
(13, 1, 'KKamar kost UMP Purwokerto', 'Kembaran, Purwokerto Timur', 'PUTRI', 750000, 'Putri4.png', 'kost_detail.png', 12, 'Spring Bed, Perabot, Free WiFi, Kulkas, Kamar Mandi Dalam, Dapur, Air Minum, Keamanan, Parkir Motor', 'kamar-kost-ump-purwokerto', NULL, NULL),
(14, 1, 'Kost Teratai Dukuhwaluh UMP Purwokerto', 'Kembaran', 'PUTRI', 700000, 'Putri5.png', 'kost_detail.png', 5, 'Spring Bed, Perabot, Free WiFi, Kulkas, Kamar Mandi Dalam, Dapur, Air Minum, Keamanan, Parkir Motor', 'kost-teratai-dukuhwaluh-ump-purwokerto', NULL, NULL),
(15, 1, 'Kos Pria Berkoh Purwokerto AC dan Biasa', 'Jalan Puteran Berkoh', 'PUTRA', 750000, 'Laki6.png', 'kost_detail.png', 10, 'Wifi kecepatan 200 Mbps (Biznet), Spring Bed dan bantal, Shower dan closet jongkok, Kamar mandi dalam, Kamar baru dicat, Parkir Mobil/Motor, Listrik,CCTV.', 'kos-pria-berkoh-purwokerto-ac-dan-biasa', NULL, NULL),
(16, 1, 'Kost Putri Aries', 'Jl. HOS Notosuwiryo No. 3', 'PUTRI', 650000, 'Putri6.png', 'kost_detail.png', 7, 'Kamar mandi dalam, Exhaust, Spring Bed, Meja, Kursi, Lemari, Gorden, Mushola, Dapur, Balkon', 'kost-putri-aries', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kost_orders`
--

CREATE TABLE `kost_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_kost` int(11) UNSIGNED NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `time_period` int(5) DEFAULT NULL,
  `total_price` int(25) DEFAULT NULL,
  `status` enum('SUCCESS','FAILED','PENDING') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kost_orders`
--

INSERT INTO `kost_orders` (`id`, `id_user`, `id_kost`, `order_date`, `start_date`, `end_date`, `time_period`, `total_price`, `status`) VALUES
(1, 7, 3, '2024-12-02 14:56:12', '2024-12-11', '2025-01-11', 1, 1400000, 'SUCCESS'),
(2, 7, 10, '2024-12-08 04:38:04', '2024-12-11', '2025-03-11', 3, 3750000, 'SUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `kost_owners`
--

CREATE TABLE `kost_owners` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kost_owners`
--

INSERT INTO `kost_owners` (`id`, `name`, `phone_number`, `no_rek`) VALUES
(1, 'Andika Rizki', '089630417804', '1800013098944');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1732019505, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_order` int(11) UNSIGNED NOT NULL,
  `method` varchar(50) DEFAULT NULL,
  `amount` int(25) DEFAULT NULL,
  `payment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_order`, `method`, `amount`, `payment_date`) VALUES
(1, 1, NULL, 1400000, '2024-12-02'),
(2, 1, 'bca', 1400000, '2024-12-02'),
(3, 1, 'bri', 1400000, '2024-12-02'),
(4, 2, 'bni', 3750000, '2024-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `id_user`, `description`, `created_at`) VALUES
(1, 7, 'dwdwdw', '2025-01-08 19:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `gender` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'user.png',
  `id_image` varchar(255) NOT NULL DEFAULT 'ktp.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `nik`, `phone_number`, `gender`, `user_image`, `id_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'andikarizkip@gmail.com', 'andikarz', 'Andika Rizki', NULL, NULL, 'Laki-laki', 'user.png', 'ktp.png', '$2y$10$kr3oOaU0Dmjtg91/0cdTuurVXTKU7u5GSASFCYeDwRnPnQNiAG8d6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-19 15:44:50', '2024-11-19 15:44:50', NULL),
(7, 'dika@gmail.com', 'dika21', 'Andika Rizki Putra Pamungkas', '3302240512040001', '089630417804', 'Laki-laki', '', '', '$2y$10$cq9GLAziw/uE4XxLeEAdquaGv/eqJhSbAt1TW.YLMM1slFdy4UBcG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-21 05:53:29', '2024-11-21 05:53:29', NULL),
(8, 'derielml001@gmail.com', 'aaaaa', NULL, NULL, NULL, NULL, 'user.png', 'ktp.png', '$2y$10$ODe61onBCIyR37rfdTCyJecd3mJDFJeSmEBiDaAfAU2Pqh6M7b4pe', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-12-04 06:46:35', '2024-12-04 06:46:35', NULL),
(9, 'alvianggraeni34@gmail.com', 'AlviAnggraeni', NULL, NULL, NULL, NULL, 'user.png', 'ktp.png', '$2y$10$y6uvfNtTpPhnxOiJlTxUB.eFAzqZECZz1NmLihwPvJSzWhDKxi0H6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2025-01-08 17:28:41', '2025-01-08 17:28:41', NULL),
(10, 'kostkita@gmail.com', 'KostKita', NULL, NULL, NULL, NULL, 'user.png', 'ktp.png', '$2y$10$zdjVYwuuJ0aGTjSAAWYOceHhn/Vhzv10/D3Ifuxk0c9L4f.9IEWs6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2025-01-08 17:29:00', '2025-01-08 17:29:00', NULL),
(11, 'zahrasalsa44@gmail.com', 'Zahra', NULL, NULL, NULL, NULL, 'user.png', 'ktp.png', '$2y$10$owdkt4JclZVur.CZyJU/J.CBrjwuzTWxtWSc8TKF5OFz1GSUTcZxK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2025-01-08 17:29:19', '2025-01-08 17:29:19', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `kost_list`
--
ALTER TABLE `kost_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kost_list_kost_owners` (`id_owners`);

--
-- Indexes for table `kost_orders`
--
ALTER TABLE `kost_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_users` (`id_user`),
  ADD KEY `FK_orders_kost_list` (`id_kost`);

--
-- Indexes for table `kost_owners`
--
ALTER TABLE `kost_owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_payments_kost_orders` (`id_order`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_reports_users` (`id_user`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kost_list`
--
ALTER TABLE `kost_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kost_orders`
--
ALTER TABLE `kost_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kost_owners`
--
ALTER TABLE `kost_owners`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kost_list`
--
ALTER TABLE `kost_list`
  ADD CONSTRAINT `FK_kost_list_kost_owners` FOREIGN KEY (`id_owners`) REFERENCES `kost_owners` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kost_orders`
--
ALTER TABLE `kost_orders`
  ADD CONSTRAINT `FK_orders_kost_list` FOREIGN KEY (`id_kost`) REFERENCES `kost_list` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_orders_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `FK_payments_kost_orders` FOREIGN KEY (`id_order`) REFERENCES `kost_orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_reports_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
