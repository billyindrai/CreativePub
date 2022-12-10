-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 11:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative_pub`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_payment`
--

CREATE TABLE `info_payment` (
  `namaPayment` varchar(255) NOT NULL,
  `companyNamePayment` varchar(255) DEFAULT NULL,
  `countryPayment` varchar(255) NOT NULL,
  `addressPayment` varchar(255) NOT NULL,
  `cityPayment` varchar(255) NOT NULL,
  `regionPayment` varchar(255) NOT NULL,
  `postCodePayemnt` varchar(255) DEFAULT NULL,
  `idPayment` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_payment`
--
ALTER TABLE `info_payment`
  ADD PRIMARY KEY (`idPayment`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
