-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 01:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_news_db24`
--

-- --------------------------------------------------------

--
-- Table structure for table `common_categories`
--

CREATE TABLE `common_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_categories`
--

INSERT INTO `common_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'About Us', '2018-12-08 06:45:09', '2018-12-08 06:45:09'),
(2, 'Copyright', '2018-12-08 06:45:09', '2018-12-08 06:45:09'),
(3, 'Privacy Policy', '2018-12-08 06:45:24', '2018-12-08 06:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `common_page`
--

CREATE TABLE `common_page` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `page_content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `common_page`
--

INSERT INTO `common_page` (`id`, `category_id`, `page_content`, `created_at`, `updated_at`) VALUES
(3, 3, '<p>\r\n\r\n</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Quisque facilisis placerat dignissim. Suspendisse quis lacin libero. Vivamus augue mauris, facilisis nec mollis ac, volutpat quis sem. iCras porta ligula eget sem blandit posuere.</p><p>Duis facilisis ultrices augue et bibendum. Proin vitae libero on ultricies, fermentum ex eget, varius arcu. Duis facilisis ultrices augue et bibendum. Proin vitae libero on ultricies, fermentum ex eget, varius arcu. Praesent in quam in ipsumtem egestas. Ut pulvinar orci eleifend, cursus ex vel, dignissim diam. Proin the tincidunt mi ac quam semper efficitur.</p><p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridicu lus mus. Quisque facilisis placerat dignissim. Suspendisse quis lacin libero. Vivamus augue mauris, facilisis nec mollis ac, volutpat quis sem. iCras porta ligula eget sem blandit posuere.</p><br>\r\n\r\n<br><p></p>', '2018-12-08 07:11:19', '2018-12-08 07:11:19'),
(5, 1, '<p>\r\n\r\n</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><br>\r\n\r\n<br><p></p>', '2018-12-08 08:01:26', '2018-12-08 08:01:26'),
(6, 2, '<p>\r\n\r\n</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p><br>\r\n\r\n<br><p></p>', '2018-12-08 08:03:12', '2018-12-08 08:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Crickets', '<p>Crickets</p>', 1, '2018-11-26 06:01:06', '2018-11-26 06:01:06'),
(3, 'International Sports', '', 1, '2018-11-26 06:54:14', '2018-11-26 06:54:14');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `news` text,
  `img` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `meta_keywords` text,
  `meta_description` text,
  `hit` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `news`, `img`, `status`, `meta_keywords`, `meta_description`, `hit`, `created_at`, `updated_at`) VALUES
(8, 4, 'Test', '\r\nAbu Haider Rony Biography Age Height Girlfriend Career\r\n    \r\nআবু হায়দার রনি ১৯৯৬ সালের ফেব্রুয়ায়রি মাসের ১৪ তারিখ জন্মগ্রহন করেন। তিনি বামহাতি আর্ম ফাস্ট মিডিয়াম বল করে থাকেন এবং ডানহাতি ব্যাট করেন যদিও তিনি বলার হিসাবে খেলেন। ২০১৬ সাল থেকে জাতীয় দলে খেলে আসলেও ২০১৮ সালে ডুবায় এ অনুষ্ঠিত এশিয়া কাপে আফগানিস্তানের বিপক্ষে ২০ সেপ্টেম্বর তার একদিনের আন্তর্জাতিক ক্রিকেটে অভিষেক হয়। \r\n\r\nপ্রাথমিক জীবন\r\n\r\n\r\n ২০১৫ সালে বাংলাদেশ প্রিমিয়ার লিগে এ কোমিল্লা ভিক্টরিয়ান্স এর হয়ে যখন আবু হায়দার রনি খেলা শুরু করেন, অনেকেই তাকে ভালভাবে চিনতে পারেনি। কিন্তু তিনি সেই টুর্নামেন্টে ২২ টি উইকেট শিকার করেন এবং মানুষের নজরে আসেন।\r\n\r\nব্যক্তিগত জীবন\r\nআবু হায়দার রনি নেত্রোকোনায় জন্মগ্রহন করেন এবং সেখানেই বড় হয়ে ওঠেন। এটি একটি ছোট্ট শহর যা বাংলাদেশের রাজধানী ঢাকা থেকে ১৬৮ কিলোমিটার দূরে। আবু হায়দার রনি একজন প্রফেশনাল ক্রিকেটার তিনি বয়সের ভিত্তিতে গ্রুপের খেলায় অনেক ভাল খেলেন। \r\n\r\nঘরোয়া ক্রিকেট\r\n২০১৫ সালে বাংলাদেশ প্রিমিয়ার লিগে এ কোমিল্লা ভিক্টরিয়ান্স এর হয়ে যখন আবু হায়দার রনি খেলা শুরু করেন, অনেকেই তাকে ভালভাবে চিনতে পারেনি। কিন্তু তিনি সেই টুর্নামেন্টে ২২ টি উইকেট শিকার করেন এবং মানুষের নজরে আসেন। \r\n\r\nআবু হায়দার রনি প্রথম উইকেট সংগ্রহ করেন কুমার সাঙ্গাকারার এরপর তিনি মাহমুদুল্লাহ রিয়াদ, সৌম সরকার এর উইকেট শিকার করে ব্রেক থ্রু এনে দেন।\r\n\r\nআবু হায়দার রনি গাজি গ্রুপ ল্রিকেটারস এর হয়ে ২০১৬-১৭ সালে অনুষ্ঠিত ঢাকা প্রিমিয়ার লিগে সর্বোচ্চ উইকেট শিকার করেন। সেই লিগে আবু দায়দার রনি ৩৫ টি উইকেট দখল করেন ১৬ ম্যাচ খেলে। এবং গাজী গ্রুপ সেই টুর্নামেন্ট এর চ্যাম্পিয়ন হয়।\r\n\r\n\r\n\r\n \r\n\r\nআন্তর্জাতিক ক্রিকেট\r\nআবু হায়দার রনির খেলায় মুগ্ধ হয়ে ২০১৬ সালে তাকে টি-২০ তে ডাকা হয় এবং তার টি-২০ ক্যারিয়ার শুরু হয় ওখান থেকেই।\r\n\r\nআবু হায়দার রনি ৫ টি ম্যাচ খেলে ৩ টি উইকেট তার ঝুলিতে তুলে নেন তখন, তারপর ই সে আবার টি-২০ দল থেকে ছিটকে পড়েন।\r\n\r\n২০১৬ সাল থেকে জাতীয় দলে খেলে আসলেও ২০১৮ সালে ডুবায় এ অনুষ্ঠিত এশিয়া কাপে আফগানিস্তানের বিপক্ষে ২০ সেপ্টেম্বর তার একদিনের আন্তর্জাতিক ক্রিকেটে অভিষেক হয়। জিবাবুয়ের বিপক্ষে ২০১৬ সালের জানুয়ার মাসের ২০ তারিখে তার টি-২০ তে অভিষেক হয়।\r\n\r\n ২০১৮ সালের সেপ্টেম্বর মাসের ২০ তারিখের হিসাব অনুযায়ী তিনি শেষ টি-২০ খেলেছিলেন, ২০১৮ সালের ৫ই আগষ্ট জিম্বাবুয়ের বিপক্ষে।\r\n\r\nঅর্জন\r\n২০১২ সালে বাংলাদেশ অনুর্ধ-১৯ দলে কাত্র বিপক্ষে ৯ উইকেট শিকার করে আলোচনায় আসেন।', '46696172_10156810691729609_7030662950163578880_n3.jpg', 1, '', '', NULL, '2018-12-05 14:11:31', '2018-12-05 14:11:31'),
(9, 4, 'Welcome to Nishat IT Limited', '<p>\r\n\r\nAbu Haider Rony Biography Age Height Girlfriend Career আবু হায়দার রনি ১৯৯৬ সালের ফেব্রুয়ায়রি মাসের ১৪ তারিখ জন্মগ্রহন করেন। তিনি বামহাতি আর্ম ফাস্ট মিডিয়াম বল করে থাকেন এবং ডানহাতি ব্যাট করেন যদিও তিনি বলার হিসাবে খেলেন। ২০১৬ সাল থেকে জাতীয় দলে খেলে আসলেও ২০১৮ সালে ডুবায় এ অনুষ্ঠিত এশিয়া কাপে আফগানিস্তানের বিপক্ষে ২০ সেপ্টেম্বর তার একদিনের </p><p>আন্তর্জাতিক ক্রিকেটে অভিষেক হয়। প্রাথমিক জীবন ২০১৫ সালে বাংলাদেশ প্রিমিয়ার লিগে এ কোমিল্লা ভিক্টরিয়ান্স এর হয়ে যখন আবু হায়দার রনি খেলা শুরু করেন, অনেকেই তাকে ভালভাবে চিনতে পারেনি। কিন্তু তিনি সেই টুর্নামেন্টে ২২ টি উইকেট শিকার করেন এবং মানুষের নজরে আসেন। ব্যক্তিগত জীবন আবু হায়দার রনি নেত্রোকোনায় জন্মগ্রহন করেন এবং সেখানেই বড় হয়ে ওঠেন। এটি একটি ছোট্ট শহর যা </p><p><br></p><p>বাংলাদেশের রাজধানী ঢাকা থেকে ১৬৮ কিলোমিটার দূরে। আবু হায়দার রনি একজন প্রফেশনাল ক্রিকেটার তিনি বয়সের ভিত্তিতে গ্রুপের খেলায় অনেক ভাল খেলেন। ঘরোয়া ক্রিকেট ২০১৫ সালে বাংলাদেশ প্রিমিয়ার লিগে এ কোমিল্লা ভিক্টরিয়ান্স এর হয়ে যখন আবু হায়দার রনি খেলা শুরু করেন, অনেকেই তাকে ভালভাবে চিনতে পারেনি। কিন্তু তিনি সেই টুর্নামেন্টে ২২ টি উইকেট শিকার করেন এবং মানুষের নজরে আসেন। আবু হায়দার রনি প্রথম উইকেট সংগ্রহ করেন কুমার সাঙ্গাকারার এরপর তিনি মাহমুদুল্লাহ রিয়াদ, সৌম সরকার এর উইকেট শিকার করে ব্রেক থ্রু এনে দেন। আবু হায়দার রনি গাজি গ্রুপ ল্রিকেটারস এর হয়ে ২০১৬-১৭ সালে অনুষ্ঠিত ঢাকা প্রিমিয়ার লিগে সর্বোচ্চ উইকেট শিকার করেন। সেই লিগে আবু দায়দার রনি ৩৫ টি উইকেট দখল করেন ১৬ ম্যাচ খেলে। এবং গাজী গ্রুপ সেই টুর্নামেন্ট এর চ্যাম্পিয়ন হয়। আন্তর্জাতিক ক্রিকেট আবু হায়দার রনির খেলায় মুগ্ধ হয়ে ২০১৬ সালে তাকে টি-২০ তে ডাকা হয় এবং তার টি-২০ ক্যারিয়ার শুরু হয় ওখান থেকেই। আবু হায়দার রনি ৫ টি ম্যাচ খেলে ৩ টি উইকেট তার ঝুলিতে তুলে নেন তখন, তারপর ই সে আবার টি-২০ দল থেকে ছিটকে পড়েন। ২০১৬ সাল থেকে জাতীয় দলে খেলে আসলেও ২০১৮ সালে ডুবায় এ অনুষ্ঠিত এশিয়া কাপে আফগানিস্তানের বিপক্ষে ২০ সেপ্টেম্বর তার একদিনের আন্তর্জাতিক ক্রিকেটে </p><p>অভিষেক হয়। জিবাবুয়ের বিপক্ষে ২০১৬ সালের জানুয়ার মাসের ২০ তারিখে তার টি-২০ তে অভিষেক হয়। ২০১৮ সালের সেপ্টেম্বর মাসের ২০ তারিখের হিসাব অনুযায়ী তিনি শেষ টি-২০ খেলেছিলেন, ২০১৮ সালের ৫ই আগষ্ট জিম্বাবুয়ের বিপক্ষে। অর্জন ২০১২ সালে বাংলাদেশ অনুর্ধ-১৯ দলে কাত্র বিপক্ষে ৯ উইকেট শিকার করে আলোচনায় আসেন।\r\n\r\n<br></p>', '46696172_10156810691729609_7030662950163578880_n4.jpg', 1, '', '', NULL, '2018-12-05 14:19:23', '2018-12-05 14:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `description` text,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `main_category_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'Cricket', '', 1, '2018-11-26 09:43:39', '2018-11-26 09:43:39'),
(3, 3, 'Hockey', '', 1, '2018-11-26 09:44:10', '2018-11-26 09:44:10'),
(4, 3, 'Football', '', 1, '2018-11-26 09:46:32', '2018-11-26 09:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `access_level` tinyint(1) DEFAULT NULL COMMENT 'access_level = 1 Super Admin, access_level=2 admin	',
  `activation_status` tinyint(1) DEFAULT NULL COMMENT 'status = 1 Active, Status = 0 Inactive	',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `access_level`, `activation_status`, `created_at`, `updated_at`) VALUES
(1, 'Mama Sports', 'mama@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, '2018-11-26 05:14:04', '2018-11-26 05:14:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `common_categories`
--
ALTER TABLE `common_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `common_page`
--
ALTER TABLE `common_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `common_categories`
--
ALTER TABLE `common_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `common_page`
--
ALTER TABLE `common_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
