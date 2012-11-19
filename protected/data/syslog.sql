-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 20 2012 г., 02:21
-- Версия сервера: 5.1.61
-- Версия PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `syslog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `logs_netconsole`
--

DROP TABLE IF EXISTS `logs_netconsole`;
CREATE TABLE IF NOT EXISTS `logs_netconsole` (
  `host` text,
  `datetime` text,
  `msg` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `logs_syslog_ng`
--

DROP TABLE IF EXISTS `logs_syslog_ng`;
CREATE TABLE IF NOT EXISTS `logs_syslog_ng` (
  `host` text,
  `facility` text,
  `priority` text,
  `level` text,
  `tag` text,
  `program` text,
  `msg` text,
  `inserted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `logs_syslog_ng_host_idx` (`host`(15)),
  KEY `logs_syslog_ng_facility_idx` (`facility`(20)),
  KEY `logs_syslog_ng_priority_idx` (`priority`(20)),
  KEY `logs_syslog_ng_program_idx` (`program`(255))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
