-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.12 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных car
CREATE DATABASE IF NOT EXISTS `car` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `car`;

-- Дамп структуры для таблица car.address
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.address: ~10 rows (приблизительно)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
REPLACE INTO `address` (`id`, `city`) VALUES
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

-- Дамп структуры для таблица car.advert
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `marca_id` int(11) NOT NULL DEFAULT '0',
  `model_id` int(11) NOT NULL DEFAULT '0',
  `year` year(4) NOT NULL DEFAULT '2000',
  `type_id` int(11) NOT NULL DEFAULT '0',
  `color_id` int(11) NOT NULL DEFAULT '0',
  `volume_id` int(11) NOT NULL DEFAULT '0',
  `oil_id` int(11) NOT NULL DEFAULT '0',
  `description` text,
  `cpp_id` int(11) NOT NULL DEFAULT '0',
  `country_id` int(11) NOT NULL DEFAULT '0',
  `state_id` int(11) NOT NULL DEFAULT '0',
  `probeg` int(10) unsigned NOT NULL DEFAULT '0',
  `price` int(10) unsigned NOT NULL DEFAULT '0',
  `pricvod_id` int(11) NOT NULL DEFAULT '0',
  `view_count` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.advert: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `advert` DISABLE KEYS */;
REPLACE INTO `advert` (`id`, `user_id`, `marca_id`, `model_id`, `year`, `type_id`, `color_id`, `volume_id`, `oil_id`, `description`, `cpp_id`, `country_id`, `state_id`, `probeg`, `price`, `pricvod_id`, `view_count`) VALUES
	(1, 4, 2, 4, '2019', 4, 1, 0, 4, 'ПРАДАЮ МАШИНА БЫСТРО', 1, 3, 3, 15000, 100000, 3, 152),
	(2, 2, 2, 4, '2019', 4, 1, 0, 4, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 3, 3, 15000, 250000, 3, 596),
	(3, 2, 2, 13, '2019', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 1459),
	(4, 5, 6, 5, '2015', 4, 1, 3, 1, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 2, 3, 19000, 180000, 3, 0),
	(5, 2, 7, 4, '2017', 4, 1, 0, 4, 'ПРАДАЮ МАШИНА БЫСТРО Я куралай', 1, 2, 3, 15000, 300000, 3, 0),
	(6, 11, 3, 13, '2012', 3, 4, 2, 2, 'ПРАДАЮ МАШИНА БЫСТРО дорого', 1, 3, 3, 12000, 1200000, 1, 0);
/*!40000 ALTER TABLE `advert` ENABLE KEYS */;

-- Дамп структуры для таблица car.color
CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.color: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `color` DISABLE KEYS */;
REPLACE INTO `color` (`id`, `color_name`) VALUES
	(1, 'Pink'),
	(2, 'Blue'),
	(3, 'Red'),
	(4, 'Black'),
	(5, 'Pink'),
	(6, 'Gray');
/*!40000 ALTER TABLE `color` ENABLE KEYS */;

-- Дамп структуры для таблица car.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `advert_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.comments: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
REPLACE INTO `comments` (`id`, `comment`, `date_time`, `advert_id`, `user_id`) VALUES
	(1, 'lkl', NULL, 1, 1),
	(2, 'klkl', NULL, 1, 2),
	(3, 'klkl', NULL, 1, 1),
	(4, '4545', NULL, 2, 1),
	(5, '4545', NULL, 1, 2),
	(6, 'fghfhgf', NULL, 1, 2);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Дамп структуры для таблица car.copy_country
CREATE TABLE IF NOT EXISTS `copy_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.copy_country: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `copy_country` DISABLE KEYS */;
REPLACE INTO `copy_country` (`id`, `c_name`, `price`) VALUES
	(8, 'Birma_copy', 110),
	(9, 'Birma_copy', 24),
	(10, 'Birma_copy', 10),
	(11, 'Birma_copy', NULL);
/*!40000 ALTER TABLE `copy_country` ENABLE KEYS */;

-- Дамп структуры для таблица car.country
CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.country: ~11 rows (приблизительно)
/*!40000 ALTER TABLE `country` DISABLE KEYS */;
REPLACE INTO `country` (`country_id`, `country_name`) VALUES
	(1, 'Russia'),
	(2, 'Japan'),
	(3, 'USA'),
	(4, 'Germany'),
	(5, 'GREAT BRITAIN'),
	(6, 'CHINA'),
	(7, 'Brazil'),
	(8, 'South Korea'),
	(9, 'India'),
	(10, 'Canada'),
	(11, 'Qazaqstan');
/*!40000 ALTER TABLE `country` ENABLE KEYS */;

-- Дамп структуры для таблица car.cpp
CREATE TABLE IF NOT EXISTS `cpp` (
  `cpp_id` int(11) NOT NULL AUTO_INCREMENT,
  `cpp_type` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cpp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.cpp: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `cpp` DISABLE KEYS */;
REPLACE INTO `cpp` (`cpp_id`, `cpp_type`) VALUES
	(1, 'Автомат'),
	(2, 'Механика'),
	(3, 'Типтроник');
/*!40000 ALTER TABLE `cpp` ENABLE KEYS */;

-- Дамп структуры для таблица car.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL DEFAULT '',
  `advert_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.images: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
REPLACE INTO `images` (`id`, `link`, `advert_id`) VALUES
	(1, 'images/1.jpg', 2),
	(2, 'images/2.jpg', 3),
	(3, 'images/2.jpg', 2);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Дамп структуры для таблица car.marca
CREATE TABLE IF NOT EXISTS `marca` (
  `marca_id` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.marca: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
REPLACE INTO `marca` (`marca_id`, `marca`, `active`) VALUES
	(1, 'BMW', 1),
	(2, 'TESLA', 0),
	(3, 'MUSTANG', 1),
	(4, 'LADA', 1),
	(5, 'OPEL', 1),
	(6, 'TOYOTA', 1),
	(7, 'Mercedes', 1),
	(8, 'Range rover', 1),
	(9, 'LEXUS', 1),
	(10, 'KIA', 1),
	(11, 'NISSAN', 1),
	(12, 'NISSAN', 1);
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;

-- Дамп структуры для таблица car.model
CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(50) NOT NULL DEFAULT '0',
  `marca_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.model: ~15 rows (приблизительно)
/*!40000 ALTER TABLE `model` DISABLE KEYS */;
REPLACE INTO `model` (`id`, `model`, `marca_id`) VALUES
	(1, 'I8', 1),
	(2, 'X5', 1),
	(3, 'MODEL S', 2),
	(4, 'MODEL X', 2),
	(5, 'CAMRY 70', 6),
	(6, 'LX570', 9),
	(7, 'LAND CRUISER', 6),
	(8, 'RIO', 10),
	(9, 'C-class', 7),
	(10, 'Semi', 1),
	(11, 'Astra', 5),
	(12, 'Karl Rocks', 5),
	(13, 'C-class Coupe', 7),
	(14, 'RX300', 90),
	(15, 'M5', 1);
/*!40000 ALTER TABLE `model` ENABLE KEYS */;

-- Дамп структуры для таблица car.oil
CREATE TABLE IF NOT EXISTS `oil` (
  `oil_id` int(11) NOT NULL AUTO_INCREMENT,
  `oil_type` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`oil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.oil: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `oil` DISABLE KEYS */;
REPLACE INTO `oil` (`oil_id`, `oil_type`) VALUES
	(1, 'Бензин'),
	(2, 'Газ-бензин'),
	(3, 'Дизель'),
	(4, 'Электрокар');
/*!40000 ALTER TABLE `oil` ENABLE KEYS */;

-- Дамп структуры для таблица car.privod
CREATE TABLE IF NOT EXISTS `privod` (
  `privod_id` int(11) NOT NULL AUTO_INCREMENT,
  `privod_type` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`privod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.privod: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `privod` DISABLE KEYS */;
REPLACE INTO `privod` (`privod_id`, `privod_type`) VALUES
	(1, 'Передний'),
	(2, 'Задний'),
	(3, 'Полный');
/*!40000 ALTER TABLE `privod` ENABLE KEYS */;

-- Дамп структуры для таблица car.state
CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.state: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `state` DISABLE KEYS */;
REPLACE INTO `state` (`state_id`, `state_name`) VALUES
	(1, 'На ходу'),
	(2, 'аварийный'),
	(3, 'С салона');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

-- Дамп структуры для таблица car.test
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) DEFAULT NULL,
  `test` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.test: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Дамп структуры для таблица car.type-kyzov
CREATE TABLE IF NOT EXISTS `type-kyzov` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.type-kyzov: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `type-kyzov` DISABLE KEYS */;
REPLACE INTO `type-kyzov` (`id`, `type_name`) VALUES
	(1, 'Седан'),
	(2, 'Хэтчбэк'),
	(3, 'Джип'),
	(4, 'Кроссовер'),
	(5, 'Микроавтобус'),
	(6, 'Минивен');
/*!40000 ALTER TABLE `type-kyzov` ENABLE KEYS */;

-- Дамп структуры для таблица car.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.users: ~13 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `login`, `password`, `address_id`, `email`, `tel`, `avatar`) VALUES
	(2, 'Асқар', 'askar', 'askar', 1, 'sdfsdfsf', NULL, NULL),
	(4, 'Алмас', 'almas', 'trPz', 1, NULL, NULL, NULL),
	(5, 'Сырым', 'Syrym', NULL, 2, NULL, NULL, NULL),
	(6, 'Куралай', 'Kuralay', '16077', 2, 'kura@mail.ru', NULL, NULL),
	(7, 'Нуркуйса', 'Nurkuisa', '18102019', 3, NULL, NULL, NULL),
	(8, 'Нурсат', 'Nursat', '123456', 7, NULL, NULL, NULL),
	(9, 'Сауле', 'Saule', '154c', 11, 'sdfsdfsf', NULL, NULL),
	(10, 'Асылжан', 'Asylzhan', '15656dfe', 4, 'asylzhan_1', NULL, NULL),
	(11, 'Марсель', 'Marsa', '4965624', 8, 'marsel', NULL, NULL),
	(12, NULL, 'Saule1', '$error="', NULL, NULL, NULL, NULL),
	(13, NULL, 'Saule2', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL),
	(14, NULL, 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', NULL, NULL, NULL, NULL),
	(15, NULL, 'admin+', 'e00cf25ad42683b3df678c61f42c6bda', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица car.volume
CREATE TABLE IF NOT EXISTS `volume` (
  `volume_id` int(11) NOT NULL AUTO_INCREMENT,
  `volume` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`volume_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.volume: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `volume` DISABLE KEYS */;
REPLACE INTO `volume` (`volume_id`, `volume`) VALUES
	(1, 1),
	(2, 2),
	(3, 1.6);
/*!40000 ALTER TABLE `volume` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
