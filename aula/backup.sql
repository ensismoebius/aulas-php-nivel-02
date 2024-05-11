-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: bailaoDoArnesto
-- ------------------------------------------------------
-- Server version	8.0.36-2ubuntu3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `postagem`
--

DROP TABLE IF EXISTS `postagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `postagem` (
  `cod` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `texto` varchar(2500) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postagem`
--

LOCK TABLES `postagem` WRITE;
/*!40000 ALTER TABLE `postagem` DISABLE KEYS */;
INSERT INTO `postagem` VALUES (1,'A Internacional - Levantem-se','De pé, ó vítimas da fome\r\nDe pé, famélicos da terra\r\nDa idéia a chama já consome\r\nA crosta bruta que a soterra'),(2,'A Internacional - Chamado para Erguer-se','Cortai o mal bem pelo fundo\nDe pé de pé não mais senhores\nSe nada somos em tal mundo\nSejamos tudo ó produtores'),(3,'A Internacional - Conquista','Senhores patrões chefes supremos\nNada esperamos de nenhum\nSejamos nós que conquistemos\nA terra mãe livre e comum'),(4,'A Internacional - Autossuficiência','Para não ter protestos vãos\nPara sair desse antro estreito\nFaçamos nós com nossas mãos\nTudo o que a nós nos diz respeito'),(5,'A Internacional - Injustiça Evidenciada','O Crime do rico a lei o cobre\nO estado esmaga o oprimido\nNão há direitos para o pobre\nAo rico tudo é permitido'),(6,'A Internacional - Igualdade para Todos','A opressão não mais sujeitos\nSomos iguais todos os seres\nNão mais deveres sem direitos\nNão mais direitos sem deveres'),(7,'A Internacional - Reis da Indústria','Abomináveis na grandeza\nOs reis da mina e da fornalha\nEdificaram a riqueza\nSobre o suor de quem trabalha'),(8,'A Internacional - Chamado para Restituição','Todo o produto de quem sua\nA corja rica o recolheu\nQueremos que nos restituam\nO povo quer só o que é seu'),(9,'A Internacional - Solidariedade e Greve','Nós fomos de fumo embriagados\nPaz entre nós guerra aos senhores\nFaçamos greve de soldados\nSomos irmãos trabalhadores'),(10,'A Internacional - Aviso aos Opressores','Se a raça vil cheia de galas\nNos quer à força canibais\nLogo verás que as nossas balas\nSão para os nossos generais'),(11,'A Internacional - O Povo Ativo','Pois somos do povo os ativos\nTrabalhador forte e fecundo\nPertence a terra aos produtivos\nÓ parasita deixa o mundo'),(12,'A Internacional - Parasitas','Ó parasita que te nutres\nDo nosso sangue a gotejar\nSe nos faltarem os abutres\nNão deixa o sol te fulgurar'),(13,'A Internacional - Chamado Final','Bem unidos façamos\nNesta luta final\nUma terra sem amos\nA internacional\nBem unidos façamos\nNesta luta final\nUma terra sem amos\nA internacional'),(18,'wqqewqe','rwqrwrq'),(19,'fdsgdsgsg','gdsgssdgdsgsyreyryre');
/*!40000 ALTER TABLE `postagem` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-10 21:55:17
