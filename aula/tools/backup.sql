-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: mercadinho
-- ------------------------------------------------------
-- Server version	8.0.32

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

DROP DATABASE IF EXISTS `mercadinho`;

CREATE DATABASE `mercadinho`;

USE `mercadinho`;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Cliente` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES (1,'Wanderlei Melaço'),(2,'André Abelha'),(3,'Abu Abujab');
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedido`
--

DROP TABLE IF EXISTS `Pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pedido` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `codCli` int DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `codCli` (`codCli`),
  CONSTRAINT `Pedido_ibfk_1` FOREIGN KEY (`codCli`) REFERENCES `Cliente` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedido`
--

LOCK TABLES `Pedido` WRITE;
/*!40000 ALTER TABLE `Pedido` DISABLE KEYS */;
INSERT INTO `Pedido` VALUES (1,'Bar Wiskritorio','2022-08-16 20:30:47',1),(2,'Sorveteria Kidaora','2022-07-01 10:01:45',2),(3,'Compra do dia D da hora H','2022-09-02 21:32:00',1);
/*!40000 ALTER TABLE `Pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pedido_Produto`
--

DROP TABLE IF EXISTS `Pedido_Produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pedido_Produto` (
  `codProd` int DEFAULT NULL,
  `codPed` int DEFAULT NULL,
  `qtde` int DEFAULT NULL,
  KEY `codProd` (`codProd`),
  KEY `codPed` (`codPed`),
  CONSTRAINT `Pedido_Produto_ibfk_1` FOREIGN KEY (`codProd`) REFERENCES `Produto` (`cod`),
  CONSTRAINT `Pedido_Produto_ibfk_2` FOREIGN KEY (`codPed`) REFERENCES `Pedido` (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pedido_Produto`
--

LOCK TABLES `Pedido_Produto` WRITE;
/*!40000 ALTER TABLE `Pedido_Produto` DISABLE KEYS */;
INSERT INTO `Pedido_Produto` VALUES (3,3,10),(2,3,3),(1,3,20);
/*!40000 ALTER TABLE `Pedido_Produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Produto`
--

DROP TABLE IF EXISTS `Produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Produto` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `tipo` (`tipo`),
  CONSTRAINT `Produto_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `TipoDeProduto` (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produto`
--

LOCK TABLES `Produto` WRITE;
/*!40000 ALTER TABLE `Produto` DISABLE KEYS */;
INSERT INTO `Produto` VALUES (1,'Kibada de soja',2),(2,'Coxinha de jaca',3),(3,'Hamburguer de lentinha',3),(4,'Morango com coco',1);
/*!40000 ALTER TABLE `Produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Telefone`
--

DROP TABLE IF EXISTS `Telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Telefone` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `tel` varchar(14) DEFAULT NULL,
  `codCli` int DEFAULT NULL,
  PRIMARY KEY (`cod`),
  KEY `codCli` (`codCli`),
  CONSTRAINT `Telefone_ibfk_1` FOREIGN KEY (`codCli`) REFERENCES `Cliente` (`cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Telefone`
--

LOCK TABLES `Telefone` WRITE;
/*!40000 ALTER TABLE `Telefone` DISABLE KEYS */;
/*!40000 ALTER TABLE `Telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TipoDeProduto`
--

DROP TABLE IF EXISTS `TipoDeProduto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `TipoDeProduto` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TipoDeProduto`
--

LOCK TABLES `TipoDeProduto` WRITE;
/*!40000 ALTER TABLE `TipoDeProduto` DISABLE KEYS */;
INSERT INTO `TipoDeProduto` VALUES (1,'Sorvetes'),(2,'Marmitas'),(3,'Petiscos');
/*!40000 ALTER TABLE `TipoDeProduto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-11 20:11:58
