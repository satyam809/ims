-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 11:40 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conceptasbclasses`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`id`, `fname`, `lname`, `phone`, `email`, `date`) VALUES
(11, 'hvhjgvhj', 'hgfhgfghfd', '8375041361', 'gfghfgf@gmail.com', '2020-05-23 05:20:51'),
(12, 'hjbhjgfh', 'hgfhgfdgf', '7412589630', 'hgvhjg@gmail.com', '2020-05-23 05:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `feature` text NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modify_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`course_id`, `course_name`, `type`, `feature`, `insert_date`, `modify_date`) VALUES
(6, 'A.TARGET COURSE FOR UG-NEET STD XII(STD XII / FOR 12 MONTHS)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Intensive classroom teaching</li>\r\n                            <li>Resourceful &amp; precise subject modules</li>\r\n                            <li>Daily practice problems</li>\r\n                            <li>Regular Periodic Assessment Tests</li>\r\n                            <li>App-based online Assessment Tests with FREE TABLET</li>\r\n                            \r\n                        </ul>', '2020-04-23 11:49:29', '2020-04-29 07:29:59'),
(7, 'REPEATERS COURSE FOR STD XII PASSOUTS & DROPPERS (FOR 12 MONTHS)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Intensive classroom teaching</li>\r\n                            <li>Resourceful &amp; precise subject modules</li>\r\n                            <li>Daily practice problems</li>\r\n                            <li>Regular Periodic Assessment Tests</li>\r\n                            <li>App-based online Assessment Tests with FREE TABLET.</li>\r\n                        </ul>', '2020-04-23 11:58:35', '2020-04-28 14:12:08'),
(8, '', 'Offline', '<table class=\"table course-table table-bordered\">                   <thead>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;\"><b>PERIODIC ASSESMENT TEST FOR FOUNDATION</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:red;\"><b>FOR XI STANDARD STUDENTS (Duration 2 years)</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:blue;\"><b>Foundation course (First year)</b></th>                      </tr>                      <tr>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Examinations</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Subjects</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Total</b></th>                      </tr>                   </thead>                   <tbody>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Practice Series (Chapter-wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">22</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Revision Series (Unit wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Master Series (Full Syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (XI syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">03</div>                            </div>                         </td>                      </tr>                      <tr>                         <td colspan=\"3\">                            <div>                               <div class=\"lecture-txt\" style=\"text-align:center;\">Then students promoted to Target Course</div>                            </div>                         </td>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:blue;\"><b>Target course (Second Year)</b></th>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Practice Series (Chapter-wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">16</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Revision Series (Unit wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI+XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Master Series (Full Syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">04</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">SUCCESS Series</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (Full syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td colspan=\"2\">                            <div class=\"\">                               <div style=\"text-align:center;\"><b>TOTAL</b></div>                            </div>                         </td>                         <td>                            <div class=\"\">                               <div style=\"text-align:center;\"><b>60</b></div>                            </div>                         </td>                      </tr>                   </tbody>                </table>', '2020-04-23 12:20:01', '2020-04-29 05:59:15'),
(9, 'CRASH COURSE FOR STD XII MOVING & REPEATERS (FOR 12 MONTHS)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Intensive classroom teaching</li>\r\n                            <li>Problem sheets</li>\r\n                            <li>Full-length practice tests (PCB)</li>\r\n                            \r\n                        </ul>', '2020-04-23 21:01:20', '2020-04-28 14:14:39'),
(10, 'DISTANCE LEARNING PROGRAM (DLP)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Study Material (Soft Copy)</li>\r\n                            <li>An app-based online platform with FREE TABLET.</li>\r\n                           \r\n                        </ul>', '2020-04-24 14:39:41', '2020-04-28 14:16:20'),
(13, '', 'Offline', '<table class=\"table course-table table-bordered\">                   <thead>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;\"><b>PERIODIC ASSESMENT TEST FOR TARGET</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:red;\"><b>FOR XII STANDARD STUDENTS (Duration 1 year)</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:blue;\"><b>Target course (First year)</b></th>                      </tr>                      <tr>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Examinations</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Subjects</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Total</b></th>                      </tr>                   </thead>                   <tbody>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Practice Series (Chapter-wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">16</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Revision Series (Unit wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI+XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Master Series (Full Syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">04</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">SUCCESS Series (Full length)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (Full syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td colspan=\"2\">                            <div class=\"\">                               <div style=\"text-align:center;\"><b>TOTAL</b></div>                            </div>                         </td>                         <td>                            <div class=\"\">                               <div style=\"text-align:center;\"><b>30</b></div>                            </div>                         </td>                      </tr>                   </tbody>                </table>', '2020-04-24 15:08:50', '2020-04-29 05:59:41'),
(14, '', 'Offline', '<table class=\"table course-table table-bordered\">                   <thead>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;\"><b>PERIODIC ASSESMENT TEST FOR REPEATERS</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:red;\"><b>FOR REPEATER STUDENTS (Duration 1 year)</b></th>                      </tr>                      <tr>                         <th colspan=\"3\" style=\"background: #e9f4fd;text-align:center;color:blue;\"><b>Foundation course (CLASS XI)</b></th>                      </tr>                      <tr>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Examinations</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Subjects</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>Total</b></th>                      </tr>                   </thead>                   <tbody>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Practice Series (Chapter-wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI &amp; XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">28</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Revision Series (Unit wise)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Only Biology (XI+XII syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">SUCCESS Series (Full length)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">PHY, CHEM, BIO (Full syllabus)</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">05</div>                            </div>                         </td>                      </tr>                      <tr>                         <td colspan=\"2\">                            <div class=\"\">                               <div style=\"text-align:center;\"><b>TOTAL</b></div>                            </div>                         </td>                         <td>                            <div class=\"\">                               <div style=\"text-align:center;\"><b>38</b></div>                            </div>                         </td>                      </tr>                   </tbody>                </table>', '2020-04-24 15:13:18', '2020-04-29 05:59:58'),
(15, '', 'Online', '<table class=\"table course-table table-bordered\">                   <thead>                      <tr>                         <th colspan=\"2\" style=\"background: #e9f4fd;text-align:center;\"><b>ONLINE ASSESMENT PLATFORM</b></th>                      </tr>                      <tr>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>NTSE / NSEJS</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>KVPY</b></th>                      </tr>                   </thead>                   <tbody>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">7 State-level Mock Test</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">5 Full-length Mock Test (SA)</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">5 National level Mock Test</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">5 Full-length Mock Test (SB/SX)</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">7 State level Previous Year Test</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">125+ Topic-wise test</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">5 National: Level Previous Year Test</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">10+ Previous year papers with sol.</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">400+ Topic-wise test (Math, Science, SST)</div>                            </div>                         </td>                         <td></td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">130+ Topic-wise test on NSEJS (Math, Science)</div>                            </div>                         </td>                         <td></td>                      </tr>                   </tbody>                </table>', '2020-04-24 15:23:36', '2020-04-29 06:00:08'),
(16, '', 'Online', '<table class=\"table course-table table-bordered\">                   <thead>                      <tr>                         <th colspan=\"2\" style=\"background: #e9f4fd;text-align:center;\"><b>ONLINE ASSESMENT PLATFORM</b></th>                      </tr>                      <tr>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>MEDICAL ENTRANCE (NEET)</b></th>                         <th style=\"background: #e9f4fd;text-align:center;\"><b>ENGINEERING (IIT-JEE)</b></th>                      </tr>                   </thead>                   <tbody>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">25 Full-length Mock Tests</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">60+ Full-length Mock Tests</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">300+ Topic-wise tests</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">650+ Topic-wise tests</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">30 Sectional Tests</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">40+ Sectional Tests</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">10+ Previous year papers with solution</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">15 Previous year papers with solution</div>                            </div>                         </td>                      </tr>                      <tr>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Personalized learning tool</div>                            </div>                         </td>                         <td>                            <div class=\"table-col1\">                               <div class=\"lecture-txt\">Personalized learning tool</div>                            </div>                         </td>                      </tr>                      <tr>                         <td colspan=\"2\">                            <div class=\"\">                               <div style=\"text-align:center;\">*JEE Main mock tests on simulated interface as per real exam</div>                            </div>                         </td>                      </tr>                   </tbody>                </table>', '2020-04-24 15:24:47', '2020-04-29 06:00:17'),
(20, 'PRE-FOUNDATION COURSE FOR NTSE, KVPY, NEET(STD IX & X)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Innovative Classroom</li>\r\n                            <li>App-based online assessment platform</li>\r\n                           \r\n                        </ul>', '2020-04-28 22:19:54', '2020-04-28 16:49:54'),
(21, 'FOUNDATION COURSE FOR UG-NEET (STD XI /FOR 24 MONTHS)', 'Our Courses', '<ul class=\"privacy-listing\">\r\n                            <li>Intensive classroom teaching</li>\r\n                            <li>Resourceful &amp; precise subject modules</li>\r\n                            <li>Daily practice problems</li>\r\n                            <li>Regular Periodic Assessment Tests</li>\r\n							<li>App-based online Assessment Tests with FREE TABLET.</li>\r\n                        </ul>', '2020-04-28 22:20:38', '2020-04-28 16:50:38'),
(22, 'hgjfghj', 'Our Courses', '<p>hjghgvhjg</p>', '2020-04-29 13:00:29', '2020-04-29 07:30:29'),
(23, 'hgjfghj', 'Our Courses', '<p>hjghgvhjg</p>', '2020-04-29 13:00:57', '2020-04-29 07:30:57'),
(27, '', 'Select Course Type', '', '2020-04-29 14:29:55', '2020-04-29 08:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `download_table`
--

CREATE TABLE `download_table` (
  `download_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `insert_date` datetime NOT NULL,
  `modify_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download_table`
--

INSERT INTO `download_table` (`download_id`, `file_name`, `file`, `insert_date`, `modify_date`) VALUES
(58, 'book2', 'Dr. Animesh Dey.png', '0000-00-00 00:00:00', '2020-04-27 16:19:01'),
(59, 'jhhgf', 'CASB DETAILS.docx', '0000-00-00 00:00:00', '2020-04-27 16:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `image_id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image_id`, `images`) VALUES
(66, 'tour1.jpg'),
(67, 'tour-lg2.jpg'),
(68, 'tour-lg3.jpg'),
(69, 'tour-lg4.jpg'),
(70, 'tour-lg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `download_table`
--
ALTER TABLE `download_table`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_table`
--
ALTER TABLE `contact_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `download_table`
--
ALTER TABLE `download_table`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
