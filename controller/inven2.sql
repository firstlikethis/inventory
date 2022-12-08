-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 05:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inven2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_members`
--

CREATE TABLE `tb_members` (
  `id_member` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `login_last` datetime NOT NULL,
  `status` enum('member','admin','','') NOT NULL DEFAULT 'admin',
  `image_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_members`
--

INSERT INTO `tb_members` (`id_member`, `firstname`, `lastname`, `ip`, `department`, `email`, `password`, `tel`, `login_last`, `status`, `image_user`) VALUES
(1, 'tery', 'asdasd', '::1', 'asdasd', 'a@gmail.com', '4f442542000951e6acad7a3115d514f116c8c7ab0045edf96cfee39ae4f9c0c9', '0982389122', '2022-12-08 22:12:40', 'admin', ''),
(2, 'asdasd', 'asdasd', '', 'asdasd', 'q@gmail.com', '76ba0f5de12bc6cc8340c6413b0c68d875fa9220c2645a1275d71d39d3a8d347', '0982389122', '0000-00-00 00:00:00', 'admin', ''),
(3, 'weriajeprjn', 'asropjoajroij', '', 'oijnuoidnrfu', 'uheuir@gmail.com', '8fef3c4250cea08ef795aee7c8b04b16e7f3ee29f98e7c840ab0464c638f168b', '0982389122', '0000-00-00 00:00:00', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id_products` int(11) NOT NULL,
  `name_product` varchar(245) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `serial_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mac_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `boxlan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `departments` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_users` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `floors` varchar(222) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id_products`, `name_product`, `serial_number`, `ip_address`, `mac_address`, `boxlan`, `departments`, `name_users`, `floors`, `remark`) VALUES
(17, 'C65001', '12345678', '172.30.50.168', 'asd:asda:asd:asd', '23', 'เทคโนโลยีสารสนเทศ', 'วิเชียร คำผาน', '6', 'เครื่องทดสอบ'),
(18, 'C65002', '12344132', '172.50.117.188', 'sdf:dsf:ser:wrf', '2', 'บัญชี', 'ทรงมั่น เอี่ยมศรีวงษา', '5', 'tester'),
(19, '123145', 'in', 'in', 'in', 'in', 'jn', 'njn', 'jn', 'jn'),
(20, 'oij', 'ok', 'kmk', 'mkm', 'km', 'km', 'kmk', 'mkm', 'km'),
(21, '[opk', 'pk', 'kk', ';k', ';', 'k;l', 'k', 'k', 'lk'),
(22, 'p[', 'opjio', 'io', 'oj', 'oij', 'ioj', 'ioji', 'o', 'jio'),
(23, 'sdf', 'io', 'juih', 'h', 'ih', 'iuh', 'uihu', 'ih', 'l;k;'),
(24, '[;', 'p[ok', 'op', 'iu', 'iuj', 'oij', 'oij', 'i', ';l,l'),
(25, ';l', 'pojoi', 'joi', 'joi', 'j', 'oij', 'ioj', 'ioj', 'iojo'),
(26, ']p[l', 'kij', '89h', 'hu', 'h', 'hy', 'huh', 'uih', 'uih'),
(27, 'asduh', 'yug', 'gyu', 'gyug', 'tf', 'f', 'f6', '7fug', 'uy'),
(28, '[0oi90', 'u8', '9u', '89u', '89u89', 'u89', 'u89', 'u89', 'u9u'),
(29, '1234', 'hiu', 'hu', 'ygt7v', 'gy', 'uihj', 'uyb', 'tg', '8hij'),
(30, 'asduygyt', 'fr6f', 'f', '7fg', 'tg', 'tyft', 'vt', 'vt', 'yv'),
(31, 'a=soid89sh8', 'yh', 'j09a90j9', 'huh', 'y8', '8gy', 'vt7', 'v7t', 'vtv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_members`
--
ALTER TABLE `tb_members`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_products`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_members`
--
ALTER TABLE `tb_members`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
