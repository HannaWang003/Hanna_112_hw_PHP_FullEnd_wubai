-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-18 23:58:32
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
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `title` text NOT NULL,
  `text` text DEFAULT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `date`, `title`, `text`, `sh`) VALUES
(2, '2024-01-19', '伍佰& China Blue Rock Star北高雙蛋巡演疫情影響忍痛延期', '伍佰& China Blue Rock Star北高雙蛋巡演疫情影響忍痛延期 宅在家專心創作 新作品粉條們敬請期待', 1),
(3, '2024-01-11', '伍佰Rock Star演唱會8/14-15台北場 9/11高雄Encore場 延期舉辦', '原訂於8/14-15及 9/11六度攻北高雙蛋的伍佰& China Blue，因為全台持續三級警戒，為配合政府與地方防疫措施及建議，忍痛宣布三場萬人演唱會確定延期，其中台北小巨蛋的兩場演唱會，已經是由原訂的2020年延至 2021年，這次又將二度延期了，而包含台灣的三場加上海外及大陸，總共15場的Rock Star巡迴演唱會，今年的場次因為全球疫情持續延燒，恐將繼續延期至2022年舉辦，伍佰希望大家可以安全地持續抗疫，等待疫情退散，Rock Star演唱會再安全地和大家見面！', 1),
(4, '2024-01-10', '伍佰宅在家創作 準備新作迎接伍佰& China Blue 成軍30週年', '級警戒期間，伍佰老師除了宅在家之外，也持續在創作，由於明年是伍佰& China Blue 成軍30週年，伍佰老師預計啟動一個新的創作案，疫情期間剛好專心創作，目前持續籌備中，所有的粉條們敬請期待！', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
