-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-24 17:32:05
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
-- 資料表結構 `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `subject_id` int(10) UNSIGNED DEFAULT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `gallery`
--

INSERT INTO `gallery` (`id`, `img`, `text`, `subject_id`, `sh`) VALUES
(3, '500-125.jpg', '今夜伍佰', 0, 1),
(9, '2008flower_1_03.jpeg', '2', 3, 1),
(10, '2008flower_1_02.jpeg', '3', 3, 1),
(13, '2008flower_1_01.jpeg', '6', 3, 1),
(14, '2008flower_2_14.jpeg', 'Legacy今夜伍佰', 0, 1),
(15, '2010_03.jpeg', '今夜伍佰', 3, 1),
(16, '2010_02.jpeg', '今夜伍佰', 3, 1),
(17, '2010_01.jpeg', '今夜伍佰', 3, 1),
(18, '2008flower_1_07.jpeg', '今夜伍佰', 3, 1),
(19, '2008flower_1_08.jpeg', '今夜伍佰', 3, 1),
(20, '2008flower_1_09.jpeg', '今夜伍佰', 3, 1),
(21, '2008flower_1_10.jpeg', '今夜伍佰', 3, 1),
(22, '2008flower_1_11.jpeg', '今夜伍佰', 3, 1),
(23, '2008flower_1_12.jpeg', '今夜伍佰', 3, 1),
(24, '2008flower_2_20.jpeg', 'Legacy今夜伍佰', 14, 1),
(25, '2008flower_2_19.jpeg', 'Legacy今夜伍佰', 14, 1),
(26, '2008flower_2_18.jpeg', 'Legacy今夜伍佰', 14, 1),
(27, '2008flower_2_17.jpeg', 'Legacy今夜伍佰', 14, 1),
(28, '2008flower_2_16.jpeg', 'Legacy今夜伍佰', 14, 1),
(29, '2008flower_2_15.jpeg', 'Legacy今夜伍佰', 14, 1),
(30, '2008flower_1_06.jpeg', 'Legacy今夜伍佰', 14, 1),
(31, '2008flower_1_05.jpeg', 'Legacy今夜伍佰', 14, 1),
(32, '2008flower_1_04.jpeg', 'Legacy今夜伍佰', 14, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
