-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_uas_b
CREATE DATABASE IF NOT EXISTS `db_uas_b` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_uas_b`;

-- Dumping structure for table db_uas_b.daftar_menu
CREATE TABLE IF NOT EXISTS `daftar_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `rekomendasi` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_uas_b.daftar_menu: ~9 rows (approximately)
/*!40000 ALTER TABLE `daftar_menu` DISABLE KEYS */;
REPLACE INTO `daftar_menu` (`id`, `nama_menu`, `harga`, `kategori`, `rekomendasi`) VALUES
	(1, 'Rice Bowl Beef Teriyaki', 29000, 'Rice Bowl', 'Y'),
	(2, 'Rice Bowl Beef Lada Hitam', 29000, 'Rice Bowl', NULL),
	(3, 'Chicken Cordon Bleu', 93000, 'Steak', 'Y'),
	(4, 'Tenderloin Australia', 320000, 'Steak', 'Y'),
	(5, 'Patin Bakar', 105000, 'Grill', NULL),
	(6, 'Iga Bakar', 100000, 'Grill', 'Y'),
	(7, 'Coca Cola', 10000, 'Drinks', NULL),
	(8, 'Apple Juice', 12000, 'Drinks', NULL),
	(9, 'Tea', 5000, 'Drinks', 'Y');
/*!40000 ALTER TABLE `daftar_menu` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
