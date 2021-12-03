-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 08:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `total_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempt_questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `quiz_id`, `total_marks`, `attempt_questions`, `result`) VALUES
(2, 2, '3', '3', '33%'),
(3, 3, '4', '4', '0%'),
(4, 4, '4', '4', '25%');

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
(3, '2020_01_01_174432_subjects', 1),
(4, '2020_01_01_175327_questions', 1),
(5, '2020_01_01_181303_create_results_table', 1),
(6, '2020_01_06_101511_create_profiles_table', 2),
(7, '2020_01_06_103024_create_quizzes_table', 3),
(14, '2020_01_16_075355_create_marks_table', 4),
(15, '2020_01_20_121647_add_time_to_subjects_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `fullname`, `phone`, `address`, `user_pic`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ahsan pitafi', '123456', 'tousa shareef', 'adnan.jpg', '2020-01-08 05:50:38', '2020-01-21 03:23:15'),
(2, 2, 'Admin', '1234567', 'Swat', 'admin.jpg', '2020-01-10 08:07:21', '2020-01-20 03:31:35'),
(3, 3, NULL, NULL, NULL, NULL, '2020-01-11 03:00:49', '2020-01-11 03:00:49'),
(4, 4, NULL, NULL, NULL, NULL, '2020-01-11 03:07:23', '2020-01-11 03:07:23'),
(5, 5, 'Jawad khan', '12345', 'swat', 'IMAG0556.jpg', '2020-01-11 03:11:11', '2020-01-17 09:24:47'),
(6, 6, NULL, NULL, NULL, NULL, '2020-01-15 05:58:07', '2020-01-15 05:58:07'),
(7, 7, NULL, NULL, NULL, NULL, '2020-01-15 06:23:48', '2020-01-15 06:23:48'),
(8, 8, 'adnan khan', '123556789', 'swat', 'adnan2.jpg', '2020-01-23 08:10:43', '2020-01-23 08:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rightAns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `questions`, `option1`, `option2`, `option3`, `option4`, `rightAns`, `created_at`) VALUES
(1, 1, 'PHP Stands for?', 'PHP Hypertex Processor', 'PHP Hyper Markup Processor', 'PHP Hyper Markup Preprocessor', 'PHP Hypertext Preprocessor', 'PHP Hypertext Preprocessor', '2020-01-08 10:49:03'),
(4, 1, 'Who is known as the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 'Drek Kolkevi', '2020-01-08 12:07:41'),
(5, 1, 'Which of the following is not true?', 'PHP can be used to develop web applications.', 'PHP makes a website dynamic.', 'PHP applications can not be compile.', 'PHP can not be embedded into html.', 'PHP applications can not be compile.', '2020-01-10 12:08:51'),
(6, 2, 'HTML is what type of language ?', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Programming Language', '2020-01-10 12:14:37'),
(7, 2, 'HTML uses', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language', '2020-01-10 12:16:11'),
(10, 1, 'Which of the following variables is not a predefined variable?', '$get', '$get', '$get', '$get', '$ask', '2020-01-22 13:19:13'),
(11, 2, 'A webpage displays a picture. What﻿﻿﻿ ﻿﻿tag ﻿﻿﻿﻿﻿was used to display that picture?', 'picture', 'picture', 'picture', 'picture', 'img', '2020-01-23 13:21:09'),
(12, 2, '<b> tag makes the enclosed text bold. What is other tag to make text bold?', '<strong>', '<strong>', '<strong>', '<strong>', '<strong>', '2020-01-23 13:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `subject_id`, `profile_id`, `start_time`, `end_time`, `created_at`) VALUES
(2, 1, 1, '2020-01-21 10:30:17', '2020-01-21 10:30:29', '2020-01-21 10:30:29'),
(3, 1, 2, '2020-01-23 12:32:33', '2020-01-23 12:32:48', '2020-01-23 12:32:48'),
(4, 1, 8, '2020-01-23 13:11:23', '2020-01-23 13:11:41', '2020-01-23 13:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `rightAns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrongAns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unattempted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `quiz_id`, `question_id`, `rightAns`, `wrongAns`, `unattempted`, `created_at`) VALUES
(4, 2, 1, 'PHP Hypertext Preprocessor', NULL, NULL, '2020-01-21 10:30:29'),
(5, 2, 4, NULL, 'Willam Makepiece', NULL, '2020-01-21 10:30:29'),
(6, 2, 5, NULL, 'PHP can not be embedded into html.', NULL, '2020-01-21 10:30:29'),
(7, 3, 1, NULL, 'PHP Hypertex Processor', NULL, '2020-01-23 12:32:48'),
(8, 3, 4, NULL, 'List Barely', NULL, '2020-01-23 12:32:48'),
(9, 3, 5, NULL, 'PHP can not be embedded into html.', NULL, '2020-01-23 12:32:48'),
(10, 3, 10, NULL, '$get', NULL, '2020-01-23 12:32:48'),
(11, 4, 1, NULL, 'PHP Hyper Markup Preprocessor', NULL, '2020-01-23 13:11:41'),
(12, 4, 4, 'Drek Kolkevi', NULL, NULL, '2020-01-23 13:11:41'),
(13, 4, 5, NULL, 'PHP makes a website dynamic.', NULL, '2020-01-23 13:11:41'),
(14, 4, 10, NULL, '$get', NULL, '2020-01-23 13:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subjects` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjects`, `created_at`, `time`) VALUES
(1, 'Php', '2020-01-23 13:34:33', '30'),
(2, 'Html', '2020-01-23 13:34:25', '30'),
(3, 'Css', '2020-01-23 13:34:17', '30'),
(4, 'IOS', '2020-01-23 13:34:09', '30'),
(5, 'C++', '2020-01-23 13:34:02', '30'),
(6, 'Mathematics', '2020-01-23 13:33:54', '40'),
(7, 'Physics', '2020-01-23 13:33:44', '20'),
(8, 'chemistry', '2020-01-23 13:13:35', '20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'ihsan@gmail.com', NULL, '$2y$10$i3JiDL5iDdGe/TsSXKkixuucC2dI3OmSKtzetUiGwo4aSycEYgTnO', 'user', '2020-01-08 05:50:38', '2020-01-08 05:50:38'),
(2, 'adnan@gmail.com', NULL, '$2y$10$AsdHKEkVTTBh5D80NzHVLOr1G4HDsnWMRHckS6yFDEr7o4UNHcmP6', 'admin', '2020-01-10 08:07:21', '2020-01-10 08:07:21'),
(3, 'imran@gmail.com', NULL, '$2y$10$RRjqqymDA8szPX7yjaqG2e20ZoT4GV9uRMMQwvwpq7K3pwatHkDSK', 'user', '2020-01-11 03:00:49', '2020-01-11 03:00:49'),
(4, 'jamel@gmail.com', NULL, '$2y$10$CrDekm1WMQgc6EFyGPCa.eDi7D2JGX5TCsbcchKYcGSRBcQSGSMSe', 'user', '2020-01-11 03:07:23', '2020-01-11 03:07:23'),
(5, 'jawad@gmail.com', NULL, '$2y$10$yu0/u05VJnMit7739YgrnuW1as1HwkG9b/Yt.4z8TrCZebUR4NwpG', 'user', '2020-01-11 03:11:11', '2020-01-11 03:11:11'),
(6, 'tufail@gmail.com', NULL, '$2y$10$VjIhx/nAEfbeZ9ci6GcDjeUPoIAw0kOiYK/PVfjdLgMGYYrclXy9e', 'user', '2020-01-15 05:58:07', '2020-01-15 05:58:07'),
(7, 'zain@gmail.com', NULL, '$2y$10$wdwU7Ox2qF3.X3g/pdm7Su0zeDS890A8SiLcozvanW2omLSHQjUmS', 'user', '2020-01-15 06:23:48', '2020-01-15 06:23:48'),
(8, 'adnankhan@gmail.com', NULL, '$2y$10$wkEUuo64lvKK9ezlWmMvI.H.R1wOPsgmABsukXUKKoZDXN3fFR63K', 'user', '2020-01-23 08:10:43', '2020-01-23 08:10:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_phone_unique` (`phone`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questions_questions_unique` (`questions`),
  ADD UNIQUE KEY `questions_rightans_unique` (`rightAns`),
  ADD UNIQUE KEY `questions_option4_unique` (`option4`),
  ADD UNIQUE KEY `questions_option3_unique` (`option3`),
  ADD UNIQUE KEY `questions_option2_unique` (`option2`),
  ADD UNIQUE KEY `questions_option1_unique` (`option1`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_subjects_unique` (`subjects`);

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
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
