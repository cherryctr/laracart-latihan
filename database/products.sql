-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 09:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prdid` int(10) UNSIGNED NOT NULL,
  `prdname` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdcatid` int(11) NOT NULL,
  `prdsize` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdprice` int(7) NOT NULL,
  `prddesc` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prdstock` int(11) NOT NULL,
  `prdthumb` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prdid`, `prdname`, `prdcatid`, `prdsize`, `prdprice`, `prddesc`, `prdstock`, `prdthumb`, `created_at`, `updated_at`) VALUES
(2, 'Samsung Galaxy', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(4, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(6, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(8, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(10, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(12, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(14, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(16, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(18, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(20, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(22, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(24, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, 'dummyimg.png', NULL, NULL),
(26, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.png', NULL, NULL),
(28, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.png', NULL, NULL),
(30, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.png', NULL, NULL),
(32, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.png', NULL, NULL),
(34, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
