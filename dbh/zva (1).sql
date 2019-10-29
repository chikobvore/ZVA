-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 06:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zva`
--

-- --------------------------------------------------------

--
-- Table structure for table `health_details`
--

CREATE TABLE `health_details` (
  `Id` int(11) NOT NULL,
  `Member_No` varchar(100) DEFAULT NULL,
  `Height` varchar(3) DEFAULT NULL,
  `Weight` varchar(3) DEFAULT NULL,
  `Default_Hand` varchar(5) DEFAULT NULL,
  `Allegies` text DEFAULT NULL,
  `Created_No` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatae_No` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `Id` int(11) NOT NULL,
  `Member_No` varchar(100) NOT NULL,
  `Profile_Picture` text DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `National_ID` varchar(255) DEFAULT NULL,
  `Passport_No` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Contact` varchar(30) DEFAULT NULL,
  `Physical_Address` text DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `Place_of_Birth` text DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players_education_background`
--

CREATE TABLE `players_education_background` (
  `Id` int(11) NOT NULL,
  `Member_No` varchar(100) DEFAULT NULL,
  `O_Level` varchar(100) DEFAULT NULL,
  `O_Level_Province` varchar(100) DEFAULT NULL,
  `O_Level_Year` varchar(10) DEFAULT NULL,
  `A_Level` varchar(100) DEFAULT NULL,
  `A_Level_Province` varchar(100) DEFAULT NULL,
  `A_Level_Year` varchar(10) DEFAULT NULL,
  `Tertiary` varchar(100) DEFAULT NULL,
  `Tertiary_Province` varchar(100) DEFAULT NULL,
  `Tertiary_Year` varchar(10) DEFAULT NULL,
  `Created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players_professional_information`
--

CREATE TABLE `players_professional_information` (
  `Id` int(11) NOT NULL,
  `Member_No` varchar(100) DEFAULT NULL,
  `Current_Club` varchar(100) DEFAULT NULL,
  `Province` varchar(100) DEFAULT NULL,
  `Contract_date` varchar(10) DEFAULT NULL,
  `Experiary_date` varchar(10) DEFAULT NULL,
  `Previous_Club` varchar(255) DEFAULT NULL,
  `Previous_Club_Province` varchar(255) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports_details`
--

CREATE TABLE `sports_details` (
  `Id` int(11) NOT NULL,
  `Member_No` varchar(100) DEFAULT NULL,
  `FIVB_No` int(11) DEFAULT NULL,
  `Highest_Level_Played` varchar(50) DEFAULT NULL,
  `National_Team_Caps` int(11) DEFAULT NULL,
  `Provincial_Team_Cap` int(11) DEFAULT NULL,
  `Zone_6_Games` int(11) DEFAULT NULL,
  `Created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health_details`
--
ALTER TABLE `health_details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `players_education_background`
--
ALTER TABLE `players_education_background`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `players_professional_information`
--
ALTER TABLE `players_professional_information`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sports_details`
--
ALTER TABLE `sports_details`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health_details`
--
ALTER TABLE `health_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `players_education_background`
--
ALTER TABLE `players_education_background`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `players_professional_information`
--
ALTER TABLE `players_professional_information`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sports_details`
--
ALTER TABLE `sports_details`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
