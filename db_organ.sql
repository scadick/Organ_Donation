-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2018 at 03:21 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_organ`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drive`
--

DROP TABLE IF EXISTS `tbl_drive`;
CREATE TABLE IF NOT EXISTS `tbl_drive` (
  `drive_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `drive_title` varchar(300) NOT NULL,
  `drive_date` varchar(20) NOT NULL,
  `drive_goal` varchar(10) NOT NULL,
  `drive_regs` varchar(10) NOT NULL,
  `drive_month` varchar(10) NOT NULL,
  `drive_image` varchar(250) DEFAULT NULL,
  `drive_desc` text NOT NULL,
  `drive_type` varchar(50) NOT NULL,
  `drive_approval` varchar(15) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`drive_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_drive`
--

INSERT INTO `tbl_drive` (`drive_id`, `drive_title`, `drive_date`, `drive_goal`, `drive_regs`, `drive_month`, `drive_image`, `drive_desc`, `drive_type`, `drive_approval`) VALUES
(1, 'UofT Gift of Life', 'Nov. 28, 2017', '4000', '5889', '34', 'uot.png', 'Every three days in Ontario someone dies waiting for a life-saving organ transplant, yet less than 25% of Ontarians have registered their consent to be a donor. It\'s really surprising, and it\'s not good enough. Especially for the 1,500 people in our province waiting for organ transplants and the thousands more waiting for tissue transplants. Unfortunately, Toronto\'s registration rates are among the lowest in the province. The University of Toronto is committed to doing its part. Through this campaign, we hope to recruit and register over 4,000 students, faculty and staff as new organ & tissue donors. Beyond this we want to inform and inspire Ontarians to join us and register their consent for organ & tissue donation – it can be done online in two minutes, and you can do it right from this page. Just click the red REGISTER OR CHECK NOW button. If you\'d hope a live-saving transplant would be available for your friends and loved ones, please register today.', 'org', 'Yes'),
(2, 'BeADonor.ca/123', 'July 18, 2018', '3000', '4719', '48', 'sickkids.png', 'UPDATE: The response to this drive has been overwhelming; we reached 88% of our joint goal on our first day! Our initial goal was to encourage 1,500 people to register consent or check their donor staus. We\'ve now increased that number for a second time to 3,000. Help make this TGLN\'s biggest-yet workplace registration drive! Thanks to all particiants so far. Did you know one organ and tissue donor can save up to eight lives and enhance another 75? From April 17-26, 2013, Toronto\'s three transplant hospitals are joining forces to increase awareness about organ donation. Research shows that many Ontarians think they\'re registered, but aren\'t. The result? Less than 25% are registered organ and tissue donors. Our goal is to inspire 1,500 people to check their status, and either confirm that they\'re already registered or register for the first time. Please take two minutes, all you need is your health card number. Thank you from The UHN, SickKids and St. Michael\'s Hospital.', 'org', 'Yes'),
(3, 'Queen\'s Gives the Gift of 8', 'June 4, 2018', '1500', '2493', '69', 'queens-gives-gift-of-8.jpg', 'Between Oct. 29 and Nov. 16, we are encouraging Queen\'s University students, faculty, and the Kingston community to register their consent to be donors. Every three days someone dies in Ontario because the life-saving organ transplant they need is not available. There are currently 1,500 people in our province waiting for organ transplants and the thousands more waiting for tissue transplants. Find us on campus! : We will have booths set up where you can register online and purchase your official \'Queen\'s Gives the Gift of 8\' shirt for $5 to spread awareness and show your support! ‘What’s Your Type?’: On Oct. 30 and Nov. 8, visit us on campus to get your blood type tested and sign up to give blood at the clinic on Nov. 26. Get Swabbed! : On Nov. 13, get your cheek swabbed and have your information stored in the OneMatch Stem Cell and Marrow Network. This network is responsible for finding and matching donors to patients who require life-saving stem cell transplants.', 'org', 'Yes'),
(4, 'Registered organ donors saves lives!', 'Dec. 24, 2018', 'none', '2195', '15', 'AshleysAngels.jpg', 'Every three days someone dies in Ontario because the life-saving organ transplant they need is not available, yet less than 30% of Ontarians have registered their consent to be a donor. It\'s really surprising, and it\'s not good enough. Especially for the over 1,500 people in our province waiting for organ transplants and the thousands more waiting for tissue transplants.\r\n\r\nOur organization is committed to doing our part. We\'re asking every member of our organization to register their consent for organ and tissue donation – it can be done online in just two minutes, and you can do it right from this page. We\'re also asking them to ask their friends and family to register as well.\r\n\r\nRegistering to be a donor might be the greatest gift you ever give. If you\'d hope a live-saving transplant would be available for your friends and loved ones, please register today.', 'org', 'Yes'),
(5, 'Ahmed Al Jaishi: beadonor.ca', 'Nov. 2, 2018', 'none', '156', '95', NULL, 'Though many of us believe that organ and tissue donation is a good thing, less than 30% of Ontarians are registered as donors. That number may be even lower depending on where you live.\r\n\r\nThere are about 1,500 people in Ontario who are waiting for a life-saving organ transplant, but they aren\'t the only ones being affected. Their family members, friends and all those close to them are waiting too. Right along side them.\r\n\r\nI created this page to encourage all of my family and friends to register their consent to become donors. Please take two minutes and register – you can do it right now, from the link on this page. You can also check to make sure you are registered, if you\'re not sure. It\'s a selfless act that could one day save eight lives and enhance 75 more through tissue donation.', 'individ', 'Yes'),
(6, 'Adela Janczak: Gift of 8 Campaign', 'Dec. 6, 2018', '50', '646', '5', 'adela.JPG', 'As you know, I\'m a cancer survivor, but it wouldn\'t have been possible without the people who donated their bones,marrow and blood for me. It\'s amazing how advanced we are as a people, that organ donation is readily available to help those in need. It only takes 5 minutes to register and can mean the difference between someone like myself living or dying. SO DO IT! :)\r\n\r\nBe awesome like me and become a donor!\r\n\r\nIt saved my life so just be awesome and do it!', 'individ', 'Yes'),
(7, 'Amanda VanderHarst: Gift of 8 Campaign', 'Aug. 10, 2018', 'none', '390', '2', 'amanda.JPG', 'Diagnoised at the age of 9months with Cystic Fibrosis meant many hours spent doing therapy each day. Despite this exhausting disease I never let it stop me from being a kid, nor did my mom and dad. Life was as normal as it could be until about 2yr ago when my lungs started to fail, every little thing I did was so much work. I had to stop working, go on oxygen at home and then was listed February 2012 for a Double-Lung Transplant, knowing that this would be my only hope at a new life. Having received the amazing gift of life, my double-lung transplant this fall I feel as though it is now my duty to do all I can to ensure Organ Donation is properly understood by everyone. Throughout this journey I have met many inspiring and amazing poeple along the way who all have much in common with my family and I. They too deserve to expeience a new life and to breathe easy. I thank my hero EVERYDAY for the life I awake to each and every morning. I am truly blessed by an amazing miracle.', 'individ', 'Yes'),
(8, 'Andrea Clegg: Gift of 8 Campaign', 'Apr. 10, 2018', '50', '604', '6', 'andrea.jpg', 'My life has been saved. In 2008 I was told that I had severe heart failure. My day-to-day life as I knew it stood still. Opportunities and expectations were ripped from my hands. I didn\'t know how long I had in this world. As my condition worsened, my only hope was a heart transplant. In 2010 my prayers were answered by the kindness of a donor family and all donor families before them. There are no words to express my appreciation. I can now live on with my new found love for living!\r\n\r\nBe the reason someone lives. Be an organ and tissue donor.\r\n\r\nThere was a time when hope was hard to see. One person will die every three days waiting for a life-saving transplant. I want to give that hope to the 1500 other Ontarians on the wait list. Please register your consent today and share the message.', 'individ', 'Pending'),
(9, 'Natasha Lepore: Gift of 8 Campaign', 'May 11, 2018', 'none', '340', '8', 'natasha.JPG', 'Though many of us believe that organ and tissue donation is a good thing, less than 30% of Ontarians are registered as donors. That number may be even lower depending on where you live.\r\n\r\nThere are about 1,500 people in Ontario who are waiting for a life-saving organ transplant, but they aren\'t the only ones being affected. Their family members, friends and all those close to them are waiting too. Right along side them.\r\n\r\nI created this page to encourage all of my family and friends to register their consent to become donors. Please take two minutes and register – you can do it right now, from the link on this page. You can also check to make sure you are registered, if you\'re not sure. It\'s a selfless act that could one day save eight lives and enhance 75 more through tissue donation.', 'individ', 'Yes'),
(10, 'Be a Life Saver at uWaterloo!', 'June 27, 2018', 'none', '653', '95', 'UniversityOfWaterloo.png', 'Every three days someone dies in Ontario because the life-saving organ transplant they need is not available, yet less than 25% of Ontarians have registered their consent to be a donor. It\'s really surprising, and it\'s not good enough. Especially for the 1,500 people in our province waiting for organ transplants and the thousands more waiting for tissue transplants. Our organization is committed to doing our part. We\'re asking every member of our organization to register their consent for organ and tissue donation – it can be done online in just two minutes, and you can do it right from this page. We\'re also asking them to ask their friends and family to register as well. Registering to be a donor might be the greatest gift you ever give. If you\'d hope a live-saving transplant would be available for your friends and loved ones, please register today. Be a Life Saver at uWaterloo!', 'org', 'Pending'),
(12, ' test', '2018-04-03 09:28:44', '294', '0', '0', NULL, 'test', 'individ', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drive_user_loc`
--

DROP TABLE IF EXISTS `tbl_drive_user_loc`;
CREATE TABLE IF NOT EXISTS `tbl_drive_user_loc` (
  `drive_user_loc_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `drive_id` smallint(6) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `location_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`drive_user_loc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_drive_user_loc`
--

INSERT INTO `tbl_drive_user_loc` (`drive_user_loc_id`, `drive_id`, `user_id`, `location_id`) VALUES
(1, 1, 1, 4),
(2, 2, 2, 5),
(3, 3, 3, 6),
(4, 4, 4, 1),
(5, 5, 5, 3),
(6, 6, 6, 4),
(7, 7, 1, 4),
(8, 8, 2, 5),
(9, 9, 3, 6),
(10, 10, 4, 1),
(11, 12, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loc`
--

DROP TABLE IF EXISTS `tbl_loc`;
CREATE TABLE IF NOT EXISTS `tbl_loc` (
  `location_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(75) NOT NULL,
  `location_cardholders` mediumint(9) NOT NULL,
  `location_donors` mediumint(9) NOT NULL,
  `location_summers` smallint(6) NOT NULL,
  `location_falls` smallint(6) NOT NULL,
  `location_winters` smallint(6) NOT NULL,
  `location_springs` smallint(6) NOT NULL,
  `location_code` varchar(10) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

DROP TABLE IF EXISTS `tbl_location`;
CREATE TABLE IF NOT EXISTS `tbl_location` (
  `location_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location_name` varchar(75) NOT NULL,
  `location_code` varchar(10) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`location_id`, `location_name`, `location_code`) VALUES
(1, 'Russell', 'K4R'),
(2, 'Kitchener', 'N2E'),
(3, 'Windsor', 'N8W'),
(4, 'Essex', 'N8M'),
(5, 'Owen Sound', 'N4K'),
(6, 'Caledonia', 'N3W');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sto`
--

DROP TABLE IF EXISTS `tbl_sto`;
CREATE TABLE IF NOT EXISTS `tbl_sto` (
  `story_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_text` text NOT NULL,
  `story_image` varchar(250) DEFAULT NULL,
  `story_approval` varchar(25) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sto`
--

INSERT INTO `tbl_sto` (`story_id`, `story_text`, `story_image`, `story_approval`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada, turpis in ultrices egestas, nunc felis ullamcorper nulla, et sodales velit augue sollicitudin odio. Cras laoreet ligula at urna laoreet ullamcorper. In vitae vestibulum magna. Duis iaculis eget ante ut aliquam. Sed volutpat quam eu orci aliquet pretium vitae eu tellus. Proin dictum eros orci, nec consequat nisl aliquet eu. In vel ullamcorper lorem. Vivamus vitae leo vulputate, blandit turpis in, dapibus sapien. Integer dictum massa non lorem convallis, eu venenatis lacus interdum. In sed augue convallis, tempus odio nec, faucibus dolor. Vestibulum eget sagittis libero, non congue enim. Proin rutrum tristique felis, eget faucibus eros placerat id. Donec porta nisi ac rutrum aliquam. Morbi vitae aliquet ante. Suspendisse purus tellus, ultricies at libero ut, fringilla tristique dui. Donec hendrerit odio non risus commodo, efficitur cursus tortor mattis.', NULL, 'Yes'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla, purus non dapibus aliquam, ipsum orci auctor ex, eget porta ex tellus eu augue. Ut eget metus purus. Pellentesque placerat consectetur hendrerit. Nulla a cursus lorem. Maecenas ac sodales lorem. Vestibulum dapibus turpis leo, et pellentesque est dictum at. Etiam dapibus nulla id nisi dictum accumsan. Ut non risus vel dui luctus volutpat vel ac lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ac augue et nisi blandit lobortis vel vel diam. Etiam sit amet orci mauris. Proin in elit suscipit, blandit lectus et, pulvinar ipsum. Vestibulum vestibulum mi elit, et pharetra sapien consectetur et.', NULL, 'Yes'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et interdum ligula, id tincidunt ligula. Praesent at dolor venenatis, bibendum nibh non, malesuada odio. Aliquam ac ex vitae mauris consequat lobortis. Integer vitae tellus vitae orci rhoncus suscipit ac at justo. Duis et tellus efficitur, aliquet lectus id, laoreet enim. In at velit sed ante porttitor sodales quis nec ipsum. Duis efficitur eget sem ac varius. Morbi luctus tortor ex, a mollis nulla mattis mollis. Curabitur sit amet mattis massa, auctor fringilla dui. Aliquam ac ullamcorper mauris. Suspendisse ut feugiat velit. In porta, metus vel dignissim ullamcorper, turpis leo tincidunt lorem, ac ullamcorper nisi risus sit amet est. Donec et aliquam ipsum. Quisque dignissim sem at tellus ultrices pellentesque. Vestibulum quis ex id eros ullamcorper sagittis eu vel ipsum. In malesuada condimentum sapien.', NULL, 'Yes'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nisi, sagittis in neque nec, molestie vestibulum nunc. Aliquam suscipit rhoncus justo iaculis ornare. Praesent pretium eros et augue luctus vestibulum. Quisque eu venenatis odio, vel porttitor lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse volutpat, libero eget bibendum pharetra, enim mi posuere velit, eget dignissim quam nulla eu lectus. Nullam nisl ligula, convallis ut nulla ut, ullamcorper consequat lectus. Ut a orci odio. Nulla et est cursus, vulputate nibh dictum, aliquam dui. Aliquam at leo lectus. In felis sapien, ornare vitae facilisis ullamcorper, tempus ut ligula. Fusce ipsum sem, rhoncus quis consectetur nec, gravida ut erat.', NULL, 'Yes'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend accumsan rhoncus. Nunc varius faucibus purus vitae sodales. Proin eleifend arcu non nisl cursus, ac viverra lorem rutrum. In a fringilla risus. Quisque accumsan leo augue, sed venenatis nisi luctus a. Vivamus nec malesuada sapien, non ullamcorper lacus. Sed eget scelerisque ex.\r\n\r\nEtiam ultrices ipsum quis enim placerat, id ultrices lorem commodo. Integer in tincidunt nisi. Nam non ornare turpis. Vestibulum lacus lorem, tincidunt nec eleifend ac, efficitur eu mauris. Phasellus sagittis est sed malesuada luctus. Vestibulum commodo, urna vel pharetra pretium, ex lectus consectetur nisl, sit amet imperdiet odio ex vel quam. Mauris nec metus est. Donec ac quam pulvinar, sagittis felis ac, scelerisque risus. Curabitur aliquet viverra ligula, in gravida quam rutrum vel. In vestibulum urna nec congue cursus.', NULL, 'Yes'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum est non lorem laoreet mattis. Maecenas vulputate leo eu nulla eleifend dictum. Integer egestas id neque sed accumsan. Nam id est nec mauris sagittis blandit. Proin malesuada neque sed risus finibus egestas. Curabitur tincidunt porttitor felis, sed euismod tellus lobortis in. Donec dictum, ligula quis venenatis dignissim, mi arcu consectetur eros, vitae tempor dolor nunc quis justo. Proin eu tellus nec elit scelerisque accumsan et vitae elit.\r\n\r\nPhasellus vitae feugiat odio. Nam tincidunt sed sem ut lobortis. Pellentesque nec turpis accumsan, suscipit ex sed, viverra purus. Fusce et nibh sed purus vehicula ornare a eu sem. Nulla facilisi. Phasellus luctus risus et velit posuere sollicitudin. Nam ut est lacus.', NULL, 'Yes'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur interdum. Phasellus nisl justo, tempor et ligula ut, ultrices hendrerit turpis. Nunc faucibus purus arcu, sit amet condimentum leo lobortis non. Ut ultrices ligula a rhoncus tempus. Aenean at urna ac lectus finibus porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec egestas rhoncus mattis. Phasellus sit amet orci lorem. Sed rutrum dapibus massa a vehicula. Nulla ultricies vel massa nec venenatis. Vestibulum tempus massa in dapibus sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ut nunc feugiat, ornare ligula vitae, faucibus orci.\r\n\r\nPellentesque ut odio volutpat erat ultricies accumsan id vel arcu. Duis sed tortor ullamcorper, volutpat velit id, tempor nunc. Aliquam eu ullamcorper erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et eros et magna maximus pretium. Etiam aliquam, dolor vel sodales consectetur, augue dui sagittis ipsum, sit amet malesuada libero ipsum nec quam. Integer molestie urna id molestie auctor. Nam facilisis erat nec posuere convallis. Maecenas eu ligula purus. Maecenas sed nisl consectetur, semper quam nec, aliquam eros. Etiam semper nisi non nisi cursus, vel elementum nisi consectetur. In quam mi, ultricies sed lacus id, malesuada convallis sapien.', NULL, 'Pending'),
(8, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum neque a lectus pulvinar eleifend. Pellentesque et ornare est. Nulla laoreet, arcu in luctus pulvinar, quam massa interdum nulla, a tristique quam risus sed nisi. Nam tristique faucibus odio sed efficitur. Aliquam erat volutpat. Aenean ac elit et ex varius porttitor. Curabitur neque erat, imperdiet eget sagittis et, egestas a magna. Duis quis tincidunt tellus, sit amet condimentum ex. Maecenas eget elit fermentum, fringilla metus vitae, congue enim. Quisque magna nunc, sollicitudin vel hendrerit et, cursus vel metus. Etiam facilisis ut metus ut ornare. Fusce accumsan vehicula convallis. Etiam mollis dapibus massa posuere maximus. Ut id semper tortor. Quisque a faucibus metus, id posuere sem. Donec nibh ligula, gravida quis fringilla sollicitudin, hendrerit a arcu.', NULL, 'Yes'),
(9, 'Maecenas lacinia consequat metus eget facilisis. Integer id ullamcorper quam. Mauris id ullamcorper elit, feugiat interdum tellus. Curabitur faucibus accumsan ante, eu eleifend sapien egestas a. Ut bibendum malesuada sodales. Nulla dignissim, lacus in imperdiet luctus, metus lacus imperdiet eros, in cursus lectus ex sit amet purus. Donec finibus porttitor lorem in tincidunt. Proin leo ligula, dictum sed nibh sed, rutrum rhoncus magna. Curabitur posuere odio non urna rhoncus imperdiet. Cras nisl odio, viverra elementum sem sit amet, elementum faucibus leo. Aenean imperdiet arcu at justo aliquam, placerat luctus mi gravida. Duis eget dolor dictum, pretium odio ut, ullamcorper arcu. Maecenas et diam ut mauris auctor rutrum. Maecenas vitae ante condimentum enim vehicula dictum. Nullam vitae placerat ante. Mauris lacus dolor, consectetur ut lorem eu, dignissim consequat lectus.', NULL, 'yes'),
(10, 'Integer tortor nisi, tincidunt at massa quis, vestibulum mattis nulla. Nulla sit amet enim ac purus placerat tincidunt sit amet non nulla. Proin ac augue non felis maximus dignissim mollis eget nisl. Curabitur eleifend augue sed mi facilisis imperdiet. Cras fringilla pharetra eros, vitae placerat orci dapibus vel. Nam dolor mi, pulvinar ac lacus eget, laoreet porta leo. Proin mollis non tellus in laoreet. Suspendisse ac massa rhoncus, pretium lorem id, suscipit erat. Etiam imperdiet justo porttitor elementum eleifend. Nulla urna odio, vehicula vitae ex quis, sagittis aliquam velit. Duis sit amet ante sed tortor scelerisque tincidunt vel non risus. Vestibulum ex erat, commodo eget dignissim et, fermentum nec nisi. Aenean pulvinar varius scelerisque. Quisque ultrices finibus nunc. Maecenas suscipit aliquam lectus sed ultrices. Morbi sagittis non purus eu ornare.', NULL, 'yes'),
(11, 'Morbi tempus lacus urna. Vestibulum pretium orci lorem, in iaculis dui dapibus elementum. Integer tincidunt egestas pharetra. Phasellus ultricies id velit quis bibendum. Suspendisse et egestas risus, sit amet vulputate purus. Curabitur sit amet nisi rutrum, varius erat sit amet, placerat lacus. Maecenas eros ipsum, porta hendrerit tempus ac, pellentesque in tellus. Fusce interdum nulla sit amet odio vestibulum dignissim. In mattis diam sit amet sapien lobortis, at gravida libero rutrum. Sed a pulvinar mi, quis mollis turpis. Curabitur congue ligula nunc, in placerat ex elementum dapibus. Praesent suscipit, dui sed sollicitudin lacinia, felis risus placerat risus, vitae scelerisque sapien mi quis neque. Curabitur ligula nunc, ullamcorper id elit et, porta posuere leo. Sed et finibus sem, eget consectetur eros. Ut ultricies ante non leo aliquet accumsan. Aliquam semper dolor sit amet vulputate vehicula.', NULL, 'Yes'),
(12, 'Phasellus imperdiet, turpis quis bibendum laoreet, enim tortor pretium nunc, sed eleifend nibh turpis vulputate dui. Fusce id blandit nunc. Aenean feugiat sapien molestie lacus auctor scelerisque. Aliquam sit amet rhoncus diam, in eleifend risus. Sed consectetur viverra odio, ut tempus eros ultricies eget. Morbi feugiat sapien sed odio feugiat, ac posuere nisl consectetur. Nunc non ullamcorper lacus. Aliquam erat volutpat. Vestibulum sit amet lacus ex. Ut ut porta nisi. Cras vestibulum, arcu ut viverra auctor, justo erat vehicula dui, sit amet vestibulum sem lorem eu magna. Etiam scelerisque gravida nisl maximus dignissim.\r\n\r\nAenean eget tempus risus, a bibendum tellus. Nam nec maximus massa. Vivamus at dapibus lorem. Praesent ante mi, vulputate sed risus quis, varius pharetra diam. Vivamus a justo faucibus, ultricies metus et, volutpat dui. Nulla suscipit erat nibh, eget congue velit venenatis nec. Nullam condimentum imperdiet lectus, quis blandit enim ornare a. Suspendisse ex nulla, venenatis eget ante in, aliquet hendrerit lorem. Duis in interdum tellus. Phasellus a urna sit amet nunc molestie porta. Aenean interdum felis quis posuere elementum. Nullam egestas metus a ultrices pulvinar. Sed efficitur nibh diam. Praesent imperdiet felis turpis, et lacinia est lacinia vulputate. Mauris vel dapibus tortor.', NULL, 'Yes'),
(13, 'Pellentesque risus dolor, rhoncus sed suscipit at, facilisis eleifend est. Sed ut molestie nisi. Praesent nec suscipit lorem. Aenean ligula nibh, dictum et tristique ac, rutrum quis est. Nulla nec orci sit amet ipsum efficitur dapibus nec id quam. Morbi sit amet faucibus lorem. Aliquam non tincidunt nunc, vitae condimentum felis. Donec ut ligula mattis, consequat erat vel, dictum felis. Etiam ac dui massa.\r\n\r\nDuis velit arcu, vehicula vitae ornare eget, aliquet a enim. Duis commodo lobortis orci, sit amet placerat erat hendrerit ac. Duis rhoncus gravida dictum. Proin et dictum dui. Donec aliquam id eros vel blandit. Donec leo magna, ornare vel lobortis in, maximus sed libero. Praesent aliquet sapien laoreet fermentum feugiat. Maecenas quis finibus augue. Vestibulum non elit eu nibh consectetur maximus eget ut dolor. Mauris vehicula pellentesque turpis quis lobortis. Mauris commodo elit augue, vitae ultrices diam molestie a. In sed libero nibh. Curabitur accumsan tortor in tellus malesuada consectetur. Nunc tristique pretium turpis, id interdum metus. Duis non quam in tellus sollicitudin molestie.', NULL, 'Yes'),
(14, 'test', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story`
--

DROP TABLE IF EXISTS `tbl_story`;
CREATE TABLE IF NOT EXISTS `tbl_story` (
  `story_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_text` text NOT NULL,
  `story_approval` varchar(25) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`story_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story`
--

INSERT INTO `tbl_story` (`story_id`, `story_text`, `story_approval`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada, turpis in ultrices egestas, nunc felis ullamcorper nulla, et sodales velit augue sollicitudin odio. Cras laoreet ligula at urna laoreet ullamcorper. In vitae vestibulum magna. Duis iaculis eget ante ut aliquam. Sed volutpat quam eu orci aliquet pretium vitae eu tellus. Proin dictum eros orci, nec consequat nisl aliquet eu. In vel ullamcorper lorem. Vivamus vitae leo vulputate, blandit turpis in, dapibus sapien. Integer dictum massa non lorem convallis, eu venenatis lacus interdum. In sed augue convallis, tempus odio nec, faucibus dolor. Vestibulum eget sagittis libero, non congue enim. Proin rutrum tristique felis, eget faucibus eros placerat id. Donec porta nisi ac rutrum aliquam. Morbi vitae aliquet ante. Suspendisse purus tellus, ultricies at libero ut, fringilla tristique dui. Donec hendrerit odio non risus commodo, efficitur cursus tortor mattis.', 'Yes'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fringilla, purus non dapibus aliquam, ipsum orci auctor ex, eget porta ex tellus eu augue. Ut eget metus purus. Pellentesque placerat consectetur hendrerit. Nulla a cursus lorem. Maecenas ac sodales lorem. Vestibulum dapibus turpis leo, et pellentesque est dictum at. Etiam dapibus nulla id nisi dictum accumsan. Ut non risus vel dui luctus volutpat vel ac lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec ac augue et nisi blandit lobortis vel vel diam. Etiam sit amet orci mauris. Proin in elit suscipit, blandit lectus et, pulvinar ipsum. Vestibulum vestibulum mi elit, et pharetra sapien consectetur et.', 'Yes'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et interdum ligula, id tincidunt ligula. Praesent at dolor venenatis, bibendum nibh non, malesuada odio. Aliquam ac ex vitae mauris consequat lobortis. Integer vitae tellus vitae orci rhoncus suscipit ac at justo. Duis et tellus efficitur, aliquet lectus id, laoreet enim. In at velit sed ante porttitor sodales quis nec ipsum. Duis efficitur eget sem ac varius. Morbi luctus tortor ex, a mollis nulla mattis mollis. Curabitur sit amet mattis massa, auctor fringilla dui. Aliquam ac ullamcorper mauris. Suspendisse ut feugiat velit. In porta, metus vel dignissim ullamcorper, turpis leo tincidunt lorem, ac ullamcorper nisi risus sit amet est. Donec et aliquam ipsum. Quisque dignissim sem at tellus ultrices pellentesque. Vestibulum quis ex id eros ullamcorper sagittis eu vel ipsum. In malesuada condimentum sapien.', 'Yes'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nisi, sagittis in neque nec, molestie vestibulum nunc. Aliquam suscipit rhoncus justo iaculis ornare. Praesent pretium eros et augue luctus vestibulum. Quisque eu venenatis odio, vel porttitor lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse volutpat, libero eget bibendum pharetra, enim mi posuere velit, eget dignissim quam nulla eu lectus. Nullam nisl ligula, convallis ut nulla ut, ullamcorper consequat lectus. Ut a orci odio. Nulla et est cursus, vulputate nibh dictum, aliquam dui. Aliquam at leo lectus. In felis sapien, ornare vitae facilisis ullamcorper, tempus ut ligula. Fusce ipsum sem, rhoncus quis consectetur nec, gravida ut erat.', 'Yes'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eleifend accumsan rhoncus. Nunc varius faucibus purus vitae sodales. Proin eleifend arcu non nisl cursus, ac viverra lorem rutrum. In a fringilla risus. Quisque accumsan leo augue, sed venenatis nisi luctus a. Vivamus nec malesuada sapien, non ullamcorper lacus. Sed eget scelerisque ex.\r\n\r\nEtiam ultrices ipsum quis enim placerat, id ultrices lorem commodo. Integer in tincidunt nisi. Nam non ornare turpis. Vestibulum lacus lorem, tincidunt nec eleifend ac, efficitur eu mauris. Phasellus sagittis est sed malesuada luctus. Vestibulum commodo, urna vel pharetra pretium, ex lectus consectetur nisl, sit amet imperdiet odio ex vel quam. Mauris nec metus est. Donec ac quam pulvinar, sagittis felis ac, scelerisque risus. Curabitur aliquet viverra ligula, in gravida quam rutrum vel. In vestibulum urna nec congue cursus.', 'Yes'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent elementum est non lorem laoreet mattis. Maecenas vulputate leo eu nulla eleifend dictum. Integer egestas id neque sed accumsan. Nam id est nec mauris sagittis blandit. Proin malesuada neque sed risus finibus egestas. Curabitur tincidunt porttitor felis, sed euismod tellus lobortis in. Donec dictum, ligula quis venenatis dignissim, mi arcu consectetur eros, vitae tempor dolor nunc quis justo. Proin eu tellus nec elit scelerisque accumsan et vitae elit.\r\n\r\nPhasellus vitae feugiat odio. Nam tincidunt sed sem ut lobortis. Pellentesque nec turpis accumsan, suscipit ex sed, viverra purus. Fusce et nibh sed purus vehicula ornare a eu sem. Nulla facilisi. Phasellus luctus risus et velit posuere sollicitudin. Nam ut est lacus.', 'Yes'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam commodo efficitur interdum. Phasellus nisl justo, tempor et ligula ut, ultrices hendrerit turpis. Nunc faucibus purus arcu, sit amet condimentum leo lobortis non. Ut ultrices ligula a rhoncus tempus. Aenean at urna ac lectus finibus porttitor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec egestas rhoncus mattis. Phasellus sit amet orci lorem. Sed rutrum dapibus massa a vehicula. Nulla ultricies vel massa nec venenatis. Vestibulum tempus massa in dapibus sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ut nunc feugiat, ornare ligula vitae, faucibus orci.\r\n\r\nPellentesque ut odio volutpat erat ultricies accumsan id vel arcu. Duis sed tortor ullamcorper, volutpat velit id, tempor nunc. Aliquam eu ullamcorper erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et eros et magna maximus pretium. Etiam aliquam, dolor vel sodales consectetur, augue dui sagittis ipsum, sit amet malesuada libero ipsum nec quam. Integer molestie urna id molestie auctor. Nam facilisis erat nec posuere convallis. Maecenas eu ligula purus. Maecenas sed nisl consectetur, semper quam nec, aliquam eros. Etiam semper nisi non nisi cursus, vel elementum nisi consectetur. In quam mi, ultricies sed lacus id, malesuada convallis sapien.', 'Pending'),
(8, '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum neque a lectus pulvinar eleifend. Pellentesque et ornare est. Nulla laoreet, arcu in luctus pulvinar, quam massa interdum nulla, a tristique quam risus sed nisi. Nam tristique faucibus odio sed efficitur. Aliquam erat volutpat. Aenean ac elit et ex varius porttitor. Curabitur neque erat, imperdiet eget sagittis et, egestas a magna. Duis quis tincidunt tellus, sit amet condimentum ex. Maecenas eget elit fermentum, fringilla metus vitae, congue enim. Quisque magna nunc, sollicitudin vel hendrerit et, cursus vel metus. Etiam facilisis ut metus ut ornare. Fusce accumsan vehicula convallis. Etiam mollis dapibus massa posuere maximus. Ut id semper tortor. Quisque a faucibus metus, id posuere sem. Donec nibh ligula, gravida quis fringilla sollicitudin, hendrerit a arcu.', 'Yes'),
(9, 'Maecenas lacinia consequat metus eget facilisis. Integer id ullamcorper quam. Mauris id ullamcorper elit, feugiat interdum tellus. Curabitur faucibus accumsan ante, eu eleifend sapien egestas a. Ut bibendum malesuada sodales. Nulla dignissim, lacus in imperdiet luctus, metus lacus imperdiet eros, in cursus lectus ex sit amet purus. Donec finibus porttitor lorem in tincidunt. Proin leo ligula, dictum sed nibh sed, rutrum rhoncus magna. Curabitur posuere odio non urna rhoncus imperdiet. Cras nisl odio, viverra elementum sem sit amet, elementum faucibus leo. Aenean imperdiet arcu at justo aliquam, placerat luctus mi gravida. Duis eget dolor dictum, pretium odio ut, ullamcorper arcu. Maecenas et diam ut mauris auctor rutrum. Maecenas vitae ante condimentum enim vehicula dictum. Nullam vitae placerat ante. Mauris lacus dolor, consectetur ut lorem eu, dignissim consequat lectus.', 'yes'),
(10, 'Integer tortor nisi, tincidunt at massa quis, vestibulum mattis nulla. Nulla sit amet enim ac purus placerat tincidunt sit amet non nulla. Proin ac augue non felis maximus dignissim mollis eget nisl. Curabitur eleifend augue sed mi facilisis imperdiet. Cras fringilla pharetra eros, vitae placerat orci dapibus vel. Nam dolor mi, pulvinar ac lacus eget, laoreet porta leo. Proin mollis non tellus in laoreet. Suspendisse ac massa rhoncus, pretium lorem id, suscipit erat. Etiam imperdiet justo porttitor elementum eleifend. Nulla urna odio, vehicula vitae ex quis, sagittis aliquam velit. Duis sit amet ante sed tortor scelerisque tincidunt vel non risus. Vestibulum ex erat, commodo eget dignissim et, fermentum nec nisi. Aenean pulvinar varius scelerisque. Quisque ultrices finibus nunc. Maecenas suscipit aliquam lectus sed ultrices. Morbi sagittis non purus eu ornare.', 'yes'),
(11, 'Morbi tempus lacus urna. Vestibulum pretium orci lorem, in iaculis dui dapibus elementum. Integer tincidunt egestas pharetra. Phasellus ultricies id velit quis bibendum. Suspendisse et egestas risus, sit amet vulputate purus. Curabitur sit amet nisi rutrum, varius erat sit amet, placerat lacus. Maecenas eros ipsum, porta hendrerit tempus ac, pellentesque in tellus. Fusce interdum nulla sit amet odio vestibulum dignissim. In mattis diam sit amet sapien lobortis, at gravida libero rutrum. Sed a pulvinar mi, quis mollis turpis. Curabitur congue ligula nunc, in placerat ex elementum dapibus. Praesent suscipit, dui sed sollicitudin lacinia, felis risus placerat risus, vitae scelerisque sapien mi quis neque. Curabitur ligula nunc, ullamcorper id elit et, porta posuere leo. Sed et finibus sem, eget consectetur eros. Ut ultricies ante non leo aliquet accumsan. Aliquam semper dolor sit amet vulputate vehicula.', 'Yes'),
(12, 'Phasellus imperdiet, turpis quis bibendum laoreet, enim tortor pretium nunc, sed eleifend nibh turpis vulputate dui. Fusce id blandit nunc. Aenean feugiat sapien molestie lacus auctor scelerisque. Aliquam sit amet rhoncus diam, in eleifend risus. Sed consectetur viverra odio, ut tempus eros ultricies eget. Morbi feugiat sapien sed odio feugiat, ac posuere nisl consectetur. Nunc non ullamcorper lacus. Aliquam erat volutpat. Vestibulum sit amet lacus ex. Ut ut porta nisi. Cras vestibulum, arcu ut viverra auctor, justo erat vehicula dui, sit amet vestibulum sem lorem eu magna. Etiam scelerisque gravida nisl maximus dignissim.\r\n\r\nAenean eget tempus risus, a bibendum tellus. Nam nec maximus massa. Vivamus at dapibus lorem. Praesent ante mi, vulputate sed risus quis, varius pharetra diam. Vivamus a justo faucibus, ultricies metus et, volutpat dui. Nulla suscipit erat nibh, eget congue velit venenatis nec. Nullam condimentum imperdiet lectus, quis blandit enim ornare a. Suspendisse ex nulla, venenatis eget ante in, aliquet hendrerit lorem. Duis in interdum tellus. Phasellus a urna sit amet nunc molestie porta. Aenean interdum felis quis posuere elementum. Nullam egestas metus a ultrices pulvinar. Sed efficitur nibh diam. Praesent imperdiet felis turpis, et lacinia est lacinia vulputate. Mauris vel dapibus tortor.', 'Yes'),
(13, 'Pellentesque risus dolor, rhoncus sed suscipit at, facilisis eleifend est. Sed ut molestie nisi. Praesent nec suscipit lorem. Aenean ligula nibh, dictum et tristique ac, rutrum quis est. Nulla nec orci sit amet ipsum efficitur dapibus nec id quam. Morbi sit amet faucibus lorem. Aliquam non tincidunt nunc, vitae condimentum felis. Donec ut ligula mattis, consequat erat vel, dictum felis. Etiam ac dui massa.\r\n\r\nDuis velit arcu, vehicula vitae ornare eget, aliquet a enim. Duis commodo lobortis orci, sit amet placerat erat hendrerit ac. Duis rhoncus gravida dictum. Proin et dictum dui. Donec aliquam id eros vel blandit. Donec leo magna, ornare vel lobortis in, maximus sed libero. Praesent aliquet sapien laoreet fermentum feugiat. Maecenas quis finibus augue. Vestibulum non elit eu nibh consectetur maximus eget ut dolor. Mauris vehicula pellentesque turpis quis lobortis. Mauris commodo elit augue, vitae ultrices diam molestie a. In sed libero nibh. Curabitur accumsan tortor in tellus malesuada consectetur. Nunc tristique pretium turpis, id interdum metus. Duis non quam in tellus sollicitudin molestie.', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_story_user`
--

DROP TABLE IF EXISTS `tbl_story_user`;
CREATE TABLE IF NOT EXISTS `tbl_story_user` (
  `story_user_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `story_id` smallint(6) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`story_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_story_user`
--

INSERT INTO `tbl_story_user` (`story_user_id`, `story_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 1),
(8, 8, 2),
(9, 9, 3),
(10, 10, 2),
(11, 11, 6),
(12, 12, 5),
(13, 13, 2),
(16, 29, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` mediumint(9) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(250) NOT NULL,
  `user_lname` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_image` varchar(75) DEFAULT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  `user_code` varchar(15) NOT NULL,
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` varchar(15) NOT NULL,
  `user_new` varchar(5) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_pass`, `user_image`, `user_email`, `user_phone`, `user_code`, `user_date`, `user_level`, `user_new`) VALUES
(1, 'Laura', 'Burnett', 'laura3', '$2y$10$05X7dC.mQ7AAv9eahy.DheB/vBLWxKtd6GaXMc7PECCCnccC0s/J2', 'laura.jpg', 'laura@gmail.com', '546-548-2176', 'N8M1K5', '2018-04-03 04:13:10', 'Member', 'yes'),
(2, 'Travis', 'Williams', 'travis8', 'travistest', 'travis.jpg', 'travis@gmail.com', '579-245-6525', 'N4K8G2', '2018-03-31 17:21:32', 'Member', 'yes'),
(3, 'Matthew', 'Massey', 'matthew1', 'matthewtest', NULL, 'matthew@gmail.com', '462-854-2545', 'N3W9H0', '2018-03-31 17:23:18', 'Member', 'yes'),
(4, 'Liam', 'Ornelas', 'liam8', 'liamtest', NULL, 'liam@gmail.com', '546-824-6794', 'K4R O1P', '2018-03-31 17:24:34', 'Member', 'yes'),
(5, 'Arin', 'Hawthorne', 'hawthorne8', '$2b$10$1aDXl1sQCh5QADCTUAw8m.Q9lKFTmYYxeI1zGfbFlAsY4n/J6NNdm', 'arin.jpg', 'arin@gmail.com', '642-715-3958', 'N8W L1H', '2018-03-31 17:26:25', 'Member', 'yes'),
(6, 'Daniel', 'Alix', 'daniel9', 'danieltest', 'daniel.jpg', 'daniel@gmail.com', '714-659-7382', 'N8M2O8', '2018-03-31 17:28:35', 'Member', 'yes'),
(23, 'johnny', 'johnny', 'johnny', '$2y$10$2bPS2pRniUv7yIMbuny35utNrQX0Who8EomsVgH3SD4l7CU2/ysEG', NULL, 'johnny@email.com', '9204920493', 'K4R 0S9', '2018-04-03 15:18:09', 'Member', 'no'),
(42, 'katherine', 'billings', 'katherine', '$2y$10$/ko5rYbxkO3ji7q4Ozzjm.3P55j5arMkGs2/w6H93c1k/Xw5usW9.', NULL, 'vigeasmos@gmail.com', NULL, 'K4R 1J2', '2018-04-03 06:11:54', 'Member', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_loc`
--

DROP TABLE IF EXISTS `tbl_user_loc`;
CREATE TABLE IF NOT EXISTS `tbl_user_loc` (
  `user_loc_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) NOT NULL,
  `location_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`user_loc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_loc`
--

INSERT INTO `tbl_user_loc` (`user_loc_id`, `user_id`, `location_id`) VALUES
(1, 1, 4),
(2, 2, 5),
(3, 3, 6),
(4, 4, 1),
(5, 5, 3),
(6, 6, 4),
(10, 24, 1),
(8, 22, 1),
(9, 23, 2),
(15, 42, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
