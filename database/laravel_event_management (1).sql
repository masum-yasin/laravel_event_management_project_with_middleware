-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 08:24 AM
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
-- Database: `laravel_event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Conferences', '2024-01-22 03:14:27', '2024-01-22 03:14:27'),
(2, 'birthday party', '2024-01-22 03:14:54', '2024-01-22 03:14:54'),
(3, 'Office together', '2024-01-22 03:15:18', '2024-01-22 03:15:18'),
(4, 'Weddings', '2024-01-22 03:56:05', '2024-01-22 03:56:05'),
(5, 'Festival', '2024-01-22 04:00:38', '2024-01-22 04:00:38'),
(6, 'Sports', '2024-01-22 04:00:50', '2024-01-22 04:00:50'),
(7, 'meeting event', '2024-01-22 04:01:06', '2024-01-22 04:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editors`
--

INSERT INTO `editors` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'editor', 'editor@gmail.com', NULL, '$2y$12$qXFqgSFEhaODY3RsNRmWDuqHSdsVxF7g2aA9Gp67DpzjGucr/cpZG', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventtypes`
--

CREATE TABLE `eventtypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eventype` varchar(100) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `availibility` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eventtypes`
--

INSERT INTO `eventtypes` (`id`, `eventype`, `image`, `price`, `description`, `availibility`, `created_at`, `updated_at`) VALUES
(8, 'Birthday party', '1705906844.jpg', 95000.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 1, '2024-01-21 23:16:02', '2024-01-22 01:00:44'),
(9, 'Festival Event', '1705906876.jpg', 110000.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 1, '2024-01-21 23:17:28', '2024-01-22 01:01:16'),
(10, 'Weddings', '1705906906.jpg', 85000.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 1, '2024-01-21 23:18:04', '2024-01-22 01:01:46'),
(11, 'Sports Event', '1705906922.jpg', 210000.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 1, '2024-01-21 23:19:04', '2024-01-22 01:02:02'),
(12, 'Meeting Event', '1705906964.jpg', 123654.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 1, '2024-01-21 23:22:45', '2024-01-22 01:02:44'),
(13, 'Organization', '1705906996.jpg', 320000.00, 'Every great event needs an eye-catching event description! When you find the right words to describe your event, you will be able to attract your target audience! Event descriptions also allow companies to add a bit of their company tone and personality into the event marketing!', 2, '2024-01-21 23:26:55', '2024-01-22 01:03:16'),
(14, 'Birthday party', '1705994533.jpg', 123654.00, 'jdjdjjjjdjdjd', 1, '2024-01-23 01:22:13', '2024-01-23 01:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `evtcategories`
--

CREATE TABLE `evtcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evtname` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evtcategories`
--

INSERT INTO `evtcategories` (`id`, `evtname`, `created_at`, `updated_at`) VALUES
(1, 'Office ceremony', '2024-01-21 10:17:44', '2024-01-21 10:17:44'),
(2, 'Birthday', '2024-01-21 10:18:01', '2024-01-21 10:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `evtemplys`
--

CREATE TABLE `evtemplys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evtcategories_id` bigint(20) UNSIGNED NOT NULL,
  `emply_name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `working_location` varchar(150) NOT NULL,
  `joining_date` date DEFAULT NULL,
  `regained_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evtemplys`
--

INSERT INTO `evtemplys` (`id`, `evtcategories_id`, `emply_name`, `phone`, `email`, `working_location`, `joining_date`, `regained_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'Masum Hossain', 1920362514, 'masum55549@gmail.com', 'Dhanmondi', '2024-01-24', '2024-02-02', '2024-01-23 07:21:19', '2024-01-23 07:21:19'),
(2, 1, 'Masum Hossain', 1920362514, 'masum@gmail.com', 'Dhanmondi', '2024-01-23', '2024-01-23', '2024-01-23 07:21:48', '2024-01-23 07:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2024_01_04_123018_create_categories_table', 1),
(16, '2024_01_04_123108_create_products_table', 1),
(17, '2024_01_15_101805_create_editors_table', 1),
(18, '2024_01_19_050902_create_evtcategories_table', 1),
(19, '2024_01_19_051111_create_evtemplys_table', 1),
(20, '2024_01_19_181333_create_admins_table', 1),
(21, '2024_01_21_101255_create_eventtypes_table', 1),
(22, '2024_01_21_180418_create_post_blogs_table', 2),
(23, '2024_01_22_091016_create_sponsors_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_blogs`
--

CREATE TABLE `post_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_name` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` tinyint(4) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_blogs`
--

INSERT INTO `post_blogs` (`id`, `post_name`, `image`, `category_id`, `location`, `description`, `created_at`, `updated_at`) VALUES
(1, 'birthday party', '1705895529.png', 2, 'Dhanmondi', 'jdjdjdjdjdjdjdjdj', '2024-01-21 21:52:09', '2024-01-21 21:52:09'),
(2, 'Sports of india', '1705898402.jpg', 1, 'Kawran Bazer', 'This is Costly event', '2024-01-21 22:08:58', '2024-01-21 22:40:02'),
(3, 'birthday party', '1705994588.jpg', 4, 'Kawran Bazer', 'hdhdhdhdhhdhd', '2024-01-23 01:23:08', '2024-01-23 01:23:08'),
(4, 'Sports of Bangladesh', '1705994623.jpg', 5, 'Dhanmondi', 'jdjljdl;jdljldjlk', '2024-01-23 01:23:43', '2024-01-23 01:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `company_location` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `category_id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `company_name`, `logo`, `description`, `company_location`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Khan agro Group', '1705927815.jpg', 'This is Costly Event', 'new market', 0, 5, '2024-01-22 06:40:36', '2024-01-22 06:50:15'),
(4, 'Khan agro Group', '1705994562.jpg', 'dhdhkhdhdhhdhdhkh', 'Kawran Bazer', 0, 4, '2024-01-23 01:22:42', '2024-01-23 01:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc@gmail.com', NULL, '$2y$12$d2RjvOK47kls5CAwGIkEouhmJuI7UMERJPehNUe.LAkKtpf1me2cy', NULL, '2024-01-21 04:17:23', '2024-01-21 04:17:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `editors_email_unique` (`email`);

--
-- Indexes for table `eventtypes`
--
ALTER TABLE `eventtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evtcategories`
--
ALTER TABLE `evtcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evtemplys`
--
ALTER TABLE `evtemplys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `evtemplys_evtcategories_id_foreign` (`evtcategories_id`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_blogs`
--
ALTER TABLE `post_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eventtypes`
--
ALTER TABLE `eventtypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `evtcategories`
--
ALTER TABLE `evtcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evtemplys`
--
ALTER TABLE `evtemplys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_blogs`
--
ALTER TABLE `post_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evtemplys`
--
ALTER TABLE `evtemplys`
  ADD CONSTRAINT `evtemplys_evtcategories_id_foreign` FOREIGN KEY (`evtcategories_id`) REFERENCES `evtcategories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
