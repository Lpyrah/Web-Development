-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 07:13 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luke`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(5) NOT NULL,
  `UserID` int(5) DEFAULT NULL,
  `CommentContent` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `UserID`, `CommentContent`) VALUES
(21, 6, 'Hello'),
(22, 8, 'Beartooth is bad trololol'),
(23, 10, 'Shh, they are great'),
(24, 9, 'Hey guys'),
(25, 11, 'Do you guys like Aggressive it\'s my favorite album xD');

-- --------------------------------------------------------

--
-- Table structure for table `uk`
--

CREATE TABLE `uk` (
  `VenueID` int(5) NOT NULL,
  `TourDate` date NOT NULL,
  `Venue` varchar(40) NOT NULL,
  `Location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(5) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `AgeGroup` varchar(10) NOT NULL,
  `AdminPriv` char(1) NOT NULL,
  `MailList` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `Username`, `Password`, `Gender`, `AgeGroup`, `AdminPriv`, `MailList`) VALUES
(6, 'LukeB@gmail.com', 'Luke', '$2y$10$a6D9LDHFOrH.NbSJ1vOtg.6NCB7ZKO4v5tGU5/JTL4ypHWDXz6Dqy', 'Male', 'under16', 't', 'Y'),
(8, 'LukeBA@gmail.com', 'Dude1705', '$2y$10$ZbVkNy3l93UcTpMnG3Oxpe1jeTYlhZhT9fOtERmS8YCPdnTcGp2zG', 'Male', '25To39', 'f', 'Y'),
(9, 'test@test.com', 'BeartoothFan', '$2y$10$0iDVfu7vHBoa8RmdcvMEY.69ENH6Cmyyd7eEKtvVcs8iUBdGT71T.', 'Male', 'under16', 'f', 'Y'),
(10, 'Lukers@Burgess.com', 'No1fan', '$2y$10$EeKRPoadvfjxyw3LQS.UeeBBMpH13zE7ZYOEYjDYg.k7jDaALUnXm', 'Male', 'under16', 'f', 'Y'),
(11, 'test@test123.com', 'TheTooth', '$2y$10$wkz/9eXkB8wyomGkAqnF5OzFtDTbv/geain5oRl.izQibKxNbtefS', 'Male', 'under16', 'f', 'Y'),
(12, 'pyrahz@live.com', 'John Smith', '$2y$10$NemgRnEmnHqdMo6Jyf9EKenIEBfrI/T6tOkLmwu9G3Go.ZDZt0WPS', 'Male', 'under16', 'f', 'Y'),
(13, 'LukeABC@gmail.com', 'MusicMan', '$2y$10$ufX.oJY4zAhLRdCprvnl8uRHi8vSGQeG8d2WczLjapISsCx5cXbEm', 'Male', 'under16', 'f', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `uk`
--
ALTER TABLE `uk`
  ADD PRIMARY KEY (`VenueID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `uk`
--
ALTER TABLE `uk`
  MODIFY `VenueID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
  
--
-- Dumping data for table `uk`
--

INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/19', "Rize Festival, Hylands Park, Essex", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/21', "Download Festival, Donington Park, Leicestershire", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/23', "Reading Festival, Little John's Farm, Richfield Avenue, Reading", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/24', "Leeds Festival, Bramham Park, Whetherby, Leeds", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/26', "T in the Park, Strathallan Castle, Auchterarder", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/05/28', "Rock Ness, Dores, Highlands", "UK");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/06/01', "Hurricane Festival, Scheessel", "Germany");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/06/03', "Rock am Ring, Nurburgring, Mendig", "Germany");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/06/16', "Pitch Fork Festival, Union Park, Chicago", "USA");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/06/18', "Ultra Music Festival, Bayfront Park, Miami, Florida", "USA");
INSERT INTO uk (TourDate, Venue, Location) VALUES ('2019/06/21', "Austin City Limits Music Festival, Zilker Park, Austin, Texas", "USA");

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
