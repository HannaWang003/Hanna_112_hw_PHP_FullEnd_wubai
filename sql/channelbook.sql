-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-24 17:17:31
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `wubai`
--

-- --------------------------------------------------------

--
-- 資料表結構 `channelbook`
--

CREATE TABLE `channelbook` (
  `id` int(10) UNSIGNED NOT NULL,
  `isbn` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `channelbook`
--

INSERT INTO `channelbook` (`id`, `isbn`, `name`, `url`, `sh`) VALUES
(149, '9789571091389', '誠　品', 'https://reurl.cc/gMQL47', 1),
(150, '9789571091389', '金石堂', 'https://reurl.cc/bRxZol', 1),
(151, '9789571091389', '博客來', 'https://reurl.cc/MdGAeX', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `channelbook`
--
ALTER TABLE `channelbook`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `channelbook`
--
ALTER TABLE `channelbook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
