-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 03:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ana`
--

-- --------------------------------------------------------

--
-- Table structure for table `boostmmr`
--

CREATE TABLE `boostmmr` (
  `startmmr` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `finishmmr` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `soloparty` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(40) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(40) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `boostmmr`
--

INSERT INTO `boostmmr` (`startmmr`, `finishmmr`, `role`, `soloparty`, `username`, `number`) VALUES
('2329', '3971', ' SUPPORT ', 'solo', 'Hamed', '09227697761'),
('2590', '3500', ' SUPPORT ', 'solo', 'Hamed', '09227697761'),
('3015', '4795', ' SUPPORT ', 'solo', 'Hamed', '09227697761'),
('246', '1954', ' SUPPORT ', 'solo', 'Hamed', '09227697761'),
('1', '6000', 'CORE', 'solo', 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `calibrate`
--

CREATE TABLE `calibrate` (
  `oldrank` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `new` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `calibrate`
--

INSERT INTO `calibrate` (`oldrank`, `new`, `username`, `number`) VALUES
('its new', 'new', 'Hamed', '09227697761'),
('4455', 'old account', 'Hamed', '09227697761');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `coachmmr` int(20) NOT NULL,
  `role` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`coachmmr`, `role`, `username`, `number`) VALUES
(4500, 'CORE', 'Hamed', '09227697761'),
(2300, ' SUPPORT ', 'Hamed', '09227697761'),
(5555, 'CORE', 'Hamed', '09227697761'),
(333, 'CORE', 'Hamed', '09227697761'),
(3413, 'CORE', 'Hamed', '09227697761'),
(3443, 'CORE', 'Hamed', '09227697761'),
(4500, 'CORE', 'Hamed', '09227697761'),
(0, '$rolec', '$username', '$number'),
(6545, 'CORE', 'Hamed', '09227697761');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(35) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `user_type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `number`, `user_type`) VALUES
('admin', 'admin@gmail.com', 'adminadmin', '1234', 1),
('Hamed', 'hamed.balanar@gmail.com', 'innjootwolte', '09227697761', 0),
('reza', 'sag@sag.ir', '1234', '1234', 0),
('seif', 'seif@seif.com', '1234', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
