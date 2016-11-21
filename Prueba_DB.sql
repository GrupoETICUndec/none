/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.16-0ubuntu0.16.04.1 : Database - Prueba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`Prueba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Prueba`;

/*Table structure for table `Persona` */

DROP TABLE IF EXISTS `Persona`;

CREATE TABLE `Persona` (
  `idpersona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  UNIQUE KEY `idpersona` (`idpersona`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `Persona` */

insert  into `Persona`(`idpersona`,`nombre`,`apellido`,`direccion`,`telefono`,`mail`) values (1,'','','','',''),(2,'Emmanuel','Frati','Los Sarmientos','2215772575','emmanuelfrati@gmail.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
