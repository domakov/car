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

-- Дамп данных таблицы car.address: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
INSERT INTO `address` (`id`, `city`) VALUES
	(1, 'Ақтөбе'),
	(2, 'Нур-Султан\r\n'),
	(3, 'Актау'),
	(4, 'Орал'),
	(5, 'Атырау'),
	(6, 'Мангыстау'),
	(7, 'Шымкент'),
	(8, 'Костанай'),
	(9, 'Оскемен'),
	(10, 'Семей');
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Дамп данных таблицы car.advert: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `advert` DISABLE KEYS */;
INSERT INTO `advert` (`id`, `user_id`, `marca_id`, `model_id`, `year`, `type_id`, `color_id`, `volume_id`, `oil_id`, `description`, `cpp_id`, `country_id`, `state_id`, `probeg`, `price`, `pricvod_id`, `view_count`) VALUES
	(1, 4, 2, 4, '2019', 4, 1, 2, 4, 'ПРАДАЮ МАШИНА БЫСТРО', 1, 3, 3, 15000, 100000, 3, 152),
	(2, 2, 2, 4, '2019', 4, 1, 2, 4, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 3, 3, 15000, 250000, 3, 596),
	(3, 2, 2, 13, '2019', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 1459),
	(4, 5, 6, 5, '2015', 4, 1, 3, 1, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 2, 3, 19000, 180000, 3, 0),
	(5, 2, 7, 4, '2017', 4, 1, 1, 4, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 2, 3, 15000, 300000, 3, 0),
	(6, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(7, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(8, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(9, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(10, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(11, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0),
	(12, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0);
/*!40000 ALTER TABLE `advert` ENABLE KEYS */;

-- Дамп данных таблицы car.images: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `link`, `advert_id`) VALUES
	(1, 'automob/astra.jpg', 1),
	(2, 'automob/cclass.jpg', 2),
	(3, 'automob/camry70.jpg', 3),
	(5, 'automob/i8.jpg', 3),
	(6, 'automob/karl.jpg', 6),
	(7, 'automob/lc.jpg', 1),
	(8, 'automob/lx570.jpg', 8),
	(9, 'automob/rio.jpg', 9),
	(10, 'automob/semi.jpg', 10),
	(11, 'automob/tesla_s.jpg', 11),
	(12, 'automob/tesla_x.jpg', 12),
	(13, 'automob/x5.jpg', 13);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
