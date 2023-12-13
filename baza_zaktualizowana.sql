-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: baza
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cladding_param`
--

DROP TABLE IF EXISTS `cladding_param`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cladding_param` (
  `id` int NOT NULL AUTO_INCREMENT,
  `wire` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `gas` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `current` int NOT NULL,
  `voltage_correct` int NOT NULL,
  `gas_flow` int NOT NULL,
  `Prog_Name_Robot` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Prog_Name_Source` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cladding_param`
--

LOCK TABLES `cladding_param` WRITE;
/*!40000 ALTER TABLE `cladding_param` DISABLE KEYS */;
INSERT INTO `cladding_param` VALUES (1,'DO-015','Ar',250,-2,12,'spaw1','spaw1'),(2,'Maraging','Ar+CO2+O2',230,2,12,'prog2','prog2'),(3,'DO-04','Ar+CO2+O2',240,0,12,'spaw3','spaw3');
/*!40000 ALTER TABLE `cladding_param` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_id`
--

DROP TABLE IF EXISTS `set_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_id` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `nazwa_kompletu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_id`
--

LOCK TABLES `set_id` WRITE;
/*!40000 ALTER TABLE `set_id` DISABLE KEYS */;
INSERT INTO `set_id` VALUES (1,'885-064','Komplet 1'),(2,'196-030','Komplet 2'),(3,'510-203','Komplet 3'),(4,'885-159','Komplet 4'),(5,'885-160','Komplet 5');
/*!40000 ALTER TABLE `set_id` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tool`
--

DROP TABLE IF EXISTS `tool`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tool` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `materiał` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `tool_type` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `reg_cycles` int NOT NULL,
  `id_cladd_prog` int NOT NULL,
  `id_set` int NOT NULL,
  `qr` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cladd_prog` (`id_cladd_prog`),
  KEY `tool_ibfk_2` (`id_set`),
  CONSTRAINT `tool_ibfk_1` FOREIGN KEY (`id_cladd_prog`) REFERENCES `cladding_param` (`id`),
  CONSTRAINT `tool_ibfk_2` FOREIGN KEY (`id_set`) REFERENCES `set_id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tool`
--

LOCK TABLES `tool` WRITE;
/*!40000 ALTER TABLE `tool` DISABLE KEYS */;
INSERT INTO `tool` VALUES (1,'widlak.jpg','WCL','widłak',0,1,3,'id_01.png'),(2,'matryca_na_mlot.jpg','Unimax','dźwignia 1',2,2,1,'id_02.png'),(3,'piasta.jpg','WCL','piasta',2,1,2,'id_03.png'),(4,'okrojnica.jpg','WNL','dźwignia 2',1,1,4,'id_04.png'),(5,'widlak.jpg','WCL','widłak',2,1,3,'id_05.png'),(6,'piasta.jpg','WNL','piasta',2,2,2,'id_06.png'),(7,'matryca_na_mlot.jpg','Unimax','dźwignia 1',2,1,1,'id_07.png'),(8,'widlak.jpg','WCL','widłak',1,2,3,'id_08.png'),(9,'piasta.jpg','Unimax','piasta',0,1,2,'id_09.png'),(10,'okrojnica.jpg','WNL','dźwignia 2',3,1,1,'id_10.png'),(11,'widlak.jpg','Unimax','widłak',1,3,1,'id_11.png'),(12,'piasta.jpg','WNL','piasta',0,3,3,'id_12.png');
/*!40000 ALTER TABLE `tool` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'baza'
--

--
-- Dumping routines for database 'baza'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-13 16:30:07
