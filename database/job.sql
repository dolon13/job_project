-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:11 AM
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
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `jobid` varchar(200) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attempt`
--

CREATE TABLE `attempt` (
  `circularid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attempt`
--

INSERT INTO `attempt` (`circularid`, `email`) VALUES
('hello@gmail.comfront', 'nazmul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `email`, `title`, `content`) VALUES
(7, 'nazmul2@gmail.com', 'What is web development?', 'Web development is the process of building websites and apps for the internet—or for a private network known as an intranet. Web developers bring the design and functionality of a website to life, writing code that determines things like style, layout, and interactivity. From the most simple, static web pages to social media platforms and apps; from e-commerce websites to content management systems (like WordPress)—all the tools we use via the internet have been built by web developers. \r\n\r\nThere are three different types (or layers) of web development: The frontend, the backend, and database technology. Frontend development, otherwise known as client-side scripting, encompasses all the elements of a website that the user experiences directly. Things like layout, font, colors, menus, and contact forms are all powered by the frontend.\r\n\r\nBackend development, or server-side scripting, is all about what goes on behind the scenes. When you interact with a website in some way—for example, filling out a form and clicking “submit”—the frontend communicates this action to the backend. The backend responds by sending the relevant information to the frontend—for example, the code needed to display a message such as “Thank you for filling out this form”. \r\n\r\nThe third layer comprises database technology. The database contains all the files and content that are necessary for a website to function, storing it in such a way that makes it easy to retrieve, organize, edit, and save. \r\n\r\nThe frontend, backend, and database technology all work together to build and run a fully functional website or application. As such, these three layers form the foundation of web development. '),
(8, 'nazmul2@gmail.com', 'software', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `link`, `type`, `level`) VALUES
(1, 'HTML', 'https://www.youtube.com/watch?v=ADFDxhipgiI&list=PLgH5QX0i9K3oHBr5dsumGwjUxByN5Lnw3', 'web', 1),
(2, 'CSS', 'https://www.youtube.com/watch?v=FwmuhNTrJO4&list=PLgH5QX0i9K3qjCBXjTmv7Xeh8MDUUVJDO', 'web', 1),
(3, 'javascript', 'https://www.youtube.com/watch?v=xpP5L1NuMQU&list=PLgH5QX0i9K3qzryglMjcyEktz4q7ySunX', 'web', 1),
(4, 'React', 'https://www.youtube.com/watch?v=9IdczKQNg3o&list=PLgH5QX0i9K3rGtitufynBKMy5gAFpa1y8', 'web', 2),
(5, 'node.js|express.js', 'https://www.youtube.com/watch?v=WC-g0JtEIwM&list=PLHiZ4m8vCp9PHnOIT7gd30PCBoYCpGoQM', 'web', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `email` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `father` varchar(200) NOT NULL,
  `number` varchar(15) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `jobrole` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `jobposition` varchar(100) NOT NULL,
  `keyachivement` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`email`, `fname`, `lname`, `father`, `number`, `nationality`, `jobrole`, `address`, `experience`, `companyname`, `jobposition`, `keyachivement`, `date`, `img`) VALUES
('nazmul@gmail.com', 'Md. Nazmul', 'Huda', 'Nurul Islam', '01800000000', 'Bangladeshi', 'software_engineer', 'sdasdfasfasdf', '0', 'N/A', 'N/A', 'n/a', '2001-11-13', 'nazmul@gmail.comimages (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `email` varchar(100) NOT NULL,
  `courseid` varchar(50) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `companyName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `circularId` varchar(20) NOT NULL,
  `circularTitle` varchar(50) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `shortDesc` varchar(300) NOT NULL,
  `fullDesc` varchar(1000) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`companyName`, `email`, `circularId`, `circularTitle`, `skill`, `shortDesc`, `fullDesc`, `type`, `time`, `mark`) VALUES
('helloIT', 'hello@gmail.com', 'hello@gmail.comfront', 'front end developer', 'html, css, javascript', 'fjkasdflkjasdfj', 'kasjdfklasdjfisdjfakdsjfaldfjklkadsjfjkdsfsdfasdf', 'web', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `acctype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`name`, `email`, `pass`, `address`, `acctype`) VALUES
('helloIT', 'admin@gmail.com', 'faf', 'asdfasdfasdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `circularId` varchar(20) NOT NULL,
  `question` varchar(200) NOT NULL,
  `A` varchar(50) NOT NULL,
  `B` varchar(50) NOT NULL,
  `C` varchar(50) NOT NULL,
  `D` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`circularId`, `question`, `A`, `B`, `C`, `D`, `ans`) VALUES
('hello@gmail.comfront', 'Which of the following languages is primarily used for styling web pages?', 'JavaScript', 'Python', 'HTML', 'CSS', 'CSS'),
('hello@gmail.comfront', 'What does CSS stand for?', 'Creative Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets', 'Central Style Sheets', 'Cascading Style Sheets'),
('hello@gmail.comfront', 'Which of the following is NOT a valid HTML tag?', 'header', 'div', 'section', 'paragraph', 'paragraph'),
('hello@gmail.comfront', 'What does HTML stand for?', 'Hyper Text Markup Language', 'High Tech Markup Language', 'Hyperlinks and Text Markup Language', 'Home Tool Markup Language', 'Hyper Text Markup Language'),
('hello@gmail.comfront', 'Which of the following is a JavaScript framework for building user interfaces?', 'jQuery', 'Django', 'React', 'Flask', 'React'),
('hello@gmail.comfront', 'What does API stand for in web development?', 'Advanced Programming Interface', 'Application Programming Interface', 'Advanced Protocol Integration', 'Automated Program Integration', 'Application Programming Interface'),
('hello@gmail.comfront', 'Which of the following is NOT a type of HTTP request method?', 'GET', 'POST', 'PUSH', 'DELETE', 'PUSH'),
('hello@gmail.comfront', 'Which of the following is NOT a commonly used relational database management system (RDBMS)?', 'MySQL', 'MongoDB', 'PostgreSQL', 'SQLite', 'MongoDB'),
('hello@gmail.comfront', 'Which of the following is used to make a website responsive to different screen sizes?', 'JavaScript', 'HTML', 'CSS Media Queries', 'PHP', 'CSS Media Queries'),
('hello@gmail.comfront', 'What is the purpose of a \"DOCTYPE\" declaration in HTML?', 'It specifies the version of HTML being used.', 'It defines the character encoding of the document.', 'It triggers browser compatibility mode.', 'It declares the document type and root element.', 'It declares the document type and root element.'),
('1', 'Which of the following languages is primarily used for styling web pages?', 'JavaScript', 'Python', 'HTML', 'CSS', 'CSS'),
('1', 'What does CSS stand for?', 'Creative Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets', 'Central Style Sheets', 'Cascading Style Sheets'),
('2', 'Which of the following is used to make a website responsive to different screen sizes?', 'JavaScript', 'HTML', 'CSS Media Queries', 'PHP', 'CSS Media Queries'),
('2', 'What is the purpose of a \"DOCTYPE\" declaration in HTML?', 'It specifies the version of HTML being used.', 'It defines the character encoding of the document.', 'It triggers browser compatibility mode.', 'It declares the document type and root element.', 'It declares the document type and root element.');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tq` int(11) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `name`, `tq`, `type`) VALUES
(1, 'web development', 2, 'web'),
(2, 'software development', 2, 'se');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `name` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `email` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`email`, `id`, `result`) VALUES
('nazmul@gmail.com', 1, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `DOB` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `acctype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pass`, `description`, `number`, `address`, `DOB`, `img`, `acctype`) VALUES
('evan', 'evan@gmail.com', 'evan', 'sdklfjakdfjaksdjf', 'dsklfjaldfk', 'jdfaljksdfasdjfsf', '2024-05-06', 'karim.png', 'individual'),
('helloIT', 'hello@gmail.com', 'hello', 'N/A', '01800000000', 'fklasjdflkasdjfklasj', 'N/A', 'images (1).jpg', 'organization'),
('Nazmul', 'nazmul2@gmail.com', 'Nazmul', 'N/A', '01835827280', 'Dhaka', '1999-11-13', 'N/A', 'admin'),
('Nazmul', 'nazmul@gmail.com', 'nazmul', 'SDFASDFASG', 'kjfajasdflk', 'dlkfjasd;fljk', '2001-11-13', 'karim.png', 'individual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`circularId`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
