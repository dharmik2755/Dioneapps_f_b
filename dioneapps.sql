-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 05:47 AM
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
-- Database: `dioneapps`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `sub_title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ABOUT US', 'WE DON’T SETTLE FOR ANYTHING LESS THAN PERFECT', 'With a strong team of qualified and experienced professionals having in-depth knowledge of the latest technologies and tools as well as an excellent state-of-the-art infrastructure, Dioneapps has proved its excellence in developing and designing technology driven digital solutions that add more power to businesses at the most competitive rates.', '144026About us page-pana 1.svg', 1, NULL, '2022-08-25 05:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `about_counters`
--

CREATE TABLE `about_counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_counters`
--

INSERT INTO `about_counters` (`id`, `number`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '50', 'Employees', 'We are a well-established IT company with 50+ employees working in our various departments.The IT professionals at our company have the skills, expertise and dedication necessary to meet any technology challenge.They’re involved in all phases of development for products and services that help our clients improve their bottom lines by delivering solutions that make businesses run smoothly.We are always looking for more talented individuals to join our team! If you\'re looking for a challenging and rewarding career in IT, then our company is the place for you!', 1, NULL, '2022-12-08 04:36:52'),
(2, '100', 'Projects', 'We\'ve completed over 100 projects in our company and we\'re proud of every single one. We\'ve worked with big names and small businesses alike, and we\'re always ready to take on new challenges. If you need IT support, we\'re the team to call. We have a wealth of experience and expertise to offer our clients. We are dedicated to providing the best possible service and delivering high-quality results. We are confident that we can provide an excellent service for your web and mobile development needs', 1, NULL, '2022-12-08 04:37:12'),
(4, '5', 'Years Of Service', 'We have 5+ years of service in web and app development in our software development company. We have a team of developers who are experts in their field and have a wealth of experience. We are a leading provider of UI/UX design, Web and Mobile development services. We are committed to providing our clients with the best possible service, Contact us today to learn more about our services. In this past 5 years, our company has provided excellent service to our clients. We are proud to have served our clients for so long and will continue to do so for many years to come.', 1, NULL, '2022-12-08 04:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `about_experts`
--

CREATE TABLE `about_experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_experts`
--

INSERT INTO `about_experts` (`id`, `title`, `description`, `sub_title`, `status`, `created_at`, `updated_at`) VALUES
(3, 'What we are', '<p>DioneApps is one of the leading IT companies in Surat, enabling businesses to thrive in today’s competitive world. We develop digital solutions that are specific to your company’s requirements. So far, we’ve worked with a diverse range of companies, from fast-growing startups to multibillion-dollar corporations. As a result, we have the experience and expertise required to design flawless digital solutions that accelerate growth and generate revenues.</p><p>We adhere to the most intelligently integrated end-to-end design methodology. We take pride in our agility and flexibility in achieving the end goal in the most effective way possible while always keeping quality as our top priority.</p>', 'Performance-oriented & high-quality digital solutions.,Customized development services that cater to different business needs.,Professional qualified and experienced team of developers and designers.,Timely delivery of projects.', 1, NULL, '2022-12-24 12:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `app_develop_titles`
--

CREATE TABLE `app_develop_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ios` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ios_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `android` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `android_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_develop_titles`
--

INSERT INTO `app_develop_titles` (`id`, `special_id`, `title`, `des`, `ios`, `ios_des`, `android`, `android_des`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'WHAT WE DELIVER', 'Development of High-Quality Turnkey Mobile Applications.', 'iOS Application Development', 'Dioneapps is a top-tier mobile app development company in Surat helping businesses to sustain in the highly competitive app market.', 'Android Application Development', 'Dioneapps is a top-tier mobile app development company in Surat helping businesses to sustain in the highly competitive app market.', 1, NULL, '2022-10-03 23:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `career_page_perksses`
--

CREATE TABLE `career_page_perksses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_page_perksses`
--

INSERT INTO `career_page_perksses` (`id`, `title`, `description`, `image`, `sub_title`, `sub_description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'PERKS TO WORK WITH DIONEAPPS', 'Whatever your niche, if you have potential and ambition, there could be a place at Dione Apps for you. We understand the value of real digital talent.', '125001pride in our work-01.png|||699568growth and opportunity-02.png|||262332inclusive and diversity-03.png|||908755exceeding-04.png|||994405constant learning-05.png|||746889build network-06.png', 'We take pride in our work|||Growth and opportunity|||Inclusion and diversity|||Exceeding industry standards|||Constant learning|||Build network', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.|||We empower employees to produce better results and meet their goals by keeping them motivated and productive.|||We believe in nurturing an inclusive and diverse work environment that fosters deeper trust and commitment from employees.|||We are constantly growing ourselves and keeping up to date with the ever-evolving trends in innovations of technology.|||We encourage employees to pursue their curiosity and foster the lifelong learning instinct to keep up with the advancements.|||We aim to turn jobs into highly specialized roles by building a dynamic professional network with industry experts and leaders.', 1, NULL, '2022-08-03 00:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `career_page_titles`
--

CREATE TABLE `career_page_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_page_titles`
--

INSERT INTO `career_page_titles` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LET’S WORK TOGETHER', 'At Dione Apps, we’re always hungry for fresh talent and rich expertise. Our team is full of dynamic and talented digital professionals, but we never stop looking for new ways to grow our full service web development company in Surat. We believe that investing in talent is the key to our company growth and to the ever-evolving services we offer to our clients. We want to deliver the best service, and hence we need the best people.', 1, NULL, '2022-05-27 00:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `profession`, `information`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taner Çalış', 'CEO', 'turkey', 'Diaoneapps skills are top notch. The code delivered was high quality and well written. I don\'t recall running into any post-production bugs in his code, which I think is pretty rare in most projects. It\'s been couple of years and can\'t think alternative of this company.', '956693client-image.png', 1, NULL, '2022-08-25 06:00:12'),
(2, 'Michel Rasmussen', 'CTO', 'Rmedia', 'Rmedia Tech The Dioneapps team is absolutely unbelievable. They know their craft, are able to meet deadlines, understand what issues I was facing, they provided excellent solutions and fixed the problem with outstanding solutions. I wholeheartedly endorse this team for an online project.', '1491client-image.png', 1, NULL, '2022-05-25 01:31:34'),
(3, 'Drew Loggi', 'CEO', 'JWF Consulting Solutions LLC', 'It was an amazing experience with Dioneapps. Highly professional, experts and they provided me with the utmost excellent solution. Time punctuality, great communication, excellent quality. Highly suggested and I’ll definitely avail their service again.', '5978071491client-image.png', 1, NULL, '2022-08-03 00:11:05');

-- --------------------------------------------------------

--
-- Table structure for table `company_projects`
--

CREATE TABLE `company_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_projects`
--

INSERT INTO `company_projects` (`id`, `special_id`, `title`, `sub_title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'LIVE COM', 'FLUTTER APP', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '965410A-1live com.png,42837A-1live com2.png,579254A-1live com3.png', 1, NULL, NULL),
(3, '1', 'XPETO', 'IOS APP', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '445849A-2xpeto1.png,254337A-2xpeto2.png,314248A-2xpeto3.png', 1, NULL, NULL),
(4, '2', 'ecommerce Website', NULL, 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '563937web_ecommerce1.webp,12996web_ecommerce2.webp', 1, NULL, '2023-01-03 02:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `company_work_features`
--

CREATE TABLE `company_work_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_work_features`
--

INSERT INTO `company_work_features` (`id`, `special_id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, '2', 'CUSTOM WEBSITE DEVELOPMENT', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '855778web_img1.png', 1, NULL, '2022-10-03 23:52:25'),
(5, '2', 'BANCKEND & APIs', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '631814web_img2.png', 1, NULL, NULL),
(6, '4', 'WIREFRAME DESIGNS', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '840769uiux_featur1.png', 1, NULL, '2022-10-04 00:49:37'),
(7, '4', 'WIREFRAME DESIGNS', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '785426uiux_featur2.png', 1, NULL, '2022-10-04 00:49:51'),
(8, '4', 'UI DESIGNS & PROTOTYPES', 'With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out. With a custom-build methodology for every digital problem, it’s no wonder so many different industries seek us out.', '208711uiux_featur3.png', 1, NULL, '2022-10-04 00:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'REACH OUT TO US', 'Planning a project? Please send your requirements and we’ll get back to you at the earliest.', '275893contactus.png', NULL, '2022-09-01 05:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `contact_media_infos`
--

CREATE TABLE `contact_media_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_media_infos`
--

INSERT INTO `contact_media_infos` (`id`, `code`, `title_link`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fa-solid fa-phone-volume', 'tel:+91 7041601474', '+91 7041601474', 'Assistance hours: Monday – Friday, 9 am to 5 pm', NULL, '2023-01-02 16:42:42'),
(2, 'fa-solid fa-envelope', 'mailto:barvaliyadharmik9@gmail.com', 'info@dioneapps.com', 'Our support team will get back to in 24-h during standard business hours.', NULL, '2022-11-16 23:42:02'),
(3, 'fa-brands fa-skype', 'skype:support@host.com', 'support.dioneapps', 'We Are Online: Monday – Friday, 9 am to 5 pm', NULL, '2022-11-16 23:43:25');

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
-- Table structure for table `features_developments`
--

CREATE TABLE `features_developments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features_developments`
--

INSERT INTO `features_developments` (`id`, `special_id`, `image`, `title`, `sub_title`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '349092Features of AD.svg', 'features', 'Provide a user-centered design.,Daily reports on client projects.,Extensive technical knowledge in the field of design.,Various services in the field of web design.,They are fully dedicated to the client\'s design projects.,The feature is expected to deliver excellent performance quality.', 1, NULL, '2022-12-20 04:55:20'),
(2, '2', '233381web_features.png', 'FEATURES', 'Custom Website Development,Web Application Development,eCommerce Store Development,Custom CRM/ERP Software Apps,Full-Stack Development,Responsive Web Apps,Progressive Web Apps,Bespoke CMS Development', 1, NULL, '2022-10-03 00:00:10'),
(4, '4', '834775GRAPHICS.png', 'FEATURES', 'Wireframes Designing,Strategic Design Consulting,High/Low fidelity Prototype,Mobile App Design,Responsive Web Design,Information Architecture,UX Analysis,UI Design', 1, NULL, '2022-10-03 23:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `footer_fifths`
--

CREATE TABLE `footer_fifths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_fifths`
--

INSERT INTO `footer_fifths` (`id`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/DioneApps-106632712060664/?ref=pages_you_manage', '163786Facebook.svg', 1, NULL, '2022-08-24 03:49:23'),
(3, 'https://twitter.com/DioneappsITC', '547501Twitter.svg', 1, NULL, '2022-08-24 03:49:44'),
(4, 'https://www.linkedin.com/company/74704565/admin/', '639046Linkdin.svg', 1, NULL, '2022-08-24 03:49:55'),
(5, 'https://www.instagram.com/dioneapps_/?hl=en', '579780Instagram.svg', 1, NULL, '2022-08-24 03:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `footer_firsts`
--

CREATE TABLE `footer_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_firsts`
--

INSERT INTO `footer_firsts` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'DIONEAPPS', 'We are known for our proficient and client-centric Mobile application development services, Web and Backend Development services, UI/UX Designing services and Logo Designing services.', 1, NULL, '2022-09-27 06:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `footer_forths`
--

CREATE TABLE `footer_forths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_forths`
--

INSERT INTO `footer_forths` (`id`, `link`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.google.co.in/maps/place/Laxmi+Enclave+2/@21.2319134,72.8371618,19.75z/data=!4m5!3m4!1s0x3be04ec45532c7db:0x272710f4d928f651!8m2!3d21.2320802!4d72.83668?hl=en&authuser=0', '415, 416, 417, Laxmi Enclave-2, Opp Gajera School, Near Laxmi Circle, Katargam, Surat, Gujarat 395004, India.', 1, NULL, '2022-10-11 07:03:03'),
(3, 'tel:+91 7211140033', '+91 72111 40033', 0, NULL, '2022-08-30 01:55:47'),
(4, '#', 'Info@dioneapps.com', 0, NULL, '2022-08-30 01:55:47'),
(5, '#', 'support.dioneapps', 0, NULL, '2022-08-30 01:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'TURNING IDEAS INTO REALITY', 'Our company specializes in turning idea\'s into reality in our Web and Mobile app development and UI/UX design.', '710495179551home_img.png', 1, NULL, '2022-12-30 19:28:59'),
(3, 'TURNING IDEAS INTO REALITY', 'We have a team of experienced professionals who are passionate about creating innovative and user-friendly applications.', '153655Frame 35.png', 1, NULL, '2022-12-08 04:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `admin`, `password`, `created_at`, `updated_at`) VALUES
(1, 'dioneapps', '$2y$10$sL9OvPXjtOZELvGKo/bEw.AUGnG7QLV836SeagiSOqQ7pKgjZUgsC', '2023-02-10 00:05:36', '2023-02-10 00:05:36');

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
(6, '2022_05_18_084751_create_logins_table', 1),
(8, '2022_05_19_064647_create_webes_table', 3),
(9, '2022_05_19_064822_create_webs_table', 4),
(11, '2022_05_19_111448_create_stages_of_works_table', 6),
(12, '2022_05_19_124911_stages_of_work', 7),
(13, '2022_05_20_061458_create_counters_table', 8),
(14, '2022_05_20_061822_create_counters_table', 9),
(15, '2022_05_20_063718_create_counter_table', 10),
(18, '2022_05_20_122711_create_contacts_table', 12),
(22, '2022_05_17_125201_create_home_sliders_table', 13),
(26, '2022_05_19_100230_create_abouts_table', 15),
(27, '2022_05_20_094956_create_clients_table', 16),
(29, '2022_05_23_102256_create_about_experts_table', 17),
(32, '2022_05_24_105040_create_about_experts_table', 19),
(33, '2022_05_24_121822_create_project_contact__controllers_table', 20),
(34, '2022_05_25_084928_create_user_contacts_table', 21),
(35, '2022_05_26_043702_create_service_pages_table', 22),
(36, '2022_05_26_052221_create_our_services_table', 23),
(37, '2022_05_26_063914_create_services_offers_table', 24),
(38, '2022_05_27_053840_create_career_page_titles_table', 25),
(39, '2022_05_27_063518_create_career_page_perksses_table', 26),
(42, '2022_05_28_082001_create_contact_media_infos_table', 27),
(43, '2022_05_30_051358_create_portfolio_awards_table', 28),
(45, '2022_05_31_112541_create_footer_firsts_table', 30),
(48, '2022_05_31_125358_create_footer_forths_table', 32),
(49, '2022_06_01_054817_create_footer_fifths_table', 33),
(50, '2022_09_23_043301_create_specializeds_table', 34),
(54, '2022_09_23_085838_create_specializ_ids_table', 35),
(57, '2022_09_28_043515_create_about_counters_table', 37),
(58, '2022_05_19_040518_create_mobiles_table', 38),
(65, '2022_09_30_070941_create_features_developments_table', 42),
(66, '2022_09_29_105348_create_app_develop_titles_table', 43),
(67, '2022_09_30_042845_create_web_develop_titles_table', 44),
(69, '2022_09_30_045210_create_uiux_develop_titles_table', 45),
(70, '2022_10_03_120939_create_company_work_features_table', 46),
(71, '2022_05_30_085201_create_portfolio_latest_works_table', 47),
(72, '2022_10_05_105438_create_compant_projects_table', 48),
(75, '2022_10_05_111555_create_company_projects_table', 49),
(76, '2022_05_24_065528_create_renowneds_table', 50),
(79, '2022_05_31_115003_create_footer_secounds_table', 51),
(80, '2022_09_27_043246_create_we_experts_table', 52),
(81, '2022_12_10_073703_create_project_collages_table', 53),
(84, '2022_12_13_042238_create_portfolios_table', 54),
(89, '2022_12_16_071330_create_team_managements_table', 55);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `special_id`, `title`, `description`, `image1`, `image2`, `status`, `created_at`, `updated_at`) VALUES
(4, '1', 'APPLICATION DEVELOPMENT', 'Dioneapps is a top-tier mobile app development company in Surat helping businesses to sustain in the highly competitive app market.', '850198apps.png', '512278app-development.png', 1, NULL, '2022-10-10 05:07:17'),
(5, '2', 'WEB DEVELOPMENT', 'From static business websites to dynamic and responsive e-commerce online portals, we offer valuable strategic and strategic web development services in India.', '480822web-development.png', '311113web-site.png', 1, NULL, '2022-09-29 03:14:19'),
(6, '4', 'UI/UX DESIGNING', 'UI/UX designing at Dioneapps is a perfect jam of creativity, skills and professionalism.', '229968uiux.png', '62287ui-ux-development.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '52841549147web.png', 'Web Development', 'From static business websites to dynamic and responsive e-commerce online portals, we offer valuable strategic and strategic web development services in India.', 1, NULL, '2022-08-03 00:28:42'),
(3, '153055196953app.png', 'Mobile application development', 'Dione Apps is a top-tier mobile app development company in Surat helping businesses to sustain in the highly competitive app market.', 1, NULL, '2022-08-03 00:17:48'),
(4, '429095283928ui.png', 'UI/UX Designing', 'UI/UX designing at Dione Apps is a perfect jam of creativity, skills and professionalism.', 1, NULL, '2022-08-03 00:18:38'),
(5, '74056532937logo.png', 'Logo Designing', 'With a team of professionals, we make creative logos and build brand identity for your firm that stay into the close connection with your ideas.', 1, NULL, '2022-08-31 01:08:41'),
(6, '87075265573content.png', 'Content Writing', 'Our team of professional content writers can help you with the best quality, relevant.', 1, NULL, '2022-08-03 00:24:46'),
(8, '530490205888marketing.png', 'Marketing', 'We’re built for growing businesses. Put our marketing and sales tools behind your idea, dream, brand, or business and we’ll help you share it with the world.', 1, NULL, NULL);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `playstore_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appstore_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_link` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graphic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `description`, `service_type`, `playstore_link`, `appstore_link`, `web_link`, `graphic`, `image`, `status`, `created_at`, `updated_at`) VALUES
(6, 'LOCKARS', 'Lockars will change the way parcels are delivered with an eco-friendly solution in urban and densely populated areas of Europe with a highly convenient, accessible and environmentally friendly solution.Our open network of shared parcel lockers meets the increased customer convenience and operational efficiency of home deliveries and improves service for consumers, retailer carriers and communities.', 'applications', 'https://play.google.com/store/apps/details?id=com.lockars.lockarsapp', 'https://apps.apple.com/in/app/lockars/id1590256813', NULL, '', '795157app01.png', 1, NULL, '2022-12-20 04:29:42'),
(7, 'ABEL BUILDING SOLUTIONS', 'We are the largest manufacturer of clay building blocks and Metpro steel and aluminium windows and doors and Astralite and Spectra uPVC windows and doors in the English-speaking Caribbean.', 'website', NULL, NULL, 'https://buildwithabs.com/', '', '908120web01.png', 1, NULL, '2022-12-15 04:55:09'),
(8, 'FIFA FOOTBALL', 'Follow your team for upcoming fixtures and the latest news. Get in the game with official world cup fantasy and the official word cup bracket challenge, In this App you can connect with your Favorite Player. You Can chat in live match with your friend. It’s a Prediction Game.', 'graphics', NULL, NULL, NULL, 'uiux,ai', '727486uiux01.png', 1, NULL, '2022-12-20 04:28:03'),
(9, 'ALUMINARY', 'Aluminary brings together the global alumni communitiesof the top business schools and Ivy League universities for unparalleled networking and the world of opportunities. The platform offers a meaningful digital experience to the top alumni communities through.', 'applications', 'https://play.google.com/store/apps/details?id=com.aluminary', 'https://apps.apple.com/app/aluminary/id1547963469', NULL, '', '776008app03.png', 1, NULL, NULL),
(10, 'AMARNTH BUSINESS SOLUTIONS LIMITED', 'Amaranth Business Solutions Limited is a services company delivering Print and Imaging solutions, Digital Transformation solutions and tools and Integrated Workplace Design. Our Company has an extensive multi-disciplined team of qualified and experienced personnel who work hand in hand with each customer to ensure a positive return on investment.', 'website', NULL, NULL, 'https://amaranthbusinesssolutions.com', '', '888742web02.png', 1, NULL, NULL),
(11, 'MILKYWAY INDIAA', 'We deliver Milk, Vegetables , Grocery , Medicines , Food items that you may consume at your home as daily essentials.Why Milkyway Indiaa?? 1. All types of local milk on single platform. 2. Easy Ordering system. 3. Automated & hassle free payment system. 4. Cash-back on Online shopping platforms.', 'graphics', NULL, NULL, NULL, 'uiux,ps', '38019uiux02.png', 1, NULL, '2022-12-14 05:25:44'),
(12, 'MINGLETAINMENT', 'MArtist is a Mingletainment Ecosystem app for artists to manage their content and interact with their users base on App. It also provides realtime statistics for the related contents.', 'applications', 'https://play.google.com/store/apps/details?id=com.saberwinginfotech.martist', NULL, NULL, '', '135991app02.png', 1, NULL, NULL),
(13, 'ESEE CHAT', 'Simple, powerful and brilliant! Eseechat is not just an app for chat and messaging, but more than that. From connecting to socializing to shopping,eseechat does it all for you.Secure chat Create and share memories.', 'applications', NULL, NULL, NULL, '', '854993app04.png', 1, NULL, NULL),
(14, 'FIT APPEAL', 'Fit Appeal Ltd is a female-owned fitness apparel and lifestyle brand dedicated to helping women feel comfortable and invincible in their skin. Founded in 2014, Fit Appeal curates active and athleisurewear for the modern woman.', 'website', NULL, NULL, 'https://www.myfitappeal.com/', '', '888856web03.png', 1, NULL, NULL),
(15, 'IVENUS', 'Venus Data Products Pvt Ltd was established in 1999 as a system integrator & Apple solution provider. We opened the first Apple retail store in 2012 at Surat with the brand name ‘iVenus’. Currently, iVenus has become the largest Apple Premium Retail chain in Western India with the presence of 32 Stores & 21 service centers in 15 cities of Gujarat & Maharashtra.', 'website', NULL, NULL, 'https://ivenus.in/', '', '845202web04.png', 1, NULL, NULL),
(16, '4 PICS 1 WORD', 'Solve thousands of unique word puzzles with pictures in Puzzle Games Classic 4 Pics 1 Word! Every day we bring you new word games that challenge your general knowledge and help you train your brain. Play with friends by sharing the word puzzles with them and help each other with the puzzle!', 'graphics', NULL, NULL, NULL, 'uiux,ai,ps', '69779uiux03.png', 1, NULL, NULL),
(17, 'LT FOOD', 'Fast and easy way to Manage Employee stuff manager details like Attendance, Leaves, Over time, Stock Calculation app & many more. No need to use Attendance register or Play slip register for Worker Attendance as this Attendance app can do all the hard work for you. Very easy to Add or Remove Stock & See Selling of day, week, year.', 'graphics', NULL, NULL, NULL, 'uiux', '913729uiux04.png', 1, NULL, NULL),
(18, 'VIOU', 'his app is revolutionising the fashion industry, it lets you interact with Fashion brands and see their shows live from the comfort of your home, be the first one to get your hands on the new products through this app.', 'applications', 'https://play.google.com/store/apps/details?id=com.sentaxlab.viou', 'https://apps.apple.com/us/app/viou/id1608164972', NULL, '', '699179app05.png', 1, NULL, NULL),
(19, 'LIVE COM', 'We Are LiveCom, the central nervous system of Live Broadcast. Born in 2021, LiveCom is a forward-looking company focused on bridging products and solutions that are needed for the 21st Century LIVE Broadcast Selling. As an eCommerce platform company, we connect shoppers to dynamic networks of sellers - bridging business and consumers in a holistic platform.', 'applications', 'https://play.google.com/store/apps/details?id=com.app.livecomApp&hl=en_IN&gl=US', 'https://apps.apple.com/my/app/livecom/id1587095664', NULL, '', '36124app06.png', 1, NULL, NULL),
(20, 'SHOPOHOLIC', 'Lookbook is the last Shopify theme you will ever need. Infinitely customizable, with powerful features, carefully crafted for Shopify merchants. Purchase Lookbook and unleash an experience that is as good on a phone as it is on the web. Offer memberships and sell digital products right out of the box with our app store integrations.', 'website', NULL, NULL, 'https://demo.templatic.com/shopoholic/', '', '541598web05.png', 1, NULL, NULL),
(21, 'FITNESS PLUS', 'You’re on a journey to health and wellness. And we’re right there with you. How you feel affects every single day of your life, which is why you work so hard to get well and stay well. No matter your journey, we’re here to support, guide, and inspire you.', 'website', NULL, NULL, 'https://demo.templatic.com/fitnessplus/', '', '465593web06.png', 1, NULL, NULL),
(22, 'JUMP 2 LEARN', 'Now a days, Online learning is must required. so we make a App that students can learn easily, prepare their exam or test , they can direct connect with their teachers and also they can buy books.', 'graphics', NULL, NULL, NULL, 'uiux', '666006uiux05.png', 1, NULL, NULL),
(23, 'WATCH FACES', 'An Interesting app for i watch users. We give you so many Creative Watch faces.', 'graphics', NULL, NULL, NULL, 'uiux,ai,ps', '885426uiux06.png', 1, NULL, NULL),
(24, 'XPETO', 'xpeto is a Business to Business (B2B) Channel Partners Management Services Provider who provides services to manage the Channel Partner Community and the business transactions between them. Our platform coupled with Blockchain Technology aims to provide reliable, secure and immutable data.', 'applications', 'https://play.google.com/store/apps/details?id=com.xpet.app', NULL, NULL, '', '340068app07.png', 1, NULL, NULL),
(25, 'BHAGAVAD GITA', 'This amazing app with a beautiful and easy-to-use interface that has complete translations of the Bhagavat Geeta in Hindi and English. Your search for the perfect Bhagvat Geeta app ends here with Bhagavad Gita: Hindi & English. This Bhagavad Geeta app provides you with an austere experience to help make your reading extremely convenient..', 'applications', 'https://play.google.com/store/apps/details?id=com.gitainitiative.bhagavadgita', NULL, NULL, '', '566354app08.png', 1, NULL, NULL),
(26, 'E-COMMERCE', 'goal of this website is to bring inspiration and simplicity to the joys of discovering shops. Because not all shops is created equal for the price, and we know the difference. From our highly curated shops store or join a monthly shops subscription. As we offer the best shops clubs and shops gifts, we are the best place to buy shops online.', 'website', NULL, NULL, 'https://demo.templatic.com/ecommerce/', '', '617908web07.png', 1, NULL, NULL),
(27, 'BLK LUXURY CHAUFFEURS', 'BLK is one of the finest chauffeur services in the United States. Our main priority is to provide clients with luxury, professionalism, and safety. Our company consists of over 100 professional chauffeurs driving some of the most eminent people from all over the world. Our top-notch limousine class service caters to the requirements of corporate as well as many renowned clients in and around the US.', 'applications', 'https://play.google.com/store/apps/details?id=com.blk_driver.driver_car_project', 'https://apps.apple.com/gb/app/blk-luxury-chauffeurs-driver/id1627477446', NULL, '', '850840app09.png', 1, NULL, NULL),
(28, 'PICKLEJAR LIVE', 'PICKLEJAR - The World’s Biggest Tip Jar! Are you a musician, artist, or content creator looking for a platform to post your music, promote content, engage with fans and get tips? Or are you a fan looking to support and find musicians, artists, live concerts, and bands in town?', 'applications', 'https://play.google.com/store/apps/details?id=com.Reatro.picklejar', 'https://apps.apple.com/us/app/picklejar-live/id1517697776', NULL, '', '616075app10.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_latest_works`
--

CREATE TABLE `portfolio_latest_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `black_image` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_latest_works`
--

INSERT INTO `portfolio_latest_works` (`id`, `special_id`, `title`, `color_image`, `black_image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'MINGLET AINMENT', '4981531-img.png', '5102031-img.png', 1, NULL, '2022-12-14 05:18:06'),
(2, '1', 'XPETO', '5419392-img.png', '1936892-img.png', 1, NULL, NULL),
(3, '1', 'BHAGAVAD GITA', '96629133.png', '989978333.png', 1, NULL, NULL),
(4, '2', 'KATIEDEAN JEWELRY', '626588115.png', '40831115.png', 1, NULL, NULL),
(5, '2', 'PIXO CITY', '999563116.png', '1665131116.png', 1, NULL, NULL),
(6, '2', 'HAPPY THAI', '733032117.png', '9369291117.png', 1, NULL, NULL),
(7, '1', 'FRIENDZPOINT', '173281112.png', '7193301112.png', 1, NULL, NULL),
(8, '1', 'FRIENDZPOINT', '232414113.png', '5497821113.png', 1, NULL, NULL),
(9, '1', 'THE MOOD', '996952114.png', '7555531114.png', 1, NULL, NULL),
(10, '1', 'ESEE CHRTA', '11643488.png', '316116888.png', 1, NULL, NULL),
(11, '1', 'LOCKARS', '33805599.png', '39665999.png', 1, NULL, NULL),
(12, '1', 'SAPORI DEI TEMPI', '223161100.png', '4691081000.png', 1, NULL, NULL),
(13, '1', 'MILKYWAY INDIA', '23232844.png', '306079444.png', 1, NULL, NULL),
(14, '1', 'LIVECOM', '65775555.png', '4575555.png', 1, NULL, NULL),
(15, '1', 'ALUMINARY', '94644566.png', '812536666.png', 1, NULL, NULL),
(16, '2', 'URBAN MARINO', '452824118.png', '1595521118.png', 1, NULL, NULL),
(17, '1', 'PICLEJAR LIVE', '32046877.png', '79473777.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_collages`
--

CREATE TABLE `project_collages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_collages`
--

INSERT INTO `project_collages` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, '89761scroll_img-min.webp', 1, NULL, '2022-12-20 05:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `project_contact__controllers`
--

CREATE TABLE `project_contact__controllers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_contact__controllers`
--

INSERT INTO `project_contact__controllers` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Do you have any project ?', 'Let’s Talk About Business Solutions With Us.', 1, NULL, '2022-08-24 01:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `renowneds`
--

CREATE TABLE `renowneds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `renowneds`
--

INSERT INTO `renowneds` (`id`, `title`, `description`, `sub_title`, `sub_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A GLOBALLY RENOWNED MOBILE APP DEVELOPMENT COMPANY IN INDIA', 'Being the best mobile app development company in India, we make conscious efforts to put our client’s ideas as our utmost priority and deliver them the precise outcome by combining Strategy, Technology & Creativity.', 'We follow proven processes | We deliver on time', 'We follow a unique, proven approach to ensure that all of our projects are of the highest quality. | We work smart, fast and always deliver our projects on time without having to increase your budget.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_offers`
--

CREATE TABLE `services_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_offers`
--

INSERT INTO `services_offers` (`id`, `title`, `description`, `sub_title`, `sub_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HERE’S WHAT DIONEAPPS CAN OFFER TO YOUR ONLINE BUSINESS VENTURE', 'Finding a web development company you can count on and build a relationship with for the long term service is a difficult task.', 'Requirement Analysis.|||Thorough study of client’s business.|||Onboard dedicated team.|||Transparent Communication.|||Quality & Security audit.|||User Acceptance Testing.|||Delivering last mile support.', 'Our variegated experience has offered larger benefits to a variety of clients from different geographies and business verticals. We offer dynamic solutions using unique developmental methodologies and the latest technologies. Our designed and developed mobile applications and web solutions have marked a significant presence in different industries and marketplaces. Focusing on outcomes, we use our technical skill and industry insight to help you meet your digital goals.', '794439service-01-01.png', 1, NULL, '2022-10-07 02:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `service_pages`
--

CREATE TABLE `service_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_pages`
--

INSERT INTO `service_pages` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Unfolding the ideas and expertise to transform the impossible lnto the possible', 'Our experienced professionals and skilled web developers create high quality digital solutions parallel to all your individual or business level needs. Our creative developers are experts when it comes to building or improving the presence of your business and its brand value. We deploy each project with create engaging methods and careful analysis to help improve your online presence. As a leading web development company in India, we strive to make your presence remarkable on the web by providing responsive web design services. We have our own digital development ethics and it keeps us ahead, in the bracket of the top web development companies in India.', 1, NULL, '2022-08-03 00:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `specializeds`
--

CREATE TABLE `specializeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializeds`
--

INSERT INTO `specializeds` (`id`, `special_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, '1', '614465Android.svg', 1, NULL, '2022-10-04 04:24:53'),
(11, '1', '495357Flutter.svg', 1, NULL, NULL),
(12, '1', '375907iOS.svg', 1, NULL, NULL),
(13, '1', '344529Java.svg', 1, NULL, NULL),
(14, '1', '323201Kotlin.svg', 1, NULL, NULL),
(15, '1', '701201React Native.svg', 1, NULL, NULL),
(16, '1', '316775Swift.svg', 1, NULL, NULL),
(17, '2', '308906Angular.svg', 1, NULL, NULL),
(18, '2', '183830AWS.svg', 1, NULL, NULL),
(19, '1', '88338Firebase.svg', 1, NULL, NULL),
(20, '2', '255971Google CLoud.svg', 1, NULL, NULL),
(21, '2', '16942HTML5.svg', 1, NULL, NULL),
(22, '2', '177176Mongo DB.svg', 1, NULL, NULL),
(23, '2', '220077Mysql.svg', 1, NULL, NULL),
(24, '2', '843285Php.svg', 1, NULL, NULL),
(25, '2', '265417Oracle.svg', 1, NULL, NULL),
(26, '2', '773075Python.svg', 1, NULL, NULL),
(27, '2', '294208Shopify.svg', 1, NULL, NULL),
(28, '2', '941766Wordpress.svg', 1, NULL, NULL),
(30, '4', '765486Adobe AI.svg', 1, NULL, NULL),
(31, '4', '576718Adobe PS.svg', 1, NULL, NULL),
(32, '4', '62491Adobe XD.svg', 1, NULL, NULL),
(33, '4', '953222Figma.svg', 1, NULL, NULL),
(34, '4', '191191Sketch.svg', 1, NULL, NULL),
(35, '2', '879457Laravel.svg', 1, NULL, '2022-10-04 05:05:18'),
(38, '2', '116261CSS.svg', 1, NULL, NULL),
(39, '2', '918224BOOTSTRAP.svg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specializ_ids`
--

CREATE TABLE `specializ_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `development_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializ_ids`
--

INSERT INTO `specializ_ids` (`id`, `development_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'application development', 1, NULL, '2022-09-26 01:50:37'),
(2, 'web development', 1, NULL, '2022-09-26 01:51:12'),
(4, 'ui/ux development', 1, NULL, '2022-10-02 22:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `stages_of_works`
--

CREATE TABLE `stages_of_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stages1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description1` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stages2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stages3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description3` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stages4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description4` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stages_of_works`
--

INSERT INTO `stages_of_works` (`id`, `title`, `sub_title`, `stages1`, `description1`, `stages2`, `description2`, `stages3`, `description3`, `stages4`, `description4`, `created_at`, `updated_at`) VALUES
(2, 'STAGES OF WORK', 'The process of creating a unique site on a turnkey basis by the specialists of the SMAV IT company includes four main stages.', 'Consulting', 'Filling out a brief, drawing up a detailed TOR, finding out the key requirements of client and conducting an in-depth analysis of the market.', 'Make a deal', 'Discussion of financial terms of cooperation, signing an agreement (if desired), partial or full payment for services.', 'Site development', 'Prototyping, creating a unique design, programming, content filling (if desired), testing.', 'Final result', 'Transfer of the finished site to the client, and making the final payment (relevant if the amount of the prepayment was less than 100%).', NULL, '2022-05-25 01:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `team_managements`
--

CREATE TABLE `team_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `index` int(11) DEFAULT NULL,
  `team_member` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_managements`
--

INSERT INTO `team_managements` (`id`, `index`, `team_member`, `firstname`, `lastname`, `email`, `number`, `position`, `education`, `birthdate`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'Paras', 'Navadiya', 'er.paras89@gmail.com', '601153553532', 'Founder (CEO)', 'B.E (IT)', '1989-10-28', '418161111parasbhai-min.jpeg', 1, NULL, '2022-12-20 20:11:42'),
(2, 2, 'admin', 'Jaydip', 'Godhani', 'godhani.jaydip145@gmail.com', '88663989239', 'Founder (CEO)', 'B.E (Computer Engineering)', '1993-06-09', '742528222jaydeeep-min.jpeg', 1, NULL, '2022-12-20 06:34:08'),
(3, 3, 'admin', 'Amit', 'Mendapara', 'amit@dioneapps.com', '7777777777', 'CTO', 'B.E (Computer Engineering)', '1982-06-19', '902431333amitbhai-min.jpeg', 1, NULL, '2022-12-20 06:33:56'),
(4, 4, 'team', 'Jekil', 'Dabhoya', 'jekildabhoya@gmail.com', '8141413471', 'Project Manager (iOS & Flutter)', 'B.C.A', '1994-11-28', '53511Jekil-min.jpg', 1, NULL, '2022-12-23 16:05:42'),
(5, 5, 'team', 'Tushar', 'Moradiya', 'moradiyatushar23@gmail.com', '919624311941', 'Team Lead (iOS & Flutter)', 'B.E (IT)', '1996-07-23', '7792382tushar-min.jpg', 1, NULL, '2022-12-20 06:33:34'),
(10, 6, 'team', 'Rutvik', 'Moradiya', 'rutvikmoradiya8533@gmail.com', '7434078179', 'Sr. Flutter developer', 'B.C.A', '2001-05-07', '79801312rutvik.jpg', 1, NULL, '2023-01-02 13:35:58'),
(11, 7, 'team', 'Sandip', 'Fachra', 'sandip.fachara35@gmail.com', '9574585035', 'Sr. Flutter Developer', 'B.C.A', '2000-05-28', '8088666sandip.jpg', 1, NULL, '2023-01-02 13:37:12'),
(12, 8, 'team', 'Nikita', 'Patil', 'nikitapatil2112@gmail.com', '9075741065', 'Hr. Manager', 'MBA', '1997-03-01', '5852543nikta.jpg', 1, NULL, '2023-01-02 13:37:29'),
(13, 9, 'team', 'Dharmik', 'Barvaliya', 'barvaliyadharmik9@gmail.com', '9510303768', 'Web Developer', 'B.C.A', '2002-03-07', '96272826dharmik.jpg', 1, NULL, '2023-01-02 13:38:05'),
(14, 10, 'team', 'Ayush', 'Sojitra', 'sojitraayush2101@gmail.com', '9904946242', 'Web Developer', 'B.C.A', '2004-05-17', '21066525aayush.jpg', 1, NULL, '2023-01-02 13:38:17'),
(15, 11, 'team', 'Hiren', 'Sanura', 'hirensanura9@gmail.com', '7567469002', 'Flutter Developer', 'B.C.A.', '1999-05-21', '3695224hiren.jpg', 1, NULL, '2023-01-02 13:38:33'),
(16, 12, 'team', 'Happyns', 'Mavani', 'happynsmavani8182@gmail.com', '7359716779', 'Flutter Developer & Tutor', 'B.C.A.', '2004-05-25', '3241188happyns.jpg', 1, NULL, '2023-01-02 13:38:52'),
(17, 13, 'team', 'Aakash', 'Bathani', 'aakashbathani29@gmail.com', '9998538644', 'Flutter Developer', 'B.Tech. (Computer Science and Engineering)', '1998-10-07', '2155149aakash.jpg', 1, NULL, '2023-01-02 13:39:07'),
(18, 14, 'team', 'Krishna', 'Navadiya', 'krishna_navadiya0806@gmail.com', '8155876122', 'Android Developer', 'IT Engineering', '1998-05-15', '87400418krishna.jpg', 1, NULL, '2023-01-02 13:39:22'),
(19, 15, 'team', 'Milan', 'Barvaliya', 'milanpatel10800@gmail.com', '8200882984', 'Graphic and UI/UX Designer', 'Bachelor of Fine Arts', '2001-08-20', '3033174milan.jpg', 1, NULL, '2023-01-02 13:39:49'),
(20, 16, 'team', 'Denisha', 'Koladiya', 'denishakoladiya@gmail.com', '8758831556', 'UI/UX Designer', 'B.C.A.', '1999-12-25', '1346264417877deny.jpg', 1, NULL, '2023-01-02 07:08:16'),
(21, 17, 'team', 'Bhoomi', 'Mangukiya', 'bhumimangukiya28@gmail.com', '8141819185', 'Flutter Developer', 'B.C.A.', '2002-02-08', '92129914bhoomi.jpg', 1, NULL, '2023-01-02 13:40:17'),
(22, 18, 'team', 'Vinus', 'Mavani', 'vinusmavani1191@gmail.com', '9173217323', 'UI/UX Designer', 'B.C.A.', '2001-09-11', '48210720vinus.jpg', 1, NULL, '2023-01-02 13:40:48'),
(23, 19, 'team', 'Sonal', 'Bhanderi', 'sonalbhanderi0000@gmail.com', '6353943857', 'Flutter Developer', 'B.Com.', '2000-02-07', '1529113sonal.jpg', 1, NULL, '2023-01-02 13:41:01'),
(24, 20, 'team', 'Krishna', 'Moradiya', 'krishnamoradiya1999@gmail.com', '7096670571', 'Web Developer', 'B.C.A', '1999-10-03', '13704216krishna.jpg', 1, NULL, '2023-01-02 13:41:13'),
(25, 21, 'team', 'Nirav', 'Kachhadiya', 'niravjkachhadiya@gmail.com', '7096727574', 'UI/UX Designer', 'B.C.A.', '2000-05-26', '45510511nirav.jpg', 1, NULL, '2023-01-02 13:41:31'),
(26, 22, 'team', 'Armit', 'Domadiya', 'armitdomadiya97233@gmail.com', '9904068676', 'Flutter Developer', 'B.Tech. (Computer Science and Engineering)', '2000-10-12', '20160110armit.jpg', 1, NULL, '2023-01-02 13:41:59'),
(27, 23, 'team', 'Smit', 'Kotadiya', 'kotadiyasmit46@gmail.com', '8469708235', 'Flutter Developer', 'B.C.A.', '2004-08-30', '50612422smit.jpg', 1, NULL, '2023-01-02 13:42:32'),
(28, 24, 'team', 'Rushabh', 'Goti', 'rushabhgoti.2412@gmail.com', '8758832452', 'Python Developer', 'BE (IT)', '1998-12-24', '93165617rushabh.jpg', 1, NULL, '2023-01-02 13:42:46'),
(29, 25, 'team', 'Yagnika', 'Bhadiyadara', 'yagnikabhadiyadara1707@gmail.com', '9428550789', 'Web Developer', 'Bsc (IT)', '2005-07-17', '65160115yagnika.jpg', 1, NULL, '2023-01-02 13:43:00'),
(30, 26, 'team', 'Shubham', 'Savaliya', 'shubhamsavaliya0112@gmail.com', '9909047694', 'Android Developer', 'B.C.A.', '2003-12-01', '7652987196275shubham.jpg', 1, NULL, '2023-01-02 07:08:33'),
(31, 27, 'team', 'Piyush', 'Panchani', 'piyushpanchani2001@gmail.com', '7285031336', 'iOS Developer', 'B.Com.', '2001-05-20', '26185928piyush.jpg', 1, NULL, '2023-01-02 13:44:08'),
(32, 28, 'team', 'Rakesh', 'Moradiya', 'rakeshmoradiya1997@gmail.com', '7016137016', 'iOS Developer', 'B.E. Chemical', '1997-07-28', '38566723rakesh.jpg', 1, NULL, '2023-01-02 13:45:05'),
(35, 31, 'team', 'Nikunj', 'Kotadiya', 'Nikunjkotadiya74@gmail.com', '7359245685', 'Flutter Developer', 'B.C.A', '1995-11-18', '8237761653045898197.jpeg', 1, NULL, '2023-02-02 07:41:22'),
(37, 32, 'team', 'Dirgh', 'Kumbhani', 'Dirghkumbhani@gmail.com', '6354619669', 'UI/UX Intern', 'Graduation Ongoing (8th Semester)', '2001-10-01', '519337Dirgh.jpg', 1, NULL, NULL),
(38, 33, 'team', 'Sanket', 'Pansuriya', 'sanketpansuriya1920@gmail.com', '8200083989', 'Web Devloper (Intern)', 'B.Tech (IT)', '2002-06-19', '630158userjpg.jpg', 1, NULL, NULL),
(39, 34, 'team', 'Manish', 'Manish', 'manishgohil521@gmail.com', '9016120230', 'Web Development (Intern)', 'B-Tech IT', '2001-04-05', '992725userjpg.jpg', 1, NULL, '2023-02-10 05:00:45'),
(40, 35, 'team', 'Pujan', 'Desai', 'pujandesai38@gmail.com', '9408740861', 'Web Development (Intern)', 'B-tech (IT)', '1998-12-12', '93831userjpg.jpg', 1, NULL, NULL),
(41, 36, 'team', 'Manan', 'Godhani', 'manangodhani363@gmail.com', '9913744344', 'Web Developer (Intern)', 'diploma in architecture', '2000-12-17', '648696userjpg.jpg', 1, NULL, '2023-02-10 05:08:07'),
(42, 37, 'team', 'Kavil', 'Pansuriya', 'kavilpansuriya010@gmail.com', '7574981200', 'intership', 'Bca second year running', '2004-04-01', '566935userjpg.jpg', 1, NULL, NULL),
(43, 38, 'team', 'Srushti', 'Navadiya', 'srishtinavadiya07@gmail.com', '7485971550', 'web developer (Intern)', 'MCA', '2001-07-10', '959647srushti.jpg', 1, NULL, NULL),
(44, 39, 'team', 'Kevin', 'Miyani', 'kevinmiyani0422@gmail.com', '9016188381', 'React Native Devloper', 'BE computer Engineer', '2002-01-22', '606784userjpg.jpg', 1, NULL, NULL),
(45, 40, 'team', 'Malay', 'Joshi', 'malayj12.mj@gmail.com', '9409234477', 'React Native', 'BE Computer', '1997-09-30', '325983userjpg.jpg', 1, NULL, NULL),
(46, 41, 'team', 'pushti', 'Shah', 'pushtishah0502@gmail.com', '9879870536', 'Flutter Developer (Intern)', '6-Sem B.E.(IT)', '2002-01-05', '203186userjpg.jpg', 1, NULL, NULL),
(47, 42, 'team', 'Hasti', 'Bhalodiya', 'bhalodiya.hasti.25@gmail.com', '9687965879', 'UI/UX design intern', '6th sem BE-IT', '2002-11-25', '249559userjpg.jpg', 1, NULL, NULL),
(48, 43, 'team', 'Chetan', 'Badreshiya', 'badreshiyachetan@gmail.com', '9537666746', 'React Native (Intern)', 'B.E (EC)', '1994-05-07', '825962chetan.jpg', 1, NULL, NULL),
(49, 44, 'team', 'Devarshi', 'Patel', 'devarshi34003@gmail.com', '8849919489', 'React Native (Intern)', 'BE IT', '2003-03-04', '121259devarshi.jpg', 1, NULL, '2023-02-10 05:50:10'),
(50, 45, 'team', 'Sahil', 'Rathod', 'samael17111@gmail.com', '8320958604', 'Intern', '3rd Year BE-IT', '2003-05-17', '341721Sahil.jpg', 1, NULL, NULL),
(51, 46, 'team', 'Himani', 'Agrawal', 'himaniagrawal1810@gmail.com', '9979500193', 'Intern', 'BE-Btech', '2003-10-18', '971708userjpg.jpg', 1, NULL, '2023-02-10 05:40:49'),
(52, 47, 'team', 'Jigar', 'Jotangiya', 'jigarjotangiya1999@gmail.com', '9998318065', 'UI/UX Desighner', '12th Completed', '1999-11-15', '305667userjpg.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uiux_develop_titles`
--

CREATE TABLE `uiux_develop_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uiux_develop_titles`
--

INSERT INTO `uiux_develop_titles` (`id`, `special_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '4', 'CREATING USER FRIENDLY INTERFACE FOR YOUR PRODUCT users', 'It is no secret that products that take long to respond drive even the most patient users away, especially when paired with aesthetically repulsive designs. At Dioeapps, we help businesses like yours create unique digital experiences for their product users, drawing from the creativity, innovation, and expertise of our experienced UI/UX designers and developers.', 1, NULL, '2022-10-03 05:25:58');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `name`, `phone_number`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Staidly', '89038658301', 'gretchenpittman33@gmail.com', 'The fastest way to make your wallet thick is found. https://newsworld.elk.pl', 1, NULL, NULL),
(11, 'Staidly', '89032625350', 'karl.g.johnson@realwebs.net', 'The additional income for everyone. https://newsworld.elk.pl', 1, NULL, NULL),
(12, 'QGWDNN8WLGQWOS8WXF  www.is.gd/BqXlNE#X2zn03TxYB QGWDNN8WLGQWOS8WXF  www.is.gd/BqXlNE#X2zn03TxYB', '905-650-1914', 'yevgeniy.krovatkin@mail.ru', 'Hi! Please tell me the number of your office, I will come to you tomorrow.   QGWDNN8WLGQWOS8WXF  www.is.gd/BqXlNE#X2zn03TxYB', 1, NULL, NULL),
(13, 'Staidly', '89039899484', 'Deanm60187@aol.com', 'Robot never sleeps. It makes money for you 24/7. https://newsworld.elk.pl', 1, NULL, NULL),
(14, 'Donaldhog', '86368343698', 'donelleej13ter@outlook.com', 'Не знаете где можно найти надежную информацию о инвестициях, переходите на сайт <a href=https://litani.ru/>litani.ru</a>', 1, NULL, NULL),
(15, 'Staidly', '89038186535', 'lunajnsp@gmail.com', 'Even a child knows how to make money. This robot is what you need! https://newsworld.elk.pl', 1, NULL, NULL),
(16, 'Staidly', '89033444134', 'sk8ballseric@hotmail.com', 'Only one click can grow up your money really fast. https://newsworld.elk.pl', 1, NULL, NULL),
(17, 'Terryved', '86895764272', 'bzwjs@course-fitness.com', '歐客佬精品咖啡 ｜OKLAO COFFEE｜蝦皮商城｜咖啡豆｜掛耳｜精品咖啡｜咖啡禮盒 專賣｜精品麵包 \r\n \r\nhttps://first-cafe.com/', 1, NULL, NULL),
(18, 'Patricktax', '82569741156', 'e2zbp@course-fitness.com', '詠春拳幣 \r\n \r\n \r\n \r\n \r\nhttps://etherscan.io/token/0xa8930ee8906063d2a5c7ea15b6b4429463d28f58', 1, NULL, NULL),
(19, 'Leslieses', '88423699323', 'mz8vy@course-fitness.com', '第一借錢網擁有全台最多的借錢資訊 \r\n \r\n \r\nhttps://168cash.com.tw/', 1, NULL, NULL),
(20, 'Staidly', '89035215834', 'patarroibtrytomega@hotmail.com', 'Money, money! Make more money with financial robot! https://newsworld.elk.pl', 1, NULL, NULL),
(21, 'Staidly', '89033862376', 'shuntewade98@yahoo.com', 'Make your money work for you all day long. https://newsworld.elk.pl', 1, NULL, NULL),
(22, 'Staidly', '89037123856', 'bren_adofina02@yahoo.com', 'Still not a millionaire? Fix it now! https://newsworld.elk.pl', 1, NULL, NULL),
(23, 'Staidly', '89039685994', 'sujun060123@163.com', 'Even a child knows how to make money. Do you? https://newsworld.elk.pl', 1, NULL, NULL),
(24, 'JustinDub', '83891829898', 'prja@course-fitness.com', '日光共享空間 - Nikko Space \r\n \r\n \r\nhttps://nikkospace.com/', 1, NULL, NULL),
(25, 'Staidly', '89036860744', 'richidoll123@rediffmail.com', 'Wow! This is a fastest way for a financial independence. https://newsworld.elk.pl', 1, NULL, NULL),
(26, 'Richardbuh', '84297991749', 'wj1ra@course-fitness.com', '冠天下娛樂城，as8899.com，世界盃，世足盃，2022世界盃，2022世足盃 \r\n \r\n \r\nhttps://xn--ghq10gw1gvobv8a5z0d.com/', 1, NULL, NULL),
(27, 'Staidly', '89033025133', 'osman_ckry_630@hotmail.com', 'Learn how to make hundreds of backs each day. https://newsworld.elk.pl', 1, NULL, NULL),
(28, 'Staidly', '89039036500', 'matthiasgerrard@low.emailies.com', 'The online financial Robot is your key to success. https://newsworld.elk.pl', 1, NULL, NULL),
(29, 'Staidly', '89039532583', 'ckrewet@satx.rr.com', 'Online earnings are the easiest way for financial independence. https://newsworld.elk.pl', 1, NULL, NULL),
(30, 'Richardinnop', '87986853967', 'zelatcol@gmail.com', 'Sawubona, bengifuna ukwazi intengo yakho.', 1, NULL, NULL),
(31, 'Staidly', '89033313536', 'mxpowers2005@yahoo.com', 'Make money in the internet using this Bot. It really works! https://newsworld.elk.pl', 1, NULL, NULL),
(32, 'Staidly', '89037856631', 'cindypacholke@ymail.com', 'Robot never sleeps. It makes money for you 24/7. https://newsworld.elk.pl', 1, NULL, NULL),
(33, 'videoTah', '82289769951', 'zwisoltiving1980@seocdvig.ru', '<a href=http://videonn.ru>Видеонаблюдение</a>', 1, NULL, NULL),
(34, 'Staidly', '89039975546', 'sharonhalim18@hotmail.com', 'Launch the financial Bot now to start earning. https://newsworld.elk.pl', 1, NULL, NULL),
(35, 'Staidly', '89034327525', 'lauraloo76@gmail.com', 'Make yourself rich in future using this financial robot. https://newsworld.elk.pl', 1, NULL, NULL),
(36, 'Staidly', '89031509106', 'sexykatie139@yahoo.com', 'The financial Robot is your # 1 expert of making money. https://newsworld.elk.pl', 1, NULL, NULL),
(37, 'Staidly', '89035771875', 'rizki10may2002@yahoo.com', 'We know how to make our future rich and do you? https://newsworld.elk.pl', 1, NULL, NULL),
(38, 'JasonInhek', '83374183488', 'rodionova-zz0sr@rambler.ru', 'Register and take part in the drawing, <a href=https://yourbonus.life/?u=2rek60a&o=y59p896&t=211222x>click here</a>', 1, NULL, NULL),
(39, 'Staidly', '89038438559', 'trhodes0812@yahoo.com', 'There is no need to look for a job anymore. Work online. https://newsworld.elk.pl', 1, NULL, NULL),
(40, 'Staidly', '89039017893', 'mike.sim@lycos.com', 'Make thousands of bucks. Pay nothing. https://newsworld.elk.pl', 1, NULL, NULL),
(41, 'KennyDwemo', '86981715942', 'f5vano@course-fitness.com', '雙波長亞歷山大除毛雷射 - 八千代 \r\n \r\n \r\nhttps://yachiyo.com.tw/alexandrite-laser/', 1, NULL, NULL),
(42, 'Staidly', '89032091281', 'meglezz0625@yahoo.com', 'No need to stay awake all night long to earn money. Launch the robot. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(43, 'OksanaArertDusstype', '81899839649', 'bviktorija.sokolove51@yandex.ru', '<a href=>http://bustgalter.cf/</a> \r\n<a href=https://monicarasmona.com/film-tampan-tailor-my-daddy-my-superhero/#comment-1719>bustgalter.cf</a> 3603e9a', 1, NULL, NULL),
(44, 'Staidly', '89033958875', 'rabyynynakxorull@hotmail.com', 'We know how to increase your financial stability. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(45, 'Staidly', '89036009815', 'bhathcock8288@yahoo.com', 'Make your computer to be you earning instrument. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(46, 'Sdvillmib', '83693443345', 'chim.me.d.u.rl.s@o5o5.ru', '<a href=https://chimmed.ru/>бензоат натрия купить </a> \r\nTegs: аргинин аминокислота  https://chimmed.ru/ \r\n \r\n<u>микофеноловая кислота </u> \r\n<i>хлорид калия купить </i> \r\n<b>лактобионовой кислотой </b>', 1, NULL, NULL),
(47, 'Staidly', '89032505256', 'nuzzo57@yahoo.com', 'The online income is your key to success. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(48, 'Staidly', '89036990775', 'bramblepaul01@gmail.com', 'Making money can be extremely easy if you use this Robot. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(49, 'MaximoShito', '85731889322', 'sehladesuza@gmail.com', 'Stay on top of latest News developments with <a href=https://www.aljazeeranewstoday.com>Al Jazeera News Today</a> fact-based news', 1, NULL, NULL),
(50, 'Staidly', '89037565871', 'seecea@gmail.com', 'The best way for everyone who rushes for financial independence. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(51, 'Staidly', '89036022953', 'st.o.ckiv.uze@gmail.com', '# 1 financial expert in the net! Check out the new Robot. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(52, 'Staidly', '89038233176', 'maxmusshulze@e-mail.net', 'Trust your dollar to the Robot and see how it grows to $100. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(53, 'Staidly', '89037807158', 'teahnnadean@yahoo.com', 'One dollar is nothing, but it can grow into $100 here. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(54, 'videoTah', '84938717715', 'zwisoltiving1980@seocdvig.ru', 'http://xn----ctbgen7aaf.xn--p1ai - Видеонаблюдение', 1, NULL, NULL),
(55, 'Staidly', '89038185995', 'stefrocs11@gmail.com', 'Start your online work using the financial Robot. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(56, 'Staidly', '89037094196', 'raypollock@hotmail.com', 'Have no money? It’s easy to earn them online here. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(57, 'Staidly', '89039344806', 'fillygirl1979@yahoo.com', 'Have no money? It’s easy to earn them online here. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(58, 'Staidly', '89035024868', 'mglyon1@yahoo.com', 'Most successful people already use Robot. Do you? http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(59, 'Staidly', '89031993161', 'jlouie@hotmail.com', 'The online job can bring you a fantastic profit. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(60, 'Staidly', '89036601229', 'roccco55@hotmail.com', 'Financial independence is what this robot guarantees. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(61, 'Staidly', '89035360536', 'aranl1@hotmail.com', 'No need to stay awake all night long to earn money. Launch the robot. http://go.suqomuaq.com/0j35', 1, NULL, NULL),
(62, 'Staidly', '89035073320', 'fbarnard@sbcglobal.net', 'Additional income is now available for anyone all around the world. http://go.suqomuaq.com/0j35', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_develop_titles`
--

CREATE TABLE `web_develop_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `special_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_develop_titles`
--

INSERT INTO `web_develop_titles` (`id`, `special_id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'WHAT WE BUILD', 'Custom Website Development is the alternative to generic boxed software. It is the tailor-made creation of your website, built from scratch by experienced web developers and designers, who use front-end and back-end technology to make your site unique, scalable, mobile friendly, and directly suited to your specific business requirements.', 1, NULL, '2022-10-03 05:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `we_experts`
--

CREATE TABLE `we_experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `we_experts`
--

INSERT INTO `we_experts` (`id`, `title`, `description`, `image1`, `image2`, `image3`, `status`, `created_at`, `updated_at`) VALUES
(1, 'We are expert in mobile app development services', '<p>Dioneapps, reputed IT Company in India, has successfully carved its niche within a few time of its inception. With a strong team of qualified and experienced professionals, we strive to develop top-notch mobile applications and websites subjective to the needs of our clients. Over such a short span of time, we have undertaken over projects and we have a pool of over satisfied clients.</p>', '947625up_side_left-min.png', '106388up_side_right-min.png', '845516down_img-min.png', 1, NULL, '2022-12-20 05:29:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_counters`
--
ALTER TABLE `about_counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_experts`
--
ALTER TABLE `about_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_develop_titles`
--
ALTER TABLE `app_develop_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_page_perksses`
--
ALTER TABLE `career_page_perksses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_page_titles`
--
ALTER TABLE `career_page_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_projects`
--
ALTER TABLE `company_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_work_features`
--
ALTER TABLE `company_work_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_media_infos`
--
ALTER TABLE `contact_media_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features_developments`
--
ALTER TABLE `features_developments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_fifths`
--
ALTER TABLE `footer_fifths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_firsts`
--
ALTER TABLE `footer_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_forths`
--
ALTER TABLE `footer_forths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_latest_works`
--
ALTER TABLE `portfolio_latest_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_collages`
--
ALTER TABLE `project_collages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_contact__controllers`
--
ALTER TABLE `project_contact__controllers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renowneds`
--
ALTER TABLE `renowneds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_offers`
--
ALTER TABLE `services_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_pages`
--
ALTER TABLE `service_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializeds`
--
ALTER TABLE `specializeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializ_ids`
--
ALTER TABLE `specializ_ids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stages_of_works`
--
ALTER TABLE `stages_of_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_managements`
--
ALTER TABLE `team_managements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_managements_email_unique` (`email`);

--
-- Indexes for table `uiux_develop_titles`
--
ALTER TABLE `uiux_develop_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_develop_titles`
--
ALTER TABLE `web_develop_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `we_experts`
--
ALTER TABLE `we_experts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_counters`
--
ALTER TABLE `about_counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_experts`
--
ALTER TABLE `about_experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_develop_titles`
--
ALTER TABLE `app_develop_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_page_perksses`
--
ALTER TABLE `career_page_perksses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `career_page_titles`
--
ALTER TABLE `career_page_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_projects`
--
ALTER TABLE `company_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_work_features`
--
ALTER TABLE `company_work_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_media_infos`
--
ALTER TABLE `contact_media_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features_developments`
--
ALTER TABLE `features_developments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_fifths`
--
ALTER TABLE `footer_fifths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer_firsts`
--
ALTER TABLE `footer_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer_forths`
--
ALTER TABLE `footer_forths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `portfolio_latest_works`
--
ALTER TABLE `portfolio_latest_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project_collages`
--
ALTER TABLE `project_collages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_contact__controllers`
--
ALTER TABLE `project_contact__controllers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `renowneds`
--
ALTER TABLE `renowneds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_offers`
--
ALTER TABLE `services_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_pages`
--
ALTER TABLE `service_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `specializeds`
--
ALTER TABLE `specializeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `specializ_ids`
--
ALTER TABLE `specializ_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stages_of_works`
--
ALTER TABLE `stages_of_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team_managements`
--
ALTER TABLE `team_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `uiux_develop_titles`
--
ALTER TABLE `uiux_develop_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `web_develop_titles`
--
ALTER TABLE `web_develop_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `we_experts`
--
ALTER TABLE `we_experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
