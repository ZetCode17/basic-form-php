-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 15, 2021 lúc 04:40 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `basic-form`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach`
--

DROP TABLE IF EXISTS `danhsach`;
CREATE TABLE IF NOT EXISTS `danhsach` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ds_name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ds_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsach`
--

INSERT INTO `danhsach` (`id`, `ds_name`, `ds_address`, `ds_desc`) VALUES
(3, 'shtrdytryte', 'treytreytreytrey', 'treytreytry'),
(2, 'rdgsrdg', 'drsgrd', 'sgrdsgrd'),
(4, 'fxhtfdsgrestest', 'sẻgsegresgresgresgresgres', 'régresgres'),
(5, 'fxhtfdsgrestest', 'sẻgsegresgresgresgresgres', 'régresgressgrdsgrdsxgrdgrdsgr'),
(6, 'fxhtfdsgrestest', 'sẻgsegresgresgresgresgres', 'régresgre ssgrdsgrds xgrdgrdsgrré gresgressgrds grdsxgrdgrdsgr  '),
(7, 'fxhtfdsgrestestfxhtfds', 'fxhtfdsgr estestfxhtfdsgres testfxhtfdsgrestestfx htfdsgrestestfxhtfdsgr estestfxhtfdsgrest estfxh', 'fxhtf dsgres testfxhtfdsgr estestfxhtfdsgreste stfxhtfdsgrestestfxht fdsgrestestfxhtfdsgrest estfxhtfdsgrestest');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
