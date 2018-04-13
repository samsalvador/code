-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2018 at 12:45 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dropdown`
--
CREATE DATABASE IF NOT EXISTS `dropdown` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dropdown`;

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_value`
--

CREATE TABLE IF NOT EXISTS `dropdown_value` (
  `dropdown_single` varchar(255) NOT NULL,
  `dropdown_multi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropdown_value`
--

INSERT INTO `dropdown_value` (`dropdown_single`, `dropdown_multi`) VALUES
('Cash on Delivery', 'a:2:{i:0;s:17:"$3.99 Shoyu Ramen";i:1;s:18:"$2.99 Chashu Ramen";}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
