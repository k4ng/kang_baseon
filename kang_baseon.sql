-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 24 Nov 2016 pada 23.11
-- Versi Server: 10.1.13-MariaDB
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
-- Struktur dari tabel `kang_ref_history`
--

CREATE TABLE `kang_ref_history` (
  `rh_id` int(11) NOT NULL,
  `rh_su_id` int(11) NOT NULL,
  `rh_su_username` varchar(20) NOT NULL,
  `rh_su_email` varchar(70) NOT NULL,
  `rh_type` enum('access','visit','action') NOT NULL,
  `rh_type1` enum('hack','login','forgot','logout','page','add','edit','delete','search') NOT NULL,
  `rh_message` text NOT NULL,
  `rh_ip` varchar(15) NOT NULL,
  `rh_os` varchar(100) NOT NULL,
  `rh_browser` varchar(100) NOT NULL,
  `rh_recorded_on` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kang_ref_notify`
--

CREATE TABLE `kang_ref_notify` (
  `rn_id` int(11) NOT NULL,
  `rn_const` varchar(25) NOT NULL,
  `rn_to` varchar(225) NOT NULL,
  `rn_cc` varchar(225) NOT NULL,
  `rn_bcc` varchar(225) NOT NULL,
  `rn_subject` varchar(225) NOT NULL,
  `rn_header` text NOT NULL,
  `rn_body` text NOT NULL,
  `rn_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kang_ref_notify`
--

INSERT INTO `kang_ref_notify` (`rn_id`, `rn_const`, `rn_to`, `rn_cc`, `rn_bcc`, `rn_subject`, `rn_header`, `rn_body`, `rn_footer`) VALUES
(1, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kang_sys_token`
--

CREATE TABLE `kang_sys_token` (
  `st_id` int(11) NOT NULL,
  `st_su_id` int(11) NOT NULL,
  `st_type` varchar(30) NOT NULL,
  `st_code` varchar(44) NOT NULL,
  `st_expired` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kang_sys_users`
--

CREATE TABLE `kang_sys_users` (
  `su_id` int(11) NOT NULL,
  `su_hash` varchar(200) NOT NULL,
  `su_role` enum('admin','member') NOT NULL,
  `su_username` varchar(20) NOT NULL,
  `su_email` varchar(70) NOT NULL,
  `su_password` varchar(200) NOT NULL,
  `su_first_name` varchar(40) NOT NULL,
  `su_last_name` varchar(60) NOT NULL,
  `su_birth` date NOT NULL,
  `su_gender` enum('male','female','other') NOT NULL,
  `su_address` text NOT NULL,
  `su_created_on` varchar(15) NOT NULL,
  `su_last_login` varchar(15) NOT NULL,
  `su_forgot_password` varchar(15) NOT NULL,
  `su_status` enum('active','unverified','inactive','blocked','deleted') NOT NULL,
  `su_ip` varchar(15) NOT NULL,
  `su_os` varchar(100) NOT NULL,
  `su_browser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kang_sys_users`
--

INSERT INTO `kang_sys_users` (`su_id`, `su_hash`, `su_role`, `su_username`, `su_email`, `su_password`, `su_first_name`, `su_last_name`, `su_birth`, `su_gender`, `su_address`, `su_created_on`, `su_last_login`, `su_forgot_password`, `su_status`, `su_ip`, `su_os`, `su_browser`) VALUES
(1, '', 'admin', 'admin', 'admin@kang.com', '685716544aaaeb4351ec467fe2d3408e5308405022c269ba6064600675263fb9de56c092d78294e3756cad8866c260405721a6c597c82d6dc8a90760f83b8967', 'admin', 'kang', '2016-09-01', 'male', 'jkt', '', '', '', 'active', '', '', ''),
(19, '247dd8c99847df4a572f0517e1aaf3d20673ce5cb082e534bf35f515e9dd5f104d16d7ac2f3cbcb794f1c00dba1876aa53bccde01e746a7c5069b84aafdbdb1c', 'member', '', 'dyazincahya@gmail.com', '685716544aaaeb4351ec467fe2d3408e5308405022c2', '', '', '0000-00-00', 'male', '', '', '', '', 'active', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kang_ref_history`
--
ALTER TABLE `kang_ref_history`
  ADD PRIMARY KEY (`rh_id`);

--
-- Indexes for table `kang_ref_notify`
--
ALTER TABLE `kang_ref_notify`
  ADD PRIMARY KEY (`rn_id`);

--
-- Indexes for table `kang_sys_token`
--
ALTER TABLE `kang_sys_token`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `kang_sys_users`
--
ALTER TABLE `kang_sys_users`
  ADD PRIMARY KEY (`su_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kang_ref_history`
--
ALTER TABLE `kang_ref_history`
  MODIFY `rh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kang_ref_notify`
--
ALTER TABLE `kang_ref_notify`
  MODIFY `rn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kang_sys_token`
--
ALTER TABLE `kang_sys_token`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kang_sys_users`
--
ALTER TABLE `kang_sys_users`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
