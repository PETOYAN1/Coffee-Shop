DROP DATABASE IF EXISTS `grandCoffee`;

CREATE DATABASE `grandCoffee`;

USE `grandCoffee`;


-- Users

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `email` varchar(50) UNIQUE,
  `password` varchar(50),
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1;

INSERT INTO `users` (`name`,`email`,`password`)
VALUES
  ("Ishmael","eu.nulla.at@protonmail.com","SHR61PPP0FN"),
  ("Stacy","lobortis.tellus@icloud.edu","ZCR75JTU4BG"),
  ("Tanisha","bibendum@aol.ca","CEF87QUL3VN"),
  ("Thane","per@protonmail.couk","BIY51UQG9DA"),
  ("Whitney","pretium@hotmail.ca","QTU56SYV1GT"),
  ("Veda","cursus@google.couk","XTN70JOD1AX"),
  ("Gisela","justo.faucibus.lectus@google.net","HJZ20WCO4HS"),
  ("Daria","placerat@yahoo.ca","TGK67MYK1BH"),
  ("Hayley","aliquet.diam@aol.edu","TPF49HMS3JX"),
  ("Zelenia","sit@google.org","SDP25JWJ5PM");