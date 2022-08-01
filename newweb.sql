-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 04:06 AM
-- Server version: 5.5.65-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_profiles`
--

CREATE TABLE IF NOT EXISTS `academic_profiles` (
  `user_id` int(11) NOT NULL,
  `display_name` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `profile_picid` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `contact_numbers` tinytext,
  `linkedin_url` tinytext,
  `resgate_url` tinytext,
  `google_scholar_url` tinytext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_profiles`
--

INSERT INTO `academic_profiles` (`user_id`, `display_name`, `email`, `profile_picid`, `department`, `designation`, `contact_numbers`, `linkedin_url`, `resgate_url`, `google_scholar_url`) VALUES
(45, 'Dr. P.K.S.C Jayasinghe', 'subash@ictec.ruh.ac.lk', '45.png', 'DICT', 'Senior Lecturer', '94-41-2222681 Ext.4505/ 94-41-3006137(direct)', '', '', 'https://scholar.google.com/citations?user=5wV0y5sAAAAJ&hl=en'),
(1, 'Dr. A.M Ajward', 'ajward@etec.ruh.ac.lk', '1.png', 'DENT', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(2, 'Eng. Ms. W.G.A Pabasara', 'ayomi@etec.ruh.ac.lk', '2.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(5, 'Ms.  Buddika Gayashani', 'buddika@ictec.ruh.ac.lk', 'default.jpg', 'DICT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(6, 'Eng. Ms. Lasitha Chamari', 'lasitha@etec.ruh.ac.lk', 'default.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(7, 'Mr. H.A.C. Priyankara', 'chamila@btec.ruh.ac.lk', '7.jpg', 'DBST', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(8, 'Ms.  W.M.C.S Jayaweera', 'champikabst@ruh.ac.lk', '8.jpg', 'DBST', 'Lecturer', NULL, NULL, NULL, NULL),
(9, 'Mr. E.A.D. Kumara', 'eadkumara@etec.ruh.ac.lk', '9.jpg', 'DENT', 'Lecturer', NULL, NULL, NULL, NULL),
(10, 'Ms. D.S. Vithanage', 'dinithi@ictec.ruh.ac.lk', '10.jpg', 'DICT', 'Lecturer', NULL, NULL, NULL, NULL),
(11, 'Ms. D.N. Liyanage', 'dulani@etec.ruh.ac.lk', 'default.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(15, 'Ms. GC Pathiraja', 'gayani@etec.ruh.ac.lk', '15.png', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(16, 'Eng. Mr. H.L. Subasinghe', 'harshanaent@etec.ruh.ac.lk', 'default-men.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(17, 'Dr. V.H.P. Vitharana', 'hashini@etec.ruh.ac.lk', '17.jpg', 'DENT', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(18, 'Eng. Ms. H. C. Ganege', 'hasiniganege@gmail.com', '18.jpg', 'DENT', 'Lecturer', NULL, NULL, NULL, NULL),
(19, 'Mr.  Hasitha Karunarathna', 'hasitha@btec.ruh.ac.lk', '19.jpg', 'DBST', 'Lecturer', NULL, NULL, NULL, NULL),
(20, 'Ms.  Hiranya Amarasinghe', 'hiranya95@fot.ruh.ac.lk', 'default.jpg', 'DMS', 'Temporary Lecturer', NULL, NULL, NULL, NULL),
(24, 'Ms.  M.P.I.R. Paranawithana', 'Paranawithana@cc.ruh.ac.lk', '24.jpg', 'DICT', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(25, 'Ms.  I.K Dias', 'ishanka104@gmail.com', '25.jpg', 'DMS', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(26, 'Ms.  K.H.J Imalka', 'jayani@ictec.ruh.ac.lk', '26.jpg', 'DICT', 'Lecturer', NULL, NULL, NULL, NULL),
(27, 'Ms.  M.S. Jayathilaka', 'mevuni@btec.ruh.ac.lk', '27.jpg', 'DBST', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(28, 'Eng. Mr. H.G.T. Milinda', 'milindaent@etec.ruh.ac.lk', '28.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(29, 'Mr. Mr. Naveen Devinda', 'Naveend@fot.ruh.ac.lk', 'default-men.jpg', 'DMS', 'Temporary Lecturer', NULL, NULL, NULL, NULL),
(30, 'Ms.  H.M.N.N. Herath', 'DMS@tech.ruh.ac.lk', '30.jpg', 'DMS', 'Lecturer', NULL, NULL, NULL, NULL),
(31, 'Ms.  K.K.N.B. Adikaram', 'nilanthiadikaram@gmail.com', '31.jpg', 'DMS', 'Lecturer', NULL, NULL, NULL, NULL),
(32, 'Mr.  P.H.P.N Laksiri', 'nuwanict@tec.ruh.ac.lk', '32.jpg', 'DICT', 'Lecturer', NULL, NULL, NULL, NULL),
(33, 'Eng. Ms. Prabodhi Mithila', 'prabodhi@etec.ruh.ac.lk', 'default.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(35, 'Ms. C.R. Liyanage', 'ravihari@ictec.ruh.ac.lk', '35.jpg', 'DICT', 'Lecturer', NULL, NULL, NULL, NULL),
(36, 'Ms. Rumeshika W. arachi', 'rumeshika@ictec.ruh.ac.lk', 'default.jpg', 'DICT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(37, 'Ms. M.A.N.D Sewwandi', 'sewwandi@ictec.ruh.ac.lk', '37.png', 'DICT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(38, 'Dr. Thissa Karunarathna', 'thissa@btec.ruh.ac.lk', '38.jpg', 'DBST', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(39, 'Dr. Udari Rathnathunga', 'udari@btec.ruh.ac.lk', '39.jpg', 'DBST', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(40, 'Mr.  M.P.U. Isuranga', 'udithaisu@gmail.com', '40.jpg', 'DENT', 'Lecturer', NULL, NULL, NULL, NULL),
(41, 'Dr. K.M.W Rajawaththa', 'wathsalabst@admin.ruh.ac.lk', '41.jpg', 'DBST', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(42, 'Ms.  Y.G. Kondarage', 'yashodha@etec.ruh.ac.lk', 'default.jpg', 'DENT', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(43, 'Ms. W.H.N.Y. Hewage', 'yumalibandara@btec.ruh.ac.lk', '43.jpg', 'DBST', 'Lecturer(Probationary)', NULL, NULL, NULL, NULL),
(34, 'Professor E.P.S. Chandana', 'head@btec.ruh.ac.lk', '34.jpg', 'DBST', 'Professor', NULL, NULL, NULL, NULL),
(14, 'Ms. Rasika Hettiarachchi', 'ar@tec.ruh.ac.lk', '14.jpg', 'deanoffice', 'Assistant Registrar', NULL, NULL, NULL, NULL),
(12, 'Dr. K.G.S.Harshadewa  Gunawardana', 'harshadewa@etec.ruh.ac.lk', '12.jpg', 'DENT', 'Senior Lecturer', NULL, NULL, NULL, NULL),
(13, 'Dr. B.L.S Thilakarathne', 'sanjaya@etec.ruh.ac.lk', '13.png', 'DENT', 'Senior Lecturer', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `award` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `user_id`, `award`) VALUES
(1, 45, 'Visiting Scholar, University of California Davis, CA, USA (Jan/2010 to Mar/20'),
(2, 45, 'JASSO scholarship for foreign student to pursue Doctoral research at Tokyo University of Agriculture and Technology (TUAT), Japan (2008 to 2011).'),
(3, 45, 'JASSO scholarship for foreign student to pursue Master degree program at Ibaraki University, Japan, 2007.');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`) VALUES
(1, 'DICT', 'Department of Information & Communication Technology'),
(2, 'DENT', 'Department of Engineering Technology'),
(3, 'DBST', 'Department of Biosystems Techhnology'),
(4, 'DMS', 'Department of Multidisciplinary Studies');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE IF NOT EXISTS `memberships` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_and_events`
--

CREATE TABLE IF NOT EXISTS `news_and_events` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `description` text NOT NULL,
  `event_url` tinytext NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professional_qualifications`
--

CREATE TABLE IF NOT EXISTS `professional_qualifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `institute` tinytext NOT NULL,
  `period` tinytext NOT NULL,
  `notes` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_qualifications`
--

INSERT INTO `professional_qualifications` (`id`, `user_id`, `designation`, `institute`, `period`, `notes`) VALUES
(1, 45, 'Senior Lecturer', 'Department of Software Engineering, Faculty of Computing, Sri Lanka Institute of Information Technology (SLIIT), Sri Lanka', 'July/2011 to Oct/2016', ''),
(2, 45, 'Academic Head', 'Sri Lanka Institute of Information Technology (SLIIT)/Matara Campus', 'Aug/2013 to Oct/2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `publication` tinytext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `user_id`, `publication`) VALUES
(1, 45, 'Jayasinghe, P.K.S.C, P.H.P.N. Laksiri, U.H.W.A.Hewage and M.A.N.D.Sewwandi: Classification of Remote Sensing Data using Texture Feature Extraction Algorithms, Journal of Engineering and Science research, 1 (2) : 1 -06, 2017'),
(2, 45, 'Jayasinghe, P.K.S.C and M.Yoshida: Evaluation of Forest Extent Changes: Multi-temporal Satellite Images, J. Appl Rem Sen, 2(1) :16-26, June, 2011'),
(3, 45, 'Jayasinghe, P.K.S.C., H.A. Adornado, M.Yoshida and D.A.L.Leelamanie: Web-based GIS remote sensing Spatial Information System (SIS): A case study in Nuwaraeliya, Sri Lanka. J.Agri. Info. Research , 19(4): 106-116, Dece, (2010).'),
(4, 45, 'Jayasinghe, P.K.S.C and M.Yoshida: Development of two GIS-based modeling Frameworks to identify suitable lands for sugarcane cultivation, J. Tropi. Agri. and Deve., 54(2): 51-61, June, 2010.'),
(5, 45, 'Jayasinghe, P.K.S.C and M.Yoshida: Integrating Spatial Data Mining Technique to identify Potential Areas for Forest Production using GIS and Remote Sensing, J.Agri. Info. Research, 19(2): 23-35, June, 2010.'),
(6, 45, 'Jayasinghe, P.K.S.C and M.Yoshida: GIS-Based Neural Network Modeling to Predict Suitable Areas for Beetroot in Sri Lanka: Towards Sustainable Agriculture, J. Deve. Sustainable Agri., 4(3): 165-172, Feb, 2010.'),
(7, 45, 'Jayasinghe, P.K.S.C., T. Machida and M.Yoshida: Identification of Suitable Lands for Beetroot in up Country of Sri Lanka using GIS-Weighted Overlay Technique with Normalized Weighting Methods, J.Japanese Agri. Sys. Soc., 25(1): 17-26, December, 2009.'),
(8, 45, 'Jayasinghe, P.K.S.C and T. Machida: Web-Based GIS Online Consulting System with Crop-Land Suitability Identification, J. Agri. Info. Research, 17(1):13-19,  June, 2008.');

-- --------------------------------------------------------

--
-- Table structure for table `research_interests`
--

CREATE TABLE IF NOT EXISTS `research_interests` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `researchinterest` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `active_status` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `active_status`) VALUES
(1, 'ajwardetec', 'èoi«Ukâ–Ùß —˜', 'senior-lecturer', 1),
(2, 'ayomient', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(3, 'bstlecturer1', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(4, 'bstlecturer2', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(5, 'buddikaict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(6, 'chamarient', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(7, 'chamilabst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(8, 'champikabst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(9, 'dineshent', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(10, 'dinithiict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(11, 'dulanient', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(12, 'etlecturer1', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(13, 'etlecturer2', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(14, 'etlecturer4', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(15, 'gayanietec', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(16, 'harshanaent', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(17, 'hashinient', 'èoi«Ukâ–Ùß —˜', 'senior-lecturer', 1),
(18, 'hasinient', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(19, 'hasithabst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(20, 'hiranyamds', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(21, 'ictlecturer1', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(22, 'ictlecturer2', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(23, 'ictlecturer3', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(24, 'iromiict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(25, 'ishankadms', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(26, 'jayaniict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(27, 'mevunibst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(28, 'milindaent', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(29, 'naveenmds', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(30, 'navodadms', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(31, 'nilanthidms', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(32, 'nuwanict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(33, 'prabodhient', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(34, 'randuladms', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(35, 'ravihariict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(36, 'rumeshikaict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(37, 'sewwandiict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(38, 'thissabst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(39, 'udaribst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(40, 'udithaent', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(41, 'vindhyaict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(42, 'yashodhaent', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(43, 'yumalibst', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(44, 'harshaetec', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1),
(45, 'subashict', 'èoi«Ukâ–Ùß —˜', 'lecturer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_profiles`
--
ALTER TABLE `academic_profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_events`
--
ALTER TABLE `news_and_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_interests`
--
ALTER TABLE `research_interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_and_events`
--
ALTER TABLE `news_and_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `professional_qualifications`
--
ALTER TABLE `professional_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `research_interests`
--
ALTER TABLE `research_interests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
