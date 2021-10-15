-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 02:14:59
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_informatica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `origen` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_marca`, `marca`, `origen`) VALUES
(1, 'acer', 'importado'),
(3, 'hp', 'nacional'),
(5, 'dell', 'importado'),
(6, 'samsung', 'nacional'),
(36, 'dfghs', 'hfsghfgh'),
(50, 'sdf', 'aaaa'),
(52, 'asus', 'corea'),
(53, 'onn', 'china'),
(54, 'genius', 'china'),
(55, 'exo', 'argentina'),
(56, 'cruzer', 'china'),
(57, 'sonic', 'ssss');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(60) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto`, `id_marca`, `precio`) VALUES
(31, 'teclado', 1, 5000),
(32, 'mouse', 5, 70),
(34, 'monitor', 6, 7500),
(36, 'h', 36, 9),
(40, 'parlantes', 1, 7777),
(41, 'fffff', 3, 8),
(42, 'monitor', 5, 8858),
(43, 'notebook', 6, 900000),
(44, 'mouse', 3, 900),
(45, 'mv', 36, 6),
(46, 'notebook', 1, 212123),
(47, 'notebook', 6, 3334342),
(48, 'teclado', 3, 87000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`email`, `clave`) VALUES
('a@gmail.com', '$2y$10$g3dSktQHUtWAq487aJI.mO0mV1e339qEnFxhuF0z8ATR9sAuvffRK'),
('aeio@gmail.com', '$2y$10$BA.AkKpdR8N7EltEvanR2upH2/fzhLdtbRCpJFWMeJItZvFDBwUNC'),
('awww@gmail.com', '$2y$10$Uu9WFDf7c4.W0GyTioJdperAPdb6rgatSQWG5qWtljhYmeJLG65bq'),
('d@gmail.com', '$2y$10$Wa3TnoTbaiA4EZjabh1oPuiQgcbmiq7P0LWSt4Tipsd19TMBb1Kt.'),
('dff@gmail.com', '$2y$10$XqwmXXS34tC3I6J2pM3jyO0L3Olp4N.XidnQUXAM0BiPa2GKwEh4C'),
('dfgyh@gmail.com', '$2y$10$HInR7.S2RRW21h9eqijdu.yCx9zLC4lZD2wf9yuHCXPriitInU8xm'),
('dp@gmail.com', '$2y$10$DzBpeetUReID6Kc9HGYvhe5cAYMOa9jiSnmeazr8vgS84yR204GrO'),
('dtghfgh@gmail.com', '$2y$10$EUe/2rDi8JBQWcUip/.M5.6dBUpBWdy1wL62DwSYOpSycDQ7DVsqW'),
('e@gmail.com', '$2y$10$mNZRc/bZu4EO8OJNI4T60u3zu8D9HipJ2oweDyVIBqIQjT/JNUg.K');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `categoria` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
