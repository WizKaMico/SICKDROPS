-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u659776478_sickdrops
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (2,'admin@gmail.com','admin'),(3,'adminmico@gmail.com','admin'),(4,'grab012@gmail.com','admin'),(5,'grab01@gmail.com','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

--
-- Table structure for table `costomize_shirt_order`
--

DROP TABLE IF EXISTS `costomize_shirt_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `costomize_shirt_order` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_id` int(50) NOT NULL,
  `shirt_style` int(50) NOT NULL,
  `shirt_size` int(50) NOT NULL,
  `estimated_amount` int(50) NOT NULL,
  `final_amount` int(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `photo` text NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `costomize_shirt_order`
--

/*!40000 ALTER TABLE `costomize_shirt_order` DISABLE KEYS */;
INSERT INTO `costomize_shirt_order` VALUES (1,'ZOCLOCK-6856',100,'tricore012@gmail.com',5,2,3,45000,8000000,'NOT DELIVERED','upload/1670457971.jpeg','2022-12-08'),(4,'ZOCLOCK-8569',1,'tricore012@gmail.com',5,1,2,350,0,'IMAGE UPLOADED','upload/1670511387.jpeg','2022-12-08'),(5,'ZOCLOCK-7835',12,'tricore012@gmail.com',5,2,2,4800,5000,'ACCEPTED','upload/1670512792.jpeg','2022-12-08'),(8,'ZOCLOCK-7271',1,'johnrenzdubria@gmail.com',2,2,3,450,4500,'ACCEPTED','upload/1670547109.jpeg','2022-12-09'),(9,'ZOCLOCK-9460',20,'johnrenzdubria@gmail.com',2,1,2,7000,8000,'ACCEPTED','upload/1670547528.jpeg','2022-12-09'),(10,'ZOCLOCK-7792',1,'tricore012@gmail.com',5,1,1,300,0,'IMAGE UPLOADED','upload/1670559351.jpeg','2022-12-09'),(11,'ZOCLOCK-6674',3,'romelsegundera12345@gmail.com',5,2,4,1500,0,'REJECTED','upload/1670559720.jpeg','2022-12-09'),(13,'ZOCLOCK-6771',5,'romelsegundera12345@gmail.com',5,2,3,2250,8000,'FOR DELIVERY','upload/1670561270.jpeg','2022-12-09'),(14,'ZOCLOCK-7498',1,'tricore012@gmail.com',5,2,3,450,0,'IMAGE UPLOADED','upload/1670565477.jpeg','2022-12-09'),(16,'ZOCLOCK-8481',1,'tricore012@gmail.com',5,2,4,500,0,'IMAGE UPLOADED','upload/1670566578.jpeg','2022-12-09'),(17,'ZOCLOCK-8781',1,'tricore012@gmail.com',5,2,3,450,0,'IMAGE UPLOADED','upload/1670567844.jpeg','2022-12-09'),(21,'ZOCLOCK-9405',1,'sickdroptest@gmail.com',6,1,3,400,0,'IMAGE UPLOADED','upload/1670580945.jpeg','2022-12-09'),(22,'ZOCLOCK-7496',10,'sickdroptest@gmail.com',6,1,2,3500,0,'REJECTED','upload/1670581265.jpeg','2022-12-09'),(25,'ZOCLOCK-8254',10,'tricore012@gmail.com',5,2,3,4500,0,'IMAGE UPLOADED','upload/1671163684.jpeg','2022-12-16'),(26,'ZOCLOCK-9991',10,'tricore012@gmail.com',1,1,1,3000,0,'IMAGE UPLOADED','upload/1671163761.jpeg','2022-12-16'),(27,'ZOCLOCK-8043',5,'romelsegundera12345@gmail.com',5,2,2,2000,0,'IMAGE UPLOADED','upload/1671171229.jpeg','2022-12-16');
/*!40000 ALTER TABLE `costomize_shirt_order` ENABLE KEYS */;

--
-- Table structure for table `custom_rating`
--

DROP TABLE IF EXISTS `custom_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom_rating` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `rating` int(50) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom_rating`
--

/*!40000 ALTER TABLE `custom_rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `custom_rating` ENABLE KEYS */;

--
-- Table structure for table `customize_size`
--

DROP TABLE IF EXISTS `customize_size`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customize_size` (
  `size_id` int(11) NOT NULL AUTO_INCREMENT,
  `size_name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customize_size`
--

/*!40000 ALTER TABLE `customize_size` DISABLE KEYS */;
INSERT INTO `customize_size` VALUES (1,'SMALL',150),(2,'MEDIUM',200),(3,'LARGE',250),(4,'EXTRA LARGE',300),(5,'DOUBLE XL',350);
/*!40000 ALTER TABLE `customize_size` ENABLE KEYS */;

--
-- Table structure for table `customize_style`
--

DROP TABLE IF EXISTS `customize_style`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customize_style` (
  `style_id` int(11) NOT NULL AUTO_INCREMENT,
  `style_name` varchar(200) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customize_style`
--

/*!40000 ALTER TABLE `customize_style` DISABLE KEYS */;
INSERT INTO `customize_style` VALUES (1,'POLO SHIRT',150),(2,'SILK SHIRT',200);
/*!40000 ALTER TABLE `customize_style` ENABLE KEYS */;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (2,'hi','Hello, Welcome to our page. How can we accommodate you?','upload/1669057522.png'),(3,'Hello','Hello, Welcome to our page. How can we accommodate you?','upload/1669057564.png'),(4,'How do I return my order?','Yes, we offer private tour package for a minimum of 8 person and maximum of 12 person.You may return your order for a refund or replacement to Clothing Shop Online within 30 days of the purchase date by visiting the returns page. You are responsible for inspecting the garments before performing any alterations or embellishments. Depending on the reason for your return, you may be responsible for shipping and handling charges. We highly recommend saving the receipt or tracking details verifying the return of your goods. If you have a problem or discrepancy (including shortages, damages, etc.) with an order contact us within 72 hours of receiving goods. Please note we are not able to accommodate any style, color or size swap or exchange requests via a replacement order. Items that have been printed, washed, decorated and masks which are final sale items are not eligible for return.','upload/1669057613.png'),(5,'How long will it take to get my refund?','Our warehouse typically takes between 5-7 business days to process a return after being received. Once the return has been processed by our warehouse a credit will be issued to your original payment method within 5-7 business days. In total this entire process can take up to 14 business days. Be sure to save your proof of postage until your return is completed.\n','upload/1669057653.png');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(10) NOT NULL,
  `review` text NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,4,'this is a test rating','Gerald Mico','tricore012@gmail.com','SHIRT-854563'),(2,5,'cool','John Rhenz M. Dubria','johnrenzdubria@gmail.com','SHIRT-945047'),(4,5,'nice','ROMEL SE','romelsegundera12345@gmail.com','SHIRT-945047');
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;

--
-- Table structure for table `secret_question`
--

DROP TABLE IF EXISTS `secret_question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secret_question` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `secret` text NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secret_question`
--

/*!40000 ALTER TABLE `secret_question` DISABLE KEYS */;
INSERT INTO `secret_question` VALUES (1,'What is your favorite book'),(2,'What is the name of the road you grew up on?'),(3,'What is your mothers maiden name?'),(4,'What is the name of your first/current/favorite pet?'),(5,'What was the first company that you worked for?'),(6,'Where di you meet your spouse?'),(7,'Where did you go to high school/college?'),(8,'What is your favorite food? '),(9,'What city were you born in? '),(10,'Where is your favorite place to vacation? ');
/*!40000 ALTER TABLE `secret_question` ENABLE KEYS */;

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cart`
--

/*!40000 ALTER TABLE `tbl_cart` DISABLE KEYS */;
INSERT INTO `tbl_cart` VALUES (3,3,3,1),(4,4,2,1),(14,10,1,5),(17,1,1,6),(18,5,1,6),(19,3,1,6),(33,2,1,7),(34,3,1,7),(36,2,1,1),(42,1,1,8),(43,2,1,8);
/*!40000 ALTER TABLE `tbl_cart` ENABLE KEYS */;

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL,
  `code` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order`
--

/*!40000 ALTER TABLE `tbl_order` DISABLE KEYS */;
INSERT INTO `tbl_order` VALUES (1,2,998,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','FAILED DELIVERY','2022-10-31 19:37:49',0),(2,1,998,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','FOR DELIVERY','2022-10-31 19:40:04',0),(3,1,2495,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','FOR PICKUP','2022-10-31 20:34:12',0),(4,2,150,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-11-02 11:37:20',0),(5,1,5489,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-11-18 17:32:23',0),(6,5,1996,'Romel Lonzaga Segundera','','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','DELIVERED','2022-12-09 04:25:46',0),(7,2,948,'Romel Lonzaga Segundera','','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1500','PHILIPPINES','PAYPAL','PENDING','2022-12-09 10:37:23',0),(8,2,948,'Romel Lonzaga Segundera','','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','PENDING','2022-12-09 10:37:58',0),(9,6,1547,'Romel Lonzaga Segundera','','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','PENDING','2022-12-09 10:41:17',0),(10,2,1896,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 06:19:39',0),(11,2,1896,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','96166','FOR PACKING','0000-00-00 00:00:00',2022),(12,2,399,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','90891','FOR PACKING','0000-00-00 00:00:00',2022),(13,2,948,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 06:29:55',74941),(14,2,948,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 06:30:54',92825),(15,2,948,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 06:38:05',90091),(16,2,798,'Gerald Mic','tricore012@gmail.com','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 06:41:26',99788),(17,2,948,'Gerald Mico Mico devcore','tricore012@gmail.com','10 U206','Tarraville Subdivision','Novaliches,Quezon City','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-11 07:19:17',97828),(18,2,549,'Gerald Mico Mico devcore','tricore012@gmail.com','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-15 19:27:16',80178),(19,2,899,'DUBSSS Dubria','','blk 11 lot 9 las maria st pembo','Manila','Metro Manila','16534','PHILIPPINES','PAYPAL','PENDING','2022-12-16 01:36:25',0),(20,7,948,'Romel Segundera','','testing','Makati','Metro Manila','16534','PHILIPPINES','PAYPAL','PENDING','2022-12-16 01:51:46',0),(21,7,948,'sickdroptest','','testing','Makati','Metro Manila','16534','PHILIPPINES','PAYPAL','PENDING','2022-12-16 01:52:57',0),(22,1,2445,'Gerald Mico Mico devcore','','10 U206','Bunawan','Agusan del Sur','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-16 04:22:08',0),(23,1,2844,'Toggle MiniMap Minimap','','Makati','Makati','Metro Manila','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-16 04:11:16',0),(24,2,1297,'Toggle Switch','tricore012@gmail.com','Makati','Makati','Metro Manila','1101','PHILIPPINES','PAYPAL','PENDING','2022-12-16 04:13:36',90877),(25,2,849,'dubria','','makati','makati','Metro Manila','1630','PHILIPPINES','PAYPAL','FOR PACKING','2022-12-16 04:46:15',0),(26,2,849,'Romel Lonzaga Segundera','rsegundera17@gmail.com','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','PENDING','2022-12-16 04:49:23',91906),(27,2,849,'hhh','johnrenzdubria@gmail.com','makati','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','PENDING','2022-12-16 04:50:29',87706),(28,8,849,'Romel Lonzaga Segundera','','Zone 1, Grp. 2, Minipark','Taguig','Metro Manila','1630','PHILIPPINES','PAYPAL','DELIVERED','2022-12-16 05:58:37',0);
/*!40000 ALTER TABLE `tbl_order` ENABLE KEYS */;

--
-- Table structure for table `tbl_order_item`
--

DROP TABLE IF EXISTS `tbl_order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order_item`
--

/*!40000 ALTER TABLE `tbl_order_item` DISABLE KEYS */;
INSERT INTO `tbl_order_item` VALUES (1,1,2,499,1),(2,1,3,499,1),(3,2,3,499,1),(4,2,4,499,1),(5,3,3,499,2),(6,3,4,499,1),(7,3,2,499,1),(8,3,7,499,1),(9,4,12,150,1),(10,5,3,499,2),(11,5,4,499,1),(12,5,2,499,7),(13,5,7,499,1),(14,6,1,499,1),(15,6,2,499,1),(16,6,3,499,1),(17,6,10,499,1),(18,7,3,549,1),(19,7,2,399,1),(20,8,3,549,1),(21,8,2,399,1),(22,9,1,499,1),(23,9,5,499,1),(24,9,3,549,1),(25,10,3,549,2),(26,10,2,399,1),(27,10,4,399,1),(28,11,3,549,2),(29,11,2,399,1),(30,11,4,399,1),(31,12,4,399,1),(32,13,4,399,1),(33,13,3,549,1),(34,14,3,549,1),(35,14,4,399,1),(36,15,3,549,1),(37,15,4,399,1),(38,16,4,399,2),(39,17,2,399,1),(40,17,3,549,1),(41,18,3,549,1),(42,19,1,500,1),(43,19,2,399,1),(44,20,2,399,1),(45,20,3,549,1),(46,21,2,399,1),(47,21,3,549,1),(48,22,3,549,3),(49,22,4,399,2),(50,23,3,549,3),(51,23,4,399,2),(52,23,2,399,1),(53,24,4,399,2),(54,24,8,499,1),(55,25,1,450,1),(56,25,2,399,1),(57,26,1,450,1),(58,26,2,399,1),(59,27,1,450,1),(60,27,2,399,1),(61,28,1,450,1),(62,28,2,399,1);
/*!40000 ALTER TABLE `tbl_order_item` ENABLE KEYS */;

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_payment`
--

/*!40000 ALTER TABLE `tbl_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_payment` ENABLE KEYS */;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (1,'Bootleg Wiz','SHIRT-945047','SHIRT','Medium','upload/1667240881.jpg',500.00),(2,'Rainbow','SHIRT-854563','SHIRT','Small','upload/1667240933.jpg',250.00),(3,'That Sick','SHIRT-781737','SHIRT','Large','upload/1667240952.jpg',549.00),(4,'Sick back','SHIRT-861531','SHIRT','Small','upload/1667240975.jpg',100.00),(5,'Donald Duck','SHIRT-761687','SHIRT','Medium','upload/1667241002.jpg',499.00),(6,'Red Sick','SHIRT-709431','SHIRT','Large','upload/1667241031.jpg',549.00),(7,'Ghost','SHIRT-738636','SHIRT','Small','upload/1667241077.jpg',399.00),(8,'Dont Cry','SHIRT-767292','SHIRT','Medium','upload/1667241105.jpg',499.00),(9,'Back on black','SHIRT-751718','SHIRT','Medium','upload/1667241137.jpg',499.00);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;

--
-- Table structure for table `update_price`
--

DROP TABLE IF EXISTS `update_price`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `update_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(12) NOT NULL,
  `price` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `update_price`
--

/*!40000 ALTER TABLE `update_price` DISABLE KEYS */;
INSERT INTO `update_price` VALUES (1,1,250),(2,1,500),(3,1,500),(4,1,600),(5,1,500),(6,1,450),(7,1,500),(8,1,450),(9,2,250),(10,4,100),(11,1,500),(12,2,250);
/*!40000 ALTER TABLE `update_price` ENABLE KEYS */;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `province` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(250) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'tricore012@gmail.com','21232f297a57a5a743894a0e4a801fc3','Gerald Mico','Agusan del Norte','Cabadbaran',75413,'ACTIVE',3,'admin','2022-11-10'),(2,'johnrenzdubria@gmail.com','21232f297a57a5a743894a0e4a801fc3','John Rhenz M. Dubria','Metro Manila','Makati',82398,'ACTIVE',1,'Super book','2022-12-08'),(3,'admin@gmail.com','21232f297a57a5a743894a0e4a801fc3','asdasd','','',83052,'INACTIVE',1,'Super book','2022-12-08'),(5,'romelsegundera12345@gmail.com','21232f297a57a5a743894a0e4a801fc3','ROMEL SE','Metro Manila','Taguig',85699,'ACTIVE',1,'superbook','2022-12-09'),(7,'sickdropt@gmail.com','f0eb17f1b5c5a9290e84789dd20a0c6e','sickdroptest','Metro Manila','Makati',68606,'ACTIVE',1,'Super book','2022-12-16'),(8,'testsysickdrop@gmail.com','53b2f21381c7bf8e9f1a762e64b1c17a','TESTSICKDROPS','Metro Manila','Makati',89839,'ACTIVE',1,'superbook','2022-12-16');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

--
-- Dumping routines for database 'u659776478_sickdrops'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-01-06  1:51:56
