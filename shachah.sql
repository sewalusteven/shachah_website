-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2019 at 05:04 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shachah`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `status` tinyint(9) NOT NULL DEFAULT '0',
  `tmp_name` varchar(95) DEFAULT NULL,
  `isactive` tinyint(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`admin_id`, `fullname`, `email`, `phone`, `username`, `password`, `status`, `tmp_name`, `isactive`, `created`) VALUES
(1, 'Mukasa Steven', 'sewalusteven@gmail.com', '0793934065', 'ssewalu', '$2a$08$5G1mIYNCc3O0hb6PfNUFqeMa2.AlFbOo0JvbmWg8rk.ajnxCyfnOC', 1, '8ddafc46f436b41014aa2433b8c87839.jpg', 1, '2019-10-22 09:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--

CREATE TABLE `adminlogs` (
  `log_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `log` varchar(95) DEFAULT NULL,
  `explanation` varchar(485) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogs`
--

INSERT INTO `adminlogs` (`log_id`, `admin_id`, `log`, `explanation`, `link`, `created`) VALUES
(1, 1, 'New web content has been added', 'Mukasa Steven added Core Curriculum article', '/content', '2019-10-22 10:42:14'),
(2, 1, 'New web content has been added', 'Mukasa Steven added Character Development article', '/content', '2019-10-22 10:43:20'),
(3, 1, 'New web content has been added', 'Mukasa Steven added Our Aim article', '/content', '2019-10-22 10:44:14'),
(4, 1, 'New web content has been added', 'Mukasa Steven added Welcome by the Principle article', '/content', '2019-10-22 10:46:54'),
(5, 1, 'New web content has been added', 'Mukasa Steven added Registration Main School article', '/content', '2019-10-22 10:49:12'),
(6, 1, 'New web content has been added', 'Mukasa Steven added Meet the Staff article', '/content', '2019-10-22 11:05:07'),
(7, 1, 'New web content has been added', 'Mukasa Steven added Parent Orientation article', '/content', '2019-10-22 11:06:16'),
(8, 1, 'New web content has been added', 'Mukasa Steven added What is a christian school article', '/content', '2019-10-22 11:54:13'),
(9, 1, 'New web content has been added', 'Mukasa Steven added How is Christ-centred education different? article', '/content', '2019-10-22 11:58:20'),
(10, 1, 'New web content has been added', 'Mukasa Steven added Is it a broad Education ? article', '/content', '2019-10-22 11:58:56'),
(11, 1, 'New web content has been added', 'Mukasa Steven added Is it academic? article', '/content', '2019-10-22 11:59:32'),
(12, 1, 'New web content has been added', 'Mukasa Steven added Are we equipping students for a harsh world article', '/content', '2019-10-22 12:00:23'),
(13, 1, 'New web content has been added', 'Mukasa Steven added What is the scriptural foundation for Christ-centered education? article', '/content', '2019-10-22 12:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `details` mediumtext,
  `tmp_name` varchar(225) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `contact` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `category`, `contact`) VALUES
(1, 'Phone', '0414 669825'),
(2, 'Phone 2', '0772 350 893');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `ctype_id` int(11) DEFAULT NULL,
  `title` varchar(225) DEFAULT NULL,
  `details` mediumtext,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `admin_id`, `ctype_id`, `title`, `details`, `created`) VALUES
(1, 1, 2, 'Core Curriculum', '<p>We have chosen the proven Accelerated Christian Education (ACE) Program as our core curriculum, to equip parents and educate students. Founded in 1970, the ACE Program is an individualised programme, tailored to each pupil’s level of learning<br></p>', '2019-10-22 10:42:13'),
(2, 1, 2, 'Character Development', '<p>Bible truths and Character training is interwoven into the core curriculum, developing critical thinking and apologetic skills, and science is taught from the Biblical perspective of creation. Children are taught core values and principles to provide them a strong foundation for life. They learn about sixty character traits of Christ through both our daily assemblies and the core curriculum and are encouraged to put these into practice throughout the day<br></p>', '2019-10-22 10:43:20'),
(3, 1, 2, 'Our Aim', '<p>Our primary aim is to support children to learn in an environment that agrees with the home. An environment where Jesus is honored and the children can grow in a loving and positive atmosphere, where they are encouraged to develop a Christ-like character springing from a heart surrendered to Jesus<br></p>', '2019-10-22 10:44:14'),
(4, 1, 2, 'Welcome by the Principle', '<p>Shachah Christian Academy using the ACE curriculum started as a home school in 2013&nbsp; and finally fully registered with Accelerator education enterprise in 2017 to become a full school with a deeper conviction to partner with&nbsp; parents who wanted to fulfill their God-given responsibility to educate their children, by providing a Bible-based education, that taught God as Creator, knowing that “the fear of the Lord is the beginning of wisdom, and knowledge of the Holy One is understanding.” (Proverbs 9:10)</p><p>The school is growing, and welcomes children aged 3 to 18.&nbsp; We live in exciting and fast changing times and this means that providing an outstanding, biblically founded and well-rounded education is more important than ever.&nbsp; Students are supported to show ambition both within and beyond the classroom.</p><p>I believe that our opportunity to support parents in education is a rare privilege, bringing with it a huge responsibility to provide the best all-round education possible as we aim to prepare young people for fulfilled adult life.&nbsp; &nbsp;We take this responsibility extremely seriously.&nbsp; We care about each student and reinforce the Christian family values of the home, building wisdom, fostering respect and encouraging good discipline.&nbsp; Our staff/student ratio is very good, and so we can take time with each child, getting to know them individually and helping them with their work and growth in character.&nbsp; Whilst we aim for academic excellence, we emphasize godly character above all, equipping students for their future role and God’s plan for their life.</p><p>School should be fun and happy children are more likely to be successful.&nbsp; We see it as our responsibility to bring out our students’ God-given talents, to broaden their interests and to develop their personal qualities. To do this we aim to foster confidence, perseverance, love and integrity; to enhance communication skills; to embrace creativity; to encourage teamwork; and to promote a Christ-minded and outward-looking mentality so that students are ready for a full and productive Christian life, for the glory of Him.</p><p>I hope you share the vision for Christian education and will want to embrace it for your family. I look forward to the opportunity to meet you.<br></p>', '2019-10-22 10:46:54'),
(5, 1, 2, 'Registration', '<p>If, following your visit(s) you feel that Shachah Chrisitian Academy&nbsp; is the right school for your child, the next stage in the admissions process is to schedule a meeting with the principal, the parent/carer and child will be invited to attend an interview with him.</p><p>Following a successful interview,&nbsp; a payment of the admission and diagnostic tests for students above 5 years and date to do the diagnostic tests will be agreed upon.</p><p>Entrance is not based on IQ, achievement, or ability, but once a student has become registered we will carry out a set of assessments to enable us to start them off at the exact stage of learning appropriate to their needs. The unique ACE curriculum allows every child to do this. It also enables us to start an individual learning plan, allowing parents to see the stages we will expect their child to reach.</p><p>The Principal will remain in touch with you at every stage to guide you through the admissions process</p>', '2019-10-22 10:49:11'),
(6, 1, 3, 'Meet the Staff', '<p>We are privileged to have an amazing team of people working together in a variety of different ways to enrich every child’s experience of life at Shachah Christian Academy.</p><p>We have two main entry points into the School: The Vine Christian Preschool (3 years) and Reception (rising 5 years) but students are welcome to join at any point provided there is space in the appropriate class.&nbsp;</p><p>Children join Shachah Christian Academy Preschool once they have reached their third birthday (Step by Step) and remain in Preschool until the year in which they turn 5, when they join the Reception class depending on their reading progress.</p><p>Please do bear in mind that if you plan to enroll your child who has previously been using another curriculum , then they will find the transition to our ACE curriculum easiest the sooner they move over but those 5 years and above are subject to diagnostic tests to place them at their level.</p><p>We host open days on appointment every term with a chance to meet the principal, current staff and students in their learning centers. Please contact me via telephone or email.&nbsp;&nbsp;</p><p>Prospective parents and students are warmly invited to pop in and visit the school at any time subject to prior arrangement with the school office. We will endeavor to give you as much time as possible to tour the school, meet our principal, and ask any questions you may have about the education and life of the school.</p>', '2019-10-22 11:05:07'),
(7, 1, 3, 'Parent Orientation', '<p>Please note that as part of their contract with the school, Parents/Careers are required to attend a Parent Orientation, typically spread over every two years, to cover a wide range of updates.&nbsp; These are in addition to the usual parent/supervisor meetings to review individual learner’s progress.<br></p>', '2019-10-22 11:06:16'),
(8, 1, 1, 'What is a christian school', '<p>A. Our school is one in which God and His word takes central place. We seek to know God’s world as well as His word. After all, creation is held together in Christ, so no subject, scientific or artistic, can be separated from His revelation of Himself. e.g. History is just His-story and should be taught as the unfolding of God’s purposes in the world.<br></p>', '2019-10-22 11:54:13'),
(9, 1, 1, 'How is Christ-centred education different?', '<p>A. The whole curriculum and way of looking at the world is based on Biblical principles, i.e. the world is God’s and was made by God. He has a plan and purpose for each person in it, all of whom are uniquely loved by Him. We measure our teaching against God’s word, and show students how His word applies to everyday life<br></p>', '2019-10-22 11:58:20'),
(10, 1, 1, 'Is it a broad Education ?', '<p>A. Yes, we present students with the world in all its aspects, a full range of academic subjects as well as sport, music, art, drama and more.<br></p>', '2019-10-22 11:58:56'),
(11, 1, 1, 'Is it academic?', '<p>A. Yes it is academic as each child is helped to use their God-given giftings to reach their full potential, leading to qualifications at General level, equivalent to GCSE level and Advance level, equivalent to A levels<br></p>', '2019-10-22 11:59:31'),
(12, 1, 1, 'Are we equipping students for a harsh world', '<p>A. We believe we are giving students a sound Christian grounding to best prepare them to take their own God-ordained place in society, rather than putting our untrained, vulnerable children there. We are teaching students to see the world from God’s point of view, and to make their own decisions, knowing how God would have them handle difficult issues.<br></p>', '2019-10-22 12:00:23'),
(13, 1, 1, 'What is the scriptural foundation for Christ-centered education?', '<p>A. The following passages provide a helpful starting point. You may like to look further into these Scriptures for yourself:</p><p>In whom are hid all the treasures of wisdom and knowledge … As ye have therefore received Christ Jesus the Lord, so walk ye in him: Rooted and built up in him, and established in the faith, as ye have been taught, abounding therein with thanksgiving. Beware lest any man spoil you through philosophy and vain deceit, after the tradition of men, after the rudiments of the world, and not after Christ. – Colossians 2:3, 6-8&nbsp;</p><p>The fear of the LORD is the beginning of wisdom: a good understanding have all they that do his commandments: his praise endureth for ever. – Psalms 111:10</p><p>And thou shalt love the LORD thy God with all thine heart, and with all thy soul, and with all thy might. And these words, which I command thee this day, shall be in thine heart: And thou shalt teach2 them diligently unto thy children, and shalt talk of them when thou sittest in thine house, and when thou walkest by the way, and when thou liest down, and when thou risest up. – Deuteronomy 6:5-7</p><p>Therefore whosoever heareth these sayings of mine, and doeth them, I will liken him unto a wise man, which built his house upon a rock: And the rain descended, and the floods came, and the winds blew, and beat upon that house; and it fell not: for it was founded upon a rock. And every one that heareth these sayings of mine, and doeth them not, shall be likened unto a foolish man, which built his house upon the sand: And the rain descended, and the floods came, and the winds blew, and beat upon that house; and it fell: and great was the fall of it. – Matthew 7:24-27</p><p>A Song of degrees for Solomon. Except the LORD build the house, they labour in vain that build it: except the LORD keep the city, the watchman waketh but in vain. – Psalms 127:1</p><p>And, ye fathers, provoke not your children to wrath: but bring them up in the nurture and admonition of the Lord. – Ephesians 6:4</p><p>The fear of the LORD is the beginning of knowledge: but fools despise wisdom and instruction. – Proverbs 1:7</p><p>Train up a child in the way he should go: and when he is old, he will not depart from it. – Proverbs 22:6</p>', '2019-10-22 12:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `content_type`
--

CREATE TABLE `content_type` (
  `ctype_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content_type`
--

INSERT INTO `content_type` (`ctype_id`, `type`) VALUES
(1, 'FAQs'),
(2, 'Home'),
(3, 'About');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name` varchar(415) DEFAULT NULL,
  `when` date DEFAULT NULL,
  `description` mediumtext,
  `tmp_name` varchar(95) DEFAULT NULL,
  `istype` varchar(45) DEFAULT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gcategory_id` int(11) DEFAULT NULL,
  `name` varchar(95) DEFAULT NULL,
  `tmp_name` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gcategory_id`, `name`, `tmp_name`) VALUES
(1, 1, 'Student on Keyboard', 'd59509c2a303a785762781260987a68c.jpg'),
(2, 1, 'Trip to a pond', 'c3e33cbd0fca762077e189ce121df56e.jpg'),
(3, 1, 'Trip to the museum', 'd408810275e94c958b02bfe94ee02dee.jpg'),
(4, 1, 'Trip to the airport', 'b3087944f60fcdca1cf110b7a40ef25d.JPG'),
(5, 2, 'Class Picture at the school gate', '218b950d9eb2d655aa4c851ce895bbcf.jpg'),
(6, 1, 'Trip to flying school', 'fe555f5d75578fc2d1bb904726015c54.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gcategory`
--

CREATE TABLE `gcategory` (
  `gcategory_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gcategory`
--

INSERT INTO `gcategory` (`gcategory_id`, `category`) VALUES
(1, 'Co Curriculum'),
(2, 'General');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service` varchar(457) DEFAULT NULL,
  `description` mediumtext,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service`, `description`, `created`) VALUES
(1, 'Football', '<p>Learners are trained by Edgar’s coaches.<br></p>', '2019-10-22 11:24:46'),
(2, 'Computing', '<p>We use read master, type master, skills pro and futures for our computer lessons.<br></p>', '2019-10-22 11:25:23'),
(3, 'Music', '<p>Learners are equipped in music by Worship One and at the end of the year show what they have learnt&nbsp;<br></p>', '2019-10-22 11:25:47'),
(4, 'Swimming', '<p>Learners are trained by a professional coach during their swimming which is done once a week.<br></p>', '2019-10-22 11:26:05'),
(5, 'Financial Literacy', '<p>All Students attend financial literacy lesson once in a week , they have a&nbsp; giving, banking , spending day and every learner is taught to identify areas where they can work while at home and they are paid by their parents.<br></p>', '2019-10-22 11:26:31'),
(6, 'Reading', '<p>We have a reading club where the best reader at the end of the year is rewarded.<br></p>', '2019-10-22 11:26:52'),
(7, 'Sports', '<p>Every week, we run a PE lesson for each student preschool to G3.&nbsp; At the end of the year, they get to show their skills off at SPORTS DAY!<br></p>', '2019-10-22 11:27:12'),
(8, 'Ministry', '<p>Learners are taught to be servants by identifying what ministry they can do for the community and their respective churches.<br></p>', '2019-10-22 11:27:31');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(11) NOT NULL,
  `caption` varchar(465) DEFAULT NULL,
  `link_text` varchar(45) DEFAULT NULL,
  `tmp_name` varchar(495) DEFAULT NULL,
  `url` varchar(85) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `caption`, `link_text`, `tmp_name`, `url`, `updated`, `created`) VALUES
(1, 'Integrated Christian education with emphasis on academic and character training', 'View More', '8850f597bedd4f11f94f2141b25316e1.jpg', 'http://shachachristianacademy.com', NULL, '2019-10-22 10:24:49'),
(2, 'A co-curriculum to ensure student’s all-round development and to develop their gifts and talents.', 'View More', 'acff03d70b05dadcf8d565403e72163f.jpg', 'http://shachachristianacademy.com', NULL, '2019-10-22 10:26:08'),
(3, 'All Students attend financial literacy lesson once in a week which is key to our curriculum', 'View More', 'd99ea5fa83915f69e8125aef8ad21faa.jpg', 'http://shachachristianacademy.com', NULL, '2019-10-22 10:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `tag` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `content_type`
--
ALTER TABLE `content_type`
  ADD PRIMARY KEY (`ctype_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gcategory`
--
ALTER TABLE `gcategory`
  ADD PRIMARY KEY (`gcategory_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `content_type`
--
ALTER TABLE `content_type`
  MODIFY `ctype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gcategory`
--
ALTER TABLE `gcategory`
  MODIFY `gcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
