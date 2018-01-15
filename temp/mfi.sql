-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 06:14 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('24ebm8kqe1gvb03a6ocqqbc6ho05gr01', '::1', 1515984768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353938343736363b),
('3cqk4vvg5baiu7ops4ivcq4c9lk00gpb', '192.168.3.69', 1514437096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343433373038343b),
('58c02c8aoaac3bik1k5qa0ba9aa2a7ui', '192.168.3.49', 1516010836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363031303833363b),
('6nbf8mcsohdi4krlb0skt4vllpjvud7s', '::1', 1514949776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343934393533323b),
('88ihj6oa9qttpkkgbf34sldu5qa3in1o', '192.168.3.69', 1514451095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343435313032303b6c6f67696e7c623a313b757365726e616d657c623a303b70617373776f72647c623a303b),
('agn3lib04fcihrngfuiggabskfmiqhe7', '::1', 1514869372, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343836393337323b),
('amgomu6jbjiqlfnbijc5slkrhjc83v5b', '::1', 1515047363, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353034373335333b),
('e4pgbjtgja7t236sd5ddel1h2kp7mhac', '::1', 1514514958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531343934393b),
('fqi12aguqfksuat8kbf1024o7u8r2bfg', '::1', 1515040047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353034303031333b),
('hkblvgqb0mb5op02il3t5o0o0kd0n31i', '::1', 1515139706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353133393638323b),
('juosfqf26qph3r37t36njmg76iso2ps9', '::1', 1514443638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343434333632363b6d6573736167657c733a303a22223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b693a313531343434353633383b7d),
('lg8mqnfm50ffgujnk312t975htv9gcap', '::1', 1514949557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343934393535373b),
('mgibu3b1fge9raf5pvgcf1aj5jv3uc76', '::1', 1514884157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343838343133323b),
('prdg0ocrbe5838ghdqk48j2uv2lj5u4t', '::1', 1514460851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343436303535333b),
('rlb4ia3ngmmmal8pfbhng8ddbn85tufo', '::1', 1514455894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343435353839343b),
('rtuultmrgeq3f833leud8sb6b4up8ihv', '::1', 1515122863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353132323836333b),
('upiufs5o7daiehke7lhem6c31tvmi88f', '::1', 1515060322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353036303331303b);

-- --------------------------------------------------------

--
-- Table structure for table `config_email`
--

CREATE TABLE `config_email` (
  `email_id` int(1) NOT NULL,
  `category` varchar(1) NOT NULL,
  `smtp_user` varchar(50) NOT NULL,
  `smtp_pass` varchar(30) NOT NULL,
  `smtp_host` varchar(50) NOT NULL,
  `smtp_crypto` varchar(10) NOT NULL,
  `smtp_port` varchar(5) NOT NULL,
  `smtp_timeout` varchar(1) NOT NULL,
  `protocol` varchar(4) NOT NULL,
  `mailtype` varchar(8) DEFAULT NULL,
  `charset` varchar(8) NOT NULL,
  `status` set('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tm_hubungi`
--

CREATE TABLE `tm_hubungi` (
  `fs_nama_lengkap` varchar(50) NOT NULL,
  `fs_email` varchar(50) NOT NULL,
  `fs_subjek` varchar(50) NOT NULL,
  `fs_pesan` text NOT NULL,
  `fd_tanggal_buat` datetime NOT NULL,
  `ip_address` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tm_konsumen`
--

CREATE TABLE `tm_konsumen` (
  `fs_email` varchar(55) NOT NULL,
  `fs_password` varchar(45) NOT NULL,
  `fs_aktif` enum('1','0') NOT NULL DEFAULT '1',
  `fd_tanggal_buat` datetime NOT NULL,
  `fs_user_buat` varchar(55) NOT NULL,
  `fd_tanggal_edit` datetime DEFAULT NULL,
  `fs_user_edit` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tm_konsumen`
--

INSERT INTO `tm_konsumen` (`fs_email`, `fs_password`, `fs_aktif`, `fd_tanggal_buat`, `fs_user_buat`, `fd_tanggal_edit`, `fs_user_edit`) VALUES
('andrew@mandirifinance.com', 'c8c4e83f385ae88a5e9449018e892ec0', '1', '2017-12-28 15:47:05', 'andrew@mandirifinance.com', NULL, NULL),
('indra@ide.web.id', 'b94cd1b32dd314155f228cb2cf6f4c5c', '1', '2017-12-28 14:25:35', 'indra@ide.web.id', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `config_email`
--
ALTER TABLE `config_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `tm_konsumen`
--
ALTER TABLE `tm_konsumen`
  ADD PRIMARY KEY (`fs_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
