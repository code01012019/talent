CREATE DATABASE  db_talent;
use db_talent;
 
SET NAMES utf8;
 
DROP TABLE IF EXISTS `Talents`;
CREATE TABLE `Talents` (
  `nom` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
