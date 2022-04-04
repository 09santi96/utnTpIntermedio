-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-03-2022 a las 20:01:17
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpintermedio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `estado_pedido` varchar(50) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'Procesando',
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_file` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_order`, `estado_pedido`, `titulo`, `descripcion`, `fecha`, `order_file`) VALUES
(35, 'Finalizado', 'primer pedido', 'se adjunta datos en pdf', '2022-03-30 16:04:00', '624206ad3b1d80.74875354.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` int NOT NULL,
  `usersPwd` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `email`, `dni`, `usersPwd`) VALUES
(9, 'admin', 'admin@gmail.com', 99999999, '$2y$10$gEU6gO0XiPosbQtIAyXa1uwza1BOkVrM2FCL/G7tIQo1RKlA5MMAa'),
(15, '20123456', 'admin3@gmail.com', 20123456, '$2y$10$C/LTc6eJx59YNkeCHBRJi.cKbojcFP6AJlF66/v/MrYEIw2FchHbS'),
(13, '18123456', 'admin2@gmail.com', 18123456, '$2y$10$S2kz5qWF0d6I2RAd13qmSOrWo0BN4Gg2Jce5EBNZw.6ek0iHQEOaG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
