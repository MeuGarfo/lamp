-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: lamp
-- ------------------------------------------------------
-- Server version 	5.5.5-10.0.36-MariaDB-0ubuntu0.16.04.1
-- Date: Mon, 08 Oct 2018 14:10:16 -0300

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
-- Table structure for table `produto`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empresa` longtext,
  `produto` longtext,
  `disco` longtext,
  `ram` longtext,
  `moeda` longtext,
  `preco` longtext,
  `created_at` longtext,
  `updated_at` longtext,
  `url` longtext,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `produto` VALUES (1,'OVH','VPS SSD 2','40','4','euro','8.60','1538600602','1538600602','https://www.ovh.pt/vps/vps-ssd.xml'),(2,'Digital Ocean','Standard Droplet','80','4','dolar','20','1538600702','1538600702','https://www.digitalocean.com/pricing/'),(3,'Google Cloud','LAMP','10','3.75','dolar','24.67','1538600797','1538600797','https://console.cloud.google.com/marketplace/details/click-to-deploy-images/lamp'),(4,'Hostgator Brasil','VPS 4000','165','4','real','220.19','1538601045','1538601045','https://www.hostgator.com.br/servidor-vps'),(5,'UpCloud','Preconfigured cloud servers','80','4','dolar','20','1538601242','1538601242','https://www.upcloud.com/pricing/'),(6,'Linode','Linode 4GB','80','4','dolar','20','1538601291','1538601291','https://www.linode.com/pricing'),(7,'AlibabaCloud','ECS Starter Package','60','4','dolar','39','1538601404','1538601404','https://www.alibabacloud.com/product/ecs'),(8,'Locaweb','VPS 4GB','60','4','real','107.90','1538601494','1538601494','https://www.locaweb.com.br/cloud/vps-locaweb/'),(9,'Leaseweb','Server Pack L','80','4','euro','17.99','1538601568','1538601568','https://www.leaseweb.com/cloud/virtual-server'),(10,'UOL Host','UOL Cloud','50','4','real','129.90','1538601702','1538601702','https://uolhost.uol.com.br/uol-cloud-computing.html'),(11,'Hostinger Brasil','Server VPS BRASIL 4','80','4','real','99','1538601859','1538601859','https://www.hostinger.com.br/servidor-vps'),(12,'WebLink','VPS 4','80','4','real','112','1538601935','1538601935','https://www.weblink.com.br/servidores'),(13,'AwardSpace','Advanced VPS','100','4','euro','40','1538602000','1538602000','https://www.awardspace.com/web-hosting/vps-cloud-hosting/'),(14,'DreamHost','Professional VPS ','120','4','dolar','55','1538602108','1538602108','https://www.dreamhost.com/hosting/vps/'),(15,'Clic Rapido','Fibra de 10MB','40','4','real','33.30','1538645892','1538645892',''),(16,'Embratel','Embratel Cloud','20','4','real','142.21','1538650541','1538650541','http://portal.embratel.com.br/cloud/cloud-server/'),(17,'Embratel','Embratel Cloud','20','512','real','34.11','1538650617','1538650617','http://portal.embratel.com.br/cloud/cloud-server/'),(18,'Digital Ocean','Standard Droplet','25','1','dolar','5','1538650869','1538650869','https://www.digitalocean.com/pricing/'),(19,'UpCloud','Preconfigured cloud servers','25','1','dolar','5','1538650942','1538650942','https://www.upcloud.com/pricing/'),(20,'Linode	','Linode 1GB','25','1','dolar','5','1538650983','1538650983','https://www.linode.com/pricing'),(21,'Leaseweb	','Server Pack S','40','1','euro','4.99','1538651039','1538651039','https://www.leaseweb.com/cloud/virtual-server'),(22,'Google Cloud','f1-micro','10','0.6','dolar','5.58','1538651662','1538651662','https://cloud.google.com/products/calculator/#id=27be2440-64ec-4bee-b85e-0e9a4252c8df'),(23,'Hostinger Brasil	','Server VPS BRASIL 1','20','1','real','28','1538651721','1538651721','https://www.hostinger.com.br/servidor-vps'),(24,'WebLink','VPS 1','20','1','real','28','1538651815','1538651815','https://www.weblink.com.br/servidores'),(25,'UOL Host','Uol Cloud','50','0.5','real','19','1538651862','1538651862','https://uolhost.uol.com.br/uol-cloud-computing.html'),(26,'AlibabaCloud	','ECS Starter Package','40','1','dolar','4.50','1538651908','1538651908','https://www.alibabacloud.com/product/ecs'),(27,'AwardSpace	','Advanced VPS','25','1','euro','10','1538651952','1538651952','https://www.awardspace.com/web-hosting/vps-cloud-hosting/'),(28,'DreamHost','Basic VPS ','30','1','dolar','13.75','1538651991','1538651991','https://www.dreamhost.com/hosting/vps/'),(29,'Hostgator Brasil	','VPS 1000','60','1','real','89.29','1538652034','1538652034','https://www.hostgator.com.br/servidor-vps'),(30,'	Locaweb	','VPS 1GB','20','0.5','real','17.90','1538652074','1538652074','https://www.locaweb.com.br/cloud/vps-locaweb/'),(31,'	OVH','VPS SSD 1','20','2','dolar','3.35','1538653761','1538653761','https://www.ovh.com/world/vps/vps-ssd.xml'),(32,'OVH','VPS SSD 2','40','4','dolar','6.87','1538653807','1538653807','https://www.ovh.com/world/vps/vps-ssd.xml'),(33,'Biz.nf','Advanced VPS','100','4','dolar','42.95','1539018276','1539018276','https://www.biz.nf/vps-hosting.php'),(34,'Biz.nf','Starter VPS','25','1','dolar','12.95','1539018367','1539018367','https://www.biz.nf/vps-hosting.php'),(35,'Biz.nf','Pro VPS','50','2','dolar','22.95','1539018437','1539018437','https://www.biz.nf/vps-hosting.php');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Mon, 08 Oct 2018 14:10:16 -0300
