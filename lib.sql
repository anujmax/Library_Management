-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: library
-- ------------------------------------------------------
-- Server version	5.1.73

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lib_details`
--

DROP TABLE IF EXISTS `lib_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lib_details` (
  `EID` int(250) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) DEFAULT NULL,
  `user_id` int(250) DEFAULT NULL,
  `publisher` varchar(250) DEFAULT NULL,
  `journal` varchar(250) DEFAULT NULL,
  `author` varchar(250) DEFAULT NULL,
  `Flag` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lib_details`
--

LOCK TABLES `lib_details` WRITE;
/*!40000 ALTER TABLE `lib_details` DISABLE KEYS */;
INSERT INTO `lib_details` VALUES (1,'Shilpi Gupta',1,'American Chemical Society','Accounts of Chemical Research','J.B. Gupta','Z'),(2,'Shilpi Gupta',1,'IEEE','Control Theory & Applications, IET','Lio Martyr','Z'),(3,'Shilpi Gupta',1,'IEEE','Electronic Systems News','P Henry','Z'),(5,'Preeti Sharma',2,'Wiley','Archaeological Prospection','Ren Martin','Z'),(6,'Preeti Sharma',2,'IEEE','Software Engineering. IEE Proceedings','Xin Jing','Z'),(10,'Shilpi Gupta',1,'Elsevier','Ancient History','H. J. Kaw','Z');
/*!40000 ALTER TABLE `lib_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `user_id` int(250) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) DEFAULT NULL,
  `user_org` varchar(250) DEFAULT NULL,
  `user_designation` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_phone` varchar(250) DEFAULT NULL,
  `loginname` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (1,'Shilpi Gupta','CSIR-NISCAIR','Project Assistant','shilpizone24@gmail.com','9958870446','shilpi','shilpi1'),(2,'Preeti Sharma','CSIR-NISCAIR','Project Assistant','preetisharmacs1989@gmail.com','9868486870','preeti','preeti2');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-31 11:36:45
