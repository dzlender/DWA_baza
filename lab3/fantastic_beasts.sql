/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.6.16 : Database - fantastic_beasts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fantastic_beasts` /*!40100 DEFAULT CHARACTER SET cp1250 COLLATE cp1250_croatian_ci */;

USE `fantastic_beasts`;

/*Table structure for table `proizvodi` */

DROP TABLE IF EXISTS `proizvodi`;

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazivProizvoda` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `tipZivotinje` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `tipProizvoda` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `cijenaProizvoda` double NOT NULL,
  `opisProizvoda` varchar(100) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tipZivotinje` (`tipZivotinje`),
  KEY `tipProizvoda` (`tipProizvoda`),
  CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`tipZivotinje`) REFERENCES `tip_zivotinje` (`zivotinja`),
  CONSTRAINT `proizvodi_ibfk_2` FOREIGN KEY (`tipProizvoda`) REFERENCES `tip_proizvoda` (`proizvod`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `proizvodi` */

insert  into `proizvodi`(`id`,`nazivProizvoda`,`tipZivotinje`,`tipProizvoda`,`cijenaProizvoda`,`opisProizvoda`) values (1,'Pedigre','pas','hrana',25,'Najkvalitetnija hrana za pse'),(2,'Whiskas','mačka','hrana',21,'Najkvalitetnija hrana za mačke'),(3,'Lamb snack','mačka','poslastice',35,'Ukusna poslastica za mačiće u razvitku'),(4,'Shark tank','ribice','oprema',120,'Praktičan akvarij za ribice'),(5,'Rat fat','glodavci','hrana',18,'Jednostavan obrok za kućne štakore'),(6,'Falcon fort','ptice','oprema',400,'Velika krletka za ptice'),(7,'Bite protection pro','gmazovi','ostalo',160,'Štitinik za zube zmija otrovnica'),(8,'Cobrarena','gmazovi','oprema',450,'Stakleni terarij za kobre'),(9,'Turtle ship','gmazovi','oprema',250,'Stakleni akvarij za kornjače'),(10,'Banana split','ostalo','poslastice',40,'Voćna salata za kućne majmune');

/*Table structure for table `tip_proizvoda` */

DROP TABLE IF EXISTS `tip_proizvoda`;

CREATE TABLE `tip_proizvoda` (
  `proizvod` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`proizvod`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `tip_proizvoda` */

insert  into `tip_proizvoda`(`proizvod`) values ('higijena'),('hrana'),('oprema'),('ostalo'),('poslastice');

/*Table structure for table `tip_zivotinje` */

DROP TABLE IF EXISTS `tip_zivotinje`;

CREATE TABLE `tip_zivotinje` (
  `zivotinja` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  PRIMARY KEY (`zivotinja`)
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

/*Data for the table `tip_zivotinje` */

insert  into `tip_zivotinje`(`zivotinja`) values ('glodavci'),('gmazovi'),('mačka'),('ostalo'),('pas'),('ptice'),('ribice');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
