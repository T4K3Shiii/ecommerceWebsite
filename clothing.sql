-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2025 at 01:29 AM
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
-- Database: `clothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'Tee'),
(2, 'Polo'),
(3, 'Shirt'),
(4, 'Hoodie'),
(5, 'Jacket'),
(6, 'Cargo Pants'),
(7, 'Jeans Pants'),
(8, 'Short Pants');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`c_id`, `c_name`) VALUES
(1, 'White'),
(2, 'Black'),
(3, 'Red'),
(4, 'Grey');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `phone`, `address`) VALUES
(1, 'Htay Ngwe', '09777853603', 'mandalay'),
(2, 'Htayaung123', '0988776655', 'mandalay'),
(3, 'Ngwe Zin', '0911223344', 'nay pyi daw city');

-- --------------------------------------------------------

--
-- Table structure for table `exclusive_collection`
--

CREATE TABLE `exclusive_collection` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` double NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exclusive_collection`
--

INSERT INTO `exclusive_collection` (`id`, `name`, `description`, `price`, `c_id`, `s_id`, `image_name`) VALUES
(9, 'Luxury Silk White Shirt', 'A premium silk shirt, offering unmatched comfort and elegance for special occasions.', 159999, 1, 1, 'exclusive1.jpg'),
(10, 'Diamond-Studded Black Shirt', 'A black shirt adorned with subtle diamond details, for a truly luxurious feel.', 249999, 2, 2, 'exclusive2.jpg'),
(11, 'Premium Tailored Navy Shirt', 'A navy shirt with a perfect tailored fit, crafted from the finest cotton for a sleek and sophisticated look.', 199999, 1, 2, 'exclusive3.jpg'),
(12, 'Royal Velvet Red Shirt', 'A velvet shirt in a deep red hue, made to stand out with its soft texture and striking color.', 219999, 3, 1, 'exclusive4.jpg'),
(13, 'Limited Edition Platinum Grey Shirt', 'An exclusive grey shirt, crafted from high-quality platinum fabric, designed for those who seek the best.', 249999, 2, 2, 'exclusive5.jpg'),
(14, 'Golden Thread Embroidered White Shirt', 'A white shirt with intricate golden thread embroidery, adding a touch of luxury to your wardrobe.', 279999, 1, 1, 'exclusive6.jpg'),
(15, 'Italian-Made Premium Black Shirt', 'A luxurious black shirt made in Italy, known for its impeccable craftsmanship and superior quality.', 299999, 2, 2, 'exclusive7.jpg'),
(16, 'Signature White Satin Shirt', 'A satin white shirt, featuring a glossy finish that radiates luxury and exclusivity.', 259999, 1, 1, 'exclusive8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `cate_id`, `description`, `price`) VALUES
(1, 'No Rule To Join', 'tee1.webp', 1, 'A timeless and versatile crew-neck tee, perfect for any casual outfit.', 20000.00),
(2, 'Vintage Print', 'tee2.avif', 1, 'A relaxed, retro-inspired tee featuring unique graphic prints for a vintage look.', 3000.00),
(3, 'Urban Style', 'tee3.webp', 1, 'Modern and edgy, this tee is ideal for city life and street-style enthusiasts.', 30000.00),
(4, 'Retro Vibes', 'tee4.webp', 1, 'Embrace the past with this nostalgic tee, blending bold patterns and throwback designs.', 30000.00),
(5, 'Casual Fit', 'tee5.jpg', 1, 'Crafted for comfort, this classic fit tee offers everyday style and ease.', 30000.00),
(6, 'Simple Stripes', 'tee6.jpg', 1, 'Minimal yet stylish, this striped tee is ideal for effortless, laid-back looks.\r\n\r\n', 40000.00),
(7, 'Classic Fit Polo', 'polo1.jpg', 2, 'A relaxed-fit polo made from breathable cotton for timeless style and comfort.', 40000.00),
(8, 'Modern Slim Polo', 'polo2.jfif', 2, 'Sleek slim-fit design with stretch fabric for a modern, tailored look.', 35000.00),
(9, 'Rugged Sport Polo', 'polo3.jpg', 2, 'Durable and moisture-wicking, perfect for outdoor activities.', 34000.00),
(10, 'Heritage Cotton Polo', 'polo4.jpg', 2, 'Premium cotton polo with a classic collar for a polished look.', 30000.00),
(11, 'Luxury Knit Polo', 'polo5.jpg', 2, 'Soft knit fabric with a refined finish for upscale occasions.', 33000.00),
(12, 'Bold Stripe Polo', 'polo6.jpg', 2, 'Vibrant striped polo to add personality to your outfit.', 41000.00),
(13, 'Classic White Shirt', 'shirt1.jpg', 3, 'A timeless white shirt, perfect for formal and casual occasions.', 29099.00),
(14, 'Premium Blue Oxford', 'shirt2.jpg', 3, 'A premium Oxford blue shirt made from soft cotton for all-day comfort.', 39099.00),
(15, 'Modern Slim Fit Shirt', 'shirt3.jpg', 3, 'A stylish slim-fit shirt with a modern cut for a sharp look.', 34099.00),
(16, 'Casual Plaid Shirt', 'shirt4.jpg', 3, 'A relaxed plaid shirt, perfect for a casual day out.', 24099.00),
(17, 'Linen Summer Shirt', 'shirt5.jpg', 3, 'A lightweight linen shirt ideal for warm weather.', 44099.00),
(18, 'Classic  Hoodie', 'hoodie1.jpg', 4, 'A classic hoodie for ultimate comfort and style.', 49999.00),
(19, 'Grey Casual Hoodie', 'hoodie2.jpg', 4, 'A soft hoodie, perfect for lounging or casual outings.', 39999.00),
(20, 'Premium Hoodie', 'hoodie3.jpg', 4, 'A premium  hoodie made from high-quality cotton for all-day wear.', 59999.00),
(21, 'Athletic Hoodie', 'hoodie4.jpg', 4, 'A sporty hoodie, ideal for active wear or casual wear.', 42999.00),
(22, 'Cozy Hoodie', 'hoodie5.jpg', 4, 'A cozy hoodie with a warm, relaxed fit, perfect for cold days.', 44999.00),
(23, 'Leather Jacket', 'jacket1.jpg', 5, 'A stylish leather jacket that exudes timeless elegance.', 79999.00),
(24, 'Puffer Jacket', 'jacket2.jpg', 5, 'A cozy puffer jacket designed to keep you warm during the coldest months.', 89999.00),
(25, 'Denim Jacket', 'jacket3.jpg', 5, 'A classic denim jacket, perfect for layering with casual outfits.', 64999.00),
(26, 'Wool Jacket', 'jacket4.jpg', 5, 'A sophisticated wool jacket, ideal for formal or semi-formal occasions.', 74999.00),
(27, 'Army Green Jacket', 'jacket5.jpg', 5, 'A rugged army green jacket, perfect for outdoor adventures or casual outings.', 56999.00),
(28, 'Windbreaker', 'jacket6.jpg', 5, 'A sporty windbreaker, great for outdoor activities or light rain protection.', 39999.00),
(29, 'Cargo Pant', 'cargo1.jpg', 6, 'Durable cargo pants with multiple pockets, perfect for outdoor adventures.', 49999.00),
(30, 'Slim Fit Cargo Pant', 'cargo2.jpg', 6, 'A modern slim fit cargo pant, combining comfort and utility.', 59999.00),
(31, 'Classic Beige Cargo Pant', 'cargo3.jpg', 6, 'A classic beige cargo pant, ideal for casual wear and outdoor activities.', 39999.00),
(32, 'Black Tactical Cargo Pant', 'cargo4.jpg', 6, 'A tactical black cargo pant designed for maximum durability and functionality.', 69999.00),
(33, 'Green Utility Cargo Pant', 'cargo5.jpg', 6, 'A green utility cargo pant, great for hiking or everyday use.', 54999.00),
(34, 'Lightweight Summer Cargo Pant', 'cargo6.jpg', 6, 'A lightweight cargo pant, perfect for the warmer months and outdoor activities.', 42999.00),
(35, 'Classic Blue Jean Cargo', 'jean1.jpg', 7, 'A classic blue jean cargo, blending denim style with utility pockets.', 59999.00),
(36, 'Slim Fit Jean Cargo', 'jean2.jpg', 7, 'A slim fit jean cargo, combining a modern look with practicality.', 69999.00),
(37, 'Distressed Jean Cargo', 'jean3.jpg', 7, 'A distressed jean cargo, offering a rugged, worn-in look for casual outings.', 79999.00),
(38, 'Dark Wash Jean Cargo', 'jean4.jpg', 7, 'A dark wash jean cargo, perfect for casual wear or semi-formal occasions.', 74999.00),
(39, 'Lightweight Stretch Jean Cargo', 'jean5.jpg', 7, 'A lightweight stretch jean cargo, offering comfort and flexibility for all-day wear.', 84999.00),
(40, 'Vintage Look Jean Cargo', 'jean6.jpg', 7, 'A vintage look jean cargo, designed with a retro aesthetic and functional design.', 89999.00),
(41, 'Classic Khaki Short Pant', 'short1.jpg', 8, 'A versatile khaki short pant, perfect for warm weather and casual outings.', 39999.00),
(42, 'Slim Fit Denim Short Pant', 'short2.jpg', 8, 'A stylish slim fit denim short pant, combining comfort and modern flair.', 49999.00),
(43, 'Cotton Chino Short Pant', 'short3.jpg', 8, 'A breathable cotton chino short pant, ideal for summer days and relaxed activities.', 42999.00),
(44, 'Athletic Fit Sport Short Pant', 'short4.jpg', 8, 'A sport-inspired athletic fit short pant, designed for comfort during physical activities.', 34999.00),
(45, 'Classic Navy Short Pant', 'short5.jpg', 8, 'A classic navy short pant, perfect for casual days out or lounging at home.', 46999.00),
(46, 'Lightweight Hiking Short Pant', 'short6.jpg', 8, 'A lightweight hiking short pant, made for outdoor adventures and durability.', 54999.00),
(47, 'White Hoodie', 'hoodie6.jpg', 4, 'Comfortable hoodie for casual wear', 40000.00);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `pd_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`s_id`, `s_name`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `exclusive_collection`
--
ALTER TABLE `exclusive_collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`pd_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exclusive_collection`
--
ALTER TABLE `exclusive_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exclusive_collection`
--
ALTER TABLE `exclusive_collection`
  ADD CONSTRAINT `exclusive_collection_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `color` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exclusive_collection_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `size` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_detail_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `color` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_detail_ibfk_3` FOREIGN KEY (`s_id`) REFERENCES `size` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
