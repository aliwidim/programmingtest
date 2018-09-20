-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for programmingtest
CREATE DATABASE IF NOT EXISTS `programmingtest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `programmingtest`;


-- Dumping structure for table programmingtest.bukus
CREATE TABLE IF NOT EXISTS `bukus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_published` date NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `type_of_book` enum('Novel','Documentation','Other') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table programmingtest.bukus: ~6 rows (approximately)
DELETE FROM `bukus`;
/*!40000 ALTER TABLE `bukus` DISABLE KEYS */;
INSERT INTO `bukus` (`id`, `title`, `author`, `date_published`, `number_of_pages`, `type_of_book`, `created_at`, `updated_at`) VALUES
	(4, 'sherlock holmes - perkumpulan ', 'sir arthur conan doyle', '2018-09-19', 200, 'Novel', '2018-09-19 15:55:59', '2018-09-19 15:55:59'),
	(6, 'laskar pelangi - chapter 1', 'andrea hirata', '2018-09-20', 140, 'Novel', '2018-09-20 12:16:31', '2018-09-20 12:44:39'),
	(7, 'sherlock holmes - boneka menar', 'sir arthur conan doyle', '2018-09-04', 320, 'Novel', '2018-09-20 12:16:56', '2018-09-20 12:16:56'),
	(8, 'detective conan', 'aoyama gosho', '2018-09-14', 230, 'Other', '2018-09-20 12:17:22', '2018-09-20 12:17:22'),
	(9, 'detective poirot', 'agatha christie', '2018-09-18', 210, 'Novel', '2018-09-20 12:41:49', '2018-09-20 12:41:49'),
	(10, 'laravel programming', 'taylor otwell', '2018-09-20', 250, 'Other', '2018-09-20 12:58:02', '2018-09-20 12:58:02');
/*!40000 ALTER TABLE `bukus` ENABLE KEYS */;


-- Dumping structure for table programmingtest.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table programmingtest.migrations: ~3 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2018_09_18_093734_create_bukus_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table programmingtest.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table programmingtest.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table programmingtest.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table programmingtest.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
