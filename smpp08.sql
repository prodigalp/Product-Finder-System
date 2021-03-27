-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: dbplastic
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `tblagency`
--

DROP TABLE IF EXISTS `tblagency`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblagency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `empnum` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `cellnum` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dhired` date NOT NULL,
  `eoc` date NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblagency`
--

LOCK TABLES `tblagency` WRITE;
/*!40000 ALTER TABLE `tblagency` DISABLE KEYS */;
INSERT INTO `tblagency` VALUES (5,22,'Bulacan','Plastics','3423','Male','1989-04-12','09244324209','Active','1989-04-12','1989-04-12','Chrysanthemum.jpg','','Injection'),(6,23,'Sta. Maria Bulacan','Plastics','4391','Male','1985-02-20','09224391486','Active','1985-02-20','1985-02-20','Desert.jpg','','Moldtech');
/*!40000 ALTER TABLE `tblagency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcurrent`
--

DROP TABLE IF EXISTS `tblcurrent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcurrent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `dater` date NOT NULL,
  `timer` time NOT NULL,
  `pichref` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcurrent`
--

LOCK TABLES `tblcurrent` WRITE;
/*!40000 ALTER TABLE `tblcurrent` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcurrent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblhistory`
--

DROP TABLE IF EXISTS `tblhistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhistory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `dater` date NOT NULL,
  `timer` time NOT NULL,
  `pichref` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhistory`
--

LOCK TABLES `tblhistory` WRITE;
/*!40000 ALTER TABLE `tblhistory` DISABLE KEYS */;
INSERT INTO `tblhistory` VALUES (54,'xxx','xxx','xxx','eyestrain','a0d61f8a89f9d12101d0a70b436ec317','Administrator','9',28,'2014-09-11','19:15:27','Tulips.jpg'),(55,'Norland','Cuevas','A.','nacuevas','827ccb0eea8a706c4c34a16891f84e7b','Operator','2',32,'2014-09-11','20:24:07','Image1943.jpg'),(56,'xxx','xxx','xxx','eyestrain','a0d61f8a89f9d12101d0a70b436ec317','Administrator','9',28,'2014-09-11','20:59:51','Tulips.jpg'),(57,'xxx','xxx','xxx','eyestrain','a0d61f8a89f9d12101d0a70b436ec317','Administrator','9',28,'2014-09-17','20:00:20','Tulips.jpg'),(58,'xxx','xxx','xxx','eyestrain','a0d61f8a89f9d12101d0a70b436ec317','Administrator','9',28,'2014-09-17','20:55:26','Tulips.jpg');
/*!40000 ALTER TABLE `tblhistory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbloptr`
--

DROP TABLE IF EXISTS `tbloptr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbloptr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `empnum` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `cellnum` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dhired` date NOT NULL,
  `ctrlnum` int(11) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbloptr`
--

LOCK TABLES `tbloptr` WRITE;
/*!40000 ALTER TABLE `tbloptr` DISABLE KEYS */;
INSERT INTO `tbloptr` VALUES (5,'Nueva Ecija','Plastics','432','Male','1977-06-15','092142167293','Active','2003-03-19',24,'Hydrangeas.jpg','','Grinding'),(7,'Leyte Cebu','Plastics','2391','Male','1975-05-07','0932924134','Active','2006-06-13',32,'Image1943.jpg','','Blending');
/*!40000 ALTER TABLE `tbloptr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblpack`
--

DROP TABLE IF EXISTS `tblpack`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `procode` varchar(40) NOT NULL,
  `norows` int(11) NOT NULL,
  `perows` int(8) NOT NULL,
  `nocols` int(8) NOT NULL,
  `percols` int(8) NOT NULL,
  `total` int(7) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `arrange` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpack`
--

LOCK TABLES `tblpack` WRITE;
/*!40000 ALTER TABLE `tblpack` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblpack` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `pcode` varchar(40) NOT NULL,
  `equipnum` varchar(25) NOT NULL,
  `bushtype` varchar(30) NOT NULL,
  `proweight` varchar(15) NOT NULL,
  `tolerance` varchar(15) NOT NULL,
  `cycletime` varchar(10) NOT NULL,
  `packaging` varchar(60) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `wrkcntr` varchar(40) NOT NULL,
  `cavity` varchar(10) NOT NULL,
  `target` varchar(20) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblproduct`
--

LOCK TABLES `tblproduct` WRITE;
/*!40000 ALTER TABLE `tblproduct` DISABLE KEYS */;
INSERT INTO `tblproduct` VALUES (29,0,'LDAG25R3LEA2NBK-E','1200158','BUSH13FHN/P','0.279','± 0.003','60.00','','DSC_1917.JPG','','IMC01-IMC29','2',' 960 ','Cover'),(30,0,'LDAA46R2LEDPSBK-E','1200136','BUSHNS52N/P','0.431','± 0.002','65.02','','cover (2).JPG','','IMC01-IMC29','2',' 886 ','Cover'),(31,0,'LDAN88R3LEA2SBK-E','1200153','BUSH13FHN/P','0.401','± 0.003','60.00','','cover (3).JPG','','IMC01-IMC29','2',' 960 ','Cover'),(32,0,'LDAB24R3REA3NBK-E','1200140','BUSHB24JISHN/P','0.261','± 0.003','43.99','','cover (4).JPG','','IMC01-IMC29','2',' 1309 ','Cover'),(33,0,'LDAB24R1LNA2NBK-E','1200139','BUSH13FHN/P','0.265','± 0.003','43.99','','cover (5).JPG','','IMC01-IMC29','2',' 1,309 ','Cover'),(34,0,'LDAG58R3EEA2PBK-E','1200165','BUSH13FHN/P','0.310','± 0.006','60.00','','cover (6).JPG','','IMC01-IMC29','2',' 960 ','Cover'),(35,0,'LDAG58R3IEA2PBK-E','1200165','BUSH13FHN/P','0.310	','± 0.006','60.00','','cover (7).JPG','','IMC01-IMC29			','2','960 ','Cover'),(36,0,'LDAD55R3LEA2NBK-E','1200160		 ','BUSH13FHN/P',' 0.1850 ','± 0.003','45.00','','cover (8).JPG','','IMC01-IMC29','2','1280 ','Cover'),(37,0,'LDAA46R2LEDASBK-E','1200136','BUSHNS51N/P	','0.434','± 0.002','65.02','','cover (9).JPG','','IMC01-IMC29			','2','886 ','Cover'),(38,0,'LDAA46R2REHBSBK-E','1200136','BUSH12TERHN/P','0.250','± 0.007','65.02','','cover (10).JPG','','IMC01-IMC29			','2','886 ','Cover'),(39,0,'LDAA46R2REA2SBK-E','1200136			','BUSH13FHN/P','0.276','± 0.003','65.02','','cover (11).JPG','','IMC01-IMC29			','2','886 ','Cover'),(40,0,'LDAN77R3LEA1SBK-E','1201679			','BUSH13FHN/P','0.359','± 0.002','65.02','','cover (12).JPG','','IMC01-IMC29			','2',' 886 ','Cover'),(41,0,'LDAN66R3REA2SBK-E','1200152			','BUSH13FHN/P','0.333','± 0.003','43.99','','cover (13).JPG','','IMC01-IMC29			','2','1309 ','Cover'),(42,0,'LDAD31R1REMDPBK-E','1200149			','BUSHMARINEDT33N/P','0.556','± 0.008','75.00','','cover (14).JPG','','IMC01-IMC29			','2',' 768 ','Cover'),(43,0,'LDAG24R4EEA1NBK-E','1200157			','BUSH13FHN/P','0.338','± 0.003','80.00','','cover (15).JPG','','IMC01-IMC29			 ','4','1440 ','Cover'),(44,0,'LDAN43R1LEA2SBK-E','1200169			','BUSH13FHN/P','0.283','± 0.002','60.00','','cover (16).JPG','','IMC01-IMC29			','2','960 ','Cover'),(45,0,'LDAN43R1LEA2NBK-E','1200169			','BUSH13FHN/P','0.271','± 0.002','60.00','','cover (17).JPG','','IMC01-IMC29			 ','2','960 ','Cover'),(46,0,'LDAGU1R4EEA3SBK-E','1200167			','BUSH13FHN/P','0.220','± 0.005','60.00','','cover (18).JPG','','IMC01-IMC29			 ','2','960 ','Cover'),(47,0,'LDAG27R3EEA2PBK-E','1200159			','BUSH13FHN/P','0.326','± 0.006','50.01','','cover (19).JPG','','IMC01-IMC29			 ','2','1152 ','Cover'),(48,0,'LDAG27R3EEA2NBK-E','1200160			','BUSH13FHN/P','0.326','± 0.003','50.01','','cover (20).JPG','','IMC01-IMC29			 ','2','1152 ','Cover'),(49,0,'LDAG31R5EEGSSBK-E','1200162			','BUSHG31S(K)','0.587','± 0.003','75.09','','cover (21).JPG','','IMC01-IMC29			','2',' 767 ','Cover'),(50,0,'LDAG31R5EEGSNBK-E','1200164			','BUSHG31S(K)','0.573','± 0.003','75.09','','cover (22).JPG','','IMC01-IMC29			 ','2','767 ','Cover'),(51,0,'LDAG31R5EEGAPBK-E','1200162			 ','BUSHG31AN/P(K)','0.573','± 0.005','75.09','','cover (23).JPG','','IMC01-IMC29			','2',' 767 ','Cover'),(52,0,'LDND31R1LEA2NBK-E','1200193			','BUSH13FHN/P','0.303','± 0.006','74.98','','cover (24).JPG','','IMC01-IMC29			 ','2','768 ','Cover'),(53,0,'LDAB20R6LEA2NBK-E','1200137		','BUSH13FHN/P',' 0.1322 ','± 0.003','50.01','','cover (25).JPG','','IMC01-IMC29				','4',' 2,304 ','Cover'),(54,0,'LDND26R1REA2NBK-E','1200189		','BUSH13FHN/P	','0.280','± 0.006','60.00','','cover (26).JPG','','IMC01-IMC29			','2',' 960 ','Cover'),(55,0,'LDAN44R3LEA2NBK-E','1200150			','BUSH13FHN/P','0.297','± 0.005','60.00','','cover (27).JPG','','IMC01-IMC29		  ','2	','960','Cover'),(56,0,'LDAG24R3EEA2NBK-E','1200155			','BUSH13FHN/P','0.305','± 0.006','75.00','','cover (28).JPG','','IMC01-IMC29			','2',' 768 ','Cover'),(57,0,'LDAD23R1LNA2NBK-E','1200144		','BUSH13FHN/P','0.290','± 0.003','60.00','','cover (29).JPG','','IMC01-IMC29			','2',' 960 ','Cover'),(58,0,'LDAG27R4EEMDSBK-E','1200161			','BUSHDTMARINEN/P','0.576','± 0.006','75.09','','cover (30).JPG','','IMC01-IMC29			','2',' 767 ','Cover'),(59,0,'LDBD23R1NCPBK-E','1201186	','NONE','65.40','± 0.51','35.00','','podvent (1).JPG','','IMC01-IMC29','2','1,646','Podvent'),(60,0,'LDBG27R4NCPBK-E','1200235		','NONE','77.44','± 1.50','31.00','','podvent (2).JPG','','IMC01-IMC29	','2','1,858 ','Podvent'),(61,0,'LDBG25R3NTSBK-E','1200214','NONE','72.54','± 1.14','30.00','','podvent (3).JPG','','IMC01-IMC29','2','1,920 ','Podvent'),(62,0,'LDB4DTR4NCPBK-E','1200226','NONE','221.32','± 0.39','55.03	','','podvent (4).JPG','','IMC06-07-13','1','523 ','Podvent'),(63,0,'LDB8DPR4NCPBK-E','1201187','NONE','281.27','± 0.42','40.00','','podvent (5).JPG','','IMC01-IMC29','1',' 720 ','Podvent'),(64,0,'LDBG65R3NTSBK-E','1200219	','NONE','99.05','± 0.45','35.00','','podvent (6).JPG','','IMC01-IMC29	 ','2','1,646 ','Podvent'),(65,0,'LDBG27R3NTSBK-E','1200217','NONE','96.94','± 0.93	 ','35.00','','podvent (7).JPG','','IMC01-IMC29','2','1,646 ','Podvent'),(66,0,'LDBGU1R4NTSBK-E','1201182','NONE','41.80','± 0.30','35.03','','podvent (8).JPG','','IMC01-IMC29 	','2 & 4','3,289 ','Podvent'),(67,0,'LDBN66R3NTSBK-E','1200209','NONE','88.00','± 1.00','40.00	','','podvent (9).JPG','','IMC01-IMC29','2','1,440 ','Podvent'),(68,0,'LDBN88R3NTSBK-E','1200210','NONE','111.54','± 1.50','40.00','','podvent (10).JPG','','IMC01-IMC29		','2','1,440 ','Podvent'),(69,0,'LDBB24R3NTSBK-E','1200224		','NONE','61.14','± 0.15','30.00','','podvent (11).JPG','','IMC01-IMC29		 ','2','1,920 ','Podvent'),(70,0,'LDBN55R3NTSBK-E','1200208','NONE','65.00','± 1.00','35.00','','podvent (12).JPG','','IMC01-IMC29 	 ','2','1,646 ','Podvent'),(71,0,'LDBB20R1NTSBK-E','1200204		','NONE','39.51','± 1.50','40.00	','','podvent (13).JPG','','IMC01-IMC29 ','2','1,440 ','Podvent'),(72,0,'LDBN77R3NTSBK-E','1201680		','NONE','98.00','± 1.00','40.00','','podvent (14).JPG','','IMC01-IMC29 		 ','2','1,440 ','Podvent'),(73,0,'LDBD23R5NTSBK-E','1201676		','NONE','71.70','± 0.50','28.70	','','podvent (15).JPG','','IMC01-IMC29 ','2','2,007 ','Podvent'),(74,0,'LDBF51R4NTSBK-E','1200229		','NONE','180.10','± 3.33','41.01','','podvent (16).JPG','','IMC01-IMC29 	 ','2','1,404 ','Podvent'),(75,0,'LDBN43R1NTSBK-E','1200205','NONE','49.04	','± 0.24','30.00	 ','','podvent (17).JPG','','IMC01-IMC29 ','2','1,920 ','Podvent'),(76,0,'LDBG51R4NTSBK-E','1200234		','NONE','220.12','± 1.23','60.00','','podvent (18).JPG','','IMC01-IMC29		','2',' 960 ','Podvent'),(77,0,'LDBC24R1NCPBK-E','1201185		','NONE','52.29','± 1.68','30.00','','podvent (19).JPG','','IMC01-IMC29	  ','2','1,920','Podvent'),(78,0,'LDBD26R1NCPBK-E','1200197		','NONE','77.05','± 0.31','35.00','','podvent (20).JPG','','IMC01-IMC29 	 ','2','1,646 ','Podvent'),(79,0,'LDBD23R5NCPBK-E','1201675		','NONE','75.30','± 0.80','31.50','','podvent (21).JPG','','IMC01-IMC29		','2','1,829','Podvent'),(80,0,'LDBN66R3NCPBK-E','1200209		','NONE','85.00','± 1.00','40.00','','podvent (22).JPG','','IMC01-IMC29 		','2','1,440 ','Podvent'),(81,0,'LDBE41R4NCPBK-E','1201461		','NONE','121.02','± 2.13','39.79','','podvent (23).JPG','','IMC01-IMC29 		','2','1,448 ','Podvent'),(82,0,'LDBG27R5NCPBK-E','1201985	','NONE','103.83','± 1.17','48.70','','podvent (24).JPG','','IMC01-IMC29	 ','4','2,366 ','Podvent'),(83,0,'LDBF51R4NCPBK-E','1200230		','NONE','199.06','± 2.34',' 41.91','','podvent (25).JPG','','IMC01-IMC29 	 ','2','1,374 ','Podvent'),(84,0,'LDBN43R1NCPBK-E','1200205		','NONE','47.38','± 0.30','30.00','','podvent (26).JPG','','IMC01-IMC29 	','2','1,920 ','Podvent'),(85,0,'LDBG51R4NCPBK-E','1200233		','NONE','236.00','± 1.00',' 60.00','','podvent (27).JPG','','IMC01-IMC29	','2',' 960 ','Podvent'),(86,0,'LDBA46R2NTSBK-E','1200201		','NONE','47.07','± 0.15','35.00','','podvent (28).JPG','','IMC01-IMC29 	 ','2','1,646 ','Podvent'),(87,0,'LDBG27R5NTABK-E','1201800		','NONE','100.31','± 1.27','48.70','','podvent (29).JPG','','IMC01-IMC29 	','4',' 2,366 ','Podvent'),(88,0,'LDB8DPR4NTSBK-E','1200225		','NONE','265.36','± 1.47',' 40.00','','podvent (30).JPG','','IMC01-IMC29 	','1','720 ','Podvent'),(89,0,'LDBG24R3NTSBK-E','1200212		','NONE','81.96','± 0.96','30.00','','podvent (31).JPG','','IMC01-IMC29 	 ','2','1,920 ','Podvent'),(90,0,'LDBG24R5NTBBK-E','1201798		','NONE','90.45','± 1.65','42.01','','podvent (32).JPG','','IMC01-IMC29	 	','4',' 2,742 ','Podvent'),(91,0,'LDBG24R5NCPBK-E','1201801		','NONE','92.13','± 2.03','42.01','','podvent (33).JPG','','IMC01-IMC29  	','4',' 2,742 ','Podvent'),(92,0,'LDBGU1R4NCPBK-E','1201182		','NONE','46.64','± 0.60','35.00','','podvent (34).JPG','','IMC01-IMC29 	','2','1,646','Podvent'),(93,0,'LDBB24R3NCPBK-E','1201444		','NONE','57.42','± 1.50',' 30.00	','','podvent (35).JPG','','IMC01-IMC29  ','2','1,920 ','Podvent'),(94,0,'LDBG24R3NCPBK-E','1200211		','NONE','80.08','± 1.20','30.00','','podvent (36).JPG','','IMC01-IMC29 	 ','2','1,920 ','Podvent'),(95,0,'LDBD26R1ECPBK-E','1200197		','NONE','78.20','± 0.46','35.00','','podvent (37).JPG','','IMC01-IMC29  		','2',' 1,646 ','Podvent'),(96,0,'LDBG65R3NCPBK-E','1200218		','NONE','94.88','± 0.99','35.00','','podvent (38).JPG','','IMC01-IMC29 	 ','2','1,646 ','Podvent'),(97,0,'LDBG31R5NCPBK-E','1200222		','NONE','59.86','± 1.05','35.00	','','podvent (39).JPG','','IMC01-IMC29  ','2','1,646 ','Podvent'),(98,0,'LDBD23R4NCPBK-E','1201180		','NONE','63.95','± 0.48','33.99	','','podvent (40).JPG','','IMC01-IMC29	 ','2',' 1,694 ','Podvent'),(99,0,'LDBB20R1NCPBK-E','1200203		','NONE','36.15','± 0.15','40.00	','','podvent (41).JPG','','IMC01-IMC29  ','2','1,440 ','Podvent'),(100,0,'LDBB24R1NCPBK-E','1200223		','NONE','56.64','± 1.38','30.00','','podvent (42).JPG','','IMC01-IMC29 	 ','2','1,920 ','Podvent'),(101,0,'LDB4DTR4NTSBK-E','1200227		','NONE','206.34','± 0.54',' 55.03','','podvent (43).JPG','','IMC01-IMC29 	','1',' 523 ','Podvent'),(102,0,'LDBG27R6NCPBK-E','1200228','NONE',' 0.1024 ','± 1.05','44.50','','podvent (44).JPG','','IMC01-IMC29 	 ','4','2,589 ','Podvent'),(103,0,'LDBG25R3NCPBK-E','1200213		','NONE','66.41','± 1.08','31.60','','podvent (45).JPG','','IMC01-IMC29 	 ','2','1,823 ','Podvent'),(104,0,'LDBG24R4NCPBK-E','1200231		','NONE','65.14','± 0.27','30.00','','podvent (46).JPG','','IMC01-IMC29 	 ','2','1,920 ','Podvent'),(105,0,'LDBD31R1ECPBK-E','1200199		','NONE','94.28','± 0.23','33.99	','','podvent (47).JPG','','IMC01-IMC29 ','2',' 1,694 ','Podvent'),(106,0,'LDBN88R3NCPBK-E','1200210		','NONE','105.77','± 1.00','40.00','','podvent (48).JPG','','IMC01-IMC29 		 ','2','1,440 ','Podvent'),(107,0,'LDBN44R3NCPBK-E','1200207		','NONE','59.90','± 0.48','35.00','','podvent (49).JPG','','IMC01-IMC29  		 ','2','1,646 ','Podvent'),(108,0,'LDBN44R3NTSBK-E','1200207','NONE',' 0.0630 ','± 0.48','35.00','','podvent (50).JPG','','IMC01-IMC29 		','2','1,646 	','Podvent'),(109,0,'LDBG58R3NTSBK-E','1200221		','NONE','88.44','± 0.57',' 35.00','','podvent (51).JPG','','IMC01-IMC29 	 ','2','1,646 ','Podvent'),(110,0,'LDBG58R3NCPBK-E','1200220','NONE','83.99','± 0.45','35.00','','podvent (52).JPG','','IMC01-IMC29  		 ','2','1,646 ','Podvent'),(111,0,'LDBB20R6NCPBK-E','1200203','NONE','0.0507 ','± 0.15','39.50','','podvent (53).JPG','','IMC01-IMC29			 	 ','4','2,917','Podvent'),(112,0,'LDBG31R5NTSBK-E','1200228		','NONE','63.60','± 1.47','35.00','','podvent (54).JPG','','IMC01-IMC29  ','2','1,646','Podvent'),(113,0,'LDBG27R4NTSBK-E','1200236','NONE','71.14','± 2.28','30.00','','podvent (55).JPG','','IMC01-IMC29 	 ','2','1,920 ','Podvent'),(114,0,'IB SPACER','1200246		','NONE','45.00','± 2.30','26.45','','Accesories (1).JPG','','IMC01-IMC29 	 ','1','1,089 ','Accesories'),(115,0,'PCC31R1BK-E','1202117		','NONE','0.83','± 0.02','16.0','','Accesories (2).JPG','','IMC01-IMC29 ','16',' 28,778','Accesories'),(116,0,'HD2DPR1BK-E','1200249		','NONE','11.70','± 0.50','50.00','','Accesories (3).JPG','','IMD01-IMD02 	','4',' 2,304 ','Accesories'),(117,0,'HD8DPR1BK-E','1200250		','NONE','13.85','± 0.21','40.80','','Accesories (4).JPG','','IMC01-IMC29 	 ','4','2,824 ','Accesories'),(118,0,'HDG24R6BK-E','1200258		','NONE','17.50','± 0.90',' 30.00','','Accesories (5).JPG','','IMC01-IMC29		','4',' 3,840','Accesories'),(119,0,'HDG24R3BK-E','1200259		','NONE','19.00','± 1.00','30.00','','Accesories (6).JPG','','IMD01-IMD02	','4','3,840 ','Accesories'),(120,0,'HDB20R2BK-E','1201483		','NONE','16.47','± 0.52','33.00','','Accesories (7).JPG','','IMC01-IMC29 	 ','4','3,491 ','Accesories'),(121,0,'HDB20R3BK-E','1200253	','NONE','9.05','± 0.30',' 35.00	','','Accesories (8).JPG','','IMC01-IMC29 ','8','6,582 ','Accesories'),(122,0,'HDG31R6BK-E','1200262','NONE',' 0.0411 ','± 0.70','63.76','','Accesories (9).JPG','','IMC01-IMC29		 ','8',' 3,613','Accesories'),(123,0,'HDN66R2BK-E','1200257		','NONE','14.00','± 0.70','30.00	 ','','Accesories (10).JPG','','IMC01-IMC29 ','4','3,840 ','Accesories'),(124,0,'HDN43R3BK-E','1200264		','NONE','12.00','± 0.50','30.00','','Accesories (11).JPG','','IMC01-IMC29 	','4',' 3,840 ','Accesories'),(125,0,'HDB20R6BK-E','1201483','NONE',' 0.0116 ','± 0.52','37.63	','','Accesories (12).JPG','','IMC01-IMC29 ','8',' 6,122 ','Podvent'),(126,0,'HDN55R3BK-E','1200256		','NONE','14.56','± 0.48','30.00','','Accesories (13).JPG','','IMC01-IMC29  	 ','4','3,840 ','Accesories'),(127,0,'HDN50R2BK-E','1200265		','NONE','9.00','± 0.70','30.00','','Accesories (14).JPG','','IMC01-IMC29 		','4',' 3,840 ','Accesories'),(128,0,'HDN70R2BK-E','1200267		','NONE','12.00','± 0.70','30.00','','Accesories (15).JPG','','IMC01-IMC29 	 ','4','3,840 ','Accesories'),(129,0,'HDD31R2BK-E','1200254','NONE',' 0.0129 ','± 0.90',' 34.00','','Accesories (16).JPG','','IMC01-IMC29		','4',' 3,388 ','Accesories'),(130,0,'HDG31R2BK-E','1200262		','NONE','24.50','± 0.70','35.00','','Accesories (17).JPG','','IMC01-IMC29 	','2','1,646','Accesories'),(131,0,'HDD23R4BK-E','1201234		','NONE','52.34','± 0.27','44.01','','Accesories (18).JPG','','IMC01-IMC29  		','4','2,618 ','Accesories'),(132,0,'HDA46R4BK-E','1200252		','NONE','43.03','± 0.60','38.46','','Accesories (19).JPG','','IMC01-IMC29		','2','1,498','Accesories'),(133,0,'HDG24R4BK-E','1200266		','NONE','71.42','± 1.23',' 48.00','','Accesories (20).JPG','','IMC01-IMC29	','4',' 2,400 ','Accesories'),(134,0,'ERESTIB-E','1200293','NONE',' 0.0680 ','± 0.50','35.40','','Accesories (21).JPG','','IMC06-07-13 			','1',' 814 ','Accesories'),(135,0,'HDN44R3BK-E','1200255		','NONE','14.00','± 0.70','30.00','','Accesories (22).JPG','','IMC01-IMC29 	 ','4','3,840 ','Accesories');
/*!40000 ALTER TABLE `tblproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblrel`
--

DROP TABLE IF EXISTS `tblrel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblrel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `empnum` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `cellnum` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dhired` date NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblrel`
--

LOCK TABLES `tblrel` WRITE;
/*!40000 ALTER TABLE `tblrel` DISABLE KEYS */;
INSERT INTO `tblrel` VALUES (4,25,'Sapang Palay Bulacan','Plastics','321','Male','1980-05-12','09422972317','Suspended','0000-00-00','Jellyfish.jpg','','Punching');
/*!40000 ALTER TABLE `tblrel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblsup`
--

DROP TABLE IF EXISTS `tblsup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblsup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `empnum` varchar(15) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` varchar(15) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblsup`
--

LOCK TABLES `tblsup` WRITE;
/*!40000 ALTER TABLE `tblsup` DISABLE KEYS */;
INSERT INTO `tblsup` VALUES (7,26,'901','mmamarquez@yahoo.com','Active','Koala.jpg'),(8,28,'xxx','prodigalp@yahoo.com','Resign','Tulips.jpg');
/*!40000 ALTER TABLE `tblsup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltray`
--

DROP TABLE IF EXISTS `tbltray`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbltray` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `depart` varchar(30) NOT NULL,
  `empnum` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bday` date NOT NULL,
  `cellnum` varchar(25) NOT NULL,
  `status` varchar(15) NOT NULL,
  `dhired` date NOT NULL,
  `pichref` varchar(255) NOT NULL,
  `picom` varchar(255) NOT NULL,
  `section` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbltray`
--

LOCK TABLES `tbltray` WRITE;
/*!40000 ALTER TABLE `tbltray` DISABLE KEYS */;
INSERT INTO `tbltray` VALUES (5,27,'Catmon Bulacan','Plastics','221','Male','1982-05-21','09317404214','Active','1982-05-21','Lighthouse.jpg','','Blending');
/*!40000 ALTER TABLE `tbltray` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ctrlnum` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gtype` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL,
  `pichref` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (22,0,'jrramos','827ccb0eea8a706c4c34a16891f84e7b','John','Rey','Ramos','Agency','1','Chrysanthemum.jpg'),(23,0,'rppascual','827ccb0eea8a706c4c34a16891f84e7b','Raffy','P','Pascual','Agency','1','Desert.jpg'),(24,0,'rgpadolina','827ccb0eea8a706c4c34a16891f84e7b','Robert','G.','Padolina','Operator','2','Hydrangeas.jpg'),(25,0,'fbmudlong','827ccb0eea8a706c4c34a16891f84e7b','Francisco','B.','Mudlong','Reliever','3','Jellyfish.jpg'),(26,0,'mmamarquez','827ccb0eea8a706c4c34a16891f84e7b','Michael Mark','A.','Marquez','Supervisor','5','Koala.jpg'),(27,0,'rscalilap','827ccb0eea8a706c4c34a16891f84e7b','Ruel','S.','Calilap','Trainor','4','Lighthouse.jpg'),(28,0,'eyestrain','a0d61f8a89f9d12101d0a70b436ec317','xxx','xxx','xxx','Administrator','9','Tulips.jpg'),(32,0,'nacuevas','827ccb0eea8a706c4c34a16891f84e7b','Norland','A.','Cuevas','Operator','2','Image1943.jpg');
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-09-17 20:57:03
