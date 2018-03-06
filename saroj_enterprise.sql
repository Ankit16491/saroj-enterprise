-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 05:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saroj_enterprise`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `career_id` int(20) NOT NULL,
  `candidate_name` varchar(50) NOT NULL,
  `candidate_age` int(20) NOT NULL,
  `candidate_gender` varchar(10) NOT NULL,
  `candidate_address` text NOT NULL,
  `position_applying` varchar(50) NOT NULL,
  `expected_ctc` int(30) NOT NULL,
  `candidate_resume` varchar(50) NOT NULL,
  `candidate_photo` varchar(50) NOT NULL,
  `candidate_contact` int(20) NOT NULL,
  `candidate_mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `career_id`, `candidate_name`, `candidate_age`, `candidate_gender`, `candidate_address`, `position_applying`, `expected_ctc`, `candidate_resume`, `candidate_photo`, `candidate_contact`, `candidate_mail`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 'Mihir Dudhia', 23, 'male', 'Ahmedabad - 380052', 'Manager', 10000, 'Office-Customer-Male-Light-icon.png', 'Doctor-790x1024.jpg', 2147483647, 'mihirdudhia@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `category_id` int(20) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `category_id`, `category_name`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 'ANTI INFLAMMATORY AND ANALGESIC DIVISION'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, 'ANTACID DIVISION'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 3, 'ANTIBIOTICS DIVISION'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 4, 'ANTITUSSIVE AND ANTI EMETIC DIVISION'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 5, 'HEMOLITICS AND VITAMINS DIVISION');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `contact_id` int(20) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_mail` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `contact_id`, `contact_name`, `contact_mail`, `subject`, `message`) VALUES
('0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0, 1, 'Mihir Dudhia', 'mihirdudhia@gmail.com', 'Medical', 'Hiiiii...');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `gallery_id` int(20) NOT NULL,
  `gallery_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `gallery_id`, `gallery_image`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, '01.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, '08.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 3, '09.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 4, '10.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 5, '05.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 6, '11.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 7, '06.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 8, '15.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 9, '16.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 10, '18.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 11, '14.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 12, '13.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 13, '12.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 14, '17.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 15, '19.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 16, '07.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `godown_master`
--

CREATE TABLE `godown_master` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `godown_id` int(50) NOT NULL,
  `godown_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `godown_master`
--

INSERT INTO `godown_master` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `godown_id`, `godown_name`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 'AHMEDABAD'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, 'Pratap Nagar Vadodara '),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 3, 'GIDC MAKARPURA VADODARA '),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 4, 'VADODARA'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 5, 'MUMBAI'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 6, 'RAJKOT'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 7, 'BHAVNAGAR'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 8, 'Kalamboli, Maharashtra '),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 9, 'KOLKATA,  WEST BENGAL'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 10, 'Nahava Sheva Port, New Bombay'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 11, 'Darukhana, Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `grade_master`
--

CREATE TABLE `grade_master` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `grade_id` int(50) NOT NULL,
  `grade_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_master`
--

INSERT INTO `grade_master` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `grade_id`, `grade_name`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 'EN 19'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, 'EN 24'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 3, 'EN 8'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 4, 'EN 8D'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 5, 'EN 9'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 6, 'EN 353'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 7, 'EN 41B'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 8, 'EN 4711111'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 9, 'EN 42J'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 10, 'EN 45'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 11, 'EN 36'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 12, 'SAE 8620'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 13, '20 MNCR5'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 14, 'SAE 52100'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 15, 'OHNS'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 16, 'D3'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 17, 'D2'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 18, 'WPS'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 19, 'HCHCR'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 20, 'D2 1.2601'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 21, 'D2 1.2379'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 22, 'H 11'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 23, 'H 13'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 24, 'HSS'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 25, 'M2'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 26, 'SAE 4140'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 27, '42 CRMO4'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 28, 'SAE 4340'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 29, 'ASTM A 105');

-- --------------------------------------------------------

--
-- Table structure for table `inquirydata`
--

CREATE TABLE `inquirydata` (
  `inq_id` int(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `kgs` varchar(50) NOT NULL,
  `nos` varchar(50) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `remark` varchar(300) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquirydata`
--

INSERT INTO `inquirydata` (`inq_id`, `email_id`, `mobile`, `company_name`, `city_name`, `grade`, `section`, `make`, `size`, `length`, `kgs`, `nos`, `delivery`, `remark`, `active_flag`) VALUES
(2, 'asad', '45', 'assda', 'asdds', 'EN 19', 'WIRE', 'USHA MARTIN', '22', 'ass', 'sasas', 'Minimum 50000', 'Kalamboli, Maharashtra', 'sdsd', 1),
(3, 'ankit@gmail.com', '7894561230', 'Shreya Websoft', 'Ahmedabad', 'EN 19', 'WIRE', 'USHA MARTIN', '12 size', '50 mm ', '10 kg', '', 'Kalamboli, Maharashtra', 'remark delivery at ahmedabad', 0),
(4, 'tej@gmail.com', '4561237890', 'Sagar Enterprise', 'Baroda', 'EN 19', 'WIRE', 'USHA MARTIN', '12 mm', '55 mm', '12650', '', 'Kalamboli, Maharashtra', 'remark', 1),
(5, 'durga@gmail.com', '5446454522', 'Durga Enterprise', 'Nadasara', 'EN 24', 'WIRE', 'USHA MARTIN	', '125 mm', '125000', '125800', '500', 'Kalamboli, Maharashtra', 'Delivery on time', 1),
(6, 'qwerty@gmail.com', '7894561230', 'shreya', 'Ahmedabad', 'EN 19', 'WIRE', 'USHA MARTIN', '12', '12', '12', '', 'Kalamboli, Maharashtra', 'remark', 0),
(7, 'ankit@gmail.com', '1234567890', 'Sagar Enterprise', 'Ahmedabad', 'EN 8D', 'BILLET [FORGING GUARANTEE]', 'CONCAST', '12 mm', '', '1250', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `login_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `login_id`, `name`, `username`, `email_id`, `password`, `photo`) VALUES
('0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 0, 1, 'Admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` int(50) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `kgs` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `godown_name` varchar(255) NOT NULL,
  `addtax` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`order_id`, `email_id`, `mobile`, `company_name`, `city_name`, `grade`, `section`, `make`, `size`, `kgs`, `rate`, `godown_name`, `addtax`, `note`, `active_flag`) VALUES
(1, 'ankit@gmail.com', '7894561230', 'as', 'Ahmedabad', 'EN 8D', 'BILLET [FORGING GUARANTEE]', 'CONCAST', '125', '1250', '29.50', 'RAJKOT', 'GST 18 %	', 'Note', 0),
(2, 'weew', 'ww', 'www', 'www', 'EN 8D', 'BILLET [FORGING GUARANTEE]', 'CONCAST', '25 ml', '1250', '29.50', 'RAJKOT', 'GST 18 %	', 'Note Available.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricelist`
--

CREATE TABLE `pricelist` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `price_id` int(50) NOT NULL,
  `grade_id` int(50) NOT NULL,
  `section` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `additionalrate` varchar(255) NOT NULL,
  `godown_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricelist`
--

INSERT INTO `pricelist` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `price_id`, `grade_id`, `section`, `make`, `quantity`, `rate`, `additionalrate`, `godown_name`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 4, 'BILLET [FORGING GUARANTEE]', 'CONCAST', 'Minimum 20000 kg', '29.50', 'GST 18 %	', 'RAJKOT'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 2, 29, 'BILLET [FORGING GUARANTEE]	', 'CONCAST', 'Minimum 10000 kg', '30', 'GST 18 %', 'RAJKOT');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL DEFAULT '0',
  `product_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `product_id`, `category_id`, `product_title`, `product_description`, `product_image`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 1, 1, 'LEMENZEN FORTE', 'serratioppeptidase 10 mg. enteric coated tablets', '09.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, 1, 'LEMENZEN D', 'serratiopeptidase 10mg + diclofenac potassium 50mg enteric coated tablets', '10.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 3, 2, 'LAPTOP', 'pantoprazole 40mg enteric coated tablets', '06.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 4, 2, 'LAPTOP D', 'pantoprazole 20mg + domperidone 10mg enteric coated tablets', '07.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 5, 1, 'LEMENZEN DP', 'serratiopeptidase 10mg + diclofenac potassium 50mg + paracetamol 500mg', '11.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 6, 2, 'LAPTOP DSR', 'pantoprazole 40mg + domperidone 30mg sustained release granules', '08.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 7, 3, 'LEMOFIX -100DT / 200DT', 'cefixime 100mg DT / 200mg DT', '15.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 8, 4, 'ONLIMD tablets /  Syrup', 'ondansetron Hydrochloride 4mg MD tablets & 2mg/5ml syrup', '16.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 9, 4, 'VEEDOB', 'doxylamine succinate 10mg + pyridoxine hcl 10mg + folic acid 2.5mg', '18.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 10, 4, 'COFLEM AM60/100ml Syrup', 'ambroxolhcl 15mg + terbutaline sulphate 1.25mg + guaiphenesine 50mg + menthol 2.5mg', '14.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 11, 4, 'COFLEM P60ml suspension', 'dextromethorphan hbr 10mg + phenylephrine hcl 5mg + chlorpheniramine malware 2mg + paracetamol 250mg', '13.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 12, 4, 'COFLEM 60/100ml Syrup', 'dextromethorphan hbr 10mg + phenylephrine hcl 5mg + chlorpheniramine mileage 2mg + menthol 1.5mg', '12.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 13, 5, 'REFER XT Tablet/ 200ml Syrup', 'ferrous ascorbate 100mg + folic acid 1.5mg + zinc sulphate 22.5mg + vitamin B12-15mcg tablet, ferrous ascorbate 30mg + folic acid 0.5mg + zinc sulphate 2mg + vitamin B12-7.5mcg + lysine 70mg syrup', '17.jpg'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 14, 5, 'LEMOPLEX 100ml Syrup', 'thiamine mononitrate 10mg + riboflavin 5mg + niacinamide 45mg + D-panthenol 20mg + pyridoxine hcl 3mg + L-lysine', '19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `size_table`
--

CREATE TABLE `size_table` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `size_id` int(50) NOT NULL,
  `stock_id` int(50) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock_master`
--

CREATE TABLE `stock_master` (
  `created_by_date` datetime NOT NULL,
  `created_by_id` int(20) NOT NULL,
  `updated_by_date` datetime NOT NULL,
  `updated_by_id` int(20) NOT NULL,
  `active_flag` int(2) NOT NULL,
  `stock_id` int(50) NOT NULL,
  `grade_id` int(50) NOT NULL,
  `section` varchar(255) NOT NULL,
  `make` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `deliver_from_godown` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_master`
--

INSERT INTO `stock_master` (`created_by_date`, `created_by_id`, `updated_by_date`, `updated_by_id`, `active_flag`, `stock_id`, `grade_id`, `section`, `make`, `quantity`, `deliver_from_godown`) VALUES
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 1, 1, 1, 'WIRE', 'USHA MARTIN', 'Minimum 50000', 'Kalamboli, Maharashtra'),
('0000-00-00 00:00:00', 1, '0000-00-00 00:00:00', 0, 0, 2, 2, 'WIRE', 'USHA MARTIN	', 'Minimum 50000	', 'Kalamboli, Maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `godown_master`
--
ALTER TABLE `godown_master`
  ADD PRIMARY KEY (`godown_id`);

--
-- Indexes for table `grade_master`
--
ALTER TABLE `grade_master`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `inquirydata`
--
ALTER TABLE `inquirydata`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `size_table`
--
ALTER TABLE `size_table`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `stock_master`
--
ALTER TABLE `stock_master`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `godown_master`
--
ALTER TABLE `godown_master`
  MODIFY `godown_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `grade_master`
--
ALTER TABLE `grade_master`
  MODIFY `grade_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `inquirydata`
--
ALTER TABLE `inquirydata`
  MODIFY `inq_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `price_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `size_table`
--
ALTER TABLE `size_table`
  MODIFY `size_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_master`
--
ALTER TABLE `stock_master`
  MODIFY `stock_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
