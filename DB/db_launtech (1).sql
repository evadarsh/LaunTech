-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 08:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_launtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(30) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@launtech.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(30) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_status` varchar(100) NOT NULL DEFAULT '0',
  `booking_amount` varchar(100) NOT NULL,
  `user_id` int(30) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_status`, `booking_amount`, `user_id`, `branch_id`) VALUES
(3, '2023-10-11', '6', '486', 7, 2),
(8, '2023-10-16', '6', '675', 53, 3),
(23, '2023-10-18', '6', '595', 53, 3),
(24, '2023-10-18', '1', '525', 53, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(30) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_email` varchar(100) NOT NULL,
  `branch_contact` varchar(100) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_password` varchar(100) NOT NULL,
  `branch_photo` varchar(300) NOT NULL,
  `place_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `branch_name`, `branch_email`, `branch_contact`, `branch_address`, `branch_password`, `branch_photo`, `place_id`) VALUES
(10, 'LuanTech Palode', 'launtechpalode@launtech.com', '9568942650', '', '12345678', '152823161-people-washing-clothes-at-the-laundry-shop.jpg', 21),
(11, 'LuanTech Attingal', 'launtechattingal@launtech.com', '9659452659', '', '12345678', '33500819_2077600919144867_1264565481499525120_n.jpg', 20),
(12, 'LaunTech Neyatinkara', 'launtechneyatinkara@launtech.com', '6589457826', '', '12345678', '27867573_2302658956627225_7139991582878796876_n.jpg', 15),
(13, 'LaunTech Kattakada', 'launtechkattakada@launtech.com', '9652458963', '', '12345678', 'mlp3.jpg', 16),
(14, 'LaunTech Kottayam', 'launtechkottayam@launtech.com', '7896523546', '', '12345678', '56435222_2620644271495357_387063333183815680_n.jpg', 35),
(16, 'LaunTech Pala', 'launtechpala@launtech.com', '9625478953', '', '12345678', '52528-1604217821-8f72f2c2-7f6b-46e4-beb5-4bd05f3d32e2.jpeg', 38),
(17, 'LaunTech Manimala', 'launtechmanimala@launtech.com', '9689542354', '', '12345678', '13585169_1064065490347677_7773736415622101174_o.jpg', 39),
(18, 'LaunTech Vaikom', 'launtechvaikom@launtech.com', '7420568941', '', '12345678', '17903422_2121482561411533_7222160352988076256_n.jpg', 37),
(19, 'LaunTech Kochi', 'launtechkochi@launtech.com', '8596457526', '', '12345678', 'download.jpg', 44),
(20, 'LaunTech Muvattupuzha', 'launtechmuvattupuzha@launtech.com', '9235685150', '', '12345678', '14650450_2008125166080607_2371901931793513084_n.jpg', 45),
(21, 'LaunTech Aluva', 'launtechaluva@launtech.com', '8562489612', '', '12345678', '116344262_3057207151172398_104567179663345070_n.jpg', 43),
(22, 'LaunTech Angamaly', 'launtechangamaly@launtech.com', '6986246315', '', '12345678', 'dry-cleaners-near-me-london.jpeg', 47),
(23, 'LaunTech Thrissur', 'launtechthrissur@launtech.com', '9658425612', '', '12345678', '27500161_2293177710908683_362095659447705620_o.jpg', 48),
(24, 'LaunTech Guruvayoor', 'launtechguruvayoor@launtech.com', '7896542153', '', '12345678', 'tvm2.jpg', 50),
(25, 'LuanTech Chalakudy', 'launtechchalakudy@launtech.com', '9652458963', '', '12345678', 'mlp2.jpg', 49),
(26, 'LuanTech Kodungaloor', 'launtechkodungaloor@launtech.com', '6548965231', '', '12345678', 'tvm4.jpg', 51),
(27, 'LuanTech Manjeri', 'launtechmanjeri@launtech.com', '8593849660', '', '12345678', 'mlp4.jpg', 56),
(28, 'LuanTech Wandoor', 'launtechwandoor@launtech.com', '9846598260', '', '12345678', 'mlp1.jpg', 57),
(29, 'LuanTech Nilambur', 'launtechnilambur@launtech.com', '6759862459', '', '12345678', 'tvm1.jpg', 59),
(30, 'LuanTech Perinthalmanna', 'launtechperinthalmanna@launtech.com', '8549657523', '', '12345678', 'ktm1.jpg', 60),
(31, 'LuanTech Calicut', 'launtechcalicut@launtech.com', '7856962345', '', '12345678', 'istockphoto-1132394814-612x612.jpg', 61),
(32, 'LuanTech Balussery', 'launtechbalussery@launtech.com', '6954238654', '', '12345678', 'ktm2.jpeg', 62),
(33, 'LuanTech Vatakara', 'launtechvatakara@launtech.com', '9654895263', '', '12345678', 'tvm3.jpg', 63),
(34, 'LuanTech Feroke', 'launtechferoke@launtech.com', '8965452360', '', '12345678', 'hands-loading-laundry-into-washing-machine-dry-cleaning_154092-5797.jpg', 64);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Top wear'),
(2, 'Bottom wear'),
(3, 'Jacket'),
(4, 'Bed garments'),
(5, 'Work wear'),
(6, 'Kids wear'),
(7, 'Uniform'),
(8, 'Household textiles'),
(9, 'Inner wear'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cloth`
--

CREATE TABLE `tbl_cloth` (
  `cloth_id` int(30) NOT NULL,
  `cloth_quantity` varchar(100) NOT NULL,
  `cloth_amount` varchar(100) NOT NULL,
  `cloth_status` varchar(100) NOT NULL DEFAULT '0',
  `subcategory_id` int(30) NOT NULL,
  `booking_id` int(30) NOT NULL DEFAULT 0,
  `cloth_images` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cloth`
--

INSERT INTO `tbl_cloth` (`cloth_id`, `cloth_quantity`, `cloth_amount`, `cloth_status`, `subcategory_id`, `booking_id`, `cloth_images`, `type_id`) VALUES
(68, '12', '336', '0', 4, 3, 'Screenshot (3).png', 1),
(69, '5', '150', '0', 6, 3, 'Screenshot (5).png', 1),
(70, '12', '336', '0', 4, 4, 'Screenshot (3).png', 1),
(80, '5', '300', '0', 1, 9, '', 0),
(92, '3', '180', '0', 1, 20, '', 0),
(94, '2', '120', '0', 1, 22, '', 0),
(95, '6', '450', '0', 12, 22, '', 0),
(96, '5', '300', '0', 1, 23, 'AUDI RS7.jpg', 0),
(97, '3', '225', '0', 12, 23, 'wallpaperflare.com_wallpaper (1).jpg', 0),
(98, '1', '70', '0', 18, 23, 'wp11068690-victus-wallpapers.jpg', 0),
(99, '5', '300', '0', 1, 24, '10088_001-1-768x614.png', 0),
(100, '3', '225', '0', 12, 24, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(30) NOT NULL,
  `complaint_date` varchar(100) NOT NULL,
  `complaint_title` varchar(100) NOT NULL,
  `complaint_reply` varchar(100) NOT NULL,
  `complaint_details` varchar(100) NOT NULL,
  `user_id` int(30) NOT NULL,
  `branch_id` int(30) NOT NULL,
  `complaint_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_date`, `complaint_title`, `complaint_reply`, `complaint_details`, `user_id`, `branch_id`, `complaint_status`) VALUES
(18, '2023-11-05', '', '', 'aesraewr', 53, 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(30) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(10, 'THIRUVANANTHAPURAM'),
(11, 'KOLLAM'),
(12, 'PATHANAMTHITTA'),
(13, 'ALAPPUZHA'),
(14, 'KOTTAYAM'),
(15, 'IDUKKI'),
(16, 'ERNAKULAM'),
(17, 'THRISSUR'),
(18, 'PALAKKAD'),
(19, 'MALAPPURAM'),
(20, 'KOZHIKODE'),
(21, 'WAYANAD'),
(22, 'KANNUR'),
(23, 'KASARAGOD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(30) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_duration` varchar(100) NOT NULL,
  `package_priority` varchar(100) NOT NULL,
  `package_details` varchar(200) NOT NULL,
  `package_price` varchar(100) NOT NULL,
  `package_percentage` varchar(100) NOT NULL,
  `package_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`package_id`, `package_name`, `package_duration`, `package_priority`, `package_details`, `package_price`, `package_percentage`, `package_photo`) VALUES
(3, 'Silver', '90', 'Basic', 'Package includes basic services!!', '499', '10', 'Screenshot 2023-07-30 113204.png'),
(4, 'Silver++', '120', 'Basic', 'Upgraded Silver Plan!!', '599', '10', 'Screenshot 2023-07-30 113204.png'),
(5, 'Gold', '180', 'Standard', 'Package includes Standard Services!!', '699', '15', 'Screenshot 2023-07-17 223850.jpg'),
(6, 'Gold++', '240', 'Standard', 'Upgraded Gold Plan!!', '799', '15', 'Screenshot 2023-07-17 223850.jpg'),
(7, 'Diamond', '365', 'Premium', 'Premium Plan!!!', '999', '25', 'Screenshot 2023-08-04 184456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagebooking`
--

CREATE TABLE `tbl_packagebooking` (
  `packagebooking_id` int(30) NOT NULL,
  `packagebooking_date` varchar(100) NOT NULL,
  `packagebooking_status` int(11) NOT NULL DEFAULT 0,
  `package_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_packagebooking`
--

INSERT INTO `tbl_packagebooking` (`packagebooking_id`, `packagebooking_date`, `packagebooking_status`, `package_id`, `user_id`) VALUES
(1, '2023-09-11', 0, 3, 9),
(12, '2023-09-11', 0, 4, 9),
(13, '2023-09-11', 0, 4, 9),
(18, '2023-09-19', 1, 5, 8),
(21, '2023-09-19', 1, 7, 8),
(42, '2023-10-16', 1, 5, 62),
(43, '2023-10-16', 1, 6, 62),
(48, '2023-10-16', 1, 3, 53),
(49, '2023-10-18', 1, 7, 53);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(30) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `district_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'Venjaramoodu', 1),
(2, 'Palode', 1),
(3, 'Wandoor', 2),
(4, 'Manjeri', 2),
(5, 'Manimala', 3),
(6, 'Pala', 3),
(7, 'Thodupuzha', 4),
(8, 'Vagamon', 4),
(11, 'Kochi', 5),
(12, 'Aluva', 5),
(13, 'Ramanattukara', 8),
(14, 'Sasthamkotta', 7),
(15, 'Neyyattinkara', 10),
(16, 'Kattakada', 10),
(17, 'Nedumangad', 10),
(18, 'Varkala', 10),
(19, 'Attingal', 0),
(20, 'Attingal', 10),
(21, 'Palode', 10),
(22, 'Paravur', 11),
(23, 'Karunagappally', 11),
(24, 'Kottarakkara', 11),
(25, 'Punalur', 11),
(26, 'Adoor', 12),
(27, 'Konni', 12),
(28, 'Ranni', 12),
(29, 'Thiruvalla', 12),
(30, 'Chengannur', 13),
(31, 'Cherthala', 13),
(32, 'Mavelikkara', 13),
(33, 'Changanasserry', 14),
(34, 'Kanjirappally', 14),
(35, 'Kottayam', 14),
(36, 'Vaikom', 0),
(37, 'Vaikom', 14),
(38, 'Pala', 14),
(39, 'Manimala', 14),
(40, 'Peermade', 15),
(41, 'Thodupuzha', 15),
(42, 'Nedumkandam', 15),
(43, 'Aluva', 16),
(44, 'Kochi ', 16),
(45, 'Muvattupuzha', 16),
(46, 'Aluva', 16),
(47, 'Angamaly', 16),
(48, 'Thrissur', 17),
(49, 'Chalakudy', 17),
(50, 'Guruvayoor', 17),
(51, 'Kodungallur', 17),
(52, 'Wadakkancheri', 17),
(53, 'Chittur', 18),
(54, 'Pattambi', 18),
(55, 'Ottappalam', 18),
(56, 'Manjeri', 19),
(57, 'Wandoor', 19),
(58, 'Tirur', 19),
(59, 'Nilambur', 19),
(60, 'Perinthalmanna', 19),
(61, 'Kozhikode Town', 20),
(62, 'Balussery', 20),
(63, 'Vatakara', 20),
(64, 'Feroke', 20),
(65, 'Koyilandy', 20),
(66, 'Thalassery', 22),
(67, 'Taliparamba', 22),
(68, 'Payyanur', 22),
(69, 'Taliparamba', 22),
(70, 'Kannur Town', 22),
(71, 'Vellarikundu', 23),
(72, 'Manjeshwaram', 23),
(73, 'Hosdurg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(30) NOT NULL,
  `review_count` varchar(100) NOT NULL,
  `review_date` varchar(100) NOT NULL,
  `review_details` varchar(100) NOT NULL,
  `user_id` int(30) NOT NULL,
  `branch_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `review_count`, `review_date`, `review_details`, `user_id`, `branch_id`) VALUES
(1, '4', '2023-10-12 02:21:21', 'Goood', 7, 1),
(2, '2', '2023-10-12 02:22:01', 'asda', 7, 1),
(3, '4', '2023-10-16 02:59:48', 'Good', 61, 9),
(4, '5', '2023-10-16 17:17:50', 'Very Good Service\n', 61, 9),
(5, '3', '2023-10-17 11:40:00', 'good', 53, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `subcategory_id` int(30) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `category_id` int(30) NOT NULL,
  `type_id` int(30) NOT NULL,
  `subcategory_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`subcategory_id`, `subcategory_name`, `category_id`, `type_id`, `subcategory_price`) VALUES
(1, 'Shirt', 1, 0, '60'),
(2, 'Jubba', 1, 0, '65'),
(3, 'T-Shirt', 1, 0, '50'),
(5, 'Churidar', 1, 0, '65'),
(1, 'Kurti', 1, 0, '60'),
(7, 'Top', 1, 0, '60'),
(8, 'Frock', 1, 0, '60'),
(9, 'Saree', 1, 0, '70'),
(10, 'Gown', 1, 0, '70'),
(11, 'Hoodie', 1, 0, '65'),
(12, 'Jeans', 2, 0, '75'),
(13, 'Shorts', 2, 0, '45'),
(14, 'Leggings', 2, 0, '50'),
(15, 'Churidar Pant', 2, 0, '50'),
(16, 'Skirt', 2, 0, '50'),
(17, 'Play pants', 2, 0, '50'),
(18, 'Denim', 3, 0, '70'),
(19, 'Sweater', 3, 0, '65'),
(20, 'Overcoat', 3, 0, '50'),
(21, 'Shrug', 3, 0, '40'),
(22, 'Bedsheet', 4, 0, '65'),
(23, 'Blanket', 4, 0, '80'),
(24, 'Pillow cover', 4, 0, '40'),
(25, 'Coat', 5, 0, '70'),
(26, 'Pants', 5, 0, '60'),
(27, 'Shirt', 5, 0, '60'),
(28, 'Jumpsuit', 5, 0, '70'),
(29, 'Shirt', 6, 0, '30'),
(30, 'Pants', 6, 0, '30'),
(31, 'Shorts', 6, 0, '25'),
(32, 'Frock', 6, 0, '40'),
(33, 'Student', 7, 0, '100'),
(34, 'Pants', 2, 0, '65'),
(35, 'Staff', 7, 0, '150'),
(36, 'Curtains', 8, 0, '70'),
(37, 'Table Cloth', 8, 0, '50'),
(38, 'Apron', 8, 0, '40'),
(39, 'Carpet', 8, 0, '50'),
(40, 'Rug', 8, 0, '70'),
(41, 'Underskirt', 9, 0, '40'),
(42, 'Shimmy', 9, 0, '40'),
(43, 'Baniyan', 9, 0, '40'),
(44, 'Sweatshirt', 1, 0, '50'),
(45, 'Socks', 10, 0, '20'),
(46, 'Shawl', 10, 0, '20'),
(47, 'Tie', 10, 0, '15'),
(48, 'Track pants', 2, 0, '50'),
(49, 'Handkerchief', 10, 0, '10'),
(50, 'Dhothi', 2, 0, '50'),
(51, 'Lungi', 2, 0, '30'),
(52, 'Nighty', 1, 0, '50'),
(53, 'Dawani', 1, 0, '60'),
(54, 'Blouse', 1, 0, '30'),
(55, 'Towel', 10, 0, '25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(30) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'Woolen'),
(2, 'White'),
(3, 'Cotton'),
(4, 'Polyster');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `place_id` int(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_gender`, `user_contact`, `user_email`, `place_id`, `user_password`, `user_photo`, `user_address`) VALUES
(7, 'Adarsh', 'Male', '7510849660', 'adarshev@gmail.com', 3, '12345678', '8888081.png', 'Near collage ground'),
(53, 'Adarsh', 'Male', '7510849660', 'adarshev2002@gmail.com', 3, '12345678', 'ADARSH-1 (1).jpg', 'fsdas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_cloth`
--
ALTER TABLE `tbl_cloth`
  ADD PRIMARY KEY (`cloth_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  ADD PRIMARY KEY (`packagebooking_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `branch_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_cloth`
--
ALTER TABLE `tbl_cloth`
  MODIFY `cloth_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  MODIFY `packagebooking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
