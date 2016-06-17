-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 10:24 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogrob`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoriesID` tinyint(2) NOT NULL AUTO_INCREMENT,
  `categoriesName` varchar(255) NOT NULL,
  `categoriesStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`categoriesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoriesID`, `categoriesName`, `categoriesStatus`) VALUES
(1, 'Others', 1),
(2, 'Web Geek', 1),
(3, 'Web Developers', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menuId` tinyint(3) NOT NULL AUTO_INCREMENT,
  `menuName` varchar(255) NOT NULL,
  `menuOrder` tinyint(3) NOT NULL,
  `menuUrl` varchar(255) NOT NULL,
  PRIMARY KEY (`menuId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menuId`, `menuName`, `menuOrder`, `menuUrl`) VALUES
(1, 'Home', 0, '/'),
(2, 'Tentang Saya', 1, '/page/detail/1/about');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `pageId` tinyint(4) NOT NULL AUTO_INCREMENT,
  `pageDate` date NOT NULL,
  `pageTitle` varchar(255) NOT NULL,
  `pageContent` text NOT NULL,
  PRIMARY KEY (`pageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pageId`, `pageDate`, `pageTitle`, `pageContent`) VALUES
(1, '2016-06-16', 'Tentang Saya', 'Under construct');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postId` int(4) NOT NULL AUTO_INCREMENT,
  `postDate` date NOT NULL,
  `postTitle` varchar(255) NOT NULL,
  `postContent` text NOT NULL,
  `postImg` varchar(255) NOT NULL,
  `postCategory` varchar(255) NOT NULL,
  PRIMARY KEY (`postId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `postDate`, `postTitle`, `postContent`, `postImg`, `postCategory`) VALUES
(1, '2016-06-13', 'Hello World', '<p><img alt="salute" src="http://66.media.tumblr.com/8d538290c1e4bf71a955f1b4bf566d81/tumblr_mi05bv9MhC1rvnbhio1_400.gif" style="height:233px; width:400px" /></p>\n\n<p>Halo duniaa :)<br />\nIni adalah formalitas dan ini adalah postingan pertama di blog saya. Oiya, di dunia yang serba open-source ini, bahkan script blog saya bisa kamu unduh di <a href="https://github.com/jankerzone/BlogRob" target="_blank">Github</a>. Kenapa tidak pakai blog engine yang sudah tersebar di alam liar internet? Hemm, entahlah. Saya seorang programmer, dan saya blog-sistem ini saya kembangkan dikala senggang. Ah sudah, silahkan berjalan-jalan sesuka anda. Waktu anda sudah terbuang 5 menit sia-sia, ngahahaha *tertawa sinis*</p>', '', '1'),
(2, '2016-06-14', 'Belajar Bahasa Python Gratis', '<p>Bahasa phyton bukanlah bahasa ular, tapi kepopulernnya sebagai alternatif lain dari bahasa pemrograman Ruby dan PHP membuat python semakin diminati. Perang bahasa modern semakin gencar, dan python juga sudah dibeli Google, sang raksasa mesin pencari. Tentunya Google juga mempertimbangkan matang-matang soal penggunaan bahasa pemrograman yang mereka pakai, dan sebagai developer, kita patut curiga bahwa python akan berkembang pesat. Coba kita tengok infografis tentang tiga bahasa pemrograman yang populer (gambar 2) <img src="https://s-media-cache-ak0.pinimg.com/736x/9e/40/fd/9e40fdcd187caf50a7a143b17bd6204a.jpg" />Okay? Meskipun masih kalah bersaing dengan PHP yang lebih massif, tentunya ini bukan berarti kalah. Dan bagi yang tertarik dengan python, ada cara untuk belajar dengan GRATIS.</p>\n\n<p>Link bacanya bisa kamu dapatkan di <a href="http://learnpythonthehardway.org/book/">SINI</a>.</p>', 'a3awa5e7u54cssg.jpg', '3'),
(3, '2016-06-16', 'Optimalisasi Gambar Demi Speed Websitemu', '<p>(Artikel diterbitkan pertama kali di <a href="https://medium.com/@jankerzone/optimalisasi-gambar-demi-speed-websitemu-e36af05f108c">Medium</a>)<br />\nBeberapa pakar sering bilang, bahwa tidak hanya 2&ndash;3 hal saja yang mempengaruhi kecepatan pageload sebuah website. Satu diantaranya, bahkan ukuran sebuah gambar, mampu mempengaruhi kesimpulan visitorakan sebuah web (kecuali website yang benar-benar tentang gambar, misal imgur, 500px, dll).<br />\nBukannya lebay, bahkan saya akan malas menanti gambar yang tak kunjung terload secara sempurna, bisa dikarenakan ukuran gambar yangterlalu besar. Resize gambar dengan tag width/height pada &lt;img&gt; tak berbuat banyak, mengingat browser akan meload gambar secara penuh sebelum meresize-nya.<br />\nYahoo! Smush.it, tools yang mereka menggunakan teknologi yang mengoptimalisasi sebuah gambar, membuang bytes-bytes yang percuma pada sebuah gambar hingga menghasilkan gambar yang, hemat ukuran. &ldquo;Lossless&rdquo; tool, yang berarti mengoptimalkan gambar tanpa mengurangi kualitas visual. Oke, maka tools ini bukanlah sebuah alat kompresi, ini alat diet untuk gambar-gambar pada websitemu.<br />\n<a href="http://www.smushit.com/ysmush.it/" style="line-height: 1.6em;">Link</a></p>', 'g1afn7g4fhcgks4.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settingUrl` varchar(225) NOT NULL,
  `settingMeta` varchar(225) NOT NULL,
  `settingDesc` varchar(225) NOT NULL,
  `settingFav` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingUrl`, `settingMeta`, `settingDesc`, `settingFav`) VALUES
('http://localhost/blogrob/', '', 'BlogRob CMS adalah aplikasi Website berbasis Codeigniter yang dibuat hanya sebagai pembelajaran pribadi dari penulis. CMS ini berusaha mengimplementasikan teknik-teknik SEO dan sistem yang sesimpel mungkin.', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(3) NOT NULL AUTO_INCREMENT,
  `userName` varchar(25) NOT NULL,
  `userMail` varchar(25) NOT NULL,
  `userPass` varchar(32) NOT NULL,
  `userType` enum('admin','user','guest') NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userMail`, `userPass`, `userType`) VALUES
(1, 'robsan', 'rob@san.com', 'e12c237a197b33fc1fdd0a6e74618976', 'admin'),
(2, 'bocah', 'boc@ah.com', 'e12c237a197b33fc1fdd0a6e74618976', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
