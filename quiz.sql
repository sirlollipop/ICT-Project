-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 12:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `category1`
--

CREATE TABLE `category1` (
  `quizid` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `score3` int(11) NOT NULL,
  `score4` int(11) NOT NULL,
  `score5` int(11) NOT NULL,
  `score6` int(11) NOT NULL,
  `score7` int(11) NOT NULL,
  `score8` int(11) NOT NULL,
  `score9` int(11) NOT NULL,
  `score10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category1`
--

INSERT INTO `category1` (`quizid`, `score1`, `score2`, `score3`, `score4`, `score5`, `score6`, `score7`, `score8`, `score9`, `score10`) VALUES
(1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category2`
--

CREATE TABLE `category2` (
  `quizid` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `score3` int(11) NOT NULL,
  `score4` int(11) NOT NULL,
  `score5` int(11) NOT NULL,
  `score6` int(11) NOT NULL,
  `score7` int(11) NOT NULL,
  `score8` int(11) NOT NULL,
  `score9` int(11) NOT NULL,
  `score10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category2`
--

INSERT INTO `category2` (`quizid`, `score1`, `score2`, `score3`, `score4`, `score5`, `score6`, `score7`, `score8`, `score9`, `score10`) VALUES
(1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category3`
--

CREATE TABLE `category3` (
  `quizid` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `score3` int(11) NOT NULL,
  `score4` int(11) NOT NULL,
  `score5` int(11) NOT NULL,
  `score6` int(11) NOT NULL,
  `score7` int(11) NOT NULL,
  `score8` int(11) NOT NULL,
  `score9` int(11) NOT NULL,
  `score10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category3`
--

INSERT INTO `category3` (`quizid`, `score1`, `score2`, `score3`, `score4`, `score5`, `score6`, `score7`, `score8`, `score9`, `score10`) VALUES
(1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category4`
--

CREATE TABLE `category4` (
  `quizid` int(11) NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `score3` int(11) NOT NULL,
  `score4` int(11) NOT NULL,
  `score5` int(11) NOT NULL,
  `score6` int(11) NOT NULL,
  `score7` int(11) NOT NULL,
  `score8` int(11) NOT NULL,
  `score9` int(11) NOT NULL,
  `score10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category4`
--

INSERT INTO `category4` (`quizid`, `score1`, `score2`, `score3`, `score4`, `score5`, `score6`, `score7`, `score8`, `score9`, `score10`) VALUES
(1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `category3`
--
ALTER TABLE `category3`
  ADD PRIMARY KEY (`quizid`);

--
-- Indexes for table `category4`
--
ALTER TABLE `category4`
  ADD PRIMARY KEY (`quizid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category2`
--
ALTER TABLE `category2`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category3`
--
ALTER TABLE `category3`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category4`
--
ALTER TABLE `category4`
  MODIFY `quizid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
