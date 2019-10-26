-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 08:54 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `99couponshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `area_name`, `created_at`, `updated_at`) VALUES
(3, 'Bangladesh', '2019-10-07 08:40:30', '2019-10-07 17:19:07'),
(4, 'Jamalpur- Islampur', '2019-10-07 11:42:41', '2019-10-07 17:18:43'),
(7, 'Cox\'s Bazar', '2019-10-07 17:17:04', '2019-10-07 17:17:04'),
(9, 'Dhanmondi', '2019-10-25 21:57:19', '2019-10-25 21:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(8, 'Cloth', '2019-10-12 09:45:04', '2019-10-14 13:27:42'),
(9, 'Perfumence', '2019-10-14 13:27:53', '2019-10-14 13:27:53'),
(13, 'Food', '2019-10-25 22:05:36', '2019-10-25 22:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_mail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_web` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_msg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `contact_name`, `contact_mail`, `contact_web`, `contact_msg`, `created_at`, `updated_at`) VALUES
(6, 'Mahe Karim', 'MaheKarim@gmail.com', 'myofferd.com', 'Teset MSG', '2019-10-26 01:38:39', '2019-10-26 01:38:39'),
(7, 'Fahim', 'Fahim@gmail.co', 'Fahim.com', 'ehfuvvuhvev uh', '2019-10-26 01:46:53', '2019-10-26 01:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `dokans`
--

CREATE TABLE `dokans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dokan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokan_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokan_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokans`
--

INSERT INTO `dokans` (`id`, `dokan_name`, `dokan_description`, `dokan_image`, `user_id`, `created_at`, `updated_at`) VALUES
(25, 'Hmm', 'HmmHmmHmmHmmHmmHmm', 'dokan_images/k7128y24RoTk6W4zKkDz2WUpcJocVpF7rTSnRnNu.jpeg', 2, '2019-10-26 05:27:31', '2019-10-26 05:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `logo_changes`
--

CREATE TABLE `logo_changes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo_changes`
--

INSERT INTO `logo_changes` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(6, 'logo/57aXs2OpO3cza9q5TOptPPSNOmJ19s1etfd7r1MK.png', '2019-10-17 04:59:52', '2019-10-17 04:59:52');

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
(7, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_10_04_175323_create_areas_table', 1),
(10, '2019_10_04_175451_create_categories_table', 1),
(12, '2019_10_12_133255_create_logo_changes_table', 3),
(18, '2019_10_14_061647_create_news_laters_table', 4),
(24, '2019_10_12_092943_create_dokans_table', 7),
(25, '2019_10_17_112802_create_contact_us_table', 8),
(28, '2019_09_28_145044_create_user_roles_table', 10),
(29, '2019_10_14_061424_create_products_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `news_laters`
--

CREATE TABLE `news_laters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_laters`
--

INSERT INTO `news_laters` (`id`, `mail`, `created_at`, `updated_at`) VALUES
(1, 'sazzad@mail.com', '2019-10-25 22:03:29', '2019-10-25 22:03:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_prize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_disscount_prize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_disscount_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_coupon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability_date` date DEFAULT NULL,
  `category_name_id` int(11) DEFAULT NULL,
  `dokan_name_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `area_name_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `product_prize`, `product_image`, `product_disscount_prize`, `product_disscount_rate`, `product_coupon`, `availability_date`, `category_name_id`, `dokan_name_id`, `user_id`, `area_name_id`, `created_at`, `updated_at`) VALUES
(1, 'Burger +  Coke (125 ML)', '<p><i>Lorem ipsum</i>, or <i>lipsum</i> as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book.</p>', '134', 'product_images/5ZcZTqQmRu9R8MbpBwyeEbmbelKHE5f40oZPBPzI.png', '100', '12', 'EID_DAY', '2019-10-31', 9, 25, 2, 9, '2019-10-26 05:55:29', '2019-10-26 05:55:29');

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
  `user_role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$W4UB1diFabq3t2gLHQHf.emqsNXpLvYIbNP2TkOBntVXP2O0sfFga', 1, NULL, '2019-10-07 08:35:34', '2019-10-08 08:51:57'),
(2, 'Agent', 'Agent@agent.com', NULL, '$2y$10$y0ETdR9T7AYGsFg1CcQflOrCQPTxVO7XGeaDaIAhCKQJMHkOcV45q', 2, NULL, '2019-10-07 15:53:08', '2019-10-12 03:35:32'),
(3, 'Agent 1', 'Agent1@agent.com', NULL, '$2y$10$luW6jHGx/AmYntmiYP0EnOdxT/3igI4dPTx9vbPGlDHbmPQPjrLii', 2, NULL, '2019-10-12 06:24:23', '2019-10-12 06:24:23'),
(4, 'Teresa Quigley', 'fay.maurine@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Ok34mJZLoq', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(5, 'Prof. Sister Graham', 'vherzog@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'A9LXSjmzUU', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(6, 'Candida Littel', 'meta.bauch@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Mruh9biCSU', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(7, 'Johnathon Kessler', 'hadley37@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'XNewSXYzqt', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(8, 'Timmy Gleason', 'hessel.ellsworth@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'lQuRhSiOnb', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(9, 'Samara Deckow DDS', 'maybelle.ziemann@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Km40v9lXUX', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(10, 'Cayla Marvin', 'ddonnelly@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2FveRyDLyR', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(11, 'Art Boyle', 'hagenes.damian@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'nBUCPM5ynS', '2019-10-15 08:13:02', '2019-10-15 08:13:02'),
(12, 'Conner Hegmann', 'kihn.kailee@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'CmWSsUlOPF', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(13, 'Coy Mayert', 'verlie.jenkins@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'gwjbjLbdxw', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(14, 'Miss Gina Weissnat MD', 'juliana.reichel@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'iVeURhIs6I', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(15, 'Emmitt Jacobson DDS', 'roslyn.bayer@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'jhdt01hbyS', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(16, 'Mrs. Marielle Gleason', 'ewilderman@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'vymlXKX4PA', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(17, 'Daisy Littel', 'ottilie89@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'mJRhn1KQIX', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(18, 'Jailyn Satterfield III', 'morris52@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'XXBjsJp6Rv', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(19, 'Chet McDermott Jr.', 'katelin.krajcik@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '4vHI13AMW0', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(20, 'Prof. Franco Jast', 'prudence.rice@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'vCb7uEZuGW', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(21, 'Shanelle Dicki', 'hector67@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '7p7VTKL5eG', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(22, 'Emerson Raynor', 'mitchell.elsie@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '6CBaH69TZN', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(23, 'Ms. Anjali Lind II', 'wmckenzie@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'CuuqQ4w0zC', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(24, 'Maddison Skiles DVM', 'alisha64@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'mQDhzvDuN5', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(25, 'Odie Von', 'ozemlak@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2uyjSnKqnt', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(26, 'Chesley Kihn II', 'josefina59@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'oiArcRafHP', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(27, 'Bryon Wilderman', 'rice.natasha@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Bx4fk7yVZ1', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(28, 'Christian Koch', 'paris70@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'XLWJp4YAN3', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(29, 'Trenton Christiansen', 'nschamberger@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'f79xda2XpR', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(30, 'Pamela Zemlak', 'iparker@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Wkq6PLqfRI', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(31, 'Maci Collier', 'hartmann.garret@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '3T7g1fuOYw', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(32, 'Braeden Douglas', 'krajcik.orland@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'RYKdFcrceV', '2019-10-15 08:13:03', '2019-10-15 08:13:03'),
(33, 'Lewis Haley', 'bechtelar.corine@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'T7i3eddgGd', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(34, 'Cora Kautzer', 'juana93@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'KXUPFHHhyj', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(35, 'Cecil Hill', 'jcarroll@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'R9Li7DFQy3', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(36, 'Berry Sanford', 'samantha.collins@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'axWFVZiGBt', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(37, 'Pat Mitchell', 'frederique70@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'ChRYs2rEHb', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(38, 'Diamond Hackett', 'vhackett@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '1bh059psev', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(39, 'Prof. Devyn Gerlach DVM', 'flavio93@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'EY1KIovSQa', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(40, 'Aylin Marks', 'ellis99@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'psd9U46TRC', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(41, 'Sofia Mayert', 'xbahringer@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'AaAnl7uYg9', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(42, 'Mr. Jonathon Nicolas DDS', 'tking@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '9x4Iv6EZQK', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(43, 'Prof. Alf Donnelly', 'oreilly.nasir@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'MQJKpnEX0f', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(44, 'Prof. Sydnie Rosenbaum', 'homenick.rubye@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'ZKtzYP8JsD', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(45, 'Zula Schmitt', 'ortiz.euna@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'NMNUq3mXSi', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(46, 'Keagan Yost Jr.', 'norma.koss@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '6E79xXOfb7', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(47, 'Franz Cartwright', 'joanny90@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Xjk28eVPhL', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(48, 'Owen Hayes', 'rippin.jacynthe@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'OdNuLBMUhn', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(49, 'Leanna Hauck MD', 'yundt.neha@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2hZvezG0DG', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(50, 'Jany Kulas', 'christiansen.nels@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '1etkKuKIRM', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(51, 'Mrs. Edna Bashirian', 'uprosacco@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'wi5IQgaEWU', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(52, 'Jodie Tillman', 'hulda.okuneva@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'vn4s6T9sfW', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(53, 'Hilda Steuber', 'parker.fanny@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'fUxGYxIEnl', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(54, 'Mrs. Vernie Harvey', 'farrell.brooke@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0cbsUJ3iZX', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(55, 'Lily Beatty V', 'ioberbrunner@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '4UR9xKAn9P', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(56, 'Willie Rice', 'vonrueden.lexi@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'XydZslCzxq', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(57, 'Lennie King', 'vernice.auer@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'vbHhv2UA18', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(58, 'Mack Stamm', 'bridget34@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'UKbPFxvAg6', '2019-10-15 08:13:04', '2019-10-15 08:13:04'),
(59, 'Daphney Kertzmann', 'jayde.kunde@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '0BzrQSUKSB', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(60, 'Daren Kiehn', 'shaylee15@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Z5E2RYlQqT', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(61, 'Vivian Kunze DVM', 'francis.fadel@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'HUOPs93Dp5', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(62, 'Declan Wehner DDS', 'morar.mozelle@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'pzamC0Pmuy', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(63, 'Lemuel Cormier', 'jessy04@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'fspeizt6Ng', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(64, 'Glennie Bartoletti', 'cordia.bins@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'zYMcxk2Jia', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(65, 'Mr. Lavern Cronin V', 'bosco.arnoldo@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'G2WP6ds3Z1', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(66, 'Duncan Beier', 'caesar.thiel@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'wExENzgfjq', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(67, 'Garett Nolan', 'georgette.ankunding@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '33R6OY78PV', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(68, 'Zackery D\'Amore', 'burdette.roob@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'EhQFT6wbds', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(69, 'Prof. Savanna Stiedemann III', 'deshaun.mante@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'sHv3qlRV4f', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(70, 'Eliezer Moore IV', 'fyost@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'wnfyz9GaY2', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(71, 'Brady Schimmel III', 'oscar73@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'q57ulJmKfv', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(72, 'Cheyenne Bahringer', 'dax.mann@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'oAskQynC2o', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(73, 'Suzanne Luettgen', 'yborer@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'EyoZqMLkUk', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(74, 'Mr. Eladio Grant MD', 'ritchie.sim@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'bjIy9fTMKI', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(75, 'Dr. Naomie D\'Amore', 'alford.hyatt@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'NiXsLtRutG', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(76, 'Gertrude Mayert', 'balistreri.jose@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'SjaY3a0fWY', '2019-10-15 08:13:05', '2019-10-15 08:13:05'),
(77, 'Dr. Alta Beer', 'juston.hartmann@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'HVB40v6MxI', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(78, 'Dr. Beulah Altenwerth', 'haley.maritza@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'VPx62ioVOW', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(79, 'Maureen Hegmann', 'elinore.wiegand@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'eHBGzx4Nl8', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(80, 'Kole Senger DVM', 'hbernhard@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'z2ty7ouCnq', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(81, 'Mr. Samir Hodkiewicz III', 'leonora.bednar@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'sgveVyCEuS', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(82, 'Dr. Janet Pollich', 'paucek.ashley@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'KOiDV8ZBGh', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(83, 'Antone Hermann', 'izaiah.powlowski@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'aiDgfjWBTP', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(84, 'Amelia Kemmer', 'andres40@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'JxuzVyklFd', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(85, 'Mrs. Priscilla Lakin', 'woodrow.grant@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'bsXmeNlZGo', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(86, 'Bradly Rippin', 'saige.cartwright@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'uiE2UJxaZh', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(87, 'Aurelie Mante', 'regan32@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '62tS30UsnJ', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(88, 'Alexandrea Lockman', 'darron46@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'pgm1JS1Alv', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(89, 'Tyson Muller II', 'qprohaska@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '5S60QdbIjJ', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(90, 'Dr. Rosa Labadie', 'ythiel@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2VfnA1JqZ6', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(91, 'Dr. Brice Hintz V', 'payton05@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'Tse4IZCq12', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(92, 'Mr. Lavern Medhurst DDS', 'roob.valentine@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'V3wQzabvyl', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(93, 'Estell Kreiger', 'william.kerluke@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '1LKBjv9YyU', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(94, 'Whitney Casper', 'parker.mackenzie@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'LeKnAQdw3d', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(95, 'Dr. Leola Bailey', 'zelda.davis@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'OFciIcmajZ', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(96, 'Mr. Anthony Ankunding I', 'emayert@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'QXBwvDn44Q', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(97, 'Maurice Jaskolski', 'mbosco@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'VuFXApGsKG', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(98, 'Preston Rippin', 'okeefe.macie@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'OTcGBa3vdw', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(99, 'Prof. Susana Bernier DVM', 'qturcotte@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'PC3yDyDX0H', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(100, 'Miss Noemy Aufderhar DVM', 'volkman.enid@example.net', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'C7DF4Nqrvy', '2019-10-15 08:13:06', '2019-10-15 08:13:06'),
(101, 'Abbie Eichmann II', 'waelchi.roxanne@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'jYYbQfFgUy', '2019-10-15 08:13:07', '2019-10-15 08:13:07'),
(102, 'Bailee Gleason', 'abernathy.taylor@example.org', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'jF86YSjOpw', '2019-10-15 08:13:07', '2019-10-15 08:13:07'),
(103, 'Dr. Myrtis Haley', 'marge.becker@example.com', '2019-10-15 08:13:02', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'do2EeRSARE', '2019-10-15 08:13:07', '2019-10-15 08:13:07'),
(104, 'Habib', 'Habib.user@gmail.com', NULL, '$2y$10$PH69m0TPg1dmOubvSklaCOP2f6N.qJB.dHM/Pgoyh077CEFtZkK9e', 3, NULL, '2019-10-17 12:14:43', '2019-10-17 12:14:43'),
(105, 'User', 'User@user.com', NULL, '$2y$10$jFocwxczM2eyfeSE5Ou6T.oRO5HUmMdQQSs6sgfuIbwkQtIltFMX6', 3, NULL, '2019-10-19 09:09:57', '2019-10-19 09:09:57'),
(106, 'sazzad', 'sazzad@sazzad.com', NULL, '$2y$10$SWGBl7Y29aFMcH015hWj.utoG0w0apIvKYEq64GtMbjo8I2ZtzPgq', 2, NULL, '2019-10-25 22:13:18', '2019-10-25 22:13:18'),
(107, 'sagor', 'sagor.ak48@gmail.com', NULL, '$2y$10$Gmh37nYnFv5xr6C9eZ7/0ORtOY6uzosa2LlSvFhw0lhKsQjb2MLKC', 3, NULL, '2019-10-25 22:26:49', '2019-10-25 22:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Agent', NULL, NULL),
(3, 'User', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokans`
--
ALTER TABLE `dokans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_changes`
--
ALTER TABLE `logo_changes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_laters`
--
ALTER TABLE `news_laters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dokans`
--
ALTER TABLE `dokans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `logo_changes`
--
ALTER TABLE `logo_changes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `news_laters`
--
ALTER TABLE `news_laters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
