SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `about` VALUES(1, 'Who is this "Kristy"?', 'images/portfolio/test/image-preview.png', 'This project utilizes database design and UI design and development.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `technology` text NOT NULL,
  `link` text,  
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text,
  `image4` text,
  `image5` text,
  `image6` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` VALUES(1, 'Upcoming Project', 'images/portfolio/test/image-preview.png', 'This project utilizes database design and UI design and development.', 'CSS, MySQL, PhotoShop and PHP', null, 'images/portfolio/test/image-screenshot-1.png', 'images/portfolio/test/image-screenot-2.png', null, null, null, null);