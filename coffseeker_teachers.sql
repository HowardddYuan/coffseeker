-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-07-12 13:31:09
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `coffseeker_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `coffseeker_teachers`
--

CREATE TABLE `coffseeker_teachers` (
  `teacher_id` int(6) NOT NULL,
  `teacher_name` text NOT NULL,
  `teacher_phone` varchar(13) NOT NULL,
  `teacher_gender` text NOT NULL,
  `teacher_mail` text NOT NULL,
  `teacher_qualification` text NOT NULL,
  `teacher_experience` int(11) NOT NULL,
  `teacher_specialty` text NOT NULL,
  `created_at` date NOT NULL,
  `valid` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `coffseeker_teachers`
--

INSERT INTO `coffseeker_teachers` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_gender`, `teacher_mail`, `teacher_qualification`, `teacher_experience`, `teacher_specialty`, `created_at`, `valid`) VALUES
(1, '張小蘭', '0912-345678', '女', 'zhangxiaolan@example.com ', '咖啡師證照', 5, '特色咖啡調製', '2020-02-15', 1),
(2, '王大明', '0921-987654', '男', 'wangdaming@example.com', '咖啡品鑑師', 8, '咖啡品質控制', '2021-07-21', 1),
(3, '李小雪', '0933-246810', '女', 'lixiaoxue@example.com', '咖啡萃取師', 3, '手沖咖啡', '2019-09-12', 1),
(4, '陳志豪', '0988-135790', '男', 'chenzhihao@example.com', '咖啡烘焙師', 6, '特殊風味咖啡', '2022-05-27', 1),
(5, '林美玲', '0955-864209', '女', 'linmeiling@example.com', '咖啡萃取師', 4, '義式濃縮咖啡', '2023-02-06', 1),
(6, '黃建國', '0977-567890', '男', 'huangjianguo@example.com', '咖啡師證照', 7, '手工調製咖啡', '2022-02-10', 1),
(7, '劉小婷', '0966-123456', '女', 'liuxiaoting@example.com', '咖啡品鑑師', 9, '咖啡品質控制', '2019-07-06', 1),
(8, '張宏偉', '0944-789012', '男', 'zhanghongwei@example.com', '咖啡烘焙師', 5, '香草風味咖啡', '2021-05-20', 1),
(9, '李佳玲', '0922-567891', '女', 'lijialing@example.com', '咖啡萃取師', 2, '摩卡風味咖啡', '2020-11-13', 1),
(10, '王俊宏', '0931-234567', '男', 'wangjunhong@example.com', '咖啡師證照', 4, '花香風味咖啡', '2019-09-30', 1),
(11, '蔡淑芳', '0937-258513', '女', ' shaufang@example.com', '咖啡烘焙師', 6, '深焙咖啡', '2021-07-10', 1),
(12, '陳建平', '0955-518447', '男', 'chienping@example.com', '咖啡萃取師', 4, '冰滴咖啡', '2019-11-23', 1),
(17, '241gh5d4154', '0974518335', '女', 'howard@test.com', '5', 5, '5', '2023-07-11', 0),
(18, 'Howard', '0974518335', '女', 'howard@test.com', '5', 5, '5', '2023-07-11', 0),
(19, 'Howard', '0974518335', '女', 'howard@test.com', '5', 5, '5', '2023-07-11', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coffseeker_teachers`
--
ALTER TABLE `coffseeker_teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `coffseeker_teachers`
--
ALTER TABLE `coffseeker_teachers`
  MODIFY `teacher_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
