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

-- Дамп структуры для таблица car.comments_sale
CREATE TABLE IF NOT EXISTS `comments_sale` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `sa_comments` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `datacreate` timestamp NOT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы car.comments_sale: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `comments_sale` DISABLE KEYS */;
INSERT INTO `comments_sale` (`sa_id`, `sa_comments`, `user_id`, `advert_id`, `datacreate`) VALUES
	(1, 'hmguytrryut', 4, 1, '2019-11-05 13:55:27'),
	(2, 'hmguytrryut', 2, 2, '2019-11-05 13:55:27'),
	(3, 'hmguytrryut', 5, 3, '2019-11-05 13:55:27'),
	(4, 'hmguytrryut', 7, 4, '2019-11-05 13:55:27'),
	(5, 'hmguytrryut', 5, 6, '2019-11-05 13:55:27'),
	(6, 'hmguytrryut', 2, 3, '2019-11-05 13:55:27'),
	(7, 'hmguytrryut', 4, 1, '2019-11-05 13:55:27'),
	(8, 'hmguytrryut', 7, 5, '2019-11-05 13:55:27'),
	(9, 'hmguytrryut', 2, 4, '2019-11-05 13:55:27');
/*!40000 ALTER TABLE `comments_sale` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
