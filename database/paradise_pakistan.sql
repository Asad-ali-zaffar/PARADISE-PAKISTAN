-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 04:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paradise_pakistan`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` bigint(20) UNSIGNED NOT NULL,
  `contact_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_25_093011_create_tbl_visiters_table', 1),
(6, '2022_01_25_093329_create_tbl_guiders_table', 1),
(7, '2022_01_25_093420_create_tbl_transport_booking_table', 1),
(8, '2022_01_25_093508_create_tbl_tour_pakages_table', 1),
(9, '2022_01_25_093634_create_tbl_hotel_bookinges_table', 1),
(10, '2022_01_25_093750_create_tbl_chating_table', 1),
(11, '2022_01_25_094741_create_tbl_category_tour_pakeges_table', 1),
(12, '2022_01_25_095134_create_tbl_category_provinces_table', 1),
(13, '2022_01_29_103050_add_columns_to_tbl_guiders_table', 1),
(14, '2022_02_03_082635_create_tbl_local_rooms_table', 1),
(15, '2022_02_03_082842_create_tbl__hotels_table', 1),
(16, '2022_02_03_083307_create_tbl__room_bookings_table', 1),
(17, '2022_02_03_132753_create_tbl_images_table', 1),
(18, '2022_02_25_190502_create_tbl_tour_points_table', 1),
(19, '2022_02_25_194133_create_tbl_citys_table', 1),
(20, '2022_02_25_194715_create_tbl_health_care_center_table', 1),
(21, '2022_02_25_195119_create_tbl_divisions_table', 1),
(22, '2022_02_26_042009_create_subscribes_table', 1),
(23, '2022_02_26_050302_create_contact_us_table', 1),
(24, '2022_02_26_104032_create_tbl_admins_table', 1),
(25, '2022_02_26_143719_create_tbl_pakage_bookings_table', 2),
(26, '2022_02_26_180316_create_tbl_visitor_reviews_table', 3),
(27, '2022_02_27_122859_add_column_to_tbl_health_care_center_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `subscribe_id` bigint(20) UNSIGNED NOT NULL,
  `subscribes_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`subscribe_id`, `subscribes_email`, `created_at`, `updated_at`) VALUES
(1, 'contactwithasad786@gmail.com', '2022-07-30 05:36:07', '2022-07-30 05:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`admin_id`, `admin_name`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'asad@gmail.com', '1234@#asad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_provinces`
--

CREATE TABLE `tbl_category_provinces` (
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_img` blob NOT NULL,
  `province_divisions` int(11) NOT NULL,
  `province_tour_pointsID` int(11) NOT NULL,
  `province_cityID` int(11) NOT NULL,
  `province_hotelID` int(11) NOT NULL,
  `province_localroomID` int(11) NOT NULL,
  `province_health_centerID` int(11) NOT NULL,
  `province_tour_guiderID` int(11) NOT NULL,
  `province_divisionID` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_tour_pakeges`
--

CREATE TABLE `tbl_category_tour_pakeges` (
  `category_pakege_id` bigint(20) UNSIGNED NOT NULL,
  `tour_pakege_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakege_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_pakageID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chating`
--

CREATE TABLE `tbl_chating` (
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `visiter_id` int(11) NOT NULL,
  `lochal_room_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_citys`
--

CREATE TABLE `tbl_citys` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_tourPointsID` bigint(20) UNSIGNED NOT NULL,
  `city_tour_guiderID` bigint(20) UNSIGNED NOT NULL,
  `city_local_roomID` bigint(20) UNSIGNED NOT NULL,
  `city_hotelID` bigint(20) UNSIGNED NOT NULL,
  `city_ceare_centersID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_history` varchar(3255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_citys`
--

INSERT INTO `tbl_citys` (`city_id`, `city_name`, `city_tourPointsID`, `city_tour_guiderID`, `city_local_roomID`, `city_hotelID`, `city_ceare_centersID`, `city_image`, `city_history`, `created_at`, `updated_at`) VALUES
(1, 'Lahore', 2, 3, 2, 2, '2', '1646041210.jpg', 'Rahim Yar Khan (RYK) situated on the bank of River Indus, was built in 1751 A.D. during the Sumra Supremacy in Sindh. Previously known as Noshehra was named Rahim Yar Khan in 1809 by Nawab Muhammad Sadiq Khan after his first son. In 1930, the city was designated as a District Headquarter and in 1942 became an industrial zone and Cotton Centre with the advent of several industrial units and factories all over the town. Two landmark factories of Abbasia Textile Mills and Sadiq Vegetable &amp;amp;amp; Oil Mills (now Unilever) were established in 1950, which added more in the urbanization of the city. This urbanization continued since then and now the city is one of the modern district headquarters in Punjab with decent civic facilities and infrastructure.', NULL, '2022-02-28 04:40:10'),
(2, 'Karachi', 1, 4, 2, 1, '2', '1646041426.jpg', 'Rahim Yar Khan (RYK) situated on the bank of River Indus, was built in 1751 A.D. during the Sumra Supremacy in Sindh. Previously known as Noshehra was named Rahim Yar Khan in 1809 by Nawab Muhammad Sadiq Khan after his first son. In 1930, the city was designated as a District Headquarter and in 1942 became an industrial zone and Cotton Centre with the advent of several industrial units and factories all over the town. Two landmark factories of Abbasia Textile Mills and Sadiq Vegetable &amp; Oil Mills (now Unilever) were established in 1950, which added more in the urbanization of the city. This urbanization continued since then and now the city is one of the modern district headquarters in Punjab with decent civic facilities and infrastructure.', '2022-02-27 11:11:12', '2022-02-28 04:43:47'),
(3, 'Raim yar khan', 1, 1, 1, 1, '1', '1645978454.PNG', 'gud city', '2022-02-27 11:14:14', '2022-02-27 11:14:14'),
(4, 'Arifwala', 3, 3, 1, 3, '2', '1647513778.PNG', 'sadjsakdkj ksajdnksd kjasndk', '2022-03-17 05:42:58', '2022-03-17 05:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisions`
--

CREATE TABLE `tbl_divisions` (
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_cityID` bigint(20) UNSIGNED NOT NULL,
  `division_tour_guiderID` bigint(20) UNSIGNED NOT NULL,
  `division_tour_pointID` bigint(20) UNSIGNED NOT NULL,
  `division_hotelID` bigint(20) UNSIGNED NOT NULL,
  `division_local_roomID` bigint(20) UNSIGNED NOT NULL,
  `division_health_care_centerID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guiders`
--

CREATE TABLE `tbl_guiders` (
  `guider_id` bigint(20) UNSIGNED NOT NULL,
  `guider_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_dob` date NOT NULL,
  `guider_gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_countery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_phoneNo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_cnic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_guide_city_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_status` tinyint(1) NOT NULL DEFAULT 0,
  `guider_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_fbID_link` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_linkedin_ID_link` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_twitter_ID_link` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guider_skype_ID_link` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_guiders`
--

INSERT INTO `tbl_guiders` (`guider_id`, `guider_name`, `guider_email`, `guider_password`, `guider_dob`, `guider_gender`, `guider_city`, `guider_countery`, `guider_address`, `guider_phoneNo`, `guider_cnic`, `guider_guide_city_name`, `guider_status`, `guider_img`, `guider_fbID_link`, `guider_linkedin_ID_link`, `guider_twitter_ID_link`, `guider_skype_ID_link`, `created_at`, `updated_at`) VALUES
(1, 'Asad ali', 'contactwithasad@gmail.com', '8d8c5d647724e552077673548c89947b', '2022-02-16', 'M', 'Islamabad', 'Afghanistan', 'Pull sunny Rahim Yar khan', '03083962198', '303028128991', 'Islamabad', 1, '1646059164.jpg', 'https://web.facebook.com/profile.php?id=100024887490184', 'https://www.linkedin.com/in/asad-ali-01594b1a4/', 'https://twitter.com/i/flow/login', 'https://www.skype.com/en/', '2022-02-27 01:21:02', '2022-02-28 09:39:24'),
(2, 'Shahzad', 'contactwithasad@gmail.com', '8b4315450ef6d03088e45f50c3cac4c9', '2022-02-16', 'M', 'Islamabad', 'Afghanistan', 'Pull sunny Rahim Yar khan', '03083962198', '303028128991', 'Islamabad', 1, '1646035247.jpg', 'https://web.facebook.com/profile.php?id=100024887490184', 'https://www.linkedin.com/in/asad-ali-01594b1a4/', 'https://twitter.com/i/flow/login', 'https://www.skype.com/en/', '2022-02-27 01:41:01', '2022-02-28 03:00:47'),
(3, 'Hafiz Tayyab', 'ali@gmail.com', '0699fb5b5f1fcef978902c8d726145e4', '2022-02-11', 'M', 'Islamabad', 'Afghanistan', 'city park Rahim yar khan', '08837223', '883230023', 'Islamabad', 1, '1646035118.jpg', 'https://web.facebook.com/profile.php?id=100024887490184', 'https://web.facebook.com/profile.php?id=100024887490184', 'https://web.facebook.com/profile.php?id=100024887490184', 'https://web.facebook.com/profile.php?id=100024887490184', '2022-02-27 01:57:10', '2022-02-28 02:58:38'),
(4, 'Shahzad Saeed', 'ShahzadSaeed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2022-02-12', 'M', 'Bahawalnagar', 'Pakistan', 'Bahawalnagar', '03277363632', '79329923323', 'Bahawalnagar', 1, '1646034647.jpg', 'https://web.facebook.com/?_rdc=1&_rdr', 'https://www.linkedin.com/authwall?trk=gf&trkInfo=AQGI7fSi4tacoAAAAX8_TGqYiq4b6YQcft6PF0URX8qKWM2m-7l9lMyHsUQ4W2uka3q7u3dKezhGmPno_CGV_xagEDgU52eQpUAeOEkJdOvxnBbVc_2eRh5TIpwQ_x8xq-Gz70I=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fin%2Fasad-ali-01594b1a4%2F', 'https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D', 'https://www.skype.com/en/', '2022-02-28 02:50:47', '2022-02-28 02:51:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_health_care_center`
--

CREATE TABLE `tbl_health_care_center` (
  `care_center_Id` bigint(20) UNSIGNED NOT NULL,
  `health_care_center_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `health_care_center_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `health_care_center_cityID` bigint(20) UNSIGNED NOT NULL,
  `health_care_discription` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `health_care_center_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_health_care_center`
--

INSERT INTO `tbl_health_care_center` (`care_center_Id`, `health_care_center_name`, `health_care_center_address`, `health_care_center_cityID`, `health_care_discription`, `health_care_center_img`, `created_at`, `updated_at`) VALUES
(1, 'shakhzad madical colage', '2 Airport Rd, Rahim Yar Khan, Punjab 64200', 1, 'Journal of Sheikh Zayed Medical College (JSZMC) is serving as a center for Health Research Publication in the Institute and Region, under Research & Development Support Unit, Sheikh Zayed Medical College / Hospital, Rahim Yar Khan. JSZMC is a peer reviewed, scientific Journal published regularly and timely since 2010. It is recognized by Pakistan Medical & Dental Council, Islamabad. JSZMC is also a member of Pakistan Association of Medical Editors (PAME). We follow the guidelines according to “Uniform Requirements for manuscript submitted to biomedical Journals:', '1645993863.jfif', '2022-02-27 08:01:56', '2022-02-27 15:31:03'),
(2, 'Community Health Center - Rahim Yar Khan', 'Rahim Yar Khan, Punjab, Pakistan', 1, 'This Community Health Center is located on Village 121-1L UC Bagho Bahar in Rahim Yar Khan region 38542 beneficiaries of this health facility 5139 HHs 1  doctor 2 Lady Health Visitors 1 Dispenser 14 Community health workers 1 TBA 2 Support Staff members 3437 Out Patients 16 average daily out-patients This facility has on-site Lab This facility has Ultrasound machine Solar panels are used to provide electricity for this facility EPI 100% immunized children under 2 TT vaccination  100% WRAs immunized Capital Cost for this is $ 18,072 Yearly Operating  Cost for 2019 for this is $ 64,025', '1645993645.jfif', '2022-02-27 15:27:25', '2022-02-27 15:27:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hotel_bookinges`
--

CREATE TABLE `tbl_hotel_bookinges` (
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_type` enum('lowclass','middelclass','topclass') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_roomtype` enum('single','double','normal','laxrey') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_room_bookingDate` date NOT NULL,
  `hotel_room_checkoutDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_hotel_bookinges`
--

INSERT INTO `tbl_hotel_bookinges` (`hotel_id`, `hotel_name`, `hotel_type`, `hotel_roomtype`, `hotel_room_bookingDate`, `hotel_room_checkoutDate`, `created_at`, `updated_at`) VALUES
(1, 'sun city', 'middelclass', 'double', '2022-02-26', '2022-02-25', '2022-02-27 04:04:15', '2022-02-27 04:04:15'),
(2, 'sun city', 'lowclass', 'single', '2022-03-01', '2022-02-28', '2022-02-28 06:48:34', '2022-02-28 06:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `image_Id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_local_rooms`
--

CREATE TABLE `tbl_local_rooms` (
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `room_ownerName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_ownerNo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_rent` int(11) NOT NULL,
  `room_status` tinyint(1) NOT NULL DEFAULT 0,
  `room_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_local_rooms`
--

INSERT INTO `tbl_local_rooms` (`room_id`, `room_ownerName`, `room_ownerNo`, `room_address`, `room_rent`, `room_status`, `room_img`, `created_at`, `updated_at`) VALUES
(1, 'asad ali', '0399288745', 'rahim yar khan city chock', 3000, 0, '16459538431492.jpg', '2022-02-27 04:24:03', '2022-02-27 04:24:03'),
(2, 'Zeeshan Ahmad', '30992774', 'Bahawalpur', 2500, 0, '16460361551083.jpg', '2022-02-28 03:15:55', '2022-02-28 03:27:57'),
(4, 'huzaifa khan', '12773728', 'M.A Jinnah Rd, Central Jacob Lines Ghm، Karachi, Karachi City, Sindh', 2000, 1, '1646037600.jpg', '2022-02-28 03:40:00', '2022-02-28 03:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pakage_bookings`
--

CREATE TABLE `tbl_pakage_bookings` (
  `pakage_booking_id` bigint(20) UNSIGNED NOT NULL,
  `pakage_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pakage_bookings`
--

INSERT INTO `tbl_pakage_bookings` (`pakage_booking_id`, `pakage_name`, `pakage_days`, `pakage_price`, `pakage_id`, `created_at`, `updated_at`) VALUES
(1, 'Hunza', '30', '$30000', '1', '2022-02-26 12:25:56', '2022-02-26 12:25:56'),
(2, 'Punjab Province', '25', '$25000', '2', '2022-09-02 09:28:30', '2022-09-02 09:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour_pakages`
--

CREATE TABLE `tbl_tour_pakages` (
  `tour_pakage_id` bigint(20) UNSIGNED NOT NULL,
  `pakage_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage_dayes` int(11) NOT NULL,
  `pakage_price` int(11) NOT NULL,
  `pakage_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pakage_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tour_pakages`
--

INSERT INTO `tbl_tour_pakages` (`tour_pakage_id`, `pakage_name`, `pakage_dayes`, `pakage_price`, `pakage_description`, `pakage_img`, `created_at`, `updated_at`) VALUES
(1, 'Skardu And Cold Desert Tour', 30, 30000, 'Return flight Ticket Isb-Skardu Breakfast 3 Nights Hotel Accommodation Transport with fuel and Driver', '1646040043.jpg', '2022-02-26 08:21:55', '2022-02-28 04:20:43'),
(2, 'Punjab Province', 25, 25000, 'Lahore, the cultural capital of Pakistan, is considered to be the heart of the country. The city is a good...', '1646039932.jpg', '2022-02-27 00:43:39', '2022-02-28 04:18:52'),
(3, 'Sindh Province', 40, 20000, 'Sindh, the southern province of Pakistan, is steeped in history, millions of years ago the landmass of the entire province...', '1646039438.jpg', '2022-02-28 04:10:38', '2022-02-28 04:10:38'),
(4, 'Hunza & Ghizer Valley', 11, 1500, 'Our representative will receive you with a warm welcome in the arrival hall of the Islamabad International Airport and take you to your designated hotel for overnight stay in Islamabad.', '1646040169.jpg', '2022-02-28 04:22:49', '2022-02-28 04:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tour_points`
--

CREATE TABLE `tbl_tour_points` (
  `tour_point_id` bigint(20) UNSIGNED NOT NULL,
  `tour_point_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_point_cityID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_point_address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_point_history` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_point_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_tour_points`
--

INSERT INTO `tbl_tour_points` (`tour_point_id`, `tour_point_name`, `tour_point_cityID`, `tour_point_address`, `tour_point_history`, `tour_point_img`, `created_at`, `updated_at`) VALUES
(1, 'Bhong Masjid.', '1', 'CWF6+6J8, Bhong, Rahim Yar Khan, Punjab', 'Bhong Mosque (Urdu: بھونگ مسجد) is located in the village of Bhong, Rahim Yar Khan District, Punjab Province, Pakistan. It was designed and constructed over a period of nearly 50 years (1932–1982) and won the Aga Khan Award for Architecture in 1986.', '1645992769749.jpg', NULL, '2022-02-27 15:12:49'),
(2, 'Rohi Desert', '1', 'Rahimyar Khan, Pakistan', 'The Cholistan Desert (Urdu: صحرائے چولستان; Punjabi: چولستان روہی), also locally known as Rohi (روہی),[1] is a large desert in the southern part of Punjab, Pakistan that forms part of the Greater Thar Desert,[2] which extends to Sindh province and the Indian state of Rajasthan. It is one of two large deserts in Punjab, the other being Thal Desert.[3] The name is derived from the Turkic word chol, meaning \"sands,\"[1] and istan, a Persian suffix meaning \"land of.\"', '16459923391443.jpg', '2022-02-27 15:05:39', '2022-02-27 15:05:39'),
(3, 'Sindh Province', '2', 'Tharparkar (Sindhi: ٿرپارڪر, Urdu: تھرپارکر), also known as Thar, is a district in Sindh province in Pakistan headquartered at Mithi.', 'Sindh, the southern province of Pakistan, is steeped in history, millions of years ago the landmass of the entire province was under sea, and one comes across evidence of it again and again in the mountains of Khirthar Range. The fossils of millions of years old marine life, fish, sea urchins and little known forms of life are still found in the Khirthar. In the folds of the mountains, there are rich deposits of the natural gas, also here one of the biggest fossils of a mammoth too was discovered in the Khirthar a remnant of the ice Age when the whole world was covered with ice.\r\nNearly 160KM from Karachi, there is a biggest National Parks of the country upon 1192 Square Miles of the area’ where a combined population of nearly 11,000 Sindh ibex, gazelles and wild sheep survive. The Indus River in the Sindh is home to the only surviving blind dolphins in the world. More than one hundred lakes are in Sindh. Indus delta is a bird watcher’s paradise in winter the lakes have a population of nearly 200,000 migratory birds that fly all the way from Siberia and other countries to hibernate in the golden sunshine of Pakistan. The Karachi today is claimed to be the ‘love-bird capital of the world’. One of the most interesting facts of the history is that the coastline of present day port of Karachi.', '1646041900130.jpg', '2022-02-28 04:51:40', '2022-02-28 04:51:40'),
(4, 'Bangla manthar', '3', 'main road near mizan bank', 'There is some history in bangla manthar there is lot of good peoples in this area backend area with people talking in bad words.! \r\nplz visit and enjoy bad words!', '16461197101456.jfif', '2022-03-01 02:28:30', '2022-03-01 02:28:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_booking`
--

CREATE TABLE `tbl_transport_booking` (
  `transport_book_ID` bigint(20) UNSIGNED NOT NULL,
  `source_place_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_place_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `going_time` time NOT NULL,
  `going_date` date NOT NULL,
  `transport_type` enum('Car','Bus','Train','Airplan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_seats` int(11) NOT NULL DEFAULT 0,
  `seat_type` enum('economy','business') COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_total_bill` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visiters`
--

CREATE TABLE `tbl_visiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visiter_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_dob` date NOT NULL,
  `visiter_gender` enum('M','F','O') COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_phoneNo` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_cnic` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visiter_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_visiters`
--

INSERT INTO `tbl_visiters` (`id`, `visiter_name`, `visiter_email`, `visiter_password`, `visiter_dob`, `visiter_gender`, `visiter_address`, `visiter_country`, `visiter_city`, `visiter_phoneNo`, `visiter_cnic`, `visiter_img`, `visiter_status`, `created_at`, `updated_at`) VALUES
(1, 'asad ali', 'contactwithasad@gmail.com', '4de7c93e156530941ed8e2fc8ff671c1', '2022-02-24', 'M', 'jkjsjdka', 'Pakistan', 'islamabadh', '212332', '121222', '1645948755.jpg', 0, '2022-02-27 02:59:15', '2022-02-27 02:59:15'),
(2, 'usama', 'usam@gmail.com', 'bad670f05ad869901d90a37aef62572c', '2022-02-26', 'M', 'ghanta ghar chock', 'Pakistan', 'Faisalabad', '03888477727', '30302288434', '1645949158.jpg', 0, '2022-02-27 03:05:58', '2022-02-27 03:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor_reviews`
--

CREATE TABLE `tbl_visitor_reviews` (
  `review_id` bigint(20) UNSIGNED NOT NULL,
  `review_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_last` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_visitor_reviews`
--

INSERT INTO `tbl_visitor_reviews` (`review_id`, `review_name`, `review_last`, `review_email`, `review_img`, `message`, `created_at`, `updated_at`) VALUES
(3, 'Asad ali', 'ali', 'comsas@com', '1645937079.jpg', 'gud this', '2022-02-26 23:44:39', '2022-02-26 23:44:39'),
(4, 'asad ali', 'ali', 'asad@gmail.com', '1646026254.jpg', 'gud work', '2022-02-28 00:30:54', '2022-02-28 00:30:54'),
(5, 'saqi bahi', 'saqii', 'saqi@gmail.com', '1646116023.jpg', 'shdj asdjb  sdkjnkjalsd kjnsakd', '2022-03-01 01:27:03', '2022-03-01 01:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__hotels`
--

CREATE TABLE `tbl__hotels` (
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_cityName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_contact_number` bigint(30) NOT NULL,
  `hotel_type` enum('one','two','Three','four','five','six','seven') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl__hotels`
--

INSERT INTO `tbl__hotels` (`hotel_id`, `hotel_name`, `hotel_address`, `hotel_cityName`, `hotel_img`, `hotel_contact_number`, `hotel_type`, `hotel_status`, `created_at`, `updated_at`) VALUES
(1, 'sun city', 'lahore#tunhal', 'Lahore', '1645950385120.jpg', 977287823, 'Three', 1, '2022-02-27 03:26:25', '2022-02-27 03:26:25'),
(2, 'Hotel Days Inn', 'Johar Town,Lahore - View on map', 'Lahore', '1646035882215.jpg', 388859400934, 'seven', 1, '2022-02-28 03:11:22', '2022-02-28 03:11:22'),
(3, 'Hotel Days Inn', 'Johar Town,Lahore - View on map', 'Lahore', '1646038980.jpg', 388859400934, 'seven', 1, '2022-02-28 03:17:37', '2022-02-28 04:03:00'),
(4, 'asad', 'asdasfdfd', 'Daska', '1647437603.PNG', 7827834, 'Three', 0, '2022-03-16 08:33:23', '2022-03-16 08:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl__room_bookings`
--

CREATE TABLE `tbl__room_bookings` (
  `room_booking_id` bigint(20) UNSIGNED NOT NULL,
  `room_booking_type` enum('Hotel','Local') COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` enum('Single bed','Double bed','Laxrey') COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_checkIn_date` date NOT NULL,
  `room_checkout_date` date NOT NULL,
  `room_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl__room_bookings`
--

INSERT INTO `tbl__room_bookings` (`room_booking_id`, `room_booking_type`, `room_type`, `room_checkIn_date`, `room_checkout_date`, `room_booking`, `created_at`, `updated_at`) VALUES
(1, 'Local', 'Laxrey', '2022-02-15', '2022-02-16', 'rahim yar khan city chock', '2022-02-27 04:39:57', '2022-02-27 04:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category_provinces`
--
ALTER TABLE `tbl_category_provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `tbl_category_tour_pakeges`
--
ALTER TABLE `tbl_category_tour_pakeges`
  ADD PRIMARY KEY (`category_pakege_id`),
  ADD KEY `tbl_category_tour_pakeges_tour_pakageid_foreign` (`tour_pakageID`);

--
-- Indexes for table `tbl_chating`
--
ALTER TABLE `tbl_chating`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `tbl_citys`
--
ALTER TABLE `tbl_citys`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `tbl_citys_city_tourpointsid_foreign` (`city_tourPointsID`),
  ADD KEY `tbl_citys_city_tour_guiderid_foreign` (`city_tour_guiderID`),
  ADD KEY `tbl_citys_city_local_roomid_foreign` (`city_local_roomID`),
  ADD KEY `tbl_citys_city_hotelid_foreign` (`city_hotelID`);

--
-- Indexes for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  ADD PRIMARY KEY (`division_id`),
  ADD KEY `tbl_divisions_division_cityid_foreign` (`division_cityID`),
  ADD KEY `tbl_divisions_division_tour_guiderid_foreign` (`division_tour_guiderID`),
  ADD KEY `tbl_divisions_division_tour_pointid_foreign` (`division_tour_pointID`),
  ADD KEY `tbl_divisions_division_hotelid_foreign` (`division_hotelID`),
  ADD KEY `tbl_divisions_division_local_roomid_foreign` (`division_local_roomID`),
  ADD KEY `tbl_divisions_division_health_care_centerid_foreign` (`division_health_care_centerID`);

--
-- Indexes for table `tbl_guiders`
--
ALTER TABLE `tbl_guiders`
  ADD PRIMARY KEY (`guider_id`);

--
-- Indexes for table `tbl_health_care_center`
--
ALTER TABLE `tbl_health_care_center`
  ADD PRIMARY KEY (`care_center_Id`),
  ADD KEY `tbl_health_care_center_health_care_center_cityid_foreign` (`health_care_center_cityID`);

--
-- Indexes for table `tbl_hotel_bookinges`
--
ALTER TABLE `tbl_hotel_bookinges`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`image_Id`),
  ADD KEY `tbl_images_hotel_id_foreign` (`hotel_id`),
  ADD KEY `tbl_images_room_id_foreign` (`room_id`);

--
-- Indexes for table `tbl_local_rooms`
--
ALTER TABLE `tbl_local_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_pakage_bookings`
--
ALTER TABLE `tbl_pakage_bookings`
  ADD PRIMARY KEY (`pakage_booking_id`);

--
-- Indexes for table `tbl_tour_pakages`
--
ALTER TABLE `tbl_tour_pakages`
  ADD PRIMARY KEY (`tour_pakage_id`);

--
-- Indexes for table `tbl_tour_points`
--
ALTER TABLE `tbl_tour_points`
  ADD PRIMARY KEY (`tour_point_id`);

--
-- Indexes for table `tbl_transport_booking`
--
ALTER TABLE `tbl_transport_booking`
  ADD PRIMARY KEY (`transport_book_ID`);

--
-- Indexes for table `tbl_visiters`
--
ALTER TABLE `tbl_visiters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visitor_reviews`
--
ALTER TABLE `tbl_visitor_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl__hotels`
--
ALTER TABLE `tbl__hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `tbl__room_bookings`
--
ALTER TABLE `tbl__room_bookings`
  ADD PRIMARY KEY (`room_booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `subscribe_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category_provinces`
--
ALTER TABLE `tbl_category_provinces`
  MODIFY `province_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category_tour_pakeges`
--
ALTER TABLE `tbl_category_tour_pakeges`
  MODIFY `category_pakege_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_chating`
--
ALTER TABLE `tbl_chating`
  MODIFY `chat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_citys`
--
ALTER TABLE `tbl_citys`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  MODIFY `division_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guiders`
--
ALTER TABLE `tbl_guiders`
  MODIFY `guider_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_health_care_center`
--
ALTER TABLE `tbl_health_care_center`
  MODIFY `care_center_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_hotel_bookinges`
--
ALTER TABLE `tbl_hotel_bookinges`
  MODIFY `hotel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `image_Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_local_rooms`
--
ALTER TABLE `tbl_local_rooms`
  MODIFY `room_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pakage_bookings`
--
ALTER TABLE `tbl_pakage_bookings`
  MODIFY `pakage_booking_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tour_pakages`
--
ALTER TABLE `tbl_tour_pakages`
  MODIFY `tour_pakage_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tour_points`
--
ALTER TABLE `tbl_tour_points`
  MODIFY `tour_point_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transport_booking`
--
ALTER TABLE `tbl_transport_booking`
  MODIFY `transport_book_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_visiters`
--
ALTER TABLE `tbl_visiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_visitor_reviews`
--
ALTER TABLE `tbl_visitor_reviews`
  MODIFY `review_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl__hotels`
--
ALTER TABLE `tbl__hotels`
  MODIFY `hotel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl__room_bookings`
--
ALTER TABLE `tbl__room_bookings`
  MODIFY `room_booking_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_category_tour_pakeges`
--
ALTER TABLE `tbl_category_tour_pakeges`
  ADD CONSTRAINT `tbl_category_tour_pakeges_tour_pakageid_foreign` FOREIGN KEY (`tour_pakageID`) REFERENCES `tbl_tour_pakages` (`tour_pakage_id`);

--
-- Constraints for table `tbl_citys`
--
ALTER TABLE `tbl_citys`
  ADD CONSTRAINT `tbl_citys_city_hotelid_foreign` FOREIGN KEY (`city_hotelID`) REFERENCES `tbl__hotels` (`hotel_id`),
  ADD CONSTRAINT `tbl_citys_city_local_roomid_foreign` FOREIGN KEY (`city_local_roomID`) REFERENCES `tbl_local_rooms` (`room_id`),
  ADD CONSTRAINT `tbl_citys_city_tour_guiderid_foreign` FOREIGN KEY (`city_tour_guiderID`) REFERENCES `tbl_guiders` (`guider_id`),
  ADD CONSTRAINT `tbl_citys_city_tourpointsid_foreign` FOREIGN KEY (`city_tourPointsID`) REFERENCES `tbl_tour_points` (`tour_point_id`);

--
-- Constraints for table `tbl_divisions`
--
ALTER TABLE `tbl_divisions`
  ADD CONSTRAINT `tbl_divisions_division_cityid_foreign` FOREIGN KEY (`division_cityID`) REFERENCES `tbl_citys` (`city_id`),
  ADD CONSTRAINT `tbl_divisions_division_health_care_centerid_foreign` FOREIGN KEY (`division_health_care_centerID`) REFERENCES `tbl_health_care_center` (`care_center_Id`),
  ADD CONSTRAINT `tbl_divisions_division_hotelid_foreign` FOREIGN KEY (`division_hotelID`) REFERENCES `tbl__hotels` (`hotel_id`),
  ADD CONSTRAINT `tbl_divisions_division_local_roomid_foreign` FOREIGN KEY (`division_local_roomID`) REFERENCES `tbl_local_rooms` (`room_id`),
  ADD CONSTRAINT `tbl_divisions_division_tour_guiderid_foreign` FOREIGN KEY (`division_tour_guiderID`) REFERENCES `tbl_guiders` (`guider_id`),
  ADD CONSTRAINT `tbl_divisions_division_tour_pointid_foreign` FOREIGN KEY (`division_tour_pointID`) REFERENCES `tbl_tour_points` (`tour_point_id`);

--
-- Constraints for table `tbl_health_care_center`
--
ALTER TABLE `tbl_health_care_center`
  ADD CONSTRAINT `tbl_health_care_center_health_care_center_cityid_foreign` FOREIGN KEY (`health_care_center_cityID`) REFERENCES `tbl_citys` (`city_id`);

--
-- Constraints for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD CONSTRAINT `tbl_images_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `tbl__hotels` (`hotel_id`),
  ADD CONSTRAINT `tbl_images_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `tbl_local_rooms` (`room_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
