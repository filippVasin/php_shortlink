-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: med_test
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.18.04.1

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
-- Table structure for table `short_links`
--

DROP TABLE IF EXISTS `short_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `short_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `long_url` varchar(255) DEFAULT NULL,
  `short_url` varchar(52) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `short_links`
--

LOCK TABLES `short_links` WRITE;
/*!40000 ALTER TABLE `short_links` DISABLE KEYS */;
INSERT INTO `short_links` VALUES (1,'https://snipp.ru/view/155','med_test.local/d','2018-12-23',NULL,'2018-12-23'),(2,'https://snipp.ru/view/155','med_test.local/s','2018-12-23',NULL,'2018-12-23'),(3,'https://ruseller.com/lessons.php?rub=37&id=1579','4','2018-12-23',NULL,'2018-12-23'),(4,'https://ruseller.com/lessons.php?rub=37&id=1579','5','2018-12-23',NULL,'2018-12-23'),(5,'https://ruseller.com/lessons.php?rub=37&id=1579','6','2018-12-23',NULL,'2018-12-23'),(6,'ruseller.com/lessons.php?rub=37&id=1579','7','2018-12-23',NULL,NULL),(7,'https://blogden.ru/servis-sokrashcheniya-ssylok/','8','2018-12-23',NULL,'2018-12-23'),(8,'https://blogden.ru/servis-sokrashcheniya-ssylok/','9','2018-12-23',NULL,'2018-12-23'),(9,'https://blogden.ru/servis-sokrashcheniya-ssylok/','b','2018-12-23',NULL,NULL),(10,'https://blogden.ru/servis-sokrashcheniya-ssylok/','c','2018-12-23',NULL,'2018-12-23'),(11,'https://blogden.ru/servis-sokrashcheniya-ssylok/','d','2018-12-23',NULL,'2018-12-23'),(12,'https://blogden.ru/servis-sokrashcheniya-ssylok/','f','2018-12-23',NULL,'2018-12-23'),(13,'https://blogden.ru/servis-sokrashcheniya-ssylok/','g','2018-12-23',NULL,NULL),(14,'https://www.w3schools.com/sql/sql_update.asp','h','2018-12-23',NULL,'2018-12-23'),(15,'https://www.w3schools.com/sql/sql_update.asp','j','2018-12-23',NULL,'2018-12-24'),(16,'https://www.w3schools.com/sql/sql_update.asp','k','2018-12-23',NULL,NULL),(17,'phpclub.ru/faq/DesignPatterns/Singleton?v=4rn','m','2018-12-23',NULL,NULL),(18,'php.net/manual/ru/function.ltrim.php','m','2018-12-23',NULL,NULL),(19,'w3schools.com/sql/sql_syntax.asp','n','2018-12-24',NULL,NULL),(20,'docstore.mik.ua/c/h11.htm','k','2018-12-24',NULL,NULL),(21,'tehtab.ru/Guide/GuideUnitsAlphabets/Alphabets/AlphabetEnglish','l','2018-12-24',NULL,NULL),(22,'codeby.net/blogs/kak-najti-anglijskie-bukvy-v-tekste','m','2018-12-24',NULL,NULL),(23,'cyberforum.ru/php-beginners/thread513783.html','n','2018-12-24',NULL,NULL),(24,'cyberforum.ru/php-beginners/thread413631.html','o','2018-12-24',NULL,NULL),(25,'google.com','p','2018-12-24',NULL,NULL),(26,'ya.ru','q','2018-12-24',NULL,NULL),(27,'stackoverflow.com/questions/38112834/php-notice-string-offset-cast-occurred-line-251-258','r','2018-12-24',NULL,NULL);
/*!40000 ALTER TABLE `short_links` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-24 12:29:57
