-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2018 at 12:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Gre_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `rank` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `overview` varchar(300) NOT NULL,
  `website` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`rank`, `name`, `overview`, `website`) VALUES
(1, 'Computer Science', 'Computer Science (CS) offers a lot many further specialisations for the students to choose from. You could choose among Algorithms, Computational Geometry, Artificial Intelligence, Computational Biology, Bioinformatics, Computer Architecture, Databases, Data Mining, Graphics, High Performance Comput', 'https://en.wikipedia.org/wiki/'),
(2, 'Embedded Systems', 'MS in Embedded Systems is the specialisation in demand by students from Electronics and Electrical background. B.tech/BE in ECE, EEE, Computers Students can opt this major. A specialized computer system is part of a larger system or machine. Typically, an embedded system is housed on a single microp', 'https://en.wikipedia.org/wiki/'),
(3, 'Wireless Communications', 'MS and PhD programs in Wireless communication deal with physical and lower layers of wireless communication. These courses provide in-depth system knowledge, which in turn requires insights into the various components in a wireless system.', 'https://en.wikipedia.org/wiki/');

-- --------------------------------------------------------

--
-- Table structure for table `Universities`
--

CREATE TABLE `Universities` (
  `rank` int(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL,
  `website` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Universities`
--

INSERT INTO `Universities` (`rank`, `name`, `address`, `review`, `website`) VALUES
(2, ' Stanford University', ' 450 Serra Mall, Stanford, CA 94305, USA', 'The campus is beautiful to start and provides many beautiful areas for studying or hanging out with friends. The campus is full of amazing resources including the libraries and professors. The academics are definitely challenging, but worth it. Go Card!\r\n\r\nWhat I love about Stanford is the resources that it has especially for students who are first generation or low income. It has way more resources than many other colleges I know. One downfall of Stanford is its lack of diversity which is appar', 'https://www.stanford.edu/'),
(3, 'Harvard University', 'Cambridge, MA 02138, USA', 'Harvard University offers the most incredible experience for its students. From the rich history to the esteemed faculty to the vibrant atmosphere of Harvard Square, it is truly one of a kind and inspiring. During my time at Harvard, I got to dance to Gangnam Style with Psy, read a Gutenberg Bible, study and work under my hero, perform fMRIs, and eat brunch in what is essentially the Great Hall of Hogwarts.\r\n\r\nust a preppy college full of sweaty nerds, whats new! This college is nice and all but', 'https://www.harvard.edu/'),
(1, 'Massachusetts Institute of Technology (MIT)', 'Cambridge, Massachusetts, USA', 'There were some crucial facts about MIT which made me to apply to it. Here are they:\r\n1. My first choice is chemical engineering and I always adored to conduct researches in laboratories. Therefore, when I applied to colleges first of all I looked if they have a good undergraduate research opportunities. In MIT with the help UROP I could start researching even from freshman class.\r\n2. Its pass no record style of educating freshmen. There is no grading in the first semester. Instead, one gets \"Pa', 'https://www.mit.edu/'),
(6, 'University of Oxford', 'Oxford OX1 2JD, UK', 'My children love going to school each day. The faculty and staff are experienced and nurturing and inspire the students to be good citizens. The small classes are beneficial to individualized learning.\r\nGreat school. Sad to see it get bullied on the internet by one bad set off parents. Go visit for yourself.', 'www.ox.ac.uk');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_name` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `university` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `degree` varchar(40) NOT NULL,
  `college` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_name`, `password`, `first_name`, `last_name`, `email`, `university`, `course`, `degree`, `college`) VALUES
('dhruvb', '4c7a34d25eff9121c49658dbceadf694', 'Dhruv', 'Bhagadia', 'db@gmail.com', 'MU', 'Comps', 'BE', 'D.J'),
('rutug', '4c7a34d25eff9121c49658dbceadf694', 'Rutu', 'Gujjar', 'rutu@gujjar.com', 'Autonoumous', 'Comps', 'Btech', 'VJTI'),
('varshac', '4c7a34d25eff9121c49658dbceadf694', 'varsha', 'chamaria', 'db@edu.ac.in', 'MU', 'Comps', 'BE', 'SPIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `Universities`
--
ALTER TABLE `Universities`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `website` (`website`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
