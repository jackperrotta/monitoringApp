-- Create local user and db named monitor

CREATE USER 'monitor'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';
GRANT ALL PRIVILEGES ON *.* TO 'monitor'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `monitor`;
GRANT ALL PRIVILEGES ON `monitor`.* TO 'monitor'@'localhost';

-- Create users table
CREATE TABLE `monitor`.`users` ( `userID` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(1000) NOT NULL , `password` VARCHAR(1000) NOT NULL , `first-name` VARCHAR(1000) NOT NULL , `last-name` VARCHAR(1000) NOT NULL , `mac-address` VARCHAR(1000) NOT NULL , PRIMARY KEY (`userID`)) ENGINE = InnoDB;

-- Create user-ref table
CREATE TABLE `monitor`.`user-ref` ( `user-refID` INT NOT NULL AUTO_INCREMENT , `userID` INT NOT NULL , `firmID` INT NOT NULL , `admin` BOOLEAN NOT NULL , PRIMARY KEY (`user-refID`)) ENGINE = InnoDB;

-- Create monitor table
CREATE TABLE `monitor`.`firms` ( `firmID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(1000) NOT NULL , `attributes` VARCHAR(1000) NOT NULL , PRIMARY KEY (`firmID`)) ENGINE = InnoDB;

-- Create logs table *OPPPS FORGOT TO MAKE LOGID PRIMARY KEY
CREATE TABLE `monitor`.`logs` ( `logID` INT NOT NULL , `mac-address` VARCHAR(1000) NOT NULL , `timestamp` DATETIME NOT NULL ) ENGINE = InnoDB;

-- Create log-ref table
CREATE TABLE `monitor`.`log-ref` ( `log-refID` INT NOT NULL AUTO_INCREMENT , `logID` INT NOT NULL , `windowID` INT NOT NULL , PRIMARY KEY (`log-refID`)) ENGINE = InnoDB;

-- Create windows table
CREATE TABLE `monitor`.`windows` ( `windowID` INT NOT NULL AUTO_INCREMENT , `sessionID` INT NOT NULL , `desktop` VARCHAR(1000) NOT NULL , `name` VARCHAR(1000) NOT NULL , PRIMARY KEY (`windowID`)) ENGINE = InnoDB;

-- Create softwares table
CREATE TABLE `monitor`.`softwares` ( `softwareID` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(1000) NOT NULL , `description` VARCHAR(1000) NOT NULL , `verified` BOOLEAN NOT NULL , `transferable` BOOLEAN NOT NULL , PRIMARY KEY (`softwareID`)) ENGINE = InnoDB;

-- Create licenses table
CREATE TABLE `monitor`.`licenses` ( `licenseID` INT NOT NULL AUTO_INCREMENT , `terms` VARCHAR(1000) NOT NULL , `unit-cost` VARCHAR(1000) NOT NULL , PRIMARY KEY (`licenseID`)) ENGINE = InnoDB;
    -- OPPS FORGOT TO ADD SOFTWAREID, ALTER TABLE:
    ALTER TABLE `licenses` ADD `softwareID` INT NOT NULL AFTER `licenseID`;

-- create license-ref table
CREATE TABLE `monitor`.`license-ref` ( `license-refID` INT NOT NULL AUTO_INCREMENT , `licenseID` INT NOT NULL , `firmID` INT NOT NULL , `quantity-used` INT NOT NULL , `quantity-purchased` INT NOT NULL , PRIMARY KEY (`license-refID`)) ENGINE = InnoDB;

-- Actually I made a couple mistakes so here's the dump query

-- phpMyAdmin SQL Dump
-- Host: localhost
-- Generation Time: Feb 19, 2018 at 01:36 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitor`
--

-- --------------------------------------------------------

--
-- Table structure for table `firms`
--

CREATE TABLE `firms` (
  `firmID` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `attributes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `license-ref`
--

CREATE TABLE `license-ref` (
  `license-refID` int(11) NOT NULL,
  `licenseID` int(11) NOT NULL,
  `firmID` int(11) NOT NULL,
  `quantity-used` int(11) NOT NULL,
  `quantity-purchased` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE `licenses` (
  `licenseID` int(11) NOT NULL,
  `softwareID` int(11) NOT NULL,
  `terms` varchar(1000) NOT NULL,
  `unit-cost` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log-ref`
--

CREATE TABLE `log-ref` (
  `log-refID` int(11) NOT NULL,
  `logID` int(11) NOT NULL,
  `windowID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` int(11) NOT NULL,
  `mac-address` int(50) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE `softwares` (
  `softwareID` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `transferable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user-ref`
--

CREATE TABLE `user-ref` (
  `user-refID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `firmID` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first-name` varchar(1000) NOT NULL,
  `last-name` varchar(1000) NOT NULL,
  `mac-address` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `windows`
--

CREATE TABLE `windows` (
  `windowID` int(11) NOT NULL,
  `softwareID` int(11) NOT NULL,
  `sessionID` int(11) NOT NULL,
  `desktop` varchar(1000) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firms`
--
ALTER TABLE `firms`
  ADD PRIMARY KEY (`firmID`);

--
-- Indexes for table `license-ref`
--
ALTER TABLE `license-ref`
  ADD PRIMARY KEY (`license-refID`),
  ADD KEY `licenseID` (`licenseID`),
  ADD KEY `firmID` (`firmID`);

--
-- Indexes for table `licenses`
--
ALTER TABLE `licenses`
  ADD PRIMARY KEY (`licenseID`),
  ADD KEY `softwareID` (`softwareID`);

--
-- Indexes for table `log-ref`
--
ALTER TABLE `log-ref`
  ADD PRIMARY KEY (`log-refID`),
  ADD KEY `logID` (`logID`),
  ADD KEY `windowID` (`windowID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `mac-address` (`mac-address`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`softwareID`);

--
-- Indexes for table `user-ref`
--
ALTER TABLE `user-ref`
  ADD PRIMARY KEY (`user-refID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `firmID` (`firmID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `mac-address` (`mac-address`);

--
-- Indexes for table `windows`
--
ALTER TABLE `windows`
  ADD PRIMARY KEY (`windowID`),
  ADD KEY `softwareID` (`softwareID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `firms`
--
ALTER TABLE `firms`
  MODIFY `firmID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `license-ref`
--
ALTER TABLE `license-ref`
  MODIFY `license-refID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `licenses`
--
ALTER TABLE `licenses`
  MODIFY `licenseID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log-ref`
--
ALTER TABLE `log-ref`
  MODIFY `log-refID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `softwareID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user-ref`
--
ALTER TABLE `user-ref`
  MODIFY `user-refID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `windows`
--
ALTER TABLE `windows`
  MODIFY `windowID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `firms`
--
ALTER TABLE `firms`
  ADD CONSTRAINT `firms_ibfk_1` FOREIGN KEY (`firmID`) REFERENCES `user-ref` (`firmID`);

--
-- Constraints for table `license-ref`
--
ALTER TABLE `license-ref`
  ADD CONSTRAINT `license-ref_ibfk_1` FOREIGN KEY (`firmID`) REFERENCES `firms` (`firmID`);

--
-- Constraints for table `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `licenses_ibfk_1` FOREIGN KEY (`softwareID`) REFERENCES `softwares` (`softwareID`),
  ADD CONSTRAINT `licenses_ibfk_2` FOREIGN KEY (`licenseID`) REFERENCES `license-ref` (`licenseID`);

--
-- Constraints for table `log-ref`
--
ALTER TABLE `log-ref`
  ADD CONSTRAINT `log-ref_ibfk_1` FOREIGN KEY (`windowID`) REFERENCES `windows` (`windowID`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`logID`) REFERENCES `log-ref` (`logID`),
  ADD CONSTRAINT `logs_ibfk_2` FOREIGN KEY (`mac-address`) REFERENCES `users` (`mac-address`);

--
-- Constraints for table `user-ref`
--
ALTER TABLE `user-ref`
  ADD CONSTRAINT `user-ref_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `windows`
--
ALTER TABLE `windows`
  ADD CONSTRAINT `windows_ibfk_1` FOREIGN KEY (`softwareID`) REFERENCES `softwares` (`softwareID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
