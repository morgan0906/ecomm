-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 213.171.200.101
-- Generation Time: Nov 25, 2021 at 12:35 PM
-- Server version: 5.6.51-log
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cart_price` decimal(10,2) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `options` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `quantity`, `cart_price`, `unique_id`, `options`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 45.00, '61659d760bc727.59494867', NULL, '2021-10-27 16:56:32', '2021-11-02 13:09:32', '2021-11-02 13:09:32'),
(2, 6, 2, 19.99, '61659d760bc727.59494867', NULL, '2021-10-27 17:03:54', '2021-11-02 13:09:30', '2021-11-02 13:09:30'),
(3, 5, 1, 56.29, '61659d760bc727.59494867', NULL, '2021-11-02 13:09:39', '2021-11-02 13:09:41', '2021-11-02 13:09:41'),
(4, 3, 1, 25.00, '61659d760bc727.59494867', NULL, '2021-11-02 13:09:44', '2021-11-02 13:10:47', '2021-11-02 13:10:47'),
(5, 2, 1, 45.00, '61659d760bc727.59494867', NULL, '2021-11-02 13:09:51', '2021-11-02 13:10:51', '2021-11-02 13:10:51'),
(6, 2, 2, 45.00, '61659d760bc727.59494867', NULL, '2021-11-02 13:09:53', '2021-11-02 13:23:57', '2021-11-02 13:23:57'),
(7, 5, 2, 56.29, '61659d760bc727.59494867', NULL, '2021-11-02 13:10:58', '2021-11-02 13:23:55', '2021-11-02 13:23:55'),
(8, 6, 1, 19.99, '618261abe0d999.56864194', NULL, '2021-11-03 10:17:25', '2021-11-03 10:17:25', NULL),
(9, 5, 2, 56.29, '618261c1ed5074.88428822', NULL, '2021-11-03 10:31:32', '2021-11-03 10:35:09', '2021-11-03 10:35:09'),
(10, 3, 1, 25.00, '618261c1ed5074.88428822', NULL, '2021-11-03 10:31:57', '2021-11-03 10:35:08', '2021-11-03 10:35:08'),
(11, 6, 1, 19.99, '618261c1ed5074.88428822', NULL, '2021-11-03 10:41:07', '2021-11-03 10:41:25', '2021-11-03 10:41:25'),
(12, 6, 1, 19.99, '618261c1ed5074.88428822', NULL, '2021-11-03 10:41:08', '2021-11-03 10:41:16', '2021-11-03 10:41:16'),
(13, 3, 1, 25.00, '618261c1ed5074.88428822', NULL, '2021-11-03 10:41:30', '2021-11-03 10:42:12', '2021-11-03 10:42:12'),
(14, 3, 1, 25.00, '618261c1ed5074.88428822', NULL, '2021-11-03 10:41:30', '2021-11-03 10:41:35', '2021-11-03 10:41:35'),
(15, 6, 1, 19.99, '618261c1ed5074.88428822', NULL, '2021-11-03 10:42:17', '2021-11-03 11:11:43', '2021-11-03 11:11:43'),
(16, 6, 4, 19.99, '618261c1ed5074.88428822', NULL, '2021-11-03 10:42:19', '2021-11-03 11:11:42', '2021-11-03 11:11:42'),
(17, 3, 1, 25.00, '61826e76f0b477.78749216', NULL, '2021-11-03 11:11:55', '2021-11-03 11:12:13', '2021-11-03 11:12:13'),
(18, 2, 3, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 11:12:47', '2021-11-03 11:15:02', '2021-11-03 11:15:02'),
(19, 5, 1, 56.29, '61826e76f0b477.78749216', NULL, '2021-11-03 11:15:48', '2021-11-03 11:16:02', '2021-11-03 11:16:02'),
(20, 5, 1, 56.29, '61826e76f0b477.78749216', NULL, '2021-11-03 11:15:59', '2021-11-03 11:19:18', '2021-11-03 11:19:18'),
(21, 2, 1, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 11:16:29', '2021-11-03 12:29:51', '2021-11-03 12:29:51'),
(22, 2, 1, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 11:17:20', '2021-11-03 11:19:23', '2021-11-03 11:19:23'),
(23, 5, 1, 56.29, '61826e76f0b477.78749216', NULL, '2021-11-03 11:18:19', '2021-11-03 11:18:33', '2021-11-03 11:18:33'),
(24, 2, 1, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 11:54:23', '2021-11-03 12:30:12', '2021-11-03 12:30:12'),
(25, 6, 4, 19.99, '61826e76f0b477.78749216', NULL, '2021-11-03 11:56:15', '2021-11-03 12:36:45', '2021-11-03 12:36:45'),
(26, 5, 1, 56.29, '61826e76f0b477.78749216', NULL, '2021-11-03 12:28:53', '2021-11-03 12:32:35', '2021-11-03 12:32:35'),
(27, 2, 2, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 12:31:09', '2021-11-03 12:36:54', '2021-11-03 12:36:54'),
(28, 4, 1, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-03 12:38:05', '2021-11-03 12:39:14', '2021-11-03 12:39:14'),
(29, 4, 1, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-03 12:40:57', '2021-11-03 12:41:19', '2021-11-03 12:41:19'),
(30, 4, 1, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-03 12:41:23', '2021-11-10 15:21:09', '2021-11-10 15:21:09'),
(31, 6, 1, 19.99, '61826e76f0b477.78749216', NULL, '2021-11-03 14:17:13', '2021-11-10 14:08:24', '2021-11-10 14:08:24'),
(32, 4, 1, 28.50, '61829e643ff777.64164683', NULL, '2021-11-03 14:37:24', '2021-11-03 16:58:41', '2021-11-03 16:58:41'),
(33, 4, 1, 28.50, '6182a005029ec4.55533467', NULL, '2021-11-03 14:43:36', '2021-11-03 14:54:18', '2021-11-03 14:54:18'),
(34, 4, 2, 28.50, '6182a005029ec4.55533467', NULL, '2021-11-03 14:54:33', '2021-11-03 14:54:33', NULL),
(35, 2, 1, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-03 15:00:12', '2021-11-03 15:07:49', '2021-11-03 15:07:49'),
(36, 3, 2, 25.00, '61826e76f0b477.78749216', NULL, '2021-11-03 15:08:35', '2021-11-10 15:21:07', '2021-11-10 15:21:07'),
(37, 3, 3, 25.00, '61829e643ff777.64164683', NULL, '2021-11-09 12:50:49', '2021-11-09 12:50:49', NULL),
(38, 5, 2, 56.29, '618bdbf8f1a485.69699577', NULL, '2021-11-10 14:49:33', '2021-11-10 14:49:33', NULL),
(39, 4, 4, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-10 14:49:54', '2021-11-10 15:21:10', '2021-11-10 15:21:10'),
(40, 4, 1, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-10 15:21:14', '2021-11-17 15:51:52', '2021-11-17 15:51:52'),
(41, 4, 5, 28.50, '61826e76f0b477.78749216', NULL, '2021-11-10 15:33:17', '2021-11-11 16:50:34', '2021-11-11 16:50:34'),
(42, 6, 4, 9.99, '61826e76f0b477.78749216', NULL, '2021-11-10 15:33:23', '2021-11-10 15:33:23', NULL),
(43, 5, 1, 56.29, '618d28764f5520.20452007', NULL, '2021-11-11 14:33:28', '2021-11-11 14:33:28', NULL),
(44, 6, 3, 10.99, '61826e76f0b477.78749216', NULL, '2021-11-11 15:16:19', '2021-11-11 16:35:11', '2021-11-11 16:35:11'),
(45, 2, 1, 45.00, '61826e76f0b477.78749216', NULL, '2021-11-11 17:10:17', '2021-11-15 15:18:53', '2021-11-15 15:18:53'),
(46, 2, 4, 45.00, '618fce80c1ce49.20743656', NULL, '2021-11-13 14:41:57', '2021-11-13 14:41:57', NULL),
(47, 5, 2, 56.29, '6195255c49a857.26884184', NULL, '2021-11-17 15:53:18', '2021-11-24 10:52:56', '2021-11-24 10:52:56'),
(48, 3, 1, 25.00, '6195255c49a857.26884184', NULL, '2021-11-17 16:11:42', '2021-11-24 10:53:00', '2021-11-24 10:53:00'),
(49, 2, 1, 45.00, '6195255c49a857.26884184', NULL, '2021-11-24 10:53:07', '2021-11-24 10:53:07', NULL),
(50, 6, 1, 10.99, '6195255c49a857.26884184', NULL, '2021-11-24 10:53:10', '2021-11-24 10:53:10', NULL),
(51, 5, 1, 56.29, '619e1f2c191ce5.23504745', NULL, '2021-11-24 11:34:41', '2021-11-24 11:34:41', NULL),
(52, 6, 1, 10.99, '619e24a54dfa16.78567070', NULL, '2021-11-24 11:40:23', '2021-11-24 11:40:23', NULL),
(53, 6, 1, 10.99, '619e24d878f8c4.07131377', NULL, '2021-11-24 11:41:14', '2021-11-24 11:41:14', NULL),
(54, 6, 1, 10.99, '619e275d5c6220.79916930', NULL, '2021-11-24 11:51:59', '2021-11-24 12:00:29', '2021-11-24 12:00:29'),
(55, 2, 1, 45.00, '619e275d5c6220.79916930', NULL, '2021-11-24 12:00:32', '2021-11-24 12:05:38', '2021-11-24 12:05:38'),
(56, 4, 1, 28.50, '619e2a96e54076.45087872', NULL, '2021-11-24 12:05:44', '2021-11-24 12:05:44', NULL),
(57, 6, 1, 10.99, '619f557d364fd6.87795920', NULL, '2021-11-25 09:21:03', '2021-11-25 09:21:03', NULL),
(58, 4, 1, 28.50, '619f55d5d2c9b0.27785404', NULL, '2021-11-25 09:22:30', '2021-11-25 09:22:30', NULL),
(59, 3, 1, 25.00, '619f55e4b79336.10193318', NULL, '2021-11-25 09:28:10', '2021-11-25 09:28:10', NULL),
(60, 4, 1, 28.50, '619f5a9a5dee51.26392007', NULL, '2021-11-25 09:42:53', '2021-11-25 09:42:53', NULL),
(61, 3, 1, 25.00, '619f622d650c04.91063584', NULL, '2021-11-25 10:15:11', '2021-11-25 10:15:11', NULL),
(62, 6, 1, 10.99, '619f62cda2cf28.48054239', NULL, '2021-11-25 10:23:56', '2021-11-25 10:23:56', NULL),
(63, 4, 1, 28.50, '619f6520bb8a16.58461440', NULL, '2021-11-25 10:30:07', '2021-11-25 10:30:07', NULL),
(64, 3, 1, 25.00, '619f6894719be2.76884816', NULL, '2021-11-25 10:42:31', '2021-11-25 10:42:31', NULL),
(65, 4, 1, 28.50, '619f6e08e30db8.70763336', NULL, '2021-11-25 11:05:53', '2021-11-25 11:05:53', NULL),
(66, 4, 1, 28.50, '619f7390325724.27467817', NULL, '2021-11-25 11:29:25', '2021-11-25 11:29:25', NULL),
(67, 4, 1, 28.50, '619f73b89c04e5.77659073', NULL, '2021-11-25 11:30:06', '2021-11-25 11:30:06', NULL),
(68, 2, 1, 45.00, '619f73d8c26ca3.27582316', NULL, '2021-11-25 11:30:36', '2021-11-25 11:30:36', NULL),
(69, 5, 1, 56.29, '619f7e0c154351.16211621', NULL, '2021-11-25 12:14:08', '2021-11-25 12:14:08', NULL),
(70, 2, 1, 45.00, '619f80f2243c21.33345614', NULL, '2021-11-25 12:26:33', '2021-11-25 12:26:33', NULL),
(71, 4, 1, 28.50, '619f810acb9843.52542472', NULL, '2021-11-25 12:26:54', '2021-11-25 12:26:54', NULL),
(72, 3, 1, 25.00, '619f811a0d4d96.09829315', NULL, '2021-11-25 12:27:55', '2021-11-25 12:30:32', '2021-11-25 12:30:32'),
(73, 3, 1, 25.00, '619f811a0d4d96.09829315', NULL, '2021-11-25 12:27:57', '2021-11-25 12:30:35', '2021-11-25 12:30:35'),
(74, 4, 1, 28.50, '619f811a0d4d96.09829315', NULL, '2021-11-25 12:30:42', '2021-11-25 12:30:42', NULL),
(75, 5, 1, 56.29, '619f81fa1b7e37.25759909', NULL, '2021-11-25 12:30:55', '2021-11-25 12:34:32', '2021-11-25 12:34:32'),
(76, 3, 1, 25.00, '619f82dd996803.27937811', NULL, '2021-11-25 12:34:41', '2021-11-25 12:34:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `seo_url` varchar(50) NOT NULL,
  `meta_description` text,
  `ext` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `seo_url`, `meta_description`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menswear', 'menswear', NULL, 'jpg', '2021-10-12 12:56:47', '2021-10-12 12:56:47', NULL),
(2, 'Second', 'second', NULL, NULL, '2021-10-12 22:20:11', '2021-10-12 22:20:11', NULL),
(3, 'Third', 'third', NULL, NULL, '2021-10-13 11:57:15', '2021-10-13 11:57:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id` int(11) NOT NULL,
  `alt` varchar(256) DEFAULT NULL,
  `ext` varchar(4) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  `shipping` decimal(10,2) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `totalCost` decimal(10,2) NOT NULL,
  `order_number` varchar(20) DEFAULT NULL,
  `is_dispatched` int(11) DEFAULT NULL,
  `promo_code_id` int(11) DEFAULT NULL,
  `discount_type` varchar(10) DEFAULT NULL,
  `discount_amount` decimal(10,2) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL,
  `dispatched_date` datetime DEFAULT NULL,
  `tracking_code` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `shipping`, `cost`, `totalCost`, `order_number`, `is_dispatched`, `promo_code_id`, `discount_type`, `discount_amount`, `notes`, `dispatched_date`, `tracking_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Pending', 2.99, 210.96, 0.00, '100001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 16:41:22', '2021-11-11 16:41:22', NULL),
(2, 1, 'Pending', 2.99, 210.96, 0.00, '100002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 16:44:12', '2021-11-11 16:44:12', NULL),
(3, 1, 'Pending', 2.99, 68.46, 0.00, '100003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 17:00:18', '2021-11-11 17:00:18', NULL),
(4, 2, 'Pending', 2.99, 68.46, 0.00, '100004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 17:02:51', '2021-11-11 17:02:51', NULL),
(5, 3, 'Pending', 2.99, 68.46, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 17:07:45', '2021-11-11 17:07:45', NULL),
(6, 4, 'Pending', 2.99, 113.46, 0.00, '200006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-11 17:10:32', '2021-11-11 17:10:32', NULL),
(7, 5, 'Pending', 2.99, 68.46, 0.00, '200007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:21:42', '2021-11-17 14:21:42', NULL),
(8, 6, 'Pending', 2.99, 68.46, 0.00, '50008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:33:10', '2021-11-17 14:33:10', NULL),
(9, 7, 'Pending', 2.99, 68.46, 0.00, '50009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:36:13', '2021-11-17 14:36:13', NULL),
(10, 7, 'Pending', 2.99, 68.46, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:36:13', '2021-11-17 14:36:13', NULL),
(11, 8, 'Pending', 2.99, 68.46, 0.00, '50011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:36:45', '2021-11-17 14:36:45', NULL),
(12, 8, 'Pending', 2.99, 68.46, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:36:45', '2021-11-17 14:36:45', NULL),
(13, 9, 'Pending', 2.99, 68.46, 0.00, '50013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 14:41:45', '2021-11-17 14:41:45', NULL),
(14, 19, 'Pending', 2.99, 68.46, 71.45, '50014', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:09:40', '2021-11-17 15:09:40', NULL),
(15, 20, 'Pending', 2.99, 68.46, 71.45, '50015', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:11:09', '2021-11-17 15:11:09', NULL),
(16, 21, 'Pending', 2.99, 68.46, 71.45, '50016', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:11:29', '2021-11-17 15:11:29', NULL),
(17, 22, 'Pending', 2.99, 68.46, 71.45, '50017', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:11:59', '2021-11-17 15:11:59', NULL),
(18, 23, 'Pending', 2.99, 68.46, 71.45, '50018', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:15:58', '2021-11-17 15:15:58', NULL),
(19, 24, 'Pending', 2.99, 68.46, 71.45, '50019', NULL, NULL, NULL, NULL, 'estt', NULL, NULL, '2021-11-17 15:16:29', '2021-11-17 15:16:29', NULL),
(20, 25, 'Pending', 2.99, 68.46, 71.45, '50020', NULL, NULL, NULL, NULL, 'test', NULL, NULL, '2021-11-17 15:18:35', '2021-11-17 15:18:35', NULL),
(21, 26, 'Pending', 2.99, 68.46, 71.45, '50021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:25:18', '2021-11-17 15:25:18', NULL),
(22, 27, 'Pending', 2.99, 68.46, 71.45, '50022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:27:34', '2021-11-17 15:27:34', NULL),
(23, 28, 'Pending', 2.99, 68.46, 71.45, '50023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:27:42', '2021-11-17 15:27:42', NULL),
(24, 29, 'Pending', 2.99, 68.46, 71.45, '50024', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:28:22', '2021-11-17 15:28:22', NULL),
(25, 30, 'Pending', 2.99, 39.96, 42.95, '50025', NULL, NULL, NULL, NULL, 'Test56', NULL, NULL, '2021-11-17 15:52:10', '2021-11-17 15:52:10', NULL),
(26, 31, 'Pending', 2.99, 112.58, 115.57, '50026', NULL, NULL, NULL, NULL, 'Test44', NULL, NULL, '2021-11-17 15:53:43', '2021-11-17 15:53:43', NULL),
(27, 32, 'Pending', 2.99, 112.58, 115.57, '50027', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 15:57:34', '2021-11-17 15:57:34', NULL),
(28, 33, 'Pending', 2.99, 112.58, 115.57, '50028', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:00:01', '2021-11-17 16:00:01', NULL),
(29, 34, 'Pending', 2.99, 112.58, 115.57, '50029', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:01:02', '2021-11-17 16:01:02', NULL),
(30, 35, 'Pending', 2.99, 112.58, 115.57, '50030', NULL, NULL, NULL, NULL, 'Ttestt', NULL, NULL, '2021-11-17 16:09:28', '2021-11-17 16:09:28', NULL),
(31, 36, 'Pending', 2.99, 112.58, 115.57, '50031', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:10:24', '2021-11-17 16:10:24', NULL),
(32, 37, 'Pending', 2.99, 112.58, 115.57, '50032', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:11:04', '2021-11-17 16:11:04', NULL),
(33, 38, 'Pending', 2.99, 137.58, 140.57, '50033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:12:04', '2021-11-17 16:12:04', NULL),
(34, 39, 'Pending', 3.99, 137.58, 141.57, '50034', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 16:52:03', '2021-11-17 16:52:03', NULL),
(35, 40, 'Pending', 3.99, 137.58, 141.57, '50035', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 17:02:20', '2021-11-17 17:02:20', NULL),
(36, 41, 'Pending', 3.99, 137.58, 141.57, '50036', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 17:06:02', '2021-11-17 17:06:02', NULL),
(37, 42, 'Pending', 3.99, 137.58, 141.57, '50037', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-17 17:08:03', '2021-11-17 17:08:03', NULL),
(38, 43, 'Pending', 2.99, 55.99, 58.98, '50038', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 10:54:58', '2021-11-24 10:54:58', NULL),
(39, 44, 'Pending', 2.99, 56.29, 59.28, '10039', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:34:52', '2021-11-24 11:34:52', NULL),
(40, 45, 'Pending', 2.99, 56.29, 59.28, '10040', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:37:41', '2021-11-24 11:37:41', NULL),
(41, 46, 'Pending', 2.99, 10.99, 13.98, '10041', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:40:41', '2021-11-24 11:40:41', NULL),
(42, 47, 'Pending', 2.99, 10.99, 13.98, '10042', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:41:22', '2021-11-24 11:41:22', NULL),
(43, 48, 'Pending', 2.99, 10.99, 13.98, '10043', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:52:08', '2021-11-24 11:52:08', NULL),
(44, 49, 'Pending', 2.99, 10.99, 13.98, '10044', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 11:56:53', '2021-11-24 11:56:53', NULL),
(45, 50, 'Pending', 0.00, 45.00, 45.00, '10045', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 12:00:40', '2021-11-24 12:00:40', NULL),
(46, 51, 'Pending', 2.99, 28.50, 31.49, '10046', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-24 12:06:20', '2021-11-24 12:06:20', NULL),
(47, 52, 'Pending', 2.99, 10.99, 13.98, '10047', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 09:21:12', '2021-11-25 09:21:12', NULL),
(48, 53, 'Pending', 2.99, 28.50, 31.49, '10048', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 09:22:41', '2021-11-25 09:22:41', NULL),
(49, 54, 'Pending', 2.99, 25.00, 27.99, '10049', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 09:28:27', '2021-11-25 09:28:27', NULL),
(50, 55, 'Pending', 3.99, 28.50, 32.49, '10050', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 09:43:04', '2021-11-25 09:43:04', NULL),
(51, 56, 'Pending', 3.99, 25.00, 28.99, '10051', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 10:15:21', '2021-11-25 10:15:21', NULL),
(52, 57, 'Pending', 3.99, 10.99, 14.98, '10052', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 10:24:11', '2021-11-25 10:24:11', NULL),
(53, 58, 'Pending', 3.99, 28.50, 32.49, '10053', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 10:30:16', '2021-11-25 10:30:16', NULL),
(54, 59, 'Pending', 3.99, 25.00, 28.99, '10054', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 10:42:41', '2021-11-25 10:42:41', NULL),
(55, 60, 'Pending', 2.99, 28.50, 31.49, '10055', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 11:06:03', '2021-11-25 11:06:03', NULL),
(56, 61, 'Pending', 2.99, 28.50, 31.49, '10056', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 11:29:36', '2021-11-25 11:29:36', NULL),
(57, 62, 'Pending', 2.99, 28.50, 31.49, '10057', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 11:30:16', '2021-11-25 11:30:16', NULL),
(58, 63, 'Pending', 0.00, 45.00, 45.00, '10058', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 11:30:46', '2021-11-25 11:30:46', NULL),
(59, 64, 'Pending', 0.00, 56.29, 56.29, '10059', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 12:14:29', '2021-11-25 12:14:29', NULL),
(60, 65, 'Pending', 0.00, 45.00, 45.00, '10060', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-25 12:26:44', '2021-11-25 12:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `seo_url` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `qty_available` int(11) DEFAULT '10',
  `special_offer_price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `attributes` varchar(255) DEFAULT NULL,
  `best_seller` int(11) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT '0',
  `meta_description` text,
  `weight` decimal(10,2) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `cross_sell_ids` varchar(255) DEFAULT NULL,
  `sort_order` decimal(10,2) DEFAULT NULL,
  `sale` int(11) NOT NULL DEFAULT '0',
  `new` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `barcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `title`, `seo_url`, `price`, `qty_available`, `special_offer_price`, `description`, `attributes`, `best_seller`, `featured`, `meta_description`, `weight`, `product_code`, `cross_sell_ids`, `sort_order`, `sale`, `new`, `created_at`, `updated_at`, `deleted_at`, `barcode`) VALUES
(1, '["1"]', NULL, 'test', 'test', 10.00, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-10-12 13:01:52', '2021-10-12 13:06:12', '2021-10-12 13:06:12', NULL),
(2, '["1","2","3"]', NULL, 'Product 1', 'product-1', 45.00, 4, NULL, '<p>This is the description field - test field for product 1. This is the description field - test field for product 1. This is the description field - test field for product 1. This is the description field - test field for product 1. This is the description field - test field for product 1.</p>\r\n<p>&nbsp;</p>', 'null', 1, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-10-12 13:02:31', '2021-11-11 15:15:42', NULL, NULL),
(3, '["2"]', NULL, 'Product 2', 'product-2', 25.00, 7, NULL, '<p>This is the description field - test field for product 2. This is the description field - test field for product 2. This is the description field - test field for product 2. This is the description field - test field for product 2. This is the description field - test field for product&nbsp;2.</p>', 'null', 1, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-10-13 11:42:37', '2021-11-03 16:48:01', NULL, NULL),
(4, '["1","2"]', NULL, 'Product 3', 'product-3', 28.50, 15, NULL, '<p>This is the description field - test field for product 3. This is the description field - test field for product 3. This is the description field - test field for product 3. This is the description field - test field for product 3. This is the description field - test field for product 3.</p>\r\n<p>&nbsp;</p>', 'null', 1, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-10-13 11:45:25', '2021-11-11 16:00:08', NULL, NULL),
(5, '["1","2"]', NULL, 'Product 4', 'product-4', 56.29, 3, NULL, '<p>This is the description field - test field for product 4. This is the description field - test field for product 4. This is the description field - test field for product 4. This is the description field - test field for product 4. This is the description field - test field for product 4.</p>\r\n<p>&nbsp;</p>', 'null', 1, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-10-13 11:45:55', '2021-10-27 15:16:59', NULL, NULL),
(6, '["1","2","3"]', NULL, 'Product 5', 'product-5', 19.99, 15, 10.99, '<p>This is the description field - test field for product 5. This is the description field - test field for product 5. This is the description field - test field for product 5. This is the description field - test field for product 5. This is the description field - test field for product 5.</p>\r\n<p>&nbsp;</p>', 'null', 1, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-10-13 11:46:26', '2021-11-11 15:16:11', NULL, NULL),
(7, '["2"]', NULL, 'Test', 'test', 12.00, 12, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '2021-11-11 15:15:09', '2021-11-11 15:15:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_from_order`
--

CREATE TABLE IF NOT EXISTS `products_from_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_from_order`
--

INSERT INTO `products_from_order` (`id`, `order_id`, `product_id`, `quantity`, `price`, `title`, `discount`, `options`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 24, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-17 15:28:22', '2021-11-17 15:28:22', NULL),
(2, 24, 6, 4, 9.99, 'Product 5', NULL, NULL, '2021-11-17 15:28:22', '2021-11-17 15:28:22', NULL),
(3, 25, 6, 4, 9.99, 'Product 5', NULL, NULL, '2021-11-17 15:52:10', '2021-11-17 15:52:10', NULL),
(4, 26, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 15:53:43', '2021-11-17 15:53:43', NULL),
(5, 27, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 15:57:34', '2021-11-17 15:57:34', NULL),
(6, 28, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:00:01', '2021-11-17 16:00:01', NULL),
(7, 29, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:01:02', '2021-11-17 16:01:02', NULL),
(8, 30, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:09:28', '2021-11-17 16:09:28', NULL),
(9, 31, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:10:24', '2021-11-17 16:10:24', NULL),
(10, 32, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:11:04', '2021-11-17 16:11:04', NULL),
(11, 33, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-17 16:12:04', '2021-11-17 16:12:04', NULL),
(12, 33, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:12:04', '2021-11-17 16:12:04', NULL),
(13, 34, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-17 16:52:03', '2021-11-17 16:52:03', NULL),
(14, 34, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 16:52:03', '2021-11-17 16:52:03', NULL),
(15, 35, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-17 17:02:20', '2021-11-17 17:02:20', NULL),
(16, 35, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 17:02:20', '2021-11-17 17:02:20', NULL),
(17, 36, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-17 17:06:02', '2021-11-17 17:06:02', NULL),
(18, 36, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 17:06:02', '2021-11-17 17:06:02', NULL),
(19, 37, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-17 17:08:03', '2021-11-17 17:08:03', NULL),
(20, 37, 5, 2, 56.29, 'Product 4', NULL, NULL, '2021-11-17 17:08:03', '2021-11-17 17:08:03', NULL),
(21, 38, 2, 1, 45.00, 'Product 1', NULL, NULL, '2021-11-24 10:54:58', '2021-11-24 10:54:58', NULL),
(22, 38, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-24 10:54:58', '2021-11-24 10:54:58', NULL),
(23, 39, 5, 1, 56.29, 'Product 4', NULL, NULL, '2021-11-24 11:34:52', '2021-11-24 11:34:52', NULL),
(24, 40, 5, 1, 56.29, 'Product 4', NULL, NULL, '2021-11-24 11:37:41', '2021-11-24 11:37:41', NULL),
(25, 41, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-24 11:40:41', '2021-11-24 11:40:41', NULL),
(26, 42, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-24 11:41:22', '2021-11-24 11:41:22', NULL),
(27, 43, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-24 11:52:08', '2021-11-24 11:52:08', NULL),
(28, 44, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-24 11:56:53', '2021-11-24 11:56:53', NULL),
(29, 45, 2, 1, 45.00, 'Product 1', NULL, NULL, '2021-11-24 12:00:40', '2021-11-24 12:00:40', NULL),
(30, 46, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-24 12:06:20', '2021-11-24 12:06:20', NULL),
(31, 47, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-25 09:21:12', '2021-11-25 09:21:12', NULL),
(32, 48, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 09:22:41', '2021-11-25 09:22:41', NULL),
(33, 49, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-25 09:28:27', '2021-11-25 09:28:27', NULL),
(34, 50, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 09:43:04', '2021-11-25 09:43:04', NULL),
(35, 51, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-25 10:15:21', '2021-11-25 10:15:21', NULL),
(36, 52, 6, 1, 10.99, 'Product 5', NULL, NULL, '2021-11-25 10:24:11', '2021-11-25 10:24:11', NULL),
(37, 53, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 10:30:16', '2021-11-25 10:30:16', NULL),
(38, 54, 3, 1, 25.00, 'Product 2', NULL, NULL, '2021-11-25 10:42:41', '2021-11-25 10:42:41', NULL),
(39, 55, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 11:06:03', '2021-11-25 11:06:03', NULL),
(40, 56, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 11:29:36', '2021-11-25 11:29:36', NULL),
(41, 57, 4, 1, 28.50, 'Product 3', NULL, NULL, '2021-11-25 11:30:16', '2021-11-25 11:30:16', NULL),
(42, 58, 2, 1, 45.00, 'Product 1', NULL, NULL, '2021-11-25 11:30:46', '2021-11-25 11:30:46', NULL),
(43, 59, 5, 1, 56.29, 'Product 4', NULL, NULL, '2021-11-25 12:14:29', '2021-11-25 12:14:29', NULL),
(44, 60, 2, 1, 45.00, 'Product 1', NULL, NULL, '2021-11-25 12:26:44', '2021-11-25 12:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `ext` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `alt`, `ext`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'jpg', '2021-10-12 13:01:52', '2021-10-12 13:01:52', NULL),
(2, 2, 'test alt 1', 'jpg', '2021-10-12 13:02:31', '2021-11-11 15:15:42', NULL),
(3, 3, NULL, 'jpg', '2021-10-13 11:42:37', '2021-10-13 11:42:51', '2021-10-13 11:42:51'),
(4, 3, 'test alt 2', 'jpg', '2021-10-13 11:43:03', '2021-11-03 16:48:01', NULL),
(5, 4, 'test alt 3', 'jpg', '2021-10-13 11:45:25', '2021-11-11 16:00:08', NULL),
(6, 5, 'test alt 4', 'jpg', '2021-10-13 11:45:55', '2021-10-27 15:16:59', NULL),
(7, 6, 'test alt 5', 'jpg', '2021-10-13 11:46:26', '2021-11-11 15:16:11', NULL),
(8, 7, NULL, 'jpg', '2021-11-11 15:15:09', '2021-11-11 15:15:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_role_id`, `email`, `password`, `phone`, `address_1`, `address_2`, `town`, `country`, `postcode`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Name', 2, 'admin', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '0000-00-00 00:00:00', '2021-11-11 17:00:18', NULL),
(2, 'Morgan', 'Name', 1, 'ddd@123.cod', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-11 17:02:51', '2021-11-11 17:02:51', NULL),
(3, 'Morgan', 'Name', 1, 'admin@34.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-11 17:07:45', '2021-11-11 17:07:45', NULL),
(4, 'Morgan', 'Name', 1, 'mrogan2323@32.cok', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-11 17:10:32', '2021-11-11 17:10:32', NULL),
(5, 'Morgan', 'Name', 1, 'test@t.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', 'Address 2', 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 14:21:42', '2021-11-17 14:21:42', NULL),
(6, 'Morgan', 'Name', 1, 'admin@123.com', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 14:33:10', '2021-11-17 14:33:10', NULL),
(7, 'Morgan', 'Name', 1, 'admin@67.j', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 14:36:13', '2021-11-17 14:36:13', NULL),
(8, 'Morgan', 'Name', 1, 'admin@445.jk', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 14:36:45', '2021-11-17 14:36:45', NULL),
(9, 'Morgan', 'Name', 1, 'test@t.co231', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', 'ad2', 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 14:41:45', '2021-11-17 14:41:45', NULL),
(10, 'Morgan', 'Name', 1, 'admin@34.ocm', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:01:32', '2021-11-17 15:01:32', NULL),
(11, 'Morgan', 'Name', 1, 'admin@5.com', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:02:35', '2021-11-17 15:02:35', NULL),
(12, 'Morgan', 'Name', 1, 'admin@56.bg', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:03:13', '2021-11-17 15:03:13', NULL),
(13, 'Morgan', 'Name', 1, 'admin@93.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:03:47', '2021-11-17 15:03:47', NULL),
(14, 'Morgan', 'Name', 1, 'admin@43.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:04:36', '2021-11-17 15:04:36', NULL),
(15, 'Morgan', 'Name', 1, 'admin@45.j', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:05:18', '2021-11-17 15:05:18', NULL),
(16, 'Morgan', 'Name', 1, 'admin@39.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:07:06', '2021-11-17 15:07:06', NULL),
(17, 'Morgan', 'Name', 1, 'admin@456.9', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:07:53', '2021-11-17 15:07:53', NULL),
(18, 'Morgan', 'Name', 1, 'admin@l.l', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:08:38', '2021-11-17 15:08:38', NULL),
(19, 'Morgan', 'Name', 1, 'admin@34.ff', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:09:40', '2021-11-17 15:09:40', NULL),
(20, 'Morgan', 'Name', 1, 'admin@123.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:11:09', '2021-11-17 15:11:09', NULL),
(21, 'Morgan', 'Name', 1, 'admin@123.cvom', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:11:29', '2021-11-17 15:11:29', NULL),
(22, 'Morgan', 'Name', 1, 'admin@m.bn', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:11:59', '2021-11-17 15:11:59', NULL),
(23, 'Morgan', 'Name', 1, 'admin@d.s', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:15:58', '2021-11-17 15:15:58', NULL),
(24, 'Morgan', 'Name', 1, 'admin@w.w', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:16:29', '2021-11-17 15:16:29', NULL),
(25, 'Morgan', 'Name', 1, 'text@233.gf', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:18:35', '2021-11-17 15:18:35', NULL),
(26, 'Morgan', 'Name', 1, 'admin@c.c', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:25:18', '2021-11-17 15:25:18', NULL),
(27, 'Morgan', 'Name', 1, 'admin@l.k', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:27:34', '2021-11-17 15:27:34', NULL),
(28, 'Morgan', 'Name', 1, 'admin@j.j', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:27:42', '2021-11-17 15:27:42', NULL),
(29, 'Morgan', 'Name', 1, 'admin@f.f', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:28:22', '2021-11-17 15:28:22', NULL),
(30, 'Morgan', 'Name', 1, 'admin@er.kj', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:52:10', '2021-11-17 15:52:10', NULL),
(31, 'Morgan', 'Name', 1, 'admin@23.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:53:43', '2021-11-17 15:53:43', NULL),
(32, 'Morgan', 'Name', 1, 'admin@34.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 15:57:34', '2021-11-17 15:57:34', NULL),
(33, 'Morgan', 'Name', 1, 'admin@34.cfd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:00:01', '2021-11-17 16:00:01', NULL),
(34, 'Morgan', 'Name', 1, 'admin@34.cof', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:01:02', '2021-11-17 16:01:02', NULL),
(35, 'Morgan', 'Name', 1, 'admin@123.cog', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:09:28', '2021-11-17 16:09:28', NULL),
(36, 'Morgan', 'Name', 1, 'admin@d3.d', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:10:24', '2021-11-17 16:10:24', NULL),
(37, 'Morgan', 'Name', 1, 'admin@23.cof', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:11:04', '2021-11-17 16:11:04', NULL),
(38, 'Morgan', 'Name', 1, 'admin@23.cf', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:12:04', '2021-11-17 16:12:04', NULL),
(39, 'Morgan', 'Name', 1, 'admin@rt.ff', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 16:52:03', '2021-11-17 16:52:03', NULL),
(40, 'Morgan', 'Name', 1, 'admin@we.34', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 17:02:20', '2021-11-17 17:02:20', NULL),
(41, 'Morgan', 'Name', 1, 'admin@fsd.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 17:06:02', '2021-11-17 17:06:02', NULL),
(42, 'Morgan', 'Name', 1, 'admin@wer.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-17 17:08:03', '2021-11-17 17:08:03', NULL),
(43, 'Morgan', 'Name', 1, 'admin@234.com', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 10:54:58', '2021-11-24 10:54:58', NULL),
(44, 'Morgan', 'Name', 1, 'admin@1234.co', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:34:52', '2021-11-24 11:34:52', NULL),
(45, 'Morgan', 'Name', 1, 'admin@3.34', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:37:41', '2021-11-24 11:37:41', NULL),
(46, 'Morgan', 'Name', 1, 'admin@23.co334', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:40:41', '2021-11-24 11:40:41', NULL),
(47, 'Morgan', 'Name', 1, 'admin@34.cogf', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:41:22', '2021-11-24 11:41:22', NULL),
(48, 'Morgan', 'Name', 1, 'admin@wts-group.com', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:52:08', '2021-11-24 11:52:08', NULL),
(49, 'Morgan', 'Name', 1, 'admin@23.3', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 11:56:53', '2021-11-24 11:56:53', NULL),
(50, 'Morgan', 'Name', 1, 'admin@34.co4', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 12:00:40', '2021-11-24 12:00:40', NULL),
(51, 'Morgan', 'Name', 1, 'admint@t.tt', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-24 12:06:20', '2021-11-24 12:06:20', NULL),
(52, 'Morgan', 'Name', 1, 'admin@1.1234', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 09:21:12', '2021-11-25 09:21:12', NULL),
(53, 'Morgan', 'Name', 1, 'admin@123.co.u', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 09:22:41', '2021-11-25 09:22:41', NULL),
(54, 'Morgan', 'Name', 1, 'admin@123.fdfd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 09:28:27', '2021-11-25 09:28:27', NULL),
(55, 'Morgan', 'Name', 1, 'admin@123', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 09:43:04', '2021-11-25 09:43:04', NULL),
(56, 'Morgan', 'Name', 1, 'admin@123.co4', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 10:15:21', '2021-11-25 10:15:21', NULL),
(57, 'Morgan', 'Name', 1, 'adminew@4.ew', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 10:24:11', '2021-11-25 10:24:11', NULL),
(58, 'Morgan', 'Name', 1, 'admin@23.cfd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 10:30:16', '2021-11-25 10:30:16', NULL),
(59, 'Morgan', 'Name', 1, 'admin@12.xo', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 10:42:41', '2021-11-25 10:42:41', NULL),
(60, 'Morgan', 'Name', 1, 'admin@454.45', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 11:06:03', '2021-11-25 11:06:03', NULL),
(61, 'Morgan', 'Name', 1, 'admin@fdfd.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 11:29:36', '2021-11-25 11:29:36', NULL),
(62, 'Morgan', 'Name', 1, 'admin@232.fd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 11:30:16', '2021-11-25 11:30:16', NULL),
(63, 'Morgan', 'Name', 1, 'admin@232.sdds', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 11:30:46', '2021-11-25 11:30:46', NULL),
(64, 'Morgan', 'Name', 1, 'admin@123.cofd', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 12:14:29', '2021-11-25 12:14:29', NULL),
(65, 'Morgan', 'Name', 1, 'admin@233.cdsds', '9a56681567a53c4a3d6581ce0d32dc187cf08c59634d26afa28ac56a94c3997e', '07988093453', 'WTS Technologies, Unit 4 Milestone Court,', NULL, 'Leeds', 'United Kingdom', 'LS28 6HE', NULL, '2021-11-25 12:26:44', '2021-11-25 12:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_from_order`
--
ALTER TABLE `products_from_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products_from_order`
--
ALTER TABLE `products_from_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
