-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-06-05 06:00:44
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `demo2024`
--
CREATE DATABASE IF NOT EXISTS `demo2024` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `demo2024`;

-- --------------------------------------------------------

--
-- 資料表結構 `messagebox`
--

CREATE TABLE `messagebox` (
  `id` int(10) UNSIGNED NOT NULL,
  `Message` varchar(140) NOT NULL,
  `Author` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `messagebox`
--

INSERT INTO `messagebox` (`id`, `Message`, `Author`) VALUES
(1, 'This is a book', 'alice'),
(2, '這是一本書', 'bob'),
(3, 'test test test test', 'alice'),
(4, 'this is an apple', 'alice'),
(5, 'abccabcafasdjkflsakdfhkasl', 'cathy'),
(6, 'abc abc abc abc abc abc abc abc ', 'dan'),
(7, 'fasfasfsa', 'fdsafas'),
(8, 'bbbbbbbbbbbbbbbb', 'aaaaa');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `messagebox`
--
ALTER TABLE `messagebox`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
