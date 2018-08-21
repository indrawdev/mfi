-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 01:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.27

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
('0ff8f8pp1aidnbetl8d8bv9pvf1clnbi', '::1', 1516241715, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363234313535303b),
('0reh0o3jsbu729o73ds1ilj586flsqeq', '192.168.3.70', 1517364987, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373336343937353b),
('0vp8tts1n244f9q190km25caro38qqn4', '192.168.3.69', 1516709605, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363730393630353b),
('1td6reom90147bhmls5fic31svj8lo5t', '::1', 1518146501, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383134363530313b),
('24ebm8kqe1gvb03a6ocqqbc6ho05gr01', '::1', 1515984768, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353938343736363b),
('3cqk4vvg5baiu7ops4ivcq4c9lk00gpb', '192.168.3.69', 1514437096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343433373038343b),
('4lvjhvd00nph25giunmj66hqsb1qh6ar', '::1', 1516274816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363237343637353b),
('58c02c8aoaac3bik1k5qa0ba9aa2a7ui', '192.168.3.49', 1516010836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363031303833363b),
('5aic2fcc1n2abl11ohnn7c9gbqh74r1j', '::1', 1516619154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363631393039343b),
('5p5fpg3ijjme6ufcvjkdp5qfh8d7sgms', '::1', 1516872762, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363837323736323b),
('5pu7mdqjh4i9qbp8cc13vmgr1io5atrq', '::1', 1516359691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363335393533353b),
('6nbf8mcsohdi4krlb0skt4vllpjvud7s', '::1', 1514949776, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343934393533323b),
('70f6c1ef1bb58cf1e0cb7f3fd9c3211b76d0ba0c', '192.168.3.69', 1519886597, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531393838363539373b),
('88ihj6oa9qttpkkgbf34sldu5qa3in1o', '192.168.3.69', 1514451095, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343435313032303b6c6f67696e7c623a313b757365726e616d657c623a303b70617373776f72647c623a303b),
('8d4785a778367d09f25fef000475406d7f466a52', '192.168.3.69', 1521600259, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532313630303235373b),
('8l8d134d8fm47egdie1dv75aurkmgd4s', '::1', 1517369484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373336393430393b),
('9bi6sbpu6n2ah2i5e4prpugvcoj8c8tu', '::1', 1516265189, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363236353031373b61646d696e7c623a313b757365726e616d657c623a303b70617373776f72647c623a303b),
('9gket308pjjct9hnnsfqjdts3ur15dim', '::1', 1518489710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383438393731303b),
('agn3lib04fcihrngfuiggabskfmiqhe7', '::1', 1514869372, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343836393337323b),
('amgomu6jbjiqlfnbijc5slkrhjc83v5b', '::1', 1515047363, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353034373335333b),
('bl0jegjl444o57r0kislf5patur0u330', '::1', 1516592791, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363539323739313b),
('c65b1cb93042b6a17faf125b92b8995cd6286f37', '192.168.3.69', 1519008656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531393030383635363b),
('e4pgbjtgja7t236sd5ddel1h2kp7mhac', '::1', 1514514958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531343934393b),
('fqi12aguqfksuat8kbf1024o7u8r2bfg', '::1', 1515040047, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353034303031333b),
('hkblvgqb0mb5op02il3t5o0o0kd0n31i', '::1', 1515139706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353133393638323b),
('jnq6usbu3vo1hb3dr2d61rlrt73h189a', '::1', 1516690385, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363639303334353b),
('juosfqf26qph3r37t36njmg76iso2ps9', '::1', 1514443638, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343434333632363b6d6573736167657c733a303a22223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b693a313531343434353633383b7d),
('k5o81e9pdt5rq4qo639sq7i4no7cbifq', '::1', 1517363754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373336333734353b),
('laqfk19j7fqk8i3ojv4fojvgio1dhm7j', '::1', 1518512353, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383531323235393b),
('lg8mqnfm50ffgujnk312t975htv9gcap', '::1', 1514949557, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343934393535373b),
('mgibu3b1fge9raf5pvgcf1aj5jv3uc76', '::1', 1514884157, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343838343133323b),
('onlgb5qjp64le4ot6j104bl331uq9tcv', '::1', 1518398935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531383339383739373b),
('prdg0ocrbe5838ghdqk48j2uv2lj5u4t', '::1', 1514460851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343436303535333b),
('rlb4ia3ngmmmal8pfbhng8ddbn85tufo', '::1', 1514455894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343435353839343b),
('rtuultmrgeq3f833leud8sb6b4up8ihv', '::1', 1515122863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353132323836333b),
('t86origgni6h5c9ekv6h1251i2qk4hv0', '192.168.3.69', 1516691338, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363639313037383b),
('upiufs5o7daiehke7lhem6c31tvmi88f', '::1', 1515060322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531353036303331303b),
('vdoj3g7nmlfhq5903tgik6sd528c8nqp', '::1', 1516602386, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531363630323338363b);

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
-- Table structure for table `tm_admin`
--

CREATE TABLE `tm_admin` (
  `fs_email` varchar(55) NOT NULL,
  `fs_password` varchar(45) NOT NULL,
  `fs_aktif` enum('1','0') NOT NULL DEFAULT '1',
  `fd_tanggal_buat` datetime NOT NULL,
  `fs_user_buat` varchar(55) NOT NULL,
  `fd_tanggal_edit` datetime DEFAULT NULL,
  `fs_user_edit` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tm_admin`
--

INSERT INTO `tm_admin` (`fs_email`, `fs_password`, `fs_aktif`, `fd_tanggal_buat`, `fs_user_buat`, `fd_tanggal_edit`, `fs_user_edit`) VALUES
('andrew@mandirifinance.com', 'c8c4e83f385ae88a5e9449018e892ec0', '1', '2017-12-28 15:47:05', 'andrew@mandirifinance.com', NULL, NULL),
('indra@ide.web.id', 'b94cd1b32dd314155f228cb2cf6f4c5c', '1', '2017-12-28 14:25:35', 'indra@ide.web.id', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `tx_gallery`
--

CREATE TABLE `tx_gallery` (
  `fs_photo` varchar(40) NOT NULL,
  `fs_keterangan` varchar(35) NOT NULL,
  `fd_tanggal_buat` datetime NOT NULL,
  `fs_user_buat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tx_hubungi`
--

CREATE TABLE `tx_hubungi` (
  `fs_nama_lengkap` varchar(50) NOT NULL,
  `fs_email` varchar(50) NOT NULL,
  `fs_subjek` varchar(50) NOT NULL,
  `fs_pesan` text NOT NULL,
  `fd_tanggal_buat` datetime NOT NULL,
  `ip_address` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tx_news`
--

CREATE TABLE `tx_news` (
  `fs_judul` varchar(35) NOT NULL,
  `fs_tag` varchar(45) DEFAULT NULL,
  `fs_berita` text NOT NULL,
  `fd_tanggal_buat` datetime NOT NULL,
  `fs_user_buat` varchar(25) NOT NULL,
  `fd_tanggal_edit` datetime DEFAULT NULL,
  `fs_edit_user` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `tm_admin`
--
ALTER TABLE `tm_admin`
  ADD PRIMARY KEY (`fs_email`);

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
