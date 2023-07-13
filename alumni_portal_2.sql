-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 04:07 PM
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
(1, 'First Announcement', 'Naa tay panagtigom karung sabado\r\n\r\ndapat mo tunga ang tanan', NULL, '2023-07-13 05:54:00', '2023-07-13 05:54:00', NULL);

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
(1, 1, '168925644066.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL),
(2, 1, '168925644151.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL),
(3, 1, '168925644148.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL),
(4, 1, '168925644117.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL),
(5, 1, '16892564412.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL),
(6, 1, '168925644176.jpg', NULL, '2023-07-13 05:54:01', '2023-07-13 05:54:01', NULL);

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
('2e5a6e33-96ec-49fd-94a9-eac9d1cd2b59', 1, 3, 'hi', NULL, 1, '2023-07-11 06:04:49', '2023-07-11 06:04:53'),
('47af8ad5-8eac-44a5-9b12-9eaff2b09309', 1, 3, 'man laag mi nila mama an daddy hehehe', NULL, 1, '2023-07-11 03:30:49', '2023-07-11 03:30:49'),
('529efb7a-1882-4d1f-80ee-2abee443a3c1', 1, 3, '', '{\"new_name\":\"69b0c7e3-a402-44ef-a0cb-fbbe7b5ce232.png\",\"old_name\":\"map_sidney_salazar_barangay 20 (pob.)_dool_rizal_theatre.png\"}', 1, '2023-07-11 06:05:14', '2023-07-11 06:05:15'),
('7f3e8093-cd3b-4f6f-b0d2-4913a0b37a11', 1, 3, 'nag kaon kaon rami oi', NULL, 1, '2023-07-11 03:30:37', '2023-07-11 03:30:38'),
('8085ed3e-eec4-47d6-94e1-bec423fd2f9f', 3, 1, 'hi unsay sud.an', NULL, 1, '2023-07-11 04:47:56', '2023-07-11 06:04:45'),
('8204959b-efd2-4bb1-97af-538b1e1a81bd', 3, 1, 'naunsa man ka dira karun?', NULL, 1, '2023-07-11 03:30:33', '2023-07-11 03:30:33'),
('88132c99-d6c0-4bc2-bfe1-7a8939412dd2', 1, 3, 'dasdasd\r\n]', NULL, 1, '2023-07-11 03:07:51', '2023-07-11 03:21:08'),
('89848d9f-833a-443b-b2ca-8b5cce4fc7a1', 3, 1, 'nag unsa mo?', NULL, 1, '2023-07-11 06:04:55', '2023-07-11 06:04:56'),
('a0cb9d0c-645e-4ed8-b302-d36345275b8e', 3, 1, 'fgbdfgdfgdfg', NULL, 1, '2023-07-11 03:21:25', '2023-07-11 03:22:50'),
('bfd06c6f-6f53-48fa-85e5-5a24343de9f9', 1, 3, 'hello anak', NULL, 1, '2023-07-11 04:47:16', '2023-07-11 04:47:40'),
('c3c9082b-05d5-4cfc-9120-4ac1fde81fff', 1, 3, 'Yow Khelow What&#039;s Up', NULL, 1, '2023-07-11 03:22:55', '2023-07-11 03:30:07'),
('c50dbc1f-207d-4a00-960f-baff67618f17', 1, 3, 'dawbi?', NULL, 1, '2023-07-11 06:04:59', '2023-07-11 06:05:00');

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
(28, '2023_07_11_999999_create_chatify_messages_table', 17),
(29, '2023_07_13_120356_create_surveys_table', 18),
(30, '2023_07_13_120552_create_survey_quetions_table', 19),
(31, '2023_07_13_122538_create_user_surveys_table', 20),
(32, '2023_07_13_122701_create_user_survey_details_table', 21),
(33, '2023_07_13_123713_add_survey_id_to_survey_questions', 22);

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
-- Table structure for table `surveys`
--

CREATE TABLE `surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Career Path Survey', '2023-07-13 04:18:09', '2023-07-13 04:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `survey_quetions`
--

CREATE TABLE `survey_quetions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `survey_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `survey_quetions`
--

INSERT INTO `survey_quetions` (`id`, `question`, `created_at`, `updated_at`, `survey_id`) VALUES
(1, 'When did you graduate?', '2023-07-13 04:18:09', '2023-07-13 04:18:09', 1),
(2, 'What is your Course', '2023-07-13 04:18:09', '2023-07-13 04:18:09', 1),
(3, 'What is your first job after graduating college', '2023-07-13 04:18:09', '2023-07-13 04:18:09', 1);

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
(1, 'John Sidney', 'admin@gmail.com', NULL, '$2y$10$KSOQEnXsNbOcutrAWPctj.5EfTgs5LnFW4Zyfe315MVBd5bLKdVy6', NULL, '2023-06-28 18:14:54', '2023-07-13 06:06:36', '64a2baeb2b74d-images.jpg', '64a2bae05ef87-cropped-school-header (1).jpg', 'Male', '1992-06-29', 'Hi! I\'m Amiah the Senior UI Designer at Vibrant. We hope you enjoy the design and quality of Social.', 'admin', 'Llanes', 'Salazar', '0', 0, '00f34e35-8074-4054-b2c2-7e626621d48f.jpg', 1, NULL),
(3, 'khloe', 'khloe@gmail.com', NULL, '$2y$10$jlTdYgNwED6Ap2uVR0iL0eLJbluauRfmhGMoOd4LmuBYwgwtZCIpu', NULL, '2023-07-05 20:28:25', '2023-07-13 05:01:08', '64a65b64ca0df-download.jpg', '64a6581f412ee-desktop-wallpaper-dbz-family-dragon-ball-z-fusion.jpg', 'Female', '2021-09-09', 'Son Goku, born Kakarot, is a male Saiyan and the main protagonist of the Dragon Ball metaseries created by Akira Toriyama.', 'user', 'baconawa', 'salazar', '0', 1, '45d6394c-3364-444c-99fe-076a66948b02.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_surveys`
--

CREATE TABLE `user_surveys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `survey_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_surveys`
--

INSERT INTO `user_surveys` (`id`, `user_id`, `survey_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2023-07-13 04:49:58', '2023-07-13 04:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_survey_details`
--

CREATE TABLE `user_survey_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_survey_id` bigint(20) UNSIGNED DEFAULT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_survey_details`
--

INSERT INTO `user_survey_details` (`id`, `user_survey_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'When did you graduate?', '2014', '2023-07-13 04:49:58', '2023-07-13 04:49:58'),
(2, 1, 'What is your Course', 'Information Technology', '2023-07-13 04:49:58', '2023-07-13 04:49:58'),
(3, 1, 'What is your first job after graduating college', 'Programmer at Innovative Web Provider', '2023-07-13 04:49:59', '2023-07-13 04:49:59');

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
-- Indexes for table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survey_quetions`
--
ALTER TABLE `survey_quetions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_surveys_survey_id_index` (`survey_id`);

--
-- Indexes for table `user_survey_details`
--
ALTER TABLE `user_survey_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_survey_details_user_survey_id_index` (`user_survey_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements_attachments`
--
ALTER TABLE `announcements_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcement_replies`
--
ALTER TABLE `announcement_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_quetions`
--
ALTER TABLE `survey_quetions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_surveys`
--
ALTER TABLE `user_surveys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_survey_details`
--
ALTER TABLE `user_survey_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `walls`
--
ALTER TABLE `walls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wall_attachments`
--
ALTER TABLE `wall_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wall_replies`
--
ALTER TABLE `wall_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `user_surveys`
--
ALTER TABLE `user_surveys`
  ADD CONSTRAINT `user_surveys_survey_id_foreign` FOREIGN KEY (`survey_id`) REFERENCES `surveys` (`id`);

--
-- Constraints for table `user_survey_details`
--
ALTER TABLE `user_survey_details`
  ADD CONSTRAINT `user_survey_details_user_survey_id_foreign` FOREIGN KEY (`user_survey_id`) REFERENCES `user_surveys` (`id`);

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
