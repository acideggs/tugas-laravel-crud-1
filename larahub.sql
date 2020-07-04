-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2020 at 08:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larahub`
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
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diperbarui` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jawaban_terpilih` tinyint(1) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `pertanyaan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `isi`, `tgl_dibuat`, `tgl_diperbarui`, `jawaban_terpilih`, `likes`, `dislikes`, `pertanyaan_id`) VALUES
(2, 'The Laravel docs maybe? https://laravel.com/docs/7.x/routing\r\n\r\nit says all of that :)', '2020-07-04 13:17:30', '2020-07-04 06:17:30', 0, 0, 0, 7),
(3, 'Also the controller chapter has resource controllers.', '2020-07-04 13:17:44', '2020-07-04 06:17:44', 0, 0, 0, 7),
(4, 'Did you run composer update on the remote server?', '2020-07-04 13:18:17', '2020-07-04 06:18:17', 0, 0, 0, 5),
(5, 'You need the php OpenSSL extension installed on the server, which is used for encryption.', '2020-07-04 13:18:27', '2020-07-04 06:18:27', 0, 0, 0, 5),
(6, '@m165437 i ran composer update, but nothing changed. @Cronix OpenSSL is installed on the server. It still outputs that error', '2020-07-04 13:18:36', '2020-07-04 06:18:36', 0, 0, 0, 5),
(7, 'kaysiz, were you able to resolve this issue? I have the same problem and i DO have the openssl installed and enabled.\r\n\r\necho \"<?php openssl_cipher_iv_length(\'whatever\');\" | php\r\n\r\nworks as expected. Laravel still fails though', '2020-07-04 13:18:48', '2020-07-04 06:18:48', 0, 0, 0, 5),
(8, 'Hi. I have the same problem.Running on Wamp server with PHP 7.2.3 and apache 2.4.17, OpenSSL active.\"composer install\" and \"composer update\" executed, but no way.', '2020-07-04 13:19:01', '2020-07-04 06:19:01', 0, 0, 0, 5),
(9, 'According to the packagist page it does support Laravel 6 and 7.\r\n\r\nhttps://packagist.org/packages/harrygulliford/laravel-firebird\r\n\r\nI suggest you start here\r\n\r\nhttps://github.com/harrygulliford/laravel-firebird\r\n\r\nAnd if that doesn\'t help you show us some code and the error messages you have.', '2020-07-04 13:19:36', '2020-07-04 06:19:36', 0, 0, 0, 6),
(10, 'Thank you a lot. But I\'ve got problem while used that package. I\'ve used for migration on firebird 3.0.4. Okay, let me try again. Thank you a lot', '2020-07-04 13:19:43', '2020-07-04 06:19:43', 0, 0, 0, 6),
(11, 'It seems that firebird does not allow boolean columns in the database or at least not with a default value. I suggest you change these two lines\r\n\r\n$table->boolean(\'all_branch\')->default(false)->comment(\'access all branch\');\r\n$table->boolean(\'is_active\')->default(true);\r\nTo\r\n\r\n$table->char(\'all_branch\', 1)->default(\'0\')->comment(\'access all branch\');\r\n$table->char(\'is_active\', 1)->default(\'1\');', '2020-07-04 13:22:16', '2020-07-04 06:22:16', 0, 0, 0, 6);

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
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_07_03_032120_create_pertanyaan_table', 2),
(15, '2020_07_03_032137_create_jawaban_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_dibuat` datetime NOT NULL,
  `tgl_diperbarui` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `isi`, `tgl_dibuat`, `tgl_diperbarui`, `likes`, `dislikes`) VALUES
(4, 'Call to undefined function Illuminate\\Encryption\\openssl_cipher_iv_length()', 'I created a AWS EC2 instance with wondows2019. Then installed Apache in PHP there. And then upload a laravel app into htdocs folder. and then getting this error. Please help me solve this problem.\r\n\r\nCall to undefined function Illuminate\\Encryption\\openssl_cipher_iv_length()\r\n\r\necho \"<?php openssl_cipher_iv_length(\'whatever\');\" I write this code and it return nothing. Just a blank screen. How could I check open ssl enable and installed or not?', '2020-07-04 13:14:43', '2020-07-04 06:14:43', 0, 0),
(5, 'Call to undefined function Illuminate\\Encryption\\openssl_cipher_iv_length()', 'I am getting this error after i move my project from localhost to a remote server. Yeah of course i\'ve try anything possible', '2020-07-04 13:15:02', '2020-07-04 06:21:44', 0, 0),
(6, 'laravel-firebird package', 'Dear Sir, I have installed Laravel 6.x and already installed package harrygulliford/laravel-firebird. I have some problem and questions :\r\n\r\nDid anyone had tried this package ?\r\nMay I know Firebirdsql supported for laravel 6 | 7 ? thank you a lot\r\nregards, @qlixes', '2020-07-04 13:15:27', '2020-07-04 06:15:27', 0, 0),
(7, 'Website', 'Does anyone know where the other laravel pages are that had the code that had showed how the code worked or whatever that said did. I took a bit of a break from coding because of personal reasons and now that site seems to be gone and I cant remember what the name of it was. Thanks in advance.\r\n\r\nFor example: under routes you\'d find\r\n\r\nRoute::resource(name, controller)....', '2020-07-04 13:16:13', '2020-07-04 06:16:13', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_pertanyaan_id_foreign` (`pertanyaan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_pertanyaan_id_foreign` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
