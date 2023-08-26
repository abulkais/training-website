-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 03:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kvchin_blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `meta_keywords` text COLLATE utf8_unicode_ci,
  `canonical_link` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `meta_description`, `meta_keywords`, `canonical_link`, `slug`, `category_id`, `user_id`, `post_image`, `body`, `status`, `created_at`) VALUES
(16, 'LIVE PROJECT BASED CLOUD COMPUTING TRAINING IN NOIDA', 'Are you looking for Best Cloud Computing training in Noida. KVCH offering best Cloud Computing training institute Noida, Cloud Computing training company in Noida, Cloud Computing training course & Classes in noida center for BCA/MCA/B.Tech/B.Sc(CS/IT).', 'cloud training in noida, learn cloud computing, Cloud Computing training course, Cloud Computing training and certification in noida, Cloud Computing course, Cloud Computing training, Cloud Computing training in noida, Cloud Computing certification training in noida, Cloud Computing training course in noida, Cloud Computing training course in noida, Cloud Computing classes in noida', 'http://localhost:8080/blogs/live-project-based-cloud-computing-training-in-noida', 'live-project-based-cloud-computing-training-in-noida', 1, 1, 'cloud.jpg', '<p><strong>Cloud Computing</strong>&nbsp;is a system for delivering Information Technology (IT) services in which information is retrieved from the internet through web-based applications and tools rather than a direct connection to the server. Cloud based storage makes it possible to save files on a remote database instead of keeping files on a proprietary hard drive or local storage device. It becomes easy to access data and software programs, as long as an electronic device has access to the web.&nbsp;</p>\r\n\r\n<p><strong>It is known as cloud computing as the information being retrieved is found in a so called &ldquo;cloud&rdquo;</strong>. Therefore, a user need not be in a specific location to gain access to the information. Cloud Computing enables users to store files and applications on remote servers, and they can access all the data via internet.</p>\r\n\r\n<p>Essentially, Cloud Computing is the concept of taking all the heavy work of crunching and processing the data away from the electronic device you carry around, or sit and, work at and moving that work to huge computer bundles far away in cyberspace. The cloud computing market is expected to reach a huge amount of $191 Billion by the year 2020, according to a research conducted by a business management consultant firm. Thus, there is a huge scope of Cloud Computing in the coming years in the IT industry.</p>\r\n\r\n<p><strong>KVCH</strong>&nbsp;is one the leading Training service providers in Noida rendering&nbsp;<strong>Cloud Computing Training</strong>&nbsp;services according to the current industry requirements which enables one to land their dream job in the top companies worldwide. KVCH is an eminent company in the field of training services along with being the best Cloud Computing Training provider in the industry. One is able to gain practical knowledge through live project training and in-depth knowledge of various modules and concepts of Cloud Computing Training ranging from basic to advanced level at&nbsp;<strong>KVCH Noida</strong>.&nbsp;<strong>Training at KVCH Noida</strong>&nbsp;is supervised and managed by corporate experts having more than 10 years of experience in live project training. We provide both theoretical and pratical sessions which enables one to learn how to face and tackle the difficulties they may face when they enter the reality of the IT sector.</p>\r\n\r\n<p>The course curriculum for&nbsp;<strong>Cloud Computing</strong>&nbsp;has been designed by technology experts which instigates professionalism among trainees which they they can apply in their chosen field of work. Course content includes Cloud Computing Overview and History, Cloud Computing Fundamentals, Managing and Securing Cloud Services, Working with Cloud-Based Storage, Cloud computing on real time projects along with Cloud computing placement training.</p>\r\n\r\n<p>We train thousands of students every year from around the globe in Cloud Computing according to the different needs and requirements of each and everyone. KVCH Noida, we believe in providing our students with an ideal environment for training. Therefore, KVCH has a great infrastructure with newly designed labs which enables trainees to pursue and practice multiple courses.</p>\r\n\r\n<p>At KVCH we believe in practice what you preach thus&nbsp;<strong>Cloud Computing Certification Training</strong>&nbsp;involves a &ldquo;Hands on experience&rdquo; which enables each trainee to practically conduct each and every concept discussed in the sessions conducted by our dedicated technology experts.</p>\r\n\r\n<p>We provide 100% placement assistance for all which helps trainees to get placed in top companies worldwide. We conduct sessions on all weekdays of the day and special session can also be scheduled on weekends.We also provide fast track training programs for students and working professionals looking to upgrade themselves instantly.</p>\r\n', 0, '2019-01-24 09:57:12'),
(17, 'LIVE PROJECT BASED PHP TRAINING IN NOIDA', 'Are you looking for Best PHP training in Noida. KVCH offering best PHP training institute Noida, PHP training company in Noida, PHP training course & Classes in noida center for BCA/MCA/B.Tech/B.Sc(CS/IT).', 'Php training course, Php training and certification in noida, Php course, Php training, Php training in noida, Php certification training in noida, Php training course in noida, Php training course in noida, Php classes in noida, Best php programming course in noida', 'http://localhost:8080/blogs/live-project-based-php-training-in-noida', 'live-project-based-php-training-in-noida', 1, 1, 'php.jpg', '<p><a href="https://kvch.in/"><strong>KVCH</strong></a>&nbsp;is the pioneer of education providing the&nbsp;<strong>best PHP training in&nbsp;Noida</strong>&nbsp;as per the current industry requirement that enables candidates to land on their dream jobs in companies worldwide. KVCH Provides&nbsp;<strong>best PHP training course in Noida</strong>. KVCH is a renowned training company providing the best training service and also being the&nbsp;<strong>best PHP training institute in Noida</strong>&nbsp;rendering practical knowledge through training on projects and a dedicated placement assistance for all. The course curriculum for&nbsp;<strong>PHP training course</strong>&nbsp;is designed to provide in-depth knowledge that covers all the modules for the training ranging from basic to advanced level. At KVCH&nbsp;<strong>PHP training in Noida</strong>&nbsp;is supervised and managed by industrial experts having more than 10 years of experience in handling PHP projects. KVCH training comprises of both classroom as well as practical sessions to deliver an ideal environment for students that will enable them to handle difficult and complex situation when they would step into the reality of IT sector.</p>\r\n\r\n<p><strong>KVCH</strong>&nbsp;is the&nbsp;<strong>best PHP training center in Noida</strong>&nbsp;with high tech infrastructure aspirants learn the skills for PHP that comprises of PHP Fundamentals, Why PHP, Key Skills for PHP, HTML, CSS, JavaScript, Database, MySQL, jQuery &amp; Ajax, frameworks, PHP on real time projects along with&nbsp;<strong>PHP placement training</strong>.&nbsp;<strong>PHP certification training in Noida</strong>has been planned out under the guidance of the leaders of MNC&rsquo;s to provide the best extensive knowledge of PHP with the&nbsp;<strong>advanced PHP course</strong>&nbsp;content and syllabus. The course structure is constructed by the technology experts that will help in facilitating professionalism in students and also further down the line , the&nbsp;<strong>PHP training program</strong>&nbsp;will help them achieve their goal and to get placed in MNC and Big corporations.</p>\r\n\r\n<p>KVCH is an excellent&nbsp;<strong>PHP training center in Noida</strong>&nbsp;with superior integrated infrastructure and newly designed labs for students to practice and pursue training for multiple courses at Noida. KVCH&nbsp;<strong>institute</strong>&nbsp;in Noida train thousands of students around the globe every year for the&nbsp;<strong>PHP training</strong>&nbsp;at an affordable price which is customised as per each candidate&rsquo;s requirement of modules and content.</p>\r\n\r\n<p><strong>PHP training course</strong>&nbsp;involves &quot;Hands-on experience&quot;, we believe in practice what you preach and therefore each candidate is encouraged to practically conduct each topic that is discussed for better understanding of real-world scenar PHP. This practice of comprehensive training allows candidate to gain all the concepts and skills effectively and to later efficiently apply on their field of work.</p>\r\n', 0, '2019-01-24 10:44:01'),
(18, 'LIVE PROJECT BASED ANDROID TRAINING IN NOIDA', 'The Best Android training in noida provided by KVCH. Andriod OS & apps Development Training Courses & Classes in Noida deliver by KVCH Corporate trainers with Android Real time Projects', 'android app development course, android application course, Android training course, Android training and certification in noida, Android course, Android training, Android training in noida, Android certification training in noida, Android training course in noida, Android training course in noida, Android classes in noida', 'http://localhost:8080/blogs/live-project-based-android-training-in-noida', 'live-project-based-android-training-in-noida', 1, 1, 'android.jpg', '<p><strong>Android</strong>&nbsp;is a mobile operating system originated by Google. It is based on a transformed version of Linux Kernel and other open source software. It was originally designed for touchscreen mobile devices such as smartphones and tablets. Android has been the best selling OS worldwide since 2011. It has more than two billion monthly active users and the largest installed base of any operating system.</p>\r\n\r\n<p><strong>KVCH</strong>&nbsp;is one of the frontrunners in providing the&nbsp;<strong>Best Android Training in Noida</strong>. We provide the&nbsp;<strong>Best Training in Noida</strong>&nbsp;for Android as per the industry requirements so that candidates can land their dream jobs in companies worldwide. KVCH is a well-renowned training company providing the&nbsp;<strong>Best Android Training in Noida</strong>&nbsp;through its live project training and a dedicated placement cell for all. This is an instructor-led program which is designed to provide in-depth knowledge that covers all modules extending from basic to advanced level. The training is provided by industrial experts having more than 10 years experience in live project training. KVCH provides both onsite and offsite training which enables students to have an ideal environment so that they can tackle difficult situations when they enter the IT sector.</p>\r\n', 0, '2019-01-24 11:43:06'),
(20, 'LIVE PROJECT BASED NODE JS TRAINING IN NOIDA', 'Are you looking for Best node js training in Noida. KVCH offering best node js training institute Noida, node js training company in Noida, node js training course & Classes in noida center for BCA/MCA/B.Tech/B.Sc(CS/IT).', 'Node Js training, Node Js Course, Node Js training and certification in noida, Node Js training in noida, Node Js certification training in noida, Node Js training course in noida, Node Js training course in noida, Node Js classes in noida', 'http://localhost:8080/blogs/live-project-based-node-js-training-in-noida', 'live-project-based-node-js-training-in-noida', 1, 1, 'node-js.png', '<p><strong>Node JS</strong>&nbsp;is an opensource Javascript runtime environment which helps to execute Javascript code server side. Primarily, Javascript was used for client-side scripting in which scripts written in Javascript were attached to a webpage&#39;s HTML and run client-side by a Javascript engine in the user&#39;s web browser. Node JS enables developers to use Javascript for server-side scripting which means sending running scripts server-side to produce dynamic web-page content before the page is sent to user&#39;s web browser.</p>\r\n\r\n<p>Training in Node JS would enable you to land jobs in this ever-changing IT Industry. There is a high demand for Node JS according to the current market requirements.</p>\r\n\r\n<p><strong>KVCH</strong>&nbsp;is one of the eminent training providers in the industry offering Node JS training.&nbsp;<strong>Node JS training</strong>&nbsp;provided at KVCH Noida is designed according to the present industry requirements which enable students to land their dream jobs in the top companies of the world. KVCH is a prominent name in the training services industry especially in Node JS training. The course curriculum ranging from basic to advanced level has been designed such that it provides practical knowledge and in-depth understanding of the various modules and content as part of the Nodes JS training. At KVCH Noida, Nodes JS training is conducted by industrial experts having more than 10 years of experience in live project training. This training comprises of both theoretical as well as practical sessions which will enable students to learn how to tackle complex and difficult situations when they enter the reality of the IT sector.</p>\r\n', 0, '2019-01-28 05:22:03'),
(21, 'LIVE PROJECT BASED ROBOTICS WITH AVR AND ARM7 TRAINING IN NOIDA', 'Are you looking for Best Robotics with AVR and ARM7 training in Noida. KVCH offering best Robotics with AVR and ARM7 training institute Noida, Robotics with AVR and ARM7 training company in Noida, Robotics with AVR and ARM7 training course & Classes in noida center for BCA/MCA/B.Tech/B.Sc(CS/IT).', 'Robotics AVR ARM7 training course, Robotics AVR ARM7 training and certification in noida, Robotics AVR ARM7 course, Robotics AVR ARM7 training, Robotics AVR ARM7 training in noida, Robotics AVR ARM7 certification training in noida, Robotics AVR ARM7 training course in noida, Robotics AVR ARM7 training course in noida, Robotics AVR ARM7 classes in noida', 'http://localhost:8080/blogs/live-project-based-robotics-with-avr-and-arm7-training-in-noida', 'live-project-based-robotics-with-avr-and-arm7-training-in-noida', 1, 1, 'robotics.jpg', '<h1><strong>Robotic Process Automation</strong>&nbsp;refers to the use of software with Artificial Intelligence and Machine learning abilities to handle large volume, repetitive tasks that generally required human performance. These activities may include calculations, queries, and maintenence of records and transactions. Instead of being a part of an organization&#39;s IT infrastructure, it sits on top of it and helps the company to implement the technology effectively and efficiently &ndash; all without changing the existing system and infrastructure.</h1>\r\n', 0, '2019-01-28 05:24:52'),
(22, 'LIVE PROJECT BASED DIGITAL MARKETING TRAINING IN NOIDA', 'Are you looking for Best Digital Marketing training in Noida. KVCH offering best Digital Marketing training institute Noida, Digital Marketing training company in Noida, Digital Marketing training course & Classes in noida center for BCA/MCA/B.Tech/B.Sc(CS/IT).', 'Digital Marketing training course, Digital Marketing training and certification in noida, Digital Marketing course, Digital Marketing training, Digital Marketing training in noida, Digital Marketing certification training in noida, Digital Marketing training course in noida, Digital Marketing training course in noida, Digital Marketing classes in noida', 'http://localhost:8080/blogs/live-project-based-digital-marketing-training-in-noida', 'live-project-based-digital-marketing-training-in-noida', 1, 1, 'digital.jpg', '<p><span style="color:#e74c3c"><strong>Digital Marketing</strong></span>, in a nutshell, can be described as any form of marketing which is done online. It means that it is a form of marketing of any products or services using digital technologies, generally on the Internet, but it also includes other digital mediums like display advertising, mobile phones etc. Digital Marketing has been developing over the years, which has changed the way businesses and companies use digital means and technology for marketing. Nowadays, digital platforms are being increasingly incorporated into marketing strategies and everyday lives.</p>\r\n', 0, '2019-01-28 05:29:50');

-- --------------------------------------------------------

--
-- Table structure for table `site_config`
--

CREATE TABLE `site_config` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) NOT NULL,
  `logo_img` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_config`
--

INSERT INTO `site_config` (`id`, `site_name`, `logo_img`, `site_title`) VALUES
(1, 'E commerce Site', 'yadi-ci-logo.png', 'E commerce Site');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `username`, `contact`, `address`, `gender`, `image`, `role_id`, `zipcode`, `dob`, `status`, `register_date`) VALUES
(1, 'Administrator', 'ritesh.sisgain@gmail.com', '4136e1f503a0a72c8098a09352a5de92', 'yadu', '9898989898', 'Admin Nagar', 'Male', 'Tulips.jpg', 1, '23232', '1990-08-03', 1, '2019-01-23 06:20:13'),
(4, 'Yadu nandan', 'ynandan55@yahoo.com', 'f925916e2754e5e03f75dd58a5733251', 'yadu123', '9898989898', 'durga nagar asas', 'Male', 'slide_05.jpg', 2, '23232', '1990-08-03', 1, '2017-08-09 18:49:15'),
(8, 'Astha Sharma', 'itech1694astha@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 'astha123', '9898989898', 'Tikamgarh', 'Female', 'bd2_6f5_636_330-1-original.jpg', 2, '454545', '1990-08-03', 1, '2017-08-09 18:51:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
