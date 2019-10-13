-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 03:22 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talentin`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getDept` (IN `d` VARCHAR(30))  SELECT * FROM post ,reg,department where post.puserid=reg.userid and reg.rdept_id=department.dept_id and department.dept_name = d$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(400) NOT NULL,
  `dept_hod` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_hod`) VALUES
(1, 'cse', 'abc'),
(2, 'ise', 'abc'),
(3, 'eee', 'cde'),
(4, 'ece', 'asd'),
(5, 'mech', 'jkl'),
(6, 'civil', 'zcv');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'viral', '123'),
(2, 'pawan', 'qwe'),
(3, 'reddy', 'poi'),
(4, 'aish', 'pod');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `postcontent` varchar(300) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `puserid` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `postcontent`, `postdate`, `puserid`, `image`) VALUES
(76, 'hohddyuyfasjhgsxfxfgkhAvvhjGKJ', '2018-11-28 04:47:26', 61, '3.jpg'),
(79, 'Hi friends, I attended GHCI(Gr', '2018-11-30 10:57:12', 60, 'la.jpg'),
(82, '...dkddkd', '2018-12-03 07:05:07', 60, 'NNlogo.png'),
(83, '...ddddd', '2018-12-03 07:28:54', 60, 'schema.png'),
(84, '...hello all ', '2018-12-03 15:01:51', 63, 'reg.JPG'),
(85, '...ffff', '2018-12-03 15:18:30', 60, 'Talent Database.jpg'),
(86, '... hi im the kannada head', '2018-12-03 15:22:33', 64, 'bla.jpg'),
(88, '...hello', '2018-12-04 08:47:11', 66, 'login_update.jpg'),
(89, '...hello', '2018-12-04 08:50:51', 67, 'reg.JPG'),
(90, '...pawan is my son ', '2018-12-05 02:13:28', 68, 'login_update.jpg');

--
-- Triggers `post`
--
DELIMITER $$
CREATE TRIGGER `experience` AFTER INSERT ON `post` FOR EACH ROW INSERT INTO rating VALUES (null,new.postid,new.puserid)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rateid` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rateid`, `post_id`, `userid`) VALUES
(29, 88, 66),
(30, 89, 67),
(31, 90, 68);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `userid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `rdept_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pro_image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`userid`, `name`, `password`, `usn`, `gender`, `mobile`, `rdept_id`, `email`, `pro_image`) VALUES
(60, 'pawan', '123', '1cr16cs114', 'male', 9739285834, 1, 'pawangohan98@gmail.com', ''),
(61, 'pradeep', '123', '123', 'male', 8553118283, 1, 'pradeep@gmail.com', ''),
(62, 'viral', '123', '1cr16cs109', 'male', 819707021, 1, 'viral1997@gmail.com', ''),
(63, 'maliha', '123', '1cr16cs111', 'female', 875434835453473, 5, 'maliha@gmail.com', ''),
(64, 'nam', 'nam', '123', 'female', 123, 6, 'nam@gmail.com', ''),
(65, 'are', '123', '34ytehrgdcgb', 'female', 868537416534, 5, 'arse@nal.com', ''),
(66, 'askjfj', '123', '123', 'male', 8553118283, 4, '1@gmail.com', ''),
(67, 'sudha', '123', '123', 'female', 9739285834, 3, '123@gmail.com', ''),
(68, 'rekha', '123', '1cr16cs116', 'female', 123, 4, 'rekha@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `userid` (`puserid`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rateid`),
  ADD KEY `guestid` (`post_id`,`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `dept_id` (`rdept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`puserid`) REFERENCES `reg` (`userid`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`postid`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `reg` (`userid`);

--
-- Constraints for table `reg`
--
ALTER TABLE `reg`
  ADD CONSTRAINT `reg_ibfk_1` FOREIGN KEY (`rdept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
