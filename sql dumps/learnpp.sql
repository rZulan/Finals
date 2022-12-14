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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admins` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `admin_level` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id_UNIQUE` (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (23,22,7),(24,34,7);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courses` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `course_name` varchar(64) NOT NULL,
  `course_description` varchar(1024) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`course_id`),
  UNIQUE KEY `course_id_UNIQUE` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'PHP','PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server, is a server-side scripting language created in 1995 by Rasmus Lerdorf. PHP is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.'),(2,'Javascript',' JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat, JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else. Okay, not everything, but it is amazing what you can achieve with a few lines of JavaScript code.'),(3,'HTML','HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning and structure of web content. Other technologies besides HTML are generally used to describe a web page\'s appearance/presentation (CSS) or functionality/behavior (JavaScript).'),(4,'CSS','CSS (Cascading Style Sheets) is used to style and layout web pages — for example, to alter the font, color, size, and spacing of your content, split it into multiple columns, or add animations and other decorative features and it is Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable. CSS handles the look and feel part of a web page.'),(5,'C','The C programming language is a procedural and general-purpose language that provides low-level access to system memory. A program written in C must be run through a C compiler to convert it into an executable that a computer can run.'),(6,'C++','C++ is an object-oriented programming (OOP) language that is viewed by many as the best language for creating large-scale applications. C++ is a superset of the C language. A related programming language, Java, is based on C++ but optimized for the distribution of program objects in a network such as the Internet.'),(7,'C#','C# (pronounced \"See Sharp\") is a modern, object-oriented, and type-safe programming language. C# enables developers to build many types of secure and robust applications that run in . NET. C# has its roots in the C family of languages and will be immediately familiar to C, C++, Java, and JavaScript programmers.'),(8,'Python','Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. It was originally released in 1991. Designed to be easy as well as fun, the name \"Python\" is a nod to the British comedy group Monty Python.'),(9,'Java','Java is a widely used object-oriented programming language and software platform that runs on billions of devices, including notebook computers, mobile devices, gaming consoles, medical devices and many others. The rules and syntax of Java are based on the C and C++ languages.'),(10,'Algorithms','An algorithm is a procedure used for solving a problem or performing a computation. Algorithms act as an exact list of instructions that conduct specified actions step by step in either hardware- or software-based routines.'),(11,'Programming Languages','A programming language is an artificial language that can be used to control the behaviour of a machine, particularly a computer. Programming languages, like human languages, are defined through the use of syntactic and semantic rules, to determine structure and meaning respectively.'),(12,'Operating Systems','An operating system (OS) is the program that, after being initially loaded into the computer by a boot program, manages all of the other application programs in a computer. The application programs make use of the operating system by making requests for services through a defined application program interface (API).'),(13,'Web Systems','Web-based systems can eliminate the need for powerful client PCs. Processing is carried out on the host server. The host server can be engineered to efficiently service simultaneous, peak demand. So, the storage, processor, and memory requirements for client PCs can be reduced.'),(14,'Software Development','Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software. Software itself is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.'),(15,'Unity Game Development','Unity is a tool that allows you to accomplish different types of tasks related to the game production process. Unity provides game developers with a 2D and 3D platform to create video games. What makes Unity so appealing to developers is that it\'s simple to use so that you don\'t need to start from scratch.'),(16,'Web Development','Web development is the building and maintenance of websites; it\'s the work that happens behind the scenes to make a website look great, work fast and perform well with a seamless user experience. Web developers, or \'devs\', do this by using a variety of coding languages.'),(18,'Test','test');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logs` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `log_type` varchar(64) NOT NULL,
  `log_message` varchar(128) NOT NULL,
  `log_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `log_id_UNIQUE` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` VALUES (3,'Authentication','User [22] rZulan just logged in','2022-12-08 09:32:38'),(4,'Authentication','User [22] rZulan just logged in.','2022-12-08 09:45:03'),(5,'Authentication','User [22] rZulan just logged out.','2022-12-08 09:45:20'),(6,'Authentication','User [22] rZulan just logged in.','2022-12-08 09:45:30'),(7,'Authentication','User [22] rZulan just logged out.','2022-12-08 09:45:53'),(8,'Authentication','New user registered with <b>[username: test2 | email: test@f | ip: ::1]</b>.','2022-12-08 09:46:17'),(9,'Authentication','User [28] test2 just logged out.','2022-12-08 09:46:23'),(10,'Authentication','User [22] rZulan just logged in.','2022-12-08 09:46:32'),(11,'Authentication','User [22] rZulan just logged in.','2022-12-08 13:27:43'),(12,'Authentication','User [22] rZulan just logged out.','2022-12-08 13:51:39'),(13,'Authentication','User [22] rZulan just logged in.','2022-12-10 13:49:49'),(14,'Authentication','User [22] rZulan just logged in.','2022-12-11 13:18:53'),(15,'Authentication','New user registered with <b>[username: kuris | email: crmestrella17@gmail.com | ip: 26.116.251.155]</b>.','2022-12-11 13:58:27'),(16,'Authentication','User [22] rZulan just logged in.','2022-12-11 13:58:56'),(17,'Authentication','User [29] kuris just logged out.','2022-12-11 13:59:19'),(18,'Authentication','User [29] kuris just logged in.','2022-12-11 13:59:32'),(19,'Authentication','User [29]  just logged out.','2022-12-11 14:01:15'),(20,'Authentication','User [22] rZulan just logged out.','2022-12-11 14:02:51'),(21,'Authentication','User [22] rZulan just logged in.','2022-12-11 14:03:56'),(22,'Authentication','User [22] rZulan just logged out.','2022-12-11 14:14:05'),(23,'Authentication','User [22] rZulan just logged in.','2022-12-11 14:14:09'),(24,'Authentication','User [22] rZulan just logged out.','2022-12-11 14:15:28'),(25,'Authentication','User [22] rZulan just logged in.','2022-12-11 14:17:01'),(26,'Authentication','User [22] rZulan just logged in.','2022-12-12 18:34:02'),(28,'Authentication','User [30]  just logged out.','2022-12-12 18:50:00'),(29,'Authentication','New user registered with <b>[username: dhentite | email: fdsa@gmail.com | ip: 26.185.31.144]</b>.','2022-12-12 18:59:42'),(30,'Authentication','User [22] rZulan just logged in.','2022-12-13 15:13:55'),(31,'Authentication','User [22] rZulan just logged out.','2022-12-13 15:14:52'),(32,'Authentication','New user registered with <b>[username: piolo | email: piolo@gmail.com | ip: ::1]</b>.','2022-12-13 15:17:13'),(33,'Authentication','User [32] piolo just logged out.','2022-12-13 22:08:12'),(34,'Authentication','User [22] rZulan just logged in.','2022-12-13 22:08:27'),(35,'Authentication','User [22] rZulan just logged in.','2022-12-14 10:05:39'),(36,'Authentication','New user registered with <b>[username: Ramburat | email: asdfasdf@yahoo.com | ip: 26.159.221.225]</b>.','2022-12-14 13:40:49'),(37,'Authentication','User [22] rZulan just logged in.','2022-12-14 13:40:57'),(38,'Authentication','New user registered with <b>[username: kuris | email: crmestrella17@gmail.com | ip: 26.116.251.155]</b>.','2022-12-14 13:40:59'),(39,'Authentication','User [34] kuris just logged out.','2022-12-14 13:41:09'),(40,'Authentication','User [34] kuris just logged in.','2022-12-14 13:41:54'),(41,'Authentication','New user registered with <b>[username: safa | email: jinhorenzhorenz@gmail.com | ip: 26.205.221.231]</b>.','2022-12-14 13:56:07'),(42,'Authentication','User [22] rZulan just logged out.','2022-12-14 13:59:01'),(43,'Authentication','New user registered with <b>[username: test22 | email: test@f | ip: 26.238.198.155]</b>.','2022-12-14 14:15:02'),(44,'Authentication','User [22] rZulan just logged in.','2022-12-14 15:16:33'),(45,'Authentication','User [22] rZulan just logged out.','2022-12-14 15:44:24'),(46,'Authentication','User [22] rZulan just logged in.','2022-12-14 15:44:28'),(47,'Authentication','User [22] rZulan just logged out.','2022-12-14 15:44:33'),(48,'Authentication','User [22] rZulan just logged in.','2022-12-14 15:44:41'),(49,'Authentication','User [22] rZulan just logged out.','2022-12-14 18:03:44'),(50,'Authentication','User [22] rZulan just logged in.','2022-12-14 18:03:55'),(51,'Authentication','User [22] rZulan just logged out.','2022-12-14 18:04:19'),(52,'Authentication','New user registered with <b>[username: tjss | email: tj@gmail.com | ip: 26.185.31.144]</b>.','2022-12-14 20:26:42'),(53,'Authentication','User [37] tjss just logged out.','2022-12-14 20:26:45'),(54,'Authentication','User [37] tjss just logged in.','2022-12-14 20:27:11'),(55,'Authentication','User [37] tjss just logged in.','2022-12-14 20:30:06'),(56,'Authentication','User [22] rZulan just logged in.','2022-12-14 20:30:39'),(57,'Authentication','User [22] rZulan just logged out.','2022-12-14 20:30:41'),(58,'Authentication','User [22] rZulan just logged in.','2022-12-14 20:30:58'),(59,'Authentication','User [22] rZulan just logged out.','2022-12-14 20:33:11'),(60,'Authentication','User [22] rZulan just logged in.','2022-12-14 20:33:14'),(61,'Authentication','User [22] rZulan just logged out.','2022-12-14 20:33:16'),(62,'Authentication','User [22] rZulan just logged in.','2022-12-14 20:33:26'),(63,'Authentication','User [22] rZulan just logged out.','2022-12-14 20:33:30');
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `session_id` int NOT NULL AUTO_INCREMENT,
  `tutor_id` int NOT NULL,
  `student_id` int NOT NULL,
  `session_start` datetime NOT NULL,
  `session_end` datetime NOT NULL,
  `session_location` varchar(64) NOT NULL,
  `session_mode` tinyint NOT NULL,
  `session_payment` int NOT NULL,
  PRIMARY KEY (`session_id`),
  UNIQUE KEY `session_id_UNIQUE` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_course`
--

DROP TABLE IF EXISTS `tutor_course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor_course` (
  `tc_id` int NOT NULL AUTO_INCREMENT,
  `tutor_id` int NOT NULL,
  `course_id` int NOT NULL,
  `tc_fee` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`tc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_course`
--

LOCK TABLES `tutor_course` WRITE;
/*!40000 ALTER TABLE `tutor_course` DISABLE KEYS */;
INSERT INTO `tutor_course` VALUES (1,2,1,0),(2,6,1,0),(3,7,1,0);
/*!40000 ALTER TABLE `tutor_course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_notifications`
--

DROP TABLE IF EXISTS `tutor_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor_notifications` (
  `tn_id` int NOT NULL AUTO_INCREMENT,
  `tn_tutor` int NOT NULL,
  `tn_type` varchar(32) NOT NULL,
  `tn_message` varchar(256) NOT NULL,
  PRIMARY KEY (`tn_id`),
  UNIQUE KEY `tn_id_UNIQUE` (`tn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_notifications`
--

LOCK TABLES `tutor_notifications` WRITE;
/*!40000 ALTER TABLE `tutor_notifications` DISABLE KEYS */;
INSERT INTO `tutor_notifications` VALUES (11,2,'New Student','Student Details: <b>Username:</b> rZulan | <b>Full Name:</b> Alfredo Roi B. Naluz | <b>Course:</b> PHP.'),(12,7,'New Student','Student Details: <b>Username:</b> Ramburat | <b>Full Name:</b>    | <b>Course:</b> PHP.'),(13,2,'New Student','Student Details: <b>Username:</b> kuris | <b>Full Name:</b> Chris Mariano Estrella | <b>Course:</b> PHP.');
/*!40000 ALTER TABLE `tutor_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_requests`
--

DROP TABLE IF EXISTS `tutor_requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor_requests` (
  `tr_id` int NOT NULL AUTO_INCREMENT,
  `tr_tutor` int NOT NULL,
  `tr_course` int NOT NULL,
  `tr_student` int NOT NULL,
  `tr_notification` int NOT NULL,
  PRIMARY KEY (`tr_id`),
  UNIQUE KEY `tr_id_UNIQUE` (`tr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_requests`
--

LOCK TABLES `tutor_requests` WRITE;
/*!40000 ALTER TABLE `tutor_requests` DISABLE KEYS */;
INSERT INTO `tutor_requests` VALUES (1,2,1,22,11),(2,7,1,33,12),(3,2,1,34,13);
/*!40000 ALTER TABLE `tutor_requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutor_students`
--

DROP TABLE IF EXISTS `tutor_students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor_students` (
  `ts_id` int NOT NULL AUTO_INCREMENT,
  `ts_tutor` int NOT NULL,
  `ts_student` int NOT NULL,
  `ts_course` int NOT NULL,
  PRIMARY KEY (`ts_id`),
  UNIQUE KEY `ts_id_UNIQUE` (`ts_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_students`
--

LOCK TABLES `tutor_students` WRITE;
/*!40000 ALTER TABLE `tutor_students` DISABLE KEYS */;
INSERT INTO `tutor_students` VALUES (1,2,22,1),(2,7,33,1),(3,2,34,1);
/*!40000 ALTER TABLE `tutor_students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tutors`
--

DROP TABLE IF EXISTS `tutors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutors` (
  `tutor_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  PRIMARY KEY (`tutor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutors`
--

LOCK TABLES `tutors` WRITE;
/*!40000 ALTER TABLE `tutors` DISABLE KEYS */;
INSERT INTO `tutors` VALUES (2,22),(6,31),(7,34);
/*!40000 ALTER TABLE `tutors` ENABLE KEYS */;
UNLOCK TABLES;

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
  `user_ip` varchar(15) NOT NULL,
  `user_fname` varchar(32) NOT NULL DEFAULT '',
  `user_mname` varchar(32) NOT NULL DEFAULT '',
  `user_lname` varchar(32) NOT NULL DEFAULT '',
  `user_cemail` varchar(64) NOT NULL DEFAULT '',
  `user_phone` varchar(12) NOT NULL DEFAULT '',
  `user_messenger` varchar(64) NOT NULL DEFAULT '',
  `user_balance` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (22,'rZulan','$2y$10$nDu/scH9VcQNojjR3JhET.m6VT4.NBNl8wUE6Q2u8XqSsEr6RcSae','roi.zulan@gmail.com','127.0.0.1','Alfredo Roi','B.','Naluz','roi.zulan@gmail.com','09568306800','messenger.me/RoiZulan',0),(31,'dhentite','$2y$10$mNXOqQukvzxyeTEY5JjAMu0I.BVz/UR1GxhuhC5xKBAagcMhE7sxC','fdsa@gmail.com','26.185.31.144','fasd','fasd','afsd','fdsa@gmail.com','11111111111','afsd',0),(32,'piolo','$2y$10$ygDcUZC.UCkw7IMQgoeufu2kzlhtOe2xfsqbF.s2as3zBf4jEemp2','piolo@gmail.com','::1','Allll','ATGAG','AGAW#E','','','',0),(33,'Ramburat','$2y$10$JKjwYuJ4srDY4C6vmADvLObaNAzRiWkR1.y.fAMFU2kYO.m/CWyE6','asdfasdf@yahoo.com','26.159.221.225','','','','','','',0),(34,'kuris','$2y$10$udx9bpDu5D/I.LbirefCeOXCqQvPNaKpIlLCPJbQb8E5UF3Yc6GG2','crmestrella17@gmail.com','26.116.251.155','Chris','Mariano','Estrella','crmestrella17@gmail.com','09193876969','.pakyu',0),(35,'safa','$2y$10$0spx83.J9lWvSkhtVDjwLuqrEupvx5Ytd1HMqjPY32HYs9BaBC1xW','jinhorenzhorenz@gmail.com','26.205.221.231','','','','','','',0),(36,'test22','$2y$10$DKXFfXfYFEoJF7I6ySgNZ.aUBFMHIx9zcDWEhXIB0rCEkbOvlwJUm','test@f','26.238.198.155','','','','','','',0),(37,'tjss','$2y$10$VXzVte5I9HcTEdoWkiJ2I.KB.25XZ2x9D/H1UOO.o9UhyDgyg6Ssy','tj@gmail.com','26.185.31.144','','','','','','',0);
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

-- Dump completed on 2022-12-14 21:27:39
