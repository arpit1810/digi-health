-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 04:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dctr`
--

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE IF NOT EXISTS `appt` (
  `pid` varchar(30) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL,
  `rcid` varchar(5) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL,
  `tm` timestamp NULL DEFAULT NULL,
  `cst` int(11) DEFAULT NULL,
  `da` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appt`
--

INSERT INTO `appt` (`pid`, `did`, `rcid`, `nm`, `tm`, `cst`, `da`) VALUES
('agarwal.arpit1810@gmail.com', 'xyz@gmail.com', '111', 'ARPIT', '2016-06-24 05:10:49', 900, 10),
('agarwal.arpit1810@gmail.com', 'abc@gmail.com', '999', 'ARPIT', '2016-06-25 11:43:32', 900, 8);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `lbid` varchar(30) DEFAULT NULL,
  `st` int(5) DEFAULT NULL,
  `dt` varchar(50) DEFAULT NULL,
  `tm` timestamp NOT NULL,
  `ktm` varchar(30) DEFAULT NULL,
  `uptm` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`cid`, `prid`, `lbid`, `st`, `dt`, `tm`, `ktm`, `uptm`) VALUES
(1, 1, 'lab@gmail.com', 2, 'sugar test,insulin,', '2016-06-14 01:08:03', '2016_06_14_06_38_03', '2016-06-14 01:12:59'),
(1, 1, 'lab@gmail.com', 1, 'sugar test,skin', '2016-06-14 01:13:33', '2016_06_14_06_43_33', '2016-06-14 01:14:08'),
(1, 1, 'lab@gmail.com', 3, 'insulin,', '2016-06-14 01:15:15', '2016_06_14_06_45_15', '2016-06-14 01:15:47'),
(1, 1, 'lab@gmail.com', 2, 'sugar test,bile', '2016-06-14 02:21:36', '2016_06_14_07_51_36', '2016-06-14 02:22:32'),
(1, 2, 'lab@gmail.com', 1, 'heart test,x ray,', '2016-06-14 03:02:31', '2016_06_14_08_32_31', '2016-06-14 03:03:28'),
(1, 3, 'lab@gmail.com', 2, 'www,hb', '2016-06-14 06:38:16', '2016_06_14_12_08_16', '2016-06-14 06:40:03'),
(5, 1, 'lab@gmail.com', 1, 'hearing test,haemoglobin test,sugar test', '2016-06-16 11:09:51', '2016_06_16_16_39_51', '2016-06-16 11:10:23'),
(1, 5, 'lab@gmail.com', 3, 'blood test,nail', '2016-06-19 15:35:48', '2016_06_19_21_05_48', '2016-06-24 07:23:47'),
(1, 5, 'lab@gmail.com', 0, 'blood test,nail', '2016-06-19 15:36:08', '2016_06_19_21_06_08', '2016-06-19 15:36:08'),
(1, 7, 'lab@gmail.com', 0, 'nail test,', '2016-06-30 05:01:57', '2016_06_30_10_31_57', '2016-06-30 05:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `frid` int(10) DEFAULT NULL,
  `tm2` timestamp NULL DEFAULT NULL,
  `abt2` varchar(30) DEFAULT NULL,
  `cdid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`frid`, `tm2`, `abt2`, `cdid`) VALUES
(1, '2016-06-19 14:46:06', 'byee...', 'xyz@gmail.com'),
(1, '2016-06-19 14:47:03', 'kooo', 'xyz@gmail.com'),
(1, '2016-06-19 15:00:14', 'enjoying', 'abc@gmail.com'),
(5, '2016-06-20 07:32:13', 'yyyyy', 'abc@gmail.com'),
(6, '2016-06-25 02:55:20', 'hi', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE IF NOT EXISTS `doc` (
  `id` varchar(30) DEFAULT NULL,
  `pas` varchar(10) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL,
  `fd` varchar(20) DEFAULT NULL,
  `da` int(5) NOT NULL,
  `rtt` int(10) NOT NULL DEFAULT '0',
  `ptt` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `pas`, `nm`, `fd`, `da`, `rtt`, `ptt`) VALUES
('12', '11', 'ASD', 'general', 10, 0, 1),
('abc@gmail.com', '123', 'abc', 'cardio', 10, 16, 5),
('xyz@gmail.com', '123', 'xyz', 'cardio', 10, 0, 1),
('pqr@gmail.com', '123', 'pqr', 'cardio', 10, 0, 1),
('zzz@gmail.com', '123', 'zzz', 'cardio', 10, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `docloc`
--

CREATE TABLE IF NOT EXISTS `docloc` (
  `id` varchar(30) DEFAULT NULL,
  `loc` varchar(20) DEFAULT NULL,
  `deta` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `docloc`
--

INSERT INTO `docloc` (`id`, `loc`, `deta`) VALUES
('abc@gmail.com', 'dehradun', 'in prem nagar,rajpur road'),
('abc@gmail.com', 'delhi', 'chandni chowk');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `chid` varchar(30) DEFAULT NULL,
  `ptid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`chid`, `ptid`) VALUES
('abc@gmail.com', 'xyz@gmail.com'),
('xyz@gmail.com', 'abc@gmail.com'),
('abc@gmail.com', 'pqr@gmail.com'),
('abc@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `id` varchar(30) DEFAULT NULL,
  `pas` varchar(10) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id`, `pas`, `nm`) VALUES
('lab@gmail.com', '123', 'pat');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `ktm` varchar(30) DEFAULT NULL,
  `ct` int(5) DEFAULT NULL,
  `ext` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`cid`, `prid`, `ktm`, `ct`, `ext`) VALUES
(1, 1, '2016_06_14_06_38_03', 0, 'jpg'),
(1, 1, '2016_06_14_06_38_03', 1, 'jpg'),
(1, 1, '2016_06_14_06_43_33', 0, 'pdf'),
(1, 1, '2016_06_14_06_45_15', 0, 'docx'),
(1, 1, '2016_06_14_06_45_15', 1, 'docx'),
(1, 1, '2016_06_14_06_45_15', 2, 'ppt'),
(1, 1, '2016_06_14_07_51_36', 0, 'pdf'),
(1, 1, '2016_06_14_07_51_36', 1, 'pdf'),
(1, 2, '2016_06_14_08_32_31', 0, 'xls'),
(1, 3, '2016_06_14_12_08_16', 0, 'pdf'),
(1, 3, '2016_06_14_12_08_16', 1, 'xls'),
(5, 1, '2016_06_16_16_39_51', 0, 'xlsx'),
(1, 5, '2016_06_19_21_05_48', 0, ''),
(1, 5, '2016_06_19_21_05_48', 1, ''),
(1, 5, '2016_06_19_21_05_48', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `medi`
--

CREATE TABLE IF NOT EXISTS `medi` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medi`
--

INSERT INTO `medi` (`cid`, `prid`, `dt`) VALUES
(1, 1, 'combi'),
(1, 2, 'sinarest'),
(2, 1, 'dig'),
(1, 3, 'nnn'),
(5, 1, 'ciplox-d'),
(1, 4, 'combi'),
(1, 5, 'dig'),
(1, 6, 'looooo'),
(1, 7, 'digi');

-- --------------------------------------------------------

--
-- Table structure for table `pat`
--

CREATE TABLE IF NOT EXISTS `pat` (
  `id` varchar(30) DEFAULT NULL,
  `pas` varchar(10) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL,
  `gd` varchar(2) DEFAULT NULL,
  `cn` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `ad` varchar(30) DEFAULT NULL,
  `alg` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat`
--

INSERT INTO `pat` (`id`, `pas`, `nm`, `gd`, `cn`, `dob`, `ad`, `alg`) VALUES
('90', '123', NULL, NULL, NULL, NULL, NULL, NULL),
('23', '123', 'dvs', 'm', '34', '0034-03-04', 'sd', 'sdv'),
('agarwal.arpit1810@gmail.com', '123', 'ARPIT', 'm', '8110019707', '1995-10-18', 'dehradun', 'no allg'),
('arpit@gmail.com', '89', 'abc', 'm', '778', '1995-10-18', 'dehradun', 'no'),
('abhishekagarwal31328@gmail.com', 'hello', 'abhishek agarwal', 'm', '96347177667', '2001-09-20', 'saharanpur', 'fruits'),
('mkl@gmail.com', '123', 'bmn', 'm', '9090', '2016-06-01', 'uuu', 'no'),
('wwm@gmail.com', '123', 'wwm', 'm', '780', '2016-06-03', 'klo', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tm` timestamp NULL DEFAULT NULL,
  `abt` varchar(30) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `tm`, `abt`, `did`) VALUES
(1, '2016-06-19 14:44:51', 'hello', 'xyz@gmail.com'),
(2, '2016-06-19 14:47:31', 'welcome to this world', 'xyz@gmail.com'),
(3, '2016-06-19 15:00:39', 'entered over here', 'abc@gmail.com'),
(4, '2016-06-19 15:00:56', 'kooo', 'abc@gmail.com'),
(5, '2016-06-20 07:31:58', 'wecccc', 'abc@gmail.com'),
(6, '2016-06-25 02:55:13', 'welcome to doctor world', 'abc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pres`
--

CREATE TABLE IF NOT EXISTS `pres` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `pid` varchar(30) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL,
  `nop` int(10) DEFAULT NULL,
  `hdst` int(5) DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pres`
--

INSERT INTO `pres` (`cid`, `pid`, `did`, `nop`, `hdst`) VALUES
(1, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 7, 0),
(2, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 1, 0),
(3, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(4, 'agarwal.arpit1810@gmail.com', 'xyz@gmail.com', 0, 0),
(5, 'abhishekagarwal31328@gmail.com', 'abc@gmail.com', 1, 0),
(6, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(7, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(8, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(9, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(10, 'agarwal.arpit1810@gmail.com', 'abc@gmail.com', 0, 0),
(11, 'agarwal.arpit1810@gmail.com', 'xyz@gmail.com', 0, 0),
(12, 'agarwal.arpit1810@gmail.com', 'xyz@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

CREATE TABLE IF NOT EXISTS `rec` (
  `id` varchar(5) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL,
  `pas` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rec`
--

INSERT INTO `rec` (`id`, `did`, `pas`) VALUES
('999', 'abc@gmail.com', 'qqq'),
('111', 'xyz@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `cst` int(5) DEFAULT NULL,
  `dt2` varchar(30) DEFAULT NULL,
  `tm2` timestamp NULL DEFAULT NULL,
  `da` int(5) NOT NULL,
  `fdb` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`cid`, `prid`, `cst`, `dt2`, `tm2`, `da`, `fdb`) VALUES
(1, 1, 100, 'stomach', '2016-06-13 08:48:57', 0, 0),
(1, 2, 100, 'headache', '2016-06-14 03:01:16', 0, -1),
(2, 1, 400, 'pain', '2016-06-14 04:09:21', 0, 4),
(1, 3, 400, 'muscle pain', '2016-06-14 06:36:49', 0, 3),
(5, 1, 200, 'ear pain', '2016-06-16 11:06:49', 10, 0),
(1, 4, 300, 'bone', '2016-06-18 05:22:41', 10, 4),
(1, 5, 300, 'ear prob', '2016-06-18 05:39:44', 10, 5),
(1, 6, 300, 'qwqw', '2016-06-18 05:59:43', 10, 4),
(1, 7, 200, 'now', '2016-06-25 02:15:19', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE IF NOT EXISTS `share` (
  `cid` varchar(10) DEFAULT NULL,
  `prid` varchar(5) DEFAULT NULL,
  `did` varchar(30) DEFAULT NULL,
  `det` varchar(40) DEFAULT NULL,
  `tm3` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share`
--

INSERT INTO `share` (`cid`, `prid`, `did`, `det`, `tm3`) VALUES
('1', '2', 'abc@gmail.com', 'just this', '2016-06-19 04:14:42'),
('2', '1', 'abc@gmail.com', 'yyyyy', '2016-06-20 07:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `dt` varchar(20) DEFAULT NULL,
  `nb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`cid`, `prid`, `dt`, `nb`) VALUES
(1, 1, 'sugar test', 1),
(1, 1, 'insulin', 2),
(1, 2, 'heart test', 1),
(1, 2, 'x ray', 2),
(2, 1, 'muscle test', 1),
(1, 3, 'www', 1),
(5, 1, 'hearing test', 1),
(1, 4, 'bone test', 1),
(1, 5, 'blood test', 1),
(1, 6, 'pttttttt', 1),
(1, 7, 'nail test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE IF NOT EXISTS `tmp` (
  `id` varchar(30) DEFAULT NULL,
  `pas` varchar(10) DEFAULT NULL,
  `nm` varchar(20) DEFAULT NULL,
  `fd` varchar(20) DEFAULT NULL,
  `da` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`id`, `pas`, `nm`, `fd`, `da`) VALUES
('vtf@gmail.com', '123', 'vtf', 'general', 30);

-- --------------------------------------------------------

--
-- Table structure for table `upldself`
--

CREATE TABLE IF NOT EXISTS `upldself` (
  `cid` int(10) DEFAULT NULL,
  `prid` int(5) DEFAULT NULL,
  `ktm` varchar(30) DEFAULT NULL,
  `det` varchar(30) DEFAULT NULL,
  `ext` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upldself`
--

INSERT INTO `upldself` (`cid`, `prid`, `ktm`, `det`, `ext`) VALUES
(1, 6, '2016_06_20_04_47_16', 'tyyyt', 'docx'),
(1, 6, '2016_06_20_04_48_22', 'qqq', 'jpg'),
(1, 6, '2016_06_20_09_21_12', 'tttt', 'jpg'),
(1, 6, '2016_06_25_03_55_42', 'extra file', 'pdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
