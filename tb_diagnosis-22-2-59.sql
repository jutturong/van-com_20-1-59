-- phpMyAdmin SQL Dump
-- version 4.4.14.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2016 at 12:58 PM
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
-- Table structure for table `tb_diagnosis`
--

CREATE TABLE IF NOT EXISTS `tb_diagnosis` (
  `id_diagnosis` int(11) NOT NULL,
  `id_patient` int(11) DEFAULT NULL,
  `ward_` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cb_conts` float DEFAULT NULL,
  `bodyweight` float NOT NULL,
  `height` float NOT NULL,
  `indication1` int(5) NOT NULL,
  `indication2` int(5) NOT NULL,
  `underllyingdisease1` int(11) NOT NULL,
  `underllyingdisease2` int(11) NOT NULL,
  `underllyingdisease3` int(11) NOT NULL,
  `underllyingdisease4` int(11) NOT NULL,
  `underllyingdisease5` int(11) NOT NULL,
  `underllyingdisease6` int(11) NOT NULL,
  `underllyingdisease7` int(11) NOT NULL,
  `underllyingdisease8` int(11) NOT NULL,
  `underllyingdisease9` int(11) NOT NULL,
  `underllyingdisease10` int(11) NOT NULL,
  `reason_for_TDM` int(11) NOT NULL,
  `vancomycin` int(5) NOT NULL,
  `current_medications` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `current_medications_weight` float NOT NULL,
  `current_medications_date` date NOT NULL,
  `sampling_time` datetime NOT NULL,
  `drugadministrationtime` datetime NOT NULL,
  `measured_level` float NOT NULL,
  `measured_level_cmb` int(5) NOT NULL,
  `vd_index` int(5) NOT NULL,
  `vd` float NOT NULL,
  `cl` float NOT NULL,
  `ke` float NOT NULL,
  `hl` float NOT NULL,
  `assessment` varchar(55) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Interpretation_Recommendation` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Note` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pharmacist1` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pharmacist2` varchar(70) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tel` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_record` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_diagnosis`
--

INSERT INTO `tb_diagnosis` (`id_diagnosis`, `id_patient`, `ward_`, `cb_conts`, `bodyweight`, `height`, `indication1`, `indication2`, `underllyingdisease1`, `underllyingdisease2`, `underllyingdisease3`, `underllyingdisease4`, `underllyingdisease5`, `underllyingdisease6`, `underllyingdisease7`, `underllyingdisease8`, `underllyingdisease9`, `underllyingdisease10`, `reason_for_TDM`, `vancomycin`, `current_medications`, `current_medications_weight`, `current_medications_date`, `sampling_time`, `drugadministrationtime`, `measured_level`, `measured_level_cmb`, `vd_index`, `vd`, `cl`, `ke`, `hl`, `assessment`, `Interpretation_Recommendation`, `Note`, `pharmacist1`, `pharmacist2`, `tel`, `date_record`) VALUES
(47, 11, '4ง', 1.4, 60, 165, 1, 3, 1, 2, 3, 4, 18, 6, 7, 1, 2, 3, 1, 101, 'Medications8', 6, '2016-02-22', '2016-02-22 00:00:00', '2016-02-12 21:02:14', 9, 1, 6, 10, 8, 88, 5, 'Assessment mm', 'nterpretation and Recommendation  bb', 'test note', 'ภญ.ปฐมา โสภาช', 'ภญ.ศิริลักษณ์ ใจซื่อ', '11221', '2016-02-22'),
(48, 4, '4ข', 0.25, 55, 155, 3, 2, 4, 6, 7, 1, 2, 2, 1, 4, 5, 4, 1, 5, 'Current Medications', 2, '2016-02-03', '2016-02-10 19:49:15', '2016-02-13 19:49:21', 3, 1, 1, 3, 6, 49, 0.01, 'Assessment', 'Interpretation and Recommendation', 'Note', 'ภญ.ปฐมา โสภาช', 'ภญ.ศิริลักษณ์ ใจซื่อ', '11221', '2016-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  ADD PRIMARY KEY (`id_diagnosis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_diagnosis`
--
ALTER TABLE `tb_diagnosis`
  MODIFY `id_diagnosis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
