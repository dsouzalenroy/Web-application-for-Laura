-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2020 at 03:18 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `email`, `password`) VALUES
('Laura', 'Antochi', 'la@abc.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

DROP TABLE IF EXISTS `client_details`;
CREATE TABLE IF NOT EXISTS `client_details` (
  `subject_code` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_phone_number` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`subject_code`, `team_name`, `client_name`, `client_email`, `client_phone_number`) VALUES
('11', '11', '11', '11', 11),
('11', '11', '111', '111', 1111),
('11gxzdsszdg', '1144szdf', '11444', '1111122334', 11111111),
('432', 'qwerty', 'asdg', 'aasa@aAAS.COM', 111112222),
('432', 'qwerty', 'asdg', 'aasa@aAAS.COM', 111112222),
('11gxzdsszdg', '1144szdf', '11444', '1111122334', 11111111),
('q', 'w', 'e', 'rrr', 111);

-- --------------------------------------------------------

--
-- Table structure for table `complete_student_details`
--

DROP TABLE IF EXISTS `complete_student_details`;
CREATE TABLE IF NOT EXISTS `complete_student_details` (
  `snum` int(11) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `availyear` int(11) DEFAULT NULL,
  `speriod` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `teamno` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complete_student_details`
--

INSERT INTO `complete_student_details` (`snum`, `lname`, `fname`, `email`, `scode`, `availyear`, `speriod`, `login`, `teamno`, `pname`, `token`) VALUES
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492904', 9, 'VetCon', '0xtm5raqn64g'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497400', 13, 'Bunjii', 'hs9jznbk0v6s'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490385', 8, 'Digital Garden', 'igh0k1c05zhe'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484867', 14, 'CMZ', '9ul0dzwuego4'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc481760', 13, 'Bunjii', 'p116zyv72l5p'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486008', 2, 'Smart Parking', 'f2fc325gfotb'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499636', 14, 'CMZ', 'm8gx8xpzddws'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499315', 9, 'VetCon', 'ial5kaxq2vhi'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486004', 6, 'GreenKPI OCR', '0ucgms7kox8p'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497773', 7, 'Cool Pool', 'he7488n3madh'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc483921', 5, 'Blood Bank', '3c3k6fymyxvi'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487793', 2, 'Smart Parking', 'jga9dc2yiz4f'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487740', 12, 'Linfox', 's5hdxypzhg5k'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485881', 14, 'CMZ', '0w9upchnte27'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484544', 4, 'CRM Leads', '488zxgmnr2ry'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc482621', 12, 'Linfox', 'z2l4hndtqk4x'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485052', 11, 'Urban Xtreme', 'tpfderx4g8u4'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489992', 3, 'Ohm Cinemas', 'jwwscvdt9oo5'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486529', 7, 'Cool Pool', 'sp19yaf61ir4'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488507', 4, 'CRM Leads', 'q5dpg1xdh1a7'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc507354', 3, 'Ohm Cinemas', '9eb25lisk3sh'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488504', 8, 'Digital Garden', 'pi12ev1y1vvv'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498073', 1, 'Employee Tracker', 'rj60x5f4bnbe'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489853', 4, 'CRM Leads', 'ixep4c8t430a'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492413', 5, 'Blood Bank', '8y9f4qxozfhm'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc468480', 11, 'Urban Xtreme', 't9z1nrccp11s'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498421', 14, 'CMZ', '8okiqbdxxiis'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491672', 8, 'Digital Garden', 'cc2clxs1zps3'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488417', 3, 'Ohm Cinemas', '9nxa2dvemslc'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488841', 5, 'Blood Bank', '33mcovp8q7f7'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc513951', 3, 'Ohm Cinemas', '6edoikyrksc2'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487741', 10, 'Network Monitor', 'k22bc7a1ieuh'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487619', 6, 'GreenKPI OCR', 'm8jiqwrdiryd'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488130', 1, 'Employee Tracker', '7sx3gu7j1wcn'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499637', 1, 'Employee Tracker', 'p6yci5d3xdbe'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491160', 1, 'Employee Tracker', 'kv0frfg5gtaz'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484785', 6, 'GreenKPI OCR', 'rrok1n09fat4'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484126', 10, 'Network Monitor', 'emn2lifuqabf'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490487', 10, 'Network Monitor', '20wt7a6gq7u7'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc480051', 11, 'Urban Xtreme', 'ogn0wszhhfkc'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488131', 12, 'Linfox', 'e4vei4qr57nr'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc472616', 7, 'Cool Pool', 'tpiqafpfu6dp'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc515311', 2, 'Smart Parking', '353w4h33reu3'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc479621', 5, 'Blood Bank', '9ulczpgqw8vs'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc276219', 8, 'Digital Garden', 'lrlqzeotezb2'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc437895', 9, 'VetCon', 'bkmnochjohqc'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc476845', 4, 'CRM Leads', 'xcs5q0igxe1n');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `availyear` int(11) DEFAULT NULL,
  `speriod` varchar(255) DEFAULT NULL,
  `teamno` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`availyear`, `speriod`, `teamno`, `pname`) VALUES
(2019, 'SP22', 9, 'VetCon'),
(2019, 'SP22', 13, 'Bunjii'),
(2019, 'SP22', 8, 'Digital Garden'),
(2019, 'SP22', 14, 'CMZ'),
(2019, 'SP22', 2, 'Smart Parking'),
(2019, 'SP22', 6, 'GreenKPI OCR'),
(2019, 'SP22', 7, 'Cool Pool'),
(2019, 'SP22', 5, 'Blood Bank'),
(2019, 'SP22', 12, 'Linfox'),
(2019, 'SP22', 4, 'CRM Leads'),
(2019, 'SP22', 11, 'Urban Xtreme'),
(2019, 'SP22', 3, 'Ohm Cinemas'),
(2019, 'SP22', 1, 'Employee Tracker'),
(2019, 'SP22', 10, 'Network Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `project_feedback`
--

DROP TABLE IF EXISTS `project_feedback`;
CREATE TABLE IF NOT EXISTS `project_feedback` (
  `jc_giving_feedback` varchar(10) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_feedback`
--

INSERT INTO `project_feedback` (`jc_giving_feedback`, `comments`) VALUES
('jc492904', '111'),
('jc492904', 'this is my project'),
('jc492904', ''),
('jc492904', 'qwqqqq'),
('jc492904', ''),
('jc492904', ''),
('jc492904', ''),
('', '111'),
('', '111'),
('', '1111'),
('', '1111'),
('', '111'),
('', 'qqqq'),
('', 'qqq'),
('jc492904', ''),
('jc492904', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

DROP TABLE IF EXISTS `student_details`;
CREATE TABLE IF NOT EXISTS `student_details` (
  `snum` int(11) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `availyear` int(11) DEFAULT NULL,
  `speriod` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `teamno` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`snum`, `lname`, `fname`, `email`, `scode`, `availyear`, `speriod`, `login`, `teamno`, `pname`, `token`) VALUES
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492904', 9, 'VetCon', 'fcynnru4w3sp'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497400', 13, 'Bunjii', 'w8up7jkie3n6'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490385', 8, 'Digital Garden', '5nsdyvcxjauw'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484867', 14, 'CMZ', 'p06kvqd2mqpa'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc481760', 13, 'Bunjii', 'lehvg99053ng'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486008', 2, 'Smart Parking', 'wosuh9gjc0lq'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499636', 14, 'CMZ', 'tjirpt8twrcg'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499315', 9, 'VetCon', 'pw3ppmy6t8wk'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486004', 6, 'GreenKPI OCR', 'pf52wl355497'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc497773', 7, 'Cool Pool', 'zvzdjah4yzft'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc483921', 5, 'Blood Bank', 'v5f2hjdvkn4l'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487793', 2, 'Smart Parking', 'hl684xbscfdx'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487740', 12, 'Linfox', '1zv7azmwr215'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485881', 14, 'CMZ', 'n97vyest1sx0'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484544', 4, 'CRM Leads', '6tki72iskv7z'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc482621', 12, 'Linfox', 'qw88ms4v6svo'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc485052', 11, 'Urban Xtreme', 'knjo5ntf2ogq'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489992', 3, 'Ohm Cinemas', 'dvhxdjk2k684'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc486529', 7, 'Cool Pool', '9e1d4eqtgvuc'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488507', 4, 'CRM Leads', 'pp9qfwkxfa0t'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc507354', 3, 'Ohm Cinemas', 'lqmc0z9w3k10'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488504', 8, 'Digital Garden', 'pvkn52a90301'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498073', 1, 'Employee Tracker', '8xuwbfxdn03r'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc489853', 4, 'CRM Leads', '3tmm0kbb6ocr'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc492413', 5, 'Blood Bank', 'nlcm1h65pgm2'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc468480', 11, 'Urban Xtreme', 'yo5uq784ivtk'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc498421', 14, 'CMZ', 'ma1t9sngcaf3'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491672', 8, 'Digital Garden', '2wh0pgdhl6sf'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488417', 3, 'Ohm Cinemas', '4u351s24bml6'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488841', 5, 'Blood Bank', 'sbdo6jw0w0uu'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc513951', 3, 'Ohm Cinemas', 'j3gj0k4as8qf'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487741', 10, 'Network Monitor', 'dx0x6vw51u1k'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc487619', 6, 'GreenKPI OCR', '9n453fu7vn3b'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488130', 1, 'Employee Tracker', 'kam13x44jym3'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc499637', 1, 'Employee Tracker', '2t45mpjutuib'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc491160', 1, 'Employee Tracker', 'osn515xtosny'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484785', 6, 'GreenKPI OCR', '53mxfqqg1hf9'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc484126', 10, 'Network Monitor', 'yw95e87z2olt'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc490487', 10, 'Network Monitor', 'e9cy6b112ed4'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc480051', 11, 'Urban Xtreme', 'dyjj34zq8xtc'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc488131', 12, 'Linfox', '3rqjnyamlvcg'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc472616', 7, 'Cool Pool', 'zyp34yeea4s4'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc515311', 2, 'Smart Parking', '17rv4b7g5qxw'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc479621', 5, 'Blood Bank', 'ip430j6q31nv'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc276219', 8, 'Digital Garden', 'o5nz3ony0fge'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc437895', 9, 'VetCon', '0geigm1f7fa9'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5047', 2019, 'SP22', 'jc476845', 4, 'CRM Leads', '2lz0tai95e3k'),
(13603822, 'Acharya', 'Rabin', 'rabin.acharya@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc492904', 9, 'VetCon', '6m4tnmt31gaf'),
(13633755, 'Anusuri', 'Anjani', 'anjani.anusuri@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc497400', 13, 'Bunjii', '3rfom6zmpmfk'),
(13591856, 'Arora', 'Nancy', 'nancy.arora@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc490385', 8, 'Digital Garden', 'ujt0ei3xg7u0'),
(13562827, 'Babu', 'Kishore Kumar', 'kishorekumar.babu@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc484867', 14, 'CMZ', 'qlt769rjfclm'),
(13550543, 'Bandi', 'Bhargav', 'bhargav.bandi@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc481760', 13, 'Bunjii', 'y339z9yr09e1'),
(13570071, 'Benny', 'Emil', 'emil.benny@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc486008', 2, 'Smart Parking', 'r3u6x9yf14ez'),
(13644846, 'Bhamra', 'Gurpreet Kaur Amarpal Singh', 'gurpreetkauramarpalsingh.bhamra@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc499636', 14, 'CMZ', 'a42ud2rlw0es'),
(13643148, 'Bhusal', 'Suraj', 'suraj.bhusal@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc499315', 9, 'VetCon', 'ytc09xkagzt9'),
(13570048, 'Chhetri', 'Kamal', 'kamal.chhetri@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc486004', 6, 'GreenKPI OCR', 's9qugje3bcmh'),
(13635464, 'Dave', 'Mrunal Paresh', 'mrunalparesh.dave@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc497773', 7, 'Cool Pool', 'gesuk47lgvs8'),
(13558153, 'Dhamke', 'Rucha Shrikant', 'ruchashrikant.dhamke@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc483921', 5, 'Blood Bank', 'l0vqgwl1fu16'),
(13578648, 'GEORGE', 'Alex', 'alex.george1@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc487793', 2, 'Smart Parking', 'h38amlbppv81'),
(13578330, 'GONSALVES', 'Violet Diego', 'violetdiego.gonsalves@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc487740', 12, 'Linfox', 'ixp7lcsdufye'),
(13569277, 'Gagan Deep', ' ', 'gagandeep3@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc485881', 14, 'CMZ', 'dxan6m70uedg'),
(13549112, 'Gummadi', 'Santhosh Kumar', 'santhoshkumar.gummadi@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc484544', 4, 'CRM Leads', 'pvjd90ham1so'),
(13553819, 'Gurnishan Singh', ' ', 'gurnishansingh@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc482621', 12, 'Linfox', 'bi1anzw38hls'),
(13564239, 'Hamidi', 'Amirreza', 'amirreza.hamidi@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc485052', 11, 'Urban Xtreme', 'ue46tvpirrac'),
(13590236, 'Ishvpreet Kaur', ' ', 'ishvpreetkaur@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc489992', 3, 'Ohm Cinemas', 'pm1lagn8tvbb'),
(13572209, 'Jagjit Singh', ' ', 'jagjitsingh1@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc486529', 7, 'Cool Pool', 'wf7gb1r5aavj'),
(13582741, 'KAMERA', 'Aslesha', 'aslesha.kamera@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488507', 4, 'CRM Leads', '9jzrtyoquq9y'),
(13679521, 'KAUR', 'Simran', 'simran.kaur3@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc507354', 3, 'Ohm Cinemas', '8zoegq8modnn'),
(13582730, 'KUNWAR', 'Sunil', 'sunil.kunwar@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488504', 8, 'Digital Garden', 'ohmw11yziwnj'),
(13636576, 'Kaka', 'Varun Vijay', 'varunvijay.kaka@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc498073', 1, 'Employee Tracker', 'd2ugt15coo85'),
(13369546, 'MADALA', 'Poorna Sai Kumar', 'poornasaikumar.madala@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc489853', 4, 'CRM Leads', 'buylfsmpahxn'),
(13601879, 'Mali', 'Tanvi Prakash', 'tanviprakash.mali@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc492413', 5, 'Blood Bank', 'wt59d4hllin4'),
(13498105, 'Mehrbanilayegh', 'Danyal', 'danyal.mehrbanilayegh@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc468480', 11, 'Urban Xtreme', 'lbuw9s6mv9sz'),
(13638574, 'Navneet Kaur', ' ', 'navneetkaur6@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc498421', 14, 'CMZ', 'sobp4flvf6xw'),
(13598562, 'Patel', 'Ashishkumar Jayantibhai', 'ashishkumarjayantibhai.patel@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc491672', 8, 'Digital Garden', 'zup6omomj52z'),
(13581977, 'SASAN', 'Mohinderpal Singh Jaspal Singh', 'mohinderpalsinghjaspalsingh.sasan@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488417', 3, 'Ohm Cinemas', 'l6cx6dqc3fys'),
(13584880, 'SHARMA', 'Neha', 'neha.sharma@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488841', 5, 'Blood Bank', 'svyywth0tqp3'),
(13686545, 'SIDHU', 'Gurnihal Singh', 'gurnihalsingh.sidhu@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc513951', 3, 'Ohm Cinemas', 'kmoqxgcp5wup'),
(13578341, 'SUNUWAR', 'Subash', 'subash.sunuwar@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc487741', 10, 'Network Monitor', 'jy5d57pcehb0'),
(13577558, 'SURYAWANSHI', 'Gaurav Parasnath', 'gauravparasnath.suryawanshi@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc487619', 6, 'GreenKPI OCR', 'vop3d980cu8n'),
(13580424, 'SUTHAR', 'Chintan Dineshkumar', 'chintandineshkumar.suthar@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488130', 1, 'Employee Tracker', '1wv6x7m0e5pq'),
(13644857, 'Shah', 'Bhavik Chetankumar', 'bhavikchetankumar.shah@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc499637', 1, 'Employee Tracker', '3p3vtutjftdy'),
(13596445, 'Shah', 'Suraj Yogesh', 'surajyogesh.shah@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc491160', 1, 'Employee Tracker', '7xjtexto46sx'),
(13562408, 'Shrestha', 'Maikal', 'maikal.shrestha@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc484785', 6, 'GreenKPI OCR', 'vtm2adrsrakz'),
(13559198, 'Shrestha', 'Manish', 'manish.shrestha@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc484126', 10, 'Network Monitor', 'a06zum4fccaf'),
(13592619, 'Silwal', 'Shishir', 'shishir.silwal@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc490487', 10, 'Network Monitor', 'pxkcwrl9o1by'),
(13545450, 'Sonar', 'Sheshbhushan Rajesh', 'sheshbhushanrajesh.sonar@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc480051', 11, 'Urban Xtreme', 'fe9rsnke9g3t'),
(13580435, 'VAGHELA', 'Harshish Sunilsinh', 'harshishsunilsinh.vaghela@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc488131', 12, 'Linfox', '3vx0m1xdjf0c'),
(13513266, 'VASWANI', 'Anand Navalkumar', 'anandnavalkumar.vaswani@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc472616', 7, 'Cool Pool', 'q9rsezlh4x4i'),
(13688110, 'VERMA', 'Anjali Pawan', 'anjalipawan.verma@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc515311', 2, 'Smart Parking', '2v6tzimh35jh'),
(13543929, 'Vedicherla', 'Praneeth', 'praneeth.vedicherla@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc479621', 5, 'Blood Bank', 'yif71z3cxgzc'),
(12940517, 'Virdi', 'Sandeep', 'sandeep.virdi@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc276219', 8, 'Digital Garden', 'ymqf2v527tfq'),
(13365568, 'YIN', 'Qichang', 'qichang.yin@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc437895', 9, 'VetCon', 'fhydsutaq9wi'),
(13531371, 'Yenugu', 'Sirish Vardhan Reddy', 'sirishvardhanreddy.yenugu@my.jcu.edu.au', 'CP5046', 2020, 'SP21', 'jc476845', 4, 'CRM Leads', '9wibnniv14at'),
(1234567, 'dsouza', 'len', 'la@gmail.com', 'abc', 2021, 'SP23', 'JC501370', 77, 'xyz', 'asdfghjklzxc');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

DROP TABLE IF EXISTS `student_feedback`;
CREATE TABLE IF NOT EXISTS `student_feedback` (
  `Snum_giving_feedback` varchar(50) NOT NULL,
  `Subject_code` varchar(10) NOT NULL,
  `Available_year` int(10) NOT NULL,
  `Study_period` varchar(50) NOT NULL,
  `Project_name` varchar(50) NOT NULL,
  `Snum_receiving_feedback` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `cb_total` int(10) NOT NULL,
  `teamwork_total` int(10) NOT NULL,
  `leadership_total` int(10) NOT NULL,
  `tc_total` int(10) NOT NULL,
  `wp_total` int(10) NOT NULL,
  `grade_you_would_assign` varchar(50) NOT NULL,
  `grade_they_would_assign` varchar(50) NOT NULL,
  `work_again` varchar(50) NOT NULL,
  `relative_contribution` int(10) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `feedback_num` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`feedback_num`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
