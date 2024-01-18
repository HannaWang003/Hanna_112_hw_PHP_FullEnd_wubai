-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-18 23:58:22
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
-- 資料表結構 `music`
--

CREATE TABLE `music` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `img` text DEFAULT NULL,
  `album` text DEFAULT NULL,
  `publisher` text DEFAULT NULL,
  `num` text DEFAULT NULL,
  `note` text DEFAULT NULL,
  `sh` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `music`
--

INSERT INTO `music` (`id`, `date`, `img`, `album`, `publisher`, `num`, `note`, `sh`) VALUES
(1, '1992-08-01', 'PCTA00006MS033.jpg', '愛上別人是快樂的事', 'none', 'PCTA00006MS-033', '不滿\n愛上別人是快樂的事\n關於女人\n不要想太多\n沒人愛的女孩\n一種女人\n樓仔厝\n思念親像一條河\n阿威阿威\n錢的力量\n素蘭小姐要出嫁', 1),
(13, '1994-12-01', 'RC450.jpg', '浪人情歌', 'none', 'RC-450', '背叛 Betray\r\n牽掛 Lingering\r\n199玫瑰 199 Roses\r\n一親紅顏 My Concubine\r\n親愛的妳 My Darling\r\n拋棄 Abandon\r\n繼續墮落 The Continuous Sinking\r\n熱情交錯 In Between Passion\r\n鋼鐵男子 Iron Man\r\n浪人情歌 Wanderer’s Love Song\r\n來不及 Too Late', 1),
(14, '1995-07-01', 'MS001.jpg', '伍佰的LIVE-枉費青春', 'none', 'MS-00', '無聲的所在 Place Of Silence\r\n秋風夜雨 Autumn Wind, Midnight Rain\r\n墓仔埔也敢去 Go To The Graveyard\r\nKISS ME(星星知我心)\r\n愛情限時批 Express Love Letter\r\n點煙 Lighting A Cigarette\r\n飛 Flying\r\n小姐免驚 Don’t Be Afraid Miss\r\n恨世生 I Hate You, Lovely Ones\r\n枉費青春 Wasting Youth\r\n繼續墮落 This Continuous Sinking\r\n愛你一萬年 Love You Ten Thousand Years\r\n浪人情歌(*CD BOUNS) Wanderer’s Love Song', 1),
(15, '0003-12-05', 'AVCCD90045.jpg', '淚橋', 'none', 'AVCCD90045 / AVCCD90045V', '淚橋 Tear Bridge\r\n頑石的飛行 Stone Flying\r\n海浪 Ocean Waves\r\n生命之歌 Songs Of Life\r\n沒有頭 No Head\r\n敵人 The Enemy\r\n破碎的收音機 Broken Radio\r\n晚風 Late Wind\r\n活下去 Live On\r\n街角的薔薇 The Rose\r\n再度重相逢 Again, Meet Again\r\n花不香 Flower No Scent', 1),
(16, '2002-12-01', 'MS116.jpg', '冬之火 “九重天”演唱會特選錄音專輯', 'none', ' MS-116', '月光序曲\r\n蛇\r\n路\r\n一點點\r\n樹枝孤鳥\r\n煞到妳\r\n愛情限時批\r\n組曲\r\n世界第一等\r\n王道(演奏曲)', 1),
(17, '2002-12-01', 'MS116.jpg', '冬之火 “九重天”演唱會特選錄音專輯', 'none', 'MS-116', '楓葉\r\n如果這都不算愛\r\n九重天\r\n假扮的天使\r\n王道\r\n萬丈深坑\r\n小人國\r\n妳愛我\r\n最初的地方\r\n我不是天使\r\n扇子舞\r\n愛情未亡人\r\n孤星淚\r\n思念親像一條河\r\n鋼鐵男子\r\n衝衝衝', 1),
(18, '2001-12-01', 'MS099.jpg', '夢的河流', 'none', 'MS-099', '翅膀 Wings\r\n蛇 Snake\r\n路 Road\r\n流星 Shooting Star\r\n妳愛我 U Love Me\r\n一點點 Just A Little\r\n九重天 9 Heaven\r\n斷了 Den Lu\r\n沙漠裡的黑洞 Tempting Hole\r\n暴雨 Heavy Rain\r\n小帆船 Little Boat\r\n夢的河流 Dream Rive', 1),
(19, '2000-09-01', 'MS0884.jpg', '《伍佰&China Blue電影歌曲典藏》&《順流逆流電影原聲帶》雙CD', 'none', 'MS-088-4', '少年吔,安啦! Dust Of Angels\r\n點煙 Lighting A Cigarette\r\n無聲的所在 A Soundless Place\r\n只要為你活一天 Treasure Island\r\n愛你一萬年 Love You Ten Thousand Year\r\n台北孤兒 Taipei’s Orphan\r\n繼續墮落 This Continuous Sinking\r\n樓仔厝 Big Building\r\n配樂:\"下雨\" Raining\r\n對白:\"護士服\" Dialogue: Nurse Uniform\r\n對白:\"希望\" Dialogue: Hope\r\n美麗新世界 A Beautiful New World\r\n世界第一等 No.1 In The World\r\n稀微的風中 Sandy Wind\r\n何時再見夢中人 My Dream Lover\r\n衝衝衝 Rushing', 1),
(20, '1999-11-01', 'MS072.jpg', '白鴿', 'none', 'MS-072', '上癮了 Addicted\r\n真世界 The Real World\r\n不曾在乎我 Never Care About Me\r\n白鴿 White Dove\r\n上帝救救我 God Help Me\r\n看我 Looking At Me\r\n與妳到永久 Till The End Of Time\r\n一生最愛的人 Love Of My Life\r\n終於 Finally\r\n懶人日記 Lazy Man’s Diary\r\n半夜11點鐘 11:00 PM\r\n最後是溫柔 Tenderness At Last', 1),
(21, '1999-02-01', 'MS005.jpg', '空襲警報 1998台灣酒廠巡迴演唱會視聽典藏全記錄', 'none', ' MS-005', '世界第一等\r\n空襲警報\r\n萬丈深坑\r\n徘徊夜都市\r\n心愛的再會啦\r\n春花秋月(DEMO版)', 1),
(22, '1998-01-01', 'MS028.jpg', '樹枝孤鳥', 'none', 'MS-028', '少女的心 Young Girl’s Heart\r\n斷腸詩 Broken Heart Poetry\r\n漂浪 Hustling\r\n返去故鄉 Back To Hometown\r\n萬丈深坑 Long Way Fall\r\n心愛的再會啦 Farewell My Love\r\n徘徊夜都市 Wandering At Night City\r\n煞到妳 Crush On You\r\n空襲警報 Air Alert\r\n樹枝孤鳥 Lonely Tree, Lonely Bird\r\n飛在風中的小雨 Mist In The Wind\r\n怨嗟嘆 Sigh', 1),
(23, '1997-01-01', 'MS026.jpg', '\"夏夜晚風\"演唱會精選實錄-搖滾˙浪漫', 'none', 'MS-026', '牽掛 Lingering\r\n一親紅顏 My Concubine\r\n痛哭的人 Crying Man\r\n拋棄 Abandon\r\n背叛 Betray\r\n樓仔厝 Big Building\r\n被動 Passive\r\n親愛的你 My Darling\r\n台北孤兒 Taipei Orphan\r\n少年吔,安啦! Dust Of Angels\r\n不滿 Not Satisfy\r\n挪威的森林 Norwegian Forest\r\n隨風而去 Gone With The Wind\r\n算了吧 Forget It', 1),
(24, '1996-06-01', 'MS018.jpg', '愛情的盡頭', 'none', 'MS-018', '夏夜晚風 Summer Night Wind\r\n愛情的盡頭 The End Of Love\r\n親愛的,你喝醉了 You’re Drunk, My Dear\r\n變 Changing\r\n七彩燈光 Colorful Lights\r\nLAST DANCE\r\n青春 Young Vibe\r\n人生一場夢 Life Is Just A Dream\r\n挪威的森林 Norwegian Forest\r\n隨風而去 Gone With The Wind', 1),
(25, '2004-05-01', 'RDI6864.jpg', '愛你伍佰年 伍佰 & China Blue 世紀典藏原音精選40首', 'none', 'RD I686-4', '點煙\r\n少年吔，安啦！\r\n愛上別人是快樂的事\r\n樓仔厝\r\n思念親像一條河\r\n素蘭小姐要出嫁\r\n可愛的馬(with陳昇)\r\n只要為你活一天\r\n背叛\r\n牽掛\r\n親愛的妳\r\n繼續墮落\r\n浪人情歌', 1),
(26, '2004-09-10', 'AVCCD90050.jpg', '伍佰力 Wu Bai & China Blue 2004 LIVE生命熱力 (CD+DVD)', 'none', 'AVCCD90050', '沒有頭\r\n頑石的飛行\r\n突然的自我\r\n晚風\r\n活下去\r\n生命之歌\r\n白鴿\r\n街角的薔薇\r\n春花秋月\r\n汝是我的心肝\r\n親愛的你喝醉了\r\n一石二鳥\r\n極地之歌', 1),
(27, '2023-06-16', '純白的起點專輯封面-160.jpg', '純白的起點', 'none', '5559559', '天使\n怎樣歌\n純白的起點\n嫦娥\n晴天雨天 with蔡健雅\n甜美的繩索\n重生\n妳是我的完美\n筆畫\n赴湯蹈火(重新混音版)\n不要放棄', 1),
(28, '2019-07-11', '讓水倒流封面160.jpg', '讓水倒流', 'none', '7755209', '讓水倒流\r\n原本當初\r\n最美的時刻\r\n愛的大道\r\n我想飛\r\n月光下的別離\r\n深秋的祝福\r\n其實不遙遠\r\n皇后的高跟鞋\r\n黑色蒙太奇', 1),
(29, '2017-09-29', '專輯封面-160.jpg', '釘子花EDM Remix', 'none', '579 912-6', '熱淚暗班車(Lil Pan & Double Remix)\r\n釘子花(EDM Remix)\r\n放浪舞者(Eds Remix)\r\n東石(Waves of Doppler Remix)\r\n我心內(CYH Remix)\r\n熱淚暗班車(LeeLek Remix)\r\n蹦孔(Lil Pan & Double Dubstep Remix)\r\n愛妳無目地(DJ Noodles Remix)\r\n勢(Lil Pan Remix)', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `music`
--
ALTER TABLE `music`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
