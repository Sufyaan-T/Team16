 lines (102 sloc)  2.71 KB

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 07:39 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs2tp`
--

-- --------------------------------------------------------

--
-- creating Table structure for table `DiscussionTable`
--

CREATE TABLE `DiscussionTable` (
  `id` int(100) NOT NULL,AUTO_INCREMENT
  `name` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `DatePosted` timestamp current_timestamp  NOT NULL
  `Ratings` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Making 'id' primary key for table `DiscussionTable`
--
ALTER TABLE `DiscussionTable`
ADD PRIMARY KEY (`id`);

/*Inserting data into the DiscussionTable table. Allowing users to be able to look at other people's posts
*/

INSERT INTO `DiscussionTable` (`name`, `Comment`) VALUES
('Benjii', 'I really like the website','5'),
('Rilah','This website looks bad','1'),
('Tega ', 'There is a wide variety of games to choose from','4');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;