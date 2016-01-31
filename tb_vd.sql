-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2016 at 10:28 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vancomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_vd`
--

CREATE TABLE IF NOT EXISTS `tb_vd` (
  `id_vd` int(11) NOT NULL AUTO_INCREMENT,
  `vd_detail` varchar(70) NOT NULL,
  PRIMARY KEY (`id_vd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_vd`
--

INSERT INTO `tb_vd` (`id_vd`, `vd_detail`) VALUES
(1, 'Aninoglycosides '),
(2, 'Vancomycin'),
(3, 'Phenobarbital '),
(4, 'Phenytoin  '),
(5, 'Valproate '),
(6, 'Carbamazepine ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
