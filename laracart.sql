-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2022 pada 08.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laracart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categori`
--

CREATE TABLE `categori` (
  `prdcatid` int(10) UNSIGNED NOT NULL,
  `catname` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(22, '2014_10_12_000000_create_users_table', 3),
(23, '2014_10_12_100000_create_password_resets_table', 3),
(40, '2018_11_07_092708_create_category_table', 4),
(41, '2019_08_19_000000_create_failed_jobs_table', 4),
(42, '2021_01_10_064234_create_sessions_table', 4),
(43, '2022_07_26_204914_create_products_table', 4),
(44, '2022_09_03_121914_create_orders_table', 4),
(45, '2022_09_03_123500_create_order_details_table', 4),
(46, '2022_09_07_192830_create_users_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordersidencytpe` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usersid` int(11) NOT NULL,
  `ordfullname` char(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordmail` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordnohp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordalamat` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordkota` char(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordprovinsi` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordbyr` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordstatus` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordmethod` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `ordersidencytpe`, `usersid`, `ordfullname`, `ordmail`, `ordnohp`, `ordalamat`, `ordkota`, `ordprovinsi`, `ordbyr`, `ordstatus`, `ordmethod`, `created_at`, `updated_at`) VALUES
(1, 'dXysNTWpHLrnfig.X', 2, 'e', 'e@gmail.com', '12345678', 'dawda', 'dawa', 'adwwad', '1,000,000.00', NULL, 'COD', '2022-09-10 03:46:36', '2022-09-10 03:46:36'),
(2, 'vBLiaSz2oN9n1lyee', 2, 'e', 'e@gmail.com', '12345678', 'dawda', 'dawd', 'adwda', '7,000,000.00', NULL, 'TF', '2022-09-10 04:16:49', '2022-09-10 04:16:49'),
(3, 'pFgBs4t7usUL.4aO.', 2, 'e', 'e@gmail.com', '12345678', 'gdrg', 'adawd', 'sa', '7,000,000.00', NULL, 'COD', '2022-09-10 04:18:17', '2022-09-10 04:18:17'),
(4, 'MS60mi5fZ6Q1LZDOH', 2, 'e', 'e@gmail.com', '12345678', 'gdrg', 'adawd', 'sa', '7,000,000.00', NULL, 'COD', '2022-09-10 04:19:40', '2022-09-10 04:19:40'),
(5, 'r5qFa769zmr9i00.1', 2, 'e', 'e@gmail.com', '12345678', 'gdrg', 'adawd', 'sa', '7,000,000.00', NULL, 'COD', '2022-09-10 04:22:45', '2022-09-10 04:22:45'),
(6, '9d1vdiVB5YhbTGs.3', 2, 'aaf', 'e@gmail.com', '12345678', 'fddtdg', 'fyfyfy', 'ggg', '7,000,000.00', NULL, 'TF', '2022-09-10 04:26:08', '2022-09-10 04:26:08'),
(7, 'Plw9NXgbF9n173J.K', 2, 'aaf', 'e@gmail.com', '12345678', 'fddtdg', 'fyfyfy', 'ggg', '7,000,000.00', NULL, 'TF', '2022-09-10 04:27:00', '2022-09-10 04:27:00'),
(8, '7cotR8yYeAbS0BZe7', 2, 'aaf', 'e@gmail.com', '12345678', 'f', 'da', 'adaw', '7,000,000.00', NULL, 'COD', '2022-09-10 04:27:26', '2022-09-10 04:27:26'),
(9, 'pfO4KnTUq9XAdT1uG', 2, 'aaf', 'e@gmail.com', '12345678', 'jhjhjh', '123123', 'dawaw', '12,000,000.00', NULL, 'COD', '2022-09-10 04:29:05', '2022-09-10 04:29:05'),
(10, 'L2FnBCf9nhilBcy.C', 3, 'q', 'wefwej@gmail.com', 'q', 'q', 'q', 'q', '2,000,000.00', NULL, 'COD', '2022-09-10 05:05:48', '2022-09-10 05:05:48'),
(11, 'l1Yys.h1a2Ix6qCe8', 3, 'qqq', 'e@gmail.com', 'adwd', 'adwd', 'adwa', 'awd', '1,000,000.00', NULL, 'COD', '2022-09-10 05:06:53', '2022-09-10 05:06:53'),
(12, 'jJFjj4QntTfAMGhOl', 3, 'efe', 'e@gmail.com', 'sfeef', 'seffs', 'sefse', 'ses', '1,000,000.00', NULL, 'COD', '2022-09-10 05:09:00', '2022-09-10 05:09:00'),
(13, 'guneSRRdotan4bdeo', 2, 'e4te', 'e@gmail.com', 'wr3w', 'rw3rw3r', 'wr3wrw', '3rw3rw3r', '13,000,000.00', NULL, 'TF', '2022-09-10 05:13:12', '2022-09-10 05:13:12'),
(14, 'mUghQOJ5CdEhOp9OX', 2, 'e', 'e@gmail.com', 'weewfef', 'sfefsef', 'sefsf', 'dawaw', '12,000,000.00', NULL, 'TF', '2022-09-10 05:17:42', '2022-09-10 05:17:42'),
(15, 'IqECFOTyEx/1svlO/', 2, 'e', 'e@gmail.com', 'rw', 'ess', 'bekasi', 'sa', '2,000,000.00', NULL, 'COD', '2022-09-10 05:18:56', '2022-09-10 05:18:56'),
(16, 'uOfLwJFPLtDTJZCuJ', 2, 'e', 'e@gmail.com', 'wdaw', 'awdawd', 'bekasi', 'sa', '2,000,000.00', NULL, 'COD', '2022-09-10 05:20:08', '2022-09-10 05:20:08'),
(17, 'ZXhSAuTSFdB6jid.6', 2, 'seff', 'e@gmail.com', 'wrw3', 'wr3wr', 'wr3w', 'w3rw3', '1,000,000.00', NULL, 'TF', '2022-09-10 05:21:41', '2022-09-10 05:21:41'),
(18, 'TzzA.dDn7q7tIQuuy', 2, 'e', 'e@gmail.com', '12345678', 'wrr', 'bekasi', 'sa', '1,000,000.00', NULL, 'COD', '2022-09-10 05:22:48', '2022-09-10 05:22:48'),
(19, 'BhrPDPDi04EaCYs.E', 2, 'wwe', 'e@gmail.com', 'sfefs', 'sefsf', 'sefsf', 'sefsf', '1,000,000.00', NULL, 'COD', '2022-09-10 05:23:19', '2022-09-10 05:23:19'),
(20, 'SztypD9Wj.uBgL.ek', 2, 'e', 'e@gmail.com', 'ZX', 'ZXZX', 'ZXZX', 'ZXX', '2,000,000.00', NULL, 'COD', '2022-09-10 05:45:30', '2022-09-10 05:45:30'),
(21, 'WShGjVVOKS2YJ91OG', 3, 'e', 'e@gmail.com', '12345678', 'deaed', 'bekasi', 'sa', '1,000,000.00', NULL, 'COD', '2022-09-10 06:03:39', '2022-09-10 06:03:39'),
(22, 'ixIhqhnBkZXLAKi.M', 3, 'e', 'e@gmail.com', '12345678', 'sefsf', 'bekasi', 'sa', '3,000,000.00', NULL, 'COD', '2022-09-10 06:09:24', '2022-09-10 06:09:24'),
(23, '0ZZJgB2mbCswCsxu7', 3, 'e', 'e@gmail.com', '12345678', 'aawda', 'bekasi', 'sa', '1,000,000.00', NULL, 'COD', '2022-09-10 06:11:08', '2022-09-10 06:11:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordersid` int(11) NOT NULL,
  `prdid` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `warna` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `order_details`
--

INSERT INTO `order_details` (`id`, `ordersid`, `prdid`, `qty`, `warna`, `size`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 7, 'pink', 'xl', '2022-09-10 04:29:05', '2022-09-10 04:29:05'),
(2, 2, '2', 5, 'pink', 's', '2022-09-10 04:29:05', '2022-09-10 04:29:05'),
(3, 2, '2', 7, 'pink', 'xl', '2022-09-10 05:13:12', '2022-09-10 05:13:12'),
(4, 2, '2', 5, 'pink', 's', '2022-09-10 05:13:12', '2022-09-10 05:13:12'),
(5, 2, '2', 7, 'pink', 'xl', '2022-09-10 05:17:42', '2022-09-10 05:17:42'),
(6, 2, '2', 5, 'pink', 's', '2022-09-10 05:17:42', '2022-09-10 05:17:42'),
(7, 2, '2', 2, 'biru', 's', '2022-09-10 05:45:30', '2022-09-10 05:45:30'),
(8, 2, '2', 1, NULL, NULL, '2022-09-10 06:11:08', '2022-09-10 06:11:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_id` int(10) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
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
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `prdname`, `prdcatid`, `prdsize`, `prdprice`, `prddesc`, `prdstock`, `prdthumb`, `created_at`, `updated_at`) VALUES
(2, 'Samsung Galaxy', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '1.jpg', NULL, NULL),
(4, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '2.jpg', NULL, NULL),
(6, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '3.jpg', NULL, NULL),
(8, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '4.jpg', NULL, NULL),
(10, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '6.jpg', NULL, NULL),
(12, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '7.jpg', NULL, NULL),
(14, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '8.jpg', NULL, NULL),
(16, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '9.jpg', NULL, NULL),
(18, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '10.jpg', NULL, NULL),
(20, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '11.jpg', NULL, NULL),
(22, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '12.jpg', NULL, NULL),
(24, 'Samsung Galaxy', 2, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '13.jpg', NULL, NULL),
(26, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '14.jpg', NULL, NULL),
(28, 'Sepatu', 1, '', 1000000, 'Cras at nisl et justo sodales tincidunt. Vestibulum rhoncus aliquam mauris, in posuere ex sagittis pellentesque. Curabitur ultrices purus quis nibh vehicula, ut facilisis turpis porttitor. Fusce sed luctus ipsum. Maecenas viverra leo bibendum augue tincid', 23, '15.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eris', 'eris@gmail.com', NULL, '$2y$10$l58mbEqQ1Iv7Q0WDFkDqeeG7fb8N9rMoRqJvADsCqLLExPC2V5w/S', 0, 'BPqlWnksQkkZWBKzZG11LXyEBGyWY5fce2tcuiPp2ROHflLDQ5p7KndR7evd', '2022-09-10 03:38:21', '2022-09-10 03:38:21'),
(2, 'eris', 'er@gmail.om', NULL, '$2y$10$SPI52ZyE0.9Wjxp/qwSvm.wb67bQcBe5zRJaEC2lkGhBqvBD5UR4C', 0, 'E29QzjccRNRADr0Nzke2pTR0yynccmiJ3GT8vGtsdzYdgIumd7PArU8lNDQ7', '2022-09-10 03:42:55', '2022-09-10 03:42:55'),
(3, 'yosi', 'yosi@gmail.com', NULL, '$2y$10$VhzUKZvcqSoMLO6Z2ugloe8dxEG9IHUtc2UeFOqOlo.GEIKgKuhba', 0, NULL, '2022-09-10 05:05:18', '2022-09-10 05:05:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`prdcatid`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_id_tokenable_type_index` (`tokenable_id`,`tokenable_type`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categori`
--
ALTER TABLE `categori`
  MODIFY `prdcatid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
