-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2021 at 05:25 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datatable_example`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidney`
--

DROP TABLE IF EXISTS `kidney`;
CREATE TABLE IF NOT EXISTS `kidney` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidney`
--

INSERT INTO `kidney` (`id`, `username`, `email`, `mobile`, `city`) VALUES
(1, 'pki-validation', 'user@gmail.com', '8887919632', 'Lucknow'),
(2, 'Rajs', 'user@gmail.com', '8887919632', 'Lucknow'),
(4, 'Amrendra', 'user@gmail.com', '434334', 'Lucknow'),
(5, 'Bahubalis', 'user@gmail.com', '434334', 'Lucknow'),
(6, 'Alok Kumar bisht', 'user@gmail.com', '434334', 'Lucknow'),
(7, 'admin', 'admin@gmail.com', '9988999999', 'Lucknow'),
(8, 'ninebroadband', 'superadmin@gmail.com', '8127956219', 'Lucknow'),
(9, 'index.html', 'superadmin@gmail.com', '8127956219', 'Lucknow'),
(10, 'index.html', 'user@gmail.com', '8127956219', 'Lucknow'),
(11, 'sfd', 'sfdasf@Gmail.com', 'adsffsaf', 'safdsa'),
(12, 'sfd', 'sfdasf@Gmail.com', 'adsffsaf', 'safdsa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
