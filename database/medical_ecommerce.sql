-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2025 at 03:20 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=551 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(531, 'Disposables', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(532, 'Laboratory Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(533, 'Disposables', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(534, 'Laboratory Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(535, 'Diagnostic Devices', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(536, 'Disposables', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(537, 'Surgical Instruments', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(538, 'Orthopedic Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(539, 'Surgical Instruments', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(540, 'Personal Protective Equipment', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(541, 'First Aid Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(542, 'First Aid Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(543, 'Hospital Furniture', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(544, 'Laboratory Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(545, 'Orthopedic Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(546, 'Disposables', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(547, 'Hospital Furniture', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(548, 'Orthopedic Supplies', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(549, 'Surgical Instruments', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(550, 'Pharmaceuticals', '2025-05-24 11:50:12', '2025-05-24 11:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_22_101957_create_categories_table', 1),
(6, '2025_05_22_102521_create_products_table', 1),
(7, '2025_05_22_105838_create_orders_table', 1),
(8, '2025_05_22_110304_create_order_items_table', 1),
(9, '2025_05_22_113017_create_product_logs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `phone_number`, `delivery_address`, `created_at`, `updated_at`) VALUES
(3, 'Haidy Elhamady', '01096658190', 'Hay El-Gamaa', '2025-05-24 11:50:44', '2025-05-24 11:50:44'),
(4, 'Haidyyyy', '01096658122', 'Hay El-Gamaa', '2025-05-24 11:59:38', '2025-05-24 11:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`),
  KEY `order_items_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(3, 3, 227, 2, 443.03, '2025-05-24 11:50:44', '2025-05-24 11:50:44'),
(4, 3, 226, 2, 61.21, '2025-05-24 11:50:44', '2025-05-24 11:50:44'),
(5, 4, 226, 1, 61.21, '2025-05-24 11:59:38', '2025-05-24 11:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(226, 'Disposable Face Masks', NULL, 61.21, NULL, 542, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(227, 'Blood Pressure Monitor', NULL, 443.03, NULL, 543, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(228, 'IV Infusion Set', NULL, 446.68, NULL, 544, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(229, 'Scalpel Blades', NULL, 288.61, NULL, 545, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(230, 'Thermometer (Digital)', NULL, 223.09, NULL, 546, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(231, 'Microscope', NULL, 84.17, NULL, 547, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(232, 'Pain Relief Tablets', NULL, 490.67, NULL, 548, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(233, 'Microscope', NULL, 289.79, NULL, 549, '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(236, 'Rich', 'hhhh', 44.00, 'products/N35VFD8zLG1xC1sgv5VzfOBoPCLPjyIMASprwgPw.png', 538, '2025-05-24 12:03:38', '2025-05-24 12:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `product_logs`
--

DROP TABLE IF EXISTS `product_logs`;
CREATE TABLE IF NOT EXISTS `product_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `changed_by` bigint UNSIGNED NOT NULL,
  `changes` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_logs_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=250 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_logs`
--

INSERT INTO `product_logs` (`id`, `product_id`, `action`, `changed_by`, `changes`, `created_at`, `updated_at`) VALUES
(236, 226, 'created', 1, '{\"id\": 226, \"name\": \"Disposable Face Masks\", \"price\": 61.21, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 542}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(237, 227, 'created', 1, '{\"id\": 227, \"name\": \"Blood Pressure Monitor\", \"price\": 443.03, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 543}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(238, 228, 'created', 1, '{\"id\": 228, \"name\": \"IV Infusion Set\", \"price\": 446.68, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 544}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(239, 229, 'created', 1, '{\"id\": 229, \"name\": \"Scalpel Blades\", \"price\": 288.61, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 545}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(240, 230, 'created', 1, '{\"id\": 230, \"name\": \"Thermometer (Digital)\", \"price\": 223.09, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 546}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(241, 231, 'created', 1, '{\"id\": 231, \"name\": \"Microscope\", \"price\": 84.17, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 547}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(242, 232, 'created', 1, '{\"id\": 232, \"name\": \"Pain Relief Tablets\", \"price\": 490.67, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 548}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(243, 233, 'created', 1, '{\"id\": 233, \"name\": \"Microscope\", \"price\": 289.79, \"created_at\": \"2025-05-24T14:50:12.000000Z\", \"updated_at\": \"2025-05-24T14:50:12.000000Z\", \"category_id\": 549}', '2025-05-24 11:50:12', '2025-05-24 11:50:12'),
(246, 236, 'created', 3, '{\"id\": 236, \"name\": \"Rich\", \"image\": \"products/N35VFD8zLG1xC1sgv5VzfOBoPCLPjyIMASprwgPw.png\", \"price\": \"44\", \"created_at\": \"2025-05-24T15:03:38.000000Z\", \"updated_at\": \"2025-05-24T15:03:38.000000Z\", \"category_id\": \"538\", \"description\": \"hhhh\"}', '2025-05-24 12:03:38', '2025-05-24 12:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@example.com', NULL, '$2y$12$PniHy.txmnqF760fqhu7G.htkSsl73wGjX4gYO7YNu1lD2GbjfBrO', NULL, '2025-05-24 10:44:56', '2025-05-24 10:44:56');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_logs`
--
ALTER TABLE `product_logs`
  ADD CONSTRAINT `product_logs_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
