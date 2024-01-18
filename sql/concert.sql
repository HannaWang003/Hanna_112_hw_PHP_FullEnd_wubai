-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-18 23:58:00
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
-- 資料表結構 `concert`
--

CREATE TABLE `concert` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `ticket` text DEFAULT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `concert`
--

INSERT INTO `concert` (`id`, `title`, `country`, `location`, `date`, `ticket`, `sh`) VALUES
(1, '伍佰 & China Blue 搖滾音樂會 2024', '澳洲雪梨', 'The Star Event Centre', '2024-04-16', 'https://premier.ticketek.com.au/shows/show.aspx?sh=500WUBAI24', 1),
(2, '伍佰 & China Blue 搖滾音樂會 2024', '澳洲墨爾本', 'MCEC', '2024-04-10', 'https://www.ticketbooth.com.au/search/?keyword=Wu+bai&submit=FIND+TICKETS', 1),
(6, '伍佰 & China Blue 搖滾音樂會 2024', '紐西蘭奥克蘭', 'Eventfinda Stadium', '2024-01-13', 'www', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `concert`
--
ALTER TABLE `concert`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `concert`
--
ALTER TABLE `concert`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
