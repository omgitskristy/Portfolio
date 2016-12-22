-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 10, 2011 at 10:36 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `designsavvy`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `title` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `image`, `thumb`, `title`, `creator`, `active`) VALUES
(69, 'images/advertisements/07.jpg', 'images/advertisements/thumbs/07.jpg', 'H2O Pro Lures: Cat ', 'TBWA', 1),
(68, 'images/advertisements/06.jpg', 'images/advertisements/thumbs/06.jpg', 'Hogle Zoo: Elephant ', 'Richter7', 1),
(67, 'images/advertisements/05.jpg', 'images/advertisements/thumbs/05.jpg', 'Greenpeace: Origami ', 'Roberts Smith, London ', 1),
(65, 'images/advertisements/03.jpg', 'images/advertisements/thumbs/03.jpg', 'Mini Chupa Chups Kipik: Action Man ', 'DDB, Paris, France ', 1),
(66, 'images/advertisements/04.jpg', 'images/advertisements/thumbs/04.jpg', 'Tamiya: Marilyn Conspiracy ', 'Ogilvy &amp; Mather ', 1),
(64, 'images/advertisements/02.jpg', 'images/advertisements/thumbs/02.jpg', 'Hell Pizza: Mis-Fortune Cookies ', 'Barnes, Catmur &amp; Friends ', 1),
(63, 'images/advertisements/01.jpg', 'images/advertisements/thumbs/01.jpg', 'Secrets Well Kept. Samsung 320GB ', 'Excell Ogilvy ', 1),
(70, 'images/advertisements/08.jpg', 'images/advertisements/thumbs/08.jpg', 'Drontal, Profender, Advocate: Worms, 1 ', 'GHG Grey Healthcare Group ', 1),
(71, 'images/advertisements/09.jpg', 'images/advertisements/thumbs/09.jpg', 'Mazda CX7: Predator Ride, 2 ', 'The Smarts ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `typography`
--

CREATE TABLE IF NOT EXISTS `typography` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `thumb` varchar(500) NOT NULL,
  `title` varchar(50) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `typography`
--

INSERT INTO `typography` (`id`, `image`, `thumb`, `title`, `creator`, `active`) VALUES
(17, 'images/typography/05.jpg', 'images/typography/thumbs/05.jpg', 'Care Tag For Our Planet ', 'BBDO', 1),
(16, 'images/typography/04.jpg', 'images/typography/thumbs/04.jpg', 'You Don''t Have To Stay Inside The Lines ', 'The Coke Side of Life ', 1),
(15, 'images/typography/03.jpg', 'images/typography/thumbs/03.jpg', 'Venture Custom Guitars: Venture sellouts ', 'Brand Content ', 1),
(14, 'images/typography/02.jpg', 'images/typography/thumbs/02.jpg', 'Bulmers Cider: Tonya ', 'Clemenger BBDO', 1),
(13, 'images/typography/01.jpg', 'images/typography/thumbs/01.jpg', 'Converse: Fall/Winter 2011, 5 ', 'In House Converse', 1),
(18, 'images/typography/06.jpg', 'images/typography/thumbs/06.jpg', 'Stop the Use of Child Soldiers ', 'Miami Ad School ', 1),
(19, 'images/typography/07.jpg', 'images/typography/thumbs/07.jpg', 'Lou Doillon For I Gold ', 'Modena, Italy ', 1),
(20, 'images/typography/08.jpg', 'images/typography/thumbs/08.jpg', 'Culture Club (5 o''clock teenager) ', 'Jared Nickerson ', 1),
(21, 'images/typography/09.jpg', 'images/typography/thumbs/09.jpg', 'Keep Oceans Clean ', 'Termepa', 1);
