-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 01:22 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_counter`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id_barang` int(100) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `jenis1` varchar(100) NOT NULL,
  `brand1` varchar(100) NOT NULL,
  `stok1` int(100) NOT NULL,
  `harga1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id_barang`, `nama1`, `jenis1`, `brand1`, `stok1`, `harga1`) VALUES
(3, 'xcadad', 'aedfsrg', 'dsrgstg', 0, 'dvsfgs');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `cpu` varchar(200) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `nama`, `jenis`, `brand`, `cpu`, `stok`, `price`) VALUES
(33, 'Realme 5i', 'Handphone', 'Realme', 'Qualcomm SnapDragon 665', '3', 'Rp. 2.200.000'),
(35, 'Acer E5 - 473G', 'Laptop', 'Acer', 'Intel Core i5 5200U,  Microsoft Windows 7 Home Premium, DDR3 4GB, 500 GB (SATA)', '5', 'Rp 6.299.000'),
(37, 'ROG Phone 5 Ultimate', 'Handphone', 'Asus', 'Qualcomm Snapdragon 888 , RAM 18 GB ROM 512 GB, ANDROID 11 RUG UI', '10', 'Rp. 19.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'Admin1', '$2y$10$HZENQX1qPnk2ZPwfUn4/P.oBnhuITwqT2ZnlkB/sYGA4DT4I7zIci'),
(7, 'admin2', '$2y$10$X7ecxb6WytJJSxJC4CC7UOT53H3XyUZNIUcq8PpKkNyLUJaZPhP3K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
