-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 03:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse485`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `CMT` varchar(12) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthday` date NOT NULL,
  `nation` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `placeofbirth` varchar(55) NOT NULL,
  `graduationyear` int(4) NOT NULL,
  `academicpower` varchar(20) NOT NULL,
  `conduct` varchar(20) NOT NULL,
  `dayranger` date NOT NULL,
  `issuedby` varchar(55) NOT NULL,
  `household` varchar(255) NOT NULL,
  `MaTinh10` varchar(20) NOT NULL,
  `city10` varchar(55) NOT NULL,
  `MaTruong10` varchar(20) NOT NULL,
  `TenTruong10` varchar(255) NOT NULL,
  `MaTinh11` varchar(20) NOT NULL,
  `city11` varchar(55) NOT NULL,
  `MaTruong11` varchar(20) NOT NULL,
  `TenTruong11` varchar(255) NOT NULL,
  `MaTinh12` varchar(20) NOT NULL,
  `city12` varchar(55) NOT NULL,
  `MaTruong12` varchar(20) NOT NULL,
  `TenTruong12` varchar(255) NOT NULL,
  `object` varchar(255) NOT NULL,
  `area` varchar(20) NOT NULL,
  `addresh` varchar(255) NOT NULL,
  `SDTThiSinh` int(13) NOT NULL,
  `SDTPhuHuynh` int(13) NOT NULL,
  `method` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`CMT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
