-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 04:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mess_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `sno` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`sno`, `fname`, `lname`, `email`, `password`, `mobile`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', 'admin@123', 9988776655);

-- --------------------------------------------------------

--
-- Table structure for table `attendance1`
--

CREATE TABLE `attendance1` (
  `sno` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance1`
--

INSERT INTO `attendance1` (`sno`, `id`, `date`, `attendance`) VALUES
(1, 1, '2021-04-17', 'Present'),
(2, 2, '2021-04-17', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `attendance2`
--

CREATE TABLE `attendance2` (
  `sno` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance2`
--

INSERT INTO `attendance2` (`sno`, `id`, `date`, `attendance`) VALUES
(1, 1, '2021-04-17', 'Present'),
(2, 2, '2021-04-17', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `attendance3`
--

CREATE TABLE `attendance3` (
  `sno` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance3`
--

INSERT INTO `attendance3` (`sno`, `id`, `date`, `attendance`) VALUES
(1, 1, '2021-04-17', 'Absent'),
(2, 2, '2021-04-17', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `attendance4`
--

CREATE TABLE `attendance4` (
  `sno` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `attendance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance4`
--

INSERT INTO `attendance4` (`sno`, `id`, `date`, `attendance`) VALUES
(1, 1, '2021-04-17', 'Present'),
(2, 2, '2021-04-17', 'Present'),
(3, 3, '2021-04-17', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `rating` varchar(100) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `uid`, `date`, `rating`, `feedback`) VALUES
(2, 2, '2021-04-16', 'Good', 'Food is awesome'),
(3, 1, '2021-04-16', 'Excellent', 'Delicious food.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `sno` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `meal1` varchar(250) NOT NULL,
  `meal2` varchar(250) NOT NULL,
  `meal3` varchar(250) NOT NULL,
  `meal4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`sno`, `day`, `meal1`, `meal2`, `meal3`, `meal4`) VALUES
(1, 'Monday', 'One grapefruit, Two poached eggs (or fried in a non-stick pan)', 'Chicken breast (5-ounce portion), baked or roasted (not breaded or fried), Large garden salad with tomato and onion with one cup croutons, topped with one tablespoon oil and vinegar (or salad dressing)', 'One-half piece of pita bread, Glass of water or herbal tea', 'Two cup steamed broccoli, One cup of brown rice, Small garden salad with one cup spinach leaves, tomato, and onion topped with two tablespoons oil and vinegar or salad dressing'),
(2, 'Tuesday', 'One whole-wheat English muffin with two tablespoons peanut butter, One orange, Large glass (12 ounces) non-fat milk, One cup of black coffee or herbal tea', 'A turkey sandwich (six ounces of turkey breast meat, large tomato slice, green lettuce and mustard on two slices of whole wheat bread\r\nOne cup low-sodium vegetable soup', 'One cup (about 30) grapes, Glass of water or herbal tea', 'Five-ounce sirloin steak, One cup mashed potatoes, One cup cooked spinach, One cup green beans'),
(3, 'Wednesday', 'One medium bran muffin, One serving turkey breakfast sausage, One orange, One cup non-fat milk', 'Low sodium chicken noodle soup with six saltine crackers, One medium apple', 'One apple, One slice Swiss cheese, Sparkling water with lemon or lime slice', '8-ounce serving of turkey breast meat, One cup baked beans, One cup cooked carrots, One cup cooked kale'),
(4, 'Thursday', 'One cup whole wheat flakes with one cup non-fat milk and one teaspoon sugar, One banana, One slice whole-grain toast with one tablespoon peanut butter, One cup of black coffee or herbal tea', 'Tuna wrap with one wheat flour tortilla, one-half can water-packed tuna (drained), one tablespoon mayonnaise, lettuce, and sliced tomato\r\nOne sliced avocado, One cup non-fat milk', 'One cup cottage cheese (1-percent fat), One fresh pineapple slice, Four graham crackers, Sparkling water with lemon or lime slice', 'One serving lasagna, Small garden salad with tomatoes and onions topped with one tablespoon salad dressing, One cup non-fat milk'),
(5, 'Friday', 'One piece of French toast with one tablespoon maple syrup, One scrambled or poached egg', 'Veggie burger on a whole grain bun, One cup northern (or other dry) beans, One cup non-fat milk', 'One apple, One pita with two tablespoons hummus, Sparkling water with lemon or lime slice', 'One trout filet, One cup green beans, One cup brown rice, One small garden salad with two tablespoons salad dressing'),
(6, 'Saturday', 'One cup corn flakes with two teaspoons sugar and one cup non-fat milk, One banana, One hard-boiled egg', 'One cup whole wheat pasta with one-half cup red pasta sauce, Medium garden salad with tomatoes and onions and two tablespoons salad dressing', 'One and one-half cup cottage cheese, One fresh peach', 'Four and one-half ounce serving of pork loin,Small garden salad with tomatoes and onions topped with two tablespoons oil and vinegar (or salad dressing), One small baked sweet potato'),
(7, 'Sunday', 'One cup cooked oatmeal with one-half cup blueberries, one-half cup non-fat milk, and one tablespoon almond slivers', 'Six-ounce baked chicken breast, Large garden salad with tomatoes and onions and two tablespoons salad dressing, One baked sweet potato', 'ne cup raw broccoli florets, One cup raw sliced carrot, Two tablespoons veggie dip or salad dressing', '3-ounce serving of baked or grilled salmon, One-half cup black beans, One cup Swiss chard, One cup brown rice, One whole wheat dinner roll with a pat of butter');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `address` varchar(250) NOT NULL,
  `fee_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `fname`, `lname`, `email`, `password`, `mobile`, `address`, `fee_status`) VALUES
(1, 'ashok Kumar', 'Meena', 'ashok@gmail.com', 'ashok@123', 7742424214, 'ashok address goes here...', 1),
(2, 'rahul', 'Meena', 'rahul@gmail.com', 'rahul@123', 9942549875, 'rahul address goes here...', 1),
(3, 'Rohit', 'Sharma', 'rohit@gmail.com', 'rohit@123', 9999999998, 'Rohit address...', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance1`
--
ALTER TABLE `attendance1`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance2`
--
ALTER TABLE `attendance2`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance3`
--
ALTER TABLE `attendance3`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `attendance4`
--
ALTER TABLE `attendance4`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance1`
--
ALTER TABLE `attendance1`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance2`
--
ALTER TABLE `attendance2`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance3`
--
ALTER TABLE `attendance3`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance4`
--
ALTER TABLE `attendance4`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
