-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-03-2022 a las 17:42:38
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
  `estado_pedido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Procesando',
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_order`, `estado_pedido`, `titulo`, `descripcion`, `fecha`, `order_file`) VALUES
(1, 'Finalizado', 'Nuevo pedido', 'pedido para comprar mas pan', '2022-03-09 11:53:00', 'index.php'),
(2, 'Finalizado', 'Pedido de santi', 'mas monitores', '2022-03-26 11:55:00', 'options.htm'),
(3, 'Finalizado', 'pedido de juan', 'mas musica', '2022-03-17 11:58:00', 'DataTables (4).zip'),
(4, 'Finalizado', 'pedido de cesar', 'mas metal!', '0000-00-00 00:00:00', 'PARA DESTRUIR PODER JUDICIAL.xlsx'),
(5, 'Finalizado', 'dsadasd', 'asdasd', '0000-00-00 00:00:00', ''),
(6, 'Procesando', 'dfgfg', 'fgfggf', '0000-00-00 00:00:00', ''),
(7, 'Procesando', 'rgfgfg', 'fgfgf', '0000-00-00 00:00:00', ''),
(8, 'Finalizado', 'pedido 14', 'descripcion de pedido 14', '2022-03-09 14:31:00', 'PARA DESTRUIR PODER JUDICIAL.xlsx'),
(9, 'Procesando', 'rggrgrgr', 'rggrrgrg', '2022-03-28 10:25:00', 'index.php'),
(10, 'Procesando', 'sdasdssss', 'ss', '2022-03-26 10:27:00', 'certifcado 1.pdf'),
(11, 'Procesando', 'sdasd', 'sss', '2022-04-05 10:29:00', 'index.php'),
(12, 'Procesando', 'fdfadffas', 'asdasd', '2022-03-24 12:33:00', 'index.php'),
(13, 'Procesando', 'sdasd', '74747', '7474-07-04 04:47:00', 'GMT20220218-125852_Recording_1920x1080.mp4'),
(14, 'Procesando', 'hola manola', 'manolita', '2022-03-30 14:38:00', NULL);

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
  `usersPwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `uq_email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `email`, `dni`, `usersPwd`) VALUES
(9, 'admin', 'admin@gmail.com', 99999999, '$2y$10$gEU6gO0XiPosbQtIAyXa1uwza1BOkVrM2FCL/G7tIQo1RKlA5MMAa'),
(13, '18123456', 'admin2@gmail.com', 18123456, '$2y$10$S2kz5qWF0d6I2RAd13qmSOrWo0BN4Gg2Jce5EBNZw.6ek0iHQEOaG'),
(14, '20123456', 'admin3@gmail.com', 20123456, '$2y$10$D70xGC2q6siC59VDAGH8EOdaVHNmroB0rzU2/IkR03y/8nWfr5xnq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
