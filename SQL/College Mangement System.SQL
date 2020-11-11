-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2019 at 01:37 PM
-- Server version: 5.7.28-0ubuntu0.19.04.2
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE attendance (
  attendance_id int(11) NOT NULL,
  attendance_student_id varchar(255) NOT NULL,
  attendance_month_id varchar(255) NOT NULL,
  attendance_date varchar(255) NOT NULL,
  attendance_intime varchar(255) NOT NULL,
  attendance_outtime varchar(255) NOT NULL,
  attendance_description varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table attendance
--

INSERT INTO attendance (attendance_id, attendance_student_id, attendance_month_id, attendance_date, attendance_intime, attendance_outtime, attendance_description) VALUES
(1, '3', '3', '12 March,2018', '9:00AM', '03:00PM', 'Full Time Attendance'),
(2, '3', '4', '10 April,2018', '9:00AM', '12:00PM', 'Half Time Attendance'),
(3, '2', '8', '1 August,2018', '10:00AM', '02:00PM', 'Full Time Attendance'),
(4, '2', '12', '20 December,2018', '10:00AM', '02:00PM', 'Full Time Attendance'),
(5, '4', '2', '13 February,2018', '9:00AM', '04:00PM', 'Full Time Attendance'),
(6, '4', '1', '17 January,2018', '12:00PM', '04:00PM', 'Half Time Attendance'),
(7, '5', '12', '19 December,2018', '09:00AM', '03:00PM', 'Full Time Attendance'),
(8, '1', '12', '18 December,2017', '09:00AM', '12:00PM', 'Half Time Attendance');

-- --------------------------------------------------------

--
-- Table structure for table city
--

CREATE TABLE city (
  city_id int(10) UNSIGNED NOT NULL,
  city_name varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table city
--

INSERT INTO city (city_id, city_name) VALUES
(1, 'Mumbai'),
(2, 'Delhi'),
(3, 'Chenai'),
(4, 'Banglore'),
(5, 'Varanasi'),
(6, 'Kolkatta'),
(7, 'Ghaziabad'),
(8, 'Aligarh'),
(9, 'Tundal'),
(10, 'Kanpur'),
(11, 'Allahabad'),
(12, 'Mirzapur'),
(13, 'Mughalsarai'),
(14, 'Bhabua Road'),
(15, 'Sasaram'),
(16, 'Gaya'),
(17, 'Howrah'),
(18, 'Kodarma'),
(19, 'Asansol'),
(20, 'Dhanbad');

-- --------------------------------------------------------

--
-- Table structure for table country
--

CREATE TABLE country (
  country_id int(11) NOT NULL,
  country_name varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table country
--

INSERT INTO country (country_id, country_name) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table course
--

CREATE TABLE course (
  course_id int(11) NOT NULL,
  course_title varchar(255) NOT NULL,
  course_description varchar(255) NOT NULL,
  course_year varchar(255) NOT NULL,
  course_semester varchar(255) NOT NULL,
  course_code varchar(255) NOT NULL,
  course_fees varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `course_description`, `course_year`, `course_semester`, `course_code`, `course_fees`) VALUES
(1, 'BCA', 'BCA', '3 Years', '6 Semesters', '123', '10000/-'),
(2, 'MCA', 'MCA', '2 Years', '4 Semesters', '321', '15000/-'),
(3, 'B.Tech', 'B.Tech', '4 Years', '8 Semesters', '456', '50000/-'),
(4, 'M.Tech', 'M.Tech', '2 Years', '4 Semesters', '654', '60000/-'),
(5, 'B.com', 'B.com', '3 Years', '6 Semesters', '234', '20000/-'),
(6, 'M.com', 'M.com', '2 Years', '4 Semesters', '432', '25000/-'),
(7, 'MA', 'MA', '2 Years', '4 Semesters', '345', '18000/-'),
(8, 'BBA', 'BBA', '3 Years', '6 Semesters', '543', '21000/-'),
(9, 'BSC', 'BSC', '3 Years', '6 Semesters', '567', '30000/-'),
(10, 'MSC', 'MSC', '2 Years', '4 Semesters', '765', '35000/-');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `fees_id` int(11) NOT NULL,
  `fees_student_id` varchar(255) NOT NULL,
  `fees_amount` varchar(255) NOT NULL,
  `fees_month_id` varchar(255) NOT NULL,
  `fees_date` varchar(255) NOT NULL,
  `fees_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `fees_student_id`, `fees_amount`, `fees_month_id`, `fees_date`, `fees_description`) VALUES
(1, '3', '10000/-', '4', '7 April,2018', 'Full Fees'),
(2, '2', '10000/-', '3', '1 March,2018', 'Paid Yearly Fees'),
(3, '4', '60000/-', '3', '31 March,2018', 'Paid Yearly Fees'),
(4, '1', '20000/-', '3', '10 March,2018', 'Complete Fees'),
(5, '5', '21000/-', '6', '20 June,2018', 'Paid Full Fees'),
(6, '1', '10000/-', '1', '25 January,2017', 'Installment Fees'),
(7, '1', '20000/-', '12', '4 December,2016', 'Installment Fees'),
(8, '3', '10000/-', '12', '16 March,2017', 'Installment Fees');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `login_level` varchar(255) NOT NULL,
  `login_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_password`, `login_level`, `login_date`) VALUES
(1, 'admin', 'test', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_title`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UttarnPradesh'),
(2, 'Madhya Pradesh'),
(3, 'Delhi'),
(4, 'Bihar');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_course` varchar(255) NOT NULL,
  `student_year` varchar(255) NOT NULL,
  `student_semester` varchar(255) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_roll` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_father_name` varchar(255) NOT NULL,
  `student_mother_name` varchar(255) NOT NULL,
  `student_family_phone` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_dob` varchar(255) NOT NULL,
  `student_city` varchar(255) NOT NULL,
  `student_state` varchar(255) NOT NULL,
  `student_address` varchar(255) NOT NULL,
  `student_pincode` varchar(255) NOT NULL,
  `student_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_gender`, `student_course`, `student_year`, `student_semester`, `student_department`, `student_roll`, `student_email`, `student_father_name`, `student_mother_name`, `student_family_phone`, `student_phone`, `student_dob`, `student_city`, `student_state`, `student_address`, `student_pincode`, `student_image`) VALUES
(1, 'Rakesh Kumar', '1', '3', '3', '6', '4', '121234', 'rakesh@gmail.com', '', '', '+918470010001', '8470010001', '12/04/1990', '7', '1', 'Vasundhara', '12345', 'smilingboy.jpg'),
(2, 'Sarika Yadav', '2', '1', '2', '4', '1', '1234534', 'sarika@gmail.com', '', '', '+918376986802', '8470010001', '15/07/1991', '2', '3', 'Vasundhara', '1234234', 'smilingFemaleStudent.jpg'),
(3, 'Harsh Agrwal', '1', '5', '1', '2', '2', '1234523', 'harsh@gmail.com', '', '', '+919191999776', '+12345679', '18/01/1992', '11', '1', 'Allahabad', '123456678', 'images (1).jpg'),
(4, 'Adveta Shah', '2', '4', '2', '3', '3', '12345656', 'adveta@gmail.com', '', '', '+5432167889', '+91927655689', '03/04/1994', '2', '3', 'Delhi', '98765458', 'o-FEMALE-STUDENTS-facebook.jpg'),
(5, 'Kaushal Jaiswal', '1', '8', '3', '6', '2', '123456765', 'kaushal@gmail.com', '', '', '+918376986802', '8376986802', '09/02/1996', '10', '1', 'Rajendra Nagar', '01131', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_department`
--

CREATE TABLE `student_department` (
  `department_id` int(11) NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `department_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_department`
--

INSERT INTO `student_department` (`department_id`, `department_title`, `department_description`) VALUES
(1, 'Computer Science', 'Computer Science'),
(2, 'Commerce', 'Commerce'),
(3, 'Mechanical', 'Mechanical'),
(4, 'Electrical', 'Electrical'),
(5, 'Arts', 'Arts'),
(6, 'Science', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `student_gender`
--

CREATE TABLE `student_gender` (
  `gender_id` int(11) NOT NULL,
  `gender_title` varchar(255) NOT NULL,
  `gender_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_gender`
--

INSERT INTO `student_gender` (`gender_id`, `gender_title`, `gender_description`) VALUES
(1, 'Male', 'Male'),
(2, 'Female', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `student_semester`
--

CREATE TABLE `student_semester` (
  `semester_id` int(11) NOT NULL,
  `semester_title` varchar(255) NOT NULL,
  `semester_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_semester`
--

INSERT INTO `student_semester` (`semester_id`, `semester_title`, `semester_description`) VALUES
(1, '1st', '1st'),
(2, '2nd', '2nd'),
(3, '3rd', '3rd'),
(4, '4th', '4th'),
(5, '5th', '5th'),
(6, '6th', '6th');

-- --------------------------------------------------------

--
-- Table structure for table `student_year`
--

CREATE TABLE `student_year` (
  `year_id` int(11) NOT NULL,
  `year_title` varchar(255) NOT NULL,
  `year_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_year`
--

INSERT INTO `student_year` (`year_id`, `year_title`, `year_description`) VALUES
(1, '1st', '1st'),
(2, '2nd', '2nd'),
(3, '3rd', '3rd'),
(4, '4th', '4th');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) NOT NULL DEFAULT '2',
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(7, '2', 'customer', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', '2', '1', '2', 'amit@gmail.com', '9324324546', '', '26 December,2015', 'doctor1.jpg'),
(8, '2', 'suman', 'test', 'Suman Singh', 'House no : 768', 'Sector 2A', '1', '2', '1', 'suman@gmail.com', '987654321', '', '13 January,1961', 'doctor3.jpg'),
(10, '2', 'manasa', 'test', 'Manasa', 'New Delhi', 'India', '2', '2', '1', 'manasa@gmail.com', '9876543212', '', '18 January,1968', 'doctor2.jpg'),
(16, '1', 'admin', 'test', 'Kaushal Kishore', 'House No : 355, Sector 23', 'Sector 2A', '1', '1', '1', 'kaushal.rahuljaiswal@gmail.com', '9567654565', '', '10 March,2016', 'Image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`fees_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_department`
--
ALTER TABLE `student_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `student_gender`
--
ALTER TABLE `student_gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `student_semester`
--
ALTER TABLE `student_semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `student_year`
--
ALTER TABLE `student_year`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `fees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_department`
--
ALTER TABLE `student_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_gender`
--
ALTER TABLE `student_gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_semester`
--
ALTER TABLE `student_semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_year`
--
ALTER TABLE `student_year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
