/*
SQLyog Ultimate v10.41 
MySQL - 5.6.21 : Database - arkademy
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `cashier` */

DROP TABLE IF EXISTS `cashier`;

CREATE TABLE `cashier` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cashier` */

insert  into `cashier`(`id`,`name`) values (1,'Pevita Pearce'),(2,'Raisa Andriana'),(3,'Higin Enggartiasto');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`name`) values (1,'Food'),(2,'Drink');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `id_category` int(10) DEFAULT NULL,
  `id_cashier` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`id`,`name`,`price`,`id_category`,`id_cashier`) values (1,'Latte','10000',2,1),(2,'Cake','20000',1,2),(3,'Cendol Dawet','45000',2,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
