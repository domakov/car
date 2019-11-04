-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;




-- Дамп данных таблицы car.images: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`link`, `advert_id`) VALUES
	('automob/astra.jpg', 1),
	( 'automob/cclass.jpg', 2),
	( 'automob/camry70.jpg', 3),
	( 'automob/i8.jpg', 3),
	( 'automob/karl.jpg', 6),
	( 'automob/lc.jpg', 1),
	( 'automob/lx570.jpg', 8),
	( 'automob/rio.jpg', 9),
	( 'automob/semi.jpg', 10),
	( 'automob/tesla_s.jpg', 11),
	( 'automob/tesla_x.jpg', 12),
	( 'automob/x5.jpg', 13);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
