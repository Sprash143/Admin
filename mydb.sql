-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 12:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `pid` int(20) NOT NULL,
  `uid` int(10) NOT NULL,
  `id` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `des` varchar(100) NOT NULL,
  `file` varchar(20) NOT NULL,
  `datacreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`pid`, `uid`, `id`, `title`, `des`, `file`, `datacreated`) VALUES
(19, 108, 145, 'Hacker', 'Web desinger', 'files/7207_11.jpeg', '2021-10-01'),
(20, 109, 108, 'Hacker', 'Webhacker', 'files/1279_11.jpeg', '2021-10-01'),
(22, 109, 103, 'Web devloper', 'hello', 'files/5233_d.jpg', '2021-10-04'),
(23, 109, 108, 'Design', 'Software', 'files/6293_bg.jpg', '2021-10-04'),
(24, 108, 103, 'Software', 'Desinger', 'files/1569_bg.jpeg', '2021-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) NOT NULL,
  `file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file`) VALUES
(1, 'files/9833_'),
(2, 'files/9892_11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` int(25) NOT NULL,
  `confirmpassword` int(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `mob` int(20) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `password`, `confirmpassword`, `email`, `dob`, `mob`, `country`, `state`, `city`, `gender`, `comment`) VALUES
(108, 'Sprash Sharma', 123, 123, 'sprash.sharma.mca.2019@miet.ac.in', '2000-12-04', 2147483647, 'india', 'uttarpardesh', 'meerut', 'male', 'hello'),
(109, 'Sp Sharma', 100, 100, 'sp@gmail.com', '2000-12-04', 2147483647, 'india', 'uttarpardesh', 'meerut', 'male', 'ggg'),
(110, 'Mahi Sharma', 123, 123, 'mahi@gmail.com', '2000-12-04', 2147483647, 'country', 'uttarpardesh', 'meerut', 'male', 'hello'),
(111, 'Mahi Sharma', 123, 123, 'mahi@gmail.com', '2000-12-04', 2147483647, 'country', 'uttarpardesh', 'meerut', 'male', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sprash Sharma', 'sprash.sharma.m', 21354879),
(2, 'Sprash Sharma', 'sprash.sharma.mca.2019@miet.ac.in', 200),
(3, 'Sprash Sharma', 'ram@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `ver`
--

CREATE TABLE `ver` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` int(12) NOT NULL,
  `pass` int(50) NOT NULL,
  `cpass` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ver`
--

INSERT INTO `ver` (`id`, `name`, `email`, `mob`, `pass`, `cpass`) VALUES
(1, '0', '0', 2147483647, 100, 100),
(2, 'Sprash Sharma', 'sprash.sharma.mca.2019@miet.ac.in', 2147483647, 0, 0),
(3, 'Sprash Sharma', 'sprash.sharma.mca.2019@miet.ac.in', 2147483647, 100, 100),
(4, '', '', 0, 0, 0),
(5, '', '', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ver`
--
ALTER TABLE `ver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ver`
--
ALTER TABLE `ver`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
