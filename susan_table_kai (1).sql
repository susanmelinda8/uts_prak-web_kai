-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 06:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106093_susan`
--

-- --------------------------------------------------------

--
-- Table structure for table `susan_table_kai`
--

CREATE TABLE `susan_table_kai` (
  `id` int(24) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telpon` int(33) NOT NULL,
  `ktp` int(33) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(37) NOT NULL,
  `password` int(43) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `susan_table_kai`
--

INSERT INTO `susan_table_kai` (`id`, `nama`, `alamat`, `telpon`, `ktp`, `email`, `username`, `password`) VALUES
(0, 'g', 'h', 0, 0, 'ghg', 'ghg', 40),
(0, 'g', 'h', 0, 0, 'ghg', 'ghg', 40),
(0, 'susan', 'kp.bojong', 2147483647, 98, 'susan.com', 'susan', 202),
(0, 'susan melinda', 'kp jinten', 2147483647, 2147483647, '180403melinda@gmail.com', 'susan', 25),
(0, 'susan melinda', 'kp jinten', 2147483647, 2147483647, '180403melinda@gmail.com', 'susan', 25);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
