-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2016 at 02:23 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vancomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reason_tdm`
--

CREATE TABLE IF NOT EXISTS `reason_tdm` (
  `id_reason` int(11) NOT NULL,
  `reason_detail` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reason_tdm`
--

INSERT INTO `reason_tdm` (`id_reason`, `reason_detail`) VALUES
(1, 'Suspect of subtherapeutic effect'),
(2, 'Suspect of toxicity'),
(3, 'Regular check-up'),
(4, 'Adherence monitoing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reason_tdm`
--
ALTER TABLE `reason_tdm`
  ADD PRIMARY KEY (`id_reason`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reason_tdm`
--
ALTER TABLE `reason_tdm`
  MODIFY `id_reason` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
