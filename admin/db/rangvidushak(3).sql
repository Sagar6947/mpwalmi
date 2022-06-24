-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 03:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rangvidushak`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `team_n` varchar(255) NOT NULL,
  `script_n` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `image`, `description`, `location`, `date`, `team_n`, `script_n`) VALUES
(7, 'adsdfhjkl;', 'img1/7_1522663240.png', 'It seems like yesterday when our director had met the Rang Milan team Shikari Brothers in 1998. That was the time when the seeds of Abhivyakti Garba Mahotsav were sown 19 years back . First batch started with 340 students and training used to happen in Ab', 'bhopal', '25-10-2018', 'dance club', 'drama'),
(12, 'sandeep', 'img/5_1540376732.png', 'wdqsa<br>', 'bhopal', '2018-10-30', 'dance', 'pta nahi');

-- --------------------------------------------------------

--
-- Table structure for table `achievement_add`
--

CREATE TABLE `achievement_add` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement_add`
--

INSERT INTO `achievement_add` (`id`, `c_id`, `image`) VALUES
(1, 7, 'img/5_1540375813.png'),
(2, 7, 'img/6_1540376151.jpg'),
(3, 7, 'img/4_1540376202.jpg'),
(4, 7, 'img/5_1540376272.png'),
(6, 7, 'img/5_1540538777.jpg'),
(8, 12, 'img/5_1540538880.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `d_from` date NOT NULL,
  `d_to` date NOT NULL,
  `art_name` varchar(222) NOT NULL,
  `location` varchar(222) NOT NULL,
  `about` text NOT NULL,
  `approve` varchar(255) NOT NULL DEFAULT 'NO'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `image`, `d_from`, `d_to`, `art_name`, `location`, `about`, `approve`) VALUES
(6, 'Sandeep Deshmukh', 'img/2_1540025461.jpg', '2018-10-23', '2018-10-23', 'dance', '', 'FEDSVFEWDS CXZFWEd avzxrwgsd', 'YES'),
(11, 'Sandeep Deshmukh', 'img/7_1540031704.jpg', '2018-10-18', '2018-10-15', 'dascxz', 'qdas', 'efadvzx', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(10, 'sandeep', 'deshmukh', 's@gmail.com', '9584884916', 'Meet the latest version of Firefox. And sign up for a better internet all around with \r\nMeet the latest version of Firefox. And sign up for a better internet all around with a free Firefox Account. '),
(3, 'asd', 'asd', 'qwe@qwe.qwe', '987\\', 'asdfghjkl'),
(1, 'Harsha', 'Maravi', 'harshamaravi19@gmail.com', '9516354018', 'Testing'),
(6, 'asdfgh', 'asdfgh', 'sdfgh@sdfghj.hgfdsa', 'sdfghj', 'sddfghfdsadfgfdsfgdsfgd'),
(5, 'harsha', 'maravi', 'harshamaravi1996@gmail.com', '9516354018', 'blah '),
(7, 'asdfgh', 'asdfgh', 'sdfgh@sdfghj.hgfdsa', 'sdfghj', 'sddfghfdsadfgfdsfgdsfgd'),
(8, 'asdfgh', 'asdfgh', 'sdfgh@sdfghj.hgfdsa', 'sdfghj', 'sddfghfdsadfgfdsfgdsfgd'),
(9, 'asdfgh', 'asdfgh', 'sdfgh@sdfghj.hgfdsa', 'sdfghj', 'sddfghfdsadfgfdsfgdsfgd'),
(11, 'sandeep', 'deshmukh', 's@gmail.com', '9584884916', 'Meet the latest version of Firefox. And sign up for a better internet all around with \r\nMeet the latest version of Firefox. And sign up for a better internet all around with a free Firefox Account. '),
(12, 'sandeep', 'deshmukh', 's@gmail.com', '9584884916', 'Meet the latest version of Firefox. And sign up for a better internet all around with \r\nMeet the latest version of Firefox. And sign up for a better internet all around with a free Firefox Account. ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(111) NOT NULL,
  `c_id` int(111) NOT NULL,
  `image` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `c_id`, `image`) VALUES
(2, 39, 'img/1_1540372378.jpg'),
(3, 39, 'img/1_1540372395.jpg'),
(4, 39, 'img/5_1540376027.png'),
(5, 39, 'img/7_1540376069.jpg'),
(7, 44, 'img/5_1540539910.jpg'),
(8, 39, 'img/1_1540540597.jpg'),
(13, 44, 'img/2_1540553883.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `g_id` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Images` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`g_id`, `Title`, `Images`, `date`, `category`) VALUES
(39, 'rwedfs', 'img/7_1539346859.png', '2018-10-31', 'Tragedy'),
(44, 'esdfzx', 'img/2_1540372493.jpg', '2018-10-09', 'Historical');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'admin', 'rangvidushak'),
(2, 'webangel', 'webangel');

-- --------------------------------------------------------

--
-- Table structure for table `networking`
--

CREATE TABLE `networking` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networking`
--

INSERT INTO `networking` (`id`, `title`, `description`, `date`, `image`) VALUES
(4, 'Sarkar - Official Teaser [Tamil] | Thalapathy Vijay | Sun Pictures | A.R Murugadoss | A.R. Rahman', 'eqfadzwgvsdrgv<br>', '2018-10-10', 'img/7_1540471876.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `date`) VALUES
(12, 'Sarkar - Official Teaser [Tamil] | Thalapathy Vijay | Sun Pictures | A.R Murugadoss | A.R. Rahman', 'The unprecedented victory for the saffron party has given it control of \r\nat least four of the 20 civic bodies in the four districts of Anantnag, \r\nKulgam, Pulwama and Shopian.<br>', 'img/6_1540040394.jpg', '2018-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `name`, `image`, `email`, `contact`, `dob`, `remark`, `designation`) VALUES
(1, 'Sandeep Deshmukh', 'img/1_1540469041.png', 's@gmail.com', '1234569870', '2018-10-24', 'kuch nahi', 'qefdxefw'),
(2, 'pradeep', 'img/2_1540470333.png', 's@gmail.com', '1234569870', '2018-10-16', 'kuch nahi', 'qewdsa');

-- --------------------------------------------------------

--
-- Table structure for table `our_awards`
--

CREATE TABLE `our_awards` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_awards`
--

INSERT INTO `our_awards` (`id`, `name`, `image`, `email`, `contact`, `dob`, `remark`, `description`) VALUES
(4, 'Sandeep Deshmukh', 'img/5_1540451782.png', 's@gmail.com', '1234569870', '2018-10-17', 'kuch nahi', 'kuch nahikuch nahikuch nahikuch nahi<br><br><br><br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `our_tour`
--

CREATE TABLE `our_tour` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `script` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_tour`
--

INSERT INTO `our_tour` (`id`, `title`, `image`, `script`, `artist`, `location`, `date`, `remark`, `description`) VALUES
(4, 'sandeep', 'img/3_1540454346.jpg', '', 'efadz', 'bhopal', '2018-10-10', 'kuch nahi', 'wdasxzc<br>'),
(5, 'suraj', 'img/12_1540465266.jpg', 'comaday', 'efdszx<br>', 'bhopal', '2018-10-09', 'kuch nahi', 'efadSZCX');

-- --------------------------------------------------------

--
-- Table structure for table `our_tour_add`
--

CREATE TABLE `our_tour_add` (
  `id` int(111) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_tour_add`
--

INSERT INTO `our_tour_add` (`id`, `c_id`, `image`) VALUES
(1, '4', 'img/2_1540460340.jpg'),
(2, '4', 'img/8_1540462932.jpg'),
(3, '4', 'img/10_1540465381.jpg'),
(10, '', 'img/5_1540537811.jpg'),
(11, '5', 'img/5_1540537975.jpg'),
(12, '4', 'img/7_1540548426.jpg'),
(13, '4', 'img/6_1540548475.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `report_review`
--

CREATE TABLE `report_review` (
  `id` int(111) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_review`
--

INSERT INTO `report_review` (`id`, `title`, `location`, `date`, `review`, `description`, `pdf`) VALUES
(5, 'sandeep', 'bhopal', '2018-10-09', '5', '4wtrsdgethdgfrthfnv<br>', 'img/7_1540541688.jpg'),
(6, 'suraj', 'indore', '2018-10-09', 'good', 'wwrgfcegadfvbcxhteabzcx wrgfcegadfvbcxhteabzcx wrgfcegadfvbcxhteabzcx rgfcegadfvbcxhteabzcx wrgfcegadfvbcxhteabzcx <br><br><br><br>', 'img/6_1540555453.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `script`
--

CREATE TABLE `script` (
  `s_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `script`
--

INSERT INTO `script` (`s_id`, `title`, `pdf`) VALUES
(26, 'sandeep', 'img/8_1540541159.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `script` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `url`, `image`, `description`, `script`, `location`, `date`, `remark`) VALUES
(23, 'Sarkar - Official Teaser [Tamil] | Thalapathy Vijay | Sun Pictures | A.R Murugadoss | A.R. Rahman', 'https://www.youtube.com/watch?v=VkkyaodksT4', 'img/6_1540041246.jpg', 'The unprecedented victory for the saffron party has given it control of \r\nat least four of the 20 ci', 'comaday', 'bhopal', '2018-10-03', ''),
(24, 'Sarkar - Official Teaser [Tamil] | Thalapathy Vijay | Sun Pictures | A.R Murugadoss | A.R. Rahman', 'https://www.youtube.com/watch?v=VkkyaodksT4', 'img/2_1540296478.jpg', 'dasxc<br>', 'comaday', 'bhopal', '2018-10-08', ''),
(22, 'Sarkar - Official Teaser [Tamil] | Thalapathy Vijay | Sun Pictures | A.R Murugadoss | A.R. Rahman', 'https://www.youtube.com/watch?v=VkkyaodksT4', 'img/img02_1540019959.jpg', 'Sun Pictures presents the Official Teaser of â€œSarkarâ€ Starring Thalapathy Vijay, Keerthy Suresh,', 'comaday', 'bhopal', '2018-10-25', 'kuch nahi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement_add`
--
ALTER TABLE `achievement_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networking`
--
ALTER TABLE `networking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_awards`
--
ALTER TABLE `our_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_tour`
--
ALTER TABLE `our_tour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_tour_add`
--
ALTER TABLE `our_tour_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_review`
--
ALTER TABLE `report_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `script`
--
ALTER TABLE `script`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `achievement_add`
--
ALTER TABLE `achievement_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `networking`
--
ALTER TABLE `networking`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `our_awards`
--
ALTER TABLE `our_awards`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `our_tour`
--
ALTER TABLE `our_tour`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_tour_add`
--
ALTER TABLE `our_tour_add`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `report_review`
--
ALTER TABLE `report_review`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `script`
--
ALTER TABLE `script`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
