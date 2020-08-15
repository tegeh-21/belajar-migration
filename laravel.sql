-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 04:48 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `down_vote`
--

CREATE TABLE `down_vote` (
  `id_vote` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `down_vote` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down_vote`
--

INSERT INTO `down_vote` (`id_vote`, `id_pertanyaan`, `down_vote`, `created_at`, `updated_at`) VALUES
(1, 5, 2, '2020-08-15 08:04:33', '2020-08-15 08:06:12'),
(2, 6, 3, '2020-08-15 08:06:28', '2020-08-15 14:18:33'),
(3, 3, 1, '2020-08-15 13:14:53', '2020-08-15 13:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL,
  `tanggal_diperbaharui` date DEFAULT NULL,
  `pertanyaan_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `isi`, `tanggal_dibuat`, `tanggal_diperbaharui`, `pertanyaan_id`, `profil_id`, `created_at`, `updated_at`) VALUES
(3, 'Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban ', NULL, NULL, 3, 2, '0000-00-00', '0000-00-00'),
(4, 'Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban Ini isi jawaban ', NULL, NULL, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `komentar_jawaban`
--

CREATE TABLE `komentar_jawaban` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL,
  `jawaban_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar_pertanyaan`
--

CREATE TABLE `komentar_pertanyaan` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` date DEFAULT NULL,
  `pertanyaan_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike_jawaban`
--

CREATE TABLE `like_dislike_jawaban` (
  `jawaban_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like_dislike_pertanyaan`
--

CREATE TABLE `like_dislike_pertanyaan` (
  `pertanyaan_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `isi` text,
  `tanggal_dibuat` date DEFAULT NULL,
  `tanggal_diperbaharui` date DEFAULT NULL,
  `jawaban_tepat_id` int(11) DEFAULT NULL,
  `profil_id` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `result` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `judul`, `isi`, `tanggal_dibuat`, `tanggal_diperbaharui`, `jawaban_tepat_id`, `profil_id`, `created_at`, `updated_at`, `result`) VALUES
(6, 'Judul 3', '<p>Test <em>Pertanyaan</em><strong> Ketiga</strong></p>', '2020-08-16', '2020-08-17', 1, 1, '2020-08-15', '2020-08-15', 0),
(7, 'Bagaimana cara mengikuti pelatihan sanbercode', 'Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. Saya ingin bertanya mengenai sanbercode. ', '2020-08-15', '2020-08-15', 3, 2, '2020-08-15', '2020-08-15', 10);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_lengkap`, `email`, `foto`) VALUES
(1, 'User 1', 'user.1@email.com', 'abc'),
(2, 'yasa', 'yasa.social@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `result_vote`
-- (See below for the actual view)
--
CREATE TABLE `result_vote` (
`id_pertanyaan` int(11)
,`result` decimal(33,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `up_vote`
--

CREATE TABLE `up_vote` (
  `id_vote` int(11) NOT NULL,
  `id_pertanyaan` int(11) DEFAULT NULL,
  `up_vote` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_vote`
--

INSERT INTO `up_vote` (`id_vote`, `id_pertanyaan`, `up_vote`, `created_at`, `updated_at`) VALUES
(1, 5, 30, '2020-08-15 07:34:40', '2020-08-15 07:53:36'),
(2, 6, 45, '2020-08-15 07:49:08', '2020-08-15 14:18:30'),
(3, 3, 15, '2020-08-15 13:14:49', '2020-08-15 13:14:49');

-- --------------------------------------------------------

--
-- Structure for view `result_vote`
--
DROP TABLE IF EXISTS `result_vote`;

CREATE ALGORITHM=UNDEFINED DEFINER=`tegeh`@`localhost` SQL SECURITY DEFINER VIEW `result_vote`  AS  select `up_vote`.`id_pertanyaan` AS `id_pertanyaan`,((select sum(`up_vote`.`up_vote`)) - (select sum(`down_vote`.`down_vote`))) AS `result` from (`up_vote` join `down_vote`) where (`up_vote`.`id_pertanyaan` = `down_vote`.`id_pertanyaan`) group by `up_vote`.`id_pertanyaan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `down_vote`
--
ALTER TABLE `down_vote`
  ADD PRIMARY KEY (`id_vote`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- Indexes for table `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_id` (`jawaban_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- Indexes for table `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- Indexes for table `like_dislike_jawaban`
--
ALTER TABLE `like_dislike_jawaban`
  ADD KEY `jawaban_id` (`jawaban_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- Indexes for table `like_dislike_pertanyaan`
--
ALTER TABLE `like_dislike_pertanyaan`
  ADD KEY `pertanyaan_id` (`pertanyaan_id`),
  ADD KEY `profil_id` (`profil_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profil_id` (`profil_id`),
  ADD KEY `jawaban_tepat_id` (`jawaban_tepat_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `up_vote`
--
ALTER TABLE `up_vote`
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `down_vote`
--
ALTER TABLE `down_vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `up_vote`
--
ALTER TABLE `up_vote`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`),
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Constraints for table `komentar_jawaban`
--
ALTER TABLE `komentar_jawaban`
  ADD CONSTRAINT `komentar_jawaban_ibfk_1` FOREIGN KEY (`jawaban_id`) REFERENCES `jawaban` (`id`),
  ADD CONSTRAINT `komentar_jawaban_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Constraints for table `komentar_pertanyaan`
--
ALTER TABLE `komentar_pertanyaan`
  ADD CONSTRAINT `komentar_pertanyaan_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`),
  ADD CONSTRAINT `komentar_pertanyaan_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Constraints for table `like_dislike_jawaban`
--
ALTER TABLE `like_dislike_jawaban`
  ADD CONSTRAINT `like_dislike_jawaban_ibfk_1` FOREIGN KEY (`jawaban_id`) REFERENCES `jawaban` (`id`),
  ADD CONSTRAINT `like_dislike_jawaban_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Constraints for table `like_dislike_pertanyaan`
--
ALTER TABLE `like_dislike_pertanyaan`
  ADD CONSTRAINT `like_dislike_pertanyaan_ibfk_1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`),
  ADD CONSTRAINT `like_dislike_pertanyaan_ibfk_2` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`profil_id`) REFERENCES `profil` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
