-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 01:28 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `UserId` varchar(20) NOT NULL,
  `Messages` varchar(250) NOT NULL,
  `Lat` float NOT NULL,
  `Lon` float NOT NULL,
  `timeposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`UserId`, `Messages`, `Lat`, `Lon`, `timeposted`) VALUES
('597ced7348ee8', 'Testing the system', 34.46, 46.34, '2017-07-29 21:31:00'),
('597ced7348ee8', 'Another test from sd19surf', 35.36, 46.34, '2017-07-29 23:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` varchar(20) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(512) NOT NULL,
  `Icon` mediumtext NOT NULL,
  `Last_Login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Icon`, `Last_Login`) VALUES
('597a9586cc91a', 'John', 'Delaney', 'sd19surf', 'sd19surf@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '../images/Capture2.PNG', '2017-07-28'),
('597bf6fed5e3c', 'test', 'upload', 'kyleavatar', 'myemailaddress@domain.com', '202cb962ac59075b964b07152d234b70', '../images/testman.jpg', '2017-07-29'),
('597ced7348ee8', 'Ash', 'Delaney', 'a5hl34', 'a5hl34rcks@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '/images/blank_profile.gif', '2017-07-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD KEY `UserId` (`UserId`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
