-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2025 at 06:54 PM
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
(22, 'Natus perspiciatis', '123', '1813A Lower Pakigne', 'Consectetur', 'Banhigan', 'Badian', 'Cebu', 'Philippines', 6031),
(23, 'Eius pariatur Natus', 'Omnis cum itaque rep', 'Alisa Hardin', 'Nostrum ex asperiore', 'Pulo', 'Badian', 'Cebu', 'Philippines', 24250),
(24, 'Sint enim nihil fug', 'Ad cumque eligendi d', 'Quin Craft', 'Et deserunt aliquam', 'Dagatan', 'Badian', 'Cebu', 'Philippines', 49907),
(25, 'Placeat quibusdam r', 'Tempore vitae et qu', 'Orlando Wood', 'Aut cupidatat adipis', 'Poblacion', 'Badian', 'Cebu', 'Philippines', 69742),
(26, 'Aliqua Dicta eaque', 'Provident do consec', 'Curvada', 'At ex quaerat volupt', 'Lambug', 'Badian', 'Cebu', 'Philippines', 6036),
(27, 'Repellendus Incidun', 'Corporis et voluptat', 'Samuel Witt', 'Ea dolor qui cumque', 'Curvada', 'Badian', 'Cebu', 'Philippines', 47788),
(28, 'Culpa quod debitis', 'Cupiditate aut adipi', 'Cheryl Melton', 'Elit suscipit praes', 'Pakigne', 'Minglanilla', 'Cebu', 'Philippines', 600),
(29, 'Aliqua Dolorem quid', 'Aliquid tenetur temp', 'Alec Mullins', 'Vel eaque nostrum an', 'Ward 2', 'Minglanilla', 'Cebu', 'Philippines', 6000),
(30, 'Necessitatibus ab ve', 'Incididunt vitae off', 'Imelda Chambers', 'In ducimus consequa', 'Lipata', 'Minglanilla', 'Cebu', 'Philippines', 6000),
(31, 'In non quia qui faci', 'In perspiciatis eum', 'Giacomo Patel', 'Voluptates et ea min', 'Ward 1', 'Minglanilla', 'Cebu', 'Philippines', 65603),
(32, 'Voluptatum ea rem re', 'Doloribus ab cumque', 'Kennan Jordan', 'Eveniet ea non est', 'Ward 3', 'Minglanilla', 'Cebu', 'Philippines', 6000),
(33, 'Sint ullamco debitis', 'Iste eiusmod excepte', 'Donna Browning', 'Ducimus cupidatat p', 'Tulay', 'Minglanilla', 'Cebu', 'Philippines', 6000),
(34, 'Accusantium adipisci', 'Alias occaecat magna', 'Avye Velazquez', 'Possimus cum ut qui', 'Eius', 'Moalboal', 'Cebu', 'Philippines', 32642),
(35, 'Quia ut explicabo M', 'Aut quia laboris cil', 'Kamal Jenkins', 'Laborum Fugiat est', 'Quia quis', 'Moalboal', 'Cebu', 'Philippines', 59906),
(36, 'Aspernatur officia m', 'Quisquam voluptate v', 'Oren Johnston', 'In incidunt non aut', 'Quis voluptas et vol', 'Moalboal', 'Cebu', 'Philippines', 14095),
(37, 'In possimus numquam', 'Iste perspiciatis e', 'Hedda Romero', 'Eius nisi voluptas e', 'Eveniet veniam eaq', 'Moalboal', 'Cebu', 'Philippines', 49140),
(38, 'Vitae adipisci ipsam', 'Error omnis consequu', 'Alika Warner', 'Ad ullamco molestiae', 'Fuga Quos vero nihi', 'Moalboal', 'Cebu', 'Philippines', 34796),
(39, 'Aspernatur omnis dig', 'Adipisicing saepe de', 'Andrew Huber', 'Officia pariatur Fu', 'Rerum dolore velit', 'Moalboal', 'Cebu', 'Philippines', 35061),
(40, 'Nulla sunt rerum omn', 'Enim animi aute qui', 'Jasmine Ortiz', 'Qui molestiae repell', 'Quibusdam culpa qui', 'Alegria', 'Cebu', 'Philippines', 73231),
(41, 'Accusantium iste pos', 'Omnis explicabo Qui', 'Byron Dickson', 'Ut nulla totam cum p', 'Aut voluptatem possi', 'Alegria', 'Cebu', 'Philippines', 90967),
(42, 'Dignissimos laboris', 'Distinctio Placeat', 'TaShya Campos', 'Eveniet voluptatibu', 'Qui nulla veniam la', 'Alegria', 'Cebu', 'Philippines', 10312),
(43, 'Voluptate quibusdam', 'Consequatur exercita', 'Mary Odonnell', 'Est dolorem cillum p', 'Tempora nostrud tota', 'Alegria', 'Cebu', 'Philippines', 86804),
(44, 'Iste quaerat nulla r', 'Natus exercitationem', 'Marvin Ferrell', 'Et cupidatat sunt mo', 'Impedit sed vel ear', 'Alegria', 'Cebu', 'Philippines', 98488),
(45, 'Nobis hic dolorem se', 'Neque tempora offici', 'Sierra Hendrix', 'Eveniet aut odit is', 'Tempora occaecat exp', 'Alegria', 'Cebu', 'Philippines', 18838),
(46, 'Doloribus molestiae', 'Temporibus ipsum ve', 'Anjolie Gill', 'Eligendi est eu aliq', 'Blanditiis molestiae', 'Santander', 'Cebu', 'Philippines', 83477),
(47, 'Qui enim ea unde ape', 'Omnis molestiae quis', 'Tallulah Moon', 'Amet blanditiis vel', 'Itaque atque volupta', 'Santander', 'Cebu', 'Philippines', 64971),
(48, 'Itaque sed nostrum s', 'Tenetur cupiditate c', 'Paula Wooten', 'Ullam voluptatem ev', 'Eu sequi illo dolor', 'Santander', 'Cebu', 'Philippines', 48150),
(49, 'Dolores mollitia qui', 'Ipsum et quidem eius', 'Alfreda Henson', 'Provident voluptate', 'Quisquam necessitati', 'Santander', 'Cebu', 'Philippines', 76695),
(50, 'Incididunt nulla dol', 'Facere quia explicab', 'Glenna Glass', 'Ratione doloribus nu', 'Aliquip sint aut com', 'Santander', 'Cebu', 'Philippines', 85301),
(51, 'Cupiditate elit off', 'Corporis sunt aut ma', 'Aretha Leonard', 'Magni velit omnis c', 'Expedita dolor omnis', 'Santander', 'Cebu', 'Philippines', 45071),
(52, 'Quaerat reiciendis r', 'Est doloremque dolo', 'Ima Fox', 'Tempore sunt nobis', 'Illum nulla dolore', 'Ginatilan', 'Cebu', 'Philippines', 45616),
(53, 'Velit hic provident', 'Ut labore et placeat', 'Lester Mccall', 'Optio ipsa sint cu', 'Fugit proident fac', 'Ginatilan', 'Cebu', 'Philippines', 33830),
(54, 'Nobis ut quis dolor', 'Proident velit in a', 'Alvin Gomez', 'Excepturi nostrud qu', 'Provident qui iure', 'Ginatilan', 'Cebu', 'Philippines', 17646),
(55, 'Excepturi deleniti e', 'Consequat Ad quia a', 'Hilda Duncan', 'Ex voluptatum ut vol', 'Voluptatum non sapie', 'Ginatilan', 'Cebu', 'Philippines', 25029),
(56, 'Nulla aut ipsam labo', 'Tempore quae quia n', 'Ella Mcfarland', 'Et autem at nulla si', 'Est dolor iure dolo', 'Ginatilan', 'Cebu', 'Philippines', 62902),
(57, 'Quam ipsam quam aute', 'Ut non enim ullam et', 'Beverly Sloan', 'Accusamus non nostru', 'Ex pariatur Harum e', 'Ginatilan', 'Cebu', 'Philippines', 23422);

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
(22, 'Eden Sexton', 'aasadsd', '1813A Lower Pakigne', 'Blanditiis adipisici', 'Banhigan', 'Badian', 'Cebu', 'Philippines', 6031),
(23, 'Porter Finch', 'Error eiusmod rerum', 'Martha Frank', 'Cumque incididunt ut', 'Enim modi ipsam quae', 'Velit duis voluptatu', 'Illum sit blanditii', 'Isle of Man', 36492),
(24, 'Macaulay Rivera', 'Nihil impedit ullam', 'Bianca Stewart', 'Tempora sed eos ill', 'Et iusto in pariatur', 'Vel debitis dignissi', 'Et sunt veritatis co', 'Australia', 91583),
(25, 'Quemby Hays', 'Ut ut iste deleniti', 'Abigail Griffith', 'Nisi reprehenderit', 'At amet id quod com', 'Praesentium vel iure', 'Deserunt neque simil', 'Sierra Leone', 21215),
(26, 'Chastity Quinn', 'Dolore vero est sequ', 'Suki Hess', 'Reprehenderit quibu', 'Reiciendis neque dic', 'Nesciunt similique', 'Illum corporis moll', 'Senegal', 88580),
(27, 'Meredith Powers', 'At asperiores quibus', 'Desirae Maldonado', 'Eaque aute ducimus', 'Et officia ullam ape', 'Corporis in vel dolo', 'Dolore ipsa optio', 'Bouvet Island', 40488),
(28, 'Ciaran Moss', 'Voluptatem nisi sunt', 'Darius Huff', 'Accusamus natus labo', 'Ab aut sit animi f', 'Irure quis ut amet', 'Dolor fugit officia', 'Guam', 76949),
(29, 'Alma Church', 'Aut tenetur minus se', 'Clayton Dalton', 'Nisi consequatur Do', 'Facilis aliquid dolo', 'Quo vero dolores nul', 'Distinctio Est qui', 'Puerto Rico', 60551),
(30, 'Quon Lindsey', 'Rerum ab quasi praes', 'Andrew Stephenson', 'Ducimus suscipit a', 'Nostrum pariatur Eo', 'Eiusmod dolorum qui', 'Laudantium delectus', 'Malawi', 31427),
(31, 'Rahim Richmond', 'Dolor cumque necessi', 'Ariana Lewis', 'Placeat dicta dolor', 'Maiores omnis iste c', 'Velit asperiores ut', 'Sit placeat qui mo', 'Guinea', 77089),
(32, 'Melodie Vance', 'Rerum eligendi ut id', 'Sarah Dillard', 'Eius ex vero ad dolo', 'Libero minima rerum', 'Cupidatat sit labor', 'Repellendus Maxime', 'Sint Maarten (Dutch part)', 95374),
(33, 'Kyle Burton', 'Ut vero dolores corp', 'Brian Gamble', 'Labore et iusto volu', 'Excepteur elit pari', 'Eaque laborum aut po', 'Vel deleniti mollit', 'Korea (the Republic of)', 64329),
(34, 'Forrest Rose', 'Labore facere conseq', 'Ivan Donaldson', 'Consequat Necessita', 'Ea sed recusandae I', 'Sed facilis qui offi', 'Facilis corrupti nu', 'Bhutan', 32269),
(35, 'Althea Travis', 'Et animi aut quis u', 'Sybill Stephens', 'Suscipit voluptate a', 'Voluptate quasi sequ', 'Ex porro est dolor', 'Enim ullamco eum inv', 'Côte d', 22964),
(36, 'Stephanie Wyatt', 'Enim quia sunt nihi', 'Wilma Cleveland', 'Necessitatibus rerum', 'Nam occaecat a rem q', 'Sint neque eligendi', 'Repudiandae alias qu', 'Guinea', 63236),
(37, 'Alvin Hinton', 'Ex ut veniam rerum', 'Clarke Andrews', 'Ut earum vero amet', 'Obcaecati est fugiat', 'Qui harum ducimus h', 'Non animi minima do', 'Honduras', 44750),
(38, 'Tatyana Moreno', 'Voluptates sunt qui', 'Idola Roman', 'Velit doloribus quis', 'Eaque ipsa sed proi', 'Eaque sit in velit', 'Ut aliqua Est veri', 'Mauritius', 51515),
(39, 'Nissim Mathis', 'Dolorem eius aut inc', 'Ila Wilkinson', 'Eos sint maiores non', 'Placeat officia por', 'Dolor qui dolore aut', 'Aut velit do eius ea', 'El Salvador', 45352),
(40, 'Jescie Kirkland', 'Commodo sed in vitae', 'Roth Wheeler', 'Iusto incididunt ess', 'Nam dignissimos quis', 'Aute accusamus sit o', 'Alias autem anim exe', 'Guyana', 59947),
(41, 'Chester Mckee', 'Animi et sunt simi', 'Arthur Hoffman', 'Occaecat ipsum nostr', 'Iure sed dolores con', 'Illum totam pariatu', 'Et sint non id obcae', 'Albania', 11719),
(42, 'Sylvester Levy', 'Aut molestiae conseq', 'Elijah Stokes', 'Doloribus eum qui el', 'Et libero est vitae', 'Ullamco accusamus ra', 'Minus ea laboris imp', 'Bangladesh', 27176),
(43, 'Malik Barnes', 'Iste voluptatem veni', 'Jesse Barton', 'Dolore et est ullamc', 'Omnis ea dolor ullam', 'Veritatis quis quae', 'Quia dolore aliquid', 'Sint Maarten (Dutch part)', 70874),
(44, 'Xander Calderon', 'Delectus quia corpo', 'Bethany Wilson', 'Voluptate sed mollit', 'Voluptas assumenda n', 'Minim natus fugit m', 'Tenetur cum explicab', 'Philippines', 69018),
(45, 'Logan Espinoza', 'Qui neque laboris co', 'Rose Emerson', 'Nihil magni dolorum', 'Enim ea duis tenetur', 'Eligendi quam id mag', 'Quaerat anim id aute', 'Seychelles', 54792),
(46, 'Chadwick Park', 'Non consectetur ame', 'Sopoline Haley', 'Facere id atque accu', 'Voluptas ex nesciunt', 'Non natus praesentiu', 'Est consequatur vol', 'Syrian Arab Republic', 65809),
(47, 'Rigel Christensen', 'Ut adipisci consequa', 'Judah Morris', 'Et eu eligendi quia', 'Numquam enim deserun', 'In nihil veniam exp', 'Similique non ut mol', 'Mauritania', 85828),
(48, 'Flavia Boyd', 'Modi quia velit eum', 'Colorado Fisher', 'Cupiditate nulla nat', 'Ut et quibusdam Nam', 'Corporis adipisci a', 'Assumenda cupidatat', 'Maldives', 49616),
(49, 'Wynter Mann', 'Eum laborum similiqu', 'Jocelyn Lambert', 'Dolor voluptates eu', 'Harum aut ratione qu', 'Consequatur consequa', 'Accusantium qui sequ', 'Cameroon', 93746),
(50, 'Adrian Mccarty', 'Et nihil minima repr', 'Cyrus Ruiz', 'Culpa labore pariat', 'Ea exercitationem do', 'Voluptate in ad exer', 'Vel aut ea necessita', 'Romania', 51322),
(51, 'Yvonne Sampson', 'Tempor culpa non ea', 'Velma Owens', 'Dolore est sint adi', 'Obcaecati est et qu', 'Laboris id numquam', 'Recusandae Nemo a m', 'Central African Republic (the)', 52568),
(52, 'Tanek Kramer', 'Architecto est et u', 'Robin Hall', 'Cum aut voluptate re', 'Sint quis aut modi f', 'In lorem doloribus r', 'Id at sint in volu', 'China', 40885),
(53, 'Jacob Whitehead', 'Mollitia cillum ipsu', 'Buckminster Noble', 'Odio iure ut ipsa a', 'Et dolor cillum magn', 'Natus et iste dolore', 'Quis aut voluptatem', 'Faroe Islands (the)', 79436),
(54, 'Alyssa Christensen', 'Ut nisi corporis qui', 'Xantha Mccall', 'Ducimus cumque amet', 'Incididunt iure quid', 'Est quidem a duis di', 'Fugit mollitia expe', 'Portugal', 59694),
(55, 'Jason Adams', 'Velit hic quaerat ut', 'Nigel Gardner', 'Tenetur quam minim c', 'Enim aut consequatur', 'Et aliqua Alias ill', 'Vel in ullam est sin', 'Nigeria', 22822),
(56, 'Hilel Chase', 'Duis eum atque quibu', 'Idola Bray', 'Vel saepe reprehende', 'Mollitia tempora ips', 'Est et voluptate par', 'Quod eu illo quam il', 'Korea (the Republic of)', 72231),
(57, 'Scott Simon', 'Quidem aut dicta exp', 'Keely Ayala', 'Perspiciatis ad qui', 'Pariatur Eos minim', 'Ea eiusmod amet in', 'Quia aspernatur ut i', 'Marshall Islands (the)', 91770);

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
(22, 2147483647, 'huhjennifer@gmail.com', 2147483647),
(23, 2724141, 'fovujyqa@mailinator.com', 9187521),
(24, 7319529, 'zyvyryg@mailinator.com', 1461283),
(25, 8351318, 'hesylo@mailinator.com', 1881745),
(26, 4438385, 'zyqejy@mailinator.com', 877217),
(27, 6425453, 'zerywuxe@mailinator.com', 7322947),
(28, 7034196, 'banuhes@mailinator.com', 2066658),
(29, 2049651, 'fyja@mailinator.com', 7975827),
(30, 3321, 'zypu@mailinator.com', 845),
(31, 1934752, 'qekyqo@mailinator.com', 8129319),
(32, 7258, 'parubiqa@mailinator.com', 4209),
(33, 5501, 'bemuw@mailinator.com', 3179),
(34, 4636, 'cigiwoca@mailinator.com', 9522),
(35, 1792, 'tolezuqi@mailinator.com', 7099),
(36, 5883, 'vyzacyw@mailinator.com', 9864),
(37, 2155651, 'nikyhujufu@mailinator.com', 7598694),
(38, 6187798, 'budop@mailinator.com', 6535214),
(39, 439183, 'cifilonew@mailinator.com', 2723823),
(40, 837, 'pabaqivuh@mailinator.com', 9961),
(41, 9686, 'huguwusu@mailinator.com', 1777),
(42, 5651013, 'duluduru@mailinator.com', 3147919),
(43, 5966, 'ramynu@mailinator.com', 3187),
(44, 7101, 'kewoh@mailinator.com', 5294),
(45, 8936, 'tuhycodaz@mailinator.com', 5203),
(46, 6875, 'momuqev@mailinator.com', 2002),
(47, 16, 'dylicopuwa@mailinator.com', 4027),
(48, 7783, 'ryvugirev@mailinator.com', 4073),
(49, 1281, 'nilicuvuj@mailinator.com', 7525),
(50, 8255, 'bizoteq@mailinator.com', 3879),
(51, 6662, 'dodyho@mailinator.com', 8979),
(52, 7044, 'jityrabed@mailinator.com', 1082),
(53, 6316, 'wyri@mailinator.com', 2346),
(54, 6918, 'pypu@mailinator.com', 4552),
(55, 7655472, 'myvega@mailinator.com', 4622018),
(56, 1969, 'redo@mailinator.com', 8329),
(57, 2623692, 'tora@mailinator.com', 1536157);

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
(22, 'Chan', 'Rize', 'N', '2004-04-13', 'Male', 'Single', 123, 'Filipino', 'Catholic'),
(23, 'Black', 'Violet', 'Voluptas aliquam min', '1971-06-28', 'Male', 'Married', 143, 'Beatae ut ducimus q', 'Catholic'),
(24, 'Russell', 'Jamalia', 'Placeat praesentium', '1998-04-16', 'Female', 'Single', 163, 'Australian', 'Q'),
(25, 'Ellis', 'Winifred', 'M', '1994-12-28', 'Male', 'Single', 145, 'Filipino', 'Sed aut debitis nece'),
(26, 'Diana', 'Olivia', 'D', '2005-02-26', 'Female', 'Legally Separated', 123, 'Nam magnam ea in et', 'Qui pariatur Accusa'),
(27, 'Cooper', 'Germaine', 'O', '2005-02-08', 'Female', 'Single', 14356, 'Consectetur et cumqu', 'Porro nulla officia'),
(28, 'Bryan', 'Cody', 'Velit qui eiusmod d', '2002-04-25', 'Male', 'Legally Separated', 123, 'Rerum delectus modi', 'Soluta excepturi odi'),
(29, 'Christensen', 'Adena', 'Enim sint ad reicien', '2000-02-08', 'Male', 'Legally Separated', 142, 'Harum omnis dolor si', 'Culpa distinctio T'),
(30, 'Fowler', 'Galvin', 'Incididunt fugit co', '2006-07-24', 'Male', 'Married', 182, 'Molestiae quia tempo', 'Quasi laborum Est t'),
(31, 'Flores', 'Demetrius', 'D', '2003-02-05', 'Male', 'Married', 123, 'Doloribus nihil non', 'Explicabo Aute nobi'),
(32, 'Snyder', 'Quinlan', 'Ratione sed cupidata', '2005-07-17', 'Male', 'Single', 142, 'Sed explicabo Qui c', 'Perferendis obcaecat'),
(33, 'Norman', 'Logan', 'Illo ullamco consect', '1992-04-18', 'Female', 'Married', 3435325, 'Fugiat non vero aut', 'Ab quas aut harum as'),
(34, 'Howard', 'Kirby', 'Exercitationem quae', '1994-05-16', 'Female', 'Widowed', 123, 'Vero placeat asperi', 'Voluptatum quia quis'),
(35, 'Best', 'Blossom', 'Voluptas reprehender', '2003-08-07', 'Male', 'Widowed', 3455, 'Quia laborum Do min', 'Possimus aperiam co'),
(36, 'Hebert', 'Dai', 'Possimus esse quia', '1982-01-10', 'Female', 'Married', 123, 'Nemo suscipit anim e', 'Voluptas quis fugit'),
(37, 'Perez', 'Devin', 'Ipsum excepteur qui', '2003-08-09', 'Female', 'Legally Separated', 123, 'Consequatur Aliqua', 'Aliquam quidem proid'),
(38, 'Montoya', 'Macaulay', 'Velit dolor consequ', '2003-03-05', 'Female', 'Married', 1234, 'Voluptates dolor lab', 'Ipsum sit rerum qu'),
(39, 'Rich', 'Ainsley', 'Nostrum laudantium', '1988-03-05', 'Female', 'Single', 234, 'Repudiandae sit assu', 'Architecto eos volu'),
(40, 'Barton', 'Len', 'Rerum rem consectetu', '2000-01-04', 'Female', 'Widowed', 123, 'Dolores molestias vo', 'Similique rerum moll'),
(41, 'Cotton', 'Moana', 'Dolor qui sunt aut i', '1974-11-24', 'Female', 'Married', 3455, 'Qui voluptatibus cup', 'Et quidem voluptates'),
(42, 'Lawrence', 'Bert', 'Earum aut enim corru', '2002-04-04', 'Female', 'Widowed', 123, 'Molestiae esse enim', 'Laboriosam qui moll'),
(43, 'Combs', 'Anne', 'Eos fugit sunt rep', '1997-11-02', 'Male', 'Widowed', 123234, 'Mollit impedit labo', 'Unde in elit cum si'),
(44, 'Boone', 'Dale', 'Numquam accusantium', '1999-02-11', 'Male', 'Legally Separated', 123, 'Cupidatat dolor dict', 'Sapiente molestias q'),
(45, 'Sosa', 'Illana', 'Est esse dolorem e', '2000-06-09', 'Male', 'Married', 123, 'Eius provident atqu', 'Et ea ea est sed qua'),
(46, 'Riddle', 'Cameran', 'Illo ipsum modi qui', '1986-06-21', 'Female', 'Single', 123, 'Impedit minim dolor', 'Rerum deserunt illo'),
(47, 'Randall', 'Erich', 'Nihil do labore non', '1981-03-03', 'Male', 'Married', 244535, 'Sit saepe ut reprehe', 'Duis rerum illo quia'),
(48, 'Dickson', 'Josiah', 'Duis magni minim vol', '1988-09-11', 'Male', 'Legally Separated', 2344, 'Suscipit praesentium', 'Quisquam amet in vo'),
(49, 'Copeland', 'Uriah', 'Nihil animi tenetur', '1984-04-01', 'Female', 'Legally Separated', 123234, 'Nobis voluptas amet', 'Esse excepteur minus'),
(50, 'Greer', 'Katelyn', 'Quas iusto minima do', '1980-05-01', 'Female', 'Married', 123, 'Ut cumque amet nisi', 'Veniam incididunt e'),
(51, 'Morrison', 'Haviva', 'Itaque est sed saep', '1974-07-24', 'Male', 'Married', 123, 'Illum dolore rerum', 'Veritatis fugit et'),
(52, 'Macias', 'Kuame', 'Id repudiandae impe', '2002-01-29', 'Female', 'Single', 123, 'Sint in adipisci vol', 'Sed sit eum sed pari'),
(53, 'Hogan', 'Ginger', 'Reprehenderit neque', '2001-06-12', 'Male', 'Legally Separated', 983487, 'Quo voluptatem Aut', 'Consequatur Provide'),
(54, 'Porter', 'Dahlia', 'Unde saepe voluptati', '1987-04-17', 'Male', 'Single', 123, 'In ab qui est occae', 'Dolore animi nihil'),
(55, 'Holland', 'Dolan', 'Vero sit recusandae', '2004-06-09', 'Female', 'Widowed', 123, 'Ea quas sit ratione', 'Qui velit ex placea'),
(56, 'Little', 'Brielle', 'Minima laborum Dolo', '1993-06-20', 'Male', 'Widowed', 12334, 'Occaecat deserunt er', 'Aperiam harum ration'),
(57, 'Leach', 'Wilma', 'Illo provident nisi', '2003-07-09', 'Male', 'Legally Separated', 12133, 'In lorem aliqua Sol', 'Quis earum placeat');

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
(22, 'Thrower', 'Keegan', 'G', 'Mayo', 'Jells', 'A'),
(23, 'Mccoy', 'Lynn', 'Jamalia Puckett', 'Bass', 'Alan', 'Dora Sims'),
(24, 'Moreno', 'Hedy', 'Cade Clayton', 'Strong', 'Oprah', 'Oliver Delaney'),
(25, 'Rosa', 'Riley', 'Abigail Schneider', 'Duncan', 'Jeremy', 'Todd Head'),
(26, 'Mayormita', 'John William', 'none', 'Mayormita', 'John William', 'none'),
(27, 'Marshall', 'Tanek', 'Oliver Bryan', 'Larson', 'Forrest', 'Lee Fisher'),
(28, 'Graves', 'Odette', 'Quemby Houston', 'Welch', 'Derek', 'Noah Gonzalez'),
(29, 'Beck', 'Rhona', 'Tiger Lindsey', 'Underwood', 'Nomlanga', 'Lucian Flowers'),
(30, 'Ingram', 'Vaughan', 'Meredith Bradford', 'Goff', 'Virginia', 'Abbot Brady'),
(31, 'Watson', 'Kirestin', 'Rafael Rojas', 'Barlow', 'Daria', 'Otto Durham'),
(32, 'Head', 'Mari', 'Raven Horn', 'Padilla', 'Destiny', 'Lamar Mayer'),
(33, 'Irwin', 'Amela', 'Blake Richmond', 'Farmer', 'Trevor', 'Madeline Newton'),
(34, 'Phillips', 'Justina', 'Ashely Salinas', 'Davis', 'Shelley', 'Emi Hobbs'),
(35, 'Peters', 'Roth', 'Jeanette Barry', 'Hogan', 'Valentine', 'Duncan Singleton'),
(36, 'Vance', 'Noelle', 'Chandler Hood', 'Ball', 'Ryder', 'Meghan Colon'),
(37, 'Steele', 'Ashton', 'Jemima Bates', 'Henderson', 'Clarke', 'Odette Leonard'),
(38, 'Mccarthy', 'Kylie', 'Malachi Martinez', 'Sosa', 'Helen', 'Brenda Hunt'),
(39, 'Coffey', 'Beau', 'Dylan Howard', 'Hubbard', 'Xavier', 'Fleur Mckay'),
(40, 'Hart', 'Zeph', 'Nigel Reese', 'Weiss', 'Nora', 'Karly Durham'),
(41, 'Burns', 'Destiny', 'Isaac Landry', 'Wiggins', 'Ayanna', 'Rogan Vang'),
(42, 'Sweet', 'Yen', 'Jenette Foster', 'Richards', 'Lucius', 'Risa Barlow'),
(43, 'Chase', 'Paki', 'Nissim Callahan', 'Stephens', 'Mufutau', 'Mallory Reynolds'),
(44, 'Mcpherson', 'Quinlan', 'Madeson Ellis', 'Ortiz', 'Dolan', 'Haley Morrison'),
(45, 'Dean', 'Abbot', 'Sybill Ellis', 'Jensen', 'Yardley', 'Robert Key'),
(46, 'Church', 'Iona', 'Autumn Barton', 'Becker', 'Melvin', 'Raven Morrow'),
(47, 'Wells', 'Aimee', 'Derek Joyner', 'Washington', 'Harding', 'Carter Wells'),
(48, 'Sosa', 'Jorden', 'James Hull', 'Vang', 'Ashton', 'Rebekah Hughes'),
(49, 'Chase', 'Lucas', 'Cyrus Bates', 'Burton', 'Hector', 'Xander Mercado'),
(50, 'Strickland', 'Lester', 'Armando Workman', 'Espinoza', 'Jakeem', 'Joel Emerson'),
(51, 'Wilkins', 'Gareth', 'Zenia Mcclure', 'Hewitt', 'Dylan', 'Felix Woods'),
(52, 'Oneil', 'Wanda', 'Sage Shields', 'Herrera', 'Callie', 'Cheryl Gilmore'),
(53, 'Daniel', 'Fritz', 'Nero Ray', 'Barr', 'Gwendolyn', 'Sophia Brown'),
(54, 'Key', 'Dante', 'Zeph Alvarez', 'Acevedo', 'Hermione', 'Amy Navarro'),
(55, 'Cantrell', 'Armand', 'Nicole Finley', 'Dodson', 'Thaddeus', 'Baxter Cummings'),
(56, 'Thompson', 'Allistair', 'Jameson Wagner', 'Wooten', 'Galvin', 'Camilla Greene'),
(57, 'Park', 'Ezra', 'Judith Mcpherson', 'Tucker', 'Rachel', 'Holly Diaz');

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
  MODIFY `h_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_birth`
--
ALTER TABLE `tbl_birth`
  MODIFY `b_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_formation`
--
ALTER TABLE `tbl_formation`
  MODIFY `u_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_parents`
--
ALTER TABLE `tbl_parents`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
