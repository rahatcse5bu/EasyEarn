-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 05:27 AM
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

--
-- Dumping data for table `2019_10_26`
--

INSERT INTO `2019_10_26` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 4);

-- --------------------------------------------------------

--
-- Table structure for table `2019_10_29`
--

CREATE TABLE `2019_10_29` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_10_29`
--

INSERT INTO `2019_10_29` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 17),
(NULL, 'shoumi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `2019_10_30`
--

CREATE TABLE `2019_10_30` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_10_30`
--

INSERT INTO `2019_10_30` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 20);

-- --------------------------------------------------------

--
-- Table structure for table `2019_10_31`
--

CREATE TABLE `2019_10_31` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019_10_31`
--

INSERT INTO `2019_10_31` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 20);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_06`
--

CREATE TABLE `2020_01_06` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_06`
--

INSERT INTO `2020_01_06` (`D`, `username`, `ads`) VALUES
(NULL, 'rahat', 20),
(NULL, 't', 20);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_08`
--

CREATE TABLE `2020_01_08` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_08`
--

INSERT INTO `2020_01_08` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 20),
(NULL, 't', 20);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_09`
--

CREATE TABLE `2020_01_09` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_09`
--

INSERT INTO `2020_01_09` (`D`, `username`, `ads`) VALUES
(NULL, '', 1),
(NULL, 'r', 20),
(NULL, 'rahatcse5bu', 20);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_11`
--

CREATE TABLE `2020_01_11` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_11`
--

INSERT INTO `2020_01_11` (`D`, `username`, `ads`) VALUES
(NULL, 'rahatcse5bu', 20),
(NULL, 't', 3),
(NULL, 'tt', 2),
(NULL, 'tt1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_12`
--

CREATE TABLE `2020_01_12` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_12`
--

INSERT INTO `2020_01_12` (`D`, `username`, `ads`) VALUES
(NULL, 'Md_Rahat', 1),
(NULL, 'rahatcse5bu', 4),
(NULL, 'tt1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_13`
--

CREATE TABLE `2020_01_13` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_13`
--

INSERT INTO `2020_01_13` (`D`, `username`, `ads`) VALUES
(NULL, 'Md_Rahat', 7),
(NULL, 't6', 1),
(NULL, 'tttt', 2);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_14`
--

CREATE TABLE `2020_01_14` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_14`
--

INSERT INTO `2020_01_14` (`D`, `username`, `ads`) VALUES
(NULL, 'shadin', 1),
(NULL, 'tarikul', 3);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_18`
--

CREATE TABLE `2020_01_18` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_18`
--

INSERT INTO `2020_01_18` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'shadin', 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_19`
--

CREATE TABLE `2020_01_19` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_19`
--

INSERT INTO `2020_01_19` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'bubot', 0, 0),
(NULL, 'Md_Rahat', 0, 0),
(NULL, 'new', 1, 0),
(NULL, 'rahat1', 0, 0),
(NULL, 'rahatcse5bu', 0, 2),
(NULL, 'shadin', 0, 0),
(NULL, 'shoumicse5bu', 1, 2),
(NULL, 'tarikul', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_20`
--

CREATE TABLE `2020_01_20` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_20`
--

INSERT INTO `2020_01_20` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'rahat1', 0, 3),
(NULL, 'rahatcse5bu', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_21`
--

CREATE TABLE `2020_01_21` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_21`
--

INSERT INTO `2020_01_21` (`username`, `ads`, `quiz`) VALUES
('rahatcse5bu', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_22`
--

CREATE TABLE `2020_01_22` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_22`
--

INSERT INTO `2020_01_22` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'rahatcse5bu', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_23`
--

CREATE TABLE `2020_01_23` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_23`
--

INSERT INTO `2020_01_23` (`username`, `ads`, `quiz`) VALUES
('rahatcse5bu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_24`
--

CREATE TABLE `2020_01_24` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_24`
--

INSERT INTO `2020_01_24` (`username`, `ads`, `quiz`) VALUES
('Md_Rahat', 2, 0),
('rahatcse5bu', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_27`
--

CREATE TABLE `2020_01_27` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_27`
--

INSERT INTO `2020_01_27` (`username`, `ads`, `quiz`) VALUES
('Md_Rahat', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_28`
--

CREATE TABLE `2020_01_28` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_28`
--

INSERT INTO `2020_01_28` (`username`, `ads`, `quiz`) VALUES
('Md_Rahat', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_01_29`
--

CREATE TABLE `2020_01_29` (
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_01_29`
--

INSERT INTO `2020_01_29` (`username`, `ads`, `quiz`) VALUES
('rahatcse5bu', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_02_03`
--

CREATE TABLE `2020_02_03` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_02_03`
--

INSERT INTO `2020_02_03` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'rahatcse5bu', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `2020_02_04`
--

CREATE TABLE `2020_02_04` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_02_04`
--

INSERT INTO `2020_02_04` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'bubot', 0, 4),
(NULL, 'rahatcse5bu', 3, 1),
(NULL, 'razin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `2020_02_06`
--

CREATE TABLE `2020_02_06` (
  `D` date DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `ads` int(9) NOT NULL DEFAULT '0',
  `quiz` int(9) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2020_02_06`
--

INSERT INTO `2020_02_06` (`D`, `username`, `ads`, `quiz`) VALUES
(NULL, 'rahatcse5bu', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin_control`
--

CREATE TABLE `admin_control` (
  `minimum_withdraw` double NOT NULL,
  `total_ads` int(11) NOT NULL,
  `welcome_bonus` double NOT NULL,
  `ad_waiting_time` int(11) NOT NULL,
  `ref_income` double NOT NULL,
  `ad_unit_price` double NOT NULL,
  `quiz_price` double(11,0) NOT NULL,
  `quiz_waiting_time` int(11) NOT NULL,
  `quiz_ref_income` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_control`
--

INSERT INTO `admin_control` (`minimum_withdraw`, `total_ads`, `welcome_bonus`, `ad_waiting_time`, `ref_income`, `ad_unit_price`, `quiz_price`, `quiz_waiting_time`, `quiz_ref_income`) VALUES
(50, 400, 70, 15, 0.015, 5, 5, 122, 0.025);

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
(59, 'rahat', 2345, 3183),
(60, 'rashed', 2000, 4196),
(61, 'shoumi', 0, 0),
(62, 't', 6, 6),
(63, 'test1', 0, 0),
(64, 'rahatcse5bu', 678.3999999999995, 88.4),
(65, 'r', 0, 0),
(66, 'tt', 4, 4),
(67, 'tt1', 10, 10),
(68, 'Md_Rahat', 1003, 995),
(69, 'bubot', 49, 49),
(70, 'new', 45, 45),
(71, 'test', 0, 0),
(72, 'rahat1', 45, 45),
(73, 'ttt', 0, 0),
(74, 'tttt', 760, 760),
(75, 't6', 415, 415),
(76, 'shoumicse5bu', 123.67499999999998, 123.67499999999998),
(77, 'tarikul', 205, 5),
(78, 'shadin', 298, 298),
(79, 'razin', 80, 10);

-- --------------------------------------------------------

--
-- Table structure for table `bubot_msg`
--

CREATE TABLE `bubot_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bubot_msg`
--

INSERT INTO `bubot_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `bubot_ntf`
--

CREATE TABLE `bubot_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bubot_ntf`
--

INSERT INTO `bubot_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

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
  `status` varchar(60) NOT NULL DEFAULT 'Unpaid',
  `Paid_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `username`, `method`, `phone`, `Requested`, `amount`, `status`, `Paid_on`) VALUES
(1, 'rahatcse5bu', 'bkash', '01793278360', '2019-10-27', 206.0000, 'paid', '2019-06-17'),
(2, 'rahat', 'bitcoin', 'rahat.cse5.bu@gmail.com', '2019-10-27', 300.0000, 'paid', '2020-01-21'),
(3, 'rahat', 'rocket', '01793278360', '2019-10-27', 200.0000, 'paid', '2020-01-21'),
(4, 'rashed', 'bkash', '01765437898', '2019-10-27', 203.0000, 'paid', '2018-11-26'),
(5, 'rashed', 'payoner', 'rashed.cse5.bu@gmail.com', '2019-10-27', 879.0000, 'paid', '2019-05-13'),
(6, 'rashed', 'rocket', '01875632109', '2019-10-27', 400.0000, 'paid', '2019-07-21'),
(7, 'rahat', 'bkash', '01727675409', '2019-10-29', 500.0000, 'paid', '2020-01-21'),
(8, 'rahat', 'payoner', 'regfhfgsfzsgng@gmail.com', '2019-10-29', 3000.0000, 'paid', '2020-05-29'),
(9, 'rahat', 'bitcoin', '01783307672', '2019-10-30', 700.0000, 'paid', '2020-01-21'),
(10, 'rahat', 'bkash', '01722055797', '2019-10-30', 400.0000, 'paid', '2013-08-31'),
(11, 'rahat', 'bkash', '01765637059', '2019-10-31', 700.0000, 'paid', '2020-01-29'),
(12, 'rahat', 'bkash', '01787678786', '2019-10-31', 201.0000, 'paid', '2010-01-21'),
(13, 'rahat', 'rocket', '01767874532', '2019-10-31', 500.0000, 'paid', '2020-01-16'),
(14, 'rahat', 'rocket', '01777776775', '2020-01-06', 7860.0000, 'paid', '2020-01-29'),
(15, 'Md_Rahat', 'rocket', '01620909090', '2020-01-13', 8.0000, 'paid', '2000-03-11'),
(16, 'tarikul', 'bkash', '01788793502', '2020-01-14', 200.0000, 'paid', '2018-10-21'),
(21, 'rahatcse5bu', 'bkash', '01793278360', '2020-01-29', 500.0000, 'paid', '2020-01-29'),
(22, 'rahatcse5bu', 'bitcoin', 'rashed.cse5.bu@gmail.com', '2020-01-29', 10.0000, 'paid', '2020-01-29'),
(23, 'rahatcse5bu', 'payoner', 'rahat.cse5.bu@gmail.com', '2020-01-29', 10.0000, 'paid', '2020-01-29'),
(25, 'rahatcse5bu', 'bkash', '01793278360', '2020-01-30', 10.0000, 'paid', '2020-02-06'),
(26, 'rahatcse5bu', 'bkash', '01793278360', '2020-01-30', 10.0000, 'paid', '2020-02-06'),
(30, 'rahatcse5bu', 'bkash', '01747727212', '2020-02-04', 50.0000, 'paid', '2020-02-04'),
(33, 'razin', 'payoner', 'razin@gnahahj.com', '2020-02-04', 70.0000, 'paid', '2020-02-04');

--
-- Triggers `invoice`
--
DELIMITER $$
CREATE TRIGGER `AddBalance` AFTER DELETE ON `invoice` FOR EACH ROW UPDATE balance SET balance_now=balance_now+old.amount WHERE username=old.username
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `md_rahat_msg`
--

CREATE TABLE `md_rahat_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_rahat_msg`
--

INSERT INTO `md_rahat_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `md_rahat_ntf`
--

CREATE TABLE `md_rahat_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_rahat_ntf`
--

INSERT INTO `md_rahat_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

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
(31, 'rashed', ''),
(32, 'shoumi', ''),
(33, 't', ''),
(34, 'test1', ''),
(35, 'rahatcse5bu', ''),
(36, 'r', ''),
(37, 'tt', ''),
(38, 'tt1', ''),
(39, 'Md_Rahat', ''),
(40, 'bubot', ''),
(41, 'new', ''),
(42, 'test', ''),
(43, 'rahat1', ''),
(44, 'ttt', ''),
(45, 'tttt', ''),
(46, 't6', ''),
(47, 'shoumicse5bu', ''),
(48, 'tarikul', ''),
(49, 'shadin', ''),
(50, 'razin', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_msg`
--

CREATE TABLE `new_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_msg`
--

INSERT INTO `new_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `new_ntf`
--

CREATE TABLE `new_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_ntf`
--

INSERT INTO `new_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

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
(31, 'rashed', ''),
(32, 'shoumi', ''),
(33, 't', ''),
(34, 'test1', ''),
(35, 'rahatcse5bu', ''),
(36, 'r', ''),
(37, 'tt', ''),
(38, 'tt1', ''),
(39, 'Md_Rahat', ''),
(40, 'bubot', ''),
(41, 'new', ''),
(42, 'test', ''),
(43, 'rahat1', ''),
(44, 'ttt', ''),
(45, 'tttt', ''),
(46, 't6', ''),
(47, 'shoumicse5bu', ''),
(48, 'tarikul', ''),
(49, 'shadin', ''),
(50, 'razin', '');

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
(8, 'rashed', '', ''),
(9, 'shoumi', '', ''),
(10, 't', '', ''),
(11, 'test1', '', ''),
(12, 'rahatcse5bu', '', ''),
(13, 'r', '', ''),
(14, 'tt', '', ''),
(15, 'tt1', '', ''),
(16, 'Md_Rahat', '', ''),
(17, 'bubot', '', ''),
(18, 'new', '', ''),
(19, 'test', '', ''),
(20, 'rahat1', '', ''),
(21, 'ttt', '', ''),
(22, 'tttt', '', ''),
(23, 't6', '', ''),
(24, 'shoumicse5bu', '', ''),
(25, 'tarikul', '', ''),
(26, 'shadin', '', ''),
(27, 'razin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `description` longtext CHARACTER SET utf8 NOT NULL,
  `quiz1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ans1` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `quiz2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `ans2` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `t1` text CHARACTER SET utf8 NOT NULL,
  `t2` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `description`, `quiz1`, `ans1`, `quiz2`, `ans2`, `t1`, `t2`) VALUES
(1, 'তিন টি-টোয়েন্টি, দুই টেস্ট ও এক ওয়ানডে খেলতে তিন দফায় পাকিস্তান সফর করবে বাংলাদেশ। হাজারো ঝক্কি-ঝামেলা পোহানোর পর অবশেষে নিজেদের দেশে বাংলাদেশে আনতে রাজি করাতে পেরে বেশ উদ্দীপ্ত পাকিস্তান। দেশটির সাবেকরাও প্রতিদিন এ সিরিজ নিয়ে কিছু না কিছু বলছেন। সে তালিকায় যোগ হলো সাবেক পেসার উমর গুলের নাম। আত্মবিশ্বাসী গুল ঘোষণা দিয়েছে, তাঁর দেশ বাংলাদেশকে সবগুলো সংস্করণেই হারাবে।\r\n\r\n\r\nতবে বাংলাদেশের বিপক্ষে সিরিজ যে পাকিস্তানি খেলোয়াড়দের জন্য সহজ কিছু হবে না, সেটাও জানেন গুল। এ নিয়ে মিসবাহ-উল-হকের দলকে সতর্কও করে দিয়েছেন তিনি, ‘তিন সংস্করণেই পাকিস্তান দুর্দান্ত। বাংলাদেশের চেয়ে অনেক ভালো। তবে সংক্ষিপ্ত সংস্করণে ম্যাচের সময়ে যে দল নিজেদের সুযোগ কাজে লাগাবে, তারাই জিতবে। যে কাজটা বাংলাদেশ এর আগেও অনেকবার করেছে। আমি নিশ্চিত, বাংলাদেশ পাকিস্তানের মাটিতে আমাদের অনেক কঠিন পরীক্ষা নেবে। তাই গা-ছাড়া দিয়ে বসে থাকা একদমই উচিত হবে না পাকিস্তানের।’\r\n\r\nসিরিজ শুরুর আগেই কথার লড়াই শুরু করে দিয়েছেন পাকিস্তানি ক্রিকেটাররা। এরই মধ্যে দীর্ঘদিন পাকিস্তানের জাতীয় দলের বাইরে থাকা পেসার উমর গুলের ভবিষ্যৎ বাণী, বাংলাদেশের বিপক্ষে তিন সিরিজেই জিতবে পাকিস্তান। ঘরের মাঠের সুবিধা ষোলোআনা নিতে পারবে পাকিস্তান, এমনটাই আশা গুলের, ‘পাকিস্তান দল হিসেবে যেমন শক্তিশালী তা মাথায় রাখলে বলা যায় তিন সিরিজেই জিতবে। এ ব্যাপারে আমার বিন্দুমাত্রও সন্দেহ নেই। তা ছাড়া আমরা খেলবও নিজেদের মাঠে।’\r\n\r\nগুল আরও বলেন, ‘যাই হোক, শক্তি-সামর্থ্যে পাকিস্তান এগিয়ে এবং তারা ঘরের মাঠে খেলার সুবিধা পাবে। আমার কোনো সন্দেহ নেই যে বাংলাদেশের বিপক্ষে তিন সিরিজেই জিতবে পাকিস্তান।’\r\n\r\nতিন মাসে তিন দফায় পাকিস্তান সফর করবে বাংলাদেশ দল। প্রথম দফায় চলতি মাসের ২৪, ২৫ ও ২৭ তারিখে লাহোরে তিন ম্যাচের টি-টোয়েন্টি সিরিজ খেলবে বাংলাদেশ। এরপর রাওয়ালপিন্ডিতে ৭-১১ ফেব্রুয়ারি অনুষ্ঠিত হবে প্রথম টেস্ট, করাচিতে ৩ এপ্রিল একমাত্র ওয়ানডে এবং ৫-৯ এপ্রিল করাচিতেই গড়াবে দ্বিতীয় টেস্ট।', ' পাকিস্থানের অধিনায়ক কে?', 'মিসবাহ-উল-হক', 'T20 সিরিজ কয় ম্যাচ এর? ', 'তিনটি', 'আহমেদ শেহজাদ,ওমর গুল,শয়েব আক্তার ', '২ টি,১ টি,৪ টি'),
(2, 'আজ শ্রীলঙ্কার বিপক্ষে ম্যাচে জামাল ভূঁইয়া খেলতে পারবেন? এ মুহূর্তে এটিই বাংলাদেশের ফুটবলে বড় প্রশ্ন। ঊরুর চোটে গতকাল অনুশীলন করেননি। পুরোটা সময় মাঠের পাশে বসে কাটিয়েছেন। শেষ পর্যন্ত শঙ্কাটাই সত্যি হয়েছে। আজ লঙ্কানদের বিপক্ষে নেই বাংলাদেশ অধিনায়ক। দলীয় সূত্র নিশ্চিত করেছে বিষয়টি।\r\n\r\n\r\nবঙ্গবন্ধু গোল্ডকাপের সেমিফাইনাল খেলতে হলে আজ শ্রীলঙ্কার বিপক্ষে জিততেই হবে বাংলাদেশকে। এমন বাঁচা-মরার ম্যাচে অধিনায়ক জামালকে না পাওয়া স্বাগতিকদের জন্য বড় ধাক্কাই । ফিলিস্তিনের বিপক্ষে চোটে পড়েন তিনি। প্রথমে চোটটি সাধারণ মনে হলেও শেষ পর্যন্ত মাঠের বাইরে পাঠিয়ে দিল তাঁকে।\r\n\r\nএর আগে নিজেদের প্রথম ম্যাচে ফিলিস্তিনের বিপক্ষে ২-০ গোলে হেরে টুর্নামেন্ট শুরু করেছে বাংলাদেশ। একই ব্যবধানে শ্রীলঙ্কাও হেরেছে ফিলিস্তিনের কাছে। গ্রুপ থেকে রানার্সআপ হিসেবে সেমিফাইনালের টিকিট পেতে দুই দলের জয়ের কোনো বিকল্প নেই। ম্যাচটি ৯০ মিনিট ড্র থাকলে দুই দলের গোল গড়, মুখোমুখি ফল সবই সমান হবে। সে ক্ষেত্রে সরাসরি টাইব্রেকার।', 'শ্রীলঙ্কার বিপক্ষে ম্যাচে জামাল ভূঁইয়া খেলতে পারবেন?', 'না', 'এখানে কোন টুর্নামেন্ট এর কথা বলা হইছে? ', 'বঙ্গবন্ধু গোল্ডকাপ', 'জানি না,আমি শিওর না,হুম', 'এশিয়া কাপ,অনূর্ধ্ব ১৯,প্রীতিম্যাচ'),
(3, 'সরকারি চাকরিতে অষ্টম বা তার ওপরের পদেও সরাসরি নিয়োগে কোনো কোটা থাকবে না। বর্তমান পরিপত্র অনুযায়ী, নবম গ্রেড (প্রথম শ্রেণি) এবং ১০ম থেকে ১৩তম গ্রেডের (দ্বিতীয় শ্রেণি) পদে নিয়োগে কোনো কোটা নেই।\r\n\r\nসরকারি চাকরিতে কোটার বিষয়ে আগের জারি করা পরিপত্র স্পষ্ট করতে এই প্রস্তাব অনুমোদন দিয়েছে মন্ত্রিসভা। আজ সোমবার তেজগাঁওয়ে প্রধানমন্ত্রীর কার্যালয়ে অনুষ্ঠিত মন্ত্রিসভার বৈঠকে জনপ্রশাসন মন্ত্রণালয়ের দেওয়া এই প্রস্তাব অনুমোদন দেওয়া হয়।\r\n\r\n\r\nবৈঠকে সভাপতিত্ব করেন প্রধানমন্ত্রী শেখ হাসিনা। পরে সচিবালয়ে সংবাদ সম্মেলন করে বৈঠকের সিদ্ধান্ত জানান মন্ত্রিপরিষদ সচিব খন্দকার আনোয়ারুল ইসলাম।\r\n\r\n\r\nসংবাদ ব্রিফিংয়ে দেওয়া লিখিত কাগজে বলা হয়, সরকারি কর্ম কমিশন (পিএসসি) নবম গ্রেড এবং ১০ম থেকে ১৩তম গ্রেড ছাড়াও অষ্টম গ্রেড বা তার ওপরের গ্রেডের কোনো কোনো পদে সরাসরি নিয়োগ দিয়ে থাকে। কিন্তু আগের পরিপত্রে কেবল নবম গ্রেড (প্রথম শ্রেণি) এবং ১০ম থেকে ১৩তম গ্রেডের (দ্বিতীয় শ্রেণি) পদে নিয়োগের ক্ষেত্রে কোটা বাতিল করা হলেও অষ্টম বা তার ওপরের গ্রেডের পদে সরাসরি নিয়োগের ক্ষেত্রে কোটা বণ্টন পদ্ধতি কী হবে, সে বিষয়ে সুস্পষ্ট নির্দেশনা নেই। এ জন্যই পরিপত্রটি সংশোধনের প্রয়োজন।\r\n\r\n\r\n\r\nপ্রধানমন্ত্রী শেখ হাসিনার সভাপতিত্বে আজ মন্ত্রিসভার বৈঠক অনুষ্ঠিত হয়। \r\nএ ছাড়া আজকের বৈঠকে ‘আকাশপথে পরিবহন (মন্ট্রিল কনভেনশন) আইন, ২০২০’-এর খসড়ার চূড়ান্ত অনুমোদন দিয়েছে মন্ত্রিসভা। প্রস্তাবিত এই আইন অনুযায়ী আকাশপথে দুর্ঘটনায় যদি কোনো যাত্রী মারা যান বা আঘাত পান, তাহলে বর্তমান হিসাবে ১ কোটি ১৭ লাখ টাকার (এক লাখ এসডিআর) বেশি ক্ষতিপূরণ পাবেন। বর্তমান আইনে এই কারণে ক্ষতিপূরণের পরিমাণ ২০ লাখ ৩৭ হাজার ৬০০ টাকা। এ ছাড়া ফ্লাইট দেরি হলে ও মালপত্র নষ্ট বা হারিয়ে গেলেও পাবেন বড় অঙ্কের ক্ষতিপূরণ।\r\n\r\nবৈঠকে বাংলাদেশ ট্রাভেল এজেন্সি (নিবন্ধন ও নিয়ন্ত্রণ) সংশোধন আইনের খসড়া এবং আয়োডিনযুক্ত লবণ আইনের খসড়াও অনুমোদন দেওয়া হয়েছে। এ ছাড়া ৬ এপ্রিল আন্তর্জাতিক ক্রীড়া দিবসের পাশাপাশি এদিন জাতীয় ক্রীড়া দিবস পালনের প্রস্তাবও অনুমোদন দিয়েছে মন্ত্রিসভা।', ' মন্ত্রিপরিষদ সচিব এর নাম কি? ', 'খন্দকার আনোয়ারুল ইসলাম', '‘আকাশপথে পরিবহন (মন্ট্রিল কনভেনশন) আইন, ২০২০’ অনুযায়ী আকাশপথে দুর্ঘটনায় যদি কোনো যাত্রী মারা যান বা আঘাত পান, তাহলে বর্তমান হিসাবে কত টাকা ক্ষতিপূরণ পাবেন?', '১ কোটি ১৭ লাখ টাকা', 'খন্দকার আনোয়ারুল আজিম,শেখ হাসিনা,আব্দুল হামিদ', '১ কোটি ১৭ লাখ টাকা,১ কোটি ১২ লাখ টাকা,২০ লাখ ৩৭ হাজার ৬০০ টাকা'),
(4, 'চীনা প্রেসিডেন্ট সি চিন পিংয়ের নাম বার্মিজ ভাষা থেকে ইংরেজিতে অনুবাদ করতে গিয়ে অশ্লীল শব্দে রূপান্তরিত হওয়ায় ক্ষমা চেয়েছে সামাজিক যোগাযোগের মাধ্যম ফেসবুক। তাদের দাবি, কারিগরি ত্রুটির কারণে এমনটা হয়েছে। সি চিন পিংয়ের মিয়ানমার সফরের দ্বিতীয় দিনে গতকাল শনিবার এই ভুল চোখে পড়ে বলে বিবিসির এক প্রতিবেদনে বলা হয়।\r\n\r\nগত ১৯ বছরের মধ্যে এই প্রথম চীনের কোনো প্রেসিডেন্ট মিয়ানমার সফর করলেন। রোহিঙ্গা গণহত্যার অভিযোগে মিয়ানমার যখন আন্তর্জাতিক মহলের সমালোচনার মুখে রয়েছে এবং আন্তর্জাতিক বিচার আদালতে (আইসিজে) দেশটির বিচার হচ্ছে, সেই সময় সির এই সফর অনুষ্ঠিত হলো। মিয়ানমারের সঙ্গে সম্পর্কের নতুন যুগের সূচনার প্রতিশ্রুতি দিয়েছেন চীনের প্রেসিডেন্ট সি চিন পিং। মিয়ানমারে অবকাঠামোগত উন্নয়নের গতি ত্বরান্বিত করতে ৩৩টি চুক্তিতে স্বাক্ষর করেছেন মিয়ানমারের স্টেট কাউন্সেলর অং সান সু চি ও চীনের প্রেসিডেন্ট সি চিন পিং।\r\n\r\n\r\nগতকাল চীনা প্রেসিডেন্ট মিয়ানমারের নেত্রী অং সান সুচির সঙ্গে দ্বিপক্ষীয় বৈঠক করেন। এ নিয়ে সু চি ও তাঁর দপ্তরের ফেসবুক পেজ থেকে বিবৃতি দেওয়া হয়। ওই বিবৃতির বার্মিজ থেকে ইংরেজি অনুবাদে সি চিন পিং হয়ে যায় ‘মিস্টার শিটহোল’। এ নিয়ে বাধে বিপত্তি।\r\n\r\n\r\nফেসবুকের মুখপাত্র অ্যান্ডি স্টোন বলেন, ‘ফেসবুকে বার্মিজ থেকে ইংরেজি ভুল অনুবাদ দেখাচ্ছিল। আমরা এই কারিগরি ত্রুটি সারিয়েছি। এমনটা হওয়া উচিত হয়নি, আর যেন এমন না হয়, তা নিশ্চিত করতে আমরা পদক্ষেপ নিচ্ছি।’\r\n\r\nমিয়ানমারের সরকারি ভাষা বার্মিজ। সেখানকার দুই-তৃতীয়াংশ লোক এ ভাষায় কথা বলে।\r\n\r\nফেসবুক জানিয়েছে, তাদের বার্মিজ শব্দভান্ডারে সি চিন পিংয়ের নামটি অন্তর্ভুক্ত ছিল না। ত্রুটি ঠিক করার আগে এক্স আই এবং এসএইচআই দিয়ে শুরু বার্মিজ সব শব্দের ইংরেজি অনুবাদেই ‘শিটহোল’ শব্দটি আসছিল।\r\n\r\nঅ্যান্ডি স্টোন এক বিবৃতিতে বলেন, ‘ফেসবুকে বার্মিজ থেকে ইংরেজি অনুবাদসংক্রান্ত বিষয়ে সতর্ক রয়েছি। যত দ্রুত সম্ভব তা ঠিক করতে সম্ভাব্য সবকিছু করা হচ্ছে।’', ' কোনটি অশ্লীল শব্দ?', 'শিটহোল', ' কি দিয়ে শুরু বার্মিজ সব শব্দের ইংরেজি অনুবাদেই ‘শিটহোল’ শব্দটি আসছিল?', 'এক্স আই', 'সি চিন পিং,অং সান সু চি,এসএইচআই', 'এ সি,এম টি,টি আর');

-- --------------------------------------------------------

--
-- Table structure for table `rahat1_msg`
--

CREATE TABLE `rahat1_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahat1_msg`
--

INSERT INTO `rahat1_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome '),
(2, 'ok', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rahat1_ntf`
--

CREATE TABLE `rahat1_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahat1_ntf`
--

INSERT INTO `rahat1_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `rahatcse5bu_msg`
--

CREATE TABLE `rahatcse5bu_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahatcse5bu_msg`
--

INSERT INTO `rahatcse5bu_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome '),
(27, 'hi', NULL),
(28, 'hi', NULL),
(29, 'hidfh', NULL),
(30, 'fghfghfdhf', NULL),
(31, 'hi', NULL),
(32, 'valo e\r\n', NULL),
(33, 'Great', NULL),
(34, 'hy', NULL),
(35, 'fghey', NULL),
(36, 'gfgha', NULL),
(37, 'fghjj', NULL),
(38, 'rghyt', NULL),
(39, 'ertyer', NULL),
(40, 'srferg', NULL),
(41, 'srfergsd', NULL),
(42, 'fertgf', NULL),
(43, 'ergyt', NULL),
(44, 'ergytsfrwe', NULL),
(45, 'grthf', NULL),
(46, 'grthfdsfds', NULL),
(47, 'ok', NULL),
(48, 'hmm', NULL),
(49, 'hhgdfdthgjbjhm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rahatcse5bu_ntf`
--

CREATE TABLE `rahatcse5bu_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahatcse5bu_ntf`
--

INSERT INTO `rahatcse5bu_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

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
(1, 'welcome Rahat');

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
-- Table structure for table `razin_msg`
--

CREATE TABLE `razin_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razin_msg`
--

INSERT INTO `razin_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `razin_ntf`
--

CREATE TABLE `razin_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `razin_ntf`
--

INSERT INTO `razin_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

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
(15, 'rashed', ''),
(16, 'shoumi', ''),
(17, 't', ''),
(18, 'test1', ''),
(19, 'rahatcse5bu', ''),
(20, 'r', ''),
(21, 'tt', ''),
(22, 'tt1', 'rahatcse5bu'),
(23, 'Md_Rahat', 'rahatcse5bu'),
(24, 'bubot', 'rahatcse5bu'),
(25, 'new', 'rahatcse5bu'),
(26, 'test', 'rahatcse5bu'),
(27, 'rahat1', 'rahatcse5bu'),
(28, 'ttt', 'rahatcse5bu'),
(29, 'tttt', 'rahatcse5bu'),
(30, 't6', ''),
(31, 'shoumicse5bu', ''),
(32, 'tarikul', 'shoumicse5bu'),
(33, 'shadin', ''),
(34, 'razin', '');

-- --------------------------------------------------------

--
-- Table structure for table `r_msg`
--

CREATE TABLE `r_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_msg`
--

INSERT INTO `r_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome '),
(4, 'hello Admin, I have a Problem', NULL),
(11, 'Are not you online now?', NULL),
(12, 'Hello?', NULL),
(13, NULL, 'What is the problem. Please explain');

-- --------------------------------------------------------

--
-- Table structure for table `r_ntf`
--

CREATE TABLE `r_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r_ntf`
--

INSERT INTO `r_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `shadin_msg`
--

CREATE TABLE `shadin_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shadin_msg`
--

INSERT INTO `shadin_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome '),
(2, 'Hi', NULL),
(3, ' dfbdjhbdfj', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shadin_ntf`
--

CREATE TABLE `shadin_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shadin_ntf`
--

INSERT INTO `shadin_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `shoumicse5bu_msg`
--

CREATE TABLE `shoumicse5bu_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoumicse5bu_msg`
--

INSERT INTO `shoumicse5bu_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome '),
(2, 'hi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoumicse5bu_ntf`
--

CREATE TABLE `shoumicse5bu_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoumicse5bu_ntf`
--

INSERT INTO `shoumicse5bu_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `shoumi_msg`
--

CREATE TABLE `shoumi_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoumi_msg`
--

INSERT INTO `shoumi_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `shoumi_ntf`
--

CREATE TABLE `shoumi_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoumi_ntf`
--

INSERT INTO `shoumi_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `t6_msg`
--

CREATE TABLE `t6_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_msg`
--

INSERT INTO `t6_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `t6_ntf`
--

CREATE TABLE `t6_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t6_ntf`
--

INSERT INTO `t6_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tarikul_msg`
--

CREATE TABLE `tarikul_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarikul_msg`
--

INSERT INTO `tarikul_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tarikul_ntf`
--

CREATE TABLE `tarikul_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarikul_ntf`
--

INSERT INTO `tarikul_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test1_msg`
--

CREATE TABLE `test1_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test1_ntf`
--

CREATE TABLE `test1_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_msg`
--

CREATE TABLE `test_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_msg`
--

INSERT INTO `test_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `test_ntf`
--

CREATE TABLE `test_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_ntf`
--

INSERT INTO `test_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tt1_msg`
--

CREATE TABLE `tt1_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt1_msg`
--

INSERT INTO `tt1_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tt1_ntf`
--

CREATE TABLE `tt1_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt1_ntf`
--

INSERT INTO `tt1_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tttt_msg`
--

CREATE TABLE `tttt_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tttt_msg`
--

INSERT INTO `tttt_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tttt_ntf`
--

CREATE TABLE `tttt_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tttt_ntf`
--

INSERT INTO `tttt_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `ttt_msg`
--

CREATE TABLE `ttt_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttt_msg`
--

INSERT INTO `ttt_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `ttt_ntf`
--

CREATE TABLE `ttt_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttt_ntf`
--

INSERT INTO `ttt_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tt_msg`
--

CREATE TABLE `tt_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_msg`
--

INSERT INTO `tt_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `tt_ntf`
--

CREATE TABLE `tt_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tt_ntf`
--

INSERT INTO `tt_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `t_msg`
--

CREATE TABLE `t_msg` (
  `id` int(8) NOT NULL,
  `you` longtext,
  `adminmsg` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_msg`
--

INSERT INTO `t_msg` (`id`, `you`, `adminmsg`) VALUES
(1, NULL, 'welcome'),
(2, 'Hi, share your refer link with your friends & have more income chances. Thank you', 'Hi, share your refer link with your friends & have more income chances. Thank you'),
(3, 'Hello admin', 'Hello user, What\'s up?'),
(4, 'dfgtf', NULL),
(5, 'dfgtf', NULL),
(6, 'dfgtf', NULL),
(7, 'dfgtf', NULL),
(8, 'dfgtf', NULL),
(9, 'dfgtf', NULL),
(10, 'dfgtf', NULL),
(11, 'bvnb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_ntf`
--

CREATE TABLE `t_ntf` (
  `id` int(8) NOT NULL,
  `adminntf` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ntf`
--

INSERT INTO `t_ntf` (`id`, `adminntf`) VALUES
(1, 'welcome');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(80) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `Ref` varchar(80) DEFAULT NULL,
  `adcount` int(8) NOT NULL,
  `quizCount` int(11) NOT NULL DEFAULT '0',
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `pass`, `Ref`, `adcount`, `quizCount`, `reg_date`) VALUES
('bubot', 'rahahahjahkdajh@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 0, 4, '2020-01-12'),
('Md_Rahat', '01793278360@fmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 13, 2, '2020-01-05'),
('new', 'rahat.cses5df.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 1, 0, '2020-01-13'),
('r', 'rr@rtr', '4c93008615c2d041e33ebac605d14b5b', '', 0, 0, '0000-00-00'),
('rahat', 'rahat.cse5.bu@gmail.com', '4b43b0aee35624cd95b910189b3dc231', '', 0, 0, '0000-00-00'),
('rahat1', 'alt.rahat@gmail.vcom', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 0, 0, '2020-01-13'),
('rahatcse5bu', 'rahat.cse5.bvu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 18, 13, '0000-00-00'),
('rashed', 'rashed.gjghjgj@gmail.com', '4b43b0aee35624cd95b910189b3dc231', '', 0, 0, '0000-00-00'),
('razin', 'razin.cse5.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 0, 1, '2020-02-04'),
('shadin', 'shadin.das@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 3, 0, '2020-01-14'),
('shoumi', 'hgsayusagyujg@gmail.com', '03c7c0ace395d80182db07ae2c30f034', '', 0, 0, '0000-00-00'),
('shoumicse5bu', 'shoumi.cse5.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 1, 0, '2020-01-14'),
('t', 'rahat.cse5_bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 0, 0, '0000-00-00'),
('t6', 'rahaha56hjahkajh@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 1, 0, '2020-01-13'),
('tarikul', 'rahahahhgfghfjahkajh@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'shoumicse5bu', 3, 0, '2020-01-14'),
('test', 'rahat.csegxxxxs5.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 0, 0, '2020-01-13'),
('test1', 'rahat.csed5.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 0, 0, '0000-00-00'),
('tt', '01793278360@gmail.com', '4c93008615c2d041e33ebac605d14b5b', '', 0, 0, '0000-00-00'),
('tt1', 'rahahahjahkajh@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 2, 0, '2020-01-06'),
('ttt', 'rahahahjtahkajh@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 0, 0, '2020-01-13'),
('tttt', 'rahat.cshhge5.bu@gmail.com', '4c93008615c2d041e33ebac605d14b5b', 'rahatcse5bu', 2, 0, '2020-01-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2019_10_26`
--
ALTER TABLE `2019_10_26`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2019_10_29`
--
ALTER TABLE `2019_10_29`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2019_10_30`
--
ALTER TABLE `2019_10_30`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2019_10_31`
--
ALTER TABLE `2019_10_31`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_06`
--
ALTER TABLE `2020_01_06`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_08`
--
ALTER TABLE `2020_01_08`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_09`
--
ALTER TABLE `2020_01_09`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_11`
--
ALTER TABLE `2020_01_11`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_12`
--
ALTER TABLE `2020_01_12`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_13`
--
ALTER TABLE `2020_01_13`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_14`
--
ALTER TABLE `2020_01_14`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_18`
--
ALTER TABLE `2020_01_18`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_19`
--
ALTER TABLE `2020_01_19`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_20`
--
ALTER TABLE `2020_01_20`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_21`
--
ALTER TABLE `2020_01_21`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_22`
--
ALTER TABLE `2020_01_22`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_23`
--
ALTER TABLE `2020_01_23`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_24`
--
ALTER TABLE `2020_01_24`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_27`
--
ALTER TABLE `2020_01_27`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_28`
--
ALTER TABLE `2020_01_28`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_01_29`
--
ALTER TABLE `2020_01_29`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_02_03`
--
ALTER TABLE `2020_02_03`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_02_04`
--
ALTER TABLE `2020_02_04`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `2020_02_06`
--
ALTER TABLE `2020_02_06`
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
-- Indexes for table `bubot_msg`
--
ALTER TABLE `bubot_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bubot_ntf`
--
ALTER TABLE `bubot_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md_rahat_msg`
--
ALTER TABLE `md_rahat_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md_rahat_ntf`
--
ALTER TABLE `md_rahat_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_msg`
--
ALTER TABLE `new_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_ntf`
--
ALTER TABLE `new_ntf`
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
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahat1_msg`
--
ALTER TABLE `rahat1_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahat1_ntf`
--
ALTER TABLE `rahat1_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahatcse5bu_msg`
--
ALTER TABLE `rahatcse5bu_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rahatcse5bu_ntf`
--
ALTER TABLE `rahatcse5bu_ntf`
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
-- Indexes for table `razin_msg`
--
ALTER TABLE `razin_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `razin_ntf`
--
ALTER TABLE `razin_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref`
--
ALTER TABLE `ref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_msg`
--
ALTER TABLE `r_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_ntf`
--
ALTER TABLE `r_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shadin_msg`
--
ALTER TABLE `shadin_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shadin_ntf`
--
ALTER TABLE `shadin_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoumicse5bu_msg`
--
ALTER TABLE `shoumicse5bu_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoumicse5bu_ntf`
--
ALTER TABLE `shoumicse5bu_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoumi_msg`
--
ALTER TABLE `shoumi_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoumi_ntf`
--
ALTER TABLE `shoumi_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t6_msg`
--
ALTER TABLE `t6_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t6_ntf`
--
ALTER TABLE `t6_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarikul_msg`
--
ALTER TABLE `tarikul_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarikul_ntf`
--
ALTER TABLE `tarikul_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1_msg`
--
ALTER TABLE `test1_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1_ntf`
--
ALTER TABLE `test1_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_msg`
--
ALTER TABLE `test_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_ntf`
--
ALTER TABLE `test_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt1_msg`
--
ALTER TABLE `tt1_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt1_ntf`
--
ALTER TABLE `tt1_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tttt_msg`
--
ALTER TABLE `tttt_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tttt_ntf`
--
ALTER TABLE `tttt_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttt_msg`
--
ALTER TABLE `ttt_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ttt_ntf`
--
ALTER TABLE `ttt_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_msg`
--
ALTER TABLE `tt_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tt_ntf`
--
ALTER TABLE `tt_ntf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_msg`
--
ALTER TABLE `t_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ntf`
--
ALTER TABLE `t_ntf`
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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `bubot_msg`
--
ALTER TABLE `bubot_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bubot_ntf`
--
ALTER TABLE `bubot_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `md_rahat_msg`
--
ALTER TABLE `md_rahat_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `md_rahat_ntf`
--
ALTER TABLE `md_rahat_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `new_msg`
--
ALTER TABLE `new_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_ntf`
--
ALTER TABLE `new_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rahat1_msg`
--
ALTER TABLE `rahat1_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rahat1_ntf`
--
ALTER TABLE `rahat1_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rahatcse5bu_msg`
--
ALTER TABLE `rahatcse5bu_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `rahatcse5bu_ntf`
--
ALTER TABLE `rahatcse5bu_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `razin_msg`
--
ALTER TABLE `razin_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `razin_ntf`
--
ALTER TABLE `razin_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref`
--
ALTER TABLE `ref`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `r_msg`
--
ALTER TABLE `r_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `r_ntf`
--
ALTER TABLE `r_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shadin_msg`
--
ALTER TABLE `shadin_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shadin_ntf`
--
ALTER TABLE `shadin_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoumicse5bu_msg`
--
ALTER TABLE `shoumicse5bu_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shoumicse5bu_ntf`
--
ALTER TABLE `shoumicse5bu_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoumi_msg`
--
ALTER TABLE `shoumi_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shoumi_ntf`
--
ALTER TABLE `shoumi_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t6_msg`
--
ALTER TABLE `t6_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t6_ntf`
--
ALTER TABLE `t6_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tarikul_msg`
--
ALTER TABLE `tarikul_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tarikul_ntf`
--
ALTER TABLE `tarikul_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test1_msg`
--
ALTER TABLE `test1_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test1_ntf`
--
ALTER TABLE `test1_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_msg`
--
ALTER TABLE `test_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_ntf`
--
ALTER TABLE `test_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tt1_msg`
--
ALTER TABLE `tt1_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tt1_ntf`
--
ALTER TABLE `tt1_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tttt_msg`
--
ALTER TABLE `tttt_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tttt_ntf`
--
ALTER TABLE `tttt_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ttt_msg`
--
ALTER TABLE `ttt_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ttt_ntf`
--
ALTER TABLE `ttt_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tt_msg`
--
ALTER TABLE `tt_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tt_ntf`
--
ALTER TABLE `tt_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_msg`
--
ALTER TABLE `t_msg`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `t_ntf`
--
ALTER TABLE `t_ntf`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
