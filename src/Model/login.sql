-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 09:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `author_id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL,
  `person` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`author_id`, `articles_id`, `person`) VALUES
(12, 1, 'akshat');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `marks`, `article_id`) VALUES
(12, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cakeform`
--

CREATE TABLE `cakeform` (
  `id` int(5) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `roles` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cakeform`
--

INSERT INTO `cakeform` (`id`, `profile_pic`, `first_name`, `last_name`, `username`, `email`, `password`, `gender`, `mobile_no`, `date_of_birth`, `country`, `zipcode`, `interest`, `description`, `roles`) VALUES
(44, 'http://localhost/cake/webroot/img/image001.png', 'Dara', 'Clarke', 'xavuxywoti', 'horasu@hotmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Male', 299, '2017-06-03', 'Others', 18227, 'Possimus recusandae Rerum fugiat adipisci quasi fuga Qui excepturi id iure id architecto aliquam minim', 'Sint sit eos sapiente et voluptates minima', 0),
(45, 'http://localhost/cake/webroot/img/img_fjords.jpg', 'Willow', 'Weeks', 'fykyqa', 'nobesu@hotmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Male', 463, '2017-04-26', 'USA', 75936, 'Dolor omnis veritatis laborum vero ducimus sapiente eius voluptate eu omnis saepe repellendus Consequuntur dolore aspernatur', 'Anim dolores amet rerum cillum dolorem ullamco vel tempora enim ut sequi blanditiis autem temporibus et blanditiis tempor', 0),
(46, 'http://localhost/cake/webroot/img/image001.png', 'Lydia', 'Rich', 'xumymywe', 'gyxukyfob@yahoo.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Male', 45, '2015-02-09', 'USA', 31271, 'Non vel quos enim vero illo in sunt', 'Debitis voluptatibus qui esse elit sunt modi id labore tempore', 0),
(47, 'http://localhost/cake/webroot/img/img_fjords.jpg', 'Dana', 'Beach', 'qykomyzyq', 'caxajeqeza@gmail.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Male', 47, '2015-04-04', 'Others', 43658, 'Quis odio velit eveniet consequatur dolor distinctio Voluptatem pariatur Aute', 'Dolor quia sunt in possimus hic quam qui modi consequuntur vitae exercitation nihil sunt veritatis consequatur aut corrupti aut laudantium', 0),
(48, 'http://localhost/cake/webroot/img/img_fjords.jpg', 'Hayden', 'Marquez', 'fopovoku', 'pedu@yahoo.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Female', 168, '2018-03-29', 'Others', 65722, 'Sunt ut odio deserunt et animi non quos molestias', 'Proident explicabo Distinctio Sunt ipsum iure nesciunt ex nostrum cum omnis', 0),
(50, 'http://localhost/cake/webroot/img/img_fjords.jpg', 'Indira', 'Daniels', 'hello', 'dybegux@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', 789, '2021-10-02', 'Others', 68753, 'Quo quia deleniti nostrud amet voluptas', 'Nobis nemo earum molestias id sit aliquid sint non doloribus mollit eu voluptas eos quidem ut dolorum elit qui aliquip', 0),
(51, 'http://localhost/cake/webroot/img/image001.png', 'Imani', 'Merritt', 'pankaj', 'dota@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Female', 851, '2019-05-03', 'Others', 38761, 'In aliquip velit et animi corporis aperiam in ex asperiores sed', 'Ducimus eos aute non sint et enim suscipit velit eiusmod aut ipsa cum recusandae Iste quia qui cupidatat consequuntur', 1),
(52, 'http://localhost/cake/webroot/img/image001.png', 'Uta', 'Roberts', 'gapady', 'cegudozete@yahoo.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Male', 410, '2016-11-03', 'Others', 14873, 'Quia harum eu magnam deserunt ut aute veniam duis cupiditate obcaecati ut neque aut illo incididunt in voluptates id labore', 'Quo et accusantium aut officia cupidatat quae', 0),
(53, 'http://localhost/cake/webroot/img/image001.png', 'Maxwell', 'Vaughn', 'shiv', 'wupizovu@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', 266, '2020-09-29', 'Others', 89796, 'Aliqua Nesciunt consequatur sit in', 'Pariatur Repudiandae ea ratione natus in dignissimos mollit similique quisquam sit culpa enim ut neque', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `approved` tinyint(1) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`approved`, `comment_id`, `author_id`, `text`, `article_id`) VALUES
(0, 14, 12, 'dgh', 1),
(1, 70, 12, 'dxhzh', 1),
(0, 85, 17, 'hk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `name`, `marks`) VALUES
(1, 'akshat', 95);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Photo` varchar(254) DEFAULT NULL,
  `First_Name` varchar(254) NOT NULL,
  `Last_Name` varchar(254) DEFAULT NULL,
  `Username` varchar(254) NOT NULL,
  `Email` varchar(254) NOT NULL,
  `Password` varchar(254) NOT NULL,
  `Gender` varchar(254) NOT NULL,
  `Company` varchar(254) DEFAULT NULL,
  `Address_1` varchar(254) DEFAULT NULL,
  `Address_2` varchar(254) DEFAULT NULL,
  `City` varchar(254) NOT NULL,
  `Zip_Code` varchar(6) NOT NULL,
  `Mobile_No` varchar(10) NOT NULL,
  `DOB` varchar(15) NOT NULL,
  `Interest` varchar(254) DEFAULT NULL,
  `Description` varchar(254) DEFAULT NULL,
  `Rating` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Photo`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`, `Gender`, `Company`, `Address_1`, `Address_2`, `City`, `Zip_Code`, `Mobile_No`, `DOB`, `Interest`, `Description`, `Rating`) VALUES
(9, 'Upload Pictures', 'First Name', 'Last Name', 'Username', 'Email', 'Password', 'Gender', 'Company', 'Address Line 1', 'Address Line 2', 'City', 'Zip', 'Mobile No', 'Date of Birth', 'Interest', 'Description', 'Rating'),
(10, '../img/image4_168641560.jpg', 'Kitra', 'Moore', 'wezepicex', 'kivacodav@hotmail.com', '26b5c3f86027614d7c3bbec4238a97f8', 'female', 'Stokes Brennan LLC', 'Noida', 'Noida', 'Laboris suscipit ipsa modi et numquam', '344992', '9839231300', '1995-08-07', 'Puzzles', 'Puzzles', '1'),
(14, '../img/leaves.jpg', 'Renee', 'Booker', 'muwypizily', 'nytax@yahoo.com', '26b5c3f86027614d7c3bbec4238a97f8', 'male', 'Duran Ayala Trading', 'Lucknow', 'Noida', 'Kanpur', '86836', '9839231300', '1973-06-08', 'Cars', 'Cars', '1'),
(18, '../img/paris.jpg', 'Dennis', 'Delgado', 'feduj', 'jukefyty@hotmail.com', '26b5c3f86027614d7c3bbec4238a97f8', 'female', 'Hartman Flores Trading', 'afsgdh', 'dfhdfsh', 'Ut sapiente duis et harum iste reiciendis excepturi', '22301', '9838225911', '1996-10-22', 'Puzzles', 'Puzzles', '1'),
(19, '../img/cat.jpg', 'Lael', 'Boone', 'dykar', 'veqyp@gmail.com', '26b5c3f86027614d7c3bbec4238a97f8', 'male', 'Mcleod Wilson Plc', 'Lucknow', 'Lucknow', 'Nulla omnis a labore mollit omnis voluptatibus rerum quibusdam', '47581', '9838225911', '2006-05-23', 'Cars', 'Cars', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `users_id` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`users_id`, `profile_pic`, `username`, `email`, `gender`, `password`, `country`) VALUES
(2, '', 'anakshiant1', 'nnd11@gmai.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'India'),
(8, 'acclo.dll', 'Let', 'Let@gmail.com', 'Female', '$2y$10$n88xfjy8JegQ70iemb8wBuRQxVoGuKbAlFn2eRJrOJxrPAXVdG6fy', 'USA'),
(10, 'abplo.dll', 'parvati', 'parji@gmailc.com', 'Female', '$2y$10$xjzJOhyccrTDJhaBtXoXXe8qYLY2uwONWUivgAsTWQOjQfZXEBcre', 'Others'),
(11, 'abplo.dll', 'nini', 'nini@gmail.com', 'Female', '$2y$10$W7HP718ZaUpM3353MY8HouCdqGd9PTns61dQelnWIXaVERSK.lmni', 'USA'),
(12, 'dbmmlo.dll', 'niniy', 'niniy@gmail.com', 'Female', '827ccb0eea8a706c4c34a16891f84e7b', 'USA'),
(13, 'acclo.dll', 'pankaj', 'pakaj@gmail.com', 'Male', '827ccb0eea8a706c4c34a16891f84e7b', 'Others'),
(17, '', 'devvv', 'Devv@gmail.com', 'Male', '202cb962ac59075b964b07152d234b70', 'India'),
(18, '', '2', 'g@gmil.com', 'Female', 'd41d8cd98f00b204e9800998ecf8427e', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`articles_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `cakeform`
--
ALTER TABLE `cakeform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cakeform`
--
ALTER TABLE `cakeform`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
