-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 24, 2016 at 08:44 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kang_baseon`
--

-- --------------------------------------------------------

--
-- Table structure for table `kang_history`
--

CREATE TABLE `kang_history` (
  `id_history` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nameuser` varchar(20) NOT NULL,
  `emailuser` varchar(70) NOT NULL,
  `type_history` enum('access','visit','action') NOT NULL,
  `type_history1` enum('hack','login','forgot','logout','page','add','edit','delete','search') NOT NULL,
  `message_history` text NOT NULL,
  `ip_history` varchar(15) NOT NULL,
  `os_history` varchar(100) NOT NULL,
  `browser_history` varchar(100) NOT NULL,
  `recorded_on` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kang_users`
--

CREATE TABLE `kang_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(44) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `birth` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `address` text NOT NULL,
  `created_on` varchar(15) NOT NULL,
  `last_login` varchar(15) NOT NULL,
  `forgot_password` varchar(15) NOT NULL,
  `status` enum('active','unverified','inactive','blocked','deleted') NOT NULL,
  `ip` varchar(15) NOT NULL,
  `os` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kang_history`
--
ALTER TABLE `kang_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `kang_users`
--
ALTER TABLE `kang_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kang_history`
--
ALTER TABLE `kang_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kang_users`
--
ALTER TABLE `kang_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
