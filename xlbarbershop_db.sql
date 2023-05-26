-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 03:46 PM
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
-- Database: `xlbarbershop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_firstname` varchar(255) NOT NULL,
  `a_lastname` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_uid` int(11) NOT NULL,
  `t_firstname` varchar(255) DEFAULT NULL,
  `t_lastname` varchar(255) DEFAULT NULL,
  `t_description` longtext DEFAULT NULL,
  `t_experience` varchar(255) DEFAULT NULL,
  `t_email` varchar(255) DEFAULT NULL,
  `t_mobile` varchar(255) DEFAULT NULL,
  `t_position` varchar(255) DEFAULT NULL,
  `t_whatsapp` varchar(255) DEFAULT NULL,
  `t_facebook` varchar(255) DEFAULT NULL,
  `t_instagram` varchar(255) DEFAULT NULL,
  `t_telegram` varchar(255) DEFAULT NULL,
  `t_youtube` varchar(255) DEFAULT NULL,
  `t_status` varchar(255) DEFAULT NULL,
  `t_img` varchar(255) DEFAULT NULL,
  `t_created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_uid`, `t_firstname`, `t_lastname`, `t_description`, `t_experience`, `t_email`, `t_mobile`, `t_position`, `t_whatsapp`, `t_facebook`, `t_instagram`, `t_telegram`, `t_youtube`, `t_status`, `t_img`, `t_created_date`) VALUES
(23, 'Sophia', 'Ramos', 'My Description', '8', 'sophiaramos@email.com', 'Null', 'manager', 'Null', 'Null', 'Null', 'Null', 'Null', 'active', '267556477627fb3f1ae0eff29cd8a770.jpg', '2023-05-26 // 15:31:48'),
(24, 'Crystal', 'Leonard', 'My Description', '2', 'crystalleonard@email.com', 'Null', 'asistent', 'Null', 'Null', 'Null', 'Null', 'Null', 'deactive', NULL, '2023-05-26 // 15:34:00'),
(25, 'Alina', 'Tarasenko', 'My Description', '5', 'alinatarasenko@email.com', 'Null', 'master', 'Null', 'Null', 'Null', 'Null', 'Null', 'active', '8098daa17f7b8918f6fa4ca16d1bb0c6.jpg', '2023-05-26 // 15:38:21'),
(26, 'Murad', 'Gazymagomedov', 'Ops.No Description!', '12', 'murad.dev@bk.ru', '+994559918540', 'director', '+994559918540', 'https://facebook.com', 'https://instagram.com', 'https://telegram.com', 'https://youtube.com', 'active', 'c841a172fef2255dbf06f43d7808382f.jpg', '2023-05-26 // 15:40:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
