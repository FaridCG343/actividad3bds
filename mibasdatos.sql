-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para libreria
CREATE DATABASE IF NOT EXISTS `libreria` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `libreria`;

-- Volcando estructura para tabla libreria.edicion
CREATE TABLE IF NOT EXISTS `edicion` (
  `ISBN` int(11) NOT NULL,
  `año` int(4) DEFAULT NULL,
  `idioma` varchar(10) DEFAULT NULL,
  `id_titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `id_titulo` (`id_titulo`),
  CONSTRAINT `edicion_ibfk_1` FOREIGN KEY (`id_titulo`) REFERENCES `libro` (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla libreria.edicion: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `edicion` DISABLE KEYS */;
INSERT INTO `edicion` (`ISBN`, `año`, `idioma`, `id_titulo`) VALUES
	(454, 124, 'español', 'Memorias de un amigo imaginario'),
	(1234, 2005, 'español', 'Blanca nievas y los 7 enanos'),
	(1235, 2005, 'ingles', 'Blanca nievas y los 7 enanos'),
	(1236, 2007, 'chino', 'Blanca nievas y los 7 enanos'),
	(1237, 2002, 'español', 'Coraline'),
	(1238, 2002, 'ingles', 'Coraline'),
	(1239, 2010, 'japones', 'Coraline'),
	(1240, 2016, 'español', 'El silencio de la ciudad blanca'),
	(1241, 2015, 'ingles', 'El silencio de la ciudad blanca'),
	(1242, 2019, 'ingles', 'El silencio de la ciudad blanca'),
	(1243, 1997, 'español', 'Harry potter y la piedra filosofal'),
	(1244, 2000, 'ingles', 'Harry potter y la piedra filosofal'),
	(1245, 2010, 'japones', 'Harry potter y la piedra filosofal'),
	(1246, 2015, 'español', 'Memorias de un amigo imaginario'),
	(1247, 2015, 'ingles', 'Memorias de un amigo imaginario'),
	(1248, 2016, 'chino', 'Memorias de un amigo imaginario');
/*!40000 ALTER TABLE `edicion` ENABLE KEYS */;

-- Volcando estructura para tabla libreria.libro
CREATE TABLE IF NOT EXISTS `libro` (
  `titulo` varchar(100) NOT NULL DEFAULT 'hola',
  `genero` varchar(15) DEFAULT NULL,
  `referencias` varchar(15) DEFAULT NULL,
  `fecha_reseña` date DEFAULT NULL,
  `revista_reseña` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`titulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla libreria.libro: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `libro` DISABLE KEYS */;
INSERT INTO `libro` (`titulo`, `genero`, `referencias`, `fecha_reseña`, `revista_reseña`) VALUES
	('Blanca nievas y los 7 enanos', 'fantasia', 'willhelm j.g', '2020-01-30', 'up&down'),
	('blanca nieves', 'fantasia', 'castillo', '2020-11-12', 'muy interesante'),
	('Coraline', 'terror y mister', 'neil gaiman', '2000-08-14', 'revista monolito'),
	('El silencio de la ciudad blanca', 'misterio', 'Eva Garcia', '2018-12-06', 'UP&DOWN'),
	('Harry potter y la piedra filosofal', 'fantasia', 'Rowling J.K', '2003-12-06', 'Revista de libros'),
	('Memorias de un amigo imaginario', 'novela psicolog', 'mattew dicks', '2002-07-30', 'muy interesante');
/*!40000 ALTER TABLE `libro` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
