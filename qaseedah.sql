-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2023 at 07:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qaseedah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `created_at` datetime(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `gender`, `created_at`) VALUES
(1, 'Abu Esa', 'mhabuesa@gmail.com', '$2y$10$lt141OHXRhcwK1k.zEHWYeFN9C8XbWZtVeKIbC5nNhv2CGbOQaLoO', 'male', '2023-06-27 05:05:51.00');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int NOT NULL,
  `album_number` varchar(200) DEFAULT NULL,
  `album_title` varchar(200) DEFAULT NULL,
  `artist_name` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `rated` int NOT NULL DEFAULT '0',
  `like_count` int DEFAULT NULL,
  `love_count` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `album_number`, `album_title`, `artist_name`, `photo`, `status`, `rated`, `like_count`, `love_count`) VALUES
(1, '01', 'Naat Shareef - HABIBI', 'Mixed', '01.jpg', 1, 1, 4, 3),
(2, '02', 'He Ishker Nobi Amar', 'Hafiz Hamidullah', '02.jpg', 1, 1, 1, 1),
(3, '03', 'Naat Shareef - Shumohan Naat Shareef', 'Mixed', '03.jpg', 1, 1, 1, 1),
(4, '04', 'Jabo Kothay He Amar Mamduh', 'Mixed', '04.jpg', 1, 1, 1, 1),
(5, '05', 'Ilahi Apnar Rohmote', 'Mixed', '05.jpg', 1, 1, 2, 2),
(6, '06', 'Salam Nin Rosule Numa', 'Mixed', '06.jpg', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fb_id` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `phone`, `fb_id`) VALUES
(1, 'Mixed', '', ''),
(2, 'ABM Ruhul Hassan', '+1 (101) 839-4203', 'Dummy Text'),
(3, 'Muhammadullah', '+1 (572) 869-4727', 'Dummy Text'),
(4, 'Hafiz Hamidullah', '+1 (658) 207-2969', 'Dummy Text'),
(5, 'Mabrurul Haque', '+1 (658) 207-2969', 'Dummy Text'),
(6, 'Imtiyaj Hussain', '0170 694439', 'Dummy Text'),
(7, 'Anisuzzaman', '+1 (572) 869-4727', 'Dummy Text'),
(8, 'Munzir Muhammad', '+1 (101) 839-4203', 'Dummy Text'),
(9, 'Baizidur Rahmaan', '+1 (101) 839-4203', 'Dummy Text'),
(10, 'Abu Hanifa', '+1 (572) 869-4727', 'Dummy Text'),
(11, 'Khairul Islam', '+1 (101) 839-4203', 'Dummy Text'),
(12, 'Mahdi hasan', '01706944396', 'Dummy Text'),
(13, 'Al Amin', '', ''),
(14, 'Haroonur Rashid baunia', '', ''),
(15, 'Ahmad Shaheed', '', ''),
(16, 'Ahmad Shihab', '', ''),
(17, 'Dulal Miya', '', ''),
(18, 'Abul Hasan', '', ''),
(19, 'Ishtiyak Husain', '', ''),
(20, 'Jahid Reza', '', ''),
(22, 'Masoodur Rahman Fahim', '', ''),
(23, 'Nasiruddin', '', ''),
(24, 'Nooruzzaman', '', ''),
(25, 'Rohit Hasan', '', ''),
(26, 'Farid Ahmad', '', ''),
(27, 'Mushfikur Rahman', '', ''),
(28, 'Abdul Ahad', '', ''),
(29, 'Rafiqul Islam', '', ''),
(30, 'Tanvir', '', ''),
(31, 'Ahmadullah', '+1 (241) 393-2039', 'Sed laboriosam sint');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int NOT NULL,
  `address` varchar(300) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `address`, `email`, `phone`) VALUES
(1, '5 Outer, circular road, Rajarbag Shareef, Dhaka-1217', 'rajarbagshareefofficial@gmail.com', '+8801712121212');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `day` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `month` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `desp` varchar(1000) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `day`, `time`, `month`, `location`, `title`, `desp`, `photo`, `url`, `status`) VALUES
(6, '09', '09:09', 'Rwamadan', 'Dorbar Shareef', 'Eid e Milade Kholifatul Umam', 'Eid eid e Milade Kholifatul Umam Alaihais Salam', 'Eid e Milade Kholifatul Umam.jpg', 'https://www.al-hikmah.net/', '1'),
(7, '12', '00:12', 'Rwabiul Aowal', 'Rajarbag Dorbar Shareef', 'Saiyidul Aiyaad Shareef', 'Saiyidul Aiyaad Shareef .\r\nEid E Milade Saiyidul Mursakin Imamul Mursalin Khotamun Nabiyin, Roore Mujassam Habibullah Hujur Pak Swallallahu Alaihi Wa Sallam', 'Saiyidul Aiyaad Shareef.jpg', 'https://saiyidul-aayaad.net/', '1'),
(8, '7', '14:29', 'Muharram', 'Modi est irure qui ', 'Doloremque quia mini', 'Quis sunt dolorum qu', 'Doloremque quia mini.jpg', 'Sunt adipisci eos ab', '1'),
(9, '3', '13:57', 'Muharram', 'Nesciunt duis ut in', 'Vero ut facere dolor', 'Nisi culpa sint iust', 'Vero ut facere dolor.jpg', 'Expedita id commodo ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` datetime(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `message`, `status`, `created_at`) VALUES
(9, 'Clementine Roberts', 'kaxusadux@mailinator.com', '+1 (471) 838-5453', 'Quia earum est digni', 1, NULL),
(10, 'Otto Gilmore', 'wivahyra@mailinator.com', '+1 (497) 932-5554', 'Omnis nulla anim bea', 1, NULL),
(11, 'Raymond Hamilton', 'kesybejo@mailinator.com', '+1 (537) 926-4003', 'Asperiores impedit ', 1, '2023-06-26 02:23:52.00'),
(12, 'Josephine Hendrix', 'racun@mailinator.com', '+1 (536) 619-5968', 'Sed quo nulla volupt', 1, '2023-06-26 02:26:08.00'),
(13, 'Karen Chandler', 'kabagosixe@mailinator.com', '+1 (279) 565-8179', 'Aliquid eu hic vitae', 1, '2023-06-26 02:26:35.00'),
(14, 'Dante Acevedo', 'mikotoqagy@mailinator.com', '+1 (564) 851-9566', 'Similique quas minus', 1, '2023-06-26 02:26:40.00'),
(15, 'Geoffrey Ward', 'luxucyveqo@mailinator.com', '+1 (356) 181-5416', 'Quisquam sunt do vel', 1, '2023-06-26 02:26:44.00'),
(16, 'Jemima Waller', 'cusupenyc@mailinator.com', '+1 (638) 551-4103', 'Eos non non nostrum ', 1, '2023-06-26 02:28:07.00'),
(17, 'Wilma Nichols', 'tacex@mailinator.com', '+1 (689) 156-3611', 'Et rem aut in volupt', 1, '2023-06-26 10:15:02.00');

-- --------------------------------------------------------

--
-- Table structure for table `qs`
--

CREATE TABLE `qs` (
  `id` int NOT NULL,
  `album_number` varchar(200) DEFAULT NULL,
  `artist` varchar(200) DEFAULT NULL,
  `qs_title` varchar(200) NOT NULL,
  `qs` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qs`
--

INSERT INTO `qs` (`id`, `album_number`, `artist`, `qs_title`, `qs`) VALUES
(1, '01', 'Muhammadullah', 'Ghoshona', '001 ghoshona.mp3'),
(2, '01', 'Muhammadullah', 'Habiber Rowjay Ashbo', '002 Habiber Rowjay ashbo.mp3'),
(3, '01', 'Hafiz Hamidullah', 'Twalaal Badru Alaina', '003 Twalal badroo alainaa.mp3'),
(4, '01', 'Hafiz Hamidullah', 'Hordom Chaichi Didar', '004 Hordom chaichi darshan.mp3'),
(5, '01', 'Hafiz Hamidullah', 'Cholo Ashikin Nobijir Dorbar', '004 Hordom chaichi darshan.mp3'),
(6, '01', 'Hafiz Hamidullah', 'Swalli Ala Boli', '006 Salliala boli.mp3'),
(7, '01', 'Hafiz Hamidullah', 'Modina Chara Ami Kotha', '006 Salliala boli.mp3'),
(8, '01', 'Hafiz Hamidullah', 'Bohut Shundor Cheharay Aader Nobi', '008 Bohu shundor cheharay.mp3'),
(9, '01', 'Hafiz Hamidullah', 'Golam Hote Ai Roi', '009 Golam hote ami roi.mp3'),
(10, '02', 'Hafiz Hamidullah', 'Khodar Proshongsha Khoda', '002 Khodar proshongsha.mp3'),
(11, '02', 'Hafiz Hamidullah', 'Ami Chaichi Madai Inam', '003 Ami chaichi madani inam.mp3'),
(12, '02', 'Hafiz Hamidullah', 'Dilta Amar Ki Khoje re Jogot Moy ', '005 Dilta amar.mp3'),
(13, '02', 'Hafiz Hamidullah', 'Ki Kohibo Gun Tobo Doyar', '006 Ki kohibo.mp3'),
(14, '02', 'Hafiz Hamidullah', 'He Rwasul Dhonno Korun More', '008 He Rasul Dhonno koren more.mp3'),
(15, '02', 'Hafiz Hamidullah', 'Shob Ceye Modhumoy ', '009 Shobcheye modhumoy.mp3'),
(16, '02', 'Hafiz Hamidullah', 'Chaina Duniar Bilash', '010 Chaina duniyar bilash.mp3'),
(17, '02', 'Hafiz Hamidullah', 'He Ishker Nobi Amar', '011 He ishqer nabi amar.mp3'),
(18, '03', 'ABM Ruhul Hassan', 'Ghoshona', '1. Ghoshona.mp3'),
(19, '03', 'Ahmadullah', 'Barokallahu Fi Kamin Gulami', '2. barakallahu - AU.mp3'),
(20, '03', 'ABM Ruhul Hassan', 'Didar Belay Kori Munajat', '3. Didar bela_ABMRHV.mp3'),
(21, '03', 'Hafiz Hamidullah', 'Ilahi Mahbuba', '4. Elahi mahbuba_Masumvai_HU.f.mp3'),
(22, '03', 'Ahmadullah', 'Ilahi Didare Naat Poren', '5. Elahi didare_AU.mp3'),
(23, '03', 'Imtiyaj Hussain', 'Naat Poren Ummu Rwasulina', '6. Naat poren ma AMINA_Shihabvai_Imtiyaj.mp3'),
(24, '03', 'Hafiz Hamidullah', 'Rwasul Shane Naat Poren ', '7. Rasul shane_Alamgirvai_HU.mp3'),
(25, '03', 'Tanvir', 'Shorbo Kaler Shorbo Chrestho', '8. Shorbo kaler shorbo sreshto_Tanvir vai.mp3'),
(26, '03', 'Hafiz Hamidullah', 'Rwasul Shane Naat Poren ', '9. Rasul Shane_Munjirvai_HU.mp3'),
(27, '04', 'Muhammadullah', 'Ghoshona', '1. Ghoshona.mp3'),
(28, '04', 'Hafiz Hamidullah', 'Jabo Kothay He Amar Mamduh', '2. Jabo kothay he amar mamduh.mp3'),
(29, '04', 'Muhammadullah', 'Kebol Murshid Chara Alap', 'Kebol Murshid Chara Alap.mp3'),
(30, '04', 'Ahmadullah', 'Noore Nurani Aloron Shahjadir Agomon', '4. Noore noorani Aloron.mp3'),
(31, '04', 'Hafiz Hamidullah', 'Ashilam Rajarbag Dorbar', '5. Ashilam Rajarbag.mp3'),
(32, '04', 'Muhammadullah', 'Murshidi Churat Ki Chahi Ami', '6. Murshidi surat ki chahi.mp3'),
(33, '04', 'Hafiz Hamidullah', 'Murshid Wala Mora Cholchii Didar Desh', '7. Murshid wala Mura.mp3'),
(34, '04', 'Muhammadullah', 'Eshe Dekho He Shotto Pipashu', '8. eshe dekho he.mp3'),
(35, '05', 'Muhammadullah', 'Ghoshona', 'Ghoshona.mp3'),
(37, '05', 'Ahmadullah', 'He Murshid Amar Qualbi Wala', 'He Murshid Amar Qualbi Wala.mp3'),
(38, '05', 'Hafiz Hamidullah', 'Ohe Murid Vai Chaho Shobe', 'Ohe Murid Vai Chaho Shobe.mp3'),
(39, '05', 'Muhammadullah', 'He Dostogir He Murshide Jaman', 'He Dostogir He Murshide Jaman.mp3'),
(40, '05', 'Hafiz Hamidullah', 'Ponchodosh Shotabdir He Mujaddid ', 'Ponchodosh Shotabdir He Mujaddid .mp3'),
(41, '05', 'Imtiyaj Hussain', 'Rajarbager Nil Gogone Chondro Agomon', 'Rajarbager Nil Gogone Chondro Agomon.mp3'),
(42, '05', 'Hafiz Hamidullah', 'He Siyidatun Nisa Apni Moder Mathar Moni', 'He Siyidatun Nisa Apni Moder Mathar Moni.mp3'),
(43, '05', 'Hafiz Hamidullah', 'Murshidi Preme Mora ', 'Murshidi Preme Mora .mp3'),
(44, '05', 'Hafiz Hamidullah', 'Murshid Awliya Sultan', 'Murshid Awliya Sultan.mp3'),
(45, '06', 'Mixed', 'Shaykhi Nirer Talashi', 'Shaykhi Nirer Talashi.mp3'),
(47, '06', 'Mixed', 'Salam Nin Rasule Numa', '2 salam nin.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `smedia`
--

CREATE TABLE `smedia` (
  `id` int NOT NULL,
  `fb_page` varchar(300) DEFAULT NULL,
  `fb_group` varchar(300) DEFAULT NULL,
  `youtube` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smedia`
--

INSERT INTO `smedia` (`id`, `fb_page`, `fb_group`, `youtube`) VALUES
(1, 'https://www.facebook.com/Qaseedah9', 'https://www.facebook.com/rajarbagofficial', 'https://www.youtube.com/@Qaseedah9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `gender` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `gender`, `roll`) VALUES
(1, 'Jeremy Mcguire', 'nidynisod@mailinator.com', 'Pa$$w0rd!', 'Male', '0'),
(2, 'Rebecca Peck', 'hehaxo@mailinator.com', 'Pa$$w0rd!', 'Male', '0'),
(3, 'Elvis Contreras', 'xifybivuv@mailinator.com', 'Pa$$w0rd!', 'Female', '0'),
(4, 'Dahlia Hernandez', 'gahyf@mailinator.com', 'Pa$$w0rd!', 'Male', '0'),
(5, 'Abu Esa', 'mhabuesa@gmail.com', '1212', 'Male', '1'),
(6, 'Keely Hoover', 'ceqi@mailinator.com', 'Pa$$w0rd!', 'Male', '0'),
(7, 'James Davidson', 'qojycux@mailinator.com', 'Pa$$w0rd!', 'Male', '0'),
(8, 'Carly Owen', 'filoq@mailinator.com', 'Pa$$w0rd!', 'Female', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qs`
--
ALTER TABLE `qs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smedia`
--
ALTER TABLE `smedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `qs`
--
ALTER TABLE `qs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `smedia`
--
ALTER TABLE `smedia`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
