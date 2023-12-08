-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for blogdb
DROP DATABASE IF EXISTS `blogdb`;
CREATE DATABASE IF NOT EXISTS `blogdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `blogdb`;

-- Dumping data for table blogdb.blog_posts: ~3 rows (approximately)
INSERT INTO `blog_posts` (`id`, `title`, `content`, `author`, `publication_date`, `created_on`, `updated_on`, `is_deleted`) VALUES
	(3, 'Green', 'climate change is very crucial', 'Shubham malhotra', '2023-12-06 16:15:09', '2023-12-07 08:49:20', '2023-12-07 09:24:02', b'0'),
	(5, 'Novels', 'Novels are very crucial', 'Aman', '2023-12-07 05:41:24', '2023-12-07 08:52:33', '2023-12-07 10:02:33', b'0'),
	(7, 'Himachal', 'himachal is an indian province which is famous for snowfall and hills', 'karan', '2023-12-01 15:33:00', '2023-12-07 10:03:30', '2023-12-07 10:04:30', b'0'),
	(8, 'qfqfw', 'Multiple selections (multi-cursor)\r\nYou can add secondary cursors (rendered thinner) with Alt+Click. Each cursor operates independently based on the context it sits in. A common way to add more cursors is with Shift+Alt+Down or Shift+Alt+Up that insert cursors below or above.qfqw', 'qwfqwf', '2023-12-01 23:14:00', '2023-12-07 17:44:29', '2023-12-07 17:44:29', b'0');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
