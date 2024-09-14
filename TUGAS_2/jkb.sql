-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 04:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `sks` int(15) NOT NULL,
  `hours` int(11) NOT NULL,
  `meeting` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `sks`, `hours`, `meeting`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2', 'Katrina Devianti', 22, 8, 1, '2024-09-12 08:25:01', '2024-09-12 08:25:37', '2024-09-12 08:25:37'),
(2, '2', 'Noni Aprillia', 20, 8, 2, '2024-09-13 07:30:30', '2024-09-13 07:30:30', '2024-09-13 07:30:30'),
(3, '3', 'Shela Jaya', 22, 8, 3, '2024-09-14 02:41:32', '2024-09-14 02:41:32', '2024-09-14 02:41:32'),
(4, 'NEW101', 'Danielle', 3, 45, 15, '2024-09-14 02:44:28', '2024-09-14 02:44:28', '2024-09-14 02:44:28'),
(5, 'NEW102', 'Hanni', 4, 60, 20, '2024-09-14 02:44:28', '2024-09-14 02:44:28', '2024-09-14 02:44:28'),
(6, 'NEW103', 'Haerin', 3, 45, 15, '2024-09-14 02:44:28', '2024-09-14 02:44:28', '2024-09-14 02:44:28'),
(7, 'NEW104', 'Hyein', 3, 45, 15, '2024-09-14 02:44:28', '2024-09-14 02:44:28', '2024-09-14 02:44:28'),
(8, 'NEW105', 'Minji', 3, 45, 15, '2024-09-14 02:44:28', '2024-09-14 02:44:28', '2024-09-14 02:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `course_classes`
--

CREATE TABLE `course_classes` (
  `id` int(11) NOT NULL,
  `student_class_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_classes`
--

INSERT INTO `course_classes` (`id`, `student_class_id`, `course_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2024-09-13 07:30:59', '2024-09-13 07:30:59', '2024-09-13 07:30:59'),
(2, 2, 3, '2024-09-13 07:31:34', '2024-09-13 07:31:34', '2024-09-13 07:31:34'),
(3, 1, 4, '2024-09-14 02:48:28', '2024-09-14 02:48:28', '2024-09-14 02:48:28'),
(4, 2, 5, '2024-09-14 02:48:28', '2024-09-14 02:48:28', '2024-09-14 02:48:28'),
(5, 3, 6, '2024-09-14 02:48:28', '2024-09-14 02:48:28', '2024-09-14 02:48:28'),
(6, 4, 7, '2024-09-14 02:48:28', '2024-09-14 02:48:28', '2024-09-14 02:48:28'),
(7, 5, 8, '2024-09-14 02:48:28', '2024-09-14 02:48:28', '2024-09-14 02:48:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_classes`
--
ALTER TABLE `course_classes`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
