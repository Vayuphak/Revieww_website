-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 08:38 AM
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
-- Database: `bookdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `book` text NOT NULL,
  `bookeng` varchar(255) NOT NULL,
  `author` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `score` decimal(10,3) NOT NULL,
  `content` text NOT NULL,
  `translator` varchar(255) NOT NULL,
  `printingpress` varchar(255) NOT NULL,
  `t` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `t-upload` datetime NOT NULL,
  `more` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `book`, `bookeng`, `author`, `img`, `score`, `content`, `translator`, `printingpress`, `t`, `isbn`, `t-upload`, `more`) VALUES
(12, '123', '', '321', '../upload/book2.jpg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(13, '123', '', 'ggesg', '../upload/book6.jpeg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(14, 'rehehe', '', 'rehrehe', '../upload/book2.jpg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(15, 'h5e4rjrejn', '', 'herdfhrh', '../upload/book1.png', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(16, 'rhrh', '', 'dddddd', '../upload/book3.jpg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(17, 'gewgewg', '', 'wegdsg', '../upload/book4.jpeg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(18, '111', '', '11111', '../upload/book4.jpeg', 0.000, '', '', '', '', '', '0000-00-00 00:00:00', ''),
(19, 'asd', 'asd', 'asd', '../upload/book3.jpg', 10.000, 'asd', 'asd', 'asd', 'asd', 'asd', '2023-06-23 15:50:57', ''),
(20, 'Captain', '555', '555', '../upload/book5.jpg', 8.000, '\r\nThe warning messages you received indicate that the array keys you are trying to access in the $_POST superglobal array are not defined. This means that the form fields with the corresponding names are not being submitted or are empty.\r\n\r\nTo resolve these warnings, you need to ensure that the form fields in your HTML form have the correct name attributes and that they are being submitted properly.\r\n\r\nMake sure that the name attributes in your HTML form match the array keys you are trying to access in your PHP code. For example, if you have an input field for the book name, it should have the name attribute set to \"name\":', 'aaa', '123', '456', '8888888', '2023-06-23 15:51:52', ''),
(21, 'ten', 'ten', 'ten', '../upload/book4.jpeg', 10.000, 'asd', 'asd', 'aaa', 'vvv', 'vvv', '2023-06-23 15:53:53', ''),
(22, 'asd', 'asd', 'asd', '../upload/book4.jpeg', 8.735, 'asd', 'sss', 'sss', 'ss', 'vvv', '2023-06-23 15:54:36', ''),
(23, 'bbb', 'bbb', 'b', '../upload/book4.jpeg', 8.264, 'b', 'b', 'b', 'b', 'b', '2023-06-23 16:15:11', 'Reccommend,HITS'),
(24, 'test1', 'test1', 'test1', '../upload/book1.png', 5.269, 'There are a couple of errors in your code:\r\n\r\nIn the line include_once \"../db/connect.php\";, you are trying to include a file named \"connect.php\" from the \"../db\" directory. Make sure that the file path is correct and that the file exists in that location.\r\n\r\nIn the line <?phpif($count==0){?>, there is no space between <?php and the if keyword. It should be <?php if ($count == 0) { ?>.\r\n\r\nIn the line <?php}?>, there is no space between <?php and the closing ?> tag. It should be <?php } ?>.\r\n\r\nFixing these issues should resolve the errors in your code.', 'dunno', 'b', 'aaa', '8888888', '2023-06-23 22:26:51', 'Reccommend'),
(25, 'test2', 'test2', 'test2', '../upload/book6.jpeg', 1.234, '<form action=\"/action_page.php\" method=\"get\" id=\"form1\">\r\n<label for=\"fname\">First name:</label>\r\n<input type=\"text\" id=\"fname\" name=\"fname\"><br><br>\r\n<label for=\"lname\">Last name:</label>\r\n<input type=\"text\" id=\"lname\" name=\"lname\">\r\n</form>\r\n<button type=\"submit\" form=\"form1\" value=\"Submit\">Submit</button>', 'dunno', 'test', 'test', '1111111', '2023-06-23 22:37:43', 'Reccommend'),
(26, '1', '2', '3', '../upload/book3.jpg', 3.456, '7', '8', '9', '0', '8888888', '2023-06-23 22:51:16', 'HITS'),
(27, 'OVERDOSE', 'OVERDOSE', 'นิชตุล Shikak', '../upload/book1.png', 10.000, ',\r\nHickey เป็นบทแรกของเล่มนี้ ที่พอเราอ่านจบมันทําให้หัวใจเราแตกออกเป็นเสี่ยง อารมณ์และความรู้สึกที่เราพยายามเลี่ยงก็ได้กลับมาเมื่อตอนอ่านบทนี้จบ จนเราต้องปิดหนังสือเพื่อให้ตัวเองไม่อินกับเนื้อเรื่องมากเกินไป พร้อมอ่านบทต่อๆ ไป ที่พร้อมจะปะทุในหัวเรา หรือทําให้เราพังพินาศและร่วงหล่นอีกครั้ง\r\n,\r\nหนังสือเล่มนี้สําหรับเรา มันเหมือนมานั่งเล่าความรู้สึกที่ครั้งหนึ่งในชีวิตเราเคยผ่าน… เคยรู้สึกมาก่อนเลย… เล่มนี้จะไม่เพียงเเค่พาคุณไปเผชิญกับความ เละเทะของจักรวาล แต่มันยังให้ความหวังในตอนสุดท้าย เหมือนเป็นเเสงที่ริบหรี่มากๆ แต่ตัวละครในเหตุการณ์ทั้งหลายก็พร้อมอยากไปหาแสงนั่น โดยที่ไม่รู้เลยว่ามันจะพาเราไปไหนต่อ แต่ที่รู้รู้คือ ตัวละครอยากจะผ่านเหตุการณ์พวกนั้นเต็มทนเเล้ว\r\n,\r\nเล่มนี้เหมือนเป็นบันทึกส่วนตัวของผู้เขียน ที่ต้องประสบพบเจอมา หลายๆ เหตุการณ์อาจจะดูบ้าบิ่นหลุดโลกอย่างที่ ชื่อหนังสือบอก แต่ถ้าเราค่อยๆ ลองอ่าน จะพอสัมผัสได้ว่า… มันคือความรู้สึกของผู้เขียนที่เคยหรืออาจจะยังรู้สึกกับเรื่องเเต่ละเรื่องด้วยความรู้สึกที่อาจจะเหมือนหรือต่างไปจากเดิมก็ได้…\r\n,\r\nดีใจที่มีโอกาสอ่านเล่มนี้ ถึงเเม้เราจะเคยเจอนักเขียน @shikak18 และพูดคุย ถามไถ่กันเสมอ แต่ก็ไม่กล้าพูดว่าเรารู้จักนักเขียนดีพอ เล่มนี้เหมือนนักเขียนกําลังเล่าเรื่องชีวิตเขาให้เราฟังในอีกมุมหนึ่งของเขาเลย — ขอบคุณที่เขียนเล่มนี้ออกมาแล้วทําให้ผู้อ่านอย่างเรารู้สึกไม่โดดเดี่ยวในจักรวาลอันพิศวงนี้นะคะ รอติดตามเล่มต่อไปค่ะ', 'Ploy', 'asd', 'asd', '9999999', '2023-06-24 22:48:34', 'Reccommend'),
(28, 'p', '', 'p', '../upload/book2.jpg', 5.269, 'phikuk', 'p', 'p', 'p', 'ppp', '2023-07-01 22:39:54', 'Reccommend'),
(29, 'ppp', 'pp', 'pp', '../upload/book1.png', 8.735, 'ullllui', 'ului', 'uil', 'iul', 'uilui', '2023-07-01 22:42:15', ''),
(30, 'a', 'a', 'a', '../upload/book4.jpeg', 8.735, 'a', 'a', 'a', 'a', 'a', '2023-07-01 22:43:24', ''),
(31, 'b', 'b', 'b', '../upload/book1.png', 10.000, 'b', 'b', 'b', 'b', 'b', '2023-07-01 22:44:07', 'Array'),
(32, 'c', 'c', 'c', '../upload/book3.jpg', 8.735, 'c', 'c', 'c', 'c', 'c', '2023-07-01 22:44:48', 'Reccommend,HITS'),
(33, 'h', 'h', 'h', '../upload/book4.jpeg', 123.000, 'h', 'h', 'h', 'h', 'h', '2023-07-04 23:00:16', 'HITS'),
(34, 'g', 'g', 'g', '../upload/book1.png', 10.000, 'g', 'g', 'g', 'g', 'g', '2023-07-05 00:13:40', 'HITS'),
(35, 'asd', '', 'ddd', '../upload/book5.jpg', 10.000, 'd', 'd', 'd', 'd', 'd', '2023-07-08 22:52:52', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
