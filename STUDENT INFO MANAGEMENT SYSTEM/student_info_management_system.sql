-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 02:48 AM
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
-- Database: `student_info_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_fs`
--

CREATE TABLE `user_fs` (
  `id` int(11) NOT NULL,
  `stid` varchar(100) NOT NULL,
  `kpwkp` int(100) NOT NULL,
  `oralcom` int(100) NOT NULL,
  `introphil` int(100) NOT NULL,
  `perdev` int(100) NOT NULL,
  `pe` int(100) NOT NULL,
  `genmath` int(100) NOT NULL,
  `els` int(100) NOT NULL,
  `cp1` int(100) NOT NULL,
  `cp2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `stid` varchar(11) NOT NULL,
  `lrn` bigint(12) NOT NULL,
  `pic` longblob NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `mi` varchar(10) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(50) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `contactnum` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `parentnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `stid`, `lrn`, `pic`, `firstname`, `mi`, `lastname`, `age`, `birthday`, `gender`, `address`, `parent`, `contactnum`, `email`, `section`, `parentnum`) VALUES
(17, '0', 136425120338, '', 'Zyrel', 'A.', 'Abigan', 17, 'fakfakf kajkfn', 'male', 'ffkaofinni2pi3ri3', 'afjoapfi', 0, 'afa@gmail.com', 'ICT-1B', 0),
(18, '0', 222001120080, '', 'Relwin', 'A.', 'Mata', 17, 'af', 'male', 'fa', 'jj', 9, 'afa@gmail.com', 'ICT-1B', 0),
(19, 'user', 107918110245, 0x506963734172745f30312d32352d30392e34342e30392e6a7067, 'John Benedict', 'M.', 'Villegas', 17, 'NOV 2005', 'male', 'FAFAFFAFA', 'FAFAF', 99937822, 'GMA@gmail.com', 'ICT-1B', 0),
(20, 'user', 136434090168, '', 'Ryan Joshua', 'V.', 'Buenaflor', 17, 'NOV 2004', 'male', 'FAFAFFAFA', 'FAFAF', 99937822, 'GMA@gmail.com', 'ICT-1B', 0),
(21, '0999999090', 136428120340, '', 'Neil Bryant', 'R.', 'Guerriva', 17, '', 'male', 'JKJFKAJFKA', 'parent', 2147483647, 'jfkjakf@gmail.com', 'male', 0),
(22, '0999999090', 136842120146, '', 'Lojh Hachi', '', 'Imaysay', 17, '', 'male', 'JKJFKAJFKA', 'parent', 2147483647, 'jfkjakf@gmail.com', 'male', 0),
(23, 'fafafaf', 136443120340, '', 'Kerby Joshua', 'P.', 'Mangalino', 17, 'faa', 'male', 'afaff0', 'parent', 90909009, 'jfka@gmail.com', 'male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `user_list` (
  `id` int(11) NOT NULL,
  `stid` varchar(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `assignsection` varchar(100) NOT NULL,
  `access` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_list`
--

INSERT INTO `user_list` (`id`, `stid`, `surname`, `password`, `assignsection`, `access`) VALUES
(1, '1admin', 'admin', 'admin1105', '', 'admin'),
(2, '0', 'aujsc.shs.villegas.john', 'villegas123', '', 'student'),
(3, '', 'teacher1', '123', 'ICT-2B', 'teacher'),
(4, 'user', 'user', 'user', '', 'student'),
(14, '2teacher', 'teacher2', '321', 'ICT-1B', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_fs`
--
ALTER TABLE `user_fs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `user_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_fs`
--
ALTER TABLE `user_fs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `user_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
