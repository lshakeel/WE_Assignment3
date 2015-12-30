-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2015 at 05:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assign`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE IF NOT EXISTS `codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `codes_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, '<?php echo ''he', '0000-00-00 00:00:00', '2015-12-24 09:54:57'),
(2, 1, '<?php echo ''hello''', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, '<?php echo ''hello''', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, '<?php echo ''hello''', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, '<?php echo ''hello''', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 1, 'kjh', '2015-12-24 09:54:39', '2015-12-24 09:54:39'),
(7, 1, 'kxjcvkv', '2015-12-24 09:57:18', '2015-12-24 09:57:18'),
(8, 1, 'jksdhcjskdcnjksdcn', '2015-12-24 09:58:42', '2015-12-24 09:58:42'),
(9, 1, 'kjdvnjdkfncvjkdfvn', '2015-12-24 09:59:17', '2015-12-24 09:59:17'),
(15, 1, 'sdcbhjdsbchjd', '2015-12-24 10:07:59', '2015-12-24 10:07:59'),
(16, 1, 'sdcbhjdsbchjd', '2015-12-24 10:08:27', '2015-12-24 10:08:27'),
(17, 1, '<?php\r\n\r\necho "hello";\r\n?>', '2015-12-24 10:29:37', '2015-12-24 10:29:37'),
(18, 1, '<?php\r\n\r\necho "hello";\r\n?>', '2015-12-24 10:29:48', '2015-12-24 10:29:48');

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
('2015_12_24_142937_create_users_and_codes_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@assign.com', '$2y$10$sOyNnVfYrYdCeZR/VptaruP/BSVKFFfb7WrUaPgbTJ9zzYkBEHe0e', 'coder', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user2', 'user2@assign.com', '$2y$10$C8IniOSK8ucoH3LN4HT7Ue7.patTOnvvXo3JJ6WRtKUC4NmT.GRqO', 'coder', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user3', 'user3@assign.com', '$2y$10$Ake6pVpy9gBt40Tv3vLnWel9AjwTLoVwT9yoWf1UKFYPtK4D.X5tG', 'viewer', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `codes`
--
ALTER TABLE `codes`
  ADD CONSTRAINT `codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
