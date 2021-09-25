--
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

DROP DATABASE IF EXISTS statistics;

CREATE DATABASE IF NOT EXISTS statistics
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

--
-- Установка базы данных по умолчанию
--
USE statistics;

--
-- Создать таблицу `statistics`
--
CREATE TABLE IF NOT EXISTS statistics (
  ip_address int(10) UNSIGNED NOT NULL,
  user_agent varchar(255) NOT NULL,
  page_url varchar(255) NOT NULL,
  view_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  views_count int(10) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (ip_address, user_agent, page_url)
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 8192,
CHARACTER SET utf8mb4,
COLLATE utf8mb4_unicode_ci;

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
--
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;