-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2023 at 05:32 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_64`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(20) NOT NULL,
  `code_number` varchar(100) COLLATE utf8mb4_croatian_ci NOT NULL,
  `Thai_name` varchar(100) COLLATE utf8mb4_croatian_ci NOT NULL,
  `Eng_name` varchar(100) COLLATE utf8mb4_croatian_ci NOT NULL,
  `major` varchar(100) COLLATE utf8mb4_croatian_ci NOT NULL,
  `brithday` varchar(100) COLLATE utf8mb4_croatian_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `code_number`, `Thai_name`, `Eng_name`, `major`, `brithday`, `img`) VALUES
(2, '644259044', 'อาภาพัชร์ ยิบรัมย์', 'Arpapat Yipram', 'software engineer', '24 ตุลาคม 2545', 'IMG_5654.jpg'),
(3, '644259031', 'นิติ สุระคงคา', 'Niti Surakongka', 'software engineer', '21 กุมภาพันธ์ 2546', '123.jpg'),
(4, '644259005', 'กฤษณะ โหรา', 'Kitsana Hora', 'software engineer', '11 ตุลาคม 2545', '001.jpg'),
(5, '644259049', 'กิตติพงศ์ เดชจิต', 'Kittipong Dachjit', 'software engineer', '1 มกราคม 2546', '456.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
