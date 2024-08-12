-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2023 at 02:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `Aid` int(2) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`Aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Name`, `Password`) VALUES
(1, 'umarshaikh', 'umar@786'),
(2, 'ayazpanar', 'ayaz@2001');

-- --------------------------------------------------------

--
-- Table structure for table `billmaster`
--

DROP TABLE IF EXISTS `billmaster`;
CREATE TABLE IF NOT EXISTS `billmaster` (
  `BId` int(5) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(30) NOT NULL,
  `Vbill` int(5) NOT NULL,
  `Fbill` int(6) NOT NULL,
  `Dbill` int(5) NOT NULL,
  `Total` int(6) NOT NULL,
  `date` date NOT NULL,
  `paymentid` varchar(30) NOT NULL,
  `UId` int(4) NOT NULL,
  PRIMARY KEY (`BId`),
  KEY `UId` (`UId`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billmaster`
--

INSERT INTO `billmaster` (`BId`, `Uname`, `Vbill`, `Fbill`, `Dbill`, `Total`, `date`, `paymentid`, `UId`) VALUES
(1, 'Umar Shaikh', 20000, 5000, 2000, 27000, '2023-04-11', 'husahfoahfoha', 1),
(2, 'Zoya Malek', 10000, 20000, 3089, 35736, '2023-05-01', 'pay_LkJUkaOxUusyJ9', 4),
(15, 'Umar Shaikh', 10000, 10000, 1000, 22680, '2023-05-05', 'pay_LlsuumyCb5XYfE', 1),
(14, 'Umar Shaikh', 10000, 5000, 1000, 17280, '2023-05-02', 'pay_LknbYSL2RfEYRW', 1),
(12, 'Zoya Malek', 10000, 1100, 1000, 13068, '2023-05-02', 'pay_LkgP63T6avdB8p', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bookingmaster`
--

DROP TABLE IF EXISTS `bookingmaster`;
CREATE TABLE IF NOT EXISTS `bookingmaster` (
  `BId` int(5) NOT NULL AUTO_INCREMENT,
  `Etype` varchar(20) NOT NULL,
  `Vtype` varchar(20) NOT NULL,
  `Ftype` varchar(20) NOT NULL,
  `Dprice` int(5) NOT NULL,
  `Guest` int(4) NOT NULL,
  `Sdate` date NOT NULL,
  `Edate` date NOT NULL,
  `Stime` varchar(9) NOT NULL,
  `Etime` varchar(9) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Booking_date` date NOT NULL,
  `Payment` varchar(10) NOT NULL,
  `UId` int(4) NOT NULL,
  PRIMARY KEY (`BId`),
  KEY `UId` (`UId`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookingmaster`
--

INSERT INTO `bookingmaster` (`BId`, `Etype`, `Vtype`, `Ftype`, `Dprice`, `Guest`, `Sdate`, `Edate`, `Stime`, `Etime`, `Status`, `Booking_date`, `Payment`, `UId`) VALUES
(1, 'Wedding', 'Santokba Hall', 'Gujarati', 10000, 100, '2023-04-01', '2023-04-02', '08:00 AM', '06:00 PM', 'Active', '2023-03-01', 'Pending', 1),
(4, 'Wedding', 'Santokba Hall', 'Gujarati', 14374, 170, '2023-04-28', '2023-04-26', '00:12', '17:05', 'Active', '2023-04-29', 'Pending', 2),
(20, 'Wedding', 'Santokba Hall', 'Gujarati', 6584, 200, '2023-05-29', '2023-05-29', '10:00', '12:00', 'Active', '2023-05-01', 'Success', 4),
(27, 'Party', 'Santokba Hall', 'Gujarati', 1000, 100, '2023-05-20', '2023-05-21', '10:00', '21:00', 'Active', '2023-05-05', 'Success', 1),
(26, 'Birthday', 'Santokba Hall', 'Gujarati', 1000, 50, '2023-05-05', '2023-05-05', '21:00', '01:00', 'Canceled', '2023-05-02', 'Success', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eventmaster`
--

DROP TABLE IF EXISTS `eventmaster`;
CREATE TABLE IF NOT EXISTS `eventmaster` (
  `Eid` int(2) NOT NULL AUTO_INCREMENT,
  `Ename` varchar(20) NOT NULL,
  `Edesc` varchar(500) NOT NULL,
  `Ephoto` varchar(30) NOT NULL,
  PRIMARY KEY (`Eid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventmaster`
--

INSERT INTO `eventmaster` (`Eid`, `Ename`, `Edesc`, `Ephoto`) VALUES
(7, 'Wedding', 'The most important day in a couples life. Guaranteeing personalized solutions and flawless execution, our venues provide the perfect location for your special day.A wedding is a beautiful celebration of love and commitment, a day filled with joy, happiness, and unforgettable memories. From the moment the bride walks down the aisle to the exchange of vows and rings, every moment of a wedding is special and meaningful.', 'images/wedding2.jpg'),
(8, 'Birthday', 'Whether an all-day or the ultimate extravaganza that lasts well into the wee hours, our best Events team is here to make sure all your birthday party wishes come true so you can kick back, drink up and enjoy your special day.A birthday celebration is a special occasion that allows us to celebrate life and the people we love. It\'s a time to come together, share laughter and joy, and create unforgettable memories.', 'images/birthday4.jpeg'),
(9, 'Party', 'A party is a gathering of people who have been invited by a host for the purposes of socializing, conversation, recreation, or as part of a festival or other commemoration or celebration of a special occasion.', 'images/party5.jpeg'),
(12, 'Engagement', 'An engagement event is a pre-wedding celebration that is organized to celebrate the commitment between a couple that is soon-to-be-married. This event marks the beginning of an exciting journey for the couple and is an important milestone in their lives.\r\n', 'images/engage4.jpeg'),
(13, 'Baby Shower', 'A baby shower is a celebration held in honor of an expectant mother, usually during the third trimester of her pregnancy. The purpose of a baby shower is to shower the mother-to-be with gifts, support, and love as she prepares to bring a new life into the world.\r\n', 'images/baby3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `familyinfo`
--

DROP TABLE IF EXISTS `familyinfo`;
CREATE TABLE IF NOT EXISTS `familyinfo` (
  `mid` int(4) NOT NULL AUTO_INCREMENT,
  `Image` varchar(30) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Birth` date NOT NULL,
  `Mdate` date DEFAULT NULL,
  `UId` int(4) NOT NULL,
  PRIMARY KEY (`mid`),
  KEY `UId` (`UId`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familyinfo`
--

INSERT INTO `familyinfo` (`mid`, `Image`, `Relation`, `name`, `Birth`, `Mdate`, `UId`) VALUES
(1, 'Images/user4.png', 'Husband', 'Aamir Khan', '2002-05-09', '2020-05-05', 4),
(2, 'Images/user4.png', 'Brother', 'salman Khan', '2022-09-09', '2023-02-11', 4),
(3, 'Images/user4.png', 'Father', 'salman Khan', '1980-05-07', '2001-09-24', 4),
(4, 'Images/user4.png', 'Mother', 'Zarin Khan', '1982-11-07', '2001-09-24', 4),
(5, 'Images/Ayaz.png', 'Son', 'Taimur Khan', '2015-12-07', NULL, 4),
(6, 'Images/user3.png', 'Daughter', 'sara ali khan', '2015-12-07', NULL, 4),
(7, 'Images/user6.png', 'Sister', 'Aliya khan', '2017-03-09', '2029-05-10', 4),
(8, 'Images/user4.png', 'Father', 'Hanif Shaikh', '1975-05-27', '2000-05-02', 1),
(9, 'Images/user6.png', 'Mother', 'Safiya Banu', '1977-06-04', '2000-05-02', 1),
(10, 'Images/user5.png', 'Sister', 'Sauda Banu', '2001-02-05', '2022-11-11', 1),
(11, 'Images/Ayaz.png', 'Brother', 'Ayaz', '2001-03-01', '2022-02-01', 1),
(12, 'Images/user6.png', 'Wife', 'Wife', '2001-05-03', '2023-05-12', 1),
(13, 'Images/user2.png', 'Son', 'Zain Khan', '2023-05-04', NULL, 1),
(14, 'Images/user6.png', 'Daughter', 'Zaiba Khan', '2023-05-03', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

DROP TABLE IF EXISTS `foodmenu`;
CREATE TABLE IF NOT EXISTS `foodmenu` (
  `Fid` int(2) NOT NULL AUTO_INCREMENT,
  `Foodtype` varchar(20) NOT NULL,
  `Price` int(3) NOT NULL,
  `Catno` varchar(13) NOT NULL,
  `Catname` varchar(20) NOT NULL,
  PRIMARY KEY (`Fid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`Fid`, `Foodtype`, `Price`, `Catno`, `Catname`) VALUES
(1, 'Gujarati', 100, '9887857498', 'Bansi Catering'),
(2, 'Panjabi', 150, '9998456958', 'Kohinoor Catering'),
(3, 'South-Indian', 80, '9658745885', 'Apple Catering'),
(4, 'Non-veg Food', 200, '9745856984', 'Alpha Catering'),
(5, 'Mix-Foods', 250, '9658458654', 'Star Catering'),
(6, 'None', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `Gid` int(5) NOT NULL AUTO_INCREMENT,
  `Path` varchar(50) NOT NULL,
  PRIMARY KEY (`Gid`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Gid`, `Path`) VALUES
(1, 'images\\wedding2.jpg'),
(2, 'images\\bdayevent.jpg'),
(64, 'images/couple1.jpg'),
(63, 'images/party3.jpeg'),
(45, 'images/table1.jpeg'),
(47, 'images/birthday4.jpeg'),
(52, 'images/engage4.jpeg'),
(62, 'images/party2.jpeg'),
(56, 'images/hall1.jpeg'),
(61, 'images/argyle.jpg'),
(60, 'images/engage5.jpeg'),
(59, 'images/room4.jpg'),
(58, 'images/engage2.jpeg'),
(57, 'images/couple3.jpg'),
(53, 'images/birthday3.jpeg'),
(69, 'images/meeting2.jpg'),
(65, 'images/room6.jpg'),
(66, 'images/stage1.jpeg'),
(74, 'images/stage2.jpg'),
(75, 'images/homeimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `Oid` int(2) NOT NULL AUTO_INCREMENT,
  `Oname` varchar(20) NOT NULL,
  `Oprice` int(5) NOT NULL,
  PRIMARY KEY (`Oid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`Oid`, `Oname`, `Oprice`) VALUES
(1, 'Wedding', 200000),
(2, 'Birthday', 50000),
(4, 'Party', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(9, 'Zoya', 4, 'Love It', 1683105919),
(11, 'Umar', 5, 'Very Good Service', 1683106097),
(12, 'Ayaz Panar', 5, 'Your Wedding Event managment is incredible....ðŸ˜', 1683106593),
(13, 'Ali Khorajiya', 5, 'Your Management is so good,Love it ðŸ˜˜ðŸ˜', 1683107147);

-- --------------------------------------------------------

--
-- Table structure for table `servicebooking`
--

DROP TABLE IF EXISTS `servicebooking`;
CREATE TABLE IF NOT EXISTS `servicebooking` (
  `Sid` int(2) NOT NULL AUTO_INCREMENT,
  `Uname` varchar(30) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Sprice` int(5) NOT NULL,
  `date` date NOT NULL,
  `Status` varchar(9) NOT NULL,
  `Payment` varchar(10) NOT NULL,
  `paymentid` varchar(30) NOT NULL,
  `UId` int(4) NOT NULL,
  PRIMARY KEY (`Sid`),
  KEY `UId` (`UId`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicebooking`
--

INSERT INTO `servicebooking` (`Sid`, `Uname`, `Sname`, `Sprice`, `date`, `Status`, `Payment`, `paymentid`, `UId`) VALUES
(1, 'Ayaz', 'Car Decoration', 2000, '2023-04-11', 'Active', 'Success', 'husahfoahfoha', 2),
(2, 'Umar Shaikh', 'Stage Decoration', 10000, '2023-05-01', 'Canceled', 'Success', 'pay_LkMfHoRmZ37gaZ', 1),
(16, 'Umar Shaikh', 'Car Decoration', 5000, '2023-05-03', 'Canceled', 'Success', 'pay_Ll6GSkQhpWVHXB', 1),
(15, 'Umar Shaikh', 'Car Decoration', 5000, '2023-05-03', 'Canceled', 'Success', 'pay_Ll6AGwFuNVkSQp', 1),
(14, 'Zoya Malek', 'Car Decoration', 5000, '2023-05-01', 'Active', 'Success', 'pay_LkRd54UsIkM271', 4);

-- --------------------------------------------------------

--
-- Table structure for table `servicemaster`
--

DROP TABLE IF EXISTS `servicemaster`;
CREATE TABLE IF NOT EXISTS `servicemaster` (
  `Sid` int(2) NOT NULL AUTO_INCREMENT,
  `Sname` varchar(20) NOT NULL,
  `Sprice` int(5) NOT NULL,
  `Sdesc` varchar(250) NOT NULL,
  `Sphoto` varchar(30) NOT NULL,
  PRIMARY KEY (`Sid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicemaster`
--

INSERT INTO `servicemaster` (`Sid`, `Sname`, `Sprice`, `Sdesc`, `Sphoto`) VALUES
(1, 'Car Decoration', 5000, 'This is a Car decoration', 'images/car5.jpg'),
(2, 'Stage Decoration', 10000, 'This is a Stage Decoration', 'images/stage1.jpeg'),
(3, 'Room Decoration', 8000, 'This is a Room decoration', 'images/room1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

DROP TABLE IF EXISTS `usermaster`;
CREATE TABLE IF NOT EXISTS `usermaster` (
  `UId` int(4) NOT NULL AUTO_INCREMENT COMMENT 'To store userid',
  `Uname` varchar(30) NOT NULL COMMENT 'To store username',
  `Image` varchar(30) NOT NULL COMMENT 'To store user Image',
  `Mobile` varchar(13) NOT NULL COMMENT 'To store user mobile number',
  `Email` varchar(30) NOT NULL COMMENT 'To store user email',
  `Password` varchar(20) NOT NULL COMMENT 'To store user password',
  `Profession` varchar(20) NOT NULL COMMENT 'To store user profession',
  `Bdate` date NOT NULL COMMENT 'To store user Birth-date',
  `Gender` varchar(18) NOT NULL COMMENT 'To store user gender',
  `Address` varchar(50) NOT NULL COMMENT 'To store user address',
  `City` varchar(28) NOT NULL COMMENT 'To store user city',
  `Pincode` varchar(6) NOT NULL COMMENT 'To store city pincode',
  PRIMARY KEY (`UId`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`UId`, `Uname`, `Image`, `Mobile`, `Email`, `Password`, `Profession`, `Bdate`, `Gender`, `Address`, `City`, `Pincode`) VALUES
(1, 'Umar Shaikh', 'Users\\umar.png', '9714566958', 'umarshaikh641@gmail.com', 'umar@2002', 'Student', '2002-05-30', 'Male', 'Near nilam Cinema,Panagarwado.', 'Patan', '384265'),
(2, 'Ayaz', 'images\\wedding2.jpg', '9909137786', 'ayaz12@gmail.com', 'ayaz12', 'STD', '2001-10-30', 'Male', 'Solarani pol near Loteshvar Road .', 'Patan', '326598'),
(3, 'Tanvir shaikh', 'Users/user1.png', '9658456958', 'tanvir123@gmail.com', 'tanvir@123', 'teacher', '2000-05-02', 'Male', 'Mohammadi Wado,Near Rajkawada Road,Patan.', 'Patan', '384265'),
(4, 'Zoya Malek', 'Users/user5.png', '9645856958', 'umarshaikh3948@gmail.com', 'zoya@123', 'Doctor', '2002-05-04', 'Female', 'Near Three Darwaja,Darjiwado,patan.', 'Patan', '384265'),
(11, 'Vahid Shaikh', 'Users/room7.jpeg', '9879761154', 'umarshaikh3948@gmail.com', 'vahid@123', 'student', '2023-04-05', 'Male', 'gbldshogishigo', 'Patan', '384265');

-- --------------------------------------------------------

--
-- Table structure for table `venuemaster`
--

DROP TABLE IF EXISTS `venuemaster`;
CREATE TABLE IF NOT EXISTS `venuemaster` (
  `VId` int(2) NOT NULL AUTO_INCREMENT,
  `Vname` varchar(20) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `Vdesc` varchar(500) NOT NULL,
  `Price` int(5) NOT NULL,
  `Mno` varchar(13) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Pincode` int(6) NOT NULL,
  PRIMARY KEY (`VId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venuemaster`
--

INSERT INTO `venuemaster` (`VId`, `Vname`, `Image`, `Vdesc`, `Price`, `Mno`, `Mname`, `Address`, `City`, `Pincode`) VALUES
(1, 'Santokba Hall', 'images/hall9.jpg', 'Santokba Hall is a beautiful venue destination for organizing your wedding ceremonies. They are located in Patan. The venue has a kind of ambiance which will definitely steal your gaze and make you fixated at their interior decor and infrastructure. The ambiance style is contemporary with a touch of minimalism and sophistication. They are a team of dedicated, passionate and hardworking staff, which strive to fulfill their customers needs.', 10000, '9785869458', 'Mr.Aman Gupta', 'Near Railway Station,Palika Bazar.', 'Patan', 384265),
(2, 'JeevanDhara Hall', 'images/hall6.jpg', '  JeevanDhara Party Plot, Patan, is a stunning establishment nestled amidst the lush greenery away from the urban hustle. It is idyllic for grand outdoor functions within reasonable pricing, which makes it a top choice for value-conscious hosts. Home to an enormous lawn which is perfect to celebrate your lavish wedding and reception ceremonies with grandiose.', 15000, '8545698752', 'Mr.Vipul Sharma', 'Near Tankvada Road,Bookdi Chowk.', 'Patan', 384265),
(3, 'Utsav Party Ploat', 'images/hall.jpeg', ' Utsav Party Ploat is a popular marriage hall located in the heart of the city. The hall is designed to accommodate a large number of guests and offers a spacious and elegant atmosphere for weddings and other events. The venue features a grand entrance,a beautifully decorated hall, and a large stage for the couple and their families. The hall also offers excellent catering services, including a range of delicious food and beverage options to suit all tastes and preferences. ', 60000, '8545698752', 'Mr.Mahes Patel', 'Sudama Circle,Chanasma Road.', 'Patan', 384265),
(4, '3 Star Hotal', 'images/hotal1.jpg', 'A 3-star hotel is an ideal choice for hosting a birthday party. With its affordable prices and range of amenities, it provides a great value for money and ensures a hassle-free celebration. These hotels offer spacious and well-appointed event spaces that can be customized to suit your needs and preferences. Whether you are looking for a formal banquet hall or a more casual setting, a 3-star hotel has you covered. ', 15000, '8574858745', 'Mr.Salman Khan', 'Near T.B.Three Way,Main Road.', 'Patan', 384265),
(5, '5 Star Hotal', 'images/hotal2.jpg', 'A 5-star hotel is the ultimate choice for hosting a luxurious and unforgettable birthday party. These hotels offer world-class amenities, elegant and opulent decor, and exceptional service that goes above and beyond to make your celebration truly special. ', 17000, '6958477895', 'Mr.Bhavesh Patel', 'Near Sidhpur Circle,R.T.O. Road.', 'Patan', 384265),
(6, '7 Star Hotal', 'images/hall8.jpg', 'A 7-star hotel is an ideal choice for hosting a birthday party. With its affordable prices and range of amenities, it provides a great value for money and ensures a hassle-free celebration. These hotels offer spacious and well-appointed event spaces that can be customized to suit your needs and preferences. Whether you are looking for a formal banquet hall or a more casual setting, a 7-star hotel has you covered. ', 20000, '8745574869', 'Mr.Het Patel', 'Near Tankvada Circle,Bukdi Road.', 'Patan', 384265);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
