-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 05:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecreamshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('4b1CDOdrPRt0JoKC5lNm', 'TAl1Ck3GFt1Bilg2sS64', 'JPrztZw0rmxzfr89iGpg', '20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `subject`, `message`) VALUES
('PREeAX4TsZUfsgTpoz1i', 'TAl1Ck3GFt1Bilg2sS64', 'john doe', 'johndoe@gmail.com', 'selling purpose', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `address_type` varchar(10) NOT NULL,
  `method` varchar(50) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `qty` varchar(2) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL DEFAULT 'in progress',
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `seller_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`, `payment_status`) VALUES
('n05mWqpp2KkktFDMx2GU', 'TAl1Ck3GFt1Bilg2sS64', 'AR7ktiueFqxTtsnzVuY1', 'john doe', '1234567890', 'johndoe@gmail.com', '504, tkd, delhi, india, 110019', 'home', 'cash on delivery', 'KvMLZsUPFDABjd9b6LZY', '60', '1', '2023-08-12', 'in progress', 'pending'),
('rGwsnt3JktltkT9DLfpD', 'TAl1Ck3GFt1Bilg2sS64', 'AR7ktiueFqxTtsnzVuY1', 'john doe', '1234567890', 'johndoe@gmail.com', '504, tkd, delhi, india, 110019', 'home', 'cash on delivery', 'JPrztZw0rmxzfr89iGpg', '20', '1', '2023-08-12', 'in progress', 'pending'),
('KoiAstakbSuWwpxfqVnX', 'TAl1Ck3GFt1Bilg2sS64', 'vHzPzEr2CoB3GLU4fZIK', 'john doe', '6677889900', 'johndoe@gmail.com', '504, tkd, delhi, india, 110019', 'office', 'net banking', 'irTt2KT6TxF8fpdxYbtk', '50', '1', '2023-08-12', 'in progress', 'pending'),
('Xg31gq3b84muqgUOjj1U', 'TAl1Ck3GFt1Bilg2sS64', 'vHzPzEr2CoB3GLU4fZIK', 'john doe', '6677889900', 'johndoe@gmail.com', '504, tkd, delhi, india, 110019', 'home', 'paytm', 'K5XFwTZGTV0p7emZgfm5', '25', '1', '2023-08-12', 'in progress', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `seller_id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock` int(100) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `name`, `price`, `image`, `stock`, `product_detail`, `status`) VALUES
('JPrztZw0rmxzfr89iGpg', 'AR7ktiueFqxTtsnzVuY1', 'chocolate ice-cream', '20', 'product12.jpg', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('Rp6ZMjRulaWhpR16cuZw', 'AR7ktiueFqxTtsnzVuY1', 'venilla', '20', 'bbanner.jpg', 60, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('KvMLZsUPFDABjd9b6LZY', 'AR7ktiueFqxTtsnzVuY1', 'mix fruit ice-cream', '60', 'product0.avif', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n   tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n   quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n   consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n   cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n   proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consec', 'active'),
('itEQe3ZASStHrXm9lSnc', 'AR7ktiueFqxTtsnzVuY1', 'cup ice cream', '67', 'product13-removebg-preview.png', 80, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('irTt2KT6TxF8fpdxYbtk', 'vHzPzEr2CoB3GLU4fZIK', 'turkish cream delight', '50', '514215896_012c012ccc@2x.jpg', 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('qjjabGtYKDtoFA2RH9Pi', 'vHzPzEr2CoB3GLU4fZIK', 'kivi ice cream', '20', '518151488_012c012ccc@2x.jpg', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('8AfF7YxHPboVwGl9s6oJ', 'vHzPzEr2CoB3GLU4fZIK', 'green mango', '30', '535405916_012c012ccc@2x.jpg', 40, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('K5XFwTZGTV0p7emZgfm5', 'vHzPzEr2CoB3GLU4fZIK', 'ice cream bar', '25', '547235148_012c012ccc@2x.jpg', 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('cEtreNTJhgvHekQ5qJMB', 'vHzPzEr2CoB3GLU4fZIK', 'chocolate ice cream', '35', '687180636_012c012ccc@2x.jpg', 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('N8AIGKbxKD9uvt495fzy', 'vHzPzEr2CoB3GLU4fZIK', 'green mango flavour', '65', '687180662_012c012ccc@2x.jpg', 70, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('jkkP1VxIl7LkGtbyxrwN', 'vHzPzEr2CoB3GLU4fZIK', 'family pack ice-cream', '89', 'boc.webp', 900, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active'),
('EDZevI323yLSZa9gok98', 'vHzPzEr2CoB3GLU4fZIK', 'mix flavour', '100', 'product5.jpg', 50, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, c', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `password`, `image`) VALUES
('AR7ktiueFqxTtsnzVuY1', 'anabia ahmad', 'anabia786@gmail.com', '4d8174039cb10866f89c9cb7bcfc337110792a4c', 'GU7l4mNhblEjxtXHBgzT.jpg'),
('vHzPzEr2CoB3GLU4fZIK', 'selena ansari', 'selena@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'txbcVgzGVgAKUOqM6onw.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('TAl1Ck3GFt1Bilg2sS64', 'john doe', 'johndoe@gmail.com', 'a51dda7c7ff50b61eaea0444371f4a6a9301e501', '8i7PsJfaXm8ARBWbBeKb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`, `price`) VALUES
('fjJwqmiBRUoVtmfhcGdM', 'TAl1Ck3GFt1Bilg2sS64', 'Rp6ZMjRulaWhpR16cuZw', '20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
