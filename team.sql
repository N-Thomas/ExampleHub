-- MySQL dump 10.14  Distrib 5.5.44-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: ExampleHub
-- ------------------------------------------------------
-- Server version	5.5.44-MariaDB

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
-- Table structure for table `Post`
--

DROP TABLE IF EXISTS `Post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Post` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(90) NOT NULL,
  `Category` varchar(45) NOT NULL,
  `Parent` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Text` longtext NOT NULL,
  `Score` int(11) NOT NULL,
  `Solved` bit(1) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `user_idx` (`UserID`),
  CONSTRAINT `user` FOREIGN KEY (`UserID`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Post`
--

LOCK TABLES `Post` WRITE;
/*!40000 ALTER TABLE `Post` DISABLE KEYS */;
INSERT INTO `Post` VALUES (78,'How do you calculate force?','Science',0,47,'What is the formula?\r\n',1,'','2016-05-03 22:04:32'),(79,'Fractions','Math',0,48,'How do you divide fractions?',1,'','2016-05-03 22:06:03'),(80,'Question about Chemistry','Science',0,50,'What is an Anion?\r\n',1,'','2016-05-03 22:06:52'),(81,'reply','Math',79,50,'First change the division to multiplication, then flip the numerator and denominator of the second term.  Then treat it the same as you would a multiplication of fractions.\r\n\r\nExample:\r\n3/8   /     4/2\r\n\r\nIs the same as\r\n\r\n3/8    *    2/4\r\n\r\nWhich equals\r\n6/32  =  3/16',2,'','2016-05-03 22:09:39'),(82,'reply','Science',78,50,'Force = Mass*Acceleration.\r\n\r\nFor example, Gravity accelerates objects downwards at 9.8m/s/s.  If an object has a mass of 12kg, the force of gravity on that object would be:\r\n\r\nForce = Mass*Acceleration = 12kg*9.8m/s/s = 117.6 kg*m/s/s = 117.6 Newtons',1,'','2016-05-03 22:13:00'),(83,'Why do objects float in liquids denser than t','Science',0,51,'What force makes the rise to the top?',1,'','2016-05-03 22:13:53'),(84,'Calculus help please!','Math',0,50,'How do you find the derivative of a binomial?\r\n',1,'','2016-05-03 22:13:57'),(85,'Falling Speed','Science',0,51,'Do heavier objects fall more slowly than lighter objects?',1,'','2016-05-03 22:15:13'),(86,'Gravity','Science',0,51,'How come in free fall you feel weightless even though gravity is pulling down on you? (ignore air resistance when answering this question). ',1,'','2016-05-03 22:17:08'),(87,'Forces','Science',0,51,'What is the difference between centripetal acceleration and centrifugal force? ',1,'','2016-05-03 22:18:06'),(88,'reply','Math',84,52,'Simply multiply the factor by its variable\'s exponent and subtract 1 from the exponent.  ie:  x^3 + 3x^2 + 4x + 3; derivative = 3x^2 + 6x + 4',1,'','2016-05-03 22:18:21'),(89,'Power and Energy','Science',0,51,'What is the difference between energy and power? \r\n',1,'','2016-05-03 22:18:46'),(90,'What does a derivative do?','Math',0,52,'I have learned how to calculate a derivative, but I\'m not sure I understand what it does.  Can somebody explain?!',1,'','2016-05-03 22:19:23'),(92,'Car Crash Forces','Math',0,51,'Two identical cars collide head on. Each car is traveling at 100 km/h. The impact force on each car is the same as hitting a solid wall at: \r\n\r\n(a) 100 km/h \r\n\r\n(b) 200 km/h \r\n\r\n(c) 150 km/h \r\n\r\n(d) 50 km/h ',3,'','2016-05-03 22:19:44'),(93,'pythagorean theorem','Math',0,49,'Can someone explain this to me? I\'m confused.\r\n',4,'','2016-05-03 22:19:50'),(94,'reply','Math',93,49,'a^2 + b^2 = c^2\r\n',1,'','2016-05-03 22:20:34'),(95,'String Theory','Science',0,51,'What exactly is string theory?',1,'','2016-05-03 22:20:58'),(96,'reply','Math',90,53,'A derivative of a function calculates the rate of change of the value of the function at any given x value.',1,'','2016-05-03 22:21:48'),(97,'reply','Math',92,53,'This is a trick question.  Force is not affected by velocity, only by acceleration.  If the question were asking about impulse, the change in momentum, the answer would be b.  ',3,'','2016-05-03 22:26:13'),(98,'reply','Math',93,53,'Formula: a^2+b^2=c^2.  The pythagorean theorem solves the lengths of the sides of a right triangle.  In any given right triangle, the sides adjacent to the right angle are considered sides a and b, and the side opposite of the right angle is considered c.  If given the lengths of a and b, you can square each, add them together and square root the sum to find length c.  Simple algebraic manipulation can be used to find the length of any 3rd side when given the lengths of the other 2.  Example: a=3, c=5 => 25-9=16 => sqrt(16)=4 => b=4.',2,'','2016-05-03 22:31:19'),(99,'How do you add?','Math',0,52,'I don\'t get it.\r\n',0,'','2016-05-03 22:34:08'),(100,'Polynomial','Math',0,54,'How do I express an answer in the form of a polynomial?',3,'','2016-05-03 23:04:32'),(101,'reply','Math',100,54,'Something like \"2aÂ² + 3b\" would be in the form of a polynomial. ',1,'','2016-05-03 23:11:25'),(102,'reply','Math',92,47,'Definitely B.  Superhacker gave a great explanation',1,'','2016-05-04 00:42:12');
/*!40000 ALTER TABLE `Post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Upvotes`
--

DROP TABLE IF EXISTS `Upvotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Upvotes` (
  `idPost` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  KEY `user_idx` (`idUser`),
  KEY `post_idx` (`idPost`),
  CONSTRAINT `userUpVote` FOREIGN KEY (`idUser`) REFERENCES `User` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `postUpVote` FOREIGN KEY (`idPost`) REFERENCES `Post` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Upvotes`
--

LOCK TABLES `Upvotes` WRITE;
/*!40000 ALTER TABLE `Upvotes` DISABLE KEYS */;
INSERT INTO `Upvotes` VALUES (93,52),(100,52),(92,52),(97,52),(97,47),(92,47),(98,47),(81,48);
/*!40000 ALTER TABLE `Upvotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Privelages` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UserName_UNIQUE` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (47,'Aaron','$2y$10$aBsRFmX/f7vUMMRCpXhJueN6H8q8fPu9foZSBQQ9LZmnB2fmdJB6W',0),(48,'Inigo','$2y$10$I/N/HkYpwHIzDppaodIbiu/F2Q6KBUgyUxwJzAtmkWpXc.J96L9ga',0),(49,'mitchpenrose','$2y$10$usz1P1pZb4.w70IaLVsenehRUwRJyT6LrbWBq.9QABxIA5XKyY9v2',0),(50,'SteveJobs','$2y$10$AEq.KKRBEfaf0o69yBqozO05pVmZNkcorHvmRnSSFvsCm.Y6Pdgh.',0),(51,'Nick','$2y$10$sUQdOwCQ.TYYZnm1r2bsaeV/kCALO5oDg5DMGtiZNZRG51.UetH..',0),(52,'IsaacNewton','$2y$10$8QtAGWHxKnqXtGDYXUoFQurGsjHpFIKprcdgr9dM7aWE491h.K6nK',0),(53,'SuperHacker1337','$2y$10$RiXjeBvG1HVmddrLaiD0H.NkKuWL72A915fRw99NpkP5.92tnawEi',0),(54,'Test','$2y$10$dLMp3TxC4eXRencNb3AvA.GCXKBVbODVBf4AIDZNMV11HOPvx75PG',0);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-04  1:50:30
