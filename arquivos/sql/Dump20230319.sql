CREATE DATABASE projetoweb2;
use projetoweb2;

-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: web2
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `aluno`
--

DROP TABLE IF EXISTS aluno;

CREATE TABLE aluno (
  RA int NOT NULL,
  idPessoa bigint NOT NULL,
  idCurso bigint DEFAULT NULL,
  PRIMARY KEY (idPessoa),
  KEY FKmy3bsnb8o1g30rdryntmrykux (idCurso),
  CONSTRAINT FK6jy36q5b96ogr6ynhemfdmymd FOREIGN KEY (idPessoa) REFERENCES pessoa (idPessoa),
  CONSTRAINT FKmy3bsnb8o1g30rdryntmrykux FOREIGN KEY (idCurso) REFERENCES curso (idCurso)
) ENGINE=InnoDB;


--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;

CREATE TABLE `campus` (
  `idCampus` bigint NOT NULL AUTO_INCREMENT,
  `CEP` int NOT NULL,
  `nomeCampus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCampus`)
) ENGINE=InnoDB;


--
-- Table structure for table `area`
--

DROP TABLE IF EXISTS `area`;

CREATE TABLE `area` (
  `idArea` bigint NOT NULL AUTO_INCREMENT,
  `nomeArera` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idArea`)
) ENGINE=InnoDB;


--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `idCurso` bigint NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(255) DEFAULT NULL,
  `notaCurso` int NOT NULL,
  `idArea` bigint DEFAULT NULL,
  `idCampus` bigint DEFAULT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `FKc9rb2iy5jtpdgvfu01murb6au` (`idCampus`),
  KEY `FKc8rb1iy4jtpdgvfu00murb5au` (`idArea`),
  CONSTRAINT `FKc9rb2iy5jtpdgvfu01murb6au` FOREIGN KEY (`idCampus`) REFERENCES `campus` (`idCampus`),
  CONSTRAINT `FKc8rb1iy4jtpdgvfu00murb5au` FOREIGN KEY (`idArea`) REFERENCES `area` (`idArea`)
) ENGINE=InnoDB;


--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS pessoa;

CREATE TABLE pessoa (
  idPessoa bigint NOT NULL AUTO_INCREMENT,
  dataEntrada date DEFAULT NULL,
  emailInstitucional varchar(255) DEFAULT NULL,
  idade int NOT NULL,
  nome varchar(255) DEFAULT NULL,
  sexo varchar(255) DEFAULT NULL,
  PRIMARY KEY (idPessoa)
) ENGINE=InnoDB;


--
-- Table structure for table `professor`
--

DROP TABLE IF EXISTS `professor`;

CREATE TABLE `professor` (
  `SIAPE` int NOT NULL,
  `idPessoa` bigint NOT NULL,
  `idCurso` bigint DEFAULT NULL,
  PRIMARY KEY (`idPessoa`),
  KEY `FKsya5vnu6ifqp9r8w2o36xlx9u` (`idCurso`),
  CONSTRAINT `FKl494lf0hndkvxipfsgwh2e6oi` FOREIGN KEY (`idPessoa`) REFERENCES `pessoa` (`idPessoa`),
  CONSTRAINT `FKsya5vnu6ifqp9r8w2o36xlx9u` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`)
) ENGINE=InnoDB;


--
-- Dumping events for database 'web2'
--

--
-- Dumping routines for database 'web2'
--


-- Dump completed on 2023-03-19 21:38:02
