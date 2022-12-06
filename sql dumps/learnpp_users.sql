-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: learnpp
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(72) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_fname` varchar(32) NOT NULL DEFAULT '',
  `user_mname` varchar(32) NOT NULL DEFAULT '',
  `user_lname` varchar(32) NOT NULL DEFAULT '',
  `user_cemail` varchar(64) NOT NULL DEFAULT '',
  `user_phone` varchar(12) NOT NULL DEFAULT '',
  `user_messenger` varchar(64) NOT NULL DEFAULT '',
  `user_balance` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (22,'rZulan','$2y$10$nDu/scH9VcQNojjR3JhET.m6VT4.NBNl8wUE6Q2u8XqSsEr6RcSae','roi.zulan@gmail.com','Alfredo Roi','B.','Naluz','roi.zulan@gmail.com','09568306800','messenger.me/RoiZulan',0),(23,'dZulan','$2y$10$fVEmqRsUvEVM9MHccHpevOzIV3CWXFjE/Hr/RcZD807Lj1wrOFidC','dev.zulan@gmail.com','Roi','B.','Zulan','dev.zulan@gmail.com','09568306800','messenger.me/RoiZulan',0),(24,'test','$2y$10$6ZeOB.1R7LqZz.cohqggwuB7i53tl/9.a0z4sh.caHBeOnzpDqG/q','test@f','test','test','test','test@test','test','test',0),(25,'test2','$2y$10$A8.V008zUMwH5H.QPk24PeGPXRlhDl2KYBPG9HzRp1CbU4RkcLtKW','test@fs','','','','','','',0),(26,'roiZulan','$2y$10$0Pi0aB/DBMoio9eGlEOOwO9ZNjdu90CcNDvl.2XY8gAEdRawfkWQS','rZulan@gmail.com','Row','Ur','Boat','5','9','merrily',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-06 11:40:16
