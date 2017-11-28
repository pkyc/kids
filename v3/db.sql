-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: db2
-- ------------------------------------------------------
-- Server version       5.7.20-0ubuntu0.16.04.1

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `bday` varchar(40) NOT NULL,
  `hkid` varchar(8) NOT NULL,
  `ans1` varchar(200) DEFAULT NULL,
  `ans2` varchar(200) DEFAULT NULL,
  `ans3` varchar(200) DEFAULT NULL,
  `ans4` varchar(200) DEFAULT NULL,
  `ans5` varchar(200) DEFAULT NULL,
  `ans6` varchar(200) DEFAULT NULL,
  `ans7` varchar(200) DEFAULT NULL,
  `ans8` varchar(200) DEFAULT NULL,
  `ans9` varchar(200) DEFAULT NULL,
  `ans10` varchar(200) DEFAULT NULL,
  `ans11` varchar(200) DEFAULT NULL,
  `ans12` varchar(200) DEFAULT NULL,
  `ans13` varchar(200) DEFAULT NULL,
  `ans14` varchar(200) DEFAULT NULL,
  `ans15` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;
