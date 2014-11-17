-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2014 a las 20:39:25
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `Cuestionario`
--

CREATE TABLE IF NOT EXISTS `Cuestionario` (
`idCuestionario` int(10) unsigned NOT NULL,
  `PruebaUsabildad_idPruebaUsabildad` int(10) unsigned NOT NULL,
  `Pregunta` varchar(256) DEFAULT NULL,
  `Tiempo_Optimo` int(10) unsigned DEFAULT NULL,
  `Tiempo_Acaptable` int(10) unsigned DEFAULT NULL,
  `Tiempo_pregunta` int(10) unsigned DEFAULT NULL,
  `Calificacion` int(10) unsigned DEFAULT NULL,
  `Comentario` varchar(512) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Cuestionario`
--

INSERT INTO `Cuestionario` (`idCuestionario`, `PruebaUsabildad_idPruebaUsabildad`, `Pregunta`, `Tiempo_Optimo`, `Tiempo_Acaptable`, `Tiempo_pregunta`, `Calificacion`, `Comentario`) VALUES
(35, 26, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL),
(36, 26, 'Cierre el sistema ', 1544, 2404, NULL, NULL, NULL),
(49, 37, 'Te pareciÃ³ bien la interfaz?', 0, 0, NULL, NULL, NULL),
(50, 37, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL),
(51, 37, 'Â¿De quÃ© es el sitio?', 0, 0, NULL, NULL, NULL),
(52, 37, 'Â¿Cuanto tiempo estimas estuviste en el sitio?', 0, 0, NULL, NULL, NULL),
(53, 37, 'Encuentra el botÃ³n salir y vuÃ©lvete a loguear', 10, 20, NULL, NULL, NULL),
(54, 37, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL),
(55, 37, 'Ingrese su nombre y contraseÃ±a para entrar en el sistema', 154, 240, NULL, NULL, NULL),
(56, 37, 'Cierre el sistema ', 1544, 2404, NULL, NULL, NULL),
(57, 37, 'Vayase por unas tortas', 1, 2, NULL, NULL, NULL),
(67, 43, 'p1', 0, 0, NULL, NULL, NULL),
(68, 26, 'Vayase por unas tortas', 1, 2, NULL, NULL, NULL),
(78, 45, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL),
(80, 45, 'Â¿Te gustan los colores de la pÃ¡gina Web?', 0, 0, NULL, NULL, NULL),
(84, 48, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL),
(85, 48, 'Ingrese su nombre y contraseÃ±a para entrar en el sistema', 154, 240, NULL, NULL, NULL),
(86, 54, 'Registrese en la pagina web', 15, 20, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proyecto`
--

CREATE TABLE IF NOT EXISTS `Proyecto` (
`idProyecto` int(10) unsigned NOT NULL,
  `Usuario_idUsuario` int(10) unsigned NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Tipo` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Proyecto`
--

INSERT INTO `Proyecto` (`idProyecto`, `Usuario_idUsuario`, `Nombre`, `Tipo`) VALUES
(6, 1, 'Prueba A', 'Videojuegos'),
(7, 1, 'Proyecto B', 'Heroclix'),
(26, 1, 'SES', 'USABILITY 1'),
(37, 1, 'eviu', 'sistema de evaluacion '),
(38, 2, 'Ptek 2', 'UX');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PruebaUsabildad`
--

CREATE TABLE IF NOT EXISTS `PruebaUsabildad` (
`idPruebaUsabildad` int(10) unsigned NOT NULL,
  `Proyecto_idProyecto` int(10) unsigned NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Tiempo_prueba` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PruebaUsabildad`
--

INSERT INTO `PruebaUsabildad` (`idPruebaUsabildad`, `Proyecto_idProyecto`, `Nombre`, `Tiempo_prueba`) VALUES
(3, 7, 'Prueba C', NULL),
(4, 7, 'Prueba D', NULL),
(26, 6, 'Helix', NULL),
(37, 26, 'MÃ‰TODO HEURÃSTICO', NULL),
(43, 37, 'usabilidad', NULL),
(44, 6, 'porno!!!!!!', NULL),
(45, 38, 'Chamba2', NULL),
(48, 38, 'Buenos Vecinos', NULL),
(53, 38, '2', NULL),
(54, 38, '3', NULL),
(58, 38, '12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(10) unsigned NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Pass` varchar(25) DEFAULT NULL,
  `Correo` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Pass`, `Correo`) VALUES
(1, 'javier', '123', 'grom_gemscri@hotmail.com'),
(2, 'santi', '123', 'santi@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Cuestionario`
--
ALTER TABLE `Cuestionario`
 ADD PRIMARY KEY (`idCuestionario`), ADD KEY `Cuestionario_FKIndex1` (`PruebaUsabildad_idPruebaUsabildad`);

--
-- Indices de la tabla `Proyecto`
--
ALTER TABLE `Proyecto`
 ADD PRIMARY KEY (`idProyecto`), ADD KEY `Proyecto_FKIndex1` (`Usuario_idUsuario`);

--
-- Indices de la tabla `PruebaUsabildad`
--
ALTER TABLE `PruebaUsabildad`
 ADD PRIMARY KEY (`idPruebaUsabildad`), ADD KEY `PruebaUsabildad_FKIndex1` (`Proyecto_idProyecto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Cuestionario`
--
ALTER TABLE `Cuestionario`
MODIFY `idCuestionario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT de la tabla `Proyecto`
--
ALTER TABLE `Proyecto`
MODIFY `idProyecto` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `PruebaUsabildad`
--
ALTER TABLE `PruebaUsabildad`
MODIFY `idPruebaUsabildad` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Cuestionario`
--
ALTER TABLE `Cuestionario`
ADD CONSTRAINT `Cuestionario_ibfk_1` FOREIGN KEY (`PruebaUsabildad_idPruebaUsabildad`) REFERENCES `PruebaUsabildad` (`idPruebaUsabildad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Proyecto`
--
ALTER TABLE `Proyecto`
ADD CONSTRAINT `Proyecto_ibfk_1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `PruebaUsabildad`
--
ALTER TABLE `PruebaUsabildad`
ADD CONSTRAINT `PruebaUsabildad_ibfk_1` FOREIGN KEY (`Proyecto_idProyecto`) REFERENCES `Proyecto` (`idProyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
