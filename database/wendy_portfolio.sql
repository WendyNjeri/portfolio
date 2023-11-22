-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 11:48 AM
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
-- Database: `wendy_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `reachout`
--

CREATE TABLE `reachout` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reachout`
--

INSERT INTO `reachout` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'admin@gmail.com', 'wendynjerim@gmail.com', '254786286190', 'nm'),
(2, 'admin', 'admin@admin.com', '254786286190', 'opop'),
(3, 'test', 'testuser@gmail.com', '254704028120', 'test'),
(4, 'test', 'testuser@gmail.com', '254 704 028120', 'test'),
(5, 'test', 'testuser@gmail.com', '254 704 028120', 'nhjm,'),
(6, 'admin@admin.com', 'wendynjerim@gmail.com', '25486286190', 'yes!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reachout`
--
ALTER TABLE `reachout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reachout`
--
ALTER TABLE `reachout`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
