-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 07:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(30) NOT NULL,
  `adminpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `adminpass`) VALUES
('jinat', 'ji12345');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `id` int(250) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `bloodgrp` text NOT NULL,
  `phone` text NOT NULL,
  `dob` text NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`username`, `password`, `email`, `id`, `fullname`, `Address`, `bloodgrp`, `phone`, `dob`, `gender`) VALUES
('batman', '654321', 'bob@gmail.com', 12, '', '', '', '', '', ''),
('taylor', '654321', 'taylor@taylor.com', 14, 'Taylor', 'Los Angels bla bla bla\r\n@blaaa', 'AB+', '4234354', '2017-03-15', 'male'),
('john', '123456', 'john@john.com', 15, 'John Smith', 'hollwood,\r\nUSA', 'B+', '3245465643', '2017-03-22', ''),
('mamun', '123456', 'mamun@mamun.com', 16, 'Abdullah Al Mamun', 'House#3, Road#3, Block#B, Banasree Rampura, Dhaka', 'B+', '01521xxxxxx', '2017-03-20', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
