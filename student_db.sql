-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 06:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `industry` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `website` varchar(35) NOT NULL,
  `location` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`, `industry`, `email`, `mobile`, `website`, `location`) VALUES
('C12345678', 'ABC Technologies', 'Software development company.', 'Computer S', 'abc@abctechnologies.com', 4169879870, 'https://www.abctechnologies.com', 'Toronto'),
('C98798798', 'XYZ Company', 'Top Digital Solutions provider.', 'Informatio', 'xyz@xyzcompany.com', 4671237890, 'https://www.xyzcompany.com', 'Ottawa');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`email`, `mobile`, `location`) VALUES
('patelharshil737@gmail.com', 0, 'feds');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(9) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`) VALUES
(13, 'Question 1', 'Answer 1'),
(14, 'Question 2', 'Answer 2');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` varchar(9) NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `job_id` varchar(9) NOT NULL,
  `company_id` varchar(9) NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `student_id`, `job_id`, `company_id`, `application_date`) VALUES
('A12345678', 'S01234567', 'J01234567', 'C12345678', '2019-10-04'),
('A01234567', 'S12345680', 'J12345678', 'C98798798', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `job_postings`
--

CREATE TABLE `job_postings` (
  `id` varchar(9) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `start_date` date NOT NULL,
  `application_deadline` date NOT NULL,
  `company_id` varchar(9) NOT NULL,
  `recruiter_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_postings`
--

INSERT INTO `job_postings` (`id`, `title`, `description`, `start_date`, `application_deadline`, `company_id`, `recruiter_name`) VALUES
('J01234567', 'Android Developer', 'A Computer Science, Engineering degree or equivalent is preferre.', '2019-10-15', '2019-10-05', 'C12345678', 'Tom'),
('J12345678', 'React Developer', 'Professional experience in Web Development.', '2019-11-01', '2019-10-15', 'C98798798', 'Adam');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `active_account` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `placed_students`
--

CREATE TABLE `placed_students` (
  `id` varchar(9) NOT NULL,
  `date` date NOT NULL,
  `student_id` varchar(9) NOT NULL,
  `job_id` varchar(9) NOT NULL,
  `company_id` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placed_students`
--

INSERT INTO `placed_students` (`id`, `date`, `student_id`, `job_id`, `company_id`) VALUES
('P12312312', '2019-10-10', 'S01234567', 'J12345678', 'C12345678'),
('P98798712', '2019-10-02', 'S12345680', 'J12345678', 'C98798798');

-- --------------------------------------------------------

--
-- Table structure for table `placement_officers`
--

CREATE TABLE `placement_officers` (
  `id` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `specialization` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement_officers`
--

INSERT INTO `placement_officers` (`id`, `name`, `mobile`, `specialization`) VALUES
(1, 'Sam', 6371230987, 'Web Development'),
(2, 'Maria', 6379870987, 'Mobile Developm');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(20) NOT NULL,
  `expected_graduation` date NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `institution` varchar(20) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  `gender` char(1) NOT NULL,
  `status` varchar(20) NOT NULL,
  `placement_officer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `course`, `expected_graduation`, `mobile`, `institution`, `gpa`, `gender`, `status`, `placement_officer`) VALUES
('S01234567', 'John', 'john@gmail.com', 'Information Technolo', '2020-04-10', 4674567890, 'Humber College', '4.39', 'm', '', 0),
('S12345680', 'Maria', 'maria@yahoo.com', 'Enterprise Software ', '2020-04-17', 4164561234, 'Humber College', '4.46', 'f', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `submitted_placement_paper`
--

CREATE TABLE `submitted_placement_paper` (
  `student_id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD KEY `fk_student_job_applications` (`student_id`),
  ADD KEY `fk_job_job_applications` (`job_id`),
  ADD KEY `fk_company_job_applications` (`company_id`);

--
-- Indexes for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_company_job_postings` (`company_id`);

--
-- Indexes for table `placed_students`
--
ALTER TABLE `placed_students`
  ADD KEY `fk_student_placed_students` (`student_id`),
  ADD KEY `fk_job_placed_students` (`job_id`),
  ADD KEY `fk_company_placed_students` (`company_id`);

--
-- Indexes for table `placement_officers`
--
ALTER TABLE `placement_officers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `placement_officers`
--
ALTER TABLE `placement_officers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `fk_company_job_applications` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_job_job_applications` FOREIGN KEY (`job_id`) REFERENCES `job_postings` (`id`),
  ADD CONSTRAINT `fk_student_job_applications` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `job_postings`
--
ALTER TABLE `job_postings`
  ADD CONSTRAINT `fk_company_job_postings` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `placed_students`
--
ALTER TABLE `placed_students`
  ADD CONSTRAINT `fk_company_placed_students` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `fk_job_placed_students` FOREIGN KEY (`job_id`) REFERENCES `job_postings` (`id`),
  ADD CONSTRAINT `fk_student_placed_students` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
