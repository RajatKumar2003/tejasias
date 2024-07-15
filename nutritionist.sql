-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 08:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutritionist`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category_tbl`
--

CREATE TABLE `blog_category_tbl` (
  `CatId` int(11) NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Description` varchar(256) NOT NULL,
  `Status` int(11) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_category_tbl`
--

INSERT INTO `blog_category_tbl` (`CatId`, `Title`, `Description`, `Status`, `CreatedAt`, `UpdatedAt`, `IsDeleted`) VALUES
(3, 'blog category', 'desc of blog category', 1, '2024-06-19 00:38:29.325093', '2024-06-19 00:38:29.325093', 1),
(5, 'second blog category', 'desc of second blog category', 1, '2024-06-22 19:38:11.248653', '2024-06-22 19:38:11.248653', 1),
(6, 'Weight Loss', 'desc of category', 1, '2024-06-25 00:51:30.944935', '2024-06-25 00:51:30.944935', 0),
(7, 'Mindful Eating', 'desc of category', 1, '2024-06-25 00:51:41.004769', '2024-06-25 00:51:41.004769', 0),
(8, 'Understanding Macronutrientss', 'desc of category', 1, '2024-06-25 00:51:50.876589', '2024-06-25 00:51:50.876589', 0),
(9, 'Healthy Snacks on the Go', 'desc of category', 1, '2024-06-25 00:52:02.332808', '2024-06-25 00:52:02.332808', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `BlogId` bigint(20) NOT NULL,
  `Category` bigint(20) NOT NULL,
  `AuthorName` varchar(50) NOT NULL,
  `Image` varchar(256) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `ShortDescription` text NOT NULL,
  `FullDescription` longtext NOT NULL,
  `Date` date NOT NULL,
  `Status` int(20) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`BlogId`, `Category`, `AuthorName`, `Image`, `Title`, `ShortDescription`, `FullDescription`, `Date`, `Status`, `CreatedAt`, `UpdatedAt`, `IsDeleted`) VALUES
(1, 3, 'john wicks', '1.jpg', 'this is title of blog', 'this is short description of blogs', '<p>this is full description of blog post</p>', '2024-06-28', 1, '2024-06-21 21:19:36.108922', '2024-06-21 21:19:36.108922', 1),
(5, 6, 'Emily Johnson', 'blog-1.png', 'The Benefits of Hydration for Weight Loss', 'Discover how staying hydrated can support your weight loss goals and improve overall health.', '<div id=\"idTextPanel\" class=\"jqDnR\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(102, 102, 102); font-family: Verdana, Geneva, Helvetica, sans-serif; font-size: 11px;\"><p style=\"padding: 0px; line-height: normal; font-family: Verdana, G', '2024-06-26', 1, '2024-06-25 00:53:57.687693', '2024-06-25 00:53:57.687693', 0),
(6, 7, 'Sarah Thompson', 'blog-2.png', 'Cultivating a Healthy Relation with Food', 'Learn how practicing mindful eating can help you develop a healthier relationship with food and improve your overall well-being.', '<div id=\"idTextPanel\" class=\"jqDnR\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(102, 102, 102); font-family: Verdana, Geneva, Helvetica, sans-serif; font-size: 11px;\"><p style=\"padding: 0px; line-height: normal; font-family: Verdana, G', '2024-06-14', 1, '2024-06-25 00:55:30.525714', '2024-06-25 00:55:30.525714', 0),
(7, 8, 'Mark Wilson', 'blog-3.png', 'Carbohydrates, Proteins, and Fats', 'Get a comprehensive understanding of macronutrients and their role in your diet for optimal health and weight management.', '<h4>Get a comprehensive understanding of macronutrients and their role in your diet for optimal health and weight management.</h4><div id=\"idTextPanel\" class=\"jqDnR\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(102, 102, 102); font-fami', '2024-06-20', 1, '2024-06-25 00:56:23.161068', '2024-06-25 00:56:23.161068', 0),
(8, 9, 'Emily Johnson', 'blog-4.png', 'Quick and Nutritious Options', 'Explore a variety of convenient and healthy snack ideas to keep you fueled throughout the day.', '<div id=\"idTextPanel\" class=\"jqDnR\" style=\"margin: 0px; padding: 0px; position: relative; color: rgb(102, 102, 102); font-family: Verdana, Geneva, Helvetica, sans-serif; font-size: 11px;\"><p style=\"padding: 0px; line-height: normal; font-family: Verdana, G', '2024-06-12', 1, '2024-06-25 00:57:11.188852', '2024-06-25 00:57:11.188852', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `data` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('7d50f45072ea6a586d794f06b6a097f995278429', '2401:4900:1c33:2308:f8fc:4c59:f933:fd68', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1686224667;is_user_in|b:1;admin_id|s:1:\"1\";user_type|s:1:\"0\";company_id|s:1:\"0\";designation|s:5:\"ADMIN\";admin_name|s:5:\"admin\";admin_unit|s:0:\"\";'),
('ffe82ee9561a9926a4a07e5b1b9999e4ebfd9446', '2405:204:222e:8856::41a:80b0', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1686224222;'),
('6a6b0fe3a996212193c1e99aa1f16e3570d7a8f9', '2401:4900:1c33:2308:f8fc:4c59:f933:fd68', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1686224667;is_user_in|b:1;admin_id|s:1:\"1\";user_type|s:1:\"0\";company_id|s:1:\"0\";designation|s:5:\"ADMIN\";admin_name|s:5:\"admin\";admin_unit|s:0:\"\";'),
('5b2eb1f10bab3e5dba3ce8ccc41da72e426f16da', '114.143.23.10', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1686231175;is_user_in|b:1;admin_id|s:1:\"1\";user_type|s:1:\"0\";company_id|s:1:\"0\";designation|s:5:\"ADMIN\";admin_name|s:5:\"admin\";admin_unit|s:0:\"\";'),
('d3ccf2f7306c1b7a711708cf207926ea05e3c887', '49.44.83.197', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1686230853;'),
('s63qmm6pvs3igh6golm6m0as09gvsau2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718131593;id|s:1:\"5\";'),
('nhls495h5atv53p9npgsi757dkiptde8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718132089;id|s:1:\"5\";'),
('1rumbc0407tfpnf1gbqnnkhvo8q762q6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718133335;id|s:1:\"5\";'),
('107jlils3b6se6po6gvfhv2g0tcnvai4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718133750;id|s:1:\"5\";'),
('igfnhjt6cr3b1pcgbli4g2uv45fthr4v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718133750;id|s:1:\"5\";'),
('k25ca2dc4cu31fv5p9ftc4b24eipocq8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718217754;'),
('popb1kqkbqb0mjh32abanmu6mhaeurlg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718404523;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fr441uop7ekk3g179qnjatj7gjobk4n6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718404911;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pp8oqp7phlo1gv9ua3c08839el94ga1l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718405269;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ibrmcdffi6v2kphagso1jns50ef1foge', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718405572;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rt6tav522arsg8n4j0a25ig1i47173kl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718405926;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('8o3ig1so8c0q4jr9g6sc4ssi3t87ices', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718406233;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('33vbs3d40ateou3946phi4esjbvj6iuk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718406543;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('nrdasgd3iabq7b0q6flov69ttguoojtb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718407334;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ghcuvmaj39j8ivqmtvnvdp3g6d7tls17', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718409722;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('oi74pem0n8c2a21tv4rpbrbpqcue8ktc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718410130;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ns201f4umhp5rkn6i85fq6toj8oge3rh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718410476;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hpesrv32ib6qaqotfe8359gvlmmeqp1f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718410778;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('jndc476bfpu4sdopkqos4kgeuvdmngmc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718411172;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('i483dn4qam060kcjjpjjeldhap5pssec', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718411502;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rnq2grac2t3ofptp78vre2k77aks307o', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718412255;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('e2qrul3d79j3cj4pvsrhgochtpu818fe', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718412629;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pcdde254heracm365j8t6soiospva2ta', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718413761;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2t7n0r02r6blbu4mhpvock8g96hakbrh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718414072;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mnbhna6jjmjpnl2ke6ecrv3k732mci07', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718414888;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('kme11hiqc808cgs5hj8vhn3bbqssjjn0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718415195;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('vvfmsph8mdrc94uc6ud3fpj71tk4eml8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718415528;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('buhdkp706r59qhg6f688sc8qmh15ubf9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718415856;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0459oe959rsua5b2o1landf2lgo5i2i9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718416333;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9ff7rt3ikr8r6qasknv2hmvfa04qbe54', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718416679;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('tbeukvu8suema1hh5nu2vtd2rq0pujeu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718416999;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9car0skofg2bpvjl53jnm81flapeuh77', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718417763;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fsnch1ia35lcbsrlglp680hgotisn82a', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718418086;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0e4j451q2anss68mb2s8d6uiufd2btq7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718418389;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('s4mo06s3t2mtvgtpckescqju3aod8j5n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718418885;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('jafr5o6r3cta3grqph5280fudrokjjaj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718419396;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('g2hd2f3afmbjfal61j0r4vmrdv2s65ne', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718419707;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('lckrortvig529rm9l3q9gfl794kfp64k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718420222;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2ate5ccp999vdm39rl08jdn5uq92namk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718420627;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('27a9abe6okn50vk2v67saetprec8h1c4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718420964;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('resal9kqcbsnchm86ofmje7k72ppb2ma', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718421276;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('liri6tpip7ircdf7fk47390odach8mp3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718422711;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hfgnlngseq3q3jn293eva5s1evm4es8u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718423062;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0ug114m7s6ge29hr7vnk43dmieluuk1m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718423376;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a4d2bms8m3iprk35p38n6km7dnk9f9vl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718423723;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3njv5mkvlulo1mbh9dausp22kvkuv3o2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718424055;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('t2t3sag7for3j3hv93sfk1k82kr3aelj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718424055;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('n6aj0ti3544457v2v6ommhs7701i5np5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718478518;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a9nidn76mpung5v18gh4s7jb8i1jp1fg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718479169;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('96klaapt4a3gcukjqemsi5phjmh7516e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718479678;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a2e7j65ob45kmhu0kukrkt6h8njne3vs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718480041;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('oqplbg49tq0ilnkt0mk03enljieu17ct', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718480364;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('g61tv33n1mgduif1jn13ed8jncn7fn5m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718480924;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('us1tfjoj01s4qiqe4unjkev3hlrjnd0k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718481259;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a7jtj1b7mjojrh8f8itbp1tg3mhrtro3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718481569;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2fccd9tpaufv7ck2cldmr0b97eq5pofn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718481912;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('eorsu3fps9q16rutga229j4iqi1q3329', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718482213;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('highdmulml1agmfjn09q2fcnju5672am', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718482813;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('gh814dt2s08irsb24jg7jdhgnp0t3tfp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718483229;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ivp2nul90kbrsdshdm9hai7h1b9ralrm', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718483977;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hm3s02hd8cedvqdnq8o2k64br3k5k11m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718484519;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('l66153a2uufmiji5pouotk3nm88jks6s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718485758;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('gs9qdl039vs0pbdcumuo4e4mtimol3e2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718486167;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('vpe11hirthjkn06kqh93uue8gg17p091', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718486519;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('66shi43j92k0gvlujcatp74ims6ejhc4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718486820;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3kjju8hhmf9ngi4v9levv5jainm0m92j', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718487213;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2p49hvr55i9pksta5c1ed9noq0vi5k0i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718487835;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('59ms9o87e1768atn4uuahleug48h03ug', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718488174;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rdj80bjjee338sqr44bctv9q3m9gruhg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718488586;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3ta16pr9b5quum3gqmhie3qt9vqptov3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718489068;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('6tnpo8stfb3ujjj6jrqdurrgv0494r3f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718489407;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('28fbgpdftmhmu9ntahibf9m97bo9moap', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718489860;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('h7vdk15u9o294od5t4inb6irnkl5noeh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718490303;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ifokg3oegd5soqa2is9rnip1la4vmtt0', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718490604;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9a1l95fq2spb1kkuc9772rpmsq3ir7it', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718491059;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('vgaga5do77ld9e0ouojamm4en8dt1brb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718491395;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0lk1a3ess293rndvsa0ue3oclnj628u9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718491733;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2h07qtjbcr4d4opcpksk39uj6jchoira', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718492098;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3ho0n61f7n1chba6m0u0sebmrntdun0r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718492513;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p5lv72eqsqf6ftla85qd1mqgkgic862v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718492896;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rcgpurb4jahvvn6trta4via87ook6pta', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718493440;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ukimp8kv3lienn7t3sfq2e7gags4dlkq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718493775;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('054pvvflhvauv7nb0186coo8iqs39s1a', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718494129;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4vnicutul56pssocnpt4ci91g7q4i95t', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718494461;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fo2gre4db7ok94i64nhhb9f3idmfn695', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718494803;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('gb9plf8phtuej1ee0041e524atle9jh9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718496013;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('aujsllea33qd9dk8i52oc4latjl04kv3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718499027;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qhvj5onmtr6numnv2hms8mpculpopas8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718499482;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('bmtq1tc9avmp7vvukb40jmj7ikv81nlr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718499482;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p259kl421sk4klpvku2iuu9no1730dgr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718662669;'),
('h1k6k1ur7uuuu16n0a2vueummr7atoco', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718741555;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4mei7c8nnf3ku9mb2i78fp08uc3vpqta', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718741890;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3lb9gu7ha07adct2eaasq6m8k5d5b7tk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718742235;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('oi597fr174f48uelkgpiiv3hjrqsk0of', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718742550;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3bp99pjdhecef46u80ue3674up2lu9qo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718743725;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('vbs7bphsclkt4cb7etc9kr31rknug6he', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718744078;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qhgl0cugdl88r11ddmjtj3pjv7ic2q9o', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718744450;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('s322sb743r6v4cbudr4239aut75so13f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718744972;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('igauglbqjvolqd35u6o1nf353qnkebg3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718745286;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mepn3r7dp2bk3qhj9oij67v86bskrkt5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718745832;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('l86d4qr6jhhrqkgk82rrirb5e2hv8l3s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718746139;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fcd9ev8pg895p8q6ns1t24dm980umghr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718746517;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('soaeq3c9rgo3ctbvn27crh70trhuct6g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718746836;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('thamai1rh0cbucqmh86qnfth5ch2rvup', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718747182;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ca3fqqke16seamudagfghd3fagu1j8nt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718747657;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mb7b7m0c8a12cfint7pq5mpgcr4pqp3p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718748077;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('nsi406klkjumvgtthqn8m23oruf1k9tk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718748431;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pv3b9vip35p0bd6cpuonpdkncv28mckg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718749924;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('snviolhif6k3mpdo1nrkthu9lvf0k9nr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718750232;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ueja26agls97pfji5g12bjrgcugke8ts', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718750576;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('61rcehvgv056b9phichd03u1ub09r40b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718750886;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('780lsg9v0etlkbqj5qnf3et8q3htpoau', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718751392;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rhini73lrb6bq476dkdb68avr99ddmik', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718751731;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('55qrrga79610gvcnhq4o3s0em64l0rdn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718752633;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fbmc2g9b4n8eln686ashpmtnpcp781oj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718753069;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('do8q7km69jm3b97lvobj941m2jiatr6k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718753562;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('osh4n0k5c6tngcve2hg1abva4qtq7fro', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718754009;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ami55j77orfff1hjd2qllh24qc0ff38b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718754314;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fbk0fgss54fs3l7be2q0s617lqm4qmgq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718754901;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('r84d1h50bpiud2u1tn9q8a68jovos19i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718755203;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9bfuml21t7qcmsqm59hujergetuj28l7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718755510;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2ckuiq7qt17ctrt1q43i71ehflhm9cs3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718755819;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f7reig1gsdb0912ejgle9u6gatsglc29', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718756389;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q0elek6s6l8v8aqo50dlp9f1n54ob7ar', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718757121;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rps9emc9ecsud6m3g0q1jdik3aovj02n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718757431;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('h09l0359j37b39oaqaghtb62tk22ksqf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718757774;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('d1doeh1jmmn5hu0gbv78nl04hq2u360f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718758154;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('sunn2h81csjrjcsp96hldb0piodokt6g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718758752;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7okala24avreg7dimfs3kiglt75agre1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718759069;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ku82phleo8ajvea825i5hr11ga2ug424', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718759424;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c39o5tp5n3pfg3p2007upbg3rglat0sd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1718759424;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('adb60kdjfo0aqr68h23kr095cvirpap5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719001488;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rplq8bhbnbr460b32l2l6fg0i0fvq8jn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719001816;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('plarrdeekb8m35hl6ncq0epshhucnu25', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719002157;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q11s7f3kbq215log3elrfe7qnaa79lvr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719002482;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('dtnt1m7cqvvg02tbadldavimodqi6f6l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719002806;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('bve45437v2e1vgjfahe4g8e6rfnjcemi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719003141;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('u8heeijqdhbsorpv18kfdmb52f8shs6d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719003870;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('47e1jsou4rjr02nd3mortco40i1ugbq9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719004592;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('65lolop46o4o641475lqll6jumhjdhvo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719004964;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('t45radvgrv6qbv6r78u4o2a2pemkpr0u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719005343;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('6vlihasnr83lbhtfo0bfihd9j7dv7hdc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719005658;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('d1msns1u9i6n5247ndh312cs7erk20lo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719005986;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('l3a3j8m6e0k2s7jc1v6o2pltlupoi98i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719006425;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('e0d7ne9nt6efvpbibv5g0i0c6l37aa81', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719006728;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('d0nc6sh540khlqbnu6uogn8mqidh46jt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719007043;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('dm0cevvknkvvjtrflv5vqc5avce4srcd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719007347;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('t7dmji8jub1n227fjehd02qcmq2abd2p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719007692;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rgjo0bk93ep8eqgv68cmfpnvkv6fa20p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719008098;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('sgcncspjst1c7guo43q0m4012t45m2bv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719008544;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3cngll72q9v1scjfc3dvkgvrk6be3t9q', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719008952;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p73ac4hvgaa5rilnoqgqc7o1iun4pvcn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719009279;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ik2cpj78r7joa6k2cudst5msi724vgev', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719009595;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ekmljoii3404qu2mm35asjpf6s0oa38h', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719010544;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3pjjp5hc3ocld3era5tq0f9ea9m7jdvd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719010852;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('n8gbpvpcsshijlchn6hjbcubg4btbdiq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719011182;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('uiuj8uk0thv6o8quibjbhu3m49a3tbuu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719011497;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qituh6e8nf4idv62cn9o83447n6nfmqs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719011842;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('r01b9sejugnrrjg9i814rton3f2t0g5m', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719012334;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ejaa24r9q01sfauqn5emvqkdoudls24n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719012898;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('k9lhh7mavnvhmulpv5npobhp8ht0pp9u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719013219;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f445lrikclo8pihq5v4e6ahrjo0e57vh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719013602;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('dqh6478mm09vc8lmfujntl8um4nhn5uc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719013940;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pjfpnt0dd4tvjo4di355mitfkad61iog', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719015667;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('j4i60gs2k8gnr7b4b9vu2fk5bt3l8nku', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719015975;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('icb9q92mo3pptrpbob3o6mqhhekuhsb7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719016320;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('g55hs6e0f800ah2puql5g3hdtikmcc4i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719016675;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hk4fga5ls96ftrvnlafd7qb71nfvg78r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719017082;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('5jehm1fgrs5diod3r46jd9vr961j5jp4', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719017483;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7krs2kge2i2ejror5pmq78b9lkqm2m12', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719017784;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ci2c93t2o3amd5oe10ebdrpaps3tq9j8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719019362;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('02n0noo0l7leglj5o5pv0ca7im2miiqo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719019808;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('1mle7uf4obatqt4n7cvgfvi66pefd26u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719020119;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('nojsbkulqh3k51mr7jq5qrk91r8o4kku', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719021201;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('elm2t8nqrn9avosall91mjj83rad1of6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719022538;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('5lqlpc7oln962jh25jmh2eh30g0hnc64', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719022978;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('io4dt0vtm2vcpqq523ahrcg1a0giqok5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719023303;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4hscp3406a0g30gv5mcal5d9feumkluo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719023975;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('27cnrc6l1f80i5r57gqln0cn22vc2tet', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719024553;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('74pvijpldulcic3h6m9fj51l003h3hss', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719024875;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0j58a8gqinael5tm7skgsp9rei42hvt7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719025201;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('kt32va4m0ug7luocl6kubpqcstkt1ojl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719025609;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3anmomiem1bb7llhdcoo8f0jgqtol8hl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719025950;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rssm3phn1q9amrh61sicg5ucfhusvp39', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719026537;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('99i11leqhalmv0u8gao83c9dk2v7t9fa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719027126;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hvja8ttopb7t1ojjjrbv9bq1qhipflgd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719027511;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('15fsf6tvhfojuidkiipa9tniu2q1i3f5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719030538;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('btoe6socpvkijclnt1ecee4ccp8714rs', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719030840;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('8asj05gqg7ash62fmrffnmmgmrnfcvsh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719031149;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('i1irgorvjc3klhv1r2sichskg2glultv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719031524;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a7jr8q0722irr8h66vmg2sv2saqjhgt8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719031844;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('u82m63m3card6j9b1uhst8d5fqksqaoh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719032168;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f3h38tbqcpm98u6qlhna9ujfgm24e92t', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719032571;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('cl7j39k1a1t574570s772ln1ertp0bpo', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719032873;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('paqodpv5fd2cmnvkbg3ttdte0p7tdirb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719033191;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('8ctdv980h7ud9lfoens1t2si5q6md7ho', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719033566;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0nmktlm7e354853q7vjjjicl28msrgoi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719033878;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('k7jrklunph1mt8qe4r0k2ncnug4as18p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719034260;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('drp9h893tt8oj8ais8bv5uov29g8qm5u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719034564;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rsmuan6is6f6mjh1lk9t9127t01995vc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719034975;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('coglm854fvtv4o0s8jmhv095tm6ghn6b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719035306;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('jt2an841b3jhuo1d8kk9ahf5j5m35047', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719035625;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hmqjor2dv4grgh9sm0kug5et8uuo8mnh', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719035927;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('d10hpto8org3oshhj179refrt9823tj6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719035927;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('32ainofslklme9dn07egq1ge1l3524ca', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719083401;'),
('bdomkrhc6s5caru47jvfr8t94c81nbpi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719083836;'),
('3e6jsh3ok4s6rhejeqt40qntf9ukdsmg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719083836;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q034tpv39c7bubrn5hs42d974983nips', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719085300;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mga57bs114lfbt46f9atsk8ppdepschi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719085779;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7qf8dpa78c5p8vja2dc5iepr8ku2jb1e', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719086106;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qscl7s4ck5v4p0s7nq7j0m0c3k6q3mud', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719086532;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('kg9naop65decf6125grvevd6akfehurd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719087068;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('6o7chh0r2hclfe9229ufr0sp9smi9gv2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719087528;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('briabcnib89fmd305n3e3tnel1fa0gbv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719087858;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('920nt8d8rm2ppecmfn7ri071fjuf4qe8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719088162;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('cdt7jec5p431uha44886l5fule68fuh8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719088977;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ij5kdbb9u33n2slsc9i10qrlebe74k3s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719089295;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('lfi100rqtsau7mosmcq88sqrjgtvn2de', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719089626;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('r1fkpo35rvaoid34a9uk83h2t9gpsm14', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719089972;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('18ng7n2omttd3ivolcbtvr2i8mg3mib3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719090302;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('auvusfr65n6h05shvhebafig6lrn05hf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719090637;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('sea23og7vg2kmgakddjsd44m0k2sq3fa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719090953;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rrnli3qtptb92lg1d8745fh5p8vin5pf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719091321;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c396qbp9s0186kle7qm0acojuejdsd43', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719092032;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('lbjercdeoapn2lcvkqh85dukktblj7n5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719092384;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('830gjblv7bu746evul2909riuiuj0vub', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719092685;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qvbhtnjg253i1686b32psdec6lc7631n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719093018;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qd8v8e9kfmu996lrt7950k44tge6s964', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719094117;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('sarei2v2qccjlnckr74f7qk6pjbstll3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719094447;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('skn6liuggoaum9j9i8ab7fc3c4cb523j', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719094906;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ck0dd6jomr5uk6impq3ebsveoqbt2od3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719095231;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qq12fn8g35d2fupc7k2p6o3p6casgkft', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719095863;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4kbsf66tf555kkigog2vpjv5tai7uk0k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719096200;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('8bu4kuf526tb04a5f9c5k3j2s9nh5ck6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719096533;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('kv2391i6aj3al19f6k2fieo4thqj17c6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719097132;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('g16j3peq6j3qciv7a7pute8iqtq1vs94', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719098654;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2kalulmmasp8vn6e0rhgl2h9rjhatb7t', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719099061;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fmb585se28ud1l3j0srtgip3op830qqt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719099402;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('1ckifvu5ugntshe5ra09n22i2kpr3im8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719100090;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('8eip6e3okun2cqivv2h043l31qm8qk3j', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719101822;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hisigrueq6v0kcjkgo2gg8nmjuao4u0v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719102143;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('05u1k7i7q4leg3495kk3ecc4ipi47722', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719103366;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('du5ihd5inubma7rie16jhjkq84ga4676', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719103687;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('5u4nmclvusvji1nfo6sncjokej3ro9sq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719104188;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('6afqe2skegnjvpvbvvjvu3onmkocbd2h', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719104564;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('1knob1kgcjh1deas17epku8t1aj7cp2r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719104880;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('aqo2mmj6dl7lehingeduhp3ud15jrlhn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719105192;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('o871ta4rt19livqga2ukgg72n8ktm11h', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719105536;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('bmauvb3tbanc210v389spio0nku1nh5s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719106133;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c5lmljf6raqkfv71hnokjjfek1jvgt4q', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719106472;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pt76vhpri06s7u7tq2o16pq762q5hd7b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719106794;'),
('b5ust58dnt451m4cbo2teqb4g18c86ir', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719185114;'),
('at9kpfnoptnm2ghnasom7a0tcveijjhq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719185426;'),
('frb9ch9583j93k8m0s7klpgg6lfr17hq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719185732;'),
('8mhp0dki8g8g888b2nhtc21b169nerp2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719186063;'),
('6lls37hu17011srod2il9lrcuak8e8ff', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719186453;'),
('a4p4ln3uthirdreptr0218kopuda7aqa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719186793;'),
('vco2ktipqptakfip0df9eebq0eehavtq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719187104;'),
('vk4q03pig60med8ud8sfr1c6uats764b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719187447;'),
('c7ol7lg4nasosjpinefsiglb2uj5d9hg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719187751;'),
('ti6c9b3afann68429dqbovpq2dum6g6s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719188104;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9bl5cr30oh32f3dcj8qrpjq0l0eovl8s', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719188728;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('as5n86d737aeokmg9vjrstni14sf2kpl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719189210;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9phsjfcs81r3pl90g4totpnqld5sr8ep', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719189533;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7i2ligvdv8ckf7ph63a89ddnefebcjlk', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719189888;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q9kl94l9umg7ppofkbqoj6f9v3t855g3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719190437;'),
('i2hk3vj43rl7h0s38nua027ts8fmlmlq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719191038;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('62ne6c8s7096d5j8okkon7s5lk0qsj8p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719191518;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('uimeckqs33mbgkabhr7jbp8u112ldrmq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719192330;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qdu8plh2p5tutvtis19cub8phsctecjr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719192636;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('l704e9s156d622un325pb647jadotc7d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719192973;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q7k0nu5pdmf5qc0psud4e5em9o1ild4i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719193532;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rn7hae72hnap5jn8r942nq01jepps1be', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719193833;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c6h8doen8h73mvvqp97qbepeihe6tn9k', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719194249;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('isihecl7ht8suh9q56qcoda4rsgpb939', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719194758;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f726et94mas14pt1ikvnkp2fcqd6cihg', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719195180;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('9ujob3hf0he664841j7hd9fs7lg96b4l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719195481;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('id3roo6ihjm6ubnusgg4923hsuotovl8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719195481;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qdkps1on5dc0oboqpe1kfbgksoq9l495', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719257361;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('31la1gknmhsraf4hdukpnrmd6j8pisv1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719257682;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4l2dv8clgb4a6ju3rrkichi5hcul2p2n', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719258706;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ucv9mfnasih9rbjio2f4teeqqd8hfk43', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719259031;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('hijr53cknbs2drev6m6vi5eb5bnsjdcc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719259595;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('5b4v2ou22oilsktvgk6f68di14o0tjt1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719260075;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('g29i2n20pu8rrj5jtspbefqob3uk6sts', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719261577;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f7agi9u3j8f6a2rc1rt3v8cm7l1d1dsl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719261937;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mpc79oe3h36k7kemahso0s2h467ounqi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719262238;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('s3d9kv1ca6oh05ldgudl32ol7vv77ujj', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719262543;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c53ta9ms5cigegfbkkl3coe8gf28voaa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719262898;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2fmovnh25malcfpkbk4ldsgibvbq1gv5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719263221;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('d3n19ruadikotn938tr8tk6lmg613hap', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719263563;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('i1hrfu82tme9vfoa1t1gk20iraf0u3if', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719264072;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('f12us73c2491q9frjit5icp6c6c3gt4i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719265200;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7ir368tnv69e802a0sjemqk58e6r4f4o', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719265520;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('c34ogv2n0tm3r77s8isr57d3udr7e8kp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719266088;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('0jcrdn6s8g9ftdn3go7588lsih0igbo1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719266400;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('s0g2bph2gml2jb751igv0hu1063g4hhn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719266866;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('of9nagad21plumum2472ffmrkvog0j4u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719267210;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('m1ulac8lsp5ntr9dtaunaltq224q542c', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719267533;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rdglecv6fche6pe0mnvqcr16nfdbq0r2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719267933;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3vc3a30jdb8tgfi3polgssvqjtm03qv5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719268237;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mucbol5gqjo1vj5ajqloldvi29c4fafa', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719268635;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7pv2rj6iq9ccen54dbvjvhb085vjgj69', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719269034;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('k0ghjlgmbfdvshrjdva2nnmhkkoodc19', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719269949;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('l4bjhmc1592boij055k262rvdaqplf3g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719270307;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rqqp8p4i9ue5eu91odsoqq4e3clj2d9l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719271701;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('cgpp96cbhitaf9sa9rt5553cdh08dem2', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719272294;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('jmrpce2tpi8pig5u4ubio5tu5trf239i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719273311;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ec6d2nf1cgkm8rsgnvluftq1kd2tj6ga', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719273681;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p6pdbq7cmlr52sovk9balurotvsrr912', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719273982;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('lodvmob9eki1iulrt4jt0foftgfijcf8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719274283;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('536gst79s6s04mu9d8dsr20d35fuq0u9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719274815;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2vtq9jrvetfj8am2ukmm6aa9rt8m1ghi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719275172;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qvk8q51q2n4sss2rqetc1vhvbh8oej4c', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719275494;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p2mhjunnlevanl08qk412lmkvmjo3bga', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719275868;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('vosq06ivo8pj6kfc6fvncmoibqm6t56v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719276414;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ikn6nn1m2eqehpapaq61pt2l3dg2075t', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719276725;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4ikuj05mjabso6hdp0qfv45si2r4pbri', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719277033;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('llelbcfelq43avo8o8oenvtu6c660qqb', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719277380;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ssug1hm37u1rn4219cesbpitar4opt3v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719277683;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('p9rbnks05svvp7b100t08b7s9a28jfle', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719278030;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('5v7v1m71vg24puc92t0iu9fs61ha6m7d', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719278331;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ut8f7pt7gt0jp0of1tic1j07mu58iij5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719278641;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('1gvms72lenqukna40fh7glvqoiff3e4q', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719278950;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a3qs6v2uqqu5g5ki0dv44jq67nstq6cr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719279259;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('mmi01tga1d4eoe4c3ill14ka24tc0t40', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719279691;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('glv3ptp7c43clfk1g5ee08cjni4dolac', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719280042;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('27e93jc4q9kb1a473ma6s6fvhev3fo7b', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719280493;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('1cqe5hr8mitt1g72kk29rdtnvr3o5e2g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719280821;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('jhq955fbb42diu61kc2po87309ub3m2v', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719281123;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('n0q0tl37qr88b0sp0crvledb70597mtt', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719281672;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ni3i00hv9qqaq73nqnpmvqngbs86lftc', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719281999;user_id|s:1:\"2\";userName|s:5:\"Admin\";');
INSERT INTO `ci_sessions` (`id`, `ip_address`, `user_agent`, `timestamp`, `data`) VALUES
('8tg40nhce3b3ov0dgs7bbp87gndac4n9', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719282503;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('sev0gilmtmhiisu79t7q3rbkltnhme85', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719282966;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rrss2cs3k31vanahdejtfgjrpohre0s1', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719283276;user_id|s:1:\"2\";userName|s:5:\"Admin\";success_message|s:29:\"We will soon contact with you\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('k3crdt833fdhrjufmf5tjk3tlm3b8jb6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719283585;user_id|s:1:\"2\";userName|s:5:\"Admin\";success_message|s:29:\"We will soon contact with you\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('kdejqpvp0lhkt9n95glr5926lbhkbokn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719283966;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('5tejlto8bbdhlg0gftecen12of2vohnr', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719284459;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('17hdi6kc3pbbpjln28u9v92j4fgsuui7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719284881;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('ud49lcqo1d9oc6g4qi6ps7vfg8datj5l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719285209;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('lsfmu4rp9oudhhtr1ogvuv1jqat9trdu', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719285784;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('q6e0ja2nabrjs4ch6tubj7u3v9tnmrh6', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719286108;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('lg2q5urjerbot3akoeknsf05iak9at29', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719286108;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('ndaqdpnp5825gt8bo4925mff6emk1ucn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719350974;status|s:146:\"<div class=\"alert alert-danger\" id=\"alert\"> <strong><i class=\"fa fa-warning\"></i> &nbsp; Some Problem Occurred !</strong> Please Try Again. </div>\";__ci_vars|a:1:{s:6:\"status\";s:3:\"old\";}'),
('41vj8bihlcv0amd22cd0vk8e7chonmdd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719350974;status|s:146:\"<div class=\"alert alert-danger\" id=\"alert\"> <strong><i class=\"fa fa-warning\"></i> &nbsp; Some Problem Occurred !</strong> Please Try Again. </div>\";__ci_vars|a:1:{s:6:\"status\";s:3:\"old\";}user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('h4a0domjh7rkcoj6acak7nd9u9jgurea', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719432223;__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('1jekme4r0d2pve4pktmng8c5q5crhel7', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719702977;'),
('83mgtt445q8013v9nn8r2kuu02290t8f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719703371;'),
('a81mel9me374d097tm19c5ks9um78u16', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719703674;'),
('v15skooo03mt2bsar395caiq8mq5ckgd', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719703980;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('rtisvpgf8lnt8eokdspr7ebrom8t67n8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719704540;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('2grthlunnqukj8l4g2ddtbko56mhj2ia', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719704892;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fsq8doioqblitml662i51hih7fjngt98', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719705221;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('fnm0nbff7u0sk6e5udd1o6kf2voqidd8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719705571;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('buuqrg01pv2bhg50pljeqo230ubqgr2p', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719705908;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('3qnucc827lvqds1ur758c6bpfplqej9u', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719706225;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('83nqrofhm0ikp7u6lpvkdocbgraja7gn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719706583;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('q0apv8kbr6gl1r0jiktiqb5lhfh27l1f', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719706895;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('v0lithgcukmu9b5i7fflnl0td1k9kag3', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719707196;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('il3ocse49c2pg2dsm34sds385vvnfs6i', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719707502;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('ac1qpqkbr6l93io9iq2rtt7sb0cchqvi', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719707845;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('7ofmbl9162sbqab29tepvdbiqjtuj3qv', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719708428;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('pdbgvie2ob97qbh905g7pqjqpucg8l53', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719708739;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('6r4n37b3o57oheohv49hnbm0fh22nu9j', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719709122;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('o9uqva0ga7kn12ur6semcgh89hd5cpvf', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719709535;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('65v1boe1cse5kqrqc3rb15k5sl77t8di', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719709886;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('344v5smih1auvhaev7ada5s15gusggm5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719710192;user_id|s:1:\"2\";userName|s:5:\"Admin\";success_message|s:29:\"We will soon contact with you\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('ircelevv0iacmhsp3fqdtfjg44vmtbcn', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719710532;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}success_message|s:29:\"We will soon contact with you\";'),
('hbp9rnl3ugmjt69ut0tohjfcrv5adu51', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719711588;user_id|s:1:\"2\";userName|s:5:\"Admin\";__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('0iart1uksmor8pogj445r8j7qiggi3aq', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1719711589;'),
('etckfrdflbjt7i20a58rqrgl4jv9b06g', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720509842;__ci_vars|a:1:{s:15:\"success_message\";s:3:\"old\";}'),
('m2emreg71q8pkbvf8pa0ch1il9q6j2hl', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720584721;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('bit65r6o3vjb7etaka92ombcijgc362r', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720585947;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('a9l7dt1p6ugemvbbpplhmk402hjhrbsp', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720591881;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('aao4hi1n7cetgo60796cujfu4v68vpi8', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720652074;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('4t7r4i84c910jjk8betfq186f7uq713l', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720652403;user_id|s:1:\"2\";userName|s:5:\"Admin\";'),
('qt1cbdfmnv7tvphp4r4r02hplb4k6iv5', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1720828067;'),
('nj3jucvkg2ti649hhvs1v65iqqisun49', '::1', '', '0000-00-00 00:00:00', '__ci_last_regenerate|i:1721025363;status|s:146:\"<div class=\"alert alert-danger\" id=\"alert\"> <strong><i class=\"fa fa-warning\"></i> &nbsp; Some Problem Occurred !</strong> Please Try Again. </div>\";__ci_vars|a:1:{s:6:\"status\";s:3:\"old\";}user_id|s:1:\"2\";userName|s:5:\"Admin\";');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `ContactId` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Message` varchar(256) NOT NULL,
  `Crerated` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`ContactId`, `Name`, `Email`, `Mobile`, `Message`, `Crerated`, `IsDeleted`) VALUES
(1, 'Rohan', 'tejpratapsahu00@gmail.com', '1234567890', 'this is inquiry messge1', '2023-10-11 05:01:28.000000', 0),
(2, 'Rohan', 'tejpratapsahu00@gmail.com', '1234567890', 'this is dummy messge', '2023-10-13 11:02:37.000000', 1),
(3, 'rajat', 'rajatpatel04959@gmail.com', '5365656464', 'this is contact us message', '2024-06-25 02:37:12.627959', 1),
(4, 'rajat', 'rajatpatel04959@gmail.com', '5365656464', 'gssggsgsg', '2024-06-25 02:43:13.571669', 1),
(5, 'rajat', 'rajatpatel04959@gmail.com', '5365656464', 'ggdggdgdg', '2024-06-25 02:46:44.460785', 0),
(6, 'rajat', 'rajatpatel04959@gmail.com', '5365656464', 'gsgsgggd', '2024-06-25 02:53:09.560211', 0),
(7, 'rajat', 'admin123@gmail.com', '5454553535', 'this is second message of contact', '2024-06-26 20:04:33.421175', 0),
(8, 'rajat', 'rajatpatel04959@gmail.com', '5454553535', 'this is text mesage', '2024-06-30 01:12:29.903001', 0),
(9, 'test ', 'admin123@gmail.com', '5454553535', 'this is second message', '2024-06-30 01:20:06.204205', 0),
(10, 'test ', 'admin123@gmail.com', '5454553535', 'this is second message', '2024-06-30 01:22:17.554389', 0),
(11, 'rajat', 'admin123@gmail.com', '5365656464', 'sggssggg', '2024-07-09 07:24:32.486726', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `GalleryId` int(11) NOT NULL,
  `ImagePath` varchar(256) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `IsDeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`GalleryId`, `ImagePath`, `CreatedAt`, `UpdatedAt`, `IsDeleted`) VALUES
(4, '3.jpg', '2024-06-22 20:44:57.387184', '2024-06-22 20:44:57.387184', 0),
(5, '1.jpg', '2024-06-22 20:47:07.489158', '2024-06-22 20:47:07.489158', 0),
(6, 'trading.jpg', '2024-06-22 20:47:34.160035', '2024-06-22 20:47:34.160035', 0),
(7, 'free-images.jpg', '2024-06-22 20:47:53.604599', '2024-06-22 20:47:53.604599', 0),
(8, 'background.jpg', '2024-06-22 20:48:13.384759', '2024-06-22 20:48:13.384759', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_tbl`
--

CREATE TABLE `inquiry_tbl` (
  `InqId` int(11) NOT NULL,
  `InqProduct` varchar(50) NOT NULL,
  `InqProductQty` int(11) NOT NULL,
  `InqUser` varchar(50) NOT NULL,
  `InqMobile` varchar(15) NOT NULL,
  `InqEmail` varchar(100) NOT NULL,
  `InqCompany` varchar(50) NOT NULL,
  `InqCountry` varchar(50) NOT NULL,
  `InqCreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `InqIsDeleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry_tbl`
--

INSERT INTO `inquiry_tbl` (`InqId`, `InqProduct`, `InqProductQty`, `InqUser`, `InqMobile`, `InqEmail`, `InqCompany`, `InqCountry`, `InqCreatedAt`, `InqIsDeleted`) VALUES
(3, '5', 20, 'rjat kumar patel', '9285328828', 'rajatpatel04959@gmail.com', 'IBM', 'India', '2024-06-22 02:40:22.300000', 0),
(4, '5', 20, 'Emily Johnson', '5435555555', 'admin123@gamil.com', 'test', 'test country in not contact form', '2024-06-27 23:23:49.023052', 0),
(5, '5', 20, 'rajat kumars', '5435555555', 'rajatpatel04959@gmail.com', 'test', 'test country in not contact form', '2024-06-28 00:06:58.815470', 0),
(6, '5', 4, 'gdgdgdg', '5435555555', 'admin123@gamil.com', 'test', 'test country in not contact form', '2024-06-28 00:08:00.580401', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_category_tbl`
--

CREATE TABLE `menu_category_tbl` (
  `MCatId` int(11) NOT NULL,
  `MCatTitle` varchar(50) NOT NULL,
  `MCatDescription` varchar(256) NOT NULL,
  `MCatKeyword` varchar(256) NOT NULL,
  `MCatOrder` int(11) NOT NULL,
  `MCatLanguage` varchar(50) NOT NULL,
  `MCatStatus` int(11) NOT NULL,
  `MCatSlug` varchar(50) NOT NULL,
  `MCatCreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `MCatUpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_category_tbl`
--

INSERT INTO `menu_category_tbl` (`MCatId`, `MCatTitle`, `MCatDescription`, `MCatKeyword`, `MCatOrder`, `MCatLanguage`, `MCatStatus`, `MCatSlug`, `MCatCreatedAt`, `MCatUpdatedAt`) VALUES
(3, 'Home', 'desc of home', 'keyword of home', 1, 'english', 1, 'home', '2024-06-24 21:07:22.815369', '2024-06-24 21:07:22.815369'),
(4, 'About', 'desc of about', 'keyword of about', 2, 'english', 1, 'about', '2024-06-24 22:02:02.010613', '2024-06-24 22:02:02.010613'),
(5, 'Team', 'desc of home', 'keyword of home', 3, 'english', 1, 'team', '2024-06-24 23:55:37.113181', '2024-06-24 23:55:37.113181'),
(6, 'Process', 'desc of home', 'keyword of home', 4, 'english', 1, 'process', '2024-06-24 23:55:56.458252', '2024-06-24 23:55:56.458252'),
(7, 'Pricing', 'desc of home', 'keyword of home', 5, 'english', 1, 'pricing', '2024-06-24 23:56:31.265870', '2024-06-24 23:56:31.265870'),
(8, 'Blog', 'desc of home', 'keyword of home', 6, 'english', 1, 'blog', '2024-06-24 23:56:54.862225', '2024-06-24 23:56:54.862225'),
(9, 'Contact', 'desc of home', 'keyword of home', 7, 'english', 1, 'contact', '2024-06-24 23:57:10.519236', '2024-06-24 23:57:10.519236');

-- --------------------------------------------------------

--
-- Table structure for table `menu_tbl`
--

CREATE TABLE `menu_tbl` (
  `MId` int(11) NOT NULL,
  `MTitle` varchar(50) NOT NULL,
  `MDescription` varchar(256) NOT NULL,
  `MKeyword` varchar(256) NOT NULL,
  `MCategory` int(11) NOT NULL,
  `MStatus` int(11) NOT NULL,
  `MSlug` varchar(50) NOT NULL,
  `MCreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `MUpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `MLanguage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_tbl`
--

INSERT INTO `menu_tbl` (`MId`, `MTitle`, `MDescription`, `MKeyword`, `MCategory`, `MStatus`, `MSlug`, `MCreatedAt`, `MUpdatedAt`, `MLanguage`) VALUES
(3, 'sub home', 'desc of home', 'keyword of home', 3, 1, 'subhome', '2024-06-24 23:04:04.615336', '2024-06-24 23:04:04.615336', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `seo_tbl`
--

CREATE TABLE `seo_tbl` (
  `SeoId` int(11) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `SiteTitle` varchar(100) NOT NULL,
  `SiteDescription` varchar(256) NOT NULL,
  `SiteMap` varchar(256) NOT NULL,
  `KeyWords` varchar(256) NOT NULL,
  `GoogleAnalytics` longtext NOT NULL,
  `Logo` varchar(256) NOT NULL,
  `Favicon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_tbl`
--

INSERT INTO `seo_tbl` (`SeoId`, `Language`, `SiteTitle`, `SiteDescription`, `SiteMap`, `KeyWords`, `GoogleAnalytics`, `Logo`, `Favicon`) VALUES
(1, 'english', 'Nutritionist', 'terrt', '3.jpg', 'gsgsg', '', 'Logo.png', 'favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_tbl`
--

CREATE TABLE `testimonial_tbl` (
  `TestId` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Content` longtext NOT NULL,
  `Status` int(11) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `IsDeleted` int(11) NOT NULL,
  `Image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial_tbl`
--

INSERT INTO `testimonial_tbl` (`TestId`, `Name`, `Content`, `Status`, `CreatedAt`, `UpdatedAt`, `IsDeleted`, `Image`) VALUES
(2, 'Emily Johnson', '<p style=\"color: rgb(103, 106, 108);\"><span style=\"color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis <', 1, '2024-06-25 01:13:48.204108', '2024-06-25 01:20:05.972313', 0, 'blog-review2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `UserId` bigint(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `UserType` int(10) NOT NULL,
  `CreatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UpdatedAt` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `UserStatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`UserId`, `Username`, `Password`, `FullName`, `Email`, `Phone`, `Address`, `UserType`, `CreatedAt`, `UpdatedAt`, `UserStatus`) VALUES
(2, 'Admin', '$2y$10$mmfvnsoX6u/4pn5YmCWZJ.6OiV4hnWAfOtQcPrimZUSD2wPKAx9/y', '', 'admin123@gamil.com', '', '', 0, '2024-06-10 21:10:59.882789', '2024-06-10 21:10:59.882789', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category_tbl`
--
ALTER TABLE `blog_category_tbl`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`BlogId`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`GalleryId`);

--
-- Indexes for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  ADD PRIMARY KEY (`InqId`);

--
-- Indexes for table `menu_category_tbl`
--
ALTER TABLE `menu_category_tbl`
  ADD PRIMARY KEY (`MCatId`);

--
-- Indexes for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  ADD PRIMARY KEY (`MId`);

--
-- Indexes for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  ADD PRIMARY KEY (`SeoId`);

--
-- Indexes for table `testimonial_tbl`
--
ALTER TABLE `testimonial_tbl`
  ADD PRIMARY KEY (`TestId`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category_tbl`
--
ALTER TABLE `blog_category_tbl`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `BlogId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `GalleryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inquiry_tbl`
--
ALTER TABLE `inquiry_tbl`
  MODIFY `InqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu_category_tbl`
--
ALTER TABLE `menu_category_tbl`
  MODIFY `MCatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_tbl`
--
ALTER TABLE `menu_tbl`
  MODIFY `MId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_tbl`
--
ALTER TABLE `seo_tbl`
  MODIFY `SeoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial_tbl`
--
ALTER TABLE `testimonial_tbl`
  MODIFY `TestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `UserId` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
