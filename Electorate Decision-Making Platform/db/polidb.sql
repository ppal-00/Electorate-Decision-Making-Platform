-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 08:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'Himanshu', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'pal', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(255) NOT NULL,
  `candidate_name` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `criminal_cases` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `total_assets` varchar(255) NOT NULL,
  `liabilities` varchar(255) NOT NULL,
  `constituency` varchar(255) NOT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_name`, `party`, `criminal_cases`, `education`, `age`, `total_assets`, `liabilities`, `constituency`, `zone`) VALUES
(1, 'Imran Hussain', 'AAP', 0, 'Graduate Professional', 38, 'Rs. 1,41,37,344.00', 'Rs. 28,46,840.00', 'Ballimaran', 'central'),
(2, 'Parlad Singh Sawhney', 'AAP', 0, '12th Pass', 69, 'Rs. 41,85,65,734.00', 'Rs. 5,06,77,492.00', 'chandni chowk', 'central'),
(8, 'Vishesh Ravi', 'AAP', 0, '10th Pass', 36, 'Rs. 19,14,540.00', 'Rs.0.00', 'karol bagh', 'central'),
(9, 'Shoaib Iqbal', 'AAP', 6, '12th Pass	', 61, 'Rs. 1,38,95,551.00', 'Rs. 21,70,794.00', 'matia mahal', 'central'),
(10, 'Shiv Charan Goel', 'AAP', 0, '12th Pass', 57, 'Rs. 24,43,01,575.00', 'Rs. 0.00', 'moti nagar', 'central'),
(11, 'Raaj Kumar Anand', 'AAP', 1, 'Post Graduate', 53, '789065803.00', '324635220.00', 'patel nagar', 'central'),
(12, 'Som Dutt', 'AAP', 1, 'Graduate	', 44, '1196762.00', '0.00', 'sadar bazar', 'central'),
(13, 'Anil Kumar Bajpai', 'BJP', 1, 'Graduate', 62, '1882571.00', '339318.00', 'gandhi nagar', 'east'),
(14, 'Kuldeep Kumar', 'AAP', 0, '12th Pass', 30, '2682081.00', '0.00', 'kondli', 'east'),
(15, 'S. K. Bagga (Advocate) ', 'AAP', 1, 'Post Graduate', 65, '82876238.00', '6186719.00', 'krishna nagar', 'east'),
(16, 'Abhay Verma', 'BJP', 3, 'Graduate Professional', 47, '16531995.00', '2201000.00', 'laxmi nagar', 'east'),
(17, 'Manish Sisodia', 'AAP', 3, 'others', 47, '9350305.00', '0.00', 'patparganj', 'east'),
(18, 'Ram Niwas Goel', 'AAP', 1, 'Graduate', 72, '49617000.00', '804000.00', 'shahdara', 'east'),
(19, 'Rohit Kumar', 'AAP', 0, '12th Pass', 43, '9389865.00', '0.00', 'trilokpuri', 'east'),
(20, 'Om Prakash Sharma', 'BJP', 2, 'Graduate', 67, '247420941.00', '38443121.00', 'vishwas nagar', 'east'),
(21, 'Arvind Kejriwal', 'AAP', 13, 'Graduate Professional', 51, '34442870.00', '0.00', 'new delhi', 'new delhi'),
(22, 'Saurabh Bharadwaj', 'AAP', 0, 'Graduate Professional', 40, '10965258.00', '463803.00', 'greater kailash', 'new delhi'),
(23, 'Praveen Kumar', 'AAP', 1, 'Post Graduate', 35, '9185138.00', '356937.00', 'jangpura', 'new delhi'),
(24, 'Madan Lal', 'AAP', 2, 'Post Graduate', 63, '31658351.00', '1308101.00', 'kasturba nagar', 'new delhi'),
(25, 'Somnath Bharti', 'AAP', 6, 'Post Graduate', 45, '14252677.00', '2091998.00', 'malviya nagar', 'new delhi'),
(26, 'Amanatullah Khan', 'AAP', 12, '12th Pass', 46, '39382762.00', '0.00', 'okhla', 'new delhi'),
(27, 'Pramila Tokas', 'AAP', 2, '12th Pass', 42, '808875775.00', '117503156.00', 'rk puram', 'new delhi'),
(28, 'Pawan Sharma', 'AAP', 2, '12th Pass', 53, '14664286.00', '926502.00', 'adarsh nagar', 'north'),
(29, 'Sanjeev Jha', 'AAP', 3, 'Graduate', 40, '1037347.00', '0.00', 'burari', 'north'),
(30, 'Satyendar Jain', 'AAP', 2, 'Graduate', 55, '80796323.00', '7428470.00', 'shakur basti', 'north'),
(31, 'Bandana Kumari', 'AAP', 0, 'Graduate', 45, '92231723.00', '1483767.00', 'shalimar bagh', 'north'),
(32, 'Dilip Pandey', 'AAP', 2, 'Post Graduate', 39, '7711538.00', '0.00', 'timarpur', 'north'),
(33, 'Preeti Tomar', 'AAP', 0, 'Post Graduate', 50, '19311707.00', '191760.00', 'tri nagar', 'north'),
(34, 'Rajesh Gupta', 'AAP', 1, '12th Pass', 41, '26417093.00', '1707269.00', 'wazirpur', 'north'),
(35, 'Gopal Rai ', 'AAP', 1, 'Post Graduate', 44, '9001006.00', '0.00', 'babarpur', 'north-east'),
(36, 'Ajay Mahawar', 'BJP', 0, 'Post Graduate', 48, '100652796.00', '12802562.00', 'ghonda', 'north-east'),
(37, 'Surendra Kumar', 'AAP', 4, '10th Pass', 52, '93575001.00', '37128247.00', 'gokalpur', 'north-east'),
(38, 'Mohan Singh Bisht', 'BJP', 0, '12th Pass', 62, '28576870.00', '0.00', 'karawal nagar', 'north-east'),
(39, 'Haji Yunus', 'AAP', 1, 'Graduate', 58, '35782605.00', '401280.00', 'mustafabad', 'north-east'),
(40, 'Jitender Mahajan', 'BJP', 2, 'Graduate', 50, '17917623.00', '2850712.00', 'rohtas nagar', 'north-east'),
(41, 'Abdul Rehman', 'AAP', 2, '8th Pass', 53, '6817899.00', '0.00', 'seelampur', 'north-east'),
(42, 'Rajendra Pal Gautam', 'AAP', 0, 'Graduate Professional', 51, '18816707.00', '7394020.00', 'seema puri', 'north-east'),
(43, 'Ajesh Yadav', 'AAP', 0, 'Graduate', 52, '158186585.00', '15897629.00', 'badli', 'north-west'),
(44, 'Jai Bhagwan', 'AAP', 2, '12th Pass', 38, 'Rs. 1,98,21,562.00', 'Rs. 1,60,000.00', 'bawana', 'north-west'),
(45, 'Rituraj Govind', 'AAP', 2, 'Others', 31, 'Rs. 14,87,905', 'Rs. 0', 'kirari', 'north-west'),
(46, 'Dharampal Lakra', 'AAP', 1, 'Others', 61, 'Rs 2,92,11,79,176', 'Rs 6,04,36,578', 'mundka', 'north-west'),
(47, 'Sharad Kumar', 'AAP', 1, '10th Pass', 44, 'Rs 3,20,48,039', 'Rs 23,18,655', 'narela', 'north-west'),
(48, 'Mohinder Goyal', 'AAP', 1, '10th Pass', 55, 'Rs 4,38,90,953', 'Rs 2,11,463', 'rithala', 'north-west'),
(49, 'Vijender Kumar', 'BJP', 2, 'Post Graduate', 56, 'Rs 10,89,03,810', 'Rs 1,11,96,361', 'rohini', 'north-west'),
(50, 'Mukesh Kumar Ahlawat', 'AAP', 0, '12th Pass	', 44, 'Rs. 6,18,59,236', 'Rs. 6,56,107', 'sultanpur majra', 'north-west'),
(51, 'Ajay Dutt', 'AAP', 1, 'Post Graduate', 44, 'Rs. 2,83,66,215', 'Rs. 0', 'ambedkar nagar', 'south'),
(52, 'Ramvir Singh Bidhuri', 'BJP', 0, 'Graduate', 67, 'Rs. 20,66,22,689', 'Rs. 36,40,000', 'badarpur', 'south'),
(53, 'Kartar Singh Tanwar', 'AAP', 0, 'Others', 57, 'Rs. 23,84,75,327', 'Rs. 12,47,51,851', 'chhatarpur', 'south'),
(54, 'Prakash', 'AAP', 3, 'Post Graduate	', 31, 'Rs. 25,64,729', 'Rs. 10,271', 'deoli', 'south'),
(55, 'Atishi Marlena', 'AAP', 1, 'Post Graduate', 38, 'Rs. 1,41,21,663', 'Rs. 0', 'kalkaji', 'south'),
(56, 'Naresh Yadav ', 'AAP', 2, 'Graduate Professional', 47, 'Rs. 26,81,43,370', 'Rs. 1,02,42,054', 'mehrauli', 'south'),
(57, 'Dinesh Mohaniya', 'AAP', 2, 'Graduate Professional', 42, 'Rs. 35,28,046', 'Rs. 0', 'sangam vihar', 'south'),
(58, 'Sahiram', 'AAP', 2, '10th Pass', 59, 'Rs. 1,36,09,008', 'Rs. 0', 'tughlakabad', 'south'),
(59, 'Bhupinder Singh Joon', 'AAP', 0, 'Graduate Professional', 66, 'Rs 5,18,20,871', 'Rs 14,97,738', 'bijwasan', 'south-west'),
(60, 'Virender Singh Kadian', 'AAP', 0, 'Post Graduate', 44, 'Rs 2,10,60,842', 'Rs 39,04,342', 'delhi cantt', 'south-west'),
(61, 'Vinay Mishra', 'AAP', 0, 'Post Graduate', 37, 'Rs. 7,85.39.391', 'Rs. 78,64,769', 'dwarka', 'south-west'),
(62, 'Gulab Singh', 'AAP', 11, '12th Pass', 41, 'Rs 5,43,08,332', 'Rs 5,13,065', 'matiala', 'south-west'),
(63, 'Kailash Gahlot', 'AAP', 0, 'Post Graduate', 45, 'Rs 46,07,52,912', 'Rs 6,63,82,491', 'najafgarh', 'south-west'),
(64, 'Bhavna Gaur', 'AAP', 0, 'Graduate Professional', 49, 'Rs 14,27,686', 'Rs 8,62,526', 'palam', 'south-west'),
(65, 'Raghav Chadha', 'AAP', 0, 'Graduate', 31, 'Rs 19,97,979', 'Rs 0', 'rajinder nagar', 'south-west'),
(66, 'Naresh Balyan', 'AAP', 0, '8th Pass', 43, 'Rs. 56,40,04,694', 'Rs. 19,44,000', 'uttam nagar', 'south-west'),
(67, 'Raj Kumari Dhillon', 'AAP', 0, 'Graduate', 57, 'Rs 48,08,47,690', 'Rs 19,50,29,599', 'hari nagar', 'west'),
(68, 'Rajesh Rishi', 'AAP', 2, 'Graduate', 55, 'Rs 1,04,15,486', 'Rs 98,000', 'janakpuri', 'west'),
(69, 'Girish Soni', 'AAP', 0, 'Others', 56, 'Rs 1,05,88,179', 'Rs 2,50,350', 'madipur', 'west'),
(70, 'Rakhi Birla', 'AAP', 1, 'Post Graduate', 32, 'Rs 76,000', 'Rs 0', 'mangolpuri', 'west'),
(71, 'Raghuvinder Shokeen', 'AAP', 1, 'Graduate', 53, 'Rs 12,05,00,110', 'Rs 3,53,20,499', 'nangloi jat', 'west'),
(72, 'A Dhanwati Chandela A', 'AAP', 0, '10th Pass', 60, 'Rs 56,90,40,449', 'Rs 98,34,880', 'rajouri garden', 'west'),
(73, 'Jarnail Singh', 'AAP', 2, '12th Pass', 38, 'Rs 2,87,33,096', 'Rs 46,23,452', 'tilak nagar', 'west'),
(74, 'Mahinder Yadav', 'AAP', 0, '10th Pass', 56, 'Rs 2,38,59,496', 'Rs 6,91,809', 'vikaspuri', 'west'),
(77, 'Abul Kalam Azad', 'BSP', 0, 'Graduate Professional', 48, 'Rs 93,69,380', 'Rs 10,44,407', 'lok sabha-chandni chowk', 'lok sabha'),
(78, 'A. Gopala Krishna', 'Navarang Congress Party', 2, '12th Pass', 32, 'Rs 3,93,000', 'Rs 0', 'lok sabha-east delhi', 'lok sabha'),
(79, 'Achla Jethmalani', 'Jindabad Kranti Party', 0, 'Post Graduate', 54, 'Rs 4,18,00,000', 'Rs 0', 'lok sabha-new delhi', 'lok sabha'),
(80, 'Adv. Bhim Kishor', 'Peoples Party of India (Democratic)', 2, 'Graduate Professional', 33, 'Rs 17,70,940', 'Rs 40,000', 'lok sabha-north east delhi', 'lok sabha'),
(81, 'Aditi', 'IND', 1, 'Graduate', 30, 'Rs 16,596', 'Rs 0', 'lok sabha-north west delhi', 'lok sabha'),
(82, 'Abdul Basit', 'BSP', 0, 'Graduate', 45, 'Rs 1,81,68,589', 'Rs 0', 'lok sabha-south delhi', 'lok sabha'),
(83, 'Aj Rajan', 'Navarang Congress Party', 0, '10th Pass', 60, 'Rs 3,84,000', 'Rs 0', 'lok sabha-west delhi', 'lok sabha');

-- --------------------------------------------------------

--
-- Table structure for table `candidatesmcd`
--

CREATE TABLE `candidatesmcd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_name` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `criminal_cases` int(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `total_assets` varchar(255) DEFAULT NULL,
  `liabilities` varchar(255) DEFAULT NULL,
  `zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidatesmcd`
--

INSERT INTO `candidatesmcd` (`id`, `candidate_name`, `party`, `criminal_cases`, `education`, `age`, `total_assets`, `liabilities`, `zone`) VALUES
(1, 'Aaley Mohammed Iqbal', 'AAP', 1, '12th Pass', 31, 'Rs 85,98,996', 'Rs 0', 'central'),
(2, 'Aditya Chaudhary', 'AAP', 0, 'Post Graduate', 28, 'Rs 8,51,83,249', 'Rs 3,73,80,338', 'east'),
(3, 'Ajit Kaur Pasricha', 'AAP', 0, 'Graduate', 52, 'Rs 2,11,52,891', 'Rs 1,26,151', 'new delhi'),
(4, 'Aditi', 'IND', 0, 'Graduate', 29, 'Rs 15,064', 'Rs 0', 'north'),
(5, 'Aafreen Naaz', 'AAP', 0, 'Graduate', 28, 'Rs 34,06,800', 'Rs 0', 'north-east'),
(6, 'Ajay Hans', 'BJP', 0, 'Graduate', 56, 'Rs 5,47,90,056', 'Rs 80,93,549', 'north-west'),
(7, 'Aarti', 'INC', 0, '12th Pass', 41, 'Rs 4,75,469', 'Rs 0', 'shahdara'),
(8, 'Amarjeet', 'AAP', 0, '12th Pass', 39, 'Rs 3,96,94,516', 'Rs 0', 'south'),
(9, 'Anita Baisoya', 'AAP', 0, '12th Pass', 36, 'Rs. 2,42,67,492', 'Rs. 0', 'south-east'),
(10, 'Aarti', 'INC', 0, '10th Pass', 30, 'Rs 22,37,592', 'Rs 3,34,575', 'south-west'),
(11, 'A Priya Chandela', 'AAP', 0, 'Graduate', 34, 'Rs 2,67,14,329', 'Rs 3,24,76,459', 'west');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `donor`, `amount`, `donation_date`) VALUES
(1, 'Himanshu', 99999999.99, '2024-05-14 06:06:02'),
(2, 'kk', 1.00, '2024-05-14 06:06:41'),
(3, 'gg', 56666.00, '2024-05-14 06:06:58'),
(4, 'gg', 56666.00, '2024-05-14 06:10:41'),
(5, 'dddd', 22.00, '2024-05-14 06:14:19'),
(6, 'Nitn', 12344.00, '2024-05-14 06:33:07'),
(7, 'pal', 12.00, '2024-05-14 06:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `party_wise_list`
--

CREATE TABLE `party_wise_list` (
  `id` int(11) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `party_wise_list`
--

INSERT INTO `party_wise_list` (`id`, `party_name`, `amount`) VALUES
(1, 'BJP', 100000.00),
(2, 'congress', 5.00),
(3, 'APP', 1234.00),
(4, 'dddd', 22.00),
(5, 'App', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `reg_date`) VALUES
(1, 'test', 'test@123', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-23 20:22:02'),
(3, 'test3', 'test3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-25 16:41:37'),
(4, 'test4', 'test4@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-29 10:13:07'),
(5, 'test5', 'test5@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-29 12:27:54'),
(6, 'test6', 'test6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-05-29 12:29:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidatesmcd`
--
ALTER TABLE `candidatesmcd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_wise_list`
--
ALTER TABLE `party_wise_list`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `candidatesmcd`
--
ALTER TABLE `candidatesmcd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `party_wise_list`
--
ALTER TABLE `party_wise_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
