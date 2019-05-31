-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2018 lúc 02:49 PM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_new` int(11) NOT NULL,
  `date` double NOT NULL,
  `reply` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `content`, `id_new`, `date`, `reply`) VALUES
(3, 'gái đẹp', 'tuandn6597@gmail.com', 'hihi chào anh', 17, 0, 'con cac'),
(4, 'gái đẹp', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai quá', 18, 0, '0'),
(5, 'gái đẹp', 'tuandn6597@gmail.com', 'dep trai quá', 18, 0, '0'),
(6, 'dep', 'tuandn6597@gmail.com', 'tuan', 18, 0, '0'),
(7, 'Hot girl', 'tuandn6597@gmail.com', 'Anh tuấn đẹp trai quá', 16, 0, '0'),
(8, 'Hot girl', 'tuandn6597@gmail.com', 'Anh tuấn đẹp trai quá', 16, 0, '0'),
(10, 'thuy', 'tuandn6597@gmail.com', 'tuan dep trai', 23, 0, '0'),
(11, 'dep', 'tuandn6597@gmail.com', 'tuan đẹp trai', 23, 0, '0'),
(12, '2', 'tuandn6597@gmail.com', '1', 23, 0, '0'),
(13, 'fan', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai quá', 23, 0, '0'),
(14, 'hào', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai quá ', 18, 0, '0'),
(15, 'test', 'test@gmail.com', 'test', 21, 1540274386, '0'),
(16, 'test1', 'tuandn6597@gmail.com', 'test1', 21, 1540274478, '0'),
(17, 'khả tú', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai quá', 19, 1540284032, '0'),
(18, 'khả tú', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai quá', 19, 1540284041, '0'),
(19, 'abc', 'tuandn6597@gmail.com', 'abc', 20, 1540284954, '0'),
(20, 'xyz', 'tuandn6597@gmail.com', 'xyz', 20, 1540285024, '0'),
(21, 'xxx', 'tuandn6597@gmail.com', 'xxx', 20, 1540285225, '0'),
(22, 'aaa', 'tuandn6597@gmail.com', 'aaa', 23, 1540286523, '0'),
(23, 'bbb', 'tuandn6597@gmail.com', 'bbb', 23, 1540286604, '0'),
(24, 'ccc', 'tuandn6597@gmail.com', 'ccc', 23, 1540286869, '0'),
(29, 'hhhh', 'tuandn6597@gmail.com', 'abhhhh', 22, 1540287521, '0'),
(30, 'ccc', 'tuandn6597@gmail.com', 'bbb', 22, 1540287526, '0'),
(32, 'viet', 'tuandn6597@gmail.com', 'anh tuan dep trai', 21, 1540344296, '0'),
(34, 'hihi', 'tuandn6597@gmail.com', 'anh tuấn đẹp trai', 17, 1540613052, ''),
(35, 'sasa', 'tuandn6597@gmail.com', 'asas', 24, 1540617067, ''),
(36, 'ab', 'tuandn6597@gmail.com', 'ab', 21, 1540836174, ''),
(37, '1111111111111', 'tuandn6597@gmail.com', '111111111111111', 21, 1540836279, ''),
(38, 'ohoho', 'tuandn6597@gmail.com', 'hohohoho', 26, 1540836322, 'ho con cac'),
(39, 'huhu', 'tuandn6597@gmail.com', 'huhu', 26, 1540836572, ''),
(40, 'hashagi', 'tuandn6597@gmail.com', 'olala', 25, 1540902881, 'concu');

--
-- Bẫy `comment`
--
DELIMITER $$
CREATE TRIGGER `tu dong tao ngay comment` BEFORE INSERT ON `comment` FOR EACH ROW BEGIN
SET NEW.date=UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `category_name`, `parent_id`, `sort_order`) VALUES
(9, 'Photo', 0, 0),
(17, 'Apple', 9, 0),
(18, 'Window', 17, 0),
(19, 'photography', 0, 0),
(20, 'photato', 0, 0),
(25, 'pho', 0, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `name`, `phone`, `image`, `avatar`) VALUES
(1, 'tuandn6597@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đặng Ngọc Tuấn', 1646083862, 'http://localhost:81/project/images/bg-tuan.jpg', 'http://localhost:81/project/images/img-tuan.jpg'),
(2, 'nguyenhung@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Vũ Nguyên Hưng', 113, 'http://localhost:81/project/images/bg-te.jpg', 'http://localhost:81/project/images/img-te.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id_new` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` double NOT NULL,
  `image` text NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id_new`, `title`, `id_danhmuc`, `content`, `date`, `image`, `description`, `tacgia`) VALUES
(16, 'Không cần doanh số, Google làm Pixel để làm gì? Và phải chăng chúng ta đã nghĩ oan cho ', 18, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1539953504, 'http://localhost:81/project/uploads/img11.jpg', '																																													Không chỉ là một hình mẫu tiêu chuẩn cho các nhà sản xuất Android khác, Google Pixel 3 còn đang làm mờ dần các ấn tượng về iPhone trong tâm trí người dùng. Còn với \"tai trâu\" trên Google Pixel 3 XL, đó có thể là sự hy sinh của Google dành cho điều tốt đẹp hơn với Android.																																								', 'Tuấn Đặng'),
(17, 'Wind and solar power are even more expensive than is commonly thought', 18, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1539961533, 'http://localhost:81/project/uploads/img8.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(18, 'Wind and solar power are even more expensive than is commonly thought', 17, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540003636, 'http://localhost:81/project/uploads/img14.jpg', '																		Wind and solar power are even more expensive than is commonly thought																', 'Tuấn Đặng'),
(19, 'Wind and solar power are even more expensive than is commonly thought', 17, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540003653, 'http://localhost:81/project/uploads/img12.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(20, 'Wind and solar power are even more expensive than is commonly thought', 18, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540003672, 'http://localhost:81/project/uploads/img9.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(21, 'Wind and solar power are even more expensive than is commonly thought', 9, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540003688, 'http://localhost:81/project/uploads/img11.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(22, 'Wind and solar power are even more expensive than is commonly thought', 19, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540003704, 'http://localhost:81/project/uploads/img2.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(23, 'Wind and solar power are even more expensive than is commonly thought', 17, '<h3><strong>The front-facing camera is also a top-end sensor compared to the competition, 3.7 megapixels with an f/1.9 lens.</strong></h3>\r\n\r\n<p>While I&rsquo;m not a huge selfie taker, you&rsquo;ll have to ask our&nbsp;<a href=\"http://www.tagdiv.com/\">Senior Selfie Editor</a>, but I do take a whole lot of photos with my smartphone.</p>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\"><img alt=\"The same high-resolution 2,560 × 1,600 screen we\'re certain 1080p Plus\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_67387907.jpg\" style=\"height:624px; width:244px\" /></a></p>\r\n\r\n<p>The same high-resolution 2,560 &times; 1,600 screen we&rsquo;re certain 1080p Plus</p>\r\n\r\n<p>When it&rsquo;s expanded, the UI is a basic row of icons, which you can navigate with a little swipe. This may look a little unusual, but swishing through the various mini-screens is immensely satisfying.</p>\r\n\r\n<p>And how does Apple&rsquo;s biggest phone compare to the Note Edge? Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n\r\n<p>However, just like the stylus, there&rsquo;s a while before you get the knack of all the little provisions Samsung&rsquo;s made to ease users into this screen size.</p>\r\n\r\n<p>The screen is marginally smaller than the Note 4, despite the cranked-up pixel count. Like the Note 4, text pops a little more, and pictures you take with the 16MP camera are obviously better replicated on the Note Edge&rsquo;s screen.</p>\r\n\r\n<p>All told, it&rsquo;s an excellent camera. The image stabilizing works well on all the neon lights that pepper Tokyo, while even people were neatly captured. There&rsquo;s some noise, but it compares favorably against older Galaxy phones. Daylight meant effortless captures and some really nice shots, if I say so myself.</p>\r\n\r\n<p>Well, both remain unwieldy to grip, and the Note Edge is wider. However, the edged screen nuzzles into my hand better and those software tweaks mentioned above give it the advantage.</p>\r\n', 1540058310, 'http://localhost:81/project/uploads/img5.jpg', '																		Happy Sunday from Software Expand! In this week\'s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences...																', 'Tuấn Đặng'),
(24, 'tin này để test', 17, '<h1>Leonardo da Vinci: Đồng t&iacute;nh, ăn chay, v&agrave; những b&iacute; mật kỳ vĩ</h1>\r\n\r\n<ul>\r\n	<li>08:54 21/10/2018</li>\r\n	<li>&nbsp;</li>\r\n	<li>3</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><iframe frameborder=\"0\" height=\"0px\" scrolling=\"no\" src=\"https://sp.zalo.me/plugins/share?dev=null&amp;color=null&amp;oaid=4564080408575020426&amp;href=https%3A%2F%2Fnews.zing.vn%2Fzingnews-post885911.html%3Futm_source%3Dzalo%26utm_medium%3Dzalomsg%26utm_campaign%3Dzingdesktop&amp;layout=icon-text&amp;customize=true&amp;callback=null&amp;id=41638af4-83fa-4976-91fe-b0a33921fa68&amp;domain=news.zing.vn&amp;android=false&amp;ios=false\" width=\"0px\"></iframe></li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p>​Theo dịch giả Phương Lan, s&aacute;ch &ldquo;Leonardo da Vinci&rdquo; kh&ocirc;ng dựng tượng đ&agrave;i một vĩ nh&acirc;n, m&agrave; k&eacute;o Leonardo gần với độc giả, giải m&atilde; cuộc đời &ocirc;ng, để người đọc thời nay th&ecirc;m ngưỡng mộ.</p>\r\n\r\n<p><em><a href=\"https://news.zing.vn/leonardo-da-vinci-tieu-diem.html\">Leonardo da Vinci</a></em>&nbsp;của Walter Isaacson ra mắt th&aacute;ng 10/2017, tới th&aacute;ng 5/2018 được&nbsp;<a href=\"https://news.zing.vn/bill-gates-tieu-diem.html\">Bill Gates</a>&nbsp;lựa chọn l&agrave; s&aacute;ch đ&aacute;ng đọc nhất h&egrave; n&agrave;y. Cuốn s&aacute;ch dầy dặn về dung lượng, hấp dẫn về nội dung được dịch giả Nguyễn Thị Phương Lan chuyển ngữ sang tiếng Việt một c&aacute;ch trọn vẹn bằng t&igrave;nh y&ecirc;u nghệ thuật v&agrave; đam m&ecirc; ng&ocirc;n ngữ.<br />\r\n<br />\r\nNh&acirc;n dịp s&aacute;ch ra mắt tại Việt Nam (19/10), dịch giả Phương Lan tr&ograve; chuyện về cuốn s&aacute;ch v&agrave; qu&aacute; tr&igrave;nh kh&aacute;m ph&aacute; nh&acirc;n vật vĩ đại Leonardo da Vinci.</p>\r\n\r\n<h3>Vừa dịch vừa kh&aacute;m ph&aacute;, học hỏi</h3>\r\n\r\n<p><em>- Điều g&igrave; đưa chị tới với bản thảo cuốn s&aacute;ch &quot;Leonardo da Vinci&quot; của Walter Isaacson, để rồi dịch n&oacute;?</em><br />\r\n<br />\r\n- Thực ra, ban đầu t&ocirc;i kh&ocirc;ng chọn dịch cuốn s&aacute;ch n&agrave;y v&igrave; Leonardo da Vinci m&agrave; l&agrave; v&igrave; t&aacute;c giả Walter Isaacson. D&ugrave; l&agrave; một vĩ nh&acirc;n trong lịch sử nh&acirc;n loại, nhưng một nghệ sĩ từ thời Phục Hưng, đ&atilde; sống c&aacute;ch m&igrave;nh tới 500 năm c&oacute; vẻ như sẽ kh&ocirc;ng gi&uacute;p t&ocirc;i li&ecirc;n hệ được g&igrave; nhiều tới bản th&acirc;n.<br />\r\n<br />\r\nĐiều g&acirc;y ấn tượng cho t&ocirc;i l&agrave; v&igrave; sao Walter Isaacson, nh&agrave; viết tiểu sử lừng danh với những nh&acirc;n vật ho&agrave;n to&agrave;n thuộc về đương đại như Steve Jobs hay Albert Enstein lại quyết định chọn Leonardo da Vinci? Hẳn l&agrave; &ldquo;cổ nh&acirc;n&rdquo; n&agrave;y phải c&oacute; điều g&igrave; đ&oacute; kh&ocirc;ng &ldquo;cổ&rdquo; ch&uacute;t n&agrave;o.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Leonardo da Vinci: Dong tinh, an chay, va nhung bi mat ky vi hinh anh 1\" src=\"https://znews-photo-td.zadn.vn/w1024/Uploaded/oplukaa/2018_10_20/Leo_4.jpg\" style=\"height:534px; width:650px\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>S&aacute;ch<em>&nbsp;Leonardo da Vinci&nbsp;</em>ph&aacute;t h&agrave;nh ở Việt Nam.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>V&agrave; như ch&iacute;nh Walter đ&atilde; chia sẻ c&ugrave;ng bạn đọc, tất cả c&aacute;c nh&acirc;n vật của &ocirc;ng, từ Benjamin Franklin, Albert Einstein, tới Steve Jobs đều l&agrave; những thi&ecirc;n t&agrave;i s&aacute;ng tạo, họ rất th&ocirc;ng minh, nhưng điều mấu chốt lại nằm ở chỗ họ c&oacute; tr&iacute; tưởng tượng v&ocirc; c&ugrave;ng phong ph&uacute;, xuất ph&aacute;t từ kh&aacute;t khao t&igrave;m hiểu về thế giới xung quanh với tr&iacute; t&ograve; m&ograve; thuần khiết của trẻ thơ, cũng ch&iacute;nh l&agrave; thứ khơi gợi v&agrave; gi&uacute;p t&ocirc;i r&egrave;n khả năng kết nối rất nhiều lĩnh vực lại với nhau, từ nghệ thuật tới khoa học, từ nh&acirc;n văn tới c&ocirc;ng nghệ.</p>\r\n\r\n<p>T&aacute;c phẩm của Walter c&ograve;n l&agrave; một c&ocirc;ng tr&igrave;nh khảo cứu c&ocirc;ng phu khi &ocirc;ng quyết định tiếp cận con người Leonardo kh&ocirc;ng phải th&ocirc;ng qua những kiệt t&aacute;c v&ocirc; tiền kho&aacute;ng hậu của &ocirc;ng trong vai tr&ograve; một họa sĩ m&agrave; l&agrave; hơn 7.200 trang sổ tay c&ograve;n s&oacute;t lại với hậu thế. Di sản n&agrave;y, như đ&atilde; được c&ocirc;ng nhận, ch&iacute;nh l&agrave; &ldquo;tuy&ecirc;n ng&ocirc;n đ&aacute;ng kinh ngạc nhất về sức mạnh của t&agrave;i quan s&aacute;t v&agrave; tr&iacute; tưởng tượng của con người từng được đưa l&ecirc;n mặt giấy&quot;.</p>\r\n\r\n<p><em>- Cuốn s&aacute;ch ra mắt cuối năm ngo&aacute;i, vậy chị đ&atilde; dịch 700 trang s&aacute;ch n&agrave;y trong thời gian n&agrave;o?</em><br />\r\n<br />\r\n- T&ocirc;i nhận cuốn s&aacute;ch v&agrave;o những ng&agrave;y đầu th&aacute;ng 1/2018 v&agrave; đến cuối th&aacute;ng 8 th&igrave; ho&agrave;n th&agrave;nh. Cũng vừa hay trong thời gian đầu khi bắt tay v&agrave;o dự &aacute;n n&agrave;y, t&ocirc;i may mắn c&oacute; một ch&uacute;t thay đổi trong cuộc sống: được tạm dừng c&ocirc;ng việc chuy&ecirc;n m&ocirc;n trong một thời gian để ổn định cuộc sống c&ugrave;ng gia đ&igrave;nh nhỏ tại nước ngo&agrave;i. Cuộc sống mới cho ph&eacute;p t&ocirc;i c&oacute; thời gian đọc s&aacute;ch v&agrave; t&igrave;m hiểu kỹ lưỡng về cuộc đời Leonardo.</p>\r\n', 1540099120, 'http://localhost:81/project/uploads/img13.jpg', '									tin này để test								', 'Tuấn Đặng'),
(25, 'test lần 2', 18, '<p>Happy Sunday from&nbsp;<a href=\"http://www.tagdiv.com/\">Software Expand!</a>&nbsp;In this week&rsquo;s edition of Feedback Loop, we talk about the future of Windows Phone, whether it makes sense to build media centers discuss the preferences for metal vs. plastic on smartphones. All that and more past the break the proof of concept can make.</p>\r\n\r\n<p>Just because you can do something, should you? Samsung thinks so. Its second&nbsp;<a href=\"http://www.tagdiv.com/\">experimentally screened</a>&nbsp;phone taps into its hardware R&amp;D and production clout to offer something not many other companies.</p>\r\n\r\n<h3><strong>WHAT DO YOU WANT FROM WINDOWS PHONE?</strong></h3>\r\n\r\n<p><a href=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_73526765.jpg\"><img alt=\"fotolia_73526765\" src=\"https://demo.tagdiv.com/newspaper_tech/wp-content/uploads/2015/05/fotolia_73526765.jpg\" style=\"height:600px; width:1200px\" /></a></p>\r\n\r\n<p>And so, following the Galaxy Round, here&rsquo;s the Galaxy Edge. If you take the basic shape and concept, it&rsquo;s the spitting image of the curved-screen&nbsp;<a href=\"http://www.tagdiv.com/\">Youm prototype</a>spied at CES a little less than two years ago US. Fortunately.</p>\r\n\r\n<p>Now, though, it&rsquo;s a for-real smartphone you can buy. I&rsquo;ve been testing it out in Japan, where it launched instead of the Note 4, although both the Note 4 and the Note Edge will eventually be available.</p>\r\n\r\n<blockquote>\r\n<p>GALAXY NOTE EDGE IS HOW MUCH IT RESEMBLES THE NOTE 4</p>\r\n</blockquote>\r\n\r\n<p>The ability to shrink the likes of Chrome and Google Maps to a popup window and layer it on top of other apps is also useful. Love to see something similar on the iPhone 6 Plus you just get the Note 4 anyway?</p>\r\n', 1540129037, 'http://localhost:81/project/uploads/img5.jpg', 'Wind and solar power are even more expensive than is commonly thought', 'Tuấn Đặng'),
(26, 'dsadasdasdasdas', 20, '<p>dasdasd</p>\r\n', 1540829970, 'http://localhost:81/project/uploads/img11.jpg', 'dasdas', 'Tuấn Đặng'),
(27, 'Wind and solar power are even more expensive than is commonly thought', 18, '<p>dsadsadas</p>\r\n', 1540829985, 'http://localhost:81/project/uploads/img14.jpg', 'dsadasdsa', 'dsadasdas'),
(28, 'tin tức sửa nè pa', 19, '<p>dasdas</p>\r\n', 1540830003, 'http://localhost:81/project/uploads/img10.jpg', 'dasdasdas', 'Tuấn Đặng'),
(33, 'Wind and solar power are even more expensive than is commonly thought', 25, '<p>dsadasdas</p>\r\n', 1540903709, 'http://localhost:81/project/uploads/img13.jpg', 'dsadsadsadasdas', 'dsadsadas'),
(34, 'olalalalala', 19, '<p>dsadasdasdas</p>\r\n', 1540903948, 'http://localhost:81/project/uploads/img16.jpg', 'dsadasdasdas', 'Tuấn Đặng');

--
-- Bẫy `tintuc`
--
DELIMITER $$
CREATE TRIGGER `AUTO CREATE DATE` BEFORE INSERT ON `tintuc` FOR EACH ROW BEGIN
SET NEW.date=UNIX_TIMESTAMP();
END
$$
DELIMITER ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_new` (`id_new`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_new`),
  ADD KEY `FK_DanhMuc` (`id_danhmuc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_new`) REFERENCES `tintuc` (`id_new`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `FK_DanhMuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
