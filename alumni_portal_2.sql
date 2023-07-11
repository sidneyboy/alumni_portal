-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 04:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_portal_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `subject`, `body`, `status`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'What is Lorem Ipsum?', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(4, 'Announcement For All of the Users', 'Naa tay kaon karung umaabot na agusto puhon', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements_attachments`
--

CREATE TABLE `announcements_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcements_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attachment` longtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
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
(6, 1, '649e3e85b751f-qweqweqweqweqwe.jpg', NULL, '2023-06-29 18:31:33', '2023-06-29 18:31:33', 1),
(7, 4, '64a2ba2664b2d-67830621_2095633600540620_5491297158894190592_n (1).jpg', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1),
(8, 4, '64a2ba26668d7-67830621_2095633600540620_5491297158894190592_n.jpg', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1),
(9, 4, '64a2ba266845b-68280807_2095634063873907_641207126592585728_n-660x330.jpg', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1),
(10, 4, '64a2ba266ae87-MG_3898-1024x683.jpg', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1),
(11, 4, '64a2ba266c99a-MG_3976-1-1024x683.jpg', NULL, '2023-07-03 04:08:06', '2023-07-03 04:08:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcement_replies`
--

CREATE TABLE `announcement_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcements_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement_replies`
--

INSERT INTO `announcement_replies` (`id`, `announcements_id`, `user_id`, `content`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'asdasdasdasd', NULL, 'admin', '2023-06-29 19:10:26', '2023-06-29 19:10:26'),
(2, 1, 1, 'sample', NULL, 'admin', '2023-07-03 02:41:39', '2023-07-03 02:41:39'),
(3, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:45:10', '2023-07-03 10:45:10'),
(4, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:45:42', '2023-07-03 10:45:42'),
(5, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:53:56', '2023-07-03 10:53:56'),
(6, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:55:41', '2023-07-03 10:55:41'),
(7, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:55:54', '2023-07-03 10:55:54'),
(8, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:58:20', '2023-07-03 10:58:20'),
(9, 1, 1, 'sample', NULL, 'admin', '2023-07-03 10:58:38', '2023-07-03 10:58:38'),
(10, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:00:07', '2023-07-03 11:00:07'),
(11, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:01:18', '2023-07-03 11:01:18'),
(12, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:02:11', '2023-07-03 11:02:11'),
(13, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:04:05', '2023-07-03 11:04:05'),
(14, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:04:10', '2023-07-03 11:04:10'),
(15, 1, 1, 'sample', NULL, 'admin', '2023-07-03 11:06:20', '2023-07-03 11:06:20'),
(16, 1, 1, 'sample', NULL, 'admin', '2023-07-03 03:09:02', '2023-07-03 03:09:02'),
(17, 1, 1, 'sample', NULL, 'admin', '2023-07-03 03:09:58', '2023-07-03 03:09:58'),
(20, 4, 1, 'Comments', NULL, 'admin', '2023-07-03 04:08:16', '2023-07-03 04:08:16'),
(21, 4, 1, 'comment 2', NULL, 'admin', '2023-07-05 04:04:41', '2023-07-05 04:04:41'),
(22, 4, 1, 'comment 2', NULL, 'admin', '2023-07-05 04:04:56', '2023-07-05 04:04:56'),
(23, 4, 1, 'comment 23', NULL, 'admin', '2023-07-05 04:05:44', '2023-07-05 04:05:44'),
(24, 4, 1, 'sample', NULL, 'admin', '2023-07-07 03:41:03', '2023-07-07 03:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_favorites`
--

INSERT INTO `ch_favorites` (`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`) VALUES
('2d5ff174-c64a-48f3-acfd-fac92702df68', 1, 3, '2023-07-11 03:09:12', '2023-07-11 03:09:12'),
('352d4b75-2dfe-4dc4-a65e-f8dfd8037ce2', 3, 1, '2023-07-11 03:30:10', '2023-07-11 03:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
('17f3aecd-f901-47b0-9712-223df561c8fa', 3, 1, 'heheh', NULL, 1, '2023-07-11 03:30:29', '2023-07-11 03:30:29'),
('2bcaabb7-624a-4c05-aafc-425dbb239fec', 1, 3, 'yowyow whats up', NULL, 1, '2023-07-11 03:30:23', '2023-07-11 03:30:23'),
('47af8ad5-8eac-44a5-9b12-9eaff2b09309', 1, 3, 'man laag mi nila mama an daddy hehehe', NULL, 1, '2023-07-11 03:30:49', '2023-07-11 03:30:49'),
('7f3e8093-cd3b-4f6f-b0d2-4913a0b37a11', 1, 3, 'nag kaon kaon rami oi', NULL, 1, '2023-07-11 03:30:37', '2023-07-11 03:30:38'),
('8085ed3e-eec4-47d6-94e1-bec423fd2f9f', 3, 1, 'hi unsay sud.an', NULL, 0, '2023-07-11 04:47:56', '2023-07-11 04:47:56'),
('8204959b-efd2-4bb1-97af-538b1e1a81bd', 3, 1, 'naunsa man ka dira karun?', NULL, 1, '2023-07-11 03:30:33', '2023-07-11 03:30:33'),
('88132c99-d6c0-4bc2-bfe1-7a8939412dd2', 1, 3, 'dasdasd\r\n]', NULL, 1, '2023-07-11 03:07:51', '2023-07-11 03:21:08'),
('a0cb9d0c-645e-4ed8-b302-d36345275b8e', 3, 1, 'fgbdfgdfgdfg', NULL, 1, '2023-07-11 03:21:25', '2023-07-11 03:22:50'),
('bfd06c6f-6f53-48fa-85e5-5a24343de9f9', 1, 3, 'hello anak', NULL, 1, '2023-07-11 04:47:16', '2023-07-11 04:47:40'),
('c3c9082b-05d5-4cfc-9120-4ac1fde81fff', 1, 3, 'Yow Khelow What&#039;s Up', NULL, 1, '2023-07-11 03:22:55', '2023-07-11 03:30:07');

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
-- Table structure for table `graduates_profiles`
--

CREATE TABLE `graduates_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `profile_last_updated` date DEFAULT NULL,
  `graduate_picture_id` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
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
(17, '2023_06_30_075525_add_user_id_to_wall', 13),
(18, '2023_07_04_131448_add_user_type_to_users', 14),
(19, '2023_07_04_131547_add_user_type_to_graduates_profile', 14),
(20, '2023_07_05_114520_create_wall_replies_table', 14),
(21, '2023_07_06_023524_add_user_details', 15),
(22, '2023_07_06_042622_add_user_status_to_user', 16),
(23, '2023_07_11_999999_add_active_status_to_users', 17),
(24, '2023_07_11_999999_add_avatar_to_users', 17),
(25, '2023_07_11_999999_add_dark_mode_to_users', 17),
(26, '2023_07_11_999999_add_messenger_color_to_users', 17),
(27, '2023_07_11_999999_create_chatify_favorites_table', 17),
(28, '2023_07_11_999999_create_chatify_messages_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_picture` longtext DEFAULT NULL,
  `timeline_picture` longtext DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile_picture`, `timeline_picture`, `gender`, `date_of_birth`, `about`, `user_type`, `middle_name`, `last_name`, `status`, `active_status`, `avatar`, `dark_mode`, `messenger_color`) VALUES
(1, 'John Sidney', 'admin@gmail.com', NULL, '$2y$10$KSOQEnXsNbOcutrAWPctj.5EfTgs5LnFW4Zyfe315MVBd5bLKdVy6', NULL, '2023-06-28 18:14:54', '2023-07-11 05:13:52', '64a2baeb2b74d-images.jpg', '64a2bae05ef87-cropped-school-header (1).jpg', 'Male', '1992-06-29', 'Hi! I\'m Amiah the Senior UI Designer at Vibrant. We hope you enjoy the design and quality of Social.', 'admin', 'Llanes', 'Salazar', '0', 0, '00f34e35-8074-4054-b2c2-7e626621d48f.jpg', 1, NULL),
(3, 'khloe', 'khloe@gmail.com', NULL, '$2y$10$jlTdYgNwED6Ap2uVR0iL0eLJbluauRfmhGMoOd4LmuBYwgwtZCIpu', NULL, '2023-07-05 20:28:25', '2023-07-11 14:02:20', '64a65b64ca0df-download.jpg', '64a6581f412ee-desktop-wallpaper-dbz-family-dragon-ball-z-fusion.jpg', 'Female', '2021-09-09', 'Son Goku, born Kakarot, is a male Saiyan and the main protagonist of the Dragon Ball metaseries created by Akira Toriyama.', 'user', 'baconawa', 'salazar', '1', 0, '45d6394c-3364-444c-99fe-076a66948b02.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `walls`
--

CREATE TABLE `walls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `body` longtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
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
(5, 1, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, 'admin', '2023-06-30 00:15:45', '2023-06-30 00:15:45'),
(8, 3, 'Dragon Ball Yeah', NULL, 'admin', '2023-07-05 22:13:51', '2023-07-05 22:13:51'),
(11, 3, 'lalalalalalala', NULL, 'admin', '2023-07-07 05:10:47', '2023-07-07 05:10:47'),
(12, 3, 'what\'s on my mind', NULL, 'admin', '2023-07-07 05:33:29', '2023-07-07 05:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `wall_attachments`
--

CREATE TABLE `wall_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wall_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attachment` longtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
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
(6, 1, '649e8b11a5c1e-qweqweqweqweqwe.jpg', NULL, '2023-06-29 23:58:09', '2023-06-29 23:58:09', '1', 'admin'),
(7, 8, '64a65b9f6bbe8-dragon-ball-super-vol-12.jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(8, 8, '64a65b9f6dc50-images.jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(9, 8, '64a65b9f6eaef-9e510b0d2ffc577aad8e8edcabed2ee8.jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(10, 8, '64a65b9f6f79b-download.jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(11, 8, '64a65b9f704db-download (1).jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(12, 8, '64a65b9f70ff0-8a87476e3cc6d6ab6db061af36c8032f6e79ce84_hq.jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin'),
(13, 8, '64a65b9f71fab-download (2).jpg', NULL, '2023-07-05 22:13:51', '2023-07-05 22:13:51', '3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wall_replies`
--

CREATE TABLE `wall_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wall_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wall_replies`
--

INSERT INTO `wall_replies` (`id`, `wall_id`, `user_id`, `content`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 'sample', NULL, 'admin', '2023-07-05 03:54:37', '2023-07-05 03:54:37'),
(2, 5, 1, 'sample 2', NULL, 'admin', '2023-07-05 04:00:23', '2023-07-05 04:00:23'),
(3, 8, 3, 'yeah', NULL, 'admin', '2023-07-05 22:17:30', '2023-07-05 22:17:30'),
(4, 8, 3, 'yeah', NULL, 'admin', '2023-07-05 22:18:48', '2023-07-05 22:18:48'),
(5, 8, 3, 'yeah', NULL, 'admin', '2023-07-05 22:18:55', '2023-07-05 22:18:55'),
(6, 8, 3, 'sample', NULL, 'admin', '2023-07-05 22:21:41', '2023-07-05 22:21:41'),
(7, 8, 3, 'user', NULL, 'admin', '2023-07-05 22:21:46', '2023-07-05 22:21:46'),
(8, 8, 3, 'user wall', NULL, 'admin', '2023-07-05 22:21:53', '2023-07-05 22:21:53'),
(9, 8, 1, 'sample', NULL, 'admin', '2023-07-05 22:30:09', '2023-07-05 22:30:09'),
(10, 5, 3, 'sample', NULL, 'admin', '2023-07-06 00:01:04', '2023-07-06 00:01:04'),
(11, 5, 3, 'sample', NULL, 'admin', '2023-07-06 00:03:09', '2023-07-06 00:03:09'),
(12, 4, 3, 'sample', NULL, 'admin', '2023-07-06 00:03:40', '2023-07-06 00:03:40'),
(13, 4, 3, 'sample', NULL, 'admin', '2023-07-06 00:04:20', '2023-07-06 00:04:20'),
(14, 8, 1, 'sampleeeeee', NULL, 'admin', '2023-07-07 03:40:29', '2023-07-07 03:40:29'),
(15, 8, 1, 'sample', NULL, 'admin', '2023-07-07 04:16:42', '2023-07-07 04:16:42'),
(16, 8, 1, 'siiii', NULL, 'admin', '2023-07-07 04:16:50', '2023-07-07 04:16:50'),
(17, 8, 1, 'sammmmeeeellele', NULL, 'admin', '2023-07-07 04:22:44', '2023-07-07 04:22:44'),
(18, 8, 3, 'ssssssssssssss', NULL, 'admin', '2023-07-07 05:10:34', '2023-07-07 05:10:34'),
(19, 5, 3, 'pooooooooo', NULL, 'admin', '2023-07-07 05:16:10', '2023-07-07 05:16:10'),
(20, 5, 1, 'sss', NULL, 'admin', '2023-07-07 05:18:24', '2023-07-07 05:18:24'),
(21, 5, 1, 'sss', NULL, 'admin', '2023-07-07 05:20:11', '2023-07-07 05:20:11'),
(22, 5, 1, 'sssss', NULL, 'admin', '2023-07-07 05:21:06', '2023-07-07 05:21:06'),
(23, 5, 3, 'asdasdasd', NULL, 'admin', '2023-07-07 05:22:55', '2023-07-07 05:22:55'),
(24, 5, 3, 'sfdfsdfsdfsdf', NULL, 'admin', '2023-07-07 05:24:11', '2023-07-07 05:24:11'),
(25, 5, 3, 'mygad', NULL, 'admin', '2023-07-07 05:25:34', '2023-07-07 05:25:34'),
(26, 4, 3, 'ssssss', NULL, 'admin', '2023-07-07 05:27:18', '2023-07-07 05:27:18'),
(27, 4, 3, 'mygad 2', NULL, 'admin', '2023-07-07 05:29:24', '2023-07-07 05:29:24');

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
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `wall_replies`
--
ALTER TABLE `wall_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wall_replies_wall_id_index` (`wall_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcements_attachments`
--
ALTER TABLE `announcements_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `announcement_replies`
--
ALTER TABLE `announcement_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graduates_profiles`
--
ALTER TABLE `graduates_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `walls`
--
ALTER TABLE `walls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wall_attachments`
--
ALTER TABLE `wall_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `wall_replies`
--
ALTER TABLE `wall_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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

--
-- Constraints for table `wall_replies`
--
ALTER TABLE `wall_replies`
  ADD CONSTRAINT `wall_replies_wall_id_foreign` FOREIGN KEY (`wall_id`) REFERENCES `walls` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
