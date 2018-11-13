/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : intranet

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-11-12 22:00:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_documentos
-- ----------------------------
DROP TABLE IF EXISTS `tbl_documentos`;
CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_documentos
-- ----------------------------
INSERT INTO `tbl_documentos` VALUES ('4', 'prueba', 'esta es una prueba', '171758', 'application/pdf', 'EJEMPLO.pdf');
INSERT INTO `tbl_documentos` VALUES ('5', 'BiografÃ­a de HerÃ¡clito', '* Adjunto mi tarea de filosofia\r\n*Adjunto mi tarea de religion', '11433', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'traicionero-corazon serrano.docx');
INSERT INTO `tbl_documentos` VALUES ('6', 'mix dinamita', '123', '13445', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Mix dinamita.docx');
INSERT INTO `tbl_documentos` VALUES ('7', 'ddd', 'dddd', '13445', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Mix dinamita.docx');
INSERT INTO `tbl_documentos` VALUES ('8', 'anthony', 'd1d1d1', '62732', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'ANEXO 05.docx');
INSERT INTO `tbl_documentos` VALUES ('9', 'anthony', 'esta es la teoria de todos', '419313', 'application/pdf', 'TeorÃ­a.pdf');

-- ----------------------------
-- Table structure for tb_acceso
-- ----------------------------
DROP TABLE IF EXISTS `tb_acceso`;
CREATE TABLE `tb_acceso` (
  `id_menu` int(11) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  UNIQUE KEY `id_menu` (`id_menu`) USING BTREE,
  UNIQUE KEY `id_perfil` (`id_perfil`) USING BTREE,
  CONSTRAINT `tb_acceso_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`),
  CONSTRAINT `tb_acceso_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `tb_menu` (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_acceso
-- ----------------------------

-- ----------------------------
-- Table structure for tb_alumno
-- ----------------------------
DROP TABLE IF EXISTS `tb_alumno`;
CREATE TABLE `tb_alumno` (
  `id_alumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cumpleanos` varchar(50) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `nivel` varchar(50) NOT NULL,
  PRIMARY KEY (`id_alumno`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_alumno
-- ----------------------------
INSERT INTO `tb_alumno` VALUES ('1', 'anthony', 'aguirre ', 'diciembre', '1', 'secundaria');
INSERT INTO `tb_alumno` VALUES ('2', 'ads', 'dasda', 'dsf', 'asdasd', 'SECUNDARIA');
INSERT INTO `tb_alumno` VALUES ('3', 'gg', 'agg', 'diciembre', '2', 'secundaria');
INSERT INTO `tb_alumno` VALUES ('4', 'anibal', 'hinostroza', 'diciembre', '1', 'PRIMARIA');
INSERT INTO `tb_alumno` VALUES ('5', 'carlos', 'laban ', 'asdas', 'adasd', 'adsa');
INSERT INTO `tb_alumno` VALUES ('6', 'alejandro', 'blujme', 'diceimbre', 'adsa', '12e1');
INSERT INTO `tb_alumno` VALUES ('7', 'nombre', 'apellido', 'cumpleaños ', 'grado', ' nivel');

-- ----------------------------
-- Table structure for tb_curso
-- ----------------------------
DROP TABLE IF EXISTS `tb_curso`;
CREATE TABLE `tb_curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_curso`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_curso
-- ----------------------------
INSERT INTO `tb_curso` VALUES ('1', 'Aritmetica');
INSERT INTO `tb_curso` VALUES ('2', 'Algebra');
INSERT INTO `tb_curso` VALUES ('3', 'Geometria');
INSERT INTO `tb_curso` VALUES ('4', 'trigonometria');
INSERT INTO `tb_curso` VALUES ('5', 'Razonamiento Matemático');
INSERT INTO `tb_curso` VALUES ('6', 'Lenguaje y comunicaciòn');
INSERT INTO `tb_curso` VALUES ('7', 'Razonamiento Verbal');
INSERT INTO `tb_curso` VALUES ('8', 'Fisica');
INSERT INTO `tb_curso` VALUES ('9', 'Quimica');

-- ----------------------------
-- Table structure for tb_login
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES ('administrador', '123', 'administrador');
INSERT INTO `tb_login` VALUES ('profesor', '123', 'docente');

-- ----------------------------
-- Table structure for tb_menu
-- ----------------------------
DROP TABLE IF EXISTS `tb_menu`;
CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_menu
-- ----------------------------

-- ----------------------------
-- Table structure for tb_perfil
-- ----------------------------
DROP TABLE IF EXISTS `tb_perfil`;
CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_perfil
-- ----------------------------

-- ----------------------------
-- Table structure for tb_usuario
-- ----------------------------
DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE `tb_usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `estado` bit(1) DEFAULT NULL,
  `id_perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  KEY `id_perfil` (`id_perfil`) USING BTREE,
  CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of tb_usuario
-- ----------------------------
