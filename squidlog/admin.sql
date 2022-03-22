CREATE DATABASE  IF NOT EXISTS `db-admsquid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db-admsquid`;
-- MySQL dump 10.13  Distrib 5.1.41, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db-admsquid
-- ------------------------------------------------------
-- Server version	5.0.51a-24+lenny5

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `tsitesblk`
--

DROP TABLE IF EXISTS `tsitesblk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsitesblk` (
  `sitesblk_id` int(11) NOT NULL auto_increment,
  `sitesblk` varchar(255) default NULL,
  PRIMARY KEY  (`sitesblk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COMMENT='URL bloqueadas para acesso a Internet';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsitesblk`
--

LOCK TABLES `tsitesblk` WRITE;
/*!40000 ALTER TABLE `tsitesblk` DISABLE KEYS */;
INSERT INTO `tsitesblk` VALUES (3,'www.orkut.com\r'),(4,'www.powerscrap.com\r'),(5,'.*orkut.*\r'),(6,'.*playboy.*\r'),(7,'.*anonymizer.*\r'),(8,'.*bitch.*\r'),(9,'.*bang.*\r'),(10,'.*xxx.*\r'),(11,'.*sex.*\r'),(12,'.*ebuddy.com.*\r'),(13,'.*meebo.com.*\r'),(14,'.*uolk.com.br.*\r'),(15,'.*polysolve.com.*\r'),(16,'.*undergrounds.com.*\r'),(17,'.*powerscrap.com.*\r'),(18,'.*flogao.com\r'),(19,'.*fotoblog.com\r'),(20,'.*youtube.com.*\r'),(21,'.*limewire.*\r'),(22,'.*lime wire.*\r'),(23,'.*webmessenger.com.*\r'),(24,'.*redtub.*.com.*\r'),(25,'.*gay.*\r'),(26,'.*porno.*\r'),(27,'.*truveo.com.*\r'),(28,'.*punheta.*\r'),(29,'.*linkto.com.*\r'),(30,'.*batepapo.uol.*\r'),(31,'.*chat.terra.*\r'),(32,'.*iloveim.com.*\r'),(33,'.*ipwister.com.*\r'),(34,'.*secretas.com.*\r'),(35,'.*sandrinha.com.*\r'),(36,'.*lojadoprazer.com.*\r'),(37,'.*bocadoinferno.com.*\r'),(38,'.*sitedomau.com.*\r'),(39,'.*sonico.com.*\r'),(40,'.*hi5.com.*\r'),(41,'.*viviane.*ara.*jo.*\r'),(42,'.*deciclopedia.*\r'),(43,'.*deciclo.pedia.*\r'),(44,'.*deciclop.*dia.*\r'),(45,'.*mulher.*mel.*ncia.*\r'),(46,'.*mulher.*melao.*\r'),(47,'.*mulher.*moranguinho.*\r'),(48,'.*mulher.*moranquinho.*\r'),(49,'.*bruna.*surfistinha.*\r'),(50,'.*motel.*\r'),(51,'.*phonefox.com.*\r'),(52,'.*msn2go.com.*\r'),(53,'.*msnger.com.*\r'),(54,'.*mulher.*pelada.*\r'),(55,'.*mulher.*nua.*\r'),(56,'.*homem.*pelado.*\r'),(57,'.*mechquest.com.*\r'),(58,'.*games.levelupgames.uol.com.br\r'),(59,'.*omegle.com.*\r'),(60,'.*game.aqworlds.com.*\r'),(61,'.*xvideos.com.*\r'),(62,'.*imo.im.*\r'),(63,'.*peteranswers.com.*\r'),(64,'.*fadasdobem.com.*\r'),(65,'.*battleon.com.*\r'),(66,'.*twitter.com\r'),(67,'.*habbo.com.*\r'),(68,'.*mundocanibal.uol.com.*\r'),(69,'.*kboing.*\r'),(70,'.*94fm.*\r'),(71,'.*96fmbauru.com.br.online.*\r'),(72,'.*kboing.*\r'),(73,'.*radio.uol.*\r'),(74,'.*radio.terra.*\r'),(75,'.*radiusim.*\r'),(76,'.*imunitive.*\r'),(77,'.*express.instant-t.*\r'),(78,'.*communicationtube.*\r'),(79,'.*messengerfx.*\r'),(80,'.*koolim.*\r'),(81,'.*tecnopot.com.br.*\r'),(82,'.*tecnopot.com.*\r'),(83,'.*vagalume.com.*\r'),(84,'.*96fm.com.br.*\r'),(85,'.*96fmbauru.com.br.*\r'),(86,'.*clubpenguin.*\r'),(87,'.*formspring.*\r'),(88,'.*migux.*\r'),(89,'.*gartic.*\r'),(90,'.*clickut.*\r'),(91,'.*jovempan.*\r'),(92,'.*videolog.uol.com.br.*\r'),(93,'.*spike.*\r'),(94,'.*music.mtv.uol.com.br.*\r'),(95,'.*vids.myspace.com.*\r'),(96,'.*4shared.*\r'),(97,'.*armagedomfilmes.*\r'),(98,'.*emp3world.*\r'),(99,'.*tvpunheta.*\r'),(100,'.*youporn.*\r');
/*!40000 ALTER TABLE `tsitesblk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsiteslib`
--

DROP TABLE IF EXISTS `tsiteslib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsiteslib` (
  `siteslib_id` int(11) NOT NULL auto_increment,
  `siteslib` varchar(255) default NULL,
  PRIMARY KEY  (`siteslib_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COMMENT='Sites Liberados para o acesso';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsiteslib`
--

LOCK TABLES `tsiteslib` WRITE;
/*!40000 ALTER TABLE `tsiteslib` DISABLE KEYS */;
INSERT INTO `tsiteslib` VALUES (29,'.*crl\\.microsoft\\.com.*'),(30,'.*lgodd\\.lge\\.com.*'),(31,'.*autoupdate\\.windowsmedia\\.com.*'),(32,'.*msgruser\\.dlservice\\.microsoft\\.com.*'),(33,'.*hotmail\\.com.*'),(34,'.*yahoo\\.com.*'),(35,'.*teima.*uol\\.com.*');
/*!40000 ALTER TABLE `tsiteslib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsemauth`
--

DROP TABLE IF EXISTS `tsemauth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsemauth` (
  `semauth_id` int(11) NOT NULL auto_increment,
  `semauth` varchar(255) default NULL,
  PRIMARY KEY  (`semauth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='Sites sem autenticacao';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsemauth`
--

LOCK TABLES `tsemauth` WRITE;
/*!40000 ALTER TABLE `tsemauth` DISABLE KEYS */;
INSERT INTO `tsemauth` VALUES (11,'saojose\\-bauru\\.g12\\.br'),(12,'downloads\\.caixa\\.gov\\.br'),(13,'obsupgdp\\.caixa\\.gov\\.br'),(14,'www\\.siiv\\.com\\.br'),(15,'lgodd\\.lge\\.com'),(16,'toolbar\\.msn\\.com'),(17,'.*toolbar\\.yahoo\\.com'),(18,'.*\\.update\\.microsoft\\.com'),(19,'download\\.windowsupdate\\.com'),(20,'msgruser\\.dlservice\\.microsoft\\.com'),(21,'guru\\.grisoft\\.com'),(22,'avast\\.com'),(23,'grisoft\\.com'),(24,'.*\\.avgate\\.net'),(25,'.*\\.freeav\\.net'),(26,'.*\\.avast\\.com'),(27,'\\.macromedia\\.com'),(28,'\\.verisign\\.com'),(29,'flashping.adobe.com'),(30,'.*contacts\\.msn\\.com'),(31,'.*\\.crl');
/*!40000 ALTER TABLE `tsemauth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tlib`
--

DROP TABLE IF EXISTS `tlib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tlib` (
  `lib_id` int(11) NOT NULL auto_increment,
  `lib` varchar(20) default NULL,
  PRIMARY KEY  (`lib_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='Ips Liberados para acesso total a internet';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tlib`
--

LOCK TABLES `tlib` WRITE;
/*!40000 ALTER TABLE `tlib` DISABLE KEYS */;
INSERT INTO `tlib` VALUES (7,'172.16.40.11'),(8,'172.16.40.146'),(9,'172.16.40.147'),(10,'172.16.40.21'),(11,'172.16.40.210'),(12,'172.16.40.22'),(13,'172.16.40.244'),(14,'172.16.40.195'),(15,'172.16.40.224'),(16,'172.16.40.149');
/*!40000 ALTER TABLE `tlib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblk`
--

DROP TABLE IF EXISTS `tblk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblk` (
  `blk_id` int(11) NOT NULL auto_increment,
  `blk` varchar(20) default NULL,
  PRIMARY KEY  (`blk_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='Ips bloqueados para acesso a Internet';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblk`
--

LOCK TABLES `tblk` WRITE;
/*!40000 ALTER TABLE `tblk` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tlibmsn`
--

DROP TABLE IF EXISTS `tlibmsn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tlibmsn` (
  `libmsn_id` int(11) NOT NULL auto_increment,
  `libmsn` varchar(20) default NULL,
  PRIMARY KEY  (`libmsn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Ips Liberados para acesso ao MSN';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tlibmsn`
--

LOCK TABLES `tlibmsn` WRITE;
/*!40000 ALTER TABLE `tlibmsn` DISABLE KEYS */;
INSERT INTO `tlibmsn` VALUES (10,'172.16.40.0/21');
/*!40000 ALTER TABLE `tlibmsn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tqos`
--

DROP TABLE IF EXISTS `tqos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tqos` (
  `qos_id` int(11) NOT NULL auto_increment,
  `address` varchar(20) collate utf8_unicode_ci NOT NULL,
  `download` varchar(5) collate utf8_unicode_ci NOT NULL,
  `upload` varchar(5) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`qos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Controle de banda';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tqos`
--

LOCK TABLES `tqos` WRITE;
/*!40000 ALTER TABLE `tqos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tqos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tsemauthip`
--

DROP TABLE IF EXISTS `tsemauthip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tsemauthip` (
  `semauthip_id` int(11) NOT NULL auto_increment,
  `semauthip` varchar(20) default NULL,
  PRIMARY KEY  (`semauthip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='IPs sem autenticacao';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tsemauthip`
--

LOCK TABLES `tsemauthip` WRITE;
/*!40000 ALTER TABLE `tsemauthip` DISABLE KEYS */;
INSERT INTO `tsemauthip` VALUES (6,'172.16.40.15'),(7,'172.16.40.210'),(8,'172.16.40.16'),(9,'172.16.40.21'),(10,'172.16.40.195');
/*!40000 ALTER TABLE `tsemauthip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tuserssys`
--

DROP TABLE IF EXISTS `tuserssys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tuserssys` (
  `login` char(16) collate utf8_unicode_ci NOT NULL,
  `nome` char(16) collate utf8_unicode_ci NOT NULL,
  `senha` char(40) collate utf8_unicode_ci NOT NULL,
  `perfil` enum('admin','read') collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tuserssys`
--

LOCK TABLES `tuserssys` WRITE;
/*!40000 ALTER TABLE `tuserssys` DISABLE KEYS */;
INSERT INTO `tuserssys` VALUES ('admin','Administrator','e10adc3949ba59abbe56e057f20f883e','admin'),('operador','Read Only','e10adc3949ba59abbe56e057f20f883e','read');
/*!40000 ALTER TABLE `tuserssys` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-02-06 21:43:21
