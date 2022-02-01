-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 07:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `hobbies` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1.listen music,2.reading book,3.watching youtube\r\n',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role_id`, `first_name`, `last_name`, `date_of_birth`, `phone`, `email`, `password`, `profile_image`, `hobbies`, `status`, `updated_at`, `created_at`) VALUES
(3, 1, 'Robin', 'Kumar', '02-04-1997', '', 'admin@test.com', '$2y$10$QMAUWqmQsp8xJFCwU2qqOuwLrkVWsh.PQ4RDGU0rTfXphxcyFk4CW', 'Robin', 1, 1, '2022-02-01 09:24:22', '2022-02-01 09:24:22'),
(4, 2, 'Mehak', 'Gulati', '18-sep-1998', '', '', '$2y$10$QMAUWqmQsp8xJFCwU2qqOuwLrkVWsh.PQ4RDGU0rTfXphxcyFk4CW', 'Mehak', 1, 1, '2022-02-01 09:30:54', '2022-02-01 09:30:54'),
(5, 2, 'Mehak', 'Gulati', '18-sep-1998', '', '', '$2y$10$JdujudEeS5T1nxK2KaHyqudmmPzgVtfloIKUzkB8wUttkFaJSFi5q', 'Mehak', 1, 1, '2022-02-01 09:31:22', '2022-02-01 09:31:22'),
(6, 2, 'jake', 'jake', '02-04-1997', '', '', '$2y$10$Cos4mkl7e6Vs0U6Un/gpoeOVbqBlD7KA3UULE4V2zT5J440avBWvm', 'jake', 3, 1, '2022-02-01 09:55:50', '2022-02-01 09:55:50'),
(7, 2, 'Robin', 'Kumar', '02/11/2022', '', '', '$2y$10$1IGQ0EuanUatKYijMB2xxOmHexUaype7yvinGAvY3v0pI8RAFOme6', '', 2, 1, '2022-02-01 10:05:02', '2022-02-01 10:05:02'),
(8, 2, 'Robin', 'Kumar', '10/18/2021', '', '', '$2y$10$no96dCHHyENwNyWrqTUJGOkMgDAL3fOd3WCauSq3j/3lAT5BUtPRW', '1643731326.png', 3, 1, '2022-02-01 10:32:06', '2022-02-01 10:32:06'),
(9, 2, 'Robin', 'Kumar', '09/20/2021', '7488796714', 'hkl@idispatch.com', '$2y$10$KdIlVPVMrbVmA5pDZ0nlOOdCJ8AuNCaDKM4n2SU1ynzf0NW1Qvpam', '1643734923.jpg', 3, 1, '2022-02-01 11:32:04', '2022-02-01 11:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `role_id` varchar(255) NOT NULL COMMENT '1.Admin,2.users',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, '1', '2022-02-01 14:55:40', NULL),
(3, 5, '2', '2022-02-01 09:31:22', '2022-02-01 09:31:22'),
(4, 6, '2', '2022-02-01 09:55:50', '2022-02-01 09:55:50'),
(5, 7, '2', '2022-02-01 10:05:02', '2022-02-01 10:05:02'),
(6, 8, '2', '2022-02-01 10:32:06', '2022-02-01 10:32:06'),
(7, 9, '2', '2022-02-01 11:32:04', '2022-02-01 11:32:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
