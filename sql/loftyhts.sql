-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 05:45 PM
-- Server version: 5.6.36
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loftyhts`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartments`
--

CREATE TABLE IF NOT EXISTS `apartments` (
  `IDapt` int(3) NOT NULL,
  `bdrms` int(1) NOT NULL,
  `baths` float NOT NULL,
  `rent` int(5) NOT NULL,
  `sqft` int(4) NOT NULL,
  `floor` int(2) NOT NULL,
  `isAvail` tinyint(1) NOT NULL,
  `bldgID` int(2) NOT NULL,
  `apt` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartments`
--

INSERT INTO `apartments` (`IDapt`, `bdrms`, `baths`, `rent`, `sqft`, `floor`, `isAvail`, `bldgID`, `apt`) VALUES
(1, 2, 1, 1875, 875, 8, 1, 4, '8C'),
(2, 2, 1.5, 2100, 1100, 5, 1, 2, '5A'),
(3, 1, 1, 1700, 560, 2, 0, 4, '2B'),
(4, 0, 1, 1500, 585, 6, 1, 1, '6J'),
(5, 1, 1, 2100, 875, 9, 0, 3, '9D'),
(6, 3, 2, 3600, 1000, 8, 0, 2, '8A'),
(7, 0, 1, 1300, 475, 12, 1, 4, '12K'),
(8, 3, 1.5, 2900, 1285, 5, 1, 1, '5F');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `IDbldg` int(2) NOT NULL,
  `bldgName` varchar(50) NOT NULL,
  `floors` int(2) NOT NULL,
  `isPets` tinyint(1) NOT NULL,
  `isGym` tinyint(1) NOT NULL,
  `isDoorman` tinyint(1) NOT NULL,
  `bldgDesc` varchar(2500) NOT NULL,
  `hoodID` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`IDbldg`, `bldgName`, `floors`, `isPets`, `isGym`, `isDoorman`, `bldgDesc`, `hoodID`) VALUES
(1, 'Glenview Manor', 24, 0, 0, 1, 'Glenview is great', 4),
(2, 'Evergreen Estates', 12, 1, 1, 1, 'Evergreen has everything', 1),
(3, 'Sofo Lofts', 13, 0, 1, 1, 'Soho is so cool', 3),
(4, 'Breezy Corners', 16, 1, 0, 0, 'Breezy is breathtaking', 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `IDmbr` int(5) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pswd` varchar(15) NOT NULL,
  `joinTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`IDmbr`, `firstName`, `lastName`, `email`, `user`, `pswd`, `joinTime`) VALUES
(1, 'Brian', 'McClain', 'brian.mcclain@codeimmersives.com', 'BriMcC', 'Php$123', '2017-08-02 16:27:42'),
(2, 'Willie', 'Mays', 'willie@giants.com', 'SayHeyKid', 'No24', '2017-08-02 16:27:42'),
(3, 'Tom', 'Seaver', 'tom@mets.com', 'TomTerrific', 'Miracle1969', '2017-08-02 17:21:25'),
(4, 'Hank', 'Aaron', 'hammer@braves.com', 'Hammerin-Hank', 'hammer44', '2017-08-02 17:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `neighborhoods`
--

CREATE TABLE IF NOT EXISTS `neighborhoods` (
  `IDhood` int(2) NOT NULL,
  `hoodName` varchar(50) NOT NULL,
  `hoodDesc` varchar(1500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neighborhoods`
--

INSERT INTO `neighborhoods` (`IDhood`, `hoodName`, `hoodDesc`) VALUES
(1, 'Chelsea', 'Chelsea is located between Greenwich Village and Manhattan.'),
(2, 'Chinatown', 'New York City has one of the world''s largest Chinatowns.'),
(3, 'Soho', 'Soho means South of Houston. It is known as an artsy area.'),
(4, 'Tribeca', 'Tribeca means Triangle between Broadway and Canal.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`IDapt`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`IDbldg`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`IDmbr`);

--
-- Indexes for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD PRIMARY KEY (`IDhood`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartments`
--
ALTER TABLE `apartments`
  MODIFY `IDapt` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `IDbldg` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `IDmbr` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  MODIFY `IDhood` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
