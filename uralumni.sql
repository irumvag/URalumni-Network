-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2024 at 04:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uralumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvallog`
--

CREATE TABLE `approvallog` (
  `approval` varchar(50) NOT NULL,
  `approve` varchar(59) NOT NULL,
  `service` text DEFAULT NULL,
  `comment` text NOT NULL,
  `Timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approvallog`
--

INSERT INTO `approvallog` (`approval`, `approve`, `service`, `comment`, `Timestamp`) VALUES
('IRUMVA Gad Anaclet', 'IRUMVA Gad Anaclet', 'Disapprove', 'ok', '2024-01-16'),
('IRUMVA Gad Anaclet', 'IRUMVA Gad Anaclet', 'Approving', 'ok', '2024-01-16'),
('TUYISENGE Aurele', 'TUYISENGE Aurele', 'Approving', 'ok', '2024-01-17'),
('TUYISENGE Aurele', 'IRUMVA Gad Anaclet', 'Approving', 'ok', '2024-01-17'),
('IRUMVA Gad Anaclet', 'HABAYIMANA Vincent', 'Approving', 'ok', '2024-01-19'),
('IRUMVA Gad Anaclet', 'TUYISENGE Aurele', 'Disapprove', 'wrong id', '2024-01-19'),
('IRUMVA Gad Anaclet', 'HABAYIMANA Vincent', 'Disapprove', 'wrong id', '2024-01-19'),
('IRUMVA Gad Anaclet', 'TUYISENGE Aurele', 'Approving', 'ok', '2024-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `COMMENTS`
--

CREATE TABLE `COMMENTS` (
  `postid` int(11) DEFAULT NULL,
  `regno` int(11) DEFAULT NULL,
  `messages` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_name` text DEFAULT NULL,
  `SID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_name`, `SID`) VALUES
('School of Engineering', 6),
('School of Science', 6),
('School of Information Communication Technology', 6),
('School of Architecture and the Built Environment', 6),
('School of Mining and Geology', 6),
('School of Nursing and Midwifery', 5),
('School of Health Sciences', 5),
('School of Dentistry', 5),
('School of Public Health', 5),
('School of Medicine and Pharmacy', 5),
('Department of Foundations, Management & Curriculum Studies', 4),
('Department of Humanities and Language Education', 4),
('Department of Maths, Science and Physical Education', 4),
('Department of Early Childhood&Primary Education', 4),
('Department of Special Needs Education Studies', 4),
('Department of Disability, Rehabilitation and Inclusion Studies', 4),
('Department of Educational Studies', 4),
('Department of African Virtual University Centre', 4),
('Department of Pan African Tele-Education Network', 4),
('School of Agriculture and Food Sciences', 3),
('School of Agricultural Engineering ', 3),
('School of Veterinary Medicine', 3),
('School of Forestry, Biodiversity and Biological Sciences', 3),
('School of Business', 2),
('School of Economics', 2),
('School of Law', 1),
('School of Journalism and Communication', 1),
('School of Social, Political and Administrative Sciences', 1),
('School of Arts and Languages', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `e_description` text NOT NULL,
  `event_hoster` int(11) NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `event_name`, `e_description`, `event_hoster`, `timestamp`) VALUES
(1, 'Alumni network launching', 'UR Alumni network event will take place at Camp KIGALI MUHAZI temt on 06th may 2024. There we will be with Alumni,principles of UR Campus,alumni association leader,lectures and final year student. we will be launching UR alumni network website and they will be discussing how to use that website more effective.The majority of this event is launching UR alumni network and sharing testmony on after academic journal with alumni', 223000471, '2024-01-21'),
(2, 'Effective Platform Use', 'Effective platform use of UR alumni network website event will be conductive via online through zoom meeting on 20th july 2024.There we will be with alumni who are willing to use alumni network effective so that it can become source of knowledge and skill sharing. we will be talking about how to use website by sharing news, how to create post how to get information about opportunities,mentorship programs and many content in UR alumni network web site', 223000471, '2024-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktb`
--

CREATE TABLE `feedbacktb` (
  `EMAIL` varchar(100) NOT NULL,
  `Fmessage` text NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacktb`
--

INSERT INTO `feedbacktb` (`EMAIL`, `Fmessage`, `timestamp`) VALUES
('tuyisengeauris@gmail.com', 'improvement is needed for login', '2024-01-14'),
('irumvagadanaclet@gmail.com', 'hello gad', '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `group_owner` int(11) NOT NULL,
  `g_description` text NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `group_owner`, `g_description`, `timestamp`) VALUES
(1, 'Computer Engineering', 223000471, 'Here in this group we are one family as we are very happy for you to join our group, we share information and skill which are expensive', '2024-01-19'),
(2, 'School of Engineering', 223000400, 'We wish you most welcome to our site of communication!@', '2024-01-19'),
(3, 'UR_CST', 223000471, 'alumni from cst', '2024-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `join_group`
--

CREATE TABLE `join_group` (
  `group_id` int(11) DEFAULT NULL,
  `uregno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mesfromreg` int(11) NOT NULL,
  `mestoreg` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mesfromreg`, `mestoreg`, `message`, `timestamp`) VALUES
(223000400, 223000323, 'hello vincent', '2024-01-19'),
(223000471, 223000323, 'hello vincent', '2024-01-19'),
(223000471, 223000400, 'hello brother', '2024-01-19'),
(223000471, 223000400, 'hello brother', '2024-01-19'),
(223000400, 223000323, 'hello\r\n', '2024-01-19'),
(223000400, 223000323, 'hello\r\n', '2024-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `newletter`
--

CREATE TABLE `newletter` (
  `EMAIL` varchar(50) NOT NULL,
  `timestamp_collumn` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newletter`
--

INSERT INTO `newletter` (`EMAIL`, `timestamp_collumn`) VALUES
('mbabazipatric@gmail.com', '2024-01-09'),
('irumvagadanaclet@gmail.com', '2024-01-09'),
('valensbikorimana70@gmail.com', '2024-01-09'),
('tuyisengeauris@gmail.com', '2024-01-10'),
('davidagau@gmail.com', '2024-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `sregno` int(11) NOT NULL,
  `message` text NOT NULL,
  `image` blob NOT NULL,
  `timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `sregno`, `message`, `image`, `timestamp`) VALUES
(1, 223000400, 'hello', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(2, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(3, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(4, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(5, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(6, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(7, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(8, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(9, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(10, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(11, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(12, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(13, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(14, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(15, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(16, 223000400, 'Here there are job opportunity i would like to recommend to you as people in same place', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f62726172697277612e6a706567, '2024-01-18'),
(17, 223000400, 'planet', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f766c63736e61702d323032332d31322d32342d32306834356d3535733233362e706e67, '2024-01-18'),
(18, 223000400, 'planet', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f766c63736e61702d323032332d31322d32342d32306834356d3535733233362e706e67, '2024-01-18'),
(19, 223000400, 'hello', 0x2f6f70742f6c616d70702f75706c6f61645f74656d702f53637265656e73686f745f32303232303830372d3130353335382e6a7067, '2024-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `NAME` varchar(40) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MESSAGE` text NOT NULL,
  `Timestamp` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`NAME`, `EMAIL`, `MESSAGE`, `Timestamp`) VALUES
('irumva gad', 'irumvagadanaclet@gmail.com', 'continue it is', '2024-01-12'),
('irumva gad', 'irumvagadanaclet@gmail.com', 'thanks', '2024-01-13'),
('irumva gad', 'irumvagadanaclet@gmail.com', 'welcome brother', '2024-01-13'),
('IRUMVA GAD', 'irumvagadanaclet@gmail.com', 'how to login', '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `urcollages`
--

CREATE TABLE `urcollages` (
  `SID` int(11) NOT NULL,
  `SNAME` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `urcollages`
--

INSERT INTO `urcollages` (`SID`, `SNAME`) VALUES
(1, 'College of Arts and Social Sciences/College of Business and Economics'),
(2, 'College of Business and Economics/College of Arts and Social Sciences'),
(3, 'College of Agriculture, Animal Sciences and Veterinary Medicine'),
(4, 'College of Education '),
(5, 'College of Medicine and Health Sciences'),
(6, 'College of Science and Technology');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `REGNO` int(11) NOT NULL,
  `NAMES` text DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `TELEPHONE` varchar(12) NOT NULL,
  `DEPARTMENT` varchar(100) DEFAULT NULL,
  `ROLE` varchar(100) NOT NULL DEFAULT 'Alumni user',
  `PSSWORD` varchar(2000) NOT NULL,
  `STATUS` int(11) DEFAULT 1,
  `DATES` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`REGNO`, `NAMES`, `EMAIL`, `TELEPHONE`, `DEPARTMENT`, `ROLE`, `PSSWORD`, `STATUS`, `DATES`) VALUES
(223000400, 'TUYISENGE Aurele', 'tuyisengeauris@gmail.com', '0798970602', 'School of Engineering', 'Alumni user', '$2y$10$JgAtcGI1HiStnaeTHandRuSz4OiE2F9m2YPc7rWp1m/JGXQcZgCHC', 1, '2024-01-17'),
(223000471, 'IRUMVA Gad Anaclet', 'irumvagadanaclet@gmail.com', '0789696664', 'School of Information Communication Technology', 'administrator', '$2y$10$9GzP2GY03OUU4m3PSjtoD.kClwLWoTpNVge5jWxNbcZWBWcDSkwK2', 1, '2024-01-17'),
(223001471, 'MANISHIMWE Herve', 'manishimweherve@gmail.com', '0794230205', 'School of Engineering', 'Alumni association Leader', '$2y$10$4JU/1mp02zSGu002Cj/tse/mqEMwcrkcpjk8ABIlb6FQulMCoD6ce', 0, '2024-01-19'),
(223004342, 'HIMBAZWA Igor', 'muhirevago@gmail.com', '0788532360', 'Department of Educational Studies', 'Alumni user', '$2y$10$0R5mS0sRQt4bMpWZr1nVgup0QVAD3wTTALhzpH4hN8doRPs4Ra2AW', 0, '2024-01-17'),
(223008282, 'TUMUKUNDE Gentille', 'tumukunde@gmail.com', '0794230205', 'School of Law', 'Alumni association Leader', '$2y$10$JagEUY71hM/PXxi5G8CWG.hf4/IMw4W/WAqByOnQPC.1nESoXlByO', 0, '2024-01-19'),
(223009845, 'TUYISENGE Emmanuel', 'tuyisenge@gmail.com', '0788532360', 'School of Engineering', 'Alumni user', '$2y$10$3oQPDlu455.SSftJrvkSgekDbxoG/EzLvU6SwwE1tXCch5uk2K/tO', 0, '2024-01-19'),
(223302323, 'DAVID Agua Koal', 'davidagau@gmail.com', '0798970602', 'School of Science', 'Alumni user', '$2y$10$0D74t.1haeN5tIranT44Q.tNkecDokxulMV0XZseTIS/u45n6TtWq', 0, '2024-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `urcollages`
--
ALTER TABLE `urcollages`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`REGNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `urcollages`
--
ALTER TABLE `urcollages`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
