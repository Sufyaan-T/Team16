-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2022 at 11:16 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `information` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `price`, `information`) VALUES
(2, 'stormblood.jfif', 'Final Fantasy XIV: Stormblood Expansion', '23', 'This is an expansion-only purchase to the MMORPG Final Fantasy XIV Online and does not come with the'),
(3, 'ffxiv.jpg', 'Final Fantasy XIV: Endwalker', '60.00', 'This product includes all previous expansions of FFXIV including the new one Endwalker.'),
(5, 'MW2.jpg', 'Modern Warfare 2', '68.00', 'Call of duty has a lot of hackers if you are into that play it.'),
(6, 'GOWR.jpg', 'God Of War: Ragnarok', '70.00', 'Play as Kratos the slayer of gods and men.'),
(7, 'spiderman.jpg', 'Spiderman', '56.00', 'Play Peter Parker while he saves New York from dangerous criminals and villains'),
(8, 'eldenringhd.jpg', 'Elden Ring: GOTY Edition', '35.00', 'Elden Ring is an open-world game, with amazing areas to explore!'),
(13, 'image.png', 'hutch', '1000', 'hutch');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
