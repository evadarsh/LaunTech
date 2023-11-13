-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:59 PM
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
(5, '2023-10-15', '4', '350', 53, 3),
(6, '2023-10-15', '4', '0', 53, 3),
(7, '2023-10-16', '5', '774', 53, 3),
(8, '2023-10-16', '5', '675', 53, 3),
(9, '2023-10-16', '6', '300', 61, 3);

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
(1, 'LaunTech Palode', 'launtechtvm@gmail.com', '9856723450', 'Near police station\r\nPonmudi road ', '12345678', 'Screenshot (1).png', 2),
(2, 'LaunTech Venjaramood', 'launtechtvm2@gmail.com', '6523458963', 'Town road', '12345678', 'Screenshot 2023-07-17 223833.png', 1),
(3, 'LaunTech wandoor', 'launtechmlp@gmail.com', '6523458963', 'Town Circle manjeri road', '12345678', 'Screenshot 2023-07-17 223833.png', 3),
(4, 'LaunTech vagamon', 'launtechidk@gmail.com', '6523458589', 'dc collage', '12345678', 'Screenshot 2023-08-04 184456.png', 8),
(5, 'launTech Kattakada', 'launtechtvm2@gmail.com', '7859642356', '', '12345678', '8888081.png', 2),
(6, 'launtech', 'asdasd@gmail.com', '874854165', '', '12345678', 'wallpaperflare.com_wallpaper (4).jpg', 4),
(7, 'launtech', 'asdasd@gmail.com', '45656416541', '', '12345678', 'wallpaperflare.com_wallpaper (4).jpg', 1),
(8, 'Alauntech', 'asdhasg@gmail.com', 'manjeri', '', '12345678', 'AUDI RS7.jpg', 4);

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
(91, '', '', '0', 0, 19, '', 0),
(92, '3', '180', '0', 1, 20, '', 0),
(93, '', '0', '0', 1, 21, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(30) NOT NULL,
  `complaint_date` varchar(100) NOT NULL,
  `complaint_title` varchar(100) NOT NULL,
  `complaint_replay` varchar(100) NOT NULL,
  `complaint_details` varchar(100) NOT NULL,
  `complaint_status` varchar(100) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'Thiruvananthapuram'),
(2, 'Malappuram'),
(3, 'Kottayam'),
(4, 'Idukki');

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
(4, 'Silver++', '120', 'Basic', 'Upgraded Silver Plan!!', '599', '10', 'Screenshot (1).png'),
(5, 'Gold', '180', 'Standard', 'Package includes Standard Services!!', '699', '15', ''),
(6, 'Gold++', '240', 'Standard', 'Upgraded Gold Plan!!', '799', '15', 'Screenshot 2023-07-17 223833.png'),
(7, 'Diamond', '365', 'Premium', 'Premium Plan!!!', '999', '25', 'Screenshot 2023-08-04 184456.png');

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
(43, '2023-10-16', 1, 6, 62);

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
(8, 'Vagamon', 4);

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
(4, '5', '2023-10-16 17:17:50', 'Very Good Service\n', 61, 9);

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
(7, 'Adarsh', 'Male', '2147483647', 'adarshev@gmail.com', 3, '12345678', '8888081.png', 'Near collage ground'),
(9, 'Priya', 'Female', '2147483647', 'priya@gmail.com', 7, '12345678', '8888083.png', 'Near Central Bank'),
(53, 'Adarsh', 'Male', '2147483647', 'adarshev2002@gmail.com', 3, '12345678', 'ADARSH-1 (1).jpg', 'fsdas'),
(54, 'Kiran Bhai', 'Male', '2147483647', 'adithyak.bca21@dcschool.net', 2, 'kiranbhai123', '28643877.jpg', 'aedasdasw'),
(61, 'Adarsh', 'Male', '2147483647', 'adarshev2002@gmail.com', 2, 'adarsh', '28643877.jpg', 'safd'),
(62, 'Adarsh', 'Male', '7510849660', 'adarshev2002@gmail.com', 1, '123456', '28643877.jpg', 'hbghbh');

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
  MODIFY `booking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  MODIFY `branch_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_cloth`
--
ALTER TABLE `tbl_cloth`
  MODIFY `cloth_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_packagebooking`
--
ALTER TABLE `tbl_packagebooking`
  MODIFY `packagebooking_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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