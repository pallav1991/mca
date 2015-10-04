-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2015 at 09:34 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mca`
--

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `label` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `target` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `label`, `url`, `target`, `position`, `status`) VALUES
(2, 'About Us', 'about-us', '', 1, 1),
(7, 'Contact Us', 'contact', '', 2, 1),
(14, 'HOME', 'home', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Notification` text NOT NULL,
  `Notification_For` varchar(50) NOT NULL,
  `Teacher_Name` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`Id`, `Notification`, `Notification_For`, `Teacher_Name`, `Date`) VALUES
(31, ' Mini Project submission last date is 5-10-15 ', 'Third Year', ' ', '2015-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `ID` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` mediumint(9) NOT NULL,
  `type` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL,
  `label` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `user`, `type`, `slug`, `title`, `header`, `body`, `label`) VALUES
(12, 2, 1, 'about-us', 'About Us', 'About MCOE MCA', '<h2 style="text-align: center;">Vision!</h2>\r\n<p>&nbsp;</p>\r\n<h2 style="text-align: center;"><img src="images/vision.jpg" alt="img" width="632" height="421" /></h2>\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mission To provide excellent educational opportunities in a dynamic learning environment to bring out well cultured and promising professionals in the conventional and emerging technologies. Vision To develop and nurture technologically, skilled and high quality manpower by imparting quality technical education through challenging academic programmes to meet industrial and economic needs of the country thus becoming a major source of technology and technological services in the era of burgeoning competition. Goals Developing quality human resources possessing soft and technical skills and amenable to team working, requiring minimum or no training period, in the areas high National/ International demands. Augment human and physical resources for developing strong Industry-Institute and R &amp; D Organization-Institute interaction to encourage bilateral sharing of skills and knowledge. Offering Post-Graduate programs to promote careers of potential teachers. Promoting research activities for R&amp; D cell. Becoming an autonomous Institute. Becoming eligible for collaboration with Foreign Universities and renowned Industrial houses. Becoming excellent centre in the fields of Electronics and Telecommunication , Computer Engineering, Information Technology, Mechanical and Electrical Engineering and eventually achieve the Deemed University status. Objectives Develop state-of-art laboratories and other infrastructure (physical and human) commensurate with the need of delivering quality technical education. Promote close interaction among industry, faculty and students to enrich the learning process and enhance carrier opportunities. Encourage faculty in the continuous professional growth through the Teacher Training programs, Seminars, Symposia, Workshops on emerging technologies and through research and development activities. Foster freedom of expression while protecting the rights of all members through regular and open channels of communication. Develop the overall personality of students and to prepare them as innovators and future leaders of the industries through extra-curricular activities</h3>', 'ABOUT'),
(14, 1, 1, 'contact', 'Contact Us', 'Contact Us', '<h3 style="text-align: center;">&nbsp;</h3>\r\n<h3 style="text-align: center;">Telephone (020) 25533638, 25533648.<br />Fax 020) 25530957<br />Email <a href="mailto:pesmcoe@moderncoe.edu.in">pesmcoe@moderncoe.edu.in</a></h3>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<h3 style="text-align: center;">Contact Details</h3>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<h3 style="text-align: center;">Head of MCA Dept &nbsp;hodmca@moderncoe.edu.in</h3>', 'Contact Us'),
(21, 1, 1, 'home', 'Home Page', 'Progressive Education Society''s', '<h3 style="text-align: center; color: #ff0000;"><strong>Modern College of Engineering</strong></h3>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Progressive Education Society''s Modern College of Engineering was established in the year 1999. The college is approved by All India Council of Technical Education(AICTE), New Delhi, Directorate of Technical Education(DTE), and Government of Maharashtra and is permanently affiliated to University of Pune, complying with all the norms and standards of engineering education. It is UGC recognized under 2(f) and 12(B) and NAAC accredited. The college has been awarded as the "Best College in the Urban area" by University of Pune. Modern College of Engineering is an institute of higher education offering quality programs that integrate professional skills and career focused education empowering students to develop and achieve their personal and career potentials. Modern College of Engineering provides assistance to eligible graduates in obtaining employment and provides classes, workshops and advisory sessions that teach and guide them through the process of securing and maintaining employment. Qualified and experienced faculty appointed by the Management strives to attain excellence which is the mission of the college. The faculty members upgrade their knowledge by participating in Faculty Development Program and presenting papers at various national programs in their field of specialization. The institute offers Undergraduate programs in Mechanical Engineering, Electronics and Telecommunication Engineering, Computer Engineering, Electrical Engineering and Information Technology Engineering, Postgraduate programs in Mechanical Engineering (Heat Power), Electrical Engineering(Control System), Electronics and Telecommunication Engineering(Signal Processing)and Computer Engineering (Computer Engineering), Masters in Computer Application(Under Engineering faculty) and Masters in Business Administrator. It offers Engineering and management programs with faculty who are motivated with a quest to promote engineering, technical and quality education. Since its inception the college is making rapid progress under the able leadership of Dr. G.R.Ekbote, Chairman, P.E.S. It continues to shine with its specialty on the horizon of technical education. Our inspiration Principal, Dr. (Mrs.) K. R. Joshi (M.E, Ph.D) along with the dedicated team strives to ensure the accomplishment of our goals and objectives. Preparing better citizens for a better India is the core mission of the college.</h3>', 'HOME');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE IF NOT EXISTS `post_types` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `label` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_types`
--

INSERT INTO `post_types` (`id`, `label`, `name`, `status`) VALUES
(1, 'Pages', 'page', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug-status', 'Debug Status', '0'),
('site-title', 'Site Title', 'Mca 1.1');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `master` varchar(150) DEFAULT NULL,
  `body` longtext NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `title`, `master`, `body`, `parent_id`, `path`) VALUES
(2, 'curiculam', '', '', 0, ''),
(3, 'Reserch', 'curiculam', '<p>This is a child</p>', 3, 'views/Research.html'),
(6, 'Placement', '', '', 0, ''),
(8, 'Pre-placement', 'Placement', '', 6, 'views/Pre-Placment.html'),
(9, 'Companies', 'Placement', '<p>Companies visited to our campus</p>', 6, 'views/company.html'),
(11, 'Student', '', '<p>Student Section</p>', 0, 'views/students.html'),
(12, 'Faculty', '', '<p>faculty information</p>', 0, 'views/staff.html'),
(13, 'Gallery', '', '', 0, ''),
(14, 'Extra-Curiculam', 'curiculam', '', 2, 'views/ExtraCur.html'),
(15, 'Login', '', '<p>Login</p>', 0, 'views/Login.php');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `BOD` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` text NOT NULL,
  `Appearing_Year` varchar(20) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `P_Address` text NOT NULL,
  `C_Address` text,
  `State` varchar(15) NOT NULL DEFAULT '',
  `Contact` bigint(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Roll_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`First_Name`, `Middle_Name`, `Last_Name`, `BOD`, `Gender`, `Email`, `Appearing_Year`, `Roll_No`, `Password`, `P_Address`, `C_Address`, `State`, `Contact`, `status`) VALUES
('Navin', 'Satyanarayan', 'Peedaboina', '2015-02-03', 'Male', 'navin9822@gmail.com', 'First Year', 53037, 'navin', 'Pune ', ' ', 'Maharashtra', 9822764046, 1),
('pallav', 'B', 'Poddar', '2012-01-03', 'Male', 'poddar6@gmail.com', 'Third Year', 53039, 'password', 'pune', 'pune', 'maharastra', 9158777193, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE IF NOT EXISTS `teacher_details` (
  `Teacher_Id` int(10) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Middle_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Email` text NOT NULL,
  `Password` varchar(20) NOT NULL,
  `P_Address` text NOT NULL,
  `C_Address` text,
  `State` varchar(15) NOT NULL DEFAULT '',
  `Contact` bigint(15) NOT NULL,
  PRIMARY KEY (`Teacher_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`Teacher_Id`, `First_Name`, `Middle_Name`, `Last_Name`, `DOB`, `Gender`, `Designation`, `Email`, `Password`, `P_Address`, `C_Address`, `State`, `Contact`) VALUES
(1, 'prakash', '', 'kene', '1984-07-25', 'Male', 'Teacher', 'email@gmail.com', 'password', 'pune', 'pune', 'Maharashtra', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fyear` varchar(100) NOT NULL,
  `sby` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `uname`, `fyear`, `sby`) VALUES
(9, 'npm.js', '53039', 'First Year', 'teacher'),
(10, 'jquery.js', 'email@gmail.com', 'Second Year', 'teacher'),
(11, 'jssor.slider.mini.js', 'email@gmail.com', 'Third Year', 'teacher'),
(12, 'glyphicons-halflings-regular.ttf', '53039', 'First Year', 'Student'),
(13, 'Candidate Confirmation.pdf', 'email@gmail.com', 'Third Year', 'teacher'),
(14, 'Candidate Confirmation.pdf', 'email@gmail.com', 'Third Year', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(100) NOT NULL,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, '1433224545747.jpg', 'pallav', 'poddar', 'poddar6@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(4, '', 'Navin', 'Peedaboina', 'navin9822@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(5, '', 'Brahamananda', 'Phatak', 'brahmaphatak1994@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(6, '', 'Aman', 'Rajput', 'amanrajput575@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
