-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 04:38 AM
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
-- Database: `3a`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` longtext DEFAULT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `stamp`) VALUES
(2, 'Aldin', 'a@gmail.com', 'MWExZGM5MWM5MDczMjVjNjkyNzFkZGYwYzk0NGJjNzI=', '2023-11-25 03:32:36'),
(3, 'Stain', 'a@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:32:57'),
(4, 'james condes', 'a@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:19:13'),
(5, 'james condes', 'a@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:19:14'),
(6, 'james condes', 'a@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:19:15'),
(7, 'james condes', 'a@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:19:17'),
(9, 'james condes', 'hr@gmail.com', '1a1dc91c907325c69271ddf0c944bc72', '2023-11-25 03:36:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
