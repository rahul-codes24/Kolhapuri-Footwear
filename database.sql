-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 03:51 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolhapuri`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `sr_no` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `description` varchar(900) NOT NULL,
  `categeory` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `totalsell` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pro_id`, `name`, `price`, `image`, `img2`, `img3`, `img4`, `description`, `categeory`, `stock`, `totalsell`) VALUES
(1, 'Original Dark Brown Pure Leather Moja shape Handstitched Kolhapuri Chappal For Men ', 1103, 'uploads/img21.jpg', 'uploads/img22.jpg', 'uploads/img23.jpg', 'uploads/img24.jpg', 'Moja Shape leather kolhapuri chappal for men in Dark Brown color. Its made in 100% genuine leather with detailed handwork by the craftsman of India. Each craft is handcrafted by the craftsmen of rural India. Vhaan works to empower our craftsmen and enriching the craft. Enjoy the Ethnic craft we have handmade for you …Shop this dark brown leather kolhapuri chappal online.', 'Male', 4, 0),
(2, 'Exclusive Dark Brown Amdar / Senapati Paper Kapashi Kolhapuri Chappal For Men', 1128, 'uploads/img11.jpg', 'uploads/img12.jpg', 'uploads/img13.jpg', 'uploads/img14.jpg', 'Kind of straight from inward, this shape looks a lot of like broad base on the feet. Pointed at the top but kind of broad at the external size this shape gives a more coverage to the toe and fingers with the benefits of pointed shape. Best for flexibility and movement with the protection, this shape looks rich and artistic. With the name Senapati , symbolizing protection, royalty, strength, and fast movement. This is the classic kolhapuri chappal. Well known in kolhapuri leather craft world for its unique design.', 'Male', 9, 3),
(3, 'Dark brown senapati kapshi kolhapuri chappal for men (with sound)', 1200, 'uploads/img31.jpg', 'uploads/img32.jpg', 'uploads/img33.jpg', 'uploads/img34.jpg', 'The Khas Dark Brown Senapati Kapashi Kolhapuri Chappal is a traditional Indian footwear that is both stylish and comfortable. It is made with high-quality leather and features a unique sound-making feature that makes it stand out from other kolhapuri chappals.  These chappals are perfect for everyday wear. They can be worn with a variety of outfits, from casual to formal. The Khas Dark Brown Senapati Kapashi Kolhapuri Chappal is also a great choice for special occasions.', 'Male', 10, 0),
(4, 'Handcrafted Thick Base Ethnic 5 stich Senapati Kapashi Kolhapuri for men', 1500, 'uploads/img41.jpg', 'uploads/img42.jpg', 'uploads/img43.jpg', 'uploads/img44.jpg', 'Amdar / Senapati Kapashi Kolhapuri Chappal with Thick Base for Warriors  Kind of straight from inward, this shape looks a lot of like broad knife on the feet. Pointed at the top but kind of broad at the external size this shape gives a more coverage to the toe and fingers with the benefits of pointed shape. Best for flexibility and movement with the protection, this shape looks rich and artistic. With the name Senapati (leader of an army), symbolizing protection, royalty, strength, and fast movement. This is the Kolhapuri Chappal worthy to be wore in a war!', 'Male', 8, 2),
(5, 'Khas Kolhapuri Kapashi With Sound ( Red ) For Men', 2100, 'uploads/img51.jpg', 'uploads/img52.jpg', 'uploads/img53.jpg', 'uploads/img54.jpg', 'Special kapashi kolhapuri chappal', 'Male', 9, 1),
(6, 'Lal Gonda Dark Brown Ladies Kolhapuri Chappal', 1100, 'uploads/img61.jpg', 'uploads/img62.jpg', 'uploads/img63.jpg', 'uploads/img64.jpg', 'Lal Gonda Dark Brown Ladies Kolhapuri Chappal', 'Female', 10, 0),
(7, 'Golden Color Ladies Highest Quality Leather Ladies Kolhapuri Chappal', 900, 'uploads/71.jpg', 'uploads/73.jpg', 'uploads/74.jpg', 'uploads/img72.jpg', 'How pretty do these traditional Golden Kolhapuri look. We tried to add a little twist by changing the top. Delicately designed and easy to match with almost anything.', 'Female', 9, 1),
(8, 'Royal Maharaja Prestigious Antique Designed Shahu Kolhapuri Chappal For Men', 2500, 'uploads/img81.jpg', 'uploads/img82.jpg', 'uploads/img83.jpg', 'uploads/img84.jpg', 'ATTRACTIVE AND AUTHENTIC SHAHU KOLHAPURI FOR MEN WITH FINE BRAIDS AND KOLHAPURI GONDA ON THE UPPER. Shahu chappal is said to be known for its recognition by the great Shahu Maharaj at said to that they loved  this design so much that chappal was famous by their name.  Shahu chappal is the great combination of maturity with detail craft.  this chappal entirely handcrafted where the chappal made by best quality leather material and lots of efforts.', 'Male', 10, 0),
(9, 'Ladies Kolhapuri Chappal With Jari', 1200, 'uploads/img91.jpg', 'uploads/img92.jpg', 'uploads/img93.jpg', 'uploads/img94.jpg', 'kolhapuri womens chappal with stylish look ', 'Female', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `cartlist`
--

CREATE TABLE `cartlist` (
  `userid` varchar(100) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `size` int(11) NOT NULL,
  `categeory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartlist`
--


-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Name` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `set_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `orderedproduct`
--

CREATE TABLE `orderedproduct` (
  `productid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `product name` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `size` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `categeory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderedproduct`
--


-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `orderid` int(11) NOT NULL,
  `expdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `orderid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderstatus`
--


-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(400) NOT NULL,
  `price` int(11) NOT NULL,
  `sell` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `categeory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `pro_id` int(11) NOT NULL,
  `reviewValue` int(11) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
