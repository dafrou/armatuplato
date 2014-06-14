-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-06-2014 a las 21:37:37
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `armatuplato`
--
CREATE DATABASE IF NOT EXISTS `armatuplato` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `armatuplato`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `compraUsuario_idx` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `habilitado` tinyint(1) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `habilitado`, `foto`, `descripcion`) VALUES
(1, 0, 2366, 1, 'page2-img1', NULL),
(2, 0, 3044, 1, 'page2-img2', NULL),
(3, 0, 2886, 1, 'page2-img3', NULL),
(4, 0, 3629, 1, 'page2-img4', NULL),
(5, 0, 3139, 1, 'page2-img5', NULL),
(6, 0, 2063, 1, 'page2-img6', NULL),
(7, 0, 4787, 1, 'page2-img7', NULL),
(8, 0, 651, 1, 'page2-img8', NULL),
(9, 0, 1747, 1, 'page2-img9', NULL),
(10, 0, 885, 1, 'page2-img10', NULL),
(11, 0, 1310, 1, 'page3-img1', NULL),
(12, 0, 4363, 1, 'page3-img2', NULL),
(13, 0, 1285, 1, 'page3-img3', NULL),
(14, 0, 1326, 1, 'page3-img4', NULL),
(15, 0, 2080, 1, 'page3-img5', NULL),
(16, 0, 1926, 1, 'page3-img6', NULL),
(17, 0, 2856, 1, 'page3-img7', NULL),
(18, 0, 4559, 1, 'page3-img8', NULL),
(19, 0, 4408, 1, 'slider-img1', NULL),
(20, 0, 2869, 1, 'slider-img2', NULL),
(21, 0, 1415, 1, 'slider-img3', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productodecompra`
--

CREATE TABLE IF NOT EXISTS `productodecompra` (
  `producto` int(11) NOT NULL,
  `compra` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  KEY `productoDeCompraCompra_idx` (`compra`),
  KEY `productoDeCompraProducto_idx` (`producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(200) NOT NULL,
  `contrasena` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasena`) VALUES
(1, 'christianmezah11@gmail.com', 'a64aa317d35fea20049f11e47be6481e');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compraUsuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productodecompra`
--
ALTER TABLE `productodecompra`
  ADD CONSTRAINT `productoDeCompraCompra` FOREIGN KEY (`compra`) REFERENCES `compra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `productoDeCompraProducto` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
