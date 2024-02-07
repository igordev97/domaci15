-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Feb 07, 2024 at 12:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domaci15`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `product_description` text NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `price`, `img_name`) VALUES
(4, 'Sony', 'Kao novo', 200, 'alexey-savchenko-k4Akpt5-Sfk-unsplash.jpg'),
(5, 'Pivo Gaajba', 'Ne pijem dobio sam na poklon', 20, '403415187_670415865122215_5618146793137933832_n.jpg'),
(6, 'Audi a6', 'Nov nov nov', 25500, 'olav-tvedt-yq-efMJMuPg-unsplash.jpg'),
(12, 'Sony 5', 'korisceno par meseci', 450, 'alexey-savchenko-k4Akpt5-Sfk-unsplash.jpg'),
(13, 'sONY 4', 'Polovno ', 200, 'alexey-savchenko-k4Akpt5-Sfk-unsplash.jpg'),
(20, 'Xbox Series S', 'Jako zanimnjiva konzola', 300, '039197_slika.jpg'),
(21, 'Xbox Series X ', 'Konzola je novije generacije dolazi sa 2 dzojstika', 600, '6428324_sd.jpg'),
(22, 'God of War - Disc Edition PS4', 'Disk je jako dobro ocuvan.\r\nDolazi u svoj originalnom pakovanju', 10, 'godofwar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
