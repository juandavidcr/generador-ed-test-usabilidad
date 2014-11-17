-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2014 a las 18:20:47
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `seme_1_4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE IF NOT EXISTS `cuestionario` (
  `idCuestionario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PruebaUsabildad_idPruebaUsabildad` int(10) unsigned NOT NULL,
  `Pregunta` varchar(256) DEFAULT NULL,
  `Tiempo_Optimo` int(10) unsigned DEFAULT NULL,
  `Tiempo_Acaptable` int(10) unsigned DEFAULT NULL,
  `Tiempo_pregunta` int(10) unsigned DEFAULT NULL,
  `Calificacion` int(10) unsigned DEFAULT NULL,
  `Comentario` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`idCuestionario`),
  KEY `Cuestionario_FKIndex1` (`PruebaUsabildad_idPruebaUsabildad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`idCuestionario`, `PruebaUsabildad_idPruebaUsabildad`, `Pregunta`, `Tiempo_Optimo`, `Tiempo_Acaptable`, `Tiempo_pregunta`, `Calificacion`, `Comentario`) VALUES
(1, 6, 'a que horas sales por el pan', 15, 25, NULL, NULL, NULL),
(2, 6, 'Que comen los pajaritos ', 25, 45, NULL, NULL, NULL),
(5, 5, 'ingrese su nombre y contraseÃ±a para entrar en el sistema', 154, 240, NULL, NULL, NULL),
(8, 5, 'hola ke hace', 15, 25, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE IF NOT EXISTS `proyecto` (
  `idProyecto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usuario_idUsuario` int(10) unsigned NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Tipo` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idProyecto`),
  KEY `Proyecto_FKIndex1` (`Usuario_idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `Usuario_idUsuario`, `Nombre`, `Tipo`) VALUES
(6, 1, 'Prueba A', 'Videojuegos'),
(7, 1, 'Proyecto B', 'Heroclix'),
(8, 2, 'Proyecto A', 'ALFA'),
(9, 2, 'Proyecto B', 'OMEGA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebausabildad`
--

CREATE TABLE IF NOT EXISTS `pruebausabildad` (
  `idPruebaUsabildad` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Proyecto_idProyecto` int(10) unsigned NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Tiempo_prueba` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idPruebaUsabildad`),
  KEY `PruebaUsabildad_FKIndex1` (`Proyecto_idProyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `pruebausabildad`
--

INSERT INTO `pruebausabildad` (`idPruebaUsabildad`, `Proyecto_idProyecto`, `Nombre`, `Tiempo_prueba`) VALUES
(3, 7, 'Prueba C', NULL),
(4, 7, 'Prueba D', NULL),
(5, 6, 'Prueba F', NULL),
(6, 8, 'Prueba 3', NULL),
(7, 8, 'Prueba 4', NULL),
(17, 9, 'Prueba C en el proyecto B', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) DEFAULT NULL,
  `Pass` varchar(25) DEFAULT NULL,
  `Correo` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Pass`, `Correo`) VALUES
(1, 'javier', '123', 'grom_gemscri@hotmail.com'),
(2, 'santi', '123', 'santi@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD CONSTRAINT `cuestionario_ibfk_1` FOREIGN KEY (`PruebaUsabildad_idPruebaUsabildad`) REFERENCES `pruebausabildad` (`idPruebaUsabildad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pruebausabildad`
--
ALTER TABLE `pruebausabildad`
  ADD CONSTRAINT `pruebausabildad_ibfk_1` FOREIGN KEY (`Proyecto_idProyecto`) REFERENCES `proyecto` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
