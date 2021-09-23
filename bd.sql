-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para crudphp
DROP DATABASE IF EXISTS `crudphp`;
CREATE DATABASE IF NOT EXISTS `crudphp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `crudphp`;

-- Copiando estrutura para tabela crudphp.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela crudphp.generos: ~0 rows (aproximadamente)
DELETE FROM `generos`;
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` (`id`, `nome`) VALUES
	(1, 'Romance'),
	(2, 'Aventura');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;

-- Copiando estrutura para tabela crudphp.livros
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) DEFAULT NULL,
  `genero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_livros_generos` (`genero`),
  CONSTRAINT `FK_livros_generos` FOREIGN KEY (`genero`) REFERENCES `generos` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela crudphp.livros: ~0 rows (aproximadamente)
DELETE FROM `livros`;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` (`id`, `nome`, `genero`) VALUES
	(1, 'Romeu e Julieta', 1),
	(2, 'João e Maria', 2);
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
