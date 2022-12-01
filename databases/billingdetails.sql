-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 11:15 PM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u_160056307_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingdetails`
--

CREATE TABLE `billingdetails` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `billingemail` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nameOnCard` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `debitCardNumber` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `county` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `postcode` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `expyear` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `expmonth` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cvv` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `productprice` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `billingdetails`
--

INSERT INTO `billingdetails` (`id`, `name`, `billingemail`, `nameOnCard`, `address`, `debitCardNumber`, `city`, `county`, `postcode`, `expyear`, `expmonth`, `cvv`, `product`, `productprice`, `date`) VALUES
(2, 'Pantelis Xiourouppas', 'cyanpantyx@hotmail.com', 'PANTELIS', '46 Camp Hill, Ocean Boat, STOURBRIDGE', '1231231312231', 'Birmingham', 'West Midlands ', 'DY8 4AD', '12', '123', '12', 'Final Fantasy XIV: Stormblood Expansion', 23, '2022-11-30 17:58:58'),
(3, 'Pantelis Xiourouppas', 'cyanpantyx@hotmail.com', 'PANTELIS', '46 Camp Hill, Ocean Boat, STOURBRIDGE', '123', 'Birmingham', 'West Midlands ', 'DY8 4AD', '123', '123', '123', 'Final Fantasy XIV: Endwalker', 60, '2022-11-30 18:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingdetails`
--
ALTER TABLE `billingdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billingdetails`
--
ALTER TABLE `billingdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
