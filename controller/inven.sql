-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 06:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inven`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_members`
--

CREATE TABLE `tb_members` (
  `id_member` int(11) NOT NULL COMMENT 'Id',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `ip` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `login_last` datetime NOT NULL,
  `status` enum('member','admin','','') NOT NULL DEFAULT 'member',
  `image_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_members`
--

INSERT INTO `tb_members` (`id_member`, `firstname`, `lastname`, `ip`, `department`, `email`, `password`, `tel`, `login_last`, `status`, `image_user`) VALUES
(10, 'try', 'trand', '::1', 'it', 'g@gmail.com', '4f442542000951e6acad7a3115d514f116c8c7ab0045edf96cfee39ae4f9c0c9', '0982389122', '2022-11-04 00:11:19', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `id_products` int(11) NOT NULL,
  `name_product` varchar(50) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `mac_address` varchar(30) NOT NULL,
  `boxlan` varchar(20) NOT NULL,
  `departments` varchar(50) NOT NULL,
  `name_users` varchar(50) NOT NULL,
  `floors` varchar(10) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_members`
--
ALTER TABLE `tb_members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`id_products`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_members`
--
ALTER TABLE `tb_members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
