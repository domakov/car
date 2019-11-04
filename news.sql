-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.3.13-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп данных таблицы car.news: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`news_id`, `title`, `text`, `user_id`, `date_create`, `image`) VALUES
	(1, 'Here comes the blog title', 'ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.', 5, '2019-10-30 09:25:05', 'camry70.jpg'),
	(2, 'Here comes the blog title', '4545Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.', 2, '2019-10-30 09:25:05', 'camry70.jpg'),
	(3, 'Here comes the blog title', 'Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.', 2, '2019-10-30 09:25:05', 'camry70.jpg'),
	(4, 'Here comes the blog title', 'Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.', 2, '2019-10-30 09:25:05', 'camry70.jpg'),
	(5, 'Here comes the blog title', 'Lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, nisi id vulput ullamcoper lorem ipsum dolo stet consectetur adipiscing elit. Vestibulu dictum, ni id vulputate ullamcoper lorem ipsum dolo stet.', 2, '2019-10-30 09:25:05', 'camry70.jpg');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
