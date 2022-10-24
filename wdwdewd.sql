-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for authenticate
CREATE DATABASE IF NOT EXISTS `authenticate` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `authenticate`;

-- Dumping structure for table authenticate.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table authenticate.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.migrations: ~6 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_08_16_080426_laratrust_setup_tables', 1),
	(6, '2022_08_16_182506_create_products_table', 1);

-- Dumping structure for table authenticate.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.password_resets: ~0 rows (approximately)

-- Dumping structure for table authenticate.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.permissions: ~14 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'users-create', 'Create Users', 'Create Users', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(2, 'users-read', 'Read Users', 'Read Users', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(3, 'users-update', 'Update Users', 'Update Users', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2022-08-16 17:54:04', '2022-08-16 17:54:04');

-- Dumping structure for table authenticate.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.permission_role: ~22 rows (approximately)
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(1, 2),
	(2, 1),
	(2, 2),
	(3, 1),
	(3, 2),
	(4, 1),
	(4, 2),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(9, 2),
	(9, 3),
	(10, 1),
	(10, 2),
	(10, 3),
	(11, 4),
	(12, 4),
	(13, 4),
	(14, 4);

-- Dumping structure for table authenticate.permission_user
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.permission_user: ~0 rows (approximately)

-- Dumping structure for table authenticate.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table authenticate.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.products: ~11 rows (approximately)
INSERT INTO `products` (`id`, `image`, `name`, `details`, `created_at`, `updated_at`) VALUES
	(50, 'dc_motor_775.jpg', 'DC 775 motor', 'DC 12V 80W 13000rpm 775 Motor (High Speed Motor)', '2022-08-16 23:20:18', '2022-08-16 23:20:18'),
	(51, 'Nn3xcWj1yhp6N-xxlarge.jpg', 'Double Pole Power Contactor', 'L&T MNX-70-2P 70A Double Pole Power Contactor, CS94062', '2022-08-16 23:22:37', '2022-08-16 23:22:37'),
	(52, 'dg1022_new.jpg', 'Channel Function/Arbitrary Waveform Generator', 'DG1022U/A 25MHz 2 Channel Function/Arbitrary Waveform Generator', '2022-08-16 23:25:27', '2022-08-16 23:25:27'),
	(53, 'mv_lamb.jpg', 'Lamp Bulb', 'Microwave Oven Lamp Bulb T170 20W 230V', '2022-08-16 23:27:08', '2022-08-16 23:27:08'),
	(54, 'H6d0998cf9d3c4546b9a2d7139179e950b.jpg_960x960.png', 'Alternator Dynamo Generator', 'Auto Car Parts Electric Alternator Dynamo Generator for Audi BPJ 06D 903 016 D', '2022-08-16 23:34:30', '2022-08-16 23:34:30'),
	(55, 'Hf409f69812064e71aa3c2732a3f2e187Z.png', 'dynamo generating electricity', 'LB-D1003 PC200-5 S6D95 24V 30A 600-821-6120 0-33000-5860', '2022-08-16 23:35:08', '2022-08-16 23:35:08'),
	(56, 'Hbdc49d7c90db4f54a7fa35a7ab0a99efG.jpg', 'Dynamo Diesel Generator', '220v 12kw 15kw 20kw Single Phase Silent Genset For Home With Isuzu Motor', '2022-08-16 23:35:57', '2022-08-16 23:35:57'),
	(57, '1.jpg', 'Power Cable', 'Power Lock Extension Cord Power Lock - 5 M', '2022-08-16 23:37:16', '2022-08-16 23:37:16'),
	(58, '1 (1).jpg', 'Filament Lamp 4 Watt', 'Filament lamp 4 watt for decoration warm light', '2022-08-16 23:39:38', '2022-08-16 23:39:38'),
	(59, 's-l1600.jpg', 'Tesla Coil', 'Tesla Coil Plasma Speaker Music Transmission Sound + Acrylic Shell Case 3.5Cable', '2022-08-16 23:41:06', '2022-08-16 23:41:06'),
	(60, '51LHlJ5mcPL._AC_SL1001_.jpg', 'Step-up Power Module', 'DC 3v-6v To 400kV 400000V Boost Step-up Power Module High-voltage Generator', '2022-08-16 23:42:45', '2022-08-16 23:42:45');

-- Dumping structure for table authenticate.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.roles: ~4 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(2, 'administrator', 'Administrator', 'Administrator', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(3, 'user', 'User', 'User', '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(4, 'role_name', 'Role Name', 'Role Name', '2022-08-16 17:54:04', '2022-08-16 17:54:04');

-- Dumping structure for table authenticate.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.role_user: ~7 rows (approximately)
INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
	(1, 1, 'App\\Models\\User'),
	(2, 2, 'App\\Models\\User'),
	(3, 3, 'App\\Models\\User'),
	(4, 4, 'App\\Models\\User'),
	(1, 6, 'App\\Models\\User'),
	(3, 7, 'App\\Models\\User'),
	(3, 9, 'App\\Models\\User');

-- Dumping structure for table authenticate.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table authenticate.users: ~7 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Superadministrator', 'superadministrator@app.com', NULL, '$2y$10$Oczmj6GEMsDmy5h4/M5FTuDLsRWT9nI3QPSDNFT/xMf9WkpIrIZiC', NULL, '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$W1Ohyfwutu/Q8XTvdv.b1.c0YySTZ888Ow8xCmOAhTN61dgOkqkM2', NULL, '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(3, 'User', 'user@app.com', NULL, '$2y$10$f47BAXqxNXv8.fH6z1OES.V8TWNyPjpQ.CPe5LZ7VS0/c0Ta8UMMK', NULL, '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(4, 'Role Name', 'role_name@app.com', NULL, '$2y$10$kPcrYK9GKEj2U7hQCLQiV.XHui6JAymtI6fVemuI8CWg8JWbNzKCa', NULL, '2022-08-16 17:54:04', '2022-08-16 17:54:04'),
	(6, 'Ahmed Maher', 'ahmed@gmail.com', NULL, '$2y$10$G09NMIHnM7BhvO9Vu6mEjOa09V7UBN0.5JvXyZytO8xeMGlf43FJm', NULL, '2022-08-16 21:55:37', '2022-08-16 21:43:50'),
	(7, 'ibrahim moustafa', 'hika@gmail.com', NULL, '$2y$10$gYkhB41aS5RMIJ6kQD59NO9rVhZt9od/ftUBDBBH7NOiXpxq8OT12', NULL, '2022-08-17 01:50:35', '2022-08-17 00:05:42'),
	(9, 'world', 'world@gmail.com', NULL, '$2y$10$RJ/ET1iURg5otgL48GXUVeh58BoX5dLJScgLBQK/vKRVi9P3SKS6i', NULL, '2022-08-17 00:14:00', '2022-08-17 00:14:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
