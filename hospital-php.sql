-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 02:46 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appid` int(5) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `dname` text NOT NULL,
  `adate` date NOT NULL,
  `areason` text NOT NULL,
  `atime` time NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appid`, `pname`, `dname`, `adate`, `areason`, `atime`) VALUES
(1, 'ram', 'muthu', '2018-03-12', 'fever', '10:00:00'),
(3, 'ram', 'mythili', '2018-03-12', 'fever', '10:00:00'),
(4, 'geetha', 'muthu', '2018-03-16', 'fever', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

CREATE TABLE IF NOT EXISTS `attribute` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `age` int(5) NOT NULL,
  `gender` text NOT NULL,
  `weight` int(5) NOT NULL,
  `height` text NOT NULL,
  `hbeat` text NOT NULL,
  `prate` text NOT NULL,
  `bp` text NOT NULL,
  `sugar` text NOT NULL,
  `cholesterol` text NOT NULL,
  `smoking` int(5) NOT NULL,
  `drink` int(5) NOT NULL,
  `tobacco` int(5) NOT NULL,
  `hypertension` int(5) NOT NULL,
  `hereditary` int(5) NOT NULL,
  `surgery` int(5) NOT NULL,
  `tablets` int(5) NOT NULL,
  `treatments` int(5) NOT NULL,
  `exercise` int(5) NOT NULL,
  `ptnm` text NOT NULL,
  `blood_count` int(5) NOT NULL,
  `usalt` int(5) NOT NULL,
  `cognitive_level` int(5) NOT NULL,
  `veg_nveg` int(5) NOT NULL,
  `asbestos_exposure` int(5) NOT NULL,
  `symptom1` text NOT NULL,
  `symptom2` text NOT NULL,
  `symptom3` text NOT NULL,
  `diabetis_count` int(5) NOT NULL,
  `heart_count` int(5) NOT NULL,
  `cancer_count` int(5) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`aid`, `age`, `gender`, `weight`, `height`, `hbeat`, `prate`, `bp`, `sugar`, `cholesterol`, `smoking`, `drink`, `tobacco`, `hypertension`, `hereditary`, `surgery`, `tablets`, `treatments`, `exercise`, `ptnm`, `blood_count`, `usalt`, `cognitive_level`, `veg_nveg`, `asbestos_exposure`, `symptom1`, `symptom2`, `symptom3`, `diabetis_count`, `heart_count`, `cancer_count`) VALUES
(1, 29, 'male', 85, '180', '80', '110', '110', '120', '90', 0, 1, 1, 1, 0, 1, 0, 0, 0, 'ram', 150, 70, 20, 1, 1, '', 'fastheartbeat,sweating', '', 0, 2, 0),
(2, 25, 'male', 75, '160', '120', '140', '170', '220', '140', 1, 1, 1, 1, 1, 1, 0, 0, 1, 'praveen', 250, 70, 20, 1, 1, 'fastheartbeat,sweating,cough', '', '', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dcomments`
--

CREATE TABLE IF NOT EXISTS `dcomments` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `comments` text NOT NULL,
  `areason` text NOT NULL,
  `dname` text NOT NULL,
  `pname` text NOT NULL,
  `cdate` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dcomments`
--

INSERT INTO `dcomments` (`cid`, `comments`, `areason`, `dname`, `pname`, `cdate`) VALUES
(1, 'please take hot water', 'fever', 'muthu', 'ram', '2018-03-23'),
(2, 'tablets prescribed wrongly ', 'fever', 'muthu', 'ram', '2018-04-10'),
(3, 'dont take benzol', 'fever', 'muthu', 'ram', '2018-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` int(6) NOT NULL AUTO_INCREMENT,
  `dfname` text NOT NULL,
  `demail` text NOT NULL,
  `dphone` text NOT NULL,
  `dname` text NOT NULL,
  `dpass` text NOT NULL,
  `specialist` text NOT NULL,
  `docid` varchar(20) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `exp` int(5) NOT NULL,
  `dob` date NOT NULL,
  `color_code` text NOT NULL,
  `dproof` text NOT NULL,
  `drdate` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dfname`, `demail`, `dphone`, `dname`, `dpass`, `specialist`, `docid`, `hname`, `exp`, `dob`, `color_code`, `dproof`, `drdate`, `status`) VALUES
(1, 'muthu', 'muthu@gmail.com', '12345', 'muthu', 'muthu', 'heart', 'doc001', 'kmch', 20, '1975-03-07', 'c1,c2,c3', '', '2018-03-23', 1),
(2, 'mythili', 'mythili@gmail.com', '32423423', 'mythili', 'mythili', 'heart', 'doc002', 'kmch', 15, '1985-03-12', 'c1,c2,c3', '', '2018-03-23', 1),
(4, 'prabhakar', 'prabhakar@gmail.com', '2423423', 'prabhakar', 'prabhakar', 'cardio', 'doc003', 'psg', 10, '2018-03-23', 'c4,c5,c6', 'Penguins.jpg', '2018-03-23', 1),
(6, 'preethi', 'preethi@gmail.com', '7689095423', 'preethi', 'preethi', 'mbbs', '123', 'gh', 3, '2019-11-11', 'c1,c2,c3', 'php-syllabus.pdf', '2019-11-11', 1),
(7, 'sasi', 'sasi@gmail.com', '7689095423', 'sasi', 'sasi', 'mbbs', '123', 'gh', 3, '2019-11-12', 'c4,c5,c6', 'php-syllabus.pdf', '2019-11-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `eid` int(5) NOT NULL AUTO_INCREMENT,
  `emp_name` text NOT NULL,
  `emp_mail` text NOT NULL,
  `emp_phone` int(10) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `emp_name`, `emp_mail`, `emp_phone`) VALUES
(1, 'priyanka', 'priyanka@gmail.com', 2121434),
(2, 'chellamani', 'dfdfbv@gmail.com', 2147483647),
(3, 'chellamani', 'dfdfbv@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hid` int(5) NOT NULL AUTO_INCREMENT,
  `hname` text NOT NULL,
  `hemail` text NOT NULL,
  `hphone` int(10) NOT NULL,
  `huname` text NOT NULL,
  `hupass` text NOT NULL,
  `color_code` text NOT NULL,
  `hrdate` date NOT NULL,
  `hproof` text NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hid`, `hname`, `hemail`, `hphone`, `huname`, `hupass`, `color_code`, `hrdate`, `hproof`, `status`) VALUES
(1, 'kmch', 'kmch@gmail.com', 324123, 'kmch', 'kmch', 'c1,c2,c3', '2018-03-23', 'Tulips.jpg', 1),
(2, 'asd', 'xcvv@gmail.com', 1233, 'cvb', 'cvb', 'c1,c2,c3', '2019-11-12', 'Alaithavare.mp4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE IF NOT EXISTS `lab` (
  `lbid` int(5) NOT NULL AUTO_INCREMENT,
  `lbname` text NOT NULL,
  `lbemail` text NOT NULL,
  `lbphone` int(10) NOT NULL,
  `lbuname` text NOT NULL,
  `lbupass` text NOT NULL,
  `color_code` text NOT NULL,
  PRIMARY KEY (`lbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lbid`, `lbname`, `lbemail`, `lbphone`, `lbuname`, `lbupass`, `color_code`) VALUES
(1, 'priya scan center', 'priyascan@gmail.com', 2131432142, 'priyascan', 'priyascan', 'c1,c2,c3'),
(2, 'rfg bvbbn', 'dfgthj@gmail.com', 2147483647, 'mani', 'mani', 'c7,c8,c9'),
(3, 'qwerty', 'dfgthj@gmail.com', 2147483647, 'azx', 'azx', 'c7,c8,c9');

-- --------------------------------------------------------

--
-- Table structure for table `medical_center`
--

CREATE TABLE IF NOT EXISTS `medical_center` (
  `mcid` int(5) NOT NULL AUTO_INCREMENT,
  `mname` text NOT NULL,
  `memail` text NOT NULL,
  `mphone` int(10) NOT NULL,
  `muname` text NOT NULL,
  `mupass` text NOT NULL,
  `color_code` text NOT NULL,
  `mproof` text NOT NULL,
  `mrdate` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`mcid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `medical_center`
--

INSERT INTO `medical_center` (`mcid`, `mname`, `memail`, `mphone`, `muname`, `mupass`, `color_code`, `mproof`, `mrdate`, `status`) VALUES
(1, 'psg', 'psg@gmail.com', 2147483647, 'psg', 'psg', 'c1,c2,c3', 'Lighthouse.jpg', '2018-03-23', 1),
(2, 'annai', 'ghuyyuui@gmail.com', 2147483647, 'divya', 'divya', 'c4,c5,c6', 'fee-management-system-erp-for-schools-colleges.pdf', '2019-11-11', 1),
(3, 'asdd', 'ghuyyuui@gmail.com', 2147483647, 'asd', 'asd', 'c4,c5,c6', 'fee-management-system-erp-for-schools-colleges.pdf', '2019-11-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `mdid` int(5) NOT NULL AUTO_INCREMENT,
  `med_name` text NOT NULL,
  `edate` date NOT NULL,
  `mdate` date NOT NULL,
  `mprice` int(5) NOT NULL,
  `mqty` int(5) NOT NULL,
  `msuite` text NOT NULL,
  `muses` text NOT NULL,
  `mseffect` text NOT NULL,
  `mcomp` text NOT NULL,
  `madvise` text NOT NULL,
  `mprecaution` text NOT NULL,
  `minfo` text NOT NULL,
  PRIMARY KEY (`mdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`mdid`, `med_name`, `edate`, `mdate`, `mprice`, `mqty`, `msuite`, `muses`, `mseffect`, `mcomp`, `madvise`, `mprecaution`, `minfo`) VALUES
(2, 'paracetomal', '2018-05-30', '2018-01-30', 2, 100, 'fever', 'cure fever', 'head ache', '100mg', 'take tablet after meal', 'don''t take tablet without meal', 'http://paracetemol.com'),
(3, 'diclovin plus', '2018-06-28', '2018-06-12', 5, 100, 'fever', 'cure fever', 'vomitting', '200mg', 'take tablet after meal', 'don''t take tablet without meal', 'http://diclovinplus.com'),
(4, 'benzol', '2018-06-12', '2018-03-12', 2, 100, 'fever', 'test', 'test', 'test', 'test', 'test', 'http://test'),
(5, 'sdfghjk', '2020-02-11', '2019-11-11', 45, 2, 'headpain', 'dsgfh gnh\r\ndnnkjuuy', 'no', 'werrttvvb ghjk ssdd', 'wertty bjj', 'wert bvghg', 'http://www.dogbgbgg.in');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pid` int(6) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `uemail` text NOT NULL,
  `uphone` text NOT NULL,
  `uname` text NOT NULL,
  `upass` text NOT NULL,
  `aid` text NOT NULL,
  `addr` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `bgroup` text NOT NULL,
  `color_code` text NOT NULL,
  `urdate` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `uemail`, `uphone`, `uname`, `upass`, `aid`, `addr`, `dob`, `gender`, `bgroup`, `color_code`, `urdate`, `status`) VALUES
(1, 'ram', 'ram@gmail.com', '455234', 'ram', 'ram', '23123423424', 'coimbatore', '2018-03-15', 'Male', 'O+', 'c3,c1,c2', '2018-03-23', 1),
(2, 'geetha', 'geetha@gmail.com', '324234', 'geetha', 'geetha', '52435324', 'coimbatore', '2018-03-15', 'Female', 'O+', 'c4,c5,c6', '2018-03-23', 0),
(3, 'chellamani', 'chellamani@gmail.com', '8767896545', 'chellamani', 'chellamani', '789765456789', 'uppukkottai', '2019-11-11', 'Female', 'A+', '', '2019-11-11', 0),
(4, 'subha', 'jeya@gmail.com', '5252545678', 'mani', 'mani', '789765456789', 'tyuuio', '2019-11-11', 'Female', 'B+', 'c1,c2,c3', '2019-11-11', 1),
(8, 'kavitha', 'kavi@gmail.com', '9878653432', 'kavi', 'kavi', '123456876598', 'coimbatore', '2019-11-12', 'Female', 'A+', 'c4,c5,c6', '2019-11-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `pbid` int(5) NOT NULL AUTO_INCREMENT,
  `reason` text NOT NULL,
  `medicine` text NOT NULL,
  `dname` text NOT NULL,
  `tmedi` text NOT NULL,
  `tdays` int(5) NOT NULL,
  `morning` int(5) NOT NULL,
  `afternoon` int(5) NOT NULL,
  `night` int(5) NOT NULL,
  `pname` text NOT NULL,
  `pdate` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  `bill_price` text NOT NULL,
  PRIMARY KEY (`pbid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`pbid`, `reason`, `medicine`, `dname`, `tmedi`, `tdays`, `morning`, `afternoon`, `night`, `pname`, `pdate`, `status`, `bill_price`) VALUES
(1, 'fever', 'paracetomal', 'muthu', '6', 2, 1, 1, 1, 'ram', '2018-03-15', 1, '12'),
(2, 'fever', 'diclovin plus', 'muthu', '6', 2, 1, 1, 1, 'ram', '2018-03-15', 1, '30'),
(3, 'fever', 'benzol', 'muthu', '6', 2, 1, 1, 1, 'geetha', '2018-03-15', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `scan`
--

CREATE TABLE IF NOT EXISTS `scan` (
  `scid` int(5) NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `pname` text NOT NULL,
  `pdate` date NOT NULL,
  `spart` text NOT NULL,
  `sreport` text NOT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scan`
--

INSERT INTO `scan` (`scid`, `dname`, `pname`, `pdate`, `spart`, `sreport`) VALUES
(1, 'muthu', 'ram', '2018-03-12', 'head', 'Desert.jpg'),
(2, 'mythili', 'ram', '2018-04-20', 'chest', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `scomments`
--

CREATE TABLE IF NOT EXISTS `scomments` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `comments` text NOT NULL,
  `dname` text NOT NULL,
  `pname` text NOT NULL,
  `cdate` date NOT NULL,
  `spart` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `scomments`
--

INSERT INTO `scomments` (`cid`, `comments`, `dname`, `pname`, `cdate`, `spart`) VALUES
(1, 'scan done wrongly', 'muthu', 'ram', '2018-03-24', 'head'),
(2, 'scan done wrongly', 'muthu', 'ram', '2018-04-04', 'head');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
