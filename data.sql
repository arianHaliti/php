-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 02:08 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `fullname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `fullname`) VALUES
(1, 'arian111', '967ee5a648575da316424d396d0fbe37d6a387c0d6f16065b1fdc6a880a57324', 'º¾ÓR²ÐÒö»ÓÿkD\'%=òÆ÷w›n*(D{', 'asdasd'),
(2, 'arian123', 'c847a5dae102a23e93a27219d16b3141df9cd86ecf850f6acf04b63a463a01c9', 'è“õ¥s ÐÑÊ-gÁ÷„–09sd:ÞL¶cmá', '123123'),
(3, 'filani123', 'd10c0379daddac19bdd23b55481142a466ffb6353f43bbaac72c136e8c383fb9', '\'Mÿæuµ}@…Ä¾œù¿…O7|h.“½ðõþw|O‹\0', 'asdasdd'),
(4, 'user', '7b4ccaebb09edb9e05901d322e92fe7fbe4ae5625ac0b5e14f7da0b752106469', 'ô|xç²IúF‚ôxŠ\Z	Ë‚•\'1ô‚Žû\ZkOŠàwÉ', 'user'),
(5, 'user1', 'eb0f9acc3e2be45df97b45254ae20d67e344b356dea857b6018a64fa2152b094', 'Yðð$‹qÛ°-gü	=ýE«ñ8¨oAV³o&VðÖ', 'user1'),
(6, 'user2', 'aaaa0c3a3d0806ee448babf81fb9bc7e1c6107484228c5d6fefb49298220de6a', ':ÚñÄñÅå5¨Œ{ööà7`0uËglZEO”Ž)¼Öù¹', 'user2'),
(7, 'user3', '38ac4ebb6f050b6620bb1e1e5fc908554bbec53d8e68d5cec2a389a07a0eaed9', '®ØÒrõÏç·soâvaé(DàŽ\0g¿#‘c©¿X»ÿ', 'user3'),
(8, 'user4', '44a6b2a5cd3f7f382c80e52ffad717e5c8046da4c69f0776f3c47ccdc6d5d8ed', 'š«\rçâ–™0vk¿àZÄ,šC:êí#¹RŸÜï¶', 'user4'),
(9, 'lazloow2', '5f640de25d83ece973cff4bee57b41998597b4d0854341be91b5b468934c4e0e', '>Ž<8Êlv®ìÅ¥µ¹R‹c2smš9åD‚­Bfë³', '123'),
(10, 'arian93haliti@gmail.com', '84e38f05bb61bb0d9e61583496e3b24923ac7f55058c790e78f31022a4e350c7', 'üÈ¡ZNŒQð™©{±CZ=—·”…TZgPm£Ñ`', '123'),
(30, 'arian9', '6784f36e57a50400e03728d05851717432e4473d5209472e657161629e66dc59', 'R¨àî§7ØÀ­\\ý`Šè¦LëO·ã\"¼”h\\\0#Ì', 'arian haliti'),
(31, 'arian99', 'f715d48504590a69dc25bfab302a4b9488b55495e6ea5589b675781db17136d5', 'Ø èƒFíZâ†ìý‡¶…»jŽï%/÷Àr÷oþøÙÚZ', 'arian haliti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
