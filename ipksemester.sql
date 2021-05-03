-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 09:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipksemester`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `semester` bigint(5) NOT NULL,
  `ip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`semester`, `ip`) VALUES
(1, '3,50'),
(2, '3.64');

-- --------------------------------------------------------

--
-- Table structure for table `login_mhs`
--

CREATE TABLE `login_mhs` (
  `id` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_mhs`
--

INSERT INTO `login_mhs` (`id`, `nama`, `email`, `nohp`, `password`) VALUES
(1, 'Veni Wigiyanti', 'veni.wg@gmail.com', '087821510547', '817eccdf896807cc6da1c703ea21cfa0'),
(2, 'Veni', 'veniwigiyanti23@gmail.com', '087821510547', '817eccdf896807cc6da1c703ea21cfa0'),
(3, 'Wiwin windarsih', 'veni.wg@gmail.com', '081222298876', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`semester`);

--
-- Indexes for table `login_mhs`
--
ALTER TABLE `login_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `semester` bigint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_mhs`
--
ALTER TABLE `login_mhs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
