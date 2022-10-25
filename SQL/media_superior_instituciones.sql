CREATE DATABASE  IF NOT EXISTS `media_superior` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `media_superior`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: media_superior
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `instituciones`
--

DROP TABLE IF EXISTS `instituciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `instituciones` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nombre Institucion` varchar(45) NOT NULL,
  `Modalidad` varchar(45) NOT NULL,
  `Periodo_De_Ciclo` int NOT NULL,
  `Especialidad` varchar(45) NOT NULL,
  `Alumnos_Registrados_Paems` int NOT NULL,
  `IdMatricula_Inicial` int NOT NULL,
  `IdMatricula_Termino` int NOT NULL,
  `IdEdresados` int NOT NULL,
  `IdBaja_Temporal` int NOT NULL,
  `IdDesercion` int NOT NULL,
  `IdReprobado` int NOT NULL,
  `IdVulnerables` int NOT NULL,
  `IdVulnerables_Atendidos` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_IdMatricula_Inicial_idx` (`IdMatricula_Inicial`),
  KEY `fk_IdMatricula_Termino_idx` (`IdMatricula_Termino`),
  KEY `fk_IdEgresados_idx` (`IdEdresados`),
  KEY `fk_IdBaja_Temporal_idx` (`IdBaja_Temporal`),
  KEY `fk_IdReprobados_idx` (`IdReprobado`),
  KEY `fk_IdVulnerables_idx` (`IdVulnerables`),
  KEY `fk_IdVulnerables_Atendidos_idx` (`IdVulnerables_Atendidos`),
  KEY `fk_IdDesercion_idx` (`IdDesercion`),
  CONSTRAINT `fk_IdBaja_Temporal` FOREIGN KEY (`IdBaja_Temporal`) REFERENCES `baja_temporal` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdDesercion` FOREIGN KEY (`IdDesercion`) REFERENCES `desercion` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdEgresados` FOREIGN KEY (`IdEdresados`) REFERENCES `egresados` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdMatricula_Inicial` FOREIGN KEY (`IdMatricula_Inicial`) REFERENCES `matricula_inicial` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdMatricula_Termino` FOREIGN KEY (`IdMatricula_Termino`) REFERENCES `matricula_termino` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdReprobados` FOREIGN KEY (`IdReprobado`) REFERENCES `reprobados` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdVulnerables` FOREIGN KEY (`IdVulnerables`) REFERENCES `vulnerables` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_IdVulnerables_Atendidos` FOREIGN KEY (`IdVulnerables_Atendidos`) REFERENCES `vulnerables_atendidos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituciones`
--

LOCK TABLES `instituciones` WRITE;
/*!40000 ALTER TABLE `instituciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `instituciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-24 20:45:31
