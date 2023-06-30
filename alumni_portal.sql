-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 10:16 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `body`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'What is Lorem Ipsum?', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements_attachments`
--

CREATE TABLE `announcements_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcements_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attachment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements_attachments`
--

INSERT INTO `announcements_attachments` (`id`, `announcements_id`, `attachment`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 1, '649e3e85b2ed9-fsdfsdf.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(2, 1, '649e3e85b3cd1-hfghfghgfh.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(3, 1, '649e3e85b4aa5-nfghfghgfh.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(4, 1, '649e3e85b58c5-qasdfasdasd.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(5, 1, '649e3e85b6955-qweqwe.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(6, 1, '649e3e85b751f-qweqweqweqweqwe.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement_replies`
--

CREATE TABLE `announcement_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcements_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_replies`
--

INSERT INTO `announcement_replies` (`id`, `announcements_id`, `user_id`, `content`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'asdasdasdasd', NULL, 'admin', '2023-06-29 19:10:26', '2023-06-29 19:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `graduates_profiles`
--

CREATE TABLE `graduates_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `profile_last_updated` date DEFAULT NULL,
  `graduate_picture_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `graduates_profiles`
--

INSERT INTO `graduates_profiles` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `gender`, `date_of_birth`, `year_graduated`, `profile_last_updated`, `graduate_picture_id`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(4, 'John Sidney', 'Llanes', 'Salazar', NULL, NULL, NULL, NULL, NULL, NULL, 'user@gmail.com', '$2y$10$CLYGO/qsi6PLAO7GeyKyou2XNAMKzWdZxzEQNABGJ9VPrbF85er6e', 0, '2023-06-28 18:42:52', '2023-06-28 18:42:52');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_29_022352_create_graduates_profiles_table', 2),
(6, '2023_06_29_052127_add_pictures_to_user', 3),
(7, '2023_06_29_053400_add_about_to_user', 4),
(8, '2023_06_30_001852_create_announcements_table', 5),
(9, '2023_06_30_002220_create_announcements_replies_table', 6),
(10, '2023_06_30_002338_create_announcements_attachments_table', 6),
(11, '2023_06_30_024740_create_announcement_replies_table', 7),
(12, '2023_06_30_030727_create_announcement_replies_table', 8),
(13, '2023_06_30_060923_add_user_id_to_announcements', 9),
(14, '2023_06_30_061913_add_user_id_to_announcement_attachments', 10),
(15, '2023_06_30_063950_create_walls_table', 11),
(16, '2023_06_30_064209_create_wall_attachments_table', 12),
(17, '2023_06_30_075525_add_user_id_to_wall', 13);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeline_picture` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_picture`, `timeline_picture`, `gender`, `date_of_birth`, `about`) VALUES
(1, 'John Sidney Salazar', 'admin@gmail.com', NULL, '$2y$10$KSOQEnXsNbOcutrAWPctj.5EfTgs5LnFW4Zyfe315MVBd5bLKdVy6', NULL, '2023-06-28 18:14:54', '2023-06-29 17:11:13', 'images.jpg', 'cropped-school-header (1).jpg', 'Male', '1993-06-29', 'Hi! I\'m Amiah the Senior UI Designer at Vibrant. We hope you enjoy the design and quality of Social.');

-- --------------------------------------------------------

--
-- Table structure for table `walls`
--

CREATE TABLE `walls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `walls`
--

INSERT INTO `walls` (`id`, `user_id`, `body`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-29 23:58:09', '2023-06-29 23:58:09'),
(2, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-30 00:15:39', '2023-06-30 00:15:39'),
(3, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-30 00:15:41', '2023-06-30 00:15:41'),
(4, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-30 00:15:43', '2023-06-30 00:15:43'),
(5, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-30 00:15:45', '2023-06-30 00:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `wall_attachments`
--

CREATE TABLE `wall_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wall_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attachment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wall_attachments`
--

INSERT INTO `wall_attachments` (`id`, `wall_id`, `attachment`, `status`, `created_at`, `updated_at`, `user_id`, `user_type`) VALUES
(1, 1, '649e8b11a18cf-fsdfsdf.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(2, 1, '649e8b11a2b91-hfghfghgfh.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(3, 1, '649e8b11a37aa-nfghfghgfh.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(4, 1, '649e8b11a45a2-qasdfasdasd.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(5, 1, '649e8b11a4f41-qweqwe.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(6, 1, '649e8b11a5c1e-qweqweqweqweqwe.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements_attachments`
--
ALTER TABLE `announcements_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcements_attachments_announcements_id_index` (`announcements_id`);

--
-- Indexes for table `announcement_replies`
--
ALTER TABLE `announcement_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `announcement_replies_announcements_id_index` (`announcements_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `graduates_profiles`
--
ALTER TABLE `graduates_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `walls`
--
ALTER TABLE `walls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wall_attachments`
--
ALTER TABLE `wall_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wall_attachments_wall_id_index` (`wall_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcements_attachments`
--
ALTER TABLE `announcements_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcement_replies`
--
ALTER TABLE `announcement_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduates_profiles`
--
ALTER TABLE `graduates_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `walls`
--
ALTER TABLE `walls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wall_attachments`
--
ALTER TABLE `wall_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements_attachments`
--
ALTER TABLE `announcements_attachments`
  ADD CONSTRAINT `announcements_attachments_announcements_id_foreign` FOREIGN KEY (`announcements_id`) REFERENCES `announcements` (`id`);

--
-- Constraints for table `announcement_replies`
--
ALTER TABLE `announcement_replies`
  ADD CONSTRAINT `announcement_replies_announcements_id_foreign` FOREIGN KEY (`announcements_id`) REFERENCES `announcements` (`id`);

--
-- Constraints for table `wall_attachments`
--
ALTER TABLE `wall_attachments`
  ADD CONSTRAINT `wall_attachments_wall_id_foreign` FOREIGN KEY (`wall_id`) REFERENCES `walls` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
