SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- Database: `cv`
-- Table structure for table `employee`
CREATE TABLE `employee` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `fullname` varchar(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `dateofbirth` date NOT NULL,
  `university` varchar(30) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `major` varchar(10) NOT NULL,
  `results` varchar(5) NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

