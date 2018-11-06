-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2018 a las 16:41:11
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_acceso`
--

CREATE TABLE `tb_acceso` (
  `id_menu` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_curso`
--

INSERT INTO `tb_curso` (`id_curso`, `nombre`) VALUES
(1, 'Aritmetica'),
(2, 'Algebra'),
(3, 'Geometria'),
(4, 'trigonometria'),
(5, 'Razonamiento Matemático'),
(6, 'Lenguaje y comunicaciòn'),
(7, 'Razonamiento Verbal'),
(8, 'Fisica'),
(9, 'Quimica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_login`
--

CREATE TABLE `tb_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `type`) VALUES
('admin', '123', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_perfil`
--

CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_acceso`
--
ALTER TABLE `tb_acceso`
  ADD UNIQUE KEY `id_menu` (`id_menu`),
  ADD UNIQUE KEY `id_perfil` (`id_perfil`);

--
-- Indices de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_perfil` (`id_perfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_perfil`
--
ALTER TABLE `tb_perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_acceso`
--
ALTER TABLE `tb_acceso`
  ADD CONSTRAINT `tb_acceso_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`),
  ADD CONSTRAINT `tb_acceso_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`);

--
-- Filtros para la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
