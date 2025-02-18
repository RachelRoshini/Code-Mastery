-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 02:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Id`, `Email`, `Password`) VALUES
(1, 'racros@gmail.com', 'rose26');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Id` int(250) NOT NULL,
  `Coursename` varchar(500) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Duration` varchar(500) NOT NULL,
  `Time` varchar(500) NOT NULL,
  `Instructor` varchar(500) NOT NULL,
  `Coursefees` varchar(500) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Id`, `Coursename`, `Image`, `Duration`, `Time`, `Instructor`, `Coursefees`, `Description`, `Link`) VALUES
(1, 'Laravel', 'laravel.jpg', '3 Months', '9am-1pm', 'Miss.Barathi', '12000', 'Laravel is a robust PHP framework that streamlines web development with its elegant syntax and powerful built-in tools.', 'https://meet.google.com/fzf-qmgu-tuq'),
(2, 'Python', 'python.jpg', '3 Months', '10am-1pm', 'Mr.Aaron', '15000', 'Python is a versatile, easy-to-learn programming language used for various applications.', 'https://meet.google.com/zqw-riwg-hox'),
(3, 'Java', 'java.jpg', '4 Months', '10:30am-01:30pm', 'Mrs.Sunitha', '18000', 'Java is a object-oriented programming language known for its portability and performance across platforms.', 'https://meet.google.com/eik-bnve-pgr'),
(4, 'ReactJS', 'reactjs.jpg', '3 Months', '10am-1pm', 'Mr.Varun', '16000', 'ReactJS is a JavaScript library for building user interfaces, known for its component-based architecture and efficient rendering.', 'https://meet.google.com/vir-yfjo-vfk'),
(5, 'PHP', 'php1.jpg', '3 Months', '10am-1pm', 'Miss.Abitha', '10000', 'PHP is a server-side language used to create dynamic web pages and interact with databases.', 'https://meet.google.com/eyj-sjjk-qhm'),
(6, 'NodeJS', 'nodejs.jpg', '4 Months', '10am-1pm', 'Mr.Suresh', '11000', 'Node.js is a JavaScript runtime built on Chrome\'s V8 engine for building scalable server-side applications.', 'https://meet.google.com/mdj-ptfk-ysx');

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
-- Table structure for table `join_course`
--

CREATE TABLE `join_course` (
  `Id` int(250) NOT NULL,
  `Coursename` varchar(500) NOT NULL,
  `Duration` varchar(500) NOT NULL,
  `Time` varchar(500) NOT NULL,
  `Instructor` varchar(500) NOT NULL,
  `Coursefees` varchar(500) NOT NULL,
  `Status` int(11) NOT NULL,
  `userid` int(250) NOT NULL,
  `Link` varchar(500) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `join_course`
--

INSERT INTO `join_course` (`Id`, `Coursename`, `Duration`, `Time`, `Instructor`, `Coursefees`, `Status`, `userid`, `Link`) VALUES
(1, 'ReactJS', '3 Months', '10am-1pm', 'Mr.Varun', '16000', 1, 1, 'https://meet.google.com/vir-yfjo-vfk'),
(2, 'NodeJS', '4 Months', '10am-1pm', 'Mr.Suresh', '11000', 1, 4, 'https://meet.google.com/mdj-ptfk-ysx'),
(3, 'Laravel', '3 Months', '9am-1pm', 'Miss.Barathi', '12000', 1, 3, 'https://meet.google.com/fzf-qmgu-tuq'),
(4, 'Java', '4 Months', '10:30am-01:30pm', 'Mrs.Sunitha', '18000', 2, 5, 'https://meet.google.com/eik-bnve-pgr'),
(5, 'PHP', '3 Months', '10am-1pm', 'Miss.Abitha', '10000', 1, 2, 'https://meet.google.com/eyj-sjjk-qhm'),
(6, 'Python', '3 Months', '10am-1pm', 'Mr.Aaron', '15000', 2, 2, 'https://meet.google.com/zqw-riwg-hox'),
(7, 'Java', '4 Months', '10:30am-01:30pm', 'Mrs.Sunitha', '18000', 0, 2, 'https://meet.google.com/eik-bnve-pgr');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `Id` int(250) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `PhoneNo` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ConfirmPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`Id`, `Name`, `PhoneNo`, `Email`, `Password`, `ConfirmPassword`) VALUES
(1, 'Sahaya Rani', '9876547909', 'sahayarani26@gmail.com', 'rani26', 'rani26'),
(2, 'Alex', '9988776655', 'alex15@gmail.com', 'alex15', 'alex15'),
(3, 'Roshan', '9631470564', 'roshan15@gmail.com', 'roshan15', 'roshan15'),
(4, 'Sam', '9537925719', 'sam123@gmail.com', 'sam123', 'sam123'),
(5, 'Sheeba', '9740279462', 'sheeba21@gmail.com', 'sheeba21', 'sheeba21');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `join_course`
--
ALTER TABLE `join_course`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`Id`);

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
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `join_course`
--
ALTER TABLE `join_course`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
