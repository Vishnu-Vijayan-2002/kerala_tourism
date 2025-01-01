/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.5.8-log : Database - ktour
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ktour` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ktour`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`admin_id`,`email`,`password`,`type`) values (1,'admin@gmail.com','123456','admin');

UNLOCK TABLES;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `book_id` int(100) NOT NULL AUTO_INCREMENT,
  `pack_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `desc` varchar(1000) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_phone` varchar(100) DEFAULT NULL,
  `hotel_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

LOCK TABLES `booking` WRITE;

insert  into `booking`(`book_id`,`pack_id`,`user_id`,`image`,`title`,`desc`,`price`,`status`,`user_email`,`user_name`,`user_phone`,`hotel_id`) values (60,'56','12','1666963559-ikkk.jfif','TamilNadu','we will provide  good data','150','accepted','user@gmail.com','user','3458786798','3'),(61,'58','12','1668937437-login.PNG','Kerala ','yes we gave','200','accepted','user@gmail.com','user','3458786798','3');

UNLOCK TABLES;

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `chat_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `hotel_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

LOCK TABLES `chat` WRITE;

insert  into `chat`(`chat_id`,`name`,`email`,`subject`,`message`,`hotel_id`) values (9,'admin','admin@gmail.com','comreplay from admin to user','comreply','1'),(10,'admin','admin@gmail.com','tamil@gmail.com replay from admin','yse ','3');

UNLOCK TABLES;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `c_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `hotel_id` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

LOCK TABLES `contact` WRITE;

insert  into `contact`(`c_id`,`name`,`email`,`subject`,`message`,`hotel_id`) values (11,'Conname','conmail@gmail.com','Having message','Good Services','1'),(12,'hai ','hai@gmail.com','its from tamil@gmail.com hotel','hai subject','3');

UNLOCK TABLES;

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feed_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `feedback` */

LOCK TABLES `feedback` WRITE;

insert  into `feedback`(`feed_id`,`name`,`email`,`subject`,`message`) values (4,'userfeed','userfeddbcak@gmail.com','user description','usersubject');

UNLOCK TABLES;

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `hotel_id` int(100) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `hotel` */

LOCK TABLES `hotel` WRITE;

insert  into `hotel`(`hotel_id`,`hotel_name`,`email`,`password`,`status`,`location`,`phone`) values (3,'Tamil','tamil@gmail.com','123','yes','tamilnadu','7676767676');

UNLOCK TABLES;

/*Table structure for table `package` */

DROP TABLE IF EXISTS `package`;

CREATE TABLE `package` (
  `pack_id` int(100) NOT NULL AUTO_INCREMENT,
  `profile_image` varchar(100) DEFAULT NULL,
  `bio` tinytext,
  `price` varchar(100) DEFAULT NULL,
  `desc` varchar(750) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `hotel_id` varchar(100) DEFAULT NULL,
  `offer` varchar(100) DEFAULT NULL,
  `types` varchar(100) DEFAULT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `cit` varchar(100) DEFAULT NULL,
  `ceckout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

/*Data for the table `package` */

LOCK TABLES `package` WRITE;

insert  into `package`(`pack_id`,`profile_image`,`bio`,`price`,`desc`,`status`,`hotel_id`,`offer`,`types`,`cat`,`cit`,`ceckout`) values (56,'1666963559-ikkk.jfif','TamilNadu','3000','we will provide  good data','yes','3','24% offer','iouioi','uioui','ioi','ioi'),(57,'1668936808-option.PNG','wqreew','wer','werwe','yes','3','wer','uioui','iuoui','ioui','iuou'),(58,'1668937437-login.PNG','Kerala ','200','yes we gave','yes','3','34','Suite','Double Bed','2022-11-28T15:13','2022-11-20T15:13');

UNLOCK TABLES;

/*Table structure for table `sendamount` */

DROP TABLE IF EXISTS `sendamount`;

CREATE TABLE `sendamount` (
  `adid` int(11) NOT NULL AUTO_INCREMENT,
  `hid` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `sendamount` */

LOCK TABLES `sendamount` WRITE;

insert  into `sendamount`(`adid`,`hid`,`amount`) values (10,'3','150');

UNLOCK TABLES;

/*Table structure for table `signup` */

DROP TABLE IF EXISTS `signup`;

CREATE TABLE `signup` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `signup` */

LOCK TABLES `signup` WRITE;

insert  into `signup`(`id`,`name`,`password`,`phone`,`email`,`type`,`status`) values (12,'user','user','3458786798','user@gmail.com','user','pending');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
