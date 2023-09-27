-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 12:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eps_gas`
--

-- --------------------------------------------------------

--
-- Table structure for table `agentrecord`
--

CREATE TABLE `agentrecord` (
  `RecordId` int(10) NOT NULL,
  `ClientName` varchar(100) NOT NULL,
  `Kg` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `AgentUserName` varchar(100) NOT NULL,
  `Request` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agentrecord`
--

INSERT INTO `agentrecord` (`RecordId`, `ClientName`, `Kg`, `Quantity`, `Price`, `AgentUserName`, `Request`) VALUES
(1, 'Didier', 30, 300, 2000, 'Bwasisi', 'Request'),
(3, 'Divine', 30, 400, 5000, 'Bwasisi', 'Delete'),
(4, 'Divine', 30, 400, 5000, 'Bwasisi', 'Delete'),
(5, 'Divine', 32, 2323, 56565656, 'Jullien', 'Delete'),
(6, 'Divine', 32, 2323, 56565656, 'Jullien', 'Delete'),
(7, 'Divine', 32, 2323, 56565656, 'Jullien', 'Request'),
(8, 'Didier', 30, 300, 3000, 'Muhire@3', 'Request'),
(10, 'Divine', 34, 34, 56565656, 'Bwasisi', 'Delete'),
(11, '', 0, 0, 0, 'Bwasisi', 'Delete'),
(12, '', 0, 0, 0, 'Bwasisi', 'Delete'),
(13, 'Divine', 34, 34, 56565656, 'Bwasisi', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `angent`
--

CREATE TABLE `angent` (
  `agentId` int(10) NOT NULL,
  `agentNames` varchar(76) NOT NULL,
  `Gander` varchar(300) NOT NULL,
  `location` varchar(76) NOT NULL,
  `username` varchar(76) NOT NULL,
  `password` varchar(76) NOT NULL,
  `status` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `angent`
--

INSERT INTO `angent` (`agentId`, `agentNames`, `Gander`, `location`, `username`, `password`, `status`) VALUES
(11, 'Ganza Kevin', 'Male', 'Gisenyi', 'Ganza', '01cfcd4f6b8770febfb40cb906715822', 'Block');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `Id` int(10) NOT NULL,
  `Username` varchar(76) NOT NULL,
  `Password` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`Id`, `Username`, `Password`) VALUES
(1, 'Didier', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agentrecord`
--
ALTER TABLE `agentrecord`
  ADD PRIMARY KEY (`RecordId`);

--
-- Indexes for table `angent`
--
ALTER TABLE `angent`
  ADD PRIMARY KEY (`agentId`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agentrecord`
--
ALTER TABLE `agentrecord`
  MODIFY `RecordId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `angent`
--
ALTER TABLE `angent`
  MODIFY `agentId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `manage`
--
ALTER TABLE `manage`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
