-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2019 at 07:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jishikie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_location` varchar(255) NOT NULL,
  `customer_mobile` int(13) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_location`, `customer_mobile`, `customer_email`, `customer_password`) VALUES
(9, 'liz', 'Thika', 998765656, 'eliza@gmail.com', ''),
(27, 'emmy', 'UON', 729638358, 'emmy.ke@gmail.com', ''),
(28, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(29, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(30, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(31, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(32, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(33, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(34, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(35, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(36, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(37, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(38, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(39, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(40, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(41, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(42, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(43, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(44, 'Jane', 'Muranga', 729638358, 'janenjeri@gmail.com', ''),
(45, 'Wesley', 'Washington', 729638358, 'wesley@gmail.com', ''),
(46, 'Wesley', 'Washington', 729638358, 'wesley@gmail.com', ''),
(47, 'Wesley', 'Washington', 729638358, 'wesley@gmail.com', ''),
(48, 'Wesley', 'Washington', 729638358, 'wesley@gmail.com', ''),
(49, 'Wesley', 'Washington', 729638358, 'wesley@gmail.com', ''),
(50, 'yuare', '', 2147483647, 'yuare@thiaks.com', ''),
(51, 'yuare', ' thikas', 2147483647, 'yuare@thiaks.com', ''),
(52, 'yuare', ' thikas', 2147483647, 'yuare@thiaks.com', ''),
(53, 'ephantus', ' Westlands', 2147483647, 'ephantuk@gma.com', ''),
(54, 'ephantus', ' Westlands', 2147483647, 'ephantuk@gma.com', ''),
(55, 'ephantus', ' Westlands', 2147483647, 'ephantuk@gma.com', ''),
(56, 'emmah', '', 97286456, 'wesly@gmail.com', ''),
(57, 'emmah', '', 97286456, 'wesly@gmail.com', ''),
(58, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(59, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(60, 'Eli-b', '', 729638358, 'lizirunguci00041@gmail.com', ''),
(61, 'Eli-b', '', 729638358, 'lizirunguci00041@gmail.com', ''),
(62, 'Eli-b', '', 729638358, 'lizirunguci00041@gmail.com', ''),
(63, 'Eli-b', '', 729638358, 'lizirunguci00041@gmail.com', ''),
(64, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(65, 'Eli-b', '', 729638358, 'lizirunguci00041@gmail.com', ''),
(66, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(67, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(68, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(69, 'Eli-b', 'thika', 729638358, 'lizirunguci00041@gmail.com', ''),
(70, 'Nattalie', 'CAiro', 704236789, 'natalielin@gmail.com', ''),
(71, 'Nattalie', 'CAiro', 704236789, 'natalielin@gmail.com', ''),
(72, 'seleb', 'juja', 789563456, 'ljaKHD@GMAK', ''),
(73, ' ephantus', 'Thika', 720336730, 'ephatuk@gmail.com', ''),
(74, ' ephantus', 'Thika', 720336730, 'ephantuk@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `item_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_amount` varchar(255) NOT NULL,
  `item_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_next_of_kin`
--

CREATE TABLE `tbl_next_of_kin` (
  `nextofkin_id` int(255) NOT NULL,
  `nextofkin_name` varchar(50) NOT NULL,
  `nextofkin_mobile` int(50) NOT NULL,
  `nextofkin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_next_of_kin`
--

INSERT INTO `tbl_next_of_kin` (`nextofkin_id`, `nextofkin_name`, `nextofkin_mobile`, `nextofkin_email`) VALUES
(1, '0', 2147483647, '0'),
(2, '0', 2147483647, '0'),
(3, '0', 72767817, '0'),
(4, 'Racheal', 72767817, 'gftefd@fgd.n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_code` int(11) NOT NULL,
  `vendor_name` varchar(50) NOT NULL,
  `vendor_location` varchar(50) NOT NULL,
  `vendor_mobile` int(11) NOT NULL,
  `vendor_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`vendor_id`, `vendor_code`, `vendor_name`, `vendor_location`, `vendor_mobile`, `vendor_email`) VALUES
(0, 0, '', ' thikas', 2147483647, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_next_of_kin`
--
ALTER TABLE `tbl_next_of_kin`
  ADD PRIMARY KEY (`nextofkin_id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`vendor_id`),
  ADD UNIQUE KEY `vnedor_code` (`vendor_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_next_of_kin`
--
ALTER TABLE `tbl_next_of_kin`
  MODIFY `nextofkin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
