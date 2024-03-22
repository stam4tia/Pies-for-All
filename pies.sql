-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Dec 19, 2023 at 02:43 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev10db`
--

-- --------------------------------------------------------

--
-- Table structure for table `pies`
--

DROP TABLE IF EXISTS `pies`;
CREATE TABLE IF NOT EXISTS `pies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pie_type` enum('Sweet','Savory') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Sweet',
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pies`
--

INSERT INTO `pies` (`id`, `name`, `pie_type`, `image_url`, `description`) VALUES
(1, 'Apple Pie', 'Sweet', 'https://static.vecteezy.com/system/resources/previews/021/027/223/original/apple-pie-transparent-png.png', 'Classic pie with delicious apple filling.'),
(3, 'Pumpkin Pie', 'Sweet', 'https://static.vecteezy.com/system/resources/previews/026/992/014/original/pumpkin-pie-isolated-free-png.png', 'Dessert pie with a spiced, pumpkin-based custard filling. Symbol of harvest time.'),
(4, 'Cherry Pie', 'Sweet', 'https://static.wixstatic.com/media/913fa2_938aecc9004b4d43abaced7b70689019~mv2.png/v1/fill/w_480,h_287,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/913fa2_938aecc9004b4d43abaced7b70689019~mv2.png', 'Sweet and tart cherry filling in a flaky crust. '),
(7, 'Pecan Pie', 'Sweet', 'https://www.edwardsdesserts.com/cdn/shop/files/PecanPieSlice_1200x1200_2817015a-53d1-4ab9-a9ed-e3b1dac69008.png?v=1692906140&width=320', 'A rich and indulgent pie made with pecans, corn syrup, sugar, and eggs. '),
(8, 'Key Lime Pie', 'Sweet', 'https://static.vecteezy.com/system/resources/previews/025/067/627/non_2x/key-lime-pie-with-ai-generated-free-png.png', 'A refreshing pie made with key lime juice, eggs, and sweetened condensed milk, often with a graham cracker crust.\r\n\r\n'),
(9, 'Chicken Pot Pie', 'Savory', 'https://digitaleat.kfc.com/menus/image/bare/kfc-PotPie?q=75&w=1024', 'A classic American dish featuring a creamy filling of cooked chicken and vegetables.\r\n\r\n'),
(10, 'Shepherd\'s Pie', 'Savory', 'https://static.vecteezy.com/system/resources/previews/025/269/724/non_2x/shepherd-pie-with-ai-generated-free-png.png', 'An English dish usually made with ground lamb, mixed with vegetables, and topped with mashed potatoes.\r\n\r\n'),
(11, 'Quiche Lorraine', 'Savory', 'https://static.vecteezy.com/system/resources/previews/025/269/594/non_2x/quiche-lorraine-with-ai-generated-free-png.png', 'French savory pie made with a custard filling of eggs, cream, cheese, and bacon.'),
(12, 'Spanakopita', 'Savory', 'https://www.chrisanthidis.gr/en/assets/components/phpthumbof/cache/40.b6f57f458e1d7ac994e539f631c2897b.png', 'A Greek dish consisting layers of phyllo pastry filled with spinach.'),
(13, 'Pizza Pie', 'Savory', 'https://pngimg.com/d/pizza_PNG44076.png', 'Italian origin dish consisting of a dough topped with tomatoes, cheese, and often various other ingredients.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
