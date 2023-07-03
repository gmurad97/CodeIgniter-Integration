-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 12:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xlbarbershop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `au_id` int(11) NOT NULL,
  `au_img` varchar(255) NOT NULL,
  `au_img_first_text` varchar(255) NOT NULL,
  `au_img_second_text` varchar(255) NOT NULL,
  `au_desc_base_h1_text` varchar(255) NOT NULL,
  `au_desc_base_p_text` longtext NOT NULL,
  `au_desc_left_h1_text` varchar(255) NOT NULL,
  `au_desc_left_p_text` longtext NOT NULL,
  `au_desc_right_h1_text` varchar(255) NOT NULL,
  `au_desc_right_p_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`au_id`, `au_img`, `au_img_first_text`, `au_img_second_text`, `au_desc_base_h1_text`, `au_desc_base_p_text`, `au_desc_left_h1_text`, `au_desc_left_p_text`, `au_desc_right_h1_text`, `au_desc_right_p_text`) VALUES
(26, '1e1db94e17528f843a50e001a8b55d5a.jpg', 'DEVELOPER', 'Barsik', 'Bizimlə bağlı ətraflı məlumat əldə edin!', 'XL Barbershop yeni açılmasına baxmayaraq uzun illərdir bu sahədə fəaliyyət görsədən ustaların möhtəşəm əl qabiliyyətləri sayəsində sizləri məmnun etməkdədir.\r\n\r\nBir çox sahə üzrə xidmət göstərməyimiz, müasir avadanlıqlarımız, müştərilərimizin rahatlığı üçün təqdim edilən şərait bizi bir çox kişi salonundan fərqləndirən faktorlardır.', 'Əziz müştərilər!', 'Əl çatmayan arzular, çin olmayan röyalara siz də çatmaq istəyirsinizsə bizə etibar edin! Limitsiz çay/qəhvə xidmətimiz və avtomobiliniz üçün pulsuz dayanacaq imkanlarından istifadə edə bilərsiniz.', 'Əziz valideynlər!', 'Övladlarınızı bizim zalımıza etibar edərək həm ximdətlərimizdən istifadə edə biləcəksiniz həm də övladınızın necə əyləncəli vaxt keçirdərək yeni saç stilinə malik olacağına şahid olacaqsınız.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_uid` int(11) NOT NULL,
  `a_firstname` varchar(255) NOT NULL,
  `a_lastname` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_uid`, `a_firstname`, `a_lastname`, `a_email`, `a_username`, `a_password`, `a_img`, `a_created_date`) VALUES
(3, 'Murad\r\n', 'Gazymagomedov', 'murad.dev@bk.ru', 'root', '65829e542dd151f443cc997270c61e78c042a82d687cc13844bf2c1813714600', 'c841a172fef2255dbf06f43d7808382f.jpg', '1688377177');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `f_id` int(11) NOT NULL,
  `f_location_text` varchar(255) NOT NULL,
  `f_phone_text` varchar(255) NOT NULL,
  `f_email_text` varchar(255) NOT NULL,
  `f_twitter_link` varchar(255) NOT NULL,
  `f_facebook_link` varchar(255) NOT NULL,
  `f_youtube_link` varchar(255) NOT NULL,
  `f_instagram_link` varchar(255) NOT NULL,
  `f_copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`f_id`, `f_location_text`, `f_phone_text`, `f_email_text`, `f_twitter_link`, `f_facebook_link`, `f_youtube_link`, `f_instagram_link`, `f_copyright`) VALUES
(10, 'Jafar Jabbarli 44, Caspian Plaza 3, 10th floor Baku, Azerbaijan', '+994559918540', 'murad.dev@bk.ru', 'https://example1.com/', 'https://example2.com/', 'https://example3.com/', 'https://example4.com/', 'Copyright © XL Barbershop 2023 - Design & Developer GMURAD97');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `g_id` int(11) NOT NULL,
  `g_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`g_id`, `g_img`) VALUES
(25, '3ef72ca6aa28d61821e37544a58ae81a.jpg'),
(26, 'f61f890e0123fb9755880151fb9d567e.jpg'),
(28, '558dd35096b8f235a2e414413efee9ae.jpg'),
(29, '68d2ae1717dce5255aad4069c2372f84.jpg'),
(30, '317c2e89e40d3bb464cf6b4271618c84.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `google_map`
--

CREATE TABLE `google_map` (
  `g_id` int(11) NOT NULL,
  `g_iframe` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `google_map`
--

INSERT INTO `google_map` (`g_id`, `g_iframe`) VALUES
(4, '<iframe style=\"filter: invert(90%) saturate(0.5) brightness(0.90);\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.539373105004!2d49.82712663495712!3d40.38523856647664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d9bdc74118b%3A0xc8377414faa8f86b!2sSTIMUL%20Education%20%26%20Consulting!5e0!3m2!1sru!2saz!4v1688419644600!5m2!1sru!2saz\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `header_lending`
--

CREATE TABLE `header_lending` (
  `hl_id` int(11) NOT NULL,
  `hl_video` varchar(255) NOT NULL,
  `hl_base_h1_text` varchar(255) NOT NULL,
  `hl_first_select_icon` varchar(255) NOT NULL,
  `hl_first_p_text` varchar(255) NOT NULL,
  `hl_second_select_icon` varchar(255) NOT NULL,
  `hl_second_p_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_lending`
--

INSERT INTO `header_lending` (`hl_id`, `hl_video`, `hl_base_h1_text`, `hl_first_select_icon`, `hl_first_p_text`, `hl_second_select_icon`, `hl_second_p_text`) VALUES
(7, '6753942e75e4ec8c2cf18df7f78f7fda.mp4', 'XL Barbershop', 'fas fa-fw fa-star', 'FS WEB DEVELOPERS', 'fas fa-fw fa-rocket', 'GMURAD97');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `l_id` int(11) NOT NULL,
  `logo_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`l_id`, `logo_img`) VALUES
(9, 'c0c019e442a872d4bee83433e5eb43c9.png');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `p_id` int(11) NOT NULL,
  `p_base_h1_text` varchar(255) NOT NULL,
  `p_arr_text` varchar(255) NOT NULL,
  `p_arr_value` varchar(255) NOT NULL,
  `p_arr_currency` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`p_id`, `p_base_h1_text`, `p_arr_text`, `p_arr_value`, `p_arr_currency`, `p_img`) VALUES
(14, 'Qiymətlərimizlə tanış olun', 'Saç kəsimi[price_separator_text]Saqqal kəsimi[price_separator_text]Təraş[price_separator_text]Saç boyama[price_separator_text]Keratin + Perma[price_separator_text]Saç darama[price_separator_text]VİP saç kəsimi', '11999[price_separator_value]80[price_separator_value]30[price_separator_value]70[price_separator_value]1999[price_separator_value]35[price_separator_value]150', 'rub[price_separator_currency]usd[price_separator_currency]eur[price_separator_currency]azn[price_separator_currency]rub[price_separator_currency]usd[price_separator_currency]eur', '145bc4c7528a0837e55a521f4c07978a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_h1_text` varchar(255) NOT NULL,
  `s_p_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_h1_text`, `s_p_text`) VALUES
(12, 'Saç kəsimi', 'Hər üz quruluşuna uyğun xüsusi saç kəsim formaları. Həmçinin anatomik saç kəsimi.'),
(13, 'Saqqal kəsimi', 'Seyrək saqqallara forma verilməsi. Özəl buxar vasitəsiylə saqqalın ülgüc ilə təraş edilməsi.'),
(14, 'Saç darama', 'Gedəcəyiniz tədbirə uyğun saçların daranması. Seyrək saçların topik vasitəsylə örtülməsi.\r\n\r\n'),
(15, 'Saç boyama', 'Hər növ saçların peşəkar boyanması. Ağ saçların mikro boya ilə örtünməsi.'),
(16, 'Keratin + Perma', 'Orijinal schwarzkopf məhsulları ilə saçların düzləşdirilməsi və həmçinin burulması'),
(17, 'Üz təmizlənməsi', 'Hydrafacial aparatında, xüsusi serumlar, birdəfəlik başlıqlar və pilinqlərdən istifadə edilməklə üzün təmizlənməsi.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `t_uid` int(11) NOT NULL,
  `t_firstname` varchar(255) DEFAULT NULL,
  `t_lastname` varchar(255) DEFAULT NULL,
  `t_description` longtext DEFAULT NULL,
  `t_experience` varchar(255) DEFAULT NULL,
  `t_email` varchar(255) DEFAULT NULL,
  `t_mobile` varchar(255) DEFAULT NULL,
  `t_position` varchar(255) DEFAULT NULL,
  `t_whatsapp` varchar(255) DEFAULT NULL,
  `t_facebook` varchar(255) DEFAULT NULL,
  `t_instagram` varchar(255) DEFAULT NULL,
  `t_telegram` varchar(255) DEFAULT NULL,
  `t_youtube` varchar(255) DEFAULT NULL,
  `t_status` varchar(255) DEFAULT NULL,
  `t_img` varchar(255) DEFAULT NULL,
  `t_created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`t_uid`, `t_firstname`, `t_lastname`, `t_description`, `t_experience`, `t_email`, `t_mobile`, `t_position`, `t_whatsapp`, `t_facebook`, `t_instagram`, `t_telegram`, `t_youtube`, `t_status`, `t_img`, `t_created_date`) VALUES
(34, 'Barsik', 'Cat', 'Meow...', '10', 'murad.dev@bk.ru', '', 'director', '994559918540', '', '', 'https://telegram.ru', '', 'active', '16a02dd0d698f76254a064525e9b0f05.jpg', '2023-06-21 // 03:12:38'),
(35, 'Murad', 'Gazymagomedov', 'I\'am a Full Stack Web Developer.', '10', 'murad.dev@bk.ru', '994559918540', 'director', '994559918540', 'https://facebook.ru', 'https://instagram.ru', 'https://telegram.ru', 'https://youtube.ru', 'active', 'ef6b67ff203826275808c32a337a080c.jpg', '2023-06-21 // 03:12:26'),
(36, 'İbrahim', 'Usta', 'Meow...', '10', 'murad.dev@bk.ru', '', 'master', '994559918540', '', '', 'https://telegram.ru', '', 'active', '02dc8cf26440f5f89980b6d704e2c8ce.jpg', '2023-06-21 // 03:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `t_id` int(11) NOT NULL,
  `t_firstname` varchar(255) NOT NULL,
  `t_profession` varchar(255) NOT NULL,
  `t_feedback` varchar(255) NOT NULL,
  `t_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`t_id`, `t_firstname`, `t_profession`, `t_feedback`, `t_img`) VALUES
(7, 'Sofia hanim', 'Assembler Developer', 'push message call _printf add esp, 4 ret', '07e50166b2726b6a51bc844dbba2bb68.jpg'),
(8, 'Murad bəy', 'WebDeveloper', 'console.log(\"Nice!\")', 'b55efbbc5c43b464aae21d115d88c303.jpg'),
(9, 'Barsik cat', 'Hacker', 'Meow...meow... :3', '6c2379c9986b9630d4b9f9f9592413f3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `wh_id` int(11) NOT NULL,
  `wh_img` varchar(255) NOT NULL,
  `wh_base_h1_text` varchar(255) NOT NULL,
  `wh_week_monday` varchar(255) NOT NULL,
  `wh_time_monday` varchar(255) NOT NULL,
  `wh_week_tuesday` varchar(255) NOT NULL,
  `wh_time_tuesday` varchar(255) NOT NULL,
  `wh_week_wednesday` varchar(255) NOT NULL,
  `wh_time_wednesday` varchar(255) NOT NULL,
  `wh_week_thursday` varchar(255) NOT NULL,
  `wh_time_thursday` varchar(255) NOT NULL,
  `wh_week_friday` varchar(255) NOT NULL,
  `wh_time_friday` varchar(255) NOT NULL,
  `wh_week_saturday` varchar(255) NOT NULL,
  `wh_time_saturday` varchar(255) NOT NULL,
  `wh_week_sunday` varchar(255) NOT NULL,
  `wh_time_sunday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `working_hours`
--

INSERT INTO `working_hours` (`wh_id`, `wh_img`, `wh_base_h1_text`, `wh_week_monday`, `wh_time_monday`, `wh_week_tuesday`, `wh_time_tuesday`, `wh_week_wednesday`, `wh_time_wednesday`, `wh_week_thursday`, `wh_time_thursday`, `wh_week_friday`, `wh_time_friday`, `wh_week_saturday`, `wh_time_saturday`, `wh_week_sunday`, `wh_time_sunday`) VALUES
(7, '00ad2d1553dc5444a5b30db7cdbac7b7.jpg', 'Ödənişsiz dayanacağımız mövcuddur', 'Bazar ertəsi', '10:00-21:00', 'Çərşəmbə axşamı', '10:00-21:00', 'Çərşəmbə', '10:00-21:00', 'Cümə axşamı', '10:00-21:00', 'Cümə', '10:00-21:00', 'Şənbə', '10:00-20:00', 'Bazar', '10:00-20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`au_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_uid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `google_map`
--
ALTER TABLE `google_map`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `header_lending`
--
ALTER TABLE `header_lending`
  ADD PRIMARY KEY (`hl_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`t_uid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`wh_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `au_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `google_map`
--
ALTER TABLE `google_map`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header_lending`
--
ALTER TABLE `header_lending`
  MODIFY `hl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `t_uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `working_hours`
--
ALTER TABLE `working_hours`
  MODIFY `wh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
