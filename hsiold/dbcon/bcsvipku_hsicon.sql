-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 05:45 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcsvipku_hsicon`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_charges`
--

CREATE TABLE `acc_charges` (
  `id` int(11) NOT NULL,
  `subpack_id` int(11) NOT NULL,
  `charges` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_charges`
--

INSERT INTO `acc_charges` (`id`, `subpack_id`, `charges`) VALUES
(1, 1, '4720');

-- --------------------------------------------------------

--
-- Table structure for table `acompany`
--

CREATE TABLE `acompany` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` int(11) NOT NULL,
  `subpack_id` int(11) NOT NULL,
  `occ_id` int(11) NOT NULL,
  `charges` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `subpack_id`, `occ_id`, `charges`) VALUES
(5, 3, 4, '1416'),
(6, 2, 3, '5900'),
(7, 1, 1, '16520'),
(8, 1, 2, '11210');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`id`, `name`) VALUES
(1, 'Single Occupancy (Rs. 16520)'),
(2, 'Shared Occupancy (Rs. 11210)'),
(3, 'Individual'),
(4, 'Virtual');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`) VALUES
(1, 'Physical'),
(2, 'Virtual');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `id` int(11) NOT NULL,
  `pack` int(11) NOT NULL,
  `subpack` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `alt_mob` varchar(14) NOT NULL,
  `m_r_s_No` varchar(20) NOT NULL,
  `institude` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `gender` varchar(90) NOT NULL,
  `state` varchar(90) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `country` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `Acompany_name` varchar(50) NOT NULL,
  `Acompany_age` varchar(20) NOT NULL,
  `pyment_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`id`, `pack`, `subpack`, `Name`, `email`, `mobile`, `alt_mob`, `m_r_s_No`, `institude`, `designation`, `speciality`, `gender`, `state`, `pincode`, `country`, `city`, `Acompany_name`, `Acompany_age`, `pyment_status`) VALUES
(14, 2, 3, 'Nikhil Baljekar ', 'nbaljekar6@gmail.com', '9167046789', '8928228406', '49334', 'Apollo Spectra Deonar Mumbai', '', 'General Surgery', 'Male', 'Maharashtra ', '400074', 'India', 'Mumbai', '', '', 0),
(15, 2, 3, 'Akshay Chitnis', 'drakshaychitnis@gmail.com', '9892953980', '', '2013/03/0499', 'P D Hinduja Hospital', '', 'Minimal Access Surgery', 'Male', 'Maharashtra', '400053', 'India', 'Mumbai', '', '', 0),
(16, 2, 3, 'Mohit Bhatia', 'drbhatia711@gmail.com', '9923054328', '', 'DMC 41738', 'Moolchand Medcity', '', 'Surgery', '', 'Delhi', '110025', 'India', 'Delhi', '', '', 0),
(21, 1, 2, 'Aashish Ramesh Chavan', 'aashish.chavan85@gmail.com', '7588522904', '7020958960', '2009052150', 'Dr Shankarrao Chavan Government medical College', '', 'Surgery', 'Male', 'Maharashta', '431605', 'India', 'Nanded', ' ', '', 1),
(22, 2, 3, 'SESHU KUMAR BYLAPUDI', 'drseshu31@gmail.com', '7448073465', '', '7651687', 'Pilgrim Hospital', '', 'General surgery', 'Male', 'Lincolnshire', 'PE21 8HH', 'United Kingdom', 'Boston', '', '', 1),
(23, 2, 3, 'Sahil Rometra', 'rometrasahil312@gmail.com', '9634338380', '8803780076', '2361', 'Sher - i - kashmir institute of medical sciences', '', 'Minimal Access Surgery', 'Male', 'Jammu and Kashmir', '184101', 'India', 'Srinagar', '', '', 1),
(24, 2, 3, 'Dr Sushant Pralhad Supe ', 'sushant.supe@gmail.com', '9881902906', '', '75552', 'Grant Medical college and JJ Hospital Mumbai', '', 'MS General Surgery ', 'Male', 'Maharashtra', '425002', 'India', 'Jalgaon', '', '', 0),
(25, 2, 3, 'Dr Sushant Pralhad Supe ', 'sushant.supe@gmail.com', '9881902906', '', '75552', 'Grant Medical college and JJ Hospital Mumbai', '', 'MS General Surgery ', 'Male', 'Maharashtra', '425002', 'India', 'Flat no. 201,Four Star Residency,Telephone Nagar,Girna Tank ', '', '', 0),
(26, 2, 3, 'Dr.Sachin  JagannathChavan', 'dr.sachin3771@gmail.com', '9850715926', '9850684524', '75873', 'Chavan Hospital', '', 'General Surgeon', 'Male', 'Maharashtra', '402104', 'India', 'Mangaon', '', '', 1),
(27, 2, 3, 'Nawin Kumar', 'neonawin@gmail.com', '7760064676', '7760647317', 'BIH20050000012KTK', 'MTMC Jamshedpur', '', 'general surgery', 'Male', 'jharkhand', '831017', 'India', 'Jamshedpur', '', '', 1),
(28, 1, 2, 'Ashok Kumar', 'ashokdestiny85@gmail.com', '9894191420', '', '91268', 'Madras medical college', '', 'Minimal access surgery', 'Male', 'Tamil Nadu', '600028', 'India', 'Chennai', ' ', '', 0),
(29, 2, 3, 'Dr Darpan Dadheech', 'dadheech.darpan@gmail.com', '9460729484', '9784026610', 'RMC 15027/31618', 'Shree Ramchandra memorial hospital ', '', 'Laparoscopic surgeon', 'Male', 'Rajasthan ', '313332', 'INDIA', 'Amet', '', '', 0),
(31, 2, 3, 'Gore Aalok Sandeep', 'goreaalok@gmail.com', '9773287148', '9974337148', '2015041758', 'SSG HOSPITAL VADODARA', '', 'MS General Surgery', 'Male', 'Maharashtra', '411004', 'India', 'Pune', '', '', 1),
(32, 2, 3, 'Nikhil Nnanjappa Ballanamada Appaiah', 'drnikhilnanjappa@gmail.com', '9900280723', '9900280723', '7576362', 'Basildon University Hospital Surgeon', '', 'Colorectal Surgeon', 'Male', 'Essex', 'SS16 5NL', 'United Kingdom', 'Basildon', '', '', 1),
(34, 1, 1, 'Dr Deepraj Bhandarkar', 'deeprajbhandarkar@gmail.com', '9821014939', '', '59346', 'Hinduja Hospital, Mumbai', '', 'Minimal Access Surgery', 'Male', 'Maharashtra', '400016', 'India', 'Mumbai', '', '', 1),
(36, 1, 1, 'Dr Ashutosh Soni', 'soni.ashutosh@gmail.com', '9826168168', '', '6336 MP', 'Bombay Hospital Indore MP', '', 'General,GI and Laparoscopic Surgery', 'Male', 'MP', '452010', 'India', 'INDORE', '', '', 1),
(37, 2, 3, 'Dr Sayadeep Maity', 'dr.s.d.maity@gmail.com', '8981880248', '9123816883', '75664 WBMC', 'Santosh Medical College & Hospital, Ghaziabad.', '', 'MS General Surgery', 'Male', 'Uttar Pradesh', '201017', 'India', 'Ghaziabad', '', '', 1),
(38, 1, 1, 'Brahm datt Pathak', 'bdplus2001@yahoo.com', '9811752689', '', 'APHS0828-LM', 'Fortis Hospital Faridabad ', '', 'Minimally Invasive Surgery ', 'Male', 'HARYANA', '121001', 'India', 'Faridabad', '', '', 0),
(39, 1, 1, 'Brahm datt Pathak', 'bdplus2001@yahoo.com', '9811752689', '', 'APHS0828-LM', 'Fortis Hospital Faridabad ', '', 'Minimally Invasive Surgery ', 'Male', 'HARYANA', '121001', 'India', 'Faridabad', '', '', 0),
(40, 2, 3, 'Dr Snehal Bhange ', 'drsnehalbhange@gmail.com', '9820173849', '', '2003020582', 'Jaslok Hospital & Research Centre ,15 Dr G Deshmuk', '', 'General Surgery ', 'Female', 'Maharashtra', '400026', 'India ', 'Mumbai ', '', '', 1),
(41, 2, 3, 'RAFIQUE UMER HARVITKAR', 'dr_rafique639@yahoo.com', '8879525195', '', '1036604', 'Queen Alexandra hospital', '', 'General surgery', 'Male', 'Hamsphire', 'PO6 3LY', 'United kingdom', 'Portsmouth', '', '', 1),
(42, 1, 2, 'Avinash Katara', 'avinashkatara@gmail.com', '9967023972', '', '79687', 'PD Hinduja Hospital & Medical Research Centre', '', 'Minimal Access Surgery', 'Male', 'Maharashtra', '400016', 'India', 'Mumbai', ' ', '', 1),
(43, 1, 2, 'Vijay Kumar Mittal ', 'vijmittal@hotmail.com', '9835037088', '', '19368', 'BIG Apollo Spectra Hospital ', '', 'General Surgery ', 'Male', 'Bihar ', '800 026 ', 'india ', 'Patna ', ' ', '', 1),
(44, 1, 2, 'Dr.GANESH SHENOY K ', 'drshenoyganesh@gmail.com', '9739321584', '9110264220', '64473', 'A.V.HOSPITAL ', '', 'MINIMAL ACCESS ,GI AND BARIATRIC SURGERY ', 'Male', 'KARNATAKA MEDICAL COUNSIL', '560004', 'India', 'Bangalore', ' ', '', 1),
(45, 1, 2, 'Dr. Jitendra Chawla', 'drchawlaj@gmail.com', '9829065573', '8302497566', '12358 RMC', 'Saket Hospital, Jaipur, Rajasthan', '', 'General & Laparoscopic surgery', 'Male', 'Rajashthan', '302010', 'India', 'Jaipur', ' ', '', 1),
(46, 1, 2, 'Dr Rajesh Sharma', 'rajshar2424@gmail.com', '9829136955', '9828418196', '17676 RMC', 'Fortis Escorts Hospital, Jaipur', '', 'Bariatric, minimal access & general surgery', 'Male', 'Rajasthan', 'Jaipur', 'India', 'Jaipur', ' ', '', 1),
(47, 2, 3, 'Khadeija Hussain', 'khadeijahussain@gmail.com', '9637601110', '9820548402', '2018/05/2356', 'Grant Government Medical College and Sir J J Group', '', 'General Surgery', 'Female', 'Maharashtra', '400008', 'India', 'Mumbai', '', '', 1),
(48, 1, 1, 'DR DHARMESH H SHAH', 'dhshahms1962@gmail.com', '9825282907', '', 'G-15159', 'JALARAM HOSPITAL', '', 'GENERAL SURGERY', 'Male', 'Gujarat', '360001', 'India', 'Rajkot', 'LEENA SHAH', '57', 0),
(49, 1, 2, 'Dr Ashwin Arun Masurkar', 'ashwinmasurkar@gmail.com', '9343835917', '9343835893', '62109 Karnataka Medi', 'Masurkar Hospital', '', 'Minimal Access Surgeon', 'Male', 'Karnataka', '591307', 'India', 'Gokak', ' ', '', 1),
(50, 2, 3, 'DR JOJO JAMES', 'drjojojames@gmail.com', '7763807212', '', '01YG127', 'TATA MAIN HOSPITAL ', '', 'GENERAL SURGERY', 'Male', 'JHARKHAND', '831001', 'INDIA', 'JAMSHEDPUR', '', '', 1),
(51, 1, 1, 'kalai selvan', 'kalaiselvan1979@gmail.com', '9791324987', '09840848438', '76155', 'SELVAM HEALTH CARE KRISHNAGIRI', '', 'MINIMALLY INVASIVE AND GI SURGERY', 'Male', 'TAMILNADU', '635001', 'India', 'KRISHNAGIRI', ' ', '', 0),
(52, 2, 3, 'Devdatt Palnitkar', 'devdatt.palnitkar@gmail.com', '9822004654', '9767100306', '2002052170', 'Palnitkar Hospital', '', 'General surgery', 'Male', 'Maharashtra', '431001', 'India', 'Aurangabad', '', '', 1),
(53, 1, 1, 'Babu Ubale', 'dr.b.ubale@gmail.com', '9822606097', '', '88317', 'Ashwini rural medical College Solapur', '', 'Laparoscopic surgery', 'Male', 'Maharashtra', '413003', 'India', 'Solapur', 'Dr Kavita ubale', '40', 1),
(54, 1, 1, 'Babu Ubale', 'dr.b.ubale@gmail.com', '9822606097', '', '88317', 'Ashwini rural medical College Solapur', '', 'Laparoscopic surgery', '', 'Maharashtra', '413003', 'India', 'Solapur', 'Dr Kavita ubale', '40', 1),
(55, 2, 3, 'DR. MRINAL PARAM KINKER', 'drmrinalkinker@gmail.com', '9829647666', '9057545019', '08/12528', 'KINKER HOSPITAL AND RESEARCH CENTRE', '', 'LAPAROSCOPIC SURGEON', 'Male', 'RAJASTHAN', '324005', 'INDIA', 'KOTA', '', '', 0),
(56, 2, 3, 'Sadhasivam Ramasamy', 'sadhasivam74@gmail.com', '9654765848', '9582958588', '7644248', 'Milton Keynes University Hospital', '', 'General surgery', 'Male', 'Bucks', 'MK109QS', 'United Kingdom', 'Milton Keynes', '', '', 1),
(57, 2, 3, 'Chirag Pereira', 'pereirachirag@gmail.com', '8553608177', '', 'ka99851', 'Father Muller Hospital', '', 'General Surgery', '', 'Karnataka', '575002', 'India', 'Mangalore', '', '', 1),
(58, 2, 3, 'DR. MRINAL PARAM KINKER', 'drmrinalkinker@gmail.com', '9829647666', '9057545019', '08/12528', 'KINKER HOSPITAL AND RESEARCH CENTRE', '', 'LAPAROSCOPIC SURGERY', 'Male', 'RAJASTHAN', '324005', 'INDIA', 'KOTA', '', '', 0),
(59, 1, 2, 'Ananya Roy', 'royananya615@gmail.com', '8882150414', '9811818281', '10779', 'Metro Heart Institute with Superspeciality', '', 'General Surgery', 'Female', 'Haryana', '121002', 'India', 'Faridabad', ' ', '', 1),
(60, 2, 3, ' PINAK DASGUPTA', 'drpdg77@gmail.com', '8811091676', '8811090582', 'TMC 136114', 'GEM HOSPITAL CHENNAI', '', 'COLORECTAL, HERNIA, ROBOTIC AND AWR SURGERY', 'Male', 'TAMILNADU', '600096', 'INDIA', 'CHENNAI', '', '', 0),
(61, 2, 3, 'gokul mimrot', 'gokulmimrot@gmail.com', '8459866605', '9922885972', '312151', 'rk digital', '', 'Computer science', 'Male', 'mahashtra', '431114', 'india', 'Aurangabad', '', '', 0),
(62, 2, 3, 'Gokul Mimrot', 'gokulmimrot@gmail.com', '8459866605', '9922885972', '312151', 'rk digital', '', 'Computer science', 'Male', 'mahashtra', '431114', 'india', 'Aurangabad', '', '', 0),
(63, 2, 3, 'Gokul Mimrot', 'gokulmimrot@gmail.com', '8459866605', '9922885972', '312151', 'rk digital', '', 'Computer science', 'Male', 'mahashtra', '431114', 'india', 'Aurangabad', '', '', 0),
(64, 1, 2, 'Sulay Kaushik Shah', 'sulayshah96@gmail.com', '9924193193', '8780413423', 'G- 66172', 'KEM Hospital, MUMBAI', '', 'General surgery', 'Male', 'Maharashtra', '400012', 'India', 'Mumbai', ' ', '', 1),
(65, 2, 3, 'Vinayaka N S', 'vinayaka.kims@gmail.com', '9901954947', '', 'KMC 94867', 'Chandramma Dayanand Sagar Insititute of Medical Ed', '', 'General Surgery', 'Male', 'Karnataka ', '562112', 'India', 'Bangalore ', '', '', 1),
(66, 2, 3, 'Rohit Krishnappa', 'rohitkrishnappa@yahoo.co.in', '9620116126', '9626339848', 'KMC-76911', 'Dr Chandramma Dayananda Sagar Institute of Medical', '', 'General Surgery', 'Male', 'Karnataka', '562112', 'India', 'Harohalli', '', '', 1),
(67, 2, 3, 'Dr. JOSE PAUL', 'joz923@gmail.com', '7735275909', '8089316045', '56396 (TCMC)', 'VIMSAR, BURLA', '', 'GENERAL SURGERY', 'Male', 'Odisha', '768017', 'India', 'SAMBALPUR', '', '', 1),
(68, 2, 3, 'Swapnali Ramesh Ghegade', 'ghegadeswapnali@gmail.com', '8237202029', '', '2018062657', 'Seth Nandlal Dhoot Hospital', '', 'General surgery', 'Female', 'Maharashtra', '431001', 'India', 'Aurangabad', '', '', 1),
(69, 2, 3, 'SHREYA CHOPRA', 'chopras278@gmail.com', '9921120590', '8368676417', '2018040752', 'SETH NANDLAL DHOOT HOSPITAL', '', 'GENERAL SURGERY', 'Female', 'Maharashtra', '431210', 'India', 'Aurangabad', '', '', 1),
(70, 2, 3, 'Hariprasad TR', 'harishermi@hotmail.com', '9741006327', '', 'KMC-31543', 'Dr Chandramma Dayananda Sagar Institute of Medical', '', 'General Surgery', 'Male', 'Karnataka', '562112', 'India', 'Harohalli', '', '', 1),
(71, 2, 3, 'Dr. Akash', 'akash30056@gmail.com', '8052580342', '7007311392', '94911', 'ABVIMS and dr. Ram manohar lohia hospital, new del', '', 'Surgery', 'Male', 'New delhi', '110001', 'India', 'Delhi', '', '', 0),
(72, 2, 3, 'Dr. Akash', 'akash30056@gmail.com', '8052580342', '7007311392', '94911', 'ABVIMS and dr. Ram manohar lohia hospital, new del', '', 'Surgery', 'Male', 'New delhi', '110001', 'India', 'Delhi', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subpackage`
--

CREATE TABLE `subpackage` (
  `subpack_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `subpack_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subpackage`
--

INSERT INTO `subpackage` (`subpack_id`, `pack_id`, `subpack_name`) VALUES
(1, 1, 'Residential'),
(2, 1, 'Non Residential'),
(3, 2, 'Virtual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_charges`
--
ALTER TABLE `acc_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subpack_id` (`subpack_id`);

--
-- Indexes for table `acompany`
--
ALTER TABLE `acompany`
  ADD PRIMARY KEY (`id`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subpack_id` (`subpack_id`),
  ADD KEY `occ_id` (`occ_id`);

--
-- Indexes for table `occupancy`
--
ALTER TABLE `occupancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration1`
--
ALTER TABLE `registration1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpackage`
--
ALTER TABLE `subpackage`
  ADD PRIMARY KEY (`subpack_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_charges`
--
ALTER TABLE `acc_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `acompany`
--
ALTER TABLE `acompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `occupancy`
--
ALTER TABLE `occupancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration1`
--
ALTER TABLE `registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `subpackage`
--
ALTER TABLE `subpackage`
  MODIFY `subpack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acc_charges`
--
ALTER TABLE `acc_charges`
  ADD CONSTRAINT `acc_charges_ibfk_1` FOREIGN KEY (`subpack_id`) REFERENCES `subpackage` (`subpack_id`);

--
-- Constraints for table `acompany`
--
ALTER TABLE `acompany`
  ADD CONSTRAINT `acompany_ibfk_1` FOREIGN KEY (`did`) REFERENCES `registration` (`id`);

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`subpack_id`) REFERENCES `subpackage` (`subpack_id`),
  ADD CONSTRAINT `charges_ibfk_2` FOREIGN KEY (`occ_id`) REFERENCES `occupancy` (`id`);

--
-- Constraints for table `subpackage`
--
ALTER TABLE `subpackage`
  ADD CONSTRAINT `subpackage_ibfk_1` FOREIGN KEY (`pack_id`) REFERENCES `package` (`pack_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
