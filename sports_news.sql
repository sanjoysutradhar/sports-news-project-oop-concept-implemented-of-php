-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 02:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category_id` int(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `category_id`, `image`, `description`, `status`, `created_date`) VALUES
(2, 'football blog', 'shanjoy', 11, 'assets/images/blogfootball.jpg', 'this is a football blog', 'active', '2022-11-13'),
(3, 'cricket blog', 'Rahul', 10, 'assets/images/blogcricket.jpg', 'this is description of cricket', 'active', NULL),
(4, 'cricket blog', 'Rahul', 10, 'assets/images/blogcricket-3.jpg', 'eded', 'active', NULL),
(5, 'cricket blog', 'Rahul', 11, 'assets/images/blogcricket.webp', 'The T20 World Cup final will be played between Pakistan and England at the Melbourne Cricket Ground on Sunday. Pakistan defeated New Zealand in the semi-final while Jos Buttler-led England thrashed India to make their entry in the summit clash. However, f', 'active', NULL),
(6, 'cricket blog', 'Rahul', 11, 'assets/images/blogcricket.webp', 'The T20 World Cup final will be played between Pakistan and England at the Melbourne Cricket Ground on Sunday. Pakistan defeated New Zealand in the semi-final while Jos Buttler-led England thrashed India to make their entry in the summit clash. However, f', 'active', NULL),
(7, 'cricket blog', 'Rahul', 11, 'assets/images/blogcricket.webp', 'The T20 World Cup final will be played between Pakistan and England at the Melbourne Cricket Ground on Sunday. Pakistan defeated New Zealand in the semi-final while Jos Buttler-led England thrashed India to make their entry in the summit clash. However, f', 'active', NULL),
(8, 'Former India Batter Backs Pakistan To Win T20 World Cup, Gives Reason', 'diponkar', 10, 'assets/images/blogt3gkprb8_pakistan-cricket-team_625x300_12_November_22.webp', 'efedededfe', 'active', '2022-11-13'),
(9, 'Former India Batter Backs Pakistan To Win T20 World Cup, Gives Reason', 'sarkar', 10, 'assets/images/blogt3gkprb8_pakistan-cricket-team_625x300_12_November_22.webp', 'hi', 'active', '2022-11-13'),
(10, 'World Cup 2022 squads: England, USMNT, Brazil, Argentina & all 32 team rosters in Qatar', 'www.goal.com', 11, 'assets/images/bloggoal---web_three-way-split-4671e692-8fe0-47ea-9549-eefbe2c771df.webp', 'World Cup 2022 will feature the best teams from across the planet, with football\'s global superstars battling it out for the ultimate prize.\r\n\r\nEach team can name a squad of 26 players for the tournament, with the final deadline set for November 13, 2022.', 'active', NULL),
(11, 'Hosts Qatar name World Cup 2022 squad', 'www.aljazeera.com', 11, 'assets/images/blog68984639fa6243668898f1df3540a31a_8.webp', 'There are no big surprises in Qatar’s 2022 squad, with manager Felix Sanchez backing a number of familiar faces.\r\nQatar’s head coach Felix Sanchez has gone with an experienced squad for the country’s maiden World Cup appearance.\r\n\r\nSanchez will be hoping ', 'active', '2022-11-13'),
(12, 'Qatar national football team’s road to World Cup 2022', 'www.aljazeera.com', 11, 'assets/images/blog2021-12-18T125633Z_790337820_UP1EHCI0ZY79G_RTRMADP_3_SOCCER-ARABCUP-EGY-QAT-REPORT.webp', 'The highs, the lows, the wins, the losses and the expectations from the national side.\r\nDoha, Qatar – Qatar is set to make history on November 20, when it becomes the first country to make its debut at the FIFA World Cup by virtue of being the host.\r\n\r\nFI', 'active', '2022-11-13'),
(13, 'Key questions answered, one month before World Cup 2022', 'www.aljazeera.com', 11, 'assets/images/blogSOR08754.webp', 'Here is what you need to know as Qatar marks one month to go before kickoff.It has been 12 years since Sheikh Hamad bin Khalifa Al Thani lifted the Jules Rimet trophy following the announcement that Qatar would host football’s biggest event in 2022, the W', 'active', '2022-11-13'),
(14, 'Pakistan vs England, T20 World Cup 2022 Final: PAK vs ENG head-to-head record and form guide', 'www.hindustantimes.com', 10, 'assets/images/blogworld_cup_final_1668255575349_1668255601545_1668255601545.webp', 'Going by past record, England hold edge over Pakistan but the unpredictable nature of T20 format gives both the teams equal chances to reclaim the glory.The final match of the T20 World Cup will be played between Pakistan and England on Sunday, November 1', 'active', '2022-11-13'),
(15, 'IPL announces first trade for 2023 season as Australia star joins Mumbai Indians from Royal Challengers Bangalore', 'www.hindustantimes.com', 10, 'assets/images/blogrohit_sharma_mi_1668261223879_1668261233993_1668261233993.webp', 'The Indian Premier League on Saturday confirmed the first trade ahead of the 2023 edition.The Indian Premier League (IPL) announced the first trade ahead of the 2023 season of the league, as Australia\'s Jason Behrendorff joins five-time champions Mumbai I', 'active', NULL),
(16, 'Who Will Win The Match Between Pakistan And England? ICC T20 World Cup 2022 Final', 'cricketaddictor.com', 10, 'assets/images/blog349106.webp', 'Pakistan vs England, Match Prediction: Who Will Win The Match Between Pakistan And England? ICC T20 World Cup 2022 Final. England and Pakistan take on each other in the final of the ICC T20 World Cup 2022 in Melbourne on November 13. Pakistan vs England f', 'active', '2022-11-13'),
(18, 'cricket blog', 'Rahul', 10, 'assets/images/blog348886.webp', 'aSASA', 'inactive', '2022-11-13'),
(19, 'How Much Prize Money Did Team India Earn In T20 World Cup 2022?', 'sports.ndtv.com', 10, 'assets/images/blogimagecric.webp', 'As for the two semi-finalists who lost their respective matches, the prize dedicated prize money was set at USD 400,000. This is the reward that the Indian team would get for their semi-final\'s progression.The Indian cricket team couldn\'t go the distance ', 'active', '2022-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`) VALUES
(10, 'cricket', 'This is description of cricket', 'assets/images/categorycricket.jpg', 'active'),
(11, 'football', 'This is description of football', 'assets/images/categoryfootball.jpg', 'active'),
(12, 'tennis', 'This is description of tennis', 'assets/images/categorytennis.jpg', 'active'),
(13, 'basketball', 'This is description of basketball', 'assets/images/categorybasketball.jpg', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
