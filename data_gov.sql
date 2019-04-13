-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_gov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `district` varchar(10) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(15) NOT NULL,
  `a_id` int(3) NOT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`district`, `password`, `name`, `a_id`, `email`) VALUES
('Indore', 'aaaa', 'Rohit Srivastav', 1, 'rohit@data_gov.com'),
('Gwalior', 'bbbb', 'Amit Sharma', 2, 'amit@data_gov.com'),
('Lucknow', 'cccc', 'Rohit Pandey', 3, 'rohit@data_gov.com'),
('Bhopal', 'dddd', 'Abhay Yadav', 4, 'abhay@data_gov.com');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(3) NOT NULL,
  `district` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `district`, `description`, `status`) VALUES
(2, 'Lucknow', 'wjrwkerjwkjwr r  te', 1),
(3, 'Bhopal', 'ete2equi', 0),
(4, 'Indore', 'dvwjgk', 0),
(5, 'Indore', 'nbmxn', 0),
(8, 'Gwalior', 'mbnbjdbkew', 0),
(9, 'Lucknow', 'gdjhsdkj', 0),
(10, 'Gwalior', 'gobar', 0),
(12, 'Lucknow', 'mallik', 0),
(13, 'Indore', 'water problem', 1),
(14, 'Indore', 'water again a problem.', 0),
(15, 'Indore', 'Final check!', 0),
(16, 'Indore', 'gobar', 0),
(17, 'Lucknow', 'abcd', 1),
(18, 'Indore', 'water not pure', 0),
(19, 'Indore', 'TEst comment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `district` varchar(10) NOT NULL,
  `idea` text NOT NULL,
  `status` int(1) DEFAULT '0',
  `title` varchar(80) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `email`, `district`, `idea`, `status`, `title`, `name`) VALUES
(1, 'sastava007@gmail.com', 'Indore', 'advdldhwjfejfe', 2, 'title1', 'rahul'),
(2, 'adarshchourasia.in@gmail.com', 'Indore', 'Cool ddhwjkwdkwnklwnkncklw lwknkclnw', 2, 'title2', 'ajay'),
(3, 'GHFGH@GMAIL.COM', 'Gwalior', 'gghghghghh', 2, 'title3', 'deepak'),
(6, 'khana@gmail.com', 'Bhopal', 'asfs asf as df as ', 0, 'Discussion Foruafasdfm', 'arpit'),
(7, 'mcns@hgmail.com', 'Indore', 'ghfaduydg xxxiuwdh iuduwh', 2, 'Test Title', 'rohit'),
(8, 'test@gmail.com', 'Indore', 'Hii hsghdfj.<br />\r\nShivansh......<br />\r\nSrivastava...', 2, 'Final Test', NULL),
(9, 'khana@gmail.com', 'Indore', 'hi there.', 0, 'serious', NULL),
(10, 'khana@gmail.com', 'Indore', 'hi there', 2, 'Discussion Forum', 'Balaji Rao'),
(11, 'khana@gmail.com', 'Indore', 'hi hi', 0, 'Discussion Foruafasdfm', 'Balaji Rao'),
(12, 'test1@gmail.com', 'Indore', 'hi again', 2, 'serious', 'akash'),
(13, 'sastava007@gmail.com', 'Lucknow', 'Test Comment!', 0, 'Pre Final Test!', 'Balaji Rao'),
(14, 'sastava007@gmail.com', 'Lucknow', 'Kill Them!', 2, 'Street Dogs Problem!', 'Shivansh Srivastava'),
(15, 'sastava007@gmail.com', 'Indore', 'As use of normal yellow mercury lights increases the cost to government hence LED lights</br> will increase the efficiency as well as lowers the cost.', 2, 'Use of LED bulbs for street lights.', 'Shivansh Srivastava'),
(16, 'sastava007@gmail.com', 'Indore', 'TEst Tahjgjkgj!', 0, 'Test Title', 'Shivansh Srivastava');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `c_id` int(3) NOT NULL,
  `email` varchar(15) NOT NULL,
  `district` varchar(10) NOT NULL,
  `suggestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`c_id`, `email`, `district`, `suggestion`) VALUES
(0, 'sastava007@gmai', '', 'hjdgdhdjakj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
