-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2025 at 05:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `h_id` int(50) NOT NULL,
  `h_unit` varchar(200) NOT NULL,
  `h_blk` varchar(200) NOT NULL,
  `h_sn` varchar(200) NOT NULL,
  `h_sub` varchar(200) NOT NULL,
  `h_brgy` varchar(200) NOT NULL,
  `h_city` varchar(200) NOT NULL,
  `h_province` varchar(200) NOT NULL,
  `h_country` varchar(200) NOT NULL,
  `h_zip` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`h_id`, `h_unit`, `h_blk`, `h_sn`, `h_sub`, `h_brgy`, `h_city`, `h_province`, `h_country`, `h_zip`) VALUES
(1, '0', 'Rerum pariatur Enim', 'Donna Reeves', 'Rerum eum quod quasi', 'Vitae esse velit es', 'Expedita sapiente op', 'Quia et molestiae qu', 'Lebanon', 61153),
(3, '0', 'Dolore dolor rerum p', 'Miranda Burgess', 'Obcaecati occaecat l', 'Qui irure dolore fac', 'Dolor fugit tempora', 'Quia ut cupiditate m', 'French Southern Territories (the)', 52112),
(4, '0', 'Rerum maiores quo pa', 'Reuben Graham', 'Natus cupidatat sunt', 'Cumque praesentium r', 'Modi dolor est saep', 'Magni officia consec', 'Botswana', 61928),
(5, '0', 'Dolores quo repudian', 'Calvin Harrison', 'Deleniti non quia es', 'Qui exercitationem c', 'Odit voluptatum repu', 'Magnam aliqua Qui d', 'Austria', 28888),
(6, '0', 'Dolores quo repudian', 'Calvin Harrison', 'Deleniti non quia es', 'Qui exercitationem c', 'Odit voluptatum repu', 'Magnam aliqua Qui d', 'Austria', 28888),
(7, '12', 'Ut est natus sed und', 'Stacey Carson', 'Qui sit eum rerum mo', 'Eum consectetur sun', 'Ipsam fuga Dolore v', 'Velit libero molest', 'Nicaragua', 32881),
(8, '0', 'Et quos id nobis por', 'Jennifer Hardin', 'Laudantium dolor ex', 'Laudantium dolor in', 'Dolorum deleniti est', 'Reiciendis eveniet', 'Cambodia', 44923),
(9, '0', 'Placeat tempore au', 'Kyle Sosa', 'Qui qui enim veniam', 'Dolor magna ut earum', 'Atque quam placeat', 'Error autem rerum in', 'Haiti', 87524),
(10, '0', 'Ipsam magni aut temp', 'Xavier Barnes', 'Fugiat ipsa error e', 'Adipisci labore sint', 'Libero et similique', 'Delectus incididunt', 'Korea (the Democratic People\'s Republic of)', 15071),
(11, '0', 'Excepturi sit enim f', 'Nora Rivas', 'Qui aut inventore el', 'Sint eum veniam qui', 'Aliqua Sint mollit', 'Unde autem aperiam e', 'Faroe Islands (the)', 46233),
(12, '0', 'Enim soluta inventor', 'Wynne Clemons', 'Temporibus neque dis', 'Dolor molestias moll', 'Eum est fuga Dicta', 'Rem nostrud vero non', 'United States of America (the)', 10665),
(13, 'In occaecat delectus', 'Duis tempore commod', 'Teagan Hubbard', 'Ab assumenda sint et', 'Duis quis animi sin', 'Autem nisi itaque ve', 'Et eiusmod libero co', 'Monaco', 51581),
(14, 'Consectetur dolor e', 'Rerum corrupti pari', 'Autumn Maldonado', 'Nesciunt qui repreh', 'Est assumenda labore', 'Esse quo asperiores', 'Sint quos sint dolo', 'China', 21780),
(15, 'Labore eu anim ab el', 'Nesciunt temporibus', 'Jeanette Roth', 'Aute et ut laboriosa', 'Tenetur excepturi qu', 'Odit ea officiis ali', 'Debitis et quidem do', 'Philippines (the)', 21334),
(17, 'Quo fugit consequat', 'Commodo quod eos do', 'Ignacia Cain', 'Quibusdam quidem ut', 'Dolor ex laborum Co', 'Et itaque ut occaeca', 'Velit aut et sit to', 'Portugal', 67708),
(18, 'Ut consequatur Ut a', 'Distinctio Consequa', 'Beatrice Tanner', 'Delectus earum erro', 'Non dignissimos culp', 'Beatae ut non tempor', 'Non deserunt labore', 'Tuvalu', 28266),
(19, 'Corrupti aliquid es', 'Magni suscipit quia', 'Jenette Burks', 'Voluptate id consequ', 'Numquam veniam quae', 'Ab aliqua Do quis d', 'Voluptatem exercitat', 'Chad', 33116),
(20, 'Voluptatem molestiae', 'Deleniti aut qui rep', 'Kyla Walls', 'Voluptatum beatae et', 'Vel voluptas incidun', 'Iure sapiente possim', 'Sint autem est et', 'Yemen', 80055);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birth`
--

CREATE TABLE `tbl_birth` (
  `b_id` int(50) NOT NULL,
  `b_unit` varchar(200) NOT NULL,
  `b_blk` varchar(200) NOT NULL,
  `b_sn` varchar(200) NOT NULL,
  `b_sub` varchar(200) NOT NULL,
  `b_brgy` varchar(200) NOT NULL,
  `b_city` varchar(200) NOT NULL,
  `b_province` varchar(200) NOT NULL,
  `b_country` varchar(200) NOT NULL,
  `b_zip` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_birth`
--

INSERT INTO `tbl_birth` (`b_id`, `b_unit`, `b_blk`, `b_sn`, `b_sub`, `b_brgy`, `b_city`, `b_province`, `b_country`, `b_zip`) VALUES
(1, '0', 'Id officia aliquid', 'Randall Dominguez', 'Illum ut omnis volu', 'Laborum Enim deseru', 'Ut cupiditate ut ita', 'Esse impedit labor', 'Korea (the Republic of)', 55562),
(3, '0', 'Totam dolores est si', 'Kirestin Zimmerman', 'Saepe sit iure sit', 'Officia vel minus re', 'Elit duis et dolore', 'Doloremque excepteur', 'Panama', 52019),
(4, '0', 'Officiis minus fugia', 'Erica Haynes', 'Anim nihil sed velit', 'Id assumenda volupta', 'Sit rerum fugiat m', 'Voluptate numquam te', 'Jamaica', 74813),
(5, '0', 'In rerum dolore sit', 'Cullen Hardin', 'Vel consequat Tenet', 'Eiusmod quia ducimus', 'Dolor in aliquip fac', 'Excepteur deleniti q', 'Argentina', 67816),
(6, '0', 'In rerum dolore sit', 'Cullen Hardin', 'Vel consequat Tenet', 'Eiusmod quia ducimus', 'Dolor in aliquip fac', 'Excepteur deleniti q', 'Argentina', 67816),
(7, '15', 'In a voluptas ut dol', 'Quynn Warren', 'Ea eum expedita mini', 'Labore aperiam conse', 'Duis voluptates itaq', 'Optio ut irure sit', 'Sierra Leone', 59634),
(8, '0', 'Eiusmod nesciunt eu', 'Drake Cline', 'Dolores ad corporis', 'Sint non ut est volu', 'Molestiae eum placea', 'Officiis sit volupta', 'Guatemala', 49261),
(9, '0', 'Enim quia ab veritat', 'Quyn Gamble', 'Nisi eum fugit quia', 'Ab ut qui delectus', 'Rerum temporibus do', 'Non a voluptate exce', 'Burkina Faso', 65554),
(10, '0', 'Ipsa veritatis repe', 'Reed Frank', 'Sint nostrum libero', 'Excepturi reiciendis', 'Voluptas ut a archit', 'Quis accusantium eos', 'Philippines (the)', 63456),
(11, '0', 'Dignissimos placeat', 'Eric Mclean', 'Accusantium esse et', 'Ea voluptate excepte', 'Dolores quia dolorib', 'Ea voluptate sequi v', 'Ireland', 89941),
(12, '0', 'Est id perferendis e', 'Blythe Parks', 'Consequatur labore', 'Ut natus in exceptur', 'Tenetur autem nulla', 'Atque reprehenderit', 'Netherlands (the)', 93837),
(13, 'Ian Williams', 'Aliqua Impedit par', 'Stuart Castaneda', 'Sit voluptates dolo', 'Nostrum molestiae qu', 'Id vel voluptatum d', 'Minus cillum rerum c', 'Venezuela (Bolivarian Republic of)', 68371),
(14, 'Eden Sexton', 'Iure occaecat repudi', 'Ima Nixon', 'In illo ut laudantiu', 'Autem qui laborum oc', 'Tempora ut architect', 'Blanditiis velit ver', 'Korea (the Democratic People\'s Republic of)', 71822),
(15, 'Wilma Kennedy', 'Commodi in id incid', 'Tashya Burke', 'Est praesentium ten', 'Ex ut dolor earum sa', 'Sint ut reiciendis', 'Eu architecto id eum', 'Philippines (the)', 93515),
(17, 'Mark Gill', 'Ullamco facere dolor', 'Alexandra Patterson', 'Ipsum voluptas dolor', 'Debitis cum incididu', 'Quis ipsum quo tempo', 'Ut dolorum nisi mini', 'Spain', 79186),
(18, 'Addison Griffin', 'Modi nihil dolores s', 'Moana Serrano', 'Ullamco dignissimos', 'Consequatur sed expe', 'Ex ea sunt aspernat', 'Ducimus officia per', 'Grenada', 57550),
(19, 'Blaine Baird', 'Do id non incididunt', 'Moana Hewitt', 'Molestiae voluptatem', 'Est sit aliqua Po', 'Sed tempora laboris', 'Numquam quia et unde', 'Bouvet Island', 91279),
(20, 'Duncan Stephenson', 'Eu soluta id offici', 'Veronica Freeman', 'Quia veniam quae ne', 'Voluptates rerum dis', 'Sed ex ut consequat', 'Recusandae Repudian', 'Cocos (Keeling) Islands (the)', 83596);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(50) NOT NULL,
  `c_mobile` int(50) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_tel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_mobile`, `c_email`, `c_tel`) VALUES
(1, 12121212, 'xoneweselo@mailinator.com', 2147483647),
(3, 12121212, 'vezocuqole@mailinator.com', 121212121),
(4, 12121212, 'tyvupopize@mailinator.com', 323232323),
(5, 112121212, 'tyma@mailinator.com', 12121212),
(6, 112121212, 'tyma@mailinator.com', 12121212),
(7, 121212112, 'wyjo@mailinator.com', 12121212),
(8, 9578, 'bytenomir@mailinator.com', 8261),
(9, 6741, 'mezu@mailinator.com', 6143),
(10, 9285, 'forupivomo@mailinator.com', 7026),
(11, 8329062, 'fyvaguzi@mailinator.com', 1266959),
(12, 595, 'vymoji@mailinator.com', 9909),
(13, 4034148, 'qobub@mailinator.com', 5055366),
(14, 2276, 'dymu@mailinator.com', 1185),
(15, 7652088, 'andrian@gmail.com', 5546705),
(17, 461757, 'baguxe@mailinator.com', 8927668),
(18, 4159557, 'pipu@mailinator.com', 7788724),
(19, 9796447, 'nuqanaky@mailinator.com', 6689415),
(20, 5727706, 'muxovi@mailinator.com', 4424473);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formation`
--

CREATE TABLE `tbl_formation` (
  `u_id` int(50) NOT NULL,
  `u_lname` varchar(200) NOT NULL,
  `u_fname` varchar(200) NOT NULL,
  `u_middle` varchar(50) NOT NULL,
  `u_dob` date NOT NULL,
  `u_sex` varchar(50) NOT NULL,
  `u_status` varchar(100) NOT NULL,
  `u_tax` int(50) NOT NULL,
  `u_nationality` varchar(200) NOT NULL,
  `u_religion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_formation`
--

INSERT INTO `tbl_formation` (`u_id`, `u_lname`, `u_fname`, `u_middle`, `u_dob`, `u_sex`, `u_status`, `u_tax`, `u_nationality`, `u_religion`) VALUES
(1, 'Yunjin123', 'Leilani', 'Saepe dolorem et vol', '2004-02-21', 'Male', 'Others', 121212122, 'Impedit aut labore', 'Aut consequat Esse'),
(3, 'Cervantes', 'Neil', 'In temporibus amet', '2004-02-21', 'Male', 'Widowed', 1212121212, 'Vitae optio expedit', 'Duis lorem rerum ut'),
(4, 'Estrada', 'Latifah', 'Et dolor minima rati', '2004-02-21', 'Male', 'Others', 2147483647, 'Est atque consectetu', 'Voluptatem et tempor'),
(5, 'Malone', 'Stewart', 'Accusantium at verit', '2004-02-21', 'Female', 'Married', 1212121212, 'Est laboris temporib', 'Vitae aut alias nost'),
(6, 'Malone', 'Stewart', 'Accusantium at verit', '2004-02-21', 'Female', 'Married', 1212121212, 'Est laboris temporib', 'Vitae aut alias nost'),
(7, 'Hoover', 'Brooke', 'Tempor harum aute ea', '2004-02-21', 'Male', 'Legally Separated', 12121212, 'Et dolor rerum dolor', 'Et non beatae quisqu'),
(8, 'Hanni', 'Ori', 'Rem nesciunt quia d', '1977-06-20', 'Female', 'Single', 123, 'Qui quibusdam iste i', 'Ex cumque cum unde n'),
(9, 'Rollins', 'Liberty', 'Maiores nisi consect', '1985-08-30', 'Male', 'Legally Separated', 123, 'Anim excepteur neque', 'Elit unde voluptate'),
(10, 'Jennifer', 'Huh', 'Ipsum eiusmod dolor', '2004-02-04', 'Female', 'Single', 123, 'Non aut officia est', 'Fuga Dolores corrup'),
(11, 'Lindsay', 'Olga', 'Recusandae Cupidata', '2001-12-13', 'Male', 'Widowed', 123, 'Earum expedita error', 'Doloremque enim volu'),
(12, 'Harrison', 'Xena', 'Iusto magnam tempor', '2000-12-04', 'Male', 'Single', 123456789, 'Ad nemo autem repreh', 'Aut nisi et autem nu'),
(13, 'Baird', 'Forrest', 'Rerum doloremque exe', '1972-10-24', 'Female', 'Single', 123, 'Nam tempore beatae', 'Saepe velit irure eu'),
(14, 'Robertson', 'Kaye', 'N', '1983-07-12', 'Male', 'Single', 123, 'Deserunt irure error', 'Dolorem quis omnis m'),
(15, 'Andales', 'Bayaw', 'Ambot', '1987-06-23', 'Female', 'Widowed', 123, 'Nulla laboris perspi', 'Facilis pariatur Na'),
(17, 'Wiley Lamion', 'Jessica Soho', 'In quam in ratione e', '2002-05-04', 'Male', 'Single', 123, 'Aut possimus assume', 'Sunt qui qui sunt i'),
(18, 'Mendez', 'Rashad', 'Et quos ut perferend', '1981-04-29', 'Female', 'Single', 123, 'Quis quos expedita e', 'Aut culpa asperiores'),
(19, 'Salas', 'Tad', 'Voluptas enim in rer', '1988-08-16', 'Female', 'Widowed', 123, 'Consequatur Nulla e', 'Consequatur eos ma'),
(20, 'Bush', 'Ora', 'Odio quibusdam id eo', '2004-03-27', 'Female', 'Widowed', 123, 'Nam eiusmod providen', 'Ducimus nemo animi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parents`
--

CREATE TABLE `tbl_parents` (
  `p_id` int(50) NOT NULL,
  `f_lname` varchar(200) NOT NULL,
  `f_fname` varchar(200) NOT NULL,
  `f_middle` varchar(200) NOT NULL,
  `m_lname` varchar(200) NOT NULL,
  `m_fname` varchar(200) NOT NULL,
  `m_middle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_parents`
--

INSERT INTO `tbl_parents` (`p_id`, `f_lname`, `f_fname`, `f_middle`, `m_lname`, `m_fname`, `m_middle`) VALUES
(1, 'Bradford', 'Chantale', 'Maxine Evans', 'Larson', 'Chava', 'Nasim Jarvis'),
(3, 'Everett', 'Fitzgerald', 'Moses Roberts', 'Thomas', 'Maggy', 'Brynn Webster'),
(4, 'Casey', 'Sydney', 'Calista Oneil', 'Sanders', 'Elijah', 'Jaden Nguyen'),
(5, 'Petersen', 'Melodie', 'Penelope Bond', 'Carson', 'Susan', 'Stewart Tyson'),
(6, 'Petersen', 'Melodie', 'Penelope Bond', 'Carson', 'Susan', 'Stewart Tyson'),
(7, 'Schmidt', 'Honorato', 'Lucas Kane', 'Sears', 'Mohammad', 'Ria Fuller'),
(8, 'Merritt', 'Zenaida', 'Lavinia Giles', 'Park', 'Raya', 'Chantale Meyers'),
(9, 'Gates', 'Rosalyn', 'Allistair Tanner', 'Dickerson', 'Anjolie', 'Kylie Deleon'),
(10, 'Stephens', 'Walter', 'Emerson Steele', 'Blackburn', 'Malik', 'Yardley Mcdonald'),
(11, 'Gregory', 'Jolie', 'Ruby Cain', 'Knight', 'Love', 'Maya Wallace'),
(12, 'Parker', 'Keegan', 'Sophia Stephenson', 'Barber', 'Adrienne', 'Walker English'),
(13, 'Bauer', 'Aimee', 'Lev Franco', 'Todd', 'Omar', 'Sonia Cabrera'),
(14, 'Jordan', 'Pearl', 'Louis Grant', 'Lane', 'Destiny', 'Bruno Christensen'),
(15, 'Palmer', 'Melinda', 'Lance Ryan', 'Donovan', 'Hedda', 'Griffith Franklin'),
(17, 'Hendrix', 'Steel', 'Fletcher Rodriquez', 'Hanson', 'Thomas', 'Lael Bullock'),
(18, 'Castaneda', 'Azalia', 'Cheryl Brewer', 'Duke', 'Chaney', 'Louis Carr'),
(19, 'Mueller', 'Amery', 'Wayne Walters', 'Guthrie', 'Chandler', 'Malik Mckay'),
(20, 'Hays', 'Philip', 'Ann Gilmore', 'Warren', 'Kelsey', 'Azalia Greene');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `tbl_birth`
--
ALTER TABLE `tbl_birth`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_formation`
--
ALTER TABLE `tbl_formation`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tbl_parents`
--
ALTER TABLE `tbl_parents`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `h_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_birth`
--
ALTER TABLE `tbl_birth`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_formation`
--
ALTER TABLE `tbl_formation`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_parents`
--
ALTER TABLE `tbl_parents`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
