-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 05:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noor`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `high_light` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `high_light`, `description`, `status`, `image`) VALUES
(2, 'Summer Collections', '75%', '<p>So... Hurriup</p>\r\n', 1, '1537548826_ST_10721_1_PS01112017.jpg'),
(3, 'Prity Girls', 'Sports Wear', '<p>Buy one Get one free</p>\r\n', 1, '1537549728_prity_girls.jpg'),
(4, 'Crazy Guy', 'New Arrival', '<p>This Fashion Make Me Crazy</p>\r\n', 1, '1537550873_Crazy guy.jpg'),
(5, 'Smart Girl', '20%OFF', '<p>Hurraaaaaa....</p>\r\n', 1, '1537551881_charming.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `brand_status` tinyint(1) NOT NULL DEFAULT '1',
  `brand_logo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_status`, `brand_logo`, `created_at`, `updated_at`) VALUES
(9, 'Addidas', 1, '1537380859_img-3.jpg', '2018-09-18 18:19:01', '2018-09-19 18:14:19'),
(10, 'Kappa', 1, '1537382060_img-8.jpg', '2018-09-18 18:37:12', '2018-09-19 18:34:20'),
(11, 'Polo', 1, '1537380970_img-18.jpg', '2018-09-18 18:40:44', '2018-09-19 18:16:10'),
(12, 'BOSS', 1, '1537381466_img-1.jpg', '2018-09-18 19:00:37', '2018-09-19 18:24:26'),
(13, 'LEVIS', 1, '1537381493_img-7.jpg', '2018-09-18 19:01:35', '2018-09-19 18:24:53'),
(15, 'Adidas', 1, '1537381838_img-3.jpg', '2018-09-18 19:03:00', '2018-09-19 18:30:38'),
(16, 'D&G', 1, '1537381855_img-11.jpg', '2018-09-18 19:03:32', '2018-09-19 18:30:55'),
(17, 'Reebok', 1, '1537381875_img-5.jpg', '2018-09-18 19:04:56', '2018-09-19 18:31:15'),
(18, 'Puma', 1, '1537381921_img-4.jpg', '2018-09-18 19:05:27', '2018-09-19 18:32:01'),
(19, 'H&M', 1, '1537381949_img-17.jpg', '2018-09-18 19:06:15', '2018-09-19 18:32:29'),
(20, 'General', 1, '1537381969_img-15.jpg', '2018-09-18 19:07:05', '2018-09-19 18:32:49'),
(21, 'Nike', 1, '1537381986_img-19.jpg', '2018-09-18 19:07:48', '2018-09-19 18:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `cat_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `parent_id`, `cat_status`, `created_at`, `updated_at`) VALUES
(138, 'Mens', 0, 1, '2018-09-26 07:06:36', NULL),
(139, 'Womens', 0, 1, '2018-09-26 07:07:09', NULL),
(140, 'Kids', 0, 1, '2018-09-26 07:07:38', NULL),
(141, 'Accessories', 0, 1, '2018-09-26 07:08:01', NULL),
(142, 'Mens Jackets', 138, 1, '2018-09-26 07:08:53', NULL),
(143, 'Mens Coat', 142, 1, '2018-09-26 07:10:30', NULL),
(144, 'Mens Outerwear', 142, 1, '2018-09-26 07:10:55', NULL),
(145, 'Mens Bags', 142, 1, '2018-09-26 07:11:22', NULL),
(146, 'Mens Dresses', 142, 1, '2018-09-26 07:11:50', NULL),
(147, 'Mens Watches', 138, 1, '2018-09-26 07:13:31', NULL),
(148, 'Mens Fastrack', 147, 1, '2018-09-26 07:15:14', NULL),
(149, 'Mens Casio', 147, 1, '2018-09-26 07:15:51', NULL),
(150, 'Mens Sonata', 147, 1, '2018-09-26 07:16:20', NULL),
(151, 'Mens Maxima', 147, 1, '2018-09-26 07:16:40', NULL),
(152, ' Mens Footwear', 138, 1, '2018-09-26 07:17:34', NULL),
(153, 'Mens Sports', 152, 1, '2018-09-26 07:18:01', NULL),
(154, 'Mens Flat Sandals', 152, 1, '2018-09-26 07:18:23', NULL),
(155, 'Mens Casual', 152, 1, '2018-09-26 07:18:51', NULL),
(156, 'Mens Sneakers', 152, 1, '2018-09-26 07:19:22', NULL),
(157, 'Mens Jwellery', 138, 1, '2018-09-26 07:19:52', NULL),
(158, 'Mens Bracelets', 157, 1, '2018-09-26 07:20:19', NULL),
(159, 'Mens Necklaces andPendent', 157, 1, '2018-09-26 07:21:12', NULL),
(160, 'Mens Pendants', 157, 1, '2018-09-26 07:21:34', NULL),
(161, 'Mens Pins and Brooches', 157, 1, '2018-09-26 07:21:57', NULL),
(162, 'Mens Suits', 138, 1, '2018-09-26 07:22:18', NULL),
(163, 'Mens Casual Dresses', 162, 1, '2018-09-26 07:22:49', NULL),
(164, 'Mens Evening', 162, 1, '2018-09-26 07:23:07', NULL),
(165, 'Mens Designer', 162, 1, '2018-09-26 07:23:24', NULL),
(166, 'Mens Party', 162, 1, '2018-09-26 07:23:45', NULL),
(167, 'Mens Accessories', 138, 1, '2018-09-26 07:24:22', NULL),
(168, 'Mens Trousers', 167, 1, '2018-09-26 07:24:44', NULL),
(169, 'Mens Jeans', 167, 1, '2018-09-26 07:25:01', NULL),
(170, 'Mens Clothing', 167, 1, '2018-09-26 07:25:24', NULL),
(171, 'Mens Shirts', 167, 1, '2018-09-26 07:25:43', NULL),
(172, 'Womens Clothing', 139, 1, '2018-09-26 07:27:31', NULL),
(173, 'Womens Dress sale', 172, 1, '2018-09-26 07:28:23', NULL),
(174, 'Womens Sarees', 172, 1, '2018-09-26 07:29:13', NULL),
(175, 'Womens Kurta & kurti', 172, 1, '2018-09-26 07:29:36', NULL),
(176, 'Womens Dress materials', 172, 1, '2018-09-26 07:30:21', NULL),
(177, 'Womens T-shirt', 172, 1, '2018-09-26 07:30:41', NULL),
(178, 'Womens Jewellery', 139, 1, '2018-09-26 07:31:10', NULL),
(179, 'Womens Rings', 178, 1, '2018-09-26 07:31:34', NULL),
(180, 'Womens Earrings', 178, 1, '2018-09-26 07:31:53', NULL),
(181, 'Womens Jewellery sets', 178, 1, '2018-09-26 07:32:14', NULL),
(182, 'Womens Pendants & lockets', 178, 1, '2018-09-26 07:32:35', NULL),
(183, 'Womens Plastic jewellery', 178, 1, '2018-09-26 07:33:01', NULL),
(184, 'Womens Beauty', 139, 1, '2018-09-26 07:33:24', NULL),
(185, 'Womens Make up', 184, 1, '2018-09-26 07:33:41', NULL),
(186, 'Womens Hair care', 184, 1, '2018-09-26 07:34:07', NULL),
(187, 'Womens Deodorants', 184, 1, '2018-09-26 07:34:26', NULL),
(188, 'Womens Bath & body', 184, 1, '2018-09-26 07:34:45', NULL),
(189, 'Womens Skin care', 184, 1, '2018-09-26 07:35:09', NULL),
(190, 'Womens Watches', 139, 1, '2018-09-26 07:35:27', NULL),
(191, 'Womens Fasttrack', 190, 1, '2018-09-26 07:35:47', NULL),
(192, 'Womens Casio', 190, 1, '2018-09-26 07:36:07', NULL),
(193, 'Womens Titan', 190, 1, '2018-09-26 07:36:22', NULL),
(194, 'Womens Tommy-Hilfiger', 190, 1, '2018-09-26 07:36:40', NULL),
(195, 'Womens Fossil', 190, 1, '2018-09-26 07:36:57', NULL),
(196, 'Womens Footwear', 139, 1, '2018-09-26 07:37:12', NULL),
(197, 'Womens Flats', 196, 1, '2018-09-26 07:37:29', NULL),
(198, 'Womens Heels', 196, 1, '2018-09-26 07:37:49', NULL),
(199, 'Womens Boots', 196, 1, '2018-09-26 07:38:08', NULL),
(200, 'Womens Slippers', 196, 1, '2018-09-26 07:38:27', NULL),
(201, 'Womens Shoes', 196, 1, '2018-09-26 07:38:45', NULL),
(202, 'Womens Accessories', 139, 1, '2018-09-26 07:39:07', NULL),
(203, 'Womens Backpacks', 202, 1, '2018-09-26 07:39:29', NULL),
(204, 'Womens Wallets', 202, 1, '2018-09-26 07:39:48', NULL),
(205, 'Womens Laptops Bags', 202, 1, '2018-09-26 07:40:07', NULL),
(206, 'Womens Belts', 202, 1, '2018-09-26 07:40:30', NULL),
(207, 'Womens Handbags', 202, 1, '2018-09-26 07:40:48', NULL),
(208, 'Kids Clothing', 140, 1, '2018-09-26 07:49:43', NULL),
(209, 'Kids T-Shirts', 208, 1, '2018-09-26 07:50:03', NULL),
(210, 'Kids Shirts', 208, 1, '2018-09-26 07:51:26', NULL),
(211, 'Kids Trousers', 208, 1, '2018-09-26 07:51:53', NULL),
(212, 'Kids Sleep Wear', 208, 1, '2018-09-26 07:52:16', NULL),
(213, 'Kids Accessories', 140, 1, '2018-09-26 07:54:28', NULL),
(214, 'Kids Backpacks', 213, 1, '2018-09-26 07:54:54', NULL),
(215, 'Kids Wallets', 213, 1, '2018-09-26 07:55:12', NULL),
(216, 'Kids Laptops Bags', 213, 1, '2018-09-26 07:55:38', NULL),
(217, 'Kids Belts', 213, 1, '2018-09-26 07:55:58', NULL),
(218, 'Kids Watches', 140, 1, '2018-09-26 07:56:31', NULL),
(219, 'Kids Fastrack', 218, 1, '2018-09-26 07:56:49', NULL),
(220, 'Kids Casio', 218, 1, '2018-09-26 07:57:05', NULL),
(221, 'Kids Titan', 218, 1, '2018-09-26 07:57:24', NULL),
(222, 'Kids Maxima', 218, 1, '2018-09-26 07:57:40', NULL),
(223, 'Kids Footwear', 140, 1, '2018-09-26 07:57:57', NULL),
(224, 'Kids Casual', 223, 1, '2018-09-26 07:58:16', NULL),
(225, 'Kids Sports', 223, 1, '2018-09-26 07:58:35', NULL),
(226, 'Kids Formal', 223, 1, '2018-09-26 07:58:52', NULL),
(227, 'Kids Sandals', 223, 1, '2018-09-26 07:59:10', NULL),
(228, 'Kids Computer', 140, 1, '2018-09-26 07:59:28', NULL),
(229, 'Kids External Hard Disk', 228, 1, '2018-09-26 07:59:45', NULL),
(230, 'Kids Pendrives', 228, 1, '2018-09-26 08:00:02', NULL),
(231, 'Kids Headphones', 228, 1, '2018-09-26 08:00:18', NULL),
(232, 'Kids PC Components', 228, 1, '2018-09-26 08:00:37', NULL),
(233, 'Kids Appliances', 140, 1, '2018-09-26 08:00:53', NULL),
(234, 'Kids Vaccum Cleaners', 233, 1, '2018-09-26 08:01:09', NULL),
(235, 'Kids Indoor Lighting', 233, 1, '2018-09-26 08:01:26', NULL),
(236, 'Kids Kitchen Tools', 233, 1, '2018-09-26 08:01:43', NULL),
(237, 'Kids Water Purifier', 233, 1, '2018-09-26 08:02:06', NULL),
(238, 'Accessories Sunglasses', 141, 1, '2018-09-26 08:03:29', NULL),
(239, 'Accessories Over-Sized', 238, 1, '2018-09-26 08:04:13', NULL),
(240, 'Accessories Wayfarer', 238, 1, '2018-09-26 08:04:37', NULL),
(241, 'Accessories Premium Brands', 238, 1, '2018-09-26 08:04:54', NULL),
(242, 'Accessories UV Glass', 238, 1, '2018-09-26 08:05:19', NULL),
(243, 'Accessories Colores', 238, 1, '2018-09-26 08:06:28', NULL),
(244, 'Accessories Watches', 141, 1, '2018-09-26 08:06:49', NULL),
(245, 'Accessories Fastrack', 244, 1, '2018-09-26 08:07:11', NULL),
(246, 'Accessories Timex', 244, 1, '2018-09-26 08:07:29', NULL),
(247, 'Accessories Titan', 244, 1, '2018-09-26 08:07:49', NULL),
(248, 'Accessories Fossil', 244, 1, '2018-09-26 08:08:06', NULL),
(249, 'Accessories Casio', 244, 1, '2018-09-26 08:08:26', NULL),
(250, 'Accessories Bags & Wallets', 141, 1, '2018-09-26 08:08:44', NULL),
(251, 'Accessories Handbags', 250, 1, '2018-09-26 08:09:05', NULL),
(252, 'Accessories Sling Bags', 250, 1, '2018-09-26 08:09:30', NULL),
(253, 'Accessories Wallets & Belts', 250, 1, '2018-09-26 08:09:52', NULL),
(254, 'Accessories Totes', 250, 1, '2018-09-26 08:10:14', NULL),
(255, 'Accessories Travel Bags', 250, 1, '2018-09-26 08:10:32', NULL),
(256, 'Accessories Western Wear', 141, 1, '2018-09-26 08:10:49', NULL),
(257, 'Accessories Jeans', 256, 1, '2018-09-26 08:11:08', NULL),
(258, 'Accessories Polos & T-Shirts', 256, 1, '2018-09-26 08:11:58', NULL),
(259, 'Accessories Shirts Tops', 256, 1, '2018-09-26 08:12:18', NULL),
(260, 'Accessories Gymwear', 256, 1, '2018-09-26 08:12:35', NULL),
(261, 'Accessories Sleep Wear', 256, 1, '2018-09-26 08:12:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_tag` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `color_tag`, `status`) VALUES
(7, 'Yellow', '1538399755_Yellow.png', 1),
(9, 'green', '1538399771_Green.png', 1),
(10, 'lightBlue', '1538399787_LightBlue.png', 1),
(11, 'blue', '1538399803_Blue.png', 1),
(12, 'Red', '1538399817_RED.png', 1),
(13, 'Pink', '1538399830_Pink.png', 1),
(14, 'Purple', '1538407112_Vaeolet.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `country_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People\'s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People\'s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'SS', 'South Sudan'),
(203, 'ES', 'Spain'),
(204, 'LK', 'Sri Lanka'),
(205, 'SH', 'St. Helena'),
(206, 'PM', 'St. Pierre and Miquelon'),
(207, 'SD', 'Sudan'),
(208, 'SR', 'Suriname'),
(209, 'SJ', 'Svalbard and Jan Mayen Islands'),
(210, 'SZ', 'Swaziland'),
(211, 'SE', 'Sweden'),
(212, 'CH', 'Switzerland'),
(213, 'SY', 'Syrian Arab Republic'),
(214, 'TW', 'Taiwan'),
(215, 'TJ', 'Tajikistan'),
(216, 'TZ', 'Tanzania, United Republic of'),
(217, 'TH', 'Thailand'),
(218, 'TG', 'Togo'),
(219, 'TK', 'Tokelau'),
(220, 'TO', 'Tonga'),
(221, 'TT', 'Trinidad and Tobago'),
(222, 'TN', 'Tunisia'),
(223, 'TR', 'Turkey'),
(224, 'TM', 'Turkmenistan'),
(225, 'TC', 'Turks and Caicos Islands'),
(226, 'TV', 'Tuvalu'),
(227, 'UG', 'Uganda'),
(228, 'UA', 'Ukraine'),
(229, 'AE', 'United Arab Emirates'),
(230, 'GB', 'United Kingdom'),
(231, 'US', 'United States'),
(232, 'UM', 'United States minor outlying islands'),
(233, 'UY', 'Uruguay'),
(234, 'UZ', 'Uzbekistan'),
(235, 'VU', 'Vanuatu'),
(236, 'VA', 'Vatican City State'),
(237, 'VE', 'Venezuela'),
(238, 'VN', 'Vietnam'),
(239, 'VG', 'Virgin Islands (British)'),
(240, 'VI', 'Virgin Islands (U.S.)'),
(241, 'WF', 'Wallis and Futuna Islands'),
(242, 'EH', 'Western Sahara'),
(243, 'YE', 'Yemen'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `count_down`
--

CREATE TABLE `count_down` (
  `count_id` int(11) NOT NULL,
  `count_name` varchar(255) NOT NULL,
  `count_down` varchar(30) NOT NULL,
  `count_image` varchar(255) NOT NULL,
  `count_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `count_down`
--

INSERT INTO `count_down` (`count_id`, `count_name`, `count_down`, `count_image`, `count_status`) VALUES
(1, '', '50', '1545301432_FB_IMG_1513673177922.jpg', 1),
(3, '', '80', '1545280431__DSC0864.jpg', 1),
(4, 'Test', 'mar 5, 2019 15:37:25', '1545320177_img-3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `cust_images` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `email`, `gender`, `address`, `cust_images`, `password`, `status`, `create_at`, `updated_at`) VALUES
(2, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', NULL, 'Dhaka', '1551753513L3Taupu.jpg', 'e10adc3949ba59abbe56e057f20f883e', 1, '2018-10-05 12:33:41', '2019-03-05 02:38:33'),
(3, 'liton', '01787667262', 'liton@xyz.com', NULL, 'Barishal', '', 'e10adc3949ba59abbe56e057f20f883e', 1, '2018-10-05 12:34:32', '2018-11-01 17:22:54'),
(4, 'Aupu Chowdhury', '8801787667262', 'aupuchowdhury@live.com', 'Male', 'Dhaka-1212', '1550552040L3TAupu.jpg', 'e10adc3949ba59abbe56e057f20f883e', 1, '2018-10-11 03:26:05', '2019-02-19 04:54:00'),
(6, 'Pagla Dashu', '123456789', 'pagla@mainka.com', 'female', 'Sylhet, Mainka bazar', '', '39ddd2ba4bc4a6d439de00b21ccc3494', 0, '2019-01-02 12:29:50', NULL),
(7, 'Sadman', '01672674422', 'aaa@captcha.com', 'female', 'dddd', '', '39ddd2ba4bc4a6d439de00b21ccc3494', 0, '2019-03-06 04:50:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deleted_product`
--

CREATE TABLE `deleted_product` (
  `id` int(15) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_description` text CHARACTER SET utf8 NOT NULL,
  `brand_id` int(15) NOT NULL,
  `category_id` int(15) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `product_code` varchar(30) CHARACTER SET utf8 NOT NULL,
  `menufecture_counrty` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(15) NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feature_product` tinyint(1) NOT NULL DEFAULT '0',
  `trending_product` tinyint(1) NOT NULL DEFAULT '0',
  `posted_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `qrcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted_product`
--

INSERT INTO `deleted_product` (`id`, `product_name`, `product_description`, `brand_id`, `category_id`, `color`, `size`, `product_code`, `menufecture_counrty`, `price`, `discount`, `quantity`, `product_image`, `status`, `feature_product`, `trending_product`, `posted_by`, `created_at`, `updated_at`, `updated_by`, `qrcode`) VALUES
(44, 'Delete For Ever Test Two', '<p>Delete For Ever Test Two</p>\r\n', 19, 177, 'null', 'null', 'Delete For Ever Test Two', '18', '5585', '0.00', 8, '1555592861_generous.jpg', 1, 1, 0, 1, '2019-04-18 13:07:41', '2019-04-18 13:11:02', 1, 'qr_1555592861.png'),
(48, 'Test Test Test', '<p>Test Test Test</p>\r\n', 9, 177, '[\"Red\",\"Pink\"]', '[\"XL\",\"L\",\"M\"]', 'g5fdb5fs4', '5', '50000', '2.00', 2, '1554347662_0084206_valentines-womens-t-shirt-by-swapons-world-sw3261t_300.jpeg', 1, 1, 0, 24, '2019-04-04 03:14:22', '2019-04-04 03:31:06', 22, 'qr_1554347662.png'),
(50, 'Another Test', '<p>Another Test</p>\r\n', 13, 177, 'null', 'null', 'g5445fh4fshs', '8', '6000', '0.00', 5, '1554348311_Autumn-New-Fashion-Clothes-Women-T-shirt-Korean-Style-Patchwork-Ladies-T-shirt-Casual-Loose-Long.jpg_640x640.jpg', 1, 1, 0, 22, '2019-04-04 03:25:11', '2019-04-04 03:32:01', 24, 'qr_1554348311.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(20) NOT NULL,
  `msg_head` varchar(255) NOT NULL,
  `msg_body` varchar(255) NOT NULL,
  `msg_link` varchar(255) NOT NULL,
  `msg_tag` varchar(255) NOT NULL,
  `msg_foot` varchar(255) NOT NULL,
  `msg_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `msg_head`, `msg_body`, `msg_link`, `msg_tag`, `msg_foot`, `msg_status`, `created_at`, `updated_at`) VALUES
(1, 'Message Test Head 1', '$<h1><span class=\"marker\"><strong>Habi Jabi</strong></span></h1>\r\n', 'http://localhost/NOOR_Enterprise/index.php', '1549209197_msg_tag-1.jpg', 'Message Test Foot 1', 1, '2019-02-02 04:03:37', '2019-02-03 15:53:17'),
(2, 'Message Test Head 2', '$<p>Message Test Head 2</p>\r\n', 'http://localhost/NOOR_Enterprise/product-detail.php?id=MTI=', '1549209315_msg_tag-2.jpg', 'Message Test Foot 2', 1, '2019-02-02 04:33:27', '2019-02-03 15:55:15'),
(3, 'Message Test Head 3', '$<p>Message Test Head 3</p>\r\n', 'http://localhost/NOOR_Enterprise/category.php?id=MTc3', '1549209359_msg_tag-3.jpg', 'Message Test Head 3', 0, '2019-02-02 04:34:01', '2019-02-03 15:55:59'),
(4, 'Message Test Head 4', '$<p>Message Test Head 4</p>\r\n', 'http://localhost/NOOR_Enterprise/index.php', '1549209409_msg_tag-4.jpg', 'Message Test Head 4', 1, '2019-02-02 04:34:22', '2019-02-03 15:56:49'),
(5, 'Message Test Head 6', '$<p>$</p>\r\n\r\n<h1><span class=\"marker\"><strong>Message Test Head 6</strong></span></h1>\r\n', 'http://localhost/NOOR_Enterprise/product-detail.php?id=MTI=', '1549209444_msg_tag-5.jpg', 'Message Test Head 6', 1, '2019-02-02 04:34:45', '2019-02-03 15:57:24'),
(6, 'Message Test Head 6', '<p>Message Test Head 6</p>\r\n', 'http://localhost/NOOR_Enterprise/category.php?id=MTc3', '1549207203_msg_tag-6.jpg', 'Message Test Head 6', 1, '2019-02-03 15:20:03', NULL),
(7, 'Message Test Head 7', '<h1><span class=\"marker\"><strong>Message Test Head 7</strong></span></h1>\r\n', 'http://localhost/NOOR_Enterprise/index.php', '1549337370_msg_tag-7.jpg', 'Message Test Head 7', 1, '2019-02-05 03:29:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ship_name` varchar(255) NOT NULL,
  `ship_phone` varchar(30) NOT NULL,
  `ship_email` varchar(255) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `shiping_method` varchar(255) NOT NULL,
  `shiping_charge` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=unpaid, 1=paid',
  `order_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=pending, 1=processing, 2=shipping, 3=complete, 4=cancle',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `customer_id`, `total_amount`, `shiping_method`, `shiping_charge`, `payment_method`, `payment_status`, `order_status`, `created_at`, `updated_at`) VALUES
(72, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '4650.00', 'All Over Bangladesh', '150.00', 'COD', 0, 0, '2018-11-07 04:25:21', NULL),
(73, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '44150.00', 'In Dhaka City', '50.00', 'SSLCOMMERZ', 1, 1, '2018-11-07 04:26:12', '2018-11-07 04:26:19'),
(74, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '17310.00', 'All Over Bangladesh', '150.00', 'SSLCOMMERZ', 1, 1, '2018-11-11 04:46:07', '2018-11-11 04:46:20'),
(75, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '5351.00', 'In Dhaka City', '50.00', 'SSLCOMMERZ', 1, 1, '2018-11-29 04:02:04', '2018-11-29 04:02:21'),
(76, 'Noor Chowdhury', '8801787667262', 'noor.web.journy@gmail.com', 'dhaka-1212', 4, '4418.00', 'All Over Bangladesh', '150.00', 'SSLCOMMERZ', 0, 0, '2019-01-08 12:49:29', '2019-01-24 03:37:46'),
(77, 'aupu', '01787667262', 'aupu@xyz.com', 'dhaka', 4, '4318.00', 'In Dhaka City', '50.00', 'SSLCOMMERZ', 0, 0, '2019-01-08 12:50:21', NULL),
(78, 'aupu', '01787667262', 'aupu@xyz.com', 'dhaka', 4, '4268.00', '', '50.00', 'SSLCOMMERZ', 0, 0, '2019-01-08 12:52:58', NULL),
(79, 'aupu', '01787667262', 'aupu@xyz.com', 'dhaka', 4, '4318.00', 'In Dhaka City', '50.00', 'SSLCOMMERZ', 0, 0, '2019-01-08 12:54:30', NULL),
(80, 'aupu', '01787667262', 'aupu@xyz.com', 'dhaka', 4, '4318.00', 'In Dhaka City', '50.00', 'SSLCOMMERZ', 1, 1, '2019-01-08 12:58:32', '2019-01-08 12:59:07'),
(81, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '14646.00', '', '50.00', 'COD', 0, 0, '2019-01-20 14:30:04', NULL),
(82, 'Ali Noor', '8801787667262', 'aupuchowdhhhury@gmail.com', 'Dhaka', 2, '3684.00', 'All Over Bangladesh', '150.00', 'SSLCOMMERZ', 1, 1, '2019-01-20 14:30:49', '2019-01-20 14:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(74, 72, 13, 2, '2250.00'),
(75, 73, 16, 3, '14700.00'),
(76, 74, 17, 2, '2000.00'),
(77, 74, 21, 4, '2450.00'),
(78, 74, 20, 2, '1680.00'),
(79, 75, 10, 3, '1767.00'),
(80, 76, 22, 2, '2134.00'),
(81, 77, 22, 2, '2134.00'),
(82, 78, 22, 2, '2134.00'),
(83, 79, 22, 2, '2134.00'),
(84, 80, 22, 2, '2134.00'),
(85, 81, 11, 3, '3115.00'),
(86, 81, 10, 3, '1767.00'),
(87, 82, 10, 2, '1767.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(15) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `product_description` text CHARACTER SET utf8 NOT NULL,
  `brand_id` int(15) NOT NULL,
  `category_id` int(15) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `product_code` varchar(30) CHARACTER SET utf8 NOT NULL,
  `menufecture_counrty` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int(15) NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `feature_product` tinyint(1) NOT NULL DEFAULT '0',
  `trending_product` tinyint(1) NOT NULL DEFAULT '0',
  `posted_by` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL DEFAULT '0',
  `qrcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_description`, `brand_id`, `category_id`, `color`, `size`, `product_code`, `menufecture_counrty`, `price`, `discount`, `quantity`, `product_image`, `status`, `feature_product`, `trending_product`, `posted_by`, `created_at`, `updated_at`, `updated_by`, `qrcode`) VALUES
(5, 'Hadsome Guy', '<p>Hadsome Guy</p>\r\n', 9, 171, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\",\"Vaiolet\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\",\"XS\"]', 'Summer Trands', '83', '2300', '13.00', 14, '1537978936_img-9.jpg', 1, 0, 1, 0, '2018-09-26 16:22:16', '2018-11-05 15:12:28', 0, ''),
(6, 'Macho Man', '<p>Macho Man</p>\r\n', 16, 171, '[\"Yellow\",\"lightBlue\",\"blue\"]', '[\"XL\",\"L\",\"M\",\"S\"]', 'Summer Trands', '89', '2700', '5.00', 24, '1537979054_img-8.jpg', 1, 0, 1, 0, '2018-09-26 16:24:14', NULL, 0, ''),
(7, 'Real Hero', '<p>Real Hero</p>\r\n', 12, 171, '[\"green\",\"blue\",\"Red\"]', '[\"XL\",\"L\",\"M\",\"XS\"]', 'Summer Trands', '57', '3300', '13.00', 21, '1537979231_img-1.jpg', 1, 0, 1, 0, '2018-09-26 16:27:11', '2018-11-15 03:34:08', 0, ''),
(9, 'Royel King', '<p>Royel King</p>\r\n', 15, 171, '[\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\"]', '[\"XXL\",\"XL\",\"L\",\"M\"]', 'Summer Trands', '151', '2700', '0.00', 55, '1537979546_img-12.jpg', 1, 0, 1, 0, '2018-09-26 16:32:26', NULL, 0, ''),
(10, 'Prity Grils', '<p>Prity Grils</p>\r\n', 13, 177, '[\"blue\",\"Red\",\"Pink\"]', '[\"L\",\"M\",\"S\",\"XS\"]', 'Summer Trands', '83', '1900', '7.00', 70, '1537979707_img-3.jpg', 1, 1, 0, 24, '2018-09-26 16:35:07', '2019-04-04 04:05:37', 0, 'qr_1554350737.png'),
(11, 'Charming Bird', '<p>Charming Bird</p>\r\n', 21, 177, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\",\"Vaiolet\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\",\"XS\"]', 'Summer Trands', '70', '3500', '11.00', 69, '1537979854_img-1.jpg', 1, 1, 0, 0, '2018-09-26 16:37:35', NULL, 0, ''),
(12, 'Lovey Dovey Girls', '<p>Lovey Dovey Girls</p>\r\n', 18, 177, '[\"Red\",\"Pink\",\"Vaiolet\"]', '[\"L\",\"M\",\"S\"]', 'Summer Trands', '73', '2200', '0.00', 89, '1537979990_img-14.jpg', 1, 1, 0, 0, '2018-09-26 16:39:50', NULL, 0, ''),
(13, 'Prity Grils', '<p>Prity Grils</p>\r\n', 10, 177, '[\"Yellow\",\"green\",\"lightBlue\",\"Pink\",\"Vaiolet\"]', '[\"L\",\"M\",\"S\"]', 'Summer Trands', '67', '2500', '10.00', 44, '1537980097_img-4.jpg', 1, 1, 0, 0, '2018-09-26 16:41:37', NULL, 0, ''),
(14, 'Tweety pie girls', '<p>Tweety pie girls</p>\r\n', 19, 177, '[\"lightBlue\",\"blue\",\"Red\"]', '[\"XL\",\"L\",\"M\",\"S\"]', 'Summer Trands', '78', '2900', '17.00', 35, '1537980274_img-7.jpg', 1, 1, 0, 0, '2018-09-26 16:44:34', NULL, 0, ''),
(16, 'Royal Man', '<p>Royal Man</p>\r\n', 12, 143, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\",\"Vaiolet\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\",\"XS\"]', 'Winter Trands', '231', '15000', '2.00', 7, '1538306619_1.jpg', 1, 1, 0, 0, '2018-09-30 11:23:39', '2018-09-30 13:38:49', 0, ''),
(17, 'Supper Hero', '<p><strong>Supper Hero</strong></p>\r\n', 13, 171, '[\"green\",\"lightBlue\",\"blue\"]', '[\"L\",\"M\",\"S\"]', '55RR71', '36', '2000', '0.00', 0, '1541094926_img-4.jpg', 1, 0, 1, 0, '2018-11-01 17:55:26', '2018-11-07 04:13:03', 0, ''),
(18, 'Spider Man', '<p><strong>Spider Man</strong></p>\r\n', 16, 171, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\",\"Purple\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\",\"XS\"]', 'Spider', '66', '1800', '10.00', 2, '1541100224_0.jpg', 1, 0, 1, 0, '2018-11-01 19:23:44', NULL, 0, ''),
(19, 'Captain America', '<p>Captain America</p>\r\n', 19, 171, '[\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\"]', 'Captain', '104', '1200', '13.00', 2, '1541100369_00.jpg', 1, 0, 1, 0, '2018-11-01 19:26:09', NULL, 0, ''),
(20, 'IRON MAN', '<p>IRON MAN</p>\r\n', 17, 171, '[\"Yellow\",\"green\",\"lightBlue\"]', '[\"XXL\",\"XL\",\"L\"]', 'IRON', '34', '2100', '20.00', 2, '1541100478_000.jpg', 1, 0, 1, 0, '2018-11-01 19:27:58', NULL, 0, ''),
(21, 'Supper Women', '<p>Supper Women</p>\r\n', 11, 177, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\",\"Purple\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\"]', 'Supper', '231', '2500', '2.00', 0, '1541100717_0.jpg', 1, 1, 0, 0, '2018-11-01 19:31:57', '2018-11-05 15:22:47', 0, ''),
(22, 'Naughty girls', '<p>Naughty girls</p>\r\n', 10, 177, '[\"Yellow\",\"green\",\"lightBlue\",\"blue\",\"Red\",\"Pink\"]', '[\"XXL\",\"XL\",\"L\",\"M\",\"S\",\"XS\"]', 'Naughty', '61', '2200', '3.00', 3, '1541100845_00.jpg', 1, 1, 0, 0, '2018-11-01 19:34:05', NULL, 0, ''),
(23, 'Funny Boy', '<p>Funny Boy</p>', 9, 171, '[\"Yellow\",\"green\"]', '[\"M\",\"S\",\"XS\"]', 'My Trands', '47', '2000', '7.00', 3, 'funnyboy.jpg', 1, 0, 1, 0, '2018-12-17 05:52:20', NULL, 0, ''),
(24, 'Funny Girl', '<p>Funny Girl</p>', 13, 177, '[\"blue\",\"Red\",\"Pink\"]', '[\"XXL\",\"XL\"]', 'My Trands', '88', '2200', '13.00', 5, 'funnygirl.jpg', 1, 1, 0, 0, '2018-12-17 05:52:20', NULL, 0, ''),
(25, 'Sarees Trands', '<p>Saree-111111111111111</p>\r\n', 9, 174, '[\"Yellow\"]', '[\"XXL\"]', '456456', '1', '5000', '1.00', 5, '1550805233_1.png', 1, 1, 0, 0, '2019-02-22 03:13:53', NULL, 0, ''),
(26, 'Sarees Trands', '<p>Saree-2222222222222</p>\r\n', 11, 174, '[\"green\"]', '[\"XL\"]', 'fjfjfgjj', '23', '7000', '2.00', 7, '1550805381_2.png', 1, 1, 0, 0, '2019-02-22 03:16:21', NULL, 0, ''),
(27, 'Sarees Trands', '<p>Saree--33333333</p>\r\n', 16, 174, '[\"lightBlue\"]', '[\"L\"]', 'ydfjdu2646', '16', '10000', '3.00', 6, '1550805458_3.png', 1, 1, 0, 0, '2019-02-22 03:17:38', NULL, 0, ''),
(28, 'Sarees Trands', '<p>saree-444</p>\r\n', 13, 174, '[\"blue\"]', '[\"M\"]', 'dbdgdfdf6868', '18', '5000', '1.00', 3, '1550805556_4.png', 1, 1, 0, 0, '2019-02-22 03:19:16', NULL, 0, ''),
(29, 'Sarees Trands', '<p>saree--5555</p>\r\n', 18, 174, '[\"Red\"]', '[\"S\"]', 'hdb4eb34tsg57yrd', '29', '8000', '5.00', 4, '1550805627_5.png', 1, 1, 0, 0, '2019-02-22 03:20:27', NULL, 0, ''),
(30, 'Sarees Trands', '<p>saree-6666666666</p>\r\n', 18, 174, '[\"Pink\"]', '[\"XS\"]', 'r453dtygncnc', '2', '2700', '0.00', 12, '1550805712_6.png', 1, 1, 0, 0, '2019-02-22 03:21:52', NULL, 0, ''),
(31, 'makeup-1', '<p>makeup-1</p>\r\n', 17, 185, '[\"Yellow\"]', '[\"XXL\"]', 'dft55te4e', '5', '700', '3.00', 50, '1550805885_1.png', 1, 1, 0, 0, '2019-02-22 03:24:45', NULL, 0, ''),
(32, 'makeup-2', '<p>makeup-2</p>\r\n', 17, 185, '[\"green\"]', '[\"XL\"]', 'fvdbsd', '28', '500', '0.00', 9, '1550805973_2.png', 1, 1, 0, 0, '2019-02-22 03:26:13', NULL, 0, ''),
(33, 'makeup-3', '<p>makeup-3</p>\r\n', 18, 185, '[\"lightBlue\"]', '[\"L\"]', 'hsrteteq', '39', '400', '2.00', 70, '1550806047_3.png', 1, 1, 0, 0, '2019-02-22 03:27:27', NULL, 0, ''),
(34, 'makeup-4', '<p>makeup-4</p>\r\n', 12, 185, '[\"blue\"]', '[\"M\"]', 'fs5s5syd', '5', '600', '1.00', 12, '1550806133_4.png', 1, 1, 0, 0, '2019-02-22 03:28:53', NULL, 0, ''),
(35, 'makeup-5', '<p>makeup-5</p>\r\n', 19, 185, '[\"Red\"]', '[\"S\"]', 'f444446et7', '23', '900', '5.00', 40, '1550806214_5.png', 1, 1, 0, 0, '2019-02-22 03:30:14', NULL, 0, ''),
(36, 'makeup-6', '<p>makeup-6</p>\r\n', 18, 185, '[\"Pink\"]', '[\"XS\"]', 'dsfe34r5e56g', '37', '620', '1.00', 30, '1550806289_6.png', 1, 1, 0, 0, '2019-02-22 03:31:29', NULL, 0, ''),
(37, 'RED HEEL', '<p>RED HEEL</p>\r\n', 11, 198, '[\"Red\"]', '[\"M\"]', 'cft6586uyg', '29', '2200', '0.00', 10, '1551406418_1.png', 1, 1, 0, 0, '2019-03-01 02:13:38', NULL, 0, ''),
(38, 'Long heel', '<p>Long heel</p>\r\n', 17, 198, '[\"blue\"]', '[\"XL\"]', 'jh54hr5fr', '47', '5700', '2.00', 20, '1551406543_2.png', 1, 1, 0, 0, '2019-03-01 02:15:43', NULL, 0, ''),
(39, 'Nice Heel', '<p>Nice Heel</p>\r\n', 13, 198, '[\"lightBlue\"]', '[\"L\"]', 'fhfuy678gyu', '33', '2300', '0.00', 20, '1551406666_3.png', 1, 1, 0, 0, '2019-03-01 02:17:46', NULL, 0, ''),
(40, 'Pencil Heel', '<p>Pencil Heel</p>\r\n', 19, 198, '[\"blue\"]', '[\"L\"]', 'hdged56g5', '6', '2600', '1.00', 5, '1551406794_4.png', 1, 1, 0, 0, '2019-03-01 02:19:54', NULL, 0, ''),
(41, 'Stylish Heel', '<p>Stylish Heel</p>\r\n', 13, 198, '[\"lightBlue\"]', '[\"XL\"]', 'fbu75hj', '18', '6700', '5.00', 5, '1551406919_5.png', 1, 1, 0, 0, '2019-03-01 02:21:59', NULL, 0, ''),
(42, 'Black Heel', '<p>Black Heel</p>\r\n', 15, 198, '[\"blue\"]', '[\"M\"]', 'cbccvtrf656yh', '38', '5700', '3.00', 50, '1551407030_6.png', 1, 1, 0, 0, '2019-03-01 02:23:50', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `images`) VALUES
(1, 16, '1538306619_2.jpg'),
(2, 16, '1538306619_3.jpg'),
(3, 16, '1538306620_4.jpg'),
(4, 16, '1538306620_5.jpg'),
(5, 16, '1538306620_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review_ratting`
--

CREATE TABLE `review_ratting` (
  `r_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `ratting` int(30) NOT NULL,
  `review` text NOT NULL,
  `review_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review_ratting`
--

INSERT INTO `review_ratting` (`r_id`, `customer_id`, `product_id`, `ratting`, `review`, `review_status`, `created_at`) VALUES
(1, 2, 11, 2, 'supper product ', 1, '2018-12-03 02:58:01'),
(2, 2, 11, 5, 'nice product', 1, '2018-12-03 02:58:01'),
(3, 2, 10, 2, 'good', 1, '2018-12-03 02:58:01'),
(4, 2, 13, 3, 'nice', 1, '2018-12-03 02:58:01'),
(5, 2, 6, 3, 'bcxbcb', 1, '2018-12-03 02:58:01'),
(8, 2, 10, 2, 'supper dupper item', 1, '2018-12-03 02:58:01'),
(9, 2, 9, 4, 'nice shirt', 1, '2018-12-03 02:58:01'),
(10, 2, 21, 4, 'nice t-shirt', 1, '2018-12-03 02:58:01'),
(11, 2, 6, 2, 'nice look', 1, '2018-12-03 02:58:01'),
(12, 2, 11, 5, 'super model', 1, '2018-12-03 02:58:01'),
(13, 2, 12, 4, 'nice print', 1, '2018-12-03 05:31:33'),
(16, 4, 10, 5, 'outstanding', 1, '2018-12-12 04:40:52'),
(17, 2, 10, 4, 'outstanding', 1, '2018-12-12 04:42:38'),
(18, 3, 10, 3, 'good product', 1, '2018-12-23 03:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `send_message`
--

CREATE TABLE `send_message` (
  `id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `send_status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `send_message`
--

INSERT INTO `send_message` (`id`, `message_id`, `customer_id`, `send_status`, `created_at`, `updated_at`) VALUES
(48, 3, 2, 1, '2019-02-18 01:45:45', '2019-02-18 02:00:07'),
(49, 3, 3, 1, '2019-02-18 01:45:45', '2019-02-18 02:00:12'),
(50, 3, 4, 1, '2019-02-18 01:45:45', '2019-02-18 02:00:18'),
(51, 3, 6, 1, '2019-02-18 01:45:45', '2019-02-18 02:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` tinyint(1) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `site_phone` varchar(30) NOT NULL,
  `site_email` varchar(255) NOT NULL,
  `site_address` varchar(255) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_phone`, `site_email`, `site_address`, `meta_description`) VALUES
(1, 'ShoppingKorun', '+8801787667262', 'aupuchowdhury@live.com', 'Heaven in earth, House#08, Road#03, Middle Badda, Adorshonogor, Dhaka-1212', 'Fabulous is a creative, clean, fully responsive, powerful and multipurpose HTML Template with latest website trends. Perfect to all type of fashion stores.');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(20) NOT NULL,
  `size_name` varchar(255) DEFAULT NULL,
  `size_tag` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`, `size_tag`, `status`) VALUES
(1, 'XXL', '1538399626_XXL.png', 1),
(2, 'XL', '1538399661_XL.png', 1),
(5, 'L', '1538399684_L.png', 1),
(6, 'M', '1538399701_M.png', 1),
(7, 'S', '1538399719_S.png', 1),
(8, 'XS', '1538399736_XS.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(30) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_header` varchar(255) NOT NULL,
  `slider_description` varchar(255) NOT NULL,
  `slider_link` varchar(255) NOT NULL,
  `slider_url` varchar(255) NOT NULL,
  `slider_status` tinyint(1) NOT NULL DEFAULT '0',
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_name`, `slider_header`, `slider_description`, `slider_link`, `slider_url`, `slider_status`, `slider_image`) VALUES
(5, 'Top Rated Mens wear', 'Summer Trands', '<p>Noor Fashoin Wear/Summer Trands</p>\r\n', 'Buy Now ', 'https://www.daraz.com.bd/mens-fashion/', 1, '1537191256__DSC0140.jpg'),
(6, 'Top Rated Winter wear', 'Winter Trands', '<p>Top Rated Winter wear/Winter Trands</p>\r\n', 'Shop Now', 'https://www.daraz.com.bd/mens-fashion/bata/', 1, '1537191547_FB_IMG_1513673177922.jpg'),
(7, 'Top Rated Brands', 'EID Fashoin', '<p>Top Rated Brands/EID Fashoin</p>\r\n', 'Join Us', 'https://pages.daraz.com.bd/wow/i/bd/app-campaign/mobile-apps?spm=a2a0e.11779145.top.dbr1.1a851b94Pr6VOg&hybrid=1&scm=1003.4.icms-zebra-100031732-2885620.OTHER_5538974929_2535093', 1, '1537191767_1.jpg'),
(8, 'Deshi Fashion Wear', 'Nobo borsho Fashion', '<p>Deshi Fashion Wear/Nobo borsho Fashion</p>\r\n', 'Order Now', 'https://www.daraz.com.bd/womens-clothing/?spm=a2a0e.11821880.cate_8.1.24e76606PcP9OU', 1, '1537193123_10580044_10204576153786360_1750019451703735294_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_email`
--

CREATE TABLE `subscribe_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe_email`
--

INSERT INTO `subscribe_email` (`id`, `email`, `created_at`) VALUES
(1, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:45:51'),
(2, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:45:53'),
(3, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:46:57'),
(4, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:46:58'),
(5, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:48:44'),
(6, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:48:46'),
(7, 'aupuchowdhhhury@gmail.com', '2018-12-05 13:53:29'),
(8, 'aupuchowdhhhuryy@gmail.com', '2018-12-05 14:16:25'),
(9, 'maliha@gmail.com', '2018-12-05 14:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `emp_id` varchar(100) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(190) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `emp_id`, `images`, `name`, `email`, `password`, `phone`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'admin', 'admin@nooren.com', 'e10adc3949ba59abbe56e057f20f883e', '01787667262', 0, 1, '2018-08-08 15:11:17', NULL),
(5, NULL, '1537010398_archetypal-male-fa_3249635c.jpg', 'Apurbo', 'apurbo@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 1, 0, '2018-08-16 04:12:44', '2018-09-15 11:19:58'),
(6, NULL, '1537010467_Ahsan-Khan-1.jpg', 'Auruna', 'aunu@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 2, 0, '2018-08-16 04:13:53', '2018-09-15 11:21:07'),
(9, 'N00R-2018-9', NULL, 'aupu', 'aupuchowdhhhury@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 0, 0, '2018-08-20 01:53:05', '2018-08-20 01:53:05'),
(10, 'N00R-2018-10', '1537010498_12f532a7b653718df36e9c0770bb62ec.jpg', 'Liton', 'liton@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 1, 0, '2018-08-20 02:16:51', '2018-09-15 11:21:38'),
(15, 'N00R-2018-15', 'N00R-2018-15__DSC0140.jpg', 'sadman', 'sadman@abc.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 2, 0, '2018-08-20 04:55:10', '2018-08-20 04:55:10'),
(17, 'N00R-2018-17', 'N00R-2018-17_random-avatar1.jpg', 'Muhammad Ali Noor', 'aupuchowdhury@live.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 0, 0, '2018-08-20 18:03:55', '2018-08-20 18:03:55'),
(22, NULL, NULL, 'shahin', 'shahin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01787667262', 0, 1, '2018-08-31 12:26:53', NULL),
(24, NULL, NULL, 'alamin', 'alamin@link3.net', 'e10adc3949ba59abbe56e057f20f883e', '01787667262', 0, 1, '2018-08-31 12:28:25', NULL),
(27, 'N00R-2018-27', 'N00R-2018-27_random-avatar7.jpg', 'acc', 'acc@abc.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 1, 0, '2018-08-31 15:45:07', '2018-08-31 15:45:08'),
(28, 'N00R-2018-28', 'N00R-2018-28_random-avatar8.jpg', 'rrrrrr', 'rrrr@dfg.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 2, 1, '2018-08-31 15:50:31', '2018-08-31 18:17:45'),
(29, 'N00R-2018-29', 'N00R-2018-29_random-avatar6.jpg', 'fsgsgsdhs', 'bcnxcx@live.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 1, 1, '2018-08-31 15:54:49', '2018-08-31 17:40:17'),
(30, 'N00R-2018-30', 'N00R-2018-30_random-avatar1.jpg', 'test_update', 'fhdhdshshd@ffgd.com', 'e10adc3949ba59abbe56e057f20f883e', '+8801787667262', 2, 1, '2018-08-31 15:59:15', '2018-08-31 18:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wl_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wl_id`, `customer_id`, `product_id`) VALUES
(3, 2, 10),
(4, 2, 21),
(5, 3, 11),
(6, 2, 12),
(7, 2, 11),
(8, 2, 13),
(9, 2, 24),
(10, 2, 22),
(11, 2, 16),
(12, 2, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `count_down`
--
ALTER TABLE `count_down`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deleted_product`
--
ALTER TABLE `deleted_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`,`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `menufecture_counrty` (`menufecture_counrty`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`,`category_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `menufecture_counrty` (`menufecture_counrty`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_ratting`
--
ALTER TABLE `review_ratting`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `send_message`
--
ALTER TABLE `send_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `subscribe_email`
--
ALTER TABLE `subscribe_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `count_down`
--
ALTER TABLE `count_down`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deleted_product`
--
ALTER TABLE `deleted_product`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review_ratting`
--
ALTER TABLE `review_ratting`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `send_message`
--
ALTER TABLE `send_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribe_email`
--
ALTER TABLE `subscribe_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
