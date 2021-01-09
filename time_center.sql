-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 06:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `price`, `cover`, `created_at`, `updated_at`) VALUES
(7, 'Web Design and Developer', 'A web designer is a graphic artist who develops and styles objects for the Internet. Website designers are able to tap into their creative energy and design the overall layout and look for websites.', '14000.00', '4mGDTW2tdw2cSnsqZ8rOTlY70I6T41DaiG4deveT.jpeg', '2021-01-05 12:08:04', '2021-01-09 09:13:19'),
(8, 'Graphic design', 'Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques designers use typography and pictures to meet users', '15000.00', 'bos7WejvpRKc5qugHPagMfczJjsiNi9FVbIAEBIX.jpeg', '2021-01-09 09:06:50', '2021-01-09 09:13:06'),
(9, 'Pharmacy', 'Pharmacy is a subject which deals with the techniques of preparing and dispensing drugs. ... Some of the courses covered by this degree consist of: Pharmaceutics, Medicinal Chemistry, Pharmacognosy, and Pharmacy Practice.', '20000.00', 'xwgscA0sQkZkmykrBDdPYWlL6zdyTWHsbLjbvrki.jpeg', '2021-01-09 09:23:23', '2021-01-09 09:23:23'),
(11, 'BBA', 'BBA is an undergraduate Business Management Course. The full form of BBA is \"Bachelor of Business Administration.\" BBA Course is designed to provide a basic understanding of management education.', '30000.00', 'hxqnsrDq68ZMxUefrlA0i5Un10y5o5o9Xwn1Xifn.jpeg', '2021-01-09 09:25:17', '2021-01-09 09:25:17'),
(12, 'Bachelor of Law (LLB 2 Years)', '2 years LLB program is 60-credit 20 courses degree providing quality law education at professionals levels. Course work features practices, as well enable students to work effectively.', '24000.00', 'oCj9EEk43lyaPKpfmF5BVdw5anZLpo2RC2Hu6yQV.jpeg', '2021-01-09 09:40:01', '2021-01-09 09:40:01');

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
(4, '2020_09_11_092516_create_courses_table', 1),
(5, '2020_09_24_181921_create_course_table', 1),
(8, '2020_12_21_144221_create_teachers_table', 2),
(10, '2020_12_30_155710_create_students_table', 3);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(30) NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`, `class`, `thumb`, `roll`, `created_at`, `updated_at`) VALUES
(2, 'Himon Talukdar', 26, 'BSC in CSE', 'zrZnBqZX583yzpDvdKDTTFMo3jHWZ2JIF2ybwBQ1.jpeg', 3, '2020-12-30 10:22:42', '2021-01-09 09:51:42'),
(3, 'Md Toriqul Islam', 25, 'BSC in CSE', 'FQEcbF60qaNaStOkFm3wi7vhLZTY6PPjx3DRdNOK.jpeg', 63, '2021-01-09 09:53:31', '2021-01-09 09:53:31'),
(4, 'Md Shakil Hossian', 28, 'BSC in CSE', 'k7AHkKudiXzsSfhRrIZHWn21LTZGU9SUo204J6VQ.jpeg', 87, '2021-01-09 09:55:28', '2021-01-09 09:55:28'),
(5, 'Md Saddam Hossian', 25, 'BSC in CSE', '4ftGLMbMhF1Cwmh8myFPDqAhR3hEgxRBcOk4H9X8.jpeg', 44, '2021-01-09 09:57:12', '2021-01-09 09:57:12'),
(6, 'Mukitor Rahman', 28, 'BSC in CSE', 'aX3MRlat4ZDjTRRL5nvQPM9Vhnb8LusagiEgS6Lw.jpeg', 31, '2021-01-09 10:00:36', '2021-01-09 10:00:36'),
(7, 'Md Ranasarkar', 26, 'BSC in CSE', '6uXHgrlxr9rRecQ0x9Y4T00FzRMaRyfdrRyzB1Lf.jpeg', 43, '2021-01-09 10:16:47', '2021-01-09 10:16:47'),
(8, 'Md Arifur Rahman', 28, 'BSC in CSE', 'CvZT34rzNAZWe6mPfzFsH0zkFZhH5Mkm2dMopZWr.jpeg', 96, '2021-01-09 10:19:43', '2021-01-09 10:19:43'),
(9, 'Iskander Hossain', 26, 'BSC in CSE', 'q6XX63ZSMoZlbYXBn4qGPv2XpWD03FJCmGTexkk2.jpeg', 24, '2021-01-09 10:21:19', '2021-01-09 10:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` enum('CSE','BBA','EEE','LAW','PHARMACY','ARCHITECTURE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `age`, `thumb`, `qualification`, `department`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dr. Uzzal Kumar Prodhan', 45, 'OQjyHhyiB0nKcZXzaqEefAqWRsc5ZvUddUaCf48b.jpeg', 'Dr', 'CSE', '2021-01-05 11:32:25', '2021-01-05 11:32:25', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mukitor Rahman', 'abcd@gmail.com', NULL, '$2y$10$Pyb5xr63V07lZ6EjbKAcouAaIGHkjuS4gkJo54.Wgu5D.zAcjJ7ay', NULL, '2020-11-16 11:10:28', '2020-11-16 11:10:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
