-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Мар 11 2022 г., 13:04
-- Версия сервера: 8.0.18
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `etiketka_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `labels`
--

DROP TABLE IF EXISTS `labels`;
CREATE TABLE IF NOT EXISTS `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label_form` varchar(64) NOT NULL,
  `label_width` varchar(64) NOT NULL,
  `label_height` varchar(64) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_subtitle` varchar(512) NOT NULL,
  `capacity` varchar(128) NOT NULL,
  `compound` text NOT NULL,
  `instruction` text NOT NULL,
  `create_date` varchar(128) NOT NULL,
  `sell_by` varchar(128) NOT NULL,
  `storage_condition` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `labels`
--

INSERT INTO `labels` (`id`, `label_form`, `label_width`, `label_height`, `product_name`, `product_subtitle`, `capacity`, `compound`, `instruction`, `create_date`, `sell_by`, `storage_condition`) VALUES
(1, 'круг', '55', '55', 'мазь \"Энержи\"', '', '50г.', 'жир животный (бараний), горчичное масло, стручковый перец \"огонек\", авиационный керосин.', 'энергетическая мазь снимает мышечные и головные боли,  обладает противовоспалительным эффектом, убирает  спазмы мышц, предотвращает и лечит гайморит, отит, ангину, бронхит, насморк, остеохондроз, цистит, простатит и др. ', '09.02.2022 г. ', '08.02.2023 г. ', 'Хранить в прохладном месте'),
(2, 'прямоугольник', '50', '44', 'Антисептик для рук', '', '100 мл', 'Глицерин медицинский, спирт этиловый, перекись водорода 3%, аммиак', 'Нанести  жидкость на чистые сухие руки. 1-2 раза в день', '20.03.2020г.', '19.03.2022г.', ''),
(3, 'прямоугольник', '100', '30', 'ТРАВА ПОЛЫНИ', '', '15г', '', 'желчегонное средство. пол чайной ложки на 200', 'сентябрь 2021года', 'сентябрь 2023года', 'хранить в сухом и защищенном от света месте'),
(4, 'круг', '46', '46', 'Энержи', '', '30г.', 'бараний жир, горчичное масло, стручковый перец \"огонек\", авиационный керосин.', 'энергетическая мазь снимает мышечные и головные боли,  обладает противовоспалительным эффектом, убирает  спазмы мышц, предотвращает и лечит гайморит, отит, ангину, бронхит, насморк, остеохондроз, артрит, цистит, простатит и др. ', '14.02.2022', '13.02.2023', 'Хранить в прохладном месте'),
(5, 'круг', '63', '63', 'Лаза', '', '70г.', 'Острый перец, кориандр, чеснок, подсолнечное масло', 'добавить по вкусу в первые, вторые блюда и салаты', '14.02.2022', '13.02.2023', 'Хранить в прохладном месте'),
(6, 'прямоугольник', '66', '60', 'Яблочный уксус 4%', 'Домашний', '350 мл', 'Яблоки, вода очищенная, мёд, сахар', '- для здоровья: по 1 ст.л. на 1 стакан тёплой воды (250мл) натощак;\r\n- в кулинарии: в качестве приправы к салатам и другим блюдам. Небольшое количество добавить перед подачей к столу.', '07.03.2022', '06.03.2024', 'Хранить в прохладном месте');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
