/*
SQLyog Professional
MySQL - 10.4.24-MariaDB : Database - aamarsms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `api_status` */

DROP TABLE IF EXISTS `api_status`;

CREATE TABLE `api_status` (
  `api_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `status` tinyint(2) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `credits` varchar(10) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`api_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `api_status` */

insert  into `api_status`(`api_id`,`name`,`status`,`updated_at`,`credits`,`unit`) values 
(1,'robi',1,'2022-08-07 16:47:03','0','taka'),
(2,'mirtel',1,'2022-08-07 21:02:01','0','taka'),
(3,'teletalk',1,'2022-11-25 20:59:47','37,586','credit'),
(4,'gp',1,'2022-08-06 21:02:48','0','taka'),
(5,'rankstel',1,'2022-10-22 12:10:55','0','credit');

/*Table structure for table `attendences` */

DROP TABLE IF EXISTS `attendences`;

CREATE TABLE `attendences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_in` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(291) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `attendences` */

/*Table structure for table `campaigns` */

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reseller_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 4 COMMENT '1=success,2=sending,3=paused,4=pending,5=failed',
  `campaign_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text_body` text CHARACTER SET utf8 NOT NULL,
  `sms_count` int(10) NOT NULL,
  `mask` tinyint(4) DEFAULT 0,
  `sender` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `group_id` varchar(10) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `start_date` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `campaign_cost` float DEFAULT NULL,
  `campaign_created` int(10) DEFAULT NULL,
  `dynamic_sms` int(5) NOT NULL DEFAULT 0,
  `api_sms` int(1) DEFAULT 0,
  `otp_sms` int(1) DEFAULT 0,
  `contact_count` int(11) DEFAULT NULL,
  `sms_type` int(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `userid` (`user_id`),
  KEY `resellerid` (`reseller_id`),
  KEY `startdate` (`start_date`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf16;

/*Data for the table `campaigns` */

insert  into `campaigns`(`id`,`reseller_id`,`user_id`,`status`,`campaign_name`,`text_body`,`sms_count`,`mask`,`sender`,`group_id`,`start_date`,`created_at`,`updated_at`,`campaign_cost`,`campaign_created`,`dynamic_sms`,`api_sms`,`otp_sms`,`contact_count`,`sms_type`) values 
(1,2,3,1,'P_20221029112003','Test',1,0,NULL,'2','2022-10-29 11:20:31','2022-10-29 11:20:31','2022-10-30 11:55:25',0.3,3,0,0,0,NULL,1),
(2,2,3,1,'P_20221030115446','বিটিআরসি\'র নির্দেশনা অনুযায়ী সকল ধরনের SMS বাংলায় প্রেরণ করুন, ধন্যবাদ',1,0,NULL,'3','2022-10-30 11:55:12','2022-10-30 11:55:12','2022-11-25 20:42:35',0.3,3,0,0,0,NULL,1),
(3,2,3,1,'P_20221030115515','বিটিআরসি\'র নির্দেশনা অনুযায়ী সকল ধরনের SMS বাংলায় প্রেরণ করুন, ধন্যবাদ',1,0,NULL,'4','2022-10-30 11:58:30','2022-10-30 11:58:30','2022-11-25 20:44:41',0.3,3,0,0,0,NULL,1),
(4,2,3,1,'20221125203738','Hello #NAME# , Your area is #AREA#',2,0,NULL,'0','2022-11-25 20:41:03','2022-11-25 20:42:18','2022-11-25 20:54:44',0.6,3,1,0,0,2,1),
(5,2,3,1,'20221125204552','Dear #NAME# , Your area is #AREA#',2,0,NULL,'0','2022-11-25 20:46:21','2022-11-25 20:46:29','2022-11-25 20:54:52',0.6,3,1,0,0,2,1),
(6,2,3,1,'P_20221125205835','Test sms from Asif',1,0,NULL,'5','2022-11-25 20:59:29','2022-11-25 20:59:29','2022-11-25 20:59:57',0.6,3,0,0,0,NULL,1),
(7,2,3,1,'P_20221125205931','Test check',1,0,NULL,'6','2022-11-25 21:05:13','2022-11-25 21:05:13','2022-11-25 21:07:09',0.3,3,0,0,0,NULL,1),
(8,2,3,1,'P_20221125210513','route check',1,0,NULL,'7','2022-11-25 21:07:31','2022-11-25 21:07:31','2022-11-25 21:16:55',0.3,3,0,0,0,NULL,1),
(9,2,3,1,'P_20221125210732','test',1,0,NULL,'8','2022-11-25 21:17:07','2022-11-25 21:17:07','2022-11-25 21:28:54',0.3,3,0,0,0,NULL,1),
(10,2,3,1,'P_20221125211708','check',1,0,NULL,'9','2022-11-25 21:29:09','2022-11-25 21:29:09','2022-11-25 21:31:49',0.3,3,0,0,0,NULL,1),
(11,2,3,1,'P_20221125212910','test',1,0,NULL,'10','2022-11-25 21:32:30','2022-11-25 21:32:30','2022-11-25 21:33:31',0.3,3,0,0,0,NULL,1),
(12,2,3,4,'P_20221125213231','Rankstel sms response issue fix',1,0,NULL,'11','2022-11-25 21:34:50','2022-11-25 21:34:50','2022-11-25 21:34:50',0.6,3,0,0,0,NULL,1),
(13,2,3,4,'P_20221129215033','Test',1,0,NULL,'12','2022-11-29 21:50:51','2022-11-29 21:50:51','2022-11-29 21:50:51',0.3,3,0,0,0,NULL,1),
(14,1,2,4,'P_20221201214903','Test',1,0,NULL,'13','2022-12-01 21:49:23','2022-12-01 21:49:23','2022-12-01 21:49:23',0.3,2,0,0,0,NULL,1);

/*Table structure for table `comissions` */

DROP TABLE IF EXISTS `comissions`;

CREATE TABLE `comissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sales` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `comissions` */

/*Table structure for table `configurations` */

DROP TABLE IF EXISTS `configurations`;

CREATE TABLE `configurations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(255) DEFAULT NULL,
  `priority_1` varchar(255) DEFAULT NULL,
  `priority_2` varchar(255) DEFAULT NULL,
  `priority_3` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `configurations` */

insert  into `configurations`(`id`,`vendor_name`,`priority_1`,`priority_2`,`priority_3`,`status`,`created_at`,`updated_at`) values 
(1,'GP','rankstel','teletalk','banglalink',1,'2022-11-25 20:49:18','2022-07-28 20:24:00');

/*Table structure for table `contact_groups` */

DROP TABLE IF EXISTS `contact_groups`;

CREATE TABLE `contact_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contacts_count` varchar(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `type` int(2) DEFAULT NULL,
  `campaign_id` int(5) DEFAULT 0,
  `status` tinyint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `userid` (`user_id`),
  KEY `campaignid` (`campaign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `contact_groups` */

insert  into `contact_groups`(`id`,`name`,`contacts_count`,`parent_id`,`user_id`,`created_at`,`updated_at`,`type`,`campaign_id`,`status`) values 
(1,'P_20221029110159','1',2,3,'2022-10-29 11:15:10','2022-10-29 11:15:10',NULL,0,2),
(2,'P_20221029112003','1',2,3,'2022-10-29 11:20:31','2022-10-29 11:20:31',NULL,0,2),
(3,'P_20221030115446','1',2,3,'2022-10-30 11:55:12','2022-10-30 11:55:12',NULL,0,2),
(4,'P_20221030115515','1',2,3,'2022-10-30 11:58:29','2022-10-30 11:58:29',NULL,0,2),
(5,'P_20221125205835','2',2,3,'2022-11-25 20:59:27','2022-11-25 20:59:27',NULL,0,2),
(6,'P_20221125205931','1',2,3,'2022-11-25 21:05:12','2022-11-25 21:05:12',NULL,0,2),
(7,'P_20221125210513','1',2,3,'2022-11-25 21:07:31','2022-11-25 21:07:31',NULL,0,2),
(8,'P_20221125210732','1',2,3,'2022-11-25 21:17:07','2022-11-25 21:17:07',NULL,0,2),
(9,'P_20221125211708','1',2,3,'2022-11-25 21:29:09','2022-11-25 21:29:09',NULL,0,2),
(10,'P_20221125212910','1',2,3,'2022-11-25 21:32:29','2022-11-25 21:32:29',NULL,0,2),
(11,'P_20221125213231','2',2,3,'2022-11-25 21:34:50','2022-11-25 21:34:50',NULL,0,2),
(12,'P_20221129215033','1',2,3,'2022-11-29 21:50:51','2022-11-29 21:50:51',NULL,0,2),
(13,'P_20221201214903','1',1,2,'2022-12-01 21:49:22','2022-12-01 21:49:22',NULL,0,1);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reseller_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `campaign_id` int(20) DEFAULT NULL,
  `operator` varchar(5) DEFAULT NULL,
  `country_code` int(10) DEFAULT NULL,
  `number` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `user` (`user_id`),
  KEY `campaign` (`campaign_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

insert  into `contacts`(`id`,`user_id`,`reseller_id`,`group_id`,`campaign_id`,`operator`,`country_code`,`number`,`created_at`,`updated_at`,`status`) values 
(1,3,2,1,NULL,'RB',880,'1829673377','2022-10-29 11:15:10','2022-10-29 11:15:10',3),
(2,3,2,2,NULL,'RB',880,'1829673377','2022-10-29 11:20:31','2022-10-29 11:20:31',3),
(3,3,2,3,NULL,'RB',880,'1829673377','2022-10-30 11:55:12','2022-10-30 11:55:12',3),
(4,3,2,4,NULL,'RB',880,'1829673377','2022-10-30 11:58:29','2022-10-30 11:58:29',3),
(5,3,2,5,NULL,'RB',880,'1829673377','2022-11-25 20:59:29','2022-11-25 20:59:29',3),
(6,3,2,5,NULL,'GP',880,'1302897637','2022-11-25 20:59:29','2022-11-25 20:59:29',3),
(7,3,2,6,NULL,'RB',880,'1829673377','2022-11-25 21:05:12','2022-11-25 21:05:12',3),
(8,3,2,7,NULL,'RB',880,'1829673377','2022-11-25 21:07:31','2022-11-25 21:07:31',3),
(9,3,2,8,NULL,'RB',880,'1829673377','2022-11-25 21:17:07','2022-11-25 21:17:07',3),
(10,3,2,9,NULL,'RB',880,'1829673377','2022-11-25 21:29:09','2022-11-25 21:29:09',3),
(11,3,2,10,NULL,'RB',880,'1829673377','2022-11-25 21:32:29','2022-11-25 21:32:29',3),
(12,3,2,11,NULL,'RB',880,'1829673377','2022-11-25 21:34:50','2022-11-25 21:34:50',3),
(13,3,2,11,NULL,'GP',880,'1730085980','2022-11-25 21:34:50','2022-11-25 21:34:50',3),
(14,3,2,12,NULL,'RB',880,'1829673377','2022-11-29 21:50:51','2022-11-29 21:50:51',3),
(15,2,1,13,NULL,'RB',880,'1829673377','2022-12-01 21:49:22','2022-12-01 21:49:22',3);

/*Table structure for table `crontab` */

DROP TABLE IF EXISTS `crontab`;

CREATE TABLE `crontab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cron_name` varchar(255) DEFAULT NULL,
  `execute_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `crontab` */

/*Table structure for table `dynamic_sms` */

DROP TABLE IF EXISTS `dynamic_sms`;

CREATE TABLE `dynamic_sms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `campaign_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `operator` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `country_code` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `number` decimal(10,0) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `sms_count` int(5) DEFAULT NULL,
  `smstype` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sms_cost` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `dynamic_sms` */

/*Table structure for table `error_log` */

DROP TABLE IF EXISTS `error_log`;

CREATE TABLE `error_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(16) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `vendor_api` varchar(50) DEFAULT NULL,
  `api_response` varchar(400) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `error_text` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `error_log` */

/*Table structure for table `field_customers` */

DROP TABLE IF EXISTS `field_customers`;

CREATE TABLE `field_customers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sales_id` int(11) NOT NULL,
  `cc` varchar(191) NOT NULL,
  `cname` varchar(191) NOT NULL,
  `caddress` varchar(191) NOT NULL,
  `cperson` varchar(191) NOT NULL,
  `designation` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `requirement` varchar(191) DEFAULT NULL,
  `proposal` varchar(191) DEFAULT NULL,
  `priority` varchar(191) DEFAULT NULL,
  `cfeedback` varchar(191) NOT NULL,
  `cfeedback2` varchar(191) DEFAULT NULL,
  `visiting_date` varchar(191) DEFAULT NULL,
  `followup` varchar(191) DEFAULT NULL,
  `cost` varchar(191) DEFAULT '0',
  `from` varchar(191) DEFAULT NULL,
  `to` varchar(191) DEFAULT NULL,
  `transaport` varchar(191) DEFAULT NULL,
  `pay_date` varchar(191) DEFAULT NULL,
  `pay_status` varchar(191) DEFAULT '2',
  `method` varchar(191) DEFAULT NULL,
  `trx_num` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `field_customers` */

/*Table structure for table `log_activities` */

DROP TABLE IF EXISTS `log_activities`;

CREATE TABLE `log_activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `log_activities` */

insert  into `log_activities`(`id`,`subject`,`url`,`method`,`ip`,`agent`,`user_id`,`created_at`,`updated_at`) values 
(1,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-22 12:17:40','2022-10-22 12:17:40'),
(2,'AamarSMS has been added to system by Admin','http://localhost:8000/admin/new_user','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-22 12:23:03','2022-10-22 12:23:03'),
(3,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-22 12:34:04','2022-10-22 12:34:04'),
(4,'AamarSMS has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',2,'2022-10-22 13:04:50','2022-10-22 13:04:50'),
(5,'AamarSMS User has been added to system by AamarSMS','http://localhost:8000/reseller/new_user','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',2,'2022-10-22 13:06:50','2022-10-22 13:06:50'),
(6,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',3,'2022-10-22 13:20:59','2022-10-22 13:20:59'),
(7,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',3,'2022-10-22 13:32:23','2022-10-22 13:32:23'),
(8,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',3,'2022-10-29 11:00:51','2022-10-29 11:00:51'),
(9,'AamarSMS has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',2,'2022-10-29 11:15:58','2022-10-29 11:15:58'),
(10,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-29 11:17:07','2022-10-29 11:17:07'),
(11,'1000 Taka has been Recharged to AamarSMS','http://localhost:8000/admin/recharge/create','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-29 11:18:04','2022-10-29 11:18:04'),
(12,'1000 Taka has been Recharged to AamarSMS User','http://localhost:8000/admin/recharge/create','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',1,'2022-10-29 11:18:26','2022-10-29 11:18:26'),
(13,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',3,'2022-10-29 11:18:59','2022-10-29 11:18:59'),
(14,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/106.0.0.0 (Windows10.0)',3,'2022-10-30 11:54:14','2022-10-30 11:54:14'),
(15,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',1,'2022-11-12 16:24:52','2022-11-12 16:24:52'),
(16,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-11-25 19:23:29','2022-11-25 19:23:29'),
(17,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-11-26 10:21:02','2022-11-26 10:21:02'),
(18,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-11-26 19:30:01','2022-11-26 19:30:01'),
(19,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-11-29 21:50:08','2022-11-29 21:50:08'),
(20,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-11-30 23:22:45','2022-11-30 23:22:45'),
(21,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',3,'2022-12-01 20:32:11','2022-12-01 20:32:11'),
(22,'AamarSMS has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/107.0.0.0 (Windows10.0)',2,'2022-12-01 21:48:45','2022-12-01 21:48:45'),
(23,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/108.0.0.0 (Windows10.0)',1,'2022-12-08 21:29:30','2022-12-08 21:29:30'),
(24,'Admin has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/108.0.0.0 (Windows10.0)',1,'2022-12-08 21:36:38','2022-12-08 21:36:38'),
(25,'AamarSMS User has New Login Session','http://localhost:8000/login','POST','127.0.0.1','Chrome/108.0.0.0 (Windows10.0)',3,'2022-12-09 15:43:16','2022-12-09 15:43:16');

/*Table structure for table `masks` */

DROP TABLE IF EXISTS `masks`;

CREATE TABLE `masks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `reseller_id` int(10) NOT NULL,
  `status` tinyint(5) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masks` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2018_12_12_094435_create_contact_group_table',2);

/*Table structure for table `nonmasking` */

DROP TABLE IF EXISTS `nonmasking`;

CREATE TABLE `nonmasking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `reseller_id` int(10) NOT NULL,
  `status` tinyint(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nonmasking` */

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `admin` int(1) DEFAULT 1,
  `status` int(1) DEFAULT 1,
  `user` int(1) DEFAULT 1,
  `reseller` int(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `notifications` */

/*Table structure for table `operator_balance` */

DROP TABLE IF EXISTS `operator_balance`;

CREATE TABLE `operator_balance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `operator_id` int(10) DEFAULT NULL,
  `operator_name` varchar(30) DEFAULT NULL,
  `amount` decimal(20,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `operator_balance` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `pack` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `card_brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `risk_level` int(11) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `orders` */

insert  into `orders`(`id`,`user_id`,`name`,`email`,`phone`,`amount`,`pack`,`address`,`card_type`,`card_brand`,`risk_level`,`status`,`transaction_id`,`currency`,`created_at`) values 
(1,3,'AamarSMS User','user@aamarsms.com','01111111111',100,'1','Customer Address',NULL,NULL,NULL,'Pending','635399fc24894','BDT','2022-10-22 13:21:32');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `rate_plan` */

DROP TABLE IF EXISTS `rate_plan`;

CREATE TABLE `rate_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reseller_id` int(11) DEFAULT NULL,
  `operator` varchar(20) DEFAULT NULL,
  `nonmasking_price` float DEFAULT NULL,
  `masking_price` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `price` float DEFAULT 0,
  `mask` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `userid` (`user_id`),
  KEY `reseller` (`reseller_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `rate_plan` */

insert  into `rate_plan`(`id`,`user_id`,`reseller_id`,`operator`,`nonmasking_price`,`masking_price`,`created_at`,`updated_at`,`price`,`mask`) values 
(1,2,1,'GP',0.3,0.5,'2022-10-22 12:23:03','2022-10-22 12:23:03',0,0),
(2,2,1,'RB',0.3,0.5,'2022-10-22 12:23:03','2022-10-22 12:23:03',0,0),
(3,2,1,'BL',0.3,0.5,'2022-10-22 12:23:03','2022-10-22 12:23:03',0,0),
(4,2,1,'TL',0.3,0.5,'2022-10-22 12:23:03','2022-10-22 12:23:03',0,0),
(5,2,1,'AL',0.3,0.5,'2022-10-22 12:23:03','2022-10-22 12:23:03',0,0),
(6,3,2,'GP',0.3,0.5,'2022-10-22 13:06:50','2022-10-22 13:06:50',0,0),
(7,3,2,'RB',0.3,0.5,'2022-10-22 13:06:50','2022-10-22 13:06:50',0,0),
(8,3,2,'BL',0.3,0.5,'2022-10-22 13:06:50','2022-10-22 13:06:50',0,0),
(9,3,2,'TL',0.3,0.5,'2022-10-22 13:06:50','2022-10-22 13:06:50',0,0),
(10,3,2,'AL',0.3,0.5,'2022-10-22 13:06:50','2022-10-22 13:06:50',0,0);

/*Table structure for table `recharge_requests` */

DROP TABLE IF EXISTS `recharge_requests`;

CREATE TABLE `recharge_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_mobile` varchar(191) DEFAULT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `amount` varchar(191) DEFAULT NULL,
  `approved_at` varchar(191) DEFAULT NULL,
  `sales_status` int(11) DEFAULT NULL,
  `admin_status` int(11) DEFAULT NULL,
  `sales_rcv_date` varchar(191) DEFAULT NULL,
  `admin_rcv_date` varchar(191) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 2,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `recharge_requests` */

/*Table structure for table `recharges` */

DROP TABLE IF EXISTS `recharges`;

CREATE TABLE `recharges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sales_id` int(11) DEFAULT NULL,
  `reseller_id` int(11) DEFAULT NULL,
  `campaign_id` int(10) DEFAULT NULL,
  `amount` float NOT NULL,
  `comments` text NOT NULL,
  `balance` float DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `adm_payment` int(11) DEFAULT 2,
  `status` tinyint(5) DEFAULT 0,
  `type` varchar(20) DEFAULT NULL COMMENT '1= Recharge, 2= Campaign Cost',
  `recharged_by` int(11) DEFAULT NULL,
  `payment_method` varchar(30) DEFAULT NULL,
  `trx_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`user_id`),
  KEY `campaignid` (`campaign_id`),
  KEY `createdat` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `recharges` */

insert  into `recharges`(`id`,`user_id`,`sales_id`,`reseller_id`,`campaign_id`,`amount`,`comments`,`balance`,`created_at`,`updated_at`,`adm_payment`,`status`,`type`,`recharged_by`,`payment_method`,`trx_id`) values 
(1,2,NULL,1,NULL,1000,'test',1000,'2022-10-29 11:18:04','2022-10-29 11:18:04',2,1,'recharge',1,'cash','2910'),
(2,3,NULL,2,NULL,1000,'test',1000,'2022-10-29 11:18:26','2022-10-29 11:18:26',2,1,'recharge',1,'cash','29101'),
(3,3,NULL,NULL,1,-0.3,'P_20221029112003',999.7,'2022-10-29 11:20:31','2022-10-29 11:20:31',2,1,NULL,NULL,NULL,NULL),
(4,2,NULL,NULL,1,-0.3,'P_20221029112003',999.7,'2022-10-29 11:20:31','2022-10-29 11:20:31',2,1,NULL,NULL,NULL,NULL),
(5,3,NULL,NULL,2,-0.3,'P_20221030115446',999.4,'2022-10-30 11:55:12','2022-10-30 11:55:12',2,1,NULL,NULL,NULL,NULL),
(6,2,NULL,NULL,2,-0.3,'P_20221030115446',999.4,'2022-10-30 11:55:12','2022-10-30 11:55:12',2,1,NULL,NULL,NULL,NULL),
(7,3,NULL,NULL,3,-0.3,'P_20221030115515',999.1,'2022-10-30 11:58:30','2022-10-30 11:58:30',2,1,NULL,NULL,NULL,NULL),
(8,2,NULL,NULL,3,-0.3,'P_20221030115515',999.1,'2022-10-30 11:58:30','2022-10-30 11:58:30',2,1,NULL,NULL,NULL,NULL),
(9,3,NULL,NULL,4,-0.6,'20221125203738 Campaign',998.5,'2022-11-25 20:42:18','2022-11-25 20:42:18',2,1,NULL,NULL,NULL,NULL),
(10,3,NULL,NULL,5,-0.6,'20221125204552 Campaign',997.9,'2022-11-25 20:46:29','2022-11-25 20:46:29',2,1,NULL,NULL,NULL,NULL),
(11,3,NULL,NULL,6,-0.6,'P_20221125205835',997.3,'2022-11-25 20:59:29','2022-11-25 20:59:29',2,1,NULL,NULL,NULL,NULL),
(12,2,NULL,NULL,6,-0.6,'P_20221125205835',998.5,'2022-11-25 20:59:29','2022-11-25 20:59:29',2,1,NULL,NULL,NULL,NULL),
(13,3,NULL,NULL,7,-0.3,'P_20221125205931',997,'2022-11-25 21:05:13','2022-11-25 21:05:13',2,1,NULL,NULL,NULL,NULL),
(14,2,NULL,NULL,7,-0.3,'P_20221125205931',998.2,'2022-11-25 21:05:13','2022-11-25 21:05:13',2,1,NULL,NULL,NULL,NULL),
(15,3,NULL,NULL,8,-0.3,'P_20221125210513',996.7,'2022-11-25 21:07:31','2022-11-25 21:07:31',2,1,NULL,NULL,NULL,NULL),
(16,2,NULL,NULL,8,-0.3,'P_20221125210513',997.9,'2022-11-25 21:07:31','2022-11-25 21:07:31',2,1,NULL,NULL,NULL,NULL),
(17,3,NULL,NULL,9,-0.3,'P_20221125210732',996.4,'2022-11-25 21:17:07','2022-11-25 21:17:07',2,1,NULL,NULL,NULL,NULL),
(18,2,NULL,NULL,9,-0.3,'P_20221125210732',997.6,'2022-11-25 21:17:07','2022-11-25 21:17:07',2,1,NULL,NULL,NULL,NULL),
(19,3,NULL,NULL,10,-0.3,'P_20221125211708',996.1,'2022-11-25 21:29:09','2022-11-25 21:29:09',2,1,NULL,NULL,NULL,NULL),
(20,2,NULL,NULL,10,-0.3,'P_20221125211708',997.3,'2022-11-25 21:29:09','2022-11-25 21:29:09',2,1,NULL,NULL,NULL,NULL),
(21,3,NULL,NULL,11,-0.3,'P_20221125212910',995.8,'2022-11-25 21:32:30','2022-11-25 21:32:30',2,1,NULL,NULL,NULL,NULL),
(22,2,NULL,NULL,11,-0.3,'P_20221125212910',997,'2022-11-25 21:32:30','2022-11-25 21:32:30',2,1,NULL,NULL,NULL,NULL),
(23,3,NULL,NULL,12,-0.6,'P_20221125213231',995.2,'2022-11-25 21:34:50','2022-11-25 21:34:50',2,1,NULL,NULL,NULL,NULL),
(24,2,NULL,NULL,12,-0.6,'P_20221125213231',996.4,'2022-11-25 21:34:50','2022-11-25 21:34:50',2,1,NULL,NULL,NULL,NULL),
(25,3,NULL,NULL,13,-0.3,'P_20221129215033',994.9,'2022-11-29 21:50:52','2022-11-29 21:50:52',2,1,NULL,NULL,NULL,NULL),
(26,2,NULL,NULL,13,-0.3,'P_20221129215033',996.1,'2022-11-29 21:50:52','2022-11-29 21:50:52',2,1,NULL,NULL,NULL,NULL),
(27,2,NULL,NULL,14,-0.3,'P_20221201214903',995.8,'2022-12-01 21:49:24','2022-12-01 21:49:24',2,1,NULL,NULL,NULL,NULL),
(28,1,NULL,NULL,14,0,'P_20221201214903',NULL,'2022-12-01 21:49:24','2022-12-01 21:49:24',2,1,NULL,NULL,NULL,NULL);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `settings` */

/*Table structure for table `sms_sender_table` */

DROP TABLE IF EXISTS `sms_sender_table`;

CREATE TABLE `sms_sender_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reseller_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `campaign_id` int(10) DEFAULT NULL,
  `operator` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `country_code` int(10) DEFAULT NULL,
  `number` varchar(15) CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `api_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callback_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `callback_status` int(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `userid` (`user_id`),
  KEY `reseller` (`reseller_id`),
  KEY `campaign` (`campaign_id`),
  KEY `operator` (`operator`),
  KEY `createdate` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sms_sender_table` */

insert  into `sms_sender_table`(`id`,`user_id`,`reseller_id`,`group_id`,`campaign_id`,`operator`,`status`,`country_code`,`number`,`created_at`,`updated_at`,`api_text`,`callback_url`,`callback_status`) values 
(1,3,2,2,1,'RB',1,880,'1829673377','2022-10-29 11:20:31','2022-10-29 11:27:04',NULL,NULL,1),
(2,3,2,3,2,'RB',2,880,'1829673377','2022-10-30 11:55:12','2022-10-30 12:24:23',NULL,NULL,1),
(3,3,2,4,3,'RB',2,880,'1829673377','2022-10-30 11:58:30','2022-11-25 20:42:38',NULL,NULL,1),
(6,3,2,6,7,'RB',2,880,'1829673377','2022-11-25 21:05:13','2022-11-25 21:05:19',NULL,NULL,1),
(7,3,2,7,8,'RB',2,880,'1829673377','2022-11-25 21:07:31','2022-11-25 21:07:37',NULL,NULL,1),
(8,3,2,8,9,'RB',2,880,'1829673377','2022-11-25 21:17:07','2022-11-25 21:17:14',NULL,NULL,1),
(9,3,2,9,10,'RB',2,880,'1829673377','2022-11-25 21:29:09','2022-11-25 21:29:15',NULL,NULL,1),
(10,3,2,10,11,'RB',2,880,'1829673377','2022-11-25 21:32:30','2022-11-25 21:32:36',NULL,NULL,1),
(13,3,2,12,13,'RB',1,880,'1829673377','2022-11-29 21:50:52','2022-11-29 21:50:52',NULL,NULL,1),
(14,2,1,13,14,'RB',1,880,'1829673377','2022-12-01 21:49:24','2022-12-01 21:49:24',NULL,NULL,1);

/*Table structure for table `sms_summary` */

DROP TABLE IF EXISTS `sms_summary`;

CREATE TABLE `sms_summary` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sent_date` datetime DEFAULT NULL,
  `vendor_api` varchar(50) DEFAULT NULL,
  `gp` int(10) DEFAULT 0,
  `bl` int(10) DEFAULT 0,
  `robi` int(10) DEFAULT 0,
  `teletalk` int(10) DEFAULT 0,
  `airtel` int(10) DEFAULT 0,
  KEY `id` (`id`),
  KEY `vendorapi` (`vendor_api`),
  KEY `sentdate` (`sent_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sms_summary` */

/*Table structure for table `sms_transactions` */

DROP TABLE IF EXISTS `sms_transactions`;

CREATE TABLE `sms_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `operator` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `mobile_number` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sms_count` int(5) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `comments` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `country_code` varchar(10) CHARACTER SET latin1 DEFAULT '880',
  `reseller_id` int(11) DEFAULT NULL,
  `vendor_api` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `smsid` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `text` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `vendor_price` float DEFAULT NULL,
  `sell_price` float DEFAULT NULL,
  `mask` tinyint(5) DEFAULT NULL,
  `callback_url` varchar(255) DEFAULT NULL,
  `callback_status` int(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `groupid` (`group_id`,`user_id`),
  KEY `userid` (`user_id`),
  KEY `campaignid` (`campaign_id`),
  KEY `oeprator` (`operator`),
  KEY `resellerid` (`reseller_id`),
  KEY `vendor` (`vendor_api`),
  KEY `createdat` (`created_at`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `sms_transactions` */

insert  into `sms_transactions`(`id`,`group_id`,`user_id`,`campaign_id`,`operator`,`mobile_number`,`price`,`sms_count`,`status`,`created_at`,`comments`,`country_code`,`reseller_id`,`vendor_api`,`smsid`,`text`,`vendor_price`,`sell_price`,`mask`,`callback_url`,`callback_status`) values 
(1,0,3,4,'GP','8801730085980',0.3,1,1,'2022-11-25 20:53:31','SMS sent successfully','880',0,'teletalk','ID=A1669387889259610908ALUZ',NULL,NULL,NULL,NULL,NULL,0),
(2,0,3,4,'RB','8801829673377',0.3,1,1,'2022-11-25 20:53:31','SMS sent successfully','880',0,'teletalk','ID=A1669387890541910908OHIS',NULL,NULL,NULL,NULL,NULL,0),
(3,0,3,5,'GP','8801730085980',0.3,1,1,'2022-11-25 20:54:49','SMS sent successfully','880',0,'teletalk','ID=A1669387968634210908RSEO',NULL,NULL,NULL,NULL,NULL,0),
(4,0,3,5,'RB','8801829673377',0.3,1,1,'2022-11-25 20:54:49','SMS sent successfully','880',0,'teletalk','ID=A1669387968858810908TLIY',NULL,NULL,NULL,NULL,NULL,0),
(5,5,3,6,'RB','8801829673377',NULL,1,1,'2022-11-25 20:59:47','SMS sent successfully','880',2,'teletalk','ID=A1669388266417810908PLYG',NULL,NULL,NULL,NULL,NULL,0),
(6,5,3,6,'GP','8801302897637',NULL,1,1,'2022-11-25 20:59:47','SMS sent successfully','880',2,'teletalk','ID=A1669388266504010908DQDZ',NULL,NULL,NULL,NULL,NULL,0),
(7,11,3,12,'RB','8801829673377',NULL,1,1,'2022-11-25 21:34:56','SMS sent successfully','880',2,'rankstel','0',NULL,NULL,NULL,NULL,NULL,0),
(8,11,3,12,'GP','8801730085980',NULL,1,1,'2022-11-25 21:34:57','SMS sent successfully','880',2,'rankstel','0',NULL,NULL,NULL,NULL,NULL,0);

/*Table structure for table `templates` */

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `templates` */

/*Table structure for table `user-sms-count` */

DROP TABLE IF EXISTS `user-sms-count`;

CREATE TABLE `user-sms-count` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `sent_date` datetime DEFAULT NULL,
  `price` float DEFAULT NULL,
  `mask` int(10) DEFAULT NULL,
  `nonmask` int(10) DEFAULT NULL,
  `gp` int(10) DEFAULT NULL,
  `bl` int(10) DEFAULT NULL,
  `robi` int(10) DEFAULT NULL,
  `teletalk` int(10) DEFAULT NULL,
  `airtel` int(10) DEFAULT NULL,
  `total` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `id` (`id`),
  KEY `userid` (`user_id`),
  KEY `sentdate` (`sent_date`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user-sms-count` */

insert  into `user-sms-count`(`id`,`user_id`,`sent_date`,`price`,`mask`,`nonmask`,`gp`,`bl`,`robi`,`teletalk`,`airtel`,`total`,`created_at`,`updated_at`) values 
(1,3,'2022-11-25 21:34:57',NULL,0,8,4,NULL,4,NULL,NULL,NULL,'2022-11-25 20:53:31','2022-11-25 21:34:57');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_user` int(10) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `representative` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `company_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'default.png',
  `sales_person` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 3,
  `mask` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '(NULL)',
  `nonmasking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '(NULL)',
  `base_sales` int(11) DEFAULT NULL,
  `joining` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `api_token` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `otp` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operator` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `master_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'masterpass',
  `approval` int(1) DEFAULT 1,
  `api_enabled` int(1) DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`parent_user`,`name`,`representative`,`designation`,`image`,`company_image`,`sales_person`,`email`,`mobile`,`role`,`mask`,`nonmasking`,`base_sales`,`joining`,`remark`,`created_by`,`api_token`,`domain`,`status`,`otp`,`operator`,`password`,`remember_token`,`created_at`,`updated_at`,`master_password`,`approval`,`api_enabled`) values 
(1,0,'Admin',NULL,NULL,'default.png','default.png',NULL,'admin@gmail.com',NULL,1,'(NULL)','(NULL)',NULL,NULL,NULL,NULL,NULL,'',1,NULL,NULL,'$2y$10$oDMLfE6EptKu1EudBKMwv.F2yKD17DAZDgBwJ2ghi6KrvKiNCwja.',NULL,NULL,NULL,'masterpass',1,1),
(2,1,'AamarSMS','AamarSMS Official',NULL,'default.png','default.png',NULL,'reseller@aamarsms.com','01829673377',2,'','(NULL)',NULL,NULL,NULL,1,NULL,'panel.aamarsms.com',1,NULL,NULL,'$2y$10$Jo8NXSsSNax3Pq/cOHPN6e5xqK3JPGl7Lsk6RyXXv0g38SVGV0giG',NULL,'2022-10-22 12:23:03','2022-10-22 12:23:03','masterpass',1,1),
(3,2,'AamarSMS User',NULL,NULL,'default.png','default.png',NULL,'user@aamarsms.com','01111111111',3,'','(NULL)',NULL,NULL,NULL,2,NULL,'panel.aamarsms.com',1,NULL,NULL,'$2y$10$8VVp8C8A1bgf5tz/9HLaZeh4psYVMxNjAKZfO4E8R0f44QmbaXT6.',NULL,'2022-10-22 13:06:49','2022-10-22 13:06:49','masterpass',1,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
