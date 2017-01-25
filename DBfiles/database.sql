/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.7.16-0ubuntu0.16.04.1 : Database - usersdb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`usersdb` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `usersdb`;

/*Table structure for table `Nombres` */

DROP TABLE IF EXISTS `Nombres`;

CREATE TABLE `Nombres` (
  `Nombre` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Apellido` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Index` int(10) NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `Index` (`Index`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `Nombres` */

insert  into `Nombres`(`Nombre`,`Apellido`,`Index`) values ('Tito','Stick',1),('Nicolas','Frati',2),('Pablo','Frati',3),('Emmanuel','Frati',4),('Nelida','Claudia',5),('Teresa','Frati',6),('Fabrizio','Vassellati',7),('Ella ','tambien',8),('Gonchi es','Puto',9),('Tu mama','En tanga',10);

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

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `usuario` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`usuario`,`password`,`nombre`,`email`,`gender`) values ('','','','','0');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
