-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 06:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstoneproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE `adviser` (
  `adviser_id` int(11) NOT NULL,
  `adviser_surname` varchar(225) NOT NULL,
  `adviser_given_name` varchar(225) NOT NULL,
  `adviser_middle_name` varchar(50) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `age` int(11) NOT NULL,
  `birth_date` varchar(225) DEFAULT NULL,
  `email_address` varchar(225) NOT NULL,
  `adviser_address` varchar(225) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `rank` varchar(225) NOT NULL,
  `images` varchar(225) NOT NULL,
  `register_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`adviser_id`, `adviser_surname`, `adviser_given_name`, `adviser_middle_name`, `gender`, `age`, `birth_date`, `email_address`, `adviser_address`, `phone_number`, `rank`, `images`, `register_id`) VALUES
(12, 'Tamano', 'Suhaina', 'K.', 'Female', 29, '1991-12-12', 'Suhainakt@gmail.com', 'MSU - MAIN Campus', '+639300420954     ', 'Teacher 1', '234214620_564335651585193_3153167270189015597_n.jpg', 23),
(13, 'Asum', 'Maimona', 'M.', 'Male', 34, '1986-12-30', 'maimona@gmail.com', 'MSU - MAIN Campus', '+636589423758       ', 'Professor', 'girl.png', 24),
(14, 'Domato', 'Mohammad', 'P.', 'Male', 27, '1994-05-28', 'mohammad@gmail.com', 'MSU - MAIN Campus', '+639865732154       ', 'Teacher 1', 'boy3.png', 25),
(15, 'Vistal', 'Jogie', 'A.', 'Female', 39, '1982-01-01', 'jogie@gmail.com', 'MSU - MAIN Campus', '+639300420954    ', 'Teacher 1', 'team-member.jpg', 26),
(16, 'Macatotong', 'Amer Hussien', 'T.', 'Male', 26, '1995-01-01', 'amerhussien@gmail.com', 'MSU - MAIN Campus, Comcent', '+636859421546   ', 'Teacher 1', 'client3.png', 27),
(17, 'Lucman', 'Abdulracman', 'M.', 'Male', 32, '1989-01-01', 'sirlucman@gmail.com', 'Bo. Salam, Marawi City', '+63584521687', 'Professor', 'man4.jpg', 28),
(24, 'Quindo', 'Aileen', 'T.', 'Female', 35, '1985-12-25', 'aileenquido@gmail.com', 'Pala-o, Iligan City', '+63658485498 ', '', 'team-member.jpg', 51),
(25, 'Belmonte', 'Joel', 'L.', 'Male', 36, '1985-06-30', 'belmontejoel@gmail.com', 'Iligan city', '+636592484485 ', '', 'client1.png', 52);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `qrcode_id` int(11) NOT NULL,
  `TimeInAM` varchar(225) NOT NULL,
  `TimeOutAM` varchar(255) NOT NULL,
  `TimeInPM` varchar(225) NOT NULL,
  `TimeOutPM` varchar(22) NOT NULL,
  `logdate` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `qrcode_id`, `TimeInAM`, `TimeOutAM`, `TimeInPM`, `TimeOutPM`, `logdate`, `status`) VALUES
(73, 20, '07:31 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(74, 21, '08:07 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(75, 22, '08:08 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(76, 19, '08:12 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(77, 23, '08:12 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(79, 20, '07:42 am', 'NO LOGOUT', '02:45 pm', 'NO LOGOUT', '2021-08-26', '2'),
(80, 21, '06:51 am', 'NO LOGOUT', '02:06 pm', 'NO LOGOUT', '2021-08-26', '2'),
(81, 19, '06:52 am', 'NO LOGOUT', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '0'),
(82, 19, '06:25 am', '10:42 am', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '1'),
(83, 21, '06:27 am', '10:43 am', 'NO LOGIN', 'NO LOGOUT', '2021-08-28', '1'),
(84, 23, '06:28 am', '10:41 am', 'NO LOGIN', 'NO LOGOUT', '2021-08-30', '1'),
(100, 20, '10:45 am', '10:47 am', '', '', '2021-09-27', '0'),
(101, 28, '05:08 pm', '05:11 pm', '06:12 pm', '06:15 pm', '2021-09-29', '0'),
(102, 20, '06:11 pm', '', '', '', '2021-09-29', '0'),
(103, 20, '03:22 pm', '', '', '', '2021-09-30', '0'),
(104, 28, '03:22 pm', '', '', '', '2021-09-30', '0'),
(105, 28, '09:18 am', '', '', '', '2021-10-07', '0'),
(106, 20, '08:08 am', '', '', '', '2021-12-03', '0'),
(107, 24, '09:24 am', '', '', '', '2021-07-19', '0');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enroll_id` int(11) NOT NULL,
  `pupil_id` int(11) NOT NULL,
  `gradsec_id` int(11) NOT NULL,
  `schoolyear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enroll_id`, `pupil_id`, `gradsec_id`, `schoolyear_id`) VALUES
(13, 50, 21, 2),
(15, 52, 21, 1),
(16, 53, 22, 1),
(17, 54, 23, 2),
(18, 55, 18, 1),
(25, 57, 27, 2),
(32, 64, 27, 1),
(36, 51, 21, 2),
(37, 55, 21, 2),
(38, 51, 18, 1),
(39, 65, 18, 3),
(40, 66, 18, 3),
(41, 67, 18, 3),
(42, 68, 23, 1),
(43, 65, 35, 1),
(44, 66, 35, 1),
(45, 67, 35, 3),
(46, 69, 22, 1),
(47, 70, 22, 1),
(48, 71, 22, 3),
(49, 72, 22, 3),
(50, 73, 22, 3),
(51, 71, 33, 1),
(52, 72, 33, 1),
(53, 73, 33, 1),
(54, 54, 26, 1),
(55, 67, 26, 1),
(56, 66, 26, 1),
(57, 55, 21, 2),
(58, 74, 27, 3),
(59, 55, 18, 1),
(60, 55, 21, 2),
(61, 55, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `gradsec`
--

CREATE TABLE `gradsec` (
  `gradsec_id` int(11) NOT NULL,
  `grade_level` varchar(225) NOT NULL,
  `section` varchar(225) NOT NULL,
  `adviser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gradsec`
--

INSERT INTO `gradsec` (`gradsec_id`, `grade_level`, `section`, `adviser_id`) VALUES
(18, 'Grade - I', 'Gumamela', 12),
(21, 'Grade - II', 'Santan', 13),
(22, 'Grade - III', 'Daisy', 14),
(23, 'Grade - VI', 'Dahlia', 15),
(26, 'Grade - V', 'Water Lily', 16),
(27, 'Grade - VI', 'Vanda', 17),
(33, 'Grade - IV', 'Sun Flower', 24),
(35, 'Grade - II', 'Tulip', 25);

-- --------------------------------------------------------

--
-- Table structure for table `pupil`
--

CREATE TABLE `pupil` (
  `pupil_id` int(11) NOT NULL,
  `qrcode_id` int(11) NOT NULL,
  `pupil_surname` varchar(225) NOT NULL,
  `pupil_given_name` varchar(225) NOT NULL,
  `pupil_middle_name` varchar(50) NOT NULL,
  `pupil_gender` varchar(255) NOT NULL,
  `guardian` varchar(225) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `guardian_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pupil_images` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pupil`
--

INSERT INTO `pupil` (`pupil_id`, `qrcode_id`, `pupil_surname`, `pupil_given_name`, `pupil_middle_name`, `pupil_gender`, `guardian`, `relationship`, `guardian_number`, `address`, `pupil_images`, `status`) VALUES
(50, 19, 'Macapantao', 'Basher', 'M.', 'Male', 'Mrs & Mr. Macapntao', 'Son', '+639300393361', 'PRK.COCA COLA, TUBOD', 'avatar1.png', 'Accelerate'),
(51, 20, 'Hadji Daud', 'Saadodin', '', 'Male', 'Mrs & Mr. Hadji Daud', 'Son', '+639300420954', 'Msu-main', 'avatar2.png', 'Accelerate'),
(52, 21, ' Radia', 'Shamir', '', 'Male', 'Mrs & Mr. Radia', 'son', '+639300420954', 'Marawi City', 'avatar2.png', ''),
(53, 22, 'Talib', 'Mosab', 'A.', 'Male', 'Mrs & Mr. talib', 'Son', '+639093518819', 'Matampay', 'avatar2.png', ''),
(54, 23, 'Masacal', 'Wahed', 'M.', 'Male', 'Mr & Mrs Masacal', 'Son', '+639300420954', 'Kingdom', 'girl.png', 'Repeat'),
(55, 24, 'Bayabao', 'Abdul Rahman', 'S.', 'Male', 'mr. rahman', 'SOn', '213213214214', 'msu main', 'avatar2.png', 'Accelerate'),
(57, 25, 'Lapura', 'Cloudine', '', 'Male', 'Mr & Mrs. Lapura', 'Daughter', '+639300420954', 'Butuan City', 'avatar3.png', ''),
(64, 26, 'Dela Cruz', 'Angel', '', 'Male', 'Mr & Mrs. Dela Cruz', 'Daughter', '+639300420954', 'camague', 'team-member.jpg', ''),
(65, 27, 'Elnas', 'Honey Bee', 'C.', 'Female', 'Mr & Mrs. Elnas', 'Daughter', '+639300420954', 'Dalipuga, Iligan City', 'girl.png', 'Accelerate'),
(66, 28, 'Nocido', 'Jasmine', 'P', 'Female', 'Mr & Mrs. Nocido', 'Daughter', '+639300420954', 'Mahayahay, Iligan City', 'team-member.jpg', 'Accelerate'),
(67, 29, 'Calunod', 'Reymart', 'V.', 'Male', 'Mr & Mrs. Calunod', 'Son', '+639300420954', 'Kilumco, Iligan City', 'avatar1.png', 'Accelerate'),
(68, 30, 'Ebasan', 'Eric', 'P', 'Male', 'Mr & Mrs. Ebasan', 'Son', '+639300420954', 'Tominobo, iligan City', 'avatar1.png', ''),
(69, 31, 'Carasina', 'Devine', 'I', 'Female', 'Mr & Mrs. Carasina', 'Daughter', '+639300420954', 'Purok-3 Camague, Iligan City', 'girl.png', ''),
(70, 32, 'Acmad', 'Sonayah', 'P.', 'Female', 'Mr & Mrs. Acmad', 'Daughter', '+639300420954', 'Mahayahay, Iligan City', 'team-member.jpg', ''),
(71, 33, 'Caingin', 'Riza', 'A.', 'Female', 'Mr & Mrs. Caingin', 'Daughter', '+639300420954', 'Palao, Iligan City', 'avatar3.png', 'Accelerate'),
(72, 34, 'Palanas', 'Jenail', 'G.', 'Male', 'Mr & Mrs. Palanas', 'SOn', '+639300420954', 'Fuentes, Iligan City', 'boy.png', 'Accelerate'),
(73, 35, 'Daligdig', 'Joepel', 'C.', 'Male', 'Mr & Mrs. Daligdig', 'Son', '+639300420954', 'Mahayahay, Iligan City', 'boy2.png', 'Accelerate'),
(74, 36, 'Padilla', 'Mickey', 'E.', 'Female', 'Mr & Mrs Padilla', 'Daughter', '+639300420954', 'Dalipuga, Iligan City', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `qrcode_id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `template` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`qrcode_id`, `user_id`, `template`) VALUES
(19, '2564891346', '2564891346.png'),
(20, '9864875246', '9864875246.png'),
(21, '8965742651', '8965742651.png'),
(22, '5268745135', '5268745135.png'),
(23, '555555555555', '555555555555.png'),
(24, '1231', '1231.png'),
(25, '6585545256', '6585545256.png'),
(26, '598642164', '598642164.png'),
(27, '58954526412', '58954526412.png'),
(28, '8965854564', '8965854564.png'),
(29, '5525484846', '5525484846.png'),
(30, '78545215558', '78545215558.png'),
(31, '847887887978', '847887887978.png'),
(32, '6935612485', '6935612485.png'),
(33, '2154578457', '2154578457.png'),
(34, '58545545224', '58545545224.png'),
(35, '2314343424', '2314343424.png'),
(36, '21321454452', '21321454452.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `name` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `username`, `password`, `usertype`, `name`) VALUES
(1, 'admin', '12345 ', 'admin', NULL),
(23, 'suhainakt      ', 'suhainakt', 'user', NULL),
(24, 'maimona     ', 'maimona', 'user', NULL),
(25, 'mohammad          ', 'mohammad', 'user', NULL),
(26, 'jogie ', 'jogie', 'user', NULL),
(27, 'amer   ', 'amer', 'user', NULL),
(28, 'lucman  ', 'lucman', 'user', NULL),
(51, 'aileen ', 'aileen', 'user', NULL),
(52, 'joel ', 'joel', 'user', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `schoolyear_id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`schoolyear_id`, `year`) VALUES
(1, '2020 - 2021'),
(2, '2021 - 2022'),
(3, '2019 - 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`adviser_id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `qrcode_id` (`qrcode_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `gradsec_id` (`gradsec_id`),
  ADD KEY `pupil_id` (`pupil_id`),
  ADD KEY `schoolyear_id` (`schoolyear_id`);

--
-- Indexes for table `gradsec`
--
ALTER TABLE `gradsec`
  ADD PRIMARY KEY (`gradsec_id`),
  ADD UNIQUE KEY `adviser_id` (`adviser_id`),
  ADD KEY `adviser_id_2` (`adviser_id`);

--
-- Indexes for table `pupil`
--
ALTER TABLE `pupil`
  ADD PRIMARY KEY (`pupil_id`),
  ADD KEY `qrcode_id` (`qrcode_id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`qrcode_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`schoolyear_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `adviser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `gradsec`
--
ALTER TABLE `gradsec`
  MODIFY `gradsec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pupil`
--
ALTER TABLE `pupil`
  MODIFY `pupil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `qrcode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `schoolyear_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adviser`
--
ALTER TABLE `adviser`
  ADD CONSTRAINT `adviser_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `register` (`register_id`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`qrcode_id`) REFERENCES `qrcode` (`qrcode_id`);

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`gradsec_id`) REFERENCES `gradsec` (`gradsec_id`),
  ADD CONSTRAINT `enroll_ibfk_3` FOREIGN KEY (`pupil_id`) REFERENCES `pupil` (`pupil_id`),
  ADD CONSTRAINT `enroll_ibfk_4` FOREIGN KEY (`schoolyear_id`) REFERENCES `schoolyear` (`schoolyear_id`);

--
-- Constraints for table `gradsec`
--
ALTER TABLE `gradsec`
  ADD CONSTRAINT `gradsec_ibfk_1` FOREIGN KEY (`adviser_id`) REFERENCES `adviser` (`adviser_id`);

--
-- Constraints for table `pupil`
--
ALTER TABLE `pupil`
  ADD CONSTRAINT `pupil_ibfk_1` FOREIGN KEY (`qrcode_id`) REFERENCES `qrcode` (`qrcode_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
