-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 05, 2015 at 04:06 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `it_bas_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
`id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `current` varchar(20) NOT NULL,
  `sid` int(9) NOT NULL,
  `vet` tinyint(1) NOT NULL,
  `international` tinyint(1) NOT NULL,
  `runningstart` tinyint(1) NOT NULL,
  `software_prereq1` varchar(20) NOT NULL,
  `software_prereq2` varchar(20) NOT NULL,
  `software_prereq3` varchar(20) NOT NULL,
  `software_prereq4` varchar(20) NOT NULL,
  `network_prereq1` varchar(20) NOT NULL,
  `network_prereq2` varchar(20) NOT NULL,
  `network_prereq3` varchar(20) NOT NULL,
  `network_prereq4` varchar(20) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `numberofcredits` int(3) NOT NULL,
  `verify` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;