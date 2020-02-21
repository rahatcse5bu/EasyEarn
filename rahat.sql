-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 03:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `2019_10_26`
--

CREATE TABLE `2019_10_26` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `id` int(8) NOT NULL,
  `username` varchar(80) NOT NULL,
  `total_balance` double NOT NULL DEFAULT '0',
  `balance_now` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`id`, `username`, `total_balance`, `balance_now`) VALUES
(59, 'rahat', 2345, 184),
(60, 'rashed', 2000, 4196);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(8) NOT NULL,
  `username` varchar(80) NOT NULL,
  `method` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `Requested` date NOT NULL,
  `amount` double(8,4) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `username`, `method`, `phone`, `Requested`, `amount`, `status`) VALUES
(1, 'rahat', 'bkash', '01793278360', '2019-10-27', 206.0000, 'Unpaid'),
(2, 'rahat', 'bitcoin', 'rahat.cse5.bu@gmail.com', '2019-10-27', 300.0000, 'Unpaid'),
(3, 'rahat', 'rocket', '01793278360', '2019-10-27', 200.0000, 'Unpaid'),
(4, 'rashed', 'bkash', '0177777777', '2019-10-27', 203.0000, 'Unpaid'),
(5, 'rashed', 'payoner', 'rashed.cse5.bu@gmail.com', '2019-10-27', 879.0000, 'Unpaid'),
(6, 'rashed', 'rocket', '0187777376735', '2019-10-27', 400.0000, 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(5) NOT NULL,
  `username` varchar(80) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `username`, `msg`) VALUES
(30, 'rahat', ''),
(31, 'rashed', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(6) NOT NULL,
  `username` varchar(70) NOT NULL,
  `ntf` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `username`, `ntf`) VALUES
(30, 'rahat', ''),
(31, 'rashed', '');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(8) NOT NULL,
  `username` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `pp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `username`, `method`, `pp`) VALUES
(6, 'rahat', '', ''),
(7, 'rahat', '', ''),
(8, 'rashed', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rahat_msg`
--

CREATE TABLE `rahat_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahat_msg`
--

INSERT INTO `rahat_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `rahat_ntf`
--

CREATE TABLE `rahat_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahat_ntf`
--

INSERT INTO `rahat_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `rashed_msg`
--

CREATE TABLE `rashed_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rashed_msg`
--

INSERT INTO `rashed_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `rashed_ntf`
--

CREATE TABLE `rashed_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rashed_ntf`
--

INSERT INTO `rashed_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `ref`
--

CREATE TABLE `ref` (
  `id` int(8) NOT NULL,
  `username` varchar(80) NOT NULL,
  `refer` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ref`
--

INSERT INTO `ref` (`id`, `username`, `refer`) VALUES
(13, 'rahat', ''),
(14, 'rahat', ''),
(15, 'rashed', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(80) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `Ref` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `pass`, `Ref`) VALUES
('rahat', 'rahat.cse5.bu@gmail.com', '4b43b0aee35624cd95b910189b3dc231', ''),
('rashed', 'rashed.gjghjgj@gmail.com', '4b43b0aee35624cd95b910189b3dc231', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_10_26`
--
ALTER TABLE `2019_10_26`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahat_msg`
--
ALTER TABLE `rahat_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahat_ntf`
--
ALTER TABLE `rahat_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rashed_msg`
--
ALTER TABLE `rashed_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rashed_ntf`
--
ALTER TABLE `rashed_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rahat_msg`
--
ALTER TABLE `rahat_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rahat_ntf`
--
ALTER TABLE `rahat_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rashed_msg`
--
ALTER TABLE `rashed_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rashed_ntf`
--
ALTER TABLE `rashed_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `balance_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
