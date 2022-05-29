-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 05:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iir_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `cite` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `title`, `link`, `cite`, `keyword`) VALUES
(1, 'Present and future <b>robot </b>control development&#8212;An industrial perspective', 'https://www.sciencedirect.com/science/article/pii/S1367578807000077', 420, 'robot'),
(2, '<b>Robot </b>see, <b>robot </b>do: An overview of <b>robot </b>imitation', 'http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.27.292&amp;rep=rep1&amp;type=pdf', 258, 'robot'),
(3, 'Trends and challenges in <b>robot </b>manipulation', 'https://www.science.org/doi/abs/10.1126/science.aat8414', 197, 'robot'),
(4, '<b>Robot </b>programming', 'https://ieeexplore.ieee.org/abstract/document/1456949/', 469, 'robot'),
(5, 'Robovie: an interactive humanoid <b>robot</b>', 'https://www.emerald.com/insight/content/doi/10.1108/01439910110410051/full/html', 337, 'robot'),
(6, 'Current researches and future development trend of intelligent <b>robot</b>: A review', 'https://link.springer.com/article/10.1007/s11633-018-1115-1', 79, 'robot'),
(7, 'Kalman filter for <b>robot </b>vision: a survey', 'https://ieeexplore.ieee.org/abstract/document/5985520/', 525, 'robot'),
(8, 'Model learning for <b>robot </b>control: a survey', 'https://link.springer.com/article/10.1007/s10339-011-0404-1', 501, 'robot'),
(9, 'An overview of <b>robot </b>force control', 'https://www.cambridge.org/core/journals/robotica/article/an-overview-of-robot-force-control/403E8775F31C1162365B26C39FE557F4', 428, 'robot'),
(10, 'Mobile <b>robot </b>positioning: Sensors and techniques', 'https://onlinelibrary.wiley.com/doi/abs/10.1002/(SICI)1097-4563(199704)14:4%3C231::AID-ROB2%3E3.0.CO;2-R', 1049, 'robot'),
(11, '<b>Plant </b>argonautes', 'https://www.sciencedirect.com/science/article/pii/S1360138508001386', 699, 'plant'),
(12, '<b>Plant</b>&#8211;<b>plant </b>interactions and environmental change', 'https://nph.onlinelibrary.wiley.com/doi/abs/10.1111/j.1469-8137.2006.01752.x', 567, 'plant'),
(13, '<b>Plant </b>cyclopeptides', 'https://pubs.acs.org/doi/full/10.1021/cr040699h', 425, 'plant'),
(14, '<b>Plant </b>phospholipases', 'https://www.annualreviews.org/doi/abs/10.1146/annurev.arplant.52.1.211', 349, 'plant'),
(15, '<b>Plant </b>cystatins', 'https://www.sciencedirect.com/science/article/pii/S0300908410002208', 204, 'plant'),
(16, 'The epigenome and <b>plant </b>development', 'https://www.annualreviews.org/doi/abs/10.1146/annurev-arplant-042110-103806', 180, 'plant'),
(17, 'What happened to <b>plant </b>caspases?', 'https://academic.oup.com/jxb/article-abstract/59/3/491/577850', 228, 'plant'),
(18, 'Towards <b>plant </b>pangenomics', 'https://onlinelibrary.wiley.com/doi/abs/10.1111/pbi.12499', 154, 'plant'),
(19, '<b>Plant </b>molluscicides', 'https://www.thieme-connect.com/products/ejournals/pdf/10.1055/s-2007-971215.pdf', 165, 'plant'),
(20, 'The <b>plant </b>sulfolipid', 'https://www.sciencedirect.com/science/article/pii/B9781483199375500168', 202, 'plant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
