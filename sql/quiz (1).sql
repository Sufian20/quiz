-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 09:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `ansers`
--

CREATE TABLE `ansers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ansers`
--

INSERT INTO `ansers` (`id`, `user_id`, `question_id`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Bangladesh', '2020-08-30 12:40:33', NULL, NULL),
(2, 1, 2, '13 December', '2020-08-30 12:40:33', NULL, NULL),
(3, 1, 3, '1967', '2020-08-30 12:40:33', NULL, NULL),
(4, 1, 4, '26 March', '2020-08-30 12:40:33', NULL, NULL),
(5, 1, 5, '15 months', '2020-08-30 12:40:33', NULL, NULL),
(6, 1, 6, 'Khulna', '2020-08-30 12:40:33', NULL, NULL),
(7, 1, 7, 'Zoshim Uddin', '2020-08-30 12:40:33', NULL, NULL),
(8, 1, 8, 'Kumilla', '2020-08-30 12:40:33', NULL, NULL),
(9, 1, 9, 'Lion', '2020-08-30 12:40:33', NULL, NULL),
(10, 1, 10, 'Foot Ball', '2020-08-30 12:40:33', NULL, NULL),
(21, 4, 1, 'Bangladesh', '2020-09-01 09:49:32', NULL, NULL),
(22, 4, 2, '16 December', '2020-09-01 09:49:32', NULL, NULL),
(23, 4, 3, '1971', '2020-09-01 09:49:32', NULL, NULL),
(24, 4, 4, '26 March', '2020-09-01 09:49:32', NULL, NULL),
(25, 4, 5, '6 months', '2020-09-01 09:49:32', NULL, NULL),
(26, 4, 6, 'Dhaka', '2020-09-01 09:49:32', NULL, NULL),
(27, 4, 7, 'Sufiya Kamal', '2020-09-01 09:49:32', NULL, NULL),
(28, 4, 8, 'SYLHET', '2020-09-01 09:49:32', NULL, NULL),
(29, 4, 9, 'Tiger', '2020-09-01 09:49:32', NULL, NULL),
(30, 4, 10, 'Hadudu', '2020-09-01 09:49:32', NULL, NULL),
(31, 5, 1, 'Bangladesh', '2021-01-09 14:00:13', NULL, NULL),
(32, 5, 2, '13 December', '2021-01-09 14:00:13', NULL, NULL),
(33, 5, 3, '1971', '2021-01-09 14:00:13', NULL, NULL),
(34, 5, 4, '2 March', '2021-01-09 14:00:13', NULL, NULL),
(35, 5, 5, '6 months', '2021-01-09 14:00:13', NULL, NULL),
(36, 5, 6, 'Khulna', '2021-01-09 14:00:13', NULL, NULL),
(37, 5, 7, 'Sufiya Kamal', '2021-01-09 14:00:13', NULL, NULL),
(38, 5, 8, 'Kumilla', '2021-01-09 14:00:13', NULL, NULL),
(39, 5, 9, 'Lion', '2021-01-09 14:00:13', NULL, NULL),
(40, 5, 10, 'Foot Ball', '2021-01-09 14:00:13', NULL, NULL),
(41, 1, 1, 'Bangladesh', '2021-05-21 23:07:22', NULL, NULL),
(42, 1, 2, '13 December', '2021-05-21 23:07:22', NULL, NULL),
(43, 1, 3, '1967', '2021-05-21 23:07:22', NULL, NULL),
(44, 1, 4, '26 March', '2021-05-21 23:07:22', NULL, NULL),
(45, 1, 5, '6 months', '2021-05-21 23:07:22', NULL, NULL),
(46, 1, 6, 'Dhaka', '2021-05-21 23:07:22', NULL, NULL),
(47, 1, 7, 'Kaji Nojrul Islam', '2021-05-21 23:07:22', NULL, NULL),
(48, 1, 8, 'SYLHET', '2021-05-21 23:07:22', NULL, NULL),
(49, 1, 9, 'Lion', '2021-05-21 23:07:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_08_18_080215_create_products_table', 2),
(7, '2020_08_19_064016_create_questions_table', 3),
(11, '2020_08_22_063859_create_ansers_table', 4),
(12, '2020_08_23_071155_create_ansers_table', 5),
(15, '2020_08_23_084809_create_student_infos_table', 6),
(21, '2020_08_23_232000_create_ansers_table', 7),
(23, '2020_08_26_091817_create_user_ifos_table', 8),
(26, '2020_08_27_070758_create_user_infos_table', 9);

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `Ans`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'What is name of our country?', 'Bangladesh', 'UK', 'USA', 'Canada', 'Bangladesh', '2020-08-19 15:46:52', '2020-08-21 15:17:03', NULL),
(2, 'What day is Bangladesh Independence day?', '16 December', '13 December', '6 December', '1', '16 December', '2020-08-19 15:49:53', NULL, NULL),
(3, 'What year did Bangladesh become independence?', '1949', '1967', '1971', '1948', '1971', '2020-08-19 15:51:57', '2020-08-30 15:17:53', NULL),
(4, 'What date did the war of independence of Bangladesh start?', '2 March', '26 March', '30 March', '25 March', '26 March', '2020-08-19 15:54:38', NULL, NULL),
(5, 'How many months Bangladesh independence?', '8 months', '15 months', '6 months', '9 months', '9 months', '2020-08-19 15:57:36', NULL, NULL),
(6, 'What is name of capital of BANGLADESH?', 'Sylhet', 'Khulna', 'Dhaka', 'Rajshahi', 'DHAKA', '2020-08-19 16:00:20', '2020-08-22 06:23:55', NULL),
(7, 'What is name of national poet of Bangladesh?', 'Kaji Nojrul Islam', 'Zoshim Uddin', 'Sufiya Kamal', 'Shukantho Botajo', 'Kaji Nojrul Islam', '2020-08-19 16:03:16', NULL, NULL),
(8, 'What is the name of the smallest division of BANGLADESH?', 'Dhaka', 'SYLHET', 'Kumilla', 'Borishal', 'Sylhet', '2020-08-19 16:05:16', '2020-08-22 06:16:48', NULL),
(9, 'What is name of national animal of Bangladesh?', 'Tiger', 'Lion', 'Deer', 'Bear', 'Tiger', '2020-08-19 16:07:42', NULL, NULL),
(10, 'What is the national play of Bangladesh?', 'Cricket', 'Foot Ball', 'Badminton', 'Hadudu', 'Hadudu', '2020-08-19 16:10:23', NULL, NULL),
(12, 'What day is international mother language day?', '21 February', '2 February', '1 February', '11 February', '21 February', '2020-08-21 13:54:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT ' 1==admin, 2==user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` int(10) NOT NULL DEFAULT 2 COMMENT '1=admin, 2=user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `user_status`) VALUES
(1, 'Sufian', 'jalalisufian300@gmail.com', NULL, '$2y$10$blHWONuddPtTspOZj.aNmOc78ECTl0n2dHZwFV4Qf8Zh.xA/QWMse', 'MW2b6MDIR27rq9BFBJ4nGvqjswauAXKpG0q7Ph1DSVRrXdNh4EDubXf8H8q6', '2020-08-16 16:46:20', '2020-08-16 16:46:20', 1),
(2, 'Sakib', 'Sakib1@gmail.com', NULL, '$2y$10$rz8vmIArMomd.RDEs55ooOOWdY26tEoDhyuDpdxT1CR/cq6EVf3xe', NULL, '2020-08-31 07:41:34', '2020-08-31 07:41:34', 2),
(4, 'Sabbir', 'Sabbir12@gmail.com', NULL, '$2y$10$usb9fYqYJSMo.CYE.PvfxOnqvJgedC4CfuZrbpVxiefD7TLsmn896', NULL, '2020-09-01 09:47:47', '2020-09-01 09:47:47', 2),
(5, 'admin@gmail.com', 'admin@gmail.com', NULL, '$2y$10$TTiQlOdaKCYjSV8bjjZpC.9scNRZZXmShyhWnJffQj5VJOe3Gzvpa', NULL, '2021-01-09 13:59:32', '2021-01-09 13:59:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ansers`
--
ALTER TABLE `ansers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ansers`
--
ALTER TABLE `ansers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT ' 1==admin, 2==user', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
