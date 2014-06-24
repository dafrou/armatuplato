-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2014 a las 20:04:15
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `armatuplato`
--

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
  `nombre` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `habilitado` tinyint(1) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `precio`, `habilitado`, `foto`, `descripcion`) VALUES
(1, 'Arroz primavera', 500, 1, 'page2-img1.jpg', '500 gramos '),
(2, 'Coctel de frutas', 750, 1, 'page2-img2.jpg', 'Variadas frutas de la temporada'),
(3, 'Escalopa', 1200, 1, 'page2-img3.jpg', 'Pescado, res o pollo'),
(4, 'Ensalada mixta', 600, 1, 'page2-img4.jpg', 'Variadas ensaladas de la temporada'),
(5, 'Espagueti ', 550, 1, 'page2-img5.jpg', 'Salsa alfredo'),
(6, 'Pollo', 1000, 1, 'page2-img6.jpg', 'Asado, al juego, cocido'),
(7, 'Pescado salteado', 1600, 1, 'page2-img7.jpg', 'Salmon, Reyneta'),
(8, 'Consome', 550, 1, 'page2-img8.jpg', 'Esparrago, pollo, choclo'),
(9, 'Cazuela', 1747, 1, 'page2-img9.jpg', 'Vacuno o ave'),
(10, 'Carne de res', 1100, 1, 'page2-img10.jpg', 'Asada');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasena`) VALUES
(1, 'christianmezah11@gmail.com', 'a64aa317d35fea20049f11e47be6481e'),
(6, 'cmeza@eurocorp.cl', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'kdmxs6@gmail.com', 'afd36207986443eb9a7ffe648fa8b4ac'),
(8, 'dafrou@hotmail.com', 'd2d138388d045729faeaf53c55e0f3cd'),
(9, 'lakastora@gmail.com', 'db67ece2c1ffddf9f2ac146265b30db5'),
(10, 'rcofre@eurocorp.cl', 'e10adc3949ba59abbe56e057f20f883e');

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
