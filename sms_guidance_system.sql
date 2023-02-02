-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 06:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_guidance_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiling`
--

CREATE TABLE `profiling` (
  `stud_id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_section` int(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `nname` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact_number` int(30) NOT NULL,
  `per_address` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `spouse` varchar(30) NOT NULL,
  `spuse_occupation` varchar(30) NOT NULL,
  `birth_order` int(30) NOT NULL,
  `brother` int(30) NOT NULL,
  `sister` int(30) NOT NULL,
  `living_with` varchar(30) NOT NULL,
  `name_of_father` varchar(30) NOT NULL,
  `name_of_mother` varchar(30) NOT NULL,
  `father_address` varchar(30) NOT NULL,
  `mother_address` varchar(30) NOT NULL,
  `father_nationality` varchar(30) NOT NULL,
  `mother_nationality` varchar(30) NOT NULL,
  `father_religion` varchar(30) NOT NULL,
  `mother_religion` varchar(30) NOT NULL,
  `father_educ` varchar(30) NOT NULL,
  `mother_educ` varchar(30) NOT NULL,
  `father_occupation` varchar(30) NOT NULL,
  `mother_occupation` varchar(30) NOT NULL,
  `father_company` varchar(30) NOT NULL,
  `mother_company` varchar(30) NOT NULL,
  `father_birthdate` date NOT NULL,
  `mother_birthdate` date NOT NULL,
  `father_contact` int(30) NOT NULL,
  `mother_contact` int(30) NOT NULL,
  `father_email` varchar(30) NOT NULL,
  `mother_email` varchar(30) NOT NULL,
  `name_of_gurdian` varchar(30) NOT NULL,
  `gurdian_relationship` varchar(30) NOT NULL,
  `gurdian_address` varchar(30) NOT NULL,
  `gurdian_contact` int(30) NOT NULL,
  `gurdian_email` varchar(30) NOT NULL,
  `emergency_person` varchar(30) NOT NULL,
  `emergency_contact` int(30) NOT NULL,
  `years` varchar(30) NOT NULL,
  `school_name_tertiary` text NOT NULL,
  `school_add_tertiary` text NOT NULL,
  `year_attended_tertiary` text NOT NULL,
  `honors_tertiary` text NOT NULL,
  `school_name_als` text NOT NULL,
  `school_add_als` text NOT NULL,
  `year_attended_als` date NOT NULL,
  `honors_als` text NOT NULL,
  `school_name_second` varchar(30) NOT NULL,
  `school_add_second` text NOT NULL,
  `year_attended_second` date NOT NULL,
  `honors_second` text NOT NULL,
  `schoo_name_elem` text NOT NULL,
  `school_add_elem` text NOT NULL,
  `year_attended_elem` date NOT NULL,
  `honors_elem` text NOT NULL,
  `name_of_org` text NOT NULL,
  `affilition` text NOT NULL,
  `affli_year` text NOT NULL,
  `affli_status` text NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `from_to` varchar(30) NOT NULL,
  `interest` text NOT NULL,
  `talent` text NOT NULL,
  `characteristic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiling`
--

INSERT INTO `profiling` (`stud_id`, `course`, `year_section`, `status`, `lname`, `fname`, `mname`, `nname`, `date_of_birth`, `gender`, `email`, `contact_number`, `per_address`, `nationality`, `civil_status`, `religion`, `spouse`, `spuse_occupation`, `birth_order`, `brother`, `sister`, `living_with`, `name_of_father`, `name_of_mother`, `father_address`, `mother_address`, `father_nationality`, `mother_nationality`, `father_religion`, `mother_religion`, `father_educ`, `mother_educ`, `father_occupation`, `mother_occupation`, `father_company`, `mother_company`, `father_birthdate`, `mother_birthdate`, `father_contact`, `mother_contact`, `father_email`, `mother_email`, `name_of_gurdian`, `gurdian_relationship`, `gurdian_address`, `gurdian_contact`, `gurdian_email`, `emergency_person`, `emergency_contact`, `years`, `school_name_tertiary`, `school_add_tertiary`, `year_attended_tertiary`, `honors_tertiary`, `school_name_als`, `school_add_als`, `year_attended_als`, `honors_als`, `school_name_second`, `school_add_second`, `year_attended_second`, `honors_second`, `schoo_name_elem`, `school_add_elem`, `year_attended_elem`, `honors_elem`, `name_of_org`, `affilition`, `affli_year`, `affli_status`, `company_name`, `position`, `from_to`, `interest`, `talent`, `characteristic`) VALUES
(19000000, 'BSIT', 4204, 'regular', 'JORQUIA', 'KENNETH', 'FABIA', 'KEN KEN', '2014-01-14', 'male', 'jorquiakenneth040@gmail.com', 2147483647, 'ph1 caloocan city', 'filipino', 'single', 'christian', 'marilyn', 'service crew', 1, -1, 0, 'Parents', 'reynaldo jorquia', 'marites fabia', 'ph1 caloocan', 'ph1 caloocan', 'filipino', 'filipino', 'catholic', 'catholic', 'asdfasdfasdf', 'jljl', 'asfasdf', 'ASDF', 'asdfasdf', 'ASDFASDFASDF', '2023-01-24', '2023-01-24', 2147483647, 2147483647, 'bongkse@gmail.com', 'tekya@gmail.com', 'marites fabia', 'mother', 'ph1 caloocan', 2147483647, 'sdgd@gmail.com', 'marites fabia', 2147483647, 'second degree', 'star elementary ', 'asdf', '2023-01-24', 'wala', 'wala', 'wala', '2023-01-24', 'wala', 'bagong silang high school', 'ph3 caloocan', '2023-01-13', 'wala', 'star elementary ', 'ph3 caloocan', '2023-01-25', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'wala', 'Watching TV,Reading Books,Collecting Items,Shopping', 'Singing,Dancing,Painting', 'Stubborn,Patient,Talkative,Optimistic,Moody,Lazy,Quiet'),
(19014029, 'BSHR', 1101, 'Regular', 'ATLAS', 'GUSION', 'HAYABUSA', '', '0000-00-00', 'male', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'Freshmen', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Watching TV', 'Dancing', 'Calm'),
(19022045, 'BSBA', 3201, 'irregular', 'EMBOTIDO', 'LANGONISA', 'HOTDOG', 'CHEESE', '0000-00-00', 'female', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'transferee', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Watching TV,Reading Books', 'Singing,Dancing', 'Friendly,Optimistic,Lazy'),
(19022046, 'BSKL', 2301, 'regular', 'TAPSILOG', 'CHICKSILOG', 'HOTSILOG', 'BETSILOG', '0000-00-00', 'male', '', 0, '', '', '', '', '', '', 0, 0, 0, 'Guardian', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', 0, 'transferee', '', '', '', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 'Hiking', 'Dramatic', 'Calm');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `course` text NOT NULL,
  `year_section` text NOT NULL,
  `referral` text NOT NULL,
  `concern` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_table`
--

CREATE TABLE `reservation_table` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `course` text NOT NULL,
  `year_section` int(11) NOT NULL,
  `referral` text NOT NULL,
  `concern` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_table`
--

INSERT INTO `reservation_table` (`id`, `firstname`, `lastname`, `course`, `year_section`, `referral`, `concern`, `date`, `time`) VALUES
(1, 'Kenneth', 'Jorquia', 'BSIT', 4204, 'Depression', 0, '2023-02-21', '13:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `res_table`
--

CREATE TABLE `res_table` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `size` int(100) DEFAULT NULL,
  `downloads` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `res_table`
--

INSERT INTO `res_table` (`id`, `name`, `category`, `size`, `downloads`) VALUES
(1, 'Assessment-for-Module-9.docx', 'Evaluation', 13300, 6),
(2, 'Evaluation-for-Module-9.docx', 'Survey', 12875, 2),
(3, 'Assessment-for-Module-9 (1).docx', 'Evaluation', 13300, 0),
(4, 'Evaluation-for-Module-9 (1).docx', 'Research', 12875, 0),
(5, 'Private Cloud.pdf', 'Evaluation', 324039, 3),
(6, 'Kenneth-Resume.docx', 'Research', 55247, 0),
(7, 'Assessment-for-Module-9 (1).docx', 'Evaluation', 13300, 0),
(8, 'Kenneth-Resume.docx', 'Survey', 55247, 0),
(9, 'Assessment-for-Module-9 (3).docx', 'Evaluation', 13300, 0),
(10, 'Assessment-for-Module-9 (3).docx', 'Evaluation', 13300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload_post`
--

CREATE TABLE `upload_post` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_post`
--

INSERT INTO `upload_post` (`id`, `name`, `description`, `category`, `date`, `image`) VALUES
(1, 'Mang Kanor', 'The king is back', 'Job Post', '2023-01-26', '63d295281efe3.jpg'),
(2, 'asdf', 'asdfsadfasdf', 'Guidance Post', '2023-01-26', '63d29540dd25e.jpg'),
(3, 'Basang Sisiw', 'Huni ng alikabok', 'Guidance Post', '2023-01-26', '63d29566acbcd.jpg'),
(4, 'sfasdfasdfasdfasdfasdfasd', 'sggfadfasdffasdfasdfasdfasdf', 'Guidance Post', '2023-01-26', '63d296b012f9c.jpg'),
(15, 'asfdsadfsadf', 'sdfasdfsafsa', 'Guidance Post', '2023-01-26', '63d689abc46ab.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiling`
--
ALTER TABLE `profiling`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `res_table`
--
ALTER TABLE `res_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_post`
--
ALTER TABLE `upload_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiling`
--
ALTER TABLE `profiling`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19022051;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `res_table`
--
ALTER TABLE `res_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `upload_post`
--
ALTER TABLE `upload_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
