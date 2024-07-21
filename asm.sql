-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2024 at 08:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cover`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'Đời sống', 'category/ladPjbUCvCzjbzM1gKphtUj7ePQ19J2ZfmFBUvnn.jpg', 1, '2024-07-18 14:29:43', '2024-07-19 03:20:28'),
(7, 'Bóng đá', 'category/EOU3Qv7TmumxirJPnevMul2VwH4vMpbK11bi1ob8.jpg', 1, '2024-07-19 02:22:41', '2024-07-19 03:20:22'),
(10, 'Y Tế', 'category/aNlsOHeLQc69NeDSejW60XUWzg5iRBZu5HrzDq3j.jpg', 1, '2024-07-19 03:19:40', '2024-07-19 03:19:40'),
(11, 'Kinh Tế', 'category/bIxER9K0oFMdg5vG0tOqCCHqktDKMVapNxi40hQO.jpg', 1, '2024-07-19 03:19:53', '2024-07-19 03:19:53'),
(12, 'Giáo Dục', 'category/HBYXfqDwUqNZFjkzuxeplyYqrNhQktgGf648JH7o.jpg', 1, '2024-07-19 03:20:12', '2024-07-19 03:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2024_07_18_161436_create_categories_table', 2),
(9, '2024_07_18_161502_create_news_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `catelogue_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `view` bigint UNSIGNED DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `catelogue_id`, `title`, `slug`, `content`, `image`, `user_id`, `view`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 11, 'fdfdsfds', 'fdfdsfds', 'fdsfdsfsd', 'news/TJ6krjMIRVgZsuR03X2QA9Mgr4dkFBgI7SUJfi6k.jpg', 1, NULL, 1, '2024-07-19 04:25:01', '2024-07-19 07:39:06'),
(5, 7, 'Barcelona biến động đội hình', 'barcelona-bien-dong-doi-hinh', 'Lamine Yamal là một trong những cái tên được chú ý sau EURO 2024. Ở tuổi 17, \"Sao mai\" thuộc biên chế Barcelona đã tỏa sáng rực rỡ giúp ĐT Tây Ban Nha lên ngôi vô địch, cá nhân anh cũng nhận danh hiệu \"Cầu thủ trẻ xuất sắc nhất\" và xô đổ hàng loạt kỷ lục.', 'news/OpVNF1pivYsP4i8AQlnP3kRLH1vqrnDdPnQMqZCm.jpg', 1, 100, 1, '2024-07-19 04:26:04', '2024-07-19 04:26:04'),
(15, 7, 'Barcelona biến động đội hình', 'barcelona-bien-dong-doi-hinhjhhrthfhfrt', 'Lamine Yamal là một trong những cái tên được chú ý sau EURO 2024. Ở tuổi 17, \"Sao mai\" thuộc biên chế Barcelona đã tỏa sáng rực rỡ giúp ĐT Tây Ban Nha lên ngôi vô địch, cá nhân anh cũng nhận danh hiệu \"Cầu thủ trẻ xuất sắc nhất\" và xô đổ hàng loạt kỷ lục.', 'news/my8KiOl8bl4GmINptco7HYMpdOi0fLBwSBKWfxVu.jpg', 1, NULL, 1, '2024-07-19 07:25:47', '2024-07-19 07:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Dương', 'nguyenduong0782004@gmail.com', NULL, '$2y$12$qtKG.6i.2nD8X4VBt1zfteEn/BlEw7bQFybVnu32dFfL2MCQrjvFy', 'FDgbWWUbll7pG4R56o8ILgVaq08A4jYJqST9fkNi9Bij2HxKB9QTUQmmv5OI', '2024-07-18 12:40:53', '2024-07-20 02:08:05'),
(2, 'Nguyễn Văn Dương', 'Nguyenduong708204@gmail.com', NULL, '$2y$12$rauHVhMbEFxuGqkYI.hU7OjT3NToNCwJz.vUAgy1YOGpomViacSmS', NULL, '2024-07-19 09:54:14', '2024-07-19 09:54:14'),
(3, 'Nguyễn Văn Dương', 'Nguyenduong075582004@gmail.com', NULL, '$2y$12$XigpMrjk62DKh2u2MkR2vuhVY7Gzp/4g6KXlWOmyyqpFkKgbc0MJe', NULL, '2024-07-19 09:56:09', '2024-07-19 09:56:09'),
(4, 'Nguyễn Văn Dương', 'Nguyenduong8072004@gmail.com', NULL, '$2y$12$EETtw//DYqUIhgsxYNlDJ.BRyy.WV0ocAQbU29RgfkYhyr10OW6Hi', NULL, '2024-07-19 09:57:55', '2024-07-19 09:57:55'),
(5, 'Nguyễn Văn Dương', 'Nguyenduong076582004@gmail.com', NULL, '$2y$12$8ms4P.z.cO6N8DPsWM9hOeR867EObk3smVnehMT5T9VzW.gYsmI2G', NULL, '2024-07-20 02:07:32', '2024-07-20 02:07:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_user_id_foreign` (`user_id`),
  ADD KEY `catelogue_id` (`catelogue_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`catelogue_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
