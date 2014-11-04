/*
SQLyog Ultimate v8.61 
MySQL - 5.6.16 : Database - base1
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`base1` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `base1`;

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `Id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `Grupo` varchar(20) DEFAULT NULL,
  `Estatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`Id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

LOCK TABLES `grupo` WRITE;

insert  into `grupo`(`Id_grupo`,`Grupo`,`Estatus`) values (1,'71',1),(2,'72',1),(3,'73',1);

UNLOCK TABLES;

/*Table structure for table `grupoalumno` */

DROP TABLE IF EXISTS `grupoalumno`;

CREATE TABLE `grupoalumno` (
  `Id_grupo` int(11) DEFAULT NULL,
  `Id` int(11) DEFAULT NULL,
  `idGA` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idGA`),
  KEY `FK_grupoalumno` (`Id_grupo`),
  KEY `Id` (`Id`),
  CONSTRAINT `FK_grupoalumno` FOREIGN KEY (`Id_grupo`) REFERENCES `grupo` (`Id_grupo`),
  CONSTRAINT `grupoalumno_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuarios` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `grupoalumno` */

LOCK TABLES `grupoalumno` WRITE;

insert  into `grupoalumno`(`Id_grupo`,`Id`,`idGA`) values (2,5,10),(3,6,11);

UNLOCK TABLES;

/*Table structure for table `maestro_materia` */

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `idm` int(11) NOT NULL AUTO_INCREMENT,
  `Id` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`idm`),
  KEY `FK_maestro_materia` (`id_materia`),
  KEY `Id` (`Id`),
  CONSTRAINT `FK_maestro_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`),
  CONSTRAINT `maestro_materia_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `usuarios` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `maestro_materia` */

LOCK TABLES `maestro_materia` WRITE;

insert  into `maestro_materia`(`idm`,`Id`,`id_materia`) values (1,2,1),(2,2,2),(6,1,2),(7,1,3),(8,1,5),(9,2,4);

UNLOCK TABLES;

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

LOCK TABLES `materia` WRITE;

insert  into `materia`(`id_materia`,`nombre`,`estatus`) values (1,'Programacion',1),(2,'Redes',1),(3,'Base de Datos',1),(4,'Calculo',1),(5,'Diseño Web',1);

UNLOCK TABLES;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `ApellidoPaterno` varchar(100) DEFAULT NULL,
  `ApellidoMaterno` varchar(100) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Calle` varchar(100) DEFAULT NULL,
  `NumeroExterior` varchar(100) DEFAULT NULL,
  `NumeroInterior` varchar(100) DEFAULT NULL,
  `Colonia` varchar(100) DEFAULT NULL,
  `Municipio` varchar(100) DEFAULT NULL,
  `Estado` varchar(100) DEFAULT NULL,
  `CP` varchar(100) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Usuario` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Nivel` varchar(100) NOT NULL,
  `Estatus` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

LOCK TABLES `usuarios` WRITE;

insert  into `usuarios`(`Id`,`Nombre`,`ApellidoPaterno`,`ApellidoMaterno`,`Telefono`,`Calle`,`NumeroExterior`,`NumeroInterior`,`Colonia`,`Municipio`,`Estado`,`CP`,`Correo`,`Usuario`,`Password`,`Nivel`,`Estatus`) values (1,'Jose Luis','Acosta','Martínez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user2','123456','2','1'),(2,'Gustavo','Millán','Romero',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2','1'),(3,'Ana','Sanchéz','Huerta',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(4,'Cesar','García','Jímenez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(5,'Paola','Velazquez','Medina',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(6,'Alfredo','Mejía','Arias',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(7,'Axel ','Campa','Hernández',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user1','123456','1','1'),(8,'Rocio','Martínez','Castrejón',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1'),(9,'Juan','Gonzalez','Ramirez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3','1');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
