-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2018 at 08:01 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `actor_name` varchar(254) CHARACTER SET utf8 NOT NULL,
  `avatar_url` varchar(254) CHARACTER SET utf8 NOT NULL,
  `description` varchar(254) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `actor_name`, `avatar_url`, `description`) VALUES
(1, 'Vi Nguyễn', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Diễn Viên Trẻ Việt Nam'),
(2, 'Vi Nguyễn', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Diễn Viên Trẻ Việt Nam'),
(3, 'Vi Nguyễn', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Diễn Viên Trẻ Việt Nam'),
(4, 'Vanessa Kirby', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/54b6TbDmTxrYstaLpXTx2dc5iEi.jpg', NULL),
(5, 'Henry Cavill', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/hErUwonrQgY5Y7RfxOfv8Fq11MB.jpg', NULL),
(6, 'Tom Cruise', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/3oWEuo0e8Nx8JvkqYCDec2iMY6K.jpg', NULL),
(7, 'Jason Momoa', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/suNN1bv5Fc3M3CeUp6nVzwrwUDt.jpg', ''),
(8, 'Randall Park', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/xqeb4ha9TRqWVKuAtqQs3wT1tC2.jpg', NULL),
(9, 'Amber Heard', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/9nLxpZQhQ1Acdzp0e3oar3rjlch.jpg', NULL),
(10, 'Patrick Wilson', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/6KbbwBcE69jssnuwDyhmyykaGFH.jpg', NULL),
(11, 'Robert Downey Jr.', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/1YjdSym1jTG7xjHSI0yGGWEsw5i.jpg', NULL),
(12, 'Chris Hemsworth', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/lrhth7yK9p3vy6p7AabDUM1THKl.jpg', NULL),
(13, 'Chris Evans', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/8CgFKCZJVwZxa1F88n8drEux0vT.jpg', NULL),
(14, 'Scarlett Johansson', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/8EueDe6rPF0jQU4LSpsH2Rmrqac.jpg', NULL),
(15, 'Tom Hiddleston', 'https://image.tmdb.org/t/p/w300_and_h450_bestv2/qB1lHPFBPIzw6I7EvsciZ5wyUNS.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(254) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Viet Nam'),
(2, 'America'),
(3, 'Japan'),
(4, 'UK'),
(5, 'Korea'),
(6, 'China');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `director_name` varchar(254) CHARACTER SET utf8 NOT NULL,
  `avatar_url` varchar(254) CHARACTER SET utf8 NOT NULL,
  `description` varchar(254) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `director_name`, `avatar_url`, `description`) VALUES
(1, 'Vi Nguyen', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Đạo Diễn Trẽ VN'),
(2, 'Vi Nguyen', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Đạo Diễn Trẽ VN'),
(3, 'Vi Nguyen', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Đạo Diễn Trẽ VN'),
(4, 'Vi Nguyen', 'https://scontent.fsgn5-6.fna.fbcdn.net/v/t31.0-8/28061082_930467653788972_5237934952884805552_o.jpg?_nc_cat=106&oh=9d599142ee4b3379ca4e7f2fbbea3927&oe=5C5E468C', 'Đạo Diễn Trẽ VN');

-- --------------------------------------------------------

--
-- Table structure for table `kind`
--

CREATE TABLE `kind` (
  `id` int(11) NOT NULL,
  `kind_name` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kind`
--

INSERT INTO `kind` (`id`, `kind_name`) VALUES
(1, 'Hành Động'),
(2, 'Viễn Tưỡng'),
(3, 'Tình Cảm'),
(4, 'Hài Hước'),
(5, 'Hoạt Hình'),
(6, 'Phiêu lưu'),
(7, 'Khoa học'),
(8, 'Gia đình');

-- --------------------------------------------------------

--
-- Table structure for table `kind_movie`
--

CREATE TABLE `kind_movie` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `kind_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kind_movie`
--

INSERT INTO `kind_movie` (`id`, `movie_id`, `kind_id`) VALUES
(1, 3, 1),
(4, 2, 1),
(5, 2, 8),
(6, 2, 5),
(7, 2, 6),
(8, 3, 2),
(9, 3, 6),
(10, 3, 7),
(11, 4, 1),
(12, 4, 2),
(13, 4, 3),
(14, 4, 6),
(15, 4, 7),
(16, 6, 1),
(17, 6, 3),
(18, 6, 6),
(19, 7, 1),
(20, 7, 2),
(21, 7, 6),
(22, 7, 7),
(23, 8, 1),
(24, 8, 2),
(25, 8, 6),
(26, 8, 7),
(27, 9, 1),
(28, 9, 2),
(29, 9, 6),
(30, 9, 7),
(31, 10, 1),
(32, 10, 2),
(33, 10, 6),
(34, 10, 7);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(254) CHARACTER SET utf8 NOT NULL,
  `trailer` varchar(254) CHARACTER SET utf8 NOT NULL,
  `movie_content` text CHARACTER SET utf8 NOT NULL,
  `avatar_movie_url` varchar(254) CHARACTER SET utf8 NOT NULL,
  `background` varchar(254) CHARACTER SET utf8 NOT NULL,
  `date_of_manufacture` date NOT NULL,
  `year_of_manufacture` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `quality` enum('Tuyệt vời','Hay','Tạm','Tệ') CHARACTER SET utf8 NOT NULL,
  `resolution` varchar(254) CHARACTER SET utf8 NOT NULL,
  `language` varchar(254) CHARACTER SET utf8 NOT NULL,
  `state` enum('Chưa phát hành','Đã phát hành','Đã gỡ bỏ','') CHARACTER SET utf8 NOT NULL,
  `view` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `movie_type` enum('Bộ','Lẻ') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `trailer`, `movie_content`, `avatar_movie_url`, `background`, `date_of_manufacture`, `year_of_manufacture`, `duration`, `quality`, `resolution`, `language`, `state`, `view`, `country_id`, `company_id`, `movie_type`) VALUES
(2, 'Early Man', 'https://www.youtube.com/embed/xwp8betWIiM', 'Dug, along with his sidekick Hognob, unite a cavemen tribe to save their hidden valley from being spoiled and, all together as a team, to face the menace of a mysterious and mighty enemy, on the turf of an ancient and sacred sport.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/ugw07fJIZMVrrIGeN1MO7Xecj5h-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/9m71RMP45mg599xtKPyjicyHn1a.jpg', '2018-01-26', 2018, 90, 'Tuyệt vời', 'Tốt', 'American,Vietnamese', 'Đã phát hành', 99, 2, 1, 'Lẻ'),
(3, 'Ant Man vs The Wasp', 'https://www.youtube.com/embed/UUkn-enk2RU', 'As Scott Lang awaits expiration of his term of house detention, Hope van Dyne and Dr. Hank Pym involve him in a scheme to rescue Mrs. van Dyne from the micro-universe into which she has fallen, while two groups of schemers converge on them with intentions of stealing Dr. Pym\'s inventions.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/rv1AWImgx386ULjcf62VYaW8zSt-300x450.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/6P3c80EOm7BodndGBUAJHHsHKrp.jpg', '2018-07-04', 2018, 118, 'Tuyệt vời', 'Tốt', 'American,Vietnamese', 'Đã phát hành', 99, 2, 1, 'Lẻ'),
(4, 'Ready Player One', 'https://www.youtube.com/embed/DlU4ZSU2xzg', 'When the creator of a popular video game system dies, a virtual contest is created to compete for his fortune.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/09/pU1ULUq8D3iRxl1fdX2lZIzdHuI-300x450.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/09/5a7lMDn3nAj2ByO0X1fg6BhUphR.jpg', '2018-03-08', 2018, 140, 'Tuyệt vời', 'Tốt', 'American,Vietnamese', 'Đã phát hành', 1000, 2, 2, 'Lẻ'),
(6, 'Mission Impossible: Fallout', 'https://www.youtube.com/embed/MEOOas3JZt0', 'When an IMF mission ends badly, the world is faced with dire consequences. As Ethan Hunt takes it upon himself to fulfil his original briefing, the CIA begin to question his loyalty and his motives. The IMF team find themselves in a race against time, hunted by assassins while trying to prevent a global catastrophe.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/80PWnSTkygi3QWWmJ3hrAwqvLnO-300x450.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/5qxePyMYDisLe8rJiBYX8HKEyv2.jpg', '2018-07-25', 2018, 147, 'Tuyệt vời', 'Tốt', 'Vietnamese', 'Đã phát hành', 99, 2, 3, 'Lẻ'),
(7, 'Avenger', 'https://www.youtube.com/embed/eOrNdBpGMv8', 'When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/cezWGskPY5x7GaglTTRN4Fugfb8-1-300x450.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/hbn46fQaRmlpBuUrEiFqv0GDL6Y-1.jpg', '2018-10-17', 2018, 143, 'Tuyệt vời', 'Tốt', 'Vietnamese', 'Đã phát hành', 999, 2, 2, 'Lẻ'),
(8, 'Aquaman', 'https://www.youtube.com/embed/WDkg3h8PCVU', 'Arthur Curry learns that he is the heir to the underwater kingdom of Atlantis, and must step forward to lead his people and to be a hero to the world.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/ydUpl3QkVUCHCq1VWvo2rW4Sf7y-300x450.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/07/5A2bMlLfJrAfX9bqAibOL2gCruF.jpg', '2018-11-16', 2018, 2018, 'Tuyệt vời', 'Tốt', 'Vietnamese', 'Chưa phát hành', 0, 2, 1, 'Lẻ'),
(9, 'Thor', 'https://www.youtube.com/embed/uHBnrJowBZE', 'Against his father Odin\'s will, The Mighty Thor - a powerful but arrogant warrior god - recklessly reignites an ancient war. Thor is cast down to Earth and forced to live among humans as punishment. Once here, Thor learns what it takes to be a true hero when the most dangerous villain of his world sends the darkest forces of Asgard to invade Earth.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/bIuOWTtyFPjsFDevqvF3QrD1aun-2-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/LvmmDZxkTDqp0DX7mUo621ahdX-2.jpg', '2011-10-08', 2011, 115, 'Hay', 'Tốt', 'Vietnamese', 'Đã phát hành', 99, 2, 2, 'Lẻ'),
(10, 'Hulk', 'https://www.youtube.com/embed/10FEq8KO5M0', 'Scientist Bruce Banner scours the planet for an antidote to the unbridled force of rage within him: the Hulk. But when the military masterminds who dream of exploiting his powers force him back to civilization, he finds himself coming face to face with a new, deadly foe.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/qTghl3lO8PhmIxkf8eN5WQQefHI-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/cVpBJxRBIwTjajKQ08TE6BINTEu.jpg', '2008-10-07', 2008, 114, 'Hay', 'Tốt', 'Vietnamese', 'Đã phát hành', 50, 2, 2, 'Lẻ'),
(11, 'Captain America: The First Avenger', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JerVrbLldXw\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 'Predominantly set during World War II, Steve Rogers is a sickly man from Brooklyn who\'s transformed into super-soldier Captain America to aid in the war effort. Rogers must stop the Red Skull – Adolf Hitler\'s ruthless head of weaponry, and the leader of an organization that intends to use a mysterious device of untold powers for world domination.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/vSNxAJTlD0r02V9sPYpOjqDZXUK-1-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/pmZtj1FKvQqISS6iQbkiLg5TAsr-1.jpg', '2011-10-09', 2011, 124, 'Tuyệt vời', 'Tốt', 'Vietnamese', 'Đã phát hành', 99, 2, 3, 'Lẻ'),
(12, 'Iron Man 2', 'https://www.youtube.com/embed/BoohRoVA9WQ', 'With the world now aware of his dual life as the armored superhero Iron Man, billionaire inventor Tony Stark faces pressure from the government, the press and the public to share his technology with the military. Unwilling to let go of his invention, Stark, with Pepper Potts and James \'Rhodey\' Rhodes at his side, must forge new alliances – and confront powerful enemies.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/ArqpkNYGfcTIA6umWt6xihfIZZv-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/jxdSxqAFrdioKgXwgTs5Qfbazjq.jpg', '2010-10-01', 2010, 124, 'Hay', 'Tốt', 'Vietnamese,English', 'Đã phát hành', 99, 2, 2, 'Lẻ'),
(13, 'IRON MAN', 'https://www.youtube.com/embed/8hYlB38asDY', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/848chlIWVT41VtAAgyh9bWymAYb-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/ZQixhAZx6fH1VNafFXsqa1B8QI.jpg', '2008-10-22', 2008, 126, 'Hay', 'Tốt', 'Vietnamese,English', 'Đã phát hành', 9999, 2, 1, 'Lẻ'),
(14, 'IRON MAN', 'https://www.youtube.com/embed/8hYlB38asDY', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/848chlIWVT41VtAAgyh9bWymAYb-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/ZQixhAZx6fH1VNafFXsqa1B8QI.jpg', '2008-10-22', 2008, 126, 'Hay', 'Tốt', 'Vietnamese,English', 'Đã phát hành', 9999, 2, 1, 'Lẻ'),
(15, 'IRON MAN', 'https://www.youtube.com/embed/8hYlB38asDY', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/848chlIWVT41VtAAgyh9bWymAYb-350x520.jpg', 'http://haintheme.com/demo/wp/buster/wp-content/uploads/2018/04/ZQixhAZx6fH1VNafFXsqa1B8QI.jpg', '2008-10-22', 2008, 126, 'Hay', 'Tốt', 'Vietnamese,English', 'Đã phát hành', 9999, 2, 1, 'Lẻ');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie_actor`
--

INSERT INTO `movie_actor` (`id`, `movie_id`, `actor_id`) VALUES
(1, 2, 1),
(2, 3, 1),
(3, 6, 4),
(4, 6, 5),
(5, 6, 6),
(6, 8, 7),
(7, 8, 8),
(8, 8, 9),
(9, 8, 10),
(10, 7, 11),
(11, 7, 12),
(12, 7, 13),
(13, 7, 14),
(14, 7, 15);

-- --------------------------------------------------------

--
-- Table structure for table `movie_director`
--

CREATE TABLE `movie_director` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie_director`
--

INSERT INTO `movie_director` (`id`, `movie_id`, `director_id`) VALUES
(1, 2, 1),
(2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_sourse`
--

CREATE TABLE `movie_sourse` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `url` varchar(254) NOT NULL,
  `episodes` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productioncompany`
--

CREATE TABLE `productioncompany` (
  `id` int(11) NOT NULL,
  `company_name` varchar(254) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productioncompany`
--

INSERT INTO `productioncompany` (`id`, `company_name`) VALUES
(1, 'Vi Entertainment'),
(2, 'Nguyen Entertainment'),
(3, 'TMA Pictures');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `comment` text NOT NULL,
  `email` varchar(254) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `movie_id`, `rate`, `comment`, `email`, `comment_date`) VALUES
(11, 6, 8, 'dascfzaddcadasda', 'eee@gmail.com', '2018-10-11'),
(12, 6, 8, 'dascfzaddcadasda', 'eee@gmail.com', '2018-10-11'),
(13, 6, 10, 'abc', 'havihcm@gmail.com', '2018-10-11'),
(14, 8, 10, 'hay', 'havihcm@gmail.com', '2018-10-11'),
(15, 6, 9, 'Hay lam. goooooooood', 'havihcm@gmail.com', '2018-10-11'),
(16, 6, 7, 'Goood', 'eee@gmail.com', '2018-10-11'),
(17, 6, 8, 'qwe', 'qe', '2018-10-11'),
(18, 6, 9, 'q', 'qq@gmail.com', '2018-10-11'),
(19, 6, 10, 'aaaaaa', 'aaaaaaa@gmail.com', '2018-10-11'),
(20, 6, 9, 'bbbbb', 'aaaab@gmail.com', '2018-10-11'),
(21, 6, 9, 'vi', 'vi@gmail.com', '2018-10-11'),
(22, 6, 1, 'so good', 'gmail@gmail.com', '2018-10-11'),
(23, 8, 1, 'good', 'good@gmail.com', '2018-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(254) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kind`
--
ALTER TABLE `kind`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kind_movie`
--
ALTER TABLE `kind_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movies_company` (`company_id`),
  ADD KEY `fk_movies_country` (`country_id`);

--
-- Indexes for table `movie_actor`
--
ALTER TABLE `movie_actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_director`
--
ALTER TABLE `movie_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_sourse`
--
ALTER TABLE `movie_sourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productioncompany`
--
ALTER TABLE `productioncompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kind`
--
ALTER TABLE `kind`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kind_movie`
--
ALTER TABLE `kind_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movie_actor`
--
ALTER TABLE `movie_actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `movie_director`
--
ALTER TABLE `movie_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie_sourse`
--
ALTER TABLE `movie_sourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productioncompany`
--
ALTER TABLE `productioncompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_company` FOREIGN KEY (`company_id`) REFERENCES `productioncompany` (`id`),
  ADD CONSTRAINT `fk_movies_country` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
