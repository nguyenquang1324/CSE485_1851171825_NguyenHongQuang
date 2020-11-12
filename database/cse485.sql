-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 03:57 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IDadmin` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `SDT` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDadmin`, `fullname`, `username`, `pass`, `email`, `SDT`) VALUES
(1, 'noname', 'noname', '123', 'a@gmail.com', '123');

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
  `address` varchar(255) NOT NULL,
  `SDTThiSinh` int(13) NOT NULL,
  `SDTPhuHuynh` int(13) NOT NULL,
  `method` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`CMT`, `fullname`, `gender`, `birthday`, `nation`, `religion`, `placeofbirth`, `graduationyear`, `academicpower`, `conduct`, `dayranger`, `issuedby`, `household`, `MaTinh10`, `city10`, `MaTruong10`, `TenTruong10`, `MaTinh11`, `city11`, `MaTruong11`, `TenTruong11`, `MaTinh12`, `city12`, `MaTruong12`, `TenTruong12`, `object`, `area`, `address`, `SDTThiSinh`, `SDTPhuHuynh`, `method`, `image`) VALUES
('101', 'Đoàn Quang Linh', 'nam', '2020-11-10', 'Kinh', 'Không', 'Hà Nội', 2020, 'giỏi', 'tốt', '2020-11-10', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 222, 222, '3', ''),
('102', 'Đoàn Quang Linh', 'nam', '2020-11-11', 'Kinh', 'Không', 'Hà Nội', 2020, 'giỏi', 'tốt', '2020-11-10', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 111, 32, '0', ''),
('103', 'phùng thị thu hường', 'nữ', '2020-11-08', 'Kinh', 'Không', 'Hà Nội', 2019, 'giỏi', 'tốt', '2020-11-02', 'Hà Nội', 'ba vì', 'a', 'Hồ Chí Minh', 'b', 'a', 'a', 'Hồ Chí Minh', 'b', 'a', 'a', 'Hồ Chí Minh', 'b', 'a', 'UT2', 'KV2-NT', 'ba vì', 111, 222, '0', ''),
('104', 'Tống Đăng Đạt', 'nam', '2020-11-01', 'Kinh', 'Không', 'Hà Nội', 2016, 'giỏi', 'tốt', '2020-11-08', 'Hà Nội', 'Đống Đa', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'TLu', 111, 112, 'bothmethods', ''),
('105', 'Tống Đăng Đạt', 'nam', '2020-11-01', 'Kinh', 'Không', 'Hà Nội', 2016, 'giỏi', 'tốt', '2020-11-10', 'Hà Nội', 'đống đa', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'TLu', 111, 212, 'bothmethods', ''),
('107', 'Đoàn Quang Linh', 'nam', '2020-11-06', 'Khme', 'Không', 'Đắk Nông', 2020, 'yếu', 'yếu', '2020-11-27', 'Bến Tre', 'ABC', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT1', 'KV2-NT', 'TLu', 1111, 2222, 'bothmethods', '1605188404download.jpg'),
('108', 'Đoàn Quang Linh', 'nam', '2020-11-10', 'Kinh', 'Không', 'Hà Nội', 2019, 'giỏi', 'tốt', '2020-11-10', 'Hà Nội', 'na ni', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'TLu', 123, 1231, 'bothmethods', '1605188597download.jpg'),
('109', 'phùng thị thu hường', 'nữ', '2020-11-09', 'Kinh', 'Không', 'Hà Nội', 2016, 'giỏi', 'tốt', '2020-11-08', 'Hà Nội', 'ba vì', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'TLu', 123, 1233, 'bothmethods', '1605188784download.jpg'),
('110', 'Đoàn Quang Linh', 'nam', '2020-11-11', 'Kinh', 'Không', 'Hà Nội', 2018, 'giỏi', 'tốt', '2020-11-08', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 111, 222, '0', ''),
('111', 'Đoàn Quang Linh', 'nam', '2020-11-08', 'Kinh', 'Không', 'Hà Nội', 2019, 'giỏi', 'tốt', '2020-11-09', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 222, 333, '0', ''),
('1111', 'Đoàn Quang Linh', 'nam', '2020-11-10', 'Kinh', 'Không', 'Hà Nội', 2018, 'giỏi', 'tốt', '2020-11-10', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 222, 333, '0', ''),
('112', 'phùng thị thu hường', 'nam', '2020-11-10', 'Kinh', 'Không', 'Hồ Chí Minh', 2020, 'giỏi', 'tốt', '2020-11-18', 'Hồ Chí Minh', 'ba vì', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 111, 222, '0', ''),
('121', 'Đoàn Quang Linh', 'nam', '2020-11-11', 'Kinh', 'Không', 'Hà Nội', 2018, 'giỏi', 'tốt', '2020-11-08', 'Hà Nội', 'chân mộng', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'a', 'Hà Nội', 'b', 'a', 'UT2', 'KV2-NT', 'chân mộng', 111, 222, '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDadmin`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`CMT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `IDadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
