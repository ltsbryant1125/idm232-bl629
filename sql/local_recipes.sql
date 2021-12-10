-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 10, 2021 at 06:15 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local_idm232`
--

-- --------------------------------------------------------

--
-- Table structure for table `local_recipes`
--

CREATE TABLE `local_recipes` (
  `id` int(11) NOT NULL,
  `Title` varchar(250) NOT NULL,
  `file_path` varchar(250) NOT NULL,
  `Notes` text NOT NULL,
  `Ingredients` text NOT NULL,
  `Directions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `local_recipes`
--

INSERT INTO `local_recipes` (`id`, `Title`, `file_path`, `Notes`, `Ingredients`, `Directions`) VALUES
(19, 'Anglo Chicken', '/images/ancho-orange-chicken.jpg', 'FSD', 'aewfw', 'awef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `local_recipes`
--
ALTER TABLE `local_recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local_recipes`
--
ALTER TABLE `local_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
