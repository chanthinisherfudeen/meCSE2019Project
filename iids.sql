/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.5.36 : Database - iids
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`iids` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `iids`;

/*Table structure for table `auto_id` */

DROP TABLE IF EXISTS `auto_id`;

CREATE TABLE `auto_id` (
  `auto_id` int(10) NOT NULL AUTO_INCREMENT,
  `auto_loginid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `auto_id` */

insert  into `auto_id`(`auto_id`,`auto_loginid`) values 
(1,'104');

/*Table structure for table `ec_logindetails` */

DROP TABLE IF EXISTS `ec_logindetails`;

CREATE TABLE `ec_logindetails` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `login_name` varchar(30) DEFAULT NULL,
  `login_password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `ec_logindetails` */

insert  into `ec_logindetails`(`login_id`,`login_name`,`login_password`) values 
(1,'admin','admin');

/*Table structure for table `tbl_block` */

DROP TABLE IF EXISTS `tbl_block`;

CREATE TABLE `tbl_block` (
  `bl_id` int(15) NOT NULL AUTO_INCREMENT,
  `bl_user` int(55) DEFAULT NULL,
  `bl_name` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`bl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_block` */

insert  into `tbl_block`(`bl_id`,`bl_user`,`bl_name`) values 
(1,0,''),
(2,1,'mukesh'),
(3,2,'selva'),
(4,1,'mukesh'),
(5,1,'mukesh'),
(6,1,'mukesh'),
(7,1,'mukesh'),
(8,1,'mukesh'),
(9,1,'mukesh');

/*Table structure for table `tbl_book` */

DROP TABLE IF EXISTS `tbl_book`;

CREATE TABLE `tbl_book` (
  `book_id` int(55) NOT NULL AUTO_INCREMENT,
  `book_category` varchar(155) DEFAULT NULL,
  `book_name` varchar(155) DEFAULT NULL,
  `book_description` varchar(255) DEFAULT NULL,
  `book_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_book` */

insert  into `tbl_book`(`book_id`,`book_category`,`book_name`,`book_description`,`book_file`) values 
(2,'2','software developing','summa','book/02102018174636Capture.PNG');

/*Table structure for table `tbl_booksearch` */

DROP TABLE IF EXISTS `tbl_booksearch`;

CREATE TABLE `tbl_booksearch` (
  `bs_id` int(15) NOT NULL AUTO_INCREMENT,
  `bs_user` varchar(155) DEFAULT NULL,
  `bs_keyword` varchar(155) DEFAULT NULL,
  `bs_category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`bs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_booksearch` */

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `cat_id` int(55) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`cat_id`,`cat_name`) values 
(1,'Team Leader'),
(2,'Developer'),
(3,'Tester');

/*Table structure for table `tbl_intruder` */

DROP TABLE IF EXISTS `tbl_intruder`;

CREATE TABLE `tbl_intruder` (
  `in_id` int(15) NOT NULL AUTO_INCREMENT,
  `in_user` int(55) DEFAULT NULL,
  `in_name` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_intruder` */

insert  into `tbl_intruder`(`in_id`,`in_user`,`in_name`) values 
(1,1,'mukesh'),
(2,2,'selva'),
(3,1,'mukesh'),
(4,1,'mukesh'),
(5,1,'mukesh'),
(6,2,'selva'),
(7,2,'selva'),
(8,2,'selva'),
(9,2,'selva'),
(10,1,'mukesh'),
(11,1,'mukesh'),
(12,1,'mukesh');

/*Table structure for table `tbl_logindetails` */

DROP TABLE IF EXISTS `tbl_logindetails`;

CREATE TABLE `tbl_logindetails` (
  `login_id` int(10) NOT NULL AUTO_INCREMENT,
  `login_cardno` varchar(100) DEFAULT NULL,
  `login_userid` varchar(30) DEFAULT NULL,
  `login_phoneno` varchar(10) DEFAULT NULL,
  `login_password` varchar(20) DEFAULT NULL,
  `login_role` varchar(50) DEFAULT NULL,
  `login_process` text,
  `login_try` int(5) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logindetails` */

insert  into `tbl_logindetails`(`login_id`,`login_cardno`,`login_userid`,`login_phoneno`,`login_password`,`login_role`,`login_process`,`login_try`) values 
(1,'1234','r1','1234567898','123','customer','YTozOntpOjA7czoxOiIxIjtpOjE7czoxOiIyIjtpOjI7czoxOiIzIjt9',0),
(2,'4321','rum','1234567898','123','customer','YTozOntpOjA7czoxOiI0IjtpOjE7czoxOiI3IjtpOjI7czoxOiI2Ijt9',0);

/*Table structure for table `tbl_project` */

DROP TABLE IF EXISTS `tbl_project`;

CREATE TABLE `tbl_project` (
  `pr_id` int(15) NOT NULL AUTO_INCREMENT,
  `pr_category` varchar(155) DEFAULT NULL,
  `pr_name` varchar(155) DEFAULT NULL,
  `pr_language` varchar(155) DEFAULT NULL,
  `pr_duration` varchar(155) DEFAULT NULL,
  `pr_description` varchar(155) DEFAULT NULL,
  `pr_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_project` */

/*Table structure for table `tbl_projectsearch` */

DROP TABLE IF EXISTS `tbl_projectsearch`;

CREATE TABLE `tbl_projectsearch` (
  `ps_id` int(15) NOT NULL AUTO_INCREMENT,
  `ps_user` varchar(155) DEFAULT NULL,
  `ps_keyword` varchar(155) DEFAULT NULL,
  `ps_category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ps_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_projectsearch` */

insert  into `tbl_projectsearch`(`ps_id`,`ps_user`,`ps_keyword`,`ps_category`) values 
(1,'1','summa','2'),
(2,'2','jkbjd','3'),
(3,'2','jkbjd','3'),
(4,'2','gege','3'),
(5,'2','egg','3'),
(6,'1','fsfs','2'),
(7,'1','vfdv','2');

/*Table structure for table `tbl_scodesearch` */

DROP TABLE IF EXISTS `tbl_scodesearch`;

CREATE TABLE `tbl_scodesearch` (
  `sc_id` int(15) NOT NULL AUTO_INCREMENT,
  `sc_user` varchar(155) DEFAULT NULL,
  `sc_keyword` varchar(155) DEFAULT NULL,
  `sc_category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_scodesearch` */

insert  into `tbl_scodesearch`(`sc_id`,`sc_user`,`sc_keyword`,`sc_category`) values 
(1,'2','mukesg','3'),
(2,'1','dscsd','2'),
(3,'1','gege','2'),
(4,'1','gege','2');

/*Table structure for table `tbl_search` */

DROP TABLE IF EXISTS `tbl_search`;

CREATE TABLE `tbl_search` (
  `sr_id` int(15) NOT NULL AUTO_INCREMENT,
  `sr_user` int(55) DEFAULT NULL,
  `sr_name` varchar(55) DEFAULT NULL,
  `sr_category` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`sr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_search` */

insert  into `tbl_search`(`sr_id`,`sr_user`,`sr_name`,`sr_category`) values 
(1,1,'mukesh','project'),
(2,1,'mukesh','testpack'),
(3,1,'mukesh','testpack'),
(4,1,'mukesh','sourcecode'),
(5,2,'selva','project'),
(6,2,'selva','project'),
(7,2,'selva','testpack'),
(8,2,'selva','project'),
(9,2,'selva','project'),
(10,1,'mukesh','project'),
(11,1,'mukesh','testpack'),
(12,1,'mukesh','sourcecode'),
(13,1,'mukesh','sourcecode'),
(14,1,'mukesh','project');

/*Table structure for table `tbl_sourcecode` */

DROP TABLE IF EXISTS `tbl_sourcecode`;

CREATE TABLE `tbl_sourcecode` (
  `sc_id` int(55) NOT NULL AUTO_INCREMENT,
  `sc_category` varchar(155) DEFAULT NULL,
  `sc_proname` varchar(155) DEFAULT NULL,
  `sc_description` varchar(155) DEFAULT NULL,
  `sc_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_sourcecode` */

/*Table structure for table `tbl_testpack` */

DROP TABLE IF EXISTS `tbl_testpack`;

CREATE TABLE `tbl_testpack` (
  `tp_id` int(55) NOT NULL AUTO_INCREMENT,
  `tp_category` varchar(155) DEFAULT NULL,
  `tp_testname` varchar(155) DEFAULT NULL,
  `tp_description` varchar(155) DEFAULT NULL,
  `tp_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_testpack` */

/*Table structure for table `tbl_testpacksearch` */

DROP TABLE IF EXISTS `tbl_testpacksearch`;

CREATE TABLE `tbl_testpacksearch` (
  `tps_id` int(15) NOT NULL AUTO_INCREMENT,
  `tps_user` varchar(155) DEFAULT NULL,
  `tps_keyword` varchar(155) DEFAULT NULL,
  `tps_category` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`tps_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_testpacksearch` */

insert  into `tbl_testpacksearch`(`tps_id`,`tps_user`,`tps_keyword`,`tps_category`) values 
(1,'1','mukesh','2'),
(2,'1','mukesh','2'),
(3,'2','software developing','3'),
(4,'1','mukesg','2'),
(5,'1','software developing','2'),
(6,'2','software developing','3'),
(7,'1','asjks','2'),
(8,'1','jkjask','2'),
(9,'2','bmcvs','3'),
(10,'1','software developing','2');

/*Table structure for table `tbl_userlogin` */

DROP TABLE IF EXISTS `tbl_userlogin`;

CREATE TABLE `tbl_userlogin` (
  `login_id` int(55) NOT NULL AUTO_INCREMENT,
  `login_category` varchar(155) DEFAULT NULL,
  `login_name` varchar(155) DEFAULT NULL,
  `login_password` varchar(155) DEFAULT NULL,
  `login_status` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_userlogin` */

insert  into `tbl_userlogin`(`login_id`,`login_category`,`login_name`,`login_password`,`login_status`) values 
(1,'2','mukesh','123','Active'),
(2,'3','selva','123','Active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
