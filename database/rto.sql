-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2020 at 07:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `parea` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`pid`, `pname`, `parea`, `pcode`) VALUES
(1, 'shrishail', 'ampc', '123'),
(2, 'sanket', 'kle', '456');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vnumber` varchar(50) NOT NULL,
  `vtype` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `reg_date` varchar(50) NOT NULL,
  `upload_date` varchar(50) DEFAULT NULL,
  `approved_date` varchar(50) DEFAULT NULL,
  `rcbook` varchar(500) DEFAULT NULL,
  `puc` varchar(500) DEFAULT NULL,
  `adhar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `password`, `vname`, `vnumber`, `vtype`, `status`, `reg_date`, `upload_date`, `approved_date`, `rcbook`, `puc`, `adhar`) VALUES
(1, 'kartik', '123', 'cddown', 'ka22eb123', 'two', 'done', '', '1', '0', './upload/1581097066rcbook.jpg', './upload/1581097075puc.jpg', './upload/1581097083adhar.jpeg'),
(2, 'sanket', '345', 'shine', '123', 'two', 'done', '', '1', '1', '', '', ''),
(4, 'omkar', '123', 'crb', '345', 'two', NULL, '', NULL, NULL, NULL, NULL, NULL),
(6, 'shrishial', '123', 'vagnar', '1234567890', 'four', NULL, '2020-02-07 18:02:19 ', NULL, NULL, './upload/1581096182rcbook.jpg', './upload/1581096191puc.jpg', './upload/1581096202adhar.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
