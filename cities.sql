-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.33 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table whmsdatabase.cities
CREATE TABLE IF NOT EXISTS `cities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name_ar` varchar(50) DEFAULT NULL,
  `capital_ar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table whmsdatabase.cities: ~17 rows (approximately)
DELETE FROM `cities`;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` (`id`, `name_ar`, `capital_ar`) VALUES
	(14, 'محافظة صنعاء', 'صنعاء'),
	(15, 'محافظة عمران', 'عمران'),
	(16, 'محافظة صعدة', 'صعدة'),
	(17, 'محافظة حجة', 'حجة'),
	(18, 'محافظة المحويت', 'المحويت'),
	(19, 'محافظة ذمار', 'ذمار'),
	(20, 'محافظة إب', 'إب'),
	(21, 'محافظة ريمة', 'ريمة'),
	(22, 'محافظة البيضاء', 'البيضاء'),
	(23, 'محافظة الضالع', 'الضالع'),
	(24, 'محافظة عدن', 'عدن'),
	(25, 'محافظة لحج', 'لحج'),
	(26, 'محافظة تعز', 'تعز'),
	(27, 'محافظة أبين', 'أبين'),
	(28, 'محافظة الحديدة', 'الحديدة'),
	(29, 'محافظة مأرب', 'مأرب'),
	(30, 'محافظة الجوف', 'الجوف');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
