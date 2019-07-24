-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 02:57:27
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

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
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(4, 'prueba', 'esta es una prueba', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(0, 'BiografÃ­a de HerÃ¡clito', '* Adjunto mi tarea de filosofia\r\n*Adjunto mi tarea de religion', 11433, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'traicionero-corazon serrano.docx'),
(0, 'mix dinamita', '123', 13445, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Mix dinamita.docx'),
(0, 'ddd', 'dddd', 13445, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Mix dinamita.docx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grado`
--

CREATE TABLE `tbl_grado` (
  `id_grado` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_grado`
--

INSERT INTO `tbl_grado` (`id_grado`, `nombre`) VALUES
(1, 'Primero'),
(2, 'Segundo'),
(3, 'Tercero'),
(4, 'Cuarto'),
(5, 'Quinto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_acceso`
--

CREATE TABLE `tb_acceso` (
  `id_menu` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_alumno`
--

CREATE TABLE `tb_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cumpleanos` varchar(50) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tb_alumno`
--

INSERT INTO `tb_alumno` (`id_alumno`, `nombre`, `apellido`, `cumpleanos`, `grado`, `nivel`) VALUES
(1, 'anthony', 'aguirre ', 'diciembre', '1', 'secundaria'),
(2, 'ads', 'dasda', 'dsf', 'asdasd', 'SECUNDARIA'),
(3, 'gg', 'agg', 'diciembre', '2', 'secundaria'),
(4, 'anibal', 'hinostroza', 'diciembre', '1', 'PRIMARIA'),
(5, 'carlos', 'laban ', 'asdas', 'adasd', 'adsa'),
(6, 'alejandro', 'blujme', 'diceimbre', 'adsa', '12e1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_curso`
--

CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `tb_login`
--

INSERT INTO `tb_login` (`username`, `password`, `type`) VALUES
('administrador', '123', 'administrador'),
('profesor', '123', 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_perfil`
--

CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_grado`
--
ALTER TABLE `tbl_grado`
  ADD PRIMARY KEY (`id_grado`);

--
-- Indices de la tabla `tb_acceso`
--
ALTER TABLE `tb_acceso`
  ADD UNIQUE KEY `id_menu` (`id_menu`) USING BTREE,
  ADD UNIQUE KEY `id_perfil` (`id_perfil`) USING BTREE;

--
-- Indices de la tabla `tb_alumno`
--
ALTER TABLE `tb_alumno`
  ADD PRIMARY KEY (`id_alumno`) USING BTREE;

--
-- Indices de la tabla `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`id_curso`) USING BTREE;

--
-- Indices de la tabla `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`) USING BTREE;

--
-- Indices de la tabla `tb_perfil`
--
ALTER TABLE `tb_perfil`
  ADD PRIMARY KEY (`id_perfil`) USING BTREE;

--
-- Indices de la tabla `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD KEY `id_perfil` (`id_perfil`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_grado`
--
ALTER TABLE `tbl_grado`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_alumno`
--
ALTER TABLE `tb_alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
